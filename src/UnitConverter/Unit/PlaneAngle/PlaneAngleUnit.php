<?php

/**
 * This file is part of the jordanbrauer/unit-converter PHP package.
 *
 * @copyright 2017 Jordan Brauer <jbrauer.inc@gmail.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UnitConverter\Unit\PlaneAngle;

use UnitConverter\Measure;
use UnitConverter\Unit\{ AbstractUnit, UnitInterface };

/**
 * Plane Angle unit base data class. Any new plane angle units should
 * extend this class and implement their name, symbol and units;
 * overriding the $unitOf and $base properties only if necessary.
 *
 * @version 1.0.0
 * @since 1.0.0
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */
abstract class PlaneAngleUnit extends AbstractUnit
{
  protected $unitOf = Measure::PLANE_ANGLE;

  protected $base = Degree::class;
}
