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
                    <h4 class="m-0 font-weight-bold text-primary">Q&A Detail</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Answer:</label>
                    <textarea disabled id="quest" class="form-control" name="quest" data="{{$qa->quest}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Question:</label>
                    <textarea disabled id="answer" class="form-control" name="answer" data="{{$qa->answer}}"></textarea>
                </div>


                <div class="form-group">
                    <label>Status:</label>
                    <h4 class="text-uppercase" style="color: {{$qa->status ? 'green' : 'red'}}">{{$qa->status ? 'Active' : 'Lock'}}</h4>
                </div>
                <div class="form-group" style="display: flex">
                    <a href="{{route('backend.QA.index')}}">
                        <button type="button" class="btn btn-primary text-uppercase mr-2">Back</button>
                    </a>
                    <a href="{{route('backend.QA.edit',$qa->id)}}">
                        <button type="button" class="btn btn-success text-uppercase mr-2">Edit</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
