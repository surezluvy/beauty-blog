<form action="../admin/proses.php?status=buat_artikel" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul artikel</label>
        <input name="judul" type="text" class="form-control" placeholder="Masukan judul artikel...">
    </div>
    <div class="form-group">
        <label>Isi artikel</label>
        <textarea name="isi" class="form-control"rows="3"></textarea>
    </div>
    <div class="form-group">
        <label>Foto artikel</label>
        <input type="file" class="form-control-file" name="foto_artikel">
    </div>
    <button type="submit" class="btn btn-primary">Buat artikel</button>
</form>