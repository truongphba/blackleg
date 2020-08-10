@extends('backend.layouts.layout')

@section('title','Dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product Management</h1>
        </div>
        <div class="card shadow mb-3">
            <div class="card-header py-3">
                <form method="get" action="{{route('backend.products.index')}}" id="filter-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Search by keyword:</label>
                                <input type="text" class="form-control" name="keyword" value="{{$keyword}}" placeholder="Search....">
                                <input type="submit" style="visibility: hidden;"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Select category:</label>
                                <select name="category_id" class="form-control">
                                    <option value="0">All</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category_id == $category->id?'selected':''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Search by time:</label>
                                <input type="text" name="dates" class="form-control" autocomplete="off" value="{{isset($start) && isset($end) ? date('d/m/Y',strtotime($start)). ' - '  . date('d/m/Y',strtotime($end)) : ''}}">
                                <input type="hidden" name="start" value="{{$start}}">
                                <input type="hidden" name="end" value="{{$end}}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-7">
                        <h4 class="m-0 font-weight-bold text-primary">Product List</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="dropdown text-right">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Chose action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" id="delete-selected" href="javascript:void(0)">Delete selected</a>
                                <a class="dropdown-item" id="active-selected" href="javascript:void(0)">Active selected</a>
                                <a class="dropdown-item" id="highlight-selected" href="javascript:void(0)">Highlight selected</a>
                                <a class="dropdown-item" id="unhighlight-selected" href="javascript:void(0)">Unhighlight selected</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-right">
                        <a href="{{route('backend.products.create')}}">
                            <button class="btn btn-success text-uppercase">Add</button>
                        </a>
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
                            <th>Id</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Highlight</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td class="text-center"><input  type="checkbox" class="form-check product-checkbox" value="{{$item->id}}" name="selected[]"></td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{number_format($item->price)}}</td>
                                <td style="color: {{$item->highlight?'green':'red'}}" class="text-center text-uppercase">{{$item->highlight?'yes':'no'}}</td>
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
                    <h4>Have no product</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#dataTable tbody tr').dblclick(function () {
                window.location.href = 'products/' + $(this).children().first().next().text();
            });
            $('input[name="dates"]').daterangepicker(
                {
                    autoUpdateInput: false,
                    locale: {
                        format: 'DD/MM/YYYY'
                    },
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }
            );

            $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
                $('input[name="start"]').val(picker.startDate.format('YYYY-MM-DD'));
                $('input[name="end"]').val(picker.endDate.format('YYYY-MM-DD'));
                $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
                $('#filter-form').submit();
            });
            $('input[name="dates"]').on('cancle.daterangepicker', function (ev, picker) {
                $(this).val('');
                $('input[name="start"]').val('');
                $('input[name="end"]').val('');
            });
            $('#filter-form').change(function () {
                if($('input[name="dates"]').val() == ''){
                    $('input[name="start"]').val('');
                    $('input[name="end"]').val('');
                }
                $(this).submit();
            });

            $('#check-all').click(function () {
                $('.product-checkbox').prop('checked', $(this).prop('checked'));
            });

            $('#delete-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function(){
                    return $(this).val();
                }).get();
                if(ids.length == 0){
                    alert('Please choose at least 1 product!');
                    return;
                }
                $.ajax({
                    'url': 'products/delete-selected',
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
                    alert('Please choose at least 1 product!');
                    return;
                }
                $.ajax({
                    'url': 'products/active-selected',
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
            $('#highlight-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function(){
                    return $(this).val();
                }).get();
                if(ids.length == 0){
                    alert('Please choose at least 1 product!');
                    return;
                }
                $.ajax({
                    'url': 'products/highlight-selected',
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
            $('#unhighlight-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function(){
                    return $(this).val();
                }).get();
                if(ids.length == 0){
                    alert('Please choose at least 1 product!');
                    return;
                }
                $.ajax({
                    'url': 'products/unhighlight-selected',
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
