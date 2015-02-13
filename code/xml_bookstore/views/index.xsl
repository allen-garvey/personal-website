<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output omit-xml-declaration="yes" indent="yes"/>

<xsl:param name="sort_selector" select="'Title'" />

<xsl:template match="record">
	<tr>
			<td><a href="details.php?ISBN={ISBN/text()}"><xsl:value-of select="Title/text()" /></a></td>
			<td><xsl:value-of select="Category/text()" /></td>
			<td>$<xsl:value-of select="Price/text()" /></td>
			<td><xsl:value-of select="au_lastname/text()" />, <xsl:value-of select="au_firstname/text()" /></td>
		</tr>
</xsl:template>


<xsl:template match="/">
	<xsl:text disable-output-escaping='yes'>&lt;!DOCTYPE html></xsl:text>
	<html>
		<head>
	<title>The XML Bookstore</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="styles/style.css" />

</head>
<body>
	<nav>
		<ul>
			<li class="nav_selected"><a href="index.php">All Books</a></li>
			<li class="nav_deselected"><a href="categories.php">Browse by Category</a></li>
		</ul>
	</nav>
	<main>
		<table>
			<tr>
				<th><a href="index.php?sort=Title">Title</a></th>
				<th><a href="index.php?sort=Category">Category</a></th>
				<th><a href="index.php?sort=Price">Price</a></th>
				<th><a href="index.php?sort=au_lastname">Author</a></th>
			</tr>
		
		<xsl:apply-templates select="root/record">
			<xsl:sort select="*[name()=$sort_selector]" />
		</xsl:apply-templates>
		
		</table>

	</main>

</body>
</html>

</xsl:template>






</xsl:stylesheet>	