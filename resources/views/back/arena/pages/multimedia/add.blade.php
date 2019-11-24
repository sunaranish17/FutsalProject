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
                  <li> <a href="{{url('multimedia')}}">Multimedia</a> | Add</li>
                </div>
              </div>
            </ol>
          </div>
        </div>
        <!-- End of Title Bar -->
        <form method="post" action="{{url('multimedia/create')}}" enctype="multipart/form-data">
          @csrf


         <!-- Main Content -->
           <div class="row">
            <!-- left Content -->
            <div class="col-lg-8">
              <!-- add multimedia Content -->
              <div class="form-wrapper well">
                <div class="form-group">  
                  
                  <!-- Image  -->
                          <input type="file" name="image" class="file">
                          <div class="input-group col-xs-12">
                          <span class="input-group-addon"><i class="fa fa-image"></i></span>
                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          <span class="input-group-btn">
                          <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-search"></i> Browse</button>
                        </span>
                        </div>
                        <br>
                  <!-- End of Image -->


                  <!-- image description  -->
                        <div class="row">
                                <div class="col-md-3"><label >Image Description:</label></div>
                                <div class="col-md-9"><textarea cols="70" rows="5" name="description"></textarea></div>
                        </div>  
                        <br>
                  <!-- End of image description -->

                  <!-- image type  -->
                        <div class="row">
                                <div class="col-md-3"><label >Image status:</label></div>
                                <div class="col-md-9"><input type="status" class="form-control" id="status"  name="status" value=""></div>
                        </div>  
                        <br>
                  <!-- End of image type -->
                </div>
              </div>
                    <!-- End of add multimedia Content -->
                  
                   <!-- Button Bar -->
                      <div class="row">
                          <div class="col-lg-12">
                            <ol class="breadcrumb">
                              <div class="row">
                                <div class="col-md-12">
                                  <button class="btn btn-primary" style="float: right;"><b>ADD</b></button>
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