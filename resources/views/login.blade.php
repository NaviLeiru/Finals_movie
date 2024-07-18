<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
                <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
        <label class="auth-labels">Username</label>
        <input type="text" name="name" value="{{ old('username') }}" required class="authtextbox">
        @error('name')
        <span>{{ $message }}</span>
        @enderror
        </div>
        <div>
        <label class="auth-labels">Password</label>
        <input type="password" name="password" required class="auth-textbox">
        @error('password')
        <span>{{ $message }}</span>
        @enderror
        </div>
        <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
