<?php
class DangKyDaoTao
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
    }

    public function setOrderingValues()
    {
        $ordering = [
            'dang_ky_id' => 'ID',
            'nhan_vien_id' => 'Nhân viên ID',
            'lich_trinh_id' => 'Lịch trình ID',
            'ngay_dang_ky' => 'Ngày đăng ký',
            'trang_thai' => 'Trạng thái',
        ];

        return $ordering;
    }

}
?>