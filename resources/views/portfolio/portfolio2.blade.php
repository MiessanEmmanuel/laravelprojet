<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="feuille.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
   <header class="bg-light ">
        <nav class="container bg-secondary py-3 ">
        
        </nav>
   </header>
   <main>
    <!--===============Profil=============-->
    <section>  
        <div class="container my-5">
            <div class="row align-items-center gy-4 gx-md-4 ">
                <div class=" col-md  px-0">
                    <h1 class="fw-bold">Je suis John Doe developpeur et Designer Web</h1>
                    <h2 class="fw-light">Bienvenue dans mon univers créatif</h2>
                    <button type="button" class="btn  btn-outline-primary mt-5">mon repertoire</button>
                </div>
                <div class=" col-md  px-0">
                    <div class="container-fuild">
                        <img src="{{asset('img/team/team-2.jpg')}}" alt="oups l'image ne s'est pas affiché" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============mon expertise=============-->
    <section class="bg-light my-5 pt-4 py-3">
        <div class="container ">
            <div>
                <h2>Mon expertise</h2>
                <h4 class="fw-light">devellopement web et design</h4>
            </div>
            <div class="row my-5 gy-2">
                <div class="col-12 col-md-7  ">
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                            <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                            </p>

                            <div class="skills-content">

                            <div class="progress">
                                <span class="skill">HTML <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Photoshop <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            </div>

                        </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-12  col-md-4 px-0">
                    <img src="{{asset('img/skills.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row row-md my-5 gy-2">
                <div class="col-12 col-md-4 px-0">
                    <img src="img/design.jpg" alt="design" class="w-100">
                </div>
                <div class="col-md-1 px-0"></div>
                <div class="col-12 col-md-7 bg-secondary px-0 py-5">

                </div>
            </div>
        </div>
    </section>
    <!--===============mon portfolio =============-->
    <section >
        <div class="container my-5">
            <div>
                <h2>Mon portfolio</h2>
                <h4 class="fw-light"> Projet personnel et professionnel</h4>
            </div>
            <div class="row my-5 gy-4">
                <div class="col-md">
                    <div class="bg-secondary py-5"></div>
                </div>
                <div class="col-md ">
                    <div class="bg-secondary py-5"></div>
                </div>
                <div class="col-md ">
                    <div class="bg-secondary py-5"></div>
                </div>
                <div class="col-md">
                    <div class="bg-secondary py-5"></div>
                </div> 
            </div>
        </div>
    </section>
    <!--===============mon projet=============-->
    <section class="bg-light my-5 pt-4 py-3">
        <div class="container ">
            <div>
                <h2>Mon projet de création web ?</h2>
                <h4 class="fw-light"> allons en discuter autour d'un café</h4>
            </div>
            <div class="row my-5 gy-4">
                <div class="col-12 col-md-5  px-0">
                    <img src="img/grab-a-coffee.jpg" alt="coffe" class="w-100">
                </div>
                <div class="col-md-1 px-0"></div>
                <div class="col-12 col-md-6  bg-secondary px-0 py-5">

                </div>
            </div>
        </div>
    </section>
   </main>
    <footer>
        <section class="container overflow-hidden">
            <div class="row my-5  gy-4">
                <div class="col-md-4 ">
                    <div class="fw-bold fs-3 text-center text-md-start">
                        <span class="bg-primary text-white p-1 rounded">JOHN</span>
                        DOE
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class=" ps-0 text-center fs-5  p-1 pt-2 ">
                        Mentions légales
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class=" p-1 fs-3 text-center d-flex justify-content-end">
                        <div>
                            <a href="http://linkedin.com" target="_blank" rel="noopener noreferrer" class="text-reset m-2">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                        <div >
                            <a href="http://instagram.com/emma.nuel_1310" target="_blank" rel="noopener noreferrer" class="text-reset m-2">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                        <div >
                            <a href="http://twitter.com/lenoiresthomme" target="_blank" rel="noopener noreferrer" class="text-reset ms-2">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>