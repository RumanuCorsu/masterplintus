<?php
session_start();


$_SESSION['zakaz'] = $_POST['zakaz'];
echo $_SESSION['zakaz'];