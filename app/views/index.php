<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roommate - Find Your Perfect Roommate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #FF6B95 0%, #6C5CE7 100%);
            position: relative;
        }

        .hero-pattern {
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.08'/%3E%3C/svg%3E");
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 20s infinite;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }

            50% {
                transform: translate(100px, 100px) rotate(180deg);
            }

            100% {
                transform: translate(0, 0) rotate(360deg);
            }
        }

        .city-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(108, 92, 231, 0.7), rgba(255, 107, 149, 0.7));
            border-radius: 0.5rem;
        }

        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-4.0.3');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Wrap the header and hero in a container -->
    <div class="h-screen flex flex-col">
        <!-- Navigation - made more compact -->
        <nav class="px-6 py-4 flex justify-between items-center max-w-7xl mx-auto w-full">
            <div class="text-[#6C5CE7] text-3xl font-bold">Roommate</div>
            <button class="bg-[#6C5CE7] hover:bg-[#5a4bd4] text-white px-8 py-3 rounded-xl transition-colors">
                Get Started
            </button>
        </nav>

        <!-- Hero Section - will take remaining viewport height -->
        <section class="hero-section flex-1 relative flex items-center">
            <!-- Content -->
            <div class="max-w-7xl mx-auto px-6 w-full">
                <div class="max-w-2xl">
                    <h1 class="text-7xl font-bold text-white mb-6 leading-tight">
                        Looking for<br>
                        a roommate?
                    </h1>
                    <p class="text-white/90 text-xl mb-12 leading-relaxed">
                        Find your perfect roommate match in Morocco's top student cities.
                        Join our community of students looking for shared accommodations.
                    </p>
                    <div class="flex gap-4">
                        <button
                            class="bg-white text-[#6C5CE7] px-10 py-4 rounded-xl text-lg font-medium transition-all hover:shadow-lg hover:shadow-white/20 hover:transform hover:-translate-y-0.5">
                            Start exploring
                        </button>
                        <button
                            class="border-2 border-white/30 text-white px-10 py-4 rounded-xl text-lg font-medium transition-all hover:bg-white/10">
                            Learn more
                        </button>
                    </div>
                </div>
            </div>

            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </section>
    </div>

    <!-- How It Works -->
    <section class="py-24 max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-3">How Does It Work?</h2>
        <p class="text-center text-gray-500 text-lg mb-16">It's simple as counting to 3!</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="bg-purple-100 rounded-2xl p-6 mb-6">
                    <img src="https://illustrations.popsy.co/violet/creative-work.svg" alt="Create Account"
                        class="w-full h-48 object-contain">
                </div>
                <h3 class="text-xl font-semibold mb-2">Create your account</h3>
                <p class="text-gray-600">Sign up and complete your profile</p>
            </div>
            <div class="text-center">
                <div class="bg-pink-100 rounded-2xl p-6 mb-6">
                    <img src="https://illustrations.popsy.co/purple/work-from-home.svg" alt="Create Demand"
                        class="w-full h-48 object-contain">
                </div>
                <h3 class="text-xl font-semibold mb-2">Create a demand</h3>
                <p class="text-gray-600">Post what you're looking for</p>
            </div>
            <div class="text-center">
                <div class="bg-purple-100 rounded-2xl p-6 mb-6">
                    <img src="https://illustrations.popsy.co/purple/success.svg" alt="Find Roommate"
                        class="w-full h-48 object-contain">
                </div>
                <h3 class="text-xl font-semibold mb-2">Find your roommate!</h3>
                <p class="text-gray-600">Connect with potential matches</p>
            </div>
        </div>
    </section>

    <!-- Start Exploring Section - Made Wider -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-[1400px] mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-3">Start Exploring</h2>
            <p class="text-center text-gray-500 text-lg mb-16">The Latest Announcements</p>

            <div class="space-y-6 mb-12">
                <!-- Offer Announcement -->
                <div
                    class="flex items-center justify-between bg-white p-6 rounded-xl hover:shadow-lg transition-shadow">
                    <div class="flex items-center gap-6">
                        <img src="https://ui-avatars.com/api/?name=Esther+Dixon&background=6C5CE7&color=fff"
                            alt="Profile" class="w-16 h-16 rounded-full">
                        <div>
                            <h3 class="font-semibold text-lg">Esther Dixon</h3>
                            <p class="text-gray-500">London - 22</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-12">
                        <div>
                            <p class="text-gray-500 text-sm">City</p>
                            <p class="font-medium">Safi</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Budget</p>
                            <p class="font-medium">800 DH</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Availability</p>
                            <p class="font-medium">05 november</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Type</p>
                            <p class="font-medium text-[#6C5CE7]">Offer</p>
                        </div>
                        <button class="text-[#6C5CE7] hover:bg-purple-50 p-2 rounded-full transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Demand Announcement -->
                <div
                    class="flex items-center justify-between bg-white p-6 rounded-xl hover:shadow-lg transition-shadow">
                    <div class="flex items-center gap-6">
                        <img src="https://ui-avatars.com/api/?name=Alan+Turing&background=F97316&color=fff"
                            alt="Profile" class="w-16 h-16 rounded-full">
                        <div>
                            <h3 class="font-semibold text-lg">Alan Turing</h3>
                            <p class="text-gray-500">Cambridge - 28</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-12">
                        <div>
                            <p class="text-gray-500 text-sm">City</p>
                            <p class="font-medium">Safi</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Budget</p>
                            <p class="font-medium">500 DH</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Availability</p>
                            <p class="font-medium">05 november</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Type</p>
                            <p class="font-medium text-orange-500">Demand</p>
                        </div>
                        <button class="text-orange-500 hover:bg-orange-50 p-2 rounded-full transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button
                    class="bg-[#6C5CE7] hover:bg-[#5a4bd4] text-white px-10 py-4 rounded-xl text-lg font-medium transition-colors">
                    View all announcements
                </button>
            </div>
        </div>
    </section>

    <!-- Browse By City Section - Made Wider -->
    <section class="py-24">
        <div class="max-w-[1400px] mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-3">Browse By City</h2>
            <p class="text-center text-gray-500 text-lg mb-16">Choose between the best options</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Safi -->
                <div class="city-card relative rounded-xl overflow-hidden group cursor-pointer">
                    <img src="https://i.pinimg.com/736x/69/80/d5/6980d540b9ee6f6954047b5ef366d22f.jpg" alt="Safi"
                        class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center text-white z-10">
                        <h3 class="text-3xl font-bold mb-2">SAFI</h3>
                        <p class="text-white/90">Browse all Safi offers</p>
                    </div>
                </div>

                <!-- Nador -->
                <div class="city-card relative rounded-xl overflow-hidden group cursor-pointer">
                    <img src="https://bmmee2024.sciencesconf.org/data/pages/Nador_City_The_Gateway_to_the_Rif_of_Morocco.jpg" alt="Nador"
                        class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center text-white z-10">
                        <h3 class="text-3xl font-bold mb-2">NADOR</h3>
                        <p class="text-white/90">Browse all Nador offers</p>
                    </div>
                </div>

                <!-- Youssoufia -->
                <div class="city-card relative rounded-xl overflow-hidden group cursor-pointer">
                    <img src="https://steemitimages.com/DQmZEpaz7VFjPK6Z9gCqVU2hPX1CyLXAtSK8auETjymnrh5/image.png"
                        alt="Youssoufia"
                        class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center text-white z-10">
                        <h3 class="text-3xl font-bold mb-2">YOUSSOUFIA</h3>
                        <p class="text-white/90">Browse all Youssoufia offers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0A0442] text-white mt-20">
        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold mb-4">Roommate</h2>
                    <p class="text-gray-300 max-w-md">
                        Our mission is to help you find a student roommate easily.
                        Created by students, for students.
                    </p>
                </div>
                <div class="flex justify-end gap-12">
                    <div class="space-y-4">
                        <a href="#" class="block hover:text-purple-400 transition-colors">Home</a>
                        <a href="#" class="block hover:text-purple-400 transition-colors">Contact us</a>
                    </div>
                    <div class="space-y-4">
                        <a href="#" class="block hover:text-purple-400 transition-colors">Privacy Policy</a>
                        <a href="#" class="block hover:text-purple-400 transition-colors">Terms of use</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>