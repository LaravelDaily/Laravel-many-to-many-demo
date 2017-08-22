@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tags list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Tag</th>
                                <th>Articles</th>
                            </tr>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{ $tag->name }}</td>
                                    <td>
                                        @foreach ($tag->articles as $article)
                                            @if ($loop->iteration > 1)
                                                <br />
                                            @endif
                                            {{ $article->title }}
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
