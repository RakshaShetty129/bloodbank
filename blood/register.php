<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .bg
        {
            background-image : url("blood3.jpg");
            background-size : cover;
            height : 880px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
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

    <div class="bg">

        <div class="text-sucess pd">
            <b><marquee> <h5> <span class="badge"> </span> . . . . . ThankYou For Donating Blood U saved a Life . . . . .</marquee> </h5> </b>
        </div>

        <div class="col-5 pd-form">
            <form action="" method="post">
                <div class="form-group">
                    <label for="userid">Email  :</label>
                    <input type="text" name="email" class="form-control" placeholder="someemail@mail.com" required="">
                </div>

                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" name="name" class="form-control" required="" placeholder="Name"> <br>
                </div>
                
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
                    <input type="text" name="age" class="form-control" required="" placeholder="Age"> <br>
                </div>

                <div class="form-group">
                        <label>Select Blood Group :</label>
                        <select class="form-control" name="b_g">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Mobile no :</label>
                    <input type="text" name="mobile" class="form-control" required="" placeholder="Mobile no"> <br>
                </div>
            	<br>
                <button class="btn btn-success" name="register"> Register</button>  
            </form>
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
    if(isset($_POST['register'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"blood");
        $query = "insert into register values('$_POST[email]', '$_POST[name]', '$_POST[gender]', $_POST[age], $_POST[mobile], '$_POST[b_g]')";
        $query_run = mysqli_query($connection,$query);
    ?>
    <script type="text/javascript">
        alert("Thank You For Registering ...");
        window.location.href = "index.php";
    </script>
    <?php
    }
?>