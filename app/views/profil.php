<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roommate - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Header Navigation -->
    <header class="bg-white border-b border-gray-200 fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="text-[#6C5CE7] text-2xl font-bold">Roommate</div>

                <!-- Navigation Icons -->
                <div class="flex items-center gap-6">
                    <a href="/recherche">
                        <button class="text-gray-600 hover:text-[#6C5CE7]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </a>

                    <button class="text-gray-600 hover:text-[#6C5CE7] relative group">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span
                            class="bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center absolute -top-2 -right-2">3</span>
                    </button>

                    <button class="text-gray-600 hover:text-[#6C5CE7]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </button>

                    <a href="/addAnnonce"><button class="text-gray-600 hover:text-[#6C5CE7]">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button></a>

                    <!-- Profile/Settings Dropdown -->
                    <div class="relative">
                        <button id="profileButton" class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=6C5CE7&color=fff"
                                alt="Profile" class="w-8 h-8 rounded-full">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="profileDropdown"
                            class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-gray-200">
                            <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="pt-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="max-w-3xl mx-auto">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold">Profile Settings</h1>
                <button class="bg-[#6C5CE7] text-white px-6 py-2 rounded-lg hover:bg-[#5a4bd4] transition-colors">
                    Save Changes
                </button>
            </header>

            <!-- Profile Form -->
            <div class="bg-white rounded-xl shadow-sm p-8">
                <!-- Profile Picture Section -->
                <div class="flex items-center gap-8 mb-8 pb-8 border-b border-gray-200">
                    <div class="relative">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=6C5CE7&color=fff" alt="Profile"
                            class="w-32 h-32 rounded-full">
                        <button
                            class="absolute bottom-0 right-0 bg-[#6C5CE7] p-2 rounded-full text-white hover:bg-[#5a4bd4] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Profile Picture</h2>
                        <p class="text-gray-500">Upload a new profile picture</p>
                    </div>
                </div>

                <!-- Personal Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6C5CE7] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">YouCode Email</label>
                        <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50"
                            value="john.doe@youcode.ma" disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Study Year</label>
                        <select
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6C5CE7] focus:border-transparent">
                            <option>1ère année</option>
                            <option>2ème année</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6C5CE7] focus:border-transparent">
                    </div>
                </div>

                <!-- Location Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Home City</label>
                        <input type="text"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6C5CE7] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Current City</label>
                        <input type="text"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6C5CE7] focus:border-transparent">
                    </div>
                </div>

                <!-- Biography -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Biography</label>
                    <textarea rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#6C5CE7] focus:border-transparent"></textarea>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Toggle profile dropdown
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!profileButton.contains(e.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>
</body>

</html>