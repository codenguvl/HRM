<fieldset>
    <div class="form-group">
        <label for="chuong_trinh_id">Chương trình ID *</label>
        <input type="number" name="chuong_trinh_id"
            value="<?php echo isset($noi_dung_dao_tao['chuong_trinh_id']) ? htmlspecialchars($noi_dung_dao_tao['chuong_trinh_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Chương trình ID" class="form-control" required="required" id="chuong_trinh_id">
    </div>

    <div class="form-group">
        <label for="loai_noi_dung">Loại nội dung *</label>
        <input type="text" name="loai_noi_dung"
            value="<?php echo isset($noi_dung_dao_tao['loai_noi_dung']) ? htmlspecialchars($noi_dung_dao_tao['loai_noi_dung'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Loại nội dung" class="form-control" required="required" id="loai_noi_dung">
    </div>

    <div class="form-group">
        <label for="tieu_de">Tiêu đề *</label>
        <input type="text" name="tieu_de"
            value="<?php echo isset($noi_dung_dao_tao['tieu_de']) ? htmlspecialchars($noi_dung_dao_tao['tieu_de'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Tiêu đề" class="form-control" required="required" id="tieu_de">
    </div>

    <div class="form-group">
        <label for="mo_ta">Mô tả *</label>
        <textarea name="mo_ta" placeholder="Mô tả" class="form-control" required="required"
            id="mo_ta"><?php echo isset($noi_dung_dao_tao['mo_ta']) ? htmlspecialchars($noi_dung_dao_tao['mo_ta'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
    </div>

    <div class="form-group">
        <label for="duong_dan_tap_tin">Đường dẫn tệp tin *</label>
        <input type="text" name="duong_dan_tap_tin"
            value="<?php echo isset($noi_dung_dao_tao['duong_dan_tap_tin']) ? htmlspecialchars($noi_dung_dao_tao['duong_dan_tap_tin'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Đường dẫn tệp tin" class="form-control" required="required" id="duong_dan_tap_tin">
    </div>

    <div class="form-group">
        <label for="chu_de">Chủ đề *</label>
        <input type="text" name="chu_de"
            value="<?php echo isset($noi_dung_dao_tao['chu_de']) ? htmlspecialchars($noi_dung_dao_tao['chu_de'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Chủ đề" class="form-control" required="required" id="chu_de">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>