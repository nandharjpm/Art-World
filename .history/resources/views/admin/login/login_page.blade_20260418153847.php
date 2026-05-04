<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-family: Arial; background:#f4f4f4;">

    <div style="width:300px;margin:100px auto;padding:20px;background:#fff;border-radius:8px;">
        <h2 style="text-align:center;">Admin Login</h2>

        @if ($errors->any())
            <div style="color:red;">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ url('admin/login') }}">
            @csrf

            <div>
                <label>Email</label>
                <input type="email" name="email" required style="width:100%;padding:8px;">
            </div>

            <div style="margin-top:10px;">
                <label>Password</label>
                <input type="password" name="password" required style="width:100%;padding:8px;">
            </div>

            <div style="margin-top:15px;">
                <button type="submit" style="width:100%;padding:10px;background:#333;color:#fff;border:none;">
                    Login
                </button>
            </div>
        </form>
    </div>

</body>
</html>
