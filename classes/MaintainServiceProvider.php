<?php

namespace Ecjia\App\Maintain;

use RC_Service;
use Royalcms\Component\App\AppParentServiceProvider;

class MaintainServiceProvider extends  AppParentServiceProvider
{
    
    public function boot()
    {
        $this->package('ecjia/app-maintain');
    }
    
    public function register()
    {
        $this->registerAppService();
    }

    protected function registerAppService()
    {
        RC_Service::addService('admin_purview', 'maintain', 'Ecjia\App\Maintain\Services\AdminPurviewService');
        RC_Service::addService('tool_menu', 'maintain', 'Ecjia\App\Maintain\Services\ToolMenuService');
    }
    
}