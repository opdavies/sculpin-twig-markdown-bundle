<?php

namespace Opdavies\Sculpin\Bundle\TwigMarkdownBundle\Twig;

use Michelf\Markdown;

class MarkdownParser implements SculpinTwigMarkdownParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function transform($text)
    {
        return Markdown::defaultTransform($text);
    }
}
