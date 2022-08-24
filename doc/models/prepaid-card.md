
# Prepaid Card

## Structure

`PrepaidCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-</i>, <i>pmnt-</i>, or <i>docu-</i>. | getToken(): ?string | setToken(?string token): void |
| `status` | [`?string (StatusEnum)`](../../doc/models/status-enum.md) | Optional | Current status of the prepaid card | getStatus(): ?string | setStatus(?string status): void |
| `createdOn` | `?\DateTime` | Optional | Time at which the object was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `country` | [`string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Required | Two-digit country code types | getCountry(): string | setCountry(string country): void |
| `currency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getCurrency(): ?string | setCurrency(?string currency): void |
| `cardPersonalization` | [`?string (PrepaidCardPersonalizationTypesEnum)`](../../doc/models/prepaid-card-personalization-types-enum.md) | Optional | Specifies a card is <i>Personalized</i> or <i>Non-personalized</i> (i.e., issued to Preferred Customer) | getCardPersonalization(): ?string | setCardPersonalization(?string cardPersonalization): void |
| `cardPackage` | `?string` | Optional | Package for the card being displayed (<i>Virtual<,i>) or <i>Produced (physical)</i> | getCardPackage(): ?string | setCardPackage(?string cardPackage): void |
| `cardNetwork` | [`?string (CardNetworkTypesEnum)`](../../doc/models/card-network-types-enum.md) | Optional | Major credit card network types | getCardNetwork(): ?string | setCardNetwork(?string cardNetwork): void |
| `expires` | `?\DateTime` | Optional | Quote expiration, ISO-8601 format, UTC by default unless overridden. | getExpires(): ?\DateTime | setExpires(?\DateTime expires): void |
| `cardNumber` | `?string` | Optional | Masked card number with only the first 6 and last 4 digits visible<br>**Constraints**: *Minimum Length*: `19`, *Maximum Length*: `19`, *Pattern*: `^\d{4} \d{2}\*{2} \*{4} \d{4}$` | getCardNumber(): ?string | setCardNumber(?string cardNumber): void |
| `cvv` | `?string` | Optional | Card Verification Value (CVV) on the credit card or debit card. (3-digit number on VISA®, MasterCard® branded credit and debit cards) | getCvv(): ?string | setCvv(?string cvv): void |

## Example (as JSON)

```json
{
  "token": null,
  "status": null,
  "createdOn": null,
  "country": "FO",
  "currency": null,
  "cardPersonalization": null,
  "cardPackage": null,
  "cardNetwork": null,
  "expires": null,
  "cardNumber": null,
  "cvv": null
}
```

