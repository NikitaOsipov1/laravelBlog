<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Create Post</title>
</head>
<body>

<div>
    <h1>Create a post</h1>

    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

        @endif
    <form action="/createPost/check" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
        <textarea name="post" id="post" cols="30" rows="10" class="form-control" placeholder="Create post"></textarea>
        <input type="submit" class="btn btn-success">
    </form>

</div>


</body>
</html>
