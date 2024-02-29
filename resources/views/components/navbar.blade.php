<nav id="navbar" class="container-fluid py-0 d-flex justify-content-center navbar">
    <div class="row py-0 bg-base navbar-row">
        
        <ul class="d-flex flex-row justify-content-between align-items-center mb-0">
            
            <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                <div class="dots-bg d-flex justify-content-center align-items-center">
                    <div class="dots"></div>
                </div>
            </button>

            <div class="offcanvas offcanvas-top offc-custom" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <div class="d-flex flex-column flex-lg-row justify-content-between">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="p-4 offcanvas-body-custom d-flex flex-column">
                            @foreach ($categories as $category)
                            <li>
                                <a href="" class="nav-link fs-1">{{$category->name}}</a>
                            </li>
                            @endforeach
                            <li>
                                <a href="{{route('home')}}" class="text-start"><h2 class="font-logo fs-4 text-light mt-4 my-lg-5">noWMag</h2></a>
                            </li>
                        </div>
                        <div class="py-4 ms-5 ps-5 d-flex align-items-center justify-content-center d-none d-lg-block">
                            <hr class="vr mt-5">
                        </div>
                        <div class="ps-4 p-lg-4 offcanvas-body-custom d-flex flex-column ms-1 ms-lg-5  justify-content-center">
                            <li>
                                <a href="" class="social-link fs-4 fw-bold">facebook</a>
                            </li>
                            <li>
                                <a href="" class="social-link fs-4 fw-bold">instagram</a>
                            </li>
                        </div>
                        <div class="py-4 ms-5 ps-5 d-flex flex-column align-items-center justify-content-center d-none d-lg-block">
                            <hr class="vr vr-5 mt-5">
                        </div>
                        <div class="p-4 d-flex flex-column ms-5 gap-4">
                            @guest
                            <li class="text-end">
                                <span id="login_btn" class="nav-link-2 bg-basic fs-5 fw-bold">> Log in</span>
                            </li>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="d-flex flex-column justify-content-end align-items-end">
                                <form id="login_form" action="{{route('login')}}" method="POST" class="d-none">
                                    @csrf
                                    {{-- <label class="form-label">email</label> --}}
                                    <input class="form-control fst-italic mb-1" type="email" name="email" placeholder="your@email.com">
                                    {{-- <label class="form-label">password</label> --}}
                                    <input class="form-control fst-italic mb-1" type="password" name="password" placeholder="password">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="bg-y fw-bold btn-login">log in</button>
                                    </div>
                                </form>
                            </div>
                            
                            <li class="text-end">
                                or<a href="{{route('register')}}" class="nav-link-2 bg-basic fs-5 fw-bold ms-2">join us</a>
                            </li>
                            @endguest


                            @auth
                            <div class="bg-color1 ms-lg-5 p-2 my-4 my-lg-0 div-auth d-flex flex-column">
                                <span class="fs-5 fw-bold text-b">Welcome back <h3 class="fs-4 fw-bold d-block text-dark2">{{Auth::user()->name}}</h3></span>
                                
                                <ul class="text-start text-dark2">
                                    <li><a href="{{route('articles.create')}}">Create Article</a></li>
                                </ul>
                                <div class="d-flex justify-content-end">
                                    <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><small class="text-p fw-bold btn-logout">log out ></small></a>
                                    <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            @endauth


                        </div>
                    </div>
                    
                    <div class="offcanvas-header d-flex flex-column pt-4 justify-content-start">
                        <button type="button" class="offc-close" data-bs-dismiss="offcanvas" aria-label="Close">
                            <div class="cross-parent d-flex justify-content-center">
                                <div class="cross"></div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            
            <a href="{{route('home')}}"><h1 class="nav-logo text-dark2">noWMag</h1></a>
            
            @auth
            
            <div>
                
                <div class="dropdown p-1">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="bg-basic p-1">
                            Hi <strong class="fs-4">{{Auth::user()->name}}</strong>
                            <i class="fa-solid fa-angle-down fs-5 arrow2"></i>
                            </span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                {{-- <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><small>log out</small></a>
                <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                    @csrf
                </form> --}}
            </div>
            
            @endauth
            @guest
            <div class="">
                {{-- <a href="{{route('login')}}" class="nav-link-2 bg-basic">Login</a>
                <a href="{{route('register')}}" class="nav-link-2 bg-basic">Register</a> --}}
            </div>
            @endguest
            
        </ul>
    </div>
</nav>




