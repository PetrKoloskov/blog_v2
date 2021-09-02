@extends('layouts.admin_layout')

@section('title', 'Все статьи')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все статьи</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 5%">
                                    #
                                </th>
                                <th >
                                    Название cтатьи
                                </th>
                                <th >
                                    Описание статьи
                                </th>
                                <th >
                                    Символьный код статьи
                                </th>
                                <th >
                                    Категория
                                </th>
                                <th>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->id}}
                                    </td>
                                    <td>
                                        <a href="{{route('getPost',[$post->category->slug,$post->slug])}}">{{$post->slug}}</a>
                                    </td>
                                    <td>
                                        {{$post->description}}
                                    </td>
                                    <td>{{$post->slug}}</td>
                                    <td>{{$post->category->title}}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{route('getPost',[$post->category->slug,$post->slug])}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Просмотреть
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{route('post.edit', $post->id)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <form class="d-inline" action="{{route('post.destroy', $post->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn" href="{{route('post.destroy', $post->id)}}">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
