<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}
.bgimg {
  background-color:blueviolet;
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}
.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}
.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
hr {
  margin: auto;
  width: 40%;
}
.header , .footer {
    background-color: burlywood;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}
</style>
<head>
  <title>MY website - @yield('title')</title>
</head>
<body>
    <header class="header">
        <p>my site header</p> 
    </header>

        <div class="bgimg">
        
        @yield('content')
        
        </div>
    <footer class="footer">
        <p>my site footer</p>
    </footer>
</body>
</html>