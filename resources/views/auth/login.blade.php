<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #3490dc;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #2779bd;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <h1>ログイン</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">ログイン</button>
    </form>

    <p class="link">
        <a href="{{ route('register') }}">アカウントをお持ちでない方はこちら</a>
    </p>
</body>

</html>