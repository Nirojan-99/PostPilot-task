<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostPilot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <style>
        .responsive-text {
            font-size: 82px;
            font-weight: 700;
        }

        .responsive-text2 {
            font-size: 62px;
            font-weight: 700;
        }

        @media (max-width: 600px) {

            .responsive-text,
            .responsive-text2 {
                font-size: 42px;
            }
        }

        @media (min-width: 601px) and (max-width: 992px) {

            .responsive-text,
            .responsive-text2 {
                font-size: 62px;
            }
        }

        @media (min-width: 993px) {
            .responsive-text {
                font-size: 82px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light   container">
        <a class="navbar-brand" href="#"><img src="{{URL('images/logo.png')}}" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class=" dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Resources
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">1</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">success stories</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class=" dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            company
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">1</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-lg-4 mr-xs-0">
                    <a class="nav-link" href="#">pricing</a>
                </li>
                <li class=" btn btn-light mr-lg-4 mr-xs-0 text-bold border mb-lg-0 mb-xs-3">
                    <div class="" href="#">Login</div>
                </li>
                <li class=" btn btn-warning border">
                    <div class="" href="#">Create free account</div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="jumbotron text-left " style="background-color: '#E0F8F2';">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-xs-12">
                    <h1 class="jumbotron-heading fw-bold responsive-text">Meet your
                        <span style="color: #009387;font-family: 'Covered By Your Grace';">favorite</span> new (old) marketing channel.
                    </h1>
                    <p class="lead text-muted">Remarkable results. Easier than email. Postcard marketing reinvented for modern ecommerce</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2 bg-warning border fw-bold">Try it risk free</a> <span class="fs-6 ml-3">5.0 shopify rating</span>
                    </p>
                </div>
                <div class="col-lg-4 col-xs-12 ">
                    <div class="position-relative h-100 w-100 ">
                        <img src="{{URL('images/img2.png')}}" class="position-absolute img-fluid top-0 end-0 h-100 ">
                        <img src="{{URL('images/img1.png')}}" class="position-absolute img-fluid top-0 end-0 h-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <h1 class=" mb-5">Trusted by thousands <br>
                of top DTC <span style="color: #009387;font-family: 'Covered By Your Grace';">brands.</span></h1>
            <div class="row">
                <div class="col-md-3 mb-2">
                    <img src="{{URL('images/br1.png')}}" class=" img-fluid  w-100">
                    <img src="{{URL('images/br1-logo.png')}}" class=" img-fluid  w-md-100 px-4 my-1 w-xs-50">
                </div>
                <div class="col-md-3 mb-2">
                    <img src="{{URL('images/br2.png')}}" class=" img-fluid  w-100">
                    <img src="{{URL('images/br2-logo.png')}}" class=" img-fluid  w-md-100 px-4 my-1 w-xs-50">
                </div>
                <div class="col-md-3 mb-2">
                    <img src="{{URL('images/br3.png')}}" class=" img-fluid  w-100">
                    <img src="{{URL('images/br3-logo.png')}}" class=" img-fluid  w-md-100 px-4 my-1 w-xs-50">
                </div>
                <div class="col-md-3 mb-2">
                    <img src="{{URL('images/br4.png')}}" class=" img-fluid  w-100">
                    <img src="{{URL('images/br4-logo.png')}}" class=" img-fluid  w-md-100 px-4 my-1 w-xs-50">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 jumbotron">
        <div class="container">
            <h2 class="text-center mb-5">Why use direct mail?<br>
                It <span style="color: #009387;font-family: 'Covered By Your Grace';">works</span> like crazy.</h2>

            <div class="row text-center">
                <div class="col-md-4 ">
                    <h1>28X</h1>
                    <p class="fs-1" style="font-size: 10px;">Higher response rate than email & digital</p>
                </div>
                <div class="col-md-4">
                    <img src="{{URL('images/img3.png')}}" class=" img-fluid  w-md-35 w-xs-25">
                    <p class="fs-1" style="font-size: 10px;">Your messages get read</p>

                </div>
                <div class="col-md-4">
                    <h1>17 Days</h1>
                    <p class="fs-1" style="font-size: 10px;">Lifespan of a postcard vs. seconds for email or SMS</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #FDF3EA;">
        <div class="container ">
            <h2 class="text-center responsive-text2 mb-5">PostPilot makes it a <span style="color: #009387;font-family: 'Covered By Your Grace';">cinch</span> to send personalized, profit-generating postcards.</h2>

            <div class="row w-100">
                <div class="col-md-6 col-xs-12">
                    <h1 class="w-50 fw-bold"><span style="color: #009387;font-family: 'Covered By Your Grace';">Powerful
                        </span>
                        acquisition & retention</h1>
                    <p>Send one-off or triggered campaigns to customers & prospects. Target email leads with MailMatch™.</p>
                    <div class="border position-relative rounded w-100 ">
                        <img src="{{URL('images/img5.png')}}" class="position-absolute top-0 start-50 translate-middle  ">
                        <div class="p-3 w-75 fs-5 h6">It's like Klaviyo for direct mail. The results are absolutely insane.</div>
                        <div class="row w-100 align-self-center justify-content-center p-3">
                            <p class="col-10 fw-bold fs-5 " style="color: #A89B90;">Ash Melwani, CMO</p>
                            <img class="col-2 w-50" src="{{URL('images/img4.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-0"></div>
            </div>

            <div class="row w-100 mt-5">
                <div class="col-md-6 col-xs-0"></div>
                <div class="col-md-6 col-xs-12">
                    <h1 class="w-75 fw-bold"><span style="color: #009387;font-family: 'Covered By Your Grace';">Fight back</span> against iOS updates, jacked-up CPCs & spam folders</h1>
                    <p>Deliver your message to all of your customers — for less than the cost of a click.</p>
                    <div class="border position-relative rounded w-100 ">
                        <img src="{{URL('images/img5.png')}}" class="position-absolute top-0 start-50 translate-middle  ">
                        <div class="p-3 w-100 fs-5 h6">PostPilot is our new weapon against sinking email engagement and rising PPC costs. The results and ROI have been outstanding. It’s now one of our core marketing channels to increase acquisition & LTV.</div>
                        <div class="row w-100 align-self-center justify-content-center p-3">
                            <p class="col-10 fw-bold fs-5 " style="color: #A89B90;">Leah Keith, GM</p>
                            <img class="col-2 w-50" src="{{URL('images/img6.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row w-100 mt-5">
                <div class="col-md-6 col-xs-12">
                    <h1 class="w-75 fw-bold"> Done for <span style="color: #009387;font-family: 'Covered By Your Grace';">you</span></h1>

                    <p>From design & strategy to stamp-licking, our ecom experts help you every step of the way.</p>
                    <div class="border position-relative rounded w-100 ">
                        <img src="{{URL('images/img5.png')}}" class="position-absolute top-0 start-50 translate-middle  ">
                        <div class="p-3 w-100 fs-5 h6">The team is so knowledgeable and beyond helpful. I’m blown away by their communication, detail, and attentiveness and always feel like they have our best interest in mind. Definitely worth a try.</div>
                        <div class="row w-100 align-self-center justify-content-center p-3">
                            <p class="col-10 fw-bold fs-5 " style="color: #A89B90;">Holly Davies, Marketing Director</p>
                            <img class="col-2 w-50" src="{{URL('images/img7.png')}}" alt="">
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary my-2 bg-warning border fw-bold mt-4 px-5 rounded-pill" style="color: #333;font-size: 20px;font-weight: 600;">Try it risk free</a>
                </div>
                <div class="col-md-6 col-xs-0"></div>
            </div>

        </div>

        </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container ">
            <h2 class="text-center responsive-text2 mb-5">Everything your brand needs to <br>
                <span style="color: #009387;font-family: 'Covered By Your Grace';">make your brand unforgettable</span>
            </h2>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>