<script id="categories-template" type="text/x-handlebars-template">
{{#each this}}
	<li id="app-category-{{id}}" data-category-id="{{id}}"><a>{{displayName}}</a></li>
{{/each}}
</script>

<!--"id":"154637",-->
<!--"name":"Journal",-->
<!--"label":"",-->
<!--"version":"0.4.1",-->
<!--"type":"921",-->
<!--"typename":"ownCloud PIM",-->
<!--"personid":"tanghus",-->
<!--"license":"AGPL",-->
<!--"detailpage":"http:\/\/apps.owncloud.com\/content\/show.php?content=154637",-->
<!--"preview":"http:\/\/apps.owncloud.com\/CONTENT\/content-m1\/m154637-1.png",-->
<!--"changed":1396614538,-->
<!--"description":"Journal\/Notes app for ownCloud\r\n\r\n- Saves notes\/journal entries as VJOURNAL records in the ownCloud Calendar.\r\n\r\n- Integrates with ownClouds search backend.\r\n\r\n- Sort entries by date\/time ascending\/descending or summary ascending\/descending.\r\n\r\n- Filter entries by timerange.\r\n\r\n- When switching from text to html the text is parsed as MarkDown and vice-versa.\r\n\r\n- Plain text or rich text editing (rich text editing is still buggy and immature).\r\n\r\n- Syncs with KDEPIMs Journal part.\r\n\r\n- Share Journal entries with other users or groups.\r\n\r\n- Completed tasks from the Task app can be automatically added as journal entries.\r\n\r\n- Stores entry data as json objects in each element for quick access and to minimize ajax calls.\r\n\r\nTo install this app you will first have to install the TAL Page Templates for ownCloud fromhttp:\/\/apps.owncloud.com\/content\/show.php\/?content=154632\r\nYou will also need to have the shipped Calendar app enabled, and at least one calendar enabled to store your Journal entries in.\r\n\r\nNOTE: This version works with both ownCloud 5 and 6.\r\n\r\nPlease report issues and feature requests at https:\/\/github.com\/tanghus\/journal\/issues",-->
<!--"score":"<img src=\"\/owncloud\/master\/core\/img\/rating\/s8.png\"> Score: 69%",-->
<!--"author":"tanghus",-->
<!--"ocs_id":"154637",-->
<!--"active":0,-->
<!--"internal":0,-->
<!--"update":false,-->
<!--"groups":false,-->
<!--"removable":false,-->
<!--"internallabel":"3rd Party",-->
<!--"internalclass":"externalapp"},-->


<script id="app-template" type="text/x-handlebars">
	<div class="section" id="app-{{id}}">
	<div>
		<img src="{{preview}}"></img>
	</div>
	<h2>{{name}}</h2>
	<div>{{version}}</div>
	<div>{{author}}</div>
	<div>{{license}}</div>
	<div>{{detailpage}}</div>
	<div><pre>{{description}}</pre></div>
	<div>{{changed}}</div>
	<div>{{{score}}}</div>
	</div>
</script>

<div id="app-navigation" class="icon-loading">
	<ul id="apps-categories">

	</ul>
</div>
<div id="app-content" class="icon-loading">
</div>
