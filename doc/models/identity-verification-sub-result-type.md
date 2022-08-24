
# Identity Verification Sub Result Type

If used by a provider, sub-results that give additional insight into the results, including whether they result was <i>Soft</i> or <i>Hard</i>. <i>Soft</i> results may have additional recourse that can be leveraged to validate a user’s identity.

## Structure

`IdentityVerificationSubResultType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idvSubResult` | [`?string (IdentityVerificationResultSubTypesEnum)`](../../doc/models/identity-verification-result-sub-types-enum.md) | Optional | If used by a provider, sub-results that give additional insight into the results, including whether they result was <i>Soft</i> or <i>Hard</i>. <i>Soft</i> results may have additional recourse that can be leveraged to validate a user’s identity. | getIdvSubResult(): ?string | setIdvSubResult(?string idvSubResult): void |

## Example (as JSON)

```json
{
  "idvSubResult": null
}
```

