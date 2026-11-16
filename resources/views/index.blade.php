@extends('layouts.app')
@section('title', 'Home Page')

@section('content')

<main class="home-page">

    <!-- ==========================
         HERO SECTION
    =========================== -->
    <section class="home-hero">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- Hero Text -->
                <div class="col-lg-6">
                    <div class="hero-content">

                        <span class="hero-label">
                            ✨ زموږ آنلاین پلورنځي ته ښه راغلاست
                        </span>

                        <h1>
                            خپل د خوښې محصولات
                            <span>په اسانۍ پیدا کړئ</span>
                        </h1>

                        <p>
                            د بېلابېلو محصولاتو پراخه ټولګه وګورئ،
                            خپل د خوښې توکي انتخاب کړئ او په اسانۍ
                            خپل آنلاین پیرود پیل کړئ.
                        </p>

                        <div class="hero-buttons">

                            <a href="{{ route('products.index') }}"
                               class="hero-btn">
                                همدا اوس پیرود وکړئ
                            </a>

                            <a href="#featured-products"
                               class="hero-link">
                                نور محصولات وګورئ ←
                            </a>

                        </div>

                        <div class="hero-features">

                            <div>
                                <strong>✓</strong>
                                <span>اسانه پیرود</span>
                            </div>

                            <div>
                                <strong>✓</strong>
                                <span>د محصولاتو پراخه ټولګه</span>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Hero Visual -->
                <div class="col-lg-6">
                    <div class="hero-visual">

                        <div class="hero-circle"></div>

                        <div class="hero-shopping-card">

                            <div class="shopping-icon">🛍️</div>

                            <h3>Online Shopping</h3>

                            <p>ستاسو پیرود، زموږ اسانتیا</p>

                            <div class="shopping-line"></div>
                            <div class="shopping-line short"></div>

                        </div>

                        <div class="hero-offer">

                            <span>★</span>

                            <div>
                                <strong>غوره انتخاب</strong>
                                <small>ستاسو لپاره</small>
                            </div>

                        </div>

                        <div class="hero-small-card">
                            <span>🛒</span>
                            <strong>خپل پیرود پیل کړئ</strong>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ==========================
         FEATURED PRODUCTS
    =========================== -->
    <section class="featured-products" id="featured-products">

        <div class="container">

            <!-- Section Heading -->
            <div class="section-heading">

                <div>
                    <span class="section-label">
                        زموږ انتخاب
                    </span>

                    <h2>زموږ غوره محصولات</h2>

                    <p>
                        زموږ له غوره محصولاتو څخه خپل د خوښې توکي انتخاب کړئ.
                    </p>
                </div>

                <a href="{{ route('products.index') }}"
                   class="view-all-btn">
                    ټول محصولات وګورئ ←
                </a>

            </div>


            <!-- Products Grid -->
            <div class="featured-products-grid">

                @forelse($products as $product)

                    <article class="product-grid-item">

                        <div class="product-card">

                            <!-- Product Image -->
                            <div class="product-image-box">

                                @if($product->image)

                                    <img
                                        src="{{ asset('storage/' . $product->image) }}"
                                        alt="{{ $product->name }}"
                                        loading="lazy"
                                    >

                                @else

                                    <div class="no-product-image">
                                        <span>🖼️</span>
                                        <p>انځور نشته</p>
                                    </div>

                                @endif

                            </div>


                            <!-- Product Information -->
                            <div class="product-information">

                                <h5>{{ $product->name }}</h5>

                                <p class="product-price">
                                    {{ number_format($product->price) }}
                                    افغانۍ
                                </p>

                                <a href="{{ route('products.index') }}"
                                   class="product-buy-btn">
                                    محصول وګورئ
                                </a>

                            </div>

                        </div>

                    </article>

                @empty

                    <div class="empty-products">
                        <span>🛍️</span>
                        <h3>تر اوسه محصولات نشته</h3>
                        <p>وروسته بېرته مراجعه وکړئ.</p>
                    </div>

                @endforelse

            </div>

        </div>

    </section>

</main>

@endsection
