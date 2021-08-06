
@extends('layouts.admin_layout')


@section('title', 'Все категории')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все категории</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->

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
                                    Название категории
                                </th>
                                <th >
                                    Символьный код категории
                                </th>

                                <th>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>
                                        {{$category->id}}
                                    </td>
                                    <td>
                                        <a href="{{route('getPostsByCategory',$category->slug)}}">{{$category->title}}</a>
                                    </td>
                                    <td>{{$category->slug}}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Удалить
                                        </a>
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
