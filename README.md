As of March 2015 we have
* [Drupal REST API setup and working](https://github.com/codeforgreenville/UpstateEvents/issues/15).
* [Documentation on how to GET, POST, PATCH] (https://github.com/codeforgreenville/UpstateEvents/issues/17)

For more detailed updates, please see the [*Wiki Pages*](https://github.com/codeforgreenville/UpstateEvents/wiki) and [*Issues*](https://github.com/codeforgreenville/UpstateEvents/issues) links in the right sidebar for the latest project updates and/or come to the next Code for Greenville meeting.

Feel free to update the [spreadsheet of area tech communities](https://docs.google.com/spreadsheets/d/1kNJRd0rw5eU7__0Wj9ZgSFg7gDiHOIbeisGvKkWivvU/edit?usp=sharing).

## Why
Our purpose is to make discovery and promotion of Greenville's tech organizations and events easier for everyone.

## What
We will maintain a comprehensive database of all area tech communities and their events which is updated primarily by "robots".

We expect others to build new tools and improve/automate existing ones by using this information. Thus, we reduce manual work and duplicate effort and shift the focus to creating new components.

## How
We aim to provide a RESTful API infrastructure that allows create, read, update, delete (CRUD) requests.

The REST API itself may be maintained in a tool like Drupal, but the intention is to be language agnostic about how we get the data and who uses it. Hence, we use REST as an abstraction layer between environments.

## Provider Robots
Folks involved in Code for Greenville may write some of the "robots", but we don't need to own those tools, they just need to be stable and trusted.

With different communities posting their event data in all sorts of ways, we'll need robots for a variety of purposes. iCal, Meetup.com API, Facebook, Eventbrite, Rich Snippets (Microdata, Microformats, RDFa), or even website scraping.

For example a "robot" to scrape iCal events could be written in Microsoft's C# with it feeding new event data into the API. The Meetup.com events coming from a Python robots. Facebook events pulled from a Node robot, etc, etc.

## Consumer Applications

Is it is with the provider robots, the intention is not to build all of the consumer applications. Rather, the REST API will be available to anyone for reading (GET) and trusted friends for changes (POST, PUT, and DELETE).

## Examples
[User Stories created at the first meeting](https://github.com/codeforgreenville/UpstateEvents/wiki/Meeting-Notes-2014.06.23).

Example 1
A "consumer" app to have a website to list tech community sponsorship needs (beer, food, coffee, space) and connect them with sponsors who are looking to offer such things.

Example 2
A Rails/PHP/Node/etc app could consume said data to render a calendar of open-source meetups, or all meetups, or all organizations, or whatever.

