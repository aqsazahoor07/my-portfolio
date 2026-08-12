<!DOCTYPE html>
<html>
<head>
    <title>Password Changed</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f4f4f4;
            padding: 40px;
            margin: 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #3b82f6;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #1a1a1a;
            font-size: 24px;
            margin: 0;
        }
        .header .badge {
            display: inline-block;
            background: #22c55e;
            color: white;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 12px;
            margin-top: 8px;
        }
        .content {
            color: #333;
            line-height: 1.6;
        }
        .content .highlight {
            background: #f0f7ff;
            padding: 12px 16px;
            border-radius: 8px;
            border-left: 4px solid #3b82f6;
            margin: 16px 0;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            text-align: center;
            color: #888;
            font-size: 13px;
        }
        .footer a {
            color: #3b82f6;
            text-decoration: none;
        }
        .icon {
            text-align: center;
            font-size: 48px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="icon">🔐</div>
            <h1>Password Changed</h1>
            <span class="badge">✅ Success</span>
        </div>

        <div class="content">
            <p>Hello <strong>{{ $name }}</strong>,</p>
            
            <p>Your password has been <strong>successfully changed</strong> for your admin account.</p>

            <div class="highlight">
                <p style="margin: 0;"><strong>📧 Email:</strong> {{ $email }}</p>
                <p style="margin: 8px 0 0 0;"><strong>🕐 Changed on:</strong> {{ $date }}</p>
            </div>

            <p>If you did not make this change, please <strong>contact support immediately</strong>.</p>

            <p style="margin-top: 20px;">
                <a href="{{ route('admin.login') }}" style="display: inline-block; padding: 10px 30px; background: #3b82f6; color: #fff; text-decoration: none; border-radius: 8px; font-weight: 600;">Go to Admin Panel</a>
            </p>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Aqsa Zahoor Portfolio. All rights reserved.</p>
            <p>
                <a href="mailto:{{ $email }}">{{ $email }}</a>
            </p>
        </div>
    </div>
</body>
</html>