<?php 
include('config/config.php');
require 'vendor/autoload.php';
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <link rel="icon"  href="images/KusumaIndah11.png">
  <title>Rent Car</title>
  <link rel="stylesheet" href="<?=base_url()?>/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="<?=base_url()?>/css/Page-rental.css" media="screen">
  <script class="u-script" type="text/javascript" src="<?=base_url()?>/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="<?=base_url()?>/js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.5.1, nicepage.com">






  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900">





  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "projectwebtravel",
    "url": "index.html",
    "logo": "images/KusumaIndah11.png",
    "sameAs": []
  }</script>
  <meta property="og:title" content="Page rental">
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
  </li><li class="u-nav-item"><a href="home.php#carousel_293f" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Profil</a>
  </li><li class="u-nav-item"><a href="home.php#carousel_2618" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Destination</a>
  </li><li class="u-nav-item"><a href="home.php#carousel_2d11" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">News</a>
  </li><li class="u-nav-item"><a href="home.php#sec-0279" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Contact</a>
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
  </li><li class="u-nav-item"><a href="home.php#carousel_293f" class="u-button-style u-nav-link" style="padding: 16px 2px;">Profil</a>
  </li><li class="u-nav-item"><a href="home.php#carousel_2618" class="u-button-style u-nav-link" style="padding: 16px 2px;">Destination</a>
  </li><li class="u-nav-item"><a href="home.php#carousel_2d11" class="u-button-style u-nav-link" style="padding: 16px 2px;">News</a>
  </li><li class="u-nav-item"><a href="home.php#sec-0279" class="u-button-style u-nav-link" style="padding: 16px 2px;">Contact</a>
  </li></ul>
</div>
</div>
<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
</div>
</nav>
</div></header>
<?php 
$id = @$_GET['id'];
$sqluser = mysqli_query($mysqli,"SELECT * FROM tb_rental1  ") or die (mysqli_error($mysqli));
$datauser = mysqli_fetch_array($sqluser);
?> 
<section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-0965">
  <div class="u-clearfix u-sheet u-valign-bottom-sm u-valign-bottom-xs u-sheet-1">
    <div id="carousel-b557" data-interval="0" data-u-ride="false" class="u-carousel u-carousel-duration-0 u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1" data-pause="false">
      <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
        <li data-u-target="#carousel-b557" class="u-active" data-u-slide-to="0"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <img src='view/<?=$datauser['image']?>'  class="u-active u-carousel-item u-container-style u-image u-slide u-image-1" data-image-width="1280" data-image-height="853">
        <div class="u-container-layout u-container-layout-1"></div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-icon-circle u-text-palette-1-base u-carousel-control-1" href="#carousel-b557" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
            c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
          <span class="sr-only">+Previous</span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-icon-circle u-text-palette-1-base u-carousel-control-2" href="#carousel-b557" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
              c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">+Next</span>
          </a>
        </div>
        <div class="u-container-style u-group u-opacity u-opacity-75 u-palette-1-light-1 u-group-1">
          <div class="u-container-layout u-container-layout-2">
            <div id="carousel-b4c3" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-2">
              <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-2">
                <li data-u-target="#carousel-b4c3" class="u-active u-grey-15" data-u-slide-to="0"></li>
                <li data-u-target="#carousel-b4c3" class="u-grey-15" data-u-slide-to="1"></li>
                <li data-u-target="#carousel-b4c3" class="u-grey-15" data-u-slide-to="2"></li>
              </ol>
              <div class="u-carousel-inner" role="listbox">
                <div class="u-active u-carousel-item u-container-style u-slide">
                  <div class="u-container-layout u-container-layout-3">
                    <div class="u-expanded-width-xs u-palette-3-light-1 u-shape u-shape-rectangle u-shape-1"></div>
                    <h2 class="u-align-center u-custom-font u-font-arial u-text u-text-body-color u-text-1">Rent Car?</h2>
                    <p class="u-align-justify u-custom-font u-font-arial u-text u-text-2"><?=$datauser['info1']?></p>
                  </div>
                </div>
                <div class="test-slide u-carousel-item u-container-style u-slide">
                  <div class="u-container-layout u-container-layout-4">
                    <div class="u-palette-3-light-1 u-shape u-shape-rectangle u-shape-2"></div>
                    <h2 class="u-align-center-xl u-custom-font u-font-arial u-text u-text-body-color u-text-3">Value</h2>
                    <p class="u-align-justify u-custom-font u-font-arial u-text u-text-4"><?=$datauser['info2']?></p>
                  </div>
                </div>
                <div class="test-slide u-carousel-item u-container-style u-slide">
                  <div class="u-container-layout u-container-layout-5">
                    <div class="u-palette-3-light-1 u-shape u-shape-rectangle u-shape-3"></div>
                    <h3 class="u-align-center u-custom-font u-font-arial u-text u-text-body-color u-text-5">Terms &amp; Conditions</h3>
                    <p class="u-align-justify u-custom-font u-font-arial u-text u-text-6"><?=$datauser['info3']?></p>
                  </div>
                </div>
              </div>
              <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-spacing-5 u-text-grey-15 u-carousel-control-3" href="#carousel-b4c3" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                  </span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-spacing-5 u-text-grey-15 u-carousel-control-4" href="#carousel-b4c3" role="button" data-u-slide="next">
                  <span aria-hidden="true">
                    <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                      c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php 
        $id = @$_GET['id'];
        $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_rental2 WHERE idrental = '$id' ") or die (mysqli_error($mysqli));
        $datauser = mysqli_fetch_array($sqluser);
        ?> 
        <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="carousel_d006">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-palette-1-base u-shape-rectangle u-group-1">
              <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-1">
                <img src='view/<?=$datauser['image']?>' alt="" class="u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-sm u-absolute-hcenter-xs u-expanded u-image u-image-default u-preserve-proportions" data-image-width="1280" data-image-height="853">
                <h3 class="u-text u-text-default u-text-1"><?=$datauser['price']?></h3>
              </div>
            </div>
            <div class="u-container-style u-group u-opacity u-opacity-75 u-palette-1-light-1 u-group-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <div id="carousel-e333" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
                  <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                    <li data-u-target="#carousel-e333" class="u-active u-grey-15" data-u-slide-to="0"></li>
                    <li data-u-target="#carousel-e333" class="u-grey-15" data-u-slide-to="1"></li>
                  </ol>
                  <div class="u-carousel-inner" role="listbox">
                    <div class="u-active u-carousel-item u-container-style u-slide">
                      <div class="u-container-layout u-container-layout-3">
                        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-palette-3-light-1 u-shape u-shape-rectangle u-shape-1"></div>
                        <h2 class="u-align-center u-custom-font u-font-arial u-text u-text-body-color u-text-2"><?=$datauser['title']?></h2>
                        <p class="u-align-justify u-custom-font u-font-arial u-text u-text-3"><?=$datauser['info1']?></p>
                      </div>
                    </div>
                    <div class="test-slide u-carousel-item u-container-style u-slide">
                      <div class="u-container-layout u-valign-top u-container-layout-4">
                        <p class="u-align-justify u-custom-font u-font-arial u-text u-text-4"><?=$datauser['info2']?></p>
                      </div>
                    </div>
                  </div>
                  <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-spacing-5 u-text-grey-15 u-carousel-control-1" href="#carousel-e333" role="button" data-u-slide="prev">
                    <span aria-hidden="true">
                      <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                        c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                      </span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-spacing-5 u-text-grey-15 u-carousel-control-2" href="#carousel-e333" role="button" data-u-slide="next">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                          c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                        </span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="u-align-center u-clearfix u-grey-10 u-section-3" id="sec-0605">
              <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":3}--><!--/products_options_json-->
                <div class="u-expanded-width u-products u-repeater u-repeater-1"><!--product_item-->            
                  <?php 
                  $id = @$_GET['id'];
                  $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_rental2 WHERE idrental != '$id' ") or die (mysqli_error($mysqli));
                  // $datauser = mysqli_fetch_array($sqluser);
                  if (mysqli_num_rows($sqluser) > 0) {
                    while($datauser = mysqli_fetch_array($sqluser))
                    {
                      ?>
                      <div class="u-align-center u-container-style u-products-item u-repeater-item u-shape-rectangle">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--product_image-->
                          <img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-1" src='view/<?=$datauser['image']?>' data-image-width="1280" data-image-height="852"><!--/product_image--><!--product_title-->
                          <h4 class="u-custom-font u-font-arial u-product-control u-text u-text-1">
                            <a class="u-product-title-link" href="pagerental.php?id=<?=$datauser['idrental']?>"><!--product_title_content--><?=$datauser['title']?><!--/product_title_content--></a>
                          </h4><!--/product_title--><!--product_price-->
                          <div class="u-product-control u-product-price u-product-price-1">
                            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                              <div class="u-hide-price u-old-price"><!--product_old_price_content-->$12<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                              <div class="u-price u-text-palette-1-light-1" style="font-size: 1.25rem; font-weight: 700;"><!--product_regular_price_content--><?=$datauser['price']?><!--/product_regular_price_content--></div><!--/product_regular_price-->
                            </div>
                          </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":"learn more"}--><!--/options_json-->
                          <a href="pagerental.php?id=<?=$datauser['idrental']?>" class="u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-product-control u-btn-1"><!--product_button_content-->learn more<!--/product_button_content--></a><!--/product_button-->
                        </div>
                      </div><!--/product_item--><!--product_item-->
                      <?php }} ?>
                    </div><!--/products-->
                  </div>
                </section>
                <?php 
            $id = @$_GET['id'];
            $sqluser = mysqli_query($mysqli,"SELECT * FROM tb_contact") or die (mysqli_error($mysqli));
            $datauser = mysqli_fetch_array($sqluser);
            ?> 
            <section class="u-align-left u-clearfix u-image u-shading u-section-4" id="sec-90dd">
              <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-align-left u-container-style u-group u-shape-rectangle u-group-1">
                  <div class="u-container-layout u-container-layout-1">
                    <h1 class="u-custom-font u-font-titillium-Web u-text u-text-body-alt-color u-title u-text-1"><?=$datauser['info1']?></h1>
                    <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"><?=$datauser['info2']?></p>
                    <div class="u-social-icons u-spacing-10 u-text-body-alt-color u-social-icons-1">
                      <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cb72"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-cb72" class="u-svg-content"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                      </a>
                      <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f751"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f751" class="u-svg-content"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                      </a>
                      <a class="u-social-url" target="_blank" href=https://www.instagram.com/kusumaindahtour/><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-96f2"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-96f2" class="u-svg-content"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                      </a>
                      <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-google u-social-icon u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b221"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-b221" class="u-svg-content"><path d="M62.2,81.6c-8.6,11.2-24.6,14.4-37.6,10C10.9,87,0.8,73.2,1,58.5c-0.8-18,15.2-34.6,33.1-34.9 c9.2-0.8,18.2,2.7,25,8.6c-2.9,3.1-5.7,6.2-8.9,9.2c-6.2-3.8-13.5-6.5-20.6-4C18.1,40.7,11,54.2,15.4,65.6 c3.5,11.8,17.8,18.3,29.2,13.2c5.8-2.1,9.7-7.4,11.3-13.2c-6.6-0.1-13.2,0-20.1-0.3c0-3.9,0-7.9,0-11.9c11.2,0,22.2,0,33.3,0 C69.9,63.4,68.3,73.9,62.2,81.6z M110.9,63.7c-3.4,0-6.6,0-10,0c0,3.4,0,6.6,0,10c-3.4,0-6.6,0-10,0c0-3.4,0-6.6,0-10 c-3.4,0-6.6,0-10,0c0-3.4,0-6.6,0-10c3.4,0,6.6,0,10,0c0-3.4,0-6.6,0.1-10c3.4,0,6.6,0,10,0c0,3.4,0,6.6,0,10c3.4,0,6.6,0,10,0 C110.9,56.9,110.9,60.3,110.9,63.7z"></path></svg></span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-group u-shape-rectangle u-group-2">
                  <div class="u-container-layout u-container-layout-2">
                    <h1 class="u-custom-font u-font-titillium-Web u-text u-text-body-alt-color u-title u-text-3">Contact Us</h1><span class="u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-5"><img src="images/whatsapp.png" alt=""></span>
                    <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-4">WhatsApp<br>
                    </p>
                    <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-5"><?=$datauser['contact']?>
                    </p>
                    <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-6">
                      <span style="font-style: italic;"><?=$datauser['email']?></span>
                      <br>
                    </p>
                    <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-7">Email<br>
                    </p><span class="u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-6"><img src="images/gmail1.png" alt=""></span>
                    <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-8"><?=$datauser['info']?></p>
                  </div>
                </div>
              </div>
            </section>


<footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-1cad"><div class="u-clearfix u-sheet u-sheet-1">
  <a href="#carousel_a7f9" class="u-image u-logo u-image-1" data-image-width="2400" data-image-height="2400">
    <img src="images/KusumaIndah11.png" class="u-logo-image u-logo-image-1" data-image-width="80">
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

              </body>
              </html>