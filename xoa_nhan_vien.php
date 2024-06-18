<?php
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';

$del_id = filter_input(INPUT_POST, 'del_id');

if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $employee_id = $del_id;


    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "DELETE FROM nhan_vien WHERE nhan_vien_id = ?";


    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo 'Error preparing statement: ' . $conn->error;
        exit();
    }


    $stmt->bind_param("i", $employee_id);


    if ($stmt->execute() === true) {
        $_SESSION['info'] = "Employee deleted successfully!";
        header('location: nhan_vien.php');
        exit();
    } else {
        $_SESSION['failure'] = "Unable to delete employee";
        header('location: nhan_vien.php');
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>