<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Tractor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
        <header id="header">
            <a href="/" class="logo"><strong>Tractor</strong></a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>
        <nav id="menu">
            <ul class="links">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/login">Log in</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </nav>
         @yield('content')
         <footer id="footer">
            <ul class="icons">
                <li><a href="/" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>
            <div class="copyright">
                &copy; Tractor. Design: <a href="https://templated.co">TEMPLATED</a></a>.
            </div>
        </footer>
	</body>
</html>
