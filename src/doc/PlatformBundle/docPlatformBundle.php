<?php

namespace doc\PlatformBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class docPlatformBundle extends Bundle
{
    public function getParent(){
        return "FOSUserBundle";
    }
}
