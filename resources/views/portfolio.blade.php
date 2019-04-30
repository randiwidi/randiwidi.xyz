
@extends('layouts.front')

@section('content')
  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Portfolio</h2>
                  <div class="page_link">
                      <a href="index.html">Home</a>
                      <a href="portfolio.html">Portfolio</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->


  <!--================ Start Portfolio Area =================-->
	<section class="portfolio_area section-margin pb-0" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<p class="top_text">Our Portfolio <span></span></p>
						<h2>Check Our Recent <br>
							Client Work </h2>
					</div>
				</div>
			</div>

			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li>
				</ul>
			</div>

			<div class="filters-content">
				<div class="row portfolio-grid">
					<div class="grid-sizer col-md-3 col-lg-3"></div>
					<div class="col-lg-6 col-md-6 all following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p1.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all latest popular upcoming">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p4.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 all latest following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p2.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 all latest upcoming">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p3.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all popular">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p6.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 all popular latest following">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="img/portfolio/p5.jpg" alt="">
							<div class="overlay"></div>
							<div class="short_info">
								<h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
								<p>Art, Illustration</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--================ End Portfolio Area =================-->


  <!--================ Start Brands Area =================-->
	<section class="brands-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="owl-carousel brand-carousel">
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo1.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo2.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo3.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo4.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo5.png" alt="">
							</div>
						</div>
						<!-- single-brand -->
						<div class="single-brand-item d-table">
							<div class="d-table-cell">
								<img src="img/brands/logo3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brands Area =================-->

	@endsection