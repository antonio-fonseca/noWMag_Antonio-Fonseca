<x-layout>
    <div class="container-fluid vh-100 d-flex justify-content-start maincont-show pb-5" style="background-image: linear-gradient(rgba(249, 244, 237,0.3),rgba(37, 35, 35,.1)), url('{{ Storage::url($article->img) }}')">
        <div class="row mt-5 align-items-end pb-5 ms-5 ps-5">
            <div class="col-1 cont-show d-flex">
                
                <div class="shadow">
                    <a href="" class="categ-link categ-show">{{$article->category->name}}</a>
                    <h1 class="p-0 h1-title">{{$article->title}}</h1>
                </div>
                
                <div class="d-flex align-items-end ">
                    <i class="px-1 fa-solid fa-angle-down fs-3 text-color1 div-arrow"></i>
                </div>
            </div>
        </div>
    </div>
    <div id="contenuto" class="container pt-5">
        <div class="row justify-content-evenly mt-5 pt-5">
            <div class="col-2">
                <small class="d-block">CREATED ON</small>
                <small class="d-block fw-bold mb-2">{{$article->created_at->format('d.M.Y')}}</small>
                
                @if (Auth::user() == $article->user)
                <small class="d-block">WRITTEN BY</small> <strong>Yourself</strong></small>
                <hr>
                <small class="d-block mb-2">YOUR ARTICLE</small>
                <div class="d-flex gap-2">
                    <a href="{{route('articles.edit', compact('article'))}}"><button class="btn-user bg-y text-color1">Edit</button></a>
                    <form method="POST" action="{{route('articles.delete', compact('article'))}}">
                        @csrf
                        @method('delete')
                        <button class="btn-user bg-p text-color1" onclick="return confirm('{{ __('Sei sicuro di voler eliminare questo articolo?') }}')" type="submit">Delete</button>
                    </form>
                </div>
                @else
                <small class="d-block">WRITTEN BY</small> <strong>{{$article->user->name}}</strong></small>

                @endif
            </div>
            <div class="col-7">
                <h2 class="h2-show display-3 mb-5 pb-5">{{$article->subtitle}}</h2>
                <p class="body-show fs-4 mt-5 pt-5">{{$article->body}}</p>
                
                
            </div>
        </div>
    </div>
    
    <section class="container mt-5 pt-5">
        
        <div class="row justify-content-end pt-2 ms-auto me-0">
            @foreach ($articles as $article)
            <div class="col-6 col-sm-5 col-md-4 col-lg-4 mt-2 d-flex flex-column justify-content-center align-items-center p-2 p-md-3 p-lg-5 mx-0">
                <a href="{{route('articles.show', compact('article'))}}">
                    <div class="card card-custom">
                        <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                        <div class="card-body p-0 mt-4">
                            <div class="d-flex justify-content-between">
                                <a href="" class="me-auto"><small class="categ-link py-1">{{$article->category->name}}</small></a>
                                <small>{{$article->created_at->format('M / Y')}}</small>
                            </div>
                            
                            <a href="" class="card-h2 text-dark2"><h2 class="card-h6 mt-2 fs-2 fw-bold">{{$article->title}}</h2></a>
                        </div>
                    </div>
                </a>
            </div>
            
            
            @endforeach
        </div>
    </section>
    
</x-layout>