<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_to_store = array_filter($_POST);

    $required_fields = array('ten', 'chuyen_mon', 'thong_tin_lien_he');
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

    $sql = "INSERT INTO giang_vien (ten, chuyen_mon, thong_tin_lien_he) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo 'Error preparing statement: ' . $conn->error;
        exit();
    }
    $stmt->bind_param("sss", $data_to_store['ten'], $data_to_store['chuyen_mon'], $data_to_store['thong_tin_lien_he']);

    if ($stmt->execute() === true) {
        $_SESSION['success'] = "Giảng viên đã được thêm thành công!";
        header('location: giang_vien.php');
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
            <h2 class="page-header">Thêm mới Giảng viên</h2>
        </div>
    </div>
    <form class="form" action="" method="post" id="instructor_form" enctype="multipart/form-data">
        <?php include_once ('./forms/giang_vien_form.php'); ?>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#instructor_form").validate({
            rules: {
                ten: {
                    required: true,
                    minlength: 3
                },
                chuyen_mon: {
                    required: true
                },
                thong_tin_lien_he: {
                    required: true,
                    minlength: 10
                }
            }
        });
    });
</script>

<?php include_once 'includes/footer.php'; ?>