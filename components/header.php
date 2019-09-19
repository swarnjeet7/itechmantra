<header class="header <?php echo empty($home) ? '' : 'header--home';  ?>">
    <div class="overlay d-none"></div>
    <?php 
        $url = $_SERVER['PHP_SELF']; 
        $urlParams = explode('/',$url);
        $lastParam = end($urlParams);
    ?>
    <a href="/" class="logo">
        <img src="img/logo.png" alt="logo" />
    </a>
    <div class="menu-icon d-none">
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
    </div>
    <nav class="header_nav">
        <ul class="header_list">
            <li><a class="link <?php echo $lastParam == 'index.php' ? 'active' : ''; ?>" href="/">Home</a></li>
            <li><a class="link <?php echo $lastParam == 'about-us.php' ? 'active' : ''; ?>" href="/about-us">About Us</a></li>
            <li><a class="link <?php echo $lastParam == 'services.php' ? 'active' : ''; ?>" href="/services">Services</a></li>
            <li><a class="link <?php echo $lastParam == 'research.php' ? 'active' : ''; ?>" href="/research">Research</a></li>
            <li><a class="link <?php echo $lastParam == 'our-work.php' ? 'active' : ''; ?>" href="/our-work">Our Work</a></li>
            <li><a class="link <?php echo $lastParam == 'press-releases.php' ? 'active' : ''; ?>" href="/press-releases">Press Releases</a></li>
            <li><a class="link <?php echo $lastParam == 'contact-us.php' ? 'active' : ''; ?>" href="/contact-us">Contact Us</a></li>
        </ul>
    </nav>
</header>
