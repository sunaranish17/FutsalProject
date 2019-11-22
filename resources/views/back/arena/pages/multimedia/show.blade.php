@extends('back.arena.layout.master')
@section('content')
 <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->

        <!-- Title Bar -->

        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <div class="row">
                <div class="col-md-6">
              <li><i class="fa fa-home"></i><a href="{{url('admin')}}">Home</a> | Multimedia</li>
                </div>
                <div class="col-md-6">
                  <li class="text-right"><a href="{{url('multimedia/add')}}"><i class="fa fa-plus"></i>Add</a></li>
                </div>
              </div>
            </ol>
          </div>
        </div>
        <!-- End of Title Bar -->

          <!-- Main Content -->
            <div class="container">
             
        
                <div class="container">
                  <div class="well well-sm">
                    <strong>Display</strong>
                    <div class="btn-group">
                      <a href="#" class="btn btn-default btn-sm" id="list"><span class="fa fa-th-list"></span> List</a>
                      <a href="#" class="btn btn-default btn-sm" id="grid"><span class="fa fa-th"></span> Grid</a>
                    </div>
                  </div>
                  <div class="showgrid" id="showgrid">
                    <div id="products" class="row list-group">
                      @foreach($data_multimedia as $data)
                      <div class="item col-xs-12 col-lg-4">
                        <div class="thumbnail">
                      <img class="img-responsive" src="{{$data->image}}" height="400" width="200" />
                          <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                          {{$data->description}}</h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12 col-md-12">
                              <table class="table table-responsive">
                                <tr>
                                  <td style="text-align: center;"><a href="{{url('multimedia/view')}}/{{$data->id}}"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                                  <td style="text-align: center;"><a href="{{url('multimedia/edit')}}/{{$data->id}}"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></td>
                                  <td style="text-align: center;"><a href="{{url('multimedia/delete')}}/{{$data->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach

                    </div>
                  </div>
                </div>
             
              <div class="showlist" id="showlist">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>S.N.</th>
                        <th>Image Name</th>
                        <th>Image Description</th>
                        <th colspan="3" style="text-align: center;">Setting</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data_multimedia as $data)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><img class="img-responsive" src="{{$data->image}}" alt="" height="100" width="100" /></td>
                        <td>{{$data->description}}</td>
                        <td style="text-align: center;"><a href="{{url('multimedia/view')}}/{{$data->id}}"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                        <td style="text-align: center;"><a href="{{url('multimedia/edit')}}/{{$data->id}}"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></td>
                        <td style="text-align: center;"><a href="{{url('multimedia/delete')}}/{{$data->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <script>

              </script>
              <center>
                <div class="col-lg-12">
                  <ul class="pagination">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </div>
              </center>
            </div>
            <button class="btn btn-default" style="float: right;">Publish</button>
            <button class="btn btn-default" style="float: right;">Cancel</button>
      </section>
    </section>
@endsection