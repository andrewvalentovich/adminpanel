@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">{{ $articles[0]->title }}</h1>
                <p class="lead my-3">{{ $articles[0]->descrtiption }}</p>
                <p class="lead mb-0"><a href="{{ route('articles.show', ['article' => $articles[0]->id]) }}" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            @for ($i = 1; $i < 3; $i++)
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column  position-static">
                            <strong class="d-inline-block mb-2 text-primary">{{ $articles[$i]->category->name }}</strong>
                            <h3 class="mb-0">{{ $articles[$i]->title }}</h3>
                            <div class="mb-1 text-muted">{{ $articles[$i]->created_at->format('j F, Y') }}</div>
                            <p class="card-text mb-auto">{{ $articles[$i]->description }}</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Resent articles
                </h3>

                <article class="blog-post">
                    <h2 class="blog-post-title">{{ $articles[3]->title }}</h2>
                    <p class="blog-post-meta">{{ $articles[3]->created_at->format('j F, Y') }} <!--a href="" class="text-dark">Mark</a--></p>

                    <p>T{{ $articles[3]->description }}</p>
                    <hr>
                    <p>{{ $articles[3]->content }}</p>
                </article>

                <nav class="blog-pagination my-5" aria-label="Pagination">
                    {{ $articles->links() }}
                </nav>
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Categories</h4>
                        <ol class="list-unstyled mb-0">
                            @foreach($categories as $category)
                                <li><a href="{{ route('categories.show', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ol>
                        <a class="d-flex pt-3" href="{{ route('categories.index') }}">More categories</a>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Tags</h4>
                        <ol class="list-unstyled">
                            @foreach($tags as $tag)
                                <li>{{ $tag->name }}</li>
                            @endforeach
                        </ol>
                        <a href="{{ route('tags.index') }}">More tags</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
