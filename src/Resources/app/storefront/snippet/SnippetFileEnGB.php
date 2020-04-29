<?php

declare(strict_types=1);

namespace MainTheme\Resources\app\storefront\snippet;

use Shopware\Core\System\Snippet\Files\SnippetFileInterface;

class SnippetFileEnGB implements SnippetFileInterface
{
    public function getName(): string
    {
        return 'storefront.en-GB';
    }

    public function getPath(): string
    {
        return __DIR__ . '/storefront.en-GB.json';
    }

    public function getIso(): string
    {
        return 'en-GB';
    }

    public function getAuthor(): string
    {
        return 'Bamiz Sp. z o.o.';
    }

    public function isBase(): bool
    {
        return false;
    }
}
