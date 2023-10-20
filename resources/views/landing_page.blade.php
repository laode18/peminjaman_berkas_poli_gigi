<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Peminjaman Berkas Poli Gigi</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{URL::asset('landing/img/2logorss.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('landing/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('landing/css/LineIcons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('landing/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('landing/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{URL::asset('landing/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('landing/css/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('landing/css/main.css')}}">    
    <link rel="stylesheet" href="{{URL::asset('landing/css/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('landing/css/all.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style type="text/css">
        .slider .slick-slide img {
            width: 100%;
        }

        /* make button larger and change their positions */
        .slick-prev, .slick-next {
            width: 50px;
            height: 50px;
            z-index: 1;
        }
        .slick-prev {
            left: 5px;
        }
        .slick-next {
            right: 5px;
        }
        .slick-prev:before, 
        .slick-next:before {
            font-size: 40px;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        
        /* move dotted nav position */
        .slick-dots {
            bottom: 15px;
        }
        /* enlarge dots and change their colors */
        .slick-dots li button:before {
            font-size: 12px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
            opacity: 1;
        }
        .slick-dots li.slick-active button:before {
            color: #dedede;
        }

        /* hide dots and arrow buttons when slider is not hovered */
        .slider:not(:hover) .slick-arrow,
        .slider:not(:hover) .slick-dots {
            opacity: 0;
        }
        /* transition effects for opacity */
        .slick-arrow,
        .slick-dots {
            transition: opacity 0.5s ease-out;
        }
    </style>

  </head>
  
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="#" class="navbar-brand"><img src="{{URL::asset('landing/img/1logors.png')}}" alt="" width="120" height="80"></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
               
              <li class="nav-item">
                <a class="btn btn-singin" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <center>
              <h2 class="head-title">Sistem Peminjaman Berkas Poli Gigi</h2>
              <h2 class="head-title">Rumah Sakit Salamun</h2>
              </center>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
              <div class="slider">

            @foreach ($navpic as $np)
            <div>
                <a href="#">
                    <img src="{{ url('images/'.$np->gambar) }}" width="981px" height="794" alt="Image {{ $np->id }}">
                </a>            
            </div>
            @endforeach

        </div>
            </div>            
          </div>
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 


    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <?php 
                $hostname = "localhost";
                $database = "peminjaman_berkas_poli_gigi";
                $username = "root";
                $password = "";
                $kon = mysqli_connect($hostname, $username, $password, $database);
                // script cek koneksi
                if (!$kon) {
                    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
                }

                $query = mysqli_query($kon, "SELECT * FROM tb_landingpage_predata WHERE id = '1'");
                $result    =mysqli_fetch_array($query);

                $query2 = mysqli_query($kon, "SELECT * FROM tb_landingpage_predata WHERE id = '2'");
                $result2    =mysqli_fetch_array($query2);

                $query3 = mysqli_query($kon, "SELECT * FROM tb_landingpage_predata WHERE id = '3'");
                $result3    =mysqli_fetch_array($query3);

                $query4 = mysqli_query($kon, "SELECT * FROM tb_landingpage_predata WHERE id = '4'");
                $result4    =mysqli_fetch_array($query4);

            ?>

        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <div>&nbsp;</div>
                <i class="<?php echo $result['icon'] ?> fa-4x" style="color: green;"></i>
              </div>
              <h4><?php echo $result['judul_data'] ?></h4>
              <p>{{ count($pasien) }} Orang</p>
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <div>&nbsp;</div>
                <i class="<?php echo $result2['icon'] ?> fa-4x" style="color: green;"></i>
              </div>
              <h4><?php echo $result2['judul_data'] ?></h4>
              <p>{{ count($lakis) }} Orang</p>
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <div>&nbsp;</div>
                <i class="<?php echo $result3['icon'] ?> fa-4x" style="color: green;"></i>
              </div>
              <h4><?php echo $result3['judul_data'] ?></h4>
              <p>{{ count($perempuans) }} Orang</p>
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <div>&nbsp;</div>
                <i class="<?php echo $result4['icon'] ?> fa-4x" style="color: green;"></i>
              </div>
              <h4><?php echo $result4['judul_data'] ?></h4>
              <p>{{ count($berkas) }} Buah</p>
            </div>
          </div>
          <!-- End Col -->
        </div>
      </div>
    </section>
    <!-- Services Section End -->


    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section id="footer-Content">
        <!-- Copyright Start  -->

        <div class="copyright">
          <div class="container">
            <!-- Star Row -->
            <div class="row">
              <div class="col-md-12">
                <div class="site-info text-center">
                  <p>Copyright &copy; 2022 <a href="#" rel="nofollow">Sisfo Peminjaman Berkas Poli Gigi RS Salamun - By Fitria Ramadhani Karim</a></p>
                </div>              
                
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      <!-- Copyright End -->
      </section>
      <!-- Footer area End -->
      
    </footer>
    <!-- Footer Section End --> 


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{URL::asset('landing/js/jquery-min.js')}}"></script>
    <script src="{{URL::asset('landing/js/all.js')}}"></script>
    <script src="{{URL::asset('landing/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('landing/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('landing/js/owl.carousel.js')}}"></script>      
    <script src="{{URL::asset('landing/js/jquery.nav.js')}}"></script>    
    <script src="{{URL::asset('landing/js/scrolling-nav.js')}}"></script>    
    <script src="{{URL::asset('landing/js/jquery.easing.min.js')}}"></script>     
    <script src="{{URL::asset('landing/js/nivo-lightbox.js')}}"></script>     
    <script src="{{URL::asset('landing/js/jquery.magnific-popup.min.js')}}"></script>     
    <script src="{{URL::asset('landing/js/form-validator.min.js')}}"></script>
    <script src="{{URL::asset('landing/js/contact-form-script.js')}}"></script>   
    <script src="{{URL::asset('landing/js/main.js')}}"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2500
            });
        });
    </script>

  </body>
</html>