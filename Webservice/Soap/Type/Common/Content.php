<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The package content.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Content implements ValueInterface
{
    /**
     * Documents.
     *
     * @var string
     */
    public const DOCUMENTS  = 'DOCUMENTS';

    /**
     * Non documents.
     *
     * @var string
     */
    public const NON_DOCUMENTS = 'NON_DOCUMENTS';

    /**
     * The content.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($value = self::DOCUMENTS)
    {
        if (!\in_array($value, [self::DOCUMENTS, self::NON_DOCUMENTS], true)) {
            throw new \InvalidArgumentException('Argument must be either "DOCUMENTS" or "NON_DOCUMENTS"');
        }

        $this->value = $value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}
