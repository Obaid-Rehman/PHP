
# Transfer Base

Base class for the transfer

## Structure

`TransferBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceToken` | `?string` | Optional | Unique identifier representing the source of funds. | getSourceToken(): ?string | setSourceToken(?string sourceToken): void |
| `destinationToken` | `?string` | Optional | Unique identifier representing the destination of funds. | getDestinationToken(): ?string | setDestinationToken(?string destinationToken): void |
| `notes` | `?string` | Optional | Optional comments visible to the user. | getNotes(): ?string | setNotes(?string notes): void |
| `memo` | `?string` | Optional | Optional internal memo not visible to the user. | getMemo(): ?string | setMemo(?string memo): void |

## Example (as JSON)

```json
{
  "sourceToken": null,
  "destinationToken": null,
  "notes": null,
  "memo": null
}
```

