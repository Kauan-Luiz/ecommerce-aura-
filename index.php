<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Loja Virtual</title>
</head>
<body>
    <div class="banner">

        <div class="container"> 

            <div class="navbar">    

                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="Logo" width="125px">
                    </a>
                </div>

                <nav>
                    <ul id="MenuItens" class="MenuItens-index">
                        <li><a href="index.php" title="">Inicio</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="sobre-nos.php" title="">Empresa</a></li>
                        <li><a href="contato.php" title="">Contato</a></li>
                        <li><a href="minha-conta.php" title="">Minha Conta</a></li>
                    </ul>
                </nav>
                <a href="carrinho.php">
                    <img src="assets/img/carrinho.png" alt="" width="30px" height="30px">
                </a>
                
                <img src="assets/img/menu.png" alt="" srcset="" class="menu-celular" onclick="menucelular()">
                

                
            </div>

            <div class="linha">
                <div class="col-2">
                    <h1>Estilo de quebrada, <br> atitude de verdade!</h1>
                    <br>
                    <p id="descricao-banner">Chega junto, irmão!  A rua é nossa vibe. Vem vestir o corre!</p>
                    <br>
                    <br><a href="produtros.html" class="btn" id="btn-banner">Mais Informações &#8594</a>
                </div>

                <div class="col-2">
                    <img src="assets/img/tenis_nike.png" alt="" class="image-menu">
                </div>

            </div>
        </div>

    </div>


    <div class="corpo-categorias">
        <br>
        <h2 class="titulo">Produtos Em Destaque</h2>

        <div class="linha">
            <div class="col-4">
                <a href="ver-produto.html" title="">
                    <img src="assets/img/broken-image.svg" alt="">
                </a>
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>
        </div>


        

        <div class="slider">
            
                <div class="slides">
                    <!-- Radio buttons para navegação -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    
                    <!-- Imagens -->
                    <div class="slide first">
                        <img src="assets/img/slide-1.jpg" alt="Imagem 1">
                    </div>

                    <div class="slide">
                        <img src="assets/img/slide-2.png" alt="Imagem 2">
                    </div>

                    <div class="slide">
                        <img src="assets/img/slide-3.png" alt="Imagem 3">
                    </div>

                    <div class="slide">
                        <img src="assets/img/slide-4.jpeg" alt="Imagem 4">
                    </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>

                </div>
                
                <!-- Navegação manual -->
                <div class="navegacao-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                
            <!-- Navegação automática (opcional) -->
            
           
        </div>

        <h2 class="titulo">Novos Produtos</h2>  

        <div class="linha">
            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

            <div class="col-4">
                <img src="assets/img/broken-image.svg" alt="">
                <h4>Camiseta Nike</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                <p>99,90</p>
            </div>

        </div>
        
    </div>  

    <div class="ofertas">
        <div class="corpo-categorias">
            <div class="linha">
                <div class="col-2">
                    <h2>Conecte-se com a gente nas redes sociais!</h2>
                
                    
                    
                    <div class="social-icons">
                        <!-- Instagram -->  
                        <a href="https://www.instagram.com" target="_blank" title="Instagram" class="instagram">
                          <i class="fab fa-instagram"></i>
                        </a>
                        
                        <!-- Shopee -->
                        <a href="https://shopee.com.br" target="_blank" title="Shopee" class="shopee">
                          <i class="fas fa-store"></i>
                        </a>
                        
                        <!-- WhatsApp -->
                        <a href="https://wa.me/" target="_blank" title="WhatsApp" class="whatsapp">
                          <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="depoimentos">
        <div class="corpo-categorias">
            <div class="linha">

                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum itaque corrupti</p>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <img src="assets/img/usuario.png" alt="">
                    <h3>Kauan Felipe Luiz</h3>
                </div>

                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum itaque corrupti</p>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <img src="assets/img/usuario.png" alt="">
                    <h3>Kauan Felipe Luiz</h3>
                </div>

                <div class="col-3">
                    <ion-icon name="ribbon" class="depoimento-icone"></ion-icon>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum itaque corrupti</p>
                    <div class="classificacao">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <img src="assets/img/usuario.png" alt="">
                    <h3>Kauan Felipe Luiz</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="marcas">
        <div class="corpo-categorias">
            <div class="linha">

                <div class="col-5">
                    <img src="assets/img/nike.png" alt="">
                </div>

                <div class="col-5">
                    <img src="assets/img/chronic.webp" alt="">
                </div>

                <div class="col-5">
                    <img src="assets/img/adidas.png" alt="">
                </div>

                <div class="col-5">
                    <img src="assets/img/sufgang.webp" alt="">
                </div>

                <div class="col-5">
                    <img src="assets/img/high.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <?php require_once('footer.php')?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>