<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <?php
    $start_url = 'https://airseal.in/';
    ?>
    <url>
        <loc>{{ $start_url }}</loc>


        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ $start_url }}about-us</loc>

        <priority>1.0</priority>
    </url>
 <url>
        <loc>{{ $start_url }}our-products</loc>

        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ $start_url }}our-products/airseal</loc>

        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ $start_url }}our-products/aeropower</loc>

        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ $start_url }}our-products/hot-dip-galvanizing</loc>

        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ $start_url }}our-products/grating</loc>

        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ $start_url }}contact</loc>

        <priority>1.0</priority>
    </url>

     <url>
        <loc>{{ $start_url }}blog</loc>
        @foreach ($blog as $k => $v)
            @if ($loop->last)
                <lastmod>{{ date('Y-m-d', strtotime($v->updated_at)) }}</lastmod>
            @endif
        @endforeach
        <priority>1.0</priority>
    </url>
    @foreach ($blog as $allblog)
        <url>
            <loc>{{ $start_url . 'blog/' . $allblog->blog_url }}</loc>
            <lastmod>{{ date('Y-m-d', strtotime($allblog->updated_at)) }}</lastmod>
            <priority>1.0</priority>
        </url>
    @endforeach




</urlset>
