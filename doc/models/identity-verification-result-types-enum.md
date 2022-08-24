
# Identity Verification Result Types Enum

In combination with the <i>Disposition</i> type, the <i>Result</i> type provides the results of an IDV check. A <i>Dispositioned</i> result of <i>FINAL PASS</i> represents a passing check, whereas a <i>TRANSIENT FAIL</i> is still being processed but has failed at least one phase of the check. Until the disposition is <i>FINAL</i>, a result has not been determined.

## Enumeration

`IdentityVerificationResultTypesEnum`

## Fields

| Name |
|  --- |
| `PASS` |
| `FAIL` |
| `SERVICE_OFFLINE` |
| `PROCESSING` |

