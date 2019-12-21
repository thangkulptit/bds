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
                            <th col=1>STT</th>
                            <th col=2>Họ và tên</th>
							<th col=2>Địa chỉ</th>
							<th col=2>Số ĐT</th>
                            <th col=2>Email</th>
                            <th col=4>Nội dung</th>
                            <th col=1>Trạng thái</th>
							<th col=1>Thời gian gửi</th>
						</tr>
						
						@forelse($listInbox as $row)
							<tr>
								<td>{{ $row->id }}</td>
                                <td>{{ $row->fullname }}</td>
								<td>{{ $row->address }}</td>
								<td>{{ $row->phone }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->content }}</td>
                                <td style="text-align: center;">
                                    @if($row->status == 0)
                                        <span class="badge-danger">Chưa xem</span>
                                    @else
                                        <span class="badge-success">Đã xem</span>
                                    @endif
                                </td>
                                <td>{{ $row->created_at }}</td>
								<td>
									<a onclick="confirm('Bạn có chắc chắc muốn xóa!')" href="{{url('/admin/inbox/delete/'.$row->id)}}"><button class="btn btn-danger">Xóa</button></a>
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