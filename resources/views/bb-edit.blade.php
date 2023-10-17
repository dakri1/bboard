@extends('layouts.app')

@section('title', "Create new notice")

@section('content')

<form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="txtTitle" class="form-label">Name</label>
        <input name="title" value="{{ old('title', $bb->title)}}" id="txtTile" class="form-control @error('title')
            is-invalid
        @enderror">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txtContent" class="form-label">Content</label>
        <textarea name="content" id="txtContent" class="form-control @error('content')
            is-invalid
        @enderror" row="3">{{ old('content', $bb->content) }}</textarea>
        @error('content')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txtPrice" class="form-label">Price</label>
        <input name="price" id="txtPrice" value="{{ old('price', $bb->price) }}" class="form-control @error('price')
            is-invalid
        @enderror">
        @error('price')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Save">
</form>
@endsection