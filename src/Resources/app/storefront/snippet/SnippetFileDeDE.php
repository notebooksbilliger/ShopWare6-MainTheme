<?php

declare(strict_types=1);

namespace MainTheme\Resources\app\storefront\snippet;

use Shopware\Core\System\Snippet\Files\SnippetFileInterface;

class SnippetFileDeDE implements SnippetFileInterface
{
    public function getName(): string
    {
        return 'storefront.de-DE';
    }

    public function getPath(): string
    {
        return __DIR__ . '/storefront.de-DE.json';
    }

    public function getIso(): string
    {
        return 'de-DE';
    }

    public function getAuthor(): string
    {
        return 'notebooksbilliger.de AG';
    }

    public function isBase(): bool
    {
        return false;
    }
}
