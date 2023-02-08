<?php
require 'connection.php';

if (isset($_POST["submit"])) {
    $locat = $_POST["locat"];
    $travcount = $_POST["travcount"];
    $flightname = $_POST["flightname"];
    $flightnum = $_POST["flightnum"];
    $seatnum = $_POST["seatnum"];
    $traveldate = $_POST["traveldate"];

    // $languages = $_POST["languages"];
    // $language = "";
    // foreach ($languages as $row) {
    //     $language .= $row . ",";
    // }

    $query = "INSERT INTO first_face VALUES('', '$locat', '$travcount', '$flightname', '$flightnum', '$seatnum', '$traveldate')";
    mysqli_query($conn, $query);
    echo
    "
    <script> alert ('Data Inserted Successfully'); </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POE</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/99e24cc7f6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="upper">
                <img src="img/img.jfif" alt="" style="margin: 15px 10px; border-radius: 12px;">
                <h4>MINISTRY OF HEALTH <br> AND SANITATION <br><p style="font-size: 10px;">REPUBLIC OF SIERRA LEONE</p></h4>
                <a href="traveladvisoty.html" style="text-decoration: none;"><button class="trackplf">TRACK PLF</button></a>
        </div>
        
        
        <div class="middle" style="display: flex; height: 480px;">
            <div class="left">
                <h3 style="text-align: center;">Fill your <br></h3>
                <h1>Passanger Locator Form</h1>
                <a href="traveladvisoty.html"><button class="btn2">Travel Advisory</button></a>
            </div>
            <div class="right">
<<<<<<< HEAD:index.html
                <form class="firstform">
=======
                <form action="connect.php" class="firstform" method="post">
>>>>>>> 24457116f24228b206c48f10e528fcba4c78e5b7:index.php
                    <div class="loc" style="display: flex; margin: 10px 5px;">
                        <div class="arr">
                            <input type="radio" value="Arrival" class="arriv" style="margin-left: 30px;" name="locat">Arrival
                        </div>
                    
                        <div class="dep">
                            <input type="radio" value="Departure" class="depart" style="margin-left: 50px;" name="locat">Departure
                        </div>
                    </div>
                        <div class="travelling-country">
                            <input type="text" class="travcont" placeholder="Travel country ..." name="travcount">
                        </div>
                    <div class="info1" style="display: flex;">
                        <div>
                            <select name="flightname" id="" class="flightname">
                                <option disabled selected>Airline Name</option>
                                <option value="Africa World Airway">Africa World Airway</option>
                                <option value="Air Cote d'ivoire">Air Cote d'ivoire</option>
                                <option value="Air Peace">Air Peace</option>
                                <option value="Asky Airline">Asky Airline</option>
                                <option value="Air Senegal">Air Senegal</option>
                                <option value="KLM">KLM</option>
                                <option value="Air France">Air France</option>
                                <option value="Brussels Airline">Brussels Airline</option>
                                <option value="Royal Air Maroc">Royal Air Maroc</option>
                                <option value="Turkish Airline">Turkish Airline</option>
                                <option value="Trans Air">Trans Air</option>
                                <option value="Mauritania Airline">Mauritania Airline</option>
                                <option value="Titan Airways">Titan Airways</option>
                                <option value="GLobal Airline">GLobal Airline</option>
                                <option value="Kenya Airways">Kenya Airways</option>
                                <option value="Ethiopian Airline">Ethiopian Airline</option>
                                <option value="Emirate Airline">Emirate Airline</option>
                                <option value="UN Flight">UN Flight</option>
                                <option value="Fly Westair">Fly Westair</option>
                                <option value="Black Eagle Aviaion">Black Eagle Aviaion</option>
                                <option value="International">International</option>
                                <option value="Ambraer Phenon 100">Ambraer Phenon 100</option>
                            </select>
                        </div>
                        <div class="flightnum">
                            <input type="text" placeholder="Flight number" name="flightnum">
                        </div>
                    </div>
                    <div class="info2" style="display: flex;">
                        <div class="seatnum">
                            <input type="text" placeholder="Seat number" name="seatnum">
                        </div>
                        <div class="traveldate">
                            <input type="date" placeholder="Travel date...." name="traveldate">
                        </div>
                    </div><br><br><br><br>
<<<<<<< HEAD:index.html
                    <a href="/Registration Form/index.html" style="text-decoration: none;"><div class="btn1">Register</div></a>
=======
                    <button type="submit" class="btn1">Register</button>
>>>>>>> 24457116f24228b206c48f10e528fcba4c78e5b7:index.php
                </form>
            </div>
        </div>
        <div class="lower">
            <a href="" style="margin: 10px 900px; color: white; font-size: 20px; text-decoration: none;">FAQs</a>
            <p>For you question, sugestion and option contact 117</p>
            <p>© 2023  Ministry of Health and Sanitation (SL) All right reserved</p>
            
        </div>
    </div>
    <script src="./javascript/locat.js"></script>
</body>
</html>