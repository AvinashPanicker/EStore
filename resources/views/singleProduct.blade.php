@extends('layout')
@section('content')

<!-- slider Area End-->
   
 <!--================Blog Area =================-->
 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{$product->src}}" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{$product->name}}
                   </h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i>Shipped by {{$product->shipper->name}}</a></li>
                      <li><a href="#"><i class="fa fa-comments"></i>{{$comments->count()}}</a></li>
                   </ul>
                   <div class="load_more_btn text-center">
                      <form method='post' action=''>
                        @csrf
                        <button class="btn_3" type='submit'>Add to Cart</button>
                      </form>
                 </div>
                   <h4>Sold By:</h4>
                   @forelse($product->seller as $seller)
                        {{$seller->name}}<br>
                     @empty
                        No Sellers Available
                  @endforelse
                  <br><br>

                   <h2>
                       Rating: {{$product->rating}}</h2>
                       <p>
                            <h2>${{$product->discount}}</h2>
                       </p>
                   

                </div>
             </div>
             <div class="navigation-top">
                <div class="d-sm-flex justify-content-between text-center">
                   <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                      people like this</p>
                   <div class="col-sm-4 text-center my-2 my-sm-0">
                      <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                   </div>
                   <ul class="social-icons">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fab fa-behance"></i></a></li>
                   </ul>
                </div>
             </div>
             <div class="comments-area">
                <h4>{{$comments->count()}} Comments</h4>
                @forelse($comments as $comment)
                <div class="comment-list">
                   <div class="single-comment justify-content-between d-flex">
                      <div class="user justify-content-between d-flex">
                         <div class="thumb">
                            <img src="/img/comment/comment_1.png" alt="">
                         </div>
                         <div class="desc">
                            <p class="comment">
                               {{$comment->comment}}
                            </p>
                            <div class="d-flex justify-content-between">
                               <div class="d-flex align-items-center">
                                  <h5>
                                     <p>
                                         {{$comment->user->name}}
                                     </p>
                                  </h5>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                @empty
                    <p>
                        <h4>No Comments to Display</h4>
                @endforelse
             </div>
             <div class="comment-form">
                <h4>Leave a Comment</h4>
                <form class="form-contact comment_form" action="/single-product/{{$product->id}}/newComment" method="post" id="commentForm">
                    @csrf
                   <div class="row">
                      <div class="col-12">
                         <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                               placeholder="Write Comment"></textarea>
                         </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>
    
@endsection