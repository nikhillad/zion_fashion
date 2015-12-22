@extends('includes')

<html lang="en">
  <body>
    <div class="container">
      <div class="row">
 
        <h2 class="lg-title">{{$objProducts[0]->type_full}}</h2>
 
        <div class="col-md-12">
            <div class="row">
            @foreach ($objProducts as $product)
                  <div class="col-xs-6 col-md-3">
                    <a target="_blank" href="{{URL::asset('img/products/'.$product->type.'/large/'.$product->filename)}}" class="thumbnail">
                      <img src="data:image/jpeg;base64,{{base64_encode(thumbnailImage('img/products/'.$product->type.'/large/'.$product->filename))}}" />
                    </a>
                  </div>
            @endforeach         
             </div> 
        </div>

      </div>
    </div>
  </body>
</html>