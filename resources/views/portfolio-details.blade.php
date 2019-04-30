
@extends('layouts.front')

@section('content')
  <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Portfolio Single</h2>
                  <div class="page_link">
                      <a href="index.html">Home</a>
                      <a href="portfolio-details.html">Porfolio Single</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->

	<!--================Start Portfolio Details Area =================-->
	<section class="portfolio_details_area section-margin">
    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-10">
          <div class="portfolio_details_inner">
            <div class="row">
              <div class="col-12">
                  <div class="left_img">
                      <img class="img-fluid" src="img/portfolio/portfolio-details.jpg" alt="">
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-7 mb-4 mb-lg-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit.</p>
                <p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                aliquam quaerat voluptatem.</p>
              </div>
              <div class="col-lg-5">
                <div class="portfolio_right_text mt-30">
                    <h4 class="text-uppercase">Project Info</h4>
                    <p>
                        Made after a can't fruitful, fowl of greater saying years there saw you sea does
                    </p>
                    <ul class="list">
                        <li><span>Rating</span>: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i></li>
                        <li><span>Client</span>: colorlib</li>
                        <li><span>Website</span>: colorlib.com</li>
                        <li><span>Completed</span>: 17 Aug 2018</li>
                    </ul>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Portfolio Details Area =================-->
    
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