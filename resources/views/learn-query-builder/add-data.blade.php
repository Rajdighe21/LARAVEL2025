<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add State</title>
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
                <form action="{{ route('storeStates') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">State Name</label>
                        <input type="text" name="name" class="form-control" value="" required>
                    </div>

                    <div class="mb-3">
                        <label for="number" class="form-label">Pin Code</label>
                        <input type="number" name="pincode" class="form-control" value="" value="#"
                            required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('showState') }}" class="btn btn-secondary">State List</a>
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
