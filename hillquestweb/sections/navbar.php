<nav class="navbar navbar-expand-lg navbar-light bg-light px-0 py-3">
  <div class="container-xl">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" class="h-8" alt="...">
    </a>
    <!-- Navbar toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- Nav -->
      <div class="navbar-nav mx-lg-auto">
      <!-- <a class="nav-item nav-link active" href="index.php" aria-current="page">Home</a>
    <a class="nav-item nav-link" href="./sections/product.php">Product</a>
    <a class="nav-item nav-link" href="features.php">Features</a>
    <a class="nav-item nav-link" href="pricing.php">Pricing</a> -->
    <a class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == './home.php') ? 'active' : ''; ?>" href="./home.php">Home</a>
    <a class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == './product.php') ? 'active' : ''; ?>" href="./product.php">Product</a>
    <a class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == './features.php') ? 'active' : ''; ?>" href="./features.php">Features</a>
    <a class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == './pricing.php') ? 'active' : ''; ?>" href="./pricing.php">Pricing</a>
                </div>
      </div>
      <!-- Right navigation -->
      <div class="navbar-nav ms-lg-4">
        <a class="nav-item nav-link" href="./sections/signin_form.php">Sign in</a>
      </div>
      <!-- Action -->
      <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
        <a href="./sections/signup_form.php" class="btn btn-sm btn-primary w-full w-lg-auto">
          Register
        </a>
      </div>
    </div>
  </div>
</nav>