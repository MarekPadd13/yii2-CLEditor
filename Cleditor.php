<?php
namespace markpdd13\cleditor;

use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;

class Cleditor extends InputWidget
{
    public $editorOptions =[];
    
    public function run()
    {  
        Assets::register($this->getView());
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        $js = "$(document).ready(function () {";
        $js .= "$('#".$this->options["id"]."').cleditor(";
        $js .= empty($this->editorOptions) ? '' : Json::encode($this->editorOptions);
        $js .= ");";
        $js .= "});";
        $this->getView()->registerJs($js, View::POS_END);
    }
}
