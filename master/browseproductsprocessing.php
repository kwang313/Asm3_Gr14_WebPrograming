<?php
function sortByName($standartLetter){
    //This function receive file path and user ID as parameters
    //and returns user information whose email or phone number in the receive file. 
    $storeArr = getCSVfile("../data/stores.csv");
    foreach($storeArr as $data){
        $checkFirstLetter = stripos($data["name"], $standartLetter);
        if($checkFirstLetter === 0){
            $result[] = $data;
        }
    }
    return $result;
}

function sortByCatagory($standardCatID){
    //This function receive file path and user ID as parameters
    //and returns user information whose email or phone number in the receive file. 
    $storeArr = getCSVfile("../data/stores.csv");
    foreach($storeArr as $data){
        if($data["category_id"] == $standardCatID){
            $result[] = $data;
        }
    }
    return $result;
}

function setSortItems(){
    if(isset($_GET["submitName"])){
        $result = sortByName($_GET["store_name"]);
    }else if(isset($_GET["submitCatagory"])){
        $result = sortByCatagory($_GET["store_catagories"]);
    }
    return $result;
}
?>