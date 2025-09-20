@extends('resident-layout')

@section('content')
<style>
    .welcome-banner {
        background-color: var(--primary-color);
        color: #fff;
        padding: 2rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
    }

    .more-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .more-box {
        position: relative;
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        height: 250px;
    }

    .more-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .more-box:hover img {
        transform: scale(1.1);
    }

    .more-layer {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.1), var(--primary-color));
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        padding: 0 2rem;
        transform: translateY(100%);
        transition: transform 0.5s ease;
        color: #fff;
    }

    .more-box:hover .more-layer {
        transform: translateY(0);
    }

    .more-layer h4 {
        font-size: 1.8rem;
        font-weight: 600;
    }

    .more-layer p {
        font-size: 1.2rem;
        margin: 0.5rem 0 1rem;
    }

    .more-layer a {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 3.5rem;
        height: 3.5rem;
        background: #fff;
        border-radius: 50%;
        color: var(--primary-color);
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }

    .more-layer a:hover {
        transform: scale(1.1);
        background: var(--hover-color);
        color: #fff;
        border: 1px solid #fff;
    }
</style>

<div class="container-fluid py-4">
    <div class="welcome-banner">
        <h1>Welcome, {{ Auth::user()->name }}!</h1>
        <p>Your one-stop platform for all barangay services.</p>
    </div>

    <div class="more-container">
        <div class="more-box">
            <img src="{{ asset('images/hallpic1.jpg') }}" alt="Legal Documents">
            <div class="more-layer">
                <h4>Legal Document Requests</h4>
                <p>Request barangay clearance, certificates, and other official documents online.</p>
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="more-box">
            <img src="{{ asset('images/healthcenter.png') }}" alt="BHW Services">
            <div class="more-layer">
                <h4>BHW Services</h4>
                <p>Access health programs, medical schedules, and online health consultations.</p>
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="more-box">
            <img src="{{ asset('images/SC_logo.png') }}" alt="Senior Citizen Services">
            <div class="more-layer">
                <h4>Senior Citizen Services</h4>
                <p>Benefits, assistance, and activities for registered seniors.</p>
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="more-box">
            <img src="{{ asset('images/logo (2).png') }}" alt="SK Services">
            <div class="more-layer">
                <h4>SK Services</h4>
                <p>Youth programs, scholarships, and community activities.</p>
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="more-box">
            <img src="{{ asset('images/brgyhall.jpg') }}" alt="Complaint Services">
            <div class="more-layer">
                <h4>Complaint Services</h4>
                <p>File, track, and follow up on complaints or concerns.</p>
                <a href="#"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
