<?php 
    // print_r($_SESSION);
?>
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
        <!-- <?php if(!empty($conversations)) : ?> -->
        <div class="w-80 bg-white border-r border-gray-200 flex flex-col h-full">
            <!-- Sidebar Header -->
            <div class="p-4 border-b">
                <h1 class="text-xl font-semibold">Messages</h1>
                <div class="mt-4">
                    <input type="text" placeholder="Search..."
                        class="w-full px-3 py-2 bg-gray-100 rounded-lg focus:outline-none">
                </div>
            </div>

            <!-- Chat List -->
            <div class="flex-1 overflow-y-auto">
                <!-- Chat Items -->
                <div class="chat-list space-y-1">
                    <!-- Sample Chat Items -->
                    <?php foreach ($info as $inf) : ?>
                    <div class="flex items-center p-3 hover:bg-gray-50 cursor-pointer">
                        <img src="<?= $inf['photo_profil']; ?>" alt="User" class="w-10 h-10 rounded-full">
                        <div class="ml-3">
                            <div class="font-medium"><?= $inf['name_receiver']; ?></div>
                            <div class="text-sm text-gray-500">Last message...</div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!-- Add more chat items as needed -->
                </div>
            </div>
        </div>

        <!-- Main Chat Area -->
        <div class="flex-1 flex flex-col">
            <!-- Chat Header -->
            <div class="p-4 border-b bg-white">
                <?php foreach ($info as $inf) : ?>
                <div class="flex items-center">
                    <img src="<?= $inf['photo_profil']; ?>" alt="Current Chat" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <div class="font-medium"><?= $inf['name_receiver']; ?></div>
                        <div class="text-sm text-gray-500">Online</div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Messages Area -->
            <div class="flex-1 overflow-y-auto p-4 space-y-4 bg-gray-50">
                <?php foreach ($conversations as $conversation) : ?>
                <div
                    class="flex items-start gap-2 <?= $conversation['sender_id'] == $_SESSION['user_id'] ? 'justify-end' : 'justify-start' ?>">
                    <?php if ($conversation['sender_id'] != $_SESSION['user_id']) : ?>
                    <?php foreach ($info as $inf) : ?>
                    <img src="<?= $inf['photo_profil'] ?>" alt="User" class="w-8 h-8 rounded-full">
                    <?php endforeach; ?>
                    <?php endif; ?>

                    <div
                        class="flex flex-col <?= $conversation['sender_id'] == $_SESSION['user_id'] ? 'items-end' : 'items-start' ?>">
                        <div
                            class="<?= $conversation['sender_id'] == $_SESSION['user_id'] ? 'bg-blue-600 text-white' : 'bg-white' ?> rounded-2xl px-4 py-2 max-w-md shadow-sm">
                            <p class="text-sm"><?= $conversation['message']; ?></p>
                        </div>
                        <span class="text-xs text-gray-500 mt-1 px-2">10:30 AM</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <form action="/sendMessage" method="post">
                <!-- Message Input -->
                <div class="p-4 border-t bg-white">
                    <div class="flex items-center">
                        <input type="hidden" name="conversation_id" value="<?= $conversation['conversation_id'] ?>">
                        <input type="hidden" name="sender_id" value="<?= $_SESSION['user_id'] ?>">
                        <?php foreach ($info as $inf) : ?>
                        <input type="hidden" name="receiver_id" value="<?= $inf['user_two'] ?>">
                        <?php endforeach; ?>
                        <input type="text" placeholder="Type a message..." name="message"
                            class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                        <button
                            class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none"
                            name="sendbutton">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <?php else : ?>
        <div class="flex-1 flex flex-col justify-center items-center">
            <div class="p-8 bg-white rounded-lg shadow-sm text-center max-w-md w-full">
                <div class="mb-4">
                    <svg class="w-16 h-16 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">No Conversations Yet</h3>
                <p class="text-gray-500 mb-6">Start a new conversation by selecting a contact or searching for someone.
                </p>
                <a href="/recherche"
                    class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    Start New Chat
                </a>
            </div>
        </div>

        <?php endif; ?>
    </div>
</body>

</html>