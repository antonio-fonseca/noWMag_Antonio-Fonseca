<x-layout>
    <div class="container d-flex flex-column cont-register justify-content-evenly align-items-center">
        <div>
            <h2 class="fw-bold fs-1">add your own articles, pictures and experiences.</h2>
        </div>
        {{-- <div class="row justify-content-center bg-light"> --}}
            
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session('message'))
            <div class="alert alert-success" id="modale">
                <span class="m-0">{{session('message')}}</span><i class="fa-solid fa-xmark ms-5" id="close_icon"></i>
            </div>
            @endif
            <div>
                <form action="{{route('register')}}" method="POST" class="py-5 row justify-content-center bg-light form-row">
                    @csrf
                    <div class="col-4">
                        <div class="mb-3">
                            <input type="text" name="name" placeholder="name" class="form-control @error ('name') is-invalid @enderror">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="surname" placeholder="surname" class="form-control @error ('surname') is-invalid @enderror">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" placeholder="your@email.com" class="form-control @error ('email') is-invalid @enderror">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="password" class="form-control @error ('password') is-invalid @enderror">
                        </div>
                        <div class="">
                            <input type="password" name="password_confirmation" placeholder="confirm password" class="form-control @error ('password_confirmation') is-invalid @enderror">
                        </div>
                        
                    </div>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn-form"><h2 class="fw-bold">join us</h2></button>
                    </div>
                </form>
            </div>
            
        {{-- </div> --}}
    </div>
</x-layout>