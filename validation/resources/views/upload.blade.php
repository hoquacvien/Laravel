<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlFile1">Ảnh</label>
        <input type="file" name="image" class="form-control-file" required>
    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>
</body>
</html>
