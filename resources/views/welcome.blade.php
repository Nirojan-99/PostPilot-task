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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

        .scrolling-wrapper {
            display: flex;
            overflow-x: auto;
            overflow-y: hidden;
            overflow-x: hidden;
        }

        .box {
            flex: 0 0 24%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            margin: 5px;
        }

        .image-container {
            display: flex;
            justify-content: space-around;
        }

        .image-container img {
            width: 100px;
            height: auto;
            cursor: pointer;
            border-bottom: 5px solid transparent;
        }

        .image-container img.selected {
            border-bottom: 2px solid green;
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

            <div class="row justify-content-center g-2 w-100">
                <div class="col-md-4 mb-2 row  rounded " style="background-color: #FDF3EA;">
                    <img src="{{URL('images/img11.png')}}" class=" img-fluid  w-75 m-auto col-12" style="width: 50%;">
                    <div class="mb-4 col-12"></div>
                    <div class="text-center h4 m-auto w-75 col-12">Plug-and-play with your stack</div>
                    <div class="mb-4 col-12"></div>
                    <div class="text-center m-auto w-75 col-12">Native integrations provide seamless segmentation, automation & tracking. No clunky spreadsheets.</div>
                </div>
                <div class="col-md-4 mb-2 row  rounded " style="background-color: #E0F8F2;">
                    <img src="{{URL('images/img12.png')}}" class=" img-fluid  w-75 m-auto col-12" style="width: 50%;">
                    <div class="mb-4 col-12"></div>
                    <div class="text-center h4 m-auto w-75 col-12">Run campaigns on autopilot</div>
                    <div class="mb-4 col-12"></div>
                    <div class="text-center m-auto w-75 col-12">Ink profits while you sleep: Just set it and forget it.</div>
                </div>
                <div class="col-md-4 mb-2 row  rounded " style="background-color: #E0F8F2;">
                    <img src="{{URL('images/img13.png')}}" class=" img-fluid  w-75 m-auto col-12" style="width: 50%;">
                    <div class="mb-4 col-12"></div>
                    <div class="text-center h4 m-auto w-75 col-12">Real-time ROI dashboard</div>
                    <div class="mb-4 col-12"></div>
                    <div class="text-center m-auto w-75 col-12">Track performance of every postcard by customer or discount code. Your CFO will love it.</div>
                </div>

            </div>
            <div class="row justify-content-center g-2 text-center">
                <div class="col-md-4 mb-2 row  rounded " style="background-color: #D9F2F7;">
                    <img src="{{URL('images/img14.png')}}" class=" img-fluid  w-75 m-auto col-12" style="width: 50%;">
                    <div class="mb-4 col-12"></div>
                    <div class="text-center h4 m-auto w-75 col-12">Deliver WOW with *real* handwritten cards</div>
                    <div class="mb-4 col-12"></div>
                    <div class="text-center m-auto w-75 col-12"> Our proprietary robots use real pens and ink for an unforgettable VIP touch.</div>
                </div>
                <div class="col-md-4 mb-2 row  rounded " style="background-color: #FAEDED;">
                    <img src="{{URL('images/img15.png')}}" class=" img-fluid  w-75 m-auto col-12" style="width: 50%;">
                    <div class="mb-4 col-12"></div>
                    <div class="text-center h4 m-auto w-75 col-12">Predictable pricing</div>
                    <div class="mb-4 col-12"></div>
                    <div class="text-center m-auto w-75 col-12">Ink profits while you sleep: Just set it and forget it.</div>
                </div>
                <div class="col-md-4 mb-2 row  rounded " style="background-color: #F1F1F1;">
                    <img src="{{URL('images/img16.png')}}" class=" img-fluid  w-75 m-auto col-12" style="width: 50%;">
                    <div class="mb-4 col-12"></div>
                    <div class="text-center h4 m-auto w-75 col-12">Complimentary concierge service</div>
                    <div class="mb-4 col-12"></div>
                    <div class="text-center m-auto w-75 col-12"> DTC is in our DNA. Our pros will build your strategy and custom designs using battle-tested best practices.</div>
                </div>

            </div>

        </div>
    </section>



    <section class="py-5 w-100 " style="background-color: #E3F8F8;">
        <div class="container w-100">
            <h2 class="text-center responsive-text2 mb-5">Fast launch. Fast results.<br>
                <span style="color: #009387;font-family: 'Covered By Your Grace';">Here's how</span>
            </h2>
            <div class="row align-self-center">
                <div class="col-1 " style="color: #00938766;font-size: 40px;font-family: 'Covered By Your Grace';">1</div>
                <div class="col-2 h4" style="color: #2E2F3566;">Segment</div>
            </div>
            <div class="row align-self-center">
                <div class="col-1 " style="color: #00938766;font-size: 40px;font-family: 'Covered By Your Grace';">2</div>
                <div class="col-2 h4" style="color: #2E2F3566;">Design</div>
            </div>
            <div class="row align-self-center">
                <div class="col-1 " style="color: #009387;font-size: 40px;font-family: 'Covered By Your Grace';">3</div>
                <div class="col-4 h4" style="color: #333;">
                    <div>Send</div>
                    <div style="font-size: 17px;font-weight: 400;">One-off announcements or automatically triggered flows. Customers receive their personalized cards within a week.</div>
                </div>
            </div>
            <div class="row align-self-center">
                <div class="col-1 " style="color: #00938766;font-size: 40px;font-family: 'Covered By Your Grace';">4</div>
                <div class="col-2 h4" style="color: #2E2F3566;">Convert</div>
            </div>
        </div>
    </section>


    <section class="py-5  bg-light">
        <div class="container ">
            <h2 class="text-center responsive-text2 mb-5">PostPilot is 🔥 for
                <span style="color: #009387;font-family: 'Covered By Your Grace';">DTC</span>
            </h2>

            <div class="container">
                <div class="scrolling-wrapper" id="scrolling-wrapper">

                    <div class="box  p-3 rounded-5">
                        <div class="row align-self-center justify-content-center mb-3">
                            <img class="col-3 w-100 h-100" src="{{URL('images/img21.png')}}" alt="">
                            <div class="col-7 text-left p-0">
                                <div style="font-size: 13px;font-weight: 700;">
                                    Helen Guo
                                </div>
                                <div style="font-size: 12px;font-weight: 400;"> @HelenGuo_</div>
                            </div>
                            <img class="col-2 w-100 h-100" src="{{URL('images/img20.png')}}" alt="">
                        </div>
                        <div style="font-size: 14px;">Been using PostPilot for years. Good for re-engagement. And you can get creative with your messaging.</div>
                    </div>

                    <div class="box  p-3">
                        <div class="row align-self-center justify-content-center mb-3">
                            <img class="col-3 w-100 h-100" src="{{URL('images/img21.png')}}" alt="">
                            <div class="col-7 text-left p-0">
                                <div style="font-size: 13px;font-weight: 700;">
                                    Helen Guo
                                </div>
                                <div style="font-size: 12px;font-weight: 400;"> @HelenGuo_</div>
                            </div>
                            <img class="col-2 w-100 h-100" src="{{URL('images/img20.png')}}" alt="">
                        </div>
                        <div style="font-size: 14px;">Been using PostPilot for years. Good for re-engagement. And you can get creative with your messaging.</div>
                    </div>

                    <div class="box  p-3">
                        <div class="row align-self-center justify-content-center mb-3">
                            <img class="col-3 w-100 h-100" src="{{URL('images/img21.png')}}" alt="">
                            <div class="col-7 text-left p-0">
                                <div style="font-size: 13px;font-weight: 700;">
                                    Helen Guo
                                </div>
                                <div style="font-size: 12px;font-weight: 400;"> @HelenGuo_</div>
                            </div>
                            <img class="col-2 w-100 h-100" src="{{URL('images/img20.png')}}" alt="">
                        </div>
                        <div style="font-size: 14px;">Been using PostPilot for years. Good for re-engagement. And you can get creative with your messaging.</div>
                    </div>

                    <div class="box  p-3">
                        <div class="row align-self-center justify-content-center mb-3">
                            <img class="col-3 w-100 h-100" src="{{URL('images/img21.png')}}" alt="">
                            <div class="col-7 text-left p-0">
                                <div style="font-size: 13px;font-weight: 700;">
                                    Helen Guo
                                </div>
                                <div style="font-size: 12px;font-weight: 400;"> @HelenGuo_</div>
                            </div>
                            <img class="col-2 w-100 h-100" src="{{URL('images/img20.png')}}" alt="">
                        </div>
                        <div style="font-size: 14px;">Been using PostPilot for years. Good for re-engagement. And you can get creative with your messaging.</div>
                    </div>

                    <div class="box  p-3">
                        <div class="row align-self-center justify-content-center mb-3">
                            <img class="col-3 w-100 h-100" src="{{URL('images/img21.png')}}" alt="">
                            <div class="col-7 text-left p-0">
                                <div style="font-size: 13px;font-weight: 700;">
                                    Helen Guo
                                </div>
                                <div style="font-size: 12px;font-weight: 400;"> @HelenGuo_</div>
                            </div>
                            <img class="col-2 w-100 h-100" src="{{URL('images/img20.png')}}" alt="">
                        </div>
                        <div style="font-size: 14px;">Been using PostPilot for years. Good for re-engagement. And you can get creative with your messaging.</div>
                    </div>

                    <div class="box  p-3">
                        <div class="row align-self-center justify-content-center mb-3">
                            <img class="col-3 w-100 h-100" src="{{URL('images/img21.png')}}" alt="">
                            <div class="col-7 text-left p-0">
                                <div style="font-size: 13px;font-weight: 700;">
                                    Helen Guo
                                </div>
                                <div style="font-size: 12px;font-weight: 400;"> @HelenGuo_</div>
                            </div>
                            <img class="col-2 w-100 h-100" src="{{URL('images/img20.png')}}" alt="">
                        </div>
                        <div style="font-size: 14px;">Been using PostPilot for years. Good for re-engagement. And you can get creative with your messaging.</div>
                    </div>

                    <div class="box  p-3">
                        <div class="row align-self-center justify-content-center mb-3">
                            <img class="col-3 w-100 h-100" src="{{URL('images/img21.png')}}" alt="">
                            <div class="col-7 text-left p-0">
                                <div style="font-size: 13px;font-weight: 700;">
                                    Helen Guo
                                </div>
                                <div style="font-size: 12px;font-weight: 400;"> @HelenGuo_</div>
                            </div>
                            <img class="col-2 w-100 h-100" src="{{URL('images/img20.png')}}" alt="">
                        </div>
                        <div style="font-size: 14px;">Been using PostPilot for years. Good for re-engagement. And you can get creative with your messaging.</div>
                    </div>


                </div>
            </div>

            <div class="w-100 mt-5 text-center">
                <a href="#" class="btn btn-primary my-2 bg-warning border fw-bold text-center">Try it risk free</a>
            </div>
        </div>

    </section>


    <section class="py-5 " style="background-color: #EEECFF;">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 col-xs-12 ">
                    <img src="{{URL('images/img22.png')}}" alt="" class="w-75">
                </div>
                <div class="col-md-6 col-xs-12 mt-md-0 mt-xs-5 ">
                    <h1 class="text-left  mb-3 ">How <span style="color: #009387;font-family: 'Covered By Your Grace';">Obvi</span> Drives Profits with Hands-Off Postcard Campaigns

                    </h1>
                    <p>The 🚀 supplements brand wanted to offset high ad costs and reach dormant customers. They scored 1000%+ ROIs.</p>
                    <div class="row mb-3">
                        <div class="col">
                            <div style="font-size: 24px;font-weight: 800;">1468%</div>
                            <div style="font-size: 12px;">ROI</div>
                        </div>
                        <div class="col">
                            <div style="font-size: 24px;font-weight: 800;">8.59%</div>
                            <div style="font-size: 12px;">Conversion Rate</div>
                        </div>
                        <div class="col">
                            <div style="font-size: 24px;font-weight: 800;">$73,457</div>
                            <div style="font-size: 12px;">Sales Generated</div>
                        </div>
                    </div>

                    <div class="w-100 text-center">
                        <a href="" class="btn border px-4 py-2 rounder-pill bg-light" style="font-weight: 700;">Read Case study</a>
                    </div>

                    <div class="image-container row mt-5 w-100 ">
                        <img src="{{URL('images/br1-logo.png')}}" class="col-3 pb-2  h-50 w-50 " onclick="selectImage(this)">
                        <img src="{{URL('images/br2-logo.png')}}" class="col-3 pb-2  h-50 w-50 " onclick="selectImage(this)">
                        <img src="{{URL('images/br3-logo.png')}}" class="col-3 pb-2  h-50 w-50 " onclick="selectImage(this)">
                        <img src="{{URL('images/br1-logo.png')}}" class="col-3 pb-2  h-50 w-50 " onclick="selectImage(this)">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0" style="background-color: #FF6D2C;">
        <div class="container py-0 my-0 " style="color: #fff;">
            <div class="row ">
                <div class="col-md-6 col-xs-12 mt-md-0 mt-xs-5 ">
                    <h1 class="text-left mt-4  mb-3 responsive-text" style="color: #fff;">Try PostPilot Risk-Free

                    </h1>
                    <p>No contracts. No commitments. Guaranteed results.*</p>

                    <div class=" text-left">
                        <a href="" class="btn border px-4 py-2 rounder-pill bg-light" style="font-weight: 700;">Get Started</a>
                        <span class="fs-6 ml-3 ">5.0 shopify rating</span>
                    </div>

                    <p class="mt-4">* for qualified brands with over $1m annual Shopify revenue.</p>

                </div>
                <div class="col-md-6 col-xs-12 w-100 h-100 d-md-block d-none">
                    <img src="{{URL('images/img23.png')}}" alt="" class="w-75 ">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <h1 class=" mb-5" style="font-weight: 700;font-size: 60px;">Latest trends & <span style="color: #009387;font-family: 'Covered By Your Grace';">insights</span></h1>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <img src="{{URL('images/img30.png')}}" class=" img-fluid  w-100">
                    <p class="h5 mt-2">3 Low-Cost Campaigns You Must Run to Win BFCM</p>
                </div>
                <div class="col-md-4 mb-2">
                    <img src="{{URL('images/img31.png')}}" class=" img-fluid  w-100">
                    <p class="h5 mt-2">Postcard Marketing: The Definitive Guide to High ROI [2022]</p>
                </div>
                <div class="col-md-4 mb-2">
                    <img src="{{URL('images/img33.png')}}" class=" img-fluid  w-100">
                    <p class="h5 mt-2">The Ultimate Guide to Thank You Notes for Ecommerce</p>
                </div>
            </div>
        </div>
    </section>


    <script>
        function selectImage(img) {
            const images = document.querySelectorAll('.image-container img');
            images.forEach(image => image.classList.remove('selected'));
            img.classList.add('selected');
        }
    </script>

    <script>
        function autoScroll() {
            const wrapper = document.getElementById('scrolling-wrapper');
            let scrollAmount = 0;
            const scrollStep = 2;
            const maxScroll = wrapper.scrollWidth - wrapper.clientWidth;

            function step() {
                scrollAmount += scrollStep;
                if (scrollAmount >= maxScroll) {
                    scrollAmount = 0;
                    wrapper.scrollLeft -= wrapper.scrollWidth;
                }

                wrapper.scrollLeft += scrollStep;
                requestAnimationFrame(step);
            }

            step();
        }

        setInterval(function() {
            // autoScroll();
        }, 1000);
    </script>

</body>

</html>