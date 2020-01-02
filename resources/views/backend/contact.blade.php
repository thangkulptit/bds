@extends('backend.master')
@section('title', 'Contact')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh mục</div>
					<div class="card-body">
					<!-- table -->
					<table class="table table-hover table-bordered">
						<tr>
							<th style="width: 120px;">STT</th>
							<th style="width: 120px;">Tiêu đề contact</th>
							<th style="width: 120px;">Mô tả contact</th>
							<th style="width: 150px;">Chức năng</th>
						</tr>
                        @if(isset($contact))
							<tr>
								<td>{{ $contact['id'] }}</td>
								<td>{{ $contact['title'] }}</td>
								<td>{{ $contact['desc'] }}</td>
								<td>
									<a href="{{url('/admin/contact/edit')}}"><button class="btn btn-primary">Sửa</button></a>
								</td>
							</tr>
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