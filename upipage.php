<?php
session_start();
include 'dbconn.php';
?>

<html>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        
    <link rel="stylesheet" href="cardpayment.css">
    <body>
    <div class="container">
    <div class="page-header text-center">
        <h1>UPI Payment Gateway</h1>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        
                    <div class="panel-body">
                        <form role="form" method="post" action="paymentupdate.php">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group"> <label>UPI ID</label>
                                        <div class="input-group"> <input type="text" class="form-control" name="vpa" placeholder="Valid VPA" />  </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12"> <button class="btn btn-success btn-lg btn-block">Confirm Payment</button> </div>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body> 
    </html>