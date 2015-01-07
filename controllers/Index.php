<?php namespace Indikator\Filemanager\Controllers;

use Backend\Classes\Controller;
use Backend\Models\UserPreferences;
use System\Classes\PluginManager;

class Index extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        $preferences = UserPreferences::forUser()->get('backend::backend.preferences');

        if (PluginManager::instance()->hasPlugin('AnandPatel.WysiwygEditors'))
        {
            $this->addCss('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css');
            $this->addCss('/plugins/anandpatel/wysiwygeditors/public/css/elfinder.min.css');
            $this->addCss('/plugins/anandpatel/wysiwygeditors/public/css/theme.css');

            $this->addJs('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js');
            $this->addJs('/plugins/anandpatel/wysiwygeditors/public/js/elfinder.min.js');

            if ($preferences['locale'] != 'en' && is_file('plugins/anandpatel/wysiwygeditors/public/js/i18n/elfinder.'.$preferences['locale'].'.js'))
            {
                $this->addJs('/plugins/anandpatel/wysiwygeditors/public/js/i18n/elfinder.'.$preferences['locale'].'.js');
            }
        }
    }
}
