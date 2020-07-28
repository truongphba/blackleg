@extends('backend.layouts.layout')

@section('title','Dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product Management</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-2">
                        <h4 class="m-0 font-weight-bold text-primary">Product List</h4>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-2">
                        <form method="get" action="{{route('backend.products.index')}}">
                            <input class="form-control" name="keyword" placeholder="Search....">
                        </form>
                    </div>
                    <div class="col-md-2 text-right">
                       <a href="{{route('backend.products.create')}}"> <button class="btn btn-success text-uppercase">Add</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{number_format($item->price)}}</td>
                                @if($item->status)
                                    <td style="color: green" class="text-uppercase">Active</td>
                                @else
                                    <td style="color: red" class="text-uppercase">Deactive</td>
                                @endif
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

