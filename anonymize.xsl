<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema" exclude-result-prefixes="xs" version="1.0">
    <xsl:output omit-xml-declaration="yes" indent="yes"/>
    <xsl:strip-space elements="*"/>

    <xsl:template match="node() | @*">
        <xsl:copy>
            <xsl:apply-templates select="node() | @*"/>
        </xsl:copy>
    </xsl:template>

    <!-- Anonymize general identifiable info for all documents -->
    
    <xsl:template match="docHead/author">
        <author>Name
            <xsl:comment>deidentified element</xsl:comment>
        </author>
    </xsl:template>
    <!-- removes name of author -->
    <xsl:template match="docReview"/>
    <!-- removes peer and instructor review sections -->
    <xsl:template match="DOC//note[attribute::type = 'instructor']"/>
    <!-- removes instructor in-text notes -->
    <xsl:template match="DOC//note[attribute::type = 'peer']"/>
    <!-- removes peer in-text notes -->

    <!-- Anonymize genre-specific identifiable info -->
    <xsl:template match="fsb_rpt//contributors">
        <contributors>
            <xsl:comment>deidentified element</xsl:comment>
        </contributors>
    </xsl:template>

    <xsl:template match="cover_letter//name">
        <name>
            Name de-identified<xsl:comment>deidentified element</xsl:comment>
        </name>
    </xsl:template>
    <xsl:template match="cover_letter//contact">
        <contact type="{@type}">
            <xsl:value-of select="@type"/><xsl:comment>deidentified element</xsl:comment>
        </contact>
    </xsl:template>

    <xsl:template match="pub_init_proposal//author">
        <author>Author
            <xsl:comment>deidentified element</xsl:comment>
        </author>
    </xsl:template>
    
    <xsl:template match="article//author">
        <author>Author
            <xsl:comment>deidentified element</xsl:comment>
        </author>
    </xsl:template>
    <xsl:template match="movie_review//author">
        <author>Author
            <xsl:comment>deidentified element</xsl:comment>
        </author>
    </xsl:template>
    <xsl:template match="op_ed//author">
        <author>Author
            <xsl:comment>deidentified element</xsl:comment>
        </author>
    </xsl:template>
    <xsl:template match="resume/title">
        <title>Name
            <xsl:comment>deidentified element</xsl:comment>
        </title>
    </xsl:template>
    <xsl:template match="resume//contact">
        <xsl:variable name="type"><xsl:value-of select="@type"/></xsl:variable>
        <contact type="{$type}"><xsl:value-of select="@type"/>
            <xsl:comment>deidentified element</xsl:comment>
        </contact>
    </xsl:template>

</xsl:stylesheet>
