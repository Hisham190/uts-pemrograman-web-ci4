<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title; ?> | <?= $biodata->nama_lengkap ?? 'CV Website'; ?></title>

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="header-container d-flex flex-column align-items-start">

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
          <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
          <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
          <li><a href="#skills"><i class="bi bi-bar-chart-steps navicon"></i> Skills</a></li>
          <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
          <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
        </ul>
      </nav>

      <div class="social-links text-center">
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

  </header>
  <main class="main">
    <?= $this->renderSection('main'); ?>
  </main>
  <footer id="footer" class="footer position-relative">
    <div class="container">
      <div class="copyright text-center">
        <p>© Copyright <strong><span><?= $biodata->nama_lengkap ?? 'My Name'; ?></span></strong>. All Rights Reserved</p>
      </div>
      <div class="credits">
        Didesain oleh <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/typed.js/typed.umd.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>

  <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>

</html>