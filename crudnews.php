<?php 
include('config/config.php');
require 'vendor/autoload.php';
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
if(isset($_SESSION['user'])){
  ?>
  <!DOCTYPE html>
  <html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Upload News</title>
    <link rel="icon"  href="images/KusumaIndah11.png">
    <link rel="stylesheet" href="<?=base_url()?>/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="<?=base_url()?>/css/Page-news-crud.css" media="screen">
    <script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
    <link href="<?=base_url()?>/css/bootstrap.min_3.css" rel="stylesheet" />
    <script src="<?=base_url()?>/js/jquery.min_3.js"></script>
    <script class="u-script" type="text/javascript" src="<?=base_url()?>/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?=base_url()?>/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.5.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <style>
      .pagination {
        display: 
        inline-block;
      }
      .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
      }
      .pagination a.active {
        background-color: #4caf50;
        color: white;
      }
      .pagination a:hover:not(.active){
        background-color: #ddd;
      }
    </style>


    <script type="application/ld+json">{
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "projectwebtravel",
      "url": "index.html",
      "logo": "images/KusumaIndah11.png",
      "sameAs": []
    }</script>
    <meta property="og:title" content="Page news crud">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body">
  <header class="u-clearfix u-header u-image u-sticky u-header" id="sec-6faf" data-image-width="1600" data-image-height="1067"><div class="u-clearfix u-sheet u-sheet-1">
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
        <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Menu</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a href="crudtravel.php" class="u-button-style u-nav-link u-white">Travel Reguler</a>
        </li><li class="u-nav-item"><a href="crudtrip.php" class="u-button-style u-nav-link u-white">Open &amp; Private Trip</a>
        </li><li class="u-nav-item"><a href="crudrental.php" class="u-button-style u-nav-link u-white">Rent Car</a>
        </li><li class="u-nav-item"><a href="crudmice.php" class="u-button-style u-nav-link u-white">MICE</a>
        </li></ul>
      </div>
    </li><li class="u-nav-item"><a href="crudprofil.php" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Profil</a>
    </li><li class="u-nav-item"><a href="cruddesti.php" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Destination</a>
    </li><li class="u-nav-item"><a href="crudnews.php" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">News</a>
    </li><li class="u-nav-item"><a href="crudcontact.php" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Contact</a>
    </li><li class="u-nav-item"><a href="logout.php" onClick="return confirm('Apakah Anda Yakin Ingin Keluar?')" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 16px 2px;">Logout</a>
    </li></ul>
  </div>
  <div class="u-custom-menu u-nav-container-collapse">
    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
      <div class="u-sidenav-overflow">
        <div class="u-menu-close"></div>
        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 16px 2px;">Menu</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a href="crudtravel.php" class="u-button-style u-nav-link">Travel Reguler</a>
        </li><li class="u-nav-item"><a href="crudtrip.php" class="u-button-style u-nav-link">Open &amp; Private Trip</a>
        </li><li class="u-nav-item"><a href="crudrental.php" class="u-button-style u-nav-link">Rent Car</a>
        </li><li class="u-nav-item"><a href="crudmice.php" class="u-button-style u-nav-link">MICE</a>
        </li></ul>
      </div>
    </li><li class="u-nav-item"><a href="crudprofil.php" class="u-button-style u-nav-link" style="padding: 16px 2px;">Profil</a>
    </li><li class="u-nav-item"><a href="cruddesti.php" class="u-button-style u-nav-link" style="padding: 16px 2px;">Destination</a>
    </li><li class="u-nav-item"><a href="crudnews.php" class="u-button-style u-nav-link" style="padding: 16px 2px;">News</a>
    </li><li class="u-nav-item"><a href="crudcontact.php" class="u-button-style u-nav-link" style="padding: 16px 2px;">Contact</a>
    </li><li class="u-nav-item"><a href="logout.php" onClick="return confirm('Apakah Anda Yakin Ingin Keluar?')" class="u-button-style u-nav-link" style="padding: 16px 2px;">Logout</a>
    </li></ul>
  </div>
</div>
<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
</div>
</nav>
      </div></header> 

    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-635d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-palette-1-light-1 u-shape u-shape-rectangle u-shape-1"></div>
        <h1 class="u-custom-font u-font-arial u-text u-text-1">Upload News</h1>
        <div class="u-form u-form-1">
          <form action="" enctype="multipart/form-data" method="POST" class="u-clearfix u-form-spacing-15  u-inner-form" style="padding: 15px;" source="custom" name="form">
            <div class="u-form-group u-form-name u-form-group-1">
              <label for="name-6797" class="u-form-control-hidden u-label">Name</label>
              <input type="text" placeholder="Title" id="name-6797" name="title" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="" autofocus="autofocus">
            </div>
            <div class="u-form-group u-form-group-2">
              <label for="email-6797" class="u-form-control-hidden u-label"></label>
              <input type="file" placeholder="Image" id="email-6797" name="image" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
            </div>
            <div class="u-form-group u-form-select u-form-group-3">
              <label for="select-8dad" class="u-form-control-hidden u-label">Select</label>
              <div class="u-form-select-wrapper">
                <select id="select-8dad" name="display" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
                  <option value="0">Displayed?</option>
                  <option value="1">Box 1</option>
                  <option value="2">Box 2</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-form-message u-form-group-4">
              <label for="message-6797" class="u-form-control-hidden u-label">Address</label>
              <textarea placeholder="Information" rows="4" cols="50" id="message-6797" name="info" class="u-border-1 u-border-grey-30 u-input u-input-rectangle ckeditor" required=""></textarea>
            </div>
            <div class="u-align-left u-form-group u-form-submit u-form-group-5">
              <!-- <a href="#" class="u-btn u-btn-submit u-button-style u-gradient u-none u-btn-1">Submit</a> -->
              <input type="submit" value="Submit" class="u-btn u-btn-submit u-button-style u-gradient u-none u-btn-1" name="submit">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
            <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="sec-474e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="4.5%">
              <col width="2.4%">
              <col width="51.8%">
              <col width="32.1%">
              <col width="9.2%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 69px;">
                <th class="u-border-1 u-border-black u-gradient u-table-cell u-table-cell-1">Display</th>
                <th class="u-border-1 u-border-black u-gradient u-table-cell u-table-cell-2">Image</th>
                <th class="u-border-1 u-border-black u-gradient u-table-cell u-table-cell-3">Title</th>
                <th class="u-border-1 u-border-black u-gradient u-table-cell u-table-cell-4">Information</th>
                <th class="u-border-1 u-border-black u-gradient u-table-cell u-table-cell-5">Action</th>
              </tr>
            </thead>
            <?php 
            $batas = 5;
            $hal = @$_GET['hal'];
            if (empty($hal)) {
              $posisi = 0;
              $hal = 1;       
            } else{
              $posisi = ($hal - 1) * $batas;
            }
            $no = 1;
            $sqluser = "SELECT * FROM tb_news ORDER BY dte DESC LIMIT $posisi, $batas";
            $sqldata = mysqli_query($mysqli, $sqluser) or die (mysqli_error($mysqli));
            $queryJml ="SELECT * FROM tb_news   ";
            $no = $posisi + 1;

            if (mysqli_num_rows($sqldata) > 0) {
              while($datauser = mysqli_fetch_array($sqldata))
              { 
                ?>
                <tbody class="u-table-body">
                  <tr style="height: 82px;">
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><?=$datauser['display']?></td>
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><img width="120" height="120" src='view/<?=$datauser['image']?>'></td>
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><?=$datauser['title']?></td>
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><?=$datauser['info']?></td>
                    <td class="u-border-1 u-border-grey-30 u-table-cell"><a href="editnews.php?id=<?=$datauser['idnews']?>" class="u-btn u-btn-submit u-button-style u-gradient u-none u-btn-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/edit.png" alt=""></span></a><a onClick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" href="m.php?id=<?=$datauser['idnews']?>" class="u-btn u-btn-submit u-button-style u-gradient u-none u-btn-1"><span class="u-file-icon u-icon u-icon-2"><img src="images/delete.png" alt=""></span></a>
                    </td>
                  </tr>
                </tbody>
                <?php 
              } 
            }
            ?>
          </table>
          <?php
          // if(@$_POST['pencarian'] == '') { 
          ?>
          <div style="float:left;">
            <?php 
            $jml = mysqli_num_rows(mysqli_query($mysqli, $queryJml));
            echo "Jumlah data : <b>$jml</b>";
            ?>
          </div>
          <div  style="float:right;">
            <ul class="pagination pagination-sm" style="margin:0">
              <?php 
              $jml_hal = ceil($jml / $batas);
              for ($i=1; $i <= $jml_hal ; $i++) { 
                if ($i != $hal) {
                  echo "<li><a href=\"?hal=$i\">$i</a></li>";
                } else {
                  echo "<li class=\"active\"><a>$i</a></li>";
                }
              }
              ?>
            </ul>
          </div>
        </ul>
      </div>

    </div>
  </div>
</section>


 
</section>
  <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-1cad"><div class="u-clearfix u-sheet u-sheet-1">
  <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="2400" data-image-height="2400">
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


<?php 
}else{
  echo "<script>window.location='login.php';</script>";
}
if(isset($_POST['submit'])){
  $tgl = date("Y-m-d H:i:s");
  $uuid = Uuid::uuid4()->toString();
  $title = trim(mysqli_real_escape_string($mysqli, $_POST['title']));
  $info = trim(mysqli_real_escape_string($mysqli, $_POST['info']));
  $display = trim(mysqli_real_escape_string($mysqli, $_POST['display']));

  $mmk = $_FILES['image']['name'];
  $jbt = $_FILES['image']['tmp_name'];
  $path = "view/".$mmk;

  if (move_uploaded_file($jbt, $path)) {
    # code...
    // mysqli_query($mysqli, "UPDATE profil SET gambar = '$mmk', info = '$info' WHERE id = '0'") or die (myqli_error($mysqli)) ;
    // echo "<script>alert('Data berhasil di ubah!');window.location='crudprofil.php';</script>";
    $sqli = mysqli_query($mysqli, "INSERT INTO tb_news (idnews, title, display, image, info, dte) VALUES ('$uuid', '$title', '$display', '$mmk', '$info', '$tgl')")or die(mysql_error());
    echo "<script>alert('Data berhasil di tambahkan!');window.location='crudnews.php';</script>";
  }
  else {

  }
}
?>