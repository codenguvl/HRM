<fieldset>
    <div class="form-group">
        <label for="giang_vien_id">Giảng viên ID *</label>
        <input type="number" name="giang_vien_id"
            value="<?php echo isset($phan_cong_giang_vien['giang_vien_id']) ? htmlspecialchars($phan_cong_giang_vien['giang_vien_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Giảng viên ID" class="form-control" required="required" id="giang_vien_id">
    </div>

    <div class="form-group">
        <label for="lich_trinh_id">Lịch trình ID *</label>
        <input type="number" name="lich_trinh_id"
            value="<?php echo isset($phan_cong_giang_vien['lich_trinh_id']) ? htmlspecialchars($phan_cong_giang_vien['lich_trinh_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Lịch trình ID" class="form-control" required="required" id="lich_trinh_id">
    </div>

    <div class="form-group">
        <label for="ngay_bat_dau">Ngày bắt đầu *</label>
        <input type="date" name="ngay_bat_dau"
            value="<?php echo isset($phan_cong_giang_vien['ngay_bat_dau']) ? htmlspecialchars($phan_cong_giang_vien['ngay_bat_dau'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Ngày bắt đầu" class="form-control" required="required" id="ngay_bat_dau">
    </div>

    <div class="form-group">
        <label for="ngay_ket_thuc">Ngày kết thúc *</label>
        <input type="date" name="ngay_ket_thuc"
            value="<?php echo isset($phan_cong_giang_vien['ngay_ket_thuc']) ? htmlspecialchars($phan_cong_giang_vien['ngay_ket_thuc'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Ngày kết thúc" class="form-control" required="required" id="ngay_ket_thuc">
    </div>

    <div class="form-group">
        <label for="vai_tro">Vai trò *</label>
        <input type="text" name="vai_tro"
            value="<?php echo isset($phan_cong_giang_vien['vai_tro']) ? htmlspecialchars($phan_cong_giang_vien['vai_tro'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Vai trò" class="form-control" required="required" id="vai_tro">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>