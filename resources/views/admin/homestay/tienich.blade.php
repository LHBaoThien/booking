@extends('admin.layout.index')
@section('content')
	<div id="content" class="span10">
		<ul class="breadcrumb">
			<li>
                <i class="icon-home"></i>
                <a href="{{url('/admin/dashboard')}}">Home</a>
            </li>
            <li>
                <i class="icon-angle-right"></i>
                <a href="{{url('/admin/homestay/DStienich')}}">Danh Sách Tiện Ích</a>
            </li>
            <li>
                <i class="icon-angle-right"></i>
                <a href="{{url('/admin/homestay/DStienich')}}">Thêm tiện ích</a>
            </li>
		</ul>
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm tiện ích</h2>
					<div class="box-icon">
						<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
					</div>
				</div>
				<div class="box-content">
					@if(count($errors) > 0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}
							@endforeach
						</div>
					@endif

					@if(session('thongbao'))
						<div class="alert alert-success">
							{{session('thongbao')}}
						</div>
					@endif
					<form class="form-horizontal" action="{{url('/admin/homestay/tienich')}}" method="POST">
					@csrf
					  <fieldset>
						<div class="control-group">
						  <label class="control-label" for="typeahead">Tiện Ích:</label>
						  <div class="controls">
							<input type="text" id="typeahead" name="name">
						  </div>
						</div>
						<div class="control-group">
						  	<label class="control-label" for="status">Trạng thái:</label>
						  	<label class="controls radio-inline">
								<input type="radio" name="status" value="0" id="status" checked="checked">Ẩn
							</label>
							<label class="controls radio-inline">
								<input type="radio" name="status" value="1" id="status">Hiện
							</label>
						</div>
						<div class="form-actions">
						 <button type="submit" class="btn btn-primary">Thêm</button>
						  <button type="reset" class="btn">Hủy</button>
						</div>
					  </fieldset>
					</form>

				</div>
			</div>
		</div>
		<div><a href="{{url('/admin/homestay/DStienich')}}" class="btn btn-primary">Quay lại</a></div>
	</div>


@endsection
