<?php require '../../init.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <![endif]-->

  <title>MSY Soluções Contábeis</title>

  <!-- font montserrat -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <!-- importando folha de estilo do framework normalize -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>libs/normalize/css/normalize.css">

  <!-- importando folha de estilo do framework bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- importando folha de estilo da página index -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/index.css">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <!-- navegação -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">NOSSA EMPRESA</a></li>
          <li><a href="#services">SERVIÇOS</a></li>
          <li><a href="#portfolio">ATUAÇÃO</a></li>
          <li><a href="#contact">CONTATO</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- container da logo -->
  <div class="jumbotron text-center">
    <!--<h1 class="margin">Empresa</h1>-->
    <img src="<?php echo BASE_URL; ?>public/img/logo.png" class="img-responsive" style="display:inline" alt="imagem" width="650" height="650">
    <p>Focada em Gestão Empresarial</p>
  </div>

  <!-- container sobre -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-10">
        <h2>Saiba um pouco mais sobre nós</h2>

        <h4 class="text-justify">Oferecemos a utilização de um software de gestão empresarial para controle de operações diárias e apuração de resultados por centro de custo. A <strong>MSY</strong> conduz seus trabalhos de auditória em todas as suas abordagens, etapas similares de seu início à sua conclusão. Diferenciando detalhes técnicos e operacionais de acordo com o resultado que pretende alcançar. Da criação da empresa e sua identidade mercadológica até sua parte estrutural.</h4>
      </div>
      <div class="col-sm-2">
        <span class="glyphicon glyphicon-signal logo"></span>
      </div>
    </div>
  </div>

  <!-- container missão e visão -->
  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-globe logo slideanim"></span>
      </div>
      <div class="col-sm-9">
        <h2 class="text-center">Nossos Valores</h2>

        <h4 class="text-justify"><strong>MISSÃO:</strong><br><br> A nossa missão é atender o cliente prestando o suporte necessário para que se crie a sua empresa ou se adéque as normas devidas e tenha uma progressão em seu devido ramo. Garantir aos clientes a satisfação em adquirir os nossos serviços, atendendo suas expectativas com preços competitivos. Essa é a razão de existir a <strong>MSY Soluções Contábeis e o seu objetivo maior</strong>.</h4>

        <h4 class="text-justify"><strong>VISÃO:</strong><br><br> Comercializar serviços de qualidade e segurança. Garantir aos clientes a satisfação de nos escolher. Ser até 2018 uma empresa reconhecida por exercer uma atividade de qualidade.</h4>

        <h4 class="text-justify"><strong>VALORES:</strong><br><br> Inovação, Compromisso, Ética nos Negócios, Disposição, Responsabilidade, Respeito e Valorização do Ser Humano, Transparência e Credibilidade.</h4>
      </div>
    </div>
  </div>

  <!-- container de serviços -->
  <div id="services" class="container-fluid text-center">
    <h2 class="margin">SERVIÇOS</h2>
    <h4>O que nós oferecemos</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <a href="#contabilidade">
          <span class="glyphicon glyphicon-file logo-small"></span>
        </a>
        <h4>CONTABILIDADE</h4>
        <p>Organização e Compilação de Dados</p>
      </div>
      <div class="col-sm-4">
        <a href="#consultoria">
          <span class="glyphicon glyphicon-user logo-small"></span>
        </a>
        <h4>CONSULTÓRIA</h4>
        <p>Prestação de Serviço Profissional e Qualificado</p>
      </div>
      <div class="col-sm-4">
        <a href="#auditoria">
          <span class="glyphicon glyphicon-list-alt logo-small"></span>
        </a>
        <h4>AUDITORIA</h4>
        <p>Revisões que Asseguram a Fidelidade dos Registros</p>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-4 col-sm-offset-4">
        <a href="#plano-de-negocios">
          <span class="glyphicon glyphicon-book logo-small"></span>
        </a>
        <h4>PLANO DE NEGÓCIOS</h4>
        <p>Guia para o Empreendedor ou Empresário</p>
      </div>
    </div>
  </div>

  <!-- container de portifólio -->
  <div id="portfolio" class="container-fluid text-center bg-grey">
    <h2 class="margin">Nossa Área de Atuação</h2>
    <div class="row text-center slideanim">
      <div class="col-sm-12">
        <div class="thumbnail">
          <img src="<?php echo BASE_URL; ?>public/img/trabalhando.jpg" alt="imagem">
        </div>
      </div>
    </div>

    <div class="container-fluid bg-grey">
      <div class="row">
        <div class="col-sm-12">
          <h2>CONTABILIDADE</h2>
          <h4 class="text-justify" id="contabilidade">A Contabilidade procura captar, organizar e compilar dados. Sua matéria prima são fatos de significado econômicos e financeiros expressos em moeda. Seu produto final são demonstrações financeiras. A contabilidade organiza e proporciona um bem-estar para a empresa.</h4>

          <h2 id="consultoria">CONSULTORIA</h2>
          <h4 class="text-justify">Consultoria, de uma forma ampla, é o fornecimento de determinada prestação de serviço, em geral por profissional qualificado e conhecedor do tema. O serviço de consultoria oferecido ao cliente acontece por meio de diagnósticos e processos e tem o propósito de levantar as necessidades do cliente, identificar soluções e recomendar ações. De posse dessas informações, o consultor desenvolve, implanta e viabiliza o projeto de acordo com a necessidade específica de cada cliente.</h4>

          <h2 id="auditoria">AUDITORIA</h2>
          <h4 class="text-justify">Uma Auditoria é uma revisão das demonstrações financeiras, sistema financeiro, registros, transações e operações de uma entidade ou de um projeto, efetuada por contadores, com a finalidade de assegurar a fidelidade dos registros e proporcionar credibilidade às demonstrações financeiras e outros relatórios da administração. A Auditoria também identifica deficiências no sistema de controle interno e no sistema financeiro e apresenta recomendações para melhorá-lo.</h4>

          <h4 class="text-justify">A Auditória segue as seguintes etapas: <strong>Planejamento, Levantamento e Análise de Dados, Preparação e Divulgação de Resultados</strong>.</h4>

          <h2 id="plano-de-negocios">PLANO DE NEGÓCIOS</h2>

          <h4 class="text-justify">Um Plano de Negócios é um guia para o empreendedor ou empresário. Trata-se de um documento onde se descreve um negócio, se analisa a situação do mercado e se estabelecem as ações que se irão realizar no futuro juntamente com as estratégias correspondentes para implementá-las.</h4>

          <h4 class="text-justify">Deste modo, o Plano de Negócios é um instrumento que permite comunicar uma ideia de negócio para vender ou para obter financiamento. Também se trata de uma ferramenta de uso interno para o empresário, pois permite-lhe avaliar a viabilidade das suas ideias e fazer um seguimento da aplicação dessas na prática.</h4>
        </div>
      </div>
    </div>

    <h2>O que Nossos Colaboradores Dizem</h2>

    <!-- carrossel -->
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

      <!-- indicadores -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- conteúdo dos slides -->
      <div id="contact" class="carousel-inner" role="listbox">
        <div class="item active">
          <h4>"É fundamental diminuir a distância entre o que se diz e o que se faz, de tal forma que, num dado momento, a tua fala seja a tua prática"<br><span style="font-style:normal;">Paulo Freire, Filosofo, Empresa</span></h4>
        </div>
        <div class="item">
          <h4>"Planejar é necessário, organizar é preciso, dirigir é essencial e ter o controle é indispensável!"<br><span style="font-style:normal;">Yannis Teixeira, Função, MSY Soluções Contábeis</span></h4>
        </div>
      </div>

      <!-- controles de direita e esquerda -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- container de contato -->
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTATO</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Entre em contato, retornamos dentro de 24 horas.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Contagem, 177, Industrial, Brasil</p>
        <p><span class="glyphicon glyphicon-phone-alt"></span> +55 31 3362-3647</p>
        <p><span class="glyphicon glyphicon-phone"></span> +55 31 9 9378-1707</p>
        <p><span class="glyphicon glyphicon-envelope"></span> contato@msysolucoescontabeis.com.br</p>
      </div>
      <form action="<?php echo BASE_URL; ?>app/requests/processa_contato.php" method="post">
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="nome" name="contato[nome]" placeholder="Nome" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="contato[email]" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comentario" name="contato[comentario]" placeholder="Comentário" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" id="enviar" type="submit">Enviar</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- rodapé -->
  <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>&copy - ContabilidadeMSYLtda.
      <a href="http://google.com" title="Visit the Google"></a>
    </p>
  </footer>

  <!-- importando script do framework prefix-free -->
  <script src="<?php echo BASE_URL; ?>libs/prefix-free/js/prefix_free.min.js"></script>

  <!-- importando script do framework jquery -->
  <script src="<?php echo BASE_URL; ?>libs/jquery/js/jquery.min.js"></script></script>

  <!-- importando script do framework bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- importando script da página index -->
  <script src="<?php echo BASE_URL; ?>public/js/index.js"></script>

  <script type="text/javascript">
    $('document').ready(function() {
      $('#enviar').click(function() {
        alert('Seu contato foi gravado com sucesso!');
      })
    })
  </script>

</body>

</html>
