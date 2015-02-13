<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output omit-xml-declaration="yes" indent="yes"/>

<xsl:param name="category_request" select="''" />
<xsl:param name="sort_selector" select="'Title'" />

<xsl:key name="categories" match="root/record" use="Category" />
<xsl:variable name="categories_list" select="root/record[generate-id()=generate-id(key('categories',Category)[1])]"/>


<xsl:template match="record">
	<tr>
			<td><a href="details.php?ISBN={ISBN/text()}"><xsl:value-of select="Title/text()" /></a></td>
			<td><xsl:value-of select="Category/text()" /></td>
			<td>$<xsl:value-of select="Price/text()" /></td>
			<td><xsl:value-of select="au_lastname/text()" />, <xsl:value-of select="au_firstname/text()" /></td>
		</tr>
</xsl:template>

<xsl:template match="record" mode="selection_list" >
	<xsl:choose>
		<xsl:when test="Category/text() = $category_request">
			<option selected="selected"><xsl:value-of select="Category/text()" /></option>
		</xsl:when>
		<xsl:otherwise>
			<option><xsl:value-of select="Category/text()" /></option>
		</xsl:otherwise>
	</xsl:choose>	
</xsl:template>


<xsl:template match="/">
	<xsl:text disable-output-escaping='yes'>&lt;!DOCTYPE html></xsl:text>
	<html>
		<head>
	<title>The XML Bookstore</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<script type="text/javascript" src="scripts/change_categories.js">//Comment prevents XSLT from turning this into empty element</script>
</head>
<body>
	<nav>
		<ul>
			<li class="nav_deselected"><a href="index.php">All Books</a></li>
			<li class="nav_selected"><a href="categories.php">Browse by Category</a></li>
		</ul>
	</nav>
	<main>
		<form>
			<div class="form_control">
				<select id="categories_select" onchange="reload_and_change_categories('categories_select')">
					<option value="">Choose category</option>
					<xsl:apply-templates select="$categories_list" mode="selection_list" >
						<xsl:sort select="Category/text()" />
					</xsl:apply-templates>
				</select>
			</div>
		</form>
		<table>
			<tr>
				<th><a href="categories.php?category={$category_request}&amp;sort=Title">Title</a></th>
				<th><a href="categories.php?category={$category_request}&amp;sort=Category">Category</a></th>
				<th><a href="categories.php?category={$category_request}&amp;sort=Price">Price</a></th>
				<th><a href="categories.php?category={$category_request}&amp;sort=au_lastname">Author</a></th>
			</tr>
		
		<xsl:apply-templates select="root/record[Category/text() = $category_request or '' = $category_request]">
			<xsl:sort select="*[name()=$sort_selector]" />
		</xsl:apply-templates>
		
		</table>

	</main>

</body>
</html>

</xsl:template>






</xsl:stylesheet>	