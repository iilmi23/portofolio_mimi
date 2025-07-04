<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        body {
            background-color: hsl(243, 23%, 18%);
            color: #cdcdcd;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .login-container {
            max-width: 400px;
            margin: 6rem auto;
            padding: 2.5rem 2rem;
            background: hsl(225, 24%, 27%);
            border-radius: 16px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 2rem;
        }

        label {
            display: block;
            margin-top: 1rem;
            font-weight: 600;
            color: #fffdfd;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #b3bac5;
            border: 1px solid #ccc;
            color: #1a1a1a;
            border-radius: 8px;
            margin-top: 0.3rem;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #003c66;
            background-color: #fff;
        }

        button {
            margin-top: 1.5rem;
            padding: 0.75rem;
            background-color: #79b4de;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #005fa3;
        }

        .error-message {
            color: #e74c3c;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        @if (session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif
        <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" required autofocus>

            <label for="password">Password</label>
            <input type="password" name="password" required>

            <div style="margin-top: 1rem;">
                <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal;">
                    <input type="checkbox" name="remember" style="transform: scale(1.2); margin-right: 6px;">
                    Remember Me
                </label>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
