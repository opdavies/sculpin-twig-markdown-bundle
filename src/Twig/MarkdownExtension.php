<?php

namespace Opdavies\Sculpin\Bundle\TwigMarkdownBundle\Twig;

class MarkdownExtension extends \Twig_Extension
{
    /** @var SculpinTwigMarkdownParserInterface */
    private $parser;

    public function __construct(SculpinTwigMarkdownParserInterface $parser)
    {
        $this->parser = $parser;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('markdown', [$this, 'markdown'], [
                'is_safe' => ['html']
            ]),
        ];
    }

    /**
     * Parse the string for markdown content.
     *
     * @param string $text The original text.
     *
     * @return string
     */
    public function markdown($text)
    {
        return $this->parser->transform($text);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'markdown';
    }
}
