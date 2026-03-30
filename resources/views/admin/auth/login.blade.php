<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Codescandy">

    <title>Login</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/images/favicon/favicon-32x32.png') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/simplebar.min.css') }}">

    <!-- Sidebar Script -->
    <script>
        if (localStorage.getItem('sidebarExpanded') === 'false') {
            document.documentElement.classList.add('collapsed');
        } else {
            document.documentElement.classList.add('expanded');
        }
    </script>
</head>

<body>

    <main class="d-flex flex-column justify-content-center vh-100">

        <section>
            <div class="container">

                <!-- Header -->
                <div class="row mb-5">
                    <div class="col-md-6 offset-md-3 text-center">
                        <h1>Welcome Back</h1>
                        <p>
                            Don’t have an account?
                            <a href="#">Register here</a>
                        </p>
                    </div>
                </div>

                <!-- Form -->
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card p-4">

                            <form method="POST" action="{{ route('authLoin') }}">
                                @csrf

                                <!-- Email -->
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label>Password</label>
                                    <div class="position-relative">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                                <!-- Remember -->
                                <div class="mb-3 d-flex justify-content-between">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember me
                                    </label>

                                    <a href="#">
                                        Forgot Password?
                                    </a>
                                </div>

                                <!-- Submit -->
                                <button class="btn btn-primary w-100">
                                    Sign In
                                </button>

                            </form>

                            <!-- Social -->
                            <div class="mt-4 text-center">
                                <p>Or login with</p>

                                <div class="d-flex gap-2">
                                    <button class="btn btn-danger w-50">Google</button>
                                    <button class="btn btn-primary w-50">Facebook</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- JS -->
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>