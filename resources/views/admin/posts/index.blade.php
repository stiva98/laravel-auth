@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col-12 mb-4">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-warning w-100 mb-3">
                + Aggiungi
            </a>
        </div>
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Content</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">
                        {{ $post ->id }}
                        </th>
                        <td>
                            {{ $post ->title }}
                        </td>
                        <td>
                            {{ $post ->slug }}
                        </td>
                        <td>
                            {{ $post ->content }}
                        </td>
                        <td>
                            <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-warning me-2">
                                Singolo Film
                            </a>
                            <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-success me-2">
                                Modifica
                            </a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
