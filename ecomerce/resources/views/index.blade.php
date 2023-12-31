<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <body class="">


    <div class="navbar shadow bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">Cyber Tec</a>
        </div>
        <div class="form-control">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                <span class="badge badge-sm indicator-item">8</span>
                </div>
            </label>

            @foreach ($carrinho as $carrinho)
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                <div class="card-body">
                <span class="font-bold text-lg">{{$carrinho->quantidade}}</span>
                <span class="text-info">Subtotal: {{$carrinho->valor}}</span>
                <div class="card-actions">
                    <a class="btn btn-primary btn-block" href="/carrinho">Ver carrinho</a>
                    <a class="btn" href="/carrinho">Adicionar cupom</a>

                </div>
                </div>
            </div>

            @endforeach

            </div>
            <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fHww&w=1000&q=80" />
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
    

    
    @foreach ($produto as $produto)
    <div class="cards flex static ">
        <div class="card w-96 m-2 bg-base-100 shadow-xl">
            <figure class="px-10 pt-10">
                <img src="https://brmotorolanew.vteximg.com.br/arquivos/moto-xt-220.png" alt="fone" class="rounded-xl" />
            </figure>

            <div class="card-body items-center text-center">
                <h2 class="card-title">{{$produto->nome}}</h2>
                <p>{{$produto->descricao}}</p>
                <h3 class="font-bold">{{$produto->valor}}</h3>
                <div class="card-actions">
                    <button class="btn btn-primary">Compre agora</button>
                </div>
            </div>

            <div class="rating mb-5 m-auto">
                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
            </div>

        </div>
    </div>
    @endforeach   

    <footer class="footer p-10 bg-base-300 text-base-content">
    <div>
        <span class="footer-title">Serviços</span> 
        <a class="link link-hover">Design</a> 
        <a class="link link-hover">Marketing</a> 
        
    </div> 
    <div>
        <span class="footer-title">Empresa</span> 
        <a class="link link-hover">Sobre nós</a> 
        <a class="link link-hover">Contato</a> 
        <a class="link link-hover">Trablhos</a> 
        
    </div> 
    <div>
        <span class="footer-title">Social</span> 
        <div class="grid grid-flow-col gap-4">
        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
        <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
        </div>
    </div>
    </footer>
    
        
            

    
    </body>
</html>
