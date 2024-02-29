<x-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <label class="form-label">email</label>
                    <input class="form-control" type="email" name="email">
                    <label class="form-label">password</label>
                    <input class="form-control" type="password" name="password">

                    <button type="submit" class="btn btn-info">log in</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>