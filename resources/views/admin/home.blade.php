@extends('layouts.app')
@section('content')
@include('layouts.breadcrumb')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ request()->user()->roles->first()->descripcion }}
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Section 1 -->
<div class="section-1-container section-container">
    <div class="container">
        <div class="row">
            <div class="col section-1 section-description wow fadeIn">
                <h2>Section 1</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 section-1-box wow fadeInUp">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-1-box-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>Branding</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 section-1-box wow fadeInDown">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-1-box-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>Web design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 section-1-box wow fadeInUp">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section-1-box-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3>Social media</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section 2 -->
<div class="section-2-container section-container section-container-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col section-2 section-description wow fadeIn">
            </div>
        </div>
        <div class="row">
            <div class="col section-2-box wow fadeInLeft">
                <h3>Section 2</h3>
                <p class="medium-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud.
                    Exerci tation ullamcorper suscipit <a href="#">lobortis nisl</a> ut aliquip ex ea commodo consequat.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud.
                    Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Section 3 -->
<div class="section-3-container section-container">
    <div class="container">

        <div class="row">
            <div class="col section-3 section-description wow fadeIn">
                <h2>Section 3</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 section-3-box wow fadeInLeft">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-3-box-icon">
                            <i class="fas fa-paperclip"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h3>Ut wisi enim ad minim</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 section-3-box wow fadeInLeft">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-3-box-icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h3>Sed do eiusmod tempor</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 section-3-box wow fadeInLeft">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-3-box-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h3>Quis nostrud exerci tat</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 section-3-box wow fadeInLeft">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-3-box-icon">
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h3>Minim veniam quis nostrud</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Section 4 -->
<div class="section-4-container section-container section-container-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col section-4 section-description wow fadeInLeftBig">
                <h2>Section 4</h2>
                <p>
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                    aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
