# Documents

Document-related operations

```php
$documentsController = $client->getDocumentsController();
```

## Class Name

`DocumentsController`

## Methods

* [List User Documents](../../doc/controllers/documents.md#list-user-documents)
* [Create User Document](../../doc/controllers/documents.md#create-user-document)
* [Retrieve User Document](../../doc/controllers/documents.md#retrieve-user-document)
* [Replace User Document](../../doc/controllers/documents.md#replace-user-document)


# List User Documents

Retrieve a list of user documents that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listUserDocuments(
    string $userToken,
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
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
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
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$documentsController->listUserDocuments($userToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Create User Document

Create a quote for a user document.

```php
function createUserDocument(string $userToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';

$documentsController->createUserDocument($userToken, $xMyPayQuickerVersion);
```


# Retrieve User Document

Retrieve an individual user document by its document token.

```php
function retrieveUserDocument(
    string $userToken,
    string $docuToken,
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
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `docuToken` | `string` | Template, Required | Auto-generated unique identifier representing an uploaded document, prefixed with <i>docu-</i>. |
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
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$docuToken = 'docu-6260c132-5cb1-4e30-8b08-9ce559893acb';
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$documentsController->retrieveUserDocument($userToken, $docuToken, $xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```


# Replace User Document

Replace the user document at the given document token.

```php
function replaceUserDocument(string $userToken, string $docuToken, string $xMyPayQuickerVersion): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `docuToken` | `string` | Template, Required | Auto-generated unique identifier representing an uploaded document, prefixed with <i>docu-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

`void`

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$docuToken = 'docu-6260c132-5cb1-4e30-8b08-9ce559893acb';
$xMyPayQuickerVersion = '2020.02.24';

$documentsController->replaceUserDocument($userToken, $docuToken, $xMyPayQuickerVersion);
```

