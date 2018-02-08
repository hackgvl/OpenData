## Recent Progress
As of Feb 7th 2017 we have:

### Map Layers and Open Data for Greenville
* 55 Real-time, linkable [GeoJSON-based open map layers](https://data.openupstate.org/map-layers), almost all by [SC Codes students](https://sccodes.org)
* [A spreadsheet of existing and potential open data sets](https://docs.google.com/spreadsheets/d/1IWsFT1p0ZY-DInfMOFq_gmqpGuKyl5wyBb9VoyoEjRs/edit#gid=0) which anyone can edit

### Meetup Organization and Events Data For Greenville
* For Humans
    - A [ list of all tech organizations](https://data.openupstate.org/organizations/all)
    - An example [tech calendar](https://nunie123.github.io/gtc/) built atop the [meetup events API](https://github.com/codeforgreenville/upstate_tech_cal_service/issues) and [meetup groups APIs](https://github.com/codeforgreenville/OpenData/issues/17).
* For Robots/Coders
    - A [meetup events API](https://github.com/codeforgreenville/upstate_tech_cal_service/issues).
    - A [meetup groups API](https://github.com/codeforgreenville/OpenData/issues/17).
    - A [RSS](https://data.openupstate.org/organizations/all/feed) feed of new meetup groups.
* Tools
    - [Email Notices For New Tech Orgs](http://codeforgreenville.us10.list-manage.com/subscribe?u=72f49b95543b434d24de7f27f&id=0ff96bdd44)
    - A [validation tool to check that each organizations homepage URL remains valid](https://github.com/codeforgreenville/OpenData/wiki/Meeting-Notes-2016.04.26)

### Improved Communication
* For meetup organizers, we started a #meetuporganizers channel on the [HackGreenville Slack](https://hackgreenville.typeform.com/to/sBMjCF)
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

Now, we have a [meetup events API](https://github.com/codeforgreenville/upstate_tech_cal_service/issues) that queries our own [meetup groups API](https://github.com/codeforgreenville/OpenData/issues/17). Our meetup events API polls event services, like Meetup.com and Eventbrite.com, for local meetup events and syndicates that data in a consistent, query-able format. 

We have an example [tech meetup calendar](https://nunie123.github.io/gtc/) but we hope and expect community members to build all sorts of calendars and tools that fit their needs.

We also have [numerous GeoJSON-based open map layers](https://data.openupstate.org/map-layers) which can be linked to in real-time. The idea is that when map data changes it automatically updates everywhere it's referenced.  This also allows for community curation of popular map layers to reduce duplication of effort and to speed up the creation of new maps that leverage these layers.
