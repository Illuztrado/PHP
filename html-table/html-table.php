<?php  

$users = array( 
    array("first_name" => "Michael", "last_name" => "Choi"),
    array("first_name" => "John", "last_name" => "Supsupin"),
    array("first_name" => "Mark", "last_name" => "Guillen"),
    array("first_name" => "KB", "last_name" => "Tonel"),
    array("first_name" => "Monta", "last_name" => "Ellis"),
    array("first_name" => "John", "last_name" => "Starks"),
    array("first_name" => "Cuttino", "last_name" => "Mobley"),
    array("first_name" => "Stephen", "last_name" => "Jackson"),
    array("first_name" => "Lance", "last_name" => "Stephenson"),
    array("first_name" => "JJ", "last_name" => "Reddick"),
    array("first_name" => "Eddie", "last_name" => "Jones"),
    array("first_name" => "Joe", "last_name" => "Johnson"),
    array("first_name" => "Carlos", "last_name" => "Arroyo"),
    array("first_name" => "JJ", "last_name" => "Barea")
 );

$trimmed_name = "";
$array2 = array();
function addArrayElements($array) {
    foreach ($array as &$inside_array) {
        $inside_array["full_name"] = $inside_array["first_name"] . " ". $inside_array["last_name"];
        $inside_array["Full_Name_in_uppercase"] = strtoupper($inside_array["full_name"]);
        $trimmed_name = str_replace(" ", "", $inside_array["full_name"]); 
        $inside_array["Length_of_full_name"] = strlen($trimmed_name);
    }
    unset($inside_array);
    return $array;
}

$users2 = addArrayElements($users);
$keys = array_keys($users2[0]);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is the code for the HTML Table PHP exercise.">
        <title>HTML Table</title>
        <link rel="stylesheet" type="text/css" href="html-table-style.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>User #</th>
<?php   foreach($keys as $key)
        {   ?>
                    <th><?= $key; ?></th>
<?php   }   ?>
                </tr>
            </thead>            
<?php   foreach($users2 as $key2 => $inside_array2)
        {   ?>
            <tr>
                <th><?= $key2; ?></th>
<?php       foreach($inside_array2 as $key => $value)
                    {   ?>
                        <td><?= $value; ?></td>
<?php               }   ?>
            </tr>
<?php   }   ?>
        </table>
    </body>
</html>
