@extends('backend.master')
@section('title', 'Bài viết')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div style="margin:15px 0px">
				<a href="{{url('/admin/news/add')}}" class="btn btn-primary">Thêm</a>
			</div>
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">Bài viết</div>
					<div class="card-body">
					<!-- table -->
					<table class="table table-hover table-bordered">
						<tr>
                            <th >STT</th>
                            <th >Background</th>
							<th >Danh mục</th>
							<th >Tiêu đề</th>
                            <th >Mô tả</th>
                            <th >Hot News</th>
                            <th >Thời gian tạo</th>
							<th >Chức năng</th>
						</tr>
						
						@forelse($listNews as $row)
							<tr>
								<td>{{ $row->id }}</td>
                                <td><img width="100px" src="{{ $row->bgr }}" alt="ảnh đại diện" title="ảnh đại diện"></td>
                                <td>{{ $row->name }}</td>
								<td>{{ $row->title_h1 }}</td>
								<td>{{ $row->desc }}</td>
                                <td style="text-align: center;">
                                    @if($row->hot_news == 1)
                                        <span class="badge-danger">Hot</span>
                                    @else
                                        <span class="badge-success">Normal</span>
                                    @endif
                                </td>
                                <td>{{ $row->created_at }}</td>
								<td>
									<a href="{{url('/admin/news/edit/'.$row->id)}}"><i class="fa fa-pencil-square-o"></i></a>
									<a onclick="return window.confirm('Bạn có chắc chắc muốn xóa!')" href="{{url('/admin/news/delete/'.$row->id)}}"><i class="fa fa-trash-o btn-danger"></i></a>
									<a onclick="return window.confirm('Bạn có chắc chắc muốn cho bài viết lên đầu trang!')" href="{{url('/admin/news/hot/'.$row->id)}}"><i class="fa fa-thumbs-o-up"></i></a>
								</td>
							</tr>
						@empty
							<tbody>
								<td style="display: block; width: 100%;"> Chưa có bài viết nào</td>
							</tbody>
						@endforelse
					</table>
					<!-- end table -->
					</div>
				</div>
			</div>
			<!-- end card -->
		</div>
	</div>
</div>
<script>
	var result = confirm('')
</script>
@stop