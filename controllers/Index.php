<?php namespace Indikator\Filemanager\Controllers;

use Backend\Classes\Controller;
use Backend\Models\UserPreferences;
use System\Classes\PluginManager;
use BackendMenu;
use File;

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

        if (PluginManager::instance()->hasPlugin('AnandPatel.WysiwygEditors')) {
            $this->addCss('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css');
            $this->addCss('/plugins/anandpatel/wysiwygeditors/resources/assets/css/elfinder.min.css');
            $this->addCss('/plugins/anandpatel/wysiwygeditors/resources/assets/css/theme.css');

            $this->addJs('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js');
            $this->addJs('/plugins/anandpatel/wysiwygeditors/resources/assets/js/elfinder.min.js');

            if ($preferences['locale'] != 'en' && File::exists('plugins/anandpatel/wysiwygeditors/resources/assets/js/i18n/elfinder.'.$preferences['locale'].'.js')) {
                $this->addJs('/plugins/anandpatel/wysiwygeditors/resources/assets/js/i18n/elfinder.'.$preferences['locale'].'.js');
            }
        }

        BackendMenu::setContext('Indikator.Filemanager', 'pages');
    }

    public function fmStat($folder = 'storage/app')
    {
        if (!File::exists($folder)) {
            File::makeDirectory($folder, 0775, true);
        }

        $attr['size'] = $attr['files'] = $attr['folders'] = 0;
        $attr['audio'] = $attr['archive'] = $attr['code'] = $attr['doc'] = $attr['image'] = $attr['other'] = $attr['prezi'] = $attr['table'] = $attr['text'] = $attr['video'] = 0;
        $elementents = scandir($folder);

        foreach ($elementents as $element) {
            if ($element != '.' && $element != '..' && $element != '.quarantine' && $element != '.tmb') {
                if (File::type($folder.'/'.$element) == 'dir') {
                    $value = $this->fmStat($folder.'/'.$element);
                    $attr['size'] += $value['size'];
                    $attr['files'] += $value['files'];
                    $attr['folders'] += $value['folders'] + 1;
                    $attr['audio'] += $value['audio'];
                    $attr['archive'] += $value['archive'];
                    $attr['code'] += $value['code'];
                    $attr['doc'] += $value['doc'];
                    $attr['image'] += $value['image'];
                    $attr['prezi'] += $value['prezi'];
                    $attr['table'] += $value['table'];
                    $attr['text'] += $value['text'];
                    $attr['video'] += $value['video'];
                }

                else {
                    $attr['size'] += File::size($folder.'/'.$element);
                    $attr['files']++;
                    $attr[$this->fmType(substr(strrchr($element, '.'), 1))]++;
                }
            }
        }

        return $attr;
    }

    public function fmSize($size = 0, $sizename = false)
    {
        if ($size > 0) {
            $name = ['B', 'KB', 'MB', 'GB', 'TB'];
            $common = ['au', 'bn', 'bw', 'ch', 'cn', 'do', 'eg', 'gt', 'hk', 'hn', 'ie', 'il', 'in', 'jp', 'ke', 'kp', 'kr', 'lb', 'lk', 'mn', 'mo', 'mt', 'mx', 'my', 'ng', 'ni', 'np', 'nz', 'pa', 'ph', 'pk', 'sg', 'th', 'tw', 'tz', 'ug', 'uk', 'us', 'zw'];

            for ($i = 0; $size >= 1024; $i++) {
                $size /= 1024;

                if ($i < 1) {
                    $size = round($size, 0);
                }
                else {
                    $size = round($size, 1);
                }
            }

            global $preferences;

            if (!in_array($preferences['locale'], $common)) {
                $size = str_replace('.', ',', $size);
            }

            if ($sizename) {
                $size = $name[$i];
            }

            return $size;
        }

        if ($sizename) {
            $size = 'B';
        }
        else {
            $size = 0;
        }

        return $size;
    }

    public function fmType($extension = 'txt')
    {
        $types = [
            'audio'   => ['aac', 'ac3',  'aif',  'm3a',  'm4a',  'm4b',  'mka',  'mp1', 'mp2',  'mp3',  'ogg', 'oga', 'ram', 'wav', 'wma'],
            'archive' => ['bz2', 'cab',  'gz',   'rar',  'tar',  'tgz',  'zip',  '7z'],
            'code'    => ['css', 'htm',  'html', 'php',  'js',   'c',    'c++'],
            'doc'     => ['doc', 'docx', 'docm', 'dotm', 'odt',  'pdf',  'rtf',  'wp',  'wpd'],
            'image'   => ['bmp', 'gif',  'ico',  'jpg',  'jpeg', 'png',  'psd',  'raw', 'tif',  'tiff'],
            'prezi'   => ['ppt', 'pptx', 'pptm', 'pps',  'ppsx', 'ppsm', 'sldx', 'sldm'],
            'table'   => ['ods', 'xls',  'xlsx', 'xlsm', 'xlsb'],
            'text'    => ['asc', 'csv',  'tsv',  'txt',  'xml'],
            'video'   => ['avi', 'divx', 'dv',   'flv',  'm4v',  'mkv',  'mov',  'mp4', 'mpeg', 'mpg',  'qt',  'rm',  'swf', 'vob', 'wmv']
        ];

        foreach ($types as $type => $extensions) {
            if (in_array($extension, $extensions)) {
                return $type;
            }
        }

        return 'other';
    }
}
