<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include('header.php'); ?>
    <title>Consulta de Signo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Descubra seu Signo</h1>
        <form id="signo-form" method="POST" action="zodiac_sign.php">
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
    </div>
</body>
</html>
