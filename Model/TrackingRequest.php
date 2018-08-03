<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Request\Tracking\MessageInterface;
use Dhl\Express\Api\Data\TrackingRequestInterface;

/**
 * TrackingRequest Interface.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingRequest implements TrackingRequestInterface
{
    /**
     * @var MessageInterface
     */
    private $message;

    /**
     * @var string[]
     */
    private $awbNumber;

    /**
     * @var string
     */
    private $levelOfDetails;

    /**
     * @var string
     */
    private $piecesEnabled;

    /**
     * TrackingRequest constructor.
     * @param MessageInterface $message
     * @param string[] $awbNumber
     * @param string $levelOfDetails
     * @param string $piecesEnabled
     */
    public function __construct(MessageInterface $message, array $awbNumber, string $levelOfDetails, string $piecesEnabled)
    {
        $this->message = $message;
        $this->awbNumber = $awbNumber;
        $this->levelOfDetails = $levelOfDetails;
        $this->piecesEnabled = $piecesEnabled;
    }

    public function getMessage(): MessageInterface
    {
        return $this->message;
    }

    public function getAwbNumber(): array
    {
        return $this->awbNumber;
    }

    public function getLevelOfDetails(): string
    {
        return $this->levelOfDetails;
    }

    public function getPiecesEnabled(): string
    {
        return $this->piecesEnabled;
    }
}