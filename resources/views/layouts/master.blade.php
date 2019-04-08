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

    <li class="dropdown @yield('accountModule')">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Module<b class="caret"></b></a>
     <ul class="dropdown-menu">
     <li @yield('ads')><a href="{{route('account.index')}}">Add Daily Sells</a></li>
      <li @yield('dsr')><a href="{{route('account.showReport')}}">Daily Sells Reports</a></li>
      <li @yield('mt')><a href="{{route('account.moneyTransfer')}}">Money Transfer</a></li>
      <li @yield('ac')><a href="{{route('account.addCustomer')}}">Add Customer</a></li>
     </ul>
    </li>

    <li class="dropdown @yield('inventoryModule')">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventory Module<b class="caret"></b></a>
     <ul class="dropdown-menu">
      <li @yield('cs')><a href="{{route('inventory.confrimShipment')}}">Confirm Shipment</a></li>
     <li @yield('ap')><a href="{{route('inventory.addProduct')}}">Add Product</a></li>
      <li @yield('pir')><a href="{{route('inventory.productInfoReport')}}">Product Infromation Reports</a></li>
      <li @yield('sr')><a href="{{route('inventory.shipmentReport')}}">Shipment Report</a></li>
     </ul>
    </li>

   </ul>

   <ul class="nav navbar-nav navbar-right">
    <li><a href="#">Logout</a></li>
   </ul>
  </div><!-- /.navbar-collapse -->
 </nav>
</div>


@yield('mainContent')

 <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>