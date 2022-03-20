<?php 
$pageTitle = "Sign up for updates | Open Humanity";
$bodyID = "signup-page";
require('../includes/head.php') 
?>
    <?php require('../includes/mobile-menu.php') ?>
    <?php require('../includes/main-header.php') ?>
    <section id="signup-page" class="container-flex py-5">
        <div class="container py-5">
            <div class="row">
                <div class="row form-content">
                    <h1 class="pt-5">Be the first to know</h1>
                    <p>Sign up below to recieve updates about our platform, and news about when we are going live.</p>
                    <div class="col">
                        <form class="newsletter-form pt-5">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="email@email.com" required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md rounded-pill primary-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <?php require('../includes/footer.php') ?>
    <?php require('../includes/scripts.php') ?>