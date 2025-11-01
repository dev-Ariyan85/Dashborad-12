<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Admin Layout</h1>
    </header>
    <main>
        {{-- Important: This is the main content area --}}
        
        @yield('content')
    </main>
    <footer>
        <p>Footer content here</p>
    </footer>
</body>
</html>