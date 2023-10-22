@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f3f3f3;
        }

        .checkBox {
            margin-left: 20%;
        }


        .content2 {
            padding: 32px;
            border-radius: 10px;
            box-shadow: 0 4px 16px #ccc;
            font-family: sans-serif;
            letter-spacing: 1px;
            background-color: #f7fafc;
        }

        .btnvoise1 {
            display: flex;
            justify-content: space-between;
            width: 45%;
        }


    </style>

<div style="display: flex; justify-content: space-between; width: 90%; margin-left: auto; margin-right: auto">
    <div style="width: 45%; margin-left: 30px; margin-top: 50px;">

        <div class="content2" >

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Название</th>
                    <th scope="col">Автор</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                @foreach($musics as $music)
                    <tbody>
                    <tr>
                        <th>{{ $music['nameSong'] }}</th>
                        <td>{{$music['author']}}</td>
                        <td>
                            <form action="/add" method="post">
                                <div class="checkBox">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$music['id']}}">
                                    <button type="submit" class="btn btn-outline-success">Добавить</button>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="/delete" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$music['id']}}">
                                <button type="submit" class="btn btn-outline-danger ">Удалить</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>

    <div class="content2" style="margin-top: 50px; width: 50%">
        <form method="post" action="/AddAdminSong" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                    <input type="text" autocomplete="off" name="name" class="form-control" id="name">
                </div>
                <label class="col-sm-2 col-form-label mt-2">Автор</label>
                <div class="col-sm-10">
                    <input type="text" autocomplete="off" name="author" class="form-control mt-2" id="autor">
                </div>
                <label class="col-sm-2 col-form-label mt-2">Url</label>
                <div class="col-sm-10">
                    <input type="text" name="url" class="form-control mt-2" id="url">
                </div>
            </div>
            <div class="btnvoise1">
                <button type="submit" class="btn btn-primary mt-4">Отправить</button>
                <a class="btn btn-primary mt-4" href="/" role="button">На главную</a>
            </div>
        </form>
    </div>
</div>

<form id="example_1" action="/deleteall" method="post"  style= "width: 20%; text-align: center;
 position:absolute; top: 85%; left: 84%; display: none">
    <div style="margin-bottom: 10px;">Вы уверены?</div>
    @csrf
    <button  type="submit" class="btn btn-outline-danger" >Да</button>
</form>
<button class="btn btn-outline-danger" style="position:absolute; top: 75%; left: 90%;"
        onclick="(document.getElementById('example_1').style.display='block');">Очистить БД</button>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>


    @endsection
