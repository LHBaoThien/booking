@extends('admin.layout.index')
@section('content')
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{ url('/admin/dashboard') }}">Home</a>
            </li>
            <li>
                <i class="icon-angle-right"></i>
                <a href="{{ url('/admin/khachhang/danhsach') }}">Danh sách người dùng</a>
            </li>
            <li>
                <i class="icon-angle-right"></i>
                <a href="">Chỉnh sửa người dùng</a>
            </li>
        </ul>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white edit"></i><span class="break"></span>User: {{ $user->name }}</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif
                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{ session('thongbao') }}
                        </div>
                    @endif
                    @if (session('loi'))
                        <div class="alert alert-success">
                            {{ session('loi') }}
                        </div>
                    @endif
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="typeahead">Tên:</label>
                                <div class="controls">
                                    <input type="text" id="typeahead" name="name" placeholder="Nhập Tên"
                                        value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="avatar">Ảnh đại diện:</label>
                                <div class="controls">
                                    <input type="file" id="avatar" name="avatar" placeholder="Nhập Tên"><br>
                                    <img width="190px" height="170px" src="{{ URL::to('/') }}/{{ $user->avatar }}" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="control-group">
                                    <label for="changepass" class="control-label">Ấn để đổi mật khẩu</label>
                                    <input type="checkbox" name="changepass" id="changepass">
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="date01">Mật khẩu mới:</label>
                                    <div class="controls">
                                        <input type="password" name="password" placeholder="Nhập mật khẩu" disabled=""
                                            class="password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="date02">Xác nhận mật khẩu:</label>
                                    <div class="controls">
                                        <input type="password" name="passwordagain" placeholder="Nhập lại mật khẩu"
                                            disabled="" class="password">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="email">Email:</label>
                                <div class="controls">
                                    <input type="email" id="email" name="email" placeholder="Nhập Email"
                                        value="{{ $user->email }}" readonly="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="xaid">Số điện thoại:</label>
                                <div class="controls">
                                    <input type="text" id="xaid" name="phone" placeholder="Nhập Phone"
                                        value="{{ $user->phone }}">
                                </div>
                            </div>
                            <div class="control-group ">
                                <label class="control-label" for="status">Level:</label>
                                <label class="controls radio-inline">
                                    <input type="radio" name="permision" value="0" id="status" @if ($user->permision == 0) {{ 'checked' }} @endif>Admin
                                </label>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Sửa</button>
                                <button type="reset" class="btn">Hủy</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        var editor = CKEDITOR.replace('editor');
    </script> -->

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#changepass").click(function() {
                if ($(this).is(":checked")) {
                    $('.password').removeAttr('disabled');
                } else {
                    $('.password').attr('disabled', '');

                }
            });

        });
    </script>
@endsection
