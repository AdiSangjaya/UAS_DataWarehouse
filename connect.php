<?php
$konek=new mysqli('localhost','root','','dwh_uas');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>