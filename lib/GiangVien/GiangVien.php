<?php
class GiangVien
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
            'giang_vien_id' => 'ID',
            'ten' => 'Tên',
            'chuyen_mon' => 'Chuyên môn',
            'thong_tin_lien_he' => 'Thông tin liên hệ',
        ];

        return $ordering;
    }
}
?>