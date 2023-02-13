<!DOCTYPE html>
<html lang="en">

<head>
    <title>Msingi School Academy | Register</title>
    <meta charset="utf-8">
    <!--Favicon-->
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/image-assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/image-assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/image-assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!--Tell IE to use latest rendering engine-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Set page width to size of the device and zoom level to 1-->
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--CSS Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!---Google Font-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <!--header/navigation-->
    <div id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="image-assets/logo.jpeg" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" style="color: #ffffff; " href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffff;" href="programs.html">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffff;" href="about-us.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffff;" href="events.html">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: #ffffff;" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End of navigation-->
    </div>
    <section id="registration">
        <div class="banner-overlay justified-content-center">
            <img class="w-100 img-fluid" alt="" src="image-assets/about-us-banner.jpg">
            <h2>CONTACT US</h2>
        </div>
    </section>
    <div id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="col-md-12 my-auto">
                        <p class="p1 vision-statement">If you are looking for a school where your child will be happy,
                            healthy, and successful, look no further than The Msingi School Academy. Contact us today to
                            learn more and schedule a tour of our facilities. We can't wait to meet you and your little
                            one!</p>
                    </div>
                    <div class="border-top border-danger w-50 mx-auto my-4"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form mt-3">
                        <form class="mt-3" name="contact-us-form" method="post">
                            <div class="form-floating my-3 mx-3">
                                <input id="floatingInput" class="form-control w-75" type="text" name="client-name"
                                    required placeholder="Name">
                                <label for="floatingInput" class="label">Name</label>
                            </div>
                            <div class="form-floating mb-3 mx-3">
                                <input id="floatingInput" class="form-control w-75" type="text" name="email" required
                                    placeholder="E-Mail">
                                <label for="floatingInput" class="label">E-Mail</label>
                            </div>
                            <div class="form-floating mb-3 mx-3">
                                <input id="floatingInput" class="form-control w-75" type="text" name="subject" required
                                    placeholder="Subject">
                                <label for="floatingInput" class="label">Subject</label>
                            </div>
                            <div class="form-floating mb-3 mx-3">
                                <textarea id="floatingTextArea" class="form-control w-75" style="height: 6rem;"
                                    placeholder="Leave a message" name="message" required></textarea>
                                <label for="floatingTextArea" class="label">Message</label>
                            </div>
                            <input class="msingi-btn mb-3 mx-3" type="submit" value="submit" name="send">
                        </form>
                        <?php
                        if (isset($_POST['send'])) { //check if textfields have been filled
                        
                            //store them in variables
                            $name = $_POST['client-name'];
                            $mailFrom = $_POST['email'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];

                            //arguments for mail function
                        
                            $mailTo = "info@themsingiacademy.co.ke";
                            $header = "From: " . $mailFrom;
                            $text = "An e-mail has been sent to you from " . $name . ".\n\n" . $message;

                            mail($mailTo, $subject, $text, $header);

                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
Your message has been received, thank you for getting in touch.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d416.25528414775164!2d34.787427000332265!3d-0.05259542873672621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2ske!4v1625757050258!5m2!1sen!2ske"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading=""></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer class="page-footer bg-dark my-0">
        <div class="container-fluid text-md-left my-0">
            <div class="row py-4 d-flex">
                <div class="col-md-4 mx-auto mb-4">
                    <h3 class="text-uppercase font-weight-bold">THE MSINGI SCHOOL ACADEMY</h3>
                    <hr class="bg-succes mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; height: 2px;">
                    <p>TUNAJENGA MSINGI IMARA</p>
                    <div class="socials">
                        <a href="https://www.facebook.com/themsingischoolacademy" class="mx-1" target="_FB"
                            rel="noreferrer, noopener"><i class="fa fa-facebook mr-4" aria-hidden="true"
                                style="font-size: 2rem;"></i></a>
                        <a href="https://www.instagram.com/themsingischoolacademy_/" class="mx-1" target="_IG"
                            rel="norefereer, noopener"><i class="fa fa-instagram mr-4" aria-hidden="true"
                                style="font-size: 2rem;"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mx-auto mb-4">
                    <h3 class="text-uppercase font-weight-bold">QUICK LINKS</h3>
                    <hr class="bg-succes mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; height: 2px;">
                    <ul class="list-unstyled">
                        <li class="my-2"><a href="index.html">HOME</a></li>
                        <li class="my-2"><a href="programs.html">PROGRAMS</a></li>
                        <li class="my-2"><a href="events.html">EVENTS</a></li>
                        <li class="my-2"><a href="about-us.html">ABOUT US</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mx-auto mb-4">
                    <h3 class="text-uppercase font-weight-bold">CONTACT US</h3>
                    <hr class="bg-succes mb-4 mt-0 d-inline-block mx-auto" style="width: 150px; height: 2px;">
                    <ul class="list-unstyled">
                        <li class="my-2"><i class="fa fa-map-marker" aria-hidden="true"><span class="mx-2">MAMBOLEO,
                                    KISUMU KENYA</span></i></li>
                        <li class="my-2"><i class="fa fa-phone" aria-hidden="true"><a href="tel:{+254722620416}"
                                    class="mx-2">+254722620416</a></i></li>
                        <li class="my-2"><i class="fa fa-envelope" aria-hidden="true"><a
                                    href="mailto:{info@themsingiacademy.co.ke}"
                                    class="mx-2">info@themsingiacademy.co.ke</a></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid my-0 mx-0">
            <div class="row-fluid">
                <div class="col-md-12 text-center">
                    <p class="my-0 pt-0 mx-auto">&copy;
                        <script>document.write(new Date().getUTCFullYear());</script> The Msingi School Academy.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-copyright my-0 mx-0">
            <div class="row-fluid">
                <div class="col-md-12 d-flex justify-content-end">
                    <p class="my-0 pt-0 mx-auto p2">Made by <a href="https://borisochieng.dev"
                            style="text-decoration: underline;" target="_BORIS" rel="noreferrer, noopener">boris</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, Bootstrap bundle with Popper and Fontawesome last -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/42a81cfb83.js" crossorigin="anonymous"></script>
</body>

</html>