<?php
session_start();
require_once './config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_to_store = array_filter($_POST);

    $required_fields = array('chuong_trinh_id', 'ngay_bat_dau', 'ngay_ket_thuc', 'dia_diem');
    foreach ($required_fields as $field) {
        if (empty($data_to_store[$field])) {
            echo 'Thiếu trường bắt buộc: ' . $field;
            exit();
        }
    }

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO lich_trinh_dao_tao (chuong_trinh_id, ngay_bat_dau, ngay_ket_thuc, dia_diem) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo 'Lỗi khi chuẩn bị câu lệnh: ' . $conn->error;
        exit();
    }
    $stmt->bind_param("isss", $data_to_store['chuong_trinh_id'], $data_to_store['ngay_bat_dau'], $data_to_store['ngay_ket_thuc'], $data_to_store['dia_diem']);

    if ($stmt->execute() === true) {
        $_SESSION['success'] = "Lịch trình đào tạo đã được thêm thành công!";
        header('location: lich_trinh_dao_tao.php');
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
            <h1 class="page-header">Thêm mới Lịch trình đào tạo</h1>
        </div>
    </div>
    <form class="form" action="" method="post" id="lich_trinh_form" enctype="multipart/form-data">
        <?php include_once ('./forms/lich_trinh_dao_tao_form.php'); ?>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#lich_trinh_form").validate({
            rules: {
                chuong_trinh_id: {
                    required: true,
                    number: true
                },
                ngay_bat_dau: {
                    required: true,
                    date: true
                },
                ngay_ket_thuc: {
                    required: true,
                    date: true
                },
                dia_diem: {
                    required: true,
                    minlength: 3
                }
            }
        });
    });
</script>

<?php include BASE_PATH . '/includes/footer.php'; ?>