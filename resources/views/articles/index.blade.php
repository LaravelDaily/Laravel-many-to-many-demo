@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Articles list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Article</th>
                                <th>Tags</th>
                            </tr>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>
                                        @foreach ($article->tags as $tag)
                                            @if ($loop->iteration > 1)
                                                |
                                            @endif
                                            {{ $tag->name }}
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
