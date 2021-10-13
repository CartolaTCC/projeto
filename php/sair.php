<?php

include "constSession.php";
session_start();
//$_SESSION[SESSAO]=0;
session_destroy();
header("Location: index.php");
?>
