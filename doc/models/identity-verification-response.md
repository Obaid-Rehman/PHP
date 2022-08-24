
# Identity Verification Response

## Structure

`IdentityVerificationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idvProviderReference` | `?string` | Optional | IDV provider unique ID for the IDV check performed | getIdvProviderReference(): ?string | setIdvProviderReference(?string idvProviderReference): void |
| `idvResult` | [`?string (IdentityVerificationResultTypesEnum)`](../../doc/models/identity-verification-result-types-enum.md) | Optional | In combination with the <i>Disposition</i> type, the <i>Result</i> type provides the results of an IDV check. A <i>Dispositioned</i> result of <i>FINAL PASS</i> represents a passing check, whereas a <i>TRANSIENT FAIL</i> is still being processed but has failed at least one phase of the check. Until the disposition is <i>FINAL</i>, a result has not been determined. | getIdvResult(): ?string | setIdvResult(?string idvResult): void |
| `idvSubResult` | [`?string (IdentityVerificationResultSubTypesEnum)`](../../doc/models/identity-verification-result-sub-types-enum.md) | Optional | If used by a provider, sub-results that give additional insight into the results, including whether they result was <i>Soft</i> or <i>Hard</i>. <i>Soft</i> results may have additional recourse that can be leveraged to validate a user’s identity. | getIdvSubResult(): ?string | setIdvSubResult(?string idvSubResult): void |
| `idvProvider` | [`?string (IdentityVerificationProviderTypesEnum)`](../../doc/models/identity-verification-provider-types-enum.md) | Optional | Provider types of verification that can be used for performing identity checks | getIdvProvider(): ?string | setIdvProvider(?string idvProvider): void |
| `createdOn` | `?\DateTime` | Optional | Time at which the object was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `raw` | `?string` | Optional | Contains the raw (unprocessed) output from the IDV provider. Format of the raw output can vary widely and is not documented. *For reference/debugging only | getRaw(): ?string | setRaw(?string raw): void |
| `idvCheckType` | [`?string (IdentityVerificationCheckTypesEnum)`](../../doc/models/identity-verification-check-types-enum.md) | Optional | Types of verification used for performing identity checks (<i>documentary</i>, <i>non-documentary</i>, <i>OFAC</i>, etc.) | getIdvCheckType(): ?string | setIdvCheckType(?string idvCheckType): void |
| `idvDispostion` | [`?string (IdentityVerificationDispositionTypesEnum)`](../../doc/models/identity-verification-disposition-types-enum.md) | Optional | In combination with the <i>Disposition</i> type, the <i>Result</i> type provides the results of an IDV check. A <i>Dispositioned</i> result of <i>FINAL PASS</i> represents a passing check, whereas a <i>TRANSIENT FAIL</i> is still being processed but has failed at least one phase of the check. Until the disposition is <i>FINAL</i>, a result has not been determined. | getIdvDispostion(): ?string | setIdvDispostion(?string idvDispostion): void |
| `token` | `?string` | Optional | Token representing the resource, prefixed with <i>user-</i>, <i>dest-</i>, <i>xfer-</i>, <i>acct-</i>, <i>pmnt-</i>, or <i>docu-</i>. | getToken(): ?string | setToken(?string token): void |
| `links` | [`?(HaetosParams[])`](../../doc/models/haetos-params.md) | Optional | - | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "idvProviderReference": null,
  "idvResult": null,
  "idvSubResult": null,
  "idvProvider": null,
  "createdOn": null,
  "raw": null,
  "idvCheckType": null,
  "idvDispostion": null,
  "token": null,
  "links": null
}
```

