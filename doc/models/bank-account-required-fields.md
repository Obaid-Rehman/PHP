
# Bank Account Required Fields

Classifies the required account field objects

## Structure

`BankAccountRequiredFields`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `format` | [`?BankAccountRequirementFormat`](../../doc/models/bank-account-requirement-format.md) | Optional | Classifies the format of the required information for a bank account | getFormat(): ?BankAccountRequirementFormat | setFormat(?BankAccountRequirementFormat format): void |
| `requirement` | [`?string (BankAccountFieldTypesEnum)`](../../doc/models/bank-account-field-types-enum.md) | Optional | Classifies account field types | getRequirement(): ?string | setRequirement(?string requirement): void |
| `description` | [`?(KeyValuePairLanguageTypeString[])`](../../doc/models/key-value-pair-language-type-string.md) | Optional | Localized requirement description for display purposes | getDescription(): ?array | setDescription(?array description): void |
| `validators` | [`?(BankAccountRequirementValidator[])`](../../doc/models/bank-account-requirement-validator.md) | Optional | - | getValidators(): ?array | setValidators(?array validators): void |

## Example (as JSON)

```json
{
  "format": null,
  "requirement": null,
  "description": null,
  "validators": null
}
```

