<?php
session_start();
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WikiBuilds</title>
    <link rel="stylesheet" href="assets/css/index.css"> 
    <script src="assets/js/index.js"></script>
</head>
<body class="overflow-x-hidden bg-[#18181b]">
    <nav class="py-4 text-white border-b border-gray-500 w-full">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <a href="index.php">
                    <img class="w-20 h-20 hover:scale-110 duration-100" src="assets/img/logo.png">
                </a>
                <div class="px-10 flex items-center space-x-5">
                    

                    <a href="farming.php" class="text-2xl font-bold hover:text-[#aa674a] duration-100"> Farming Guide </a>
                </div>  
            </div>

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
    <aside class=" overflow-y-scroll overflow-auto py-4 h-[500px] p-1 m-4 rounded-md bg-rose-600 w-1/6 ">
        <div class="">
            <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
                <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">
                    <h1>aaaaa
                
                    </h1>
            
                </div>

            </button>
            
            <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
                <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">
   
            
                </div>

            </button>

            <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
            <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">

        
            </div>

        </button>
        
        <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
            <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">

        
            </div>

        </button>
        <button id="mostrarBoton"   class="bg-zinc-800 rounded-md px-9 text-center flex items-center text-white font-bold m-4 "> <img  src="https://pm1.aminoapps.com/7787/e631d93cc66f03474724492c8a189033cd5aea9cr1-750-749v2_uhq.jpg" class="w-16 h-16 object-cover object-center" alt=""> Hu Tao</button>
        <div id="informacion" class="hidden mt-4 p-4 bg-white rounded shadow">

    
        </div>

    </button>

    </aside>
    <div id="div" class="z-10 bg-[#ef4444] h-3/4 w-2/3 rounded-md py-4 h-[500] p-2 m-4 flex flex-row text-white space-x-2">
            <div class="">
                <div class="h-1/3 w-full bg-slate-950 flex flex-row justify-start rounded-t-md items-center px-2">
                    <div class="w-1/4 flex items-center justify-center">
                        <img src="assets/img/avatar/Liyue/Hu Tao.png" class="bg-slate-900 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <img src="assets/img/avatar/Sumeru/Layla.png" class="bg-slate-900 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class=" w-1/4 flex justify-center">
                        <img src="assets/img/avatar/Fontaine/Furina.png" class="bg-slate-900 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <img src="assets/img/avatar/Liyue/Yelan.png" class="bg-slate-900 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                </div> 
    
                <div class="h-1/3 w-full bg-slate-950 flex flex-row justify-start rounded-b-md items-center px-2">
                    <div class="w-1/4 flex items-center justify-center">
                        <img src="assets/img/avatar/Liyue/Hu Tao.png" class="bg-slate-900 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <img src="assets/img/avatar/Liyue/Xingqiu.png" class="bg-slate-900 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class=" w-1/4 flex justify-center">
                        <img src="assets/img/avatar/Mondstadt/Bennett.png" class="bg-slate-900 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <img src="assets/img/avatar/Liyue/Xiangling.png" class="bg-slate-900 rounded-md p-2 border-gray-700 border-2" alt="">
                    </div>
                </div> 
            </div>

            <aside class="flex w-3/5 bg-rose-500">
                <h1>albion online es un mmorpg no lineal en el que escribes tu propia historia sin limitarte a seguir un camino prefijado, explora un amplio mundo abierto con cinco biomas unicos, todo cuanto hagas tendra su repercusíon en el mundo, con su economia orientada al jugador de albion los jugadores crean practicamente todo el equipo a partir de los recursos que consiguen, el equipo que llevas define quien eres, cambia de arma y armadura para pasar de caballero a mago o juego como una mezcla de ambas clases, aventurate en el mundo abierto y haz frente a los habitantes y las criaturas de albion, inicia expediciones o adentrate en mazmorras en las que encontraras enemigos aun mas dificiles, enfrentate a otros jugadores en encuentros en el mundo abierto, lucha por los territorios o por ciudades enteras en batallas tacticas, relajate en tu isla privada donde podras construir un hogar, cultivar cosechas, criar animales, unete a un gremio, todo es mejor cuando se trabaja en grupo [musica] adentrate ya en el mundo de albion y escribe tu propia historia.</h1>
            </aside>
    </div>

    <img class="overflow-hidden absolute ml-[500]" src="http://localhost/HuTaoMains/assets/img/hu_tao_genshin_impact_portrait_render_by_deg5270_deg0ooa-fullview.png" alt=""> 

 </div>
    
   <script>

    function dropdown() {
    const dropdownAvatar = document.getElementById("dropdownAvatar")

    dropdownAvatar.classList.toggle("hidden")
    }

</script>
    
    
</body>

</html>