<?php
    require("function.php");
    session_start();
    $connection = mysqli_connect ("localhost","root","");
    $db = mysqli_select_db ($connection,"blood");
    $d_id = "";
    $name = "";
    $gender = "";
    $age = "";
    $mobile = "";
    $email = "";
    $date = "";
    $b_id = "";
    $query = "select * from donar where d_id = '$_GET[id]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $d_id = $row['d_id'];
        $name = $row['name'];
        $gender = $row['gender'];
        $age = $row['age'];
        $mobile = $row['mobile'];
        $email = $row['email'];
        $date = $row['date'];
        $b_id = $row['b_id'];
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update Donar</title>
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
            background-size: cover;
            background-blend-mode: screen;
            background-image: url("blood2.jpg");
            background-color: rgb(241, 185, 178);
            min-height : 1000px;
          }
        }
        .pd-form
        {
            padding : 50px 10px 10px 70px;
        }

        .pd
        {
            padding : 10px 0px 10px 0px;
        }
    </style>

</head>
  <body>

    <div class="vertical-nav bg-red" id="sidebar">

        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center">
                <div class="media-body">
                    <h4 class="m-0">Blood Bank</h4>
                </div>
            </div>
        </div>

        <p class="text-black font-weight-bold text-uppercase px-3 small pb-4 mb-0 text-white"> Update Donar </p>

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
                    Regester
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

    <div class="page-content parallax" id="content">
        <div class="container">
        <div class="col-6 pd-form">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Donar ID  :</label>
                    <input type="text" name="d_id" class="form-control" value="<?php echo $d_id; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" name="name" class="form-control" required="" value="<?php echo $name; ?>" > <br>
                </div>

                <div class="form-group">
                    <label for="">Email  :</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required="">
                </div>
                <br>
                <div class="form-group">
                    <label> Gender : </label> &nbsp
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male"> Male </label> &nbsp
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female"> Female </label> &nbsp
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other"> Other </label><br>
                </div>
                
                <div class="form-group">
                    <label>Age :</label>
                    <input type="text" name="age" class="form-control" required="" value="<?php echo $age; ?>" > <br>
                </div>

                <div class="form-group">
                    <label>Mobile no :</label>
                    <input type="text" name="mobile" class="form-control" required="" value="<?php echo $mobile; ?>" > <br>
                </div>

                <div class="form-group">
                    <label for="b_id">Blood ID  :</label>
                    <input type="text" name="b_id" class="form-control" value="<?php echo $b_id; ?>" required="">
                </div>
            	
                <div class="form-group">
                    <label>Booking Date : </label>
                    <input type="text" name="date" class="form-control" value="<?php echo $date;?>" required="">
                </div>	<br>
                <button class="btn btn-success" name="update"> Update Donar</button>  
            </form>
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

<?php
    if(isset($_POST['update'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"blood");
        $query = "update donar set name = '$_POST[name]', gender = '$_POST[gender]', age = $_POST[age], date = '$_POST[date]',mobile = $_POST[mobile], email = '$_POST[email]', b_id = '$_POST[b_id]' where d_id = '$_GET[id]'";
        $query_run = mysqli_query($connection,$query);

    ?>
     <script type="text/javascript">
        alert("Updated successfully...");
        window.location.href = "donar.php";
    </script>
    <?php

    }  
?>