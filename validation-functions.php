<?php
/*
* Lewis Scott, Vadim Balan
* https://lscott.greenriverdev.com/328/pairPrograms/cupkake/validation-functions.php
* provides validation functions for a cupcake order
* to confirm.php
* 4/10/20
*/
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
// provide flavors array - for all pages
$flavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon", "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake",
    "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

// validate name
function validName($name)
{
    return !empty($name);
}

// validate flavor
function validFlavor($flavorsPosted)
{
    global $flavors;
    //var_dump($flavors);
    foreach ($flavorsPosted as $flavor)
    {
        if (!in_array($flavor, array_keys($flavors)))
        {
            return false;
        }
    }
    return true;
}














