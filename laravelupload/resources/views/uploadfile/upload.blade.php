<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name=_token value="{!!csrf_token()!!}">
		<label >Nhập file</label>
		<input type="file" name="uploadfile"><br>
		<button type="summit">Thêm</button>
	</form>
</body>
</html>