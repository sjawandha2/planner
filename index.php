<?php

//Start a session
session_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


//Required file
require_once('vendor/autoload.php');
require_once('model/validate.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET|POST /', function ($f3) {

    if (!empty($_POST)) {
        $city = $_POST['city'];
        $kinds = $_POST['places'];
        $radius = $_POST['distance'];

        $f3->set('city', $city);
        $f3->set('places', $kinds);
        $f3->set('distance', $radius);


        //If data is valid
        if (validForm()) {

            $_SESSION['city'] = $city;
            $_SESSION['places'] = $kinds;
            $_SESSION['distance'] = $radius;

            $url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&APPID=5914718d728cfc1314fe1940e92b12ca';

            // put the contents of the file into a variable
            $data = file_get_contents($url);
            $characters = json_decode($data);
            // store api attributes data into variables
            $city = $characters->name;
            $weather = $characters->weather[0]->main;
            $windSpeed = $characters->wind->speed;

            //formula to convert from kelvin to Fahrenheit
            $temp = $characters->main->temp;
            $temperature = ((($temp) - (273.15)) * (9 / 5) + 32);

            $mtemp = $characters->main->temp_max;
            $maxtemp = ((($mtemp) - (273.15)) * (9 / 5) + 32);

            $mitemp = $characters->main->temp_min;
            $mintemp = ((($mitemp) - (273.15)) * (9 / 5) + 32);

            $humidity = $characters->main->humidity;
            $press = $characters->main->pressure;
            $pressure = ($press * 0.030);
            $sunrise = $characters->sys->sunrise;
            $sunset = $characters->sys->sunset;
            $country = $characters->sys->country;
            $lon = $characters->coord->lon;
            $lat = $characters->coord->lat;

//            Need print data to view file


            // print data
//            echo "<h1>Location: $city,$country </h1>";
//            echo "<h3>$temperature F</h3><hr>";
//            echo "<h4>Today:<Strong> $weather</Strong> currently. The high will be
//<Strong> $maxtemp</Strong>F with low of<Strong> $mintemp</Strong>F.</h4>";
//            echo "<Strong>Humidity: </Strong> $humidity %
//   <br><Strong>Wind: </Strong> $windSpeed mph
//   <br><Strong>Pressure: </Strong> $pressure inHg
//   <br><Strong>Sunrise: </Strong> $sunrise
//  <br><Strong>Sunset: </Strong> $sunset";


//all the attributes to send an api request to opentripmap.com
            echo "<br> There is a error with event APi<br>";

//            $eventsKey = '5ae2e3f221c38a28845f05b62269320ee1152b3977ead5ffe690f1c5';
////kinds can be separated by a comma to send a list of type of places
//            $language = "en";
//
////url containing all attributes
//            $eventsUrl = "https://api.opentripmap.com/0.1/$language/places/radius?radius=$radius&lon=$lon&lat=$lat&kinds=$kinds&apikey=$eventsKey";
//
////print the response
//            $allEvents = file_get_contents($eventsUrl);
//            $details = json_decode($allEvents);
//
//            if ($details) {
//                echo "Here is a list of suggested $kinds: <br>";
//                for ($x = 0; $x < sizeof($details->features); $x++) {
//                    echo $details->features[$x]->properties->name . "<br>";
//                }
//            } else {
//                echo "Try a larger distance than $radius meters";
//            }

//        }
//        else {
//            echo "Please enter a valid city";
        }

    }

    //Display summary
    $view = new Template();
    echo $view->render('views/planner.html');
});


//Run Fat-Free
$f3->run();

