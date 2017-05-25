<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
   <html><head><title>Bsa roster</title>
   <body style="background-color:cadetblue">
      <xsl:apply-templates/>
   </body></head></html>
   </xsl:template>
   
   <xsl:template match ="council">
      <h2 style="font-family:georgia, serif">Council:<br/>
         <xsl:value-of select="./@name"/></h2>
      <xsl:apply-templates select="troop"/>
   </xsl:template>
   
   <xsl:template match ="troop">
      <h3 style="color:red; font-family:rockwell, serif">Troop #<xsl:value-of select="./@troopnum"/></h3>
      <table bgcolor="lightgrey" border="1">
         <tr bgcolor="azure">
            <th>Name</th>
            <th>phone</th>
            <th>Address</th>
            <th>Rank</th>
            <th>Earned Badges</th>
            <xsl:apply-templates select="scout"><xsl:sort select="./lname"/></xsl:apply-templates>
         </tr>
      </table>
   </xsl:template>
   
   <xsl:template match ="scout">
      <tr>
         <td style="vertical-align: text-top"><xsl:value-of select="./lname"/>, <xsl:value-of select="./fname"/></td>
         <td style="vertical-align: text-top"><xsl:value-of select="./phone"/></td>
         <td style="vertical-align: text-top"><xsl:value-of select="./addr/street"/>. 
            <xsl:value-of select="./addr/city"/>, <xsl:value-of select="./addr/state"/></td>
         <td style="vertical-align: text-top"><ol>   
         <xsl:for-each select="rank">
            <li><b><xsl:value-of select="."/></b> earned <b><xsl:value-of select="./@date-earned"/></b><br/></li>
         </xsl:for-each></ol></td>
         <td style="vertical-align: text-top"><ul>
         <xsl:for-each select="mbadge">
            <li><b><xsl:value-of select="."/></b> earned <b><xsl:value-of select="./@date-earned"/></b><br/></li>
         </xsl:for-each></ul></td>
      </tr>
   </xsl:template>
   
   </xsl:stylesheet>