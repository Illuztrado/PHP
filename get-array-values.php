<?php

function printLists($arr)
{
  foreach($arr as $value) {
      echo "<ul>
                <li>$value</li>
            </ul>";
  }
}
$A = array(2,3,"hello");
printLists($A);

?>