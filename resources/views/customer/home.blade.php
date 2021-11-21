@extends('customer.layouts.main')
@section('title', 'Home')
@section('content')
      <!-- Start slider -->
      @include('customer.home.slider_banner')
      <!-- / slider -->
      <!-- Start Promo section -->
      @include('customer.home.promo_banner')
      <!-- / Promo section -->
      <!-- Products section -->
      @include('customer.home.product_session')
      <!-- / Products section -->
      <!-- banner section -->
      @include('customer.home.banner')
      <!-- popular section -->
      @include('customer.home.popular_category')
      <!-- / popular section -->
      <!-- Support section -->
      @include('customer.home.support')
      <!-- / Support section -->
      <!-- Testimonial -->
      @include('customer.home.testimonial')
      <!-- / Testimonial -->

      <!-- Client Brand -->
      @include('customer.home.client_brand')
      <!-- / Client Brand -->
  @endsection
