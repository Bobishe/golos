<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Голосование</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .conteiner1 {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }

        @media (max-width: 600px) {
            .conteiner1 {
                width: 100%;
                text-align: center;
            }

        }
    </style>
</head>
<body class="antialiased">
<div class="conteiner1">
    <div style="margin-top: 55%">
        <div class="error">
            <h1>Отметь хотябы одну песню!</h1>
        </div>
        <div>
            <a href="/" style="width:48%; padding:4px;" class="btn btn-primary mt-4 btn-lg"
               role="button">Назад</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

</body>
</html>
