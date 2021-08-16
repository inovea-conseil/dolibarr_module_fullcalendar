<?php
if (!defined('NOCSRFCHECK')) define('NOCSRFCHECK', '1');
// Load Dolibarr environment
$res = 0;
if (!$res && file_exists("../main.inc.php"))
	$res = @include '../main.inc.php';     // to work if your module directory is into dolibarr root htdocs directory
if (!$res && file_exists("../../main.inc.php"))
	$res = @include '../../main.inc.php';   // to work if your module directory is into a subdir of root htdocs directory
if (!$res && file_exists("../../../main.inc.php"))
	$res = @include '../../../main.inc.php';   // to work if your module directory is into a subdir of root htdocs directory
if (!$res && file_exists("../../../dolibarr/htdocs/main.inc.php"))
	$res = @include '../../../dolibarr/htdocs/main.inc.php';     // Used on dev env only
if (!$res && file_exists("../../../../dolibarr/htdocs/main.inc.php"))
	$res = @include '../../../../dolibarr/htdocs/main.inc.php';   // Used on dev env only
if (!$res)
	die("Include of main fails");
require_once DOL_DOCUMENT_ROOT . '/projet/class/project.class.php';
global $db, $user, $conf;

$response = array(
	"res" => $res,
);
echo json_encode($response);
exit();
?>
