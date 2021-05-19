<?php
function getData($fileName, $cleanProccessingOn = false){
    //This function receive file name, and clean proccessing as prameters
    // and return the associative array which include all contents from the assigned file.
    $dataArr = array();
    $file = fopen("$fileName", "r") or die("The programme cannot open file.");
    flock($file, LOCK_SH);
    if ($file != null){
        while(!feof($file)){
            $line = fgets($file);
            if(str_contains($line, ":")){
                $split = explode(":", $line);
                $dataArr[$split[0]] = $split[1];
            } else {
                $dataArr["content"] .= ($line."\n");
            }
        }
        if($cleanProccessingOn){
            $dataArr["content"] = str_replace("\n","",$dataArr["content"]);
            $dataArr["content"] = str_replace("<br />","",$dataArr["content"]);
        }
        return($dataArr);
    }
    flock($file, LOCK_UN);
    fclose($file);
}

function setData($fileName, $title, $author, $content){
    //This function receive file name, its title, its author and its content as prameters
    //and write the title, author and content on the assigned file.
    $newContent = trim($content);
    $newContent = nl2br($newContent);
    $txtArr = ["title" => $title,
                "author" => $author,
                "content" => $newContent];
    $flen = 2;
    $lineCount = 0;
    $f = fopen($fileName, "w") or die("The programme cannot open file.");
    foreach($txtArr as $topic => $content){
        if ($flen === $lineCount){
            fwrite($f, $topic.":".$content);
        } else {
            fwrite($f, $topic.":".$content."\n");
            $lineCount++;
        }
    }
    fclose($f);
}

function displayErrMsg($msgArr){
    //This function receives an array which contain error messages.
    //and returns string indicating error messages in <li> tag.
    $listStr = "";
    if(!empty($msgArr)){
        $msgArrCount = count($msgArr);
        for ($a = 0; $a < $msgArrCount; $a++){
            $listStr .= "\t"."<li>".$msgArr[$a]."</li>"."\n";
        }
        return "<ul class='errCont'>"."\n".$listStr."</ul>";
    }
}

function getCSVfile($filepath){
    //This function receive csv file path as prameters
    //and return the associative array of csv file. 
    $file = fopen($filepath,"r");
    flock($file, LOCK_SH);
    $titles = fgetcsv($file);
    $result = [];
    while($row = fgetcsv($file)){
        $count = 0;
        foreach($titles as $title) {
            $result[$title] = $row[$count];
            $count++;
        }
        $results[] = $result;
    }
    flock($file, LOCK_UN);
    fclose($file);
    return $results;
}

function showUserInfo($filepath, $uID){
    //This function receive file path and user ID as prameters
    //and return user information whose email or phone number in the receive file. 
    $db = getCSVfile($filepath);
    foreach($db as $data){
        $csvEmail = trim($data["email"]);
        $csvPhoneNvm = trim($data["phone_number"]);
        if($data["email"] == $uID ||
            $data["phone_number"] == $uID){
            return $data;
        }
    }
    return false;
}

function checkAdmin($uID, $uPW){
    //This function receive user id and user password as prameters
    //and check whether the user is an admin or not.
    $adminFile = $uID;
    $dataAssArr = getData("../data/admin.txt");
    $id = $dataAssArr["id"];
    $id = str_replace("\n","",$id);
    $id = trim($id);
    if(($uID == $id) &&
        (password_verify($uPW, $dataAssArr["pw"]))){
        return true;
    }
    else {
        return false;
    }
}

function checkUser($ID, $PW){
    //This function receive user id and user password as prameters
    //and check whether the user is an registered user or not.
    $fpath = "../data/register.csv";
    $info = showUserInfo($fpath, $ID);
    if ($info && (password_verify($PW, $info["password"]))){
        return true;
    }
    return false;
}
?>