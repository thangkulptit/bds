@extends('backend.master')
@section('title', 'Setting')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div style="margin:15px 0px">
				<a href="{{url('/admin/setting/add')}}" class="btn btn-primary">Thêm</a>
			</div>
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">Setting</div>
					<div class="card-body">
					<!-- table -->
					<table class="table table-hover table-bordered">
						<tr>
							<th style="width: 120px;">STT</th>
							<th style="width: 120px;">Loại</th>
							<th style="width: 120px;">Tiêu đề</th>
							<th style="width: 120px;">Mô tả</th>
							<th style="width: 120px;">Link</th>
							<th style="width: 120px;">Content</th>
							<th style="width: 120px;">Chức năng</th>
						</tr>
                        @if(isset($setting))
                            @forelse ($setting as $index => $item)
                            <tr>
                                <td>{{ $index }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->desc }}</td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->content }}</td>
                                <td>
									<a href="{{url('/admin/setting/edit/'.$item->id)}}" title="Sửa Setting"><i class="fa fa-pencil-square-o"></i></a>
									<a onclick="return window.confirm('Bạn có chắc chắc muốn xóa!')" href="{{url('/admin/setting/delete/'.$item->id)}}" title="Xóa Setting"><i class="fa fa-trash-o btn-danger"></i></a>
                                </td>
                            </tr>
                            @empty
                                <p>Chưa có cài đặt nào</p>
                            @endforelse
							
                        @endif
					</table>
					<!-- end table -->
					</div>

				</div>
			</div>
			<!-- end card -->
		</div>
	</div>
</div>
@stop