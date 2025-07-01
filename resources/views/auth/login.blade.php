<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .login-container {
            display: flex;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .login-form {
            padding: 50px;
            flex: 1;
            min-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
            color: rgba(51, 51, 51, 0.7);
        }

        .logo {
            display: block;
            margin: 0 auto 10px;
            width: 150px;
            margin-left: 150px;
            height: auto;
        }

        label {
            margin-bottom: 8px;
            display: block;
            color: #555;
            margin-left: 20px;
            font-size: 15px;
        }

        input[type="username"],
        input[type="password"] {
            width: 90%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
            margin-left: 20px;
        }

        input[type="username"]:focus,
        input[type="password"]:focus {
            border-color: #666;
            outline: none;
        }

        button {
            width: 90%;
            padding: 14px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #d9534f;
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .image-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('public/assets/images/cargo.jpeg') no-repeat center center;
            background-size: cover;
            filter: brightness(0.8);
        }

        .bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .helper-text {
            display: block;
            color: #555;
        }

        .helper-text a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .helper-text a:hover {
            color: #0056b3;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                max-width: 100%;
            }

            .image-container {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-form">
            <img src="public/assets/images/logo.jpeg" alt="Logo" class="logo">
            <h1>Login to your account</h1>
            <form method="POST" action="{{route('login')}}">
                @csrf
                <label>Username:</label>
                <input type="username" name="username" required>

                <label>Password:</label>
                <input type="password" name="password" required>

                <button type="submit">Login</button>
                <div class="bottom">
                    <span class="helper-text">Don't have an account? <a href="#">Register</a></span>
                    <span class="helper-text"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                </div>
            </form>

            @if($errors->any())
            <p class="error-message">{{ $errors->first('login') }}</p>
            @endif
        </div>
        <div class="image-container"></div>
    </div>
</body>

</html>