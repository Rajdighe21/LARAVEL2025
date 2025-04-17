<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One To Many Relation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10 shadow p-4">
                <h3 class="mb-4">Post List</h3>
                @if (Session::has('success'))
                    <p class="alert alert-info">{{ Session::get('success') }}</p>
                @endif
                <a href="{{ route('division.create') }}" class="btn btn-sm btn-success mb-2">Add New </a>
                <table class="table table-striped table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Post Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Like</th>
                            <th scope="col">Dislike</th>
                            <th scope="col">Post Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row"> {{ $post->id }}</th>
                               <td>{{ $post->post_name }}</td>
                                <td>{{ $post->myUser->name ?? 'NA' }}</td>
                                <td>{{ $post->myUser->email ?? 'NA' }}</td>

                                <td>{{ $post->like }}</td>
                                <td>{{ $post->dislike }}</td>
                                <td>{{ $post->created_at->format('Y-m-d') }}</td>

                              {{--  <td>
                                    <div class="d-flex justify-content-center gap-2">

                                        <a href="{{ route('division.show', $class->id) }}"
                                            class="btn btn-sm btn-primary">view</a>

                                        <form action="{{ route('division.destroy', $class->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Destroy</button>
                                        </form>
                                        <a href="{{ route('division.edit', $class->id) }}"
                                            class="btn btn-sm btn-warning">Update</a>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Optional: Pagination --}}
                <div class=" mt-4">
                    {{-- {{ $divisions->links('pagination::bootstrap-5') }} --}}
                </div>
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
