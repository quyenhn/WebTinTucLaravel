@extends('layouts.master')
@section('head.title')
Danh sach bai viet
@stop
@section('body.content')
    <div class="container">
        @foreach ($articles as $a)
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>{{$a->title}}</h2>
                <p>{{$a->content}}</p>
                <p><a href="{{route('article.show',$a->id)}}">Read more</a></p>
            </div>
        </div>
        @endforeach
         <div class="row">
             <div class="col-sm-6 col-sm-offset-3 text-center">
                 {!! $articles->render()!!}
             </div>
         </div>
</div>

@stop