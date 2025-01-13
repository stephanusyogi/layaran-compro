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
                <img src="{{ asset('assets/images/IMG_2088.jpg') }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
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

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Our live chat solution is packed with customizable features to make your event interactive, engaging, and unforgettable.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Powerful Features to Elevate Your Event Experience</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i> 
                    <span>Real-Time Live Chat Display</span>
                    <p class="fst-italic">
                      Display messages instantly on videotron, projector, or big screens during your event.
                    </p>
                  </li>
                  <li><i class="bi bi-check2-all"></i> 
                    <span>Customizable Chat Bubble Design</span>
                    <p class="fst-italic">
                      Change bubble colors, text size, and background to match your event's theme.
                    </p>
                  </li>
                  <li><i class="bi bi-check2-all"></i> 
                    <span>Secure and Moderated Chat</span>
                    <p class="fst-italic">
                      Track IP addresses and emails of message senders to ensure a safe and controlled environment.
                    </p>
                  </li>
                  <li><i class="bi bi-check2-all"></i> 
                    <span>File Attachments</span>
                    <p class="fst-italic">
                      Allow guests to upload images during the event for a more interactive experience.
                    </p>
                  </li>
                  <li><i class="bi bi-check2-all"></i> 
                    <span>Animation and Visual Effects</span>
                    <p class="fst-italic">
                      Add animations to chat bubbles to make the display more lively and engaging.
                    </p>
                  </li>
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
    
    <!-- Features Cards Section -->
    <section id="features-cards" class="features-cards section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-box orange">
              <i class="bi bi-chat-dots-fill"></i>
              <h4>Real-Time Messaging</h4>
              <p>Instantly display guest messages on screens to keep the audience engaged.</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-box blue">
              <i class="bi bi-palette-fill"></i>
              <h4>Customizable Design</h4>
              <p>Change bubble colors, background, and fonts to fit your event's theme.</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-box green">
              <i class="bi bi-lock-fill"></i>
              <h4>Secure & Moderated</h4>
              <p>Track IP addresses and emails to ensure safe and controlled chat sessions.</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="feature-box red">
              <i class="bi bi-folder-fill"></i>
              <h4>File Attachments</h4>
              <p>Allow attendees to share images and files during the event.</p>
            </div>
          </div><!-- End Feature Borx-->

        </div>

      </div>

    </section><!-- /Features Cards Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center">

          <!-- Basic Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-card">
              <h3>Basic Plan</h3>
              <div class="price">
                <span class="currency">Rp.</span>
                <span class="amount">25.000,-</span>
                <span class="period">/ weeks</span>
              </div>
              <p class="description">Perfect for small events where you want to engage guests with real-time messages displayed on big screens.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  5.000 Messages
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Custom Message Bubble Styles
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  IP & Email Tracking
                </li>
              </ul>
            </div>
          </div>

          <!-- Standard Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-card popular">
              <div class="popular-badge">Most Popular</div>
              <h3>Standard Plan</h3>
              <div class="price">
                <span class="currency">Rp.</span>
                <span class="amount">40.000,-</span>
                <span class="period">/ weeks</span>
              </div>
              <p class="description">A perfect package for multi-day events like club nights, corporate events, and small festivals.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  25.000 Messages
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Full Customization (Bubble & Background)
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  File Attachments (up to 10 MB)
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  IP & Email Tracking
                </li>
              </ul>
            </div>
          </div>

          <!-- Premium Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-card">
              <h3>Premium Plan</h3>
              <div class="price">
                <span class="currency">Rp.</span>
                <span class="amount">100.000,-</span>
                <span class="period">/ weeks</span>
              </div>
              <p class="description">Best solution for large festivals and recurring events with custom animations and more storage for interactive experiences.</p>

              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  100.000 Messages
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Full Customization (Bubble & Background)
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Animations & Visual Effect Features
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  Chats Themes
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  File Attachments (up to 15 MB)
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i>
                  IP & Email Tracking
                </li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <div class="overlay"></div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row content justify-content-center align-items-center position-relative">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="display-4 mb-4">Make Your Event Unforgettable with Live Chat on the Big Screen!</h2>
            <p class="mb-4">Transform your event into a truly interactive experience. Engage your audience with real-time messages, shoutouts, and more – all displayed live on videotrons or projectors!</p>
            <a href="#" class="btn btn-cta">Sign Up Me</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Faq Section -->
    <section class="faq-9 faq section light-background" id="faq">

      <div class="container">
        <div class="row">

          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">Have a question? Check out the FAQ</h2>
            <p class="faq-description">Explore our FAQ to find answers to your questions and tips for setting up and customizing your live chat display. Everything you need to make your event truly unforgettable is right here!</p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>What is Layaran?</h3>
                <div class="faq-content">
                  <p>Layaran is a real-time live chat solution designed to display messages on large screens such as videotrons, projectors, or TVs during events. Guests or event participants can send messages, give feedback, or interact with the event through chat bubbles that appear instantly on the screen.The name "Layaran" comes from the Javanese word "Layar," which means "screen" or "display." Our service turns ordinary screens into interactive communication platforms, making your event more engaging and memorable by allowing your audience to send shoutouts, song requests, or wishes that come to life on the big screen in real time!</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>What types of events are suitable for this service?</h3>
                <div class="faq-content">
                  <p>
                    This service is suitable for various types of events, including: <br>
                    🎉 Wedding Party <br>
                    🎶 Club Event / Nightclub Party <br>
                    🏢 Corporate Event <br>
                    🎤 Music Festival <br>
                    🎥 Private Party or Gathering
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How do I display live chat on a videotron or projector?</h3>
                <div class="faq-content">
                  <p>
                    It’s very easy! Follow these steps: <br>

                    1️⃣ Register and choose the event package that suits your needs. <br>
                    2️⃣ Create and customize your live chat display (bubble, colors, background). <br>
                    3️⃣ Connect your device to a videotron, projector, or large screen. <br>
                    4️⃣ Run your event and see messages appear in real-time on the screen!
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Is there a limit to the number of messages that can be sent?</h3>
                <div class="faq-content">
                  <p>
                    Yes, each package comes with a message quota that can be sent during the event: <br>

                    Basic Event: 5,000 messages <br>
                    Standard Event: 25,000 messages <br>
                    Pro Event: 100,000 messages <br>
                    Once the quota is reached, you can extend it by purchasing additional quotas. <br>
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How secure are the messages?</h3>
                <div class="faq-content">
                  <p>
                    We provide security features to ensure that the messages displayed on the screen are moderated: <br>

                    ✅ Email Tracking <br>
                    ✅ IP Address Tracking <br>

                    You can moderate messages to prevent inappropriate content from appearing on the screen.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Can I add my event logo or theme?</h3>
                <div class="faq-content">
                  <p>
                    Absolutely! Our service offers full customization features, including: <br>

                    🎨 Event or Brand Logo <br>
                    🎨 Chat Bubble Colors <br>
                    🎨 Background Images or Videos <br>
                    🎨 Chat Bubble Animations <br>
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Can this service be used for both online and offline events?</h3>
                <div class="faq-content">
                  <p>
                    Yes, this service can be used for both online and offline events. <br>

                    - For offline events, simply connect your device to a large screen or projector. <br>
                    - For online events, you can integrate it with a streaming platform. <br>
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>What happens if the message quota runs out during the event?</h3>
                <div class="faq-content">
                  <p>
                    If your message quota runs out, you can: <br>

                    ➡️ Purchase additional quotas through the dashboard. <br>
                    ➡️ Upgrade to a higher package if needed. <br>

                    We also provide notifications before your message quota is about to run out.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Can the service be used on different devices?</h3>
                <div class="faq-content">
                  <p>
                    Yes, the service can be used on: <br>

                    💻 Laptop <br>
                    📱 Smartphone <br>
                    📱 Tablet <br>
                    📺 Smart TV <br>

                    You only need an internet connection and a browser to run the service.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>
          </div>

        </div>
      </div>
    </section><!-- /Faq Section -->


@endsection