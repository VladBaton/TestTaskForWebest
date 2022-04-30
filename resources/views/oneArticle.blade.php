@extends('layouts.mainLay')


@section('title')
Article {{$data['id']}}
@endsection

@section('header-articles-op')
<font size = "6">
@endsection

@section('header-articles-ed')
</font>
@endsection

@section('body')


<h1> <font color = "gray"> {{$data['subject']}} </font></h1> 
<small> создан {{$data['created_at']}}</small> <br /> 
<img src = "/images/success.jpg" width = "550" heigth = "550" >  <br />
<h3> {{$data['text']}} </h3> 

<a href = "{{route('articles-change', $data->id)}}"> <button> Редактировать статью </button> </a>
<a href = "{{route('articles-delete', $data->id)}}"> <button> Удалить статью </button> </a>

@endsection