<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="portals">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portals Admin</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div ng-view ng-controller="portalsController"></div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
