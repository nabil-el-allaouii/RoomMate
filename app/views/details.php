<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new listing - Roomate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white py-4 px-6 border-b">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="/" class="text-[#6366F1] text-2xl font-bold">Roomate</a>
            <div class="flex items-center gap-4">
                <button class="text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <button class="text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                <a href="/mesannonces" class="bg-[#6366F1] text-white px-6 py-2 rounded-lg">Mes annonces</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-2xl mx-auto py-12 px-4">
        <h1 class="text-3xl font-semibold text-center mb-2">Add a new listing</h1>
        <p class="text-center text-gray-500 mb-8">you are steps away from finding a new roommate</p>

        <form action="/details" id="listingForm" class="space-y-6" method="POST" enctype="multipart/form-data">

            <div class="space-y-4">
            <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">BIO *</label>
                    <textarea name="bio" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                        rows="4" placeholder="Write a detailed description about your listing"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Current City * </label>
                    <input type="text" name="current_city"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                        placeholder="Enter your address">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Origin City * </label>
                    <input type="text" name="origin_city"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                        placeholder="Enter your address">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Room type *</label>
                        <select name="room_type"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                            <option value="">Private or shared?</option>
                            <option value="private">Private</option>
                            <option value="shared">Shared</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Education year *</label>
                        <select name="education_year"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                            <option value="">first or second ?</option>
                            <option value="first">First</option>
                            <option value="second">Second</option>
                        </select>
                    </div>
                </div>
            </div>


            <!-- Offer-specific fields -->
            <div id="offerFields" class="space-y-4 hidden">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Photos *</label>
                    <div class="border-2 border-dashed rounded-lg p-8 text-center relative">
                        <input type="file" name="profile_pic" accept="image/*"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                            onchange="updateFileList(this)">
                        <div class="flex flex-col items-center">
                            <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="text-gray-600">Click to upload</p>
                            <p class="text-gray-400 text-sm">PNG, JPG up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fileList" class="mt-4 text-left"></div>
            <div class="relative">
                <label class="block text-sm font-medium text-gray-700 mb-1">Preferences *</label>
                <button type="button" id="preferencesDropdown"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent bg-white text-left flex justify-between items-center">
                    <span id="selectedPreferences" class="text-gray-500">Select preferences</span>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="preferencesMenu" class="hidden absolute z-10 mt-1 w-full bg-white border rounded-lg shadow-lg">
                    <div class="p-3 space-y-2 max-h-60 overflow-y-auto">
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" name="preferences[]" value="no_smoking"
                                class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                            <span class="text-gray-700">No Smoking</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" name="preferences[]" value="no_pets"
                                class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                            <span class="text-gray-700">No Pets</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" name="preferences[]" value="quiet"
                                class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                            <span class="text-gray-700">Quiet Environment</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" name="preferences[]" value="quiet"
                                class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                            <span class="text-gray-700">No Party</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="checkbox" name="preferences[]" value="quiet"
                                class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                            <span class="text-gray-700">No Guest</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Budget *</label>
                    <input type="number" name="budget" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent"
                        placeholder="Your budget (in Dirham)">
                </div>
            </div>


            <button type="submit"
                class="w-full bg-[#6366F1] text-white py-3 rounded-lg hover:bg-[#5558E6] transition-colors">
                Submit
            </button>
            </div>
        </form>
    </main>

    <script>

    const preferencesDropdown = document.getElementById('preferencesDropdown');
    const preferencesMenu = document.getElementById('preferencesMenu');
    const selectedPreferences = document.getElementById('selectedPreferences');
    const checkboxes = document.querySelectorAll('input[name="preferences[]"]');

    preferencesDropdown.addEventListener('click', () => {
        preferencesMenu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!preferencesDropdown.contains(e.target) && !preferencesMenu.contains(e.target)) {
            preferencesMenu.classList.add('hidden');
        }
    });

    // Update selected preferences text
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateSelectedPreferences);
    });

    function updateSelectedPreferences() {
        const selected = Array.from(checkboxes)
            .filter(cb => cb.checked)
            .map(cb => cb.nextElementSibling.textContent.trim());

        if (selected.length === 0) {
            selectedPreferences.textContent = 'Select preferences';
            selectedPreferences.classList.add('text-gray-500');
        } else {
            selectedPreferences.textContent = selected.join(', ');
            selectedPreferences.classList.remove('text-gray-500');
        }
    }
    </script>
</body>

</html>