<?php namespace Indikator\Filemanager\Models;

use Model;

class Index extends Model
{
    public $implement = ['Backend.Behaviors.UserPreferencesModel'];
    public $settingsCode = 'backend::backend.preferences';
    public $settingsFields = 'fields.yaml';
}
