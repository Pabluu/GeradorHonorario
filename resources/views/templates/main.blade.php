<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield("titulo")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{url(mix('site/css/style.css'))}}">
</head>

<body>
    <div class="container">
        @yield("titulo")

        <div class="card">
            @yield("formulario")
            </div>
            
        <div class="pos-card">
            @yield("mensagem")
        </div>
    </div>
</body>

</html>