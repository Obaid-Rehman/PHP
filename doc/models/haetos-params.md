
# Haetos Params

Hypermedia as the Engine of Application State (HAETOS) parameters used in a query.

## Structure

`HaetosParams`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `params` | [`HaetosRelationship`](../../doc/models/haetos-relationship.md) | Required | Indicates the HATEOS relationship between the target and current resources. | getParams(): HaetosRelationship | setParams(HaetosRelationship params): void |
| `href` | `string` | Required | URL for resource described by the relationship. | getHref(): string | setHref(string href): void |

## Example (as JSON)

```json
{
  "params": {
    "rel": "self"
  },
  "href": null
}
```

