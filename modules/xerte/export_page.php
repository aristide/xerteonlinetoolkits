<?PHP

	_load_language_file("/modules/xerte/export_page.inc");

	echo "<p>" . XERTE_EXPORT_DESCRIPTION . "</p>";
    echo "<ol type='1'>";
    echo "<li>" . XERTE_EXPORT_ZIP . "<ul><li><a href='" . $xerte_toolkits_site->site_url . url_return("export" , $_POST['template_id']) . "'>" . XERTE_EXPORT_ZIP_LINK . "</a></li></li><br />";
    echo "<li>" . XERTE_EXPORT_SCORM . "<ol type='a'><li><a href='" . $xerte_toolkits_site->site_url . url_return("scorm_rich" , $_POST['template_id']) . "'>" . XERTE_EXPORT_SCORM_12_LINK . "</a></li><br/><li><a href='" . $xerte_toolkits_site->site_url . url_return("scorm2004" , $_POST['template_id']) . "'>" . XERTE_EXPORT_SCORM_2004_LINK . "</a></li><br /></ol></li>";
    echo "<li>" . XERTE_EXPORT_ZIP_ARCHIVE . "<ul><li><a href='" . $xerte_toolkits_site->site_url . url_return("export_full" , $_POST['template_id']) . "'>" . XERTE_EXPORT_ZIP_ARCHIVE_LINK . "</a></li><br /></li>";
    echo "</ol>";

?>