<?php
require_once '../include.php';
$act = $_REQUEST['act'];
if($act == "register"){
	registerUser();
}
