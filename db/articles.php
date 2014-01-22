<?
include 'header.php';
?>
<div id="main">
<div id="title">
50th Anniversary Articles
</div>
<?
$xml = simplexml_load_file("js/xml/articles.xml");
$num = date('n')-1;
echo $xml->article[$num];
?>
</div>
<?
include 'footer.php';
?>