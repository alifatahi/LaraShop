<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Redis</title>
</head>
<body>
<h1>Videos</h1>

@if(!is_null($downloads))
    <p>this video download {{$downloads}} time</p>
@else
    <p>this video download No time</p>
@endif
{{--In PHP 7--}}
{{--<p>this video download {{$downloads ?? "No"}} time</p>--}}
</body>
</html>
