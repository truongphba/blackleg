@extends('backend.layouts.layout')

@section('title','Category')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category Management</h1>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <h4 class="m-0 font-weight-bold text-primary">Create Category</h4>
                </div>
            </div>
            <div class="card-body">
                <form id="product_form" method="post" action="{{route('backend.categories.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <input class="form-control" name="name" {{old('name')}} maxlength="255">
                                @error('name')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Thumbnail:</label>
                                <button type="button" id="upload_widget" class="btn btn-success">Upload files</button>
                                <div class="thumbnail"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea id="description" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <a href="{{route('backend.categories.index')}}"><button type="button" class="btn btn-primary text-uppercase">Back</button></a>
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
            CKEDITOR.replace('description');
            CKEDITOR.replace('detail');

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
            });
        });
    </script>
@endsection
