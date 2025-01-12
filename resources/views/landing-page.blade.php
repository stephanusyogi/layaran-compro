@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-activity me-2"></i>
                Real-Time Messages, Real-Time Connections!
              </div>

              <h1 class="mb-4">
                Bring Your <br>
                Event to Life with <br>
                <span class="accent-text">Real-Time Live Chat!</span>
              </h1>

              <p class="mb-4 mb-md-5">
                Display real-time messages from your guests on videotron, projector, or big screens during your event – wedding, club parties, festivals, and more!
              </p>

              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
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
                <p class="mb-0 mt-2">Over 12,000+ messages sent to engage audiences and create unforgettable moments!</p>
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
                <p class="mb-0">Events Powered</p>
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
                <p class="mb-0">Messages Sent</p>
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
                <p class="mb-0">Guest Engagement</p>
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
                <p class="mb-0">Fully Customizable</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">MORE ABOUT US - LAYARAN</span>
            <h2 class="about-title">We bring your event to life with interactive live chat displayed on big screens – perfect for any occasion!</h2>
            <p class="about-description">The name <strong>"Layaran"</strong> is inspired by the Javanese word "Layar," which means "screen" or "display." At Layaran, we transform ordinary event screens into interactive, real-time communication platforms. Our solution allows your audience to send messages, shoutouts, and requests that are instantly displayed on videotrons, projectors, or big screens. Whether it's a wedding, a club night, or a corporate event, Layaran enhances audience engagement and creates unforgettable moments by bringing messages to life on the big screen!</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Wedding Party</li>
                  <li><i class="bi bi-check-circle-fill"></i> Diskotik / Club Event</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Corporate Event</li>
                  <li><i class="bi bi-check-circle-fill"></i> Music Festival</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="{{ asset('assets/images/about_us.jpeg') }}" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="{{ asset('templates/assets/img/about-2.webp') }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>3+ <span>Years</span></h3>
                <p>Of experience in events service</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
@endsection