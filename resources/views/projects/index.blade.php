@extends('layout')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/laravel_tutorial/public/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif
@endsection
