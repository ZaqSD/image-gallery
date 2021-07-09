<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gallery</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>

    <body class="background">
        <div class="container">
            <h1 class="text-center">
                Gallery
            </h1>
            <div class="row">
                <div class="col-9">
                    <a href="/upload" type="button" class="btn btn-primary button">
                        <img class="icon" src="{{asset('img/upload.svg')}}" alt="Upload" width="24" height="24">
                        Upload
                    </a>
                    <a href="https://youtu.be/dQw4w9WgXcQ" type="button" class="btn btn-secondary button">
                        Click me if You're gay
                    </a>
                </div>
                <div class="col-3">
                    <input class="form-control form-control-lg textfield" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>
        <div class="filler-20"></div>
        <div class="gallery">
            <div class="row">
                @foreach( $images as $image )
                <div class="col-4 card imagecard ms-5" style="width: 18rem;">
                    @if($image->type == 'v')
                    <video src="{{ asset('storage/content/vid/' .$image->filename)}}"></video>
                    @else
                    <img src="{{ asset('storage/content/img/' .$image->filename) }}" class="card-img-top imageview">
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <small class="col-8 card-text text-small">
                                {{ $image->created_at }}
                            </small>
                            @if($image->type == 'v')
                            <small class="col typetag text-center"> VIDEO </small>
                            @endif
                        </div>
                        <a href="/content/{{ $image->id }}" class="card-title title">
                            <h5>{{ $image->title}}</h5>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </body>

</html>
