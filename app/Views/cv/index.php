<?= $this->extend('layout/template'); ?>

<?= $this->section('main'); ?>

<section id="hero" class="hero section">
    <div class="background-elements">
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
    </div>
    <div class="hero-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="hero-text">
                        <h1><?= $biodata->nama_lengkap ?? '[Nama Anda]'; ?></h1>
                        <p class="lead">Saya <span class="typed" data-typed-items="<?= $biodata->jabatan_singkat ?? 'Freelancer, Mahasiswa'; ?>"></span></p>
                        <p class="description"><?= $biodata->ringkasan_profil ?? '[Ringkasan profil Anda di sini]'; ?></p>
                        <div class="hero-actions">
                            <a href="#portfolio" class="btn btn-primary">Lihat Portofolio</a>
                            <a href="#resume" class="btn btn-outline">Lihat Resume</a>
                        </div>
                        <div class="social-links">
                            <?php if (!empty($biodata->github)): ?>
                                <a href="<?= $biodata->github; ?>" class="github" target="_blank"><i class="bi bi-github"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($biodata->linkedin)): ?>
                                <a href="<?= $biodata->linkedin; ?>" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($biodata->instagram)): ?>
                                <a href="<?= $biodata->instagram; ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-visual">
                        <div class="profile-container">
                            <div class="profile-background"></div>
                            <img src="/img/<?= $biodata->foto ?? 'default.jpg'; ?>" alt="Foto Profil" class="profile-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-image">
                            <img src="/img/<?= $biodata->foto ?? 'default.jpg'; ?>" alt="Profile Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="profile-content">
                        <h3><?= $biodata->nama_lengkap ?? '[Nama Anda]'; ?></h3>
                        <p class="profession"><?= $biodata->jabatan_singkat ?? '[Jabatan]'; ?></p>
                        <div class="contact-links">
                            <a href="mailto:<?= $biodata->email ?? '#'; ?>" class="contact-item">
                                <i class="bi bi-envelope"></i> <?= $biodata->email ?? '-'; ?>
                            </a>
                            <a href="tel:<?= $biodata->no_hp ?? '#'; ?>" class="contact-item">
                                <i class="bi bi-telephone"></i> <?= $biodata->no_hp ?? '-'; ?>
                            </a>
                            <a href="#" class="contact-item">
                                <i class="bi bi-geo-alt"></i> <?= $biodata->alamat ?? '-'; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                <div class="about-content">
                    <div class="section-header">
                        <span class="badge-text">Tentang Saya</span>
                        <h2>Lebih Jauh Mengenai Saya</h2>
                    </div>
                    <div class="description">
                        <p><?= nl2br($biodata->ringkasan_profil ?? 'Ringkasan profil belum diisi.'); ?></p>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<section id="resume" class="resume section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Ringkasan perjalanan pendidikan dan pengalaman profesional saya.</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="resume-side" data-aos="fade-right" data-aos-delay="100">
                    <h3>Ringkasan Profesional</h3>
                    <p><?= $biodata->ringkasan_profil ?? 'Ringkasan profil belum diisi.'; ?></p>
                </div>
            </div>

            <div class="col-lg-8 ps-4 ps-lg-5">
                <div class="resume-section" data-aos="fade-up" data-aos-delay="100">
                    <h3><i class="bi bi-mortarboard me-2"></i>Pendidikan</h3>
                    <?php if (empty($pendidikan)): ?>
                        <p>Data pendidikan belum diisi.</p>
                    <?php else: ?>
                        <?php foreach ($pendidikan as $p): ?>
                            <div class="resume-item">
                                <h4><?= $p['jenjang']; ?> - <?= $p['jurusan']; ?></h4>
                                <h5><?= $p['tahun_mulai']; ?> - <?= $p['tahun_selesai'] ?? 'Sekarang'; ?></h5>
                                <p class="company"><i class="bi bi-building"></i> <?= $p['nama_institusi']; ?></p>
                                <p><?= $p['deskripsi']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="resume-section" data-aos="fade-up">
                    <h3><i class="bi bi-briefcase me-2"></i>Pengalaman (Organisasi, Magang, Proyek)</h3>
                    <?php if (empty($pengalaman)): ?>
                        <p>Data pengalaman belum diisi.</p>
                    <?php else: ?>
                        <?php foreach ($pengalaman as $p): ?>
                            <div class="resume-item">
                                <h4><?= $p['posisi']; ?> <small>(<?= $p['tipe']; ?>)</small></h4>
                                <h5><?= $p['tahun_mulai']; ?> - <?= $p['tahun_selesai'] ?? 'Sekarang'; ?></h5>
                                <p class="company"><i class="bi bi-building"></i> <?= $p['nama_perusahaan']; ?></p>
                                <ul>
                                    <li><?= $p['deskripsi']; ?></li>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="skills" class="skills section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Kemampuan dan teknologi yang saya kuasai.</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-12">
                <div class="skills-category" data-aos="fade-up" data-aos-delay="200">
                    <h3>Keahlian Teknis & Non-Teknis</h3>
                    <div class="skills-animation">
                        <?php if (empty($keahlian)): ?>
                            <p>Data keahlian belum diisi.</p>
                        <?php else: ?>
                            <?php foreach ($keahlian as $k): ?>
                                <div class="skill-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4><?= $k['nama_keahlian']; ?></h4>
                                        <span class="skill-percentage"><?= $k['level']; ?>%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?= $k['level']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Kumpulan proyek dan karya yang pernah saya buat.</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="row">
                <div class="col-lg-3 filter-sidebar">
                    <div class="filters-wrapper" data-aos="fade-right" data-aos-delay="150">
                        <ul class="portfolio-filters isotope-filters">
                            <li data-filter="*" class="filter-active">Semua Proyek</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <?php if (empty($portofolio)): ?>
                            <p>Data portofolio belum diisi.</p>
                        <?php else: ?>
                            <?php foreach ($portofolio as $p): ?>
                                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-app">
                                    <div class="portfolio-wrap">
                                        <img src="/img/portofolio/<?= $p['gambar_proyek'] ?? 'default_project.jpg'; ?>" class="img-fluid" alt="">
                                        <div class="portfolio-info">
                                            <div class="content">
                                                <span class="category"><?= $p['nama_proyek']; ?></span>
                                                <h4><?= $p['deskripsi']; ?></h4>
                                                <div class="portfolio-links">
                                                    <a href="/img/portofolio/<?= $p['gambar_proyek'] ?? 'default_project.jpg'; ?>" data-gallery="portfolio-gallery-app" class="glightbox" title="<?= $p['nama_proyek']; ?>"><i class="bi bi-plus-lg"></i></a>
                                                    <?php if (!empty($p['link_proyek'])): ?>
                                                        <a href="<?= $p['link_proyek']; ?>" title="Lihat Proyek" target="_blank"><i class="bi bi-arrow-right"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Jangan ragu untuk menghubungi saya.</p>
    </div>
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
                <div class="info-box">
                    <h3>Info Kontak</h3>
                    <p>Anda dapat menghubungi saya melalui detail di bawah ini atau mengisi form di samping.</p>
                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="content">
                            <h4>Lokasi:</h4>
                            <p><?= $biodata->alamat ?? '-'; ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="content">
                            <h4>Telepon:</h4>
                            <p><?= $biodata->no_hp ?? '-'; ?></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>Email:</h4>
                            <p><?= $biodata->email ?? '-'; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form">
                    <h3>Hubungi Saya</h3>
                    <p>Silakan isi form di bawah ini untuk mengirim pesan.</p>
                    
                    <form action="#" method="post" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                                <button type="submit" class="btn">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>