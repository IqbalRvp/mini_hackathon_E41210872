   <!-- Progress Table start -->
   <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" >Form Edit Kategori</h4>
                                <div class="alert alert-info" role="alert">
                                            <strong>Notice!</strong> <?php echo validation_errors(); ?></a>
                                        </div>

                                
                                <div class="single-table">
                                    <div class="table-responsive">
                                     <?php echo form_open('Admin/editkategori'); ?>
                                     <?php echo form_hidden('id_kategori',$kategori->id_kategori); ?>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Kategori</label>
                                                
                                               <?php echo form_input('nm_kategori',$kategori->nama_kategori,array('class'=>'form-control','placeholder'=>'EDit Kategori')); ?>
                                            </div>
                                
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">EDIT</button>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->