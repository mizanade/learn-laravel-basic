<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mx-auto">
        <h1>
            ini blog mizan
            <a class="btn btn-success" href="{{url("posts/create")}}">+Buat Postingan</a>
        </h1>
        @foreach ($posts as $post)
        @php($post = explode(",", $post))
        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post[1] }}</h5>
                <p class="card-text">{{ $post[2] }}</p>
                <p class="card-text"><small class="text-muted">{{ date('d M Y H:i', strtotime($post[3])) }}</small></p>
                <a href="{{ url("posts/$post[0]") }}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>