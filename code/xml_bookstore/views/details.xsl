<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output omit-xml-declaration="yes" indent="yes"/>

<xsl:param name="ISBN_request" select="''" />

<xsl:template match="record">
	<header>
			<h5><a href="categories.php?category={Category/text()}">Category: <xsl:value-of select="Category/text()" /></a></h5>
			<h1><xsl:value-of select="Title/text()" /></h1>
			<figure><img src="{Coverpic/text()}" class="book_image" alt="book cover" /></figure>
			<h4>by <xsl:value-of select="au_lastname/text()" />, <xsl:value-of select="au_firstname/text()" /></h4>
	</header>
	<content><xsl:value-of select="Description/text()" /></content>

	<footer><dl><dd class="price">$<xsl:value-of select="Price/text()" /></dd><dd class="isbn">ISBN: <xsl:value-of select="ISBN/text()" /></dd></dl></footer>
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
			<li class="nav_deselected"><a href="index.php">All Books</a></li>
			<li class="nav_deselected"><a href="categories.php">Browse by Category</a></li>
		</ul>
	</nav>
	<main>
		<xsl:apply-templates select="root/record[ISBN/text() = $ISBN_request]" />
	</main>

</body>
</html>

</xsl:template>






</xsl:stylesheet>	