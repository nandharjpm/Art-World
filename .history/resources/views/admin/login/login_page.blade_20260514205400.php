<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    link
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: 'Poppins', sans-serif;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            overflow:hidden;
        }

        .login-container{
            width:100%;
            max-width:420px;
            padding:20px;
        }

        .login-card{
            background:#fff;
            border-radius:20px;
            padding:40px 35px;
            box-shadow:0 15px 40px rgba(0,0,0,0.2);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn{
            from{
                opacity:0;
                transform:translateY(20px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        .logo{
            text-align:center;
            margin-bottom:25px;
        }

        .logo h1{
            font-size:28px;
            color:#1e3c72;
            font-weight:600;
        }

        .logo p{
            color:#777;
            font-size:14px;
            margin-top:5px;
        }

        .alert{
            background:#ffe5e5;
            color:#d63031;
            padding:12px;
            border-radius:10px;
            margin-bottom:20px;
            font-size:14px;
        }

        .form-group{
            margin-bottom:20px;
        }

        .form-group label{
            display:block;
            margin-bottom:8px;
            font-size:14px;
            color:#444;
            font-weight:500;
        }

        .form-control{
            width:100%;
            padding:14px 15px;
            border:1px solid #ddd;
            border-radius:12px;
            outline:none;
            font-size:14px;
            transition:0.3s;
        }

        .form-control:focus{
            border-color:#2a5298;
            box-shadow:0 0 0 4px rgba(42,82,152,0.15);
        }

        .login-btn{
            width:100%;
            padding:14px;
            border:none;
            border-radius:12px;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color:#fff;
            font-size:15px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        .login-btn:hover{
            transform:translateY(-2px);
            box-shadow:0 10px 20px rgba(42,82,152,0.3);
        }

        .footer-text{
            text-align:center;
            margin-top:20px;
            font-size:13px;
            color:#888;
        }

        @media(max-width:480px){
            .login-card{
                padding:30px 25px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-card">

            <div class="logo">
                <h1>Admin Panel</h1>
                <p>Sign in to continue</p>
            </div>

            @if ($errors->any())
                <div class="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ url('admin/login') }}">
                @csrf

                <div class="form-group">
                    <label>Email Address</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter your email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <button type="submit" class="login-btn">
                    Login
                </button>
            </form>

            <div class="footer-text">
                © {{ date('Y') }} Admin Dashboard
            </div>

        </div>
    </div>

</body>
</html>
