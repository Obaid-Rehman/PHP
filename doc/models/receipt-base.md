
# Receipt Base

Base for the receipt

## Structure

`ReceiptBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `formattedAmount` | `?string` | Optional | Formatted monetary amount | getFormattedAmount(): ?string | setFormattedAmount(?string formattedAmount): void |
| `amount` | `float` | Required | Amount of the transfer in the specified currency. | getAmount(): float | setAmount(float amount): void |
| `currency` | [`string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Required | Currency code type for the object | getCurrency(): string | setCurrency(string currency): void |
| `sourceToken` | `?string` | Optional | Unique identifier representing the source of funds. | getSourceToken(): ?string | setSourceToken(?string sourceToken): void |
| `destinationToken` | `?string` | Optional | Unique identifier representing the destination of funds. | getDestinationToken(): ?string | setDestinationToken(?string destinationToken): void |
| `createdOn` | `?\DateTime` | Optional | Time at which the object was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `token` | `?string` | Optional | Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-</i>, <i>pmnt-</i>, or <i>docu-</i>. | getToken(): ?string | setToken(?string token): void |
| `status` | [`?string (TransferStatusTypesEnum)`](../../doc/models/transfer-status-types-enum.md) | Optional | Current status of a transfer | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "amount": 5,
  "currency": null
}
```

