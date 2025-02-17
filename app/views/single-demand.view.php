<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roommate - Demande</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="px-4 py-4 flex justify-between items-center max-w-7xl mx-auto">
        <a href="/" class="text-[#6C5CE7] text-2xl font-bold">Roommate</a>
        <button class="bg-[#6C5CE7] text-white px-6 py-2 rounded-lg">Get Started</button>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left Content -->
            <div class="col-span-2">
                <h1 class="text-4xl font-bold text-gray-900 mb-2">Demande residential home appartement</h1>
                <p class="text-gray-500 mb-8"><?php echo $demand['created_at']; ?></p>

                <p class="text-gray-600 leading-relaxed mb-8">
                    Situé dans un quartier populaire de la médina, le riad Dar Mata vous fera vivre une vraie expérience
                    dans la vie des marrakchis. La maison est calme, est équipée de la fibre optique pour pouvoir surfer
                    et télétravailler sans souci. La terrasse vous permettra de profiter du soleil et des petits
                    oiseaux. Vous aurez accès à la cuisine où les condiments de bases sont présents. La chambre vous
                    sera attribuée en fonction de la disponibilité du riad. Les chambres ont toutes une salle de bain
                    privée
                </p>
            </div>

            <!-- Right Content -->
            <div class="col-span-1">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <!-- Profile Section -->
                    <div class="flex flex-col items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Hakim Jellaba"
                            class="w-16 h-16 rounded-full object-cover mb-2">
                        <h3 class="font-semibold">Hakim Jellaba</h3>
                        <p class="text-gray-500 text-sm">Fes - 23</p>
                    </div>

                    <!-- Details -->
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500">Budget</span>
                            <span class="font-medium">800 DH</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500">City</span>
                            <span class="font-medium">Safi</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500">Availability</span>
                            <span class="font-medium">Immediatly</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500">Room Type</span>
                            <span class="font-medium">Shared</span>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <button class="w-full bg-[#6C5CE7] text-white py-3 rounded-lg mb-4">
                        Contact Hakim
                    </button>

                    <!-- Report Link -->
                    <div class="text-center">
                        <a href="#" class="text-red-500 inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            Report this demand
                        </a>
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
                    <p class="text-gray-300 max-w-md">
                        codemate mission is to help you find a roommate easily
                        you find a roommate easily
                        student roommate easily
                        created by youcode students
                        for youcode students.
                    </p>
                </div>
                <div class="flex flex-col md:flex-row md:justify-end gap-8">
                    <div class="space-y-2">
                        <a href="#" class="block hover:text-gray-300">Home</a>
                        <a href="#" class="block hover:text-gray-300">Contact us</a>
                    </div>
                    <div class="space-y-2">
                        <a href="#" class="block hover:text-gray-300">Privacy Policy</a>
                        <a href="#" class="block hover:text-gray-300">Term of use</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>