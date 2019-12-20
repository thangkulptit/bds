@extends('backend.master')
@section('title', 'Danh mục')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div style="margin:15px 0px">
				<a href="{{url('/admin/category/add')}}" class="btn btn-primary">Thêm</a>
			</div>
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh mục</div>
					<div class="card-body">
					<!-- table -->
					<table class="table table-hover table-bordered">
						<tr>
							<th style="width: 120px;">STT</th>
							<th style="width: 120px;">Tiêu đề URL</th>
							<th style="width: 120px;">Tên danh mục</th>
							<th style="width: 120px;">Thời gian tạo</th>
							<th style="width: 150px;">Chức năng</th>
						</tr>
						
						@forelse($listCategory as $row)
							<tr>
								<td>{{ $row->id }}</td>
								<td>{{ $row->title }}</td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->created_at }}</td>
								<td>
									<a href="{{url('/admin/category/edit/'.$row->id)}}"><button class="btn btn-primary">Sửa</button></a>
									<a onclick="confirm('Bạn có chắc chắc muốn xóa!')" href="{{url('/admin/category/delete/'.$row->id)}}"><button class="btn btn-danger">Xóa</button></a>
								</td>
							</tr>
						@empty
							<tbody>
								<td style="display: block; width: 100%;"> Chưa có danh mục nào</td>
							</tbody>
						@endforelse
					</table>
					<!-- end table -->
					</div>
					<div class="card-footer" style="padding:7px !important">
						{{$listCategory->links()}}
					</div>
				</div>
			</div>
			<!-- end card -->
		</div>
	</div>
</div>
@stop