<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet"  href="{{{asset('css/app.css')}}}">


        <style>
        body{

}

.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
label{
  font-weight: normal;
}
label.label-floatlabel {
    color: #4a4a4a;
    font-size: 11px;
}
.input-sm{
  height:40px;
  font-size:14px;
  color:#9b9b9b;
}
        </style>
    </head>
    <body>
        @include('layout.nav')
        <div class="container">
            @yield('conteudo')
        </div>

    </body>
</html>
