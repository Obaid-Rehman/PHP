
# Bank Account Requirement Response

## Structure

`BankAccountRequirementResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankCountry` | [`string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Required | Two-digit country code types | getBankCountry(): string | setBankCountry(string bankCountry): void |
| `bankCurrency` | [`string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Required | Currency code type for the object | getBankCurrency(): string | setBankCurrency(string bankCurrency): void |
| `sourceCountry` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getSourceCountry(): ?string | setSourceCountry(?string sourceCountry): void |
| `sourceCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getSourceCurrency(): ?string | setSourceCurrency(?string sourceCurrency): void |
| `requirements` | [`?(BankAccountRequiredFields[])`](../../doc/models/bank-account-required-fields.md) | Optional | - | getRequirements(): ?array | setRequirements(?array requirements): void |
| `quote` | [`?MonetaryFormatted`](../../doc/models/monetary-formatted.md) | Optional | Object representing monies, including currency, decimal, and formatted amounts | getQuote(): ?MonetaryFormatted | setQuote(?MonetaryFormatted quote): void |
| `links` | [`?(HaetosParams[])`](../../doc/models/haetos-params.md) | Optional | - | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "bankCountry": "WS",
  "bankCurrency": "EUR",
  "sourceCountry": null,
  "sourceCurrency": null,
  "requirements": null,
  "quote": null,
  "links": null
}
```

