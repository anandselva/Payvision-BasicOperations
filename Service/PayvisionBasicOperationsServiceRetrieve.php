<?php
/**
 * File for class PayvisionBasicOperationsServiceRetrieve
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionBasicOperationsServiceRetrieve originally named Retrieve
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionBasicOperationsServiceRetrieve extends PayvisionBasicOperationsWsdlClass
{
    /**
     * Method to call the operation originally named RetrieveTransactionResult
     * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
     * @uses PayvisionBasicOperationsWsdlClass::setResult()
     * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
     * @param PayvisionBasicOperationsStructRetrieveTransactionResult $_payvisionBasicOperationsStructRetrieveTransactionResult
     * @return PayvisionBasicOperationsStructRetrieveTransactionResultResponse
     */
    public function RetrieveTransactionResult(PayvisionBasicOperationsStructRetrieveTransactionResult $_payvisionBasicOperationsStructRetrieveTransactionResult)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->RetrieveTransactionResult($_payvisionBasicOperationsStructRetrieveTransactionResult));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see PayvisionBasicOperationsWsdlClass::getResult()
     * @return PayvisionBasicOperationsStructRetrieveTransactionResultResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
