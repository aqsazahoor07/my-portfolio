<!DOCTYPE html>
<html>
<head>
    <title>Reset Your Password</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 40px; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .btn { display: inline-block; padding: 12px 30px; background: #3b82f6; color: #ffffff; text-decoration: none; border-radius: 5px; margin: 20px 0; }
        .footer { color: #888; font-size: 12px; margin-top: 30px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Your Password</h2>
        <p>You are receiving this email because we received a password reset request for your account.</p>
        <a href="{{ $resetLink }}" class="btn">Reset Password</a>
        <p>This link will expire in 60 minutes.</p>
        <p>If you did not request a password reset, no further action is required.</p>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Aqsa Zahoor Portfolio. All rights reserved.</p>
        </div>
    </div>
</body>
</html>