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
            height: 900px;
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
            font-weight: 450;
            font-size: 30pt;
        }
    </style>
</head>
<body>
    <!-- header -->
    <?php include("header.php");?>

    <!-- carousel -->
    <?php include("carousel.php"); ?>

    <!-- contents -->
    <div class="container-fluid">
        <div id="about" class="mt-3 row debug">
            <div class="col-lg-3">
            </div>

            <div class="col-lg-6 debug">
                <div class="col-lg text-center">
                    <p class="h1">ABOUT</p>
                </div>
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
                <div class="mt-3 ms-3 col-lg">
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

        <div id="experience" class="row debug">
            experience section
        </div>

        <div id="portfolio" class="row debug">
            portfolio section
        </div>

        <div id="skills" class="row debug">
            skills section
        </div>

        <div id="education" class="row debug">
            Education section
        </div>

    </div>

    <!-- Script Here  -->
    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/d125db7bab.js" crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

    <!-- JavaScript code -->
		<script>

    
</body>
</html>