<script lang="ts">
    import { page } from '$app/stores';

    $: slug = $page.params.slug;
</script>

{#if slug == '1961'}
    <h2>1961</h2>

    <h3>Boys camp:</h3>

    <h4>Bunk 14</h4>
    <p>
        Marty Bachrach, Lanny Naiman, Mike Rosenblatt, Howie Stern, Elliott
        Keller, Steve Slotkin, Mark Foss
    </p>

    <h4>Counselors</h4>
    <p>Stu ? and Mel ?</p>
{/if}

{#if slug == '1962'}
    <h2>1962</h2>

    <p>COLOR WAR: White Bullets (winning team) and Blue Riders</p>

    <h3>Head Counselors: Bert & Rose; Charlie; Elaine</h3>

    <h3>Girls camp:</h3>

    <dl>
        <dt>Bunk F:</dt>
        <dd>Stacey Kahn, Maxine Cohen</dd>
        <dt>Bunk I:</dt>
        <dd>
            Sandi Rotkoff, Ilyse Nagel, Fern ?, Carol ?, Susie ?, Maggie Cohen,
            Laurie Casten
        </dd>
        <dt>Bunk J:</dt>
        <dd>
            Saryl Radwin, Audrey Schwartz, Janine Heitner, Ilene Tanack, Audrey
            "Stacey" Keller, Michele Haber, Andrea Gould, Candace ("Candy")
            Canelstein; Counselors: Debby ?, Pat ?, and CIT: Barbara Hecht
        </dd>
        <dt>Bunk K:</dt>
        <dd>Amy Cohen, Leslie Sanders, Andrea Schwartz, Wendy ?</dd>
        <dt>Bunk N:</dt>
        <dd>
            Maris Cohen (Faiello), Yvonne "Evie" Rosenstein (Rose-Merkle), Lynn
            Grossman (Manger), Carol "Cookie" Weiner (Horowitz), Wendy Sisselman
            (Katzen), Carol "funny bunny" Loeb (Huppert), Sallie Werbin (Krass),
            Barbara Lefcourt (Cortney), Randy Leeb (Schnell), Patty Schoengold
            (Steiner); Counselor: Marsha Stern (Bucher); We're still looking
            for: Barbara Sheen, Barbara Heller, and Miriam Binder
        </dd>
        <dt>Deb House:</dt>
        <dd>
            <dl>
                <dt>Deb 1:</dt>
                <dd>Karen Adler, Carol Poppins, Eva ?, Esta ?</dd>
                <dt>Deb 2:</dt>
                <dd>
                    Janie Schallert, Leslie Augenstein, Linda Silverstein, Annie
                    Gilbert, Meryl Lutwin, Sharon Sutton, Karen Weissberg; Deb
                    3: Loretta Schwartz, Rosie Wallach
                </dd>
            </dl>
        </dd>
        <dt>Lodge:</dt>
        <dd>Mickey ?, Lois Rotkoff, Lannie ?</dd>
    </dl>

    <h3>Boys camp:</h3>

    <dl>
        <dt>Bunk 10:</dt>
        <dd>Ricky Gropper;</dd>
        <dt>Bunk 12:</dt>
        <dd>Stuart Harrow, Fred Feller, Pete Rockuson, Bob Schwartz</dd>
        <dt>Bunk 14:</dt>
        <dd>Steve Horowitz</dd>
        <dt>Bunk 16:</dt>
        <dd>Jackie Stone, Simon Stockton</dd>
        <dt>Bunk 17:</dt>
        <dd>
            Steve Slotkin, Marty Bachrach, Howie Stern, Lanny Naiman, Elliott
            Keller, Andy Sachs, Mark Foss, Mike Rosenblatt, Larry Good
        </dd>
    </dl>

    <h4>Counselors:</h4>
    <p>Malcolm Stogo and Paul Moscowitz</p>

    <h4>Waiters:</h4>
    <p>Brad Karen, Howie Reed, Paul Bennett, Dana Sanders</p>
{/if}

{#if slug == '1963'}
    <h2>1963</h2>

    <p>COLOR WAR: White Clouds and Blue Flame (winning team)</p>

    <h3>Head Counselors: Bert & Rose, Sam</h3>

    <p>Camp QUEEN: Amy Cohen and KING: Steve Horowitz</p>

    <h3>Girls:</h3>

    <dl>
        <dt>Bunk G:</dt>
        <dd>Marlene Gold, Jane Peepis, Kyle Saunders, Maxine Cohen</dd>
        <dt>Bunk H:</dt>
        <dd>Maggie Cohen, Sandi Rotkoff, Marcia Harrow, Laurie Casten</dd>
        <dt>Bunk I:</dt>
        <dd>
            Saryl Radwin, Audrey Schwartz, Janine Heitner, Ilene Tanack, Candy
            Canelstein, Audrey Keller, Sheryl Hirsch, Linda Lieboff; Counselors:
            Leslie ?, Janice ?, and CIT: Bonnie Muller
        </dd>
        <dt>Bunk J:</dt>
        <dd>
            Leslie Augenstein, Linda Silverstein, Annie Gilbert, Meryl Lutwin,
            Sharon Sutton, Karen Weissberg, Lori Beckleman
        </dd>
        <dt>Bunk K:</dt>
        <dd>Cindy Schwartz</dd>
        <dt>Bunk L & M:</dt>
        <dd>
            Janie Schallert, Rosie Wallach, Loretta Schwartz, Roberta Schwartz,
            Karen Adler, Carol Poppins, Karen Weissberg
        </dd>
        <dt>Bunk N:</dt>
        <dd>Amy Cohen, Andrea Schwartz, Diane Fellows, Sue "Red" Israel</dd>
        <dt>Lodge:</dt>
        <dd>Ellen Mankowsky, Bunny Skorecki, Patty Schoengold, Lois Rotkoff</dd>
    </dl>

    <h3>Boys:</h3>

    <dl>
        <dt>Bunk 14:</dt>
        <dd>
            Pete Rockuson, Ronnie Schiffman, Fred Feller, Bob Schwartz, Stu
            Harrow, Larry Bernstein
        </dd>
        <dt>Bunk 16:</dt>
        <dd>Kenny Gold, Mike Fossberg, Larry Beckelstein, Don Zakarin</dd>
        <dt>Frat House:</dt>
        <dd>Steven Wills, Simon Stockton, Jackie Stone</dd>
        <dt>Waiters-Bunk 20:</dt>
        <dd>
            Howie Stern, Brad Karen, Steve Horowitz, Marty Bachrach, Andy Sachs,
            Dana Sanders, Richard Bachrach, Mike Rosenblatt, Barry Kozin, Larry
            Kaffa, Larry Good, Lanny Naiman, Howie Gladston, Stu Builder, Stu
            Barash, Steve Slotkin
        </dd>
    </dl>

    <h4>Arts & Crafts Counselor:</h4>
    <p>Mike ("Moe") Tannenbaum</p>
{/if}

{#if slug == '1964'}
    <h2>1964</h2>

    <p>COLOR WAR: White Winds (winning team) and Tomahawk Blue</p>

    <h3>Camp QUEEN: Loretta Schwartz and KING: Bob Schwartz</h3>

    <h3>Girls:</h3>

    <dl>
        <dt>Bunk I:</dt>
        <dd>Marlene Gold, Kyle Saunders, Maxine Cohen, Margie Saltzman</dd>
        <dt>Bunk J:</dt>
        <dd>Sandi Rotkoff, Maggie Cohen, Laurie Casten</dd>
        <dt>Bunk L & M:</dt>
        <dd>Lois Birnbach, Naomi Figer</dd>
        <dt>Bunk N:</dt>
        <dd>
            Audrey Schwartz, Audrey Keller, Janine Heitner, Phyllis ?; <em
                >(Saryl would've been in this Bunk, but had mono that summer and
                so only there in spirit and via phone calls and letters)</em
            >; Counselors: Sandy ? and Lois Rotkoff
        </dd>
        <dt>Lodge:</dt>
        <dd>
            Roxanne Figer, Diane Fellows, Rosie Wallach, Merri Saltzman, Loretta
            Schwartz, Meryl Lutwin, Sharon Sutton, Judy Spry, Leslie Augenstein
        </dd>
    </dl>

    <h3>Boys:</h3>

    <dl>
        <dt>Bunk 14:</dt>
        <dd>Darryl Cutler</dd>
        <dt>Bunk 16:</dt>
        <dd>
            Pete Rockuson, Fred Feller, Sandy "Cecil" Stadler, Barry Bleier, Bob
            Schwartz
        </dd>
        <dt>Bunk 17:</dt>
        <dd>Counselor: Mike Paul</dd>
        <dt>Waiters:</dt>
        <dd>
            Jeff Schloss, Steve Cutler, Marty Bachrach, Neil Stohl, Lenny Fox,
            Steve Horowitz Counselor: Danny Metz
        </dd>
        <dt>CIT:</dt>
        <dd>Howie Stern</dd>
    </dl>
{/if}

{#if slug == '1965'}
    <h2>1965</h2>

    <p>COLOR WAR: White Surf (winning team) and Blue Tiki</p>

    <h3>
        Camp QUEEN: Naomi Figer and KING: Alan Greenberg<br />
        Head Counselors: Jack, Max
    </h3>

    <h3>Girls:</h3>

    <dl>
        <dt>Bunk L & M:</dt>
        <dd>
            Maxine Cohen, Marlene Gold, Ronnie Goldstein, Bonnie Permission,
            Judy "Decie" Horowitz, Margie Saltzman, Kyle Saunders, Stacey
            Cauliffe; Counselor: Ellen Mankowsky
        </dd>
        <dt>Lodge L1:</dt>
        <dd>
            Judy Schmukler, Myrna Sandbrand, Michelle ("Mickie") Lucier, Paula
            Yerman; Counselor: Jacki
        </dd>
        <dt>Lodge L2:</dt>
        <dd>
            Saryl Radwin, Naomi Figer, Lois Birnbach, Linda Gittleman, Joyce ?,
            Marcia ?, Ellen ?, Arlene ?; Counselor: Harriet Plenn
        </dd>
        <dt>Lodge L3:</dt>
        <dd>Empty</dd>
        <dt>Lodge L4:</dt>
        <dd>
            Sandi Rotkoff, Marcia Harrow, Maggie Cohen, Andi Wirtzer, Laurie
            Casten; JC: Bunny Skorecki
        </dd>
        <dt>CITs and CAs:</dt>
        <dd>
            Roxanne Figer, Diane Fellows, Helen Kramer, Vickie Norris, Meryl
            Lutwin, Sharon Sutton, Merri Saltzman, Leslie Augenstein, Rosie
            Wallach, Judy Spry, Nancy ?, Karen Weissberg; Counselors: Lois
            Rotkoff, Dale Saunders
        </dd>
    </dl>

    <h3>Boys:</h3>

    <dl>
        <dt>Bunk 12:</dt>
        <dd>Steve Stohl</dd>
        <dt>Bunk 16:</dt>
        <dd>Alan Greenberg, Darryl Cutler, Gregg Bleier?</dd>
        <dt>Bunk 17:</dt>
        <dd>
            Joel Schmukler, Dave Madora, Steve Chick, Jay Stokols, Ralph Ameleh,
            Marty Tarrow, Mike "Fluffy" Goldstein
        </dd>
        <dt>Waiters:</dt>
        <dd>
            Jeff Schloss, Pete Rockuson, Bob Schwartz, Fred Feller, Don Cowf,
            Sandy "Cecil" Stadler, Stu Harrow, Artie Feinberg, Steve Cutler;
            Counselor: Mike Paul
        </dd>
        <dt>Horse Counselor:</dt>
        <dd>Barry Bleier</dd>
        <dt>Counselors:</dt>
        <dd>
            Mark Spector, Stu Greenberg, Bobby Boyd, Howie Stern, Jeff Davis,
            Ken Howie
        </dd>
    </dl>
{/if}

{#if slug == '1966'}
    <h2>1966</h2>

    <p>COLOR WAR: White Spirit and Blue Venom (winning team)</p>

    <h3>
        Camp QUEEN: Maxine Cohen and KING: ?<br />
        Bill Stein <em>(head of CITs then later of all girls camp)</em>, Rita
        Friedman, Bernie Savitz
    </h3>

    <h3>Girls:</h3>

    <dl>
        <dt>Sorority House-CITs:</dt>
        <dd>
            Saryl Radwin, Naomi Figer, Audrey Schwartz, Judy Schmukler, Emily
            Monies, Gerry Ginsberg, Ronnie Fluxgold, Bonnie Friedman, Margie
            Lehrer, Ilyse Nagel, Terry Schecter, Cathy Kustal, Cheryl Abrams,
            Linda Tannenbaum, Cheryl Katz, Marcia Artz, Meryl Shapiro; CA:
            Loretta Schwartz Counselors: Regina? Joanne ?
        </dd>
        <dt>Sorority House live-ins:</dt>
        <dd>
            Riding instructors: Joan Garvin, Tina Priess, Lynn ?, Amy Gerber,
            Ilene Bershotsky, Sandy Herlichick
        </dd>
        <dt>Lodge:</dt>
        <dd>
            Marlene Gold, Margie Saltzman, Maxine Cohen, Bonnie Permission,
            Shelley Hittner, Andi Wirtzer, Julie Muldawer, Laurie Spector,
            Ronnie Goldstein, Stacie Cauliffe, Kyle Saunders, Judy "Decie"
            Horowitz
        </dd>
        <dt>CAs:</dt>
        <dd>
            Meryl Lutwin, Sandi Rotkoff, Maggie Cohen, Vickie Norris, Leslie
            Augenstein, Sharon Sutton
        </dd>
        <dt>Counselors:</dt>
        <dd>
            Amy Cohen, Rosie Wallach, Diane Fellows, Lois Rotkoff, Robin Rosner,
            Ann Bushman, Gail Nemerofsky
        </dd>
    </dl>

    <h3>Boys:</h3>

    <dl>
        <dt>Bunk 10:</dt>
        <dd>Jeff Siroty</dd>
        <dt>Bunk 12:</dt>
        <dd>Bill White</dd>
        <dt>Bunk 14:</dt>
        <dd>Robbie Karen, Steve Stohl, Ricky Stockton, Robbie Shackman</dd>
        <dt>Bunk 16:</dt>
        <dd>Darryl Cutler, Dave Friedman, Bruce Lipshutz</dd>
        <dt>Bunk 19:</dt>
        <dd>Mark Sands, Dave Figer</dd>
        <dt>Waiters (Bunk 17, 18 and 20):</dt>
        <dd />
        <dt>Bunk 17:</dt>
        <dd>
            Joel Schmukler, Dave Madora, Steve Chick, Jay Stokols, Ralph Ameleh,
            Marty Tarrow, Mike ("Fluffy") Goldstein, Mike Cherry, Mitch ?, Howie
            ? Bill Siroty
        </dd>
        <dt>Bunk 18:</dt>
        <dd>
            Milt Pflaum, Robert "Bug" Rothenberg, Doug Process, Gary Kaplowitz
            Counselor: Elliott K?
        </dd>
        <dt>Bunk 20:</dt>
        <dd>
            Pete Rockuson, Bob Schwartz, Fred Feller, Donny Cowf, Sandy "Cecil"
            Stadler, Stu Harrow, Ted ?, Counselor: Stu Greenberg
        </dd>
        <dt>JC:</dt>
        <dd>Jeff Schloss; Artie Feinberg?</dd>
        <dt>Counselors:</dt>
        <dd>
            Andy Friedman, Steve Cutler, Mike Paul, Howie Stern, Carl Eisenberg,
            Mike "Moe" Tannenbaum, Mark Spector, Bill Brookman, Jimmy Martin,
            Keith ?
        </dd>
        <dt>Horse Counselor:</dt>
        <dd>Barry Bleier (lived in Bunk 20)</dd>
        <dt>Riding Counselors:</dt>
        <dd>Jim? Dave?</dd>
    </dl>
{/if}

{#if slug == 'family-campers'}
    <h2>Family campers...</h2>

    <p><em>brother and sister combos during various years</em></p>

    <ul>
        <li>Marty and Andi Bachrach</li>
        <li>Howie & Stu Barash</li>
        <li>Barry, Greg and Laurie Bleier</li>
        <li>Amy and Maxine Cohen</li>
        <li>Steve, Darryl, Marcy and Hannah Cutler</li>
        <li>Fred and Steve Feller</li>
        <li>Naomi, Roxanne and Dave Figer</li>
        <li>Andy and Dave Friedman</li>
        <li>Marlene and Kenny Gold</li>
        <li>Nancy and Ricky Gropper</li>
        <li>Mark and Seril Grossfeld</li>
        <li>Stuart and Marcia Harrow</li>
        <li>Ilyse, Seth, (and Robbie?) Nagel</li>
        <li>Sandi and Lois Rotkoff</li>
        <li>Merri and Margie Saltzman</li>
        <li>Kyle and Dale Saunders</li>
        <li>Judy and Joel Schmukler</li>
        <li>Bill and Jeff Siroty</li>
        <li>Marsha and Howie Stern</li>
        <li>Ricky and Simon Stockton</li>
        <li>Steve and Neil Stohl</li>
    </ul>
{/if}

{#if slug == 'buck'}
    <p>
        <a href="bucks-county-quakertown.jpg" target="_blank">
            See full image: Bucks County Quakertown - Camp areas map
        </a>
    </p>
    <p>
        <a
            href="nockamixon-state-park-campkahagon-referenced.pdf"
            target="_blank"
        >
            See PDF: Nockamixon State Park, Quakertown, PA with reference to
            Camp Kahagon
        </a>
    </p>
    <p>
        <a href="nockamixon-state-park-campkahagon-circled.pdf" target="_blank">
            See PDF (large file warning): Nockamixon State Park map with Camp
            Kahagon area circled in red
        </a>
    </p>
{/if}

{#if slug == 'camp-map'}
    <h2>Saryl and Marty's memory of camp layout</h2>
    <a href="saryls-memory-camp-layout.jpg" target="_blank">
        Click to view map.
    </a>
{/if}
