<fieldset>
    <div class="form-group">
        <label for="nhan_vien_id">Nhân viên ID *</label>
        <input type="number" name="nhan_vien_id"
            value="<?php echo isset($evaluation['nhan_vien_id']) ? htmlspecialchars($evaluation['nhan_vien_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Nhân viên ID" class="form-control" required="required" id="nhan_vien_id">
    </div>

    <div class="form-group">
        <label for="chuong_trinh_id">Chương trình ID *</label>
        <input type="number" name="chuong_trinh_id"
            value="<?php echo isset($evaluation['chuong_trinh_id']) ? htmlspecialchars($evaluation['chuong_trinh_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Chương trình ID" class="form-control" required="required" id="chuong_trinh_id">
    </div>

    <div class="form-group">
        <label for="loai_danh_gia">Loại đánh giá *</label>
        <input type="text" name="loai_danh_gia"
            value="<?php echo isset($evaluation['loai_danh_gia']) ? htmlspecialchars($evaluation['loai_danh_gia'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Loại đánh giá" class="form-control" required="required" id="loai_danh_gia">
    </div>

    <div class="form-group">
        <label for="diem_danh_gia">Điểm đánh giá *</label>
        <input type="number" name="diem_danh_gia"
            value="<?php echo isset($evaluation['diem_danh_gia']) ? htmlspecialchars($evaluation['diem_danh_gia'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Điểm đánh giá" class="form-control" required="required" id="diem_danh_gia">
    </div>

    <div class="form-group">
        <label for="nhan_xet">Nhận xét</label>
        <textarea name="nhan_xet" placeholder="Nhận xét" class="form-control"
            id="nhan_xet"><?php echo isset($evaluation['nhan_xet']) ? htmlspecialchars($evaluation['nhan_xet'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>