<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm khách hàng</title>
</head>
<body>
<h1>Thêm khách hàng</h1>
<form action="/customer/save" method="post">
    @csrf
    <table>
        <tr>
            <td><label>Họ và tên</label></td>
            <td><input type="text" name="name" placeholder="Nhập vào họ tên"></td>
        </tr>
        <tr>
            <td><label>Số điện thoại</label></td>
            <td><input type="text" name="phone" placeholder="Nhập vào số điện thoại"></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="email" placeholder="Nhập vào email"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Thêm">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
