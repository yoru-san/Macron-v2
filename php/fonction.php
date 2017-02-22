<?php
function connectMaBase(){
    $base = mysql_connect ('localhost', 'root', '');
    mysql_select_db ('MaBase', $base) ;
}
?>
