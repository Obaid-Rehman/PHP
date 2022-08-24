
# Card Masked Pan

Card number using PAN truncation

## Structure

`CardMaskedPan`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardNumber` | `?string` | Optional | Masked card number with only the first 6 and last 4 digits visible<br>**Constraints**: *Minimum Length*: `19`, *Maximum Length*: `19`, *Pattern*: `^\d{4} \d{2}\*{2} \*{4} \d{4}$` | getCardNumber(): ?string | setCardNumber(?string cardNumber): void |

## Example (as JSON)

```json
{
  "cardNumber": null
}
```

