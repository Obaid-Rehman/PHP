
# Webhook Subscription Response

Webhook Subscription response

## Structure

`WebhookSubscriptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `links` | [`?(HaetosParams[])`](../../doc/models/haetos-params.md) | Optional | - | getLinks(): ?array | setLinks(?array links): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `mNamespace` | [`?string (NamespaceEnum)`](../../doc/models/m-namespace-enum.md) | Optional | Namespace used to identify and refer to the object | getMNamespace(): ?string | setMNamespace(?string mNamespace): void |
| `token` | `?string` | Optional | Token for the webhook subscription | getToken(): ?string | setToken(?string token): void |
| `created` | `?string` | Optional | Time stamp for the date the webhook subscription was created | getCreated(): ?string | setCreated(?string created): void |
| `lastUpdated` | `?string` | Optional | Time stamp for the date the webhook subscription was updated | getLastUpdated(): ?string | setLastUpdated(?string lastUpdated): void |

## Example (as JSON)

```json
{
  "links": null,
  "url": null,
  "namespace": null,
  "token": null,
  "created": null,
  "lastUpdated": null
}
```

