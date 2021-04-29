<?php
//get artifact to load
if (isset($_GET['v'])) {
	if ($_GET['v']) {
		$v = strtolower($_GET['v']);
	} else $v = 'clarity';
} else {
	$_GET['v'] = 'clarity';
	$v = $_GET['v'];
}

include 'assets/parser.php';
include 'assets/artifact.php';
include 'assets/customartifact.php';

//name of directory for artifact declarations
$pageDirectory = 'pages';

//single parser for all artifacts
$parser = new Parser();

//array holding artifacts
$artifacts = array();

//creates and formats artifacts
createArtifacts();
formatArtifacts();

//load artifact
$artifact = getArtifact('404');
if (getArtifact($v) != null) $artifact = getArtifact($v);
//if artifact doesn't exist, load 404
else $artifact = getArtifact('404');

//get template
ob_start();
include 'assets/template.php';
$page = ob_get_contents();
ob_end_clean();
echo $page;
?>
