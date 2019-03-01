<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hiển thị danh sách khách hàng</title>
</head>
<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > table {
        color: #636b6f;
        padding: 0 70px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
<body>
<div class="flex-center position-ref">
    <div class="content">
        <div class="title m-b-md">
            <span>Danh sách khách hàng</span>
        </div>
        <a  href="/customer/create">Thêm mới</a>
        <div class="links">
            <table border="1">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $stt = 0;
                foreach ($customer as $value):
                    $stt +=1;
                ?>
                <tr>
                    <td align="center">{{ $stt }}</td>
                    <td>{{ $value['name'] }}</td>
                    <td>0{{ $value['phone'] }}</td>
                    <td>{{ $value['email'] }}</td>
                    <td>
                        <a href="/customer/detail/{{ $value['id'] }}">Xem</a> | <a href="/customer/edit/{{ $value['id'] }}">Sửa</a> | <a href="/customer/delete/{{ $value['id'] }}">Xóa</a>
                    </td>
                </tr>
                <?php
                endforeach
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
