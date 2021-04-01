

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('assets/image/header1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">LSP Komputer</h2>
          <p class="lead">Daftarkan Diri Anda Menjadi Peserta Sertifikasi</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/image/header2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Kegiatan LSP Komputer</h2>
          <p class="lead">Kegiatan Apresiasi Pembentukan Lembaga Sertifikasi Komputer</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/image/header3.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Kegiatan LSP Komputer</h2>
          <p class="lead">Kegiatan apresiasi Pembentukan Lembaga Sertifikasi Profesi</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pl-3 pr-3">
  <!-- <div class="container"> -->
    <img class="mr-3" src="assets/image/logo.png" alt="" srcset="" width="150" height="50">
    <a class="navbar-brand" href="#">LSP BPPTIK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?= $page == 'beranda' ?  'active' : '' ?>">
          <a class="nav-link" href="?page=beranda">Beranda
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item <?= $page == 'skema' ?  'active' : '' ?>">
          <a class="nav-link" href="?page=skema" >Skema</a>
        </li>
        <li class="nav-item <?= $page == 'galery' ?  'active' : '' ?>">
          <a class="nav-link" href="?page=galery">Galery</a>
        </li>
        <li class="nav-item <?= $page == 'tentangku' ?  'active' : '' ?>">
          <a class="nav-link" href="?page=tentangku">Tentang ku</a>
        </li>
      </ul>
    </div>
  <!-- </div> -->
</nav>
</header>