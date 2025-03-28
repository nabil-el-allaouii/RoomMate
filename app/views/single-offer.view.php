<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roommate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="px-4 py-4 flex justify-between items-center max-w-7xl mx-auto">
        <div class="text-[#6C5CE7] text-2xl font-bold">Roommate</div>
        <button class="bg-[#6C5CE7] text-white px-6 py-2 rounded-lg">Get Started</button>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Date -->
        <div class="text-gray-500 mb-6">12 November 2021</div>

        <!-- Image Grid with Scroll -->
        <div class="relative mb-8">
            <!-- Like Button -->
            <button class="absolute top-4 right-4 z-10 bg-white p-2 rounded-full shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </button>

            <!-- Scrollable Container -->
            <div class="flex overflow-x-auto gap-4 snap-x snap-mandatory scrollbar-hide">
                <?php foreach ($photos as $photo) { ?>
                    <div class="flex-shrink-0 w-full snap-center">
                        <img src="../../public/<?= $photo['photo'] ?>" alt="Room 1" class="w-full h-[400px] object-cover rounded-lg">
                    </div>
                <?php } ?>
            </div>

            <!-- Navigation Dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2">
                <button class="w-2 h-2 rounded-full bg-white opacity-50"></button>
                <button class="w-2 h-2 rounded-full bg-white"></button>
                <button class="w-2 h-2 rounded-full bg-white opacity-50"></button>
            </div>
        </div>

        <!-- Content Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left Content -->
            <div class="col-span-2">
                <h1 class="text-3xl font-bold mb-4">Entire residential home appartement</h1>
                <div class="flex items-center gap-2 text-gray-500 mb-6">
                    <span><?php echo $annonce['capacity']; ?> rooms</span>
                    <span>-</span>
                    <span class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        3
                    </span>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    <?php echo $annonce['description']; ?>
                </p>
            </div>

            <!-- Right Content -->
            <div class="col-span-1">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt="Profile" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <h3 class="font-semibold"><?php echo $annonce['name']; ?></h3>
                            <p class="text-gray-500 text-sm">Host</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <p class="text-gray-500">Budget</p>
                                <p class="font-medium"><?php echo $annonce['budget']; ?> DH</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <p class="text-gray-500">City</p>
                                <p class="font-medium"><?php echo $annonce['city']; ?></p>
                            </div>
                        </div>

                        <!-- <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <div>
                                <p class="text-gray-500">Address</p>
                                <p class="font-medium">Al Amal</p>
                            </div>
                        </div> -->

                        <button class="w-full bg-[#6C5CE7] text-white py-3 rounded-lg mt-6">
                            Contact <?php echo $annonce['name']; ?>
                        </button>

                        <button onclick="openReportModal()" class="w-full text-red-500 flex items-center justify-center gap-2 mt-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            Report this offer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#0A0442] text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Roommate</h2>
                    <p class="text-gray-300">Our mission is to help you find a student roommate easily</p>
                </div>
                <div class="flex justify-end gap-8">
                    <a href="#" class="hover:text-gray-300">Home</a>
                    <a href="#" class="hover:text-gray-300">Contact us</a>
                    <a href="#" class="hover:text-gray-300">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-300">Term of use</a>
                </div>
            </div>
        </div>
    </footer>

    <style>
        /* Hide scrollbar but keep functionality */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari and Opera */
        }
    </style>

    <!-- Report Modal -->
    <div id="reportModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center overflow-y-auto">
        <div class="bg-white rounded-lg max-w-md w-full mx-4 my-8">
            <div class="p-6 border-b sticky top-0 bg-white z-10">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Report this listing</h2>
                    <button onclick="closeReportModal()" class="text-gray-400 hover:text-gray-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="max-h-[calc(100vh-8rem)] overflow-y-auto">
                <form action="/annonce/<?php echo $annonce['id']; ?>" method="POST" class="p-6">
                    <input type="hidden" name="annonce_id" value="<?php echo $annonce['id']; ?>">
                    <input type="hidden" name="reporter_id" value="<?php echo $_SESSION['user_id']; ?>">
                    <input type="hidden" name="reported_id" value="<?php echo $annonce['user_id']; ?>">
                    
                    <div class="space-y-4">
                        <p class="text-gray-600 mb-4">Please select a reason for reporting this listing:</p>
                        
                        <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="type" value="scam" class="text-[#6C5CE7]" required>
                            <span class="ml-2">Scam or Fraud</span>
                        </label>

                        <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="type" value="spam" class="text-[#6C5CE7]">
                            <span class="ml-2">Spam or Misleading</span>
                        </label>

                        <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="type" value="violence" class="text-[#6C5CE7]">
                            <span class="ml-2">Violence or Harassment</span>
                        </label>

                        <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="type" value="drugs" class="text-[#6C5CE7]">
                            <span class="ml-2">Drugs or Illegal Activities</span>
                        </label>

                        <label class="flex items-center p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="type" value="other" class="text-[#6C5CE7]">
                            <span class="ml-2">Other</span>
                        </label>

                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Additional Details (Optional)</label>
                            <textarea name="description" rows="3" 
                                      class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-[#6C5CE7] focus:border-transparent"
                                      placeholder="Please provide any additional information..."></textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex gap-3">
                        <button type="button" onclick="closeReportModal()" 
                                class="flex-1 px-4 py-2 border rounded-lg text-gray-600 hover:bg-gray-50">
                            Cancel
                        </button>
                        <button type="submit" 
                                class="flex-1 px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
                            Submit Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openReportModal() {
            document.getElementById('reportModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
        }

        function closeReportModal() {
            document.getElementById('reportModal').classList.add('hidden');
            document.body.style.overflow = ''; // Restore scrolling
        }

        // Close modal when clicking outside
        document.getElementById('reportModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeReportModal();
            }
        });

        // Highlight selected radio option
        document.querySelectorAll('input[name="type"]').forEach(radio => {
            radio.addEventListener('change', function() {
                // Remove highlight from all labels
                document.querySelectorAll('input[name="type"]').forEach(r => {
                    r.closest('label').classList.remove('border-[#6C5CE7]', 'bg-purple-50');
                });
                
                // Add highlight to selected label
                if (this.checked) {
                    this.closest('label').classList.add('border-[#6C5CE7]', 'bg-purple-50');
                }
            });
        });
    </script>
</body>

</html>