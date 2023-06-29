Here's a start to documentation for interacting with the Map Layers APIs.

You'll want a tool that makes it easy to send HTTP requests to the rest API. For instance, [Guzzle](http://docs.guzzlephp.org/en/stable/) is a handy tool for PHP developers.

Some of the examples below are written for a test tool like [Postman](https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop?hl=en) if you're running tests.

[Need more background on REST testing / debugging tools?]([https://github.com/hackgvl/events-api/issues/15#issuecomment-74209821](https://github.com/hackgvl/OpenData/issues/15#issuecomment-74209821))

## Maps API

### List of All Map Layers (Robot View)

**URL**
To view all organizations - https://data.openupstate.org/rest/maps?_format=json

**Method**: GET
**Expected Response**: 200 OK
**Authorization**: None Required
**Headers** - Drupal 8 REST does NOT support the _Accept:_ header, so you MUST use the &_format= mentioned above.  The [reason for not supporting Accept: headers](https://www.drupal.org/node/2501221) is documented. 

#### Query String

- _format= (json, hal_json, xml)
- there are currently no additional filtering query string parameters for the map layers

### List of All Map Layers (Human/ Web Browser View)

**URL**
To view all map layers - https://data.openupstate.org/map-layers

**Method**: GET
**Expected Response**: 200 OK
**Authorization**: None Required


### Example of Updating a Map
```
{
    "_links": {
        "type": {
            "href": "https://data.openupstate.org/rest/type/node/map"
        }
    },
    "field_contribute_link": [
        {
            "uri": "https://docs.google.com/spreadsheets/d/1IQol1Gy8gRbQ0wT5YsO9IF_GazVcfbTx828zT9SvGwI/edit#gid=0",
            "title": "",
            "options": []
        }
    ],
    "field_geojson_link": [
        {
            "uri": "internal:/maps/bike-racks/geojson.php",
            "title": "",
            "options": []
        }
    ],
    "field_raw_data_link": [
        {
            "uri": "https://docs.google.com/spreadsheets/d/1IQol1Gy8gRbQ0wT5YsO9IF_GazVcfbTx828zT9SvGwI/pub?output=csv",
            "title": "",
            "options": []
        }
    ]
}
```
