<?php

session_start();
session_destroy();
$_SESSION = [];

echo "<script type=\"text/javascript\">location.href='https://juventud.zacatecas.gob.mx/premioestataljuventud';</script>";


?>