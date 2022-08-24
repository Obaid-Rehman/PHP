
# Paper Check Response

Response to a paper check request

## Structure

`PaperCheckResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-</i>, <i>pmnt-</i>, or <i>docu-</i>. | getToken(): ?string | setToken(?string token): void |
| `createdOn` | `?\DateTime` | Optional | Time at which the object was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `type` | [`?string (TransferTypesEnum)`](../../doc/models/transfer-types-enum.md) | Optional | Transfer type | getType(): ?string | setType(?string type): void |
| `amount` | `float` | Required | Amount of the transfer in the specified currency. | getAmount(): float | setAmount(float amount): void |
| `currency` | [`string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Required | Currency code type for the object | getCurrency(): string | setCurrency(string currency): void |
| `addressLine1` | `?string` | Optional | First line of the address that specifies street number, street name, and building name | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | Second line of the address that specifies the apartment, suite, or space number (or any other designation not literally part of the physical address) | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressLine3` | `?string` | Optional | Third line of the address that specifies the international or business addresses that do not fit on addressLine2 | getAddressLine3(): ?string | setAddressLine3(?string addressLine3): void |
| `addressLine4` | `?string` | Optional | Fourth line of the address, if any | getAddressLine4(): ?string | setAddressLine4(?string addressLine4): void |
| `addressLine5` | `?string` | Optional | Fifth line of the address, if any | getAddressLine5(): ?string | setAddressLine5(?string addressLine5): void |
| `city` | `?string` | Optional | City or town of the business address | getCity(): ?string | setCity(?string city): void |
| `region` | `?string` | Optional | State, province, or territory of the business address | getRegion(): ?string | setRegion(?string region): void |
| `country` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getCountry(): ?string | setCountry(?string country): void |
| `postalCode` | `?string` | Optional | Series of letters, digits, or both, included in a postal address for the purpose of sorting mail | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `premiseNumber` | `?string` | Optional | House or building number of the business address | getPremiseNumber(): ?string | setPremiseNumber(?string premiseNumber): void |
| `addressType` | [`?string (AddressTypesEnum)`](../../doc/models/address-types-enum.md) | Optional | Classifies the address type (<i>Home</i>, <i>Business</i>, <i>Billing</i>, <i>Shipping</i>) | getAddressType(): ?string | setAddressType(?string addressType): void |
| `bankAccountOwnershipType` | [`?string (BankAccountOwnershipTypesEnum)`](../../doc/models/bank-account-ownership-types-enum.md) | Optional | Account ownership types | getBankAccountOwnershipType(): ?string | setBankAccountOwnershipType(?string bankAccountOwnershipType): void |
| `shippingMethod` | [`?string (ShippingMethodTypesEnum)`](../../doc/models/shipping-method-types-enum.md) | Optional | Shipping method type for a pre-paid card or paper check | getShippingMethod(): ?string | setShippingMethod(?string shippingMethod): void |
| `links` | [`?(HaetosParams[])`](../../doc/models/haetos-params.md) | Optional | - | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "amount": 5,
  "currency": null
}
```

