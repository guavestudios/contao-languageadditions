# Contao Langugae Additions
This is a utitlity project that helps to fill the gap for multilingual contao projects which use seperate roots for each language.

## Inserttag for a multilingual siteurl
```
{{insert_lang_page_url::sitealias_or_id}}'}}
```
This utitlity helps you to reference a site in Contao (main language) and adapts that link depending on your actual page language.
You can use the ID oder the alias of the siteurl

### Cavecats
- Currently there is only support for DE as the main language to reference with insert_lang_page_url

# LICENSE
This utitlitys are given away under MIT Licence
It is provided in the LICENCE file.
