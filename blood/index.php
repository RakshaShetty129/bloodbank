<!doctype html>
<html lang="en">
  <head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .bg
        {
            background-image : url("b23.jpg");
            background-size : 100%;
            height : 880px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;

        }

        .pd
        {
            padding : 10px 10px 10px 10px;
        }
        
        .card
        {
            height : 200px;
            width : 400px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }

        img
        {
            margin-top : 100px;
            margin-left : 150px;
        }
    </style>
</head>
  <body>
        <div class="pd text-danger">
            <b><marquee> <h5> <span class="badge badge-danger"> NEW </span> . . . . . Click on register button for Blood Donation . . . . .</marquee> </h5> </b>
        </div>
        <div class="container-fluid bg">
            <div class="row">
                <div class="offset-7 col-4 text-white">
                    <img src="blood logo.jpg" alt="" class="rounded-circle" height="100" width="100" > 
                    <div class="card bg-danger">
                        <form action="" method="post" class="pd  ">
                            <div class="form-group">
                                <label for="userid">Bank Id :</label>
                                <input type="text" name="bank_id" class="form-control" placeholder="Bank ID" required="">
                            </div>
                            
                            <div class="form-group">
                                <label for="password"> Password :</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>

                            <?php
                                session_start();
                                if(isset($_POST['login']))
                                {
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"blood");
                                    $query = "select * from admin where bank_id = '$_POST[bank_id]'";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        if($row['bank_id'] == $_POST['bank_id'])
                                        {
                                            if ($row['password'] == $_POST['password']) 
                                            {
                                                $_SESSION['bank_id'] = $row['bank_id'];
                                                header("Location:admin/dashboard.php");
                                                exit();
                                            }        
                                            else
                                            {
                                            ?>
                                                <div class="alert alert-danger" role="alert">
                                                    Wrong Entry—check it out!
                                                </div>
                                            <?php
                                            }
                                        }
                                        
                                    }
                                }
                            ?>
                        </form>
                        <br>
                        <br>
                        <a type="button" class="btn btn-outline-danger " href="register.php"> Register for Donation </a>
                        <br>
                        <a type="button" class="btn btn-outline-success " href="hospital/request.php"> Hospital request </a>
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

