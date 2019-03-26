<?php
namespace markpdd13\cleditor;


use yii\web\AssetBundle;

class Assets extends AssetBundle{
	public $sourcePath = '@markpdd13/cleditor/assets';
    public $js = [
    	'jquery.cleditor.min.js', 
    ];
    public $css = [
    	"jquery.cleditor.css",
    ];
	public $depends = [
	    'yii\web\YiiAsset',
	];
}
?>