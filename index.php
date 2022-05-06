<?php 
include_once("cabecalho.php")
?>




<!-- CABEÇALHO -->
<header class="cabecalho">
	<div class="container">
		<div class="intro-text">
			<div class="intro-heading text-uppercase">
				David Santos de Santana
			</div>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#cursos"> Meus Projetos</a>

		</div>
	</div>
</header>


<!-- sobre -->
<section class="page-section" id="sobre">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Sobre</h2>
				<h3 class="section-subheading text-muted"> 
			</div>
		</div>
    
    
    <div class="row text-center">
    <div class="col-md-6">
		<img src="img/David.jpeg" class="figure-img img-fluid rounded foto-david">
    </div>
    
    
    <div class="col-md-5">
    <h4 class="titulo_formacao text-uppercase">David Santos</h4>
				<p class="text-muted">Meu nome é David Santos, tenho 29 anos, atualmente sou estudante de Análise e 
        Desenvolvimento de Sistemas na UNCID (Universidade Cidade de São Paulo).
Sou apaixonado por tecnologia desde adolescente tendo cursado (Informática e Hardware).</p>
        <p class="text-muted">Tenho Habilidades em (Java, python, C, C#, HTML, CSS, BOOTSTRAP, PHP, Linux e Inglês Básico)</p>
        <p class="text-muted">Tenho aprendido muito de forma independente com cursos online. 
          (Escola: Udemy Curso: Desenvolvedor Back-End, Escola: Udemy Curso: Desenvolvedor Front-End WEB).</p>
        <p class="text-muted">Meu desejo é agregar meu conhecimento e experiência junto com uma boa 
        equipe e poder oferecer o que tenho de melhor com habilidade e competência.</p>
			</div>
      </div>

	</div>
</section>





 <!-- Área dos Projetos -->
  <section class="bg-light page-section" id="cursos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Meus Projetos</h2>
          <h3 class="section-subheading text-muted"> <a class="text-muted" href="portifolio.php">Ver a lista completa dos Projetos</h3></a>
        </div>
      </div>

      <div class="row">

        <div class="col-md-4 col-sm-6 cursos-item">
          <a class="cursos-link" href="HotelFreitasMar.php">
            <div class="cursos-hover">
              <div class="cursos-hover-content">
                <i class="fas fa-code fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/HotelFreitasMar/imagem.jpg" alt="">
          </a>
          <div class="cursos-caption">
            <h4>Hotel Freitas Mar</h4>
            <p class="text-muted">É um Sistema Desenvolvido em C# e SQL</p>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 cursos-item">
          <a class="cursos-link" href="cadastroAluno.php">
            <div class="cursos-hover">
              <div class="cursos-hover-content">
              <i class="fas fa-code fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/CadastroAluno/imagem.jpg" alt="">
          </a>
          <div class="cursos-caption">
            <h4>Cadastro aluno</h4>
            <p class="text-muted">É um Sistema Desenvolvido em JAVA e SQL</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 cursos-item">
          <a class="cursos-link" href="SmatOdonto.php">
            <div class="cursos-hover">
              <div class="cursos-hover-content">
              <i class="fas fa-code fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/SmatOdonto/imagem.jpg" alt="">
          </a>
          <div class="cursos-caption">
            <h4>Smart Odonto</h4>
            <p class="text-muted">É um Sistema Desenvolvido em JAVA e SQL</p>
          </div>
</div>
      </div>
  	</div>
	</section>

 <!-- Contatos -->
  <section class="page-section" id="contatos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contato</h2>
          <h3 class="section-subheading text-muted text-primary"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form action="https://api.staticforms.xyz/submit" id="contactForm" name="sentMessage" method="POST" novalidate="novalidate">
            <input type="hidden" name="accessKey" value="facc5ca8-ab15-4dbe-8363-db71e8801231">
           <input type="hidden" name="redirectTo" value="http://davidsantos.ezyro.com/index.php#contatos" >

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control"  id="nome" name="name" type="text" placeholder="Seu Nome *" required="required" 
                  data-validation-required-message="Preencha seu nome.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="text" placeholder="Seu Email *" required="required" 
                  data-validation-required-message="Preencha seu Email!">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="telefone" name="phone" type="text" placeholder="Seu Telefone">
                 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="mensagem" name="message" placeholder="Sua Mensagem *" required="required" 
                  data-validation-required-message="Entre com a Mensagem!!"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="" class="btn btn-primary btn-xl text-uppercase" type="submit" href="">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>




  <!-- Rodapé -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright"><i class="far fa-envelope mr-1"></i>davidjaneiro92@gmail.com</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://github.com/davidjaneiro92">
                <i class="fab fa-github"></i>
              </a>
            </li>
           
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/david-santos-de-santana-59a120199">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
           
            <li class="list-inline-item">
              David Santos - <a class="text-muted" href="http://api.whatsapp.com/send?1=pt_BR&phone=5511981582826" alt="11 981582826" target="_blank"><i class="fab fa-whatsapp mr-1"></i>11 981582826</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
 



</body>
</html>


