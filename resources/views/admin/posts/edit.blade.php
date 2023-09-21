@extends('layouts.app')

@section('page-title', 'Modifica'. $post->title)


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Modifica {{ $post ->title }}
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.posts.update', ['post' => $post ->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Inserisci titolo <strong class="color-strong">*</strong></label>
                    <input type="text" max-lenght="64" class="form-contro" id="title" name="title" placeholder="Inserisci titolo..." required value="{{ old('title', $post ->title) }}">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Inserisci slag <strong class="color-strong">*</strong></label>
                    <input type="text"  max-lengh="64" class="form-control" id="slug" name="slug" placeholder="Inserisci slag..." required value="{{ old('slug', $post ->slug) }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Inserisci contenuto</label>
                    <textarea class="form-control" id="content" name="content" placeholder="Inserisci il contenuto..." rows="3">{{ old('content', $post ->content) }}</textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-warning w-100">
                        + Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection