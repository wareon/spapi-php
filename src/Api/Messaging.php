<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2020-12-22
* Specification: ttps://github.com/amzn/selling-partner-api-models/blob/main/models/messaging-api-model/messaging.json
* Source MD5 signature: 36ccf9e1cf7b47888760889d6461a6d0
*
*
* Selling Partner API for Messaging
* With the Messaging API you can build applications that send messages to buyers. You can get a list of message types that are available for an order that you specify, then call an operation that sends a message to the buyer for that order. The Messaging API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class Messaging extends Client {

  /**
  * Operation getMessagingActionsForOrder
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which you want a list of available message types.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function getMessagingActionsForOrder($amazonOrderId, $queryParams = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation confirmCustomizationDetails
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function confirmCustomizationDetails($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/confirmCustomizationDetails", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation createConfirmDeliveryDetails
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function createConfirmDeliveryDetails($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/confirmDeliveryDetails", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation createLegalDisclosure
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function createLegalDisclosure($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/legalDisclosure", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation createNegativeFeedbackRemoval
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function createNegativeFeedbackRemoval($amazonOrderId, $queryParams = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/negativeFeedbackRemoval", [
      'method' => 'POST',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation createConfirmOrderDetails
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function createConfirmOrderDetails($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/confirmOrderDetails", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation createConfirmServiceDetails
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function createConfirmServiceDetails($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/confirmServiceDetails", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation CreateAmazonMotors
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function CreateAmazonMotors($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/amazonMotors", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation CreateWarranty
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function CreateWarranty($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/warranty", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation GetAttributes
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function GetAttributes($amazonOrderId, $queryParams = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/attributes", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation createDigitalAccessKey
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function createDigitalAccessKey($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/digitalAccessKey", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation createUnexpectedProblem
  *
  * @param string $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
  *
  */
  public function createUnexpectedProblem($amazonOrderId, $queryParams = [], $body = [], $version = 'v1')
  {
    return $this->send("/messaging/{$version}/orders/{$amazonOrderId}/messages/unexpectedProblem", [
      'method' => 'POST',
      'query' => $queryParams,
      'json' => $body
    ]);
  }
}
