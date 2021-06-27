<?php

session_start();


session_destroy();
header('Location: ../Vista/formInicioPagina.php');

?>