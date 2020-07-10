<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 day">
        <meta name="language" content="Portuguese">
        <meta name="generator" content="N/A">
        <meta name="format-detection" content="telephone=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin - Controle de Clientes') }}</title>

        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        {{-- <link rel="shortcut icon" href="{{ asset('assets/painel/img/favicon.png') }}"> --}}
        <meta name="author" content="Eduardo, Alexandre">
        <meta name="description" content="Painel CRM Administrativo">
        <meta name="keywords" content="Controle de Clientes, Controle, Clientes, CRM, Gerenciador de Clientes">


        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" />
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" />

        <!-- PLUGINS CSS STYLE -->
        <link rel="stylesheet" href="{{ asset('assets/painel/plugins/nprogress/nprogress.css') }}" />

        <!-- SLEEK CSS -->
        <link rel="stylesheet" id="sleek-css" href="{{ asset('assets/painel/css/sleek.css') }}" />

        <!--
            HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="{{ asset('assets/painel/plugins/nprogress/nprogress.js') }}"></script>
    </head>

    @yield('content')
</html>
