<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thông tin khách hàng</title>
</head>
<body>
<h1>Thông tin khách hàng</h1>
<table>
    <tr>
        <td><label>Họ và tên</label></td>
        <td><span>{{$customer['name']}}</span></td>
    </tr>
    <tr>
        <td><label>Số điện thoại</label></td>
        <td><span>{{$customer['phone']}}</span></td>
    </tr>
    <tr>
        <td><label>Email</label></td>
        <td><span>{{$customer['email']}}</span></td>
    </tr>
</table>
</body>
</html>

