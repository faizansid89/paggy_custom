@extends('layouts.dashboard')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="page-title">
                <h4>{{ $section->heading }}</h4>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">{{ $section->title }}</li>
                </ul>
            </div>
            @if((in_array('create-role', getUserPermissions())))
            <div class="page-btn">
                <a href="{{ route('role.create') }}" class="btn btn-added"><img src="{{ asset('assets/img/icons/plus.svg') }}" class="me-2" alt="img"> Add New {{ $section->heading }}</a>
            </div>
                @endif
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
{{--                        <div class="search-path">--}}
{{--                            <a class="btn btn-filter" id="filter_search">--}}
{{--                                <img src="{{ asset('assets/img/icons/filter.svg') }}" alt="img">--}}
{{--                                <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img"></span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg') }}" alt="img"></a>
                        </div>
                    </div>
{{--                    <div class="wordset">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ asset('assets/img/icons/printer.svg') }}" alt="img"></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>


                <div class="row">
            <div class="col-sm-12">

                <!-- main alert @s -->
                @include('partials.alerts')
                <!-- main alert @e -->

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if( $role )
                                    @foreach( $role as $roles )
                                        <tr id="rowID-{{ $roles->id }}">
                                            <td>{{$roles->id }}</td>
                                            <td>{{$roles->name}}</td>
                                            <td>{!!($roles->status == 0) ? '<span class="badges bg-lightred">Inactive</span>' : '<span class="badges bg-lightgreen">Active</span>'!!}</td>
                                            <td>
                                                @if((in_array('update-role', getUserPermissions())))
                                                <a  type="button" class="btn btn-danger" href="{{ route("role.edit", $roles->id) }}" style="color: #ffffff;">Edit</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
@endsection
