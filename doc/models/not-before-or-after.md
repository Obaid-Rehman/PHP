
# Not Before or After

## Structure

`NotBeforeOrAfter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `notBefore` | `?\DateTime` | Optional | Transfer is scheduled and will not process before this time. | getNotBefore(): ?\DateTime | setNotBefore(?\DateTime notBefore): void |
| `notAfter` | `?\DateTime` | Optional | Transfer expires if not completed prior to this time. | getNotAfter(): ?\DateTime | setNotAfter(?\DateTime notAfter): void |

## Example (as JSON)

```json
{
  "notBefore": null,
  "notAfter": null
}
```

