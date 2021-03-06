
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>MY PROFILE</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">User</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <br>
    <div class="container">
        <div class="row">
            <div class="pp-profile">
                <div class="col-lg-2">
                    <img src="<?= base_url('assets/img/profile/')?><?= $user['image'] ?>" class="card-img" alt="..."> 
          
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?=$user['name']?></h5>
                    <p class="card-text"><?=$user['email']?></p>
                    <p class="card-text"><h3>Saldo Saya : <?=$user['saldo']?></p></h3>
                    <hr>
                    <p class="card-text"><small class="text-muted">Member Dari, <?=date('d F Y', $user['date_created'])?></small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Main Content --> 

    <!-- Start Categories  -->
    <div class="categoriess-shop">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/')?>img/avatar.png" alt="" />
                        <a class="btn hvr-hover" href="<?= base_url('user/ganti')?>">Ganti Profile</a>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/')?>img/saldo.png" alt="" />
                        <a class="btn hvr-hover" href="<?= base_url('user/topup')?>">Isi Saldo</a>
                    </div>
                    
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/')?>img/ubahpass.png" alt="" />
                        <a class="btn hvr-hover" href="<?= base_url('user/ubahpass')?>">Ubah Password</a>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    </div>
        <!-- End Categories -->