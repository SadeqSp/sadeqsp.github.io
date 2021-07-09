<?php

$db = new SQLite3('mydata.db');

// $results = $db->query("
//     SELECT *
//     FROM options
// ");

// $results = $db->query("
//     SELECT option_value
//     FROM options
//     WHERE option_name = 'color'
// ");

echo '<pre>';
$c = 0;
while(true) {

    $row = $results->fetchArray(SQLITE3_ASSOC);
    if(!$row) {
        break;
    }

    $c++;
    echo "Row $c<br/>";
    var_dump($row);
    echo '<br/>';

}
echo '</pre>';