<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPL Peças</title>
    <link rel="stylesheet" href="assets/css/index/style.css">
    <link rel="stylesheet" href="assets/css/navbar/style.css">
    <link rel="stylesheet" href="assets/css/slider/style.css">
    <link rel="stylesheet" href="assets/css/section-pecas/style.css">
    <link rel="stylesheet" href="assets/css/sobre/style.css">
    <link rel="stylesheet" href="assets/css/contato/style.css">
    <link rel="stylesheet" href="assets/css/footer/style.css">

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Slick JS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


</head>
<body>
    <script>
        alert('EM DESENVOLVIMENTO, CONTÉM BUGS!!');
    </script>
    <header>
        <nav>
            <a href="/"><img class="logo" src="assets/img/logo.png" alt=""></a>
            <div class="mobile-menu">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <ul class="nav-list">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#pecas">Catálogo</a></li>
                <li><a href="#sobre">Sobre Nós</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="registrar.php">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <main id="inicio">
        <div class="slider-inicio">
            <div class="slide">
              <div id="slide-1" class="slide-padrao">
                <div class="texto-slide">
                    <span>As melhores peças do mercado automotivo, garanta já!</span>
                    <a href="#pecas">Ver Catálogo</a>
                </div>
              </div>
            </div>
            <div class="slide">
                <div id="slide-2" class="slide-padrao">
                    <div class="slick-slider">
                      </div>
                </div>
            </div>
            <div class="slide">
                <div id="slide-3" class="slide-padrao">
                    <div class="slick-slider">

                    </div>  
                </div>
            </div>
          </div>
    </main>

    <div class="whatsapp">
        <a href="https://wa.link/tohjcr" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a>
    </div>


    <section id="marcas">
        <span id="trabalhamos-com">Trabalhamos com</span>
        <div class="slider-marcas">
            <div class="slide-marca">
                <h1>Logo Marca</h1>
            </div>
            <div class="slide-marca">
                <h1>Logo Marca</h1>
            </div>
            <div class="slide-marca">
                <h1>Logo Marca</h1>
            </div>
            <div class="slide-marca">
                <h1>Logo Marca</h1>
            </div>
            <div class="slide-marca">
                <h1>Logo Marca</h1>
            </div>
        </div>
    </section>

    <section id="pecas">
        <div class="parte-1-pecas">
            <div class="carro-ft"></div>
        </div>
        <div class="parte-2-pecas">
            <div class="titulo-box">
                <span id="titulo-pecas">Encontre a melhor peça para o seu <b>carro</b>.</span>
            </div>

            <p>Aqui na DPL Peças, você encontra as peças com mais qualidade de todo o mercado automotivo.</p>
            
            <form action="">
                <input type="search" placeholder="Pesquisar peça">
                <button type="submit">Buscar&nbsp;<ion-icon name="search-outline"></ion-icon></button>
            </form>

            <a class="btn-catalogo" href="" download="">Baixe o nosso catálogo&nbsp;<ion-icon name="download-outline"></ion-icon></a>
        </div>
    </section>

    <section id="sobre">
        <div class="parte-1-sobre">
            <div class="titulo-box">
                <span id="titulo-pecas">Sobre a <b>DPL</b>.</span>
            </div>
            <p>A D.P.L Distribuidora de Peças Ltda, foi fundada em 01 de agosto de 1999, na cidade de Toledo – Paraná. E nesses 20 anos, a empresa se consolida com a experiência de mais de 46 anos de seus sócios administradores no mercado varejista de autopeças. </p>
            <p>Motivada por princípios e valores de ética e transparência na condução dos negócios, a empresa busca investir constantemente em seus produtos, clientes, colaboradores e fornecedores, visando o reconhecimento pelo estoque completo no segmento de motores.</p>
            <p>Como cliente, é possível ter acesso a um moderno e completo Catalogo Eletrônico, o qual contém uma enorme variedade de informações: código do produto, marca, código de conversão, fotos, informações técnicas, descrição do carro e motor utilizado. Informações que proporcionam facilidade na compra e certeza da aplicação no momento da revenda dos seus produtos. Além de contar com uma equipe de vendedores treinados e qualificados, o que garante eficiência, qualidade e agilidade em todos os processos.</p>

            <p>A empresa conta com mais de 30.000 itens em seu estoque, os quais abrangem mais de 100 marcas, das mais renomadas no mercado de Autopeças. Tem como especialidade o segmento de peças para motores Leve, Utilitários e Pesados, atuando também nos segmentos de Suspensão, Direção, Roda e Freio, Embreagem, Ignição e Injeção, Químicos, Arrefecimento e Escapamentos Linha Leve e Utilitários.</p>

            <p>Quer nos conhecer mais? Entre em contato! Ficaremos felizes em lhe atender.</p>
            
        </div>
        <div class="filiais">
            <div class="card matriz">
                <img src="assets/img/filiais/toledo.png" alt="">
                <span class="nivel">Matriz</span>
                <span class="cidade"><ion-icon name="map-outline"></ion-icon>&nbsp;Toledo - PR</span>
                <p class="endereco">Av. Parigot de Souza, 1420 - Centro</p>
                <span class="telefone"><ion-icon name="call-outline"></ion-icon>&nbsp;(45) 2103-2244</span>
                <a class="maps" href="https://goo.gl/maps/GxFmE1FE8wPfmzuv5?coh=178573&entry=tt" target="_blank">Ver no Maps&nbsp;<ion-icon name="location-outline"></ion-icon></a>
            </div>
            <div class="card filial-1">
                <img src="assets/img/filiais/presidente-prudente.png" alt="">
                <span class="nivel">Filial 1</span>
                <span class="cidade"><ion-icon name="map-outline"></ion-icon>&nbsp;Presidente Prudente - SP</span>
                <p class="endereco">Rua Sebastião de Paula Freitas, 699 - Jd Bela Daria</p>
                <span class="telefone"><ion-icon name="call-outline"></ion-icon>&nbsp;(18) 2101-9100</span>
                <a class="maps" href="https://goo.gl/maps/iVWcSe8yfcw2sTrk9?coh=178573&entry=tt" target="_blank">Ver no Maps&nbsp;<ion-icon name="location-outline"></ion-icon></a>
            </div>
            <div class="card filial-2">
                <img src="assets/img/filiais/curitiba.png" alt="">
                <span class="nivel">Filial 2</span>
                <span class="cidade"><ion-icon name="map-outline"></ion-icon>&nbsp;Curitiba - PR</span>
                <p class="endereco">Rua das Carmelitas, 1750 - Boqueirão</p>
                <span class="telefone"><ion-icon name="call-outline"></ion-icon>&nbsp;(41) 2101-6000</span>
                <a class="maps" href="https://goo.gl/maps/cbhLbAKBBnNgdpEL6?coh=178573&entry=tt" target="_blank">Ver no Maps&nbsp;<ion-icon name="location-outline"></ion-icon></a>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="banner-contato">
            <span>Contato</span>
        </div>
        <div class="cards-contato">
            <div class="card-contato">
                <div class="card-contato">
                    <div class="icone-contato email"></div>
                    <div class="box-mobile">
                        <span class="titulo-contato">Email</span>
                        <span class="horario-contato">De Segunda à Sexta das 8:00 às 18:00</span>
                        <span class="prazo-contato">Respondemos em até 72h</span>
                        <a href="#" class="btn-contato-mobile">Enviar Email</a>
                    </div>
                    <a href="#" class="btn-contato">Enviar Email&nbsp;<ion-icon name="arrow-forward-outline"></ion-icon></a>
                </div>
            </div>

            <div class="card-contato">
                <div class="card-contato">
                    <div class="icone-contato telefone"></div>
                    <div class="box-mobile">
                        <span class="titulo-contato">Telefone/Whatsapp</span>
                        <span class="horario-contato">De Segunda à Sexta das 8:00 às 18:00</span>
                        <span class="prazo-contato">Ligue agora ou mande uma mensagem</span>
                        <a href="#" class="btn-contato-mobile">Enviar Mensagem</a>
                    </div>
                    <a href="#" class="btn-contato">Enviar Mensagem&nbsp;<ion-icon class="mensagem" name="arrow-forward-outline"></ion-icon></a>
                </div>
            </div>

            <div class="card-contato">
                <div class="card-contato">
                    <div class="icone-contato trabalhe"></div>
                    <div class="box-mobile">
                        <span class="titulo-contato">Trabalhe Conosco</span>
                        <span class="horario-contato">De Segunda à Sexta das 8:00 às 18:00</span>
                        <span class="prazo-contato">Venha fazer parte da DPL</span>
                        <a href="#" class="btn-contato-mobile">Enviar Currículo</a>
                    </div>
                    
                    <a href="#" class="btn-contato">Enviar Currículo&nbsp;<ion-icon class="curriculo" name="arrow-forward-outline"></ion-icon></a>
                </div>
            </div>
        </div>
    </section>
    <a href="#inicio">
        <div class="voltar-topo">
                <ion-icon name="arrow-up-outline"></ion-icon>
        </div>
    </a>
    
    <footer>
        <div class="navegacao">
            <div class="logo">
                <h1>LOGO</h1>
            </div>
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#pecas">Catálogo</a></li>
                <li><a href="#sobre">Sobre Nós</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="registrar.php">Cadastre-se</a></li>
            </ul>
            <div class="redes-sociais">
                <span>Siga nos</span>
                <div class="links-redes-sociais">
                    <a href="#" target="_blank"><div class="instagram"></div></a>
                    <a href="#" target="_blank"><div class="facebook"></div></a>
                    <a href="#" target="_blank"><div class="linkedin"></div></a>
                </div>
            </div>
        </div>

        <div class="filiais">
            <div class="box-filiais">
                <p>Matriz | Toledo - PR</p>
                <p>Av. Parigot de Souza, 1420</p>
                <p>Centro</p>
                <p>(45) 2103-2244</p>
            </div>
            <div class="box-filiais">
                <p>FILIAL 1 | Presidente Prudente - SP</p>
                <p>Rua Sebastião de Paula Freitas, 699</p>
                <p>Jd Bela Daria</p>
                <p>(18) 2101-9100</p>
            </div>
            <div class="box-filiais">
                <p>FILIAL 2 | Curitiba - PR</p>
                <p>Rua das Carmelitas, 1750</p>
                <p>Boqueirão</p>
                <p>(41) 2101-6000</p>
            </div>
            <div class="box-filiais">
                <p id="politica"><ion-icon name="lock-closed"></ion-icon>&nbsp;Polítia de Privacidade </p>
                <a href="#">Saiba Mais</a>
            </div>
        </div>
    </footer>

<!--ION ICON-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!--Mobile Menu-->
<script src="assets/js/mobile-menu.js"></script>

<!--Slicker-->
<script src="assets/js/slider.js"></script>

</body>
</html>