<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ trans('siteconfig.nome') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" href="/img/favicon-16.png" sizes="16x16"/>
	    <link rel="icon" href="/img/favicon-32.png" sizes="32x32"/>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

		<link href='http://fonts.googleapis.com/css?family=Ledger' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Conteúdo -->
        @yield('conteudo')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    </body>
</html>
