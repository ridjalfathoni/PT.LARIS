  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Barang</h2>
                    
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kodebarang" required>
                                        <label class="form-label">Kode barang</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="namabarang" required>
                                        <label class="form-label">Nama barang</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="hargabeli" required>
                                        <label class="form-label">Harga beli</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="harga jual" required>
                                        <label class="form-label">Harga jual</label>
                                    </div>
                                </div>
                                 
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="produsen" required>
                                        <label class="form-label">Produsen</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fee" required>
                                        <label class="form-label">Fee</label>
                                    </div>
                                </div> 

                                
                                
                            </form>

                        </div>

                    </div>

                
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FILE UPLOAD - DRAG & DROP OR WITH CLICK & CHOOSE
                                
                            </h2>
                          
                        </div>
                        <div class="body">
                            <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
              
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        
                        <div class="body">
                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        </div>
                    </div>
              
            </div>
            </div>
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
          
            <!-- #END# Advanced Validation -->
            <!-- Validation Stats -->
           
            <!-- #END# Validation Stats -->
        </div>
    </section>
