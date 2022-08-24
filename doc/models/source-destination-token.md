
# Source Destination Token

Unique identifier representing the source of the funds.

## Structure

`SourceDestinationToken`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceToken` | `?string` | Optional | Unique identifier representing the source of funds. | getSourceToken(): ?string | setSourceToken(?string sourceToken): void |
| `destinationToken` | `?string` | Optional | Unique identifier representing the destination of funds. | getDestinationToken(): ?string | setDestinationToken(?string destinationToken): void |

## Example (as JSON)

```json
{
  "sourceToken": null,
  "destinationToken": null
}
```

