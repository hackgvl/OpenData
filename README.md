See it in action at https://data.openupstate.org

## Recent Progress
As of August 22nd 2017 we have:

### Map Layers for Greenville
* 52 Real-time, linkable [GeoJSON-based open map layers](https://data.openupstate.org/map-layers), almost all by [SC Codes students](https://sccodes.org)
* [A spreadsheet of existing and potential open data sets](https://docs.google.com/spreadsheets/d/1IWsFT1p0ZY-DInfMOFq_gmqpGuKyl5wyBb9VoyoEjRs/edit#gid=0) which anyone can edit
* For Robots/Coders JSON and XML with [documentation on how to GET, POST, PATCH to the REST API](https://github.com/codeforgreenville/OpenData/issues/17), including filtering the data.

### Meetup Data For Greenville
* For Humans, [a list of all tech organizations](https://data.openupstate.org/organizations/all)
* For Feed Readers, [RSS](https://data.openupstate.org/organizations/all/feed) feeds of organization data.
* For Robots/Coders JSON and XML with [documentation on how to GET, POST, PATCH to the REST API](https://github.com/codeforgreenville/OpenData/issues/17), including filtering the data.
*  Get [Email Notices For New Tech Orgs](http://codeforgreenville.us10.list-manage.com/subscribe?u=72f49b95543b434d24de7f27f&id=0ff96bdd44)
* A [validation tool to check that each organizations homepage URL remains valid](https://github.com/codeforgreenville/OpenData/wiki/Meeting-Notes-2016.04.26)

### Improved Communication
* For meetup organizers, we started a #meetuporganizers channel on the [HackGreenville Slack](https://hackgreenville.typeform.com/to/sBMjCF)
* To help meetup organizers, here's a rough [Regularly Scheduled Days and Times](https://data.openupstate.org/greenville-meetup-scheduling) view to show any overlap between meetups on the "2nd Wednesday" or "3rd Tuesday", etc.
* [Submit new or inaccurate info about tech meetups](https://github.com/codeforgreenville/OpenData/issues/18).

## Next Steps: Tools

See the [issues queue](https://github.com/codeforgreenville/OpenData/issues) for to-do's.

## Why

Our purpose is to improve the discovery, promotion, and curation of open Greenville data so people can build new and interesting things more quickly and easily.

The first dataset was gathering an accurate and stable list of all the tech meetups/organizations.  There was a large set of use cases for meetup events at the very first CFG meeting. An events API is still on the table, but we're focusing on smaller, easier datasets to provide a broader range of interests and to engage people in the idea before tackling a complex set like events.

## What

We will maintain a valid database of data, like tech meetups and map layers, which can be linked to in real-time and/or leveraged by "robots".

We expect others to build new tools and improve/automate existing ones by using this information. Thus, we reduce manual work and duplicate effort and shift the focus to creating new components.

## How

We aim to provide a RESTful API infrastructure that allows create, read, update, delete (CRUD) requests.

The REST API itself may be maintained in a tool like Drupal, but the intention is to be language agnostic about how we get the data and who uses it. Hence, we use REST as an abstraction layer between environments.

## Provider Robots

Folks involved in Code for Greenville may write some of the "robots", but we don't need to own those tools, they just need to be stable and trusted.

Using "events" as a future example:

With different communities posting their event data in all sorts of ways, we'll need robots for a variety of purposes. iCal, Meetup.com API, Facebook, Eventbrite, Rich Snippets (Microdata, Microformats, RDFa), or even website scraping.

For example a "robot" to scrape iCal events could be written in Microsoft's C# with it feeding new event data into the API. The Meetup.com events coming from a Python robots. Facebook events pulled from a Node robot, etc, etc.

## Consumer Applications

As with the provider robots, the intention is not to build all of the consumer applications. Rather, the [REST API](https://github.com/codeforgreenville/OpenData/issues/17) will be available to anyone for reading (GET) and trusted friends for changes (POST, PUT, and DELETE).

## Examples

[User Stories created at the first meeting](https://github.com/codeforgreenville/OpenData/wiki/Meeting-Notes-2014.06.23).

Example 1
A "consumer" app to have a website to list tech community sponsorship needs (beer, food, coffee, space) and connect them with sponsors who are looking to offer such things.

Example 2
A Rails/PHP/Node/etc app could consume said data to render a calendar of open-source meetups, or all meetups, or all organizations, or whatever.

