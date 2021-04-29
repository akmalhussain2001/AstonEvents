@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <head>
                        <link href="fontawesome/css/all.min.css" rel="stylesheet" />
                        <link href="css/homepage.css" rel="stylesheet" />
                    </head>

                    <body>
                        <div class="tm-main-content">
                            <div id="tm-intro-img"></div>

                            <section class="tm-section tm-section-small">
                                <h2 class="tm-section-header">About Us</h2>
                                <p>
                                    Here at Aston Events we have dedicated our time in creating an
                                    application for students to allow them to book into different
                                    events which they show a particular interest.
                                </p>

                                <!-- Special Items -->
                                <section class="tm-section">
                                    <h2 class="tm-section-header">Special Events</h2>
                                    <div class="tm-special-items">
                                        <figure class="tm-special-item">
                                            <img src="img/art.jpg" alt="Image" class="tm-special-item-img" />
                                            <figcaption>
                                                <span class="tm-item-name">Quick Arts</span>
                                            </figcaption>
                                        </figure>
                                        <figure class="tm-special-item">
                                            <img src="img/cricket.jpg" alt="Image" class="tm-special-item-img" />
                                            <figcaption>
                                                <span class="tm-item-name">Crazy Cricket</span>
                                            </figcaption>
                                        </figure>
                                        <figure class="tm-special-item">
                                            <img src="img/football.jpg" alt="Image" class="tm-special-item-img" />
                                            <figcaption>
                                                <span class="tm-item-name">Fast Football</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </section>
                                <hr />
                                <hr />
                        </div>

                        <script src="js/jquery-3.4.1.min.js"></script>
                    </body>

                    </html>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection