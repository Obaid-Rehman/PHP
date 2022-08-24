
# Prepaid Card Request Response

## Structure

`PrepaidCardRequestResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-</i>, <i>pmnt-</i>, or <i>docu-</i>. | getToken(): ?string | setToken(?string token): void |
| `status` | [`?string (StatusEnum)`](../../doc/models/status-enum.md) | Optional | Current status of the prepaid card | getStatus(): ?string | setStatus(?string status): void |
| `links` | [`?(HaetosParams[])`](../../doc/models/haetos-params.md) | Optional | - | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "token": null,
  "status": null,
  "links": null
}
```

