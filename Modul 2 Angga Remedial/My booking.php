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

        <div class="container-fluid">
            <h3 class="text-center mt-3">thankyou Angga_1202200076 for Reserving</h2>
            <h5 class="text-center">Please double check your reservation details</h4>

            <table class="table">
            <thead>
                <tr>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service</th>
                <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
            <?php 

                if (isset($_POST["nama"])) {
                echo "<tr>";

                echo '<th scope="row">'.rand(0,3734732).'</th>';

                echo '<td>'.$_POST["nama"].'</td>';

                echo '<td>'.$_POST["tanggal"].' '.$_POST['waktu'].'</td>';

                echo '<td>'.$_POST["tanggal"].' '.date("H:i",strtotime($_POST['waktu']."+ ".$_POST["jam"]." Hours")).'</td>';

                echo '<td>'.$_POST["jenismobil"].'</td>';

                echo '<td>'.$_POST["nomorhp"].'</td>';

                echo '<td> <ul>';

                foreach ($_POST["servis"] as $servis) {
                    switch ($servis) {
                        case "25.000":
                            echo '<li>Health</li>';
                            break;
                        case "100.000":
                            echo '<li>Driver</li>';
                            break;
                        case "250.000":
                            echo '<li>Fuel filled</li>';
                            break;
                        default:
                            echo "";
                        
                    }
                    
                }
                echo '</ul> </td>';

                echo '<td>';
            

                switch ($_POST["jenismobil"]) {

                    case "Toyota All New Avanza":
                        $hrg = 150.000 * (int)$_POST["jam"];
                        foreach ($_POST["servis"] as $i) {
                            $hrg += (int)$i;
                        }
                        echo $hrg."</td>";
                        break;

                    case "Honda Brio":
                        $hrg = 125.000 * (int)$_POST["jam"];
                        foreach ($_POST["servis"] as $i) {
                            $hrg += (int)$i;
                        }
                        echo $hrg."</td>";
                        break;

                    case "Toyota Alphard":
                        $hrg = 200.000 * (int)$_POST["jam"];
                        foreach ($_POST["servis"] as $i) {
                            $hrg += (int)$i;
                        }
                        echo $hrg."</td>";
                        break;

                    default :
                        echo "";
                }
                } else {
                    echo "<td colspan='8'>no service</td>";
                }

            ?>
                
            </tbody>
            </table>
        </div>
  

        <footer class=" text-center bg-light text-dark" >created by : Angga_1202200076</footer>
</body>
</html>