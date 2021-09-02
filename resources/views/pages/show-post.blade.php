@extends('layouts.main-layout')
@section('title', $post->title)
@section('content')
@include('includes.categories')

    <div><a href="{{route('getPostsByCategory',$slug_category)}}" class="btn btn-outline-primary mb-4">Back</a></div>
    <article>
        <img src="{{$post->image}}" alt="{{$post->title}}">
        {!! $post-> text !!}
    </article>


@endsection

