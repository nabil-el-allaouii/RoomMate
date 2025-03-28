<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomate.ma - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex p-0 m-0">
    <div class="w-1/2 flex justify-center items-center bg-white">
        <div class="w-full max-w-md">
            <h2 class="text-3xl font-bold mb-8">Roomate.ma</h2>
            <p class="text-xl font-semibold mb-1">Create an account</p>
            <p class="text-gray-600 mb-6">Join Roomate.ma to find your perfect roommate!</p>

            <button class="w-full bg-white text-gray-800 border border-gray-300 py-2 rounded flex justify-center items-center mb-4">
                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5 mr-2">
                Sign Up with Google
            </button>

            <div class="text-center text-gray-500 mb-4">or Register with Email</div>

            <form action="/register" method="POST">
                <div class="m-2">
                    <label for="username" class="text-gray-500">Username</label>
                    <input id="username" name="username" type="text" placeholder="your username" class="w-full px-4 py-2 mb-2 border rounded" required>
                </div>
                <div class="m-2">
                    <label for="email" class="text-gray-500">Email</label>
                    <input id="email" name="email" type="email" placeholder="mail@abc" class="w-full px-4 py-2 mb-2 border rounded" required>
                </div>
                <div class="m-2">
                    <label for="password" class="text-gray-500">Password</label>
                    <input id="password" name="password" type="password" placeholder="*********" class="w-full px-4 py-2 mb-2 border rounded" required>
                </div>

                <button name="signup" type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Create</button>
            </form>

            <p class="text-center text-gray-600 mt-4">Already have an account? <a href="/login" class="text-blue-600">Login</a></p>
        </div>
    </div>
    <div class="w-1/2 flex min-h-screen  items-center">
        <img src="/images/Mask group (1).svg" alt="Illustration" class="w-full h-full object-cover overflow-hidden">
    </div>
</body>

</html>