@extends('backend.layouts.layout')
@section('style')
    <style>
        .select-active{
            display: none;
        }
    </style>
@endsection
@section('title','Category')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category Management</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="m-0 font-weight-bold text-primary">Category List</h4>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <form method="get" action="{{route('backend.categories.index')}}">
                            <input class="form-control" name="keyword" placeholder="Search....">
                        </form>
                    </div>
                    <div class="col-md-2 text-right">
                        <button class="btn btn-outline-primary text-uppercase select-btn">Select</button>
                        <a href="{{route('backend.categories.create')}}">
                            <button class="btn btn-success text-uppercase">Add</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="select-active"></th>
                            <th class="text-center">Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Thumbnail</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr class="tr-click">
                                <td class="select-active">
                                   <div class="form-check form-group text-center pt-3">
                                       <input type="checkbox" name="selected" class="form-check-input" style="height: 20px;width: 20px">
                                   </div>
                                </td>
                                <td class="text-center">{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{!!$item->description!!}</td>
                                <td class="text-center"><img style="height: 70px;width: 100px;overflow: hidden"
                                                             src="{{$item->photo}}"></td>
                                @if($item->status)
                                    <td style="color: green" class="text-uppercase">Active</td>
                                @else
                                    <td style="color: red" class="text-uppercase">Lock</td>
                                @endif
                                <td>{{date_format($item->created_at, 'Y-m-d')}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Showing {{$list->firstItem()}} to {{$list->lastItem()}} of {{$list->total()}} entries</p>
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                            {{$list->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#dataTable tbody tr').dblclick(function () {
                window.location.href = '/admin/categories/' + $(this).children().first().text();
            });
            $('.select-btn').click(function () {
                $('.select-active').toggle();
            });
        });
    </script>
@endsection
