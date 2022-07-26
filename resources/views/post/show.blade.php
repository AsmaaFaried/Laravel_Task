@extends('layouts.app')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Post</h2>

            </div>

          

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

               <h3> <strong>Post content:  </strong>    {{ $post->content }}</h3>

                

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <a class="btn btn-danger" href="{{ route('posts.index') }}"> Back</a>

        </div>

    </div>

@endsection