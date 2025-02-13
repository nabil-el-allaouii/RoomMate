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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <button class="text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                <button class="bg-[#6366F1] text-white px-6 py-2 rounded-lg">Profile</button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-2xl mx-auto py-12 px-4">
        <h1 class="text-3xl font-semibold text-center mb-2">Add a new listing</h1>
        <p class="text-center text-gray-500 mb-8">you are steps away from finding a new roommate</p>

        <form id="listingForm" class="space-y-6" method="POST" enctype="multipart/form-data">
            <!-- Type Selection -->
            <div class="flex gap-4 justify-center mb-8">
                <button type="button" id="demandBtn" class="px-6 py-2 rounded-lg flex items-center gap-2 border transition-colors" data-active="false">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    Demand
                </button>
                <button type="button" id="offerBtn" class="px-6 py-2 rounded-lg flex items-center gap-2 border transition-colors" data-active="false">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Offer
                </button>
            </div>

            <!-- Common Fields for Both Types -->
            <div class="space-y-4">
                <input type="hidden" name="type" id="annonceType" value="demand">
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Title *</label>
                    <input type="text" name="title" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent" placeholder="Enter listing title">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                    <textarea name="description" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent" rows="4" placeholder="Write a detailed description about your listing"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">City *</label>
                        <select name="city" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                            <option value="">Choose a city</option>
                            <option value="casablanca">Asfi</option>
                            <option value="rabat">Nador</option>
                            <option value="marrakech">Youssoufia</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Room Type *</label>
                        <select name="room_type" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                            <option value="">Select room type</option>
                            <option value="private">Private</option>
                            <option value="shared">Shared</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Capacity *</label>
                        <input type="number" name="capacity" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent" placeholder="Number of places">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Budget (MAD) *</label>
                        <input type="number" name="budget" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent" placeholder="Your budget">
                    </div>
                </div>

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
                            <!-- <div class="font-medium text-gray-700 border-b pb-2 mb-2">Lifestyle</div> -->
                            <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" name="preferences[]" value="no_smoking" class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                                <span class="text-gray-700">No Smoking</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" name="preferences[]" value="no_pets" class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                                <span class="text-gray-700">No Pets</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" name="preferences[]" value="quiet" class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                                <span class="text-gray-700">Quiet Environment</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" name="preferences[]" value="quiet" class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                                <span class="text-gray-700">No Party</span>
                            </label>
                            <label class="flex items-center space-x-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" name="preferences[]" value="quiet" class="rounded text-[#6366F1] focus:ring-[#6366F1]">
                                <span class="text-gray-700">No Guest</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">From Date *</label>
                        <input type="date" name="from_date" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">To Date *</label>
                        <input type="date" name="to_date" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-[#6366F1] focus:border-transparent">
                    </div>
                </div>

                <!-- Photos Section (Only for Offers) -->
                <div id="photosSection" class="hidden">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Photos *</label>
                    <div class="border-2 border-dashed rounded-lg p-8 text-center relative">
                        <input type="file" name="photos[]" multiple accept="image/*" 
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                            onchange="updateFileList(this)">
                        <div class="flex flex-col items-center">
                            <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="text-gray-600">Click to upload</p>
                            <p class="text-gray-400 text-sm">PNG, JPG up to 10MB</p>
                        </div>
                        <div id="fileList" class="mt-4 text-left"></div>
                    </div>
                </div>

                <button type="submit" class="w-full bg-[#6366F1] text-white py-3 rounded-lg hover:bg-[#5558E6] transition-colors">
                    Submit
                </button>
            </div>
        </form>
    </main>

    <script>
        const demandBtn = document.getElementById('demandBtn');
        const offerBtn = document.getElementById('offerBtn');
        const photosSection = document.getElementById('photosSection');
        const annonceType = document.getElementById('annonceType');

        function setActiveButton(activeBtn, inactiveBtn) {
            activeBtn.classList.add('bg-[#6366F1]', 'text-white');
            activeBtn.classList.remove('border');
            activeBtn.setAttribute('data-active', 'true');
            
            inactiveBtn.classList.remove('bg-[#6366F1]', 'text-white');
            inactiveBtn.classList.add('border');
            inactiveBtn.setAttribute('data-active', 'false');

            // Show/hide photos section for offer
            if (activeBtn === offerBtn) {
                photosSection.classList.remove('hidden');
                annonceType.value = 'offer';
            } else {
                photosSection.classList.add('hidden');
                annonceType.value = 'demand';
            }
        }

        demandBtn.addEventListener('click', () => setActiveButton(demandBtn, offerBtn));
        offerBtn.addEventListener('click', () => setActiveButton(offerBtn, demandBtn));

        // Set demand as default active button
        setActiveButton(demandBtn, offerBtn);

        // File upload handling
        function updateFileList(input) {
            const fileList = document.getElementById('fileList');
            fileList.innerHTML = '';
            
            for (let i = 0; i < input.files.length; i++) {
                const file = input.files[i];
                const fileItem = document.createElement('div');
                fileItem.className = 'text-sm text-gray-600';
                fileItem.textContent = `${file.name} (${(file.size / 1024 / 1024).toFixed(2)}MB)`;
                fileList.appendChild(fileItem);
            }
        }

        // Preferences dropdown functionality
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
