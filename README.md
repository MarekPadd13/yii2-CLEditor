Cleditor Расширение для Yii 2
===========================

CLEditor является открытым исходным кодом jQuery плагин, который обеспечивает легкий, полнофункциональный, кросс-браузер, расширяемый, WYSIWYG HTML редактор, который может быть легко добавлен в любой веб-сайт.


## Установка

Удобнее всего установить это расширение через [composer](http://getcomposer.org/download/).

Либо запустить

```
composer require --prefer-dist markpdd13/cleditor "*"
```

или добавить

```json
"markpdd13/cleditor": "*"
```

в разделе `require` вашего composer.json файла.

## Использование

```php
use markpdd13\cleditor\Cleditor;

//c ActiveForm

 <?= $form->field($model, 'body')->widget(Cleditor::className(), [ 
                       'editorOptions' => ['width' => "700",  
                        "controls"=> // controls to add to the toolbar
                        "bold italic underline strikethrough subscript superscript | font size "] ,
                    ])?>

```

## Полезные ссылки

CLEditor  http://premiumsoftware.net/cleditor

