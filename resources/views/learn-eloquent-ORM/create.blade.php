<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Division</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10 shadow p-4">
                <h3 class="mb-4">Add Record</h3>
                @if (Session::has('success'))
                    <p class="alert alert-info">{{ Session::get('success') }}</p>
                @endif
                <form action="{{ route('division.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label @error('name') is-invalid @enderror">Division Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="usercode" class="form-label @error('usercode') is-invalid @enderror">User Code</label>
                        <input type="number" name="usercode" id="usercode" class="form-control" value="{{ old('usercode') }}">
                        @error('usercode')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="totalstudent" class="form-label @error('totalstudent') is-invalid @enderror">Total Student</label>
                        <input type="number" name="totalstudent" id="totalstudent" class="form-control" value="{{ old('totalstudent') }}">
                        @error('totalstudent')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('division.index') }}" class="btn btn-secondary">Division List</a>
                        <button type="submit" class="btn btn-success">Add Record</button>
                    </div>
                </form>

            </div>
        </div>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
