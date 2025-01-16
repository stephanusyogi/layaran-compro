@extends('layouts.app')

@section('content')

    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-activity me-2"></i>
                @lang('hero.company_badge')
              </div>

              <h1 class="mb-4">
                @lang('hero.headline')
              </h1>

              <p class="mb-4 mb-md-5">
                @lang('hero.description')
              </p>

              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">@lang('hero.get_started')</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="{{ asset('templates/assets/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid">

              <div class="customers-badge">
                <div class="customer-avatars">
                  <img src="{{ asset('templates/assets/img/avatar-1.webp') }}" alt="Customer 1" class="avatar">
                  <img src="{{ asset('templates/assets/img/avatar-2.webp') }}" alt="Customer 2" class="avatar">
                  <img src="{{ asset('templates/assets/img/avatar-3.webp') }}" alt="Customer 3" class="avatar">
                  <img src="{{ asset('templates/assets/img/avatar-4.webp') }}" alt="Customer 4" class="avatar">
                  <img src="{{ asset('templates/assets/img/avatar-5.webp') }}" alt="Customer 5" class="avatar">
                  <span class="avatar more">12+</span>
                </div>
                <p class="mb-0 mt-2">@lang('hero.customers_badge')</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-people-fill"></i>
              </div>
              <div class="stat-content">
                <h4>10+</h4>
                <p class="mb-0">@lang('hero.events_powered')</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-chat-dots-fill"></i>
              </div>
              <div class="stat-content">
                <h4>12,000</h4>
                <p class="mb-0">@lang('hero.messages_sent')</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-lightning-fill"></i>
              </div>
              <div class="stat-content">
                <h4>Real-Time</h4>
                <p class="mb-0">@lang('hero.real_time_engagement')</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stat-item">
              <div class="stat-icon">
                <i class="bi bi-sliders"></i>
              </div>
              <div class="stat-content">
                <h4>100%</h4>
                <p class="mb-0">@lang('hero.customizable')</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row gy-4 align-items-center justify-content-between">
    
          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">@lang('about.meta')</span>
            <h2 class="about-title">@lang('about.title')</h2>
            <p class="about-description">@lang('about.description')</p>
    
            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> @lang('about.features.wedding')</li>
                  <li><i class="bi bi-check-circle-fill"></i> @lang('about.features.club')</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> @lang('about.features.corporate')</li>
                  <li><i class="bi bi-check-circle-fill"></i> @lang('about.features.festival')</li>
                </ul>
              </div>
            </div>
          </div>
    
          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="{{ asset('assets/images/about_us.jpeg') }}" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="{{ asset('assets/images/IMG_2088.jpg') }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>@lang('about.badge_years') <span>@lang('about.badge_experience')</span></h3>
                <p>@lang('about.badge_description')</p>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    
    </section><!-- /About Section -->

    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@lang('features.title')</h2>
        <p>@lang('features.description')</p>
      </div><!-- End Section Title -->
    
      <div class="container">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
    
          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>@lang('features.tab_title')</h3>
                <ul>
                  @foreach (__('features.features') as $feature)
                  <li>
                    <i class="bi bi-check2-all"></i>
                    <span>{{ $feature['title'] }}</span>
                    <p class="fst-italic">
                      {{ $feature['description'] }}
                    </p>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('templates/assets/img/features-illustration-1.webp') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->
    
        </div>
    
      </div>
    
    </section><!-- /Features Section -->
    
    <section id="features-cards" class="features-cards section">

      <div class="container">
    
        <div class="row gy-4">
          @php
              $features = __('features_cards.features');
              $features = is_array($features) ? $features : [];
          @endphp
          @foreach ($features as $index => $feature)
            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $index * 100 + 100 }}">
              <div class="feature-box 
                @if ($index + 1 == 1) orange
                @elseif ($index + 1 == 2) blue
                @elseif ($index + 1 == 3) green
                @else red
                @endif
              ">
                <i class="{{ $feature['icon'] }}"></i>
                <h4>@lang("features_cards.features.{$index}.title")</h4>
                <p>@lang("features_cards.features.{$index}.description")</p>
              </div>
            </div><!-- End Feature Box -->
          @endforeach
        </div>
    
      </div>
    
    </section><!-- /Features Cards Section -->

    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@lang('pricing.title')</h2>
      </div><!-- End Section Title -->
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row g-4 justify-content-center">
          @php
              $plans = __('pricing.plans');
          @endphp
    
          @foreach ($plans as $planKey => $plan)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 + 100 }}">
              <div class="pricing-card {{ $planKey === 'standard' ? 'popular' : '' }}">
                @if ($planKey === 'standard')
                  <div class="popular-badge">@lang("pricing.plans.$planKey.popular")</div>
                @endif
                <h3>@lang("pricing.plans.$planKey.name")</h3>
                <div class="price">
                  <span class="currency">Rp.</span>
                  <span class="amount">@lang("pricing.plans.$planKey.price")</span>
                  <span class="period">@lang("pricing.plans.$planKey.period")</span>
                </div>
                <p class="description">@lang("pricing.plans.$planKey.description")</p>
    
                <h4>Featured Included:</h4>
                <ul class="features-list">
                  @foreach ($plan['features'] as $feature)
                    <li>
                      <i class="bi bi-check-circle-fill"></i>
                      {{ $feature }}
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          @endforeach
        </div>
    
      </div>
    
    </section><!-- /Pricing Section -->

    <section id="call-to-action" class="call-to-action section">

      <div class="overlay"></div>
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row content justify-content-center align-items-center position-relative">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="display-4 mb-4">@lang('call_to_action.headline')</h2>
            <p class="mb-4">@lang('call_to_action.description')</p>
            <a href="#" class="btn btn-cta">@lang('call_to_action.button')</a>
          </div>
        </div>
    
      </div>
    
    </section><!-- /Call To Action Section -->

    <section id="table-pricing" class="table-pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@lang('table_pricing.title', ['company' => '<span class="company-badge">Layaran</span>'])</h2>
        <p>@lang('table_pricing.description')</p>
      </div><!-- End Section Title -->
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="w-full overflow-scroll">
          <table class="table table-hover table-bordered">
            <!-- Table Head -->
            <thead class="mdb-color darken-3">
              <tr class="text-white">
                <th scope="col">@lang('table_pricing.table.headers.feature')</th>
                <th scope="col">@lang('table_pricing.table.headers.basic')</th>
                <th scope="col">@lang('table_pricing.table.headers.standard')</th>
                <th scope="col">@lang('table_pricing.table.headers.premium')</th>
              </tr>
            </thead>
            <!-- Table Body -->
            <tbody>
              @php
                $rows = __('table_pricing.table.rows');
                $values = __('table_pricing.table.values');
              @endphp
      
              @foreach ($rows as $key => $label)
              <tr>
                <th scope="row">{{ $label }}</th>
                <td>{{ $values[$key][0] }}</td>
                <td>{{ $values[$key][1] }}</td>
                <td>{{ $values[$key][2] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    
    </section><!-- /Table Pricing Section -->

    <section class="faq-9 faq section light-background" id="faq">

      <div class="container">
        <div class="row">
    
          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">@lang('faq.title')</h2>
            <p class="faq-description">@lang('faq.description')</p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- SVG content remains unchanged -->
              </svg>
            </div>
          </div>
    
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">
              @foreach (__('faq.questions') as $faq)
              <div class="faq-item">
                <h3>{{ $faq['question'] }}</h3>
                <div class="faq-content">
                  <p>{!! nl2br($faq['answer']) !!}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
              @endforeach
            </div>
          </div>
    
        </div>
      </div>
    </section><!-- /Faq Section -->
    

@endsection