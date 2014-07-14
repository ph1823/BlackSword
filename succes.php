<?php
$titre = 'Sucess';
ob_start();
session_start();
include('/include/head.php');
?>
		<div id="succes">
			Connection réussi!
	</div>
	<?php
include('include/footer.php');

	header("Refresh: 5;URL= index.php");

ob_end_flush();
?>
