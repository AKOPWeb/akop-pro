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
                    <img src="{{ Vite::asset('resources/img/akop-logo.png') }}" alt="">
                    AKOP Pro
                </h1>
                {{-- <p>O mais completo projeto Open Source Brasileiro pensado em pequenas e médias equipes!</p> --}}
                <p>Vamos avisar assim que a primeira versão for lançada. <strong>Deixe seu e-mail aqui</strong> se você
                    quer organizar o dia-a-dia da sua equipe:</p>
                <form action="{{ route('pre-launch.store') }}" onsubmit="buttonLoadingState('submit-button','disabled')" method="POST">
                    @csrf
                    <div class="input-with-button-inside">
                        <input type="email" required name="email" placeholder="Insira seu e-mail">
                        <button class="button green" id="submit-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="fill">
                                <path
                                      d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                            </svg>
                            <span>Enviar</span>
                        </button>
                    </div>
                    @if ($errors->any())
                        <div class="error-list">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span>
                            @endforeach
                        </div>
                    @endif

                    @if (session('success'))
                    <div class="success-animation">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" /><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /></svg>
                        </div>
                        <div class="success-message">
                            {!! session('success') !!}
                        </div>
                    @endif
                </form>
            </div>
        </div>
        <div class="right">
            <img src="{{ Vite::asset('resources/img/board.png') }}" alt="Quadro Kanban">
            <p>
                💭 Já imaginou um software que ajude sua equipe a organizar <span class="underline">tarefas</span>,
                <span>prazos</span>, <span>documentos</span>, <span>clientes</span> e outras atividades num único lugar?
                <br><br>Ninguém mais precisa perder tempo procurando uma informação importante em diferentes lugares.
                Tudo está disponível no seu espaço do AKOP Pro.
                <br><br>E se a gente te falar que o preço de tudo isso é <span>R$ ZERO</span>?
                <br><br>Como o AKOP Pro é um projeto de código aberto (Open Source), poderá ser instalado e usado de
                forma gratuita por quanto tempo você quiser!
            </p>
        </div>
    </div>
</body>

</html>
