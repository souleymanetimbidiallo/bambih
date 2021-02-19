@extends('layouts.app')

@section('others-css')
<style>
body{
  font-family: 'Nunito', sans-serif;
}
.jumbotron-odi-hero{
padding: 0rem 0rem;
 position: relative;
 max-width: 100%;
 
}
.jumbotron-odi-dark{
 max-width: 100%;
 padding: 0px;
 
}

.jumbotron-overlay {
 height:100%;
 padding: 100px 0;
 color:#fff;
 
}
.jumbotron-padding{
 padding-top: 6rem;
 
}

.btn-circle {
   border-radius: 30px;
}

.latest-news {
 border-bottom: .25rem solid transparent;
 border-bottom-color: #007bff;
}
</style>
@endsection


@section('content')
<div class="jumbotron jumbotron-odi-hero bg-primary">
    <div class="jumbotron-overlay ">
        <div class="container jumbotron-padding  text-center">
        <h1 class="display-4">Speed up your development with high quality themes.</h1>
           <p>
              <a href="https://www.odipixel.com" class="btn btn-lg btn-success btn-circle my-4 mr-3">Visit for more</a>
           </p>
        </div>
      </div>
  </div>
  
  
           <div class="container mt-5" id="about">
                     <h1 class="text-center py-4">Why to choose fixr landing</h1>
                    
                    <div class="row text-center mt-5">
                     <div class="col-md-3">
                      <div class="card shadow">
                        <div class="card-body">
                        <div class="py-3 text-center"> <i class="fas fa-rocket card-img-top fa-4x text-primary" aria-hidden="true"></i></div>
                        <div class="card-body">
                          <h4 class="card-title">Ready to ship</h4>
                          <p class="card-text">You can use this theme as personal as well as for commercial purpose & can customise it. </p>
                         </div>
                        </div>
                      </div>
                      </div>
                        <div class="col-md-3">
                       <div class="card shadow">
                        <div class="card-body">
                         <div class="py-3 text-center"><i class="fas fa-feather card-img-top fa-4x text-primary" aria-hidden="true"></i></div>
                        <div class="card-body">
                          <h4 class="card-title">Light weight</h4>
                          <p class="card-text">We avoid needless js and CSS which makes template more sleek and powerful. </p>
                         </div>
                        </div>
                      </div>
                      </div>
                        <div class="col-md-3">
                       <div class="card shadow">
                        <div class="card-body">
                        <div class="py-3 text-center"><i class="fa fa-tablet card-img-top fa-4x text-primary" aria-hidden="true"></i></div>
                       
                        <div class="card-body">
                          <h4 class="card-title">Responsive </h4>
                          <p class="card-text">Our templates works in all devices (desktop,tablets and phones). </p>
                          </div>
                        </div>
                      </div>
                      </div>
  
                               
                      <div class="col-md-3">
                       <div class="card shadow">
                        <div class="card-body">
                        <div class="py-3 text-center"><i class="fas fa-charging-station card-img-top fa-4x text-primary" aria-hidden="true"></i>
                       </div>
                        <div class="card-body">
                          <h4 class="card-title">Easy customisation</h4>
                          <p class="card-text">Our templates are clean,light weight and technically refined. </p>
                          </div>
                        </div>
  
                      </div>
                      </div>
                     
                    </div>
                  </div>
                <div class="container mt-5  text-center">
                   <p class="pt-5 pb-2 h4 text-monospace">Speed up your development with high quality themes.</p>
                  <div class="row">
                   
                    <div class="mx-auto" style="width: 800px;">
                      <p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    </div>
  
                  </div>
                </div>
                <!-- price plan starts -->
               <div class="container mt-5">
                  <div class="row py-5">
                    <div class="col-md-4">
                      <strong class="d-inline-block mb-2 text-primary">Price plans</strong>
                      <h3 class="mb-0">
                        No hidden charges
                     </h3>
                     <p class="lead text-muted">We have best suitable plans for your bussiness needs.Money back guarantee.</p>
                      <button type="button" class="btn btn-lg btn-primary btn-circle">Get started</button>
                    </div>
                    <div class="col-md-8">
                       <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow">
                      
                      <div class="card-body">
                        <h3 class="my-3 font-weight-norma text-uppercase">Free</h3>
                       
                        <span class="d-block  text-primary">
                          <span class="align-top">$</span>
                          <span class="display-4 font-weight-bold">0</span>
                          <span class="text-muted">/month</span>
                        </span>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>10 users included</li>
                          <li>2 GB of storage</li>
                          <li>Email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-circle">Sign up for free</button>
                      </div>
                    </div>
                    <div class="card mb-4 shadow">
                     
                      <div class="card-body">
                         <h3 class="my-3 font-weight-norma text-uppercase">Pro</h3>
                         <span class="d-block  text-primary">
                          <span class="align-top">$</span>
                          <span class="display-4 font-weight-bold">19</span>
                          <span class="text-muted">/month</span>
                        </span>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>20 users included</li>
                          <li>10 GB of storage</li>
                          <li>Priority email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary btn-circle">Get started</button>
                      </div>
                    </div>
                    <div class="card mb-4 shadow">
                        <div class="card-body">
                         <h3 class="my-3 font-weight-norma text-uppercase">Enterprise</h3>
                         <span class="d-block  text-primary">
                          <span class="align-top">$</span>
                          <span class="display-4 font-weight-bold">199</span>
                          <span class="text-muted">/month</span>
                        </span>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>30 users included</li>
                          <li>15 GB of storage</li>
                          <li>Phone and email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary btn-circle">Contact us</button>
                      </div>
                    </div>
                    </div>
                    
                  </div>
                 
               </div>
             </div>
               <!-- price plan ends -->
             <!-- features start -->
               <div class="container mt-5 ">
                     <p class="py-4 h3 text-center">Template features</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card shadow">
                          <div class="card-body">
                            <div class="media">
                              <div class="mr-4" style="height:64px;width:64px;">
                                <i class="fa fa-rocket card-img-top fa-4x text-primary" aria-hidden="true"></i>
                              </div>
                              <div class="media-body">
                                <h4 class="mt-0 tex-dark">Ready to ship</h4>
                                <p class=" text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card shadow">
                          <div class="card-body">
                            <div class="media">
                              <div class="mr-4" style="height:64px;width:64px;">
                                <i class="fa fa-leaf card-img-top fa-4x text-primary" aria-hidden="true"></i>
                              </div>
                              <div class="media-body">
                                <h4 class="mt-0 tex-dark">Light weight</h4>
                                <p class=" text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="row py-4">
                      <div class="col-md-6">
                        <div class="card shadow">
                          <div class="card-body">
                            <div class="media">
                              <div class="mr-4" style="height:64px;width:64px;">
                                <i class="fa fa-tablet card-img-top fa-4x text-primary" aria-hidden="true"></i>
                              </div>
                              <div class="media-body">
                                <h4 class="mt-0 tex-dark">Responsive</h4>
                                <p class=" text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card shadow">
                          <div class="card-body">
                            <div class="media">
                              <div class="mr-4" style="height:64px;width:64px;">
                                <i class="fa fa-cogs card-img-top fa-4x text-primary" aria-hidden="true"></i>
                              </div>
                              <div class="media-body">
                                <h4 class="mt-0 tex-dark">Easy customisation</h4>
                                <p class=" text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                </div>
                <!-- features end -->
           <!-- blog post start -->    
              <div class="container mt-5">
                     <h3 class="pt-4 d-inline latest-news">Latest News</h3>
                    
                      <a href="" class="btn btn-outline-primary btn-circle d-inline float-right">View all</a>
                    <!--  <p class="h5 text-center text-muted">Awesome featured templates</p> -->
                    <div class="row mt-5">
                    <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" src="images/jelly-pro-3.jpg"  alt="">
                  <div class="card-body">
                    <h4 class="card-title mb-3 text-dark">
                    <a href="#" class="text-decoration-none text-dark font-weight-bold">
                      Title of a blog post
                    </a>
                  </h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                    
                  </div>
                   <div class="card-footer text-muted border-0 bg-white">
                     
                    </div>
                </div>
              </div>
              <div class="col-md-4">
               <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" src="images/jelly-pro-2.jpeg"  alt="">
                  <div class="card-body">
                    <h4 class="card-title mb-3 text-dark">
                      <a href="#" class="text-decoration-none text-dark font-weight-bold">
                      Title of a blog post
                    </a>
                    </h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                    
                  </div>
                   <div class="card-footer text-muted border-0 bg-white">
                      
                    </div>
                </div>
              </div>
              <div class="col-md-4">
               <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" src="images/jelly-pro-1.jpeg"  alt="">
                  <div class="card-body">
                    <h4 class="card-title mb-3 text-dark">
                      <a href="#" class="text-decoration-none text-dark font-weight-bold">
                     Title of a blog post
                    </a>
                    </h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                    
                  </div>
                   <div class="card-footer text-muted border-0 bg-white">
                     
                    </div>
                </div>
              </div>
      </div>
  </div>
  <!-- blog post end -->
@endsection
