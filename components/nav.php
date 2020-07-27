<div class="row px-4 m-0" id="nav">
    <div class="col s12 m6 my-2 logo-holder">
        <a href="#" data-target="mobile-nav" class="sidenav-trigger hide-on-large-only"><i
                class="material-icons">menu</i></a>
        <img src="images/logo.png" class="brand-logo px-2" alt="logo">
    </div>
    <div class="col s12 m6 mb-2">
        <div class="right-align mt-2 nav-contact">Need Help? Call Us <i class="material-icons text-secondary px-1">phone</i><a href="tel:011-123456789" class="bold">011-123456789</a></div>
        <br class="break" />
        <div class="nav-wrapper">
            <form class="d-flex">
                <div class="input-field flex-full-xl m-0">
                    <input id="search" type="search" class="m-0" required placeholder="Search for best deals ...">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
                <button type="submit" class="btn secondary primary-hover">Search</button>
            </form>
        </div>
    </div>
</div>
<ul class="sidenav" id="mobile-nav">
    <li><a href="/">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="#">Products</a></li>
    <li><a href="#">Rental Solution</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">Get a Quote</a></li>

</ul>
<div class="px-4 white hide-on-med-and-down mb-2">
    <nav>
        <div class="nav-wrapper primary">
            <!-- <ul class="d-flex "> -->
            <ul class="d-flex">
                <li class="center full <?php echo strpos($_SERVER['PHP_SELF'], "index.php") ? 'active' :''; ?>"><a href="/">Home</a></li>
                <li class="center full <?php echo strpos($_SERVER['PHP_SELF'], "about.php") ? 'active' :''; ?>"><a href="about.php">About Us</a></li>
                <li class="center full <?php echo strpos($_SERVER['PHP_SELF'], "product.php") ? 'active' :''; ?>"><a href="# ">Products</a></li>
                <li class="center full <?php echo strpos($_SERVER['PHP_SELF'], "product.php") ? 'active' :''; ?>"><a href="# ">Rental Solution</a></li>
                <li class="center full <?php echo strpos($_SERVER['PHP_SELF'], "product.php") ? 'active' :''; ?>"><a href="# ">Contact Us</a></li>
                <li class="center full <?php echo strpos($_SERVER['PHP_SELF'], "product.php") ? 'active' :''; ?>"><a href="# ">Get a Quote</a></li>
            </ul>
        </div>
    </nav>
</div>