<?php
session_start();

$conn = mysqli_connect('localhost','root','','registration');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errors = array();

if(isset($_POST['register'])){
    $query = "INSERT INTO users(firstname,lastname,email,password) 
              VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','". $_POST['email']."','". $_POST['password']."')";
    if(mysqli_query($conn,$query)){
        header('location: ./users/index.php');
    }else{
        echo mysqli_error($conn);
    }
      
}

if(isset($_GET['edit'])){
    $user =" lorem";
    header('location: ./edit.php?id='. $_GET['user_id']);
}

if(isset($_POST['update'])){
    $query = "UPDATE  users 
                SET firstname = '".$_POST['firstname']."' , lastname = '".$_POST['lastname']."',email = '". $_POST['email']."' ,password = '". $_POST['password']."'
                WHERE id =" . $_POST['user_id'];
    if(mysqli_query($conn,$query)){
        header('location: ./index.php');
    }else{
        echo mysqli_error($conn);
    }
}
if(isset($_GET['delete'])){
    $query = "DELETE FROM  users WHERE id = " . $_GET['user_id'] ;
                
    if(mysqli_query($conn,$query)){
        header('location: ./index.php');
    }else{
        echo mysqli_error($conn);
    }
}
mysqli_close($conn);
