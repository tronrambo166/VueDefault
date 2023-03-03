

<!DOCTYPE HTML>
<head>
    <title>Vue Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('/css/menu.css') }}" rel="stylesheet" type="text/css" media="all"/>
    
    
    
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
   


   <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    
<!-- {{-- Vue component files --}}
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/http-vue-loader"></script>
  {{-- Vue component files --}} -->
  
</head>
<body>

     

<div class="app container" >
    
 
    
    <div class="row " style="background: aliceblue;">
    
    <div class="col-sm-8 py-2"> 

            <div class="navbar navbar-expand-sm bg-light p-0 w-100 navy ">
                <ul class="navbar-nav">
                    <li class="nav-item py-1 px-3 bg-light border-right "><router-link to="/home" class=" nav-link">HOME</router-link></li>

                    <li class="nav-item py-1 px-3 bg-light border-right"><router-link to="/products" class=" nav-link">PRODUCTS
                    </router-link></li>

                    <li class="nav-item py-1 px-3 bg-light border-right"><router-link to="/cart" class=" nav-link">ABOUT</router-link></li>


                    <li class="nav-item py-1 px-3 bg-light border-right"><router-link to="contacts" class=" nav-link">CONTACT</router-link></li>
                </ul>
            </div>

                  </div>

    
    
    <div class="col-sm-4  ">
   
       

        @php use App\Models\Cart; $cart=Cart::get(); $carts=count($cart); @endphp
        @auth
        @php
        $user_id=Auth::user()->id; @endphp
          @endauth
        
        
        
         <div class="cart d-inline  w-50  bg-light ">  <span style="display: inline-block; margin-top: 8px; " class="ml-5  text-dark"><b>Cart</b> 
            <a style="width: 36px;height: 25px" href="" class="btn ml-2 mb-1 btn-dark rounded font-weight-bold">
        <span style="margin-top: -5px; display: block" class="text-danger">{{$carts}}</span></a></span>
        
       
        
        </div>
        
        
        
       
        
    @guest
    @if (Route::has('login'))

     <a class=" d-inline my-0 h5 bg-light mt-2 d-inline-block text-center" href="{{ route('login') }}" >
        <b>Log In</b></a>
        @endif

     

     @else
     {{-- <a class="w-100 my-0 h5 text-info mt-2 d-inline-block text-center" href="{{url('profile/'.$user_id)}}">
        <b>Profile</b></a>  --}}

         <div class="text-center w-50 d-inline">  
            <a class="text-center w-50 d-inline" href="route('logout')" 
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a> </div>

        <form  class="d-inline" method="POST" action="{{ route('logout') }}">
                                                                 @csrf</form>
                    
        @endguest
        
        </div>
        
        
        
        
    </div>
    

    <div class="row px-5 mt-5"> 
    <router-view></router-view>
     </div>

    
    </div>
 
    




   <!-- @yield('page') -->


<div class="container-fluid two bg-white mt-5 fixed-bottom">
        <div class="container">
            <div class="row py-2">
            
                <div class="col-sm-4">
                    <h4>Why Buy Us ?</h4>
                    <p class="text-secondary">lorem ipsum is the best product
                    lorem ipsum is the best product
                    lorem ipsum is the best product
                    lorem ipsum is the best product</p>
                </div>
                
                 <div class="col-sm-4">
                    <h4>Why Buy Us ?</h4>
                    <p class="text-secondary">lorem ipsum is the best product
                    lorem ipsum is the best product
                    lorem ipsum is the best product
                    lorem ipsum is the best product</p>
                </div>
                
                
                
                
                 <div class="col-sm-4">
                    <h4>Why Buy Us ?</h4>
                    <p class="text-secondary">lorem ipsum is the best product
                    lorem ipsum is the best product
                    lorem ipsum is the best product
                    lorem ipsum is the best product</p>
                </div>
                
                
            </div>
            
            
            
        </div>
        
        <footer>
            <div class="row fix bg-dark">
                <p class="m-auto font-italic text-info py-1 text-center">&copy; Copyright 2020. Tottenham All Rights Reserved</p>
            </div>
        </footer>
        
    </div>
    
    
    



 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
<script type="text/javascript" src="js/app.js"></script>
 <!-- {{-- Vue files --}}
 <script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js"></script>

<script type="text/javascript" src="js/vue-router.js"></script>
<script type="text/javascript" src="js/routerCode.js"></script>
{{-- Vue files --}}  -->

<script type="text/javascript">
    
</script>



</body>
</html>
