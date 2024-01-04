<?php 
session_start();
include("dbcon.php");

if(isset($_POST['save_student'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];


    $postData = [
        'fname' => $first_name,
        'lname' => $last_name,
        'email' => $email,
        'phone' => $phone,

    ];

    $ref_table = "student";
    $postRef_Result = $database->getReference($ref_table)->push($postData); 

    if($postRef_Result){
        
        $_SESSION['status'] = "Student has been added successfully"; 
        header('location:index.php');
    }else 
    {
        $_SESSION['status'] = "Student Not added successfully"; 
        header('location:index.php');
    }

}