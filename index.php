<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a004d8f65f.js" crossorigin="anonymous"></script>
    <title>Daki Code - Tema</title>
</head>

<body>
    <section class="topo">
        <div class="center">
            <div class="flex">
                <header>
                    <div class="logo">
                        <a href="/"><img src="images/logo.png" alt="logo"></a>
                    </div><!-- logo -->
                </header>
                <ul class="menu-desktop">
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
                <div  class="menu-mobile">
                <i class="fa-solid fa-bars"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
                </div>
            </div><!-- flex -->
            <br/>
            <br/>
            <div class="flex-time">
                <div class="w50 time-descricao">
                    <h2>Melhore a comunicação com seu cliente e time.</h2>
                    <p>
                        Consultoria especializada em startups, empresas, principalmente, pessoas
                    </p>
                    <a target="_blank" href="https://dankicode.com">VER DEMONSTRAÇÃO</a>
                </div><!-- w50 -->
                <div class="w50 time-img">
                    <img src="images/equipe.png" alt="equipe debatendo">
                </div><!-- w50 -->
            </div><!-- flex-time -->
        </div><!-- center -->
    </section><!-- topo -->
    <div class="circle">
            <i class="fa-solid fa-chevron-down"></i>
        </div><!-- circle -->
    <section class="clientes-slider">
        <div class="center">
            <div style="margin: 0 auto;overflow: hidden;" class="slider-container">
                <img src="images/amazon.png" />
                <img src="images/costco.png" />
                <img src="images/dominos.png" />
                <img src="images/uber.png" />
                <img src="images/walmart.png"/>
            </div><!-- slider-container -->
        </div><!--  center -->
    </section><!-- clientes-slider -->
    <section class="diferenciais">
        <div class="center">
        <h2>Contribuimos de ponta a ponta</h2>
            <div class="icos-diferenciais">
                <div class="flex-time">
                    <div class="box-single-diferenciais">
                        <img src="images/ilustracao-01.png"/>
                        <h3>Ambiente Mobile</h3>
                        <p>
                        Garanta que toda a comunicação esteja alinhada com o seu propósito cada palavra conta 
                        </p>
                    </div><!-- box-single-diferenciais -->
                    <div class="box-single-diferenciais">
                        <img src="images/ilustracao-02.png"/>
                        <h3>Sites e intranets</h3>
                        <p>
                            Um diálogo só acontece quando ambas as partes falam e escutam, garanta que seu publíco te entende
                        </p>
                    </div><!-- box-single-diferenciais -->
                    <div class="box-single-diferenciais">
                        <img src="images/ilustracao-03.png" />
                        <h3>Comunicação one-to-one</h3>
                        <p>
                            O digital veio para ficar sem dúvidas, mas uma comunicação integrada de verdade exige clareza nas decisões
                        </p>
                    </div><!-- box-single-diferenciais -->
                </div><!-- flex-time -->
            </div><!-- icos-diferenciais -->
        </div><!-- center -->
    </section><!-- diferenciais -->
    <section class="sobre-time">
        <div class="center">
        <div class="flex-time">
            <div class="w50 time-descricao2">
                <h2>Um time experiente comunicador e coeso.</h2>
                <br/>
                <p>
                    A product Runt acredita que marcas fortes são construidas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
                <br/>
                <br/>
                    Comunicar bem, de forma coerente e clara nãp é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial para seu cliente ou seu público interno, você determina como vamos te ajudar.
                </p>
            </div><!-- w50 time-descricao2 -->
            <div class="w50 time-img">
                <img src="images/ilustracao-04@2x.png" alt="imagem de um desenvolvedor trabalhando">
            </div><!-- w50 time-img -->
        </div><!-- flex-time -->
        </div><!-- center -->
    </section><!-- sobre-time -->
    <section class="depoimentos">
        <div class="center">
            <div class="depoimento">
                <h3>Depoimentos</h3>
                <p>
                    O envolvimento e a imerssão da equipe nos negócios de seus clientes permite que sejam dados feedbacks muito coerentes e com uma visão de fora, visão muitas vezes nescessária. Essa visão corroborou com a vontade da empresa em focar no seu segmento de atuação
                </p>

                <p>Bryan Gather, Google</p>

                <img src="images/oval-2.png" alt="">
            </div><!-- depoimento -->
        </div><!-- center -->
    </section><!-- depoimentos -->
</body>
<script src="js/jquery.js"></script>
    <script>
        $('.menu-mobile i').click(() => {
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</html>