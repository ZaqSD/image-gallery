<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gallery</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body class="background">
        <div class="container">
            <h1 class="text-center">
                Upload
            </h1>
            <form id="upForm" action="/upload/file" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <input class="form-control form-control-lg textfield" type="text" placeholder="Title" id="upTitle" name="upTitle">
                </div>

                <div class="filler-20"></div>
                <div class="row">
                    <div class="col-4 card d-inline-flex imagecard w-400 ps-5 pe-5" id="upFileDiv" style="width: 18rem;">
                        <div class="custom-file">
                            <input type="file" name="file" class="form-control custom-file-input" id="upFile">
                        </div>
                    </div>
                    <div class="col-4 card imagecard h-75 w-400 ms-5">
                        <div id="upFileType" class="btn-group w-375" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="upFileType" id="upFileType-pic" value="p" autocomplete="off" checked>
                            <label class="btn btn-outline-primary button-outline" for="upFileType-pic">Picture</label>

                            <input type="radio" class="btn-check" name="upFileType" id="upFileType-vid" value="v" autocomplete="off">
                            <label class="btn btn-outline-primary button-outline" for="upFileType-vid">Video</label>
                        </div>
                    </div>
                    <div class="col-4 w-400 ms-5">
                        <button type="submit" class="btn btn-primary btn-lg button button-primary h-75 w-400">Upload</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 me-2"></div>
                    <div class="col-4 w-400 h-75 ms-2">
                        <a href="/" type="cancel" class="btn btn-danger btn-lg button button-red h-75 w-400">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </body>

</html>
<script src="{{ asset('js/app.js') }}"></script>
