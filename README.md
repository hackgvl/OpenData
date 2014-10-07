UpstateEvents
=============
Please see the Wiki and Issues links in the right sidebar for the latest project updates.

The purpose of this project is to provide infrastructure for tech communities to be aware of each other, make it easy to connect when it makes sense, and allow folks to build tools that promote what's happening in Greenville to people looking to get involved.

We're building a REST API with Greenville area technology organizations and their events.

We intend to pull in meetup events for each community via whatever source available: iCal, Meetup.com API, Facebook, Eventbrite, Rich Snippets (Microdata, Microformats, RDFa), or even website scraping.

The intention is not to build all the tools. Rather, the REST API will be available for other tools to consume (GET) and to update (POST, PUT, DELETE). For instance, a tool to scrape iCal events could be written in C# and updates fed into the API. Then, a PHP tool could render a calendar of open-source meetups, or all meetups, or all organizations, or whatever.

Another example "consumer" tool/idea is to have a website to list tech community sponsorship needs (beer, food, coffee, space) and connect them with sponsors who are looking to offer such things.
