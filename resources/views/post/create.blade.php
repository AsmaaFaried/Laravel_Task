@extends('layouts.app')
@section('content')
<div class="cont">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Post</h2>

        </div>



    </div>

</div>




@if ($errors->any())

@@ -40,17 +40,17 @@

@endif




<form action="{{ route('posts.store') }}" method="POST">

    @csrf




     <div class="row">




        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Content:</strong>
                <textarea class="form-control" style="height:150px" name="content" placeholder="Write a post..."></textarea>
            </div>

        </div>

       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center m-3">
                <button type="submit" class="btn btn-outline-primary">Post</button>

        </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-3">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <a class="btn btn-outline-danger" href="{{ route('posts.index') }}"> Back</a>

        </div>
            </div>
       </div>


    </div>




</form>
</div>
@endsection
