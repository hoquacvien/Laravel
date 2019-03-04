<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

        .position-ref {
            position: relative;
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

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref">
    <div class="content">
        <div class="title m-b-md">
            Calculator
        </div>
        <div class="links">
            <form method="POST" action="calculate">
                @csrf
                <table>
                    <tr>
                        <td colspan="2"><input type="number" name="soA" placeholder="Nhập a"></td>
                        <td colspan="2"><input type="number" name="soB" placeholder="Nhập b"></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            Kết quả: {{$result}}
                        </td>
                    </tr>
                    <tr>
                        <td><input name="pheptoan" type="submit" value="Addition(+)"></td>
                        <td><input name="pheptoan" type="submit" value="Subtraction(-)"></td>
                        <td><input name="pheptoan" type="submit" value="Multiplication(*)"></td>
                        <td><input name="pheptoan" type="submit" value="Division(/)"></td>

                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>
