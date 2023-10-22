<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}"/>

    <title>Предложить песню</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f3f3f3;
        }

        .conteiner1 {
            padding: 50px 10%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }

        .flex {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .checkBox {
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: space-between;
            width: 70%;
        }

        .btn1 {
            width: 35%;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: space-around;
        }

        .content2 {
            margin: 7px 14px 7px 0;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 16px #ccc;
            font-family: sans-serif;
            letter-spacing: 1px;
            background-color: #f7fafc;
            text-align: center;

        }

        .card-body {
            padding: 10px;
            display: flex;
            justify-content: space-around;
        }

        @media (max-width: 600px) {
            .conteiner1 {
                text-align: center;
                width: 100%;
                margin-top: 0;
            }

            .content2 {
                padding: 10px;
                width: 100%;
            }


            h5 {
                margin-top: 10px;
                margin-bottom: 0;
            }

            .btnvoise {
                width: 80%;
                margin-left: auto;
                margin-right: auto;
                padding-bottom: 10px;
            }



        }
    </style>
</head>
<body>
<div class="conteiner1">
    <div class="mb-3 row">
        <div class="alert alert-warning" role="alert">
            Важно! Композиции будут проходить фильтрацию - песни, содержащие нецензурные выражения, либо песни, клип у
            которых выходит за моральные рамки,
            до голосования допущены не будут!
        </div>
        <div class="content2">
            <form method="post" action="/savevoise">
                @csrf
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><h3 style="margin: 0">Название</h3></label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" autocomplete="off">
                    </div>
                    <label class="col-sm-2 col-form-label mt-2"><h3 style="margin: 0">Автор</h3></label>
                    <div class="col-sm-10">
                        <input type="text" name="author" class="form-control mt-2" id="autor" autocomplete="off">
                    </div>
                </div>
                <div class="btnvoise">
                    <button type="submit" class="btn btn-primary mt-4">Отправить</button>
                    <a class="btn btn-primary mt-4" href="/" role="button">На главную</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
</body>
</html>
