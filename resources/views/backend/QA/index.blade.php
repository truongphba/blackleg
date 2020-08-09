@extends('backend.layouts.layout')
@section('title','QA')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Q&A Management</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="m-0 font-weight-bold text-primary">Q&A List</h4>
                    </div>
                    <div class="col-md-3">
                        <form method="get" action="{{route('backend.q_a_s.index')}}">
                            <input class="form-control" name="keyword" placeholder="Search....">
                        </form>
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
                </div>
            </div>
            <div class="card-body">
                @if(count($list) > 0)
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="text-center">
                                <input type="checkbox" class="form-check" id="check-all">
                            </th>
                            <th class="text-center">Id</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td class="text-center"><input  type="checkbox" class="form-check product-checkbox" value="{{$item->id}}" name="selected[]"></td>
                                <td class="text-center">{{$item->id}}</td>
                                <td>{{$item->quest}}</td>
                                <td style="width: 50%">{{$item->answer}}</td>
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
                @else
                    <h4>Have no question and answer</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
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
                    'url': 'q_a_s/delete-selected',
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
                    'url': 'q_a_s/active-selected',
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
