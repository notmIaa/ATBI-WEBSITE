@extends('layouts.app')
@section('page_title', 'BSU-Agribased Technology Business Incubator')
@section('content')

<!-- AOS (Animate On Scroll) Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<style>
    /* Reset default margin/padding */
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow-x: hidden;
        font-family: "DM Sans", sans-serif;
    }

    /* Hero Section Styling */
    .hero {
        height: 100vh;
        width: 100vw;
        background: url("{{ asset('carousels/main.png') }}") center/cover no-repeat;
        display: flex;
        justify-content: start;
        align-items: center;
        color: white;
        text-align: center;
        /* padding-left: 8%; */
        position: relative;
        animation: fadeIn 1.5s ease-in-out;
    }

    /* Fade-in Animation */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .hero-content h1 {
        font-size: 4.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .btn-hero {
        padding: 12px 25px;
        background-color: #22a6b3;
        color: white;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 10px;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-hero:hover {
        background-color: #1d868a;
        transform: scale(1.05);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Divider Section */
    .divider {
        display: block;
        margin: 1rem auto;
        width: 50%;
        max-width: 300px;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.8s ease-in-out;
    }

    .divider.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* Learn More Section */
    #learn-more {
        padding: 60px 0;
        text-align: center;
        background-color: #f7f7f7;
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease-in-out;
    }

    #learn-more .p{
        font-size: 1rem;
        margin:0;
    }

    #learn-more.show {
        opacity: 1;
        transform: translateY(0);
    }

    /* Statistics Section */
    .Container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* gap: 20px; */
        padding: 100px;
    }

    .numbers {
        flex: 1;
        text-align: left;
        transform: translateY(30px);
        opacity: 0;
        transition: all 0.8s ease-in-out;
    }

    .numbers.show {
        opacity: 1;
        transform: translateY(0);
    }

    .numbers .stats {
        font-size: 2.5rem;
        font-weight: bold;
        color: #1d868a;
    }

    /* Footer */
    footer {
        background-color: #185238;
        color: white;
        text-align: center;
        padding: 20px 0;
    }

    footer a:hover {
        text-decoration: underline;
    }

    .map{
        width: 70%;  /* Adjust size (try 40% or 30% if needed) */
        max-width: 600px; /* Limits max size */
        display: block;
        margin: auto;
    }
</style>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h3>Welcome!</h3>
        <h1>BSU-Agribased Technology Business Incubator / Innovation Center</h1>
        <p>Where the seeds of smallholder agribusiness are sown, grown, and bear their first fruits.</p>
        <a href="#learn-more" class="btn-hero">Learn More</a>
    </div>
</section>

<!-- Divider -->
<img src="{{ asset('carousels/divider.svg') }}" alt="divider" class="divider">

<!-- Learn More Section -->
<section id="learn-more" data-aos="fade-up">
    <p>Nurturing Success</p>
    <h1>Our Journey with Our Incubatees</h1>
    <p>We have guided and empowered over 100 incubatees across the Philippines.</p>

    <!-- Statistics Section -->
    <div class="Container">
        <div class="pilipins">
            <img src="{{ asset('carousels/pilipins.png') }}" alt="Philippines Map" class="map">
        </div>

        <div class="numbers" data-aos="fade-left">
            <h1 class="stats">Over 100 Incubatees Across the Philippines!</h1>
            <p>Through our program, we've nurtured aspiring entrepreneurs, fostering innovation and sustainability in agribusiness.</p>
        </div>
    </div>
</section>


<script>
    AOS.init(); // Initialize AOS library
    
    // Reveal elements on scroll
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(() => {
            document.querySelector('.divider').classList.add('show');
            document.querySelector('#learn-more').classList.add('show');
            document.querySelector('.numbers').classList.add('show');
        }, 500);
    });
</script>
@endsection
