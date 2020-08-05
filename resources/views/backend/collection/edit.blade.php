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
                    <h4 class="m-0 font-weight-bold text-primary">Create Collection</h4>
                </div>
            </div>
            <div class="card-body">
                <form id="product_form" method="post" action="{{route('backend.collections.update',$collection->id)}}">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input class="form-control" name="name" value="{{$collection->name}}" {{old('name')}} maxlength="255">
                                @error('name')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Thumbnail:</label>
                                <button type="button" id="upload_widget" class="btn btn-success">Upload files</button>
                                <div class="thumbnail mt-3">
                                    <li class="cloudinary-thumbnail active">
                                        <img style="width: 200px;height: auto;overflow:hidden;" src="{{$collection->photo}}" alt="">
                                        <a href="javascript:void(0)" class="cloudinary-delete">x</a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea id="description" class="form-control" name="description" data="{{$collection->description}}"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Status:</label>
                                <select class="form-control text-uppercase" name="status">
                                    <option value="0" style="color: red;text-transform: uppercase" {{!$collection->status ? 'selected' : ''}}>Lock</option>
                                    <option value="1" style="color: green;text-transform: uppercase" {{$collection->status ? 'selected' : ''}}>Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{route('backend.collections.index')}}"><button type="button" class="btn btn-primary text-uppercase">Back</button></a>
                        <button class="btn btn-success text-uppercase">Submit</button>
                    </div>
                    <input type="hidden" name="thumbnail" data-cloudinary-public-id="{{$collection->thumbnail}}" value="{{$collection->thumbnail}}">
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('description');
            CKEDITOR.instances['description'].setData($('#description').attr('data'));
            var myWidget = cloudinary.createUploadWidget(
                {
                    cloudName: 'truongph',
                    uploadPreset: 'au4uj3sm',
                    form: '#product_form',
                    multiple: false,
                    fieldName: 'thumbnail',
                    thumbnails: '.thumbnail',
                    thumbnailTransformation: [{width: 200, crop: 'fill'}]
                }, function (error, result) {
                    if (!error && result && result.event === "success") {
                        console.log('Done! Here is the image info: ', result.info.url);
                        $('input[name=thumbnail]').val($('input[name=thumbnail]').attr('data-cloudinary-public-id'));
                    }
                }
            );
            document.getElementById("upload_widget").addEventListener("click", function () {
                myWidget.open();
            }, false);
            $('body').on('click', '.cloudinary-delete', function () {
                $('input[name=thumbnail]').remove();
                $(this).parent().remove();
            });
        });
    </script>
@endsection
