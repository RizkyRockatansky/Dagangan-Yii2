<div class="top-header">
    
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="">Point of Sales-Hebat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="; ?>">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo base_url('produk'); ?>">Produk</a>
                </li>
            </ul>

            <ul class="navbar-nav mx-auto">
                <?php //echo form_open('pembeli/search', array('class' => 'form-inline my-2 my-lg-0')); ?>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword" aria-label="Search">
                    <button class="btn btn-dark my-2 my-sm-0 text-white" type="submit">Search</button>
                <?php  //echo form_close(); ?>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
             
                <li class="nav-item">
                    <a class="nav-link" href="<?php //echo base_url('login'); ?>">Masuk<i class='fa fa-user'></i></a>
                </li>
               
                <li class="nav-item">
               
                    <a class="nav-link" href='<?php// echo base_url('keranjang'); ?>'>Checkout (<?php //echo $data->num_rows(); ?>) </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php //echo base_url('profil'); ?>">Profil</a>
                        <a class="dropdown-item" href="<?php //echo base_url('transfer'); ?>">Tagihan</a>
                        <a class="dropdown-item" href="<?php //echo base_url('logout'); ?>">Logout</a>
                    </div>
                </li>
             
            </ul>
        </div>
    </div>  
</nav>