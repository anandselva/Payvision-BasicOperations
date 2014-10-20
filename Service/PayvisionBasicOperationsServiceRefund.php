<?php
/**
 * File for class PayvisionBasicOperationsServiceRefund
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * This class stands for PayvisionBasicOperationsServiceRefund originally named Refund
 * @package PayvisionBasicOperations
 * @subpackage Services
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
class PayvisionBasicOperationsServiceRefund extends PayvisionBasicOperationsWsdlClass
{
    /**
     * Sets the OriginatorHeader SoapHeader param
     * @uses PayvisionBasicOperationsWsdlClass::setSoapHeader()
     * @param PayvisionBasicOperationsStructOriginatorHeader $_payvisionBasicOperationsStructOriginatorHeader
     * @param string $_nameSpace http://payvision.com/gateway/
     * @param bool $_mustUnderstand
     * @param string $_actor
     * @return bool true|false
     */
    public function setSoapHeaderOriginatorHeader(PayvisionBasicOperationsStructOriginatorHeader $_payvisionBasicOperationsStructOriginatorHeader,$_nameSpace = 'http://payvision.com/gateway/',$_mustUnderstand = false,$_actor = null)
    {
        return $this->setSoapHeader($_nameSpace,'OriginatorHeader',$_payvisionBasicOperationsStructOriginatorHeader,$_mustUnderstand,$_actor);
    }
    /**
     * Method to call the operation originally named Refund
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : OriginatorHeader
     * - SOAPHeaderNamespaces : http://payvision.com/gateway/
     * - SOAPHeaderTypes : {@link PayvisionBasicOperationsStructOriginatorHeader}
     * - SOAPHeaders : required
     * @uses PayvisionBasicOperationsWsdlClass::getSoapClient()
     * @uses PayvisionBasicOperationsWsdlClass::setResult()
     * @uses PayvisionBasicOperationsWsdlClass::saveLastError()
     * @param PayvisionBasicOperationsStructRefund $_payvisionBasicOperationsStructRefund
     * @return PayvisionBasicOperationsStructRefundResponse
     */
    public function Refund(PayvisionBasicOperationsStructRefund $_payvisionBasicOperationsStructRefund)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Refund($_payvisionBasicOperationsStructRefund));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see PayvisionBasicOperationsWsdlClass::getResult()
     * @return PayvisionBasicOperationsStructRefundResponse
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
