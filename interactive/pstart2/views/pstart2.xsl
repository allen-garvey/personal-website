<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output omit-xml-declaration="yes" indent="yes"/>

<xsl:param name="bookmark_id_list" select="''" />
<xsl:param name="is_authorized" select="'false'" />
<xsl:param name="device_code" select="'100'" />
<xsl:param name="quote_content" select="''" />
<xsl:param name="quote_author" select="''" />
<xsl:param name="quote_source" select="''" />

<!--############################################################-->
    <!--## Template to tokenize strings                           ##-->
    <!--############################################################-->
    <xsl:template name="tokenizeString">
        <!--passed template parameter -->
        <xsl:param name="list"/>
        <xsl:param name="delimiter"/>
        <xsl:choose>
            <xsl:when test="contains($list, $delimiter)">               
                	<!-- call methods on substring-before($list,$delimiter) for currently selected item -->
                    <!-- get everything in front of the first delimiter -->
                	
                	<xsl:call-template name="display_bookmark_list_by_id">
			        	<xsl:with-param name="id_arg" select="substring-before($list,$delimiter)"/>	
			   		</xsl:call-template>
                
                <xsl:call-template name="tokenizeString">
                    <!-- store anything left in another variable -->
                    <xsl:with-param name="list" select="substring-after($list,$delimiter)"/>
                    <xsl:with-param name="delimiter" select="$delimiter"/>
                </xsl:call-template>
            </xsl:when>
        	<!-- called when list has one item and thus no delimiter -->
            <xsl:otherwise>
                <xsl:choose>
                    <xsl:when test="$list = ''">
                    </xsl:when>
                    <xsl:otherwise>
                        <!-- call the same method as above with $list -->
                        <xsl:call-template name="display_bookmark_list_by_id">
			        		<xsl:with-param name="id_arg" select="$list"/>	
			   			</xsl:call-template>
                    
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

<xsl:template name="display_bookmark_list_by_id">
	<xsl:param name="id_arg" />
	<xsl:apply-templates select="bookmarks/bookmark-list[@id = $id_arg and (not(boolean(@secure)) or @secure=$is_authorized) and (not(boolean(@display)) or @display='true') and (not(boolean(@min-device-code)) or not(@min-device-code > $device_code)) and (not(boolean(@max-device-code)) or @max-device-code > $device_code)]">
	</xsl:apply-templates>
</xsl:template>

<xsl:template match="bookmark-list">
	<div class='menu_container'>
		<a href='javascript:void(0);' class='heading'>
			<span class='link_span'>
				<div class='menu_title {@title-color}_title' onclick="show_contents(this)"><xsl:value-of select="title/text()" /></div>
			</span>
		</a>
		<div class='menu_contents'>
			<ul>
				<xsl:apply-templates select="a[(not(boolean(@secure)) or @secure=$is_authorized) and (not(boolean(@display)) or @display='true') and (not(boolean(@min-device-code)) or not(@min-device-code > $device_code)) and (not(boolean(@max-device-code)) or @max-device-code > $device_code)]|divider[(not(boolean(@secure)) or @secure=$is_authorized) and (not(boolean(@display)) or @display='true') and (not(boolean(@min-device-code)) or not(@min-device-code > $device_code)) and (not(boolean(@max-device-code)) or @max-device-code > $device_code)]">
				</xsl:apply-templates>
			</ul>
		</div>
	</div>

</xsl:template>

<xsl:template match="a">
	<li><a href='{@href}'><xsl:value-of select="text()" /></a></li>
</xsl:template>

<xsl:template match="divider">
	<hr/>
</xsl:template>

<xsl:template name="quote_content_template">
	&#8220;<xsl:value-of select="$quote_content" />&#8221;
</xsl:template>

<xsl:template name="quote_author_attribution_template">
	<xsl:choose>
		<xsl:when test="not($quote_author = '')">
			-<xsl:value-of select="$quote_author" />, <i><xsl:value-of select="$quote_source" /></i>
		</xsl:when>
		<xsl:otherwise></xsl:otherwise>
	</xsl:choose>
</xsl:template>

<xsl:template name="quote_template">
	<xsl:choose>
		<xsl:when test="not($quote_content = '')">
			<blockquote>
				<div class='quote_body'>
					<xsl:call-template name="quote_content_template">
					</xsl:call-template>
				</div>
					<div class='quote_attribution'>
						<xsl:call-template name="quote_author_attribution_template">
						</xsl:call-template>
					</div>
			</blockquote>
		</xsl:when>
		<xsl:otherwise></xsl:otherwise>
	</xsl:choose>
</xsl:template>


<xsl:template match="/">
	<xsl:text disable-output-escaping='yes'>&lt;!DOCTYPE html></xsl:text>
	<html>
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<title>PStart 2</title>
			<link rel="stylesheet" type="text/css" href="styles/productivity_startpage.css" />
			<link href="images/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
		</head>
		<body>
			<main>
				<section class="main_content">
					<xsl:call-template name="tokenizeString">
			        	<xsl:with-param name="list" select="$bookmark_id_list"/>
			        	<xsl:with-param name="delimiter" select="','"/>
				    </xsl:call-template>
				</section>
				<xsl:call-template name="quote_template">
			    </xsl:call-template>
			</main>
			<script type="text/javascript" src="scripts/jquery-2.1.1.min.js">//This string prevents empty tag output</script>
			<script type="text/javascript" src="scripts/show_contents.js" async="async">//This string prevents shortening tag</script>
			<script type="text/javascript" src="scripts/fastclick.js">//This string prevents shortening tag</script>
			<script type="text/javascript">
				$(function() { FastClick.attach(document.body);});
			</script>
		</body>
	</html>

</xsl:template>






</xsl:stylesheet>	