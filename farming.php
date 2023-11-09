<?php
    session_start();
    $character = "hu-tao"
    
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmingGuide</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="assets/js/index.js"></script>
</head>
<body class="overflow-x-hidden bg-[#240f0c]">
   <nav class="py-4 text-white bg-[#3c070f] border-b border-gray-500">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="animate-spin w-20 h-20 hover:scale-110 duration-500" src="assets/img/logo.png">
                </a>

                <div class="px-10 flex items-center space-x-5">
                    <a class="text-2xl font-bold hover:text-[#aa674a] duration-100" href="wiki.php" > WikiBuilds </a>
                </div>  
            
            </div>

           
<form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
    </div>
</form>



        <?php if (isset($_SESSION['user'])) { ?> 
            <button onclick="dropdown()" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/0/07/Juan_Per%C3%B3n_%28cropped%29.jpg" alt="user photo">
            </button>
        <?php } ?>

        <?php if (!isset($_SESSION['user'])) { ?>
            <a href="login.php" class="py-2.5 px-9 rounded-md bg-rose-600 hover:bg-rose-700 font-semibold"> Iniciar Sesion </a>
            <?php } ?>
        </div>
   </nav>

        <?php if (isset($_SESSION['user'])) { ?> 
    <div id="dropdownAvatar" class="z-10 absolute right-1 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div> <?= $_SESSION['user']['user']['name'] ?> </div>
                <div class="font-medium truncate"><?= $_SESSION ['user']['user']['email'] ?></div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                
                </ul>
                <div class="py-2">
                <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
    </div>
         <?php } ?>


   <div class="flex">
       <aside class="overflow-y-scroll overflow-auto py-4 h-[500px] p-1 m-4 rounded-md bg-rose-600 w-1/6 ">
            
            <div class="">
                <a href="http/localhost/character/<?= $character ?>" id="mostrarBoton" class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</a>
            </div>
        </aside>

        <div id="div" class="z-10 bg-[#ef4444] h-3/4 w-2/3 rounded-md py-4 h-[500] p-2 m-4">

        </div>
            
        <img class="overflow-hidden absolute ml-[500]" src="http://localhost/HuTaoMains/assets/img/hu_tao_genshin_impact_portrait_render_by_deg5270_deg0ooa-fullview.png" alt=""> 
   </div>

   
   <script>
    function dropdown() {
    const dropdownAvatar = document.getElementById("dropdownAvatar")

    dropdownAvatar.classList.toggle("hidden")
    }

    let div = document.getElementById('div');
    const br = document.createElement('br');

    const JSONAPI = fetch("https://genshin.jmp.blue/characters/<?=$character?>")
        .then((res) => res.json())
        .then((character) => {
            div.append(character['rarity']);
            div.append(character['title']);
            div.append(character['vision']);
            div.append(character['gender']);

        });
    
    </script>
</body>
</html>