<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <form action="{{route('articles.update', compact('article'))}}" method="POST">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input value="{{$article->title}}" type="text" name="title" class="form-control @error ('title') is-invalid @enderror">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">SottoTitolo</label>
                        <input value="{{$article->subtitle}}" type="text" name="subtitle" class="form-control @error ('subtitle') is-invalid @enderror">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control @error ('title') is-invalid @enderror">{{$article->body}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                    
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>