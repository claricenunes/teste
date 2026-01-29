<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/menu.css">
     <link rel="stylesheet" href="css/testimonials.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Bowl page</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <i class="fa-solid fa-bowl-rice" id="nav_logo">bowl</i> 

            <ul id="nav_list">
                <li class = "nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>
            
            <a href="{{ route('login.page') }}" class="btn-default btn-primary">
                Login
            </a>

            <a href="{{ route('order.page') }}" class="btn-default btn-primary">
                Peça aqui
            </a>

            <button class="hamburguer"> 
                <i class="fa-solid fa-bars"></i> 
            </button>
        </nav>

        <div id="mobile_menu">
             <ul id="mobile_nav_list">
                <li class = "nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="testimonials">Avaliações</a>
                </li>
            </ul>

            <a href="{{ route('order.page') }}" class="btn-default btn-primary">
                Peça aqui
            </a>
        </div>
    </header>

    <main id="content">
        <section id="home">
            <div class="shape"></div>
            <div id="cta">
                <h1 class="title">
                    O sabor fresco que cabe na sua
                    <span>tigela!</span> 
                </h1>

                <p class="description">
                    Monte seu poke do seu jeito : ingredientes frescos, combinações únicas 
                    & um sabor irresistível.
                </p>

                <div id="cta_buttons">
                    <a href="#" class="btn-default">
                        Ver Cardápio
                    </a>

                    <a href="tel:+555555555555" id="phone_button">
                        <button class="btn-default">
                            <i class="fa-solid fa-phone"></i>
                            
                        </button>
                        (61)99876-5432
                    </a>
                </div>

                <div class="social-media-buttons">
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>

            <div id="banner">
                <img src="imagens/—Pngtree—poke bowl isolated_14556265.png" alt="">
            </div> 
            

            <div class="shape"></div>
            <div class="shape_bola"></div>


            
        </section>

        <section id="menu">
            <h2 class="section-title">Cardápio</h2>
            <h3 class="section-subtitle">Pratos mais vendidos</h3>

            <div id="dishes">
                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    
                    <img src="imagens/—Pngtree—japanese-inspired salmon poke bowl_19323725.png" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Poke Salmon
                    </h3>

                    <span class="dish-description">
                        Prato de salmão e ingredientes escolhidos por você!
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>(500+)</span>
                    </div>

                    <div class="dish-price">
                        <h4>R$45,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    
                    <img src="imagens/deliciosa-tigela-de-salmao-com-manga-pepino-e-arroz.png" class="dish-image" alt="">

                    <h3 class="dish-title">
                        Poke Manga & Salmão
                    </h3>

                    <span class="dish-description">
                        Prato de manga com salmão, para refrescar seu dia!
                    </span>

                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>(500+)</span>
                    </div>

                    <div class="dish-price">
                        <h4>R$45,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials">
            <img src="imagens/cozinheiro-que-faz-ok-assina-sobre-fundo-branco.png" id="testimonial_chef" alt="">
            <div id="testimonial_content">
                <h2 class="section-title">
                    Depoimentos
                </h2>
                <h3 class="section-subtitle">
                    Experiência dos clientes
                </h3>

                <div id="feedbacks">
                    <div class="feedbacks">
                        <img src="imagens/retrato-de-uma-jovem-mulher-bonita-olhando-e-sorrindo.png" id="feedback-avatar" alt="">
                         
                        <div class="feedback-content">
                            <p>
                                Natália Lima
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Poke delicioso, ingredientes sempre frescos e atendimento impecável. Sem dúvida o melhor da região, super recomendo!
                            </p>
                        </div>
                    </div>

                                        <div class="feedbacks">
                        <img src="imagens/a-cintura-para-cima-de-um-homem-bonito-confiante-alegre-empreendedor-com-um-grande-sorriso.png" id="feedback-avatar" alt="">
                         
                        <div class="feedback-content">
                            <p>
                                Davi Amaral
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                Atendimento rápido e poke incrível! Ingredientes frescos e sabor excepcional. Recomendo a todos!
                            </p>
                        </div>
                        
                    </div>
                </div>

                <button class="btn-defaul">
                    Ver mais avaliações
                </button>
            </div>
        </section>
    </main>
</body>
</html>