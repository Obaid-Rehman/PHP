
# Bank Account Fields

Classifies account field objects

## Structure

`BankAccountFields`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAccountOwnershipType` | [`?string (BankAccountOwnershipTypesEnum)`](../../doc/models/bank-account-ownership-types-enum.md) | Optional | Account ownership types | getBankAccountOwnershipType(): ?string | setBankAccountOwnershipType(?string bankAccountOwnershipType): void |
| `type` | [`?string (BankAccountTypesEnum)`](../../doc/models/bank-account-types-enum.md) | Optional | Financial purpose of the bank account (<i>Savings</i>, <i>Investment</i>) | getType(): ?string | setType(?string type): void |
| `fields` | [`?(KeyValuePairBankFieldTypesString[])`](../../doc/models/key-value-pair-bank-field-types-string.md) | Optional | - | getFields(): ?array | setFields(?array fields): void |
| `bankCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getBankCurrency(): ?string | setBankCurrency(?string bankCurrency): void |
| `bankCountry` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getBankCountry(): ?string | setBankCountry(?string bankCountry): void |
| `description` | `?string` | Optional | User-supplied description of the bank account for reference | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "bankAccountOwnershipType": null,
  "type": null,
  "fields": null,
  "bankCurrency": null,
  "bankCountry": null,
  "description": null
}
```

