<?php
session_start();

if(isset($_POST['submit'])){
    $height = $_POST['height'] / 100 ;
    $bmi = $_POST['weight'] / ($height * $height);
    if($bmi <= 18.5){
        $_SESSION['result'] = 'Underweight';
    }elseif($bmi > 18.5 and $bmi < 24.9){
        $_SESSION['result'] = 'Normal weight';
    }elseif($bmi > 24.9 and $bmi < 29.9){
        $_SESSION['result'] = 'Overweight';
    }else{
        $_SESSION['result'] = 'Obesity';
    }
    
    header('location:./result.php');
}
