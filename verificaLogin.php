<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: loginAdm.php');
	exit();
}