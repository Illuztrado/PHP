<?php

ini_set('auto_detect_line_endings', TRUE);
$data = array();
if (($handle = fopen("us-500.csv", "r")) !== FALSE)
{
    while (($csv_data = fgetcsv($handle, 255, ",")) !== FALSE)
    {
        $data[] = $csv_data; 
    }
    fclose($handle);
}
$rows = count($data);
$columns = count($data[0]);
for ($i = 1; $i < $rows; $i++)
{   ?>
    <h1><?= "Record $i"; ?></h1>
<?php   for ($j = 0; $j < $columns; $j++)
    {   ?>
        <ul>
            <li><?= ucwords(str_replace("_", " ", $data[0][$j])) . ": " . $data[$i][$j]; ?></li>
        </ul>
<?php
    }
}
?>