<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomate.ma - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
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
            <div class="m-2">
                <label for="" class="text-gray-500">Username</label>
                <input type="email" placeholder="your username" class="w-full px-4 py-2 mb-2 border rounded">
               </div>
               <div class="m-2">
                <label for="" class="text-gray-500">Email</label>
                <input type="password" placeholder="mail@abc" class="w-full px-4 py-2 mb-2 border rounded">
                
               </div>
               <div class="m-2">
                <label for="" class="text-gray-500">Password</label>
            <input type="password" placeholder="*********" class="w-full px-4 py-2 mb-2 border rounded">

               </div>
            
            

            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Create</button>

            <p class="text-center text-gray-600 mt-4">Already have an account? <a href="login.html" class="text-blue-600">Login</a></p>
        </div>
    </div>
    <div class="w-1/2 flex min-h-screen  items-center">
        <img src="/images/Mask group (1).svg" alt="Illustration" class="w-full h-full object-cover overflow-hidden">
    </div>
</body>
</html>
