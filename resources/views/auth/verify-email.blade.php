<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="container">
    <div class="icon">
        <img src="envelope-icon.png" alt="Email Sent">
    </div>
    <h1>Verification Email Already Sent</h1>
    <p>Please check your email to verify your account.</p>
    <div class="actions">
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf <!-- Menambahkan token CSRF untuk keamanan -->
            <button type="submit" class="btn">Resend Email</button>
        </form>
    </div>
</div>
</body>
</html>
