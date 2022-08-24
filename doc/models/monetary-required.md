
# Monetary Required

Monetary requirements for the transfer

## Structure

`MonetaryRequired`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `float` | Required | Amount of the transfer in the specified currency. | getAmount(): float | setAmount(float amount): void |
| `currency` | [`string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Required | Currency code type for the object | getCurrency(): string | setCurrency(string currency): void |

## Example (as JSON)

```json
{
  "amount": 5,
  "currency": null
}
```

