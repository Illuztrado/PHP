<?php

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

function getKeyAndValue($arr)
{
  foreach($arr as $key => $value) {
      echo "The value in the key $key is $value. <br>";
  }
}
getKeyAndValue($users);

?>