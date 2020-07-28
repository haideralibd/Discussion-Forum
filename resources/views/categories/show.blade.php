@extends('layouts.app')

@section('content')

<div class="row mx-auto p-4"   style="margin-top: 80px; margin-bottom: 50px;" >
    <div class="col-md-8">
        <h3 class="text-muted text-center">Categories</h3>           
        <table class="table table-hover table-bordered table-sm shadow">
          <thead class="thead-dark">
            <tr align="center">
              <th>SL.</th>
              <th>Name</th>
            </tr>
          </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr align="center">
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>{{ $category->name}}</td>
                </tr>
              @endforeach
            </tbody>
        </table> 
  </div>
 

  <div class="col-md-3 mx-auto">
    <div class="shadow well bg-light">
        <form action="/categories/add" method="post" class="form-horizontal" id="addCategory" role="form"> 
                @csrf
                <div class="p-4 pb-0">
                <div class="form-group">
                    <h3 for="categoryName" class="text-muted text-center pb-2">New Category</h3>
                    <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Enter new category..." required>
                </div>
            </div> 

                <div class="form-group text-center pt-0 pb-5 ">
                        <button class="btn btn-info btn-circle text-uppercase" type="submit" id="submitCategory"> Add Category</button>
                </div>           
            </form>
    </div>
  </div>
</div>



@endsection