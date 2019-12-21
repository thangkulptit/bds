@extends('backend.master')
@section('title', 'Thêm bài viết')
@section('main')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- card -->
			<div class="card border-primary">
				<div class="card card-header bg-primary text-white" style="padding:7px !important;">{{isset($record) ? 'Sửa bài viết' : 'Thêm bài viết'}}</div>
					<form method="post" enctype="multipart/form-data">
                        
                        <div class="card-body">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <select class="form-control" id="sel1" name="category_id" required>
                                      @if (sizeof($listCate) > 0)
                                        <option value="">Chọn danh mục</option>
                                        @foreach ($listCate as $rows)
                                            <option @if(isset($record) && $record->category_id == $rows->id) selected @endif value="{{$rows->id}}">{{$rows->name}}</option>
                                        @endforeach
                                      @endif
                                    </select>
                                </div>
                              </div>
                            <div class="form-group">
                                <strong><label for="">Tiêu đề</label></strong>
                                <input type="text" class="form-control" name="title_h1" id="" placeholder="Tiêu đề" value="{{isset($record->title_h1) ? $record->title_h1 : ""}}" required>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Mô tả</label></strong>
                                <textarea type="text" class="form-control" name="desc" id="" placeholder="Mô tả" value="{{isset($record->desc) ? $record->desc : ""}}" ></textarea>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Nội dung</label></strong>
                                <textarea type="text" style="height: 150px;" class="form-control" name="content" id="" placeholder="Nội dung" value="{{isset($record->content) ? $record->content : ""}}" ></textarea>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Ảnh đại diện</label></strong>
                                <input type="file" class="form-control" name="bgr[]" id="">
                            </div>
                            <div class="form-group">
                                <strong><label for="">Ảnh vị trí 1</label></strong>
                                <input type="file" class="form-control" name="images1[]" id="" multiple>
                                <textarea type="text" class="form-control" name="text1" id="" placeholder="Nội dung vị trí 1" value="{{isset($record->text1) ? $record->text1 : ""}}" ></textarea>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Ảnh vị trí 2</label></strong>
                                <input type="file" class="form-control" name="images2[]" id="" multiple>
                                <textarea type="text" class="form-control" name="text2" id="" placeholder="Nội dung vị trí 2" value="{{isset($record->text2) ? $record->text2 : ""}}" ></textarea>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Ảnh vị trí 3</label></strong>
                                <input type="file" class="form-control" name="images3[]" id="" multiple>
                                <textarea type="text" class="form-control" name="text3" id="" placeholder="Nội dung vị trí 3" value="{{isset($record->text3) ? $record->text3 : ""}}" ></textarea>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Ảnh vị trí 4</label></strong>
                                <input type="file" class="form-control" name="images4[]" id="" multiple>
                                <textarea type="text" class="form-control" name="text4" id="" placeholder="Nội dung vị trí 4" value="{{isset($record->text4) ? $record->text4 : ""}}" ></textarea>
                            </div>
                            <div class="form-group">
                                <strong><label for="">Ảnh vị trí 5</label></strong>
                                <input type="file" class="form-control" name="images5[]" id="" multiple>
                                <textarea type="text" class="form-control" name="text5" id="" placeholder="Nội dung vị trí 5" value="{{isset($record->text5) ? $record->text5 : ""}}" ></textarea>
                            </div>
                            <strong>Bài viết hot</strong> <input type="checkbox" style="margin-left: 20px;" @if(isset($record) && $record->hot_news == 1) checked @endif class="form-check-input" name="hot_news" id="" value="1">
                         
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
