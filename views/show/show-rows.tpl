{* Smarty *}
{use class="yii\helpers\Html"}
{use class="yii\widgets\LinkPager"}
<script src="./js/test-script.js"></script>
<ul>
{foreach from=$table item=row}
    <li>{Html::encode("{$row->email} ({$row->imie})")}</li>
{/foreach}
</ul>

{LinkPager::widget(['pagination' => $pagination])}
Hello {'Jan'}, welcome to Smarty!
{*<script type="text/javascript" src = "{$theme_dir}/js/test-script.js" ></script>*}
<div id="testingConnectSmartyWithCssDivKoks" onclick="func()"></div>