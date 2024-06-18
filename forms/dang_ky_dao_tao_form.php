<fieldset>
    <div class="form-group">
        <label for="nhan_vien_id">Nhân viên ID *</label>
        <input type="number" name="nhan_vien_id"
            value="<?php echo isset($dang_ky['nhan_vien_id']) ? htmlspecialchars($dang_ky['nhan_vien_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Nhân viên ID" class="form-control" required="required" id="nhan_vien_id">
    </div>

    <div class="form-group">
        <label for="lich_trinh_id">Lịch trình ID *</label>
        <input type="number" name="lich_trinh_id"
            value="<?php echo isset($dang_ky['lich_trinh_id']) ? htmlspecialchars($dang_ky['lich_trinh_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Lịch trình ID" class="form-control" required="required" id="lich_trinh_id">
    </div>

    <div class="form-group">
        <label for="ngay_dang_ky">Ngày đăng ký *</label>
        <input type="date" name="ngay_dang_ky"
            value="<?php echo isset($dang_ky['ngay_dang_ky']) ? htmlspecialchars($dang_ky['ngay_dang_ky'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Ngày đăng ký" class="form-control" required="required" id="ngay_dang_ky">
    </div>

    <div class="form-group">
        <label for="trang_thai">Trạng thái *</label>
        <input type="text" name="trang_thai"
            value="<?php echo isset($dang_ky['trang_thai']) ? htmlspecialchars($dang_ky['trang_thai'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Trạng thái" class="form-control" required="required" id="trang_thai">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>