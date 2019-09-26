<?php

        $cari_kd=mysqli_query($konek, "select max(id_produk)as kode from produk"); //mencari kode yang paling besar atau kode yang baru masuk
        $tm_cari=mysqli_fetch_array($cari_kd);
        $kode=substr($tm_cari['kode'],1,4); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya.
        $tambah=$kode+1; //kode yang sudah di pecah di tambah 1
            if($tambah<10){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka
            $id="P000".$tambah;
            }else{
            $id="P00".$tambah;
            }
?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ARTIKEL</h2> 
            </div>
         <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card-add">
                        <div class="header">
                            <h2>
                                INPUT ARTIKEL
                                <small>Data kelengkapan komposisi produk</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                              <form action="../controller/komposisi_produk/add.php" id="sign_in" method="POST">
                               <div id="addMoreAgain">
                                <div id="addMore">
                                 <div class="col-xs-12">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">dns</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">dns</i>
                                        </span>
                                        <div class="form-line">
                                            <textarea name="editor" id="editor" cols="80" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="id_user" class="form-control" placeholder="id_user" value="<?php echo "".$_SESSION["id_user"]."" ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button id="add_komposisi" class="btn btn-lg bg-gradient waves-effect" type="submit">TAMBAH</button>
                                    <a href="index.php?komposisi-produk" class="btn btn-lg bg-gradient-red waves-effect" id="back">BATAL</a>
                              </div>
                               </div>
                               </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>
    