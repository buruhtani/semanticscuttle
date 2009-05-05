<!--following code is generated by templates/bottom.inc.php-->
<div id="bottom">
<?php echo $GLOBALS['footerMessage'].' ';?>
<?php
echo '<a href="'.createURL('about').'">'.T_('About').'</a>';
echo ' - ';
echo T_("Propulsed by ");
echo "<a href=\"https://sourceforge.net/projects/semanticscuttle/\">SemanticScuttle</a>";

if($GLOBALS['enableWebsiteThumbnails']) {
	// Licence to the thumbnails provider (OBLIGATORY IF YOU USE ARTVIPER SERVICE)
	echo " (<a href=\"http://www.artviper.net\" title=\"artViper designstudio\">thumbnails by artViper designstudio</a>)";
}
?>

</div>


<?php if(isset($GLOBALS['googleAnalyticsCode']) && $GLOBALS['googleAnalyticsCode']!= ''):?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("<?php echo $GLOBALS['googleAnalyticsCode']?>");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php endif;?>

</body>
</html>
