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
                <a href="/admin/reports" class="text-gray-500 hover:text-[#6366F1]">Reports</a>
            </div>
            <a href="/logout"><button class="bg-[#6366F1] text-white px-6 py-2 rounded-lg">Logout</button></a>
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

                            <?php foreach ($requests as $request) : ?>

                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        <form action="/admin/reset_password" method="post">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded-full bg-[#6366F1] flex items-center justify-center text-white">
                                                    <?php echo substr($request['email'], 0, 1); ?>
                                                </div>
                                                <span><?php echo $request['email']; ?></span>
                                            </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500"><?php echo $request['created_at']; ?></td>
                                    <td class="px-6 py-4">
                                        <input type="text"
                                            placeholder="Enter new password"
                                            name="password"
                                            class="w-full px-3 py-1 border rounded">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="hidden" name="email" value="<?php echo $request['email']; ?>">
                                        <button type="submit" disabled class="bg-gray-100 text-gray-400 px-4 py-1 rounded cursor-not-allowed">Reset</button>
                                    </td>
                                    </form>
                                </tr>
                            <?php endforeach; ?>
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