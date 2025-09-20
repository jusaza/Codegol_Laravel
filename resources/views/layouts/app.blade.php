<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ explode('.', Route::currentRouteName())[0] }} - CodeGol</title>
    @stack('styles')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
