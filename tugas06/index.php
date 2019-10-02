<?php
require 'inkphp.php';
$kelompok11 = query ("SELECT * FROM kelompok11");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TUGAS 06 PHP</title>
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />

  </head>
  <body>    
    <!-- Hero section -->
    <section id="hero" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
              <a href="#hero" class="navbar-brand">The Town</a>
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#introduction">Materi PHP</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#work">Motivasi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#contact">Input Data</a>
              </li>                    
            </ul>
          </div>        
        </div>
      </nav>
      
      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title">Kelompok XI</h2>
            <p class="tm-hero-subtitle">
              TUGAS 06 PHP
              <br />by 
              <br> SUAIB S, ALDE OCTORIADE, KURNIATI KUSNO
            </p>
        </div>        
      </div>

      <div class="tm-next tm-intro-next">
        <a href="#introduction" class="text-center tm-down-arrow-link">
          <i class="fas fa-3x fa-caret-down tm-down-arrow"></i>
        </a>
      </div>      
    </section>

    <section id="introduction" class="tm-section-pad-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="img/the-town-01.png" alt="Image" class="img-fluid tm-intro-img" />
          </div>
          <div class="col-lg-6">
            <div class="tm-intro-text-container">
                <h2 class="tm-text-primary mb-4 tm-section-title">TENTANG PHP</h2>
                <p class="mb-4 tm-intro-text">
                  PHP <strong> adalah </strong>  bahasa pemrograman script server-side yang didesain 
                  untuk pengembangan web. Selain itu, PHP juga bisa digunakan sebagai bahasa pemrograman umum (wikipedia).
                  PHP di kembangkan pada tahun 1995 oleh Rasmus Lerdorf, dan sekarang dikelola oleh The PHP Group. 
                  Situs resmi PHP beralamat di http://www.php.net.
              </p>
            </div>
          </div>
        </div>
    </section>
    <section id="work" class="tm-section-pad-top">
      <div class="container tm-container-gallery">
        <div class="row">
          <div class="text-center col-12">
              <h2 class="tm-text-primary tm-section-title mb-4">Motivasi</h2>
              <p class="mx-auto tm-work-description">
                “Janganlah menganggap remeh hal-hal yang terdekat dengan hati Anda. Rangkullah mereka seperti sama berharganya dengan hidup Anda, karena tanpa mereka hidup adalah sia-sia” - Peribahasa Cina
                “Do not take for granted the things closest to your heart. Cling to them as you would with your life, for without them, life is meaningless” - Chinese Proverbs
              </p>
          </div>            
        </div>
  
    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
      <div class="container tm-container-contact">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4 tm-section-title">Masukkan Data</h2>
                <div class="mb-5 tm-underline">
                  <div class="tm-underline-inner"></div>
                </div>
                <p class="mb-5">
                  “Kembangkan sikap untuk selalu menjadi lebih baik. 
                  Membuat perbedaan yang kecil dalam tindakan akan menghasilkan perbedaan 
                  yang besar dalam hasil yang diperoleh” - Brian Tracy <br> <br>
                  <a href = "tambah.php">Tambah Data Mahasiswa</a>
                </p>
            </div>

          <table border= "2" callpadding="10", cellspassing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>KELAS</th>
                <th>TANGGAL LAHIR</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach( $kelompok11 as $row) : ?>
            <tr> 
              <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?NIM=<?= $row["NIM"]; ?>">EDIT</a> |
                <a href="hapus.php?NIM=<?= $row["NIM"]; ?>" onclick=" return confirm ('Hapus Data Yang Dipilih.?');">HAPUS</a>
            </td>
          <td><?= $row["NIM"]; ?></td>
          <td><?= $row["NAMA"]; ?></td>
          <td><?= $row["KELAS"]; ?></td>
          <td><?= $row["TANGGAL_LAHIR"]; ?></td>
          <td><?= $row["JENIS_KELAMIN"]; ?></td>
          <td><?= $row["ALAMAT"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
            </table>
        </div>
      </div>
      <footer class="text-center small tm-footer">
          <p class="mb-0">
            Copyright &copy; 2019  </p>
        </footer>
    </section>
    <script src="js/jquery-1.9.1.min.js"></script>     
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        } 
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }

        return _offset;
      }

      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        $(window).scroll(function(){
          var firstTop = $object.offset().top,
              pos = $(window).scrollTop(),
              yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

          var bg_css = 'center ' + yPos + 'px';

          $object.css({"background-position" : bg_css });
        });
      };
      
      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav();        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 400, function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

        // Gallery
        $('.tm-gallery').slick({
          dots: true,
          infinite: false,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        });
      });
    </script>
  </body>
</html>