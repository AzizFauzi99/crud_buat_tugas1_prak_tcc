<!DOCTYPE html>
 <html>
 <head>
     <?php include "header.php"; ?>
     <title>Menu Utama</title>
 </head>
 <body>
 <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
    <style scoped>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      .header-4-3 .modal-backdrop.show {
        background-color: #707092;
        opacity: 0.6;
      }

      .header-4-3 .modal-item.modal {
        top: 2rem;
      }

      .header-4-3 .navbar,
      .header-4-3 .hero {
        padding: 3rem 2rem;
      }

      .header-4-3 .navbar-dark .navbar-nav .nav-link {
        font: 300 18px/1.5rem Poppins, sans-serif;
        color: #707092;
        transition: 0.3s;
      }

      .header-4-3 .navbar-dark .navbar-nav .nav-link:hover {
        font: 600 18px/1.5rem Poppins, sans-serif;
        color: #E7E7E8;
        transition: 0.3s;
      }

      .header-4-3 .navbar-dark .navbar-nav .active>.nav-link,
      .header-4-3 .navbar-dark .navbar-nav .nav-link.active,
      .header-4-3 .navbar-dark .navbar-nav .nav-link.show,
      .header-4-3 .navbar-dark .navbar-nav .show>.nav-link {
        font-weight: 600;
        transition: 0.3s;
      }

      .header-4-3 .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-4-3 .btn:focus,
      .header-4-3 .btn:active {
        outline: none !important;
      }

      .header-4-3 .btn-fill {
        font: 600 18px / normal Poppins, sans-serif;
        background-color: #524EEE;
        border-radius: 12px;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-4-3 .btn-fill:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-4-3 .btn-no-fill {
        font: 300 18px/1.75rem Poppins, sans-serif;
        color: #E7E7E8;
        padding: 12px 32px;
        transition: 0.3s;
      }

      .header-4-3 .btn-no-fill:hover {
        color: #E7E7E8;
      }

      .header-4-3 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
        transition: 0.3s;
      }

      .header-4-3 .responsive li a {
        padding: 1rem;
        transition: 0.3s;
      }

      .header-4-3 .left-column {
        margin-bottom: 2.75rem;
        width: 100%;
      }

      .header-4-3 .text-caption {
        font: 600 0.875rem/1.625 Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #FB6262;
      }

      .header-4-3 .title-text-big {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 2rem;
        color: #CBCBD2;
      }

      .header-4-3 .btn-try {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: #524EEE;
        transition: 0.3s;
      }

      .header-4-3 .btn-try:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.3s;
      }

      .header-4-3 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        border: 1px solid #707092;
        color: #707092;
        padding: 1rem 1.5rem;
        border-radius: 0.75rem;
        background-color: transparent;
        transition: 0.3s;
      }

      .header-4-3 .btn-outline:hover {
        border: 1px solid #FFFFFF;
        color: #FFFFFF;
        transition: 0.3s;
      }

      .header-4-3 .btn-outline:hover div path {
        fill: #FFFFFF;
        transition: 0.3s;
      }

      .header-4-3 .right-column {
        width: 100%;
      }

      @media (min-width: 576px) {
        .header-4-3 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-4-3 .navbar {
          padding: 3rem 2rem;
        }

        .header-4-3 .hero {
          padding: 3rem 2rem 5rem;
        }

        .header-4-3 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-4-3 .navbar {
          padding: 3rem 4rem;
        }

        .header-4-3 .hero {
          padding: 3rem 4rem 5rem;
        }

        .header-4-3 .left-column {
          margin-bottom: 3rem;
        }
      }

      @media (min-width: 992px) {
        .header-4-3 .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 1.25rem;
          padding-left: 1.25rem;
        }

        .header-4-3 .navbar {
          padding: 3rem 6rem;
        }

        .header-4-3 .hero {
          padding: 3rem 6rem 5rem;
        }

        .header-4-3 .left-column {
          width: 50%;
          margin-bottom: 0;
        }

        .header-4-3 .title-text-big {
          font-size: 3.75rem;
          line-height: 1.2;
        }

        .header-4-3 .right-column {
          width: 50%;
        }
      }
    </style>

    <?php include "menu.php"; ?>

    <!-- isi -->
    <div class="header-4-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif;">
    <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            
            <h1 class="title-text-big">Selamat Datang<br class=" d-lg-block d-none"> Sistem Absensi Karyawan Berbasis RFID</h1>
            
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-lg-end justify-content-center pe-0">
            <img id="img-fluid" class="h-auto mw-100"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header4/Header-4-3.png" alt="">
          </div>

        </div>
      </div>
    </div>
    </section> 
     
    <?php include "footer.php"; ?>

 </body>
 </html>
