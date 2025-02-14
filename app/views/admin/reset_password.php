<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Requests - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white py-4 px-6 border-b">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-8">
                <a href="/admin" class="text-[#6366F1] text-2xl font-bold">Roomate</a>
                <span class="text-gray-500">Admin Panel</span>
            </div>
            <button class="bg-[#6366F1] text-white px-6 py-2 rounded-lg">Logout</button>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-8 px-4">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <h1 class="text-2xl font-semibold">Password Reset Requests</h1>
                <p class="text-gray-500 mt-1">Manage user password reset requests</p>
            </div>

            <div class="p-6">
                <!-- Search and Filter -->
                <div class="flex gap-4 mb-6 max-w-md">
                    <div class="flex-1 ">
                        <input type="text" 
                               placeholder="Search by email..." 
                               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 text-left">
                                <th class="px-6 py-3 text-gray-500 font-medium">Email</th>
                                <th class="px-6 py-3 text-gray-500 font-medium">Request Date</th>
                                <th class="px-6 py-3 text-gray-500 font-medium">New Password</th>
                                <th class="px-6 py-3 text-gray-500 font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <!-- Example Row 1 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-[#6366F1] flex items-center justify-center text-white">
                                            J
                                        </div>
                                        <span>john.doe@example.com</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-500">2024-03-15 14:30</td>
                                <td class="px-6 py-4">
                                    <input type="text" 
                                           placeholder="Enter new password" 
                                           class="w-full px-3 py-1 border rounded focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                                </td>
                                <td class="px-6 py-4">
                                    <button class="bg-[#6366F1] text-white px-4 py-1 rounded hover:bg-[#5558E6] transition-colors">
                                        Reset
                                    </button>
                                </td>
                            </tr>

                            <!-- Example Row 2 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-[#6366F1] flex items-center justify-center text-white">
                                            S
                                        </div>
                                        <span>sarah.smith@example.com</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-500">2024-03-15 12:15</td>
                                <td class="px-6 py-4">
                                    <input type="text" 
                                           placeholder="Enter new password" 
                                           disabled
                                           class="w-full px-3 py-1 border rounded bg-gray-50 text-gray-400">
                                </td>
                                <td class="px-6 py-4">
                                    <button disabled class="bg-gray-100 text-gray-400 px-4 py-1 rounded cursor-not-allowed">
                                        Reset
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.querySelectorAll('input[placeholder="Enter new password"]').forEach(input => {
            input.addEventListener('input', function() {
                const resetBtn = this.closest('tr').querySelector('button');
                resetBtn.disabled = !this.value;
                resetBtn.classList.toggle('bg-gray-100', !this.value);
                resetBtn.classList.toggle('text-gray-400', !this.value);
                resetBtn.classList.toggle('cursor-not-allowed', !this.value);
                resetBtn.classList.toggle('bg-[#6366F1]', this.value);
                resetBtn.classList.toggle('text-white', this.value);
                resetBtn.classList.toggle('hover:bg-[#5558E6]', this.value);
            });
        });
    </script>
</body>
</html>
