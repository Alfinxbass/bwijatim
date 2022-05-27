<div class="super_container">
    <div class="home ms-0">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url(); ?>" style="text-decoration:none;" class="">Beranda</a></li>
                                <li>Detail Berita</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row">

                <!-- Blog Content -->
                <div class="col-lg-8">
                    <div class="blog_content">
                        <div class="blog_title"><?= $berita->judul; ?></div>
                        <div class="blog_meta">
                            <ul>
                                <li>Post on <a href="#"><?= $berita->tanggal; ?></a></li>
                                <li>Penulis <a href="#"><?= $berita->author; ?></a></li>
                            </ul>
                        </div>
                        <div class="blog_image"><img src="<?= base_url('assets/back/img/'. $berita->gambar); ?>" alt="">
                        </div>
                        <p><?= $berita->post; ?></p>
                    </div>
                    <!-- <div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="blog_tags">
							<span>Tags: </span>
							<ul>
								<li><a href="#">Education</a>, </li>
								<li><a href="#">Math</a>, </li>
								<li><a href="#">Food</a>, </li>
								<li><a href="#">Schools</a>, </li>
								<li><a href="#">Religion</a>, </li>
							</ul>
						</div>
						<div class="blog_social ml-lg-auto">
							<span>Share: </span>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div> -->
                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">
                            Berita Terakhir
                        </div>
                        <div class="sidebar_latest">
                            <!-- Latest Course -->
                            <?php foreach ($latest_news as $brt => $value) { ?>
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image">
                                    <div>
                                        <img class="" src="<?= base_url('assets/back/img/'. $value->gambar); ?>">
                                    </div>
                                </div>
                                <div class="latest_content">
                                    <div class="latest_title">
                                        <a href="<?= base_url('berita/detail_berita/'. $value->slug) ;?>"
                                            style="text-decoration:none;"><?= $value->judul; ?></a>
                                    </div>
                                    <p><?= $value->tanggal;?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sidebar">



                    </div>
                </div>
            </div>
        </div>
    </div>

</div>