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
    <link rel="stylesheet" href="/home-page/css/styles.css">
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
                <a href="cardapio" class="nav-item nav-link" id="menu">Cardápio</a>
                <a href="contato" class="nav-item nav-link" id="contact-menu">Contato</a>
            </div>
            <div class="navbar-nav">
                <a href="login" class="nav-item nav-link" id="acess-menu">Login</a>
            </div>
        </div>
    </nav>
    <div class="d-flex flex-column align-items-center justify-content-center full-height">
        <div class="login-content" style="background-color: #fff; padding: 10rem;">
            <div class="register-title">
                <h1>Registre-se agora mesmo!</h1>
                <p>Insira suas informações abaixo.</p>
            </div>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Confirme sua senha</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Usuário</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Rua, Bairro...">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Endereço 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Casa, Loja...">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Estado</label>
                    <select id="inputState" class="form-select">
                        <option selected>Escolha...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Aceito os termos e condições
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <script src="/menu-page/js/scripts.js"></script>
</body>

</html>