<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        rel="stylesheet"
    />
    
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #4fd1c5, #a64bf4);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: #fff;
            padding: 2.5rem 2rem;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 1.5rem;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #842029;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
            text-align: left;
        }

        .input-group {
            position: relative;
            margin-bottom: 1.25rem;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 0.75rem;
            transform: translateY(-50%);
            color: #999;
        }

        .input-group input {
            width: 100%;
            padding: 0.75rem 0.75rem 0.75rem 2.5rem;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
        }

        .text-danger {
            color: #dc3545;
            font-size: 0.85rem;
            margin-top: -0.75rem;
            margin-bottom: 0.75rem;
            text-align: left;
            padding-left: 2.5rem;
        }

        .forgot {
            text-align: right;
            font-size: 0.85rem;
            margin-bottom: 1.5rem;
        }

        .btn-login {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 30px;
            background: linear-gradient(to right, #36d1dc, #5b86e5);
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .btn-login:hover {
            opacity: 0.9;
        }

        .social-login {
            margin: 1.5rem 0;
        }

        .social-login p {
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }

        .social-login a {
            margin: 0 0.5rem;
            text-decoration: none;
        }

        .social-login i {
            font-size: 1.25rem;
            width: 2.25rem;
            height: 2.25rem;
            line-height: 2.25rem;
            color: #fff;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
        }

        .social-login .fa-facebook-f { background: #3b5998; }
        .social-login .fa-twitter      { background: #1da1f2; }
        .social-login .fa-google       { background: #db4437; }

        .signup {
            font-size: 0.85rem;
        }

        .signup a {
            color: #a64bf4;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        @if ($errors->has('email'))
            <div class="alert-danger">
                {{ $errors->first('email') }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf
            
            <div class="input-group">
                <i class="fa fa-user"></i>
                <input
                    type="email"
                    name="email"
                    placeholder="Type your email"
                    required
                />
            </div>
            <!-- @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror -->

            <div class="input-group">
                <i class="fa fa-lock"></i>
                <input
                    type="password"
                    name="password"
                    placeholder="Type your password"
                    required
                />
            </div>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="forgot">
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn-login">LOGIN</button>
        </form>

        <div class="social-login">
            <p>Or Sign Up Using</p>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
        </div>

        <div class="signup">
            Or Sign Up Using <a href="#">SIGN UP</a>
        </div>
    </div>
    
</body>
</html>
