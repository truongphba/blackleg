@extends('backend.layouts.layout')
@section('style')
    <style>
        .select-active {
            display: none;
        }
    </style>
@endsection
@section('title','Contact')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Contact Management</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="m-0 font-weight-bold text-primary">Contact List</h4>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <form method="get" action="{{route('backend.contacts.index')}}">
                            <input class="form-control" name="keyword" placeholder="Search....">
                        </form>
                    </div>

                </div>
            </div>
            <div class="card-body">
                @if(count($list) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Title</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($list as $item)
                                <tr class="tr-click">
                                    <td class="text-center">{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->message}}</td>
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
                    <h4>Have no contact</h4>
                @endif
            </div>
        </div>
    </div>
@endsection

