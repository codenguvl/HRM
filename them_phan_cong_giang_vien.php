<?php
session_start();
require_once './config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_to_store = array_map('trim', $_POST);
    $required_fields = array('chuong_trinh_id', 'giang_vien_id');

    foreach ($required_fields as $field) {
        if (empty($data_to_store[$field])) {
            $_SESSION['failure'] = 'Thiếu trường bắt buộc: ' . $field;
            header('location: phan_cong_giang_vien.php');
            exit();
        }
    }

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $sql = "INSERT INTO phan_cong_giang_vien (chuong_trinh_id, giang_vien_id) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        $_SESSION['failure'] = 'Lỗi khi chuẩn bị câu lệnh: ' . $conn->error;
        header('location: phan_cong_giang_vien.php');
        exit();
    }
    $stmt->bind_param("ii", $data_to_store['chuong_trinh_id'], $data_to_store['giang_vien_id']);

    try {
        if ($stmt->execute() === true) {
            $_SESSION['success'] = "Phân công giảng viên đã được thêm thành công!";
            header('location: phan_cong_giang_vien.php');
            exit();
        } else {
            $_SESSION['failure'] = 'Thêm không thành công: ' . $stmt->error;
            header('location: phan_cong_giang_vien.php');
            exit();
        }
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1452) {
            $_SESSION['failure'] = "Không thể thêm phân công giảng viên: Giá trị không hợp lệ cho một trong các trường.";
        } else {
            $_SESSION['failure'] = "Đã xảy ra lỗi khi thêm phân công giảng viên: " . $e->getMessage();
        }
        header('location: phan_cong_giang_vien.php');
        exit();
    } finally {
        $stmt->close();
        $conn->close();
    }
}

$edit = false;

require_once BASE_PATH . '/includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Thêm mới Phân công giảng viên</h1>
        </div>
    </div>
    <form class="form" action="" method="post" id="phan_cong_form">
        <div class="form-group">
            <label for="chuong_trinh_id">Chương trình đào tạo ID:</label>
            <input type="text" class="form-control" id="chuong_trinh_id" name="chuong_trinh_id" required>
        </div>
        <div class="form-group">
            <label for="giang_vien_id">Giảng viên ID:</label>
            <input type="text" class="form-control" id="giang_vien_id" name="giang_vien_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#phan_cong_form").validate({
            rules: {
                chuong_trinh_id: {
                    required: true,
                    digits: true
                },
                giang_vien_id: {
                    required: true,
                    digits: true
                }
            }
        });
    });
</script>

<?php include BASE_PATH . '/includes/footer.php'; ?>