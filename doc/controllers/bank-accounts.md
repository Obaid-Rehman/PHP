# Bank Accounts

Bank account-related operations

```php
$bankAccountsController = $client->getBankAccountsController();
```

## Class Name

`BankAccountsController`

## Methods

* [List Bank Accounts](../../doc/controllers/bank-accounts.md#list-bank-accounts)
* [Create Bank Account](../../doc/controllers/bank-accounts.md#create-bank-account)
* [Retrieve Bank Account](../../doc/controllers/bank-accounts.md#retrieve-bank-account)
* [Update Bank Account](../../doc/controllers/bank-accounts.md#update-bank-account)
* [Delete Bank Account](../../doc/controllers/bank-accounts.md#delete-bank-account)
* [Get Bank Account Requirements](../../doc/controllers/bank-accounts.md#get-bank-account-requirements)


# List Bank Accounts

Retrieve a list of bank accounts that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listBankAccounts(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BankAccountCollectionResponse
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

[`BankAccountCollectionResponse`](../../doc/models/bank-account-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $bankAccountsController->listBankAccounts($userToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "token": "dest-7d8b1c83-01bb-40fb-87d7-26bd4c303f01",
      "status": "DELETED",
      "createdOn": "2020-02-21T22:00:00Z",
      "bankAccountOwnershipType": "PERSONAL",
      "type": "CHECKING",
      "fields": [
        {
          "key": "BANK_ACH_ABA",
          "value": "333333333"
        },
        {
          "key": "BANK_BBAN",
          "value": "4444444444"
        }
      ],
      "bankCurrency": "USD",
      "bankCountry": "US",
      "description": "My account",
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "string"
        }
      ]
    },
    {
      "token": "dest-efacd12b-a86e-4f44-bbea-927955ec1634",
      "status": "ACTIVE",
      "createdOn": "2020-02-21T22:00:00Z",
      "bankAccountOwnershipType": "PERSONAL",
      "type": "CHECKING",
      "fields": [
        {
          "key": "BANK_ACH_ABA",
          "value": "012346789"
        },
        {
          "key": "BANK_BBAN",
          "value": "987654321"
        }
      ],
      "bankCurrency": "USD",
      "bankCountry": "US",
      "description": "Personal checking account",
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "string"
        }
      ]
    }
  ],
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ]
}
```


# Create Bank Account

Create a quote for a bank account using a user token.

```php
function createBankAccount(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?BankAccountFields $body = null
): BankAccountResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`?BankAccountFields`](../../doc/models/bank-account-fields.md) | Body, Optional | - |

## Response Type

[`BankAccountResponse`](../../doc/models/bank-account-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';

$result = $bankAccountsController->createBankAccount($userToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-efacd12b-a86e-4f44-bbea-927955ec1634",
  "status": "ACTIVE",
  "createdOn": "2020-02-21T22:00:00Z",
  "bankAccountOwnershipType": "PERSONAL",
  "type": "CHECKING",
  "fields": [
    {
      "key": "BANK_ACH_ABA",
      "value": "012346789"
    },
    {
      "key": "BANK_BBAN",
      "value": "987654321"
    }
  ],
  "bankCurrency": "USD",
  "bankCountry": "US",
  "description": "Personal checking account",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ]
}
```


# Retrieve Bank Account

Retrieve a list of bank accounts using a destination token that supports filtering, sorting, and pagination through existing mechanisms.

```php
function retrieveBankAccount(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BankAccountResponse
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

[`BankAccountResponse`](../../doc/models/bank-account-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $bankAccountsController->retrieveBankAccount($userToken, $destToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-efacd12b-a86e-4f44-bbea-927955ec1634",
  "status": "ACTIVE",
  "createdOn": "2020-02-21T22:00:00Z",
  "bankAccountOwnershipType": "PERSONAL",
  "type": "CHECKING",
  "fields": [
    {
      "key": "BANK_ACH_ABA",
      "value": "012346789"
    },
    {
      "key": "BANK_BBAN",
      "value": "987654321"
    }
  ],
  "bankCurrency": "USD",
  "bankCountry": "US",
  "description": "Personal checking account",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ]
}
```


# Update Bank Account

Update a bank account.

```php
function updateBankAccount(
    string $userToken,
    string $destToken,
    string $xMyPayQuickerVersion,
    ?BankAccountFields $body = null
): BankAccountResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`?BankAccountFields`](../../doc/models/bank-account-fields.md) | Body, Optional | - |

## Response Type

[`BankAccountResponse`](../../doc/models/bank-account-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';

$result = $bankAccountsController->updateBankAccount($userToken, $destToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-efacd12b-a86e-4f44-bbea-927955ec1634",
  "status": "ACTIVE",
  "createdOn": "2020-02-21T22:00:00Z",
  "bankAccountOwnershipType": "PERSONAL",
  "type": "CHECKING",
  "fields": [
    {
      "key": "BANK_ACH_ABA",
      "value": "012346789"
    },
    {
      "key": "BANK_BBAN",
      "value": "987654321"
    }
  ],
  "bankCurrency": "USD",
  "bankCountry": "US",
  "description": "Personal checking account",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ]
}
```


# Delete Bank Account

Delete (cloak) a user bank account.

```php
function deleteBankAccount(string $userToken, string $destToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `destToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with <i>dest->.<br>**Constraints**: *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$destToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';
$xMyPayQuickerVersion = '2020.02.24';

$bankAccountsController->deleteBankAccount($userToken, $destToken, $xMyPayQuickerVersion);
```


# Get Bank Account Requirements

Retrieve requirements for adding a bank account using the parameters provided (user context, given country of residence, supported EFT provider(s), destination currency, destination country, required fields, with names, and regex validation expression) for easy customer wire-up and validation.

```php
function getBankAccountRequirements(
    string $userToken,
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BankAccountRequirementCollectionResponse
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

[`BankAccountRequirementCollectionResponse`](../../doc/models/bank-account-requirement-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $bankAccountsController->getBankAccountRequirements($userToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "bankCountry": "IT",
      "bankCurrency": "EUR",
      "requirements": [
        {
          "requirement": "BANK_IBAN",
          "format": {
            "example": "IT43K0310412701000000820420",
            "legend": [
              {
                "key": "IT43K0310412701000000820420",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example IBAN"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio IBAN"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "IBAN"
            },
            {
              "language": "it-IT",
              "translation": "IBAN"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^IT\\\\d{2}[A-Z]\\\\d{10}[0-9A-Z]{12}$"
            }
          ]
        },
        {
          "requirement": "BANK_SWIFT_BIC",
          "format": {
            "example": "01234567890",
            "legend": [
              {
                "key": "01234567890",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example Swift/BIC"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio Swift/BIC"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "Swift/BIC"
            },
            {
              "language": "it-IT",
              "translation": "Swift/BIC"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^[a-z0-9A-Z]{8,11}$"
            }
          ]
        }
      ],
      "quote": {
        "formattedAmount": "$4.32 USD (USD, en-US), 0,00 € EUR (EUR, fr-FR)",
        "amount": 4.32,
        "currency": "USD"
      },
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "string"
        }
      ]
    }
  ],
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ]
}
```

