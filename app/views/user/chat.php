<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-80 bg-white border-r border-gray-200 flex flex-col h-full">
            <!-- Sidebar Header -->
            <div class="p-4 border-b">
                <h1 class="text-xl font-semibold">Messages</h1>
                <div class="mt-4">
                    <input type="text" placeholder="Search..." class="w-full px-3 py-2 bg-gray-100 rounded-lg focus:outline-none">
                </div>
            </div>
            
            <!-- Chat List -->
            <div class="flex-1 overflow-y-auto">
                <!-- Chat Items -->
                <div class="chat-list space-y-1">
                    <!-- Sample Chat Items -->
                    <div class="flex items-center p-3 hover:bg-gray-50 cursor-pointer">
                        <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full">
                        <div class="ml-3">
                            <div class="font-medium">John Doe</div>
                            <div class="text-sm text-gray-500">Last message...</div>
                        </div>
                    </div>
                    <!-- Add more chat items as needed -->
                </div>
            </div>
        </div>

        <!-- Main Chat Area -->
        <div class="flex-1 flex flex-col">
            <!-- Chat Header -->
            <div class="p-4 border-b bg-white">
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/40" alt="Current Chat" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <div class="font-medium">Current Chat</div>
                        <div class="text-sm text-gray-500">Online</div>
                    </div>
                </div>
            </div>

            <!-- Messages Area -->
            <div class="flex-1 overflow-y-auto p-4 space-y-4">
                <!-- Received Message -->
                <div class="flex items-start">
                    <img src="https://via.placeholder.com/32" alt="User" class="w-8 h-8 rounded-full">
                    <div class="ml-2 bg-gray-100 rounded-lg p-3 max-w-md">
                        <p>Hello! How are you?</p>
                        <span class="text-xs text-gray-500 mt-1">10:30 AM</span>
                    </div>
                </div>

                <!-- Sent Message -->
                <div class="flex items-start justify-end">
                    <div class="mr-2 bg-blue-600 text-white rounded-lg p-3 max-w-md">
                        <p>I'm doing great, thanks!</p>
                        <span class="text-xs text-blue-100 mt-1">10:31 AM</span>
                    </div>
                </div>
            </div>

            <!-- Message Input -->
            <div class="p-4 border-t bg-white">
                <div class="flex items-center">
                    <input type="text" placeholder="Type a message..." class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    <button class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none">
                        Send
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
