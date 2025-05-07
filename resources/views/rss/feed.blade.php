@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
{{--
    Blade was trying to parse the "xml". Now blade not to parse the XML declaration.
    by echoing it as a string using @php echo?>
 --}}

<rss version="2.0">
<channel>
    <title>Pixel Positions – Latest Jobs</title>
    <link>{{ url('/') }}</link>
    <description>Newest developer jobs from Pixel Positions</description>
    <language>en</language>
{{--
    forEach loops through your jobs.
    Each job (item) is an item in the RSS feed.
    toRssString() formats the date in a way that RSS readers can understand.
--}}
    @foreach ($jobs as $job)
        <item>
            <title>{{ $job->title }}</title>
            <link>{{ url('/jobs/' . $job->id) }}</link>
            <description><![CDATA[{{ Str::limit(strip_tags($job->description), 200) }}]]></description>
            <pubDate>{{ $job->created_at->toRssString() }}</pubDate>
            <guid>{{ url('/jobs/' . $job->id) }}</guid>
        </item>
    @endforeach
</channel>
</rss>
