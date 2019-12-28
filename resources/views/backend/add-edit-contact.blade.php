@extends('backend.master')
@section('title', 'Thêm bài viết')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">Sửa liên hệ</div>
					<form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <strong><label for="">Tiêu đề</label></strong>
                                <input type="text" class="form-control" name="title" id="" placeholder="Tiêu đề" value="{{isset($contact->title) ? $contact->title : ""}}" required>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Mô tả</label></strong>
                                <textarea type="text" class="form-control" name="desc" id="" placeholder="Mô tả">{{isset($contact->desc) ? $contact->desc : ""}}</textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace("desc");
                                </script>
                            </div>

                            <div class="form-group">
                                <strong><label for="">Địa chỉ</label></strong>
                                <input type="text" class="form-control" name="address" id="" placeholder="Địa chỉ" value="{{isset($contact->address) ? $contact->address : ""}}" required>
                            </div>

                            <div class="form-group">
                                <strong><label for="">Số điện thoại</label></strong>
                                <input type="text" class="form-control" name="phone" id="" placeholder="SĐT" value="{{isset($contact->address) ? $contact->address : ""}}" required>
                            </div>

                            <div class="form-group">
                                <strong><label for="">Onl vào giờ nào</label></strong>
                                <input type="text" class="form-control" name="hour_online" id="" placeholder="Onl vào những giờ nào" value="{{isset($contact->hour_online) ? $contact->hour_online : ""}}" required>
                            </div>

                            <div class="form-group">
                                <strong><label for="">Gặp gỡ đội ngũ Tiêu đề</label></strong>
                                <input type="text" class="form-control" name="gap_go_doi_ngu_title" id="" placeholder="Gặp gỡ đội ngũ title" value="{{isset($contact->gap_go_doi_ngu_title) ? $contact->gap_go_doi_ngu_title : ""}}" required>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Gặp gỡ đội ngũ Mô tả</label></strong>
                                <textarea type="text" class="form-control" name="gap_go_doi_ngu_desc" id="" placeholder="Mô tả">{{isset($contact->gap_go_doi_ngu_desc) ? $contact->gap_go_doi_ngu_desc : ""}}</textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace("desc");
                                </script>
                            </div>

                            <div class="form-group">
                                <strong><label for="">Ảnh đại diện 1 |Ảnh đại diện 2 |Ảnh đại diện 3 |Ảnh đại diện 4 </label></strong>
                                <input type="file" class="form-control" name="list_img[]" id="" multiple>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <strong><label for="">Tên 1 | Tên 2 | Tên 3 </label></strong>
                                    <input type="text" class="form-control" name="list_name" id="" placeholder="Tên 1 | Tên 2 | Tên 3"  value="{{isset($contact->list_name) ? $contact->list_name : ""}}">
                                </div>
                                <textarea type="text" class="form-control" name="list_desc" id="" placeholder="Mô tả 1 | Mô tả 2 | Mô tả 3">{{isset($contact->list_desc) ? $contact->list_desc : ""}}</textarea>
                            </div>
                        </div>
                        <div class="card-footer" style="padding:7px !important">
                            @if(isset($contact))
                                <input type="submit" class="btn btn-primary" value="Sửa">
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
