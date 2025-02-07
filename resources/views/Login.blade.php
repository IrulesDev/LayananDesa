<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>

    body {
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        margin: 0;
    }
    .login-container {
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        text-align: center;
        position: relative;
    }
    .login-container::before, .login-container::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: -10px;
        left: -10px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        z-index: -1;
        transform: rotate(-5deg);
    }
    .login-container::after {
        top: 10px;
        left: 10px;
        transform: rotate(5deg);
    }
    .login-container h1 {
        margin-bottom: 1.5rem;
        font-size: 2rem;
        color: #333;
    }
    .login-container input {
        width: calc(100% - 2rem);
        padding: 0.75rem;
        margin-bottom: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease-in-out;
    }
    .login-container input:focus {
        border-color: #9b59b6;
        outline: none;
    }
    ```
    .login-container button {
        width: calc(100% - 2rem);
        padding: 0.75rem;
        border: none;
        border-radius: 5px;
        background: #9b59b6;
        color: white;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease-in-out;
    }
    .login-container button:hover {
        background: #71b7e6;
    }
        font-family: 'Roboto', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        margin: 0;
    }
    .login-container {
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        text-align: center;
        transition: transform 0.3s ease-in-out;
    }
    .login-container:hover {
        transform: scale(1.05);
    }
    .login-container h1 {
        margin-bottom: 1.5rem;
        font-size: 2rem;
        color: #333;
    }
    .login-container input {
        width: 100%;
        padding: 0.75rem;
        margin-bottom: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease-in-out;
    }
    .login-container input:focus {
        border-color: #9b59b6;
        outline: none;
    }
    .login-container button {
        width: 100%;
        padding: 0.75rem;
        border: none;
        border-radius: 5px;
        background: #9b59b6;
        color: white;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease-in-out;
    }
    .login-container button:hover {
        background: #71b7e6;
    }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>