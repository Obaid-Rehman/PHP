
# Prepaid Card Data Token

Token assigned to the prepaid card

## Structure

`PrepaidCardDataToken`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getToken(): string | setToken(string token): void |
| `url` | `?string` | Optional | Full path of the URI to perform the request action against a prepaid card that replaces the need to build the URL with query params | getUrl(): ?string | setUrl(?string url): void |

## Example (as JSON)

```json
{
  "token": "token6",
  "url": null
}
```

