# Prepaid Cards

Prepaid Card-related operations

```php
$prepaidCardsController = $client->getPrepaidCardsController();
```

## Class Name

`PrepaidCardsController`

## Methods

* [Replace Prepaid Card](../../doc/controllers/prepaid-cards.md#replace-prepaid-card)
* [Retrieve Prepaid Card](../../doc/controllers/prepaid-cards.md#retrieve-prepaid-card)
* [Update Prepaid Card Partial](../../doc/controllers/prepaid-cards.md#update-prepaid-card-partial)
* [Generate PIN Operation Token](../../doc/controllers/prepaid-cards.md#generate-pin-operation-token)
* [Set PIN If Supported](../../doc/controllers/prepaid-cards.md#set-pin-if-supported)
* [Reveal PIN If Supported](../../doc/controllers/prepaid-cards.md#reveal-pin-if-supported)
* [List Prepaid Cards](../../doc/controllers/prepaid-cards.md#list-prepaid-cards)
* [Order Prepaid Card](../../doc/controllers/prepaid-cards.md#order-prepaid-card)
* [Generate Prepaid Card Data Token](../../doc/controllers/prepaid-cards.md#generate-prepaid-card-data-token)
* [Get Prepaid Card Data](../../doc/controllers/prepaid-cards.md#get-prepaid-card-data)


# Replace Prepaid Card

Replace an existing Prepaid Card specifying the replacement reason and the card package for the replacement card.

```php
function replacePrepaidCard(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    ?array $body = null
): PrepaidCardResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | `?array` | Body, Optional | - |

## Response Type

[`PrepaidCardResponse`](../../doc/models/prepaid-card-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';

$result = $prepaidCardsController->replacePrepaidCard($userToken, $destToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d",
  "status": "QUEUED",
  "createdOn": "2020-02-21T22:00:00Z",
  "country": "US",
  "currency": "USD",
  "cardPersonalization": "PERSONALIZED",
  "cardPackage": "blue_consumer_10k",
  "cardNetwork": "VISA",
  "expires": "2023-02-21T00:00:00Z",
  "cardNumber": "1234 56** **** 1234",
  "cvv": "123",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/xxx/prepaid-cards/dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d"
    }
  ]
}
```


# Retrieve Prepaid Card

Retrieve Prepaid Card details by destination token.

```php
function retrievePrepaidCard(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion
): PrepaidCardResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

[`PrepaidCardResponse`](../../doc/models/prepaid-card-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';

$result = $prepaidCardsController->retrievePrepaidCard($userToken, $destToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d",
  "status": "QUEUED",
  "createdOn": "2020-02-21T22:00:00Z",
  "country": "US",
  "currency": "USD",
  "cardPersonalization": "PERSONALIZED",
  "cardPackage": "blue_consumer_10k",
  "cardNetwork": "VISA",
  "expires": "2023-02-21T00:00:00Z",
  "cardNumber": "1234 56** **** 1234",
  "cvv": "123",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/xxx/prepaid-cards/dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d"
    }
  ]
}
```


# Update Prepaid Card Partial

Partial Prepaid Card update typically used when modifying card status. <i>*Does not require the entire object be passed in the request</i>

```php
function updatePrepaidCardPartial(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    ?PrepaidCardStatus $body = null
): PrepaidCardResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`?PrepaidCardStatus`](../../doc/models/prepaid-card-status.md) | Body, Optional | - |

## Response Type

[`PrepaidCardResponse`](../../doc/models/prepaid-card-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';

$result = $prepaidCardsController->updatePrepaidCardPartial($userToken, $destToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d",
  "status": "LOCKED",
  "createdOn": "2020-02-21T22:00:00Z",
  "country": "US",
  "currency": "USD",
  "cardPersonalization": "PERSONALIZED",
  "cardPackage": "blue_consumer_10k",
  "cardNetwork": "VISA",
  "expires": "2023-02-21T00:00:00Z",
  "cardNumber": "1234 56** **** 1234",
  "cvv": "123",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/xxx/prepaid-cards/dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d"
    }
  ]
}
```


# Generate PIN Operation Token

Retrieve one part of a two-part token required to reveal or set a client side PIN. <i>*Not all programs support a reveal or set PIN operation.</i>

```php
function generatePINOperationToken(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion
): PrepaidCardPinToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

[`PrepaidCardPinToken`](../../doc/models/prepaid-card-pin-token.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';

$result = $prepaidCardsController->generatePINOperationToken($userToken, $destToken, $xMyPayQuickerVersion);
```


# Set PIN If Supported

Allows the setting of a PIN if supported by program.

```php
function setPINIfSupported(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    string $token,
    string $cardPin
): UsersPrepaidCardsPinResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `token` | `string` | Query, Required | Token used as part of a two-leg card PIN reveal request sent directly from the client, generally involving a second piece of data such as the CVV code on the back of a card. |
| `cardPin` | `string` | Query, Required | Prepaid card PIN for ATM and Debit usage |

## Response Type

[`UsersPrepaidCardsPinResponse`](../../doc/models/users-prepaid-cards-pin-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';
$token = 'token6';
$cardPin = 'cardPin4';

$result = $prepaidCardsController->setPINIfSupported($userToken, $destToken, $xMyPayQuickerVersion, $token, $cardPin);
```


# Reveal PIN If Supported

Reveals the PIN for a card where PIN reveal functionality is supported in the program and hosted by PayQuicker.

```php
function revealPINIfSupported(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    string $token,
    string $cvc2,
    ?array $body = null
): PrepaidCardPin
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `token` | `string` | Query, Required | Token used as part of a two-leg card PIN reveal request sent directly from the client, generally involving a second piece of data such as the CVV code on the back of a card. |
| `cvc2` | `string` | Query, Required | Card Verification Value (CVV) located on the back of your credit card or debit card is a 3-digit number on VISA® and MasterCard® branded credit cards, and debit cards. |
| `body` | `?array` | Body, Optional | - |

## Response Type

[`PrepaidCardPin`](../../doc/models/prepaid-card-pin.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';
$token = 'token6';
$cvc2 = 'cvc20';

$result = $prepaidCardsController->revealPINIfSupported($userToken, $destToken, $xMyPayQuickerVersion, $token, $cvc2);
```


# List Prepaid Cards

Retrieve a list of all pre-paid cards by user token that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listPrepaidCards(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): PrepaidCardCollectionResponse
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

[`PrepaidCardCollectionResponse`](../../doc/models/prepaid-card-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $prepaidCardsController->listPrepaidCards($userToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "token": "dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d",
      "status": "QUEUED",
      "createdOn": "2020-02-21T22:00:00Z",
      "country": "US",
      "currency": "USD",
      "cardPersonalization": "PERSONALIZED",
      "cardPackage": "blue_consumer_10k",
      "cardNetwork": "VISA",
      "expires": "2023-02-21T00:00:00Z",
      "cardNumber": "1234 56** **** 1234",
      "cvv": "123",
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "https://platform.mypayquicker.com/api/v2/users/xxx/prepaid-cards/dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d"
        }
      ]
    }
  ],
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/xxx/prepaid-cards"
    }
  ]
}
```


# Order Prepaid Card

Order a pre-paid card for the user by specifying a cardPackage. <i>*A package defines the type of card, currency, artwork utilized, and often the method of delivery.</i>

```php
function orderPrepaidCard(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?PrepaidCardBase $body = null
): PrepaidCardRequestResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`?PrepaidCardBase`](../../doc/models/prepaid-card-base.md) | Body, Optional | - |

## Response Type

[`PrepaidCardRequestResponse`](../../doc/models/prepaid-card-request-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';

$result = $prepaidCardsController->orderPrepaidCard($userToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d",
  "status": "QUEUED",
  "createdOn": "2020-02-21T22:00:00Z",
  "country": "US",
  "currency": "USD",
  "cardPersonalization": "PERSONALIZED",
  "cardPackage": "blue_consumer_10k",
  "cardNetwork": "VISA",
  "expires": "2023-02-21T00:00:00Z",
  "cardNumber": "1234 56** **** 1234",
  "cvv": "123",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/xxx/prepaid-cards/dest-37ba1fb7-6136-4216-bb13-f903af6b9f0d"
    }
  ]
}
```


# Generate Prepaid Card Data Token

Generate a token used to reveal prepaid card information in the form of image data (base64) or JSON.

```php
function generatePrepaidCardDataToken(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    string $format,
    ?string $side = null
): PrepaidCardDataTokenResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | - |
| `destToken` | `string` | Template, Required | - |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `format` | [`string (FormatEnum)`](../../doc/models/format-enum.md) | Query, Required | Desired format for the prepaid card data. |
| `side` | [`?string (SideEnum)`](../../doc/models/side-enum.md) | Query, Optional | Side to specify when retrieving a prepaid card's image data. *Required if IMAGE format specified. |

## Response Type

[`PrepaidCardDataTokenResponse`](../../doc/models/prepaid-card-data-token-response.md)

## Example Usage

```php
$userToken = 'user-token6';
$destToken = 'dest-token2';
$xMyPayQuickerVersion = '2020.02.24';
$format = Models\FormatEnum::ENUM_TEXTIMAGE;

$result = $prepaidCardsController->generatePrepaidCardDataToken($userToken, $destToken, $xMyPayQuickerVersion, $format);
```


# Get Prepaid Card Data

Return prepaid card data in the form of image data, text, or both.

```php
function getPrepaidCardData(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    string $format,
    string $token,
    ?string $side = null
): PrepaidCardDataResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | - |
| `destToken` | `string` | Template, Required | - |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `format` | [`string (FormatEnum)`](../../doc/models/format-enum.md) | Query, Required | Desired format for the prepaid card data. |
| `token` | `string` | Query, Required | Token used as part of a two-leg card PIN reveal request sent directly from the client, generally involving a second piece of data such as the CVV code on the back of a card. |
| `side` | [`?string (SideEnum)`](../../doc/models/side-enum.md) | Query, Optional | Side to specify when retrieving a prepaid card's image data. *Required if IMAGE format specified. |

## Response Type

[`PrepaidCardDataResponse`](../../doc/models/prepaid-card-data-response.md)

## Example Usage

```php
$userToken = 'user-token6';
$destToken = 'dest-token2';
$xMyPayQuickerVersion = '2020.02.24';
$format = Models\FormatEnum::ENUM_TEXTIMAGE;
$token = 'token6';

$result = $prepaidCardsController->getPrepaidCardData($userToken, $destToken, $xMyPayQuickerVersion, $format, $token);
```

