<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="AKOP Pro: o maior projeto Open Source do Brasil focado em pequenas e médias empresas. Já está na hora da sua empresa ter um software de gestão moderno e gratuito.">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="pre-launch">
<div class="logo-container">
    <img src="{{Vite::asset('resources/img/akop-logo-lg.webp')}}" alt="">
</div>
</body>
</html>
