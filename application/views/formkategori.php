   <!-- Progress Table start -->
   <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" >Form Kategori</h4>
                                <div class="alert alert-info" role="alert">
                                            <strong>Notice!</strong> <?php echo validation_errors(); ?></a>
                                        </div>

                                
                                <div class="single-table">
                                    <div class="table-responsive">
                                     <?php echo form_open('Admin/simpankategori'); ?>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Kategori</label>
                                                
                                               <?php echo form_input('nm_kategori', '',array('class'=>'form-control','placeholder'=>'Isi Kategori')); ?>
                                            </div>
                                
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">SIMPAN</button>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->