<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </body>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary, fundo">
        <div class="container-fluid">
            <a class="navbar-brand , text-light" id="principaltxt" href="#">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active , text-light" aria-current="page" href="#">Cadastrar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Consultar</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
<form>
    <div class="formulario">
                <legend>Cadastrar - Agendamento de Potencias Clientes</legend>
                <p>Sistema utilizado para agendamento de serviços.</p>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome">
                </div>
                <div class="mb-3">
                    <label for="tele" class="form-label">Telefone:</label>
                    <input type="tel" class="form-control" id="tele" placeholder="(xx)xxxxx-xxxx">
                </div>
                <div class="mb-3">
                <label for="select" class="form-label">Origem:</label>
                <select class="form-select" aria-label="select">
                    <option value="1">Celular</option>
                    <option value="2">Fixo</option>
                </select>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Data do Contato: </label>
                    <input type="date" class="form-control" id="data" >
                </div>
                <div class="mb-3">
                    <label for="obs" class="form-label">Obeservação</label>
                    <textarea class="form-control" id="obs" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Cadastrar">
                </div>
    </div>            
</form>
</div>

</body>
</html>