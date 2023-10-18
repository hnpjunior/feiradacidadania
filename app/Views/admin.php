<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Fomulário de Cadastro</title>
</head>

<body>


<div class="py-20 sm:py-24 bg-white mx-auto">

<h1 class="text-3xl text-center font-bold mb-4">Página Adminstrativa - Login</h1>

<form method="POST">

    <div class="mx-auto p-4 flex flex-col gap-4 max-w-2xl">

        <div class="flex flex-col sm:grid sm:grid-cols-2 items-start border border-slate-400 rounded-xl p-3 sm:p-5">

            <div class="flex flex-col items-start pe-4">
                <label>Login </label>
                <input type="text" name="Login"
                    class="w-full rounded p-1 mb-4 border border-slate-400  focus:outline-none focus:ring focus:border-blue-400 font-light transition-all focus:invalid:border-pink-500 focus:invalid:ring-0" required>
            </div>

            <div class="flex flex-col items-start">
                <label>Senha: </label>
                <input type="password" name="Senha" class="border-slate-400 rounded p-1 border w-32 mb-4 font-medium">
            </div>
            <div class="flex flex-col items-start">
                <label>Entrar: </label>
                <input type="submit" value="entrar" class="border-slate-400 rounded p-1 border w-32 mb-4 font-medium">
            </div>
            
    </div>

</form>

</div>

</body>


</html>