<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.0/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Ecomerce</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        
    </head>
    <body class="w-full h-full">
        <div class="navbar bg-base-100 mb-6">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl">Ecomerce Cyber</a>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    <span class="badge badge-sm indicator-item">8</span>
                    </div>
                </label>
                <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                    <div class="card-body">
                    <span class="font-bold text-lg">8 itens</span>
                    <span class="text-info">Subtotal: R$ 999,90</span>
                    <div class="card-actions">
                        <button class="btn btn-primary btn-block">Ver carrinho</button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                    <img src="/images/person.png" />
                    </div>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                    <a class="justify-between">
                        Perfil
                        <span class="badge">Novo</span>
                    </a>
                    </li>
                    <li><a>Configurações</a></li>
                    <li><a>Logout</a></li>
                </ul>
                </div>
            </div>
            </div>
            

        <div class="cards gap-2 ml-auto mr-auto grid grid-cols-3">
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Sapatos!</h2>
                    <p>Esse é o sapato perfeito para você!</p>
                    <div class="card-actions justify-end">
                    <button class="btn btn-primary">Compre agora</button>
                    </div>
                </div>
            </div>
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Sapatos!</h2>
                    <p>Esse é o sapato perfeito para você!</p>
                    <div class="card-actions justify-end">
                    <button class="btn btn-primary">Compre agora</button>
                    </div>
                </div>
            </div>
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Sapatos!</h2>
                    <p>Esse é o sapato perfeito para você!</p>
                    <div class="card-actions justify-end">
                    <button class="btn btn-primary">Compre agora</button>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
<?php /**PATH C:\Users\ana.abrantes\Desktop\projetos\ecomerce\ecomerce\resources\views/welcome.blade.php ENDPATH**/ ?>