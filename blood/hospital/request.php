<!doctype html>
<html lang="en">
  <head>
    <title>Hospital Request</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .bg
        {
            background-image : url("../blood4.jpg");
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
    
    <div class="d-flex p-2 bd-highlight bg-danger container-fluid justify-content-center text-white"> <h5> <b> Hospital Request !!!!! </b> </h5> </div> 

      
    <div class="col-10 offset-1 pd-form bg">

        <form action="" method="post" class="offset-5">
            <div class="form-group col-8">
                <label for="userid"> Hospital ID  :</label>
                <input type="text" name="h_id" class="form-control" placeholder="Hospital ID" required="">
            </div>

            <div class="form-group col-8">
                <label>Hosital Name :</label>
                <input type="text" name="h_name" class="form-control" required="" placeholder="Hospital Name"> <br>
            </div>

            <div class="form-group col-8">
                <label>Blood Bank ID : </label>
                <input type="text" name="bank_id" class="form-control" name="bank_id" required="">
            </div>
            
            <div class="form-group col-8">
                <label>Mobile no :</label>
                <input type="text" name="mobile" class="form-control" required="" placeholder="Mobile no"> <br>
            </div>
            
            <div class="form-group col-8">
                <label> Quantity and Bloodgroup </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="qnt" rows="3"></textarea>
            </div>

            <div class="form-group col-8">
                <label>Booking Date : </label>
                <input type="text" name="date" class="form-control" value="<?php echo date("d-m-y");?>" required>
            </div>	<br>

            <button class="btn btn-success" name="request">&nbsp Request &nbsp</button>            
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    if(isset($_POST['request'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"blood");
        $query = "insert into request values('$_POST[h_id]', '$_POST[h_name]', '$_POST[qnt]', $_POST[mobile], '$_POST[bank_id]', '$_POST[date]')";
        $query_run = mysqli_query($connection,$query);
    ?>
    <script type="text/javascript">
        alert("Request successfully...");
        window.location.href = "../index.php";
    </script>
    <?php
    }
?>