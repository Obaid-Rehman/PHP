
# Prepaid Card Base

Base class applied to the prepaid card

## Structure

`PrepaidCardBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardPackage` | `?string` | Optional | Package for the card being displayed (<i>Virtual<,i>) or <i>Produced (physical)</i> | getCardPackage(): ?string | setCardPackage(?string cardPackage): void |
| `programToken` | `string` | Required | Token representing a program<br>**Constraints**: *Pattern*: `'^prog-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$'` | getProgramToken(): string | setProgramToken(string programToken): void |

## Example (as JSON)

```json
{
  "cardPackage": null,
  "programToken": "programToken2"
}
```

