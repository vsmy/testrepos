@extends ('layout.app')

@section('title')
    Home page
@stop

@section('title')
    Home page

@stop

<?php
$regioncategories = [
    [
        'id' => '1',
        'name' => 'Kymlinge',
        'est' => 'Est. 1949',
        'description' => 'En grön oas med naturreservat, fornminnen, motion och mycket mer. I en area om drygt 1,7m² finns endast en handfull
         bosatta i stadsdelen. Kymlinge är berömt för bl.a. spökstationen som aldrig färdigställdes och den fredade Grönlingen som
         lever i Igelbäcken.'
    ],

    [
        'id' => '2',
        'name' => 'Stora Ursvik',
        'est' => 'Est. 1971',
        'description' => 'Stora Ursvik var länge ett område för jordbruk och etablering för försvaret. Sedan början på 2000-talet utvecklar staden det
        enskilt största stadsdelsprojektet där tvärbanans kista-linje även byggs ut. '
    ],
//    3
    [
        'id' => '3',
        'name' => 'Lilla Ursvik',
        'est' => 'Est. 1949',
        'description' => 'Lilla Ursvik har varit bebodd och omtalad sedan 1300-talet. Här ligger Graham Brothers gamla hissfabrik och påminner om
        den gamla fabriksverksamhete. Idag är stadsdelen ett småhusområde dominerat av tidstypiska 1940-tals villor'
    ],
    //    4
    [
        'id' => '4',
        'name' => 'Brotorp',
        'est' => 'Est. 1949',
        'description' => 'Den minsta och barnrikaste stadsdelen i en radhusidyll. Brotorp är delvis en del av Järvastaden tillsammans med Solna. Här
        ligger den populära lekparken Mulle Meck parken .'
    ],
    //    5
    [
        'id' => '5',
        'name' => 'Rissne',
        'est' => 'Est. 1949',
        'description' => 'I Rissne har det länge varit militär aktivitet med Försvarets radioanstalt (FRA) och Svea Artilleriregemente, det märks av på
        många av de kvarters- och gatunamn. Centralt ligger Rissne torg med tunnelbanan som är omgiven av bostadsområden och
        grönska. '
    ],
    //    6
    [
        'id' => '6',
        'name' => 'Hallonbergen',
        'est' => 'Est. 1949',
        'description' => 'Ett högt beläget och populärt friluftsområde innan stadsdelen exploaterades på 1960-talet. Här ligger Sundbybergs
        stadshus, centrum med tunnelbana, skola och bostäder'
    ],
    //    7
    [
        'id' => '7',
        'name' => 'Ör',
        'est' => 'Est. 1949',
        'description' => 'En liten stadsdel med bostäder omgivet av grönska. På Golfängarna i söder firas nationaldagen och norrut finns Sveriges
        enda internationellt godkända basebollanläggning, Örvallen.'
    ],
    //    8
    [
        'id' => '8',
        'name' => 'Duvbo',
        'est' => 'Est. 1949',
        'description' => 'Sundbybergs lummiga villasamhälle med sina karakteristiska tornvillor. Duvbo är den enda stadsdelen med en kyrkogård
        och ett eget officiellt vapen.'
    ],
    //    9
    [
        'id' => '9',
        'name' => 'Storskogen',
        'est' => 'Est. 1888',
        'description' => 'Storskogen är ett högt beläget bostadsområde. Stadsdelen är känd för sin K-märkta lamellhusring, höghuset
        Tändsticksasken och de nyligen uppförda Tuletornen. Här finns torg, skola, tunnelbana och Storskogsparken.'
    ],
    //    10
    [
        'id' => '10',
        'name' => 'Centrala Sundbyberg',
        'est' => 'Est. 1888',
        'description' => 'I centrala Sundbyberg finns rutnätstaden med köpstråket, kollektivfärdmedel, Sundbybergs kyrka och Vattentornet. Runt
        om finns Tulemarken och Lötsjön i norr, Hästhagen till väster och Marabou söder om.'
    ],
    //    11
    [
        'id' => '11',
        'name' => 'Lilla Alby',
        'est' => 'Est. 1949',
        'description' => 'Här finns Sundbybergs äldsta byggnad Ahlby säteri omgivet av bostadshus och moderna byggnader. Swedbanks prisbelönta
        huvudkontor och världens första stora fleramiljshus helt i trä tillsammans intill en park, skola och Bällstaåns
        strandpromenad.'
    ],
];
foreach ($regioncategories as $value) {
    if ($value['id'] === $region) {
        $select = $value;
    }
}

?>

@section ('content')
    <br>
    <br>
    <br>
    <br>
 <section>
     <div class="container">
         <div class="row">
             <div class="col-md-6 region-desc">
                 <h1 class="text-center"> <?= $select['name']?></h1>
                 <div class="text-center x-subtitle"> <?= $select['est']?></div>
                 <div class="subtitle"> <?= $select['description']?></div>
             </div>
             <div class="col-md-6">
                 <img src="/images/region/<?= $select['id']?>.svg "alt="">
             </div>
         </div>
     </div>
 </section>



@endsection


