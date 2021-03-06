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

namespace UnitConverter;

/**
 * A static class containing constants that define the available
 * default types of measurement.
 *
 * @version 1.0.0
 * @since 1.0.0
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */
class Measure
{
  const LENGTH = "length";

  const AREA = "area";

  const VOLUME = "volume";

  const MASS = "mass";

  const SPEED = "speed";

  const PLANE_ANGLE = "plane_angle";

  const TEMPERATURE = "temperature";

  const PRESSURE = "pressure";

  const TIME = "time";

  const ENERGY = "energy";
}
