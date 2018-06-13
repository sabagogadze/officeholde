@extends('layouts.main')
@section('content')
	<div class="products-catagories-area clearfix">

		<div class="single-products-catagory clearfix">
                    <a href="{{ route('shop') }}">
                        <img src="img/bg-img/1.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Modern Chair</h4>
                        </div>
                    </a>
                </div>
	</div>
@endsection
