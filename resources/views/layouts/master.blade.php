<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="/css/style.css">
<head>
  <title>MY website - @yield('title')</title>
</head>
<body>
    <header class="header">
    <img src="/images/gearss.jpg"  width="1345" height="150">
    </header>

        <div class="bgimg">
        
        @yield('content')
        
        </div>
    <footer class="footer">
        <p>my site footer</p>
    </footer>
</body>
</html>