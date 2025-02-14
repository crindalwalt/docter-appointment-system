<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedAdmin - Doctor's Appointment System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("admin-assets/css/app.css") }}">
</head>
<body>

    <x-utils.admin-sidebar />
    <x-utils.admin-header />

        {{ $slot }}
    <script>
        // Add click handlers for navigation items
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('.nav-item.active').classList.remove('active');
                this.classList.add('active');
            });
        });

        // Add click handlers for edit and delete icons
        document.querySelectorAll('.fa-edit').forEach(icon => {
            icon.addEventListener('click', function() {
                alert('Edit functionality to be implemented');
            });
        });

        document.querySelectorAll('.fa-trash').forEach(icon => {
            icon.addEventListener('click', function() {
                if(confirm('Are you sure you want to delete this appointment?')) {
                    alert('Delete functionality to be implemented');
                }
            });
        });

        // Add click handler for new appointment button
        document.querySelector('.btn-primary').addEventListener('click', function() {
            alert('New appointment form to be implemented');
        });
    </script>
</body>
</html>
