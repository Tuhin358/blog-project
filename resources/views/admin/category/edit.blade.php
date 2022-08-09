@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Blog
            </div>

                <div class="card-body">


                    <form action="{{ url('store/Category/'.$categories->id)}}" method="POST">

                        @csrf

                        <div class="form-group">
                          <label> Update Title </label>
                          <input type="text" class="form-control"
                           name="blog_title"
                           value="{{ $categories->title }}">

                        </div>

                        <div class="form-group">
                          <label>Update Slug</label>
                          <input type="text" class="form-control"
                           name="blog_slug"
                          value="{{ $categories->slug }}">


                        </div>

                        <div class="form-group">
                            <label>Update description</label>
                            <input type="text" class="form-control"
                             name="blog_description"
                            value="{{ $categories->description }}">



                          </div> 

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
