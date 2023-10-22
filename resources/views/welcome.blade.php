<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}"/>--}}


    <title>Голосование</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            /*background-color: #f3f3f3;*/
            background: url("");
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

        .content2 {
            margin: 7px 0 7px 0;
            padding: 10px;
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


        .contpre small {
            font-size: 25px;
        }

        #p_prldr .svg_anm {
            position: absolute;
            width: 51px;
            height: 51px;
            background: url(public/oval.svg) center center no-repeat;
            background-size: 51px;
            margin: -16px 0 0 -32px;
        }


        @media (max-width: 600px) {
            .conteiner1 {
                text-align: center;
                width: 100%;
                margin-top: 0;
                padding: 0;
                margin-bottom: 145px;

            }

            .btn1 {
                position:fixed;
                bottom:0;
                font-size: 10px;
                width: 100%;
                display: flex;
                flex-direction: column;
                padding-bottom: 15px;
                background-color: #f7fafc;
                padding-top: 15px;
                box-shadow: 0 4px 16px #ccc;
            }

            .a_flex {
                display: flex;
                margin-top: -15px;
                justify-content: space-between;
                margin-left: 5px;
                margin-right: 5px;
            }

            .content2 {
                padding: 10px;
                width: 100%;
            }

            .card-body {
                padding: 0;
            }

            h5 {
                margin-top: 10px;
                margin-bottom: 0;
            }

            #div1 {
                padding: 10px;
            }


        }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">$(window).on('load', function () {
            var $preloader = $('#p_prldr'),
                $svg_anm = $preloader.find('.svg_anm');
            $svg_anm.fadeOut();
            $preloader.delay(100).fadeOut('slow');
        });</script>

</head>
<script>
    function viewDiv() {
        document.getElementById("div1").style.display = "block";
        document.documentElement.scrollIntoView(true);
    };
</script>
<body class="antialiased">
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(85559851, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/85559851" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!--<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span><br><small>Подождите идет загрузка</small></div></div>-->
<div class="conteiner1">
    @if (Session::has('flash message'))
        <div class="alert alert-danger">Вы уже голосовали на этой неделе!</div>
    @endif

    <div id="div1" style="display: none;">Теперь в столовой нашего колледжа каждую неделю будут воспроизводиться клипы.
        Какие именно? Решать вам! Проголосуй за понравившиеся треки и предлагай свои (все композиции проходят модерацию)
        <br>P.S. В случае технических неполадок обращаться: <a href="https://vk.com/oskolkov_85">Осколков Евгений</a>
    </div>

    <div class="alert alert-dark" role="alert">Голосование на 8 неделю <br> (18.10.21 - 23.10.21)</br>Выбирать можно
        несколько песен сразу!
    </div>

    <form method="post" action="/voise">
        @csrf
        <div class="flex">
            @foreach($musics as $music)

                <div class="content2">
                    <div class="card" style="width: 100%;">
                        <iframe loading="lazy" frameborder="0" style="border:none;width:100%;height:70px;" width="100%"
                                height="70"
                                src="{{$music['url']}}">Слушайте
                        </iframe>
                        <div class="card-body" style="margin: 5px 0 5px 0;">
                            <div class="checkBox">
                                <div class="form-check" style="margin-left: auto; margin-right: auto; padding: 0">
                                    <input type="checkbox" class="btn-check" name="{{$music['id']}}"
                                           id="{{$music['id']}}" autocomplete="off">
                                    <label class="btn btn-outline-success" for="{{$music['id']}}">Выбрать</label><br>

                                </div>
                            </div>
                            <p class="card-title" style="margin: 8px 0 0 0; width: 50%">Голосов: {{$music['voise']}}</p>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="btn1 container">
            <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 5px; margin-right: 5px;">Проголосовать</button>
            <div class="a_flex">
                <a href="/addvoise" style="width:48%; padding:4px;" class="btn btn-primary mt-4 btn-lg"
                   role="button">Предложить песню</a>
                <input type="button" value="Инфо" style="width:48%" class="btn btn-primary mt-4 btn-lg" role="button" onmousedown="viewDiv()">
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>
