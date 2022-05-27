<div class="super_container">
    <div class="home ms-0">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url(); ?>" style="text-decoration:none;" class="">Beranda</a></li>
                                <li>Detail Literasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row justify-content-center" style="text-align: justify;">

                <!-- Blog Content -->
                <div class="col-lg-8">
                    <div class="blog_content">
                        <div class="blog_title"><?= $liter->judul; ?></div>
                        <div class="blog_meta">
                            <ul>
                                <li>Penulis : <a href="#"><?= $liter->author; ?></a></li>
                            </ul>
                        </div>
                        <p><?= $liter->isi_literasi; ?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>