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
                    <h4 class="m-0 font-weight-bold text-primary">Create Product</h4>
                </div>
            </div>
            <div class="card-body">
                <button id="upload_widget" class="cloudinary-button">Upload files</button>
            </div>
        </div>
    </div>

    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>

    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'my_cloud_name',
                uploadPreset: 'my_preset'}, (error, result) => {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info);
                }
            }
        )

        document.getElementById("upload_widget").addEventListener("click", function(){
            myWidget.open();
        }, false);
    </script>
@endsection

