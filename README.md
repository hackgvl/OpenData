We have a [hub of sorts for Open Data](https://data.openupstate.org) discovery, but this project is main Open Data repository for Code For Greenville brigade members to learn and [collaborate on issues](https://github.com/codeforgreenville/OpenData/issues).

As of Aug 2019 we have:

### Map Layers for Greenville and the Upstate
* 60+ Real-time, linkable [GeoJSON-based open map layers](https://data.openupstate.org/map-layers), almost all by [SC Codes students](https://sccodes.org)
* A [basic map layers API](https://github.com/codeforgreenville/OpenData/issues/17)

### Meetup Group and Meetup Event Data For Greenville
* For Humans
    - An example [tech calendar](https://hackgreenville.com/calendar) and [events](https://hackgreenville.com/events) built atop the meetup events API.
    - An example list of [tech meetups, conferences, and such](https://hackgreenville.com/orgs) built atop the organizations API.
    - [Email Notices For New Tech Orgs](http://codeforgreenville.us10.list-manage.com/subscribe?u=72f49b95543b434d24de7f27f&id=0ff96bdd44)
* For Robots/Coders
    - A [meetup events API](https://github.com/codeforgreenville/upstate_tech_cal_service/issues).
    - An [organizations API](https://github.com/codeforgreenville/OpenData/issues/17).
    - A [RSS](https://data.openupstate.org/organizations/all/feed) feed of new meetup groups.
    - A [validation tool to check that each organizations homepage URL remains valid](https://github.com/codeforgreenville/OpenData/wiki/Meeting-Notes-2016.04.26)

### Improved Communication
* A [HackGreenville community Slack](https://hackgreenville.com/join-slack)
* For meetup organizers, we started a #meetuporganizers channel on the [HackGreenville Slack](https://hackgreenville.com/join-slack)
* To help meetup organizers, here's a rough [Regularly Scheduled Days and Times](https://data.openupstate.org/greenville-meetup-scheduling) view to show any overlap between meetups on the "2nd Wednesday" or "3rd Tuesday", etc.
* [Submit new or inaccurate info about tech meetups](https://github.com/codeforgreenville/OpenData/issues/18).

## Next Steps

* See the [issues queue](https://github.com/codeforgreenville/OpenData/issues) for to-do's and conversations.
* [Attend a Code For Greenville meetup](https://data.openupstate.org/organization/code-for-greenville) to get involved.

## Why

Our purpose is to improve the discovery, promotion, and curation of open Greenville data so people can build new and interesting things more quickly and easily.

## How

We will maintain and promote open APIs which can be referenced in real-time.

We expect others to leverage these APIs to build new open tools, and even new APIs, to reduce manual work and duplicate effort.

## What

The first Code For Greenville meeting in 2014 sparked a lot of [ideas around meetup events](https://github.com/codeforgreenville/OpenData/wiki/Meeting-Notes-2014.06.23). So, we started a [reliable list and API of all the tech meetups/organizations](https://data.openupstate.org/organizations).

Now, we have a [meetup events API](https://github.com/codeforgreenville/upstate_tech_cal_service/issues) that queries our own [meetup groups API](https://github.com/codeforgreenville/OpenData/issues/17) in order to poll event services, like Meetup.com and Eventbrite.com. The result is local meetup events data is syndicated via an (API](https://github.com/codeforgreenville/upstate_tech_cal_service/issues) in a consistent, query-able format. 

We have an example [tech meetup calendar](https://hackgreenville.com/calendar) but we hope and expect community members to build all sorts of meetup oriented calendars and tools that fit their needs.

We also have [numerous GeoJSON-based open map layers](https://data.openupstate.org/map-layers) which can be linked to in real-time. The idea is that when map data changes it automatically updates everywhere it's referenced.  This also allows for community curation of popular map layers to reduce duplication of effort and to speed up the creation of new maps that leverage these layers.
