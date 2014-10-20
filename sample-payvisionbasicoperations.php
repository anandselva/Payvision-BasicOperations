<?php
/**
 * Test with PayvisionBasicOperations for 'https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL'
 * @package PayvisionBasicOperations
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/PayvisionBasicOperationsAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a PayvisionBasicOperationsWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[PayvisionBasicOperationsWsdlClass::WSDL_URL] = 'https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL';
 * $wsdl[PayvisionBasicOperationsWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[PayvisionBasicOperationsWsdlClass::WSDL_TRACE] = true;
 * $wsdl[PayvisionBasicOperationsWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[PayvisionBasicOperationsWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new PayvisionBasicOperationsWsdlClass($wsdl);
 */
/**
 * Examples
 */


/******************************************************
 * Example for PayvisionBasicOperationsServiceAuthorize
 */
$payvisionBasicOperationsServiceAuthorize = new PayvisionBasicOperationsServiceAuthorize();
// sample call for PayvisionBasicOperationsServiceAuthorize::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionBasicOperationsServiceAuthorize->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionBasicOperationsServiceAuthorize::Authorize()
if($payvisionBasicOperationsServiceAuthorize->Authorize(new PayvisionBasicOperationsStructAuthorize(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServiceAuthorize->getResult());
else
    print_r($payvisionBasicOperationsServiceAuthorize->getLastError());

/****************************************************
 * Example for PayvisionBasicOperationsServicePayment
 */
$payvisionBasicOperationsServicePayment = new PayvisionBasicOperationsServicePayment();
// sample call for PayvisionBasicOperationsServicePayment::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionBasicOperationsServicePayment->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionBasicOperationsServicePayment::Payment()
if($payvisionBasicOperationsServicePayment->Payment(new PayvisionBasicOperationsStructPayment(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServicePayment->getResult());
else
    print_r($payvisionBasicOperationsServicePayment->getLastError());

/***************************************************
 * Example for PayvisionBasicOperationsServiceCredit
 */
$payvisionBasicOperationsServiceCredit = new PayvisionBasicOperationsServiceCredit();
// sample call for PayvisionBasicOperationsServiceCredit::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionBasicOperationsServiceCredit->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionBasicOperationsServiceCredit::Credit()
if($payvisionBasicOperationsServiceCredit->Credit(new PayvisionBasicOperationsStructCredit(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServiceCredit->getResult());
else
    print_r($payvisionBasicOperationsServiceCredit->getLastError());

/***************************************************
 * Example for PayvisionBasicOperationsServiceRefund
 */
$payvisionBasicOperationsServiceRefund = new PayvisionBasicOperationsServiceRefund();
// sample call for PayvisionBasicOperationsServiceRefund::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionBasicOperationsServiceRefund->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionBasicOperationsServiceRefund::Refund()
if($payvisionBasicOperationsServiceRefund->Refund(new PayvisionBasicOperationsStructRefund(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServiceRefund->getResult());
else
    print_r($payvisionBasicOperationsServiceRefund->getLastError());

/****************************************************
 * Example for PayvisionBasicOperationsServiceCapture
 */
$payvisionBasicOperationsServiceCapture = new PayvisionBasicOperationsServiceCapture();
// sample call for PayvisionBasicOperationsServiceCapture::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionBasicOperationsServiceCapture->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionBasicOperationsServiceCapture::Capture()
if($payvisionBasicOperationsServiceCapture->Capture(new PayvisionBasicOperationsStructCapture(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServiceCapture->getResult());
else
    print_r($payvisionBasicOperationsServiceCapture->getLastError());

/*************************************************
 * Example for PayvisionBasicOperationsServiceVoid
 */
$payvisionBasicOperationsServiceVoid = new PayvisionBasicOperationsServiceVoid();
// sample call for PayvisionBasicOperationsServiceVoid::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionBasicOperationsServiceVoid->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionBasicOperationsServiceVoid::Void()
if($payvisionBasicOperationsServiceVoid->Void(new PayvisionBasicOperationsStructVoid(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServiceVoid->getResult());
else
    print_r($payvisionBasicOperationsServiceVoid->getLastError());

/*****************************************************
 * Example for PayvisionBasicOperationsServiceReferral
 */
$payvisionBasicOperationsServiceReferral = new PayvisionBasicOperationsServiceReferral();
// sample call for PayvisionBasicOperationsServiceReferral::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionBasicOperationsServiceReferral->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionBasicOperationsServiceReferral::ReferralApproval()
if($payvisionBasicOperationsServiceReferral->ReferralApproval(new PayvisionBasicOperationsStructReferralApproval(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServiceReferral->getResult());
else
    print_r($payvisionBasicOperationsServiceReferral->getLastError());

/*************************************************
 * Example for PayvisionBasicOperationsServiceCard
 */
$payvisionBasicOperationsServiceCard = new PayvisionBasicOperationsServiceCard();
// sample call for PayvisionBasicOperationsServiceCard::setSoapHeaderOriginatorHeader() in order to initialize required SoapHeader
$payvisionBasicOperationsServiceCard->setSoapHeaderOriginatorHeader(new PayvisionBasicOperationsStructOriginatorHeader(/*** update parameters list ***/));
// sample call for PayvisionBasicOperationsServiceCard::CardFundTransfer()
if($payvisionBasicOperationsServiceCard->CardFundTransfer(new PayvisionBasicOperationsStructCardFundTransfer(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServiceCard->getResult());
else
    print_r($payvisionBasicOperationsServiceCard->getLastError());

/*****************************************************
 * Example for PayvisionBasicOperationsServiceRetrieve
 */
$payvisionBasicOperationsServiceRetrieve = new PayvisionBasicOperationsServiceRetrieve();
// sample call for PayvisionBasicOperationsServiceRetrieve::RetrieveTransactionResult()
if($payvisionBasicOperationsServiceRetrieve->RetrieveTransactionResult(new PayvisionBasicOperationsStructRetrieveTransactionResult(/*** update parameters list ***/)))
    print_r($payvisionBasicOperationsServiceRetrieve->getResult());
else
    print_r($payvisionBasicOperationsServiceRetrieve->getLastError());
