<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Humanity</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="512x512" href="./assets/images/favicon/favicon-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/images/favicon/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main CSS Files -->
    <link href="./assets/css/reset.css" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">
    <link href="./assets/css/mediaqueries.css" rel="stylesheet">
</head>

<body>
    <?php include('includes/mobile-menu.php') ?>
    <?php include('includes/main-header.php') ?>
    <!-- Hero Area -->
    <section id="hero" class="container-flex d-flex">
        <div class="container pt-5 d-flex align-items-center">
            <div class="row justify-content-center">
                <h1 class="py-3">The items your organization needs</h1>
                <p>Available for direct donation.</p>
                <img class="hero-img" src="./assets/images/home/undraw_send_gift.svg">
            </div>
        </div>
    </section>
    <!-- How It works -->
    <section id="how-it-works" class="container-flex pt-5">
        <div class="container py-5">
            <h2 class="text-center"">How it works</h2>
            <div class=" row content-area col-reverse">
                <div class="col-sm-6 text-content">
                    <h3 class="position-relative">Create a Wishlist</h3>
                    <p>Create and share a public wishlist with the itmes your organization needs.
                    </p>
                </div>
                <div class="col-sm-6 d-flex justify-content-center"><img src="./assets/images/home/undraw_wishlist.svg"
                        class="main-content-img"></div>
        </div>
        <div class="row content-area">
            <div class="col-sm-6 d-flex justify-content-center"><img src="./assets/images/home/undraw_add_to_cart.svg"
                    class="main-content-img"></div>
            <div class="col-sm-6 text-content">
                <h3 class="position-relative">Donors purchase your wishlist items</h3>
                <p>Donors can view and purchase the items your organization needs directly from your wishlist.</p>
            </div>
        </div>
        <div class="row content-area col-reverse">
            <div class="col-sm-6 text-content">
                <h3 class="position-relative">Recieve Donated Items</h3>
                <p>Open Humanity directly ships the items to your organization.</p>
            </div>
            <div class="col-sm-6 d-flex justify-content-center"><img src="./assets/images/home/undraw_deliveries.svg"
                    class="main-content-img"></div>
        </div>
        </div>
    </section>
    <section id="bottom-cta" class="container-flex">
        <div class="container">
            <h2>Be the first to know</h2>
            <p>Sign up and get notified when our platform goes live</p>
            <a href="pages/sign-up.html"><button class="btn btn-lg rounded-pill primary-btn">Sign Up</button></a>
        </div>
    </section>
    <?php include('includes/footer.php') ?>
    <?php include('includes/scripts.php') ?>
</body>

</html>