<?php
session_start();
require_once './config/config.php';
require_once './includes/auth_validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_to_store = array_filter($_POST);

    $required_fields = array('chuong_trinh_id', 'loai_noi_dung', 'tieu_de', 'mo_ta', 'duong_dan_tap_tin', 'chu_de');
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

    $sql = "INSERT INTO noi_dung_dao_tao (chuong_trinh_id, loai_noi_dung, tieu_de, mo_ta, duong_dan_tap_tin, chu_de) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo 'Error preparing statement: ' . $conn->error;
        exit();
    }
    $stmt->bind_param("isssss", $data_to_store['chuong_trinh_id'], $data_to_store['loai_noi_dung'], $data_to_store['tieu_de'], $data_to_store['mo_ta'], $data_to_store['duong_dan_tap_tin'], $data_to_store['chu_de']);

    if ($stmt->execute() === true) {
        $_SESSION['success'] = "Nội dung đào tạo đã được thêm thành công!";
        header('location: noi_dung_dao_tao.php');
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
            <h2 class="page-header">Thêm mới Nội dung đào tạo</h2>
        </div>
    </div>
    <form class="form" action="" method="post" id="training_form" enctype="multipart/form-data">
        <?php include_once ('./forms/noi_dung_dao_tao_form.php'); ?>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#training_form").validate({
            rules: {
                chuong_trinh_id: {
                    required: true,
                    digits: true
                },
                loai_noi_dung: {
                    required: true
                },
                tieu_de: {
                    required: true
                },
                mo_ta: {
                    required: true
                },
                duong_dan_tap_tin: {
                    required: true
                },
                chu_de: {
                    required: true
                }
            }
        });
    });
</script>

<?php include_once 'includes/footer.php'; ?>