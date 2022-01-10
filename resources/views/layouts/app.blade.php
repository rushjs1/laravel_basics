<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!--  <style> 
    * {
        margin: 0;
    }
     body, html {
        height: 100%;
      
    }
    .content{
        background-color: #E4E7EB;
        height: 100%;
        width: 100%;
    }
    </style>  -->
 <!--  <link rel="stylesheet" href="./app.css">  -->
 <link href="{{ asset('app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.partials._nav')

    <div class="content">
        @yield('content')
    </div>
</body>
</html>