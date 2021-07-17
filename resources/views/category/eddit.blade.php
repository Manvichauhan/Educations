@extends("category.master")
@section("content")
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.rowaa
      </div><!-- /.container-fluid --> 
    </div>
    <!-- /.content-header -->
    <!---- data table----aa
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                
              </div>
              
              

    <!------modal form----->

  
<div class="col-md-6">

<form  method="post" action="{{url('category/Updatee')}}" enctype="multipart/form-data">

           @csrf

           <input type="hidden" name="id" value="{{$editt->id}}">
    
    
              Course Name:<input  type="text" name="course_name" class="form-control" value="{{$editt->course_name}}"><br>
              Description: <input type="textarea" name="description" class="form-control" value="{{$editt->description}}"><br>
              Price: <input type="text" name="price" class="form-control" value="{{$editt->price}}"><br>
             Details: <input type="textarea" name="details" class="form-control" value="{{$editt->details}}"><br>
             Course_Include: <input type="textarea" name="course_include" class="form-control" value="{{$editt->course_include}}"><br>
             Course_Content: <input type="textarea" name="course_content" class="form-control" value="{{$editt->course_content}}"><br>
              Image: <img src="{{ url('/upload/'.$editt->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"><br>

             <input type="file" name="image" class="form-control"><br>
               
                      <input class="form-control btn btn-success" type="submit" name="Updatee" value="Updatee">
        </form>
</div>
   <!----end data table------>
</div>

@endsection