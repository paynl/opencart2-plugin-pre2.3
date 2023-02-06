<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ControllerPaymentPaynlGooglepay extends Pay_Controller_Admin {
    protected $_paymentOptionId = 2558;
    protected $_paymentMethodName = 'paynl_googlepay';

    protected $_defaultLabel = 'Google Pay';


}
