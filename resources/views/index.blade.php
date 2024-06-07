<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      text-align: center;
      position: relative; /* Đặt vị trí tương đối để có thể sử dụng vị trí tuyệt đối cho nút */
    }
    .logo {
      width: 100px; /* Điều chỉnh kích thước của logo */
      height: auto;
    }
    h1 {
      margin-top: 20px;
    }
    .login-button {
      position: absolute;
      top: 20px; /* Điều chỉnh khoảng cách từ trên xuống dưới */
      right: 20px; /* Điều chỉnh khoảng cách từ phải sang trái */
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .login-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>DTNA SHOP</h1> <!-- Thay Your Website Name bằng tên trang web của bạn -->
    <a href="{{ route('admin.login')}}"> Đăng nhập </a> <!-- Nút đăng nhập -->
  </div>
</body>
</html>
