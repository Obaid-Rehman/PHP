# Program

```php
$programController = $client->getProgramController();
```

## Class Name

`ProgramController`

## Methods

* [List Programs](../../doc/controllers/program.md#list-programs)
* [Retrieve Program](../../doc/controllers/program.md#retrieve-program)
* [List Program Agreements](../../doc/controllers/program.md#list-program-agreements)
* [Retrieve Program Agreement](../../doc/controllers/program.md#retrieve-program-agreement)


# List Programs

Retrieve a list of all programs that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listPrograms(): void
```

## Response Type

`void`

## Example Usage

```php
$programController->listPrograms();
```


# Retrieve Program

Retrieve a single program configuration

```php
function retrieveProgram(string $progToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `progToken` | `string` | Template, Required | Auto-generated unique identifier representing a program, prefixed with <i>prog-</i>. |

## Response Type

`void`

## Example Usage

```php
$progToken = 'prog-4525ab9c-5b22-4e30-028a-45901a10aa0c';

$programController->retrieveProgram($progToken);
```


# List Program Agreements

Retrieve a list of all program agreements that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listProgramAgreements(string $progToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `progToken` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$progToken = 'prog-token4';

$programController->listProgramAgreements($progToken);
```


# Retrieve Program Agreement

Retrieve a single program agreement

```php
function retrieveProgramAgreement(string $progToken, string $agmtToken): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `progToken` | `string` | Template, Required | Auto-generated unique identifier representing a program, prefixed with <i>prog-</i>. |
| `agmtToken` | `string` | Template, Required | Auto-generated unique identifier representing a program agreement, prefixed with <i>agmt-</i>. |

## Response Type

`void`

## Example Usage

```php
$progToken = 'prog-4525ab9c-5b22-4e30-028a-45901a10aa0c';
$agmtToken = 'agmt-45901a10-5b22-4e30-028a-45901a10baa9';

$programController->retrieveProgramAgreement($progToken, $agmtToken);
```

