
# Bank Account Requirement Format

Classifies the format of the required information for a bank account

## Structure

`BankAccountRequirementFormat`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `example` | `?string` | Optional | Example of a requirement generated from the validator(s) | getExample(): ?string | setExample(?string example): void |
| `legend` | [`?(BankAccountRequirementFormatLegend[])`](../../doc/models/bank-account-requirement-format-legend.md) | Optional | - | getLegend(): ?array | setLegend(?array legend): void |

## Example (as JSON)

```json
{
  "example": null,
  "legend": null
}
```

