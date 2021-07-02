<form action="../admin/proses.php?status=edit_video" method="POST" enctype="multipart/form-data">
    <?php
        $no = 1;
        $id = $_GET['id'];
        $data = read("video", "WHERE id_video=$id");
        while($data2 = mysqli_fetch_array($data)){
    ?>
    <input type="hidden" value="<?php echo $data2['id_video'] ?>" name="id_video">
    <div class="form-group">
        <label>Url video</label>
        <input name="url" type="text" class="form-control" value="<?php echo $data2['url'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Ubah video</button>
    <?php } ?>
</form>