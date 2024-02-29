<x-layout>
    <div class="container-fluid vh-100 d-flex justify-content-start maincont-show pb-5" style="background-image: linear-gradient(rgba(249, 244, 237,0.3),rgba(37, 35, 35,.1)), url('{{ Storage::url($latestAd->img) }}');">
        <div class="row mt-5 align-items-end pb-5 ms-5 ps-5">
            <div class="col-1 cont-show d-flex">
                @if ($latestAd)
                <div class="shadow">
                    <h1 class="p-0 h1-title">{{ $latestAd->title }}.</h1>
                    <a href="{{ route('articles.show', $latestAd->id)}}"><small class="read-article fs-6">read full article</small></a>
                    
                </div>
                @else
                <div class="news-box p-0 d-flex flex-column align-items-end justify-content-center">
                    <a href="" class="bg-basic p-0 text-dark2 h1-home"><h1 class="h1-home">The art of rendering.</h1></a>
                    <a href=""><small class="read-article">read full article</small></a>
                </div>
                @endif
            </div>
        </div>
    </div>
    
    <section class="container mt-5">
        <div class="row">
            
            <ul class="d-flex flex-wrap gap-3">
                @foreach ($categories as $category)
                <li>
                    <a href="" class="categ-link">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        
        
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
    </div>
</section>
</x-layout>

{{-- <a href="{{route('articles.show', compact('article'))}}">
    <div class="card card-custom" style="width: 18rem;">
        <img src="https://picsum.photos/500" class="card-img-top" alt="...">
        <div class="card-body">
            <h6>{{$article->title}}</h6>
            <span>{{$article->subtitle}}</span>
            <span>{{$article->body}}</span>
        </div>
    </div>
</a> --}}