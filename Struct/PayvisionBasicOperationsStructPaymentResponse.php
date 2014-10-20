<?php
/**
 * File for class PayvisionBasicOperationsStructPaymentResponse
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionBasicOperationsStructPaymentResponse originally named PaymentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testprocessor.payvisionservices.com/Gateway/BasicOperations.asmx?WSDL}
 * @package PayvisionBasicOperations
 * @subpackage Structs
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionBasicOperationsStructPaymentResponse extends PayvisionBasicOperationsWsdlClass
{
    /**
     * The PaymentResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var PayvisionBasicOperationsStructTransactionResult
     */
    public $PaymentResult;
    /**
     * Constructor method for PaymentResponse
     * @see parent::__construct()
     * @param PayvisionBasicOperationsStructTransactionResult $_paymentResult
     * @return PayvisionBasicOperationsStructPaymentResponse
     */
    public function __construct($_paymentResult = NULL)
    {
        parent::__construct(array('PaymentResult'=>$_paymentResult),false);
    }
    /**
     * Get PaymentResult value
     * @return PayvisionBasicOperationsStructTransactionResult|null
     */
    public function getPaymentResult()
    {
        return $this->PaymentResult;
    }
    /**
     * Set PaymentResult value
     * @param PayvisionBasicOperationsStructTransactionResult $_paymentResult the PaymentResult
     * @return PayvisionBasicOperationsStructTransactionResult
     */
    public function setPaymentResult($_paymentResult)
    {
        return ($this->PaymentResult = $_paymentResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PayvisionBasicOperationsWsdlClass::__set_state()
     * @uses PayvisionBasicOperationsWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PayvisionBasicOperationsStructPaymentResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
