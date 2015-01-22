<?php namespace Indikator\Filemanager;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'indikator.filemanager::lang.plugin.name',
            'description' => 'indikator.filemanager::lang.plugin.description',
            'author'      => 'indikator.filemanager::lang.plugin.author',
            'icon'        => 'icon-folder-open-o',
            'homepage'    => 'https://github.com/gergo85/oc-file-manager'
        ];
    }

    public function registerNavigation()
    {
        return [
            'pages' => [
                'label'       => 'indikator.filemanager::lang.plugin.name',
                'url'         => Backend::url('indikator/filemanager'),
                'icon'        => 'icon-folder-open-o',
                'order'       => 15
            ]
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Indikator\Filemanager\ReportWidgets\Basic' => [
                'label'   => 'indikator.filemanager::lang.widget.basic.label',
                'context' => 'dashboard'
            ],
            'Indikator\Filemanager\ReportWidgets\Type' => [
                'label'   => 'indikator.filemanager::lang.widget.type.label',
                'context' => 'dashboard'
            ]
        ];
    }
}
