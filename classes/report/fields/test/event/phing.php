<?php

namespace mageekguy\atoum\report\fields\test\event;

use mageekguy\atoum;
use mageekguy\atoum\report;

class phing extends report\fields\test\event\cli
{
    public function __toString()
    {
        switch ($this->event) {
            case atoum\test::runStart:
                return '[';

            case atoum\test::runStop:
                 return '] ';

            case atoum\test::success:
                 return 'S';

            case atoum\test::void:
                 return '0';

            case atoum\test::incompleted:
                 return 'U';

            case atoum\test::fail:
                 return 'F';

            case atoum\test::error:
                 return 'e';

            case atoum\test::exception:
                 return 'E';

            default:
                 return '';
        }
    }
}
