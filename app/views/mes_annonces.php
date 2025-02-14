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
            <a href="/annonces" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Add Annonce</a>
        </header>

        <h2 class="text-4xl font-semibold text-indigo-600 mb-6">Annonces</h2>

    </div>


    <div class="flex justify-center items-center">

        <div class="w-[80%] bg-white  rounded-lg  overflow-hidden">
            <?php if (!empty($annonces)): ?>
            <?php foreach ($annonces as $annonce): ?>
            <div class="divide-y divide-gray-200">
                <?php  if($annonce['type'] == 'offer'): ?>
                <!-- hadi bleu -->
                <div class="flex items-center p-2 w-full">

                    <div class="text-lg  w-[22%]">
                        <div class="font-bold text-gray-800 text-lg"><?= htmlspecialchars($annonce['title']) ?></div>
                        <div class=" text-sm font-semibold  text-gray-300 text-l">
                            <?= htmlspecialchars($annonce['description']) ?></div>
                    </div>
                    <div class="text-gray-600 w-[22%]">
                        <div class="text-sm text-indigo-200 font-semibold ">City</div>
                        <div class="text-lg text-lg text-indigo-600 font-bold ">
                            <?= htmlspecialchars($annonce['city']) ?></div>

                    </div>
                    <div class=" text-gray-600 w-[22%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Budget</div>
                        <div class="text-lg text-indigo-600 font-bold "><?= htmlspecialchars($annonce['budget']) ?>
                        </div>

                    </div>
                    <div class=" text-gray-600 w-[25%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Availability</div>
                        <div class="text-lg text-indigo-600 font-bold  "><?= htmlspecialchars($annonce['from_date']) ?>
                        </div>

                    </div>
                    <div class=" text-gray-600 w-[15%]">
                        <div class="text-sm text-indigo-200 font-semibold ">Type</div>
                        <div class="text-lg text-indigo-600 font-bold "><?= htmlspecialchars($annonce['type']) ?></div>

                    </div>

                    <div onclick="deletebtn('<?= $annonce['id'] ?>')"
                        class="sprm w-8 h-8 flex items-center justify-center text-indigo-500 bg-indigo-200 rounded-lg cursor-pointer">
                        <i class="fa-solid fa-trash-arrow-up"></i>
                    </div>
                </div>
            </div>
            <?php else : ?>
            <!-- hadi orange  -->
            <div class="flex items-center p-2 w-full">

                <div class="text-gray-600 w-[22%]">
                    <div class="text-lg font-bold text-gray-800 text-lg"><?= htmlspecialchars($annonce['title']) ?>
                    </div>
                    <div class="text-sm font-semibold  text-gray-300 text-l">
                        <?= htmlspecialchars($annonce['description']) ?></div>
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
                    <div class="text-lg text-orange-600 font-bold  "><?= htmlspecialchars($annonce['from_date']) ?>
                    </div>

                </div>
                <div class=" text-gray-600 w-[15%]">
                    <div class="text-sm text-orange-200 font-semibold ">Type</div>
                    <div class="text-lg text-orange-600 font-bold "><?= htmlspecialchars($annonce['type']) ?></div>

                </div>

                <div onclick="deletebtn('<?= $annonce['id'] ?>')"
                    class="sprm w-8 h-8 flex items-center justify-center text-orange-500 bg-orange-200 rounded-lg cursor-pointer">
                    <i class="fa-solid fa-trash-arrow-up"></i>
                </div>
            </div>
            <?php endif ;?>
            <?php endforeach;?>
            <?php else: ?>
            <div>y a aucune annonce</div>
            <?php endif?>

        </div>
    </div>




    <!-- supprimer modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div
        class=" deletemodal fixed inset-0 p-4 flex flex-wrap justify-center items-center w-full h-full z-[1000] before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] overflow-auto font-[sans-serif] hidden">
        <div class="  w-full max-w-lg bg-white shadow-lg rounded-lg p-6 relative">
            <svg xmlns="http://www.w3.org/2000/svg"
                class=" pic w-3.5 cursor-pointer shrink-0 fill-gray-400 hover:fill-red-500 float-right"
                viewBox="0 0 320.591 320.591">
                <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000"></path>
                <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000"></path>
            </svg>

            <div class="my-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 fill-red-500 inline" viewBox="0 0 24 24">
                    <path
                        d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                        data-original="#000000" />
                    <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                        data-original="#000000" />
                </svg>

                <h4 class="text-gray-800 text-base font-semibold mt-4">Are you sure you want to delete it?</h4>
                <form method="POST" action="/deleteAnnonce">
                    <input type="hidden" id="annonce_id" name="annonce_id">
                    <div class="text-center space-x-4 mt-8">
                        <button type="button"
                            class="px-4 py-2 rounded-lg text-gray-800 text-sm bg-gray-200 hover:bg-gray-300 active:bg-gray-200">Cancel</button>
                        <button type="submit"
                            class="px-4 py-2 rounded-lg text-white text-sm bg-red-600 hover:bg-red-700 active:bg-red-600">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    const deletemodal = document.querySelector('.deletemodal');
    const sprm = document.querySelectorAll('.sprm');
    const pic = document.querySelector('.pic');
    sprm.forEach(del => {
        del.addEventListener('click', () => {
            deletemodal.classList.toggle('hidden');
        });
    })

    function deletebtn(id) {
        document.getElementById('annonce_id').value = id;
    }
    </script>
</body>

</html>