<x-layout>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            @if (session('message'))
            <div class="alert alert-success" id="modale">
                <span class="m-0">{{session('message')}}</span><i class="fa-solid fa-xmark ms-5" id="close_icon"></i>
            </div>
            @endif
            @foreach ($articles as $article)
            <a href="{{route('articles.show', compact('article'))}}">
                <div class="col-12 border my-3">
                    <span>{{$article->title}}</span>
                    <span>{{$article->subtitle}}</span>
                    <span>{{$article->body}}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</x-layout>