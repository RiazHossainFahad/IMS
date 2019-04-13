<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title')</title>

 <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
 <script src="/assets/jquery/jquery.js"></script>
<style>
.main{
margin-top:1%;  
}
@yield('style');
</style>
</head>
<body>
 
 <div class="container-fluid main">
 <nav class="navbar navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#">IMS</a>
  </div>
 
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
   <ul class="nav navbar-nav">

     <li class="dropdown @yield('factoryModule')">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Factory Management<b class="caret"></b></a>
       <ul class="dropdown-menu">
         <li @yield('af')><a href="{{route('factory.addFactory')}}">Add Factory</a></li>
         <li @yield('armtf')><a href="{{route('factory.assignRawMaterials')}}">Assign Raw Materials to Factory</a></li>
       <li @yield('asi')><a href="{{route('factory.addShipmentInfo')}}">Add Shipment Info</a></li>
         <li @yield('fi')><a href="{{route('factory.factoryInfo')}}">Factory Information</a></li>
       </ul>
      </li>

    <li class="dropdown @yield('accountModule')">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Module<b class="caret"></b></a>
     <ul class="dropdown-menu">
     <li @yield('mrfi')><a href="{{route('account.showMoneyRecipt')}}">Money Receive from India</a></li>
       <li @yield('bs')><a href="{{route('account.showBalanceSheet')}}">Balance Sheet</a></li>
     </ul>
    </li>

   </ul>

   <ul class="nav navbar-nav navbar-right">
   <li><a href="{{route('logout.index')}}">Logout</a></li>
   </ul>
  </div><!-- /.navbar-collapse -->
 </nav>
</div>


@yield('mainContent')

 <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>