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
    <body class="">

    <?php $__currentLoopData = $produto->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                <div class="card-body">
                <span class="font-bold text-lg">8 itens</span>
                <span class="text-info">Subtotal: $999</span>
                <div class="card-actions">
                    <a class="btn btn-primary btn-block" href="/carrinho">Ver carrinho</a>
                    <a class="btn" href="/carrinho">Adicionar cupom</a>

                </div>
                </div>
            </div>
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
    

    

    <div class="cards flex static ">
    <div class="card w-96 m-2 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="https://brmotorolanew.vteximg.com.br/arquivos/moto-xt-220.png" alt="fone" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Headfone</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
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
    <div class="card w-96 m-2 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJZIe-OCh5mWnM0j5hhwuiyHMiqw7KpchEzw&usqp=CAU" alt="case" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Case de metal</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions">
                <button class="btn btn-primary">Compre agora</button>
            </div>
        </div>
        <div class="rating mb-5 m-auto">
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400"  />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
        </div>
    </div>
    <div class="card w-96 m-2 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="data:image/jpeg;base64,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" alt="case" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Película de vidro</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
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
<?php /**PATH C:\Users\LENOVO\Desktop\ecomerce\ecormece\ecomerce\resources\views/welcome.blade.php ENDPATH**/ ?>