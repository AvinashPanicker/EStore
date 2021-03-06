@extends('layout')
@section('content')

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>product Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <div class="product_img_slide owl-carousel">
            <div class="single_product_img">
              <img src="{{$product->src}}" alt="#" class="img-fluid">
            </div>
            <div class="single_product_img">
              <img src="{{$product->src}}" alt="#" class="img-fluid">
            </div>
            <div class="single_product_img">
              <img src="{{$product->src}}" alt="#" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="single_product_text text-center">
            <h3>{{$product->name}}</h3>
            <p>
                Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Credibly innovate granular internal or organic sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal networks.
            </p>
            <div class="card_area">
                <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <p>${{$product->discount}}</p>
                </div>
              <div class="add_to_cart">
                  <a href="#" class="btn_3">add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-8">
    <h4>{{$product->comment->count()}} Comments</h4><br>
    @forelse ($comments as $comment)
        
    <div class="col-lg-8">
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
                         <h4>{{$comment->user->name}}</h4>
                      </h5>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    @empty
    <p>No comments</p>
        
    @endforelse
 </div>
 <div>
   <p>
     This product is shipped by {{$product->shipper->name}}
   </p>
  </div>
<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="form-contact comment_form" action="#" id="commentForm">
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
    <!-- subscribe part end -->
  <!--================End Single Product Area =================-->
   <!-- subscribe part here -->
   <section class="subscribe_part section_padding">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="subscribe_part_content">
                      <h2>Get promotions & updates!</h2>
                      <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                      <div class="subscribe_form">
                          <input type="email" placeholder="Enter your mail">
                          <a href="#" class="btn_1">Subscribe</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
  </section>
  <!-- subscribe part end -->
@endsection