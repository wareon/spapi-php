<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2020-12-22
* Specification: ttps://github.com/amzn/selling-partner-api-models/blob/main/models/fba-small-and-light-api-model/fbaSmallandLight.json
* Source MD5 signature: 166c1a23ab84154ce20a10ee2e04ffc5
*
*
* Selling Partner API for FBA Small And Light
* The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class FbaSmallAndLight extends Client {

  /**
  * Operation getSmallAndLightEnrollmentBySellerSKU
  *
  * @param string $sellerSKU The seller SKU that identifies the item.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only.
   * @param $version
   * @return mixed
  */
  public function getSmallAndLightEnrollmentBySellerSKU($sellerSKU, $queryParams = [], $version = 'v1')
  {
    return $this->send("/fba/smallAndLight/{$version}/enrollments/{$sellerSKU}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation putSmallAndLightEnrollmentBySellerSKU
  *
  * @param string $sellerSKU The seller SKU that identifies the item.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The marketplace in which to enroll the item. Note: Accepts a single marketplace only.
   * @param $version
   * @return mixed
  */
  public function putSmallAndLightEnrollmentBySellerSKU($sellerSKU, $queryParams = [], $version = 'v1')
  {
    return $this->send("/fba/smallAndLight/{$version}/enrollments/{$sellerSKU}", [
      'method' => 'PUT',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation deleteSmallAndLightEnrollmentBySellerSKU
  *
  * @param string $sellerSKU The seller SKU that identifies the item.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only.
   * @param $version
   * @return mixed
  */
  public function deleteSmallAndLightEnrollmentBySellerSKU($sellerSKU, $queryParams = [], $version = 'v1')
  {
    return $this->send("/fba/smallAndLight/{$version}/enrollments/{$sellerSKU}", [
      'method' => 'DELETE',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getSmallAndLightEligibilityBySellerSKU
  *
  * @param string $sellerSKU The seller SKU that identifies the item.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only.
   * @param $version
   * @return mixed
  */
  public function getSmallAndLightEligibilityBySellerSKU($sellerSKU, $queryParams = [], $version = 'v1')
  {
    return $this->send("/fba/smallAndLight/{$version}/eligibilities/{$sellerSKU}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getSmallAndLightFeePreview
   * @param $version
   * @return mixed
  */
  public function getSmallAndLightFeePreview($body = [], $version = 'v1')
  {
    return $this->send("/fba/smallAndLight/{$version}/feePreviews", [
      'method' => 'POST',
      'json' => $body
    ]);
  }
}
