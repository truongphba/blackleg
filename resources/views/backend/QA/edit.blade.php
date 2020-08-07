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
                    <h4 class="m-0 font-weight-bold text-primary">Edit Q&A</h4>
                </div>
            </div>
            <div class="card-body">
                <form id="product_form" method="post" action="{{route('backend.q_a_s.update',$collection->id)}}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label>Answer:</label>
                        <textarea id="answer" class="form-control" name="answer" data="{{$qa->answer}}"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Status:</label>
                                <select class="form-control text-uppercase" name="status">
                                    <option value="0" style="color: red;text-transform: uppercase" {{!$qa->status ? 'selected' : ''}}>Lock</option>
                                    <option value="1" style="color: green;text-transform: uppercase" {{$qa->status ? 'selected' : ''}}>Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{route('backend.q_a_s.index')}}"><button type="button" class="btn btn-primary text-uppercase">Back</button></a>
                        <button class="btn btn-success text-uppercase">Submit</button>
                    </div>
                    <input type="hidden" name="thumbnail" data-cloudinary-public-id="{{$qa->thumbnail}}" value="{{$qa->thumbnail}}">
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('answer');
            CKEDITOR.instances['answer'].setData($('#answer').attr('data'));
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
