
# Phone Numbers

## Structure

`PhoneNumbers`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `phoneNumber` | `string` | Required | The E.164 formatted primary phone number. This can be the same as the mobile number. | getPhoneNumber(): string | setPhoneNumber(string phoneNumber): void |
| `mobileNumber` | `string` | Required | The E.164 formatted mobile phone number, required by most financial institutions for account creation, verification, or PSD2 (3DS). Mobile numbers must be unique to a user within a tenant and cannot be shared. | getMobileNumber(): string | setMobileNumber(string mobileNumber): void |
| `phoneNumberCountry` | [`string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Required | Two-digit country code types | getPhoneNumberCountry(): string | setPhoneNumberCountry(string phoneNumberCountry): void |
| `mobileNumberCountry` | [`string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Required | Two-digit country code types | getMobileNumberCountry(): string | setMobileNumberCountry(string mobileNumberCountry): void |

## Example (as JSON)

```json
{
  "phoneNumber": "phoneNumber0",
  "mobileNumber": "mobileNumber8",
  "phoneNumberCountry": "UM",
  "mobileNumberCountry": "TC"
}
```

