
# Monetary Formatted

Object representing monies, including currency, decimal, and formatted amounts

## Structure

`MonetaryFormatted`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `formattedAmount` | `?string` | Optional | Formatted monetary amount | getFormattedAmount(): ?string | setFormattedAmount(?string formattedAmount): void |
| `amount` | `float` | Required | Amount of the transfer in the specified currency. | getAmount(): float | setAmount(float amount): void |
| `currency` | [`string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Required | Currency code type for the object | getCurrency(): string | setCurrency(string currency): void |

## Example (as JSON)

```json
{
  "amount": 5,
  "currency": null
}
```

