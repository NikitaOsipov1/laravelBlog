<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark">

    <header class="d-flex justify-content-around align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
        <h5 class="my-0 me-md-auto fw-normal">Blog</h5>
        <a class="btn btn-warning" href="{{ url('/createPost') }}">Create Post</a>
    </header>

    <div class="d-flex flex-column " style="width: 500px;margin: 0 auto;">
        <!--<h1 class="d-flex align-self-center text-white">All posts!</h1>-->

        @foreach($posts as $el)
            <div class="card bg-info " style="margin-bottom: 25px;border-radius: 10px;">
                <h3 class="card-header">{{$el->title}}</h3>
                <b class="card-body">{{$el->post }}</b>
                <p class="card-footer ">{{$el->name}} <br>
                Posted at {{$el->created_at}}</p>
            </div>
        @endforeach
    </div>



</body>
</html>
