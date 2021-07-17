@extends("category.master")
@section("content")
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid --> 
    </div>
    <!-- /.content-header -->
    <!---- data table------>

   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal">Add Categories</a>
                </div>
              </div>
              
              <div class="card-body">
                   @if($errors->any())
                   <div class="alert alert-danger">
                    <ul>

                     @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                     @endforeach
                    </ul>
                  </div>
                  @endif  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
      
    <th>#</th>
     <th>Course Name</th>
    <th>Status</th>
     <th>Image</th>
      <th>Action</th>
     
    </tr>
                </thead>
                <tbody>
 </tbody>
                 <tfoot>
                @foreach($show as $a)

        <tr>
          <td>{{$a->id}}</td>
          <td>{{$a->name}}</td>
         
          <td>{{$a->status}}</td>
           <td><img src="{{ url('/upload/'.$a->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>
          <td>

          <a href="{{url('category/edit/'.$a->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;
          <a href="{{url('category/delete/'.$a->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;
          
          </td>

        </tr>

    @endforeach


                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!------modal form----->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(session('message'))
           <p class="alert aria-success">
              {{session('message')}}
           </p>
        @endif






<form  method="post" action="{{url('category/save')}}" enctype="multipart/form-data">

           @csrf
    
              Category Name:    <input class="form-control" type="text" name="name"><br>
              Image:<input type="file" name="image" class="form-control"><br>
                      <input class="form-control btn btn-success" type="submit" name="submit">
        </form>
  
</div>
  </div>
</div>
   </div>
   
    <!----end modal form------>

   <!----end data table------>
</div>

@endsection