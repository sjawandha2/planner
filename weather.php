<form action="" method="post">
    City :<input type="text" name="city" placeholder="City"/>
    <input type="submit" name="submit"/>
</form>
<?php
if (!empty($_POST['city']) && isset($_POST['submit'])) {

    $city = $_POST['city'];
    $url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&APPID=5914718d728cfc1314fe1940e92b12ca';

    $data = file_get_contents($url); // put the contents of the file into a variable
    $characters = json_decode($data);
//    if ($city == $characters->name) {
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

        // print data
        echo "<h1>Location: $city,$country </h1>";
        echo "<h3>$temperature F</h3><hr>";
        echo "<h4>Today:<Strong> $weather</Strong> currently. The high will be
<Strong> $maxtemp</Strong>F with low of<Strong> $mintemp</Strong>F.</h4>";
        echo "<Strong>Humidity: </Strong> $humidity %
   <br><Strong>Wind: </Strong> $windSpeed mph
   <br><Strong>Pressure: </Strong> $pressure inHg
   <br><Strong>Sunrise: </Strong> $sunrise
  <br><Strong>Sunset: </Strong> $sunset";
//    }
} else {
    echo "Please enter a valid city";
}

?>