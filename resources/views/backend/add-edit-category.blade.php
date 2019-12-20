@extends('backend.master')
@section('title', 'Thêm danh mục')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">{{isset($record) ? 'Sửa danh mục' : 'Thêm Danh mục'}}</div>
					<form method="post">
                        
                        <div class="card-body">
                            <strong><label for="">Tên danh mục</label></strong>
                        <input type="text" class="form-control" name="name" id="" placeholder="Tên danh mục" value="{{isset($record) ? $record->name : ""}}" required>
                        </div>
                        <div class="card-footer" style="padding:7px !important">
                            @if(isset($record))
                                <input type="submit" class="btn btn-primary" value="Sửa">
                            @else
                                <input type="submit" class="btn btn-primary" value="Thêm vào">
                            @endif
                        </div>
                    @csrf
                    </form>
				</div>
			</div>
			<!-- end card -->
		</div>
	</div>
</div>
@stop
