<fieldset>
    <div class="form-group">
        <label for="giang_vien_id">Giảng viên ID *</label>
        <input type="number" name="giang_vien_id"
            value="<?php echo isset($assignment['giang_vien_id']) ? htmlspecialchars($assignment['giang_vien_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Giảng viên ID" class="form-control" required="required" id="giang_vien_id">
    </div>

    <div class="form-group">
        <label for="chuong_trinh_id">Chương trình đào tạo ID *</label>
        <input type="number" name="chuong_trinh_id"
            value="<?php echo isset($assignment['chuong_trinh_id']) ? htmlspecialchars($assignment['chuong_trinh_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Chương trình đào tạo ID" class="form-control" required="required" id="chuong_trinh_id">
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>