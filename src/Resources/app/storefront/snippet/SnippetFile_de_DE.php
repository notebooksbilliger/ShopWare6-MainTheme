<?php declare(strict_types=1);

namespace MainTheme\Resources\app\storefront\snippet;

use Shopware\Core\System\Snippet\Files\SnippetFileInterface;

/**
 * @SuppressWarnings(PHPMD.CamelCaseClassName)
 */
class SnippetFile_de_DE implements SnippetFileInterface
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
        return 'Bamiz Sp. z o.o.';
    }

    public function isBase(): bool
    {
        return false;
    }
}
