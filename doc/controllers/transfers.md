# Transfers

Transfer-related operations

```php
$transfersController = $client->getTransfersController();
```

## Class Name

`TransfersController`

## Methods

* [Retrieve Transfer](../../doc/controllers/transfers.md#retrieve-transfer)
* [Accept Transfer Quote](../../doc/controllers/transfers.md#accept-transfer-quote)
* [Cancel Transfer Quote](../../doc/controllers/transfers.md#cancel-transfer-quote)
* [List Transfers](../../doc/controllers/transfers.md#list-transfers)
* [Quote Transfer](../../doc/controllers/transfers.md#quote-transfer)


# Retrieve Transfer

Retrieve details of a specific transfer represented by a transfer token.

```php
function retrieveTransfer(
    string $xferToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): TransferResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xferToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual transfer transaction, prefixed with <i>xfer-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `page` | `?int` | Query, Optional | Page number of specific page to return<br>**Constraints**: `>= 1` |
| `pageSize` | `?int` | Query, Optional | Number of items to be displayed per page<br>**Default**: `20`<br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Query, Optional | Filter results by language type. |

## Response Type

[`TransferResponse`](../../doc/models/transfer-response.md)

## Example Usage

```php
$xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $transfersController->retrieveTransfer($xferToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Accept Transfer Quote

Accept a transfer quote

```php
function acceptTransferQuote(string $xferToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xferToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual transfer transaction, prefixed with <i>xfer-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
$xMyPayQuickerVersion = '2020.02.24';

$transfersController->acceptTransferQuote($xferToken, $xMyPayQuickerVersion);
```


# Cancel Transfer Quote

Optional cancellation that auto-cancels after a period organically expires or when account activity invalidates the quote.

```php
function cancelTransferQuote(string $xferToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xferToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual transfer transaction, prefixed with <i>xfer-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
$xMyPayQuickerVersion = '2020.02.24';

$transfersController->cancelTransferQuote($xferToken, $xMyPayQuickerVersion);
```


# List Transfers

Retrieve a list of all transfers that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listTransfers(
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): TransferCollectionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `page` | `?int` | Query, Optional | Page number of specific page to return<br>**Constraints**: `>= 1` |
| `pageSize` | `?int` | Query, Optional | Number of items to be displayed per page<br>**Default**: `20`<br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Query, Optional | Filter results by language type. |

## Response Type

[`TransferCollectionResponse`](../../doc/models/transfer-collection-response.md)

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $transfersController->listTransfers($xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Quote Transfer

Create a new quote. <i>*This can be a non-payment card-to-card transfer, prepaid card from Flex (wallet), bank account, or user-to-user transfer.</i>

```php
function quoteTransfer(string $xMyPayQuickerVersion, TransferRequest $body): TransferResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`TransferRequest`](../../doc/models/transfer-request.md) | Body, Required | - |

## Response Type

[`TransferResponse`](../../doc/models/transfer-response.md)

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';
$body = new Models\TransferRequest;

$result = $transfersController->quoteTransfer($xMyPayQuickerVersion, $body);
```

## Example Response *(as JSON)*

```json
{
  "sourceToken": "user-114773fd-85c1-4977-8ce5-24af71f744e9",
  "destinationToken": "dest-63947e68-5393-4d00-955d-e0020017924b",
  "notes": "string",
  "memo": "string",
  "destinationAmount": -1.79,
  "destinationCurrency": "USD",
  "clientTransferId": "DKKde3Meeiiw34",
  "token": "xfer-0c0f2727-6521-47c9-b1fa-f132306d456a",
  "sourceAmount": -1.79,
  "sourceCurrency": "USD",
  "status": "QUOTED",
  "fx": {
    "destinationAmount": -1.79,
    "destinationCurrency": "USD",
    "sourceAmount": -1.79,
    "sourceCurrency": "USD",
    "rate": 0.85
  },
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://url.to.com/xfer-0c0f2727-6521-47c9-b1fa-f132306d456a"
    }
  ]
}
```

