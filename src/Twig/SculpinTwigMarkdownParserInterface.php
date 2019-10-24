<?php

namespace Opdavies\Sculpin\Bundle\TwigMarkdownBundle\Twig;

interface SculpinTwigMarkdownParserInterface
{
    /**
     * Transform markdown text into HTML.
     */
    public function transform($text);
}
