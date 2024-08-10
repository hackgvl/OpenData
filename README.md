This repository is a hub of sorts for publically available "open data" related to Greenville and the Upstate of South Carolina.  This effort is guided by _HackGreenville Labs_ contributors.

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
    - A [meetup events API](https://github.com/hackgvl/hackgreenville-com/blob/develop/EVENTS_API.md).
    - An [organizations API](https://github.com/hackgvl/hackgreenville-com/blob/develop/ORGS_API.md).
    - A [validation tool to check that each organizations homepage URL remains valid](https://github.com/hackgvl/OpenData/wiki/Meeting-Notes-2016.04.26)

### Improved Communication
* A [HackGreenville community Slack](https://hackgreenville.com/join-slack)
* For meetup organizers, we started a #community-organizers channel on the [HackGreenville Slack](https://hackgreenville.com/join-slack)
* [Submit new or inaccurate info about tech meetups](https://hackgreenville.com/contact).

## Next Steps

* See [HackGreenville's projects, roadmap, and "good first issues"](https://github.com/hackgvl).
* Join the [HackGreenville Slack](https://hackgreenville.com/join-slack) and connect with the HackGreenville Labs team in the _#hg-labs_ Slack channel

## Why

Our purpose is to improve the discovery, promotion, and curation of open Greenville data so people can build new and interesting things more quickly and easily.

## How

We will maintain and promote open APIs which can be referenced in real-time.

We expect others to leverage these APIs to build new open tools, and even new APIs, to reduce manual work and duplicate effort.

## What

The first meeting in 2014 sparked a lot of [ideas around meetup events](https://github.com/hackgvl/OpenData/wiki/Meeting-Notes-2014.06.23). So, we started a [reliable list and API of all the tech meetups/organizations](https://hackgreenville.com/orgs).

Now, we have a [events API](https://github.com/hackgvl/hackgreenville-com/blob/develop/EVENTS_API.md) that queries our own [organizations API](https://github.com/hackgvl/hackgreenville-com/blob/develop/ORGS_API.md) in order to poll event services, like Meetup, Eventbrite, and Luma. The result is local meetup and events data is being promoted on [HackGreenville's website](https://hackgreenville.com/events), and the underlying data is publically available through the aforementioned APIs.

We also have [numerous GeoJSON-based open map layers](https://data.openupstate.org/map-layers) which can be linked to in real-time. The idea is that when map data changes it automatically updates everywhere it's referenced.  This also allows for community curation of popular map layers to reduce duplication of effort and to speed up the creation of new maps that leverage these layers.
