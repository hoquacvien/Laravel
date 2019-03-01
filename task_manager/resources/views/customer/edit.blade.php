<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa khách hàng</title>
</head>
<body>
<h1>Sửa khách hàng</h1>
<form action="/customer/save" method="post">
    @csrf
    <table>
        <td><input type="hidden" name="id" value="{{$customer['id']}}"></td>
        <tr>
            <td><label>Họ và tên</label></td>
            <td><input type="text" name="name" value="{{$customer['name']}}" placeholder="Nhập vào họ tên"></td>
        </tr>
        <tr>
            <td><label>Số điện thoại</label></td>
            <td><input type="text" name="phone" value="{{$customer['phone']}}" placeholder="Nhập vào số điện thoại"></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="email" value="{{$customer['email']}}" placeholder="Nhập vào email"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Sửa">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
