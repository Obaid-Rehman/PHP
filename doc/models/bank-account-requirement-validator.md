
# Bank Account Requirement Validator

Specifies the validator type for the required bank account information

## Structure

`BankAccountRequirementValidator`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `validatorType` | [`?string (ValidatorTypesEnum)`](../../doc/models/validator-types-enum.md) | Optional | - | getValidatorType(): ?string | setValidatorType(?string validatorType): void |
| `expression` | `string` | Required | Validation regular expression | getExpression(): string | setExpression(string expression): void |

## Example (as JSON)

```json
{
  "validatorType": null,
  "expression": "expression2"
}
```

