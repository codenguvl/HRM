<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';


$employee_id = filter_input(INPUT_GET, 'nhan_vien_id', FILTER_SANITIZE_NUMBER_INT);
$operation = filter_input(INPUT_GET, 'operation', 513);
($operation == 'edit') ? $edit = true : $edit = false;
$db = getDbInstance();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $employee_id = filter_input(INPUT_GET, 'nhan_vien_id', FILTER_SANITIZE_NUMBER_INT);

    $data_to_update = filter_input_array(INPUT_POST);

    $sql = "UPDATE nhan_vien SET ";
    foreach ($data_to_update as $key => $value) {
        $sql .= "$key = '$value', ";
    }
    $sql = rtrim($sql, ', ') . " WHERE nhan_vien_id = $employee_id";

    $result = $db->query($sql);

    if ($result) {
        $_SESSION['success'] = "Nhân viên đã được cập nhật thành công!";
        header('location: employees.php');
        exit();
    }
}




if ($edit) {
    $db->where('nhan_vien_id', $employee_id);
    $employee = $db->getOne("nhan_vien");
}

include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Cập nhật nhân viên</h2>
    </div>
    <!-- Flash messages -->
    <?php include ('./includes/flash_messages.php') ?>

    <form class="" action="" method="post" enctype="multipart/form-data" id="employee_form">

        <?php
        require_once ('./forms/nhan_vien_form.php');
        ?>
    </form>
</div>

<?php include_once 'includes/footer.php'; ?>