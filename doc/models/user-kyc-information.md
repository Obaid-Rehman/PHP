
# User Kyc Information

## Structure

`UserKycInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `driverLicenseId` | `?string` | Optional | User's driver's license number | getDriverLicenseId(): ?string | setDriverLicenseId(?string driverLicenseId): void |
| `passportId` | `?string` | Optional | User's passport number | getPassportId(): ?string | setPassportId(?string passportId): void |
| `governmentIdType` | [`?string (GovernmentIdTypeEnum)`](../../doc/models/government-id-type-enum.md) | Optional | User's government ID type | getGovernmentIdType(): ?string | setGovernmentIdType(?string governmentIdType): void |
| `governmentId` | `?string` | Optional | User's government ID number, such as a <i>SSN</i>, <i>EIN</i>, or <i>SIN</i> | getGovernmentId(): ?string | setGovernmentId(?string governmentId): void |

## Example (as JSON)

```json
{
  "driverLicenseId": null,
  "passportId": null,
  "governmentIdType": null,
  "governmentId": null
}
```

