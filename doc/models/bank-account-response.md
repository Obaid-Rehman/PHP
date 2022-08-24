
# Bank Account Response

Response to the bank account request

## Structure

`BankAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-</i>, <i>pmnt-</i>, or <i>docu-</i>. | getToken(): ?string | setToken(?string token): void |
| `status` | [`?string (BankAccountStatusTypesEnum)`](../../doc/models/bank-account-status-types-enum.md) | Optional | Current verification status type of the bank account | getStatus(): ?string | setStatus(?string status): void |
| `createdOn` | `?\DateTime` | Optional | Time at which the object was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `bankAccountOwnershipType` | [`?string (BankAccountOwnershipTypesEnum)`](../../doc/models/bank-account-ownership-types-enum.md) | Optional | Account ownership types | getBankAccountOwnershipType(): ?string | setBankAccountOwnershipType(?string bankAccountOwnershipType): void |
| `type` | [`?string (BankAccountTypesEnum)`](../../doc/models/bank-account-types-enum.md) | Optional | Financial purpose of the bank account (<i>Savings</i>, <i>Investment</i>) | getType(): ?string | setType(?string type): void |
| `fields` | [`?(KeyValuePairBankFieldTypesString[])`](../../doc/models/key-value-pair-bank-field-types-string.md) | Optional | - | getFields(): ?array | setFields(?array fields): void |
| `bankCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getBankCurrency(): ?string | setBankCurrency(?string bankCurrency): void |
| `bankCountry` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getBankCountry(): ?string | setBankCountry(?string bankCountry): void |
| `description` | `?string` | Optional | User-supplied description of the bank account for reference | getDescription(): ?string | setDescription(?string description): void |
| `links` | [`?(HaetosParams[])`](../../doc/models/haetos-params.md) | Optional | - | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "token": null,
  "status": null,
  "createdOn": null,
  "bankAccountOwnershipType": null,
  "type": null,
  "fields": null,
  "bankCurrency": null,
  "bankCountry": null,
  "description": null,
  "links": null
}
```

