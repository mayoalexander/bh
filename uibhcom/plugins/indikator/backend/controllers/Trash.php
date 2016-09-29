<?php namespace Indikator\Backend\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use System\Classes\SettingsManager;
use File;
use DB;
use Indikator\Backend\Models\Trash as Items;
use Flash;
use Lang;
use Redirect;

class Trash extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Indikator.Backend', 'trash');
    }

    public function onSearchItems()
    {
        // Unused database settings
        $sql = DB::table('system_settings')->get();

        foreach ($sql as $row) {
            $name = explode('_', $row->item);

            if ($name[0] != 'backend' && $name[0] != 'system' && isset($name[2]) && !File::exists(base_path().'/plugins/'.$name[0].'/'.$name[1]) && Items::where('path', $row->item)->count() == 0) {
                Items::insertGetId([
                    'type' => 3,
                    'path' => $row->item,
                    'size' => strlen($row->value)
                ]);
            }
        }

        // Trash files and folders
        $trash = [
            // Install
            'README.md' => [1, 1029],
            'install.php' => [1, 7908],
            'install_files' => [2, 365436],
            // Backend
            'modules/backend/assets/css/controls.css' => [1, 128471],
            'modules/backend/assets/font' => [2, 4116420],
            'modules/backend/assets/images/bitmap-icons.png' => [1, 3598],
            'modules/backend/assets/images/flag-icons-large.png' => [1, 163939],
            'modules/backend/assets/images/flag-icons-small.png' => [1, 62845],
            'modules/backend/assets/images/loading-indicator.gif' => [1, 3783],
            'modules/backend/assets/images/loading-indicator.svg' => [1, 1408],
            'modules/backend/assets/images/loading-indicator-transparent.svg' => [1, 1422],
            'modules/backend/assets/images/loading-indicator-white.svg' => [1, 1425],
            'modules/backend/assets/images/primary-tab-shape.png' => [1, 1636],
            'modules/backend/assets/images/tab-link.png' => [1, 188],
            'modules/backend/assets/js/october.alerts.js' => [1, 1649],
            'modules/backend/assets/js/october.balloonselector.js' => [1, 1700],
            'modules/backend/assets/js/october.callout.js' => [1, 2085],
            'modules/backend/assets/js/october.changemonitor.js' => [1, 6051],
            'modules/backend/assets/js/october.chartbar.js' => [1, 4962],
            'modules/backend/assets/js/october.chartline.js' => [1, 7353],
            'modules/backend/assets/js/october.chartpie.js' => [1, 4870],
            'modules/backend/assets/js/october.chartutils.js' => [1, 3184],
            'modules/backend/assets/js/october.controls.js' => [1, 2005],
            'modules/backend/assets/js/october.cursorloadindicator.js' => [1, 2410],
            'modules/backend/assets/js/october.dragscroll.js' => [1, 13004],
            'modules/backend/assets/js/october.dragvalue.js' => [1, 5615],
            'modules/backend/assets/js/october.dropdown.js' => [1, 3286],
            'modules/backend/assets/js/october.flashmessage.js' => [1, 2135],
            'modules/backend/assets/js/october.foundation.baseclass.js' => [1, 2352],
            'modules/backend/assets/js/october.foundation.controlutils.js' => [1, 1470],
            'modules/backend/assets/js/october.foundation.element.js' => [1, 3381],
            'modules/backend/assets/js/october.foundation.event.js' => [1, 2100],
            'modules/backend/assets/js/october.goalmeter.js' => [1, 2003],
            'modules/backend/assets/js/october.hotkey.js' => [1, 6199],
            'modules/backend/assets/js/october.inputpreset.js' => [1, 10550],
            'modules/backend/assets/js/october.inspector.js' => [1, 48319],
            'modules/backend/assets/js/october.loadindicator.js' => [1, 3688],
            'modules/backend/assets/js/october.popover.js' => [1, 13314],
            'modules/backend/assets/js/october.popup.js' => [1, 10407],
            'modules/backend/assets/js/october.rowlink.js' => [1, 2418],
            'modules/backend/assets/js/october.sortable.js' => [1, 28191],
            'modules/backend/assets/js/october.stripeloadindicator.js' => [1, 2592],
            'modules/backend/assets/js/october.tab.js' => [1, 15345],
            'modules/backend/assets/js/october.toolbar.js' => [1, 2696],
            'modules/backend/assets/js/october.tooltip.js' => [1, 349],
            'modules/backend/assets/js/october.triggerapi.js' => [1, 6047],
            'modules/backend/assets/js/october.utils.js' => [1, 5644],
            'modules/backend/assets/js/editorpreferences' => [2, 1523],
            'modules/backend/assets/js/vendor/modernizr.min.js' => [1, 15406],
            'modules/backend/assets/js/vendor/moment.js' => [1, 99200],
            'modules/backend/assets/js/vendor/mousewheel.js' => [1, 7348],
            'modules/backend/assets/js/vendor/raphael.js' => [1, 299814],
            'modules/backend/assets/js/vendor/vendor.js' => [1, 1185],
            'modules/backend/assets/js/vendor/vendor-min.js' => [1, 431448],
            'modules/backend/assets/less/controls.less' => [1, 1204],
            'modules/backend/assets/less/controls/ballooncontrols.less' => [1, 1021],
            'modules/backend/assets/less/controls/breadcrumb.less' => [1, 1353],
            'modules/backend/assets/less/controls/button.less' => [1, 2275],
            'modules/backend/assets/less/controls/callout.less' => [1, 2754],
            'modules/backend/assets/less/controls/charts.less' => [1, 7018],
            'modules/backend/assets/less/controls/dropdown.less' => [1, 6113],
            'modules/backend/assets/less/controls/fancylayout.less' => [1, 17444],
            'modules/backend/assets/less/controls/filters.less' => [1, 4065],
            'modules/backend/assets/less/controls/flashmessage.less' => [1, 1307],
            'modules/backend/assets/less/controls/forms.less' => [1, 16820],
            'modules/backend/assets/less/controls/inspector.less' => [1, 9501],
            'modules/backend/assets/less/controls/lists.less' => [1, 13427],
            'modules/backend/assets/less/controls/loadindicator.less' => [1, 6125],
            'modules/backend/assets/less/controls/pagination.less' => [1, 1009],
            'modules/backend/assets/less/controls/popover.less' => [1, 4703],
            'modules/backend/assets/less/controls/popup.less' => [1, 3046],
            'modules/backend/assets/less/controls/progressbar.less' => [1, 248],
            'modules/backend/assets/less/controls/scoreboard.less' => [1, 1070],
            'modules/backend/assets/less/controls/tab.less' => [1, 11677],
            'modules/backend/assets/less/controls/toolbar.less' => [1, 1975],
            'modules/backend/assets/less/core/bootstrap.less' => [1, 1817],
            'modules/backend/assets/less/core/flags.less' => [1, 11419],
            'modules/backend/assets/less/core/fonts.less' => [1, 7109],
            'modules/backend/assets/less/core/icons.less' => [1, 28403],
            'modules/backend/assets/vendor/flot' => [2, 322112],
            'modules/backend/assets/vendor/jcrop/MIT-LICENSE.txt' => [1, 1103],
            'modules/backend/assets/vendor/jcrop/OCTOBER-README.md' => [1, 165],
            'modules/backend/assets/vendor/jcrop/README.md' => [1, 2253],
            'modules/backend/assets/vendor/mustache' => [2, 5498],
            'modules/backend/assets/vendor/select2' => [2, 295075],
            'modules/backend/assets/vendor/sweet-alert/sweet-alert.html' => [1, 833],
            'modules/backend/formwidgets/datagrid' => [2, 270],
            'modules/backend/formwidgets/colorpicker/assets/vendor/colpick/LICENSE' => [1, 18069],
            'modules/backend/formwidgets/colorpicker/assets/vendor/colpick/README.md' => [1, 1169],
            'modules/backend/formwidgets/datepicker/assets' => [2, 233745],
            'modules/backend/formwidgets/richeditor/assets/vendor/redactor' => [2, 307615],
            // CMS
            'modules/cms/assets/less/css' => [2, 2993],
            // System
            'modules/system/assets/css/settings.css' => [1, 1655],
            'modules/system/assets/css/updates.css' => [1, 926],
            'modules/system/assets/font' => [2, 352990],
            'modules/system/assets/less/settings.less' => [1, 1874],
            'modules/system/assets/less/updates.less' => [1, 987],
            'modules/system/assets/vendor/bootstrap' => [2, 149549],
            'modules/system/assets/vendor/font-autumn' => [2, 803504],
            'modules/system/assets/vendor/syntaxhighlighter/LGPL-LICENSE' => [1, 7638],
            'modules/system/assets/vendor/syntaxhighlighter/MIT-LICENSE' => [1, 1061],
            // Plugins
            'plugins/anandpatel/wysiwygeditors/routes.php' => [1, 2406],
            'plugins/anandpatel/wysiwygeditors/config' => [2, 2262],
            'plugins/anandpatel/wysiwygeditors/formwidgets/editor/assets/froala' => [2, 1498642],
            'plugins/anandpatel/wysiwygeditors/formwidgets/editor/partials/_froala.htm' => [1, 9707],
            'plugins/anandpatel/wysiwygeditors/resources' => [2, 1183925],
            'plugins/anandpatel/wysiwygeditors/src' => [2, 11669],
            'plugins/indikator/backend/assets/css/media-menu.css' => [1, 57],  
            'plugins/indikator/backend/assets/css/media-menu-pages.css' => [1, 57], 
            'plugins/indikator/backend/assets/js/media-menu.js' => [1, 85],
            'plugins/indikator/backend/partials' => [2, 2740],
            'plugins/indikator/login/assets/css' => [2, 113000],
            'plugins/martin/adminer/classes/adminer-en.php' => [1, 289371],
            'plugins/martin/adminer/classes/adminer-4.2.4-en.php' => [1, 289386],
            'plugins/renatio/dynamicpdf/.gitignore' => [1, 45],
            'plugins/renatio/dynamicpdf/config' => [2, 11074],
            'plugins/renatio/dynamicpdf/controllers/PDFLayouts.php' => [1, 1174],
            'plugins/renatio/dynamicpdf/controllers/PDFTemplates.php' => [1, 1322],
            'plugins/renatio/dynamicpdf/controllers/pdflayouts' => [2, 6141],
            'plugins/renatio/dynamicpdf/controllers/pdftemplates' => [2, 6243],
            'plugins/renatio/dynamicpdf/models/PDFLayout.php' => [1, 2439],
            'plugins/renatio/dynamicpdf/models/PDFTemplate.php' => [1, 2841],
            'plugins/renatio/dynamicpdf/models/pdflayout' => [2, 2049],
            'plugins/renatio/dynamicpdf/models/pdftemplate' => [2, 1689],
            'plugins/renatio/dynamicpdf/src' => [2, 9818]
        ];

        foreach ($trash as $path => $data) {
            if (File::exists(base_path().'/'.$path) && Items::where('path', '/'.$path)->count() == 0) {
                Items::insertGetId([
                    'type' => $data[0],
                    'path' => '/'.$path,
                    'size' => $data[1]
                ]);
            }
        }

        // Plugins empty folder
        if ($folders = opendir('plugins')) {
            while (false !== ($folder = readdir($folders))) {
                if ($folder != '.' && $folder != '..' && count(File::allFiles(base_path().'/plugins/'.$folder)) == 0 && Items::where('path', '/plugins/'.$folder)->count() == 0) {
                    Items::insertGetId([
                        'type' => 2,
                        'path' => '/plugins/'.$folder,
                        'size' => 0
                    ]);
                }
            }

            closedir($folders);
        }

        // Trash vendor files
        $this->scanVendor();

        // Flash message
        if (Items::count() > 0) {
            Flash::success(Lang::get('indikator.backend::lang.trash.success'));

            return Redirect::refresh();
        }
        else {
            Flash::success(Lang::get('indikator.backend::lang.trash.no_items'));
        }
    }

    public function scanVendor($folder = 'vendor', $deph = 0)
    {
        // Improve speed
        if ($deph == 6) {
            return;
        }

        // Actual folder
        $elements = scandir(base_path().'/'.$folder);

        // Scan folder
        foreach ($elements as $element) {
            if ($element != '.' && $element != '..') {
                // Folder
                if (filetype($folder.'/'.$element) == 'dir') {
                    $this->scanVendor($folder.'/'.$element, $deph + 1);
                }

                // File
                else if ((substr_count($element, 'LICENSE') == 1 || substr_count($element, 'README') == 1 || substr_count($element, 'CHANGELOG') == 1) && Items::where('path', '/'.$folder.'/'.$element)->count() == 0) {
                    Items::insertGetId([
                        'type' => 1,
                        'path' => '/'.$folder.'/'.$element,
                        'size' => File::size(base_path().'/'.$folder.'/'.$element)
                    ]);
                }
            }
        }

        return;
    }

    public function onRemoveItems()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (Items::where('id', $objectId)->count() == 1) {
                    $item = Items::where('id', $objectId)->first();
                    // File
                    if ($item->type == 1) {
                        File::delete(base_path().$item->path);
                    }

                    // Folder
                    else if ($item->type == 2) {
                        File::deleteDirectory(base_path().$item->path);
                    }

                    // Database
                    else if ($item->type == 3) {
                        DB::table('system_settings')->where('item', $item->path)->delete();
                    }

                    Items::where('id', $objectId)->delete();
                }
            }

            Flash::success(Lang::get('indikator.backend::lang.trash.remove'));
        }

        return Redirect::refresh();
    }

    public function onRemoveAllItems()
    {
        $sql = Items::get();

        foreach ($sql as $item) {
            // File
            if ($item->type == 1) {
                File::delete(base_path().$item->path);
            }

            // Folder
            else if ($item->type == 2) {
                File::deleteDirectory(base_path().$item->path);
            }

            // Database
            else if ($item->type == 3) {
                DB::table('system_settings')->where('item', $item->path)->delete();
            }

            Items::where('id', $item->id)->delete();
        }

        Flash::success(Lang::get('indikator.backend::lang.trash.remove'));

        return Redirect::refresh();
    }
}