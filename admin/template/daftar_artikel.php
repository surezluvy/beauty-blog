
<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar artikel</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Foto Artikel</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $data = read("artikel");
                                            while($data2 = mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $data2['judul'] ?></td>
                                            <td><textarea id="w3review" name="w3review" rows="4" cols="50"><?php echo $data2['isi'] ?></textarea></td>
                                            <td><img height="105px" width="150px" src="../assets/img/artikel/<?php echo $data2['foto_artikel'] ?>"></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-primary" href="index.php?page=edit_artikel&id=<?php echo $data2['id_artikel'] ?>">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
                                                    <a class="btn btn-danger" href="../admin/proses.php?status=hapus_artikel&id=<?php echo $data2['id_artikel'] ?>">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>