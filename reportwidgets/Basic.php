<?php namespace Indikator\Filemanager\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

class Basic extends ReportWidgetBase
{
    public function render()
    {
        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'indikator.filemanager::lang.widget.basic.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'folders' => [
                'title'             => 'indikator.filemanager::lang.widget.basic.folders',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'files' => [
                'title'             => 'indikator.filemanager::lang.widget.basic.files',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'size' => [
                'title'             => 'indikator.filemanager::lang.widget.basic.size',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }
}
