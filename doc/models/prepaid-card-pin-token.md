
# Prepaid Card Pin Token

## Structure

`PrepaidCardPinToken`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardPinToken` | `?string` | Optional | Token used as part of a two-leg card PIN reveal request sent directly from the client that generally involves a second piece of data, such as the CVV code on the back of the card. | getCardPinToken(): ?string | setCardPinToken(?string cardPinToken): void |
| `url` | `?string` | Optional | Full path of the URI to perform the request action against a prepaid card that replaces the need to build the URL with query params | getUrl(): ?string | setUrl(?string url): void |

## Example (as JSON)

```json
{
  "cardPinToken": null,
  "url": null
}
```

