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
  <div class="carousel-inner">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('../images/product1.webp') }}" alt="images" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('../images/product.jpg') }}" alt="image1" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('../images/example2.jpg') }}" alt="image2" class="d-block w-100">
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
</div>

  <div class="feature-products">
    <h3 id="feature">FEATURE PRODUCTS</h3>
    <div class="product-grid">
      <div class="product-block">
        <img class="product-image" src="{{ asset('../images/canon.jpg') }}" alt="Canon">
        <div class="product-title">Canon</div>
        <div class="product-price">$999</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product-block">
        <img class="product-image" src="{{ asset('../images/beats.jpeg') }}" alt="Beats">
        <div class="product-title">Beats</div>
        <div class="product-price">$199</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product-block">
        <img class="product-image" src="{{ asset('../images/makeup.jpeg') }}" alt="Lipstick">
        <div class="product-title">Lipstick</div>
        <div class="product-price">$79</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product-block">
        <img class="product-image" src="{{ asset('../images/sunglasses.png') }}" alt="Sunglasses">
        <div class="product-title">Sun glasses</div>
        <div class="product-price">$229</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product-block">
        <img class="product-image" src="{{ asset('../images/showergel.jpg') }}" alt="ShowerGel">
        <div class="product-title">Shower Gel</div>
        <div class="product-price">$25.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product-block">
        <img class="product-image" src="{{ asset('../images/bag.jpg') }}" alt="Bag">
        <div class="product-title">Bag</div>
        <div class="product-price">$36.99</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product-block">
        <img class="product-image" src="{{ asset('../images/iphone.png') }}" alt="Iphone">
        <div class="product-title">IPhone</div>
        <div class="product-price">$1799</div>
        <a href="product1.html">View Details</a>
      </div>

      <div class="product-block">
        <img class="product-image" src="{{ asset('../images/medicine.jpg') }}" alt="Medicine">
        <div class="product-title">Medicine</div>
        <div class="product-price">$15.99</div>
        <a href="product1.html">View Details</a>
      </div>
    </div>

      <button id="loadMore">More</button>
    </div>

    <div class="blank-section"></div>

    <div class="trending-products">
      <h3 id="trending">TRENDING PRODUCTS</h3>
      <div class="product-grid">
        <div class="product-block">
          <img class="product-image" src="{{ asset('../images/canon.jpg') }}" alt="Canon">
          <div class="product-title">Canon</div>
          <div class="product-price">$999</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product-block">
          <img class="product-image" src="{{ asset('../images/beats.jpeg') }}" alt="Beats">
          <div class="product-title">Beats</div>
          <div class="product-price">$199</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product-block">
          <img class="product-image" src="{{ asset('../images/makeup.jpeg') }}" alt="Lipstick">
          <div class="product-title">Lipstick</div>
          <div class="product-price">$79</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product-block">
          <img class="product-image" src="{{ asset('../images/sunglasses.png') }}" alt="Sunglasses">
          <div class="product-title">Sun glasses</div>
          <div class="product-price">$229</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product-block">
          <img class="product-image" src="{{ asset('../images/showergel.jpg') }}" alt="ShowerGel">
          <div class="product-title">Shower Gel</div>
          <div class="product-price">$25.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product-block">
          <img class="product-image" src="{{ asset('../images/bag.jpg') }}" alt="Bag">
          <div class="product-title">Bag</div>
          <div class="product-price">$36.99</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product-block">
          <img class="product-image" src="{{ asset('../images/iphone.png') }}" alt="Iphone">
          <div class="product-title">IPhone</div>
          <div class="product-price">$1799</div>
          <a href="product1.html">View Details</a>
        </div>

        <div class="product-block">
          <img class="product-image" src="{{ asset('../images/medicine.jpg') }}" alt="Medicine">
          <div class="product-title">Medicine</div>
          <div class="product-price">$15.99</div>
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
