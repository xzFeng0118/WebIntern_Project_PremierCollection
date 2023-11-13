{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    
  @endwhile

  <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="la.jpg" alt="Los Angeles" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="chicago.jpg" alt="Chicago" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="ny.jpg" alt="New York" class="d-block w-100">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

  <div class="feature-products">
    <h3 id="feature">FEATURE PRODUCTS</h3>
    <div class="product-grid">
      <div class="product block">
        <img class="product-image" src="product1.jpg" alt="Product 1">
        <div class="product-title">Product 1</div>
        <div class="product-price">$19.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product block">
        <img class="product-image" src="product2.jpg" alt="Product 2">
        <div class="product-title">Product 2</div>
        <div class="product-price">$29.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product block">
        <img class="product-image" src="product3.jpg" alt="Product 3">
        <div class="product-title">Product 3</div>
        <div class="product-price">$14.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product block">
        <img class="product-image" src="product4.jpg" alt="Product 4">
        <div class="product-title">Product 4</div>
        <div class="product-price">$25.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product block">
        <img class="product-image" src="product5.jpg" alt="Product 5">
        <div class="product-title">Product 5</div>
        <div class="product-price">$25.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product block">
        <img class="product-image" src="product6.jpg" alt="Product 6">
        <div class="product-title">Product 6</div>
        <div class="product-price">$25.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product block">
        <img class="product-image" src="product7.jpg" alt="Product 7">
        <div class="product-title">Product 7</div>
        <div class="product-price">$25.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product block">
        <img class="product-image" src="product8.jpg" alt="Product 8">
        <div class="product-title">Product 8</div>
        <div class="product-price">$25.99</div>
        <a href="product1.html">View Details</a>
      </div>
    </div>

      <button id="loadMore">More</button>
    </div>

    <div class="blank-section"></div>

    <div class="trending-products">
      <h3 id="trending">TRENDING PRODUCTS</h3>
      <div class="product-grid">
        <div class="product block">
          <img class="product-image" src="product1.jpg" alt="Product 1">
          <div class="product-title">Product 1</div>
          <div class="product-price">$19.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product block">
          <img class="product-image" src="product2.jpg" alt="Product 2">
          <div class="product-title">Product 2</div>
          <div class="product-price">$29.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product block">
          <img class="product-image" src="product3.jpg" alt="Product 3">
          <div class="product-title">Product 3</div>
          <div class="product-price">$14.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product block">
          <img class="product-image" src="product4.jpg" alt="Product 4">
          <div class="product-title">Product 4</div>
          <div class="product-price">$25.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product block">
          <img class="product-image" src="product5.jpg" alt="Product 5">
          <div class="product-title">Product 5</div>
          <div class="product-price">$25.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product block">
          <img class="product-image" src="product6.jpg" alt="Product 6">
          <div class="product-title">Product 6</div>
          <div class="product-price">$25.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product block">
          <img class="product-image" src="product7.jpg" alt="Product 7">
          <div class="product-title">Product 7</div>
          <div class="product-price">$25.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product block">
          <img class="product-image" src="product8.jpg" alt="Product 8">
          <div class="product-title">Product 8</div>
          <div class="product-price">$25.99</div>
          <a href="product1.html">View Details</a>
        </div>
        </div>

        <button id="loadMore1">More</button>
    </div>

    <div class="blank-section"></div>

    <div class="block-button">
      <button type="button" class="block" id="help-button"><p id="help">NEED HELP?</p>Contact Us</button>
    </div>
    
@endsection
