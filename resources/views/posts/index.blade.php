<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>This is a Training Website</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Training Website or smth
              </a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('posts.create') }}>Add Post</a>
                </div>
            </div>
    </nav>

    {{-- <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                </div>
                                <div class="col-sm">
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}

    <table class="table">
        <thead class=" git">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td scope="row">{{ $post->title}}</td>
                    <td>{{ $post->body }}</td>
                    <td><a href="{{ route('posts.edit', $post->id) }}"
                        class="btn btn-primary btn-sm">Edit</a></td>
                    <td><form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form></td>
                    <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>