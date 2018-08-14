@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h2> Order Unlocks Now </h2></div>

                <div class="container">
                    	<div class="row">
                			<div class="col-md-9 col-md-offset-1">
                				<div class="panel panel-login">
                					<div class="panel-body">
                						<div class="row">
                							<div class="col-lg-9">
                								<form action="{{route ('posts')}}" method="POST" role="form" style="display: block;">
                									<div class="form-group">
                										<textarea type="text" name="urlpost"
                                    id="post" tabindex="1" class="form-control" placeholder="Paste Coursehero URL here" value="">
                                  </textarea>
                									</div>

                                  {{ csrf_field() }}

                									<div class="form-group">

                										<input type="text" name="email"
                                    id="email" tabindex="2"
                                    class="form-control" placeholder="Enter your email">
                									</div>

                                  <div class="form-group col-md-6">
                                    <div id="paypal-button"></div>
                                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                    <script>
                                    paypal.Button.render({
                                      env: 'sandbox',
                                      client: {
                                        sandbox: 'demo_sandbox_client_id'
                                      },
                                      payment: function (data, actions) {
                                        return actions.payment.create({
                                          transactions: [{
                                            amount: {
                                              total: '0.01',
                                              currency: 'USD'
                                            }
                                          }]
                                        });
                                      },
                                      onAuthorize: function (data, actions) {
                                        return actions.payment.execute()
                                          .then(function () {
                                            window.alert('Thank you for your purchase!');
                                          });
                                      }
                                    }, '#paypal-button');
                                    </script>

                                  </div>
                                    <div class="form-group col-md-6 text-right">

                                    <script
                                        src="https://checkout.stripe.com/checkout.js"
                                        class="stripe-button"
                                        data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
                                        data-image="/square-image.png"
                                        data-name="Demo Site"
                                        data-description="2 widgets ($20.00)"
                                        data-amount="2000">
                                      </script>

                									</div>

                									<div class="form-group">
                											<div class="col-sm-6 col-sm-offset-3">
                												<input type="submit" name="login-submit" id="login-submit"
                                        tabindex="4" class="form-control btn btn-block btn-success" value="Submit Details">
                											</div>

                									</div>
                                </form>
                							</div>
                						</div>
                			</div>
                	</div>
            </div>
        </div>
    </div>
</div>
@endsection
