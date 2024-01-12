<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="{{ route('update.client', $data->id) }}" method="post" class="row g-3 needs-validation">
                    @csrf
                    @method('PUT')
                    <h2>Update Client</h2>
                    <div class="mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-alexa"></i>@Name</span>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $data->name }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@Email</span>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@City</span>
                            <input type="text" class="form-control" id="city" name="city" value="{{ $data->city }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@Age</span>
                            <input type="text" class="form-control" id="age" name="age" value="{{ $data->age }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@Phone</span>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@Password</span>
                            <input type="text" class="form-control" id="password" name="password" value="{{ $data->password }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-warning" type="submit">update form</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
