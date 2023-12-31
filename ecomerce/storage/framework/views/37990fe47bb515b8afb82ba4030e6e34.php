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

    <div class="flex m-2 gap-2 w-full ">
    <div class="card w-96 bg-base-100 shadow-xl image-full">
        <figure><img src="https://brmotorolanew.vteximg.com.br/arquivos/moto-xt-220.png" alt="make" /></figure>
        <div class="card-body">
            <h2 class="card-title">Headfone</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions justify-end">
            <button class="btn btn-primary">Finalizar compra</button>
            <form action="<?php echo e(route('produto.destroy', $produto->id)); ?>">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <button class="btn">Excluir</button>
            </form>
            </div>
        </div>
    </div>
    <div class="card w-96 bg-base-100 shadow-xl image-full">
        <figure><img src="https://brmotorolanew.vteximg.com.br/arquivos/moto-xt-220.png" alt="make" /></figure>
        <div class="card-body">
            <h2 class="card-title">Headfone</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions justify-end">
            <button class="btn btn-primary">Finalizar compra</button>
            <button class="btn">Excluir</button>
            </div>
        </div>
    </div>
    <div class="card w-96 bg-base-100 shadow-xl image-full">
        <figure><img src="https://brmotorolanew.vteximg.com.br/arquivos/moto-xt-220.png" alt="make" /></figure>
        <div class="card-body">
            <h2 class="card-title">Headfone</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions justify-end">
            <button class="btn btn-primary">Finalizar compra</button>
            <button class="btn">Excluir</button>
            </div>
        </div>
    </div>
    </div>
        <div class="btm-nav">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
            </button>
            <button class="active">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </button>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
            </button>
        </div>
    </body>
</html><?php /**PATH C:\Users\LENOVO\Desktop\ecomerce\ecormece\ecomerce\resources\views/carrinho.blade.php ENDPATH**/ ?>