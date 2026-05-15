<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">


</head>
<body>

    <div class="login-container">

        <div class="login-card">

            <div class="logo">
                <div class="logo-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <h1>Admin Panel</h1>
                <p>Secure login access to dashboard</p>
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

                    <div class="input-box">
                        <i class="fa-solid fa-envelope"></i>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Enter your email"
                            required
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>

                    <div class="input-box">
                        <i class="fa-solid fa-lock"></i>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Enter your password"
                            required
                        >
                    </div>
                </div>

                <div class="extra">
                    <label class="remember">
                        <input type="checkbox">
                        Remember me
                    </label>

                    <a href="#" class="forgot">
                        Forgot Password?
                    </a>
                </div>

                <button type="submit" class="login-btn">
                    Login to Dashboard
                </button>

            </form>

            <div class="footer-text">
                © {{ date('Y') }} Admin Dashboard. All rights reserved.
            </div>

        </div>

    </div>

</body>
</html>
