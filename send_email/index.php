<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Envio de Email</title>
</head>

<body>

    <div class="d-flex justify-content-center align-items-center">
        <form action="send_process_email.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Seu e-mail</label>
                <input name="email_usuario" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Digite o seu e-mail ">
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail remetente</label>
                <input name="email_remetente" type="email" class="form-control" aria-describedby="emailHelp" placeholder="E-mail do remetente">
            </div>
            <div class="mb-3">
                <label class="form-label">Assunto</label>
                <input name="assunto" type="text" class="form-control" placeholder="Digite o assunto">
            </div>
            <div class="form-floating">
                <textarea name="descricao" class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comentário</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>

</html>