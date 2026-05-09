<?xml version="1.0" encoding="UTF-8"?>

<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    @foreach ($locales as $locale)
        @foreach ($pages as $page)
            <url>
                <loc>
                    {{ url($locale . $page) }}
                </loc>
                <lastmod>{{ now()->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </url>
        @endforeach
    @endforeach

</urlset>