
# Payment Purpose

Purpose for the payment being made.

## Structure

`PaymentPurpose`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `purpose` | [`?string (PaymentPurposeTypesEnum)`](../../doc/models/payment-purpose-types-enum.md) | Optional | Used to identify the purpose of a payment and impacts reporting and calculated taxable earnings (if utilizing tax services) | getPurpose(): ?string | setPurpose(?string purpose): void |

## Example (as JSON)

```json
{
  "purpose": null
}
```

