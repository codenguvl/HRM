<fieldset>
    <div class="form-group">
        <label for="ten_chuong_trinh">Tên chương trình *</label>
        <input type="text" name="ten_chuong_trinh"
            value="<?php echo isset($chuong_trinh_dao_tao['ten_chuong_trinh']) ? htmlspecialchars($chuong_trinh_dao_tao['ten_chuong_trinh'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Tên chương trình" class="form-control" required="required" id="ten_chuong_trinh">
    </div>
    <div class="form-group">
        <label for="doi_tuong">Đối tượng *</label>
        <input type="text" name="doi_tuong"
            value="<?php echo isset($chuong_trinh_dao_tao['doi_tuong']) ? htmlspecialchars($chuong_trinh_dao_tao['doi_tuong'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Đối tượng" class="form-control" required="required" id="doi_tuong">
    </div>
    <div class="form-group">
        <label for="thoi_luong">Thời lượng *</label>
        <input type="text" name="thoi_luong"
            value="<?php echo isset($chuong_trinh_dao_tao['thoi_luong']) ? htmlspecialchars($chuong_trinh_dao_tao['thoi_luong'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Thời lượng" class="form-control" required="required" id="thoi_luong">
    </div>
    <div class="form-group">
        <label for="hinh_thuc">Hình thức *</label>
        <input type="text" name="hinh_thuc"
            value="<?php echo isset($chuong_trinh_dao_tao['hinh_thuc']) ? htmlspecialchars($chuong_trinh_dao_tao['hinh_thuc'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Hình thức" class="form-control" required="required" id="hinh_thuc">
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>