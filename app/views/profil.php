<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Roomate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="bg-white py-4 px-6 shadow-sm">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-3xl font-bold text-indigo-600">
                Roomate
            </a>
            <div class="flex items-center gap-4">
                <button class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>

                <!-- Bell icon -->
                <button class="text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <!-- Profile Dropdown -->
                <div class="relative">
                    <button onclick="toggleDropdown()" class="flex items-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsynwv-5qtogtOwJbIjaPFJUmHpzhxgqIAug&s" alt="Profile" class="w-10 h-10 rounded-full object-cover">
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="profileDropdown"
                        class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                        <a href="profile.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                        <a href="my-offers.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My
                            Offers</a>
                        <a href="my-demands.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My
                            Demands</a>
                        <a href="messages.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Messages</a>
                        <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                            Out</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Profile Header -->
            <div class="bg-white rounded-2xl p-6 shadow-sm mb-8">
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsynwv-5qtogtOwJbIjaPFJUmHpzhxgqIAug&s" alt="Profile"
                            class="w-20 h-20 rounded-full object-cover border-2 border-white shadow-md">
                        <span
                            class="absolute bottom-0 right-0 w-4 h-4 bg-green-400 border-2 border-white rounded-full"></span>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Esther Dixon</h2>
                        <p class="text-gray-500">166 - 23</p>
                    </div>
                </div>
            </div>

            <!-- Demands Section -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Your Demands</h3>
                    <button
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors duration-150 ease-in-out shadow-sm hover:shadow">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        New demand
                    </button>
                </div>

                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        City</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Budget</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Availability</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Type</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Created</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <td class="px-6 py-4">
                                        <span class="text-indigo-600 font-medium">Youssoufia</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-medium">800 DH</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            05 november
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                            Demand
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">12 nov. 21</td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-3">
                                            <button
                                                onclick="showInfoModal(this)"
                                                class="text-gray-400 hover:text-indigo-600 transition-colors duration-150">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </button>
                                            <button
                                                class="text-gray-400 hover:text-red-600 transition-colors duration-150">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Offers Section -->
            <div>
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Your Offers</h3>
                    <button
                        class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors duration-150 ease-in-out shadow-sm hover:shadow">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        New offer
                    </button>
                </div>

                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        City</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Budget</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Availability</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Type</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Created</th>
                                    <th
                                        class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <td class="px-6 py-4">
                                        <span class="text-indigo-600 font-medium">Youssoufia</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-medium">800 DH</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            05 november
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                            Offer
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">12 nov. 21</td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-3">
                                            <button
                                                onclick="showInfoModal(this)"
                                                class="text-gray-400 hover:text-indigo-600 transition-colors duration-150">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </button>
                                            <button
                                                class="text-gray-400 hover:text-red-600 transition-colors duration-150">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add this modal HTML at the end of your body tag but before the closing </body> -->
    <div id="infoModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <!-- Modal backdrop -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <!-- Modal content -->
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">
                <!-- Modal header with gradient background -->
                <div class="absolute top-0 left-0 right-0 bg-gradient-to-r from-indigo-600 to-purple-600 px-4 py-4 sm:px-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold leading-6 text-white">Edit Demand Details</h3>
                        <button onclick="closeInfoModal()" class="text-white hover:text-gray-200 transition-colors">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Modal body -->
                <div class="bg-white px-4 pt-20 pb-4 sm:p-6 sm:pt-20">
                    <form class="space-y-6" id="demandForm">
                        <div class="grid grid-cols-2 gap-6">
                            <!-- City Input -->
                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <input type="text" id="modalCity" class="h-12 pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <!-- Budget Input -->
                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Budget</label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">DH</span>
                                    </div>
                                    <input type="text" id="modalBudget" class="h-12 pl-12 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <!-- Availability Input -->
                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Availability</label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <input type="date" id="modalAvailability" class="h-12 pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <!-- Type Select -->
                            <div class="col-span-2 sm:col-span-1">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                                <select id="modalType" class="h-12 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="Demand">Demand</option>
                                    <option value="Offer">Offer</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" onclick="saveDemandChanges()" class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 sm:ml-3 sm:w-auto">
                        Save changes
                    </button>
                    <button type="button" onclick="closeInfoModal()" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    function toggleDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        dropdown.classList.toggle('hidden');
    }

    // Close dropdown when clicking outside
    window.addEventListener('click', function(e) {
        const dropdown = document.getElementById('profileDropdown');
        const profileButton = e.target.closest('button');

        if (!profileButton && !dropdown.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });

    function showInfoModal(button) {
        // Get the demand data from the row
        const row = button.closest('tr');
        const city = row.querySelector('td:nth-child(1)').textContent.trim();
        const budget = row.querySelector('td:nth-child(2)').textContent.trim();
        const availability = row.querySelector('td:nth-child(3)').textContent.trim();
        const type = row.querySelector('td:nth-child(4)').textContent.trim();

        // Update modal inputs
        document.getElementById('modalCity').value = city;
        document.getElementById('modalBudget').value = budget.replace(' DH', '');
        document.getElementById('modalAvailability').value = formatDate(availability);
        document.getElementById('modalType').value = type;

        // Show the modal
        document.getElementById('infoModal').classList.remove('hidden');
    }

    function closeInfoModal() {
        document.getElementById('infoModal').classList.add('hidden');
    }

    function saveDemandChanges() {
        // Get the updated values
        const city = document.getElementById('modalCity').value;
        const budget = document.getElementById('modalBudget').value;
        const availability = document.getElementById('modalAvailability').value;
        const type = document.getElementById('modalType').value;

        console.log('Saving changes:', { city, budget, availability, type });

        closeInfoModal();
    }

    function formatDate(dateStr) {
        return dateStr;
    }
    
    document.getElementById('infoModal').addEventListener('click', function(event) {
        if (event.target === this) {
            closeInfoModal();
        }
    });
    </script>
</body>