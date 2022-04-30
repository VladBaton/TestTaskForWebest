@extends('layouts.mainLay')

@section('title')
Create article
@endsection

@section('body')

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
@endif


<h2> <font color = "gray"> Создать статью: </font> </h2>

<form action = "/articles/create-new/submit" method = "post">
    @csrf
    <label> Тема статьи:</label>
    <input type = "text" name = "subject" placeholder = "subject"> <br />
    <label> Текст статьи: </label> <br />
    <textarea rows = "20" cols = "50" name = "text">  </textarea> <br />
    <input type = "submit" name = "submit">

</form>

@endsection