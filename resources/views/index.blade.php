<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="AKOP Pro: o maior projeto Open Source do Brasil focado em pequenas e médias empresas. Já está na hora da sua empresa ter um software de gestão moderno e gratuito.">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="main">
        <div class="left">
            <div class="main-info-container">
                <h1>
                    <img src="{{Vite::asset('resources/img/akop-logo.png')}}" alt="">
                    AKOP Pro
                </h1>
                {{-- <p>O mais completo projeto Open Source Brasileiro pensado em pequenas e médias equipes!</p> --}}
                <p>Estamos em fase de pré-lançamento e vamos avisar assim que a primeira versão do software for lançada.</p>
                <p><strong>Deixe seu e-mail aqui</strong> se você quer organizar o dia-a-dia da sua equipe e a comunicação com clientes.</p>
                <div class="input-with-button-inside">
                    <input type="text" placeholder="Insira seu e-mail">
                    <button class="button green">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="fill">
                            <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                          </svg>
                        <span>Enviar</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="right" style="background-image: url({{Vite::asset('resources/img/office.avif')}})">
            <div class="info-box">
                <p>
                    <img src="{{Vite::asset('resources/img/calendar.png')}}" alt="">
                    <strong>Mantenha o controle de sua agenda e tarefas.</strong>
                    Você pode ter uma visão geral do dia, ou pode escolher focar em um projeto/cliente em especial
                </p>
            </div>
            <div class="info-box">
                <p>
                    <img src="{{Vite::asset('resources/img/calendar.png')}}" alt="">
                    <strong>Mantenha o controle de sua agenda e tarefas.</strong>
                    Você pode ter uma visão geral do dia, ou pode escolher focar em um projeto/cliente em especial
                </p>
            </div>
            <div class="info-box">
                <p>
                    <img src="{{Vite::asset('resources/img/calendar.png')}}" alt="">
                    <strong>Mantenha o controle de sua agenda e tarefas.</strong>
                    Você pode ter uma visão geral do dia, ou pode escolher focar em um projeto/cliente em especial
                </p>
            </div>
        </div>
    </div>
</body>

</html>
