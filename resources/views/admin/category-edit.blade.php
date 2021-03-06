@extends('layouts.admin.app')


@section('adminlte_js')
<script src="{{asset('js/admin/category-edit.min.js')}}"></script>
@endsection

@section('content_header')
q2312312
@endsection

@section('content')
<section class="content" id="product-edit-app">
		<div class="row">
			<!-- left column -->
			<div class="">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h4 class="box-title">Добавление новой категории</h4>
					</div>
					<form role="form">
                        <div class="box-body">
                            <div class="col-md-8">
                                <h4 id="">Название категории:</h4>
                                <input v-model="categoryTitle" id="" class="form-control" type="text" value=""  placeholder="Название">
                                <h4 id="">Родительская категория:</h4>
                                <select v-model="categoryParent" class="form-control" id="category_parent">
                                    @if($categories)
                                            <option value="null" selected="selected">Выберите категорию</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    @endif 
                                </select>    
                                <h4 id="">Описание категории:</h4>
                                <textarea v-model="categoryDescription" id="category-description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                                <h4 id="">Контент:</h4>
                                <textarea id="category-content" class="form-control"></textarea>
                                <br>
    	                        <button data-type="" @click.prevent="saveCategory"
								        class="btn btn-primary save-product">Добавить
								</button>
                            </div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</section> 
@endsection
