<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class=" min-h-screen w-[100%]  bg-white>">
    <div class="max-w-7xl mx-auto">
    <header class="flex justify-between items-center  mt-6 mb-20">
        <h1 class="text-4xl font-bold text-indigo-600">Roomate</h1>
        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Get Started</button>
    </header>

    <h2 class="text-4xl font-semibold text-indigo-600 mb-6">Find your ideal roommate</h2>
    <div class="flex space-x-4 mb-20 w-[25%]">
        <select class="border p-2 rounded w-2/3">
            <option>Select City</option>
        </select>
        <select class="border p-2 rounded w-1/3">
            <option>Budget</option>
        </select>
    </div>
    </div>


    <div class="flex justify-center items-center">
    
    <div class="w-[80%] bg-white  rounded-lg  overflow-hidden">
        
        <div class="divide-y divide-gray-200">
            <!-- hadi bleu -->
            <div class="flex items-center p-2 w-full">
                <img src="https://i.pravatar.cc/40?img=1" class="w-[7%] h-[7%] rounded-full mr-4" alt="Profile">
                
                    <div class="text-lg  w-[22%]">
                        <div class="font-bold text-gray-800 text-lg">Esther Dixon</div>
                        <div class=" text-sm font-semibold  text-gray-300 text-l">London - 22</div>
                    </div>
                    <div class="text-gray-600 w-[22%]">
                        <div class="text-sm text-indigo-200 font-semibold ">City</div>
                        <div class="text-lg text-lg text-indigo-600 font-bold ">Safi</div>

                    </div>
                    <div class=" text-gray-600 w-[22%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Budget</div>
                        <div class="text-lg text-indigo-600 font-bold ">500</div>

                    </div>
                    <div class=" text-gray-600 w-[25%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Availability</div>
                        <div class="text-lg text-indigo-600 font-bold  ">05 November</div>

                    </div>
                    <div class=" text-gray-600 w-[15%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Type</div>
                        <div class="text-lg text-indigo-600 font-bold ">Offer</div>

                    </div>
                
                <div class="w-8 h-8 flex items-center justify-center text-indigo-500 bg-indigo-200 rounded-lg cursor-pointer"><i class="fa-solid fa-angle-right"></i></div>
            </div>
        </div>
        <!-- hadi orange  -->
        <div class="flex items-center p-2 w-full">
            <img src="https://i.pravatar.cc/40?img=1" class="w-[7%] h-[7%] rounded-full mr-4" alt="Profile">
            
                <div class="text-gray-600 w-[22%]">
                    <div class="text-lg font-bold text-gray-800 text-lg">Heiji Hattori</div>
                    <div class="text-sm font-semibold  text-gray-300 text-l">JAPON - 22</div>
                </div>
                <div class=" text-gray-600 w-[22%]">
                    <div class="text-sm text-orange-200 font-semibold ">City</div>
                    <div class="text-lg text-orange-600 font-bold ">Nador</div>

                </div>
                <div class=" text-gray-600 w-[22%]">
                    <div class="text-sm text-orange-200 font-semibold ">Budget</div>
                    <div class="text-lg text-orange-600 font-bold ">800</div>

                </div>
                <div class=" text-gray-600 w-[25%]">
                    <div class="text-sm text-orange-200 font-semibold ">Availability</div>
                    <div class="text-lg text-orange-600 font-bold  ">06 November</div>

                </div>
                <div class=" text-gray-600 w-[15%]">
                    <div class="text-sm text-orange-200 font-semibold ">Type</div>
                    <div class="text-lg text-orange-600 font-bold ">Demand</div>

                </div>
            
            <div class="w-8 h-8 flex items-center justify-center text-orange-500 bg-orange-200 rounded-lg cursor-pointer"><i class="fa-solid fa-angle-right"></i></div>
        </div>
    </div>
</div>

</body>

</html>