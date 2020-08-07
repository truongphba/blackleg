@extends('backend.layouts.layout')

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
                    <h4 class="m-0 font-weight-bold text-primary">Contact Detail</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control" name="name"value="{{$contact->name}}" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control" name="email"value="{{$contact->email}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone:</label>
                            <input class="form-control" name="phone"value="{{$contact->phone}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title:</label>
                            <input class="form-control" name="title"value="{{$contact->title}}" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Message:</label>
                    <textarea disabled id="message" class="form-control" name="message" data="{{$contact->description}}"></textarea>
                </div>

                <div class="form-group">
                    <label>Status:</label>
                    <h4 class="text-uppercase" style="color: {{$contact->status ? 'green' : 'red'}}">{{$contact->status ? 'Active' : 'Lock'}}</h4>
                </div>
                <div class="form-group" style="display: flex">
                    <a href="{{route('backend.contact.index')}}">
                        <button type="button" class="btn btn-primary text-uppercase mr-2">Back</button>
                    </a>
                    <a href="{{route('backend.contact.edit',$contact->id)}}">
                        <button type="button" class="btn btn-success text-uppercase mr-2">Edit</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

