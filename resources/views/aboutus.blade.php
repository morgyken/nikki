@extends('layouts.solver')

@section('content')

 <div class="row row-centered">
    <h1> Pay using Paypal or using Card in the following </h1>
                                
    <div class="col-centered col-fixed">
        <div class="line-separator"></div>
    </div>

</div>
<div class="container">
    <div class="row justify-content-center">
       
            <div class="card">
                <div class="card-header text-center"><h4>Make 1 Dollar payment </h4>
                </div>

                <div class="container">
                    <div class="row col-md-6 col-md-offset-3 text-center">
                        <div class="row" style="border-right-style:solid; border-right-color:#f7f7f7">

                                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="SLTRFUAAURHJJ">
                                        <table>
                                        <tr><td><input type="hidden" name="on0" value="user_name"></td></tr>
                                        <tr>
                                            <td>
                                                 <div class="form-group">
                                                    <input type="hidden" name="os0" class="" 
                                                    value="{{strstr($email, '@', -1)}}" >
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td>
                                                <div class="form-group">
                                                    <input class="form-control col-md-10"  type="hidden" name="on1" value="email">
                                                </div>
                                        </td></tr><tr><td>
                                             <div class="form-group">
                                                <input class="form-control col-md-12"  value="{{$email}}" type="hidden" name="os1">
                                            </div>
                                        </td></tr>
                                        </table>
                                        
                                        <input type="image" src="{{ asset('img/buynow.png') }}" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>
                        </div>
                         <div class="row row-centered">
                            <h3> Pay using Card </h3>
                                                        
                            <div class="col-centered col-fixed">
                                <div class="line-separator"></div>
                            </div>

                        </div>
                        <div class="row" style="padding-right:10px; ">
                         
                                               

                            <form action="{{route('post.payment')}}" method="post" id="payment-form">
                                    {{ csrf_field()}}
                                                      

                                <label for="card-element">
                                  Credit or debit card
                                </label>
                                <div class="form-row">  
                                <div id="card-element" class="mystripe">
                                  <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <div class="form-row">  

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                           

                              <button type="submit" class="btn btn-primary">Submit Payment</button>
                            </form>
                                <style type="text/css">
                                    /**
                                     * The CSS shown here will not be introduced in the Quickstart guide, but shows
                                     * how you can use CSS to style your Element's container.
                                     */
                                    input{
                                        color: #890999;
                                    }

                                </style>                        
                                                         
                    </div>
                </div>
            </div>

        </div>
      
    </div>
</div>
@endsection
