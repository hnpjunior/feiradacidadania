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

        <h1 class="text-3xl text-center font-bold mb-4">Formulário de Cadastro</h1>

        <form method="POST">

            <div class="mx-auto p-4 flex flex-col gap-4 max-w-2xl">

                <div class="flex flex-col sm:grid sm:grid-cols-2 items-start border border-slate-400 rounded-xl p-3 sm:p-5">

                    <div class="flex flex-col items-start pe-4">
                        <label>Nome completo </label>
                        <input type="text" name="NomePessoa"
                            class="w-full rounded p-1 mb-4 border border-slate-400  focus:outline-none focus:ring focus:border-blue-400 font-light transition-all focus:invalid:border-pink-500 focus:invalid:ring-0" required>
                    </div>

                    <div class="flex flex-col items-start">
                        <label>Data de Nascimento: </label>
                        <input type="date" name="DataNascimento" class="border-slate-400 rounded p-1 border w-32 mb-4 font-medium" required>
                    </div>

                    <div class="flex flex-col items-start pe-4">
                        <label>Cidade onde Mora: </label>
                        <input type="text" name="CidadeOndeMora"
                            class="w-full rounded p-1 mb-4 border border-slate-400  focus:outline-none focus:ring focus:border-blue-400 font-light transition-all focus:invalid:border-pink-500 focus:invalid:ring-0" required>
                    </div>


                </div>

                <div class="flex flex-col sm:grid sm:grid-cols-2 items-start border border-slate-400 rounded-xl p-3 sm:p-5 sm:gap-5">

                    <div class="flex flex-col items-start">
                        <label>Como soube da Feira: </label>
                        <select name="ComoSoubeDaFeira" class="rounded p-1 mb-4 font-normal border border-slate-400 bg-white">
                            <option value="Internet">Internet</option>
                            <option value="Radio/TV">Radio/TV</option>
                            <option value="Amigos">Amigos</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>

                    <div class="flex flex-col items-start">
                        <label>Motivo de ir à Feira: </label>
                        <select name="ComoSoubeDaFeira" class="w-full rounded p-1 mb-4 font-normal border border-slate-400 bg-white">
                            <option value="servicooferecido">Usar algum serviço oferecido</option>
                            <option value="conhecer">Conhecer a feira</option>
                        </select>
                    </div>

                    <div class="">
                        <label>Já teve contato com a Univiçosa ?</label>
                        <div class="flex gap-10 font-light my-2">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="JaTeveContatoComAUni" value="Sim" id="contatosim" required class="h-5 w-5">
                                <label for="contatosim">Sim</label>
                            </div>

                            <div class="flex items-center gap-2">
                                <input type="radio" name="JaTeveContatoComAUni" value="Nao" id="contatonao" required class="h-5 w-5">
                                <label for="contatonao">Não</label>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <label>Já conhecia os cursos e serviços ? </label>
                        <div class="flex gap-10 font-light my-2">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="ConheciaCursoseServicos" value="Sim" id="conheciasim"
                                    required class="h-5 w-5">
                                <label for="conheciasim">Sim</label>
                            </div>

                            <div class="flex items-center gap-2">
                                <input type="radio" name="ConheciaCursoseServicos" value="Nao" id="conhecianao"
                                    required class="h-5 w-5">
                                <label for="conhecianao">Não</label>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex flex-col gap-5 font-normal text-base">
                    <fieldset
                        class="rounded-xl p-3 sm:p-5 border border-slate-400 items-start flex flex-col gap-4 sm:grid sm:grid-cols-2">
                        <legend class="font-medium text-lg">
                            Serviços usados na feira:
                        </legend>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="ServicoUtilizadoPressao" name="ServicoUtilizadoPressao"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="ServicoUtilizadoPressao">Aferir Pressão</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="ServicoUtilizadoGlicose" name="ServicoUtilizadoGlicose"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="ServicoUtilizadoGlicose">Medir Glicose</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="ServicoUtilizadoPsicologia" name="ServicoUtilizadoPsicologia"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="ServicoUtilizadoPsicologia">Avaliação Psicológica</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="ServicoUtilizadoConhecerEngenharias"
                                name="ServicoUtilizadoConhecerEngenharias" class="form-checkbox h-5 w-5 rounded">
                            <label for="ServicoUtilizadoConhecerEngenharias">Conhecer as engenharias</label>
                        </div>
                    </fieldset>

                    <fieldset class="rounded-xl p-3 sm:p-5 border border-slate-400 items-start grid grid-cols-2 gap-4">
                        <legend class="font-medium text-lg">
                            Doenças Crônicas:
                        </legend>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="DoencaCronicaDiabetes" name="DoencaCronicaDiabetes"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="DoencaCronicaDiabetes">Diabetes</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="DoencaCronicaPressao" name="DoencaCronicaPressao"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="DoencaCronicaPressao">Pressão</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="DoencaCronicaTDAH" name="DoencaCronicaTDAH"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="DoencaCronicaTDAH">TDAH</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="DoencaCronicaTireoide" name="DoencaCronicaTireoide"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="DoencaCronicaTireoide">Tireóide</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="DoencaCronicaColesteral" name="DoencaCronicaColesteral"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="DoencaCronicaColesteral">Colesterol</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="checkbox" id="DoencaCronicaOutros" name="DoencaCronicaOutros"
                                class="form-checkbox h-5 w-5 rounded">
                            <label for="DoencaCronicaOutros">Outras doenças</label>
                        </div>
                    </fieldset>
                </div>

                <div class="flex flex-col items-start p-3 sm:p-5 border border-slate-400 rounded-xl">
                    <label>Já veio à feira antes ? </label>

                    <div class="flex gap-10 font-light mt-2 mb-5">
                        <div class="flex items-center gap-1">
                            <input type="radio" name="JaVeioAFeiraAntes" value="sim" id="sim1" required class="h-5 w-5">
                            <label for="sim1">Sim</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="radio" name="JaVeioAFeiraAntes" value="nao" id="nao1" required class="h-5 w-5">
                            <label for="nao1">Não</label>
                        </div>

                    </div>


                    <label>Tem algo que você não encontrou na feira?</label>

                    <div class="flex gap-10 font-light my-2">
                        <div class="flex items-center gap-1">
                            <input type="radio" name="TemAlgoQueNaoEncontrouNaFeira" value="sim" id="sim2" required class="h-5 w-5">
                            <label for="sim2">Sim</label>
                        </div>

                        <div class="flex items-center gap-1">
                            <input type="radio" name="TemAlgoQueNaoEncontrouNaFeira" value="nao" id="nao2" required class="h-5 w-5">
                            <label for="nao2">Não</label>
                        </div>
                    </div>

                    <label for="OQueNaoEncontrou" class="hidden">O que não encontrou ?</label>
                    <input type="text" name="OQueNaoEncontrou" id="OQueNaoEncontrou"
                        class="w-full rounded p-1 mb-4 border border-slate-400 focus:outline-none focus:ring focus:border-blue-400 font-light transition-all hidden">

                    <script>
                        const simRadio = document.getElementById('sim2');
                        const naoRadio = document.getElementById('nao2');
                        const campoOQueNaoEncontrou = document.getElementById('OQueNaoEncontrou');
                        const labelOQueNaoEncontrou = document.querySelector('label[for="OQueNaoEncontrou"]');

                        simRadio.addEventListener('change', function () {
                            if (simRadio.checked) {
                                campoOQueNaoEncontrou.classList.remove('hidden');
                                labelOQueNaoEncontrou.classList.remove('hidden');
                            } else {
                                campoOQueNaoEncontrou.classList.add('hidden');
                                labelOQueNaoEncontrou.classList.add('hidden');
                            }
                        });

                        naoRadio.addEventListener('change', function () {
                            if (naoRadio.checked) {
                                campoOQueNaoEncontrou.classList.add('hidden');
                                labelOQueNaoEncontrou.classList.add('hidden');
                            }
                        });
                    </script>
                </div>

                <button type="submit"
                    class="bg-blue-500 p-3 rounded-lg text-white font-bold hover:bg-blue-700 transition-all">Enviar</button>
            </div>

        </form>

    </div>

</body>


</html>