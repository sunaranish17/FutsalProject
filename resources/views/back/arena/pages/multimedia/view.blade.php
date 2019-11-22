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
                  <li><a href="{{url('multimedia')}}">Multimedia</a></li>
                </div>
                <div class="col-md-6">
                  <li class="text-right"><i class="fa fa-eye"></i>View</a></li>
                </div>
              </div>
            </ol>
          </div>
        </div>
        <!-- End of Title Bar -->
      
         <!-- Main Content -->
           <div class="row">
            <!-- left Content -->
            <div class="col-lg-8">
              <!-- add multimedia Content -->
              <div class="form-wrapper well">
                <div class="form-group">   
                  <!-- Image  -->
                        <div class="row">
                                  <div class="col-md-3"><label >Image:</label></div>
                                  <div class="item col-xs-12 col-lg-4">
                                    <div class="thumbnail">
                                    <img  src="{{url($data->image)}}" class="img-responsive" />
                                    <div class="caption">
                                      <h4 class="group inner list-group-item-heading">
                                    {{$data->description}}</h4>
                                    </div></div></div>
                        </div>
                        <br>
                  <!-- End of Image -->

                  <!-- image description  -->
                        <div class="row">
                                <div class="col-md-3"><label >Image Description:</label></div>
                                <div class="col-md-6"><label >{{$data->description}}</label></div>
                               
                        </div>  
                        <br>
                  <!-- End of image description -->
                </div>
              </div>
                    <!-- End of add multimedia Content -->
            </div>
          </div>
        </form>

       </section>
    </section>

@endsection