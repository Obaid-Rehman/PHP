# Webhooks

Webhook-related operations

```php
$webhooksController = $client->getWebhooksController();
```

## Class Name

`WebhooksController`

## Methods

* [List Webhook Subscriptions](../../doc/controllers/webhooks.md#list-webhook-subscriptions)
* [Create Webhook Subscription](../../doc/controllers/webhooks.md#create-webhook-subscription)
* [Retrieve Webhook Subscription](../../doc/controllers/webhooks.md#retrieve-webhook-subscription)
* [Delete Webhook Subscription](../../doc/controllers/webhooks.md#delete-webhook-subscription)


# List Webhook Subscriptions

Retrieve a list of all webhook subscriptions that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listWebhookSubscriptions(string $xMyPayQuickerVersion): WebhookCollectionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

[`WebhookCollectionResponse`](../../doc/models/webhook-collection-response.md)

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';

$result = $webhooksController->listWebhookSubscriptions($xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ],
  "payload": [
    {
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "string"
        }
      ],
      "url": "https://www.example.com/webhooks",
      "namespace": "BANKACCOUNTS.UPDATED.STATUS.APPROVED",
      "token": "webh-2dd54a53-3814-4ce1-862f-dc06b09ead4a",
      "created": "2020-01-01",
      "lastUpdated": "2020-02-01"
    }
  ]
}
```


# Create Webhook Subscription

Create a webhook subscription for a given URL and namespace. When this event fires, the webhook receives a call from the API.

```php
function createWebhookSubscription(
    string $xMyPayQuickerVersion,
    ?WebhookSubscription $body = null
): WebhookSubscriptionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`?WebhookSubscription`](../../doc/models/webhook-subscription.md) | Body, Optional | - |

## Response Type

[`WebhookSubscriptionResponse`](../../doc/models/webhook-subscription-response.md)

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';

$result = $webhooksController->createWebhookSubscription($xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ],
  "url": "https://www.example.com/webhooks",
  "namespace": "BANKACCOUNTS.UPDATED.STATUS.APPROVED",
  "token": "webh-2dd54a53-3814-4ce1-862f-dc06b09ead4a",
  "created": "2020-01-01"
}
```


# Retrieve Webhook Subscription

Retrieve a single webhook subscription using the webhook token.

```php
function retrieveWebhookSubscription(
    string $webhToken,
    string $xMyPayQuickerVersion
): WebhookSubscriptionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `webhToken` | `string` | Template, Required | - |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

[`WebhookSubscriptionResponse`](../../doc/models/webhook-subscription-response.md)

## Example Usage

```php
$webhToken = 'webh-token0';
$xMyPayQuickerVersion = '2020.02.24';

$result = $webhooksController->retrieveWebhookSubscription($webhToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ],
  "url": "https://www.example.com/webhooks",
  "namespace": "BANKACCOUNTS.UPDATED.STATUS.APPROVED",
  "token": "webh-2dd54a53-3814-4ce1-862f-dc06b09ead4a",
  "created": "2020-01-01",
  "lastUpdated": "2020-02-01"
}
```


# Delete Webhook Subscription

Delete a webhook subscription. Deleted webhooks no longer receive notifications about events. Deleting an already deleted webhook will result in a successful 200 (OK) response code.

```php
function deleteWebhookSubscription(string $webhToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `webhToken` | `string` | Template, Required | - |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$webhToken = 'webh-token0';
$xMyPayQuickerVersion = '2020.02.24';

$webhooksController->deleteWebhookSubscription($webhToken, $xMyPayQuickerVersion);
```

