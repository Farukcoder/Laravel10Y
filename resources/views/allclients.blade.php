<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            nav .w-5 {
                display: none;
            }
        </style>
</head>

<body>
    <div class="container">
        <h2 class="h1 pt-2 pt-lg-0">All Client</h2>
        <a href="{{ route('add.client') }}" class="btn btn-success btn-sm mb-3">Add Client</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data->chunk(3) as $chunk)
                @foreach($chunk as $id => $client)
                    <tr>
                        <th scope="row">{{ ++$id }}</th>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->age }}</td>
                        <td>{{ $client->city }}</td>
                        <td>{{ $client->email }}</td>
                        <td>
                            <a href="{{ route('view.client', $client->id) }}" class="btn btn-info btn-sm">View</a>

                            <a href="{{ route('client.delete', $client->id) }}" class="btn btn-danger btn-sm">Delete</a>

                            <a href="{{ route('edit.client', $client->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            @endforeach

            </tbody>
        </table>
        <div class="mt-5">
            {{ $data->links('pagination::simple-bootstrap-5') }}
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
