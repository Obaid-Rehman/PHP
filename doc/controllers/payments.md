# Payments

Payment-related operations

```php
$paymentsController = $client->getPaymentsController();
```

## Class Name

`PaymentsController`

## Methods

* [Retrieve Payment](../../doc/controllers/payments.md#retrieve-payment)
* [Accept Payment Quote](../../doc/controllers/payments.md#accept-payment-quote)
* [Cancel Payment Quote](../../doc/controllers/payments.md#cancel-payment-quote)
* [Retract Payment Full](../../doc/controllers/payments.md#retract-payment-full)
* [Retract Payment Partial](../../doc/controllers/payments.md#retract-payment-partial)
* [List Payments](../../doc/controllers/payments.md#list-payments)
* [Create Payment Quote](../../doc/controllers/payments.md#create-payment-quote)


# Retrieve Payment

Retrieve a list of all payments that supports filtering, sorting, and pagination through existing mechanisms.

```php
function retrievePayment(
    string $pmntToken,
    string $xMyPayQuickerVersion,
    ?string $filter = null,
    ?string $language = null
): PaymentResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pmntToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual payment transaction and quote, prefixed with <i>pmnt-</i>.<br>**Constraints**: *Pattern*: `^pmnt-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Query, Optional | Filter results by language type. |

## Response Type

[`PaymentResponse`](../../doc/models/payment-response.md)

## Example Usage

```php
$pmntToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';
$xMyPayQuickerVersion = '2020.02.24';
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$language = Models\LanguageTypesEnum::ENUS;

$result = $paymentsController->retrievePayment($pmntToken, $xMyPayQuickerVersion, $filter, $language);
```


# Accept Payment Quote

Accept an open payment quote.

```php
function acceptPaymentQuote(
    string $pmntToken,
    string $xMyPayQuickerVersion,
    ?array $body = null
): PaymentResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pmntToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual payment transaction and quote, prefixed with <i>pmnt-</i>.<br>**Constraints**: *Pattern*: `^pmnt-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | `?array` | Body, Optional | - |

## Response Type

[`PaymentResponse`](../../doc/models/payment-response.md)

## Example Usage

```php
$pmntToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';
$xMyPayQuickerVersion = '2020.02.24';

$result = $paymentsController->acceptPaymentQuote($pmntToken, $xMyPayQuickerVersion);
```


# Cancel Payment Quote

Cancel an open payment quote.

```php
function cancelPaymentQuote(string $pmntToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pmntToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual payment transaction and quote, prefixed with <i>pmnt-</i>.<br>**Constraints**: *Pattern*: `^pmnt-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$pmntToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';
$xMyPayQuickerVersion = '2020.02.24';

$paymentsController->cancelPaymentQuote($pmntToken, $xMyPayQuickerVersion);
```


# Retract Payment Full

Perform a payment retraction for the full payment amount.

```php
function retractPaymentFull(string $pmntToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pmntToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual payment transaction and quote, prefixed with <i>pmnt-</i>.<br>**Constraints**: *Pattern*: `^pmnt-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$pmntToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';
$xMyPayQuickerVersion = '2020.02.24';

$paymentsController->retractPaymentFull($pmntToken, $xMyPayQuickerVersion);
```


# Retract Payment Partial

Perform a payment retraction for a partial payment amount.

```php
function retractPaymentPartial(string $pmntToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pmntToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual payment transaction and quote, prefixed with <i>pmnt-</i>.<br>**Constraints**: *Pattern*: `^pmnt-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$pmntToken = 'pmnt-d3ff8a0d-aec9-49a6-a95b-6191aebeca20';
$xMyPayQuickerVersion = '2020.02.24';

$paymentsController->retractPaymentPartial($pmntToken, $xMyPayQuickerVersion);
```


# List Payments

Retrieve a list of all payments that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listPayments(
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): PaymentsCollectionResponse
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

[`PaymentsCollectionResponse`](../../doc/models/payments-collection-response.md)

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $paymentsController->listPayments($xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Create Payment Quote

Create a payment quote.

```php
function createPaymentQuote(string $xMyPayQuickerVersion, ?PaymentRequest $body = null): PaymentResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`?PaymentRequest`](../../doc/models/payment-request.md) | Body, Optional | - |

## Response Type

[`PaymentResponse`](../../doc/models/payment-response.md)

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';
$body_amount = 78.98;
$body_currency = Models\CurrencyTypesEnum::HKD;
$body = new Models\PaymentRequest(
    $body_amount,
    $body_currency
);

$result = $paymentsController->createPaymentQuote($xMyPayQuickerVersion, $body);
```

