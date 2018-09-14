@extends('layouts.app')

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item pl-1">
                    <a class="nav-link text-white" href="#">LOGO</a>
                </li>
                <li class="nav-item dropdown pl-1">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Buy
                    </a>
                    <div class="dropdown-menu by-items" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item custome-item text-white" href="#">Apartment<br>Houses</a>
                        <a class="dropdown-item custome-item text-white" href="#">Commercial <br> Bungalow<br> Villas</a>
                    </div>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link text-white" href="#">Rent</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link text-white" href="#">Land</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Property Insider</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Finde agent</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Property Wanted</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Service</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Blog</a>
                </li>
                <li class="nav-item pl-1">
                    <button type="button" class="btn btn-primary bg-transparent apartment-btn-shape ">List your apartments</button>
                </li>
                <li class="nav-item pl-1 btn-set-margin">
                    <a href="{{url('/login')}}" class="btn btn-primary bg-transparent btn-shape text-white">Login</a>
                </li>
                <li class="nav-item pl-1 btn-set-margin">
                    <a href="{{url('/register')}}" class="btn btn-primary bg-transparent btn-shape  text-white">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    @endsection

@section('middle')
    <div class="row">
        <div class="col-lg-2 col-md-2  .d-none .d-lg-block .d-xl-none"></div>
        <div class=" col-lg-10 col-md-10 col-sm-12 col-xm-12">
            <div class="row pt-5">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xm-12  search-bar-wrapper mt-5">
                    <div class=" pl-2 pt-2">
                        <span class="text-white">Search properties for sale</span>
                    </div>
                    <div class="pl-2 pt-2">
                        <button type="button " class="col-md-2 col-sm-12 btn btn-outline-primary btn-sm bg-transparent btn-option  text-white">Buy</button>
                        <button type="button" class="col-md-2 col-sm-12 btn btn-primary btn-sm bg-transparent  btn-option  text-white">Rent</button>
                        <button type="button" class=" col-md-2 col-sm-12 btn btn-primary btn-sm bg-transparent  btn-option  text-white">Agent</button>
                    </div>

                    <div class="row  mb-4 pl-2 pr-3">
                        <div class=" col-md-10 col-sm-12 col-xm-12 pr-0 ">
                            <input type="text" class="form-control set-padding" id="validationDefault01" placeholder="Search" value="" required>
                        </div>
                        <div class="col-md-2 col-sm-12 col-xm-12 pl-0 set-pd-bu">
                            <button type="button " class="  col-sm-12 col-xm-12  btn btn-primary search-button  text-white">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 .d-none .d-lg-block .d-xl-none"></div>
    </div>
@endsection
@section('content')
    <div class="home-wrapper p-0" style="height:600px;">
        <div class="container">
            <div class="row">
                <div class="middle-image text-center">
                    <img src="{{URL::asset('/images/homepage/middle-01.png')}}" style="width: 100%;">
                </div>
            </div>
            <div class="row p-4">
                <div class="col-md-12 text-center">
                   <h2 class="featured-header">Featured</h2>

                </div>
                <div class="col-md-8  offset-md-2  featured-description text-center">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>

                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-12 ">
                    <h2 class="featured-header to-buy">Apartments to buy</h2>
                </div>
                <div class="col-md-12">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                          <div class="col-md-3 pt-4">
                                              <div class="card shadow  " >
                                                  <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                                  <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                      <div class=" float-right">
                                                          <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3 pt-4">
                                              <div class="card shadow " >
                                                  <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                                  <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                      <div class=" float-right">
                                                          <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3  pt-4">
                                              <div class="card shadow" >
                                                  <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                                  <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                      <div class=" float-right">
                                                          <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3  pt-4">
                                              <div class="card shadow" >
                                                  <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                                  <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                      <div class=" float-right">
                                                          <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>



                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body ">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="float-right pt-3">
                            <button type="button" class=" view-all-button btn btn-primary btn-lg more-button">View all...</button>
                        </div>
                        <div class="slider-button">

                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>



                    </div>
                </div>

            </div>
            <div class="row pt-4">
                <div class="col-md-12 ">
                    <h2 class="featured-header to-buy">Apartments to buy</h2>
                </div>
                <div class="col-md-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow  " >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow " >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3  pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3  pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body ">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="float-right pt-3">
                            <button type="button" class=" view-all-button btn btn-primary btn-lg more-button">View all...</button>
                        </div>
                        <div class="slider-button">

                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>



                    </div>
                </div>

            </div>
            <div class="row pt-4">
                <div class="col-md-12 ">
                    <h2 class="featured-header to-buy">Apartments to buy</h2>
                </div>
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow  " >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow " >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3  pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3  pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body ">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="float-right pt-3">
                            <button type="button" class=" view-all-button btn btn-primary btn-lg more-button">View all...</button>
                        </div>
                        <div class="slider-button">

                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>



                    </div>
                </div>

            </div>
            <div class="row pt-4">
                <div class="col-md-12 ">
                    <h2 class="featured-header to-buy">Apartments to buy</h2>
                </div>
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow  " >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow " >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3  pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3  pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body ">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pt-4">
                                        <div class="card shadow" >
                                            <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <div class=" float-right">
                                                    <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="float-right pt-3">
                            <button type="button" class=" view-all-button btn btn-primary btn-lg more-button">View all...</button>
                        </div>
                        <div class="slider-button">

                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>



                    </div>
                </div>

            </div>

            <div class="row">

                    <div class="col-md-4 col-sm-12 col-xm-12">
                        <h2>House loan Calculater</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        <p><strong>Lorem Ipsum Lorem Ipsum</strong></p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xm-12 pb-3 " >

                        <div class="card p-4" >
                        <form class="p-2 ">
                            <div class="row">

                                <div class="col-md-6 col-sm-12 col-xm-12 p-1">
                                    <label for="inputAddress2">Repayment methode</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>select your payment methode</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col col-md-6 col-sm-12 col-xm-12 p-1">
                                    <label for="inputAddress2">Loan amount</label>
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xm-12 p-1">
                                    <label for="inputAddress2">Loan term (Year)</label>
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col col-md-6 col-sm-12 col-xm-12 p-1">
                                    <label for="inputAddress2">Months</label>
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xm-12 p-1">
                                    <label for="inputAddress2">Bank</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>select your bank</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col col-md-6 col-sm-12 col-xm-12 p-1">
                                    <label for="inputAddress2">Interest Rate</label>
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="float-right pt-4">
                                <button type="button" class="btn btn-primary btn-lg cal-button">Calculate</button>
                            </div>

                        </form>

                    </div>


                    </div>
                </div>


            </div>

        <div class="container-fluid pt-5  inquiry-section">

            <div class="container">
            <div class="row pt-3 ">
                <div class="col-md-5 offset-md-1 pb-4">
                    <h2 class="text-white text-center">inquiries</h2>
                    <div class="card inquiry ">
                        <form class="p-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="form-check-label pr-4" for="defaultCheck1">
                                    Subscribe to our news latter
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">

                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-lg inquiry-button">&nbsp;&nbsp;&nbsp;inquiry&nbsp;&nbsp;&nbsp;</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6" >

                    <div class="col-md-10 offset-md-2 pt-md-5 text-white">
                        <h3>Contacu us</h3>
                        <h3 class="pl-4">Telda Holdings</h3>
                        <div class="icon-container " >
                            <span class="ti-location-pin" style="font-size: 30px;"></span><span class="icon-name pl-1"> No 456 ,Walukarama road,</span>
                        </div>
                        <div class="fa-hover "><a  class="text-white"><i class="fa fa-phone  "  style="font-size: 30px;"></i> <span class="pl-2">Phone xxxx xxxx xxx</span></a></div>
                    </div>

                </div>
            </div>
            </div>
        </div>

        <div class="row">
        <div class="container">
            <div class="col-md-12">
                <h2 class="pt-3">Properrt news and blogs</h2>
            </div>
            <div class="row p-4">
                <div class="col-md-3 pt-4">
                    <div class="card shadow  " >
                        <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class=" float-right">
                                <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pt-4">
                    <div class="card shadow " >
                        <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class=" float-right">
                                <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  pt-4">
                    <div class="card shadow" >
                        <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class=" float-right">
                                <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  pt-4">
                    <div class="card shadow" >
                        <img class="card-img-top" src="{{URL::asset('/images/homepage/blog-img-01.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class=" float-right">
                                <button type="button" class="btn btn-primary btn-sm more-button">more...</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

        </div>





@endsection


