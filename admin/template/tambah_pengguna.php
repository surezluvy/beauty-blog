<?php
    $username = $_SESSION['username'];
    $data = read("user", "WHERE username='$username'");
    while($data2 = mysqli_fetch_array($data)){
    if($data2['role'] != 1){
        echo "<script>alert('Please login as ADMIN to continue!')</script>";
        echo "<script>location='index.php';</script>";
    } else{
?>
<form action="../admin/proses.php?status=tambah_pengguna" method="POST"">
    <div class="form-group">
        <label>Username</label>
        <input name="username" type="text" class="form-control" placeholder="Masukan username...">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input name="password" type="text" class="form-control" placeholder="Masukan password...">
    </div>
    <button type="submit" class="btn btn-primary">Tambah pengguna</button>
</form>

<?php }} ?>