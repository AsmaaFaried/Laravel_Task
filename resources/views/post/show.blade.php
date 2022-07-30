@extends('layouts.app')

@section('page-title')
    Post Details
@endsection

@section('content')
   <div class="cont">



    <div class="row">
    <div class="row mt-3">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">


               <h3> <strong>Post content  </strong> </h3>
               <div>
                <h4>{{ $post->content }}</h4>
               </div>




            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">


            <a class="btn btn-outline-danger" href="{{ route('posts.index') }}"> Back</a>

        </div>

    </div>
   </div>

@endsection
