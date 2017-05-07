@extends('layouts.app')
@section('content')
  <div class="row .payment-dialog-row">
         <div class="col-md-4 col-md-offset-4 col-xs-12">
             <div class="panel panel-default credit-card-box">
                 <div class="panel-heading">
                     <h3 class="panel-title"><span class="panel-title-text">Payment Details </span><img class="img-responsive panel-title-image" src="storage/pages/accepted_cards.png"></h3></div>
                 <div class="panel-body">
                     <form id="payment-form">
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label" for="cardNumber">Card number </label>
                                     <div class="input-group">
                                         <input class="form-control" type="tel" required="" placeholder="Valid Card Number" id="cardNumber">
                                         <div class="input-group-addon"><span><i class="fa fa-credit-card"></i></span></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-7">
                                 <div class="form-group">
                                     <label class="control-label" for="cardExpiry"><span class="hidden-xs">expiration </span><span class="visible-xs-inline">EXP </span> date</label>
                                     <input class="form-control" type="tel" required="" placeholder="MM / YY" id="cardExpiry">
                                 </div>
                             </div>
                             <div class="col-xs-5 pull-right">
                                 <div class="form-group">
                                     <label class="control-label" for="cardCVC">cv code</label>
                                     <input class="form-control" type="tel" required="" placeholder="CVC" id="cardCVC">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <label class="control-label" for="couponCode">coupon code</label>
                                     <input class="form-control" type="text" id="couponCode">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                 <button class="btn btn-success btn-block btn-lg" type="submit">Start Subscription</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
@endsection
