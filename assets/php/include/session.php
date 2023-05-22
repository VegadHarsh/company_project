<?php
session_start();

function SuccessMessage() {
	if (isset($_SESSION['SuccessMessage'])) {
		$Output = '<script type="text/javascript"> alert("SuccessFull") </script>';
		$_SESSION['SuccessMessage'] = null;
		return $Output;
	}
}

?>