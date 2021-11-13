<?php

require __DIR__ . '/../config/db.php';

$sql ="SELECT * from friends" ;
$result= $link->query($sql) ;
while ($rows = $result->fetch_assoc()){

    echo $rows['id'];
    echo $rows['email'];
    echo $rows['display_name'];
    echo $rows['phone'];

}
?>