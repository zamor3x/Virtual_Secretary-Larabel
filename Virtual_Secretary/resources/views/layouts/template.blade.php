<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tienda de Saprissa </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-5">

            <div class="brand-logo">
                <a href="#!">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Escudo_del_Deportivo_Saprissa.png" style="height: 160px; width:200px;
">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><h4><a class="nav-link active" aria-current="page" href="#!">Home</a></h4></li>
                    <li class="nav-item"><h4><a class="nav-link" href="#features">Shop</a></h4></li>
                    <li class="nav-item"><h4><a class="nav-link" href="#contactForm" data-bs-toggle="modal" data-bs-target=>Contact Us</a></h4></li>
                </ul>
            </div>

        </div>
    </nav>
 <!-- Responsive navbar/header -->
 <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-purple rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Welcome to the site of the biggest team of central america!</h1>
                        <p class="fs-4">If you would like to buy tickets, mechandize or contact us, please use our inline assitant </p>
                        <img class="assistant" src="https://i.ibb.co/j53qBRq/pngwing-com-2.png" style="height: 160px; width:200px;
">
                    </div>
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal{{$service->id}}">
                            Start
                        </a>
                </div>
            </div>
            @yield('content')
        </header>



    <!-- Contact section-->
    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h2 class="fw-bolder">Contact Us</h2>
                <p class="lead mb-0">We'd love to hear from you</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-6 mx-auto">

                        <a class="btn btn-dark btn-m" href="#!">
                        <i class="bi bi-facebook"></i>
                        </a>

                        <a class="btn btn-dark btn-m" href="#!">
                        <i class="bi bi-whatsapp"></i>
                        </a>

                        <a class="btn btn-dark btn-m" href="#!">
                        <i class="bi bi-envelope"></i>
                        </a>
                        </div>
                </div>
        </div>
    </section>

                        <!-- Modal - Contact Form-->
    <div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="contactFormLabel." aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
  <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>

                            <div class="col-sm-6 mx-auto">
                                        <p>Or use: </p>
                            <a class="btn btn-dark btn-m" href="#!">
                            <i class="bi bi-facebook"></i>
                            </a>

                            <a class="btn btn-dark btn-m" href="#!">
                            <i class="bi bi-whatsapp"></i>
                            </a>
                            </div>
                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  </div>
</div>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright &copy </p>
            <p class="m-1 text-center text-white">Desgined </p>
        </div>
    </footer>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
