@extends('layouts.app')


@section('content')
 
 <div class="jumbotron">
    <div class="container"> 
     <div class="row">
         <div class="col-md-8 hidden-xs hidden-sm" id="hero">
             <h3 class="black">Healthy Food.</h3>
             <h3 class="green">Served At Doorstep.</h3>
             <p>We deliver healthy food that are ready to eat.Just choose your own menu you like..</p>
         </div>
         <div id="order-form" class="col-md-4">

            <form method="POST" action="#">
                 <div>
                     <input type="text" name="city" class="form-control" placeholder="Enter your city.."> 
                 </div>
                  <div>
                     <input type="text" name="city" class="form-control" placeholder="Enter your location..."> 
                 </div>
                  <div>
                     <input type="text" name="city" class="form-control" placeholder="Choose your cuisines.."> 
                 </div>
                  <div>
                     <input type="text" name="city" class="form-control" placeholder="Choose restaurants.."> 
                 </div>
                 <br/>
                 <div>
                     <input type="radio" id="deliverytype" name="deliverytype" value="pick"> Pick Up
                     <input type="radio" id="deliverytype" name="deliverytype" value="drop"> Home Delivery
                 </div>
                 <br/>
                  <div>
                     <input type="submit" name="city" class="btn btn-success" value="Proceed To Menu"> 
                 </div>
                 <p style="margin-top: 5px;margin-bottom: 2px;font-size: 16px;" class="text-center">---- OR ----</p>
                 <div>
                     <input type="submit" name="city" class="btn btn-primary" value="Login to account"> 
                 </div>
            </form>
              
         </div>
     </div>
   </div>
 </div>

<div class="container">
     <section class="white" id="how-it-works">
          <h2 class="section-title">How it Works?</h2>
          <div class="row">
              <div class="col-md-4 item">
                  <img src="/img/icons/restaurant.svg">
                  <h4>Choose Your Meals</h4>
                  <p>Choose your favourite food and order online or by phone.It's easy to customise your order.</p> 
              </div>
               
              <div class="col-md-4 item">
                  <img src="/img/icons/scooter.svg">
                  <h4>We Deliver Your Meals</h4>
                  <p>We prepare and deliver all your meals at your doorstep without any hustle.</p>
              </div>
                
              <div class="col-md-4 item">
                  <img src="/img/icons/dish.svg">
                  <h4>Eat and Enjoy</h4>
                  <p>No shooping,no cooking,no counting and no cleaning.Enjoy your healthy meals with your family.</p>  
              </div> 

          </div>
     </section>

</div>


<div class="container">
     <section class="white" id="featured-menu">
          <h2 class="section-title">Our Featured Menu</h2>
          <div class="row">
             <a class="col-md-3" href="#">
              <div class="item">
                  <img src="/img/featured/food/01.jpeg">
                 <div class="desc"> 
                  <h4>Cheese Garlic Bread</h4>
                  <p>From Gravity Cafe</p> 
                 </div> 
              </div>
             </a>  

              <a class="col-md-3" href="#">
              <div class="item">
                   <img src="/img/featured/food/03.jpg">
                   <div class="desc"> 
                  <h4>Mexican Burger</h4>
                  <p>From Pune Burgers.</p> 
                 </div> 
              </div>
              </a>  
               <a class="col-md-3 " href="#">
              <div class="item">
                    <img src="/img/featured/food/02.jpeg">
                   <div class="desc"> 
                  <h4>Thai Burger With Fries</h4>
                  <p>By Sunburn Cafe, Mumbai.</p> 
                 </div>  
              </div> 
              </a>
 
             <a class="col-md-3" href="#">
              <div class="item">
                    <img src="/img/featured/food/04.jpg">
                   <div class="desc"> 
                  <h4>Cheese Burst Pizza</h4>
                  <p>Cooked at Pizzas etc.</p> 
                 </div>  
              </div> 
              </a>

               <a class="col-md-3" href="#">
              <div class="item">
                  <img src="/img/featured/food/01.jpeg">
                 <div class="desc"> 
                  <h4>Cheese Garlic Bread</h4>
                  <p>From Gravity Cafe</p> 
                 </div> 
              </div>
             </a>  

              <a class="col-md-3" href="#">
              <div class="item">
                   <img src="/img/featured/food/03.jpg">
                   <div class="desc"> 
                  <h4>Mexican Burger</h4>
                  <p>From Pune Burgers.</p> 
                 </div> 
              </div>
              </a>  
               <a class="col-md-3 " href="#">
              <div class="item">
                    <img src="/img/featured/food/02.jpeg">
                   <div class="desc"> 
                  <h4>Thai Burger With Fries</h4>
                  <p>By Sunburn Cafe, Mumbai.</p> 
                 </div>  
              </div> 
              </a>
 
             <a class="col-md-3" href="#">
              <div class="item">
                    <img src="/img/featured/food/04.jpg">
                   <div class="desc"> 
                  <h4>Cheese Burst Pizza</h4>
                  <p>Cooked at Pizzas etc.</p> 
                 </div>  
              </div> 
              </a>

              
              
             
             

            

          </div>
     </section>

</div>

 




  <section class="grey" id="featured-vendors">
         
  </section>



  <section class="white" id="subscribe">
     <div class="container">
        
                  <p>Be a lucky winner to get FREE food coupons once a week.We also offer you latest deals in your inbox.</p>  
         <form action="#">
              <div class="input-group">
                 <input class="form-control" name="email" id="email" type="email" placeholder="Enter Your Email..." required>
                 <button class="btn btn-success" type="submit">Subscribe</button>
              </div>
             </form>
     </div>    
  </section>

@stop