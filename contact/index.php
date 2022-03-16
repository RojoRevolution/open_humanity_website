<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Open Humanity</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../assets/images/favicon/favicon-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/favicon/favicon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main CSS Files -->
    <link href="../assets/css/reset.css" rel="stylesheet">
    <link href="../assets/css/main.css" rel="stylesheet">
    <link href="../assets/css/mediaqueries.css" rel="stylesheet">
</head>

<body id="contact-page">
    <?php include('../includes/mobile-menu.php') ?>
    <?php include('../includes/main-header.php') ?>
    <!-- Content -->
    <section class="container-flex py-5">
        <div class="container padding-top-100">
            <h1>Want to learn more?</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <form class="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name:</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"
                                placeholder="First and Last" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="email@email.com" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected>Choose an option</option>
                                <option value="1">I'm a nonprofit interested in becoming a beta tester</option>
                                <option value="2">I'm a vendor interested in selling on your platform.</option>
                                <option value="3"> I have website feedback</option>
                                <option value="4">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md rounded-pill primary-btn">Submit</button>
                    </form>
                </div>
                <div class="col-sm">
                    <p class="card" style="max-width: 260px;">
                        <strong>Open Humanity, Inc.</strong><br>
                        6001 W Parmer Ln<br>
                        STE 370 PMB 1533<br>
                        Austin, TX 78727<br>
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
    <?php include('../includes/footer.php') ?>
    <?php include('../includes/scripts.php') ?>
</body>

</html>