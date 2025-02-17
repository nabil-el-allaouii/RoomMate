<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports Management - Admin</title>
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
                <h1 class="text-2xl font-semibold">Reports Management</h1>
                <p class="text-gray-500 mt-1">Handle user reports and take appropriate actions</p>
            </div>

            <div class="p-6">
                <!-- Search and Filter -->
                <div class="flex gap-4 mb-6">
                    <div class="flex-1 max-w-xs">
                        <input type="text" 
                               placeholder="Search reports..." 
                               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                    </div>
                    <select class="px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                        <option value="all">All Types</option>
                        <option value="scam">Scam</option>
                        <option value="spam">Spam</option>
                        <option value="violence">Violence</option>
                        <option value="drugs">Drugs</option>
                        <option value="other">Other</option>
                    </select>
                    <select class="px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                        <option value="all">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="resolved">Resolved</option>
                    </select>
                </div>

                <!-- Reports List -->
                <div class="space-y-4">
                    <?php foreach ($reports as $report): ?>
                    <div class="border rounded-lg p-4 hover:bg-gray-50">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="px-3 py-1 rounded-full text-sm 
                                        <?php echo match($report['type']) {
                                            'scam' => 'bg-red-100 text-red-800',
                                            'spam' => 'bg-yellow-100 text-yellow-800',
                                            'violence' => 'bg-orange-100 text-orange-800',
                                            'drugs' => 'bg-purple-100 text-purple-800',
                                            'other' => 'bg-gray-100 text-gray-800',
                                        }; ?>">
                                        <?php echo ucfirst($report['type']); ?>
                                    </span>
                                    <span class="text-gray-500">
                                        Reported <?php echo $report['created_at']; ?>
                                    </span>
                                </div>
                                <p class="text-gray-600"><?php echo $report['description']; ?></p>
                            </div>
                            <a href="/annonce/<?php echo $report['annonce_id'] ?? 'Unknown'; ?>" 
                               class="text-[#6366F1] hover:text-[#5558E6] flex items-center gap-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </a>
                        </div>

                        <div class="flex items-center justify-end">

                            <div class="flex gap-2">
                                <form action="/admin/ban-reporter" method="POST" class="inline">
                                    <input type="hidden" name="reporter_id" value="<?php echo $report['reporter_id'] ?? 'Unknown'; ?>">
                                    <button type="submit" 
                                            class="px-3 py-1 border border-red-500 text-red-500 rounded hover:bg-red-50">
                                        Ban Reporter
                                    </button>
                                </form>

                                <form action="/admin/ban-reported" method="POST" class="inline">
                                    <input type="hidden" name="reported_id" value="<?php echo $report['reported_id'] ?? 'Unknown'; ?>">
                                    <button type="submit" 
                                            class="px-3 py-1 border border-red-500 text-red-500 rounded hover:bg-red-50">
                                        Ban User
                                    </button>
                                </form>

                                <form action="/admin/delete-report" method="POST" class="inline">
                                    <input type="hidden" name="report_id" value="<?php echo $report['id']; ?>">
                                    <button type="submit" 
                                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                        Delete Report
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-between mt-6">
                    <p class="text-gray-500">Showing 1-10 of 23 reports</p>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Previous</button>
                        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
