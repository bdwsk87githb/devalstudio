@extends('layouts.admin.app')
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
                                <input id="category_name" class="form-control" type="text" value=""  placeholder="Название">
                                <h4 id="">Родительская категория:</h4>
                                <select class="form-control" id="category_parent">
                                    @if($categories)
                                            <option value="null" selected="selected">Выберите категорию</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    @endif 
                                </select>    
                                <h4 id="">Описание категории:</h4>
                                <textarea id="category-description" class="form-control"></textarea>
                                <h4 id="">Контент:</h4>
                                <textarea id="category-content" class="form-control"></textarea>
                                <br>
    	                        <button data-type="" @click.prevent="saveProduct"
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
@section('adminlte_js')
<script src="{{asset('/js/admin/tinymce/tinymce.min.js')}}"> 

<script> 
alert('hello');
</script>
@endsection