<ol class="breadcrumb">
	<li><a href="{$base_url}'assessment/index">Beranda</a></li>
    {foreach from=$breadcrumbs item=nav}
    	<li><a href="{$nav.url}">{$nav.text}</a></li>
    {/foreach}
</ol>