<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="flex w-4/5 max-w-4xl shadow-lg rounded-lg overflow-hidden">
        <!-- Left Side: Image Section -->
        <div class="w-1/2 bg-cover bg-center" style="background-image: url('/img/card-package-01.png');">
            <div class="h-full flex flex-col justify-between p-6 bg-black bg-opacity-50 text-white">
            </div>
        </div>

        <!-- Right Side: Login Form -->
        <div class="w-1/2 bg-white p-10 flex flex-col justify-center">
            <h2 class="text-2xl font-bold text-gray-800">Dewi Tari</h2>
            <p class="text-sm text-gray-500 mb-6">Welcome to tamansari</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input id="email" type="email" name="email" required autofocus class="w-full p-2 border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required class="w-full p-2 border rounded-md">
                </div>
                <div class="flex justify-between items-center mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="mr-2"> Remember me
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
                </div>
                <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md">Login</button>

                <div class="text-center mt-4">
                    <p class="text-sm">Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign up</a></p>
                </div>

                <!-- OR separator -->
                <div class="flex items-center my-4">
                    <hr class="flex-grow border-gray-300">
                    <span class="mx-4 text-gray-500">OR</span>
                    <hr class="flex-grow border-gray-300">
                </div>

                <!-- Login with Google Button -->
                <a href="{{ route('google.redirect') }}" class="flex items-center justify-center w-full bg-white border border-gray-300 text-gray-700 py-2 rounded-md hover:bg-gray-100">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google Icon" class="w-5 h-5 mr-2">
                    Login dengan Google
                </a>

                <a href="{{ route('facebook.redirect') }}" class="btn btn-primary">Login dengan Facebook</a>

            </form>
        </div>
    </div>
</body>
</html>
