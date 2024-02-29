<x-layout>
    <div class="container d-flex flex-column justify-content-evenly align-items-center">
        <div>
            <h2 class="fw-bold fs-1">create a new article, let yourself inspire...</h2>
        </div>
                
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data" class="p-sm-5 row justify-content-start bg-light form-row mt-5 gap-3">
                    @csrf
                    <div class="col-12 col-sm-5">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error ('title') is-invalid @enderror" value="{{old('title')}}" value="{{old('title')}}">
                        @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-5">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>-- select category --</option>
                            @foreach ($categories as $category)
                            <option class="fw-bold" value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="col-12">
                        <label for="subtitle" class="form-label">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control @error ('subtitle') is-invalid @enderror" value="{{old('subtitle')}}">
                        @error('subtitle')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="col-12">
                        <label for="body" class="form-label">Body</label>
                        <textarea name="body" id="" cols="30" rows="5" placeholder="let yourself inspire..." class="form-control @error ('title') is-invalid @enderror">{{old('body')}}</textarea>
                        @error('body')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-5">
                        <label for="img" class="form-label">Picture</label>
                        <input type="file" name="img" class="form-control @error ('img') is-invalid @enderror">
                        @error('img')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn-user bg-g text-dark2 px-1">submit</button>

                    </div>
                    
                </form>
    </div>
    
    
</x-layout>

{{-- <x-layout>
    <div class="container d-flex flex-column cont-register justify-content-evenly align-items-center">
        <div>
            <h2 class="fw-bold fs-1">add your own articles, pictures and experiences.</h2>
        </div>
        
        
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
    </div>
</x-layout> --}}