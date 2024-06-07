<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS để căn giữa nội dung */
        body, html {
            height: 100%;
        }
        .full-height {
            height: 100%;
        }
        .vertical-center {
            min-height: 100%;
            display: flex;
            align-items: center;
        }
        /* CSS cho form */
        .panel {
            border-color: #337ab7;
        }
        .panel-heading {
            background-color: #337ab7;
            color: #fff;
        }
        .panel-footer {
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
            padding: 10px 15px;
        }
        .btn-success {
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .btn-success:hover {
            background-color: #4cae4c;
            border-color: #398439;
        }
    </style>
</head>
<body>
    <div class="container full-height">
        <div class="row vertical-center">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng Nhập </h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Ghi nhớ
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('admin.register') }}">Bạn chưa có tài khoản? Đăng kí ngay!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
