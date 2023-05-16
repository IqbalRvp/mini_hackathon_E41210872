   <!-- Progress Table start -->
   <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" >

                                <?php echo anchor('Admin/formberita','Tambah Data',array('class'=>'btn btn-rounded btn-primary mb-3'));?>

                                </h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Judul Berita</th>
                                                    <th scope="col">Isi Berita</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $no=1;
                                                 foreach ($k->result() as $r){
                                                    ?>
                                                <tr>
                                                    <th scope="row"><?=$no?></th>
                                                    <td><?=$r->judul_berita?></td>
                                                    <td><?=$r->isi_berita?></td>
                                                    
                                                    <td>
                                                       
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><?php echo anchor('Admin/hapusberita/'.$r->id_berita,'Hapus', array('class'=>'btn btn-rounded btn-danger mb-3'));?></li>
                                                        </ul>
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
                        </div>
                    </div>
                    <!-- Progress Table end -->