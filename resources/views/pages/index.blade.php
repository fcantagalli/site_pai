<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    @include('includes.head')
  </head>
  <body>
	<header>
		@include('includes.header')
	</header>

	<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/index-main-image.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Cantagalli Seguros</h2>
                                    <p class="animation animated-item-2">A garantia do seu patrimônio e a tranquilidade da sua família</p>
                                    {{-- <a class="btn-slide animation animated-item-3" href="#">Read More</a> --}}
                                </div>
                            </div>

                            {{-- <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	<div class="container-fluid companies-container">
		<img src="images/seguradoras/porto-seguro.svg" alt="Porto Seguro"/>
		<img src="images/seguradoras/azul-seguros.jpeg" alt="Azul Seguros"/>
		<img src="images/seguradoras/itau-seguros.png" alt="Itaú Seguros"/>
		<img src="images/seguradoras/tokio-marine.png" alt="Tokio Marine"/>
		<img src="images/seguradoras/sulamerica.png" alt="SulAmérica Seguros"/>
		<img src="images/seguradoras/bradesco.svg" alt="Bradesco Seguros"/>
		<img src="images/seguradoras/ituran-seguro.jpg" alt="Ituran Seguros"/>
		<img src="images/seguradoras/suhai.png" alt="Suhai Seguros"/>
	</div>

	{{-- <div class="feature">
		<div class="container">
			<div class="text-center">
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-book"></i>
						<h2>Full Responsive</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-laptop"></i>
						<h2>Retina Ready</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-heart-o"></i>
						<h2>Full Responsive</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<i class="fa fa-cloud"></i>
						<h2>Friendly Code</h2>
						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	{{-- <div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<h2>about us</h2>
				<img src="images/6.jpg" class="img-responsive"/>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
			</div>

			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<h2>Template built with Twitter Bootstrap</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget.
				Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget.
				Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque </p>
			</div>
		</div>
	</div> --}}

	<section class="lates">
		<div class="container">
			<div class="text-center">
				<h2>Nossos Serviços</h2>
			</div>
			<div class="col-md-3 wow fadeInDown center-vertical" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="images/servicos/seg_auto2.jpg" class="img-responsive service-image"/>
				<h3>Automéveis</h3>
				<p>O seguro de automóvel visa cobrir os prejuízos causados a seu veículo, que podem ser ocasionados por colisão, incêndio e roubo.</p>
			</div>

			<div class="col-md-3 wow fadeInDown center-vertical" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="images/servicos/seg_familia.jpg" class="img-responsive service-image"/>
				<h3>Vida</h3>
				<p>O seguro de vida tem por finalidade o pagamento aos beneficiários de uma determinada quantia (capital segurado) previamente fixada na apólice nos eventos.</p>
			</div>

			<div class="col-md-3 wow fadeInDown center-vertical" data-wow-duration="1000ms" data-wow-delay="900ms">
				<img src="images/servicos/seg_residencia.jpg" class="img-responsive service-image"/>
				<h3>Residencial</h3>
				<p>O seguro residencial visa proteger o seu patrimônio e garantir o recebimento de indenização em situações inesperadas como roubo, incêndio ou danos elétricos.</p>
			</div>

			<div class="col-md-3 wow fadeInDown center-vertical" data-wow-duration="1000ms" data-wow-delay="900ms">
				<img src="images/servicos/seg_viagem.jpg" class="img-responsive service-image"/>
				<h3>Viagem</h3>
				<p>Esse tipo de seguro visa oferecer maior tranquilidade e comodidade ao segurado em viagens.</p>
			</div>
		</div>
	</section>

	{{-- <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </section><!--/#partner--> --}}

	<section id="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-14">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-right" style="margin-left:5px">
                            <a id="calculate-insurance-btn" class="btn btn-primary" href="http://www.coteconosco.com.br:63100/Calculo?cor=cantagalli

">Calcule seu seguro aqui</a>
                        </div>
                        <div class="media-body">
                            <h2>Tenha a cotação do seguro do seu carro agora.</h2>
                            <p>Ou entre em contato conosco através dos telefone (11) 2533-0299, (11) 98314-7206 ou através do e-mail <a href="mailto:cantagalli@cantagalli.com.br"/>cantagalli@cantagalli.com.br</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#contact-info-->

	<footer>
		@include('includes.footer')
	</footer>

</body>
</html>
