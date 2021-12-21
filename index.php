<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- adaptação pra o mobile e desktop -->
    <style>
        <?php

        include 'assets/css/style.css';

        ?>
    </style> <!-- importa o css -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- importação ta fonte -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>


    <title>Forms</title>
</head>

<body>



    <main id="container">
        <header id="header">
            <h1 id="cabecalho"> Teste Forms </h1>
        </header>


        <div id="form-section">
            <form action="" method="post" id="form">
                <div id="nome-sec">
                    <input type="text" id="nome" name="nome" placeholder="Nome" class="input-design">
                </div>
                <div id="sobrenome-sec">
                    <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" class="input-design">
                </div>
                <div id="cpf-sec">
                    <input type="text" id="cpf" name="cpf" placeholder="CPF" class="input-design" maxlength="11">
                </div>

                <div id="cidade-sec">
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade" class="input-design">
                </div>

                <div id="btn-submit">
                    <input type="button" class="input-submit" value="Enviar">
                    <input type="reset" class="btn-clean" value="Limpar">
                </div>
            </form>
        </div>

    </main>
</body>
<script src="assets/js/main.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    function enviar() {
        var dados = {
            nome: $("#nome").val(),
            sobrenome: $("#sobrenome").val(),
            cpf: $("#cpf").val(),
            cidade: $("#cidade").val(),
        }
        
        $.ajax({
                url: 'http://localhost/formulario/assets/postgre/config.php',
                type: 'POST',
                data: dados
            })
            .done(function(data) {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
                $('#cabecalho').html(data);
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                //tratar erro
            });
    }

    $('.input-submit').on('click', (event) => {
        event.preventDefault();
        enviar();
    })
</script>

</html>