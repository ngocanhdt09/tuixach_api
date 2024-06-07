<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            margin-top: 50px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container legend {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input {
            border-radius: 3px;
        }
        .form-group .alert {
            margin-top: 5px;
        }
        .submit-button {
            margin-top: 20px;
        }
        .login-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="col-md-4 col-md-offset-4 form-container">
        <form action="" method="POST" role="form">
            @csrf
            <legend>Đăng ký</legend>
            <div class="form-group">
                <label for="name">Họ và tên</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập họ và tên">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="confirm_password">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu">
            </div>
            <button type="submit" class="btn btn-primary submit-button">Đăng ký</button>
            <a href="{{ route('admin.login')}}" class="login-link">Đã có tài khoản? Đăng nhập ngay</a>
        </form>
    </div>
</div>

</body>
</html>
