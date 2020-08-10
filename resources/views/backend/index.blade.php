@extends('backend.layouts.layout')

@section('title','Dashboard')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <div class="card shadow mb-3">
            <div class="card-header py-3">
                <form method="get" action="{{route('backend.index')}}" id="filter-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Search earnings by time:</label>
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
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{route('backend.orders.index')}}">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{number_format($revenue)}}VND
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{route('backend.orders.index')}}">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending
                                        Requests
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pending}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{route('backend.orders.index')}}">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total canceled orders</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$canceled}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-strikethrough fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
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
    </script>
@endsection
