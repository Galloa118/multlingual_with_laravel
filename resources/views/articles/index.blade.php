@extends('layouts.bootstrap')

@section('title', 'Articles Index')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
            <a class="btn btn-primary" href="{{ route('articles.create') }}">Create New</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <br />
            @forelse($articles as $article)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>{{ $article->translate('en')->title }}</h2>
                        <p>{{ str_limit($article->translate('en')->content, 200) }}</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-default btn-xs" href="{{ route('articles.edit', $article->id) }}">Edit</a>
                        <a class="btn btn-danger btn-xs" href="{{ route('articles.destroy', $article->id) }}" onclick="event.preventDefault();document.getElementById('article_{{ $article->id }}').submit();">Delete</a>
                        <form id="article_{{ $article->id }}" action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            @empty
                <p class="lead">No articles yet...</p>
            @endforelse
        </div>
    </div>
</div>

@stop
