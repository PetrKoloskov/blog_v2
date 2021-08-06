@extends('layouts.admin_layout')


@section('title', 'Добавить категорию')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить категорию</h1>
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
                    <div class="card card-primary">
                       <!-- form start -->
                        <form action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название категории</label>
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Введите название категории" required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Символьный код</label>
                                    <input name="slug" type="text" class="form-control" id="slug" placeholder="Введите символьный код" required>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
