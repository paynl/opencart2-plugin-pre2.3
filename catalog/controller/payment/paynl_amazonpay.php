<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlAmazonpay extends Pay_Controller_Payment {

    protected $_paymentOptionId = 1903;
    protected $_paymentMethodName = 'paynl_amazonpay';

}
