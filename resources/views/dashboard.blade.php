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


    <x-app-layout>
        <x-slot name="header" >
            <div class="d-flex justify-around  align-items-center" >
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Blog') }}
                </h2>
                <a class="btn btn-warning" style="margin-right: 40px;" href="{{ url('/createPost') }}">Create Post</a>
            </div>
        </x-slot>
        <!--<div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <x-jet-welcome />

                </div>
            </div>
        </div>-->
        <div class="d-flex flex-column " style="width: 500px;margin: 15px auto;">
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
    </x-app-layout>






</body>
</html>


