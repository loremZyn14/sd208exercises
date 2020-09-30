<?php
session_start();
$originalHeadline = "";
$honestHeadline = "";
$clickbait_words = array(
    "scientists",
    "doctors",
    "hate",
    "stupid",
    "weird",
    "simple",
    "tricked",
    "shocked me",
    "you'll never believe",
    "heck",
    "epic",
    "unbelievable"
);
$replacement_words = array(
    "so-called scientists",
    "so-called doctors",
    "aren't threatened by",
    "average",
    "comopletely normal",
    "ineffective",
    "method",
    "is no difference than the others",
    "you won't really suprised by",
    "slightly improve",
    "boring",
    "normal"
);

if (isset($_POST['addTodo'])) {
    if (!empty($_POST['task'])) {
        array_unshift($_SESSION['todos'], $_POST['task']);
    }
}
if (isset($_POST['deleteTodo'])) {
    array_splice($_SESSION['todos'], intval($_POST['taskKey']), 1);
}
if (isset($_POST['deleteAll'])) {
    $_SESSION['todos'] = array();
}

if(isset($_POST['btn_headline'])){
    $originalHeadline = $_POST['headline'];

//    for($i = 0; $i < count($clickbait_words);$i++){
    $honestHeadline  = str_replace($clickbait_words, $replacement_words , strtolower($_POST['headline']) );
//    }
    
}
