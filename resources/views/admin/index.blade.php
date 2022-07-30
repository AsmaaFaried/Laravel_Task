@extends('layouts.app')
@section('content')

<div class="cont">
    <div class="row">

        <div class="col-lg-12 margin-tb">
            <div class="post">

              <h2>All posts</h2>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Post Creator</th>
            <th>Content</th>
        </tr>

        @foreach ($posts as $post)

        <tr>

            <td>{{ ++$i ?? '' ?? '' }}</td>
            <td>{{ $post->user->name}}</td>

            <td>{{ $post->content }}</td>
          
        </tr>

        @endforeach

    </table>

  

    {!! $posts->links() !!}

      
</div>
@endsection

