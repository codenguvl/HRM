<fieldset>
    <div class="form-group">
        <label for="nhan_vien_id">Mã nhân viên *</label>
        <input type="number" name="nhan_vien_id"
            value="<?php echo isset($nhu_cau_dao_tao['nhan_vien_id']) ? htmlspecialchars($nhu_cau_dao_tao['nhan_vien_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Mã nhân viên" class="form-control" required="required" id="nhan_vien_id">
    </div>

    <div class="form-group">
        <label for="loai_ky_nang">Loại kỹ năng *</label>
        <input type="text" name="loai_ky_nang"
            value="<?php echo isset($nhu_cau_dao_tao['loai_ky_nang']) ? htmlspecialchars($nhu_cau_dao_tao['loai_ky_nang'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Loại kỹ năng" class="form-control" required="required" id="loai_ky_nang">
    </div>

    <div class="form-group">
        <label for="muc_ky_nang">Mức kỹ năng *</label>
        <input type="text" name="muc_ky_nang"
            value="<?php echo isset($nhu_cau_dao_tao['muc_ky_nang']) ? htmlspecialchars($nhu_cau_dao_tao['muc_ky_nang'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Mức kỹ năng" class="form-control" required="required" id="muc_ky_nang">
    </div>

    <div class="form-group">
        <label for="nhan_xet_quan_ly">Nhận xét của quản lý</label>
        <textarea name="nhan_xet_quan_ly" placeholder="Nhận xét của quản lý" class="form-control"
            id="nhan_xet_quan_ly"><?php echo isset($nhu_cau_dao_tao['nhan_xet_quan_ly']) ? htmlspecialchars($nhu_cau_dao_tao['nhan_xet_quan_ly'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
    </div>

    <div class="form-group">
        <label for="ket_qua_khao_sat">Kết quả khảo sát</label>
        <textarea name="ket_qua_khao_sat" placeholder="Kết quả khảo sát" class="form-control"
            id="ket_qua_khao_sat"><?php echo isset($nhu_cau_dao_tao['ket_qua_khao_sat']) ? htmlspecialchars($nhu_cau_dao_tao['ket_qua_khao_sat'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>