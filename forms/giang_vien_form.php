<div class="form-group">
    <label for="ten">Tên *</label>
    <input type="text" name="ten"
        value="<?php echo isset($instructor['ten']) ? htmlspecialchars($instructor['ten'], ENT_QUOTES, 'UTF-8') : ''; ?>"
        placeholder="Tên giảng viên" class="form-control" required="required" id="ten">
</div>

<div class="form-group">
    <label for="chuyen_mon">Chuyên môn *</label>
    <input type="text" name="chuyen_mon"
        value="<?php echo isset($instructor['chuyen_mon']) ? htmlspecialchars($instructor['chuyen_mon'], ENT_QUOTES, 'UTF-8') : ''; ?>"
        placeholder="Chuyên môn" class="form-control" required="required" id="chuyen_mon">
</div>

<div class="form-group">
    <label for="thong_tin_lien_he">Thông tin liên hệ *</label>
    <input type="text" name="thong_tin_lien_he"
        value="<?php echo isset($instructor['thong_tin_lien_he']) ? htmlspecialchars($instructor['thong_tin_lien_he'], ENT_QUOTES, 'UTF-8') : ''; ?>"
        placeholder="Thông tin liên hệ" class="form-control" required="required" id="thong_tin_lien_he">
</div>

<div class="form-group text-center">
    <label></label>
    <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
</div>