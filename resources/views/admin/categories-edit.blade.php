@extends('layouts.admin.app')
@section('content')


<section class="content" id="product-edit-app">
		<div class="row">
			<!-- left column -->
			<div class="">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h4 class="box-title">Товар : </h4>
					</div>
					<form role="form">
                        <div class="box-body">
                            <div class="col-md-8">
                                <h4 id="">Название категории:</h4>
                                <input id="category_name" class="form-control" type="text" value=""  placeholder="Название">
                                <h4 id="">Родительская категория:</h4>
                                <input id="category_parent" class="form-control" type="text" value=""  placeholder="Название">
                            </div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</section> 
@endsection