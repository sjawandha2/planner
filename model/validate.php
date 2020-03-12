<?php

/* Validate the form
 * @return boolean
 */
function validForm()
{
    global $f3;
    $isValid = true;

    if (!validCity($f3->get('city'))) {

        $isValid = false;
        $f3->set("errors['city']", "Please enter a valid city.");
    }

    if (!validDistance($f3->get('distance'))) {

        $isValid = false;
        $f3->set("errors['distance']", "Please enter a valid distance.");
    }

    return $isValid;
}


function validCity($city)
{
    return ($city != null && is_string($city));

}

function validDistance($distance)
{
    return ($distance != null && is_numeric($distance) && $distance >= 1);

}



