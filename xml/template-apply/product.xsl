<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/xhtml">

	<xsl:template match="/">
		<html>
			<head>
				<title>XSL ELEMENTS</title>
			</head>
			<body>
				<xsl:apply-templates/>
			</body>
		</html>
	</xsl:template>
	<xsl:template match="product">
		<p>
			<xsl:apply-templates select="productname"/>
			<xsl:apply-templates select="price"/>
			<xsl:apply-templates select="quantity"/>
		</p>
	</xsl:template>
	<xsl:template match="productname">
		Product name:<span style="color:#ff0000">
			<xsl:value-of select="."/>
		</span><br/>
	</xsl:template>

	<xsl:template match="price">
		Price:<span style="color:#ff0000">
			<xsl:value-of select="."/>
		</span><br/>
	</xsl:template>
	<xsl:template match="quantity">
		Quantity:<span style="color:#ff0000">
			<xsl:value-of select="."/>
		</span><br/>
	</xsl:template>
</xsl:stylesheet>