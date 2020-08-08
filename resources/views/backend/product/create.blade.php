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
                    <h4 class="m-0 font-weight-bold text-primary">Create Product</h4>
                    @if (session('error'))
                        <p style="color: red">{{ session('error') }}</p>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <form id="product_form" action="{{route('backend.products.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input maxlength="255" type="text" class="form-control" name="name" value="{{old('name')}}" >
                                @error('name')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category:</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price:</label>
                                <input type="text" class="form-control" name="price" value="{{old('price')}}" >
                                @error('price')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Colors:</label>
                                <input maxlength="255" type="text" class="form-control" name="colors" value="{{old('colors')}}" >
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
                                        <input class="form-check-input" name="collection[]" type="checkbox" value="{{$collection->id}}"
                                               id="collection_{{$collection->id}}">
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
                                        <div class="form-group col-md-2">
                                            <label>{{$size->name}}:</label>
                                            <input type="number" class="form-control mb-2"
                                                   name="quantity_{{$size->id}}" value="{{old('quantity_' . $size->id)}}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea id="description" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Detail:</label>
                        <textarea id="detail" class="form-control" name="detail"></textarea>
                        @error('detail')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Images:</label>
                        <button type="button" id="upload_widget" class="btn btn-success">Upload files</button>
                        <div class="images"></div>
                    </div>
                    <div class="form-group">
                        <button id="back" type="button" class="btn btn-primary text-uppercase">Back</button>
                        <button class="btn btn-success text-uppercase">Submit</button>
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
            CKEDITOR.replace('detail');

            var myWidget = cloudinary.createUploadWidget(
                {
                    cloudName: 'truongph',
                    uploadPreset: 'au4uj3sm',
                    form: '#product_form',
                    multiple: true,
                    fieldName: 'images[]',
                    thumbnails: '.images',
                    thumbnailTransformation: [{width: 200, height: 200, crop: 'fill'}]
                }, function (error, result) {
                    if (!error && result && result.event === "success") {
                        console.log('Done! Here is the image info: ', result.info.url);
                        var arrayThumnailInputs = document.querySelectorAll('input[name="images[]"]');
                        for (let i = 0; i < arrayThumnailInputs.length; i++) {
                            arrayThumnailInputs[i].value = arrayThumnailInputs[i].getAttribute('data-cloudinary-public-id');
                        }
                    }
                }
            );

            document.getElementById("upload_widget").addEventListener("click", function () {
                myWidget.open();
            }, false);

            $('body').on('click', '.cloudinary-delete', function () {
                var splittedImg = $(this).parent().find('img').attr('src').split('/');
                var imgName = splittedImg[splittedImg.length - 1];
                imgName = imgName.replace('.jpg', '');
                $('input[data-cloudinary-public-id="' + imgName + '"]').remove();
            });
        });
    </script>
@endsection
