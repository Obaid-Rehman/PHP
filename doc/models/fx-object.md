
# Fx Object

Currency conversion object details

## Structure

`FxObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `destinationAmount` | `?float` | Optional | Amount transferred to the destination | getDestinationAmount(): ?float | setDestinationAmount(?float destinationAmount): void |
| `destinationCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getDestinationCurrency(): ?string | setDestinationCurrency(?string destinationCurrency): void |
| `sourceAmount` | `?float` | Optional | Amount of the transfer in the specified currency. | getSourceAmount(): ?float | setSourceAmount(?float sourceAmount): void |
| `sourceCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getSourceCurrency(): ?string | setSourceCurrency(?string sourceCurrency): void |
| `rate` | `?float` | Optional | Exchange rate<br>**Constraints**: `>= 0`, `<= 1` | getRate(): ?float | setRate(?float rate): void |

## Example (as JSON)

```json
{
  "destinationAmount": null,
  "destinationCurrency": null,
  "sourceAmount": null,
  "sourceCurrency": null,
  "rate": null
}
```

