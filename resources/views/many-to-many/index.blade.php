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
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Accessed Role Name(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userRoles as $userRole)
                            <tr>
                                <th scope="row">{{ $userRole->id }}</th>
                                <td>{{ $userRole->name }}</td>
                                <td>{{ $userRole->email }}</td>
                                <td>
                                    @foreach ($userRole->myRoles as $role)
                                        <span class="badge bg-primary">{{ $role->role_name }}</span>
                                    @endforeach
                                </td>
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
