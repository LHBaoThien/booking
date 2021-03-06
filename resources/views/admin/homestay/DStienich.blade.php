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
                <a href="{{ url('/admin/homestay/ListHT') }}">Danh sách khách sạn</a>
            </li>
            <li>
                <i class="icon-angle-right"></i>
                <a href="{{ url('/admin/homestay/DStienich') }}">Danh Sách Tiện Ích</a>
            </li>
        </ul>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>Danh Sách Tiện Ích</h2>
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
                                <th style="text-align: center">Tên</th>
                                <th style="text-align: center">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DStienich as $tl)
                                <tr>
                                    <td style="text-align: center">{{ $tl->id }}</td>
                                    <td style="text-align: center">{{ $tl->name }}</td>
                                    <td style="text-align: center">
                                        @if ($tl->status == 1)
                                            <p class="label label-important">Public</p>
                                        @else
                                            <p class="label label-primary">Ẩn</p>
                                        @endif
                                    </td>
                                    <td style="text-align: center">
                                        <a href="{{ url('/admin/homestay/editTI') }}/{{ $tl->id }}"
                                            class="btn btn-success">Edit</a>
                                        <a class="btn btn-primary"
                                            href="{{ url('/admin/homestay/xoaTI') }}/{{ $tl->id }}"
                                            onclick="return confirm('Bạn Muốn Xóa?');">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <a class="btn btn-primary" href="{{ url('/admin/homestay/tienich') }}">Thêm Tiện Ích</a>

    </div>
@endsection
