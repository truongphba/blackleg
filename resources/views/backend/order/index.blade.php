@extends('backend.layouts.layout')

@section('title','Order')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order Management</h1>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($revenue)}} VND</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-3">
            <div class="card-header py-3">
                <form method="get" action="{{route('backend.orders.index')}}" id="filter-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Search by keyword:</label>
                                <input type="text" class="form-control" name="keyword" value="{{$keyword}}"
                                       placeholder="Search....">
                                <input type="submit" style="visibility: hidden;"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Select status:</label>
                                <select name="status" class="form-control">
                                    <option value="0">All</option>
                                    <option value="1" {{$status==1?'selected':''}}>Pending</option>
                                    <option value="2" {{$status==2?'selected':''}}>Shipping</option>
                                    <option value="3" {{$status==3?'selected':''}}>Done</option>
                                    <option value="4" {{$status==4?'selected':''}}>Canceled</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Search by time:</label>
                                <input type="text" name="dates" class="form-control" autocomplete="off"
                                       value="{{isset($start) && isset($end) ? date('d/m/Y',strtotime($start)). ' - '  . date('d/m/Y',strtotime($end)) : ''}}">
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
                        <h4 class="m-0 font-weight-bold text-primary">Order List</h4>
                    </div>
                    <div class="col-md-5">
                        <div class="dropdown text-right">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Chose action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" id="pending-selected" href="javascript:void(0)">Pending
                                    selected</a>
                                <a class="dropdown-item" id="shipping-selected" href="javascript:void(0)">Shipping
                                    selected</a>
                                <a class="dropdown-item" id="done-selected" href="javascript:void(0)">Done
                                    selected</a>
                                <a class="dropdown-item" id="cancled-selected" href="javascript:void(0)">Canceled
                                    selected</a>
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
                                <th>Id</th>
                                <th>Name</th>
                                <th>Ship Date</th>
                                <th>Ship Address</th>
                                <th>Ship Phone</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr data-target="#order_{{$item->id}}">
                                    <td class="text-center"><input type="checkbox" class="form-check product-checkbox"
                                                                   value="{{$item->id}}" name="selected[]"></td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->created_by}}</td>
                                    <td>{{$item->ship_date}}</td>
                                    <td>{{$item->ship_address}}</td>
                                    <td>{{$item->ship_phone}}</td>
                                    <td>{{number_format($item->total_price)}}</td>
                                    @if($item->status == 1)
                                        <td style="color: orange" class="text-uppercase">Pending</td>
                                    @elseif($item->status == 2)
                                        <td style="color: blue" class="text-uppercase">Shipping</td>
                                    @elseif($item->status == 3)
                                        <td style="color: green" class="text-uppercase">Done</td>
                                    @elseif($item->status == 4)
                                        <td style="color: red" class="text-uppercase">Cancled</td>
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
                    <h4>Have no order</h4>
                @endif
            </div>
        </div>
    </div>
    @foreach($list as $item)
        <div class="modal fade" id="order_{{$item->id}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px">
                <div class="modal-content" >
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Order Detail {{$item->id}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table" style="width: 100%">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($item->product as $orderDetail)
                                @php
                                    $product_name = \App\Product::where('id',$orderDetail->pivot->product_id)->pluck('name')->first();
                                    $size_name = \App\Size::where('id',$orderDetail->pivot->size_id)->pluck('name')->first();
                                @endphp
                                <tr>
                                    <td>{{$product_name}}</td>
                                    <td>{{$size_name}}</td>
                                    <td class="text-center">{{$orderDetail->pivot->quantity}}</td>
                                    <td>{{number_format($orderDetail->pivot->unit_price)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#dataTable tbody tr').dblclick(function () {
               var modal = $(this).attr('data-target')
                $(modal).modal('toggle')
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
                if ($('input[name="dates"]').val() == '') {
                    $('input[name="start"]').val('');
                    $('input[name="end"]').val('');
                }
                $(this).submit();
            });

            $('#check-all').click(function () {
                $('.product-checkbox').prop('checked', $(this).prop('checked'));
            });

            $('#pending-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function () {
                    return $(this).val();
                }).get();
                if (ids.length == 0) {
                    alert('Please choose at least 1 order!');
                    return;
                }
                $.ajax({
                    'url': 'orders/pending-selected',
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
            $('#shipping-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function () {
                    return $(this).val();
                }).get();
                if (ids.length == 0) {
                    alert('Please choose at least 1 order!');
                    return;
                }
                $.ajax({
                    'url': 'orders/shipping-selected',
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
            $('#done-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function () {
                    return $(this).val();
                }).get();
                if (ids.length == 0) {
                    alert('Please choose at least 1 order!');
                    return;
                }
                $.ajax({
                    'url': 'orders/done-selected',
                    'method': 'POST',
                    'data': {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        'ids': ids,
                    },
                    'success': function () {
                        alert('Action success');
                        location.reload();
                    },
                    'error': function (data) {
                        alert('Action fails');
                        console.log(data);
                    }
                })
            })
            $('#cancled-selected').click(function () {
                var ids = $('.product-checkbox:checked').map(function () {
                    return $(this).val();
                }).get();
                if (ids.length == 0) {
                    alert('Please choose at least 1 order!');
                    return;
                }
                $.ajax({
                    'url': 'orders/canceled-selected',
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
