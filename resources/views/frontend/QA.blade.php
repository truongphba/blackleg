@extends('frontend.layouts.layout')
@section('style')
    <style>
        .heading{
            margin-top: 30px;
        }
        .card{
            margin-bottom: 10px;
            background-color: #f2f2f2;
        }
        .btn{
            border: none;
            font-weight: bold;
            font-size: large;
            color: #ff6666;
        }
        .btn:hover, .btn:focus{
            text-decoration: none;
            color: #ff6666;
        }
        .card-body{
            margin-left: 20px;
            padding-bottom: 15px;
            padding-top: 10px;
        }
    </style>
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section">
                    <h2 class="heading">Q & A</h2>
                </div>
                <div id="accordion">
                    <ul>
                        @foreach($qa as $item)
                        <li>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$item->id}}"
                                                aria-expanded="false" aria-controls="collapse{{$item->id}}">
                                            {{$item->quest}}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse{{$item->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        {!! $item->answer !!}
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
