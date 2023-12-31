<?php
    require("function.php");
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dash Board</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="" href="style.css">
    <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script> 

    <style>
      @media only screen and (min-width:992px) {
      .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100%;
            background-blend-mode: screen;
            background-image: url("b12.jpg");
            background-color: rgb(241, 185, 178);
          }
        }
    </style>
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

    <p class="text-white font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

    <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link text-dark font-weight-bold">
                    home
                </a>
            </li>

            <li class="nav-item">
                <a href="blood.php" class="nav-link text-dark font-weight-bold">
                    Blood
                </a>
            </li>

            <li class="nav-item">
                <a href="donar.php" class="nav-link text-dark font-weight-bold">
                    Donar
                </a>
            </li>
            
            <li class="nav-item">
                <a href="show_register.php" class="nav-link text-dark font-weight-bold">
                    Register
                </a>
            </li>

            <li class="nav-item">
                <a href="show_request.php" class="nav-link text-dark font-weight-bold">
                    Request
                </a>
            </li>

            <li class="nav-item">
                <a href="logout.php" class="nav-link text-dark font-weight-bold">
                    <i class="fa fa-sign-out"></i> Logout
                </a>
            </li>
        </ul>
  </div>
  <!-- End vertical navbar -->


  <!-- Page content holder -->
  <div class="page-content p-5 parallax" id="content">
    <div class="container ">
      <div class="row">
        <div class="col-lg-4 ml-3">
          <div class="card bg-c-blue order-card">
            <div class="card-block">
              <h6 class="m-b-20">Blood Doner</h6>
              <h2 class="text-right"><i class="fa fa-user-plus f-left"></i> <?php echo get_donar_count(); ?> </h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 ml-3">
          <div class="card bg-c-green order-card">
            <div class="card-block">
              <h6 class="m-b-20"> Registered</h6>
              <h2 class="text-right"><i class="fa fa-users f-left"></i><?php echo get_register_count(); ?></h2>
              <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 ml-3">
          <div class="card bg-c-yellow order-card">
            <div class="card-block">
              <h6 class="m-b-20">Blood Recived</h6>
              <h2 class="text-right"><i class="fa fa-heartbeat f-left"></i><?php echo get_blood_count(); ?></h2>
              <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 ml-3">
          <div class="card bg-c-pink   order-card">
            <div class="card-block">
              <h6 class="m-b-20">Hospital Request </h6>
              <h2 class="text-right"><i class="fa fa-medkit f-left"></i><?php echo get_request_count(); ?></h2>
              <!-- <p class="m-b-0">Completed Orders<span class="f-right">351</span></p> -->
            </div>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight bg-info flex-fill">Total no of A+ :</div>
          <div class="p-2 bd-highlight bg-danger text-white">&nbsp <?php echo get_ap_count(); ?> &nbsp</div>
        </div>

        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight bg-info flex-fill">Total no of A- :</div>
          <div class="p-2 bd-highlight bg-danger text-white">&nbsp <?php echo get_an_count(); ?> &nbsp</div>
        </div>

        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight bg-info flex-fill">Total no of B+ :</div>
          <div class="p-2 bd-highlight bg-danger text-white">&nbsp <?php echo get_bp_count(); ?> &nbsp</div>
        </div>

        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight bg-info flex-fill">Total no of B- :</div>
          <div class="p-2 bd-highlight bg-danger text-white">&nbsp <?php echo get_bn_count(); ?> &nbsp</div>
        </div>

        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight bg-info flex-fill">Total no of O+ :</div>
          <div class="p-2 bd-highlight bg-danger text-white">&nbsp <?php echo get_op_count(); ?> &nbsp</div>
        </div>
        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight bg-info flex-fill">Total no of O- :</div>
          <div class="p-2 bd-highlight bg-danger text-white">&nbsp <?php echo get_on_count(); ?> &nbsp</div>
        </div>

      </div>

    </div>
  </div>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>