<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">
    <!-- Main Container -->
    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- Header -->
            @include('layouts.partials.header')

            <!-- Dashboard Content -->
            <main class="flex-1 overflow-y-auto p-6">

                @yield('content')

            </main>
        </div>
    </div>

    <script>
        // Add simple interactivity (optional)
        document.addEventListener('DOMContentLoaded', function() {
            // Update time every second
            function updateTime() {
                const now = new Date();
                const timeElement = document.querySelector('header p.text-xs.text-gray-600');
                if (timeElement) {
                    const hours = String(now.getUTCHours()).padStart(2, '0');
                    const minutes = String(now.getUTCMinutes()).padStart(2, '0');
                    const seconds = String(now.getUTCSeconds()).padStart(2, '0');
                    timeElement.textContent = `${hours}:${minutes}:${seconds} UTC`;
                }
            }
            setInterval(updateTime, 1000);
        });
    </script>
</body>

</html>
