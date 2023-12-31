<!DOCTYPE html>
<html>

<head>
  <title>Bootstrap 4 Sidebar Menu Responsive with Sub menu Create Responsive Side Navigation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Vertical navbar -->
  <div class="vertical-nav bg-red" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center">
        <div class="media-body">
          <h4 class="m-0">Blood Bank</h4>
        </div>
      </div>
    </div>

    <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0 text-white">Dashboard</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-weight-bold">
          <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
          home
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-weight-bold">
          <!-- <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> -->
          Blood Group
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-weight-bold">
          <!-- <i class="fa fa-cubes mr-3 text-primary fa-fw"></i> -->
          Blood Doner
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-weight-bold">
          <!-- <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> -->
          Contact Us
        </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->


  <!-- Page content holder -->
  <div class="page-content p-5" id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-3">
          <div class="card bg-c-blue order-card">
            <div class="card-block col-lg-6">
              <h6 class="m-b-20">Blood Doner</h6>
              <h2 class="text-center"><span>486</span></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 ml-3">
          <div class="card bg-c-green order-card">
            <div class="card-block">
              <h6 class="m-b-20">Blood Recived</h6>
              <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>486</span></h2>
              <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 ml-3">
          <div class="card bg-c-yellow order-card">
            <div class="card-block">
              <h6 class="m-b-20">Blood Recived</h6>
              <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>486</span></h2>
              <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 ml-3">
          <div class="card bg-c-pink   order-card">
            <div class="card-block">
              <h6 class="m-b-20">Blood Recived</h6>
              <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>486</span></h2>
              <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Toggle button -->
  <!-- <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i
        class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button> -->


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="main.js"></script>
</body>

</html>