<?php
require "datafunction.php";
session_start();
if(isset($_POST['editsubmitOn'])){
    if(isset($_POST['title'])&&
        isset($_POST['wAuthor'])&&
        isset($_POST['content'])){
        //check empty string
        $inputTitle = htmlentities($_POST['title']);
        $inputAuthor = htmlentities($_POST['wAuthor']);
        $inputContent = htmlentities($_POST['content']);
        $inputFileName = "../data/".$_POST['filename'].".txt";
        $path = $_POST['filename'];
        setData($inputFileName, $inputTitle, $inputAuthor, $inputContent);
        header("location:$path.php");
    }
}
?>