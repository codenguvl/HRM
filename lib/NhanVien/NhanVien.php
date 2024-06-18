<?php
class NhanVien
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }

    public function setOrderingValues()
    {
        $ordering = [
            'nhan_vien_id' => 'ID',
            'ten' => 'Tên',
            'phong_ban' => 'Phòng ban',
            'vi_tri' => 'Vị trí',
            'email' => 'Email',
            'so_dien_thoai' => 'Số điện thoại',
        ];


        return $ordering;
    }
}
?>