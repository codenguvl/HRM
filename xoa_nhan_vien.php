<?php
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';

$del_id = filter_input(INPUT_POST, 'del_id');

if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $employee_id = $del_id;

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $sql = "DELETE FROM nhan_vien WHERE nhan_vien_id = ?";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo 'Lỗi khi chuẩn bị câu lệnh: ' . $conn->error;
        exit();
    }

    $stmt->bind_param("i", $employee_id);

    try {
        if ($stmt->execute() === true) {
            $_SESSION['info'] = "Xóa nhân viên thành công!";
            header('location: nhan_vien.php');
            exit();
        } else {
            $_SESSION['failure'] = "Không thể xóa nhân viên";
            header('location: nhan_vien.php');
            exit();
        }
    } catch (mysqli_sql_exception $e) {
        $_SESSION['failure'] = "Đã xảy ra lỗi khi xóa nhân viên: " . $e->getMessage();
        header('location: nhan_vien.php');
        exit();
    } finally {
        $stmt->close();
        $conn->close();
    }
}
?>