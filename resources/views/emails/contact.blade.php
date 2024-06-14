<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #e1e1e1;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e1e1e1;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            color: #5b5b9a;
        }
        .content {
            padding: 20px 0;
        }
        .content p {
            margin: 10px 0;
            line-height: 1.6;
            font-size: 16px;
            text-decoration: none !important;
        }
        .content span {
            font-weight: bold;
            color: #5b5b9a;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 2px solid #e1e1e1;
        }
        .footer p {
            margin: 0;
            color: #888;
            font-size: 14px;
        }
        .email{
            text-decoration: none !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Contact Form Submission</h1>
        </div>
        <div class="content">
            <p><span>Name:</span> {{ $name }}</p>
            <p class="email"><span>Email:</span> {{ $email }}</p>
            <p><span>Phone:</span> {{ $phone }}</p>
            <p><span>Company:</span> {{ $company }}</p>
            <p><span>Message:</span> {{ $bodyMessage }}</p>
        </div>
        <div class="footer">
            <p>Thanks for getting in touch!</p>
        </div>
    </div>
</body>
</html>
