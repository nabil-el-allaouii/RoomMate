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
    </header>

    <h2 class="text-4xl font-semibold text-indigo-600 mb-6">Suggestions</h2>
    
    </div>


    <div class="flex justify-center items-center">
    
    <div class="w-[80%] bg-white  rounded-lg  overflow-hidden">
    <?php if (!empty($matchingAnnonces)): ?>
    <?php foreach ($matchingAnnonces as $annonce): ?>
        <div class="divide-y divide-gray-200">
        <?php  if($annonce['type'] == 'offer'): ?>
            <!-- hadi bleu -->
            <div class="flex items-center p-2 w-full">
                <img src="https://i.pravatar.cc/40?img=1" class="w-[7%] h-[7%] rounded-full mr-4" alt="Profile">
                
                    <div class="text-lg  w-[22%]">
                        <div class="font-bold text-gray-800 text-lg"><?= htmlspecialchars($annonce['title']) ?></div>
                        <div class=" text-sm font-semibold  text-gray-300 text-l">(Score: <?= $annonce['compatibility_score']; ?>)</div>
                    </div>
                    <div class="text-gray-600 w-[22%]">
                        <div class="text-sm text-indigo-200 font-semibold ">City</div>
                        <div class="text-lg text-lg text-indigo-600 font-bold "><?= htmlspecialchars($annonce['city']) ?></div>
                    </div>
                    <div class=" text-gray-600 w-[22%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Budget</div>
                        <div class="text-lg text-indigo-600 font-bold "><?= htmlspecialchars($annonce['budget']) ?></div>

                    </div>
                    <div class=" text-gray-600 w-[25%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Availability</div>
                        <div class="text-lg text-indigo-600 font-bold  "><?= htmlspecialchars($annonce['from_date']) ?></div>

                    </div>
                    <div class=" text-gray-600 w-[15%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Type</div>
                        <div class="text-lg text-indigo-600 font-bold "><?= htmlspecialchars($annonce['type']) ?></div>

                    </div>
                
                <div class="w-8 h-8 flex items-center justify-center text-indigo-500 bg-indigo-200 rounded-lg cursor-pointer"><i class="fa-solid fa-angle-right"></i></div>
            </div>
        </div>
        <?php else : ?>
        <!-- hadi orange  -->
        <div class="flex items-center p-2 w-full">
            <img src="https://i.pravatar.cc/40?img=1" class="w-[7%] h-[7%] rounded-full mr-4" alt="Profile">
            
                <div class="text-gray-600 w-[22%]">
                    <div class="text-lg font-bold text-gray-800 text-lg"><?= htmlspecialchars($annonce['title']) ?></div>
                    <div class="text-sm font-semibold  text-gray-300 text-l">(Score: <?= $annonce['compatibility_score']; ?>)</div>
                </div>
                <div class=" text-gray-600 w-[22%]">
                    <div class="text-sm text-orange-200 font-semibold ">City</div>
                    <div class="text-lg text-orange-600 font-bold "><?= htmlspecialchars($annonce['city']) ?></div>

                </div>
                <div class=" text-gray-600 w-[22%]">
                    <div class="text-sm text-orange-200 font-semibold ">Budget</div>
                    <div class="text-lg text-orange-600 font-bold "><?= htmlspecialchars($annonce['budget']) ?></div>

                </div>
                <div class=" text-gray-600 w-[25%]">
                    <div class="text-sm text-orange-200 font-semibold ">Availability</div>
                    <div class="text-lg text-orange-600 font-bold  "><?= htmlspecialchars($annonce['from_date']) ?></div>

                </div>
                <div class=" text-gray-600 w-[15%]">
                    <div class="text-sm text-orange-200 font-semibold ">Type</div>
                    <div class="text-lg text-orange-600 font-bold "><?= htmlspecialchars($annonce['type']) ?></div>

                </div>
            
            <div class="w-8 h-8 flex items-center justify-center text-orange-500 bg-orange-200 rounded-lg cursor-pointer"><i class="fa-solid fa-angle-right"></i></div>
        </div>
        <?php endif ;?>
        <?php endforeach;?>
        <?php else: ?>
            <div>y a aucune annonce</div>
            <?php endif?>

    </div>
</div>

</body>

</html>