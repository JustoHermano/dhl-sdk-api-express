<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Packages\RequestedPackages;

use Dhl\Express\Webservice\Soap\Request\Value\AlphaNumeric;

/**
 * The piece identification number.
 *
 * You can request your own Piece ID range from your DHL Express IT consultant and store these locally in your
 * integration however this is not needed as if you leave this tag then DHL will automatically assign the piece ID
 * centrally.
 *
 * If you wish to use this function then the above tag UseOwnPieceIdentificationNumber needs to be set as Y.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PieceIdentificationNumber extends AlphaNumeric
{
    protected const MAX_LENGTH = 35;
}