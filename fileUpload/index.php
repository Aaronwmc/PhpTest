<?php header("Content-Type: text/html;charset=utf-8");?>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<label>文件上传：</label><br>
	<input type="file" name="fidle" id="file"><br>
	<input type="submit" name="fileUploadSubmit" value="上传">
</form>