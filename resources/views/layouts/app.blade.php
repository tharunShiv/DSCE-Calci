<html>
    <head>
        <title>DSCE | CALCI</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <!-- <link rel="stylesheet" href="css/bootstrap.min.css" >  -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container" style="width:75%;margin:auto;margin-top:10px;">
        @include('inc.messages')
        </div>
        @yield('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
    