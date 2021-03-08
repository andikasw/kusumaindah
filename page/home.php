<?php 
include_once '../config/config.php';
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <link rel="icon"  href="<?=base_url()?>/images/KusumaIndah11.png">
  <title>Kusuma Indah</title>
  <link rel="stylesheet" href="<?=base_url()?>/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="<?=base_url()?>/css/Page-1.css" media="screen">
  <script class="u-script" type="text/javascript" src="<?=base_url()?>/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="<?=base_url()?>/js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.5.1, nicepage.com">


  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900|Merriweather:300,300i,400,400i,700,700i,900,990i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">






  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "projectwebtravel",
    "url": "index.html",
    "logo": "images/KusumaIndah11.png",
    "sameAs": []
  }</script>
  <meta property="og:title" content="Page 1">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#478ac9">
  <link rel="canonical" href="index.html">
  <meta property="og:url" content="index.html">
</head>
<body class="u-body u-overlap u-overlap-transparent">  <header class="u-clearfix u-header u-image u-sticky u-header" id="sec-6faf" data-image-width="1600" data-image-height="1067"><div class="u-clearfix u-sheet u-sheet-1">
  <a href="home.php" class="u-image u-logo u-image-1">
    <img src="<?=base_url()?>/images/KusumaIndah11.png" class="u-logo-image u-logo-image-1" data-image-width="64">
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
    <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Menu</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
      <?php 
      $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_travel2 ") or die (mysqli_error($mysqli));
      $datauser = mysqli_fetch_array($sqluser);
      ?>
      <li class="u-nav-item"><a href="pagetravel.php?id=<?=$datauser['idtravel']?>" class="u-button-style u-nav-link u-white">Travel Reguler</a></li>
      <?php 
      $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_trip2 ") or die (mysqli_error($mysqli));
      $datauser = mysqli_fetch_array($sqluser);
      ?>
      <li class="u-nav-item"><a href="pagetrip.php?id=<?=$datauser['idtrip']?>" class="u-button-style u-nav-link u-white">Open &amp; Private Trip</a></li>
      <?php 
      $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_rental2 ") or die (mysqli_error($mysqli));
      $datauser = mysqli_fetch_array($sqluser);
      ?>
      <li class="u-nav-item"><a href="pagerental.php?id=<?=$datauser['idrental']?>" class="u-button-style u-nav-link u-white">Rent Car</a></li>
      <?php 
      $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_mice1 ") or die (mysqli_error($mysqli));
      $datauser = mysqli_fetch_array($sqluser);
      ?>
      <li class="u-nav-item"><a href="pagemice.php?id=<?=$datauser['idmice']?>" class="u-button-style u-nav-link u-white">KITA</a>
      </li></ul>
    </div>
  </li><li class="u-nav-item"><a href="#carousel_293f" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Profil</a>
  </li><li class="u-nav-item"><a href="#carousel_2618" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Destination</a>
  </li><li class="u-nav-item"><a href="#carousel_2d11" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">News</a>
  </li><li class="u-nav-item"><a href="#sec-0279" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Contact</a>
  </li></ul>
</div>
<div class="u-custom-menu u-nav-container-collapse">
  <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
    <div class="u-sidenav-overflow">
      <div class="u-menu-close"></div>
      <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 16px 2px;">Menu</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
        <?php 
        $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_travel2 ") or die (mysqli_error($mysqli));
        $datauser = mysqli_fetch_array($sqluser);
        ?>
        <li class="u-nav-item"><a href="pagetravel.php?id=<?=$datauser['idtravel']?>" class="u-button-style u-nav-link">Travel Reguler</a></li>
        <?php 
        $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_trip2 ") or die (mysqli_error($mysqli));
        $datauser = mysqli_fetch_array($sqluser);
        ?>
        <li class="u-nav-item"><a href="pagetrip.php?id=<?=$datauser['idtrip']?>" class="u-button-style u-nav-link">Open &amp; Private Trip</a></li>
        <?php 
        $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_rental2 ") or die (mysqli_error($mysqli));
        $datauser = mysqli_fetch_array($sqluser);
        ?>
        <li class="u-nav-item"><a href="pagerental.php?id=<?=$datauser['idrental']?>" class="u-button-style u-nav-link">Rent Car</a></li>
        <?php 
        $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_mice1 ") or die (mysqli_error($mysqli));
        $datauser = mysqli_fetch_array($sqluser);
        ?>
        <li class="u-nav-item"><a href="pagemice.php?id=<?=$datauser['idmice']?>" class="u-button-style u-nav-link">KITA</a></li>
      </ul>
    </div>
  </li><li class="u-nav-item"><a href="#carousel_293f" class="u-button-style u-nav-link" style="padding: 16px 2px;">Profil</a>
  </li><li class="u-nav-item"><a href="#carousel_2618" class="u-button-style u-nav-link" style="padding: 16px 2px;">Destination</a>
  </li><li class="u-nav-item"><a href="#carousel_2d11" class="u-button-style u-nav-link" style="padding: 16px 2px;">News</a>
  </li><li class="u-nav-item"><a href="#sec-0279" class="u-button-style u-nav-link" style="padding: 16px 2px;">Contact</a>
  </li></ul>
</div>
</div>
<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
</div>
</nav>
</div></header>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM profil WHERE id = '1' ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);
?>
<section class="u-align-left u-clearfix u-grey-10 u-typography-Normal--Introduction u-valign-top-xl u-section-1" src="" id="carousel_a7f9">
  <img class="u-expanded-width u-image u-image-1" src='<?=base_url()?>/view/<?=$datauser['gambar1']?>' data-image-width="1600" data-image-height="1067">
  <div class="u-list u-repeater u-list-1">
    <div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-repeater-item u-white u-list-item-1">
      <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-align-center u-gradient u-icon u-icon-circle u-spacing-10 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 510 510" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-742e"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 510 510" id="svg-742e"><g><path d="m451.483 120h-1.483v-60h-90v60h-27.968l-14.062-63.274c-3.494-15.736-17.195-26.726-33.314-26.726h-59.312c-16.119 0-29.819 10.99-33.314 26.725l-14.062 63.275h-27.968v-60h-90v60h-1.483c-32.267 0-58.517 26.25-58.517 58.517v242.967c0 32.266 26.25 58.516 58.517 58.516h392.967c32.266 0 58.516-26.25 58.516-58.517v-242.966c0-32.267-26.25-58.517-58.517-58.517zm-61.483 30v300h-270v-300zm0-60h30v30h-30zm-168.686-26.769c.423-1.902 2.08-3.231 4.029-3.231h59.312c1.949 0 3.606 1.329 4.029 3.232l12.617 56.768h-92.602zm-131.314 26.769h30v30h-30zm-60 331.483v-242.966c0-15.724 12.793-28.517 28.517-28.517h31.483v300h-31.483c-15.724 0-28.517-12.793-28.517-28.517zm450 0c0 15.724-12.793 28.517-28.517 28.517h-31.483v-300h31.483c15.724 0 28.517 12.793 28.517 28.517z"></path><path d="m358.276 268.252-22.519-87.137-116.183 30.023 22.517 87.137zm-44.057-50.586 7.506 29.047-58.093 15.012-7.506-29.047z"></path><path d="m200 420c27.57 0 50-22.43 50-50s-22.43-50-50-50-50 22.43-50 50 22.43 50 50 50zm0-70c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20z"></path>
      </g></svg></span>
      <h3 class="u-custom-font u-font-titillium-Web u-text u-text-1">Travel Reguler</h3>
    </div>
  </div>
  <div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-repeater-item u-video-cover u-white">
    <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-align-center u-gradient u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9c6a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-9c6a"><g><path d="m506.748 423.628-32.363-52.913 6.539-7.55c.025-.03.051-.059.076-.089 10.621-12.655 16.483-26.045 16.951-38.714.523-13.839-1.233-31.917-12.572-39.5-4.013-2.737-8.81-3.844-13.894-3.887-1.756-36.083-12.516-71.191-31.341-102.006-2.159-3.536-6.776-4.65-10.31-2.491s-4.649 6.775-2.49 10.31c17.789 29.121 27.838 62.365 29.23 96.5-4.412 1.271-8.691 2.93-12.53 4.642-11.591 5.203-21.807 15.643-29.546 30.191-.017.033-.034.066-.051.099l-4.562 8.894-61.135-10.304c-13.905-2.609-26.676 4.14-32.126 12.178l-6.593 9.754c-3.49 5.188-4.492 10.126-2.976 14.678 2.432 7.304 10.405 10.085 12.96 10.975l33.427 12.01 26.342 9.386-11.718 22.843-30.67-6.782c-11.549-2.457-22.316 3.248-26.992 10.165l-3.6 5.345c-3.047 4.505-3.904 8.854-2.55 12.927 2.025 6.089 8.161 8.542 10.749 9.459l30.752 15.183c-1.021 5.542-.38 10.926 1.733 15.479-27.308 14.008-57.682 21.58-88.549 22.038 1.293-17.609-1.992-39.33-14.792-55.395-9.866-12.383-23.972-19.418-40.792-20.344-15.553-.861-22.607-1.379-26.837-4.647-4.703-3.635-8.762-12.641-16.13-28.99l-.853-1.892c-8.416-18.656-27.612-30.242-50.104-30.242-.009 0-.019 0-.028 0-15.997.007-30.408 5.658-39.932 15.087-9.224-23.048-14.309-48.185-14.309-74.491 0-.416.011-.83.014-1.246 10.769 4.233 20.825 6.352 30.139 6.352 16.69 0 31.002-6.79 42.785-20.355 2.717-3.127 2.384-7.864-.743-10.58s-7.863-2.384-10.581.744c-9.554 10.999-26.163 23.454-60.868 7.87 3.548-41.327 19.803-80.639 46.711-112.474h94.282c4.79 0 9.489-.908 13.969-2.698 20.44-6.955 34.154-26.111 34.154-47.743 0-7.182-1.516-14.014-4.229-20.205 5.057-.383 10.126-.598 15.166-.598 26.544 0 52.491 5.275 76.494 15.178 8.306 12.783 12.148 22.424 11.715 29.414-.359 5.815-3.844 10.054-8.255 15.42-8.195 9.971-19.407 23.611-12.175 53.269 3.127 22.147-13.119 37.771-30.877 41.781-14.224 3.213-33.165-.667-39.719-22.174-7.27-23.862-31.074-40.838-57.886-41.283-.372-.006-.739-.009-1.109-.009-26.004 0-46.706 15.28-55.507 41.066-2.256 6.641-4.273 11.996-6.351 16.852-1.628 3.809.14 8.216 3.948 9.845 3.807 1.628 8.215-.139 9.845-3.947 2.23-5.217 4.379-10.913 6.757-17.914 9.68-28.355 32.758-31.041 42.169-30.894 20.385.338 38.389 12.945 43.787 30.657 7.325 24.038 26.314 33.812 45.102 33.811 4.142 0 8.276-.476 12.27-1.377 24.599-5.556 47.048-27.592 42.359-58.961-.035-.234-.081-.466-.139-.695-5.601-22.599 1.547-31.294 9.114-40.501 9.742-11.852 16.207-22.674 8.011-43.069 19.273 11.014 36.806 25.249 51.738 42.352 1.482 1.699 3.561 2.567 5.652 2.567 1.75 0 3.508-.609 4.93-1.85 3.12-2.724 3.441-7.462.717-10.582-21.522-24.652-48.065-43.778-77.424-56.404-.507-.289-1.04-.522-1.594-.685-26.174-11.007-54.542-16.866-83.571-16.866-8.149 0-16.375.474-24.509 1.402-9.208-9.877-22.312-16.069-36.84-16.069-.924 0-1.851.026-2.778.078-2.977-14.514-10.452-27.765-21.511-37.91-13.077-11.996-30.062-18.602-47.826-18.602-20.833 0-40.13 8.896-53.597 24.559-.94-.063-1.895-.095-2.857-.095-21.75 0-39.57 17.142-40.656 38.623-15.571 8.926-25.388 25.623-25.388 43.818 0 21.628 13.711 40.782 34.144 47.74 4.454 1.792 9.146 2.701 13.95 2.701h35.354c-25.306 33.68-40.209 74.047-42.85 116.15-.04.33-.06.66-.056.989-.242 4.169-.378 8.352-.378 12.55 0 57.687 22.444 111.919 63.197 152.706 40.758 40.791 94.951 63.256 152.6 63.256 36.088 0 71.671-9.07 103.178-26.259 2.228.809 4.667 1.266 7.225 1.266 4.371 0 9.077-1.324 13.621-4.419l25.366 22.724c1.745 1.979 6.027 6.473 12.053 6.473.245 0 .494-.007.745-.023 4.282-.262 7.989-2.673 11.021-7.169l3.601-5.346c4.688-6.935 5.966-19.076-.653-28.846l-17.586-26.086 16.677-19.253 18.544 20.97 23.528 26.457c1.755 2.023 6.969 8.037 14.26 8.036.262 0 .527-.008.795-.024 4.806-.288 9.024-3.069 12.541-8.267l6.597-9.758c5.41-8.049 6.89-22.42-.726-34.346zm-467.145-278.454c-.152-.063-.306-.12-.462-.172-14.439-4.841-24.141-18.342-24.141-33.596 0-13.975 8.237-26.693 20.986-32.401 2.878-1.288 4.643-4.238 4.416-7.382-.044-.616-.066-1.274-.066-1.956 0-14.172 11.533-25.701 25.709-25.701 1.646 0 3.221.14 4.68.415 2.791.526 5.641-.569 7.36-2.831 10.653-14.012 26.842-22.048 44.415-22.048 28.997 0 52.875 21.753 55.543 50.598.197 2.134 1.298 4.082 3.024 5.352s3.914 1.74 6.01 1.292c2.511-.536 5.047-.808 7.538-.808 19.526 0 35.413 15.912 35.413 35.47 0 15.254-9.702 28.755-24.141 33.596-.149.05-.297.104-.442.164-2.743 1.116-5.616 1.682-8.539 1.682h-148.812c-2.925-.001-5.782-.564-8.491-1.674zm318.894 217.108-33.474-12.026c-1.871-.652-2.903-1.223-3.437-1.583.156-.353.424-.864.882-1.544l6.578-9.732c1.706-2.516 8.344-7.477 16.982-5.836.052.01.103.019.154.028l56.519 9.527-16.01 31.212zm-38.123 63.454c-.341-.119-.639-.231-.896-.336l3.363-4.993c.997-1.474 5.557-5.135 11.377-3.895l26.773 5.921-9.534 18.586-30.222-14.921c-.279-.139-.567-.26-.861-.362zm-244.04-44.462c5.942-9.276 18.723-15.328 33.079-15.334h.022c16.764 0 30.382 8.003 36.429 21.409l.851 1.888c8.633 19.155 12.967 28.769 20.633 34.695 8.097 6.257 17.717 6.79 35.183 7.757 12.605.694 22.66 5.644 29.886 14.714 10.331 12.966 12.771 31.077 11.515 45.726-73.397-4.365-136.301-48.36-167.598-110.855zm286.904 85.37c-2.722-1.775-4.279-6.3-1.688-12.439l17.057-33.253c.085-.148.159-.303.235-.458l18.076-35.238c.025-.044.046-.091.069-.135l30.778-60.002c6.155-11.556 13.907-19.683 22.403-23.497 5.451-2.431 10.559-4.111 14.911-4.983.321-.036.632-.099.939-.174 4.934-.876 8.803-.654 10.92.797.029.021.06.041.09.061 4.11 2.732 6.438 13.123 5.933 26.479-.343 9.296-4.981 19.526-13.414 29.586l-9.943 11.479c-.093.101-.182.205-.269.311l-33.592 38.781c-.215.223-.419.452-.602.695l-23.915 27.609c-.199.109-.397.225-.589.355-1.344.906-2.295 2.173-2.823 3.584l-23.305 26.905c-3.898 4.18-8.213 5.534-11.271 3.537zm56.453 7.654c3.359 4.959 1.655 10.566.646 12.058l-3.337 4.955c-.192-.199-.406-.432-.643-.703-.204-.235-.423-.457-.655-.665l-25.109-22.493 13.767-15.893zm75.345-24.708-6.584 9.738c-.467.69-.845 1.135-1.116 1.415-.535-.366-1.458-1.125-2.784-2.654l-23.576-26.512-19.859-22.456 22.962-26.508 29.914 48.908c.029.047.058.094.088.14 4.754 7.404 2.638 15.425.955 17.929z"></path>
    </g></svg></span>
    <h3 class="u-custom-font u-font-titillium-Web u-text u-text-2">Open &amp; Private Trip</h3>
  </div>
</div>
<div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-repeater-item u-video-cover u-white">
  <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-align-center u-gradient u-icon u-icon-circle u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 468 468" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1748"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 468 468" x="0px" y="0px" id="svg-1748" style="enable-background:new 0 0 468 468;"><g><g><path d="M450.1,187.5l-10.2-10.8l-35.8-96.5C398,63.9,382.4,53.1,365,53H109.3c-17.4,0-33,10.9-39.1,27.2l-35.3,95.3l-14.7,13.6    C7.4,200,0,216,0,232.8v140.6c0.1,23,18.8,41.6,41.8,41.6h26.4c23,0,41.7-18.6,41.8-41.6V353h248v20.4c0.1,23,18.8,41.6,41.8,41.6    h26.4c23,0,41.7-18.6,41.8-41.6V229.1C467.9,213.4,461.5,198.4,450.1,187.5z M89,87c3.2-8.5,11.3-14,20.3-14h255.8    c9,0,17.1,5.6,20.3,14l31.2,84h-23.3c-5.5-37.5-40.4-63.4-77.9-57.8c-29.9,4.4-53.4,27.9-57.8,57.8H57.8L89,87z M372.9,171h-95.1    c5.5-26.3,31.3-43.1,57.6-37.6C354.2,137.4,368.9,152.1,372.9,171z M90,373.4c-0.1,12-9.8,21.6-21.8,21.6H41.8    c-12,0-21.7-9.6-21.8-21.6v-26.2c6,3.9,13.9,5.8,21.8,5.8H90V373.4z M448,373.4c-0.1,12-9.8,21.6-21.8,21.6h-26.4    c-12,0-21.7-9.7-21.8-21.6V353h48.2c7.9,0,15.8-1.9,21.8-5.8V373.4z M426.2,333H41.8c-11.9,0.1-21.7-9.4-21.8-21.4v-78.8    c0-11,4.9-21.5,13.3-28.6c0.1-0.1,0.3-0.3,0.4-0.4L47.3,191H426l9.6,10.3c0.1,0.2,0.4,0.3,0.5,0.5c7.5,7.1,11.8,17,11.8,27.3v82.5    h0.1C447.9,323.5,438.1,333.1,426.2,333z"></path>
  </g>
</g><g><g><path d="M132,231H57c-5.5,0-10,4.5-10,10v52c0,5.5,4.5,10,10,10h75c5.5,0,10-4.5,10-10v-52C142,235.5,137.5,231,132,231z M122,283    H67v-32h55V283z"></path>
</g>
</g><g><g><path d="M411,231h-75c-5.5,0-10,4.5-10,10v52c0,5.5,4.5,10,10,10h75c5.5,0,10-4.5,10-10v-52C421,235.5,416.5,231,411,231z     M401,283h-55v-32h55V283z"></path>
</g>
</g><g><g><path d="M282.3,273h-96.6c-5.5,0-10,4.5-10,10s4.5,10,10,10h96.6c5.5,0,10-4.5,10-10S287.8,273,282.3,273z"></path>
</g>
</g><g><g><path d="M282.3,242h-96.6c-5.5,0-10,4.5-10,10s4.5,10,10,10h96.6c5.5,0,10-4.5,10-10S287.8,242,282.3,242z"></path>
</g>
</g></svg></span>
<h3 class="u-custom-font u-font-titillium-Web u-text u-text-3">Rent Car</h3>
</div>
</div>
<div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-repeater-item u-video-cover u-white">
  <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-align-center u-file-icon u-gradient u-icon u-icon-circle u-icon-4"><img src="<?=base_url()?>/images/bicycle.png" alt=""></span>
    <h3 class="u-custom-font u-font-titillium-Web u-text u-text-4">KITA</h3>
  </div>
</div>
</div>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM tb_travel2 ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);
?>
<a href="pagetravel.php?id=<?=$datauser['idtravel']?>" class="u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-color u-btn-1">learn more<br>
</a>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM tb_trip2 ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);
?>
<a href="pagetrip.php?id=<?=$datauser['idtrip']?>" class="u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-color u-btn-2">Learn more</a>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM tb_rental2 ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);
?>
<a href="pagerental.php?id=<?=$datauser['idrental']?>" class="u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-btn-3">learn more</a>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM tb_mice1 ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);
?>
<a href="pagemice.php?id=<?=$datauser['idmice']?>" class="u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-btn-4">learn more</a>
<img src="<?=base_url()?>/images/KusumaIndah321.png" alt="" class="u-image u-image-default u-image-2" data-image-width="3000" data-image-height="900">
</section>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM profil ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);
?>
<section class="u-align-center u-clearfix u-grey-10 u-valign-top-xs u-section-2" id="carousel_293f">
  <div class="u-container-style u-gradient u-group u-shape-rectangle u-group-1">
    <div class="u-container-layout u-container-layout-1"></div>
  </div>
  <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
    <div class="u-gutter-0 u-layout">
      <div class="u-layout-row">
        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
          <div class="u-container-layout u-valign-middle-md u-valign-top-lg u-valign-top-xl u-container-layout-2">
            <img src='<?=base_url()?>/view/<?=$datauser['gambar']?>' alt="" class="u-expanded-width u-image u-image-default u-image-1">
          </div>
        </div>
        <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
          <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-3">
            <h2 class="u-align-left u-custom-font u-font-arial u-text u-text-1">about us</h2>
            <p class="u-align-justify u-custom-font u-font-merriweather u-text u-text-2"><?=$datauser['info']?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM profil WHERE id = '2' ") or die (mysqli_error($mysqli));
$data = mysqli_fetch_array($sqluser);
?>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM tb_desti WHERE display = '1' ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);

$klmt = $datauser['info'];
$jk = 10;
$cetak = substr($klmt, $jk,1);
if ($cetak != " ") {
 while ($cetak != " ") {
   $i = 5;
   $e = "...";
   $jk = $jk +$i ;
   $klmt = $datauser['info'];
   $cetak = substr($klmt, $jk,1);
 }
} 
$cetak = substr($klmt,0, $jk);

?>
<section class="u-align-center u-clearfix u-grey-10 u-section-3" id="carousel_2618">
  <img class="u-expanded-width u-image u-image-1" src='<?=base_url()?>/view/<?=$data['gambar2']?>' data-image-width="1980" data-image-height="1114">
  <div class="u-align-center-lg u-align-center-xl u-container-style u-group u-shape-rectangle u-white u-group-1">
    <div class="u-container-layout u-container-layout-1">
      <img alt="" class="u-expanded-width-md u-expanded-width-xl u-image u-image-default u-image-2" data-image-width="1280" data-image-height="650" src='<?=base_url()?>/view/<?=$datauser['image']?>'>
      <p class="u-align-center u-large-text u-text u-text-variant u-text-1"><?=$cetak , $e?></p>
      <a href="pagedesti.php?id=<?=$datauser['iddesti']?>" class="u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-btn-1">learn more</a>
    </div>
  </div>
  <?php 
  $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_desti WHERE display = '2' ") or die (mysqli_error($mysqli));
  $datauser = mysqli_fetch_array($sqluser);

  $klmt1 = $datauser['info'];
  $jk1 = 10;
  $cetak1 = substr($klmt1, $jk1,1);
  if ($cetak1 != " ") {
   while ($cetak1 != " ") {
     $i1 = 5;
     $e1 = "...";
     $jk1 = $jk1 +$i1 ;
     $klmt1 = $datauser['info'];
     $cetak1 = substr($klmt1, $jk1,1);
   }
 } 
 $cetak1 = substr($klmt1,0, $jk1);
 ?>
 <div class="u-container-style u-group u-opacity u-opacity-85 u-shape-rectangle u-white u-group-2">
  <div class="u-container-layout u-container-layout-2">
    <img alt="" class="u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-image u-image-default u-image-3" data-image-width="1280" data-image-height="853" src='<?=base_url()?>/view/<?=$datauser['image']?>'>
    <p class="u-align-center u-large-text u-text u-text-variant u-text-2"><?=$cetak1 , $e1?></p>
    <a href="pagedesti.php?id=<?=$datauser['iddesti']?>" class="u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-btn-2">learn more</a>
  </div>
</div>
<?php 
$sqluser = mysqli_query($mysqli,"SELECT * FROM tb_desti WHERE display = '3' ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);

$klmt2 = $datauser['info'];
$jk2 = 10;
$cetak2 = substr($klmt2, $jk2,1);
if ($cetak2 != " ") {
 while ($cetak2 != " ") {
  $i2 = 5;
  $e2 = "...";
  $jk2 = $jk2 +$i2 ;
  $klmt2 = $datauser['info'];
  $cetak2 = substr($klmt2, $jk2,1);
}
} 
$cetak2 = substr($klmt2,0, $jk2);
?>
<div class="u-container-style u-group u-opacity u-opacity-85 u-shape-rectangle u-white u-group-3">
  <div class="u-container-layout u-container-layout-3">
    <img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="1280" data-image-height="853" src='<?=base_url()?>/view/<?=$datauser['image']?>'>
    <p class="u-align-center u-large-text u-text u-text-variant u-text-3"><?=$cetak2 , $e2?></p>
    <a href="pagedesti.php?id=<?=$datauser['iddesti']?>" class="u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-btn-3">learn more</a>
  </div>
</div>
</section>
<section class="u-carousel u-slide u-block-b184-1" id="carousel_2d11" data-interval="5000" data-u-ride="carousel">
  <ol class="u-absolute-hcenter u-carousel-indicators u-block-b184-2">
    <li data-u-target="#carousel_2d11" data-u-slide-to="0" class="u-active u-grey-30"></li>
    <li data-u-target="#carousel_2d11" class="u-grey-30" data-u-slide-to="1"></li>
  </ol>
  <div class="u-carousel-inner" role="listbox">
    <?php 
    $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_news WHERE display = '1' ") or die (mysqli_error($mysqli));
    $datauser = mysqli_fetch_array($sqluser);
    $klmt1 = $datauser['title'];
    $klmt11 = $datauser['info'];
    $jk1 = 10;
    $jk11 = 100;
    $cetak1 = substr($klmt1, $jk1,1);
    if ($cetak1 != " ") {
     while ($cetak1 != " ") {
       $i1 = 1;
       $i11 = 12;
       $e1 = "...";
       $jk1 = $jk1 +$i1 ;
       $jk11 = $jk11 +$i11 ;
       $klmt1 = $datauser['title'];
       $cetak1 = substr($klmt1, $jk1,1);
       $klmt11 = $datauser['info'];
       $cetak11 = substr($klmt11, $jk11,1);
     }
   } 
   $cetak1 = substr($klmt1,0, $jk1);
   $cetak11 = substr($klmt11,0, $jk11);
   ?>
   <div class="u-active u-carousel-item u-clearfix u-grey-10 u-section-4-1">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width-sm u-expanded-width-xs u-gradient u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-size-30">
              <div class="u-layout-row">
                <img src='<?=base_url()?>/view/<?=$datauser['image']?>' class="u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1" >
                <div class="u-container-layout u-valign-bottom u-container-layout-1"></div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-col">
                <div class="u-container-style u-layout-cell u-left-cell u-palette-4-light-1 u-size-30 u-layout-cell-2">
                  <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-2">
                    <h1 class="u-align-left u-text u-title u-text-1"><?=$cetak1 , $e1?></h1>
                    <p class="u-align-justify u-text u-text-2"><?=$cetak11 , $e1?></p>
                    <a href="pagenews.php?id=<?=$datauser['idnews']?>" class="u-border-2 u-border-white u-btn u-button-style u-btn-1">learn more</a>
                  </div>
                </div>
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                  <div class="u-container-layout"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
  $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_news WHERE display = '2' ") or die (mysqli_error($mysqli));
  $datauser = mysqli_fetch_array($sqluser);
  $klmt12 = $datauser['title'];
  $klmt112 = $datauser['info'];
  $jk12 = 10;
  $jk112 = 100;
  $cetak12 = substr($klmt12, $jk12,1);
  if ($cetak12 != " ") {
   while ($cetak12 != " ") {
    $i12 = 1;
    $i112 = 12;
    $e12 = "...";
    $jk12 = $jk12 +$i12 ;
    $jk112 = $jk112 +$i112 ;
    $klmt12 = $datauser['title'];
    $cetak12 = substr($klmt12, $jk12,1);
    $klmt112 = $datauser['info'];
    $cetak112 = substr($klmt112, $jk112,1);
  }
} 
$cetak12 = substr($klmt12,0, $jk12);
$cetak112 = substr($klmt112,0, $jk112);
?>
<div class="u-carousel-item u-clearfix u-grey-10 u-section-4-2">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-expanded-width-sm u-expanded-width-xs u-gradient u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
      <div class="u-gutter-0 u-layout">
        <div class="u-layout-row">
          <div class="u-size-30">
            <div class="u-layout-row">
              <img src='<?=base_url()?>/view/<?=$datauser['image']?>' class="u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1">
              <div class="u-container-layout u-valign-bottom u-container-layout-1"></div>
            </div>
          </div>
          <div class="u-size-30">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-left-cell u-palette-1-light-1 u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h1 class="u-align-left u-text u-title u-text-1"><?=$cetak12 , $e12?></h1>
                  <p class="u-align-justify u-text u-text-2"><?=$cetak112 , $e12  ?></p>
                  <a href="pagenews.php?id=<?=$datauser['idnews']?>" class="u-border-2 u-border-white u-btn u-button-style u-btn-1">learn more</a>
                </div>
              </div>
              <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-left-cell u-size-30 u-layout-cell-3">
                <div class="u-container-layout"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-text-grey-30 u-block-b184-3" href="#carousel_2d11" role="button" data-u-slide="prev">
  <span aria-hidden="true">
    <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
      c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
    </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-text-grey-30 u-block-b184-4" href="#carousel_2d11" role="button" data-u-slide="next">
    <span aria-hidden="true">
      <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
        c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
      </span>
      <span class="sr-only">Next</span>
    </a>
  </section>
  <?php 
  $id = @$_GET['id'];
  $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_contact") or die (mysqli_error($mysqli));
  $datauser = mysqli_fetch_array($sqluser);
  ?> 
  <section class="u-align-left u-clearfix u-image u-shading u-section-5" id="sec-0279">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-left u-container-style u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-custom-font u-font-titillium-Web u-text u-text-body-alt-color u-title u-text-1"><?=$datauser['info1']?></h1>
          <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"><?=$datauser['info2']?></p>
          <div class="u-social-icons u-spacing-10 u-text-body-alt-color u-social-icons-1">
            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cb72"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-cb72" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
            </a>
            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f751"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f751" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
            </a>
            <a class="u-social-url" target="_blank" href=https://www.instagram.com/kusumaindahtour/><span class="u-icon u-icon-circle u-social-instagram u-social-type-logo u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-96f2"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-96f2" class="u-svg-content"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-google u-social-type-logo u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b221"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-b221" class="u-svg-content"><path d="M62.2,81.6c-8.6,11.2-24.6,14.4-37.6,10C10.9,87,0.8,73.2,1,58.5c-0.8-18,15.2-34.6,33.1-34.9 c9.2-0.8,18.2,2.7,25,8.6c-2.9,3.1-5.7,6.2-8.9,9.2c-6.2-3.8-13.5-6.5-20.6-4C18.1,40.7,11,54.2,15.4,65.6 c3.5,11.8,17.8,18.3,29.2,13.2c5.8-2.1,9.7-7.4,11.3-13.2c-6.6-0.1-13.2,0-20.1-0.3c0-3.9,0-7.9,0-11.9c11.2,0,22.2,0,33.3,0 C69.9,63.4,68.3,73.9,62.2,81.6z M110.9,63.7c-3.4,0-6.6,0-10,0c0,3.4,0,6.6,0,10c-3.4,0-6.6,0-10,0c0-3.4,0-6.6,0-10 c-3.4,0-6.6,0-10,0c0-3.4,0-6.6,0-10c3.4,0,6.6,0,10,0c0-3.4,0-6.6,0.1-10c3.4,0,6.6,0,10,0c0,3.4,0,6.6,0,10c3.4,0,6.6,0,10,0 C110.9,56.9,110.9,60.3,110.9,63.7z"></path></svg></span>
          </a>
        </div>
      </div>
    </div>
    <div class="u-align-left u-container-style u-group u-shape-rectangle u-group-2">
      <div class="u-container-layout u-container-layout-2">
        <h1 class="u-custom-font u-font-titillium-Web u-text u-text-body-alt-color u-title u-text-3">Contact Us</h1><span class="u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-5"><img src="<?=base_url()?>/images/whatsapp.png" alt=""></span>
        <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-4">WhatsApp<br>
        </p>
        <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-5"><?=$datauser['contact']?>
      </p>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-6">
        <span style="font-style: italic;"><?=$datauser['email']?></span>
        <br>
      </p>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-7">Email<br>
      </p><span class="u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-6"><img src="<?=base_url()?>/images/gmail1.png" alt=""></span>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-8"><?=$datauser['info']?></p>
    </div>
  </div>
</div>
</section>

<footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-1cad"><div class="u-clearfix u-sheet u-sheet-1">
  <a href="#carousel_a7f9" class="u-image u-logo u-image-1" data-image-width="2400" data-image-height="2400">
    <img src="<?=base_url()?>/images/KusumaIndah11.png" class="u-logo-image u-logo-image-1" data-image-width="80">
  </a>
  <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
    <a class="u-social-url" target="_blank" href=https://web.facebook.com/andikasatriaw><span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f46b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-f46b"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
    </a>
    <a class="u-social-url" target="_blank" href=https://twitter.com/andikaswxc><span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4aa8"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-4aa8"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
    </a>
    <a class="u-social-url" target="_blank" href=https://www.instagram.com/andikasw/><span class="u-icon u-icon-circle u-social-instagram u-social-type-logo u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-976b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-976b"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
  </a>
  <a class="u-social-url" target="_blank" href=https://www.linkedin.com/in/andikasw/><span class="u-icon u-icon-circle u-social-linkedin u-social-type-logo u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-476a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-476a"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg></span>
</a>
</div>
<p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">Copyright © 2021.<a href="https:/kusumaindah.com"><span>KusumaIndah.com</span></a><br>Created by <a href=https://www.linkedin.com/in/andikasw/><span>andikasw</span></a></p>
</div></footer>
<div class="chating" style=" z-index: 99999; width: 190px; padding: 15px; right: 0; bottom: 50px; position: fixed; "> <a href="https://wa.widget.web.id/37ce6d" target="_blank"><img alt="wa" src="https://suckittrees.com/image-asset-wa.png" title="wa" style="width: 100%;"></a></div>
<?php  
    // include_once 'patrials/footer.php';

?>

</body>
</html>