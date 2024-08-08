<script lang="ts">
    import { page } from '$app/stores';
    import FlickrEmbed from '$lib/FlickrEmbed.svelte';

    $: slug = $page.params.slug;
</script>

{#if slug == 'reunions'}
    <h2>Reunions</h2>

    <p>
        Some "campers" are planning a new reunion--for either sometime 2016 or
        2017, either in NYC or Philadelphia).
    </p>
    <p>
        If you want to help or want more info (and it will also be posted on
        here), please <a href="/more-info">contact Saryl</a>.
    </p>
    <p>
        The first Camp Kahagon reunion took place on Sat. April 25, 2009 at the
        Trattoria Dell'Arte restaurant in New York City
    </p>
    <p>Take a look at the slideshow from the 2009 reunion:</p>
    <FlickrEmbed
        href="https://www.flickr.com/photos/127089176@N03/albums/72157646301088057"
        title="April 25, 2009 Photos"
        cover="https://live.staticflickr.com/5583/14972319226_eac6bab4b2_q.jpg"
    />
{/if}

{#if slug == 'general'}
    <h2>General</h2>

    <h3>September 5th 2008:</h3>
    <h4>(1) What became of Camp Kahagon's LAND?</h4>
    <p>
        Years ago I searched to find out what had happened to the camp property,
        and contacted various Bucks County and Quakertown officials. I finally
        found someone and was informed that what was once Camp Kahagon is now
        included in "Nockamixon State Park": <a
            href="mailto:www.Nockamixonsp@state.pa.us"
            >www.Nockamixonsp@state.pa.us</a
        >
    </p>
    <p>
        It seems that just around the time Kahagon closed (1966), the state of
        PA was starting to buy up land for this state park. Unfortunately, all
        the employees from that time period are long retired or gone, so the
        current ones only know this fact, but don't have any further info. If
        someone remembers our Camp's "official" address... the contact person I
        found at Nockamixon (John T. Graham, Park Manager, Nockamixon State
        Park, 215-529-7300) once said he'd mark the location on a park map and
        send it my way... if he's still there. And, if anyone's interested then
        they could visit and check out the park's woods. He said that he didn't
        think anything was left, but maybe some of the buildings' foundations
        might be there?!!
    </p>
    <p>
        To see more info about Nockamixon State Park and where Camp Kahagon was
        a part of it, <a href="/memories/buck">look at our memories</a>.
    </p>

    <h4>(2) What happened to Kahagon's sistercamp- Camp Tamarack?</h4>
    <p>
        Some Kahagonites also went to Tamarack, especially after Kahagon closed
        in 1966. But when did Tamarack close? What happened to this property?
    </p>

    <h4>(3) Bill & Mary Krebs?</h4>
    <p>
        Anyone know what happened to them? When/where died? Remember/know
        details about their son dying in a plane crash?
    </p>
{/if}

{#if slug == 'where-are-they-now'}
    <h2>Where Are They Now?</h2>
    <p>
        Are you trying to find a long lost camp friend or love? Have you already
        located someone on this list? Let us know who you're seeking or who you
        have found and we'll list them. As this site grows and all us
        Kahagonites continue to surface and re-connect - the the chances of
        finding people also increases!
    </p>
    <ul>
        <li>Ellen Mankowsky</li>
        <li>Janie Schallert</li>
        <li>Karen Weissberg</li>
        <li>Rosie Wallach</li>
        <li>Cathy Kustal</li>
        <li>Cheryl Abrams</li>
        <li>Loretta Schwartz</li>
        <li>Bob Schwartz</li>
        <li>Sanford "Cecil" Stadler</li>
        <li>Jackie Stone</li>
        <li>Mike "Moe" Tannenbaum</li>
        <li>Barbara Sheen</li>
        <li>Barbara Heller</li>
        <li>Miriam Binder</li>
        <li>Andy and Dave Friedman</li>
        <li>Gary Kaplowitz</li>
    </ul>
{/if}

{#if slug == 'in-memoriam'}
    <h2>Gone, But Not Forgotten...</h2>
    <ul>
        <li>Laurie Casten</li>
        <li>Sandi Rotkoff</li>
        <li>Barry Bleier</li>
        <li>Barry Kozin</li>
        <li>Bernie Savitz</li>
        <li>Roxanne Figer</li>
        <li>Marcia Artz</li>
        <li>Mark Grossfeld</li>
        <li>Rodney Friedman</li>
        <li>Donny Cowf</li>
        <li>Judy Schmukler</li>
        <li>Marlene Gold</li>
        <li>Ken Gold</li>
    </ul>
{/if}
