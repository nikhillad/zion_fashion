@extends('includes')

<html lang="en">
  <body>
    <div class="container">
      <div class="row">
        <div style="margin-top:100px" class="col-sm-12">        
            <h2 style="font-size:90px;color:#00BCD4" class="lg-title">500<i style="font-size:340px;color:grey" class="fa fa-heartbeat"></i></h2>
            <h3 class="text-center">OMG! There is an error in the server. Kindly visit back, meanwhile we will take the server to the doctor.</h3>
            <div class="text-center">  
              <a href="{{route('home')}}" class="btn btn-primary">Take me home</a>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>