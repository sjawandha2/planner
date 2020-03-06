<form action="" method="post">
    City :<input type="text" name="city" placeholder="City"/>
    <input type="submit" name="submit"/>
</form>
<?php
if (isset($_POST['submit'])) {

    $city = $_POST['city'];
    $url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&APPID=5914718d728cfc1314fe1940e92b12ca';

    $data = file_get_contents($url); // put the contents of the file into a variable
    $characters = json_decode($data);
//    print_r($characters);
    echo "City: " . $characters->name;
//    echo "Temp: " . $characters['main']->temp;
}
?>