<?php include('lib/function.php');
if (isset($_POST['filename']) && isset($_POST['operation'])) {
	$filename = $_POST['filename'];
	$operation = $_POST['operation'];
	try {
		$results = action($filename, $operation);
		echo $results;
	} catch (Exception $e) {
		echo $e->getMessage();
	}
} else {
	header("Location: index.php");
}