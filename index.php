<?php
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]);
include DOCROOT . '/functions.inc';

$page = @$_GET["page"];

if(empty($page)||$page=="main") {
	$logicfile = "main";
	$pagefunc = "main";
}
elseif($page == "contacts"){
	$logicfile = "main";
	$pagefunc = "contacts";
}else{
	$logicfile = "404";
	$pagefunc = "error";
}


loadPage($logicfile,$pagefunc);



