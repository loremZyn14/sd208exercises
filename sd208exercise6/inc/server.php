<?php
session_start();

if (isset($_POST['addBookmark'])) {

  $_SESSION['bookmarks'][$_POST['bookmarkName']] = $_POST['bookmarkURL'];
    
}
if (isset($_POST['deleteBookmark'])) {
    unset($_SESSION['bookmarks'][$_POST['bookmarkName']]) ;
}
if (isset($_POST['deleteAll'])) {
    unset($_SESSION['bookmarks']);
}
