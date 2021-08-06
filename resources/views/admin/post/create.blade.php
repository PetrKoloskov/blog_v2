@extends('layouts.admin_layout')


@section('title', 'Добавить статью')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить статью</h1>
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
                        <form action="{{route('post.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название категории</label>
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Введите название категории" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Название категории</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="Введите название категории" required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Символьный код</label>
                                    <input name="slug" type="text" class="form-control" id="slug" placeholder="Введите символьный код" required>
                                </div>
                                <div class="form-group">
                                    <label>Выберите категорию</label>
                                    <select name="cat_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Изображение</label>
                                    <img src="" alt="" class="upload_preview" style="width:300px;display:block; padding:10px 0">
                                    <input class="forn-control" type="text" id="image" name="image" value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="image">Select Image</a>
                                </div>
                                <div class="form-group">
                                    <textarea style="width:100%;height:600px;resize:none" name="text" class="form-control editor">
                                    </textarea>
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

