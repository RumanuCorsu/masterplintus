<?php
require "config.php";

function get_tovar_by_id($id){
		global $connection;

		$query = "SELECT * FROM `product` WHERE `Id` = $id";
		$req = mysqli_query($connection, $query);
		$resp = mysqli_fetch_assoc($req);

		return array($resp['size'], $resp['price']);
}

function get_tovar_by_id2($id){
		global $connection;

		$query = "SELECT * FROM `product` WHERE `Id` = $id";
		$req = mysqli_query($connection, $query);
		$resp = mysqli_fetch_assoc($req);

		return $resp;
}

function get_tovar_by_id3($id){
		global $connection;

		$query = "SELECT * FROM `acsess` WHERE `Id` = $id ";
		$req = mysqli_query($connection, $query);
		$resp = mysqli_fetch_assoc($req);

		return $resp;
}

