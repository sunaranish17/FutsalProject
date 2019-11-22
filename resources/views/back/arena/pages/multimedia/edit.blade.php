@extends('back.arena.layout.master')
@section('content')
 <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        
        <!-- Title Bar -->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <div class="row">
                <div class="col-md-6">
                  <li> <a href="{{url('multimedia')}}">Multimedia</a></li>
                </div>
                <div class="col-md-6">
                  <li class="text-right"><i class="fa fa-edit"></i>Edit</li>
                </div>
              </div>
            </ol>
          </div>
        </div>
        <!-- End of Title Bar -->
        <form method="post" action="{{url('multimedia/update')}}/{{$data->id}}" enctype="multipart/form-data">
          @csrf


         <!-- Main Content -->
           <div class="row">
            <!-- left Content -->
            <div class="col-lg-8">
              <!-- add multimedia Content -->
              <div class="form-wrapper well">
                <div class="form-group">
                  <!-- image view  -->
                  <center>
                  <img src="{{url($data->image)}}" class="img-responsive" height="400" width="200" > 
                  </center>  
                  <br>
                  <!-- End of image view -->
                
                  <!-- Image  -->
                        <div class="row">
                          <input type="hidden" name="pic" value="{{$data->image}}">
                          
                          <br>
                          <input type="file" name="image" class="file">
                          <div class="input-group col-xs-12">
                          <span class="input-group-addon"><i class="fa fa-image"></i></span>
                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          <span class="input-group-btn">
                          <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-search"></i> Browse</button>
                        </span>
                        </div>
                        </div>
                        <br>
                  <!-- End of Image -->

              

                  <!-- image description  -->
                        <div class="row">
                                <div class="col-md-3"><label >Image Description:</label></div>
                                <div class="col-md-9"><input type="text" cols="30" value="{{$data->description}}"  name="description"></div>
                        </div>  
                        <br>
                  <!-- End of image description -->
                </div>
              </div>
                    <!-- End of add multimedia Content -->
                  
                   <!-- Button Bar -->
                      <div class="row">
                          <div class="col-lg-12">
                            <ol class="breadcrumb">
                              <div class="row">
                                <div class="col-md-12">
                                  <button class="btn btn-primary" style="float: right;"><b>Update</b></button>
                                </div>
                              </div>
                            </ol>
                          </div>
                      </div>
                  <!-- End of Button Bar -->
            </div>
          </div>
        </form>

       </section>
    </section>

@endsection