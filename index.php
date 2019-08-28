<?php
require('sys/framework_load.php'); # Framework
?>
<html lang="th" class=" js no-touch" onload="getcurrentpage();">
  <head>
    <!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">-->
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-team-slider.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(){
        hash = location.hash.substr(1);
        if (hash) {
          loadDocy(hash);
        } else {
          loadDocy();
        }
      });
      function loadDocy(url) {

        var xhttp = new XMLHttpRequest();
        {
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("content").innerHTML = this.responseText;
             var loaded = url;
            }
          };
          xhttp.open("GET", "framework/page_load.php?p=" + url, true);
          xhttp.send();

          scrollToTop();
        }
      }
      const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
          window.requestAnimationFrame(scrollToTop);
          window.scrollTo(0, c - c / 8);
        }
      };
    </script>
    <meta charset="UTF-8">
    <title><?php echo $WEB_CONFIG['SITE_NAME']; ?></title>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <meta charset="utf-8">
    <meta name="robots" content="noimageindex" />
    <meta name="google" content="notranslate" />
  </head>
  <body>
    <!--HEADER START-->
    <div class="main-navigation">
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href=""><img src="assets/img/school-title-logo.png" width="40%" draggable="false"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#home" onclick="loadDocy('home')">หน้าหลัก</a></li>
              <li><a href="#about" onclick="loadDocy('about')">ข้อมูลโรงเรียน</a></li>
              <li><a href="#executive" onclick="loadDocy('executive')">ทำเนียบผู้บริหาร</a></li>
              <li><a href="#personnel" onclick="loadDocy('personnel')">ทำเนียบบุคลากร</a></li>
              <li><a href="#contact" onclick="loadDocy('contact')">ติดต่อเรา</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!--HEADER END-->

    <!--BANNER START-->
    <div class="header">
      <div class="container">
        <div class="row">
          <center>
          <div class="ism-slider" id="my-slider">
            <ol>
              <li>
                <img src="ism/image/slides/_u/1549794742318_418067.png">
              </li>
              <li>
                <img src="ism/image/slides/_u/1549794923789_316170.jpg">
                <a class="ism-caption ism-caption-0" href="https://www.facebook.com/CRUmusicband" target="_self">กิจกรรมเทศกาลดนตรี MusicWeek</a>
              </li>
            </ol>
          </div>
          </center>
        </div>
      </div>
    </div>
    <!--BANNER END-->

    <!--CTA1 START-->
    <div class="cta-1">
      <div class="container">
      </div>
    </div>
    <!--CTA1 END-->
    <!--CTA 2 -->
    <div class="cta-2">
      <div class="container">
        <div id="content"></div>
      </div>
    </div>

    <!--FOOTER END-->
    <div class="footer-bottom">
      <div class="container">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
          <div class="footer_copyright">
            <p> <?php echo date("Y"); ?> © Copyright, All Rights Reserved.</p>
            <div class="credits">
              โรงเรียนชลราษฎรอำรุง 215 หมู่ 3 ถนน พระยาสัจจา ต.บ้านสวน อ.เมือง จ.ชลบุรี 20000<br>
              โทร : 038-287078 โทรสาร : 038-286079
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>

    <link rel="stylesheet" href="ism/css/my-slider.css"/>
    <script src="ism/js/ism-2.2.min.js"></script>
  </body>
</html>
