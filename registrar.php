<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPL Peças - Cadastre-se</title>
    <link rel="stylesheet" href="assets/css/index/style.css">
    <link rel="stylesheet" href="assets/css/navbar/style.css">
    <link rel="stylesheet" href="assets/css/slider/style.css">
    <link rel="stylesheet" href="assets/css/section-pecas/style.css">
    <link rel="stylesheet" href="assets/css/sobre/style.css">
    <link rel="stylesheet" href="assets/css/cadastro/style.css">

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Slick JS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href="/"><img class="logo" src="assets/img/logo.png" alt=""></a>
            <div class="mobile-menu">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <ul class="nav-list">
                <li><a href="index.php#inicio">Início</a></li>
                <li><a href="index.php#pecas">Catálogo</a></li>
                <li><a href="index.php#sobre">Sobre Nós</a></li>
                <li><a href="registrar.php">Cadastre-se</a></li>
                <li><a href="index.php#contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="cadastro">
    <?php
        $razaosocial = '';
        $nomefantasia = '';
        $cep = '';
        $logradouro = '';
        $bairro = '';
        $cidade = '';
        $estado = '';
        $cepNotFound = false; // Variável para controlar a exibição do erro

        function validarCNPJ($cnpj) {
            $cnpj = preg_replace('/[^0-9]/', '', $cnpj); // Remove caracteres não numéricos
        
            // Verifica se possui 14 dígitos
            if (strlen($cnpj) !== 14) {
                return false;
            }
        
            // Verifica se todos os dígitos são iguais (caso comum em CNPJs inválidos)
            if (preg_match('/(\d)\1{13}/', $cnpj)) {
                return false;
            }
        
            // Validação do primeiro dígito verificador
            $soma = 0;
            for ($i = 0, $j = 5; $i < 12; $i++) {
                $soma += $cnpj[$i] * $j;
                $j = ($j === 2) ? 9 : $j - 1;
            }
            $resto = $soma % 11;
            $dv1 = ($resto < 2) ? 0 : 11 - $resto;
        
            // Validação do segundo dígito verificador
            $soma = 0;
            for ($i = 0, $j = 6; $i < 13; $i++) {
                $soma += $cnpj[$i] * $j;
                $j = ($j === 2) ? 9 : $j - 1;
            }
            $resto = $soma % 11;
            $dv2 = ($resto < 2) ? 0 : 11 - $resto;
        
            // Verifica se os dígitos verificadores estão corretos
            if ($cnpj[12] != $dv1 || $cnpj[13] != $dv2) {
                return false;
            }
        
            return true;
        }
        
        // ...
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // ...
            
            $cnpj = $_POST['cnpj']; // Obtém o CNPJ informado pelo usuário
        
            if (!validarCNPJ($cnpj)) {
                // CNPJ inválido, exibe uma mensagem de erro ou toma a ação necessária
                echo 'CNPJ inválido';
                // Outras ações, como redirecionar o usuário ou exibir uma mensagem de erro na página.
            } else {
                // CNPJ válido, continua com o processamento do formulário
                // ...
            }
        }
        

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cep = $_POST['cep']; // Obtém o CEP informado pelo usuário

            // Faz uma requisição à API do ViaCEP
            $url = "https://viacep.com.br/ws/{$cep}/json/";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            // Decodifica a resposta JSON
            $data = json_decode($response, true);

            // Verifica se o CEP foi encontrado e preenche os campos de endereço
            if (isset($data['erro'])) {
                $cepNotFound = true; // Define a variável de erro como verdadeira
            } else {
                $logradouro = $data['logradouro'];
                $bairro = $data['bairro'];
                $cidade = $data['localidade'];
                $estado = $data['uf'];
            }

            // Validação do CNPJ
            $cnpj = $_POST['cnpj']; // Obtém o CNPJ informado pelo usuário

            if (!validarCNPJ($cnpj)) {
                // CNPJ inválido, exibe uma mensagem de erro ou toma a ação necessária
                echo 'CNPJ inválido';
                // Outras ações, como redirecionar o usuário ou exibir uma mensagem de erro na página.
            } else {
                // CNPJ válido, continua com o processamento do formulário
                // ...
            }
        }
        ?>

        <script>
            function limitarCaracteres(elemento, limite) {
                if (elemento.value.length > limite) {
                    elemento.value = elemento.value.substring(0, limite);
                }
            }
        </script>

        <form action="#" method="post">
            <div class="box-input">
                <input type="text" name="razaosocial" value="<?php echo $razaosocial; ?>" placeholder="Razão Social" required>
                <input type="text" name="nomefantasia" value="<?php echo $nomefantasia; ?>" placeholder="Nome Fantasia" required>
                <input type="number" oninput="limitarCaracteres(this, 8)" name="cep" placeholder="CEP" value="<?php echo $cep; ?>" onchange="this.form.submit()" required>
                <input type="text" name="logradouro" placeholder="Logradouro" value="<?php echo $logradouro; ?>" required>
                <input type="text" name="bairro" placeholder="Bairro" value="<?php echo $bairro; ?>" required>
                <input type="text" name="cidade" placeholder="Cidade" value="<?php echo $cidade; ?>" required>
                <input type="text" name="uf" placeholder="UF" value="<?php echo $estado; ?>" required>
                <input type="text" name="cnpj" placeholder="CNPJ" required>
                <input type="text" name="inscricaoestadual" placeholder="Inscrição Estadual" required>
                
                <?php if ($cepNotFound): ?>
                <p class="error-message">CEP não encontrado.</p>
                <?php endif; ?>
                <button type="submit">Cadastrar</button>
            </div>
        </form>

       


    </section>

<!--ION ICON-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!--Mobile Menu-->
<script src="assets/js/mobile-menu.js"></script>

<!--Slicker-->
<script src="assets/js/slider.js"></script>
</body>
</html>