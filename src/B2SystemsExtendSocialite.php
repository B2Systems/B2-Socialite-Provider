<?php

namespace B2Systems\B2Socialite;

use SocialiteProviders\Manager\SocialiteWasCalled;

class B2SystemsExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('b2systems', __NAMESPACE__.'\Provider');
    }
}
