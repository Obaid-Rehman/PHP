
# Source Monetary Required

Required details of the monetary source.

## Structure

`SourceMonetaryRequired`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceAmount` | `?float` | Optional | Amount of the transfer in the specified currency. | getSourceAmount(): ?float | setSourceAmount(?float sourceAmount): void |
| `sourceCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getSourceCurrency(): ?string | setSourceCurrency(?string sourceCurrency): void |

## Example (as JSON)

```json
{
  "sourceAmount": null,
  "sourceCurrency": null
}
```

