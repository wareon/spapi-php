<?php
/**
 * This class is autogenerated by the Spapi class generator
 * Date of generation: 2021-07-03
 * Specification: ttps://github.com/amzn/selling-partner-api-models/blob/main/models/listings-items-api-model/listingsItems_2020-09-01.json
 * Source MD5 signature: 3aa9511995c072bbd45fd5307e5fe0d4
 *
 *
 * Selling Partner API for Listings Items
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.
 */

namespace DoubleBreak\Spapi\Api;

use DoubleBreak\Spapi\Client;

class listingsRestrictions extends Client
{

    /**
     * Operation getListingsRestrictions
     *
     * @param array $queryParams
     *    - *asin* array - The Amazon Standard Identification Number (ASIN) of the item.
     *    - *conditionType*  The condition used to filter restrictions.
     *    - *sellerId* string - A selling partner identifier, such as a merchant account.
     *    - *marketplaceIds* string - A comma-delimited list of Amazon marketplace identifiers for the request.
     *    - *reasonLocale* string - A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
     * @param string $version
     * @return mixed
     */
    public function getListingsRestrictions($queryParams = [], $version = '2021-08-01')
    {
        return $this->send("/listings/{$version}/restrictions", [
            'method' => 'GET',
            'query' => $queryParams,
        ]);
    }

}
