<?php 
    $connect = new mysqli("localhost", "root", "", "beauty");

    function read($tabel, $query = ""){
        global $connect;
        $data = mysqli_query($connect, "SELECT * FROM $tabel $query");
        return $data;
    }

    function create_article(){
        global $connect;
        $nama = $_FILES["foto_artikel"]["name"];
        mysqli_query($connect, "INSERT INTO artikel VALUES('', '$_POST[judul]', '$_POST[isi]', '$nama')") or die(mysqli_error($connect));
    
        // $nama = $_FILES["fileToUpload"]["name"];
        // $lokasi = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($_FILES['foto_artikel']['tmp_name'], "../assets/img/artikel/".$nama);
    
        // print_r($_FILES["fileToUpload"]["name"]);
        echo "<script>alert('Artikel berhasil di tambahkan')</script>";
        echo "<script>location='index.php';</script>";
    }

    function delete($tabel, $nama_id, $id, $tujuan){
        global $connect;
        mysqli_query($connect, "DELETE FROM $tabel WHERE $nama_id=$id") or die(mysqli_error($connect));
        
        echo "<script>alert('Berhasil dihapus')</script>";
        echo "<script>location='$tujuan';</script>";
    }

    function edit(){
        global $connect;
        $nama = $_FILES["foto_artikel"]["name"];
        mysqli_query($connect, "UPDATE artikel SET judul='$_POST[judul]', isi='$_POST[isi]', foto_artikel='$nama' WHERE id_artikel='$_POST[id_artikel]'") or die(mysqli_error($connect));

        // $nama = $_FILES['file_gambar']['name'];
        // $lokasi = $_FILES['file_gambar']['tmp_name'];
        move_uploaded_file($_FILES['foto_artikel']['tmp_name'], "../assets/img/artikel/".$nama);

        echo "<script>alert('Artikel berhasil di ubah')</script>";
        echo "<script>location='index.php';</script>";
    }

    function create_video(){
        global $connect;
        mysqli_query($connect, "INSERT INTO video VALUES('', '$_POST[url]')") or die(mysqli_error($connect));

        echo "<script>alert('Video berhasil di tambahkan')</script>";
        echo "<script>location='index.php?page=video';</script>";
    }

    function edit_video(){
        global $connect;
        mysqli_query($connect, "UPDATE video SET url='$_POST[url]' WHERE id_video='$_POST[id_video]'") or die(mysqli_error($connect));

        echo "<script>alert('Video berhasil di ubah')</script>";
        echo "<script>location='index.php?page=video';</script>";
    }

    function create_user(){
        global $connect;
        mysqli_query($connect, "INSERT INTO user VALUES('', '$_POST[username]', '$_POST[password]', '0')") or die(mysqli_error($connect));

        echo "<script>alert('Pengguna berhasil di tambahkan')</script>";
        echo "<script>location='index.php?page=pengguna';</script>";
    }
    
    function create_user2(){
        global $connect;
        mysqli_query($connect, "INSERT INTO user VALUES('', '$_POST[username]', '$_POST[password]', '0')") or die(mysqli_error($connect));

        echo "<script>alert('Register success!')</script>";
        echo "<script>location='login.php';</script>";
    }
    
    function edit_user(){
        global $connect;
        mysqli_query($connect, "UPDATE user SET username='$_POST[username]', password='$_POST[password]' WHERE id_user='$_POST[id_user]'") or die(mysqli_error($connect));

        echo "<script>alert('Pengguna berhasil di ubah')</script>";
        echo "<script>location='index.php?page=pengguna';</script>";
    }