@extends('layouts.app')
@section('title', 'Arculus - Simplify Shared Expenses') 
@section('head')
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection 
@section('content') 
  <header class="header">
    <div class="logo">Arculus</div>
    <nav class="navigation">
      <a class="nav-link" href="#service">Services</a>
      <a class="nav-link" href="#how-it-works">How It Works</a>
      <a class="nav-link" href="#benefits">Benefits</a>
      <a class="nav-link" href="#pricing">Pricing</a>
    </nav>
    <div class="auth-links">
      <a class="login-link" href="#" onclick="openModal('login-modal')">Log In</a>
      <a class="btn-primary" href="{{ url('/register') }}">
        <span class="text">Sign Up</span>
      </a>
    </div>
  </header>
  <main class="main-content">
    <div class="content-left">
      <h1 class="main-heading">Simplify Your Expenses with <span>Arculus</span>
      </h1>
      <p class="description"> Arculus makes it easy to manage shared expenses with friends, family, or roommates. Whether it's splitting rent, utilities, or a dinner bill. Arculus ensures everyone pays their fair share. </p>
      <div class="cta-buttons">
        <a class="btn-primary" onclick="openModal('login-modal')">
          <span class="text">Get Started</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="black" class="bi bi-wallet" viewBox="0 0 16 16">
            <path d="M0 3a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2H0z" />
            <path d="M16 6a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6zm-3 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
          </svg>
        </a>
        <a class="btn-secondary">Learn More</a>
      </div>
    </div>
    <div class="content-right">
      <img class="main-image" alt="Image" src="{{ asset('Images/landing-img.png') }}" />
    </div>
  </main>
  <div class="features-content">
    <div class="features-container">
        <div class="features">
          <h1 class="feature-number">01</h1>
          <div class = "feature-content">
            <h2 class="feature-title">Financial Transaction</h2>
            <p class="feature-description">Manage everything from the <br>latter app or website</p>
          </div>
        </div>
        <div class="features">
          <h1 class="feature-number">02</h1>
          <div class = "feature-content">
            <h2 class="feature-title">Easy To Use System</h2>
            <p class="feature-description">Each card can have its own <br>unique card holder name balance</p>
          </div>
        </div>
    </div>
    <div class="features-container">
      <div class="features-users">
        <h1 class="users-number">1.24M</h1>
        <div class="feature-box">
          <div class="user-images">
            <img class="user-image" alt="User 1" src="https://storage.googleapis.com/a1aa/image/_FIZrQEC0F-ELR5zhsCEJxwI43IOw8qOS4aO82D5Y90.jpg" />
            <img class="user-image" alt="User 2" src="https://storage.googleapis.com/a1aa/image/ZoRc-bdpPO1mdo5GuLIU5Z1LNyAU91Cpg8xZWKNQme8.jpg" />
            <img class="user-image" alt="User 1" src="https://storage.googleapis.com/a1aa/image/_FIZrQEC0F-ELR5zhsCEJxwI43IOw8qOS4aO82D5Y90.jpg" />
            <img class="user-image" alt="User 3" src="https://storage.googleapis.com/a1aa/image/CHlnhMtdbVl1qbvzTdaxaeyJ0p-tIhgkMVO345C5GrM.jpg" />
          </div>
          <div class="users-description">World Active User</div>
        </div>
      </div>
    </div>
  </div>
  <div class="features-container-logo">
    <a href="" class="logo"> <img src="{{ asset('Images/logo.svg') }}" width="80px" height="80px" alt="logo"> <span class="logoclass"></span></a>
  </div>
  <!-- Service Section -->
  <section id="service" class="section">
    <h2 class="section-title">Our Services</h2>
    <p class="section-description"> Arculus provides a seamless way to split bills, track expenses, and settle payments with friends and family. Whether you're managing rent, utilities, or group trips, Arculus has you covered. </p>
  </section>
  <!-- How It Works Section -->
  <section id="how-it-works" class="section">
    <h2 class="section-title">How It Works</h2>
    <ol class="section-list">
      <li>1. Create a group for your shared expenses.</li>
      <li>2. Add expenses and assign them to group members.</li>
      <li>3. Track who owes what and settle payments easily.</li>
    </ol>
  </section>
  <!-- Benefits Section -->
  <section id="benefits" class="section">
    <h2 class="section-title">Benefits of Using Arculus</h2>
    <ul class="section-list">
      <li>Save time by automating expense tracking.</li>
      <li>Eliminate awkward conversations about money.</li>
      <li>Keep all your shared expenses organized in one place.</li>
    </ul>
  </section>
  <!-- Pricing Section -->
  <section id="pricing" class="section">
    <h2 class="section-title">Pricing Plans</h2>
    <div class="pricing-plans">
      <div class="pack_card">
        <div class="pack_name">Standard</div>
        <p class="description">Basic access to view shared expenses.</p>
        <div class="list">
          <ul class="list_items"></ul>
        </div>
        <div class="bottom">
          <div class="price_container">
            <span class="devise">$</span>
            <span class="price">0</span>
            <span class="date">/forever</span>
          </div>
          <a class="free-plan" href="{{ url('/register') }}">Get Started for Free</a>
        </div>
      </div>
      <div class="pack_card">
        <div class="pack_name">Premium</div>
        <p class="description">Full access to manage and split expenses.</p>
        <div class="list">
          <ul class="list_items"></ul>
        </div>
        <div class="bottom">
          <div class="price_container">
            <span class="devise">$</span>
            <span class="price">4.99</span>
            <span class="date">/month</span>
          </div>
          <a class="btn" href="#">Continue with Premium</a>
        </div>
      </div>
      <div class="pack_card">
        <div class="pack_name">Premium+</div>
        <p class="description">Enjoy advanced features and more exciting add-ons.</p>
        <div class="list">
          <ul class="list_items"></ul>
        </div>
        <div class="bottom">
          <div class="price_container">
            <span class="devise">$</span>
            <span class="price">99</span>
            <span class="date">/year</span>
          </div>
          <a class="btn" href="#">Continue with Premium+</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Sign In Modal -->
  <div id="login-modal" class="modal hidden" onclick="closeOnOutsideClick(event, 'login-modal')">
    <div class="modal-content relative" onclick="event.stopPropagation()">
      <img class="logo-img" alt="Image" src="{{ asset('Images/logo.svg') }}" />
      <form class="form" action="/login" method="POST"> @csrf <p class="title">Log in to Arculus</p>
        <label>
          <input name="email" placeholder="Email" type="email" class="input">
        </label>
        <label>
          <input name="password" placeholder="Password" type="password" class="input">
        </label>
        <div class="flex-row">
          <a href="{{ url('/forgot-password') }}">
            <span class="span">Forgot password?</span>
          </a>
        </div>
        <button type="submit" class="button-submit">Log In</button>
        <p class="message">or</p>
        <!-- Google Login Button -->
        <a href="{{ url('/auth/google') }}" class="google-login-btn">
          <img src="{{ asset('Images/google.png') }}" alt="Google Icon" class="google-icon">
          Log in with Google
        </a>
        <p class="p-log">Don't have an account? <a href="{{ url('/register') }}">
            <span class="span">Sign Up</span>
          </a>
        </p>
      </form>
    </div>
  </div>
  
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-logo">
        <h2>Arculus</h2>
      </div>
      <div class="footer-copyright"> &copy; 2025 Arculus. All rights reserved. </div>
      <div class="footer-social flex gap-4">
        <a href="#" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" aria-label="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" aria-label="LinkedIn">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
  </footer>
@endsection