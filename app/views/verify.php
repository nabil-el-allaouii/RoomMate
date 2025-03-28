<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification - Roommate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto p-6">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <h1 class="text-[#6C5CE7] text-3xl font-bold mb-2">Roommate</h1>
            <p class="text-gray-600">Email Verification</p>
        </div>

        <!-- OTP Card -->
        <div class="bg-white rounded-xl shadow-sm p-8">
            <div class="text-center mb-8">
                <h2 class="text-xl font-semibold mb-2">Enter Verification Code</h2>
                <p class="text-gray-500">We have sent a verification code to your email</p>
                <p class="text-gray-500">j***@youcode.ma</p>
            </div>

            <!-- Verification Code Input -->
            <form method="post">
                <div class="mb-8">
                    <input name="verification" type="text"
                        class="w-full px-4 py-3 text-center text-xl font-semibold border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6C5CE7] focus:border-transparent"
                        placeholder="Enter verification code">
                </div>

                <!-- Verify Button -->
                <button type="submit"
                    class="w-full bg-[#6C5CE7] text-white py-3 rounded-lg font-medium hover:bg-[#5a4bd4] transition-colors">
                    Verify Email
                </button>

                <!-- Resend Code -->
                <div class="text-center mt-6">
                    <p class="text-gray-600">Didn't receive the code?
                        <button type="button" class="text-[#6C5CE7] font-medium hover:text-[#5a4bd4]">
                            Resend
                        </button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>