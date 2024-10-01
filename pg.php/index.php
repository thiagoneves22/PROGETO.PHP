<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS -->
    <script src="../assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Escandalosa</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-static/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="navbar-static.css" rel="stylesheet">

   <!-- fav icon link -->
   <link rel="apple-touch-icon" sizes="180x180" href="c:\Users\alank\Downloads\favicon_io\apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="c:\Users\alank\Downloads\favicon_io\favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="c:\Users\alank\Downloads\favicon_io\favicon-16x16.png">
<link rel="manifest" href="c:\Users\alank\Downloads\favicon_io\site.webmanifest">
</head>
<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>
  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg> Light <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg> Dark <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg> Auto <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>
  <nav class="navbar navbar-expand-md navbar-white bg-white mb-4">
    <div class="container-fluid container-nav-itens">
      <a class="navbar-brand" href="#">Escandalosa Cosméticos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Minha conta</a>
          </li>
          <div id="icon">
            <li class="nav-item">
              <a class="nav-link">Sacola</a>
            </li>
          </div>
        </ul>
    
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
          <button type="submit" class="btn btn-custom" aria-label="Pesquisar"
            data-interaction='{"category": "HOME", "action": "Button-Click", "label": "Search"}'>
            <img class="icon-search"
              src="https://res.cloudinary.com/beleza-na-web/image/upload/f_svg,fl_progressive,q_auto:eco/v1/blz/assets-store/0.0.448/images/icons/search-white.svg"
              alt="Ícone de lupa" width="20" height="20">
          </button>
          <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        </form>

      </div>
    </div>
    
    <div class="divider-line"></div>
    </main>
  </nav>



  
  <main class = "main">
  <section class = "galery">
      <div class = "fotos">
      <img src="imagens/produtos/carrossel1.jpg"/>
      <img src="imagens/produtos/carrossel2.jpg"/>
      <img src="imagens/produtos/carrossel3.jpeg"/>
      <img src="imagens/produtos/carrossel4.jpeg"/>
      <img src="imagens/produtos/carrossel1.jpg"/>

      </div>
  </main>







 

  <section>
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="imagens/produtos/monange.png" alt="..." />
            <div class="card-body p-4">
              <div class="text-center">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                <h6 class="fw-bolder">
                  Desodorante Monange Hidratação Intensiva 150 ml</h6>
              </div>
              <div class="rating">
                <div class="stars"></div>
                <span class="mini-text">(2,548)</span>
              </div>
              <div class="price">
                <span class="current">$9.89</span>
                <span class="normal mini-text">$25.00</span>
              </div>
              <div class="mini-text">
                <p>2975 Estoque</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
            <img class="card-img-top" src="imagens/produtos/esmalte_01.png" alt="..." />
            <div class="card-body p-4">
              <div class="text-center">
                <h6 class="fw-bolder">Coleção 5 Esmaltes Impala</h6>
                <div class="rating">
                  <div class="stars"></div>
                  <span class="mini-text">(2,548)</span>
                </div>
                <div class="price">
                  <span class="current">$15.00</span>
                  <span class="normal mini-text">$25.99</span>
                </div>
                <div class="mini-text">
                  <p>2975 Estoque</p>
                </div>
                <span class="text-muted text-decoration-line-through"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
            <img class="card-img-top" src="imagens/produtos/ELSÉVE Óleo Capilar L'Oréal Paris Elseve Óleo Extraordinário 100Ml.png" alt="..." />
            <div class="card-body p-4">
              <div class="text-center">
                <h6 class="fw-bolder">L'Oréal Paris Elseve Creme de Tratamento </h6>
                <div class="rating">
                  <div class="stars"></div>
                  <span class="mini-text">(2,548)</span>
                </div>
                <div class="price">
                  <span class="current">$20.51</span>
                  <span class="normal mini-text">29.99</span>
                </div>
                <div class="mini-text">
                  <p>2975 Estoque</p>
                </div>
                <span class="text-muted text-decoration-line-through"></span>
              </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="imagens/produtos/ELSÉVE Óleo Capilar L'Oréal Paris Elseve Óleo Extraordinário 100Ml (2).png" alt="..." />
            <div class="card-body p-4">
              <div class="text-center">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                <h6 class="fw-bolder">ELSÉVE Óleo Capilar L'Oréal Paris Elseve Óleo Extraordinário 100Ml </h6>
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <div class="rating">
                  <div class="stars"></div>
                  <span class="mini-text">(2,548)</span>
                </div>
                <div class="price">
                  <span class="current">$37.81</span>
                  <span class="normal mini-text">$45.00</span>
                </div>
                <div class="mini-text">
                  <p>2975 Estoque</p>
                </div>
              </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
            <img class="card-img-top" src="imagens/produtos/creme_03.png" alt="..." />
            <div class="card-body p-4">
              <div class="text-center">
                <h6 class="fw-bolder">Creme capilar noturno 250ml Com Manteiga de Karité e Óleo de Buriti</h6>
                <div class="rating">
                  <div class="stars"></div>
                  <span class="mini-text">(2,548)</span>
                </div>
                <div class="price">
                  <span class="current">$99.99</span>
                  <span class="normal mini-text">$110.00</span>
                </div>
                <div class="mini-text">
                  <p>2975 Estoque</p>
                </div>
                <span class="text-muted text-decoration-line-through"></span>
              </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
            <img class="card-img-top" src="imagens/produtos/creme_02.png" alt="..." />
            <div class="card-body p-4">
              <div class="text-center">
                <h6 class="fw-bolder">Creme Diluidor Multifuncional Color Pots 240G</h6>
                <div class="rating">
                  <div class="stars"></div>
                  <span class="mini-text">(2,548)</span>
                </div>
                <div class="price">
                  <span class="current">$16.90</span>
                  <span class="normal mini-text">$18.90</span>
                </div>
                <div class="mini-text">
                  <p>2975 Estoque</p>
                </div>
              </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
            <img class="card-img-top" src="imagens/produtos/creme_01.png" alt="..." />
            <div class="card-body p-4">
              <div class="text-center">
                <h6 class="fw-bolder">Creme para Pentear Coco e Cacau Cream Soul Power - 500ml
                </h6>
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <div class="rating">
                  <div class="stars"></div>
                  <span class="mini-text">(2,548)</span>
                </div>
                <div class="price">
                  <span class="current">$25,90</span>
                  <span class="normal mini-text">$29,90</span>
                </div>
                <div class="mini-text">
                  <p>2975 Estoque</p>
                </div>
                <span class="text-muted text-decoration-line-through"></span>
              </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
            <img class="card-img-top" src="imagens/produtos/Creme-de-Pentear-Salon-Line-Definicao-Maxima.png" alt="..." />
            <div class="card-body p-4">
              <div class="text-center">
                <h6 class="fw-bolder">Creme de Pentear Salon Line Definição Máxima Liberado - 1kg</h6>
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <div class="rating">
                  <div class="stars"></div>
                  <span class="mini-text">(2,548)</span>
                </div>
                <div class="price">
                  <span class="current">$35.90</span>
                  <span class="normal mini-text">$37.90</span>
                </div>
                <div class="mini-text">
                  <p>2975 Estoque</p>
                </div>
              </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 



<section class="cartao">
  <div class="card-produto">
    <img src="imagens/fotos.css/2.jpg">
    <div>
      <h1>Dior</h1>
      <h2>Capture Totale Cell Energy - Creme Redutor de Linhas 50ml</h2>
      <span>R$ 559,00</span>
      <button>compre agora</button>
    </div>
  </div>

  <div class="card-produto">
    <img src="imagens/fotos.css/3.jpg">
    <div>
      <h1>Dior</h1>
      <h2>Capture Totale Cell Energy - Creme Redutor de Linhas 50ml</h2>
      <span>R$ 859,00</span>
      <button>compre agora</button>
    </div>
  </div>

  <div class="card-produto">
    <img src="imagens/fotos.css/4.jpg">
    <div>
      <h1>Dior</h1>
      <h2>Capture Totale Cell Energy - Creme Redutor de Linhas 50ml</h2>
      <span>R$ 579,00</span>
      <button>compre agora</button>
    </div>
  </div>
  
  <div class="card-produto">
    <img src="imagens/fotos.css/5.jpg">
    <div>
      <h1>Dior</h1>
      <h2>Capture Totale Cell Energy - Creme Redutor de Linhas 50ml</h2>
      <span>R$ 539,00</span>
      <button>compre agora</button>
    </div>
  </div>

  <div class="card-produto">
    <img src="imagens/fotos.css/cosmeticos.jpg">
    <div>
      <h1>Dior</h1>
      <h2>Capture Totale Cell Energy - Creme Redutor de Linhas 50ml</h2>
      <span>R$ 859,00</span>
      <button>compre agora</button>
    </div>
  </div>
</section>



<footer>
  <p>Escandalosa Cosméticos</p>
  <p>Endereço: Rua dos Cosméticos, 123, Bairro da Beleza, CEP: 12345-678</p>
  <p>Telefone: (83) 3456-7890</p>
  <p>Email: contato@escandalosacosmeticos.com</p>
  <p>
      <a href="#">Políticas de Privacidade</a> |
      <a href="#">Termos e Condições de Troca e Devolução</a>
  </p>
      Siga-nos nas redes sociais:
      <a href="#">Facebook</a> |
      <a href="#">Instagram</a> |
      <a href="#">Twitter</a>

      <?php include_once 'topo.php'; ?>
    <?php include_once 'menu.php'; ?>

    <main>
        <h1>Bem-vindo ao Meu Site</h1>
        <p>Conteúdo principal da página inicial.</p>
    </main>

    <?php include_once 'rodape.php'; ?>
  </p>
</footer>

</html>


