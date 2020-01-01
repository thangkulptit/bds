@extends('backend.master')
@section('title', 'Chi tiết thư')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
            <a style = "float: right;" href="{{url('/admin/inbox')}}" class="btn btn-primary">Quay lại</a>
            @if (isset($inbox)) 
                <div class="form-group">
                    <strong>Tên:</strong> <p class="ib_text">{{$inbox['fullname']}}</p>
                </div>
                <div class="form-group">
                    <strong>Số điện thoại:</strong> <p class="ib_text">{{$inbox['phone']}}</p>
                </div>
                <div class="form-group">
                    <strong>Email:</strong> <p class="ib_text">{{$inbox['email']}}</p>
                </div>
                <div class="form-group">
                    <strong>Dự án quan tâm:</strong> <p class="ib_text">{{$inbox['du_an_quan_tam']}}</p>
                </div>
                <div class="form-group">
                    <strong>Lời nhắn:</strong> <p class="ib_text">{{$inbox['content']}}</p>
                </div>
            @endif
		</div>
	</div>
</div>
@stop