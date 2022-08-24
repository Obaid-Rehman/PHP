# Users

User-related operations

```php
$usersController = $client->getUsersController();
```

## Class Name

`UsersController`

## Methods

* [Update User](../../doc/controllers/users.md#update-user)
* [Retrieve User](../../doc/controllers/users.md#retrieve-user)
* [List Users](../../doc/controllers/users.md#list-users)
* [Create User](../../doc/controllers/users.md#create-user)
* [List User IDV Checks](../../doc/controllers/users.md#list-user-idv-checks)
* [Retrieve User IDV Check](../../doc/controllers/users.md#retrieve-user-idv-check)
* [List User Events](../../doc/controllers/users.md#list-user-events)
* [Retrieve User Event](../../doc/controllers/users.md#retrieve-user-event)
* [Accept Program Agreement](../../doc/controllers/users.md#accept-program-agreement)
* [List Accepted Program Agreements](../../doc/controllers/users.md#list-accepted-program-agreements)


# Update User

Update a user object (change email, address change, etc.) using a user token.

```php
function updateUser(string $userToken, string $xMyPayQuickerVersion, ?UserBase $body = null): UserResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`?UserBase`](../../doc/models/user-base.md) | Body, Optional | - |

## Response Type

[`UserResponse`](../../doc/models/user-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';

$result = $usersController->updateUser($userToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "firstName": "Jane",
  "lastName": "Smith",
  "dateOfBirth": "1977-12-14",
  "phoneNumber": "760-350-0324",
  "phoneNumberCountry": "US",
  "mobileNumber": "213-446-5755",
  "mobileNumberCountry": "US",
  "addressLine1": "290 Carriage Court",
  "city": "Los Angeles",
  "region": "CA",
  "country": "US",
  "postalCode": "90017",
  "addressType": "RESIDENTIAL",
  "email": "jsmith@payquicker.com",
  "gender": "FEMALE",
  "userType": "INDIVIDUAL",
  "programUserId": "d97ce0519b2d",
  "language": "en-US",
  "countryOfBirth": "US",
  "countryOfNationality": "US",
  "token": "user-f012bc86-4d42-415b-a8b2-be5e0b90e59a",
  "status": "PRE_ACTIVATED",
  "createdOn": "2020-02-24T22:00:00Z",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a"
    }
  ]
}
```


# Retrieve User

Retrieve a single user record by user token.

```php
function retrieveUser(string $userToken, string $xMyPayQuickerVersion): UserResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

[`UserResponse`](../../doc/models/user-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';

$result = $usersController->retrieveUser($userToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "firstName": "Jane",
  "lastName": "Smith",
  "dateOfBirth": "1977-12-14",
  "phoneNumber": "760-350-0324",
  "phoneNumberCountry": "US",
  "mobileNumber": "213-446-5755",
  "mobileNumberCountry": "US",
  "addressLine1": "290 Carriage Court",
  "city": "Los Angeles",
  "region": "CA",
  "country": "US",
  "postalCode": "90017",
  "addressType": "RESIDENTIAL",
  "email": "jsmith@payquicker.com",
  "gender": "FEMALE",
  "userType": "INDIVIDUAL",
  "programUserId": "d97ce0519b2d",
  "language": "en-US",
  "countryOfBirth": "US",
  "countryOfNationality": "US",
  "token": "user-f012bc86-4d42-415b-a8b2-be5e0b90e59a",
  "status": "PRE_ACTIVATED",
  "createdOn": "2020-02-24T22:00:00Z",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a"
    }
  ]
}
```


# List Users

Retrieve a list of all users that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listUsers(
    string $xMyPayQuickerVersion,
    ?int $page = null,
    ?int $pageSize = 20,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): UserCollectionResponse
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

[`UserCollectionResponse`](../../doc/models/user-collection-response.md)

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';
$pageSize = 20;
$filter = '\'name\'*\'Fra\'||*\'Ger\',\'numericCode\'>\'5\'';
$sort = '-name';
$language = Models\LanguageTypesEnum::ENUS;

$result = $usersController->listUsers($xMyPayQuickerVersion, null, $pageSize, $filter, $sort, $language);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "firstName": "Jane",
      "lastName": "Smith",
      "dateOfBirth": "1977-12-14",
      "phoneNumber": "760-350-0324",
      "phoneNumberCountry": "US",
      "mobileNumber": "213-446-5755",
      "mobileNumberCountry": "US",
      "addressLine1": "290 Carriage Court",
      "city": "Los Angeles",
      "region": "CA",
      "country": "US",
      "postalCode": "90017",
      "addressType": "RESIDENTIAL",
      "email": "jsmith@payquicker.com",
      "gender": "FEMALE",
      "userType": "INDIVIDUAL",
      "programUserId": "d97ce0519b2d",
      "language": "en-US",
      "countryOfBirth": "US",
      "countryOfNationality": "US",
      "token": "usr-3b8a0c25-c7e2-4bb7-904e-0a2a66001357",
      "status": "PRE_ACTIVATED",
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "https://platform.mypayquicker.com/api/v2/users/usr-3b8a0c25-c7e2-4bb7-904e-0a2a66001357"
        }
      ]
    }
  ],
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users"
    }
  ]
}
```


# Create User

Create a new user. Payload contains both required and optional fields for user- and company-based users, allowing for the creation of a corporate/partnership/dba (i.e., Grubhub model) user along with a standard end user (i.e., <i>Payee</i>). The type of the user (<i>Business</i> vs. <i>User</i>) and type of business (<i>Corporation</i> vs. <i>Partnership</i>) provide context that impacts KYC etc.

```php
function createUser(string $xMyPayQuickerVersion, UserBase $body): UserResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |
| `body` | [`UserBase`](../../doc/models/user-base.md) | Body, Required | Body details of the request |

## Response Type

[`UserResponse`](../../doc/models/user-response.md)

## Example Usage

```php
$xMyPayQuickerVersion = '2020.02.24';
$body_phoneNumber = '760-350-0324';
$body_mobileNumber = '213-446-5755';
$body_phoneNumberCountry = Models\CountryTypesEnum::US;
$body_mobileNumberCountry = Models\CountryTypesEnum::US;
$body = new Models\UserBase(
    $body_phoneNumber,
    $body_mobileNumber,
    $body_phoneNumberCountry,
    $body_mobileNumberCountry
);
$body->setFirstName('Jane');
$body->setLastName('Smith');
$body->setDateOfBirth(DateTimeHelper::fromSimpleDate('1977-12-14'));
$body->setAddressLine1('290 Carriage Court');
$body->setCity('Los Angeles');
$body->setRegion('CA');
$body->setCountry(Models\CountryTypesEnum::US);
$body->setPostalCode('90017');
$body->setAddressType(Models\AddressTypesEnum::RESIDENTIAL);
$body->setEmail('jsmith@payquicker.com');
$body->setGender(Models\GenderTypesEnum::FEMALE);
$body->setUserType(Models\UserTypesEnum::INDIVIDUAL);
$body->setProgramUserId('d97ce0519b2d');
$body->setLanguage(Models\LanguageTypesEnum::ENUS);
$body->setCountryOfBirth(Models\CountryTypesEnum::US);
$body->setCountryOfNationality(Models\CountryTypesEnum::US);

$result = $usersController->createUser($xMyPayQuickerVersion, $body);
```

## Example Response *(as JSON)*

```json
{
  "firstName": "Jane",
  "lastName": "Smith",
  "dateOfBirth": "1977-12-14",
  "phoneNumber": "760-350-0324",
  "phoneNumberCountry": "US",
  "mobileNumber": "213-446-5755",
  "mobileNumberCountry": "US",
  "addressLine1": "290 Carriage Court",
  "city": "Los Angeles",
  "region": "CA",
  "country": "US",
  "postalCode": "90017",
  "addressType": "RESIDENTIAL",
  "email": "jsmith@payquicker.com",
  "gender": "FEMALE",
  "userType": "INDIVIDUAL",
  "programUserId": "d97ce0519b2d",
  "language": "en-US",
  "countryOfBirth": "US",
  "countryOfNationality": "US",
  "token": "user-f012bc86-4d42-415b-a8b2-be5e0b90e59a",
  "status": "PRE_ACTIVATED",
  "createdOn": "2020-02-24T22:00:00Z",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a"
    }
  ]
}
```


# List User IDV Checks

Retrieve a list of IDV checks by user token that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listUserIDVChecks(
    string $userToken,
    string $xMyPayQuickerVersion
): IdentityVerificationCollectionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

[`IdentityVerificationCollectionResponse`](../../doc/models/identity-verification-collection-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$xMyPayQuickerVersion = '2020.02.24';

$result = $usersController->listUserIDVChecks($userToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "idvProviderReference": "yPV0h4o1Yw3QzdLAvA7a",
      "idvResult": "PASS",
      "idvSubResult": "HARD",
      "idvProvider": "IDOLOGY",
      "createdOn": "2020-02-21T22:00:00Z",
      "raw": "<RAW IDV processor output, for informational /debugging purposes only>",
      "idvCheckType": "NON_DOCUMENTARY",
      "idvDisposition": "FINAL",
      "token": "idvc-7e7567e0-c2db-485d-896d-45901a10baa9",
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a/idv-checks/idvc-7e7567e0-c2db-485d-896d-45901a10baa9"
        }
      ]
    }
  ],
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a/idv-checks"
    }
  ]
}
```


# Retrieve User IDV Check

Retrieve a list of all IDV check by IDVC token that supports filtering, sorting, and pagination through existing mechanisms.

```php
function retrieveUserIDVCheck(
    string $userToken,
    string $idvcToken,
    string $xMyPayQuickerVersion
): IdentityVerificationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `idvcToken` | `string` | Template, Required | Auto-generated unique identifier representing a user IDV check, prefixed with <i>idvc-</i>. |
| `xMyPayQuickerVersion` | `string` | Header, Required | Date-based API Version specified in the header <i>required</i> on all calls. |

## Response Type

[`IdentityVerificationResponse`](../../doc/models/identity-verification-response.md)

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$idvcToken = 'idvc-7e7567e0-c2db-485d-896d-45901a10baa9';
$xMyPayQuickerVersion = '2020.02.24';

$result = $usersController->retrieveUserIDVCheck($userToken, $idvcToken, $xMyPayQuickerVersion);
```

## Example Response *(as JSON)*

```json
{
  "idvProviderReference": "yPV0h4o1Yw3QzdLAvA7a",
  "idvResult": "PASS",
  "idvSubResult": "HARD",
  "idvProvider": "IDOLOGY",
  "createdOn": "2020-02-21T22:00:00Z",
  "raw": "<RAW IDV processor output, for informational/debugging purposes only>",
  "idvCheckType": "NON_DOCUMENTARY",
  "idvDispostion": "FINAL",
  "token": "idvc-7e7567e0-c2db-485d-896d-45901a10baa9",
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "https://platform.mypayquicker.com/api/v2/users/user-f012bc86-4d42-415b-a8b2-be5e0b90e59a/idv-checks/idvc-7e7567e0-c2db-485d-896d-45901a10baa9"
    }
  ]
}
```


# List User Events

Retrieve a list of all user events that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listUserEvents(string $userToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |

## Response Type

`void`

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';

$usersController->listUserEvents($userToken);
```


# Retrieve User Event

Retrieve a single user event

```php
function retrieveUserEvent(string $userToken, string $evntToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `evntToken` | `string` | Template, Required | Auto-generated unique identifier representing an event, prefixed with <i>evnt-</i>. |

## Response Type

`void`

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$evntToken = 'evnt-28491de2-5b22-4e30-028a-45901a10baa9';

$usersController->retrieveUserEvent($userToken, $evntToken);
```


# Accept Program Agreement

Accept a single program agreement

```php
function acceptProgramAgreement(string $userToken, string $agmtToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |
| `agmtToken` | `string` | Template, Required | Auto-generated unique identifier representing a program agreement, prefixed with <i>agmt-</i>. |

## Response Type

`void`

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';
$agmtToken = 'agmt-45901a10-5b22-4e30-028a-45901a10baa9';

$usersController->acceptProgramAgreement($userToken, $agmtToken);
```


# List Accepted Program Agreements

Retrieve a list of all accepted program agreements that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listAcceptedProgramAgreements(string $userToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with <i>user-</i>. |

## Response Type

`void`

## Example Usage

```php
$userToken = 'user-f012bc86-4d42-415b-a8b2-be5e0b90e59a';

$usersController->listAcceptedProgramAgreements($userToken);
```

