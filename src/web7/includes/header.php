<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="https://example.com/images/char-dham-yatra.jpg">
  <meta property="og:url" content="https://example.com/char-dham-yatra">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="images/logo.webp">
  <title> <?= $sitename ?> </title>
  <link rel="stylesheet" href="web5/css/web5.css">
  <link rel="stylesheet" href="web5/css/animation.css">
  <link rel="stylesheet" href="web5/css/bootstrap.css">
  <link rel="stylesheet" href="web5/css/jquery-ui.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.4/font/bootstrap-icons.min.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11111746467"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-11111746467');
  </script>
</head>
<?php include($website . '/variables/site_setting.php'); ?>

<body>
  <script>
    gtag('config', 'AW-11111746467/ENBBCKqn66sYEKOXv7Ip', {
      'phone_conversion_number': '8889275608'
    });
  </script>
  <main>

    <header class="nav-head">
      <div class="info-bar p-2 hide">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-white">
              <span><a style="color:#fff" href="tel:<?= $phone_tel ?>">☏ : <?= $phone ?></a></span> |
              <span><a style="color:#fff" href="mailto:<?= $mail ?>">🖄 : <?= $mail ?></a></span>
            </div>
            <div class="col-md-6 text-end ">
              <div class="top-social">
                <a class="" href="#">Facebook</a>
                <a class="" href="#">Twitter</a>
                <a class="" href="#">Instagram</a>

              </div>


            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="<?= $logo ?>" alt="logo" width="250px" height="70px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <!-- <li class="nav-item">
          <a class="nav-link" href="about-us.php">About Us</a>
        </li> -->

              <!-- <li class="nav-item">
          <a class="nav-link" href="#">Internet & Tv</a>
        </li> -->
              <!-- <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact Us</a>
        </li> -->
            </ul>

          </div>
        </div>
      </nav>

    </header>
    <!------------------------------>