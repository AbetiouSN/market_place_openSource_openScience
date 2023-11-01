@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Welcome To NASAGAR Software') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    





            
            <!-- Section d'en-tête avec une image de fond -->
            <header class="header">
                <div class="overlay"></div>
                <div class="container h-100">
                    <div class="d-flex h-100 text-center align-items-center">
                        <div class="w-100 text-black">
                            <h1 class="display-4">Welcome dear creators <strong style="color: blue">NASAGAR</strong> </h1>
                            <p class="lead">       Services  .</p>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Section de contenu principal -->
            <div class="container my-5">
                <h2>Our Objectif </h2>
                <p>Simplify your carreer Life </p>
            
                <h2>Our Services </h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="profile.jpeg" class="card-img-top" alt="Service 1">
                            <div class="card-body">
                                <h5 class="card-title">See Your Profile </h5>
                                <p class="card-text">Here You are !!! .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="addp.jpeg" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title">Add Project  </h5>
                                <p class="card-text">Post Your Projects !!! .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="project.jpeg" class="card-img-top" alt="Service 3">
                            <div class="card-body">
                                <h5 class="card-title">See Projects </h5>
                                <p class="card-text">Know who are the people who want to work on your project !!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
