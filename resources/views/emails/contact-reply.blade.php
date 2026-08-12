<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply from Aqsa Zahoor</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Arial, sans-serif;
            background: #f0f4f8;
            padding: 40px 20px;
            margin: 0;
            line-height: 1.6;
        }
        .container {
            max-width: 620px;
            margin: 0 auto;
            background: #ffffff;
            padding: 0;
            border-radius: 16px;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }
        
        /* Header */
        .header {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
            padding: 40px 45px 30px;
            color: #ffffff;
        }
        .header h1 {
            font-size: 22px;
            font-weight: 700;
            margin: 0;
            letter-spacing: -0.3px;
        }
        .header h1 span {
            color: #60a5fa;
        }
        .header p {
            color: rgba(255, 255, 255, 0.65);
            font-size: 14px;
            margin-top: 6px;
            font-weight: 300;
        }
        .header .badge {
            display: inline-block;
            background: rgba(96, 165, 250, 0.2);
            border: 1px solid rgba(96, 165, 250, 0.25);
            padding: 4px 14px;
            border-radius: 50px;
            font-size: 11px;
            color: #93c5fd;
            letter-spacing: 0.5px;
            margin-top: 10px;
            font-weight: 500;
        }
        
        /* Body */
        .body-content {
            padding: 35px 45px 30px;
        }
        
        /* Greeting */
        .greeting {
            font-size: 16px;
            color: #1a1a2e;
            margin-bottom: 20px;
        }
        .greeting strong {
            color: #0f3460;
        }
        
        /* Response Box */
        .response-box {
            background: #f0f7ff;
            border-left: 4px solid #3b82f6;
            border-radius: 0 10px 10px 0;
            padding: 20px 24px;
            margin: 20px 0 25px;
        }
        .response-box .label {
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #3b82f6;
            margin-bottom: 6px;
        }
        .response-box .content {
            font-size: 15px;
            color: #1a1a2e;
            line-height: 1.7;
        }
        
        /* Original Message Box */
        .original-box {
            background: #f8fafc;
            border: 1px solid #e8edf3;
            border-radius: 10px;
            padding: 18px 22px;
            margin: 20px 0 25px;
        }
        .original-box .label {
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #64748b;
            margin-bottom: 6px;
        }
        .original-box .content {
            font-size: 14px;
            color: #334155;
            line-height: 1.6;
        }
        .original-box .meta {
            font-size: 12px;
            color: #94a3b8;
            margin-top: 8px;
            padding-top: 8px;
            border-top: 1px solid #e8edf3;
        }
        .original-box .meta span {
            font-weight: 500;
            color: #64748b;
        }
        
        /* Divider */
        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
            margin: 25px 0;
        }
        
        /* Footer Signature */
        .signature {
            margin-top: 5px;
        }
        .signature .name {
            font-size: 17px;
            font-weight: 700;
            color: #0f3460;
        }
        .signature .title {
            font-size: 13px;
            color: #64748b;
            margin-top: 2px;
        }
        .signature .divider-line {
            width: 40px;
            height: 3px;
            background: #3b82f6;
            border-radius: 5px;
            margin: 8px 0 10px;
        }
        
        /* Footer */
        .footer {
            background: #f8fafc;
            padding: 20px 45px;
            border-top: 1px solid #e8edf3;
            text-align: center;
        }
        .footer p {
            font-size: 12px;
            color: #94a3b8;
            margin: 0;
        }
        .footer .social-links {
            margin-top: 10px;
        }
        .footer .social-links a {
            color: #94a3b8;
            text-decoration: none;
            margin: 0 8px;
            font-size: 14px;
            transition: color 0.2s;
        }
        .footer .social-links a:hover {
            color: #3b82f6;
        }
        .footer .footer-note {
            font-size: 11px;
            color: #cbd5e1;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Aqsa <span>Zahoor</span></h1>
            <p>Web Developer — Laravel &amp; JavaScript</p>
            <span class="badge">✦ Reply to Your Inquiry</span>
        </div>
        
        <!-- Body -->
        <div class="body-content">
            <!-- Greeting -->
            <p class="greeting">
                Dear <strong>{{ $contact->name }}</strong>,
            </p>
            
            <p style="color: #334155; font-size: 15px; margin-bottom: 10px;">
                Thank you for reaching out to me. I appreciate the time you took to share your inquiry.
            </p>
            
            <!-- Response -->
            <div class="response-box">
                <div class="label">✦ My Response</div>
                <div class="content">
                    {{ $contact->reply }}
                </div>
            </div>
            
            <!-- Original Message -->
            <div class="original-box">
                <div class="label">📄 Your Original Message</div>
                <div class="content">
                    {{ $contact->message }}
                </div>
                @if($contact->subject)
                <div class="meta">
                    <span>Subject:</span> {{ $contact->subject }}
                </div>
                @endif
            </div>
            
            <p style="color: #334155; font-size: 14px; margin: 10px 0 5px;">
                If you have any additional questions or need further clarification, please don't hesitate to reply to this email.
            </p>
            
            <div class="divider"></div>
            
            <!-- Signature -->
            <div class="signature">
                <div class="divider-line"></div>
                <p class="name">Aqsa Zahoor</p>
                <p class="title">Web Developer</p>
                <p style="font-size: 13px; color: #64748b; margin-top: 4px;">
                    <span style="color: #3b82f6;">✉</span> aqsazahoor07@gmail.com &nbsp;·&nbsp;
                    <span style="color: #3b82f6;">📱</span> +923268789961
                </p>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>&copy; {{ date('Y') }} Aqsa Zahoor. All rights reserved.</p>
            <div class="social-links">
                <a href="#" style="text-decoration: none;">GitHub</a>
                <a href="#" style="text-decoration: none;">LinkedIn</a>
                <a href="#" style="text-decoration: none;">Twitter</a>
            </div>
            <p class="footer-note">
                This email was sent in response to your inquiry. Please do not reply to this automated message.
            </p>
        </div>
    </div>
</body>
</html>