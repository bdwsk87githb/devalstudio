@extends('layouts.admin.app')
@section('content')
<div class="box">
<div class="box-header">

    <h3 class="box-title">Категории</h3>

    <br>
    <a href="/admin/categories/create">Добавить категорию</a>

    <br><br>
    <table id="datatable" class="table table-bordered table-striped dataTable">
    @if($categories)
        <thead>
            <tr>
                <th>
                    id
                </th>
                <th>
                    Название категории
                </th>
                <th>
                    Родительская категория
                </th>
                <th>
                    Описание категории
                </th>
                <th>
                    Дата изменения
                </th>
            </tr>
        </thead>
    <tbody id="table-body">
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td><a href="categories/{{$category->id}}/edit">{{$category->title}}</a></td>
            <td>{{$category->parent_id}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->updated_at->format('j.m.Y H:i ')}}</td>
        </tr>    
        @endforeach
    </tbody>
    @endif
</table>
</div>
</div>
@endsection
@section('adminlte_js')
<script>
    $(function () {
        $("#datatable").DataTable();
    });
</script>
@endsection
 