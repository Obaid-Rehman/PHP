
# Bank Account Requirement Format Legend

Classifies the legend format of the required information for a bank account

## Structure

`BankAccountRequirementFormatLegend`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | - | getKey(): ?string | setKey(?string key): void |
| `descriptions` | [`?(KeyValuePairLanguageTypeString[])`](../../doc/models/key-value-pair-language-type-string.md) | Optional | Localized requirement description for display purposes | getDescriptions(): ?array | setDescriptions(?array descriptions): void |

## Example (as JSON)

```json
{
  "key": null,
  "descriptions": null
}
```

