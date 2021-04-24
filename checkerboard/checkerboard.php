<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is the code for the Checkerboard PHP exercise.">
        <title>Checkerboard</title>
        <link rel="stylesheet" type="text/css" href="checkerboard-style.css">
    </head> 
    <body>
        <div class="container">
<?php   for($i=1; $i<=32; $i++)
        {
            if($i % 2 > 0)
            { ?>
                <div class="oddColumn">
                    <div class="red"></div>
                    <div class="black"></div>
                </div>
<?php       }
            else
            { ?>
                <div class="evenColumn">
                    <div class="black"></div>
                    <div class="red"></div>
                </div>
<?php       }
        } ?>
        </div>
    </body>
</html>