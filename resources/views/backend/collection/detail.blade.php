@extends('backend.layouts.layout')

@section('title','Collection')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Collection Management</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <h4 class="m-0 font-weight-bold text-primary">Collection Detail</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control" name="name"value="{{$collection->name}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Thumbnail:</label>
                    <div>
                        <img style="width: 300px; height: auto" src="{{$collection->photo}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea disabled id="description" class="form-control" name="description" data="{{$collection->description}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Status:</label>
                    <h4 class="text-uppercase" style="color: {{$collection->status ? 'green' : 'red'}}">{{$collection->status ? 'Active' : 'Lock'}}</h4>
                </div>
                <div class="form-group" style="display: flex">
                    <a href="{{route('backend.collections.index')}}">
                        <button type="button" class="btn btn-primary text-uppercase mr-2">Back</button>
                    </a>
                    <a href="{{route('backend.collections.edit',$collection->id)}}">
                        <button type="button" class="btn btn-success text-uppercase mr-2">Edit</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('description');
            CKEDITOR.instances['description'].setData($('#description').attr('data'));
        });
    </script>
@endsection
