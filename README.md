Please see the Wiki and Issues links in the right sidebar for the latest project updates.

## Why
Our purpose is to make discovery and promotion of Greenville's tech organizations and events easier for everyone.

## What
We will maintain a comprehensive database of all area tech communities and their events which is updated primarily by "robots".

We expect others to build new tools and improve/automate existing ones by using this information. Thus, we reduce manual work and duplicate effort and shift the focus to creating new components.

## How
We aim to provide a RESTful API infrastructure that allows CRUD requests.

The REST API itself may be maintained in a tool like Drupal, but the intention is to be language agnostic about how we get the data and how we serve it out. Hence, we use REST as an abstraction layer.

## Provider Robots
Folks involved in Code for Greenville may write some of the "robots", but we don't need to own those tools, they just need to be stable and trusted.

For example a "robot" to scrape iCal events could be written in C# with it feeding new event data into the API. The Meetup.com events coming from a Python tool. The Facebook tool

With different communities posting their event data in all sorts of ways, we'll need robots for a variety of purposes. iCal, Meetup.com API, Facebook, Eventbrite, Rich Snippets (Microdata, Microformats, RDFa), or even website scraping.

## On Building Tools

Everyone may read (GET) and trusted friends can change (POST, PUT, and DELETE).

The intention is not to build all the consuming tools or robots. Rather, the REST API will be available for other tools to consume (GET) and to update (POST, PUT, DELETE).

## Examples
An example "consumer" tool/idea is to have a website to list tech community sponsorship needs (beer, food, coffee, space) and connect them with sponsors who are looking to offer such things.

A Rails tool could consume said data to render a calendar of open-source meetups, or all meetups, or all organizations, or whatever.

