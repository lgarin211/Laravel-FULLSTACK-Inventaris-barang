<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Carousel Template · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="https://getbootstrap.com/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><img src="https://yt3.ggpht.com/a-/AOh14GgJaOQ-Jfj9wBKL0ez2MDg9iyVF1ikQOkpZ7Z5j7A=s100-c-k-c0xffffffff-no-rj-mo" width="40px" class="rounded-circle" alt="">  Agustinus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="top-right links">
          <ul class="navbar-nav mr-auto">
            @if (Route::has('login'))
                    @auth
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/insert') }}">Apps <span class="sr-only">(current)</span></a>
            </li>
                    @else
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('login') }}">LOGIN<span class="sr-only">(current)</span></a>
            </li>
                        @if (Route::has('register'))

            <li class="nav-item active">
              <a class="nav-link" href="{{ route('register') }}">REGISTRASI<span class="sr-only">(current)</span></a>
            </li>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- <li class="nav-item active">
              <a class="nav-link" href="base.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="yt_chanel.html">Youtube Vavorite <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://getbootstrap.com">Dockumentasi<span class="sr-only">(current)</span></a>
            </li> -->
          </ul>
        </div>
      </nav>
    </header>



<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
<img src="https://smkn1kepanjen.sch.id/web/wp-content/uploads/2019/05/RPL-760x490.jpg" alt=""width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
 <!--  <iframe src="https://www.youtube.com/embed/eyWOh0EjXts"src="https://www.youtube.com/embed/eyWOh0EjXts" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></iframe>
 -->
<div class="container">
          <div class="carousel-caption text-left">
            <p role="button">米津玄師 vs Aimer MASHUP!! feat. 天邑 | cover.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="https://appkey.co.id/wp-content/uploads/2020/07/thumbnail-RPL.jpg" alt=""width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
<!--         <iframe src="https://www.youtube.com/embed/7E0wBRqNpZo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></iframe>       -->
        <div class="container">
          <div class="carousel-caption">
            <p role="button">Iwan Fals & NOAH - Yang Terlupakan (Official Music Video)
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="https://img.freepik.com/free-photo/rear-view-programmer-working-all-night-long_1098-18697.jpg?size=626&ext=jpg" alt=""width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><!--
        <iframe src="https://www.youtube.com/embed/CD-E-LDc384" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%" height="500px" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></iframe>       -->
        <div class="container">
          <div class="carousel-caption text-right">
            <p role="button">Metallica: Enter Sandman (Official Music Video)</p></div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<br>
<hr>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></svg> -->
           <img src="https://pbs.twimg.com/profile_images/1212306123878830080/tKGooqvh_400x400.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140"alt="">
        <h2>Sandika Galih</h2>
        <p>Chanelnya mengandung banyak edukasi dan materi temtang pemprograman web</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="data:image/jpeg;base64,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" class="bd-placeholder-img rounded-circle" width="140" height="140"alt="">
        <h2>Jouma Tech</h2>
        <p>Disini saya tau bagai mana seorang developor bekerja,Flog kesehariannya keren</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="https://yt3.ggpht.com/a/AATXAJwg-APiv5JVCtOo3DSfj8_o2Xeygur4NL_qBiM-=s176-c-k-c0x00ffffff-no-rj-mo" class="bd-placeholder-img rounded-circle" width="140" height="140"alt="">
        <h2>Bogor Cyber</h2>
        <p>Kamu Anak SMKN Bogor? jurusan Rekayasa Perangkat Lunak? kalo ini inilah chanel youtube guru kita Pak Mujib</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Ingin ngoding tapi bingung mulainya?<hr><span class="text-muted">cari Sandika Galih </span></h2>
        <p class="lead">Kakak Sandika Galih membuat Banyak tutorial yang akan membantu kalina para pemula di Web Developer kokonya keren abis</p></div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
<img src="https://pbs.twimg.com/profile_images/1212306123878830080/tKGooqvh_400x400.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Jaringan? RPL butuh?<span class="text-muted">oh jelas</span></h2>
        <p class="lead">nah kalo kalian punya dasar jaringan atau bahkan anak tkj pantengin chanel linus tech ini karena keren pembahasannya</p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="https://d12avs59aaiyvm.cloudfront.net/wp-content/uploads/2019/12/LinusTechTips-Net-Worth.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt=""></div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Lusus mau jadi apa?<span class="text-muted">i hope I like Jouma</span></h2>
        <p class="lead">Jouma Tech adalah Chanel yang menarik karena pembahasannya yang sangat keren tentang kehidupan programer dan banyak hal lain yang ga akan rugi kalian tonton</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        <img src="https://chomatthew.com/wp-content/uploads/2019/01/joma-780x780.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->



  <!-- FOOTER -->
  <footer class="container">
    <div class="row">
      <progress class="col-md-2"></progress>
      <progress class="col-md-8"></progress>
<progress class="col-md-2"></progress>

    </div>
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 <a href="https://github.com/lgarin211"> Agustinus Pardamean Lumban, Inc.</a> &middot; <a href="https://github.com/lgarin211/SCANER/blob/master/text/base.html">Base_code</a> &middot; <a href="https://github.com/lgarin211/SCANER/blob/master/text/yt_chanel.html">yt_chanel</a></p>
  </footer>
</main>
<!--  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!--  -->
  </body>
</html>
