<?php
session_start();
$_SESSION['logged_in'] = true;
echo "Usuario loggeado.";
