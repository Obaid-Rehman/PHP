# Spend Back

Spendback-related operations

```php
$spendBackController = $client->getSpendBackController();
```

## Class Name

`SpendBackController`

## Methods

* [Retrieve Spendback](../../doc/controllers/spend-back.md#retrieve-spendback)
* [Accept Spendback Quote](../../doc/controllers/spend-back.md#accept-spendback-quote)
* [Cancel Spendback Quote](../../doc/controllers/spend-back.md#cancel-spendback-quote)
* [Refund Spendback Full](../../doc/controllers/spend-back.md#refund-spendback-full)
* [Refund Spendback Partial](../../doc/controllers/spend-back.md#refund-spendback-partial)
* [List Spend Backs](../../doc/controllers/spend-back.md#list-spend-backs)
* [Quote Spendback](../../doc/controllers/spend-back.md#quote-spendback)


# Retrieve Spendback

Retrieve a single spendback quote using the spendback token.

```php
function retrieveSpendback(
    string $spndToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spndToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spendback transaction and quote, prefixed with <i>spnd-</i>.<br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `page` | `?int` | Query, Optional | Page number of specific page to return<br>**Constraints**: `>= 1` |
| `pageSize` | `?int` | Query, Optional | Number of items to be displayed per page<br>**Default**: `20`<br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Query, Optional | Filter results by language type. |

## Response Type

`void`

## Example Usage

```php
$spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$spendBackController->retrieveSpendback($spndToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Accept Spendback Quote

Accept an open spendback quote.

```php
function acceptSpendbackQuote(string $spndToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spndToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spendback transaction and quote, prefixed with <i>spnd-</i>.<br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
$xMyPayQuickerVersion = '2020.02.24';

$spendBackController->acceptSpendbackQuote($spndToken, $xMyPayQuickerVersion);
```


# Cancel Spendback Quote

Cancel an open spendback quote.

```php
function cancelSpendbackQuote(string $spndToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spndToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spendback transaction and quote, prefixed with <i>spnd-</i>.<br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
$xMyPayQuickerVersion = '2020.02.24';

$spendBackController->cancelSpendbackQuote($spndToken, $xMyPayQuickerVersion);
```


# Refund Spendback Full

Perform a spendback refund for the full amount.

```php
function refundSpendbackFull(string $spndToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spndToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spendback transaction and quote, prefixed with <i>spnd-</i>.<br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
$xMyPayQuickerVersion = '2020.02.24';

$spendBackController->refundSpendbackFull($spndToken, $xMyPayQuickerVersion);
```


# Refund Spendback Partial

Perform a spendback refund for a partial amount.

```php
function refundSpendbackPartial(string $spndToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spndToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spendback transaction and quote, prefixed with <i>spnd-</i>.<br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$spndToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';
$xMyPayQuickerVersion = '2020.02.24';

$spendBackController->refundSpendbackPartial($spndToken, $xMyPayQuickerVersion);
```


# List Spend Backs

Retrieve a list of all spendbacks that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listSpendBacks(
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): void
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

`void`

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$spendBackController->listSpendBacks($xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Quote Spendback

Create a spendback quote. <i>*Spendbacks can be automatically accepted by setting the `autoAcceptQuote` flag. If not automatically accepted, a POST is required to the spendback endpoint using the token returned in the response. Quotes can be accepted, cancelled, or allowed to expire.</i>

```php
function quoteSpendback(string $xMyPayQuickerVersion, ?array $body = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | `?array` | Body, Optional | - |

## Response Type

`void`

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';

$spendBackController->quoteSpendback($xMyPayQuickerVersion);
```

