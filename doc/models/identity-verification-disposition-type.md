
# Identity Verification Disposition Type

In combination with the <i>Disposition</i> type, the <i>Result</i> type provides the results of an IDV check. A <i>Dispositioned</i> result of <i>FINAL PASS</i> represents a passing check, whereas a <i>TRANSIENT FAIL</i> is still being processed but has failed at least one phase of the check. Until the disposition is <i>FINAL</i>, a result has not been determined.

## Structure

`IdentityVerificationDispositionType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idvDispostion` | [`?string (IdentityVerificationDispositionTypesEnum)`](../../doc/models/identity-verification-disposition-types-enum.md) | Optional | In combination with the <i>Disposition</i> type, the <i>Result</i> type provides the results of an IDV check. A <i>Dispositioned</i> result of <i>FINAL PASS</i> represents a passing check, whereas a <i>TRANSIENT FAIL</i> is still being processed but has failed at least one phase of the check. Until the disposition is <i>FINAL</i>, a result has not been determined. | getIdvDispostion(): ?string | setIdvDispostion(?string idvDispostion): void |

## Example (as JSON)

```json
{
  "idvDispostion": null
}
```

