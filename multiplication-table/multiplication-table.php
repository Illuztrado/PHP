<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is the code for the Multiplication Table PHP exercise.">
        <title>Multiplication Table</title>
        <link rel="stylesheet" type="text/css" href="multiplication-table-style.css">
    </head>
    <body>
        <table>
            <thead>
            <tr>
<?php       for($k=""; $k<=9; $k++) 
            {   ?>
                <th><?= $k; ?></th>
<?php       }   ?>
            </tr>
            </thead>
<?php       for($i=1; $i<=9; $i++)
            {   ?>
            <tr>
<?php           if($i % 2 > 0)
                {   ?>
                    <th class="oddRows"><?= $i; ?></th>
<?php           }
                else if($i % 2 === 0)
                {   ?>
                    <th class="evenRows"><?= $i; ?></th>
<?php           };   ?>                        
<?php       for($j=1; $j<=9; $j++)
            {   if($i % 2 > 0)
                {   ?>
                    <td class="oddRows"><?= $i * $j; ?></td>
<?php           }
                else if($i % 2 === 0)
                {   ?>
                    <td class="evenRows"><?= $i * $j; ?></td> 
<?php           }                
            }   ?>
            </tr>
<?php   }   ?>
        </table>
    </body>
</html>
