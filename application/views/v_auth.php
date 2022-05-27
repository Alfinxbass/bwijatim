<br>
<div class="container mt-5">
    <div class="row justify-content-center">


        <main>
            <!-- Trending Area Start -->
            <div class="trending-area fix">
                <div class="container">
                    <div class="trending-main">
                        <!-- Trending Tittle -->
                        <br><br><br>
                        <div class="row">
                            <div class="col-lg-7">
                                <!-- Trending Top -->

                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="<?= base_url('assets/back/img/' . $berita->gambar);?>" alt="">
                                        <div class="trend-top-cap">
                                            <span class="text-center bg-warning rounded"><?= $berita->nama_kategori ;?></span>
                                            <h2><a
                                                    href="<?= base_url('berita/detail_berita/'.$berita->slug);?>"><?= $berita->judul; ?></a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>

                                <!-- Trending Bottom -->
                                <div class="trending-bottom">
                                    <div class="row">
                                        <?php foreach ($beritasm as $brd => $value) { ?>
                                        <div class="col-lg-3">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img">
                                                    <img src="<?= base_url('assets/back/img/' . $value->gambar);?>"
                                                        height="100" alt="">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="text-center bg-dark rounded text-white mt-1"><?= $value->nama_kategori; ?></span>
                                                    <h4><a
                                                            href="<?= base_url('berita/detail_berita/'.$value->slug);?>"><?= $value->judul; ?></a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                                <br>
                                <div class="section_title_container text-center">
						            <h2 class="section_title">Selamat Datang Di BWI Jatim</h2>
						            
					            </div>
                                <br>
                                <div class="row mt-2 justify-content-center">
                                    <div class="col-lg-3 feature_col">
                                        <div class="feature text-center trans_400">
                                            <div class="feature_icon">
                                                <img src="<?= base_url('assets/front/img/notebook.png'); ?>" alt="Literasi Wakaf" height="70"></div>
                                            <h3 class="feature_title"> <a href="<?= base_url('literasi'); ?>" class="ikon">Literasi Wakaf</a> </h3>
                                        </div>
                                    </div>
    
                                    <!-- Features Item -->
                                    <div class="col-lg-3 feature_col">
                                        <div class="feature text-center trans_400">
                                            <div class="feature_icon"><img src="<?= base_url('assets/front/img/book.png'); ?>" alt="Digital Library" height="70"></div>
                                            <h3 class="feature_title"><a href="<?= base_url('https://www.lib.bwi.go.id/'); ?>" class="ikon">Digital Library</a></h3>
                                        </div>
                                    </div>
    
                                    <!-- Features Item -->
                                    <div class="col-lg-3 feature_col">
                                        <div class="feature text-center trans_400">
                                            <div class="feature_icon"><img src="<?= base_url('assets/front/img/berita.png'); ?>" alt="Berita" height="70"></div>
                                            <h3 class="feature_title"><a href="<?= base_url('berita'); ?>" class="ikon">Berita</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Riht content -->
                            <div class="col-lg-4 ml-2">
                                <div class="sidebar_section">
                                    <div class="sidebar_section_title text-dark text-center mb-1">
                                        <hr>
                                        Berita Terpopuler
                                        <hr>
                                    </div>
                                    <div class="sidebar_latest">
                                        <!-- Latest Course -->
                                        <?php foreach ($populars as $pop => $value) { ?>
                                        <div class="latest d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_image">
                                                <div>
                                                    <img class=""
                                                        src="<?= base_url('assets/back/img/'. $value->gambar); ?>">
                                                </div>
                                            </div>
                                            <div class="latest_content">
                                                <span class="border col-md-6 text-center bg-success rounded text-white"><?= $value->nama_kategori; ?></span>
                                                    <div class="latest_title">
                                                        <a href="<?= base_url('berita/detail_berita/'. $value->slug) ;?>"
                                                            style="text-decoration:none;"><?= $value->judul; ?></a>
                                                    </div>

                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="sidebar_section">
							        <div class="sidebar_section_title text-dark text-center mb-1">Kategori Berita</div>
                                    <hr class="mb-1">
							            <div class="sidebar_categories">
                                            <ul>
                                                <?php foreach ($kategori as $ktg => $value) { ?>
                                                    <li><a class="text-dark" style="font-size: 17px;" href="<?= base_url('auth/kategori/' . $value->id_kategori); ?>"><?= $value->nama_kategori; ?></a></li>
                                                    
                                                <?php } ?>
                                                
                                            </ul>
							            </div>
						        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Trending Area End -->
            </div>