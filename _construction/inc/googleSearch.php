<div id='cse'>Loading</div>
<script src='//www.google.com/jsapi' type='text/javascript'></script>
<script type='text/javascript'>
  google.load('search', '1', {language: 'pt', style: google.loader.themes.V2_DEFAULT});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var orderByOptions = {};
    orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
    customSearchOptions['enableOrderBy'] = true;
    customSearchOptions['orderByOptions'] = orderByOptions;
    customSearchOptions['overlayResults'] = true;
    var customSearchControl =   new google.search.CustomSearchControl('006816709482629428537:vihdamjis50', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setAutoComplete(true);
    customSearchControl.draw('cse', options);
  }, true);
  setTimeout( function(){
    jQuery(".gsc-input").attr("placeholder", "Busca");
  }
  , 500 );
</script>

<link rel="stylesheet" href="css/gcse.css">