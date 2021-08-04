<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
  <body>
    <h2>Welcome to Colleges of Aurangabad</h2>

    <table>
      <tr bgcolor ="#c6cbcd">
        <th style="text-align:center">Course Name</th>
        <th style="text-align:center">Course ID</th>
        <th style="text-align:center">College Name</th>
      </tr>
      <xsl:for-each select="course/details">
      <tr>
        <td><xsl:value-of select="course_name"/></td>
        <td>
               <a><xsl:attribute name="href">
               <xsl:value-of select="LINK/@VALUE"/></xsl:attribute>
               <xsl:value-of select="LINK"/>
               </a>
       </td>
        <td><xsl:value-of select="college_name"/></td>
        
      </tr>

      </xsl:for-each>
    </table>
  </body>
</html>
</xsl:template>
</xsl:stylesheet>




