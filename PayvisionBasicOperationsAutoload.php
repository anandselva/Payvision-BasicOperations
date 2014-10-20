<?php
/**
 * File to load generated classes once at once time
 * @package PayvisionBasicOperations
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
/**
 * Includes for all generated classes files
 * @date 2014-10-20
 * @author Anand Selvadurai
 * @web www.anandselva.com
 * @version 1
 */
require_once dirname(__FILE__) . '/PayvisionBasicOperationsWsdlClass.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructBaseEntity.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructVoidResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructReferralApproval.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructVoid.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructReferralApprovalResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructCaptureResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructCapture.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructCardFundTransfer.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructRetrieveTransactionResultResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructRetrieveTransactionResult.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructCardFundTransferResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructRefundResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructCreditResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructCdcEntry.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructArrayOfCdcEntryItem.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructArrayOfCdcEntry.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructTransactionResult.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructAuthorizeResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructCdcEntryItem.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructOriginatorHeader.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructAuthorize.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructCredit.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructPaymentResponse.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructPayment.php';
require_once dirname(__FILE__) . '/Struct/PayvisionBasicOperationsStructRefund.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServiceAuthorize.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServicePayment.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServiceCredit.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServiceRefund.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServiceCapture.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServiceVoid.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServiceReferral.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServiceCard.php';
require_once dirname(__FILE__) . '/Service/PayvisionBasicOperationsServiceRetrieve.php';
require_once dirname(__FILE__) . '/PayvisionBasicOperationsClassMap.php';
