<?php 
$pageTitle = "Contact Us | Open Humanity";
$bodyID = "contact-page";
require('../includes/head.php') 
?>
    <?php require('../includes/mobile-menu.php') ?>
    <?php require('../includes/main-header.php') ?>
    <!-- Content -->
    <section class="container-flex py-5">
        <div class="container padding-top-100">
            <h1>Want to learn more?</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <form id="contact-form" action="./mailer.php" method="post" class="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name:</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"
                                placeholder="First and Last" maxlength="250" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address:</label>
                            <input type="email" class="form-control" id="email-input"
                                aria-describedby="emailInput" placeholder="email@email.com" maxlength="250" required oninvalid="this.setCustomValidity('Enter a Valid Email Address')"
    oninput="this.setCustomValidity('')">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <select id="option" class="form-select" aria-label="Default select example" required>
                                <option selected>Choose an option</option>
                                <option value="1">I'm a nonprofit interested in becoming a beta tester</option>
                                <option value="2">I'm a vendor interested in selling on your platform.</option>
                                <option value="3"> I have website feedback</option>
                                <option value="4">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message(optional):</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="500"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md rounded-pill primary-btn">Submit</button>
                    </form>
                </div>
                <div class="col-sm">
                    <p class="card" style="max-width: 300px;">
                        <strong>Open Humanity, Inc.</strong><br>
                        6001 W Parmer Ln<br>
                        STE 370 PMB 1533<br>
                        Austin, TX 78727<br><br>
                        <a href="mailto:hello@openhumanity.com">hello@openhumanity.com</a><br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="bottom-cta" class="container-flex">
        <div class="container">
            <h2>Be the first to know</h2>
            <p>Sign up and get notified when our platform goes live</p>
            <a href="./sign-up.html"><button class="btn btn-lg rounded-pill primary-btn">Sign Up</button></a>
        </div>
    </section>
    <?php require('../includes/footer.php') ?>
    <?php require('../includes/scripts.php') ?>