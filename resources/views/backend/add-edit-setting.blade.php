@extends('backend.master')
@section('title', 'Thêm Setting')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">{{isset($record) ? 'Sửa Setting' : 'Thêm Setting'}}</div>
					<form method="post" enctype="multipart/form-data">
                        
                        <div class="card-body">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <select class="form-control" id="sel1" name="type" required>
                                        <option value="0">Chọn loại setting</option>
                                        <option value="1">Header</option>
                                        <option value="2">Url Youtube</option>
                                    </select>
                                </div>
                              </div>
                            <div class="form-group">
                                <strong><label for="">Tiêu đề</label></strong>
                                <input type="text" class="form-control" name="title" id="" placeholder="Tiêu đề" value="{{isset($record->title) ? $record->title : ""}}" required>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Mô tả</label></strong>
                                <textarea type="text" class="form-control" name="desc" id="" placeholder="Mô tả">{{isset($record->desc) ? $record->desc : ""}}</textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace("desc");
                                </script>
                            </div>

                            <div class="form-group">
                                <strong><label for="">Link</label></strong>
                                <input type="text"  name="link" class="form-control" value="{{isset($record->link) ? $record->link : ""}}" name="link" id="" placeholder="Link trỏ đến: http://google.com">
                            </div>
                            <div class="form-group">
                                <strong><label for="">Nội dung</label></strong>
                                <textarea type="text" class="form-control" name="content" id="" placeholder="Nội dung">{{isset($record->content) ? $record->content : ""}}</textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace("content");
                                </script>
                            </div>
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
