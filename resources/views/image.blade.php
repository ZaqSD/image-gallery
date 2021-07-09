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
        <h1 class="text-left">
            {{ $image->title }}
        </h1>
        <h6 class="text-left">
            {{ $image->created_at }}
        </h6>
        @if($image->type == 'v')
        <video height="560" class="fullscreen-video" id="video-player" controls>
            <source src="{{ asset('storage/content/vid/' .$image->filename)}}" type="video/mp4">
            Your are using a depricated Browser.
        </video>
        <div class="row">
            <a href="/" class="col-1 btn btn-danger" onclick="playVideo()"><img src="{{asset('img/close.svg')}}" alt="close" width="16" height="16" class="icon">Close</a>
            <a href="/content/edit/{{ $image->id }}" class="col-1 btn btn-warning">
                Edit
            </a>
            <a href="/content/delete/{{ $image->id }}" class="col-1 btn btn-danger">
                Delete
            </a>
            <div class="col-2">
                <button class="col-3 btn" onclick="playVideo()"><img src="{{asset('img/bw.svg')}}" alt="backwards" width="24" height="24"></button>
                <button class="col-3 btn" onclick="playVideo()"><img src="{{asset('img/play.svg')}}" alt="Play/Pause" width="24" height="24"></button>
                <button class="col-3 btn" onclick="playVideo()"><img src="{{asset('img/fw.svg')}}" alt="forwards" width="24" height="24"></button>
            </div>
            <div class="col">
            </div>
        </div>

        @else <img src="{{ asset('storage/content/img/' .$image->filename) }}" height="480px" class="">
        @endif
    </div>
</body>

</html>
