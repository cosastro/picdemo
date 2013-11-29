<?php
	if(($_FILES["file"]["type"] == "image/jpeg") &&
		($_FILES["file"]["size"] < 4 * 1024 * 1024)){
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
		header("location:index.html");
	}else{
		echo "invalid file";
	}
?>