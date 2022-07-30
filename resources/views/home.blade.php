@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="post">
                @if (Auth::user()->role == '0')
                <a class="btn btn-outline-success posts-a" href="{{ route('posts.index') }}"> Go to Posts</a>

                @else
                <a class="btn btn-outline-success posts-a" href="/admin/posts"> All Posts</a>
                @endif

            </div>

        </div>
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}


                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
