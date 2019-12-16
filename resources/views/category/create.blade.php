@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>

                <div class="card-body">

                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name"   class="form-control {{$errors->has('name')? 'is-invalid' :''}}">
                        @if($errors->has('name'))
                             <div class="invalid-feedback">
                                 <strong>{{$errors->first('name')}}</strong>
                             </div>
                        @endif
                    </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
