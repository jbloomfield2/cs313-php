<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
   <html><head><title>Student roster</title>
   <body style="background-color:cadetblue">
      <xsl:apply-templates/>
   </body></head></html>
   </xsl:template>
   
   <xsl:template match ="student">
	 <h2 style="font-family:georgia, serif">
         <xsl:value-of select="./name"/></h2>
	 <h3>From: <xsl:value-of select="./location/city"/>, 
	 <xsl:value-of select="./location/state"/></h3>
	 <h3>Attending: <xsl:value-of select="./college/@name"/></h3>
	 <h3>Major: <xsl:value-of select="./college/department/major"/></h3>
	 <br/><br/>

   </xsl:template>
   
   
   </xsl:stylesheet>