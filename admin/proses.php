<?php
    session_start();
    include '../function.php';

    if($_GET['status'] == 'buat_artikel'){
        create_article();
    } else if($_GET['status'] == 'hapus_artikel'){
        delete("artikel", "id_artikel", "$_GET[id]", "index.php");
    } else if($_GET['status'] == 'edit_artikel'){
        edit();
    } else if($_GET['status'] == 'hapus_video'){
        delete("video", "id_video", "$_GET[id]", "index.php?page=video");
    } else if($_GET['status'] == 'tambah_video'){
        create_video();
    } else if($_GET['status'] == 'edit_video'){
        edit_video();
    } else if($_GET['status'] == 'hapus_pengguna'){
        delete("user", "id_user", "$_GET[id]", "index.php?page=pengguna");
    } else if($_GET['status'] == 'tambah_pengguna'){
        create_user();
    } else if($_GET['status'] == 'edit_pengguna'){
        edit_user();
    } else if($_GET['status'] == 'tambah_pengguna2'){
        create_user2();
    } else if($_GET['status'] == 'logout'){
        session_destroy();
        echo "<script>location='login.php';</script>";
    }