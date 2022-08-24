
# Transfer Response

## Structure

`TransferResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceToken` | `?string` | Optional | Unique identifier representing the source of funds. | getSourceToken(): ?string | setSourceToken(?string sourceToken): void |
| `destinationToken` | `?string` | Optional | Unique identifier representing the destination of funds. | getDestinationToken(): ?string | setDestinationToken(?string destinationToken): void |
| `notes` | `?string` | Optional | Optional comments visible to the user. | getNotes(): ?string | setNotes(?string notes): void |
| `memo` | `?string` | Optional | Optional internal memo not visible to the user. | getMemo(): ?string | setMemo(?string memo): void |
| `destinationAmount` | `?float` | Optional | Amount transferred to the destination | getDestinationAmount(): ?float | setDestinationAmount(?float destinationAmount): void |
| `destinationCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getDestinationCurrency(): ?string | setDestinationCurrency(?string destinationCurrency): void |
| `clientTransferId` | `?string` | Optional | Unique value provided by the client for the transfer. | getClientTransferId(): ?string | setClientTransferId(?string clientTransferId): void |
| `token` | `?string` | Optional | Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-</i>, <i>pmnt-</i>, or <i>docu-</i>. | getToken(): ?string | setToken(?string token): void |
| `sourceAmount` | `?float` | Optional | Amount of the transfer in the specified currency. | getSourceAmount(): ?float | setSourceAmount(?float sourceAmount): void |
| `sourceCurrency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getSourceCurrency(): ?string | setSourceCurrency(?string sourceCurrency): void |
| `status` | [`?string (TransferStatusTypesEnum)`](../../doc/models/transfer-status-types-enum.md) | Optional | Current status of a transfer | getStatus(): ?string | setStatus(?string status): void |
| `fx` | [`?FxObject`](../../doc/models/fx-object.md) | Optional | Currency conversion object details | getFx(): ?FxObject | setFx(?FxObject fx): void |
| `links` | [`?(HaetosParams[])`](../../doc/models/haetos-params.md) | Optional | - | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "sourceToken": null,
  "destinationToken": null,
  "notes": null,
  "memo": null,
  "destinationAmount": null,
  "destinationCurrency": null,
  "clientTransferId": null,
  "token": null,
  "sourceAmount": null,
  "sourceCurrency": null,
  "status": null,
  "fx": null,
  "links": null
}
```

