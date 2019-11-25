@extends('back.arena.layout.master')

@section('content')

<!--main content start-->
   <section id="main-content">
     <section class="wrapper">
       <!--overview start-->
       <div class="row">
         <div class="col-lg-12">

             <div class="col-md-6">
              <li><i class="fa fa-home"></i><a href="{{url('admin')}}">Home</a> | Setting</li>
              </div>
         </div>
       </div>
       
          
       <form method="post" action="{{url('setting/update')}}/{{$data->id}}" enctype="multipart/form-data">
        @csrf
    <!-- Main Content -->
        <div class="row">
      <!-- left Content -->
            <div class="col-lg-8">
              <!-- Company Content -->
              <div class="form-wrapper well">
                <div class="form-group">
                  
                  <!-- Company  -->
                  <div class="row">
                    <div class="col-md-3"><label >Company:</label></div>
                    <div class="col-md-9"><input type="text" class="form-control" id="company_name"  name="company_name" value="{{$data->companyName}}"></div>
                  </div>
                  <br>
                  <!-- End of Company -->

                  <!-- location  -->
                  <div class="row">
                    <div class="col-md-3"><label >Address:</label></div>
                    <div class="col-md-9"><input type="text" class="form-control" id="location"  name="location" value="{{$data->location}}"></div>
                  </div>  
                  <br>
                  <!-- End of location -->

                  <!-- Cotact  -->
                  <div class="row">
                    <div class="col-md-3"><label >Contact:</label></div>
                    <div class="col-md-9"><input type="text" class="form-control" id="contact"  name="contact" value="{{$data->contact}}"></div>
                  </div>  
                  <br>
                  <!-- End of Contact -->



                  <!-- Description  -->
                  <div class="row">
                    <div class="col-md-3"><label >Description:</label></div>
                   <div class="col-md-9"><textarea cols="30" id="description"> </textarea></div>
                  </div>
                  <!-- End of Description -->

                </div>
              </div>
              <!-- End of Company Content -->
              <br>
          
            </div>
      <!-- End of Left Content -->


        </div>
          <br>
    <!-- End of Main Content Form -->
          
          <!-- Button Bar -->
          <div class="row">
            <div class="col-lg-12">
              <ol class="breadcrumb">
                <div class="row">
                  <div class="col-md-12">
                    <button style="float: right;" class="btn btn-primary"><b>Update</b></button>
                  </div>
                </div>
              </ol>
            </div>
          </div>
          <!-- End of Button Bar -->
        </form>
     </section>
   </section>

@endsection




