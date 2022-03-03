<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div id="app"></div>
@for($i = 1; $i <= 30; $i++)
    <img src="{{ asset("groupes/groupe-" . $i . ".svg") }}" class="m-10" alt="">
@endfor
<script  src="{{ mix('js/app.js') }}"></script>
<script src="https://unpkg.com/vue-qrcode-reader/dist/VueQrcodeReader.umd.min.js"></script>
</body>
</html>
