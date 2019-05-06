# Islandora Google Scholar

## Introduction

This module maps MODS metadata fields to HTML `<meta>` tags on the fly to help improve indexing in Google Scholar and citation harvesting using citation tools like Zotero.
This module embeds meta tags in the HEAD element for use in indexing.

**Note: Requires MODS 3.1**

Islandora Google Scholar creates meta tags to be placed in the head of the HTML by information stored in the MODS fields. Requires to have at least title, full name of at least one author, and publication year.

Tags are built starting with Citation author. The title is pulled from mods[1] > titleInfo > title
It loops through author names and breaks apart given name and family name.

Google Scholar tags and the MODS values they are extracted from.

| Google Scholar | MODS XPath file                    |
|----------------|------------------------------------|
| journal_title  | relatedItem[@type="host"]/title    |
| volume         | part/detail[@type="volume"]/number |
| issn           | identifier[@type="issn"]           |
| issue          | part/detail[@type="issue"]/number  |
| start_page     | extent[@unit="page"]/start         |
| end_page       | extent[@unit="page"]/end/start     |
| end_page       | extent[@unit="page"]/end/start     |
| online_date    | recordInfo/recordCreationDate      |
| doi            | identifier[@type="doi"]'           |

Google Scholar requires dates in __yy__/__mm__/__dd__ format or just the year. [Link](http://www.loc.gov/standards/datetime/)

| Google Scholar | MODS XPath file                |
|----------------|--------------------------------|
| origin_date    | dateIssued                     |
| part_date      | date                           |
| related_date   | relatedItem[@type="host"]/date |
| created_date   | dateCreated                    |

## Requirements

This module requires the following modules/libraries:

* [Islandora](https://github.com/islandora/islandora)
* [Islandora Scholar](https://github.com/islandora/islandora_scholar)

## Installation

Install as usual, see [this](https://drupal.org/documentation/install/modules-themes/modules-7) for further information.

## Configuration

Enable the Islandora Google Scholar module via Administration » Modules (admin/modules)

To configure go to scholar config via admin/islandora/solution_pack_config/scholar

![islandora google scholar config](https://cloud.githubusercontent.com/assets/2738244/21623224/73ee0118-d1cf-11e6-8c19-73e9c226b565.png)

Google Scholar Primary Search XPath <br/>
Defaults to: `//mods:identifier[@type="doi"]`

Google Scholar Default Search XPath <br/>
Defaults to: `//mods:title`

Google Scholar Publication Date SOLR Field<br/>
Defaults to `mods_originInfo_dateIssued_mdt`.<br/>
The solr date field used to facet by publication date during Google Scholar indexing. This is an autocomplete field. Start typing the solr field name and then select from the list. *Be sure to select a field ending with "_dt" or "_mdt", otherwise solr errors will result during google indexing.*

Google Scholar Abstract SOLR Field<br/>
Defaults to `mods_abstract_ms`.
This is used when displaying object abstracts as required by Google Scholar.'

Excluded Content Models<br/>
Defaults to: `islandora:collectionCModel`<br/>
Enter a comma-separated list of content model PIDs to exclude from Google Scholar search indexing. <br/>
For example: `islandora:collectionCModel, islandora:newspaperCModel`

## Configuring Google Scholar
The islandora_google_scholar module exposes several pages to facilitate Google Scholar indexing of your repository. Urls to these pages should be entered into your [Google Scholar Inclusions dashboard](https://partnerdash.google.com/partnerdash/d/scholarinclusions).

**Year index:** "Please provide the URL of a page listing all years available."
    
    Path: /gs_years, e.g, http://repository.example.edu/gs_years
  
**List of articles for each year:** "Please provide examples of URLs to pages that provide a list of articles for a given year."
       
    Path: /gs_year/[YYYY], e.g. http://repository.example.edu/gs_year/1850

**Abstract examples:** "Please provide examples of individual abstract pages."
    
    Path: /gs_abstract/[PID], e.g. http://repository.example.edu/gs_abstract/samples:1

## Troubleshooting/Issues

Having problems or solved a problem? Check out the Islandora google groups for a solution.

* [Islandora Group](https://groups.google.com/forum/?hl=en&fromgroups#!forum/islandora)
* [Islandora Dev Group](https://groups.google.com/forum/?hl=en&fromgroups#!forum/islandora-dev)

## Maintainers/Sponsors

Current maintainers:

* [Bryan Brown](https://github.com/bryjbrown)

## Development

If you would like to contribute to this module, please check out our helpful [Documentation for Developers](https://github.com/Islandora/islandora/wiki#wiki-documentation-for-developers) info, as well as our [Developers](http://islandora.ca/developers) section on the Islandora.ca site.

[Metadata for Digital Content (MDC) Developing institution-wide policies and standards with a list of acceptable tags](https://www.loc.gov/standards/mdc/docs/html-metatags.pdf)

## License

[GPLv3](http://www.gnu.org/licenses/gpl-3.0.txt)
