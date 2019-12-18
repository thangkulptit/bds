<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_category_news&act=add" class="btn btn-primary">Thêm</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
                        <th style="width: 120px;">STT</th>
                        <th style="width: 120px;">Tiêu đề URL</th>
						<th style="width: 120px;">Tên danh mục</th>
						<th style="width: 150px;">Chức năng</th>
					</tr>
					<tr>
                        
					</tr>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
                    {{$listCategory->link()}}
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>