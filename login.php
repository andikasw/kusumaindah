<?php
include('config/config.php');
if(isset($_SESSION['user'])){
  header("location:home.php");
  // session_start();
  // session_regenerate_id();
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Login</title>
    <link rel="icon"  href="images/KusumaIndah11.png">
  <link rel="stylesheet" href="<?=base_url()?>/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="<?=base_url()?>/css/Page-login.css" media="screen">
  <link href="<?=base_url()?>/css/bootstrap.min_3.css" rel="stylesheet" />
  <script src="<?=base_url()?>/js/jquery.min_3.js"></script>
  <script class="u-script" type="text/javascript" src="<?=base_url()?>/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="<?=base_url()?>/js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.6.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "projectwebtravel",
    "url": "index.html",
    "logo": "images/KusumaIndah11.png",
    "sameAs": []
  }</script>
  <meta property="og:title" content="Page login">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#478ac9">
  <link rel="canonical" href="index.html">
  <meta property="og:url" content="index.html">
</head>
<body class="u-body"><header class="u-clearfix u-header u-image u-sticky u-header" id="sec-6faf" data-image-width="1600" data-image-height="1067"><div class="u-clearfix u-sheet u-sheet-1">
  <a href="home.php" class="u-image u-logo u-image-1">
    <img src="images/KusumaIndah11.png" class="u-logo-image u-logo-image-1" data-image-width="64">
  </a>
  <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
      <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
        </symbol>
      </defs></svg>
    </a>
  </div>
  <div class="u-custom-menu u-nav-container">
</nav>
</div></header>
<section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-a3ea">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <!-- <div > -->
            <img src="images/7.jpg" class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1">
            <!-- <div class="u-container-layout u-container-layout-1"></div> -->
          <!-- </div> -->
          <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
              <?php
              if(isset($_POST['login'])) {
                $user = trim(mysqli_real_escape_string($mysqli, $_POST['user'])); 
                $sandi = sha1(trim(mysqli_real_escape_string($mysqli, $_POST['pass'])));
                $sqluser = mysqli_query($mysqli,  "SELECT * FROM tb_users WHERE username='$user' AND password='$sandi' ") or die(mysqli_error($mysqli));
                if (mysqli_num_rows ($sqluser) > 0) { 
                  $_SESSION['user'] = $user;
                  echo "<script>window.location='crudtravel.php';</script>";
                } else { 
                  ?>
                  <div class="alert alert-danger alert-dismissable" role="alert">
                    <a href="" class="close" data-dissmis="alert" aria-label="close">&times;</a>
                    <span class="glyphicon glyphicon-exlamation-sign" aria-hidden="true"></span>
                    <strong>Login Gagal!</strong> Cek Kembali Username, Password dan Status Anda!
                  </div>
                  <?php
                }
              }
              ?>
              <div class="u-form u-form-1">
                <form action="" method="POST" class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px" source="custom" name="form-1">
                  <div class="u-form-group u-form-name u-form-group-1">
                    <label for="name-c359" class="u-form-control-hidden u-label">Name</label>
                    <input type="text" placeholder="Username" id="name-c359" name="user" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                  </div>
                  <div class="u-form-email u-form-group u-form-group-2">
                    <label for="email-c359" class="u-form-control-hidden u-label">Email</label>
                    <input type="password" placeholder="Password" id="email-c359" name="pass" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                  </div>
                  <div class="u-form-group u-form-submit u-form-group-3">
                    <input type="submit" value="Login" name="login" class="u-btn u-btn-submit u-button-style u-gradient u-none u-btn-1">
                  </div>
                  <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                  <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                  <input type="hidden" value="" name="recaptchaResponse">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-1cad"><div class="u-clearfix u-sheet u-sheet-1">
  <a href="home.php" class="u-image u-logo u-image-1" data-image-width="2400" data-image-height="2400">
    <img src="images/KusumaIndah11.png" class="u-logo-image u-logo-image-1" data-image-width="80">
  </a>
  <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
    <a class="u-social-url" target="_blank" href=https://web.facebook.com/andikasatriaw><span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f46b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-f46b"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
    </a>
    <a class="u-social-url" target="_blank" href=https://twitter.com/andikaswxc><span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4aa8"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-4aa8"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
    </a>
    <a class="u-social-url" target="_blank" href=https://www.instagram.com/andikasw><span class="u-icon u-icon-circle u-social-instagram u-social-type-logo u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-976b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-976b"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
    </a>
    <a class="u-social-url" target="_blank" href=https://www.linkedin.com/in/andikasw/><span class="u-icon u-icon-circle u-social-linkedin u-social-type-logo u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-476a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-476a"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg></span>
  </a>
</div>
<p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">Copyright © 2021.KusumaIndah.web.id<br>Create by andikasw
</p>

</div></footer>
<div class="chating" style=" z-index: 99999; width: 190px; padding: 15px; right: 0; bottom: 50px; position: fixed; "> <a href="https://wa.widget.web.id/37ce6d" target="_blank"><img alt="wa" src="https://suckittrees.com/image-asset-wa.png" title="wa" style="width: 100%;"></a></div>
</body>
</html>