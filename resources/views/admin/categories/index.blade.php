@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Список категорий</h1>
            <br>
            <a href="{!! route('categories.add') !!}" class="btn btn-info">Добавить категорию</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Наименование</th>
                    <th>Описание</th>
                    <th>Дата обновления</th>
                    <th>Действия</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{!! $category->description !!}</td>
                        <td>{{$category->created_at->format('d-m-Y H:i')}}</td>
                        <td><a href="{!! route('categories.edit', ['id' => $category->id]) !!}">Редактировать</a> || <a href="">Удалить</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@stop
