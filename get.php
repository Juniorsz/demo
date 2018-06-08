<?php
		include('connect.php');
		$id = $_POST['id'];
		$stsm = $connect->prepare("SELECT * FROM user WHERE id=$id");
		$stsm->execute();
		$stsm->setFetchMode(PDO::FETCH_OBJ);
		foreach ($stsm as $rows) {
			echo "Fullname : $rows->fullname <br>";
			echo "EXP : $rows->points <br><br>";
			echo "<img src='$rows->avatar' width='100px'>";
		}
?>
