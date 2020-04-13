<?php
/*
* Lewis Scott, Vadim Balan
* https://lscott.greenriverdev.com/328/pairPrograms/cupkake/index.php
* takes a cupcake order, calculates order total
* 4/10/20
*/
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
require ('validation-functions.php');
// Create a flag to track validation
$isValid = true;
//var_dump($_POST);
// Get the form data
if (validName($_POST['firstName']))
{
    $fname = $_POST['firstName'];
}
else
{
    echo "<p>First name is required</p>";
    $isValid = false;
}

if (!isset($_POST["flavors"]) || !validFlavor($_POST["flavors"]))
{
    echo "<p>Flavor is required.  Must be a valid flavor.</p>";
    $isValid = false;
}

if ($isValid)
{
    // Display the form data
    echo "<h2>Thank you, $fname, for your order!</h2>";
    echo "<p>Order Summary:</p>";
    echo "<ul>";
    //var_dump($flavors);
    foreach ($flavors as $flavor => $displayText)
    {
        if (in_array($flavor, $_POST['flavors']))
        {
            echo "<li>$displayText</li>";
        }
    }
    echo "</ul>";
    echo "Order Total: $";
    printf("%.2f",  sizeof($_POST['flavors'])*3.5);
}

?>
