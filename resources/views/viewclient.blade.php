<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <table>
            <h2 class="h1 pt-2 pt-lg-0">Client Info</h2>
        <p class="fs-lg pb-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5">Name: {{ $data->name }}</p>
        <p>Age: {{ $data->age }}</p>
        <p>City: {{ $data->city }}</p>
        <p>Phone: {{ $data->phone }}</p>
        <p>Email: {{ $data->email }}</p>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
