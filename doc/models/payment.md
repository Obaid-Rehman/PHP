
# Payment

Response from a Transfer request

## Structure

`Payment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `float` | Required | Amount of the transfer in the specified currency. | getAmount(): float | setAmount(float amount): void |
| `currency` | [`string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Required | Currency code type for the object | getCurrency(): string | setCurrency(string currency): void |
| `sourceToken` | `?string` | Optional | Unique identifier representing the source of funds. | getSourceToken(): ?string | setSourceToken(?string sourceToken): void |
| `destinationToken` | `?string` | Optional | Unique identifier representing the destination of funds. | getDestinationToken(): ?string | setDestinationToken(?string destinationToken): void |
| `notes` | `?string` | Optional | Optional comments visible to the user. | getNotes(): ?string | setNotes(?string notes): void |
| `memo` | `?string` | Optional | Optional internal memo not visible to the user. | getMemo(): ?string | setMemo(?string memo): void |
| `purpose` | [`?string (PaymentPurposeTypesEnum)`](../../doc/models/payment-purpose-types-enum.md) | Optional | Used to identify the purpose of a payment and impacts reporting and calculated taxable earnings (if utilizing tax services) | getPurpose(): ?string | setPurpose(?string purpose): void |
| `clientPaymentId` | `?string` | Optional | Unique value provided by the client for the payment. | getClientPaymentId(): ?string | setClientPaymentId(?string clientPaymentId): void |
| `autoAcceptQuote` | `?bool` | Optional | Determines whether the quote is automatically accepted or if a POST utilizing the token for the quote is required. | getAutoAcceptQuote(): ?bool | setAutoAcceptQuote(?bool autoAcceptQuote): void |
| `expires` | `?\DateTime` | Optional | Quote expiration, ISO-8601 format, UTC by default unless overridden. | getExpires(): ?\DateTime | setExpires(?\DateTime expires): void |
| `notBefore` | `?\DateTime` | Optional | Transfer is scheduled and will not process before this time. | getNotBefore(): ?\DateTime | setNotBefore(?\DateTime notBefore): void |
| `notAfter` | `?\DateTime` | Optional | Transfer expires if not completed prior to this time. | getNotAfter(): ?\DateTime | setNotAfter(?\DateTime notAfter): void |
| `status` | [`?string (TransferStatusTypesEnum)`](../../doc/models/transfer-status-types-enum.md) | Optional | Current status of a transfer | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "amount": 5,
  "currency": null
}
```

