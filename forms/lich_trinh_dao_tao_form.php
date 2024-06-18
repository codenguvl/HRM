<fieldset>
    <div class="form-group">
        <label for="chuong_trinh_id">Chương trình ID *</label>
        <input type="number" name="chuong_trinh_id"
            value="<?php echo isset($lich_trinh['chuong_trinh_id']) ? htmlspecialchars($lich_trinh['chuong_trinh_id'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Chương trình ID" class="form-control" required="required" id="chuong_trinh_id">
    </div>

    <div class="form-group">
        <label for="ngay_bat_dau">Ngày bắt đầu *</label>
        <input type="date" name="ngay_bat_dau"
            value="<?php echo isset($lich_trinh['ngay_bat_dau']) ? htmlspecialchars($lich_trinh['ngay_bat_dau'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Ngày bắt đầu" class="form-control" required="required" id="ngay_bat_dau">
    </div>

    <div class="form-group">
        <label for="ngay_ket_thuc">Ngày kết thúc *</label>
        <input type="date" name="ngay_ket_thuc"
            value="<?php echo isset($lich_trinh['ngay_ket_thuc']) ? htmlspecialchars($lich_trinh['ngay_ket_thuc'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Ngày kết thúc" class="form-control" required="required" id="ngay_ket_thuc">
    </div>

    <div class="form-group">
        <label for="dia_diem">Địa điểm *</label>
        <input type="text" name="dia_diem"
            value="<?php echo isset($lich_trinh['dia_diem']) ? htmlspecialchars($lich_trinh['dia_diem'], ENT_QUOTES, 'UTF-8') : ''; ?>"
            placeholder="Địa điểm" class="form-control" required="required" id="dia_diem">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">Lưu <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>