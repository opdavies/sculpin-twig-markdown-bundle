# Switching the Markdown Parser

1. Require your new parser via Composer. For example:
    ```
    composer require league/commonmark
    ```

1. Add values for autoloading classes in your `composer.json` file.
    ```
    "autoload": {
        "psr-4": {
            "App\\": "app/src"
        }
    }
    ```

1. Add a new class that implements `SculpinTwigMarkdownParserInterface`, and add a `transform` method to convert the markdown string into HTML. Mine is located at `app/src/Markdown/CommonMarkMarkdownParser.php`.

1. Within `app/config/sculpin_kernel.yml` override the `twig.markdown.parser.class` parameter and specify the fully-qualified class name for the new parser.
    ```
    parameters:
        twig.markdown.parser.class: 'App\Markdown\CommonMarkMarkdownParser'
    ```

For an example of this, see the [opdavies/sculpin-twig-markdown-bundle-example][] repository.

[opdavies/sculpin-twig-markdown-bundle-example]: https://github.com/opdavies/sculpin-twig-markdown-bundle-example/tree/swap-markdown-parser
