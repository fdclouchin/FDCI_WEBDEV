<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .debug{
            border: 1pt solid red;
            height: 550px;
            /* margin-top: 100px; */
        }
        .carousel-height{
            height: 300px;
        }
        .giveborder{
            border: 1pt solid yellow;
        }
        .social-links .socials{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border-radius: 50%;
        background-color: #024364;
        width: 50px;
        height: 50px;
        margin-right: 20px;
        color: white;
        }
        .intro-name{
        font-weight: bolder;
        font-size: 50pt;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home">
                        <img src="profiles/1.png" alt="img-profile">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Experience
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Skills
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Education
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div id="home" class="mt-5 row debug">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="previews/12.webp" class="d-block w-100" alt="img1" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="previews/11.webp" class="d-block w-100" alt="img2" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="previews/8.jpeg" class="d-block w-100" alt="img3" height="500">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">
                            Previous
                        </span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">
                            Next
                        </span>
                    </button>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <div id="about" class="row debug">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 debug">
                <div class="col-lg intro-name giveborder">
                LOUCHIN VAR C. CEJAR
                </div>
                <div class="mt-3 col-lg giveborder">
                CEBU CITY, CEBU 6000 · (+63) 9296139314 · 
                    <a href="mailto:cejarlouchin@gmail.com" class="email">
                        cejarlouchin@gmail.com
                    </a>
                </div>
                <div class="mt-2 col-lg giveborder">
                    Experienced software tester in Manual/Functional Testing, Web Application testing, committed to create and execute high quality test cases for software testing.
                </div>
                <div class="mt-3 ms-3 col-lg debug">
                    <div class="row social-links">
                        <a href="https://www.linkedin.com/in/louchin-var-cejar-3310a814b/" target="_new" class="socials">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="https://github.com/fdclouchin" target="_new" class="socials">
                            <i class="fa fa-github" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/louchiiin" target="_new" class="socials">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/louzhin_23/" target="_new" class="socials">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Script Here  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d125db7bab.js" crossorigin="anonymous"></script>
</body>
</html>