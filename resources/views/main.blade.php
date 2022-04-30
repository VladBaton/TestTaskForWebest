@extends('layouts.mainLay')


@section('title')
Главная страница
@endsection

@section('header-main-op')
<font size="6">
@endsection

@section('header-main-ed')
</font>
@endsection

@section('body')

<h3> <font color = "grey"> Последние добавленные статьи: </font> </h3>

<style>
    .brd {
     border: 4px double black; /* Параметры границы */
     background: rgb(255, 254, 254); /* Цвет фона */
     padding: 10px; /* Поля вокруг текста */
    }
   </style>

@if(isset($data))
@foreach($data as $item)
    <div class = "brd">
    <h3> <font color = "gray"> {{$item['subject']}} </font><h3>
    <img src = "success.jpg" width = "50" heigth = "50"> <br />
    <h4> {{mb_substr($item['text'],0,100)}} </h4> 
    <small> {{$item['created_at']}}</small> <br />
    <a href = "{{route('articles-oneArticle', $item->id)}}"> <button> Подробнее</button></a>
    </div>
@endforeach
@endif

@endsection