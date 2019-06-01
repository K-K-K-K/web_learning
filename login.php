<?php
$id = "admin";
$pw = "pass";

if($_POST["id"] === $id && $_POST["pw"] === $pw) {
	echo "Success!";
} else {
	echo "Failed";
}
