<?php namespace Indikator\Filemanager\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

class Type extends ReportWidgetBase
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
                'default'           => 'indikator.filemanager::lang.widget.type.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'audio' => [
                'title'             => 'indikator.filemanager::lang.widget.type.audio',
                'default'           => false,
                'type'              => 'checkbox'
            ],
            'archive' => [
                'title'             => 'indikator.filemanager::lang.widget.type.archive',
                'default'           => false,
                'type'              => 'checkbox'
            ],
            'code' => [
                'title'             => 'indikator.filemanager::lang.widget.type.code',
                'default'           => false,
                'type'              => 'checkbox'
            ],
            'doc' => [
                'title'             => 'indikator.filemanager::lang.widget.type.doc',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'image' => [
                'title'             => 'indikator.filemanager::lang.widget.type.image',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'other' => [
                'title'             => 'indikator.filemanager::lang.widget.type.other',
                'default'           => false,
                'type'              => 'checkbox'
            ],
            'prezi' => [
                'title'             => 'indikator.filemanager::lang.widget.type.prezi',
                'default'           => false,
                'type'              => 'checkbox'
            ],
            'table' => [
                'title'             => 'indikator.filemanager::lang.widget.type.table',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'text' => [
                'title'             => 'indikator.filemanager::lang.widget.type.text',
                'default'           => true,
                'type'              => 'checkbox'
            ],
            'video' => [
                'title'             => 'indikator.filemanager::lang.widget.type.video',
                'default'           => true,
                'type'              => 'checkbox'
            ]
        ];
    }
}
