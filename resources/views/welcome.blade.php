<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets_0/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_0/css/responsiveness.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_0/plugins/css/plugins.css') }}" rel="stylesheet">
        <style>
   
            .search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
    background-color: #ffc800;
    border-color: #ffc800;
}
        </style>
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="images/ll.png" alt="..." style="height: 5rem;"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/search" style="font-size: 13px;">Reserver</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio" style="font-size: 13px;">Inspiration</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about"style="font-size: 13px;">Propos de nous</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact"style="font-size: 13px;">Contacter Nous</a></li>
                    @if (Auth::user())
                        
                          
                            <li class="nav-item"><a class="nav-link" href="{{ route('booking.index')}}" style="font-size: 13px;">My Reservation</a></li>
                                 
                        <form method="POST" action="{{ route('logout') }}" >
                    @csrf
                    <li class="nav-item"><a style="font-size: 13px;" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();" href="route('logout')">Logout</a></li>
                    </form>
                                         

                     @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" style="font-size: 13px;">Login</a></li>
            
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" style="font-size: 13px;">Register</a></li>
                      
                     @endif
                   
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
       
<section class="main-banner scroll-con-sec hero-section" data-scrollax-parent="true">

        <div class="slideshow-container">
				<!-- slideshow-item -->	
				<div class="slideshow-item">
					<div class="bg"  data-bg="images/b01.jpg"></div>
				</div>
				<!--  slideshow-item end  -->	
				<!-- slideshow-item -->	
				<div class="slideshow-item">
					<div class="bg"  data-bg="images/b02.jpg"></div>
				</div>
				<!--  slideshow-item end  -->	
				<!-- slideshow-item -->	
				<div class="slideshow-item">
					<div class="bg"  data-bg="assets_0/img/banner-4.jpg"></div>
				</div>
        </div>

<div class="overlay"></div>
			<div class="hero-section-wrap fl-wrap">
				<div class="container">
					<div class="intro-item fl-wrap">
						<div class="caption text-center cl-white">
							<h2>Discover Your Next Adventure</h2>
							<p>Expolore top rated hotels and appartements around the world</p>
<section class="search-sec" style="padding-left: 12rem;">
   
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
    {!! Form::open(['route' => 'search.index' , 'method' => 'GET']) !!}
                            
                            <select class="form-control search-slt" name="city" id="">
                            @foreach($city as $city)
                                <option value=" {{$city}}"> {{$city}}</option>
                                @endforeach
                            </select>
                               
                           
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <select class="form-control search-slt" name="type" id="">
                        @foreach($type as $type)
                           
                                <option value="{{$type}}"> {{$type}}</option>
                                @endforeach
                                
                            </select>                       
                         </div>
 
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    {{ Form::Submit('Search', ['class' => 'btn btn-primary wrn-btn'])}}
                    {{ form::close() }}

                            <!-- <button type="button" class=" btn btn-danger wrn-btn" >Search</button> -->
                        </div>
                    </div>
                </div>
            </div>
    
</section>
						</div>
                    </div>
                </div>
            </div>
</div>

</section>

        <!-- pppppp -->

        <section class="page-section" id="services">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<h1>Nos endroits les plus Recommand??s!</h1>
						</div>
					</div>
				</div>
				
				<div class="row">
						
					<!-- Single Tour -->
					<div class="col-md-4 col-sm-4">
						<article class="tour-box style-1">
							
							<div class="tour-box-image">
								<figure>
									<a href="articles/5">
										<img src="images/0011.jpg" class="img-responsive listing-box-img" alt="" />
										<div class="list-overlay"></div>
									</a>
															
									<h4 class="destination-place">
										<a href="articles/5">Concorde De Luxe Resort</a>
									</h4>
							
								</figure>
							</div>

							<div class="inner-box">
								<div class="box-inner-ellipsis">
									<h4 class="entry-title">
										<a href="articles/5">Turquie, Antalya</a>
									</h4>
									<div class="price-box">
										<div class="tour-price fl-right">
											<i class="ti ti-user"></i><span class="theme-cl f-bold">$250/Night</span>
										</div>
									</div>
								</div>
							</div>
		
						</article>
					</div>			
					<!-- Single Tour -->
					<div class="col-md-4 col-sm-4">
						<article class="tour-box style-1">
							
							<div class="tour-box-image">
								<figure>
									<a href="articles/7">
										<img src="images/0032.jpg" class="img-responsive listing-box-img" alt="" />
										<div class="list-overlay"></div>
									</a>														
									<h4 class="destination-place">
										<a href="articles/7">Hilton Tanger City Center Hotel</a>
									</h4>							
								</figure>
							</div>			

							<div class="inner-box">
								<div class="box-inner-ellipsis">
									<h4 class="entry-title">
										<a href="articles/7">Maroc,Tanger</a>
									</h4>
									<div class="price-box">
										<div class="tour-price fl-right">
											<i class="ti ti-user"></i><span class="theme-cl f-bold">$120/Night</span>
										</div>
									</div>
								</div>
							</div>
		
						</article>
					</div>
					
					<!-- Single Tour -->
					<div class="col-md-4 col-sm-4">
						<article class="tour-box style-1">
							
							<div class="tour-box-image">
								<figure>
									<a href="articles/9">
										<img src="images/0051.jpg" class="img-responsive listing-box-img" alt="" />
										<div class="list-overlay"></div>
									</a>
									<div class="entry-bookmark">                                   
										<a href="articles/9"><i class="ti-bookmark"></i></a>
									</div>
							
									<h4 class="destination-place">
										<a href="articles/9">Hotel ON7 Sakarya</a>
									</h4>
								
								</figure>
							</div>
						

							<div class="inner-box">
								<div class="box-inner-ellipsis">
									<h4 class="entry-title">
										<a href="articles/9">Turqui, Sakarya</a>
									</h4>
									<div class="price-box">
										<div class="tour-price fl-right">
											<i class="ti ti-user"></i><span class="theme-cl f-bold">$300/Night</span>
										</div>
									</div>
								</div>
							</div>
		
						</article>
					</div>
				</div>
		
			</div>
		</section>
        <!-- Services-->
        <!-- <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Inspiration</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/marakach1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Marrakeck</div>
                                <div class="portfolio-caption-subheading text-muted">Jamae-Ifnae</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/paris1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paris</div>
                                <div class="portfolio-caption-subheading text-muted">La Tour Eiffel</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/miami1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Miami</div>
                                <div class="portfolio-caption-subheading text-muted">Plages</div>
                            </div>
                        </div>
                    </div>
                    
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">A Propos de nous</h2>
                    <h3 class="section-subheading text-muted">Qui sommes nous ?</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2021-2022</h4>
                                <h4 class="subheading">Fondation</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">>Fond??e en 2021 ?? Tanger, Booking.com est votre site de r??servation 100% fidele dont le but principal est de permettre aux voyageurs du Maroc et du monde entier de vivre des exp??riences inoubliables.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Type d'hebergement</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Diff??rents types d???h??bergements au Monde vous sont propos??s (loisirs ou affaires) pour r??pondre au mieux ?? vos besoins et vous permettre ainsi de mieux g??rer vos d??placements.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                               
                                <h4 class="subheading">Frais de reservation</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Pas de frais de r??servation ni de frais administratifs et dans la majorit?? des cas,vos r??servations peuvent ??tre annul??es gratuitement (sauf pour celles o?? le pr??-paiement est requis) avec des plates formes s??curis??es qui veillent sur la confidentialit?? de vos donn??es personnelles.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                          
                                <h4 class="subheading">Notre Services</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Notre service clients est disponible pour vous assister et vous r??pondre de l?? o?? vous ??tes dans le monde entier.Quelque soit la finalit?? de vos voyages et d??placements, Booking.com, un nouveau Maroc ?? la port??e et une passion ?? vivre sans regret.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
    
        <!-- Clients-->

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Nous sommes ?? votre ??coute ch??res clients</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="/">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-check mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                        Un Objectif Commercial
                                </label>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                           
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-success btn-xl text-uppercase " id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn  btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn  btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Marrakech</h2>
                                    <p class="item-intro text-muted">Pourquoi marrakech est une ville touristique?.</p>
                                    <img class="img-fluid d-block mx-auto" src="images/marakach1.jpg" alt="..." />
                                    <p>Elle a su attirer les touristes gr??ce ?? l'hospitalit?? l??gendaire des Marocains, ?? la saveur de la cuisine locale et au co??t de la vie plus abordable par rapport ?? celui des autres destinations</p>
                               
                                    <p class="item-intro text-muted">Jamaa Lfna.</p>
                                    <img class="img-fluid d-block mx-auto" src="images/marakach2.jpg" alt="..." />
                                    <p>La place Jamaa Alfna (en amazighe : ?????????????????? ??? ???????????? ????????????, en arabe : ???????? ???????? ??????????, ?? place de la mosqu??e des tr??pass??s ??) est une c??l??bre place publique au sud-ouest de la m??dina de Marrakech au Maroc. Ce haut-lieu traditionnel, populaire et anim?? notamment la nuit attire plus d'un million de visiteurs chaque ann??e.</p>

                                    <p class="item-intro text-muted">Tanjia Marrakchia</p>
                                    <p>Elle a su attirer les touristes gr??ce ?? l'hospitalit?? l??gendaire des Marocains, ?? la saveur de la cuisine locale et au co??t de la vie plus abordable par rapport ?? celui des autres destinations</p>

                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Paris</h2>
                                    <p class="item-intro text-muted">Pourquoi Paris et une ville touristique?</p>
                                    <img class="img-fluid d-block mx-auto" src="images/paris1.jpg" alt="..." />                                    
                                    <p>Les monuments parisiens, par leur histoire et leur impressionnante architecture font incontestablement partie du charme de la capitale fran??aise. La Tour-Eiffel, Notre-Dame de Paris, le Sacr??-C??ur et l'Arc de Triomphe sont les plus r??put??s.</p>
                                    
                                    <p class="item-intro text-muted">La Tour Eiffel</p>
                                    <img class="img-fluid d-block mx-auto" src="images/paris2.jpg" alt="..." />
                                    <p>La tour Eiffel ??couter est une tour de fer puddl?? de 324 m??tres de hauteur (avec antennes)o 1 situ??e ?? Paris, ?? l???extr??mit?? nord-ouest du parc du Champ-de-Mars en bordure de la Seine dans le 7e arrondissement. Son adresse officielle est 5, avenue Anatole-France.Construite en deux ans par Gustave Eiffel et ses collaborateurs pour l'Exposition universelle de Paris de 1889, c??l??brant le centenaire de la R??volution fran??aise, et initialement nomm??e ?? tour de 300 m??tres ??, elle est devenue le symbole de la capitale fran??aise et un site touristique de premier plan : il s???agit du troisi??me site culturel fran??ais payant le plus visit?? en 2015,</p>
                                    
                                    <p class="item-intro text-muted">Croissant</p>
                                    <img class="img-fluid d-block mx-auto" src="images/paris3.jpg" alt="..." />
                                    <p>Le croissant a ??t?? invent?? "pour f??ter la fin du si??ge de Vienne par les Turcs, en 1683 ", explique Cl??mentine Portier-Kaltenbach dans ses " Secrets de Paris " (??d. La Librairie Vuibert) qui fourmillent d???anecdotes. Si vous calculez bien, les croissants ont ainsi mis une centaine d???ann??es pour arriver ?? Paris, puisque Marie-Antoinette d???Autriche a ??pous?? le futur Louis XVI en 1770.</p>
                                    
                                    
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Miami</h2>
                                    <p class="item-intro text-muted">Pourquoi Miami est une ville touristique?</p>
                                    <img class="img-fluid d-block mx-auto" src="images/miami1.jpg" alt="..." />
                                    <p>Ce n'est pas un hasard si la Floride est surnomm??e le Sunshine State. Et le moins que l'on puisse dire, c'est que Miami ne d??roge pas ?? la r??gle ! Toute l'ann??e, les temp??ratures d??passent les 20??C en journ??e. Un climat si agr??able qu'il est m??me possible de se baigner en mer en plein mois de d??cembre ! La ville est donc devenue, sans surprise, la destination de pr??dilection des Canadiens et Am??ricains en qu??te de chaleur en plein hiver.</p>

                                    <p class="item-intro text-muted">Parce que les plages y sont paradisiaques</p>
                                    <img class="img-fluid d-block mx-auto" src="images/miami3.jpg" alt="..." />
                                    <p>CLes kilom??tres et kilom??tres de plages qui bordent le littoral de Miami en font un des plus beaux endroits au monde. N'oublions pas que la ville est situ??e au bord des Cara??bes, une mer translucide abritant un univers aquatique ?? couper le souffle. Imaginez un peu de longues ??tendues de sable blanc et fin, bord??e d'un c??t?? par des all??es de cocotiers, et de l'autre par un lagon azur et translucide. Les plages forment un lieu de vie ?? part enti??re ?? Miami, id??ales pour les amateurs de farniente et de sports aquatiques.</p>

                                    <p class="item-intro text-muted">Parce que Miami est un lieu de f??te incontournable</p>
                                    <img class="img-fluid d-block mx-auto" src="images/miami2.jpg" alt="..." />
                                    <p>Si vous r??vez d'une destination vivante et anim??e, Miami est faite pour vous ! D??s la tomb??e de la nuit, les visiteurs et les locaux rejoignent les innombrables clubs et bo??tes de South Beach. C'est ici que se trouvent les clubs les plus branch??s de la ville, aussi anim??s en semaine que le week-end. D'ailleurs, il n'est pas rare que la f??te se poursuive sur la plage, un lieu de vie et de rencontres ?? part enti??re !</p>
                                    
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="{{ asset('assets_0/plugins/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets_0/plugins/js/wysihtml5-0.3.0.js') }}"></script>
        <script src="{{ asset('assets_0/plugins/js/bootstrap-wysihtml5.js') }}"></script>
        <script src="{{ asset('assets_0/plugins/js/slick.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('assets_0/js/custom.js') }}"></script>

    </body>
</html>


