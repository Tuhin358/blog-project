@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    All Blog
            </div>

                <div class="card-body">


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        <tbody>



                            @foreach($categories as $category)


                           <tr>
                            <th scope="row"> {{ $categories->firstItem()+$loop->index}} </th>
                            <td> {{ $category-> title}}</td>
                            <td> {{ $category-> slug}}</td>
                            <td> {{ $category-> description}}</td>
                            <td>
                                <a href="{{ url('Category/Edit/'.$category->id) }}"
                                    class="btn btn-primary">Edit </a>
                                <a href="" class="btn btn-danger">delete </a>
                            </td>
                          </tr>

                 @endforeach


                        </tbody>
                      </table>

                      {{ $categories->links()}}

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Blog
            </div>

                <div class="card-body">


                    <form action="{{ route('store.blog' )}}" method="POST">


                        @csrf


                        <div class="form-group">
                          <label> Enter Title </label>
                          <input type="text" class="form-control" name="blog_name"
                           placeholder="Enter title">



                        </div>
                        <div class="form-group">
                          <label>Enter Slug</label>
                          <input type="text" class="form-control" name="blog_slug"
                           placeholder="Slug">





                        </div>

                        <div class="form-group">
                            <label>Enter Description</label>
                            <input type="text" class="form-control"  name="blog_description"
                             placeholder="Description">



                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>




                </div>
            </div>








        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Trash List
            </div>
    
                <div class="card-body">
    
    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
    
                          </tr>
                        </thead>
                        <tbody>
    
    
    
                            @foreach($trachCat as $category)
    
    
                           <tr>
                            <th scope="row"> {{ $trachCat->firstItem()+$loop->index}} </th>
                            <td> {{ $category-> title}}</td>
                            <td> {{ $category-> slug}}</td>
                            <td> {{ $category-> description}}</td>
                            <td>
                               
                                <a href="{{ url('softdelete/category/'.$category->id) }}" 
                                    class="btn btn-danger">Delete </a>
                            </td>
                          </tr>
    
                 @endforeach
    
    
                        </tbody>
                      </table>
    
                      {{ $trachCat->links() }}
                    
    
               
            </div>
        </div>
    
        <div class="col-md-4"> </div>
   
   
    </div>




 
@endsection
