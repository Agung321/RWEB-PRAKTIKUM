  <nav class="navbar navbar-expand-sm bg-tre navbar-dark">
    <div class="container"> 
    <a class="navbar-brand" href="<?php echo site_url('user/Overview') ?>">
      <img src="<?php echo base_url('assets/img/dikpora.png') ?>" alt="logo" style="height: 60px; width: 225px;">
    </a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link link2" href="#">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link link2" href="#">Profil <span class="sr-only">(current)</span></a>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle link2" href="#" id="navbarDropdownMenuLink" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Publikasi
                </a>
                <div class="dropdown-menu navbox" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item  drop-link" href="#">Data & Informasi</a>
                  <a class="dropdown-item  drop-link" href="#">Berita</a>
                  <a class="dropdown-item  drop-link" href="#">Download</a>
                </div>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle link2" href="#" id="navbarDropdownMenuLink" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Interaksi
                </a>
                <div class="dropdown-menu navbox" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item  drop-link" href="<?php echo site_url('user/Bukutamu') ?>">Q&A-Buku Tamu</a>
                  <a class="dropdown-item  drop-link" href="#">Mendaftar Akun</a>
                  <a class="dropdown-item  drop-link" href="#">Akun</a>
                </div>
              </li>
            </ul>
         
            <div "class="header-navigation-right">
              <nav class="navbar navbar-expand-sm bg-tre navbar-dark">
                <form class="form-inline" action="#">
                  <input class="form-control mr-sm-1" type="text" placeholder="Search">
                  <button class="btn btn-re" type="submit"><img src="<?php echo base_url('assets/img/cari2.png') ?>" style="height: 25px; width: 25px;" ></button>
                </form>

              </nav>
            </div>
        </div>
      </div>
  </nav>

