@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">

                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title"   class="form-control {{$errors->has('title')? 'is-invalid' :''}}">
                        @if($errors->has('title'))
                             <div class="invalid-feedback">
                                 <strong>{{$errors->first('title')}}</strong>
                             </div>
                        @endif
                    </div>
                        
                        <div class="form-group">
                            <label for="content">Content</label>
                        <textarea class="form-control {{$errors->has('content')? 'is-invalid':''}}" name="content" rows="3" placeholder="Enter Post Body"></textarea>
                            @if($errors->has('content'))
                            <div class="invalid-feedback">
                                <strong>{{$errors->first('content')}}</strong>
                            </div>
                       @endif
                          </div>
                          <div class="form-group">
                            <label for="featured">Photo</label>
                          <input type="file" class="form-control-file {{$errors->has('featured')?'is-invalid':''}}" name="featured">
                            @if($errors->has('featured'))
                            <div class="invalid-feedback">
                                <strong>{{$errors->first('featured')}}</strong>
                            </div>
                       @endif
                          </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
