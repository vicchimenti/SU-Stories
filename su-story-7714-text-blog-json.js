try {
  //Defining main functions
  function processTags(t4Tag) {
    myContent = content || null;
    return String(com.terminalfour.publish.utils.BrokerUtils.processT4Tags(dbStatement, publishCache, section, myContent, language, isPreview, t4Tag));
  }

  function getLayout(contentLayout) {
    var tid = content.getContentTypeID();
    formatter = contentLayout;
    format = publishCache.getTemplateFormatting(dbStatement, tid, formatter);
    formatString = format.getFormatting();
    return processTags(formatString);
  }

  var list = {};

  list['title'] = processTags('<t4 type="content" name="SU Story Title" output="normal" modifiers="striptags,htmlentities" />').replace(/&/gi,'&amp;');
   list['articleTitle'] = processTags('<t4 type="content" name="SU Story Title" output="normal" modifiers="striptags,htmlentities" />').replace(/&/gi,'&amp;');
  list['articleSubhead'] = processTags('<t4 type="content" name="SU Story Description" output="normal" modifiers="striptags,htmlentities" />').replace(/&/gi,'&amp;');
  list['author'] = processTags('<t4 type="content" name="Author Name" output="normal" modifiers="striptags,htmlentities" />').replace(/&/gi,'&amp;');
  list['publishDate'] = processTags('<t4 type="content" name="Publish Date" output="normal" date_format="yyyy-MM-dd-HH:MM:ss" />');
  list['publishDateText'] = processTags('<t4 type="content" name="Publish Date" output="normal" date_format="MMMM d, yyyy" />');
  list['image'] = processTags('<t4 type="content" name="Story Image" output="normal" formatter="v10/image/pxl-crop" cdn="true" pxl-filter-id="64" />');
  list['url'] = processTags('<t4 type="content" name="SU Story Title" output="fulltext" use-element="true" filename-element="SU Story Title" modifiers="striptags,htmlentities" />');
  var jsonObj = new org.json.JSONObject(list);
  document.write(jsonObj.toString() + ',');

} catch (err) {
  document.write(err);
}