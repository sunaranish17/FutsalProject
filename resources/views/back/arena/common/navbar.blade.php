<!-- container section start -->
 <section id="container" class="">
   <header class="header dark-bg">
     <div class="toggle-nav">
       <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
     </div>
     <!--logo start-->
     <a href="{{url('arena')}}" class="logo">Futsal<span class="lite"> NEPAL</span></a>
     <!--logo end-->
     <div class="nav search-row" id="top_menu">
       <!--  search form start -->
       <ul class="nav top-menu">
         <li>
           <form class="navbar-form">
             <input class="form-control" placeholder="Search" type="text">
           </form>
         </li>
       </ul>
       <!--  search form end -->
     </div>
     <div class="top-nav notification-row">
       <!-- notificatoin dropdown start-->
       <ul class="nav pull-right top-menu">
         <!-- user login dropdown start-->
         <li class="dropdown">
           <a data-toggle="dropdown" class="dropdown-toggle" href="#">
             <span class="profile-ava">
                 <img alt="" src="img/avatar1_small.jpg">
             </span>
            <span class="username">{{Auth::user()->name}}</span>
             <b class="caret"></b>
           </a>
           <ul class="dropdown-menu extended logout">
             <div class="log-arrow-up"></div>
             <li class="eborder-top">
               <a href="{{url('setting')}}"><i class="fa fa-cog" aria-hidden="true"></i> Setting </a>
             </li>
             <li>
             <li>
               <a href="{{ route('logout') }}"><i class="icon_key_alt"></i> Log Out</a>
             </li>
           </ul>
         </li>
         <!-- user login dropdown end -->
       </ul>
       <!-- notificatoin dropdown end-->
     </div>
   </header>
   <!--header end-->
   <!--sidebar start-->
   <aside>
     <div id="sidebar" class="nav-collapse ">
       <!-- sidebar menu start-->
       <ul class="sidebar-menu">
         <li class="active">
           <a class="" href="{{url('arena')}}">
             <i class="icon_house_alt"></i>
             <span>Home</span>
           </a>
         </li>

     
         <li class="sub-menu">
           <a href="{{url('working_hour')}}" class="">
             <span>working hour</span>
           </a>
         </li>


          <li>
            <a class="" href="{{url('location')}}">
             <span>location</span>
           </a>
         </li>

         <li class="sub-menu">
           <a href="{{url('setting')}}" class="">
             <i class="fa fa-cog" aria-hidden="true"></i>
             <span>Setting</span>
           </a>
         </li>
       </ul>
       <!-- sidebar menu end-->
     </div>
   </aside>
   <!--sidebar end-->

