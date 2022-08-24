# Balances

Balance-related operations

```php
$balancesController = $client->getBalancesController();
```

## Class Name

`BalancesController`

## Methods

* [List User Balances](../../doc/controllers/balances.md#list-user-balances)
* [List Prepaid Card Balance](../../doc/controllers/balances.md#list-prepaid-card-balance)
* [List Account Balances](../../doc/controllers/balances.md#list-account-balances)


# List User Balances

Retrieve a list of user balances that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listUserBalances(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BalanceCollectionResponse
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

[`BalanceCollectionResponse`](../../doc/models/balance-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $balancesController->listUserBalances($userToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "formattedAmount": "$4.32 USD",
      "amount": 4.32,
      "currency": "USD",
      "token": "dest-4aed86e2-4929-45bf-814d-9030aef21e79",
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a/prepaid-cards/dest-4aed86e2-4929-45bf-814d-9030aef21e79/balances"
        }
      ]
    }
  ],
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a/balances"
    }
  ]
}
```


# List Prepaid Card Balance

Retrieve a list of balances by destination token that supports filtering, sorting, and pagination through existing mechanisms. <i>*If the user belongs to a Flex-based program, balances against the user resource will return the wallet balance only. If it is a pre-paid card program (i.e., Meta USD), this balance and its associated pre-paid card balance will be the same.</i>

```php
function listPrepaidCardBalance(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BalanceCollectionResponse
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

[`BalanceCollectionResponse`](../../doc/models/balance-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $balancesController->listPrepaidCardBalance($userToken, $destToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "formattedAmount": "$4.32",
  "amount": 4.32,
  "currency": "USD",
  "token": "dest-4aed86e2-4929-45bf-814d-9030aef21e79",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a/prepaid-cards/dest-4aed86e2-4929-45bf-814d-9030aef21e79/balances"
    }
  ]
}
```


# List Account Balances

Retrieve a single account balance.

```php
function listAccountBalances(
    string $acctToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BalanceCollectionResponse
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

[`BalanceCollectionResponse`](../../doc/models/balance-collection-response.md)

## Example Usage

```php
$acctToken = 'acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $balancesController->listAccountBalances($acctToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "formattedAmount": "$5.00",
      "amount": 5,
      "currency": "USD",
      "token": "acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4"
    }
  ],
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/accounts/acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4/balances"
    }
  ]
}
```

