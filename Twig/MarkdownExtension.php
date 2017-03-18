<?php

namespace Opdavies\Sculpin\Bundle\TwigMarkdownBundle\Twig;

use Michelf\Markdown;

class MarkdownExtension extends \Twig_Extension
{
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
        // TODO: Inject from the container rather than calling directly.
        return Markdown::defaultTransform($text);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'markdown';
    }
}
