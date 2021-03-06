@extends('admin.layout.index')
@section('content')
    <!-- start: Content -->
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{ url('/admin/dashboard') }}">Home</a>
            </li>
            <li>
                <i class="icon-angle-right"></i>
                <a href="{{ url('/admin/QLSlide/danhsach') }}">Quản Lí Slide</a>
            </li>
        </ul>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>danh Sách Slide</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Avatar</th>
                                <th style="text-align: center">Slogan</th>
                                <th style="text-align: center">Slogan2</th>
                                <th style="text-align: center">Thứ Tự</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Hoạt Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slide as $tl)
                                <tr>
                                    <td style="text-align: center">{{ $tl->id }}</td>
                                    <td style="text-align: center"><img width="70px" height="80px"
                                            src="{{ URL::to('/') }}/{{ $tl->url }}" alt=""></td>
                                    <td style="text-align: center">{{ $tl->slogan }}</td>
                                    <td style="text-align: center">{{ $tl->slogan2 }}</td>
                                    <td style="text-align: center">{{ $tl->order }}</td>
                                    <td style="text-align: center">
                                        @if ($tl->status == 0)
                                            <p class="label label-primary">Ẩn</p>
                                        @else
                                            <p class="label label-important">Public</p>
                                        @endif

                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ url('/admin/QLSlide/edit') }}/{{ $tl->id }}"
                                            class="btn btn-success">Edit</a>
                                        <a class="btn btn-danger"
                                            href="{{ url('/admin/QLSlide/delete') }}/{{ $tl->id }}"
                                            onclick="return confirm('Bạn Muốn Xóa?');">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="{{ url('/admin/QLSlide/trash') }}" class="btn btn-danger">Thùng Rác</a>
    </div>
@endsection
