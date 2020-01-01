@extends('backend.master')
@section('title', 'Hòm thư liên hệ')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">Hòm thư</div>
					<div class="card-body">
					<!-- table -->
					<table class="table table-hover table-bordered">
						<tr>
                            <th col=2>Họ và tên</th>
							<th col=2>Số ĐT</th>
							<th col=2>Email</th>
							<th>Dự án quan tâm</th>
                            <th col=1>Trạng thái</th>
							<th col=1>Thời gian gửi</th>
						</tr>
						
						@forelse($listInbox as $row)
							<tr>
                                <td>{{ $row->fullname }}</td>
								<td>{{ $row->phone }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->du_an_quan_tam }}</td>
                                <td style="text-align: center;">
                                    @if($row->status == 0)
                                        <span class="badge-danger">Chưa xem</span>
                                    @else
                                        <span class="badge-success">Đã xem</span>
                                    @endif
                                </td>
                                <td>{{ $row->created_at->format('H:i:s d/m/Y')}}</td>
								<td>
									<a title="Xem chi tiết" href="{{url('/admin/inbox/detail/'.$row->id)}}"><i class="fa fa-commenting-o"></i></a>
									<a onclick="return window.confirm('Bạn có chắc chắc muốn xóa!')" href="{{url('/admin/inbox/delete/'.$row->id)}}" title="Xóa"><i class="fa fa-trash-o btn-danger"></i></a>
								</td>
							</tr>
						@empty
							<tbody>
								<td style="display: block; width: 100%;"> Chưa có liên hệ nào</td>
							</tbody>
						@endforelse
					</table>
					<!-- end table -->
					</div>
					<div class="card-footer" style="padding:7px !important">
						{{$listInbox->links()}}
					</div>
				</div>
			</div>
			<!-- end card -->
		</div>
	</div>
</div>
@stop