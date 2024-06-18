<?php
session_start();
require_once './config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_to_store = array_filter($_POST);

    $required_fields = array('nhan_vien_id', 'lich_trinh_id', 'ngay_dang_ky', 'trang_thai');
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

    $sql = "INSERT INTO dang_ky_dao_tao (nhan_vien_id, lich_trinh_id, ngay_dang_ky, trang_thai) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo 'Error preparing statement: ' . $conn->error;
        exit();
    }
    $stmt->bind_param("ssss", $data_to_store['nhan_vien_id'], $data_to_store['lich_trinh_id'], $data_to_store['ngay_dang_ky'], $data_to_store['trang_thai']);

    if ($stmt->execute() === true) {
        $_SESSION['success'] = "Đăng ký đào tạo đã được thêm thành công!";
        header('location: dang_ky_dao_tao.php');
        exit();
    } else {
        echo 'Insert failed: ' . $stmt->error;
        exit();
    }

    $stmt->close();
    $conn->close();
}

$edit = false;

require_once BASE_PATH . '/includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Thêm mới Đăng ký đào tạo</h1>
        </div>
    </div>
    <form class="form" action="" method="post" id="dang_ky_form" enctype="multipart/form-data">
        <?php include_once ('./forms/dang_ky_dao_tao_form.php'); ?>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#dang_ky_form").validate({
            rules: {
                nhan_vien_id: {
                    required: true
                },
                lich_trinh_id: {
                    required: true
                },
                ngay_dang_ky: {
                    required: true
                },
                trang_thai: {
                    required: true
                }
            }
        });
    });
</script>

<?php include BASE_PATH . '/includes/footer.php'; ?>