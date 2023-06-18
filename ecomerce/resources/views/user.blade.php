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

    <div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Faça seu login!</h1>
      <p class="py-6">Garanta as melhores ofertas com os melhores preços do mercado.</p>
    </div>
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <div class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text">CPF</span>
          </label>
          <input type="text" placeholder="CPF" class="input input-bordered" />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Senha</span>
          </label>
          <input type="text" placeholder="senha" class="input input-bordered" />
          <label class="label">
            <a href="#" class="label-text-alt link link-hover">Esqueceu a senha?</a>
          </label>
        </div>
        <div class="form-control mt-6">
          <a class="btn btn-primary" href="/">Login</a>
          <a class="btn" href="/cadastro">Cadastre-se</a>
        </div>
      </div>
    </div>
  </div>
</div>

    </body>
</html>