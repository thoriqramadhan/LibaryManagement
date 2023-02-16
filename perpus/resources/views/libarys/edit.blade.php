@extends('layout.app')
@section('main')
{{-- https://bit.ly/mastering-task-form --}}
<div class="mt-5 mx-auto" style="width: 380px">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ url("/list/$books->id") }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input name="user" type="text" class="form-control" value="{{ old('books', $books->user) }}" >
                    @error('user')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Buku</label>
                    <textarea name="books" class="form-control" id="" rows="3">{{ old('books',$books->books)  }}</textarea>
                    @error('books')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection