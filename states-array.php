<?php

// 1.
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
function selectStates($arr) {
    echo "<label>1. Select State<br>";
    echo "<select>";
    for ($i = 0; $i < count($arr); $i++) {
        echo "<option>" . $arr[$i] . "</option>";
    };
    echo "</select>";
    echo "</label><br><br>";
}
selectStates($states);

// 2.
function selectStatesForEachLoop($arr) {
    echo "<label>2. Select State<br>";
    echo "<select>";
    foreach ($arr as $value) {
        echo "<option>" . $value . "</option>";
    };
    echo "</select>";
    echo "</label><br><br>";
}
selectStatesForEachLoop($states);

// 3.
$states2 = $states;
array_push($states2, "NJ", "NY", "DE");
function selectStatesForEachLoop2($arr) {
    echo "<label>3. Select State<br>";
    echo "<select>";
    foreach ($arr as $value) {
        echo "<option>" . $value . "</option>";
    };
    echo "</select>";
    echo "</label><br>";
}
selectStatesForEachLoop2($states2);

?>