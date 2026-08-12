<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Admin Panel</title>
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
        .badge {
            display: inline-block;
            background: #3b82f6;
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
        .credentials {
            background: #f0f7ff;
            padding: 16px;
            border-radius: 8px;
            border-left: 4px solid #3b82f6;
            margin: 16px 0;
        }
        .credentials p {
            margin: 6px 0;
        }
        .credentials .label {
            color: #666;
            font-size: 13px;
        }
        .credentials .value {
            color: #1a1a1a;
            font-weight: 600;
        }
        .btn {
            display: inline-block;
            padding: 10px 30px;
            background: #3b82f6;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin-top: 10px;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            text-align: center;
            color: #888;
            font-size: 13px;
        }
        .icon {
            text-align: center;
            font-size: 48px;
            margin-bottom: 10px;
        }
        .warning {
            background: #fef3c7;
            padding: 12px;
            border-radius: 8px;
            border-left: 4px solid #f59e0b;
            margin: 16px 0;
            font-size: 13px;
            color: #92400e;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="icon">👋</div>
            <h1>Welcome to Admin Panel</h1>
            <span class="badge">New Admin Account</span>
        </div>

        <div class="content">
            <p>Hello <strong>{{ $name }}</strong>,</p>
            
            <p>You have been added as an <strong>Admin</strong> for <strong>Aqsa Zahoor's Portfolio</strong>.</p>

            <div class="credentials">
                <p><span class="label">📧 Email:</span> <span class="value">{{ $email }}</span></p>
                <p><span class="label">🔑 Password:</span> <span class="value">{{ $password }}</span></p>
            </div>

            <div class="warning">
                ⚠️ <strong>Important:</strong> Please change your password after first login for security reasons.
            </div>

            <p style="text-align: center;">
                <a href="{{ $login_url }}" class="btn">Login to Admin Panel</a>
            </p>

            <p style="margin-top: 16px; font-size: 14px; color: #666;">
                If you have any questions, please contact the main administrator.
            </p>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Aqsa Zahoor Portfolio. All rights reserved.</p>
        </div>
    </div>
</body>
</html>