<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/menu-page/css/styles.css">
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/fd3baf7e36.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <h1 class="navbar-brand" id="logo">Muzi's Food</h1>
        <button class="navbar-toggler" type="button" data-toggle="colapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
            <div class="navbar-nav mx-auto">
                <a href="home" class="nav-item nav-link" id="home-menu">Home</a>
                <a href="contato" class="nav-item nav-link" id="contact-menu">Contato</a>
            </div>
            <div class="navbar-nav">
                <a href="login" class="nav-item nav-link" id="acess-menu">Login/Registrar</a>
            </div>
        </div>
    </nav>
    <div class="container" id="nav-container">
        <div class="row row-cols-1 row-cols-md-3 g-4 card-item" style="gap: 10px;">
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img1.avif" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cheeseburger</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">19,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img10.webp" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hambúrguer Tradicional</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">16,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img11.avif" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cheeseburger Duplo</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">25,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img12.avif" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">X-Bacon</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">29,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img2.jpeg" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">X-Egg</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">15,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img3.jpeg" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">X-Salada</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">24,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img4.jpg" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">X-Americano</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">16,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img5.webp" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Egg Bacon</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">21,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img6.jpg" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">X-Tudão</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">20,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img7.jpg" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Big Bacon</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">17,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img8.webp" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Blend</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">29,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
            <div class="card p-0" style="width: 18rem;">
                <img src="/public/menu-page/img/img9.jpeg" class="card-img-top img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Smash Burguer</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
                    <p class="card-text card-price">17,90</p>
                    <a href="#" class="btn btn-primary">Pedir agora</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-content">
        &copy;Enzo Muzi - 2024
    </footer>
    <script src="/public/menu-page/js/scripts.js"></script>
</body>

</html>