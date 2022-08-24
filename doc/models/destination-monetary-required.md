
# Destination Monetary Required

Monetary instruments required for the destination

## Structure

`DestinationMonetaryRequired`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `destinationAmount` | `?float` | Optional | Amount transferred to the destination | getDestinationAmount(): ?float | setDestinationAmount(?float destinationAmount): void |
| `destinationCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getDestinationCurrency(): ?string | setDestinationCurrency(?string destinationCurrency): void |

## Example (as JSON)

```json
{
  "destinationAmount": null,
  "destinationCurrency": null
}
```

