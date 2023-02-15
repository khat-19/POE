<?php

if (isset($_POST["submit"])) {

   $fname = $_POST["fname"];
   $mname = $_POST["mname"];
   $lname = $_POST["lname"];
   $gender = $_POST["gender"];
   $locnum = $_POST["locnum"];
   $pamnum = $_POST["pamnum"];
   $countryvisit = $_POST["countryvisit"];
   $purposeoftrav = $_POST["purposeoftrav"];
   $numnstrt = $_POST["numnstrt"];
   $appartnumb = $_POST["appartnumb"];
   $city1 = $_POST["city1"];
   $province1 = $_POST["province1"];
   $country1 = $_POST["country1"];
   $numnstreet1 = $_POST["numnstreet1"];
   $district = $_POST["district"];
   $symptoms = $_POST["symptoms"];
   $postal = $_POST["postal"];
   $lname1 = $_POST["lname1"];
   $fname1 = $_POST["fname1"];
   $city2 = $_POST["city2"];
   $Country2 = $_POST["Country2"];
   $phonenum = $_POST["phonenum"];
   $email = $_POST["email"];
   $phonenum = $_POST["phonenum"];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Multi Step Form | CodingNepal</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="/phone-number-validation-master/build/css/demo.css" />
   <link rel="stylesheet" href="/phone-number-validation-master/build/css/intlTelInput.css" />
</head>
<style>
   .all {
      margin: 20px 290px;
      width: 400px;
      height: 255px;
      border: 1px solid black;
      border-radius: 8px;
   }
</style>

<body>
   <div class="upper">

   </div>
   <div class="container">
      <div class="progress-bar">
         <div class="step">
            <p>
               Flight Info
            </p>
            <div class="bullet">
               <span>1</span>
            </div>
            <div class="check fas fa-check"></div>
         </div>
         <div class="step">
            <p>
               Personal info
            </p>
            <div class="bullet">
               <span>2</span>
            </div>
            <div class="check fas fa-check"></div>
         </div>
         <div class="step">
            <p>
               Address info
            </p>
            <div class="bullet">
               <span>3</span>
            </div>
            <div class="check fas fa-check"></div>
         </div>
         <div class="step">
            <p>
               Emergency
            </p>
            <div class="bullet">
               <span>4</span>
            </div>
            <div class="check fas fa-check"></div>
         </div>
      </div>
      <div class="form-outer">
         <form action="" method="post">
            <div class="page slide-page">
               <div class="all">
                  <div class="loc" style="display: flex; margin: 10px;">
                     <div class="arr">
                        <input type="radio" value="Arrival" class="arriv" style="margin-left: 30px;" name="location">Arrival
                     </div>

                     <div class="dep">
                        <input type="radio" value="Departure" class="depart" style="margin-left: 50px;" name="location">Departure
                     </div>
                  </div>
                  <div class="travelling-country">
                     <input type="text" class="travcont" placeholder="Travel country ..." name="travcount" style="width: 350px; height:30px">
                  </div>
                  <div class="info1" style="display: flex;">
                     <div>
                        <select name="flightname" id="" class="flightname" style="margin: 20px 23px; height:30px">
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
                        <input type="text" placeholder="Flight number" name="flightnum" style="margin: 20px 0px; height:30px">
                     </div>
                  </div>
                  <div class="info2" style="display: flex;">
                     <div class="seatnum">
                        <input type="text" placeholder="Seat number" name="seatnum" style="margin: 10px 23px; width:160px; height:30px">
                     </div>
                     <div class="traveldate">
                        <input type="date" placeholder="Travel date...." name="traveldate" style="margin: 9px 0px; width:163px; height:30px">
                     </div>
                  </div><br><br>
               </div>
               <div class="field">
                  <button class="firstNext next">Next</button>
               </div>
            </div>
            <div class="page">
               <div class="n1" style="display: flex;">
                  <div class="field" style="width: 250px; height: 30px;">
                     <div class="label">
                        First Name
                     </div>
                     <input type="text" name="passFirstName">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Middle Name
                     </div>
                     <input type="text" name="passMiddleName">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Last Name
                     </div>
                     <input type="text" name="passLastName">
                  </div>
               </div>
               <div class="n1" style="display: flex;">
                  <div class="field" style="width: 250px; height: 30px;">
                     <div class="label">
                        Gender
                     </div>
                     <select name="gender" id="gender">
                        <option disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                     </select>
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Local Number
                     </div>
                     <input id="phone" type="tel" name="localNum">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Permanent Mobile
                     </div>
                     <input type="text" name="permNum">
                  </div>
               </div>
               <div class="n1" style="display: flex;">
                  <div class="field" style="width: 250px; height: 30px;">
                     <div class="label">
                        Purpose of travel
                     </div>
                     <select name="purposeoftrav">
                        <option disabled selected>Select Purpose</option>
                        <option value="Conference">Conference</option>
                        <option value="Study">Study</option>
                        <option value="Tourism">Tourism</option>
                        <option value="Visit">Visit</option>
                        <option value="Work">Work</option>
                        <option value="Business">Business</option>
                        <option value="Medical">Medical</option>
                        <option value="Other">Other</option>
                     </select>
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Number and Street Name
                     </div>
                     <input type="text" name="numnStreetName">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Appartment Number
                     </div>
                     <input type="text" name="appartmentNum">
                  </div>
               </div>
               <div class="field btns">
                  <button class="prev-1 prev">Previous</button>
                  <button class="next-1 next">Next</button>
               </div>

            </div>
            <div class="page">
               <div class="n1" style="display: flex;">
                  <div class="field" style="width: 250px; height: 30px;">
                     <div class="label">
                        City
                     </div>
                     <input type="text" name="city">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Zip / Postal Code
                     </div>
                     <input type="text" name="zip/postal">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        District / State / Province
                     </div>
                     <input type="text" name="distStateProvince">
                  </div>
               </div>
               <p><b>
                     <!-- Address in Sierra Leone -->
                  </b></p>
               <div class="n1" style="display: flex;">
                  <div class="field" style="width: 250px; height: 30px;">
                     <div class="label">
                        Hotel Name (If Any)
                     </div>
                     <input type="text" name="hotelName">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Number and Street Name
                     </div>
                     <input type="text" name="numStreetName1">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        District / City
                     </div>
                     <input type="text" name="districtCity">
                  </div>
               </div>
               <p><b> Signs and Symptoms</b></p>
               <div class="n1">
                  <div class="field" style="width: 700px; height: 20px; font-size: 12px;">
                     <input type="checkbox" name="fever">Fever
                     <input type="checkbox" name="weaknessFatigue">Weakness/Fatigue
                     <input type="checkbox" name="coughing">Coughing
                     <input type="checkbox" name="achesPain">Aches/Pain
                     <input type="checkbox" name="bleeding">Bleeding/Brusing
                  </div>
                  <div class="field" style="width: 650px; height: 20px; font-size: 12px;">
                     <input type="checkbox" value="Headaches" name="headaches">Headaches
                     <input type="checkbox" value="Vomiting/Diarrhoea" name="vomitingDiarrhoea">Vomiting/Diarrhoea
                     <input type="checkbox" value="Difficult Breath" name="difficultBreath">Difficult Breath
                     <input type="checkbox" value="Yellow Eyes" name="yellowFever">Yellow Eyes
                  </div>
               </div>
               <div class="field btns">
                  <button class="prev-2 prev">Previous</button>
                  <button class="next-2 next">Next</button>
               </div>
            </div>
            <div class="page">
               <p><b>
                     Emergency Contact Information
                  </b></p>
               <div class="n1" style="display: flex;">
                  <div class="field" style="width: 250px; height: 30px;">
                     <div class="label">
                        First Name
                     </div>
                     <input type="text" name="emmFirstName">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Middle Name
                     </div>
                     <input type="text" name="emmMiddleName">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Last Name
                     </div>
                     <input type="text" name="emmLastName">
                  </div>
               </div>
               <div class="n1" style="display: flex;">
                  <div class="field" style="width: 250px; height: 30px;">
                     <div class="label">
                        City
                     </div>
                     <input type="text" name="emmCity">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Country
                     </div>
                     <input type="text" name="emmCountry">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Phone Number
                     </div>
                     <input type="text" name="emmPhoneNumber" placeholder="Phone Number">
                  </div>
               </div>
               <div class="n1" style="display: flex;">
                  <div class="field" style="width: 250px; height: 30px;">
                     <div class="label">
                        Email
                     </div>
                     <input type="text" name="emmEmail" placeholder="Email">
                  </div>
                  <div class="field" style="width: 250px; height: 30px; margin-left: 10px;">
                     <div class="label">
                        Temperature
                     </div>
                     <input type="text" name="emmTemperature" placeholder="Temperature">
                  </div>
               </div>

               <div class="field btns">
                  <button class="prev-3 prev">Previous</button>
                  <button class="submit">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </div>
   <div class="low"></div>
   <script src="script.js"></script>
   <script src="/phone-number-validation-master/build/js/intlTelInput.js"></script>
   <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {});
   </script>
</body>

</html>