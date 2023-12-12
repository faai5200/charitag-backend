<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your custom styles if needed -->
    <style>
        a{
            color: white !important;
        }

        .sidebar{
            height: 100vh;
        }
    </style>
</head>
<body>

<!-- Top Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a  class="navbar-brand" href="#">SuperAdmin Dashboard</a>
        <!-- Add your top navigation items or user profile here -->
    </div>
</nav>

<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar pt-3 sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <!-- Add your sidebar menu items here -->
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('admin.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('admin.charities') }}">
                            Charities
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('admin.campaigns') }}">
                            Campaigns
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('admin.corporations') }}">
                            Corporations
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('admin.all_users') }}">
                            All Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('admin.settings') }}">
                            Account Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ route('admin.logout') }}">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
            @yield('content') <!-- This is where your specific page content will be injected -->
        </main>
    </div>
</div>

<!-- Main Content Area -->


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
