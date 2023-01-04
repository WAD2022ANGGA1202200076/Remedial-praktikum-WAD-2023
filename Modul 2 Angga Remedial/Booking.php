<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
    body {
        font-family:"Trebuchet MS",sans-serif;
        
    }  
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/Home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Booking.php">Booking</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

  
        <div>
        <h5 class="bg-dark text-center p-2 m-2 w-75 mt-2 m-auto text-white">Rent Your Car, now!</h5>
            <div class="row mx-auto w-75 p-3 mt-2" style="border:solid 1px grey;">
                <div class="col-6 text-center">
                    <?php
                    if (isset($_GET["nomor"]) ) {
                        if ($_GET["nomor"] == "1") {
                            echo '<img src="https://cdn.motor1.com/images/mgl/jbo47/s3/toyota-avanza-generasi-baru.jpg" class="w-75" alt="">';
                        } elseif ($_GET["nomor"] == "2") {
                            echo '<img src=""https://ik.imagekit.io/cekpremi/blog/wp-content/uploads/2021/04/Honda-Brio-Satya.png" class="w-75" alt="">';
                        } elseif ($_GET["nomor"] == "3"){
                            echo '<img src="https://akcdn.detik.net.id/visual/2018/08/09/74d69c6a-18a4-4c16-8565-1c98f9f4388e_169.jpeg?w=650" class="w-75" alt="">';
                        }
                        
                    } else {
                        echo '<img src="https://cdn.motor1.com/images/mgl/jbo47/s3/toyota-avanza-generasi-baru.jpg" class="w-75" alt="">';
                    };

                    ?>
                    
                </div>

                <div class="col-6">
                    <form action="mybooking.php" method="post">
                    <label for="">Name</label>
                    <input type="text" class="form-control form-control-readonly" readonly value="Angga_1202200076" name="nama">

                    <label for="">Book Date</label>
                    <input type="date" class="form-control" name="tanggal">

                    <label for="">Start Time</label>
                    <input type="time" class="form-control" name="waktu">

                    <label for="">Duration (Days)</label>
                    <input type="number" class="form-control" name="jam">
                    <label for="">Car Type</label>
                    <select name="jenismobil" id="" class="form-select">
                        <option value="Toyota All New Avanza">Toyota All New Avanza</option>
                        <option value="Honda Brio">Honda Brio</option>
                        <option value="Toyota Alphard">Toyota Alphard</option>
                    </select>

                    <label for="">Phone Number</label>
                    <input type="number" class="form-control " name="nomorhp">

                    <label for="">Add Service</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" value="25.000" id="" name="servis[]">
                        <label class="form-check-label" for="">
                            Health protocol / IDR 25.000
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input " type="checkbox" value="100.000" id="" name="servis[]">
                        <label class="form-check-label" for="">
                         Driver/ IDR 100.000
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" value="250.000" id="" name="servis[]">
                        <label class="form-check-label" for="">
                             Fuel filled / IDR 250.000
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Book</button>
                    </form>
                </div>
            </div>
        </div>
  

        <footer class=" text-center bg-light text-dark" >created by : Angga_1202200076</footer>

</body>
</html>