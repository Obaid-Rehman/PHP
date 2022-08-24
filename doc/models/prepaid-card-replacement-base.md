
# Prepaid Card Replacement Base

## Structure

`PrepaidCardReplacementBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardPackage` | `?string` | Optional | Package for the card being displayed (<i>Virtual<,i>) or <i>Produced (physical)</i> | getCardPackage(): ?string | setCardPackage(?string cardPackage): void |
| `programToken` | `string` | Required | Token representing a program<br>**Constraints**: *Pattern*: `'^prog-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$'` | getProgramToken(): string | setProgramToken(string programToken): void |
| `cardReplacementReason` | [`?string (PrepaidCardReplacementReasonTypesEnum)`](../../doc/models/prepaid-card-replacement-reason-types-enum.md) | Optional | Reason for card replacement. In certain programs, the replacement reason code impacts replacement cost and responsibility. | getCardReplacementReason(): ?string | setCardReplacementReason(?string cardReplacementReason): void |

## Example (as JSON)

```json
{
  "cardPackage": null,
  "programToken": "programToken2",
  "cardReplacementReason": null
}
```

