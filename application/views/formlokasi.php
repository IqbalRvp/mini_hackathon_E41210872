   <!-- Progress Table start -->
   <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" >Form lokasi</h4>
                                <div class="alert alert-info" role="alert">
                                            <strong>Notice!</strong> <?php echo validation_errors(); ?></a>
                                        </div>

                                
                                <div class="single-table">
                                    <div class="table-responsive">
                                     <?php echo form_open('Admin/simpanlokasi'); ?>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Lokasi</label>
                                                
                                                
                                               <?php echo form_input('nama_lokasi', '',array('class'=>'form-control','placeholder'=>'Isi Nama Lokasi')); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tempat Lokasi</label>
                                                
                                                
                                               <?php echo form_input('tempat_lokasi', '',array('class'=>'form-control','placeholder'=>'Isi Tempat Lokasi')); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat Lokasi</label>
                                                
                                                
                                               <?php echo form_input('alamat_lokasi', '',array('class'=>'form-control','placeholder'=>'Isi Alamat Lokasi')); ?>
                                            </div>
                                
                                
                                
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">SIMPAN</button>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->