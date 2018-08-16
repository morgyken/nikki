.well-lg .glyphicon {
font-size: 80px;
}@extends('layouts.blog')

@section('title', 'Welcome')

<script type="text/javascript">

    function incrementValue()
    {
        var value =  document.getElementById('price').value ;
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('price').value =  value;
    }
    function decrementValue()
    {
        var value =  document.getElementById('price').value;
        value = isNaN(value) ? 0 : value;
        value--;
        document.getElementById('price').value = value;
    }



</script>


@section('body-content')
    <div class="container">
        <div class='row'>
            <div class='col-md-5'>
                <h2> Pay with Paypal</h2>

                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin: 30px;">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="seller@designerfotos.com">
                    <input type="hidden" name="item_name" value="Memorex 256MB Memory Stick">
                    <input type="hidden" name="item_number" value="MEM32507725">
                    <input type="hidden" name="amount" value="3">
                    <input type="hidden" name="tax" value="1">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="currency_code" value="USD">

                    <!-- Enable override of buyers's address stored with PayPal . -->
                    <input type="hidden" name="address_override" value="1">
                    <!-- Set variables that override the address stored with PayPal. -->
                    <input type="hidden" name="first_name" value="John">
                    <input type="hidden" name="last_name" value="Doe">
                    <input type="hidden" name="address1" value="345 Lark Ave">
                    <input type="hidden" name="city" value="San Jose">
                    <input type="hidden" name="state" value="CA">
                    <input type="hidden" name="zip" value="95121">
                    <input type="hidden" name="country" value="US">
                    <input type="image" name="submit"
                           src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                           alt="PayPal - The safer, easier way to pay online">
                </form>

                <h2> Or use Card to Pay</h2>


            </div>
            <div class='col-md-7'>
                <!-- CREDIT CARD FORM STARTS HERE -->
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table" >
                        <div class="row display-tr" >
                            <h3 class="panel-title display-td" >Payment Details</h3>
                            <div class="display-td" >
                                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="payment-form" method="POST"
                              action="{{route('post.card-details')}}">

                            </div><div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="cardNumber">CARD NUMBER</label>
                                        <div class="input-group">
                                            <input
                                                    type="tel"
                                                    class="form-control"
                                                    name="cardNumber"
                                                    placeholder="Valid Card Number"
                                                    autocomplete="cc-number"
                                                    required autofocus
                                            />
                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                        <input
                                                type="tel"
                                                class="form-control"
                                                name="expiry_date"
                                                placeholder="MM / YY"
                                                autocomplete="cc-exp"
                                                required
                                        />
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cardCVC">CV CODE</label>
                                        <input
                                                type="tel"
                                                class="form-control"
                                                name=""
                                                placeholder="CVC"
                                                autocomplete="cc-csc"
                                                required
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Subscription</button>
                                </div>
                            </div>
                            <div class="row" style="display:none;">
                                <div class="col-xs-12">
                                    <p class="payment-errors"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CREDIT CARD FORM ENDS HERE -->



            </div>


            </p>
        </div>

    </div>
    </div>

    <div class='col-md-1'></div>
    </div>
    </div>

@endsection

