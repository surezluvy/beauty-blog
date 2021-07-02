<form action="../admin/proses.php?status=edit_artikel" method="POST" enctype="multipart/form-data">
    <?php
        $no = 1;
        $id = $_GET['id'];
        $data = read("artikel", "WHERE id_artikel=$id");
        while($data2 = mysqli_fetch_array($data)){
    ?>
    <input type="hidden" value="<?php echo $data2['id_artikel'] ?>" name="id_artikel">
    <div class="form-group">
        <label>Judul artikel</label>
        <input name="judul" type="text" class="form-control" value="<?php echo $data2['judul'] ?>">
    </div>
    <div class="form-group">
        <label>Isi artikel</label>
        <textarea name="isi" class="form-control"rows="3"><?php echo $data2['isi'] ?></textarea>
    </div>
    <div class="form-group">
        <label>Foto artikel</label>
        <input type="file" class="form-control-file" name="foto_artikel" value="<?php echo $data2['foto_artikel'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Ubah artikel</button>
    <?php } ?>
</form>