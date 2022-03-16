<?php 
$pageTitle = "Wishlists for Charities | Open Humanity";
$bodyID = "home";
require('includes/head.php') 
?>
    <?php require('includes/mobile-menu.php') ?>
    <?php require('includes/main-header.php') ?>
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
    <?php require('includes/footer.php') ?>
    <?php require('includes/scripts.php') ?>