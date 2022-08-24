
# Business Address

Address of the business location

## Structure

`BusinessAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `businessAddressLine1` | `?string` | Optional | First line of the business address that specifies street number, street name, and building name | getBusinessAddressLine1(): ?string | setBusinessAddressLine1(?string businessAddressLine1): void |
| `businessAddressLine2` | `?string` | Optional | Second line of the business address that specifies the apartment, suite, or space number (or any other designation not literally part of the physical address) | getBusinessAddressLine2(): ?string | setBusinessAddressLine2(?string businessAddressLine2): void |
| `businessAddressLine3` | `?string` | Optional | Third line of the business address that specifies the international or business addresses that do not fit on businessAddressLine3 | getBusinessAddressLine3(): ?string | setBusinessAddressLine3(?string businessAddressLine3): void |
| `businessAddressLine4` | `?string` | Optional | fourth line of the business address street address | getBusinessAddressLine4(): ?string | setBusinessAddressLine4(?string businessAddressLine4): void |
| `businessAddressLine5` | `?string` | Optional | Fifth line of the business address street address | getBusinessAddressLine5(): ?string | setBusinessAddressLine5(?string businessAddressLine5): void |
| `businessCity` | `?string` | Optional | City the business is registered | getBusinessCity(): ?string | setBusinessCity(?string businessCity): void |
| `businessRegion` | `?string` | Optional | State, province, or region the business is registered | getBusinessRegion(): ?string | setBusinessRegion(?string businessRegion): void |
| `businessCountry` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getBusinessCountry(): ?string | setBusinessCountry(?string businessCountry): void |
| `businessPostalCode` | `?string` | Optional | Postal code for the business address | getBusinessPostalCode(): ?string | setBusinessPostalCode(?string businessPostalCode): void |
| `businessPremiseNumber` | `?string` | Optional | House number for the business address | getBusinessPremiseNumber(): ?string | setBusinessPremiseNumber(?string businessPremiseNumber): void |

## Example (as JSON)

```json
{
  "businessAddressLine1": null,
  "businessAddressLine2": null,
  "businessAddressLine3": null,
  "businessAddressLine4": null,
  "businessAddressLine5": null,
  "businessCity": null,
  "businessRegion": null,
  "businessCountry": null,
  "businessPostalCode": null,
  "businessPremiseNumber": null
}
```

