# TNTSearch Component

## Install
```bash
composer require amb/tntsearch-component
```
## Set Up

In .env
```bash
TNTSEARCH_DRIVER=
TNTSEARCH_HOST=
TNTSEARCH_DATABASE=
TNTSEARCH_USERNAME=
TNTSEARCH_PASSWORD=
TNTSEARCH_STORAGE= #optional, defaults to data/tntsearch
TNTSEARCH_TOKENIZER= #optional
TNTSEARCH_STEMMER=TeamTNT\TNTSearch\Stemmer\PorterStemmer::class #optional
```

In config/config.php
```php
$aggregator = new ConfigAggregator([
    ...
    \AMB\TNTSearch\ConfigProvider::class,
    ...
```
