# Seo Tags Generator

Basic tags for webpages with subpages.

## Instalation

## Usage

If you want to use and generate the Meta Tags create a new instation of class TagsGenerator. Example:

```
$seotags = new TagsGenerator([
    'title' => 'Webinar',
    'desc' => 'Great webinar for your employeers. Check and sign up',
    'keywords' => 'webinar, it',
    'robots' => 'index, follow',
    'language' => 'English',
    'revisit_after' => 5,  // days
    'author' => 'Webinar Guy'
]);
```

For change variable of instation you can:

`$seotags->title = 'Webinar for IT';`

### Save meta tags to variable

`$seocode = $seotags->getTags();`

### Display meta tags

`$seotags->theTags();`
