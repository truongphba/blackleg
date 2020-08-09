@extends('backend.layouts.layout')

@section('title','Product Management')
@section('style')
    <style>
        .size-name {
            position: absolute;
            left: 14px;
            top: 8px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product Management</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <h4 class="m-0 font-weight-bold text-primary">Product Detail</h4>
                </div>
            </div>
            <div class="card-body">
                <form id="product_form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input maxlength="255" type="text" class="form-control" name="name"
                                       value="{{$product->name}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category:</label>
                                <select class="form-control" name="category_id" disabled>
                                    @foreach($categories as $category)
                                        <option
                                            value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : '' }}  >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price:</label>
                                <input type="text" class="form-control" name="price" value="{{$product->price}}" disabled>
                                @error('price')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Colors:</label>
                                <input maxlength="255" type="text" class="form-control" name="colors"
                                       value="{{$product->colors}}" disabled>
                                @error('colors')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Collection:</label>
                                @foreach($collections as $collection)
                                    <div class="form-check">
                                        <input class="form-check-input" name="collection[]" type="checkbox"
                                               value="{{$collection->id}}"
                                               id="collection_{{$collection->id}}" {{in_array($collection->id, $collection_ids) ? 'checked' : ''}} disabled>
                                        <label class="form-check-label" for="collection_{{$collection->id}}">
                                            {{$collection->name}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Quantity:</label>
                                <div class="form-row">
                                    @foreach($sizes as $size)
                                        @php
                                            $quantity = 0;
                                                foreach ($product_sizes as $product_size){
                                                    if ($product_size['size_id'] == $size->id){
                                                        $quantity = $product_size['quantity'];
                                                    }
                                                }
                                        @endphp
                                        <div class="form-group col-md-2">
                                            <label>{{$size->name}}:</label>
                                            <input type="number" class="form-control mb-2"
                                                   name="quantity_{{$size->id}}"
                                                   value="{{isset($quantity)?$quantity : 0}}" disabled>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea id="description" class="form-control" name="description" data="{{$product->description}}" disabled></textarea>
                    </div>
                    <div class="form-group">
                        <label>Detail:</label>
                        <textarea id="detail" class="form-control" name="detail" data="{{$product->detail}}" disabled></textarea>
                        @error('detail')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Images:</label>
                        <div class="row">
                            @foreach($images as $image)
                           <div class="col-md-2">
                               <img style="width: 100%; height: auto;border: solid 1px grey" src="{{$image}}">
                           </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <h4 class="text-uppercase" style="color: {{$category->status ? 'green' : 'red'}}">{{$product->status ? 'Active' : 'Lock'}}</h4>
                    </div>
                    <div class="form-group">
                        <a href="{{route('backend.products.index')}}"><button id="back" type="button" class="btn btn-primary text-uppercase">Back</button></a>
                        <a href="{{route('backend.products.edit',$product->id)}}"><button type="button" class="btn btn-success text-uppercase">Edit</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            CKEDITOR.config.entities_latin = false
            CKEDITOR.replace('description');
            CKEDITOR.instances['description'].setData($('#description').attr('data'));
            CKEDITOR.replace('detail');
            CKEDITOR.instances['detail'].setData($('#detail').attr('data'));
        });
    </script>
@endsection


