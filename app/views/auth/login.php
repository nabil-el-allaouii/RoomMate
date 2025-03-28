<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex">
    <div class="w-1/2 h-[100vh]flex justify-start items-center">
        <img src="/images/login.svg" alt="Illustration" class="w-full h-full object-cover overflow-hidden">
    </div>

    <div class="w-1/2 flex justify-center items-center bg-white">
        <div class="w-full max-w-md">
            <h2 class="text-3xl font-bold mb-8">Roomate.ma</h2>
            <p class="text-xl font-semibold mb-1">Login tou your account</p>
            <p class="text-gray-600 mb-6">Login to your account</p>

            <button class="w-full bg-white text-gray-800 border border-gray-300 py-2 rounded flex justify-center items-center mb-4">
                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-5 h-5 mr-2">
                Continue with Google
            </button>

            <div class="text-center text-gray-500 mb-4">or Sign in with Email</div>

            <form action="/login" method="POST">
                <div class="m-2">
                    <label for="email" class="text-gray-500">Email</label>
                    <input id="email" name="email" type="email" placeholder="mail@abc" class="w-full px-4 py-2 mb-2 border rounded" required>
                </div>
                <div class="m-2">
                    <label for="password" class="text-gray-500">Password</label>
                    <input id="password" name="password" type="password" placeholder="*********" class="w-full px-4 py-2 mb-2 border rounded" required>
                </div>

                <div class="flex justify-between text-sm text-gray-600 mb-4">
                    <label><input type="checkbox" name="remember" class="mr-2"> Remember Me</label>
                    <a href="#" onclick="openForgotPasswordModal(); return false;" class="text-blue-600">Forgot Password?</a>
                </div>

                <button name="login" type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Login</button>
            </form>

            <p class="text-center text-gray-600 mt-4">Not Registered Yet? <a href="/register" class="text-blue-600">Create an account</a></p>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <div id="forgotPasswordModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg max-w-md w-full mx-4">
            <div class="p-6 border-b">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Reset Password</h2>
                    <button onclick="closeForgotPasswordModal()" class="text-gray-400 hover:text-gray-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <form action="/forgot-password" method="POST" class="p-6">
                <div class="space-y-4">
                    <p class="text-gray-600">A new password will be sent to your email when the request is confirmed</p>
                    
                    <div>
                        <label for="reset-email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" 
                               id="reset-email"
                               name="email" 
                               required
                               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                               placeholder="Enter your email">
                    </div>
                </div>

                <div class="mt-6 flex gap-3">
                    <button type="button" 
                            onclick="closeForgotPasswordModal()" 
                            class="flex-1 px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="flex-1 px-4 py-2 bg-[#6366F1] text-white rounded-lg hover:bg-[#5558E6]">
                        Send Reset Request
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openForgotPasswordModal() {
            document.getElementById('forgotPasswordModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
        }

        function closeForgotPasswordModal() {
            document.getElementById('forgotPasswordModal').classList.add('hidden');
            document.body.style.overflow = ''; // Restore scrolling
        }

        // Close modal when clicking outside
        document.getElementById('forgotPasswordModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeForgotPasswordModal();
            }
        });
    </script>
</body>

</html>