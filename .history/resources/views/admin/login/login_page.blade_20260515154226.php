<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Portal | Secure Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="login-wrapper">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>

        <div class="login-card">
            <div class="card-header">
                <div class="logo-wrapper">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h1>Welcome Back</h1>
                <p>Please enter your credentials to access the admin panel.</p>
            </div>

            @if ($errors->any())
                <div class="alert-container">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form method="POST" action="{{ url('admin/login') }}" class="login-form">
                @csrf

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="name@company.com" required autocomplete="email">
                    </div>
                </div>

                <div class="input-group">
                    <div class="label-row">
                        <label for="password">Password</label>
                        <a href="#" class="forgot-link">Forgot?</a>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>
                </div>

                <div class="form-options">
                    <label class="checkbox-container">
                        <input type="checkbox" name="remember">
                        <span class="checkmark"></span>
                        <span class="label-text">Keep me logged in</span>
                    </label>
                </div>

                <button type="submit" class="submit-btn">
                    <span>Sign In</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>

            <footer class="card-footer">
                <p>&copy; {{ date('Y') }} Admin System. v2.4.0</p>
            </footer>
        </div>
    </div>

</body>
</html>
