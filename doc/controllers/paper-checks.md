# Paper Checks

Paper check-related operations

```php
$paperChecksController = $client->getPaperChecksController();
```

## Class Name

`PaperChecksController`

## Methods

* [List Paper Checks](../../doc/controllers/paper-checks.md#list-paper-checks)
* [Order Paper Check](../../doc/controllers/paper-checks.md#order-paper-check)
* [Retrieve Paper Check](../../doc/controllers/paper-checks.md#retrieve-paper-check)
* [Update Paper Check](../../doc/controllers/paper-checks.md#update-paper-check)
* [Cancel Paper Check](../../doc/controllers/paper-checks.md#cancel-paper-check)


# List Paper Checks

Retrieve a list of paper checks that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listPaperChecks(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): PaperCheckCollectionResponse
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

[`PaperCheckCollectionResponse`](../../doc/models/paper-check-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $paperChecksController->listPaperChecks($userToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Order Paper Check

Create a quote for a paper check.

```php
function orderPaperCheck(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?PaperCheckBase $body = null
): PaperCheckResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`?PaperCheckBase`](../../doc/models/paper-check-base.md) | Body, Optional | - |

## Response Type

[`PaperCheckResponse`](../../doc/models/paper-check-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';
$body_amount = 78.98;
$body_currency = Models\CurrencyTypesEnum::HKD;
$body = new Models\PaperCheckBase(
    $body_amount,
    $body_currency
);

$result = $paperChecksController->orderPaperCheck($userToken, $xMyPayQuickerVersion, $body);
```


# Retrieve Paper Check

Retrieve a list of paper checks by destination token that supports filtering, sorting, and pagination through existing mechanisms.

```php
function retrievePaperCheck(
    string $userToken,
    string $xferToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): PaperCheckResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xferToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual transfer transaction, prefixed with <i>xfer-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `page` | `?int` | Query, Optional | Page number of specific page to return<br>**Constraints**: `>= 1` |
| `pageSize` | `?int` | Query, Optional | Number of items to be displayed per page<br>**Default**: `20`<br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Query, Optional | Filter results by language type. |

## Response Type

[`PaperCheckResponse`](../../doc/models/paper-check-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $paperChecksController->retrievePaperCheck($userToken, $xferToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Update Paper Check

Create a quote for a paper check.

```php
function updatePaperCheck(
    string $userToken,
    string $xferToken,
    string $xMyPayQuickerVersion,
    ?array $body = null
): PaperCheckResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xferToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual transfer transaction, prefixed with <i>xfer-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | `?array` | Body, Optional | - |

## Response Type

[`PaperCheckResponse`](../../doc/models/paper-check-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
$xMyPayQuickerVersion = '2020.02.24';

$result = $paperChecksController->updatePaperCheck($userToken, $xferToken, $xMyPayQuickerVersion);
```


# Cancel Paper Check

Delete a paper check by destination token.

```php
function cancelPaperCheck(string $userToken, string $xferToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xferToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual transfer transaction, prefixed with <i>xfer-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xferToken = 'xfer-0fac4aa8-43ac-447e-95f9-827f908a82ff';
$xMyPayQuickerVersion = '2020.02.24';

$paperChecksController->cancelPaperCheck($userToken, $xferToken, $xMyPayQuickerVersion);
```

