@extends('layouts.mainLay')

@section('title')
Change article
@endsection

@section('body')

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
@endif


<h2> <font color = "gray"> Редактировать статью: </font> </h2>


<form action = "{{route('articles-change-submit', $data->id)}}" method = "post">
    @csrf
    <label> Тема статьи:</label>
    <input type = "text" name = "subject" placeholder = "subject" value = "{{$data['subject']}}"> <br />
    <label> Текст статьи: </label> <br />
    <textarea rows = "20" cols = "50" name = "text"> {{$data['text']}} </textarea> <br />
    <input type = "submit" name = "submit">

</form>

@endsection