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
                                            <th>Url</th>
                                            <th>Preview</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $data = read("video");
                                            while($data2 = mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $data2['url'] ?></td>
                                            <td>
                                                <div class="">
                                                    <iframe style="width: 100%; height: 200px" class="embed-responsive-item" src="<?php echo $data2['url'] ?>"></iframe>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-primary" href="index.php?page=edit_video&id=<?php echo $data2['id_video'] ?>">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
                                                    <a class="btn btn-danger" href="../admin/proses.php?status=hapus_video&id=<?php echo $data2['id_video'] ?>">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>