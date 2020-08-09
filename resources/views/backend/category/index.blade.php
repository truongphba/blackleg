@extends('backend.layouts.layout')
@section('style')
    <style>
        .select-active {
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
                    <div class="col-md-7">
                        <h4 class="m-0 font-weight-bold text-primary">Category List</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="dropdown text-right">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Chose action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" id="delete-selected" href="javascript:void(0)">Delete selected</a>
                                <a class="dropdown-item" id="active-selected" href="javascript:void(0)">Active selected</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-right">
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
                            <th class="text-center">
                                <input type="checkbox" class="form-check" id="check-all">
                            </th>
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
                            <tr>
                                <td class="text-center"><input  type="checkbox" class="form-check product-checkbox" value="{{$item->id}}" name="selected[]"></td>
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
                window.location.href = 'categories/' + $(this).children().first().next().text();
            });
            $('#check-all').click(function () {
                $('.product-checkbox').prop('checked', $(this).prop('checked'));
            });

            $('#delete-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function(){
                    return $(this).val();
                }).get();
                if(ids.length == 0){
                    alert('Please choose at least 1 category!');
                    return;
                }
                $.ajax({
                    'url': 'categories/delete-selected',
                    'method': 'POST',
                    'data': {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        'ids': ids,
                    },
                    'success': function () {

                        alert('Action success');
                        location.reload();
                    },
                    'error': function () {
                        alert('Action fails');
                    }
                })
            })
            $('#active-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function(){
                    return $(this).val();
                }).get();
                if(ids.length == 0){
                    alert('Please choose at least 1 category!');
                    return;
                }
                $.ajax({
                    'url': 'categories/active-selected',
                    'method': 'POST',
                    'data': {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        'ids': ids,
                    },
                    'success': function () {
                        alert('Action success');
                        location.reload();
                    },
                    'error': function () {
                        alert('Action fails');
                    }
                })
            })
        });
    </script>
@endsection
