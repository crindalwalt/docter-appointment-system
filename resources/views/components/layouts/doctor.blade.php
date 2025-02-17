<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Main Container -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        <x-utils.doctor-sidebar />

        {{ $slot }}

        <x-utils.doctor-footer />

    </div>
    </div>
</body>

</html>
