
# Transfer Request

Request for the transfer

## Structure

`TransferRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceToken` | `?string` | Optional | Unique identifier representing the source of funds. | getSourceToken(): ?string | setSourceToken(?string sourceToken): void |
| `destinationToken` | `?string` | Optional | Unique identifier representing the destination of funds. | getDestinationToken(): ?string | setDestinationToken(?string destinationToken): void |
| `notes` | `?string` | Optional | Optional comments visible to the user. | getNotes(): ?string | setNotes(?string notes): void |
| `memo` | `?string` | Optional | Optional internal memo not visible to the user. | getMemo(): ?string | setMemo(?string memo): void |
| `clientTransferId` | `?string` | Optional | Unique value provided by the client for the transfer. | getClientTransferId(): ?string | setClientTransferId(?string clientTransferId): void |
| `destinationAmount` | `?float` | Optional | Amount transferred to the destination | getDestinationAmount(): ?float | setDestinationAmount(?float destinationAmount): void |
| `destinationCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getDestinationCurrency(): ?string | setDestinationCurrency(?string destinationCurrency): void |

## Example (as JSON)

```json
{
  "sourceToken": null,
  "destinationToken": null,
  "notes": null,
  "memo": null,
  "clientTransferId": null,
  "destinationAmount": null,
  "destinationCurrency": null
}
```

