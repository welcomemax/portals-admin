<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portals Admin</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div ng-view></div>
    <pre>{{ dump($portals) }}</pre>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
