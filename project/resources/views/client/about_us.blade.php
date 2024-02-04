@extends('layouts.client')
@section('title', 'Dera Sant Phool Nath Ji - Home')
@section('css')
<style>
    /* Custom Styles */
    body {
        font-family: 'Lohit Punjabi', 'GurbaniAkhar', 'AnmolUni', 'Noto Sans Gurmukhi', 'Roboto', sans-serif;
        font-size: 18px;
        line-height: 1.6;
        color: #fff;
        background: linear-gradient(to bottom, #001f3f, #FFD700);
        margin: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    /* Adjustments for smaller screens */
    @media (max-width: 992px) {
        body {
            padding-top: 0;
        }

        h1 {
            font-size: 2rem;
        }
    }

    /* Navigation Bar Styles */
    nav {
        background-color: #001f3f; /* Navy Blue */
    }

    nav a {
        color: #FFD700 !important; /* Gold/Yellow */
    }

    /* Center the content */
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        flex-grow: 1; /* Allows the content to grow and take remaining height */
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 20px;
    }

    /* Footer Styles */
    footer {
        background-color: #001f3f; /* Navy Blue */
        color: #FFD700; /* Gold/Yellow */
        width: 100%;
        text-align: center;
        padding: 10px 0;
        flex-shrink: 0; /* Prevents the footer from shrinking */
    }
    </style>
@endsection
@section('main')
<!-- Main Content for About Us -->
<div class="container">
    <h1>About Dera Sant Phool Nath Ji</h1>
    <p>Welcome to Dera Sant Phool Nath Ji, a sacred space dedicated to worship, reflection, and community. Our
        journey is rooted in spiritual guidance, unity promotion, and compassionate service to the community.</p>

    <p>At Dera Sant Phool Nath Ji, we believe in fostering an environment of love, peace, and spiritual
        growth. Join us on this divine journey as we connect with the eternal presence and build a community
        bound by faith and devotion.</p>
</div>
@endsection