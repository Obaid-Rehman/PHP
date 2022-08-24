# Receipts

Receipt-related operations

```php
$receiptsController = $client->getReceiptsController();
```

## Class Name

`ReceiptsController`

## Methods

* [List Account Receipts](../../doc/controllers/receipts.md#list-account-receipts)
* [List Prepaid Card Receipts](../../doc/controllers/receipts.md#list-prepaid-card-receipts)
* [List User Receipts](../../doc/controllers/receipts.md#list-user-receipts)


# List Account Receipts

Retrieve a list of all account(s) receipts that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listAccountReceipts(
    string $acctToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acctToken` | `string` | Template, Required | Auto-generated unique identifier representing a company account, prefixed with <i>acct-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `page` | `?int` | Query, Optional | Page number of specific page to return<br>**Constraints**: `>= 1` |
| `pageSize` | `?int` | Query, Optional | Number of items to be displayed per page<br>**Default**: `20`<br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Query, Optional | Filter results by language type. |

## Response Type

`array`

## Example Usage

```php
$acctToken = 'acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $receiptsController->listAccountReceipts($acctToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response

```
{
  "payload": [
    {
      "amount": 5000.01,
      "currency": "USD",
      "sourceToken": "acct-04017f57-8526-4b0c-9152-5252975a86e4",
      "destinationToken": "dest-04017f57-8526-4b0c-9152-5252975a86e4",
      "createdOn": "2023-02-21T00:00:00Z"
    }
  ],
  "meta": {
    "pageNo": "1",
    "pageSize": "20",
    "pageCount": "85",
    "recordCount": "1685",
    "timezone": "GMT"
  },
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/accounts/acct-04017f57-8526-4b0c-9152-5252975a86e4/receipts"
    }
  ]
}
```


# List Prepaid Card Receipts

Retrieve a list all prepaid-card receipts that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listPrepaidCardReceipts(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): ReceiptCollectionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `page` | `?int` | Query, Optional | Page number of specific page to return<br>**Constraints**: `>= 1` |
| `pageSize` | `?int` | Query, Optional | Number of items to be displayed per page<br>**Default**: `20`<br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Query, Optional | Filter results by language type. |

## Response Type

[`ReceiptCollectionResponse`](../../doc/models/receipt-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $receiptsController->listPrepaidCardReceipts($userToken, $destToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "amount": 5000.05,
      "currency": "USD",
      "sourceToken": "user-04017f57-8526-4b0c-9152-5252975a86e4",
      "destinationToken": "dest-04017f57-8526-4b0c-9152-5252975a86e4",
      "createdOn": "2023-02-21T00:00:00Z"
    }
  ],
  "meta": {
    "pageNo": "1",
    "pageSize": "20",
    "pageCount": "85",
    "recordCount": "1685",
    "timezone": "GMT"
  },
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-04017f57-8526-4b0c-9152-5252975a86e4/prepaid-cards/dest-04017f57-8526-4b0c-9152-5252975a86e4/receipts"
    }
  ]
}
```


# List User Receipts

Retrieve a list all user receipts that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listUserReceipts(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): ReceiptCollectionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `page` | `?int` | Query, Optional | Page number of specific page to return<br>**Constraints**: `>= 1` |
| `pageSize` | `?int` | Query, Optional | Number of items to be displayed per page<br>**Default**: `20`<br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Query, Optional | Filter results by language type. |

## Response Type

[`ReceiptCollectionResponse`](../../doc/models/receipt-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $receiptsController->listUserReceipts($userToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "amount": 5000.01,
      "currency": "USD",
      "sourceToken": "user-04017f57-8526-4b0c-9152-5252975a86e4",
      "destinationToken": "dest-04017f57-8526-4b0c-9152-5252975a86e4",
      "createdOn": "2023-02-21T00:00:00Z"
    }
  ],
  "meta": {
    "pageNo": "1",
    "pageSize": "20",
    "pageCount": "85",
    "recordCount": "1685",
    "timezone": "GMT"
  },
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-04017f57-8526-4b0c-9152-5252975a86e4/receipts"
    }
  ]
}
```

