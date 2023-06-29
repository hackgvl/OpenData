We have a [hub of sorts for Open Data](https://data.openupstate.org) discovery, but this project is main Open Data repository for _HackGreenville Labs_ contributors to learn and [collaborate on issues](https://github.com/hackgvl/OpenData/issues).

### Map Layers for Greenville and the Upstate
* 90+ Real-time, linkable [GeoJSON-based open map layers](https://data.openupstate.org/map-layers), almost all by [SC Codes students](https://sccodes.org)
* A [basic map layers API](https://github.com/hackgvl/OpenData/blob/master/MAPS_API.md)
* These map layers are based on this [Leaflet and Google Sheets template project and code](https://github.com/hackgvl/leaflet-google-sheets-template).

### Meetup Group and Meetup Event Data For Greenville
* For Humans
    - An example [tech calendar](https://hackgreenville.com/calendar) and [events](https://hackgreenville.com/events) built atop the meetup events API.
    - An example list of [tech meetups, conferences, and such](https://hackgreenville.com/orgs) built atop the organizations API.
    - [Email Notices For New Tech Orgs](https://hackgreenville.us10.list-manage.com/subscribe?u=72f49b95543b434d24de7f27f&id=0ff96bdd44)
    - [Slack integrations with the HackGreenville Slack](https://github.com/hackgvl/slack-events-bot)
* For Robots/Coders
    - A [meetup events API](https://github.com/hackgvl/events-api/issues).
    - An [organizations API](https://github.com/hackgvl/OpenData/blob/master/ORGANIZATIONS_API.md).
    - A [RSS](https://data.openupstate.org/organizations/all/feed) feed of new meetup groups.
    - A [validation tool to check that each organizations homepage URL remains valid](https://github.com/hackgvl/OpenData/wiki/Meeting-Notes-2016.04.26)

### Improved Communication
* A [HackGreenville community Slack](https://hackgreenville.com/join-slack)
* For meetup organizers, we started a #meetuporganizers channel on the [HackGreenville Slack](https://hackgreenville.com/join-slack)
* To help meetup organizers, here's a rough [Regularly Scheduled Days and Times](https://data.openupstate.org/greenville-meetup-scheduling) view to show any overlap between meetups on the "2nd Wednesday" or "3rd Tuesday", etc.
* [Submit new or inaccurate info about tech meetups](https://data.openupstate.org/contact/suggestions).

## Next Steps

* See the [issues queue](https://github.com/hackgvl/OpenData/issues) for to-do's and conversations.
* Join the [HackGreenville Slack](https://hackgreenville.com/join-slack) and connect with the HackGreenville Labs team in the #hg-labs Slack channel

## Why

Our purpose is to improve the discovery, promotion, and curation of open Greenville data so people can build new and interesting things more quickly and easily.

## How

We will maintain and promote open APIs which can be referenced in real-time.

We expect others to leverage these APIs to build new open tools, and even new APIs, to reduce manual work and duplicate effort.

## What

The first meeting in 2014 sparked a lot of [ideas around meetup events](https://github.com/hackgvl/OpenData/wiki/Meeting-Notes-2014.06.23). So, we started a [reliable list and API of all the tech meetups/organizations](https://data.openupstate.org/organizations).

Now, we have a [events API](https://github.com/hackgvl/events-api/issues) that queries our own [organizations API](https://github.com/hackgvl/OpenData/blob/master/ORGANIZATIONS_API.md) in order to poll event services, like Meetup.com and Eventbrite.com. The result is local meetup events data is syndicated via an [events API](https://github.com/hackgvl/events-api/issues) in a consistent, query-able format. 

We have an example [tech meetup calendar](https://hackgreenville.com/calendar), but we hope and expect community members to build all sorts of meetup oriented calendars and tools that fit their needs.

We also have [numerous GeoJSON-based open map layers](https://data.openupstate.org/map-layers) which can be linked to in real-time. The idea is that when map data changes it automatically updates everywhere it's referenced.  This also allows for community curation of popular map layers to reduce duplication of effort and to speed up the creation of new maps that leverage these layers.
