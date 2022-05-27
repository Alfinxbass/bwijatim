<div class="super_container">
	    <div class="home ms-0">
	        <div class="breadcrumbs_container">
	            <div class="container">
	                <div class="row">
	                    <div class="col">
	                        <div class="breadcrumbs">
	                            <ul>
	                                <li><a href="<?= base_url(); ?>" style="text-decoration:none;" class="">Beranda</a>
	                                </li>
	                                <li>Berita <?= $title; ?></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- Courses -->
	    <div class="courses mt-0">
	        <div class="container mt-0">
	            <h4 class="mt-0 fw-bold"><?= $title; ?></h4>
	            <div class="row">

	                <!-- Courses Main Content -->
	                <div class="col-lg-8">
	                    <div class="courses_container">
	                        <div class="row courses_row">

	                            <!-- Course -->

	                            <?php foreach ($berita as $brt => $value) { ?>

	                            <div class="col-lg-6 course_col">
	                                <div class="course">
	                                    <div class="course_image"><img
	                                            src="<?= base_url('assets/back/img/'. $value->gambar); ?>" height="210px"
	                                            width="100%"></div>
	                                    <div class="course_body">
	                                        <h3 class="course_title"><a
	                                                href="<?= base_url('berita/detail_berita/'.$value->slug);?> "
	                                                style="text-decoration:none;"><?= $value->judul; ?></a></h3>
	                                        <div
	                                            class="course_teacher border bg-success rounded col-md-6 text-center text-white">
	                                            <?= $value->nama_kategori; ?></div>
	                                        <div class="course_text">
	                                            <p style="text-align:justify;">
	                                                <?= substr(strip_tags($value->post),0,120); ?>...</p>
	                                        </div>
	                                    </div>
	                                    <div class="course_footer">
	                                        <div
	                                            class="course_footer_content d-flex flex-row align-items-center justify-content-start">
	                                            <div class="course_info">
	                                                <i class="fa fa-calendar text-success" aria-hidden="true"></i>
	                                                <span><?= $value->tanggal; ?></span>
	                                            </div>
	                                            <div class="course_info">
	                                                <i class="fa fa-eye text-success" aria-hidden="true"></i>
	                                                <span>5 Ratings</span>
	                                            </div>

	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <?php } ?>

	                        </div>

	                    </div>
	                </div>

	                <!-- Courses Sidebar -->
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
	                    <!-- <div class="sidebar">

	                    </div> -->
	                </div>
	            </div>
	        </div>
	    </div>

	</div>