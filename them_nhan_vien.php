<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data_to_store = array_filter($_POST);


    $required_fields = array('ten', 'phong_ban', 'vi_tri', 'email', 'so_dien_thoai');
    foreach ($required_fields as $field) {
        if (empty($data_to_store[$field])) {
            echo 'Missing required field: ' . $field;
            exit();
        }
    }

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO nhan_vien (ten, phong_ban, vi_tri, email, so_dien_thoai) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo 'Error preparing statement: ' . $conn->error;
        exit();
    }
    $stmt->bind_param("sssss", $data_to_store['ten'], $data_to_store['phong_ban'], $data_to_store['vi_tri'], $data_to_store['email'], $data_to_store['so_dien_thoai']);


    if ($stmt->execute() === true) {
        $_SESSION['success'] = "Nhân viên đã được thêm thành công!";
        header('location: nhan_vien.php');
        exit();
    } else {
        echo 'Insert failed: ' . $stmt->error;
        exit();
    }


    $stmt->close();
    $conn->close();
}


$edit = false;

require_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Thêm mới Nhân viên</h2>
        </div>
    </div>
    <form class="form" action="" method="post" id="employee_form" enctype="multipart/form-data">
        <?php include_once ('./forms/nhan_vien_form.php'); ?>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#employee_form").validate({
            rules: {
                ten: {
                    required: true,
                    minlength: 3
                },
                phong_ban: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                so_dien_thoai: {
                    required: true,
                    digits: true,
                    minlength: 10
                }
            }
        });
    });
</script>

<?php include_once 'includes/footer.php'; ?>