<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2021-07-03
* Specification: ttps://github.com/amzn/selling-partner-api-models/blob/main/models/product-type-definitions-api-model/definitionsProductTypes_2020-09-01.json
* Source MD5 signature: 8a516c4f5e1f38ce041df50871eac2ab
*
*
* Selling Partner API for Product Type Definitions
* The Selling Partner API for Product Type Definitions provides programmatic access to attribute and data requirements for product types in the Amazon catalog. Use this API to return the JSON Schema for a product type that you can then use with other Selling Partner APIs, such as the Selling Partner API for Listings Items, the Selling Partner API for Catalog Items, and the Selling Partner API for Feeds (for JSON-based listing feeds).
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class ProductTypeDefinitions extends Client {

  /**
  * Operation searchDefinitionsProductTypes
  *
  * @param array $queryParams
  *    - *keywords* array - A comma-delimited list of keywords to search product types by.
  *    - *marketplaceIds* array - A comma-delimited list of Amazon marketplace identifiers for the request.
   * @param string $version
   * @return mixed
  */
  public function searchDefinitionsProductTypes($queryParams = [], $version = '2020-09-01')
  {
    return $this->send("/definitions/{$version}/productTypes", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getDefinitionsProductType
  *
  * @param string $productType The Amazon product type name.
  *
  * @param array $queryParams
  *    - *sellerId* string - A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner.
  *    - *marketplaceIds* array - A comma-delimited list of Amazon marketplace identifiers for the request.
  *    - *productTypeVersion* string - The version of the Amazon product type to retrieve. Defaults to "LATEST",. Prerelease versions of product type definitions may be retrieved with "RELEASE_CANDIDATE". If no prerelease version is currently available, the "LATEST" live version will be provided.
  *    - *requirements* string - The name of the requirements set to retrieve requirements for.
  *    - *requirementsEnforced* string - Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates).
  *    - *locale* string - Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request.
   * @param string $version
   * @return mixed
  */
  public function getDefinitionsProductType($productType, $queryParams = [], $version = '2020-09-01')
  {
    return $this->send("/definitions/{$version}/productTypes/{$productType}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }
}
