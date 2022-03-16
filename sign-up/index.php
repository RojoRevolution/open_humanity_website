<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | Open Humanity</title>
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

<body id="signup-page">
    <?php include('../includes/mobile-menu.php') ?>
    <?php include('../includes/main-header.php') ?>
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
    <?php include('../includes/footer.php') ?>
    <?php include('../includes/scripts.php') ?>
</body>

</html>