<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - ARMAN soft</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 360px;
        }
        h2 {
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 1rem;
            color: #555;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.6rem;
            margin-top: 0.3rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            margin-top: 1.5rem;
            padding: 0.7rem;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background: #0056b3;
        }
        .error-message {
            color: red;
            font-size: 0.875rem;
            margin-top: 0.3rem;
        }
        .forgot-link {
            display: block;
            text-align: right;
            margin-top: 0.8rem;
            font-size: 0.9rem;
        }
        .forgot-link a {
            color: #007bff;
            text-decoration: none;
        }
        .forgot-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login to ARMAN soft</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror

            @if(session('error'))
                <div class="error-message">{{ session('error') }}</div>
            @endif

            <button type="submit">Login</button>
        </form>

        <div class="forgot-link">
            <a href="{{ url('/password/reset') }}">Forgot your password?</a>
        </div>
    </div>
</body>
</html>
