<?php namespace Indikator\Filemanager;

use System\Classes\PluginBase;
use Backend;
use Event;
use Backend\Models\UserPreferences;

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
                'label' => 'indikator.filemanager::lang.plugin.name',
                'url'   => Backend::url('indikator/filemanager'),
                'icon'  => 'icon-folder-open-o',
                'order' => 50
            ]
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Indikator\Filemanager\ReportWidgets\Basic' => [
                'label'   => 'indikator.filemanager::lang.widget.basic.title',
                'context' => 'dashboard'
            ],
            'Indikator\Filemanager\ReportWidgets\Type' => [
                'label'   => 'indikator.filemanager::lang.widget.type.title',
                'context' => 'dashboard'
            ]
        ];
    }

    public function boot()
    {
        Event::listen('backend.form.extendFields', function($form)
        {
            if ($form->model instanceof Backend\Models\BackendPreferences) {
                $form->addFields([
                    'fm_hide_stat' => [
                        'label'   => 'indikator.filemanager::lang.settings.hide_stat',
                        'tab'     => 'indikator.filemanager::lang.plugin.name',
                        'type'    => 'switch',
                        'span'    => 'left',
                        'default' => 'true'
                    ],
                    'fm_hide_help' => [
                        'label'   => 'indikator.filemanager::lang.settings.hide_help',
                        'tab'     => 'indikator.filemanager::lang.plugin.name',
                        'type'    => 'switch',
                        'span'    => 'right',
                        'default' => 'true'
                    ]
                ]);
            }
        });
    }
}
