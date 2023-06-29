Here's a start to documentation for interacting with the Organizations APIs.

You'll want a tool that makes it easy to send HTTP requests to the rest API. For instance, [Guzzle](http://docs.guzzlephp.org/en/stable/) is a handy tool for PHP developers.

Some of the examples below are written for a test tool like [Postman](https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop?hl=en) if you're running tests.

[Need more background on REST testing / debugging tools?](https://github.com/hackgvl/OpenData/issues/15#issuecomment-74209821)


## Organizations API

Viewing, creating, and updating organizations. 

### List of All Organizations (Human/ Web Browser View)

**URL**
- To view all organizations - https://data.openupstate.org/organizations
- To filter organizations by city, org_status, or event_service  (any or all) https://data.openupstate.org/organizations?city=greenville&org_status=active&event_service=meetup

**Method**: GET
**Expected Response**: 200 OK
**Authorization**: None Required

### REST API List of All Organizations (Robot View)

If you get an Access Denied (error 403) on while you're already logged into Drupal as another user then try to open the URL in an Incognito tab.

**URL**
- To view all organizations - https://data.openupstate.org/rest/organizations?_format=json
- To filter organizations - (ex with all filters applied) https://data.openupstate.org/rest/organizations?city=greenville&org_status=active&event_service=eventbrite&organization_type=conference&_format=json

**Method**: GET
**Expected Response**: 200 OK
**Authorization**: None Required
**Headers** - Drupal 8 REST does NOT support the _Accept:_ header, so you MUST use the &_format= mentioned above.  The [reason for not supporting Accept: headers](https://www.drupal.org/node/2501221) is documented. 

#### Query String
- city=yourcity (for spaces use %20)
- org_status= (active, inactive, on-hiatus)
- event_service= (eventbrite, facebook, meetup, nvite, open-collective)
- organization_type= (code-school, conference, meetup)
- tag_filter_id= an integer that matches the Drupal taxonomy / tag id (ex. &tag_filter_id=1 or for multiple tags at once &tag_filter_id=1,2 )
- _format= (json, hal_json, xml)
- [If you have a Drupal account then you can login and see the "Organization" form for the latest pre-defined values](https://data.openupstate.org/node/add/organization)

#### Errors
If you get an HTML response that says "A client error happened" then you need to include/fix the _format= parameter.

### Example of Viewing an Organization

**URL**: https://data.openupstate.org/node/7?_format=json  OR the alias https://data.openupstate.org/organization/code-for-greenville?_format=json
**Expected Response**: 200 OK
**Authorization**: None Required
- https://data.openupstate.org/organization/code-for-greenville?_format=json
- https://data.openupstate.org/organization/code-for-greenville?_format=xml
- https://data.openupstate.org/organization/code-for-greenville?_format=hal_json
- https://data.openupstate.org/map/art-galleries?_format=json

**Set an accepted / desired content format**
- append &_format=json to the URL query string
- append &_format=hal_json to the URL query string
- append &_format=xml to the URL query string

**Headers** - Drupal 8 REST does NOT support the _Accept:_ header, so you MUST use the &_format= mentioned above.  The [reason for not supporting Accept: headers](https://www.drupal.org/node/2501221) is documented. 

### Example of Creating a New Organization

**Method**: POST
**URL**: https://data.openupstate.org/entity/node
**Authorization**: Requires Basic Auth and a user / password hash
**Expected Response**: 200 OK (serialized JSON of the full object)  (no longer returns 201 Created)
**Headers to Send**
- Content-Type: application/hal+json
- X-CSRF-Token: (visit /rest/session/token to get a token and use that string here)

[Drupal POST Documentation](https://www.drupal.org/docs/8/core/modules/rest/3-post-for-creating-content-entities)

**Notes**: The _links->type->href value is required with hal+json, as it defines the entity.  Do a GET on any organization node beforehand to verify/check the fields.  Drupal will automatically set core fields like like created, updated, promoted, status, so it's really only necessary to set the title and custom fields (field_xyz)
**Predefined Field Values**
If a value is sent for one of the following fields, it must be one of the following or the POST will fail.
- field_event_service: eventbrite, facebook, meetup, none, nvite
- field_org_status: active, inactive, on-hiatus, planned

**Example Body**

```
{ 
  "_links": {
    "type": { "href": "https://data.openupstate.org/rest/type/node/organization" }
  },
 "title": [ { "value": "Upstate AI Robot", "lang": "en" } ],
 "field_city": [ { "value": "spartanburg" } ],
 "field_event_service": [ { "value": "eventbrite" } ],
 "field_events_api_key": [ { "value": "123456789" } ],
 "field_focus_area": [ { "value": "Robots with Lasers" } ],
 "field_homepage": [ { "uri": "http://example.com/johnny-5" } ],
 "field_org_status": [ { "value": "active" } ],
 "field_primary_contact_email": [ { "value": "johnnyfive@example.com" } ],
 "field_primary_contact_person": [ { "value": "Johnny Five" } ]
}
```
### Example of Updating an Organization
**Method**: PATCH  (Drupal purposely does not support PUT)
**URL**: https://data.openupstate.org/node/4
**Expected Response**: 200 OK (serialized JSON of the full object)
**Authorization**: Requires Basic Auth and a user / password hash
**Headers to Send**
- Content-Type: application/hal+json
- X-CSRF-Token: (visit /rest/session/token to get a token and use that string here)

[Drupal Patch Documentation](https://www.drupal.org/docs/8/core/modules/rest/4-patch-for-updating-content-entities)

**Notes**: The _links->type->href value is required with hal+json, as it defines the entity. It is possible to update many fields at once by including multiple values in the body. This example updates only one field, field_primary_contact_person.

**Predefined Field Values**
If a value is sent for one of the following fields, it must be one of the following or the PATCH will fail.
- field_event_service: eventbrite, facebook, meetup, none, nvite
- field_org_status: active, inactive, on-hiatus, planned

**Example Body**

```
{
    "_links": {
        "type": {
            "href": "https://data.openupstate.org/rest/type/node/organization"
        }
    },
    "field_primary_contact_person": [
        {
            "value": "Johnny Five"
        }
    ]
}
```
