
# Key Value Pair Bank Field Types String

1...N required fields as determined by call to get requirements

## Structure

`KeyValuePairBankFieldTypesString`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | [`string (BankAccountFieldTypesEnum)`](../../doc/models/bank-account-field-types-enum.md) | Required | Classifies account field types | getKey(): string | setKey(string key): void |
| `value` | `string` | Required | - | getValue(): string | setValue(string value): void |

## Example (as JSON)

```json
{
  "key": "BANK_NON_SWIFT_BIC",
  "value": "value2"
}
```

