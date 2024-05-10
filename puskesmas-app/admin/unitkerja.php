<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Unitkerja();
$data_unitkerja = $model->dataUnitkerja();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

?>
                        <div class="card mb-4 mt-3">
                            <div class="card-header d-flex justify-content-between">
                                <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                                <!-- membuat tombol mengarahkan ke file produk_form.php -->
                               <h4 class="text-primary">Data Unit Kerja</h4>
                                <a href="index.php?url=unitkerja_form" class="btn btn-primary btn-sm"> Tambah</a>
                               
                            </div>

                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                        <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($data_unitkerja as $row){

                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama']?></td>
                                            <td> 
                                                <!-- membuat action edit, show, dan delete -->
                                                
                                                <form action="unitkerja_controller.php" method="POST">
                                                <a href="index.php?url=unitkerja_form&idedit=<?= $row ['id']?>" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                                               
                                                <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                                    onclick="return confirm('Anda yakin akan dihapus?')"class="btn btn-warning btn-sm"><i class="fa-solid fa-trash-can"></i></a></button>

                                                    <input type="hidden" name="idx" value="<?= $row['id']?>">
                                           

                                                   
                                                </form>
                                            </td>
                                        </tr>
                                      <?php
                                        $no++; 
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

</div>
</div>

                <?php

        // include_once 'bottom.php';
                ?>