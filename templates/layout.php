<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>


        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        
        

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
         <link href='https://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>


    </head>

    <body>
        <div class="centralizar">
            <header id="cabecalho">                

                <a href="layout.php" class="logo">
                    <img src="/img/img1.jpg" alt="Logo IMDB" />    
                </a>


                <nav class="menu">
                    <a class="menu-link" href="/">Home</a>
                    <a class="menu-link" href="/lista">Lista de Filmes</a>
                    <a class="menu-link" href="/sobre">Sobre</a>
                </nav>


                <form class="form-pesquisa">
                    <input type="text" name="pesquisa" />
                    <button>Pesquisar</button>
                </form>
            </header>

            <?php include_once $page . '.php'; ?>

            <footer id="rodape">
                <p>

                    &copy; CopyRight - "Borges" - Todos os Direitos Reservados 
                    <br />


                    <a href="mailto:falecom@tiago.link">borgesbox@gmail.com</a>
                </p>
            </footer>
        </div>
    </body>
</html>