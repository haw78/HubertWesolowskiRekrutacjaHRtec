<?php


namespace HubertWesolowskiRekrutacjaHRtec\test\Doubles;

use HubertWesolowskiRekrutacjaHRtec\Service\StandardWWWService;

/**
 * Class StandardWWWServiceStub
 * @package HubertWesolowskiRekrutacjaHRtec\test\Doubles
 */
class StandardWWWServiceStub extends StandardWWWService
{

    /**
     * @param string $url
     * @return string
     */
    protected function grabRssData($url)
    {
        $rssXml = '<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:dc="http://purl.org/dc/elements/1.1/" version="2.0">
  <channel>
    <title>National Geographic News</title>
    <link>http://news.nationalgeographic.com</link>
    <description>Reporting our world daily: original nature and science news from National Geographic.</description>
    <language>en-us</language>
    <lastBuildDate>Tue, 22 Sep 2020 14:56:18 GMT</lastBuildDate>
    <image>
      <title>National Geographic News</title>
      <url>http://images.nationalgeographic.com/wpf/sites/common/i/presentation/ng_logo_250x40.png</url>
      <link>http://news.nationalgeographic.com</link>
    </image>
    <item>
      <title>What is the fall equinox? Here\'s what you need to know.</title>
      <link>https://www.nationalgeographic.com/news/2015/09/150922-equinox-autumn-seasons-sun-moon-space-science/</link>
      <description>It occurs each September and marks the first day of fall. Find out the science behind the autumnal equinox and how it has been celebrated through the ages.</description>
      <pubDate>Tue, 22 Sep 2020 10:00:00 GMT</pubDate>
      <guid isPermaLink="false">05d019fb-61f4-434d-9f0c-5b982f79802c</guid>
      <dc:creator>Rachel A. Becker</dc:creator>
    </item>
    <item>
      <title>What do wild animals do in wildfires?</title>
      <link>https://www.nationalgeographic.com/news/2015/09/150914-animals-wildlife-wildfires-nation-california-science/</link>
      <description>Big wildfires, like those tearing across California, can hurt some animals. Yet others escape—and some species even thrive.</description>
      <pubDate>Tue, 08 Sep 2020 04:00:00 GMT</pubDate>
      <guid isPermaLink="false">e91265a5-764d-418d-8e63-ae5179cfd26c</guid>
      <dc:creator>National Geographic Staff</dc:creator>
    </item>  </channel>
</rss>
    ';

        return $rssXml;
    }

}