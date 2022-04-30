@extends('layouts.mainLay')

@section('title')
articles
@endsection

@section('header-articles-op')
<font size = "6">
@endsection

@section('header-articles-ed')
</font>
@endsection

@section('body')

@if(session('success'))
<div> <font color = "green"> {{session('success')}} </font> </div>
@endif

<a href = "articles/create-new"><h3> <font color = "gray"> Создать статью </font> </h3> </a>

<font color = "gray"> <h2> Все статьи:</h2></font> <br />


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

{{$data->links()}}


@endsection

