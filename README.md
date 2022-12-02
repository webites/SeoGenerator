# Seo Tags Generator

Basic tags for webpages with subpages.

## Instalation

1. Create in your project folder **/inc** (for example) - for backend files - classes, functions etc
2. Choose your destination for **Render Parts** , can you choose folder **/inc**
3. `gh repo clone webites/SeoGenerator`
4. Create folder with
   - CSS files
   - HTML, PHP templates
5. Config your path in file RenderConfig.php

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

## Not working ?

Check your namespaces and use syntax in files and check again.
You can check package.json too and run `composer update`

## Need a website?

Check [Agencja interatywna Wrocław](https://webites.pl/ "Agencja interatywna Wrocław").
