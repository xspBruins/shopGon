<?php
require_once '../include.php';
$act = $_REQUEST['act'];

if ($act == "doUpload"){
	doUpload();
}
