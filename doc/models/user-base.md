
# User Base

Object for the established group of users

## Structure

`UserBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | User's first name. <i>Required</i> if the user is registered as an individual. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | User's last name. <i>Required</i> if the user is registered as an individual. | getLastName(): ?string | setLastName(?string lastName): void |
| `dateOfBirth` | `?\DateTime` | Optional | User's date of birth | getDateOfBirth(): ?\DateTime | setDateOfBirth(?\DateTime dateOfBirth): void |
| `businessName` | `?string` | Optional | Legal name for the business | getBusinessName(): ?string | setBusinessName(?string businessName): void |
| `businessOperatingName` | `?string` | Optional | Name under which the business operates | getBusinessOperatingName(): ?string | setBusinessOperatingName(?string businessOperatingName): void |
| `businessRegistrationId` | `?string` | Optional | Registration number or ID assigned by a government body | getBusinessRegistrationId(): ?string | setBusinessRegistrationId(?string businessRegistrationId): void |
| `businessRegistrationRegion` | `?string` | Optional | State, province, or territory where the business is registered | getBusinessRegistrationRegion(): ?string | setBusinessRegistrationRegion(?string businessRegistrationRegion): void |
| `businessRegistrationCountry` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getBusinessRegistrationCountry(): ?string | setBusinessRegistrationCountry(?string businessRegistrationCountry): void |
| `businessContactRole` | [`?string (BusinessContactRoleEnum)`](../../doc/models/business-contact-role-enum.md) | Optional | Role of the user within the business | getBusinessContactRole(): ?string | setBusinessContactRole(?string businessContactRole): void |
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
| `businessType` | [`?string (BusinessTypesEnum)`](../../doc/models/business-types-enum.md) | Optional | Type of business (<i>Corporation</i> or <i>Partnership</i>) | getBusinessType(): ?string | setBusinessType(?string businessType): void |
| `driverLicenseId` | `?string` | Optional | User's driver's license number | getDriverLicenseId(): ?string | setDriverLicenseId(?string driverLicenseId): void |
| `passportId` | `?string` | Optional | User's passport number | getPassportId(): ?string | setPassportId(?string passportId): void |
| `governmentIdType` | [`?string (GovernmentIdTypeEnum)`](../../doc/models/government-id-type-enum.md) | Optional | User's government ID type | getGovernmentIdType(): ?string | setGovernmentIdType(?string governmentIdType): void |
| `governmentId` | `?string` | Optional | User's government ID number, such as a <i>SSN</i>, <i>EIN</i>, or <i>SIN</i> | getGovernmentId(): ?string | setGovernmentId(?string governmentId): void |
| `phoneNumber` | `string` | Required | The E.164 formatted primary phone number. This can be the same as the mobile number. | getPhoneNumber(): string | setPhoneNumber(string phoneNumber): void |
| `mobileNumber` | `string` | Required | The E.164 formatted mobile phone number, required by most financial institutions for account creation, verification, or PSD2 (3DS). Mobile numbers must be unique to a user within a tenant and cannot be shared. | getMobileNumber(): string | setMobileNumber(string mobileNumber): void |
| `phoneNumberCountry` | [`string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Required | Two-digit country code types | getPhoneNumberCountry(): string | setPhoneNumberCountry(string phoneNumberCountry): void |
| `mobileNumberCountry` | [`string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Required | Two-digit country code types | getMobileNumberCountry(): string | setMobileNumberCountry(string mobileNumberCountry): void |
| `addressLine1` | `?string` | Optional | First line of the address that specifies street number, street name, and building name | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | Second line of the address that specifies the apartment, suite, or space number (or any other designation not literally part of the physical address) | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressLine3` | `?string` | Optional | Third line of the address that specifies the international or business addresses that do not fit on addressLine2 | getAddressLine3(): ?string | setAddressLine3(?string addressLine3): void |
| `addressLine4` | `?string` | Optional | Fourth line of the address, if any | getAddressLine4(): ?string | setAddressLine4(?string addressLine4): void |
| `addressLine5` | `?string` | Optional | Fifth line of the address, if any | getAddressLine5(): ?string | setAddressLine5(?string addressLine5): void |
| `city` | `?string` | Optional | City or town of the business address | getCity(): ?string | setCity(?string city): void |
| `region` | `?string` | Optional | State, province, or territory of the business address | getRegion(): ?string | setRegion(?string region): void |
| `country` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getCountry(): ?string | setCountry(?string country): void |
| `postalCode` | `?string` | Optional | Series of letters, digits, or both, included in a postal address for the purpose of sorting mail | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `premiseNumber` | `?string` | Optional | House or building number of the business address | getPremiseNumber(): ?string | setPremiseNumber(?string premiseNumber): void |
| `addressType` | [`?string (AddressTypesEnum)`](../../doc/models/address-types-enum.md) | Optional | Classifies the address type (<i>Home</i>, <i>Business</i>, <i>Billing</i>, <i>Shipping</i>) | getAddressType(): ?string | setAddressType(?string addressType): void |
| `email` | `?string` | Optional | Email address for the user account<br>**Constraints**: *Maximum Length*: `150` | getEmail(): ?string | setEmail(?string email): void |
| `employerId` | `?string` | Optional | User's employer identifier | getEmployerId(): ?string | setEmployerId(?string employerId): void |
| `gender` | [`?string (GenderTypesEnum)`](../../doc/models/gender-types-enum.md) | Optional | Gender as a user identifies | getGender(): ?string | setGender(?string gender): void |
| `userType` | [`?string (UserTypesEnum)`](../../doc/models/user-types-enum.md) | Optional | Account holder's profile type | getUserType(): ?string | setUserType(?string userType): void |
| `programUserId` | `?string` | Optional | Program identifier for the user | getProgramUserId(): ?string | setProgramUserId(?string programUserId): void |
| `language` | [`?string (LanguageTypesEnum)`](../../doc/models/language-types-enum.md) | Optional | Language type in IETF's BCP 47 format | getLanguage(): ?string | setLanguage(?string language): void |
| `countryOfBirth` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getCountryOfBirth(): ?string | setCountryOfBirth(?string countryOfBirth): void |
| `countryOfNationality` | [`?string (CountryTypesEnum)`](../../doc/models/country-types-enum.md) | Optional | Two-digit country code types | getCountryOfNationality(): ?string | setCountryOfNationality(?string countryOfNationality): void |
| `occupation` | [`?string (OccupationTypesEnum)`](../../doc/models/occupation-types-enum.md) | Optional | Type of occupation for the user | getOccupation(): ?string | setOccupation(?string occupation): void |
| `taxResidentStatus` | [`?string (TaxResidentStatusTypesEnum)`](../../doc/models/tax-resident-status-types-enum.md) | Optional | Tax resident status type of a country | getTaxResidentStatus(): ?string | setTaxResidentStatus(?string taxResidentStatus): void |
| `currency` | [`?string (CurrencyTypesEnum)`](../../doc/models/currency-types-enum.md) | Optional | Currency code type for the object | getCurrency(): ?string | setCurrency(?string currency): void |

## Example (as JSON)

```json
{
  "firstName": null,
  "lastName": null,
  "dateOfBirth": null,
  "businessName": null,
  "businessOperatingName": null,
  "businessRegistrationId": null,
  "businessRegistrationRegion": null,
  "businessRegistrationCountry": null,
  "businessContactRole": null,
  "businessAddressLine1": null,
  "businessAddressLine2": null,
  "businessAddressLine3": null,
  "businessAddressLine4": null,
  "businessAddressLine5": null,
  "businessCity": null,
  "businessRegion": null,
  "businessCountry": null,
  "businessPostalCode": null,
  "businessPremiseNumber": null,
  "businessType": null,
  "driverLicenseId": null,
  "passportId": null,
  "governmentIdType": null,
  "governmentId": null,
  "phoneNumber": "phoneNumber0",
  "mobileNumber": "mobileNumber8",
  "phoneNumberCountry": "UM",
  "mobileNumberCountry": "TC",
  "addressLine1": null,
  "addressLine2": null,
  "addressLine3": null,
  "addressLine4": null,
  "addressLine5": null,
  "city": null,
  "region": null,
  "country": null,
  "postalCode": null,
  "premiseNumber": null,
  "addressType": null,
  "email": null,
  "employerId": null,
  "gender": null,
  "userType": null,
  "programUserId": null,
  "language": null,
  "countryOfBirth": null,
  "countryOfNationality": null,
  "occupation": null,
  "taxResidentStatus": null,
  "currency": null
}
```

