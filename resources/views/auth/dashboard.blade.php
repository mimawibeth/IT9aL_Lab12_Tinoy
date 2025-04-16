<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab12 | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-5" style="width: 100%; max-width: 800px;">

            <h1 class="mb-4 text-center">IT9aL Laboratory 12</h1>
            <h3 class="text-center mb-4">Welcome, {{ auth()->user()->name }}!</h3>

            <div class="mb-4">
                <p class="text-center">You are logged in as: <strong>{{ auth()->user()->email }}</strong></p>
            </div>

            <div class="text-center mt-4">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
