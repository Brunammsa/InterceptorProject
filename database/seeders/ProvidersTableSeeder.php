<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('providers')->delete();
        $providers = [
            [
                "id" => 246,
                "name" => "7plus",
                "code" => "spl",
                "icon_url" => "https://images.justwatch.com/icon/195609058/s100"
            ],
            [
                "id" => 378,
                "name" => "9Now",
                "code" => "nnw",
                "icon_url" => "https://images.justwatch.com/icon/174664462/s100"
            ],
            [
                "id" => 1827,
                "name" => "A Spor",
                "code" => "asr",
                "icon_url" => "https://images.justwatch.com/icon/302100697/s100"
            ],
            [
                "id" => 156,
                "name" => "A&E",
                "code" => "aae",
                "icon_url" => "https://images.justwatch.com/icon/6675987/s100"
            ],
            [
                "id" => 148,
                "name" => "ABC",
                "code" => "abc",
                "icon_url" => "https://images.justwatch.com/icon/5983493/s100"
            ],
            [
                "id" => 135,
                "name" => "ABC iview",
                "code" => "ivw",
                "icon_url" => "https://images.justwatch.com/icon/4953531/s100"
            ],
            [
                "id" => 1884,
                "name" => "ABEMA",
                "code" => "aba",
                "icon_url" => "https://images.justwatch.com/icon/304712576/s100"
            ],
            [
                "id" => 398,
                "name" => "AHCTV",
                "code" => "ahc",
                "icon_url" => "https://images.justwatch.com/icon/198433889/s100"
            ],
            [
                "id" => 80,
                "name" => "AMC",
                "code" => "amc",
                "icon_url" => "https://images.justwatch.com/icon/922527/s100"
            ],
            [
                "id" => 1854,
                "name" => "AMC Plus Apple TV Channel ",
                "code" => "aat",
                "icon_url" => "https://images.justwatch.com/icon/303391393/s100"
            ],
            [
                "id" => 162,
                "name" => "AMC Theatres",
                "code" => "amt",
                "icon_url" => "https://images.justwatch.com/icon/7425739/s100"
            ],
            [
                "id" => 352,
                "name" => "AMC on Demand",
                "code" => "amo",
                "icon_url" => "https://images.justwatch.com/icon/166008757/s100"
            ],
            [
                "id" => 526,
                "name" => "AMC+",
                "code" => "acp",
                "icon_url" => "https://images.justwatch.com/icon/277399832/s100"
            ],
            [
                "id" => 528,
                "name" => "AMC+ Amazon Channel",
                "code" => "azp",
                "icon_url" => "https://images.justwatch.com/icon/241732522/s100"
            ],
            [
                "id" => 635,
                "name" => "AMC+ Roku Premium Channel",
                "code" => "ark",
                "icon_url" => "https://images.justwatch.com/icon/252888472/s100"
            ],
            [
                "id" => 219,
                "name" => "ARD Mediathek",
                "code" => "dem",
                "icon_url" => "https://images.justwatch.com/icon/305906930/s100"
            ],
            [
                "id" => 1902,
                "name" => "ARD Plus",
                "code" => "ard",
                "icon_url" => "https://images.justwatch.com/icon/304975360/s100"
            ],
            [
                "id" => 529,
                "name" => "ARROW",
                "code" => "awp",
                "icon_url" => "https://images.justwatch.com/icon/241658074/s100"
            ],
            [
                "id" => 1725,
                "name" => "AVA BGB",
                "code" => "avg",
                "icon_url" => "https://images.justwatch.com/icon/292313810/s100"
            ],
            [
                "id" => 1724,
                "name" => "AVA CSAL",
                "code" => "avc",
                "icon_url" => "https://images.justwatch.com/icon/292313797/s100"
            ],
            [
                "id" => 1723,
                "name" => "AVA HBZ",
                "code" => "avh",
                "icon_url" => "https://images.justwatch.com/icon/292313740/s100"
            ],
            [
                "id" => 1722,
                "name" => "AVA VOBB",
                "code" => "avb",
                "icon_url" => "https://images.justwatch.com/icon/292313602/s100"
            ],
            [
                "id" => 1717,
                "name" => "Acontra Plus",
                "code" => "aco",
                "icon_url" => "https://images.justwatch.com/icon/286186025/s100"
            ],
            [
                "id" => 1742,
                "name" => "Acontra Plus Amazon Channel",
                "code" => "aaa",
                "icon_url" => "https://images.justwatch.com/icon/292993892/s100"
            ],
            [
                "id" => 87,
                "name" => "Acorn TV",
                "code" => "act",
                "icon_url" => "https://images.justwatch.com/icon/151881328/s100"
            ],
            [
                "id" => 196,
                "name" => "AcornTV Amazon Channel",
                "code" => "aac",
                "icon_url" => "https://images.justwatch.com/icon/241732555/s100"
            ],
            [
                "id" => 1733,
                "name" => "Action Max Amazon Channel",
                "code" => "aca",
                "icon_url" => "https://images.justwatch.com/icon/292993608/s100"
            ],
            [
                "id" => 318,
                "name" => "Adult Swim",
                "code" => "ads",
                "icon_url" => "https://images.justwatch.com/icon/141261090/s100"
            ],
            [
                "id" => 547,
                "name" => "Alamo on Demand",
                "code" => "alm",
                "icon_url" => "https://images.justwatch.com/icon/243230574/s100"
            ],
            [
                "id" => 33,
                "name" => "Alleskino",
                "code" => "als",
                "icon_url" => "https://images.justwatch.com/icon/614496/s100"
            ],
            [
                "id" => 319,
                "name" => "Alt Balaji",
                "code" => "abj",
                "icon_url" => "https://images.justwatch.com/icon/141488812/s100"
            ],
            [
                "id" => 533,
                "name" => "Amazon Arthaus Channel",
                "code" => "aah",
                "icon_url" => "https://images.justwatch.com/icon/242634444/s100"
            ],
            [
                "id" => 50,
                "name" => "Amazon DVD / Blu-ray",
                "code" => "adb",
                "icon_url" => "https://images.justwatch.com/icon/774988/s100"
            ],
            [
                "id" => 119,
                "name" => "Amazon Prime Video",
                "code" => "prv",
                "icon_url" => "https://images.justwatch.com/icon/52449861/s100"
            ],
            [
                "id" => 9,
                "name" => "Amazon Prime Video",
                "code" => "amp",
                "icon_url" => "https://images.justwatch.com/icon/52449539/s100"
            ],
            [
                "id" => 10,
                "name" => "Amazon Video",
                "code" => "amz",
                "icon_url" => "https://images.justwatch.com/icon/430993/s100"
            ],
            [
                "id" => 1898,
                "name" => "Amazon miniTV",
                "code" => "mni",
                "icon_url" => "https://images.justwatch.com/icon/304883020/s100"
            ],
            [
                "id" => 116,
                "name" => "Amediateka",
                "code" => "ama",
                "icon_url" => "https://images.justwatch.com/icon/3701911/s100"
            ],
            [
                "id" => 399,
                "name" => "Animal Planet",
                "code" => "apl",
                "icon_url" => "https://images.justwatch.com/icon/198433891/s100"
            ],
            [
                "id" => 1888,
                "name" => "Animation Digital Network Amazon Channel",
                "code" => "aad",
                "icon_url" => "https://images.justwatch.com/icon/304871965/s100"
            ],
            [
                "id" => 195,
                "name" => "Animax Plus Amazon Channel",
                "code" => "aan",
                "icon_url" => "https://images.justwatch.com/icon/241732481/s100"
            ],
            [
                "id" => 415,
                "name" => "Anime Digital Networks",
                "code" => "adn",
                "icon_url" => "https://images.justwatch.com/icon/300554261/s100"
            ],
            [
                "id" => 1895,
                "name" => "Anime Generation Amazon Channel",
                "code" => "aag",
                "icon_url" => "https://images.justwatch.com/icon/304873592/s100"
            ],
            [
                "id" => 707,
                "name" => "Aniverse Amazon Channel",
                "code" => "ava",
                "icon_url" => "https://images.justwatch.com/icon/278652642/s100"
            ],
            [
                "id" => 1912,
                "name" => "Apollo",
                "code" => "apf",
                "icon_url" => "https://images.justwatch.com/icon/305591817/s100"
            ],
            [
                "id" => 2,
                "name" => "Apple TV",
                "code" => "itu",
                "icon_url" => "https://images.justwatch.com/icon/190848813/s100"
            ],
            [
                "id" => 350,
                "name" => "Apple TV Plus",
                "code" => "atp",
                "icon_url" => "https://images.justwatch.com/icon/152862153/s100"
            ],
            [
                "id" => 534,
                "name" => "Argo",
                "code" => "arg",
                "icon_url" => "https://images.justwatch.com/icon/242706549/s100"
            ],
            [
                "id" => 596,
                "name" => "Arrow Video Amazon Channel",
                "code" => "aav",
                "icon_url" => "https://images.justwatch.com/icon/248032558/s100"
            ],
            [
                "id" => 234,
                "name" => "Arte",
                "code" => "art",
                "icon_url" => "https://images.justwatch.com/icon/94568507/s100"
            ],
            [
                "id" => 687,
                "name" => "Arthouse CNMA Amazon Channel",
                "code" => "acm",
                "icon_url" => "https://images.justwatch.com/icon/259303812/s100"
            ],
            [
                "id" => 481,
                "name" => "ArthouseCNMA",
                "code" => "cnm",
                "icon_url" => "https://images.justwatch.com/icon/209710340/s100"
            ],
            [
                "id" => 514,
                "name" => "AsianCrush",
                "code" => "asc",
                "icon_url" => "https://images.justwatch.com/icon/209565865/s100"
            ],
            [
                "id" => 62,
                "name" => "Atres Player",
                "code" => "atr",
                "icon_url" => "https://images.justwatch.com/icon/179272126/s100"
            ],
            [
                "id" => 1815,
                "name" => "Azteca 7",
                "code" => "az7",
                "icon_url" => "https://images.justwatch.com/icon/301671027/s100"
            ],
            [
                "id" => 397,
                "name" => "BBC America",
                "code" => "bca",
                "icon_url" => "https://images.justwatch.com/icon/198412956/s100"
            ],
            [
                "id" => 610,
                "name" => "BBC Earth Amazon Channel",
                "code" => "abe",
                "icon_url" => "https://images.justwatch.com/icon/248045150/s100"
            ],
            [
                "id" => 285,
                "name" => "BBC Player Amazon Channel",
                "code" => "abp",
                "icon_url" => "https://images.justwatch.com/icon/241732580/s100"
            ],
            [
                "id" => 38,
                "name" => "BBC iPlayer",
                "code" => "bbc",
                "icon_url" => "https://images.justwatch.com/icon/694553/s100"
            ],
            [
                "id" => 224,
                "name" => "BFI Player",
                "code" => "bfi",
                "icon_url" => "https://images.justwatch.com/icon/90084630/s100"
            ],
            [
                "id" => 287,
                "name" => "BFI Player Amazon Channel",
                "code" => "abf",
                "icon_url" => "https://images.justwatch.com/icon/241732527/s100"
            ],
            [
                "id" => 385,
                "name" => "BINGE",
                "code" => "bng",
                "icon_url" => "https://images.justwatch.com/icon/183470172/s100"
            ],
            [
                "id" => 1908,
                "name" => "BLAST.tv",
                "code" => "bla",
                "icon_url" => "https://images.justwatch.com/icon/305250213/s100"
            ],
            [
                "id" => 1871,
                "name" => "BTV",
                "code" => "ben",
                "icon_url" => "https://images.justwatch.com/icon/304469228/s100"
            ],
            [
                "id" => 1911,
                "name" => "Bally Sports",
                "code" => "bsp",
                "icon_url" => "https://images.justwatch.com/icon/305470662/s100"
            ],
            [
                "id" => 1847,
                "name" => "Band Sports",
                "code" => "ban",
                "icon_url" => "https://images.justwatch.com/icon/302865136/s100"
            ],
            [
                "id" => 59,
                "name" => "Bbox VOD",
                "code" => "box",
                "icon_url" => "https://images.justwatch.com/icon/810793/s100"
            ],
            [
                "id" => 311,
                "name" => "Be TV Go",
                "code" => "btv",
                "icon_url" => "https://images.justwatch.com/icon/139612726/s100"
            ],
            [
                "id" => 448,
                "name" => "Beamafilm",
                "code" => "bmf",
                "icon_url" => "https://images.justwatch.com/icon/202329257/s100"
            ],
            [
                "id" => 1829,
                "name" => "Behind the Tree",
                "code" => "bht",
                "icon_url" => "https://images.justwatch.com/icon/302132146/s100"
            ],
            [
                "id" => 447,
                "name" => "Belas Artes à La Carte",
                "code" => "bac",
                "icon_url" => "https://images.justwatch.com/icon/202326287/s100"
            ],
            [
                "id" => 465,
                "name" => "Believe",
                "code" => "bli",
                "icon_url" => "https://images.justwatch.com/icon/207957738/s100"
            ],
            [
                "id" => 1738,
                "name" => "Benshi Amazon Channel",
                "code" => "bna",
                "icon_url" => "https://images.justwatch.com/icon/292993705/s100"
            ],
            [
                "id" => 1759,
                "name" => "Bet+",
                "code" => "bet",
                "icon_url" => "https://images.justwatch.com/icon/300312535/s100"
            ],
            [
                "id" => 343,
                "name" => "Bet+ Amazon Channel",
                "code" => "bpc",
                "icon_url" => "https://images.justwatch.com/icon/241732519/s100"
            ],
            [
                "id" => 466,
                "name" => "Bioskop Online",
                "code" => "bso",
                "icon_url" => "https://images.justwatch.com/icon/207956965/s100"
            ],
            [
                "id" => 423,
                "name" => "Blockbuster",
                "code" => "bck",
                "icon_url" => "https://images.justwatch.com/icon/200635226/s100"
            ],
            [
                "id" => 680,
                "name" => "Bloody Movies Amazon Channel",
                "code" => "abm",
                "icon_url" => "https://images.justwatch.com/icon/259198297/s100"
            ],
            [
                "id" => 1707,
                "name" => "BluTV Amazon Channel",
                "code" => "bta",
                "icon_url" => "https://images.justwatch.com/icon/280495389/s100"
            ],
            [
                "id" => 248,
                "name" => "Boomerang",
                "code" => "bmg",
                "icon_url" => "https://images.justwatch.com/icon/120144009/s100"
            ],
            [
                "id" => 288,
                "name" => "Boomerang Amazon Channel",
                "code" => "abo",
                "icon_url" => "https://images.justwatch.com/icon/241732465/s100"
            ],
            [
                "id" => 54,
                "name" => "BoxOffice",
                "code" => "bof",
                "icon_url" => "https://images.justwatch.com/icon/802191/s100"
            ],
            [
                "id" => 365,
                "name" => "Bravo TV",
                "code" => "brv",
                "icon_url" => "https://images.justwatch.com/icon/164156069/s100"
            ],
            [
                "id" => 151,
                "name" => "BritBox",
                "code" => "bbo",
                "icon_url" => "https://images.justwatch.com/icon/257378431/s100"
            ],
            [
                "id" => 380,
                "name" => "BritBox",
                "code" => "bbk",
                "icon_url" => "https://images.justwatch.com/icon/175038692/s100"
            ],
            [
                "id" => 197,
                "name" => "BritBox Amazon Channel",
                "code" => "abb",
                "icon_url" => "https://images.justwatch.com/icon/241732477/s100"
            ],
            [
                "id" => 1852,
                "name" => "Britbox Apple TV Channel ",
                "code" => "bba",
                "icon_url" => "https://images.justwatch.com/icon/303391365/s100"
            ],
            [
                "id" => 571,
                "name" => "British Pathé TV",
                "code" => "bph",
                "icon_url" => "https://images.justwatch.com/icon/244591964/s100"
            ],
            [
                "id" => 554,
                "name" => "BroadwayHD",
                "code" => "bhd",
                "icon_url" => "https://images.justwatch.com/icon/243239329/s100"
            ],
            [
                "id" => 1887,
                "name" => "BrutX Amazon Channel",
                "code" => "abx",
                "icon_url" => "https://images.justwatch.com/icon/304871950/s100"
            ],
            [
                "id" => 77,
                "name" => "C More",
                "code" => "cmr",
                "icon_url" => "https://images.justwatch.com/icon/914019/s100"
            ],
            [
                "id" => 314,
                "name" => "CBC Gem",
                "code" => "cbc",
                "icon_url" => "https://images.justwatch.com/icon/140132304/s100"
            ],
            [
                "id" => 78,
                "name" => "CBS",
                "code" => "cbs",
                "icon_url" => "https://images.justwatch.com/icon/920372/s100"
            ],
            [
                "id" => 1727,
                "name" => "CG Collection Amazon channel",
                "code" => "cga",
                "icon_url" => "https://images.justwatch.com/icon/292990600/s100"
            ],
            [
                "id" => 491,
                "name" => "CINE",
                "code" => "cin",
                "icon_url" => "https://images.justwatch.com/icon/208861591/s100"
            ],
            [
                "id" => 543,
                "name" => "CONTAR",
                "code" => "cta",
                "icon_url" => "https://images.justwatch.com/icon/243087257/s100"
            ],
            [
                "id" => 428,
                "name" => "CONtv",
                "code" => "con",
                "icon_url" => "https://images.justwatch.com/icon/200839941/s100"
            ],
            [
                "id" => 326,
                "name" => "CTV",
                "code" => "ctc",
                "icon_url" => "https://images.justwatch.com/icon/142828658/s100"
            ],
            [
                "id" => 206,
                "name" => "CW Seed",
                "code" => "cws",
                "icon_url" => "https://images.justwatch.com/icon/76259709/s100"
            ],
            [
                "id" => 1926,
                "name" => "Canal 11",
                "code" => "c11",
                "icon_url" => "https://images.justwatch.com/icon/306386684/s100"
            ],
            [
                "id" => 58,
                "name" => "Canal VOD",
                "code" => "cpv",
                "icon_url" => "https://images.justwatch.com/icon/107895447/s100"
            ],
            [
                "id" => 381,
                "name" => "Canal+",
                "code" => "cpd",
                "icon_url" => "https://images.justwatch.com/icon/176922513/s100"
            ],
            [
                "id" => 1719,
                "name" => "Canal+ Sport",
                "code" => "cas",
                "icon_url" => "https://images.justwatch.com/icon/156794180/s100"
            ],
            [
                "id" => 317,
                "name" => "Cartoon Network",
                "code" => "ctw",
                "icon_url" => "https://images.justwatch.com/icon/141257713/s100"
            ],
            [
                "id" => 159,
                "name" => "Catchplay",
                "code" => "ctp",
                "icon_url" => "https://images.justwatch.com/icon/6919820/s100"
            ],
            [
                "id" => 438,
                "name" => "Chai Flicks",
                "code" => "chf",
                "icon_url" => "https://images.justwatch.com/icon/201708663/s100"
            ],
            [
                "id" => 103,
                "name" => "Channel 4",
                "code" => "al4",
                "icon_url" => "https://images.justwatch.com/icon/306402519/s100"
            ],
            [
                "id" => 40,
                "name" => "Chili",
                "code" => "chi",
                "icon_url" => "https://images.justwatch.com/icon/301026480/s100"
            ],
            [
                "id" => 1730,
                "name" => "Cine Comico Amazon Channel",
                "code" => "cca",
                "icon_url" => "https://images.justwatch.com/icon/292990640/s100"
            ],
            [
                "id" => 1894,
                "name" => "CineAutore Amazon Channel",
                "code" => "acx",
                "icon_url" => "https://images.justwatch.com/icon/304873570/s100"
            ],
            [
                "id" => 639,
                "name" => "CineMember",
                "code" => "cim",
                "icon_url" => "https://images.justwatch.com/icon/255430086/s100"
            ],
            [
                "id" => 496,
                "name" => "Cineasterna",
                "code" => "cnt",
                "icon_url" => "https://images.justwatch.com/icon/208866846/s100"
            ],
            [
                "id" => 679,
                "name" => "Cinema of Hearts Amazon Channel",
                "code" => "ach",
                "icon_url" => "https://images.justwatch.com/icon/258861195/s100"
            ],
            [
                "id" => 324,
                "name" => "Cinemas a la Demande",
                "code" => "cad",
                "icon_url" => "https://images.justwatch.com/icon/142829638/s100"
            ],
            [
                "id" => 289,
                "name" => "Cinemax Amazon Channel",
                "code" => "acn",
                "icon_url" => "https://images.justwatch.com/icon/241732600/s100"
            ],
            [
                "id" => 140,
                "name" => "Cineplex",
                "code" => "cpx",
                "icon_url" => "https://images.justwatch.com/icon/301770104/s100"
            ],
            [
                "id" => 167,
                "name" => "Claro video",
                "code" => "clv",
                "icon_url" => "https://images.justwatch.com/icon/9899714/s100"
            ],
            [
                "id" => 445,
                "name" => "Classix",
                "code" => "cla",
                "icon_url" => "https://images.justwatch.com/icon/202068388/s100"
            ],
            [
                "id" => 469,
                "name" => "Club Illico",
                "code" => "cic",
                "icon_url" => "https://images.justwatch.com/icon/258219092/s100"
            ],
            [
                "id" => 1811,
                "name" => "Cohen Media Amazon Channel",
                "code" => "ace",
                "icon_url" => "https://images.justwatch.com/icon/301605243/s100"
            ],
            [
                "id" => 243,
                "name" => "Comedy Central",
                "code" => "com",
                "icon_url" => "https://images.justwatch.com/icon/112642053/s100"
            ],
            [
                "id" => 1706,
                "name" => "Comedy Central Plus Amazon Channel",
                "code" => "acc",
                "icon_url" => "https://images.justwatch.com/icon/280495722/s100"
            ],
            [
                "id" => 400,
                "name" => "Cooking Channel",
                "code" => "coo",
                "icon_url" => "https://images.justwatch.com/icon/198433892/s100"
            ],
            [
                "id" => 1881,
                "name" => "Coupang Play",
                "code" => "cou",
                "icon_url" => "https://images.justwatch.com/icon/304712363/s100"
            ],
            [
                "id" => 1763,
                "name" => "Courtside 1891",
                "code" => "csd",
                "icon_url" => "https://images.justwatch.com/icon/300661698/s100"
            ],
            [
                "id" => 12,
                "name" => "Crackle",
                "code" => "crk",
                "icon_url" => "https://images.justwatch.com/icon/176921838/s100"
            ],
            [
                "id" => 230,
                "name" => "Crave",
                "code" => "crv",
                "icon_url" => "https://images.justwatch.com/icon/92692011/s100"
            ],
            [
                "id" => 305,
                "name" => "Crave Starz",
                "code" => "crs",
                "icon_url" => "https://images.justwatch.com/icon/135207354/s100"
            ],
            [
                "id" => 1893,
                "name" => "Crime+ Investigation Play Amazon Channel",
                "code" => "aci",
                "icon_url" => "https://images.justwatch.com/icon/304873312/s100"
            ],
            [
                "id" => 258,
                "name" => "Criterion Channel",
                "code" => "crc",
                "icon_url" => "https://images.justwatch.com/icon/124249135/s100"
            ],
            [
                "id" => 283,
                "name" => "Crunchyroll",
                "code" => "cru",
                "icon_url" => "https://images.justwatch.com/icon/127445869/s100"
            ],
            [
                "id" => 692,
                "name" => "Cultpix",
                "code" => "ctx",
                "icon_url" => "https://images.justwatch.com/icon/264459628/s100"
            ],
            [
                "id" => 190,
                "name" => "Curiosity Stream",
                "code" => "cts",
                "icon_url" => "https://images.justwatch.com/icon/48600036/s100"
            ],
            [
                "id" => 603,
                "name" => "CuriosityStream Amazon Channel",
                "code" => "acs",
                "icon_url" => "https://images.justwatch.com/icon/248040459/s100"
            ],
            [
                "id" => 1745,
                "name" => "Curzon Amazon Channel",
                "code" => "cac",
                "icon_url" => "https://images.justwatch.com/icon/292999360/s100"
            ],
            [
                "id" => 189,
                "name" => "Curzon Home Cinema",
                "code" => "chc",
                "icon_url" => "https://images.justwatch.com/icon/301536333/s100"
            ],
            [
                "id" => 1905,
                "name" => "D-Smart Go",
                "code" => "dsg",
                "icon_url" => "https://images.justwatch.com/icon/304980822/s100"
            ],
            [
                "id" => 695,
                "name" => "DAZN",
                "code" => "dzn",
                "icon_url" => "https://images.justwatch.com/icon/284767886/s100"
            ],
            [
                "id" => 1837,
                "name" => "DAZN Amazon Channel",
                "code" => "dza",
                "icon_url" => "https://images.justwatch.com/icon/302502612/s100"
            ],
            [
                "id" => 358,
                "name" => "DIRECTV",
                "code" => "drv",
                "icon_url" => "https://images.justwatch.com/icon/158260222/s100"
            ],
            [
                "id" => 467,
                "name" => "DIRECTV GO",
                "code" => "dtg",
                "icon_url" => "https://images.justwatch.com/icon/207966895/s100"
            ],
            [
                "id" => 405,
                "name" => "DIY Network",
                "code" => "diy",
                "icon_url" => "https://images.justwatch.com/icon/198433903/s100"
            ],
            [
                "id" => 475,
                "name" => "DOCSVILLE",
                "code" => "dsv",
                "icon_url" => "https://images.justwatch.com/icon/208148387/s100"
            ],
            [
                "id" => 620,
                "name" => "DRTV",
                "code" => "drt",
                "icon_url" => "https://images.justwatch.com/icon/251185834/s100"
            ],
            [
                "id" => 621,
                "name" => "Dansk Filmskat",
                "code" => "dfk",
                "icon_url" => "https://images.justwatch.com/icon/251189071/s100"
            ],
            [
                "id" => 355,
                "name" => "Darkmatter TV",
                "code" => "dkm",
                "icon_url" => "https://images.justwatch.com/icon/155553229/s100"
            ],
            [
                "id" => 101,
                "name" => "Daum",
                "code" => "dam",
                "icon_url" => "https://images.justwatch.com/icon/2655283/s100"
            ],
            [
                "id" => 444,
                "name" => "Dekkoo",
                "code" => "dkk",
                "icon_url" => "https://images.justwatch.com/icon/202068207/s100"
            ],
            [
                "id" => 402,
                "name" => "Destination America",
                "code" => "dea",
                "icon_url" => "https://images.justwatch.com/icon/198433897/s100"
            ],
            [
                "id" => 403,
                "name" => "Discovery",
                "code" => "dis",
                "icon_url" => "https://images.justwatch.com/icon/198441211/s100"
            ],
            [
                "id" => 1708,
                "name" => "Discovery Amazon Channel",
                "code" => "dca",
                "icon_url" => "https://images.justwatch.com/icon/280495747/s100"
            ],
            [
                "id" => 404,
                "name" => "Discovery Life",
                "code" => "dil",
                "icon_url" => "https://images.justwatch.com/icon/198433900/s100"
            ],
            [
                "id" => 524,
                "name" => "Discovery Plus",
                "code" => "dpe",
                "icon_url" => "https://images.justwatch.com/icon/241126382/s100"
            ],
            [
                "id" => 510,
                "name" => "Discovery Plus",
                "code" => "dsp",
                "icon_url" => "https://images.justwatch.com/icon/240558410/s100"
            ],
            [
                "id" => 584,
                "name" => "Discovery Plus Amazon Channel",
                "code" => "adp",
                "icon_url" => "https://images.justwatch.com/icon/246478706/s100"
            ],
            [
                "id" => 1835,
                "name" => "Discovery Plus Sport Amazon Channel",
                "code" => "aps",
                "icon_url" => "https://images.justwatch.com/icon/302467526/s100"
            ],
            [
                "id" => 337,
                "name" => "Disney Plus",
                "code" => "dnp",
                "icon_url" => "https://images.justwatch.com/icon/147638351/s100"
            ],
            [
                "id" => 508,
                "name" => "DisneyNOW",
                "code" => "dnw",
                "icon_url" => "https://images.justwatch.com/icon/209565063/s100"
            ],
            [
                "id" => 1741,
                "name" => "Dizi Amazon Channel",
                "code" => "dac",
                "icon_url" => "https://images.justwatch.com/icon/292993873/s100"
            ],
            [
                "id" => 569,
                "name" => "DocAlliance Films",
                "code" => "daf",
                "icon_url" => "https://images.justwatch.com/icon/244290074/s100"
            ],
            [
                "id" => 357,
                "name" => "DocPlay",
                "code" => "doc",
                "icon_url" => "https://images.justwatch.com/icon/156421688/s100"
            ],
            [
                "id" => 604,
                "name" => "DocuBay Amazon Channel",
                "code" => "ado",
                "icon_url" => "https://images.justwatch.com/icon/248040844/s100"
            ],
            [
                "id" => 536,
                "name" => "Dogwoof On Demand",
                "code" => "dog",
                "icon_url" => "https://images.justwatch.com/icon/242710905/s100"
            ],
            [
                "id" => 254,
                "name" => "Dove Channel",
                "code" => "dvc",
                "icon_url" => "https://images.justwatch.com/icon/123316731/s100"
            ],
            [
                "id" => 435,
                "name" => "Draken Films",
                "code" => "drf",
                "icon_url" => "https://images.justwatch.com/icon/201699458/s100"
            ],
            [
                "id" => 263,
                "name" => "DreamWorksTV Amazon Channel",
                "code" => "adw",
                "icon_url" => "https://images.justwatch.com/icon/241732608/s100"
            ],
            [
                "id" => 1828,
                "name" => "ELEVEN ",
                "code" => "ele",
                "icon_url" => "https://images.justwatch.com/icon/302124258/s100"
            ],
            [
                "id" => 476,
                "name" => "EPIC ON",
                "code" => "epc",
                "icon_url" => "https://images.justwatch.com/icon/208171262/s100"
            ],
            [
                "id" => 1718,
                "name" => "ESPN",
                "code" => "esp",
                "icon_url" => "https://images.justwatch.com/icon/287952425/s100"
            ],
            [
                "id" => 1765,
                "name" => "ESPN 2",
                "code" => "es2",
                "icon_url" => "https://images.justwatch.com/icon/300699474/s100"
            ],
            [
                "id" => 1766,
                "name" => "ESPN 3",
                "code" => "es3",
                "icon_url" => "https://images.justwatch.com/icon/300699472/s100"
            ],
            [
                "id" => 1821,
                "name" => "ESPN 4",
                "code" => "es4",
                "icon_url" => "https://images.justwatch.com/icon/301772974/s100"
            ],
            [
                "id" => 1767,
                "name" => "ESPN Deportes",
                "code" => "esd",
                "icon_url" => "https://images.justwatch.com/icon/300699469/s100"
            ],
            [
                "id" => 1798,
                "name" => "ESPN Player",
                "code" => "epl",
                "icon_url" => "https://images.justwatch.com/icon/301463346/s100"
            ],
            [
                "id" => 1768,
                "name" => "ESPN Plus",
                "code" => "epp",
                "icon_url" => "https://images.justwatch.com/icon/300699465/s100"
            ],
            [
                "id" => 628,
                "name" => "Edisonline",
                "code" => "edo",
                "icon_url" => "https://images.justwatch.com/icon/252210238/s100"
            ],
            [
                "id" => 540,
                "name" => "Elisa Viihde",
                "code" => "elv",
                "icon_url" => "https://images.justwatch.com/icon/243086901/s100"
            ],
            [
                "id" => 218,
                "name" => "Eros Now",
                "code" => "ern",
                "icon_url" => "https://images.justwatch.com/icon/247912837/s100"
            ],
            [
                "id" => 595,
                "name" => "Eros Now Amazon Channel",
                "code" => "aen",
                "icon_url" => "https://images.justwatch.com/icon/247989096/s100"
            ],
            [
                "id" => 1705,
                "name" => "Eurosport",
                "code" => "eus",
                "icon_url" => "https://images.justwatch.com/icon/305487688/s100"
            ],
            [
                "id" => 677,
                "name" => "Eventive",
                "code" => "eve",
                "icon_url" => "https://images.justwatch.com/icon/258768419/s100"
            ],
            [
                "id" => 1791,
                "name" => "Exxen",
                "code" => "exn",
                "icon_url" => "https://images.justwatch.com/icon/301272467/s100"
            ],
            [
                "id" => 1720,
                "name" => "F1TV Pro",
                "code" => "f1t",
                "icon_url" => "https://images.justwatch.com/icon/303972156/s100"
            ],
            [
                "id" => 1814,
                "name" => "FFF tv",
                "code" => "fff",
                "icon_url" => "https://images.justwatch.com/icon/301667161/s100"
            ],
            [
                "id" => 1934,
                "name" => "FIFA+",
                "code" => "fif",
                "icon_url" => "https://images.justwatch.com/icon/306585562/s100"
            ],
            [
                "id" => 138,
                "name" => "FILMO",
                "code" => "flt",
                "icon_url" => "https://images.justwatch.com/icon/259364847/s100"
            ],
            [
                "id" => 471,
                "name" => "FILMRISE",
                "code" => "flr",
                "icon_url" => "https://images.justwatch.com/icon/207967415/s100"
            ],
            [
                "id" => 1848,
                "name" => "FOX Soccer Plus",
                "code" => "fxp",
                "icon_url" => "https://images.justwatch.com/icon/302869814/s100"
            ],
            [
                "id" => 123,
                "name" => "FXNow",
                "code" => "fxn",
                "icon_url" => "https://images.justwatch.com/icon/4259277/s100"
            ],
            [
                "id" => 348,
                "name" => "FXNow Canada",
                "code" => "fxc",
                "icon_url" => "https://images.justwatch.com/icon/152779709/s100"
            ],
            [
                "id" => 1917,
                "name" => "FanCode",
                "code" => "fco",
                "icon_url" => "https://images.justwatch.com/icon/305776092/s100"
            ],
            [
                "id" => 60,
                "name" => "Fandango",
                "code" => "fad",
                "icon_url" => "https://images.justwatch.com/icon/811323/s100"
            ],
            [
                "id" => 25,
                "name" => "Fandor",
                "code" => "fnd",
                "icon_url" => "https://images.justwatch.com/icon/554608/s100"
            ],
            [
                "id" => 199,
                "name" => "Fandor Amazon Channel",
                "code" => "afa",
                "icon_url" => "https://images.justwatch.com/icon/241732565/s100"
            ],
            [
                "id" => 436,
                "name" => "Fetch TV",
                "code" => "fet",
                "icon_url" => "https://images.justwatch.com/icon/201704042/s100"
            ],
            [
                "id" => 579,
                "name" => "Film Movement Plus",
                "code" => "fmp",
                "icon_url" => "https://images.justwatch.com/icon/244703360/s100"
            ],
            [
                "id" => 681,
                "name" => "Film Total Amazon Channel",
                "code" => "aft",
                "icon_url" => "https://images.justwatch.com/icon/259251204/s100"
            ],
            [
                "id" => 396,
                "name" => "Film1",
                "code" => "fm1",
                "icon_url" => "https://images.justwatch.com/icon/198266104/s100"
            ],
            [
                "id" => 602,
                "name" => "FilmBox Live Amazon Channel",
                "code" => "afb",
                "icon_url" => "https://images.justwatch.com/icon/248033724/s100"
            ],
            [
                "id" => 701,
                "name" => "FilmBox+",
                "code" => "flb",
                "icon_url" => "https://images.justwatch.com/icon/269959825/s100"
            ],
            [
                "id" => 566,
                "name" => "Filme Filme",
                "code" => "ffe",
                "icon_url" => "https://images.justwatch.com/icon/244289810/s100"
            ],
            [
                "id" => 63,
                "name" => "Filmin",
                "code" => "fil",
                "icon_url" => "https://images.justwatch.com/icon/187161245/s100"
            ],
            [
                "id" => 66,
                "name" => "Filmin Latino",
                "code" => "fll",
                "icon_url" => "https://images.justwatch.com/icon/816701/s100"
            ],
            [
                "id" => 64,
                "name" => "Filmin Plus",
                "code" => "fip",
                "icon_url" => "https://images.justwatch.com/icon/188383996/s100"
            ],
            [
                "id" => 678,
                "name" => "Filmlegenden Amazon Channel",
                "code" => "afg",
                "icon_url" => "https://images.justwatch.com/icon/258861113/s100"
            ],
            [
                "id" => 1734,
                "name" => "Filmo Amazon Channel",
                "code" => "fla",
                "icon_url" => "https://images.justwatch.com/icon/292993620/s100"
            ],
            [
                "id" => 560,
                "name" => "Filmoteket",
                "code" => "fmt",
                "icon_url" => "https://images.justwatch.com/icon/251078938/s100"
            ],
            [
                "id" => 1861,
                "name" => "Filmow",
                "code" => "fow",
                "icon_url" => "https://images.justwatch.com/icon/304059603/s100"
            ],
            [
                "id" => 443,
                "name" => "Filmstriben",
                "code" => "fsb",
                "icon_url" => "https://images.justwatch.com/icon/202047958/s100"
            ],
            [
                "id" => 480,
                "name" => "Filmtastic",
                "code" => "ftc",
                "icon_url" => "https://images.justwatch.com/icon/209710278/s100"
            ],
            [
                "id" => 334,
                "name" => "Filmtastic Amazon Channel",
                "code" => "fac",
                "icon_url" => "https://images.justwatch.com/icon/241732478/s100"
            ],
            [
                "id" => 1929,
                "name" => "Filmtastic bei Canal+",
                "code" => "fsc",
                "icon_url" => "https://images.justwatch.com/icon/306521650/s100"
            ],
            [
                "id" => 559,
                "name" => "Filmzie",
                "code" => "fmz",
                "icon_url" => "https://images.justwatch.com/icon/269433194/s100"
            ],
            [
                "id" => 142,
                "name" => "Flimmit",
                "code" => "fli",
                "icon_url" => "https://images.justwatch.com/icon/5561882/s100"
            ],
            [
                "id" => 432,
                "name" => "Flix Premiere",
                "code" => "fpm",
                "icon_url" => "https://images.justwatch.com/icon/201076273/s100"
            ],
            [
                "id" => 331,
                "name" => "FlixFling",
                "code" => "fxf",
                "icon_url" => "https://images.justwatch.com/icon/147271109/s100"
            ],
            [
                "id" => 393,
                "name" => "FlixOlé",
                "code" => "flx",
                "icon_url" => "https://images.justwatch.com/icon/273964237/s100"
            ],
            [
                "id" => 684,
                "name" => "FlixOlé Amazon Channel",
                "code" => "afl",
                "icon_url" => "https://images.justwatch.com/icon/259252096/s100"
            ],
            [
                "id" => 1824,
                "name" => "Flo Rugby",
                "code" => "flo",
                "icon_url" => "https://images.justwatch.com/icon/301862515/s100"
            ],
            [
                "id" => 366,
                "name" => "Food Network",
                "code" => "fnw",
                "icon_url" => "https://images.justwatch.com/icon/165029433/s100"
            ],
            [
                "id" => 328,
                "name" => "Fox",
                "code" => "fus",
                "icon_url" => "https://images.justwatch.com/icon/144006145/s100"
            ],
            [
                "id" => 1799,
                "name" => "Fox Sports",
                "code" => "fsp",
                "icon_url" => "https://images.justwatch.com/icon/301540374/s100"
            ],
            [
                "id" => 1776,
                "name" => "Fox Sports 1",
                "code" => "fs1",
                "icon_url" => "https://images.justwatch.com/icon/303799735/s100"
            ],
            [
                "id" => 1921,
                "name" => "Fox Sports 2",
                "code" => "fs2",
                "icon_url" => "https://images.justwatch.com/icon/305877499/s100"
            ],
            [
                "id" => 134,
                "name" => "Foxtel Now",
                "code" => "ftp",
                "icon_url" => "https://images.justwatch.com/icon/304552876/s100"
            ],
            [
                "id" => 236,
                "name" => "France TV",
                "code" => "ftv",
                "icon_url" => "https://images.justwatch.com/icon/306569019/s100"
            ],
            [
                "id" => 590,
                "name" => "Free - All",
                "code" => "fre",
                "icon_url" => "https://images.justwatch.com/icon/246939335/s100"
            ],
            [
                "id" => 211,
                "name" => "Freeform",
                "code" => "ffm",
                "icon_url" => "https://images.justwatch.com/icon/79299282/s100"
            ],
            [
                "id" => 613,
                "name" => "Freevee",
                "code" => "aim",
                "icon_url" => "https://images.justwatch.com/icon/302949424/s100"
            ],
            [
                "id" => 1729,
                "name" => "Full Action Amazon Channel",
                "code" => "faa",
                "icon_url" => "https://images.justwatch.com/icon/292990634/s100"
            ],
            [
                "id" => 597,
                "name" => "Full Moon Amazon Channel",
                "code" => "afm",
                "icon_url" => "https://images.justwatch.com/icon/248032677/s100"
            ],
            [
                "id" => 269,
                "name" => "Funimation Now",
                "code" => "fmn",
                "icon_url" => "https://images.justwatch.com/icon/133139893/s100"
            ],
            [
                "id" => 477,
                "name" => "GOSPEL PLAY",
                "code" => "gos",
                "icon_url" => "https://images.justwatch.com/icon/208171655/s100"
            ],
            [
                "id" => 1709,
                "name" => "GRJNGO Amazon Channel",
                "code" => "gja",
                "icon_url" => "https://images.justwatch.com/icon/280495770/s100"
            ],
            [
                "id" => 1802,
                "name" => "Gameflow TV",
                "code" => "gfl",
                "icon_url" => "https://images.justwatch.com/icon/301567647/s100"
            ],
            [
                "id" => 449,
                "name" => "Global TV",
                "code" => "gtv",
                "icon_url" => "https://images.justwatch.com/icon/202330165/s100"
            ],
            [
                "id" => 307,
                "name" => "Globoplay",
                "code" => "gop",
                "icon_url" => "https://images.justwatch.com/icon/270278212/s100"
            ],
            [
                "id" => 373,
                "name" => "Go3",
                "code" => "gth",
                "icon_url" => "https://images.justwatch.com/icon/167804998/s100"
            ],
            [
                "id" => 1803,
                "name" => "Gol Mundial",
                "code" => "gol",
                "icon_url" => "https://images.justwatch.com/icon/301587078/s100"
            ],
            [
                "id" => 3,
                "name" => "Google Play Movies",
                "code" => "ply",
                "icon_url" => "https://images.justwatch.com/icon/169478387/s100"
            ],
            [
                "id" => 100,
                "name" => "GuideDoc",
                "code" => "gdc",
                "icon_url" => "https://images.justwatch.com/icon/2625277/s100"
            ],
            [
                "id" => 425,
                "name" => "HBO Go",
                "code" => "hba",
                "icon_url" => "https://images.justwatch.com/icon/200839148/s100"
            ],
            [
                "id" => 384,
                "name" => "HBO Max",
                "code" => "hbm",
                "icon_url" => "https://images.justwatch.com/icon/285237061/s100"
            ],
            [
                "id" => 616,
                "name" => "HBO Max Free",
                "code" => "hmf",
                "icon_url" => "https://images.justwatch.com/icon/249359407/s100"
            ],
            [
                "id" => 406,
                "name" => "HGTV",
                "code" => "hgt",
                "icon_url" => "https://images.justwatch.com/icon/198433905/s100"
            ],
            [
                "id" => 631,
                "name" => "HRTi",
                "code" => "hrt",
                "icon_url" => "https://images.justwatch.com/icon/252388724/s100"
            ],
            [
                "id" => 281,
                "name" => "Hallmark Movies",
                "code" => "hmm",
                "icon_url" => "https://images.justwatch.com/icon/127435091/s100"
            ],
            [
                "id" => 290,
                "name" => "Hallmark Movies Now Amazon Channel",
                "code" => "ahm",
                "icon_url" => "https://images.justwatch.com/icon/241732526/s100"
            ],
            [
                "id" => 1746,
                "name" => "Hallmark TV Amazon Channel",
                "code" => "hma",
                "icon_url" => "https://images.justwatch.com/icon/292999370/s100"
            ],
            [
                "id" => 223,
                "name" => "Hayu",
                "code" => "hay",
                "icon_url" => "https://images.justwatch.com/icon/301318462/s100"
            ],
            [
                "id" => 296,
                "name" => "Hayu Amazon Channel",
                "code" => "ahy",
                "icon_url" => "https://images.justwatch.com/icon/241732559/s100"
            ],
            [
                "id" => 1906,
                "name" => "Helbiz Amazon Channel",
                "code" => "ahz",
                "icon_url" => "https://images.justwatch.com/icon/305045195/s100"
            ],
            [
                "id" => 1907,
                "name" => "Helbiz Live",
                "code" => "hlb",
                "icon_url" => "https://images.justwatch.com/icon/305045434/s100"
            ],
            [
                "id" => 417,
                "name" => "Here TV",
                "code" => "hrv",
                "icon_url" => "https://images.justwatch.com/icon/199216642/s100"
            ],
            [
                "id" => 503,
                "name" => "Hi-YAH",
                "code" => "hyh",
                "icon_url" => "https://images.justwatch.com/icon/209563206/s100"
            ],
            [
                "id" => 430,
                "name" => "HiDive",
                "code" => "hdv",
                "icon_url" => "https://images.justwatch.com/icon/254161830/s100"
            ],
            [
                "id" => 1743,
                "name" => "Historia y Actualidad Amazon Channel",
                "code" => "haa",
                "icon_url" => "https://images.justwatch.com/icon/292999313/s100"
            ],
            [
                "id" => 155,
                "name" => "History",
                "code" => "his",
                "icon_url" => "https://images.justwatch.com/icon/6675367/s100"
            ],
            [
                "id" => 478,
                "name" => "History Play",
                "code" => "hpl",
                "icon_url" => "https://images.justwatch.com/icon/208172686/s100"
            ],
            [
                "id" => 268,
                "name" => "History Vault",
                "code" => "hvt",
                "icon_url" => "https://images.justwatch.com/icon/124941612/s100"
            ],
            [
                "id" => 1710,
                "name" => "HistoryPlay Amazon Channel",
                "code" => "hpa",
                "icon_url" => "https://images.justwatch.com/icon/280495794/s100"
            ],
            [
                "id" => 315,
                "name" => "Hoichoi",
                "code" => "hoc",
                "icon_url" => "https://images.justwatch.com/icon/141253805/s100"
            ],
            [
                "id" => 182,
                "name" => "Hollywood Suite",
                "code" => "hws",
                "icon_url" => "https://images.justwatch.com/icon/240029384/s100"
            ],
            [
                "id" => 705,
                "name" => "Hollywood Suite Amazon Channel",
                "code" => "hsa",
                "icon_url" => "https://images.justwatch.com/icon/278652050/s100"
            ],
            [
                "id" => 479,
                "name" => "Home of Horror",
                "code" => "hoh",
                "icon_url" => "https://images.justwatch.com/icon/209710239/s100"
            ],
            [
                "id" => 686,
                "name" => "Home of Horror Amazon Channel",
                "code" => "ahh",
                "icon_url" => "https://images.justwatch.com/icon/259303763/s100"
            ],
            [
                "id" => 212,
                "name" => "Hoopla",
                "code" => "hop",
                "icon_url" => "https://images.justwatch.com/icon/80212823/s100"
            ],
            [
                "id" => 1890,
                "name" => "Hopster Amazon Channel",
                "code" => "ahs",
                "icon_url" => "https://images.justwatch.com/icon/304872094/s100"
            ],
            [
                "id" => 267,
                "name" => "Hopster TV",
                "code" => "htv",
                "icon_url" => "https://images.justwatch.com/icon/124941576/s100"
            ],
            [
                "id" => 250,
                "name" => "Horizon",
                "code" => "hrz",
                "icon_url" => "https://images.justwatch.com/icon/121147207/s100"
            ],
            [
                "id" => 122,
                "name" => "Hotstar",
                "code" => "hst",
                "icon_url" => "https://images.justwatch.com/icon/240029443/s100"
            ],
            [
                "id" => 15,
                "name" => "Hulu",
                "code" => "hlu",
                "icon_url" => "https://images.justwatch.com/icon/116305230/s100"
            ],
            [
                "id" => 437,
                "name" => "Hungama Play",
                "code" => "hgp",
                "icon_url" => "https://images.justwatch.com/icon/201704934/s100"
            ],
            [
                "id" => 1919,
                "name" => "ICC.tv",
                "code" => "icc",
                "icon_url" => "https://images.justwatch.com/icon/305823861/s100"
            ],
            [
                "id" => 587,
                "name" => "IFC Amazon Channel",
                "code" => "acu",
                "icon_url" => "https://images.justwatch.com/icon/246682769/s100"
            ],
            [
                "id" => 548,
                "name" => "IFFR Unleashed",
                "code" => "ifr",
                "icon_url" => "https://images.justwatch.com/icon/243230718/s100"
            ],
            [
                "id" => 1737,
                "name" => "INA  madelen Amazon Channel",
                "code" => "ina",
                "icon_url" => "https://images.justwatch.com/icon/292993685/s100"
            ],
            [
                "id" => 549,
                "name" => "IPLA",
                "code" => "ipl",
                "icon_url" => "https://images.justwatch.com/icon/243231876/s100"
            ],
            [
                "id" => 704,
                "name" => "IROKOTV",
                "code" => "irk",
                "icon_url" => "https://images.justwatch.com/icon/273903329/s100"
            ],
            [
                "id" => 598,
                "name" => "ITV Amazon Channel",
                "code" => "ait",
                "icon_url" => "https://images.justwatch.com/icon/302164531/s100"
            ],
            [
                "id" => 41,
                "name" => "ITVX",
                "code" => "itv",
                "icon_url" => "https://images.justwatch.com/icon/302120301/s100"
            ],
            [
                "id" => 1744,
                "name" => "Icon Film Amazon Channel",
                "code" => "ifa",
                "icon_url" => "https://images.justwatch.com/icon/292999351/s100"
            ],
            [
                "id" => 368,
                "name" => "IndieFlix",
                "code" => "ind",
                "icon_url" => "https://images.justwatch.com/icon/165029440/s100"
            ],
            [
                "id" => 1726,
                "name" => "Infinity Selection Amazon Channel",
                "code" => "isa",
                "icon_url" => "https://images.justwatch.com/icon/292990286/s100"
            ],
            [
                "id" => 110,
                "name" => "Infinity+",
                "code" => "inf",
                "icon_url" => "https://images.justwatch.com/icon/302588247/s100"
            ],
            [
                "id" => 1735,
                "name" => "Insomnia Amazon Channel",
                "code" => "ima",
                "icon_url" => "https://images.justwatch.com/icon/292993648/s100"
            ],
            [
                "id" => 408,
                "name" => "Investigation Discovery",
                "code" => "inv",
                "icon_url" => "https://images.justwatch.com/icon/198433912/s100"
            ],
            [
                "id" => 113,
                "name" => "Ivi",
                "code" => "ivr",
                "icon_url" => "https://images.justwatch.com/icon/3656257/s100"
            ],
            [
                "id" => 220,
                "name" => "Jio Cinema",
                "code" => "jio",
                "icon_url" => "https://images.justwatch.com/icon/85114140/s100"
            ],
            [
                "id" => 304,
                "name" => "Joyn",
                "code" => "jyn",
                "icon_url" => "https://images.justwatch.com/icon/305460189/s100"
            ],
            [
                "id" => 421,
                "name" => "Joyn Plus",
                "code" => "jpl",
                "icon_url" => "https://images.justwatch.com/icon/199382334/s100"
            ],
            [
                "id" => 1936,
                "name" => "KBS",
                "code" => "kbs",
                "icon_url" => "https://images.justwatch.com/icon/306598677/s100"
            ],
            [
                "id" => 624,
                "name" => "KKTV",
                "code" => "kkt",
                "icon_url" => "https://images.justwatch.com/icon/251753992/s100"
            ],
            [
                "id" => 563,
                "name" => "KPN",
                "code" => "kpn",
                "icon_url" => "https://images.justwatch.com/icon/243526629/s100"
            ],
            [
                "id" => 191,
                "name" => "Kanopy",
                "code" => "knp",
                "icon_url" => "https://images.justwatch.com/icon/241588643/s100"
            ],
            [
                "id" => 640,
                "name" => "Kino Now",
                "code" => "knw",
                "icon_url" => "https://images.justwatch.com/icon/255472309/s100"
            ],
            [
                "id" => 349,
                "name" => "Kino on Demand",
                "code" => "kod",
                "icon_url" => "https://images.justwatch.com/icon/152891767/s100"
            ],
            [
                "id" => 573,
                "name" => "KinoPop",
                "code" => "kip",
                "icon_url" => "https://images.justwatch.com/icon/244592005/s100"
            ],
            [
                "id" => 1927,
                "name" => "Kinobox",
                "code" => "kbx",
                "icon_url" => "https://images.justwatch.com/icon/306398795/s100"
            ],
            [
                "id" => 117,
                "name" => "Kinopoisk",
                "code" => "kpk",
                "icon_url" => "https://images.justwatch.com/icon/263534436/s100"
            ],
            [
                "id" => 463,
                "name" => "Kirjastokino",
                "code" => "kir",
                "icon_url" => "https://images.justwatch.com/icon/207331701/s100"
            ],
            [
                "id" => 1793,
                "name" => "Klassiki",
                "code" => "kls",
                "icon_url" => "https://images.justwatch.com/icon/301297790/s100"
            ],
            [
                "id" => 576,
                "name" => "Klik Film",
                "code" => "klk",
                "icon_url" => "https://images.justwatch.com/icon/244592395/s100"
            ],
            [
                "id" => 525,
                "name" => "Knowledge Network",
                "code" => "knn",
                "icon_url" => "https://images.justwatch.com/icon/241370745/s100"
            ],
            [
                "id" => 464,
                "name" => "Kocowa",
                "code" => "koc",
                "icon_url" => "https://images.justwatch.com/icon/304992331/s100"
            ],
            [
                "id" => 575,
                "name" => "KoreaOnDemand",
                "code" => "kor",
                "icon_url" => "https://images.justwatch.com/icon/244592296/s100"
            ],
            [
                "id" => 1772,
                "name" => "L Equipe",
                "code" => "leq",
                "icon_url" => "https://images.justwatch.com/icon/300770443/s100"
            ],
            [
                "id" => 625,
                "name" => "LINE TV",
                "code" => "lin",
                "icon_url" => "https://images.justwatch.com/icon/251754446/s100"
            ],
            [
                "id" => 310,
                "name" => "LaCinetek",
                "code" => "lct",
                "icon_url" => "https://images.justwatch.com/icon/137921834/s100"
            ],
            [
                "id" => 1840,
                "name" => "Las Estrellas",
                "code" => "les",
                "icon_url" => "https://images.justwatch.com/icon/302584214/s100"
            ],
            [
                "id" => 275,
                "name" => "Laugh Out Loud",
                "code" => "lol",
                "icon_url" => "https://images.justwatch.com/icon/127412694/s100"
            ],
            [
                "id" => 544,
                "name" => "Libreflix",
                "code" => "lfl",
                "icon_url" => "https://images.justwatch.com/icon/243087398/s100"
            ],
            [
                "id" => 157,
                "name" => "Lifetime",
                "code" => "lft",
                "icon_url" => "https://images.justwatch.com/icon/6675988/s100"
            ],
            [
                "id" => 284,
                "name" => "Lifetime Movie Club",
                "code" => "lmc",
                "icon_url" => "https://images.justwatch.com/icon/127573922/s100"
            ],
            [
                "id" => 1865,
                "name" => "Ligue 1 Amazon Channel",
                "code" => "lam",
                "icon_url" => "https://images.justwatch.com/icon/304224052/s100"
            ],
            [
                "id" => 561,
                "name" => "Lionsgate Play",
                "code" => "lgp",
                "icon_url" => "https://images.justwatch.com/icon/243489840/s100"
            ],
            [
                "id" => 1790,
                "name" => "Lionsgate Plus",
                "code" => "lgu",
                "icon_url" => "https://images.justwatch.com/icon/301254350/s100"
            ],
            [
                "id" => 420,
                "name" => "Logo TV",
                "code" => "ltv",
                "icon_url" => "https://images.justwatch.com/icon/199382333/s100"
            ],
            [
                "id" => 47,
                "name" => "Looke",
                "code" => "lke",
                "icon_url" => "https://images.justwatch.com/icon/755940/s100"
            ],
            [
                "id" => 683,
                "name" => "Looke Amazon Channel",
                "code" => "alo",
                "icon_url" => "https://images.justwatch.com/icon/259251955/s100"
            ],
            [
                "id" => 608,
                "name" => "Love Nature Amazon Channel",
                "code" => "aln",
                "icon_url" => "https://images.justwatch.com/icon/248045090/s100"
            ],
            [
                "id" => 1788,
                "name" => "Love and Passion Amazon Channel",
                "code" => "lap",
                "icon_url" => "https://images.justwatch.com/icon/301120369/s100"
            ],
            [
                "id" => 1834,
                "name" => "MARCA Claro",
                "code" => "mcl",
                "icon_url" => "https://images.justwatch.com/icon/302425369/s100"
            ],
            [
                "id" => 483,
                "name" => "MAX Stream",
                "code" => "mxs",
                "icon_url" => "https://images.justwatch.com/icon/208853029/s100"
            ],
            [
                "id" => 1938,
                "name" => "MBC",
                "code" => "mbc",
                "icon_url" => "https://images.justwatch.com/icon/306611855/s100"
            ],
            [
                "id" => 588,
                "name" => "MGM Amazon Channel",
                "code" => "amg",
                "icon_url" => "https://images.justwatch.com/icon/246682790/s100"
            ],
            [
                "id" => 34,
                "name" => "MGM Plus",
                "code" => "epx",
                "icon_url" => "https://images.justwatch.com/icon/302467394/s100"
            ],
            [
                "id" => 583,
                "name" => "MGM Plus Amazon Channel",
                "code" => "aep",
                "icon_url" => "https://images.justwatch.com/icon/302467404/s100"
            ],
            [
                "id" => 636,
                "name" => "MGM Plus Roku Premium Channel",
                "code" => "erk",
                "icon_url" => "https://images.justwatch.com/icon/302467432/s100"
            ],
            [
                "id" => 1897,
                "name" => "MIDNIGHT FACTORY Amazon Channel",
                "code" => "amf",
                "icon_url" => "https://images.justwatch.com/icon/304873669/s100"
            ],
            [
                "id" => 1877,
                "name" => "MLB Network",
                "code" => "mln",
                "icon_url" => "https://images.justwatch.com/icon/304571526/s100"
            ],
            [
                "id" => 1769,
                "name" => "MLB TV",
                "code" => "mlb",
                "icon_url" => "https://images.justwatch.com/icon/300677816/s100"
            ],
            [
                "id" => 1867,
                "name" => "MLB.TV Amazon Channel",
                "code" => "apb",
                "icon_url" => "https://images.justwatch.com/icon/304359795/s100"
            ],
            [
                "id" => 1851,
                "name" => "MLS Season Pass",
                "code" => "mls",
                "icon_url" => "https://images.justwatch.com/icon/303372959/s100"
            ],
            [
                "id" => 1830,
                "name" => "MOLA TV",
                "code" => "mol",
                "icon_url" => "https://images.justwatch.com/icon/302176989/s100"
            ],
            [
                "id" => 453,
                "name" => "MTV",
                "code" => "mtv",
                "icon_url" => "https://images.justwatch.com/icon/202918396/s100"
            ],
            [
                "id" => 1711,
                "name" => "MTV Plus Amazon Channel",
                "code" => "mta",
                "icon_url" => "https://images.justwatch.com/icon/280495798/s100"
            ],
            [
                "id" => 11,
                "name" => "MUBI",
                "code" => "mbi",
                "icon_url" => "https://images.justwatch.com/icon/164970114/s100"
            ],
            [
                "id" => 201,
                "name" => "MUBI Amazon Channel",
                "code" => "amu",
                "icon_url" => "https://images.justwatch.com/icon/241732473/s100"
            ],
            [
                "id" => 515,
                "name" => "MX Player",
                "code" => "mxp",
                "icon_url" => "https://images.justwatch.com/icon/210188316/s100"
            ],
            [
                "id" => 291,
                "name" => "MZ Choice Amazon Channel",
                "code" => "ame",
                "icon_url" => "https://images.justwatch.com/icon/241732594/s100"
            ],
            [
                "id" => 551,
                "name" => "Magellan TV",
                "code" => "mgl",
                "icon_url" => "https://images.justwatch.com/icon/243233518/s100"
            ],
            [
                "id" => 1856,
                "name" => "Magenta TV",
                "code" => "mgt",
                "icon_url" => "https://images.justwatch.com/icon/303473533/s100"
            ],
            [
                "id" => 178,
                "name" => "MagentaTV",
                "code" => "etv",
                "icon_url" => "https://images.justwatch.com/icon/133004475/s100"
            ],
            [
                "id" => 259,
                "name" => "Magnolia Selects",
                "code" => "mns",
                "icon_url" => "https://images.justwatch.com/icon/124651823/s100"
            ],
            [
                "id" => 482,
                "name" => "ManoramaMax",
                "code" => "mrx",
                "icon_url" => "https://images.justwatch.com/icon/208852613/s100"
            ],
            [
                "id" => 568,
                "name" => "Martha Stewart TV",
                "code" => "mst",
                "icon_url" => "https://images.justwatch.com/icon/244290040/s100"
            ],
            [
                "id" => 1899,
                "name" => "Max",
                "code" => "mxx",
                "icon_url" => "https://images.justwatch.com/icon/305458112/s100"
            ],
            [
                "id" => 1825,
                "name" => "Max Amazon Channel",
                "code" => "aho",
                "icon_url" => "https://images.justwatch.com/icon/305591736/s100"
            ],
            [
                "id" => 6,
                "name" => "Maxdome",
                "code" => "max",
                "icon_url" => "https://images.justwatch.com/icon/430988/s100"
            ],
            [
                "id" => 359,
                "name" => "Mediaset Infinity",
                "code" => "msp",
                "icon_url" => "https://images.justwatch.com/icon/302588254/s100"
            ],
            [
                "id" => 98,
                "name" => "Megabox",
                "code" => "mbx",
                "icon_url" => "https://images.justwatch.com/icon/2539917/s100"
            ],
            [
                "id" => 242,
                "name" => "Meo",
                "code" => "meo",
                "icon_url" => "https://images.justwatch.com/icon/110692537/s100"
            ],
            [
                "id" => 585,
                "name" => "Metrograph",
                "code" => "mtg",
                "icon_url" => "https://images.justwatch.com/icon/246602107/s100"
            ],
            [
                "id" => 427,
                "name" => "Mhz Choice",
                "code" => "mhz",
                "icon_url" => "https://images.justwatch.com/icon/200839772/s100"
            ],
            [
                "id" => 68,
                "name" => "Microsoft Store",
                "code" => "msf",
                "icon_url" => "https://images.justwatch.com/icon/820542/s100"
            ],
            [
                "id" => 456,
                "name" => "Mitele ",
                "code" => "mte",
                "icon_url" => "https://images.justwatch.com/icon/202925890/s100"
            ],
            [
                "id" => 557,
                "name" => "More TV",
                "code" => "mre",
                "icon_url" => "https://images.justwatch.com/icon/243248859/s100"
            ],
            [
                "id" => 1844,
                "name" => "More Than Sports TV",
                "code" => "mtt",
                "icon_url" => "https://images.justwatch.com/icon/302650159/s100"
            ],
            [
                "id" => 410,
                "name" => "Motor Trend",
                "code" => "mtr",
                "icon_url" => "https://images.justwatch.com/icon/198433920/s100"
            ],
            [
                "id" => 601,
                "name" => "MotorTrend Amazon Channel",
                "code" => "azt",
                "icon_url" => "https://images.justwatch.com/icon/248032984/s100"
            ],
            [
                "id" => 562,
                "name" => "MovieSaints",
                "code" => "mvt",
                "icon_url" => "https://images.justwatch.com/icon/243526257/s100"
            ],
            [
                "id" => 706,
                "name" => "Moviedome Plus Amazon Channel",
                "code" => "mdp",
                "icon_url" => "https://images.justwatch.com/icon/278652479/s100"
            ],
            [
                "id" => 81,
                "name" => "Movietickets",
                "code" => "mts",
                "icon_url" => "https://images.justwatch.com/icon/922529/s100"
            ],
            [
                "id" => 339,
                "name" => "Movistar Play",
                "code" => "mvp",
                "icon_url" => "https://images.justwatch.com/icon/148114378/s100"
            ],
            [
                "id" => 149,
                "name" => "Movistar Plus",
                "code" => "mvs",
                "icon_url" => "https://images.justwatch.com/icon/304905973/s100"
            ],
            [
                "id" => 333,
                "name" => "My5",
                "code" => "myf",
                "icon_url" => "https://images.justwatch.com/icon/146470618/s100"
            ],
            [
                "id" => 264,
                "name" => "MyOutdoorTV",
                "code" => "mot",
                "icon_url" => "https://images.justwatch.com/icon/124832728/s100"
            ],
            [
                "id" => 1761,
                "name" => "NBA League Pass",
                "code" => "nlp",
                "icon_url" => "https://images.justwatch.com/icon/300503743/s100"
            ],
            [
                "id" => 1869,
                "name" => "NBA League Pass Amazon Channel",
                "code" => "anb",
                "icon_url" => "https://images.justwatch.com/icon/304359817/s100"
            ],
            [
                "id" => 1880,
                "name" => "NBA Rakuten",
                "code" => "nbr",
                "icon_url" => "https://images.justwatch.com/icon/304712280/s100"
            ],
            [
                "id" => 1868,
                "name" => "NBA TV Amazon Channel",
                "code" => "ant",
                "icon_url" => "https://images.justwatch.com/icon/304359814/s100"
            ],
            [
                "id" => 79,
                "name" => "NBC",
                "code" => "nbc",
                "icon_url" => "https://images.justwatch.com/icon/922526/s100"
            ],
            [
                "id" => 441,
                "name" => "NFB",
                "code" => "nfb",
                "icon_url" => "https://images.justwatch.com/icon/202043776/s100"
            ],
            [
                "id" => 1762,
                "name" => "NFL Game Pass",
                "code" => "ngp",
                "icon_url" => "https://images.justwatch.com/icon/300617757/s100"
            ],
            [
                "id" => 1760,
                "name" => "NFL Plus",
                "code" => "nfl",
                "icon_url" => "https://images.justwatch.com/icon/300447459/s100"
            ],
            [
                "id" => 1786,
                "name" => "NHL Network",
                "code" => "nhn",
                "icon_url" => "https://images.justwatch.com/icon/301040435/s100"
            ],
            [
                "id" => 1843,
                "name" => "NHL TV",
                "code" => "nhl",
                "icon_url" => "https://images.justwatch.com/icon/302623129/s100"
            ],
            [
                "id" => 472,
                "name" => "NLZIET",
                "code" => "nlz",
                "icon_url" => "https://images.justwatch.com/icon/208142146/s100"
            ],
            [
                "id" => 1937,
                "name" => "NOS",
                "code" => "nos",
                "icon_url" => "https://images.justwatch.com/icon/306602027/s100"
            ],
            [
                "id" => 484,
                "name" => "NOW",
                "code" => "now",
                "icon_url" => "https://images.justwatch.com/icon/208853791/s100"
            ],
            [
                "id" => 1808,
                "name" => "NPO 1",
                "code" => "np1",
                "icon_url" => "https://images.justwatch.com/icon/301598199/s100"
            ],
            [
                "id" => 1817,
                "name" => "NPO 2",
                "code" => "np2",
                "icon_url" => "https://images.justwatch.com/icon/301724828/s100"
            ],
            [
                "id" => 360,
                "name" => "NPO Start",
                "code" => "npo",
                "icon_url" => "https://images.justwatch.com/icon/158405505/s100"
            ],
            [
                "id" => 1818,
                "name" => "NPO Zapp",
                "code" => "npz",
                "icon_url" => "https://images.justwatch.com/icon/301724929/s100"
            ],
            [
                "id" => 442,
                "name" => "NRK TV",
                "code" => "nrk",
                "icon_url" => "https://images.justwatch.com/icon/202044312/s100"
            ],
            [
                "id" => 1915,
                "name" => "NWSL",
                "code" => "nws",
                "icon_url" => "https://images.justwatch.com/icon/305712691/s100"
            ],
            [
                "id" => 96,
                "name" => "Naver Store",
                "code" => "nvs",
                "icon_url" => "https://images.justwatch.com/icon/2538289/s100"
            ],
            [
                "id" => 273,
                "name" => "Neon TV",
                "code" => "nev",
                "icon_url" => "https://images.justwatch.com/icon/306398296/s100"
            ],
            [
                "id" => 19,
                "name" => "NetMovies",
                "code" => "ntm",
                "icon_url" => "https://images.justwatch.com/icon/446738/s100"
            ],
            [
                "id" => 8,
                "name" => "Netflix",
                "code" => "nfx",
                "icon_url" => "https://images.justwatch.com/icon/207360008/s100"
            ],
            [
                "id" => 175,
                "name" => "Netflix Kids",
                "code" => "nfk",
                "icon_url" => "https://images.justwatch.com/icon/14385750/s100"
            ],
            [
                "id" => 1796,
                "name" => "Netflix basic with Ads",
                "code" => "nfa",
                "icon_url" => "https://images.justwatch.com/icon/301462744/s100"
            ],
            [
                "id" => 28,
                "name" => "Netzkino",
                "code" => "ntz",
                "icon_url" => "https://images.justwatch.com/icon/614491/s100"
            ],
            [
                "id" => 641,
                "name" => "Nexo Plus",
                "code" => "nxp",
                "icon_url" => "https://images.justwatch.com/icon/255978198/s100"
            ],
            [
                "id" => 455,
                "name" => "Night Flight Plus",
                "code" => "nfp",
                "icon_url" => "https://images.justwatch.com/icon/202924365/s100"
            ],
            [
                "id" => 262,
                "name" => "Noggin Amazon Channel",
                "code" => "ang",
                "icon_url" => "https://images.justwatch.com/icon/241732611/s100"
            ],
            [
                "id" => 516,
                "name" => "Noovo",
                "code" => "nvo",
                "icon_url" => "https://images.justwatch.com/icon/210188320/s100"
            ],
            [
                "id" => 580,
                "name" => "Nova Play",
                "code" => "nvp",
                "icon_url" => "https://images.justwatch.com/icon/245175642/s100"
            ],
            [
                "id" => 39,
                "name" => "Now TV",
                "code" => "ntv",
                "icon_url" => "https://images.justwatch.com/icon/243753092/s100"
            ],
            [
                "id" => 591,
                "name" => "Now TV Cinema",
                "code" => "ntc",
                "icon_url" => "https://images.justwatch.com/icon/246949331/s100"
            ],
            [
                "id" => 308,
                "name" => "O2 TV",
                "code" => "ott",
                "icon_url" => "https://images.justwatch.com/icon/136984448/s100"
            ],
            [
                "id" => 685,
                "name" => "OCS Amazon Channel ",
                "code" => "aoc",
                "icon_url" => "https://images.justwatch.com/icon/259257024/s100"
            ],
            [
                "id" => 56,
                "name" => "OCS Go",
                "code" => "ocs",
                "icon_url" => "https://images.justwatch.com/icon/810790/s100"
            ],
            [
                "id" => 629,
                "name" => "OSN",
                "code" => "osn",
                "icon_url" => "https://images.justwatch.com/icon/301451262/s100"
            ],
            [
                "id" => 607,
                "name" => "OUTtv Amazon Channel",
                "code" => "aot",
                "icon_url" => "https://images.justwatch.com/icon/248045085/s100"
            ],
            [
                "id" => 433,
                "name" => "OVID",
                "code" => "ovi",
                "icon_url" => "https://images.justwatch.com/icon/201697454/s100"
            ],
            [
                "id" => 487,
                "name" => "OXYGEN",
                "code" => "oxy",
                "icon_url" => "https://images.justwatch.com/icon/208859185/s100"
            ],
            [
                "id" => 574,
                "name" => "Oi Play",
                "code" => "oip",
                "icon_url" => "https://images.justwatch.com/icon/244592067/s100"
            ],
            [
                "id" => 115,
                "name" => "Okko",
                "code" => "okk",
                "icon_url" => "https://images.justwatch.com/icon/3701663/s100"
            ],
            [
                "id" => 499,
                "name" => "Oldflix",
                "code" => "ofx",
                "icon_url" => "https://images.justwatch.com/icon/209544344/s100"
            ],
            [
                "id" => 1820,
                "name" => "OneFootball",
                "code" => "ofb",
                "icon_url" => "https://images.justwatch.com/icon/301743701/s100"
            ],
            [
                "id" => 61,
                "name" => "Orange VOD",
                "code" => "org",
                "icon_url" => "https://images.justwatch.com/icon/812139/s100"
            ],
            [
                "id" => 626,
                "name" => "Otta",
                "code" => "ota",
                "icon_url" => "https://images.justwatch.com/icon/252209223/s100"
            ],
            [
                "id" => 434,
                "name" => "OzFlix",
                "code" => "ozf",
                "icon_url" => "https://images.justwatch.com/icon/201698827/s100"
            ],
            [
                "id" => 209,
                "name" => "PBS",
                "code" => "pbs",
                "icon_url" => "https://images.justwatch.com/icon/78090545/s100"
            ],
            [
                "id" => 293,
                "name" => "PBS Kids Amazon Channel",
                "code" => "apk",
                "icon_url" => "https://images.justwatch.com/icon/241732523/s100"
            ],
            [
                "id" => 294,
                "name" => "PBS Masterpiece Amazon Channel",
                "code" => "apm",
                "icon_url" => "https://images.justwatch.com/icon/241732455/s100"
            ],
            [
                "id" => 1822,
                "name" => "PRTV",
                "code" => "prt",
                "icon_url" => "https://images.justwatch.com/icon/301797490/s100"
            ],
            [
                "id" => 177,
                "name" => "Pantaflix",
                "code" => "pfx",
                "icon_url" => "https://images.justwatch.com/icon/93814499/s100"
            ],
            [
                "id" => 247,
                "name" => "Pantaya",
                "code" => "pty",
                "icon_url" => "https://images.justwatch.com/icon/120137063/s100"
            ],
            [
                "id" => 292,
                "name" => "Pantaya Amazon Channel",
                "code" => "apa",
                "icon_url" => "https://images.justwatch.com/icon/241732525/s100"
            ],
            [
                "id" => 418,
                "name" => "Paramount Network",
                "code" => "pnw",
                "icon_url" => "https://images.justwatch.com/icon/199216643/s100"
            ],
            [
                "id" => 531,
                "name" => "Paramount Plus",
                "code" => "pmp",
                "icon_url" => "https://images.justwatch.com/icon/242706661/s100"
            ],
            [
                "id" => 1853,
                "name" => "Paramount Plus Apple TV Channel ",
                "code" => "ppa",
                "icon_url" => "https://images.justwatch.com/icon/303391391/s100"
            ],
            [
                "id" => 582,
                "name" => "Paramount+ Amazon Channel",
                "code" => "app",
                "icon_url" => "https://images.justwatch.com/icon/246478651/s100"
            ],
            [
                "id" => 633,
                "name" => "Paramount+ Roku Premium Channel",
                "code" => "prk",
                "icon_url" => "https://images.justwatch.com/icon/252888457/s100"
            ],
            [
                "id" => 1770,
                "name" => "Paramount+ with Showtime",
                "code" => "pst",
                "icon_url" => "https://images.justwatch.com/icon/306096334/s100"
            ],
            [
                "id" => 1739,
                "name" => "Pash Amazon Channel",
                "code" => "pac",
                "icon_url" => "https://images.justwatch.com/icon/292993716/s100"
            ],
            [
                "id" => 1870,
                "name" => "Pass Warner Amazon Channel",
                "code" => "pwa",
                "icon_url" => "https://images.justwatch.com/icon/304368456/s100"
            ],
            [
                "id" => 71,
                "name" => "Pathé Thuis",
                "code" => "pth",
                "icon_url" => "https://images.justwatch.com/icon/899642/s100"
            ],
            [
                "id" => 618,
                "name" => "Paus",
                "code" => "pau",
                "icon_url" => "https://images.justwatch.com/icon/249862604/s100"
            ],
            [
                "id" => 386,
                "name" => "Peacock",
                "code" => "pct",
                "icon_url" => "https://images.justwatch.com/icon/194173870/s100"
            ],
            [
                "id" => 387,
                "name" => "Peacock Premium",
                "code" => "pcp",
                "icon_url" => "https://images.justwatch.com/icon/194173871/s100"
            ],
            [
                "id" => 637,
                "name" => "Pickbox NOW",
                "code" => "pbn",
                "icon_url" => "https://images.justwatch.com/icon/253275170/s100"
            ],
            [
                "id" => 1873,
                "name" => "Pickx Sports",
                "code" => "pix",
                "icon_url" => "https://images.justwatch.com/icon/304469328/s100"
            ],
            [
                "id" => 451,
                "name" => "Picl",
                "code" => "pcl",
                "icon_url" => "https://images.justwatch.com/icon/202916719/s100"
            ],
            [
                "id" => 1740,
                "name" => "Planet Horror Amazon Channel",
                "code" => "pha",
                "icon_url" => "https://images.justwatch.com/icon/292993727/s100"
            ],
            [
                "id" => 1872,
                "name" => "Play Sports",
                "code" => "pla",
                "icon_url" => "https://images.justwatch.com/icon/304469251/s100"
            ],
            [
                "id" => 691,
                "name" => "Play Suisse",
                "code" => "pys",
                "icon_url" => "https://images.justwatch.com/icon/262145914/s100"
            ],
            [
                "id" => 505,
                "name" => "Player",
                "code" => "plp",
                "icon_url" => "https://images.justwatch.com/icon/209564731/s100"
            ],
            [
                "id" => 538,
                "name" => "Plex",
                "code" => "plx",
                "icon_url" => "https://images.justwatch.com/icon/301832745/s100"
            ],
            [
                "id" => 300,
                "name" => "Pluto TV",
                "code" => "ptv",
                "icon_url" => "https://images.justwatch.com/icon/131862988/s100"
            ],
            [
                "id" => 599,
                "name" => "Pokémon Amazon Channel",
                "code" => "apo",
                "icon_url" => "https://images.justwatch.com/icon/248032735/s100"
            ],
            [
                "id" => 690,
                "name" => "Pongalo Amazon Channel  ",
                "code" => "apn",
                "icon_url" => "https://images.justwatch.com/icon/259251701/s100"
            ],
            [
                "id" => 161,
                "name" => "Popcorn",
                "code" => "ppc",
                "icon_url" => "https://images.justwatch.com/icon/7423153/s100"
            ],
            [
                "id" => 241,
                "name" => "Popcornflix",
                "code" => "pcf",
                "icon_url" => "https://images.justwatch.com/icon/109299737/s100"
            ],
            [
                "id" => 522,
                "name" => "Popcorntimes",
                "code" => "pcs",
                "icon_url" => "https://images.justwatch.com/icon/240934542/s100"
            ],
            [
                "id" => 1832,
                "name" => "Popflick",
                "code" => "pfk",
                "icon_url" => "https://images.justwatch.com/icon/302244859/s100"
            ],
            [
                "id" => 570,
                "name" => "Premier",
                "code" => "pre",
                "icon_url" => "https://images.justwatch.com/icon/244290140/s100"
            ],
            [
                "id" => 1752,
                "name" => "Premier Sports",
                "code" => "psp",
                "icon_url" => "https://images.justwatch.com/icon/294000976/s100"
            ],
            [
                "id" => 1901,
                "name" => "Premiere",
                "code" => "gpr",
                "icon_url" => "https://images.justwatch.com/icon/304887325/s100"
            ],
            [
                "id" => 1903,
                "name" => "Premiere Amazon Channel",
                "code" => "apr",
                "icon_url" => "https://images.justwatch.com/icon/304978519/s100"
            ],
            [
                "id" => 1928,
                "name" => "Prima Plus",
                "code" => "pri",
                "icon_url" => "https://images.justwatch.com/icon/306460592/s100"
            ],
            [
                "id" => 1923,
                "name" => "ProSieben MAXX",
                "code" => "p7m",
                "icon_url" => "https://images.justwatch.com/icon/305973637/s100"
            ],
            [
                "id" => 638,
                "name" => "Public Domain Movies",
                "code" => "pdm",
                "icon_url" => "https://images.justwatch.com/icon/254580265/s100"
            ],
            [
                "id" => 278,
                "name" => "Pure Flix",
                "code" => "pux",
                "icon_url" => "https://images.justwatch.com/icon/127414508/s100"
            ],
            [
                "id" => 552,
                "name" => "QFT Player",
                "code" => "qft",
                "icon_url" => "https://images.justwatch.com/icon/243236656/s100"
            ],
            [
                "id" => 274,
                "name" => "QubitTV",
                "code" => "qbt",
                "icon_url" => "https://images.justwatch.com/icon/127412478/s100"
            ],
            [
                "id" => 1784,
                "name" => "RDS",
                "code" => "rds",
                "icon_url" => "https://images.justwatch.com/icon/300949936/s100"
            ],
            [
                "id" => 1755,
                "name" => "RMC Sport",
                "code" => "rmc",
                "icon_url" => "https://images.justwatch.com/icon/295991128/s100"
            ],
            [
                "id" => 461,
                "name" => "RTBF",
                "code" => "rtb",
                "icon_url" => "https://images.justwatch.com/icon/207331495/s100"
            ],
            [
                "id" => 1892,
                "name" => "RTL Crime Amazon Channel",
                "code" => "arc",
                "icon_url" => "https://images.justwatch.com/icon/304872636/s100"
            ],
            [
                "id" => 1712,
                "name" => "RTL Passion Amazon Channel",
                "code" => "rpa",
                "icon_url" => "https://images.justwatch.com/icon/280495821/s100"
            ],
            [
                "id" => 572,
                "name" => "RTL Play",
                "code" => "rtl",
                "icon_url" => "https://images.justwatch.com/icon/305738083/s100"
            ],
            [
                "id" => 298,
                "name" => "RTL+",
                "code" => "tvn",
                "icon_url" => "https://images.justwatch.com/icon/254509043/s100"
            ],
            [
                "id" => 452,
                "name" => "RTPplay",
                "code" => "rtp",
                "icon_url" => "https://images.justwatch.com/icon/202917046/s100"
            ],
            [
                "id" => 1753,
                "name" => "Rai News",
                "code" => "rns",
                "icon_url" => "https://images.justwatch.com/icon/294494792/s100"
            ],
            [
                "id" => 222,
                "name" => "Rai Play",
                "code" => "rai",
                "icon_url" => "https://images.justwatch.com/icon/87462522/s100"
            ],
            [
                "id" => 1801,
                "name" => "Rai Sport",
                "code" => "ras",
                "icon_url" => "https://images.justwatch.com/icon/301547705/s100"
            ],
            [
                "id" => 35,
                "name" => "Rakuten TV",
                "code" => "wki",
                "icon_url" => "https://images.justwatch.com/icon/128599720/s100"
            ],
            [
                "id" => 344,
                "name" => "Rakuten Viki",
                "code" => "vik",
                "icon_url" => "https://images.justwatch.com/icon/149297567/s100"
            ],
            [
                "id" => 114,
                "name" => "Rambler",
                "code" => "rbr",
                "icon_url" => "https://images.justwatch.com/icon/3689216/s100"
            ],
            [
                "id" => 1749,
                "name" => "Ran",
                "code" => "ran",
                "icon_url" => "https://images.justwatch.com/icon/293963688/s100"
            ],
            [
                "id" => 1896,
                "name" => "Raro Video Amazon Channel",
                "code" => "arv",
                "icon_url" => "https://images.justwatch.com/icon/304873618/s100"
            ],
            [
                "id" => 1757,
                "name" => "Realeyz Amazon Channel",
                "code" => "rac",
                "icon_url" => "https://images.justwatch.com/icon/296216013/s100"
            ],
            [
                "id" => 279,
                "name" => "Redbox",
                "code" => "rbx",
                "icon_url" => "https://images.justwatch.com/icon/127420929/s100"
            ],
            [
                "id" => 1920,
                "name" => "Reserva Imovision",
                "code" => "rmv",
                "icon_url" => "https://images.justwatch.com/icon/305874546/s100"
            ],
            [
                "id" => 446,
                "name" => "Retrocrush",
                "code" => "rtc",
                "icon_url" => "https://images.justwatch.com/icon/202068535/s100"
            ],
            [
                "id" => 473,
                "name" => "Revry",
                "code" => "rvy",
                "icon_url" => "https://images.justwatch.com/icon/208144706/s100"
            ],
            [
                "id" => 485,
                "name" => "Rooster Teeth",
                "code" => "rst",
                "icon_url" => "https://images.justwatch.com/icon/208856114/s100"
            ],
            [
                "id" => 1875,
                "name" => "Runtime",
                "code" => "run",
                "icon_url" => "https://images.justwatch.com/icon/304492456/s100"
            ],
            [
                "id" => 338,
                "name" => "Ruutu",
                "code" => "rtu",
                "icon_url" => "https://images.justwatch.com/icon/147811992/s100"
            ],
            [
                "id" => 1792,
                "name" => "S Sport Plus",
                "code" => "sss",
                "icon_url" => "https://images.justwatch.com/icon/301272582/s100"
            ],
            [
                "id" => 1935,
                "name" => "SBS",
                "code" => "sbk",
                "icon_url" => "https://images.justwatch.com/icon/306598678/s100"
            ],
            [
                "id" => 132,
                "name" => "SBS On Demand",
                "code" => "sbs",
                "icon_url" => "https://images.justwatch.com/icon/305089167/s100"
            ],
            [
                "id" => 1849,
                "name" => "SBT Sports",
                "code" => "sbr",
                "icon_url" => "https://images.justwatch.com/icon/302928097/s100"
            ],
            [
                "id" => 426,
                "name" => "SF Anytime",
                "code" => "sfa",
                "icon_url" => "https://images.justwatch.com/icon/200839563/s100"
            ],
            [
                "id" => 193,
                "name" => "SFR Play",
                "code" => "sfr",
                "icon_url" => "https://images.justwatch.com/icon/66953481/s100"
            ],
            [
                "id" => 1900,
                "name" => "SIC",
                "code" => "sic",
                "icon_url" => "https://images.justwatch.com/icon/304883626/s100"
            ],
            [
                "id" => 1782,
                "name" => "SN Now",
                "code" => "snn",
                "icon_url" => "https://images.justwatch.com/icon/300921016/s100"
            ],
            [
                "id" => 1925,
                "name" => "SPORTBILD",
                "code" => "spb",
                "icon_url" => "https://images.justwatch.com/icon/306191188/s100"
            ],
            [
                "id" => 1879,
                "name" => "SPOTV NOW",
                "code" => "spn",
                "icon_url" => "https://images.justwatch.com/icon/304712218/s100"
            ],
            [
                "id" => 630,
                "name" => "STARZPLAY",
                "code" => "sty",
                "icon_url" => "https://images.justwatch.com/icon/252221523/s100"
            ],
            [
                "id" => 642,
                "name" => "STUDIOCANAL PRESENTS Apple TV Channel",
                "code" => "asp",
                "icon_url" => "https://images.justwatch.com/icon/255994043/s100"
            ],
            [
                "id" => 593,
                "name" => "STV Player",
                "code" => "stp",
                "icon_url" => "https://images.justwatch.com/icon/249895790/s100"
            ],
            [
                "id" => 493,
                "name" => "SVT",
                "code" => "svt",
                "icon_url" => "https://images.justwatch.com/icon/208863379/s100"
            ],
            [
                "id" => 1748,
                "name" => "Sat 1",
                "code" => "sat",
                "icon_url" => "https://images.justwatch.com/icon/293754393/s100"
            ],
            [
                "id" => 411,
                "name" => "Science Channel",
                "code" => "sci",
                "icon_url" => "https://images.justwatch.com/icon/198433922/s100"
            ],
            [
                "id" => 185,
                "name" => "Screambox",
                "code" => "scb",
                "icon_url" => "https://images.justwatch.com/icon/43432939/s100"
            ],
            [
                "id" => 202,
                "name" => "Screambox Amazon Channel",
                "code" => "asb",
                "icon_url" => "https://images.justwatch.com/icon/241732490/s100"
            ],
            [
                "id" => 696,
                "name" => "Serially",
                "code" => "sly",
                "icon_url" => "https://images.justwatch.com/icon/268183647/s100"
            ],
            [
                "id" => 513,
                "name" => "Shadowz",
                "code" => "sdz",
                "icon_url" => "https://images.justwatch.com/icon/209565778/s100"
            ],
            [
                "id" => 1736,
                "name" => "Shadowz Amazon Channel",
                "code" => "sza",
                "icon_url" => "https://images.justwatch.com/icon/292993659/s100"
            ],
            [
                "id" => 1715,
                "name" => "Shahid VIP",
                "code" => "sha",
                "icon_url" => "https://images.justwatch.com/icon/280600874/s100"
            ],
            [
                "id" => 474,
                "name" => "ShemarooMe",
                "code" => "sme",
                "icon_url" => "https://images.justwatch.com/icon/208147531/s100"
            ],
            [
                "id" => 688,
                "name" => "ShortsTV Amazon Channel",
                "code" => "atv",
                "icon_url" => "https://images.justwatch.com/icon/260445223/s100"
            ],
            [
                "id" => 600,
                "name" => "Shout! Factory Amazon Channel",
                "code" => "asf",
                "icon_url" => "https://images.justwatch.com/icon/248032758/s100"
            ],
            [
                "id" => 439,
                "name" => "Shout! Factory TV",
                "code" => "sft",
                "icon_url" => "https://images.justwatch.com/icon/201913784/s100"
            ],
            [
                "id" => 55,
                "name" => "ShowMax",
                "code" => "som",
                "icon_url" => "https://images.justwatch.com/icon/802192/s100"
            ],
            [
                "id" => 37,
                "name" => "Showtime",
                "code" => "sho",
                "icon_url" => "https://images.justwatch.com/icon/677041/s100"
            ],
            [
                "id" => 203,
                "name" => "Showtime Amazon Channel",
                "code" => "ash",
                "icon_url" => "https://images.justwatch.com/icon/241732486/s100"
            ],
            [
                "id" => 632,
                "name" => "Showtime Roku Premium Channel",
                "code" => "srk",
                "icon_url" => "https://images.justwatch.com/icon/252888396/s100"
            ],
            [
                "id" => 99,
                "name" => "Shudder",
                "code" => "shd",
                "icon_url" => "https://images.justwatch.com/icon/2562359/s100"
            ],
            [
                "id" => 204,
                "name" => "Shudder Amazon Channel",
                "code" => "asd",
                "icon_url" => "https://images.justwatch.com/icon/241732468/s100"
            ],
            [
                "id" => 1713,
                "name" => "Silverline Amazon Channel",
                "code" => "sla",
                "icon_url" => "https://images.justwatch.com/icon/280495827/s100"
            ],
            [
                "id" => 147,
                "name" => "Sixplay",
                "code" => "sxp",
                "icon_url" => "https://images.justwatch.com/icon/5870395/s100"
            ],
            [
                "id" => 210,
                "name" => "Sky",
                "code" => "ssv",
                "icon_url" => "https://images.justwatch.com/icon/79172280/s100"
            ],
            [
                "id" => 29,
                "name" => "Sky Go",
                "code" => "skg",
                "icon_url" => "https://images.justwatch.com/icon/246622422/s100"
            ],
            [
                "id" => 703,
                "name" => "Sky Sports",
                "code" => "ssp",
                "icon_url" => "https://images.justwatch.com/icon/302525598/s100"
            ],
            [
                "id" => 130,
                "name" => "Sky Store",
                "code" => "sks",
                "icon_url" => "https://images.justwatch.com/icon/208571850/s100"
            ],
            [
                "id" => 321,
                "name" => "Sky X",
                "code" => "skx",
                "icon_url" => "https://images.justwatch.com/icon/210279875/s100"
            ],
            [
                "id" => 1773,
                "name" => "SkyShowtime",
                "code" => "sst",
                "icon_url" => "https://images.justwatch.com/icon/300772362/s100"
            ],
            [
                "id" => 1810,
                "name" => "Sling TV Blue",
                "code" => "slb",
                "icon_url" => "https://images.justwatch.com/icon/301598411/s100"
            ],
            [
                "id" => 1809,
                "name" => "Sling TV Orange",
                "code" => "slo",
                "icon_url" => "https://images.justwatch.com/icon/301598411/s100"
            ],
            [
                "id" => 299,
                "name" => "Sling TV Orange and Blue",
                "code" => "stv",
                "icon_url" => "https://images.justwatch.com/icon/302110556/s100"
            ],
            [
                "id" => 1878,
                "name" => "Sling TV Sports Extra",
                "code" => "sse",
                "icon_url" => "https://images.justwatch.com/icon/304573486/s100"
            ],
            [
                "id" => 276,
                "name" => "Smithsonian Channel",
                "code" => "ssc",
                "icon_url" => "https://images.justwatch.com/icon/127413290/s100"
            ],
            [
                "id" => 609,
                "name" => "Smithsonian Channel Amazon Channel",
                "code" => "asm",
                "icon_url" => "https://images.justwatch.com/icon/248045144/s100"
            ],
            [
                "id" => 1714,
                "name" => "Sony AXN Amazon Channel",
                "code" => "sac",
                "icon_url" => "https://images.justwatch.com/icon/280495864/s100"
            ],
            [
                "id" => 237,
                "name" => "Sony Liv",
                "code" => "snl",
                "icon_url" => "https://images.justwatch.com/icon/207468084/s100"
            ],
            [
                "id" => 389,
                "name" => "Sooner",
                "code" => "snr",
                "icon_url" => "https://images.justwatch.com/icon/248270771/s100"
            ],
            [
                "id" => 498,
                "name" => "South Park",
                "code" => "spk",
                "icon_url" => "https://images.justwatch.com/icon/209527714/s100"
            ],
            [
                "id" => 521,
                "name" => "Spamflix",
                "code" => "sfx",
                "icon_url" => "https://images.justwatch.com/icon/240831409/s100"
            ],
            [
                "id" => 486,
                "name" => "Spectrum On Demand",
                "code" => "sod",
                "icon_url" => "https://images.justwatch.com/icon/305635208/s100"
            ],
            [
                "id" => 1913,
                "name" => "SporTV",
                "code" => "spr",
                "icon_url" => "https://images.justwatch.com/icon/305538913/s100"
            ],
            [
                "id" => 1874,
                "name" => "Sport TV",
                "code" => "spt",
                "icon_url" => "https://images.justwatch.com/icon/304483142/s100"
            ],
            [
                "id" => 699,
                "name" => "Sport1",
                "code" => "sp1",
                "icon_url" => "https://images.justwatch.com/icon/268286391/s100"
            ],
            [
                "id" => 1932,
                "name" => "Sport1 Extra",
                "code" => "s1x",
                "icon_url" => "https://images.justwatch.com/icon/306570971/s100"
            ],
            [
                "id" => 1876,
                "name" => "Sport1+",
                "code" => "s1p",
                "icon_url" => "https://images.justwatch.com/icon/304557340/s100"
            ],
            [
                "id" => 1831,
                "name" => "Sportall",
                "code" => "spo",
                "icon_url" => "https://images.justwatch.com/icon/302197723/s100"
            ],
            [
                "id" => 1758,
                "name" => "Sportdigital",
                "code" => "sdg",
                "icon_url" => "https://images.justwatch.com/icon/297149102/s100"
            ],
            [
                "id" => 1842,
                "name" => "Sportitalia",
                "code" => "spi",
                "icon_url" => "https://images.justwatch.com/icon/302589081/s100"
            ],
            [
                "id" => 1721,
                "name" => "Sportschau",
                "code" => "sps",
                "icon_url" => "https://images.justwatch.com/icon/291639665/s100"
            ],
            [
                "id" => 545,
                "name" => "Spuul",
                "code" => "spu",
                "icon_url" => "https://images.justwatch.com/icon/243219887/s100"
            ],
            [
                "id" => 606,
                "name" => "StackTV Amazon Channel",
                "code" => "ask",
                "icon_url" => "https://images.justwatch.com/icon/248045076/s100"
            ],
            [
                "id" => 21,
                "name" => "Stan",
                "code" => "stn",
                "icon_url" => "https://images.justwatch.com/icon/515663/s100"
            ],
            [
                "id" => 619,
                "name" => "Star Plus",
                "code" => "srp",
                "icon_url" => "https://images.justwatch.com/icon/250272035/s100"
            ],
            [
                "id" => 43,
                "name" => "Starz",
                "code" => "stz",
                "icon_url" => "https://images.justwatch.com/icon/301254735/s100"
            ],
            [
                "id" => 1794,
                "name" => "Starz Amazon Channel",
                "code" => "saz",
                "icon_url" => "https://images.justwatch.com/icon/241732487/s100"
            ],
            [
                "id" => 1855,
                "name" => "Starz Apple TV Channel",
                "code" => "szt",
                "icon_url" => "https://images.justwatch.com/icon/303391389/s100"
            ],
            [
                "id" => 194,
                "name" => "Starz Play Amazon Channel",
                "code" => "ast",
                "icon_url" => "https://images.justwatch.com/icon/241732487/s100"
            ],
            [
                "id" => 634,
                "name" => "Starz Roku Premium Channel",
                "code" => "sru",
                "icon_url" => "https://images.justwatch.com/icon/252888467/s100"
            ],
            [
                "id" => 578,
                "name" => "Strim",
                "code" => "str",
                "icon_url" => "https://images.justwatch.com/icon/244594337/s100"
            ],
            [
                "id" => 1806,
                "name" => "Studiocanal Presents ALLSTARS Amazon Channel",
                "code" => "spa",
                "icon_url" => "https://images.justwatch.com/icon/301589501/s100"
            ],
            [
                "id" => 1747,
                "name" => "Studiocanal Presents Amazon Channel",
                "code" => "soa",
                "icon_url" => "https://images.justwatch.com/icon/292999392/s100"
            ],
            [
                "id" => 1805,
                "name" => "Studiocanal Presents MOVIECULT Amazon Channel",
                "code" => "spm",
                "icon_url" => "https://images.justwatch.com/icon/301589484/s100"
            ],
            [
                "id" => 309,
                "name" => "Sun Nxt",
                "code" => "snx",
                "icon_url" => "https://images.justwatch.com/icon/138047862/s100"
            ],
            [
                "id" => 143,
                "name" => "Sundance Now",
                "code" => "sdn",
                "icon_url" => "https://images.justwatch.com/icon/5676163/s100"
            ],
            [
                "id" => 205,
                "name" => "Sundance Now Amazon Channel",
                "code" => "asn",
                "icon_url" => "https://images.justwatch.com/icon/241732474/s100"
            ],
            [
                "id" => 605,
                "name" => "Super Channel Amazon Channel",
                "code" => "asu",
                "icon_url" => "https://images.justwatch.com/icon/248045074/s100"
            ],
            [
                "id" => 1787,
                "name" => "SuperTennis",
                "code" => "sup",
                "icon_url" => "https://images.justwatch.com/icon/301059651/s100"
            ],
            [
                "id" => 708,
                "name" => "Superfresh Amazon Channel",
                "code" => "sfc",
                "icon_url" => "https://images.justwatch.com/icon/278652793/s100"
            ],
            [
                "id" => 215,
                "name" => "Syfy",
                "code" => "sfy",
                "icon_url" => "https://images.justwatch.com/icon/81397159/s100"
            ],
            [
                "id" => 506,
                "name" => "TBS",
                "code" => "tus",
                "icon_url" => "https://images.justwatch.com/icon/209564793/s100"
            ],
            [
                "id" => 361,
                "name" => "TCM",
                "code" => "tcm",
                "icon_url" => "https://images.justwatch.com/icon/162036726/s100"
            ],
            [
                "id" => 589,
                "name" => "TELETOON+ Amazon Channel",
                "code" => "nic",
                "icon_url" => "https://images.justwatch.com/icon/301566845/s100"
            ],
            [
                "id" => 1754,
                "name" => "TF1",
                "code" => "tf1",
                "icon_url" => "https://images.justwatch.com/icon/294532853/s100"
            ],
            [
                "id" => 412,
                "name" => "TLC",
                "code" => "tlc",
                "icon_url" => "https://images.justwatch.com/icon/198433923/s100"
            ],
            [
                "id" => 363,
                "name" => "TNT",
                "code" => "tnt",
                "icon_url" => "https://images.justwatch.com/icon/164147684/s100"
            ],
            [
                "id" => 698,
                "name" => "TNT Sports",
                "code" => "bts",
                "icon_url" => "https://images.justwatch.com/icon/306584361/s100"
            ],
            [
                "id" => 1839,
                "name" => "TNT Sports Go",
                "code" => "tsg",
                "icon_url" => "https://images.justwatch.com/icon/302576205/s100"
            ],
            [
                "id" => 512,
                "name" => "TNTGo",
                "code" => "tgo",
                "icon_url" => "https://images.justwatch.com/icon/209565607/s100"
            ],
            [
                "id" => 1750,
                "name" => "TOD",
                "code" => "tod",
                "icon_url" => "https://images.justwatch.com/icon/293968021/s100"
            ],
            [
                "id" => 1826,
                "name" => "TOD TV",
                "code" => "tdt",
                "icon_url" => "https://images.justwatch.com/icon/302081369/s100"
            ],
            [
                "id" => 1807,
                "name" => "TRT SPOR",
                "code" => "trt",
                "icon_url" => "https://images.justwatch.com/icon/301597407/s100"
            ],
            [
                "id" => 1931,
                "name" => "TRT SPOR YILDIZ",
                "code" => "tsy",
                "icon_url" => "https://images.justwatch.com/icon/306568586/s100"
            ],
            [
                "id" => 1804,
                "name" => "TRT1",
                "code" => "tr1",
                "icon_url" => "https://images.justwatch.com/icon/301589320/s100"
            ],
            [
                "id" => 1775,
                "name" => "TSN",
                "code" => "tsn",
                "icon_url" => "https://images.justwatch.com/icon/300813210/s100"
            ],
            [
                "id" => 1841,
                "name" => "TSN Plus",
                "code" => "tsp",
                "icon_url" => "https://images.justwatch.com/icon/306346138/s100"
            ],
            [
                "id" => 1777,
                "name" => "TSN1",
                "code" => "ts1",
                "icon_url" => "https://images.justwatch.com/icon/300829177/s100"
            ],
            [
                "id" => 1778,
                "name" => "TSN2",
                "code" => "ts2",
                "icon_url" => "https://images.justwatch.com/icon/300829179/s100"
            ],
            [
                "id" => 1779,
                "name" => "TSN3",
                "code" => "ts3",
                "icon_url" => "https://images.justwatch.com/icon/300829180/s100"
            ],
            [
                "id" => 1780,
                "name" => "TSN4",
                "code" => "ts4",
                "icon_url" => "https://images.justwatch.com/icon/300829181/s100"
            ],
            [
                "id" => 1781,
                "name" => "TSN5",
                "code" => "ts5",
                "icon_url" => "https://images.justwatch.com/icon/300829182/s100"
            ],
            [
                "id" => 1816,
                "name" => "TUDN",
                "code" => "tdn",
                "icon_url" => "https://images.justwatch.com/icon/301672873/s100"
            ],
            [
                "id" => 383,
                "name" => "TV 2",
                "code" => "tvt",
                "icon_url" => "https://images.justwatch.com/icon/180362227/s100"
            ],
            [
                "id" => 431,
                "name" => "TV 2 Play",
                "code" => "st2",
                "icon_url" => "https://images.justwatch.com/icon/249552075/s100"
            ],
            [
                "id" => 1933,
                "name" => "TV Globo",
                "code" => "glo",
                "icon_url" => "https://images.justwatch.com/icon/306571404/s100"
            ],
            [
                "id" => 419,
                "name" => "TV Land",
                "code" => "tvl",
                "icon_url" => "https://images.justwatch.com/icon/199382332/s100"
            ],
            [
                "id" => 1916,
                "name" => "TV8",
                "code" => "tr8",
                "icon_url" => "https://images.justwatch.com/icon/305737797/s100"
            ],
            [
                "id" => 1845,
                "name" => "TV8",
                "code" => "tv8",
                "icon_url" => "https://images.justwatch.com/icon/302735427/s100"
            ],
            [
                "id" => 1910,
                "name" => "TVA Sports",
                "code" => "tva",
                "icon_url" => "https://images.justwatch.com/icon/305266284/s100"
            ],
            [
                "id" => 689,
                "name" => "TVCortos Amazon Channel",
                "code" => "atc",
                "icon_url" => "https://images.justwatch.com/icon/260448137/s100"
            ],
            [
                "id" => 500,
                "name" => "TVF Play",
                "code" => "tvf",
                "icon_url" => "https://images.justwatch.com/icon/209544767/s100"
            ],
            [
                "id" => 1885,
                "name" => "TVI Player",
                "code" => "iol",
                "icon_url" => "https://images.justwatch.com/icon/304773780/s100"
            ],
            [
                "id" => 1883,
                "name" => "TVING",
                "code" => "tvk",
                "icon_url" => "https://images.justwatch.com/icon/304712515/s100"
            ],
            [
                "id" => 395,
                "name" => "TVNZ",
                "code" => "tnz",
                "icon_url" => "https://images.justwatch.com/icon/198261924/s100"
            ],
            [
                "id" => 1846,
                "name" => "TVPublica",
                "code" => "tvp",
                "icon_url" => "https://images.justwatch.com/icon/302735577/s100"
            ],
            [
                "id" => 1771,
                "name" => "Takflix",
                "code" => "tak",
                "icon_url" => "https://images.justwatch.com/icon/300757493/s100"
            ],
            [
                "id" => 93,
                "name" => "Talk Talk TV",
                "code" => "ttv",
                "icon_url" => "https://images.justwatch.com/icon/2422254/s100"
            ],
            [
                "id" => 502,
                "name" => "Tata Play",
                "code" => "tts",
                "icon_url" => "https://images.justwatch.com/icon/286806073/s100"
            ],
            [
                "id" => 497,
                "name" => "Tele2 Play",
                "code" => "chp",
                "icon_url" => "https://images.justwatch.com/icon/208867781/s100"
            ],
            [
                "id" => 1930,
                "name" => "Telemundo",
                "code" => "tlm",
                "icon_url" => "https://images.justwatch.com/icon/306568408/s100"
            ],
            [
                "id" => 1857,
                "name" => "Telenet",
                "code" => "tel",
                "icon_url" => "https://images.justwatch.com/icon/303662154/s100"
            ],
            [
                "id" => 553,
                "name" => "Telia Play",
                "code" => "tlp",
                "icon_url" => "https://images.justwatch.com/icon/243237817/s100"
            ],
            [
                "id" => 429,
                "name" => "Telstra TV",
                "code" => "tst",
                "icon_url" => "https://images.justwatch.com/icon/200846338/s100"
            ],
            [
                "id" => 550,
                "name" => "Tenk",
                "code" => "tnk",
                "icon_url" => "https://images.justwatch.com/icon/243232755/s100"
            ],
            [
                "id" => 1774,
                "name" => "Tennis Channel",
                "code" => "ten",
                "icon_url" => "https://images.justwatch.com/icon/300788711/s100"
            ],
            [
                "id" => 1863,
                "name" => "Tennis TV",
                "code" => "tnn",
                "icon_url" => "https://images.justwatch.com/icon/304140196/s100"
            ],
            [
                "id" => 83,
                "name" => "The CW",
                "code" => "tcw",
                "icon_url" => "https://images.justwatch.com/icon/950814/s100"
            ],
            [
                "id" => 1813,
                "name" => "The FA Player",
                "code" => "fap",
                "icon_url" => "https://images.justwatch.com/icon/301624576/s100"
            ],
            [
                "id" => 470,
                "name" => "The Film Detective",
                "code" => "tfd",
                "icon_url" => "https://images.justwatch.com/icon/207967267/s100"
            ],
            [
                "id" => 611,
                "name" => "The Great Courses Signature Collection Amazon Channel",
                "code" => "agc",
                "icon_url" => "https://images.justwatch.com/icon/248045154/s100"
            ],
            [
                "id" => 555,
                "name" => "The Oprah Winfrey Network",
                "code" => "own",
                "icon_url" => "https://images.justwatch.com/icon/243244293/s100"
            ],
            [
                "id" => 207,
                "name" => "The Roku Channel",
                "code" => "rkc",
                "icon_url" => "https://images.justwatch.com/icon/76972041/s100"
            ],
            [
                "id" => 440,
                "name" => "ThreeNow",
                "code" => "thn",
                "icon_url" => "https://images.justwatch.com/icon/201914095/s100"
            ],
            [
                "id" => 109,
                "name" => "Timvision",
                "code" => "tvi",
                "icon_url" => "https://images.justwatch.com/icon/205686647/s100"
            ],
            [
                "id" => 1833,
                "name" => "Tivibu",
                "code" => "tvb",
                "icon_url" => "https://images.justwatch.com/icon/302408760/s100"
            ],
            [
                "id" => 1838,
                "name" => "Tivify",
                "code" => "tvy",
                "icon_url" => "https://images.justwatch.com/icon/302542003/s100"
            ],
            [
                "id" => 454,
                "name" => "Topic",
                "code" => "tpc",
                "icon_url" => "https://images.justwatch.com/icon/202921120/s100"
            ],
            [
                "id" => 413,
                "name" => "Travel Channel",
                "code" => "tra",
                "icon_url" => "https://images.justwatch.com/icon/198433924/s100"
            ],
            [
                "id" => 517,
                "name" => "TriArt Play",
                "code" => "tap",
                "icon_url" => "https://images.justwatch.com/icon/210188323/s100"
            ],
            [
                "id" => 567,
                "name" => "True Story",
                "code" => "trs",
                "icon_url" => "https://images.justwatch.com/icon/244289819/s100"
            ],
            [
                "id" => 73,
                "name" => "Tubi TV",
                "code" => "tbv",
                "icon_url" => "https://images.justwatch.com/icon/104966985/s100"
            ],
            [
                "id" => 1800,
                "name" => "Tubi TV Sports",
                "code" => "tbt",
                "icon_url" => "https://images.justwatch.com/icon/301544743/s100"
            ],
            [
                "id" => 693,
                "name" => "Turk On Video Amazon Channel",
                "code" => "tov",
                "icon_url" => "https://images.justwatch.com/icon/266134452/s100"
            ],
            [
                "id" => 1904,
                "name" => "Turkcell TV+",
                "code" => "ttp",
                "icon_url" => "https://images.justwatch.com/icon/304980820/s100"
            ],
            [
                "id" => 577,
                "name" => "TvIgle",
                "code" => "tvg",
                "icon_url" => "https://images.justwatch.com/icon/244592520/s100"
            ],
            [
                "id" => 1785,
                "name" => "Twitch",
                "code" => "twc",
                "icon_url" => "https://images.justwatch.com/icon/300972612/s100"
            ],
            [
                "id" => 1812,
                "name" => "TyC Sports",
                "code" => "tyc",
                "icon_url" => "https://images.justwatch.com/icon/301609187/s100"
            ],
            [
                "id" => 84,
                "name" => "U-NEXT",
                "code" => "unx",
                "icon_url" => "https://images.justwatch.com/icon/304760702/s100"
            ],
            [
                "id" => 1862,
                "name" => "UAM TV",
                "code" => "uat",
                "icon_url" => "https://images.justwatch.com/icon/304069585/s100"
            ],
            [
                "id" => 112,
                "name" => "UCIcinemas",
                "code" => "uci",
                "icon_url" => "https://images.justwatch.com/icon/3527064/s100"
            ],
            [
                "id" => 1886,
                "name" => "UEFA tv",
                "code" => "uef",
                "icon_url" => "https://images.justwatch.com/icon/304800674/s100"
            ],
            [
                "id" => 137,
                "name" => "UKTV Play",
                "code" => "ukt",
                "icon_url" => "https://images.justwatch.com/icon/300949202/s100"
            ],
            [
                "id" => 612,
                "name" => "UMC Amazon Channel",
                "code" => "aum",
                "icon_url" => "https://images.justwatch.com/icon/248045156/s100"
            ],
            [
                "id" => 622,
                "name" => "UPC TV",
                "code" => "upc",
                "icon_url" => "https://images.justwatch.com/icon/251742052/s100"
            ],
            [
                "id" => 1823,
                "name" => "URC TV",
                "code" => "urc",
                "icon_url" => "https://images.justwatch.com/icon/301857950/s100"
            ],
            [
                "id" => 322,
                "name" => "USA Network",
                "code" => "usn",
                "icon_url" => "https://images.justwatch.com/icon/141752011/s100"
            ],
            [
                "id" => 1860,
                "name" => "Univer Video",
                "code" => "unv",
                "icon_url" => "https://images.justwatch.com/icon/304059466/s100"
            ],
            [
                "id" => 184,
                "name" => "Universal Pictures",
                "code" => "unp",
                "icon_url" => "https://images.justwatch.com/icon/41171854/s100"
            ],
            [
                "id" => 1889,
                "name" => "Universal+ Amazon Channel",
                "code" => "auc",
                "icon_url" => "https://images.justwatch.com/icon/304872009/s100"
            ],
            [
                "id" => 239,
                "name" => "Universcine",
                "code" => "uni",
                "icon_url" => "https://images.justwatch.com/icon/244252120/s100"
            ],
            [
                "id" => 1732,
                "name" => "Universcine Amazon Channel",
                "code" => "uac",
                "icon_url" => "https://images.justwatch.com/icon/292993580/s100"
            ],
            [
                "id" => 251,
                "name" => "Urban Movie Channel",
                "code" => "umc",
                "icon_url" => "https://images.justwatch.com/icon/121380910/s100"
            ],
            [
                "id" => 422,
                "name" => "VH1",
                "code" => "vho",
                "icon_url" => "https://images.justwatch.com/icon/199382338/s100"
            ],
            [
                "id" => 614,
                "name" => "VI movies and tv",
                "code" => "vim",
                "icon_url" => "https://images.justwatch.com/icon/248952863/s100"
            ],
            [
                "id" => 457,
                "name" => "VIX ",
                "code" => "vix",
                "icon_url" => "https://images.justwatch.com/icon/306191612/s100"
            ],
            [
                "id" => 370,
                "name" => "VOD Club",
                "code" => "kvc",
                "icon_url" => "https://images.justwatch.com/icon/167804916/s100"
            ],
            [
                "id" => 245,
                "name" => "VOD Poland",
                "code" => "vpl",
                "icon_url" => "https://images.justwatch.com/icon/116502741/s100"
            ],
            [
                "id" => 312,
                "name" => "VRT MAX",
                "code" => "vrt",
                "icon_url" => "https://images.justwatch.com/icon/301027446/s100"
            ],
            [
                "id" => 1909,
                "name" => "VTM GO",
                "code" => "vtm",
                "icon_url" => "https://images.justwatch.com/icon/305253360/s100"
            ],
            [
                "id" => 332,
                "name" => "VUDU Free",
                "code" => "vuf",
                "icon_url" => "https://images.justwatch.com/icon/249324968/s100"
            ],
            [
                "id" => 414,
                "name" => "VVVVID",
                "code" => "vvv",
                "icon_url" => "https://images.justwatch.com/icon/199216638/s100"
            ],
            [
                "id" => 1866,
                "name" => "ViX Premium Amazon Channel",
                "code" => "avp",
                "icon_url" => "https://images.justwatch.com/icon/305959617/s100"
            ],
            [
                "id" => 76,
                "name" => "Viaplay",
                "code" => "vip",
                "icon_url" => "https://images.justwatch.com/icon/914018/s100"
            ],
            [
                "id" => 1795,
                "name" => "Viaplay Sports",
                "code" => "vps",
                "icon_url" => "https://images.justwatch.com/icon/301437950/s100"
            ],
            [
                "id" => 458,
                "name" => "Vice TV ",
                "code" => "vtv",
                "icon_url" => "https://images.justwatch.com/icon/202929812/s100"
            ],
            [
                "id" => 539,
                "name" => "Viddla",
                "code" => "vdl",
                "icon_url" => "https://images.justwatch.com/icon/243086778/s100"
            ],
            [
                "id" => 133,
                "name" => "Videobuster",
                "code" => "vdb",
                "icon_url" => "https://images.justwatch.com/icon/4914104/s100"
            ],
            [
                "id" => 72,
                "name" => "Videoland",
                "code" => "vil",
                "icon_url" => "https://images.justwatch.com/icon/302491363/s100"
            ],
            [
                "id" => 489,
                "name" => "Vidio",
                "code" => "vdo",
                "icon_url" => "https://images.justwatch.com/icon/208860522/s100"
            ],
            [
                "id" => 295,
                "name" => "Viewster Amazon Channel",
                "code" => "avt",
                "icon_url" => "https://images.justwatch.com/icon/241732588/s100"
            ],
            [
                "id" => 158,
                "name" => "Viu",
                "code" => "viu",
                "icon_url" => "https://images.justwatch.com/icon/6918774/s100"
            ],
            [
                "id" => 53,
                "name" => "Volta",
                "code" => "vol",
                "icon_url" => "https://images.justwatch.com/icon/802190/s100"
            ],
            [
                "id" => 121,
                "name" => "Voot",
                "code" => "voo",
                "icon_url" => "https://images.justwatch.com/icon/4233119/s100"
            ],
            [
                "id" => 627,
                "name" => "Voyo",
                "code" => "vyo",
                "icon_url" => "https://images.justwatch.com/icon/306344948/s100"
            ],
            [
                "id" => 7,
                "name" => "Vudu",
                "code" => "vdu",
                "icon_url" => "https://images.justwatch.com/icon/249324969/s100"
            ],
            [
                "id" => 615,
                "name" => "W4free",
                "code" => "wff",
                "icon_url" => "https://images.justwatch.com/icon/248952893/s100"
            ],
            [
                "id" => 1858,
                "name" => "W9",
                "code" => "w9f",
                "icon_url" => "https://images.justwatch.com/icon/303757138/s100"
            ],
            [
                "id" => 354,
                "name" => "WAKANIM",
                "code" => "wak",
                "icon_url" => "https://images.justwatch.com/icon/154602888/s100"
            ],
            [
                "id" => 1918,
                "name" => "WILLOW",
                "code" => "wil",
                "icon_url" => "https://images.justwatch.com/icon/305822956/s100"
            ],
            [
                "id" => 30,
                "name" => "WOW",
                "code" => "sko",
                "icon_url" => "https://images.justwatch.com/icon/305841946/s100"
            ],
            [
                "id" => 546,
                "name" => "WOW Presents Plus",
                "code" => "wow",
                "icon_url" => "https://images.justwatch.com/icon/243229654/s100"
            ],
            [
                "id" => 1864,
                "name" => "WTA TV",
                "code" => "wta",
                "icon_url" => "https://images.justwatch.com/icon/304140342/s100"
            ],
            [
                "id" => 260,
                "name" => "WWE Network",
                "code" => "wwe",
                "icon_url" => "https://images.justwatch.com/icon/124657456/s100"
            ],
            [
                "id" => 97,
                "name" => "Watcha",
                "code" => "wac",
                "icon_url" => "https://images.justwatch.com/icon/2538290/s100"
            ],
            [
                "id" => 171,
                "name" => "Watchbox",
                "code" => "wbx",
                "icon_url" => "https://images.justwatch.com/icon/11635033/s100"
            ],
            [
                "id" => 623,
                "name" => "WeTV",
                "code" => "tcv",
                "icon_url" => "https://images.justwatch.com/icon/251753956/s100"
            ],
            [
                "id" => 509,
                "name" => "WeTV",
                "code" => "wet",
                "icon_url" => "https://images.justwatch.com/icon/209565207/s100"
            ],
            [
                "id" => 1882,
                "name" => "Wowow",
                "code" => "wau",
                "icon_url" => "https://images.justwatch.com/icon/304712436/s100"
            ],
            [
                "id" => 323,
                "name" => "Yle Areena",
                "code" => "yle",
                "icon_url" => "https://images.justwatch.com/icon/141807430/s100"
            ],
            [
                "id" => 1764,
                "name" => "Yorck on Demand",
                "code" => "yrk",
                "icon_url" => "https://images.justwatch.com/icon/300662537/s100"
            ],
            [
                "id" => 192,
                "name" => "YouTube",
                "code" => "yot",
                "icon_url" => "https://images.justwatch.com/icon/59562423/s100"
            ],
            [
                "id" => 235,
                "name" => "YouTube Free",
                "code" => "yfr",
                "icon_url" => "https://images.justwatch.com/icon/113378150/s100"
            ],
            [
                "id" => 188,
                "name" => "YouTube Premium",
                "code" => "ytr",
                "icon_url" => "https://images.justwatch.com/icon/70189310/s100"
            ],
            [
                "id" => 1789,
                "name" => "YouTube Sports",
                "code" => "yts",
                "icon_url" => "https://images.justwatch.com/icon/59562423/s100"
            ],
            [
                "id" => 255,
                "name" => "Yupp TV",
                "code" => "ytv",
                "icon_url" => "https://images.justwatch.com/icon/123324312/s100"
            ],
            [
                "id" => 537,
                "name" => "ZDF",
                "code" => "zdf",
                "icon_url" => "https://images.justwatch.com/icon/242965977/s100"
            ],
            [
                "id" => 286,
                "name" => "ZDF Herzkino Amazon Channel",
                "code" => "azh",
                "icon_url" => "https://images.justwatch.com/icon/241732616/s100"
            ],
            [
                "id" => 232,
                "name" => "Zee5",
                "code" => "zee",
                "icon_url" => "https://images.justwatch.com/icon/93795879/s100"
            ],
            [
                "id" => 297,
                "name" => "Ziggo TV",
                "code" => "zig",
                "icon_url" => "https://images.justwatch.com/icon/131083694/s100"
            ],
            [
                "id" => 532,
                "name" => "aha",
                "code" => "aha",
                "icon_url" => "https://images.justwatch.com/icon/242563117/s100"
            ],
            [
                "id" => 1891,
                "name" => "alleskino Amazon Channel",
                "code" => "aak",
                "icon_url" => "https://images.justwatch.com/icon/304872423/s100"
            ],
            [
                "id" => 1751,
                "name" => "beIN SPORTS",
                "code" => "bei",
                "icon_url" => "https://images.justwatch.com/icon/294000940/s100"
            ],
            [
                "id" => 150,
                "name" => "blue TV",
                "code" => "swc",
                "icon_url" => "https://images.justwatch.com/icon/301750524/s100"
            ],
            [
                "id" => 341,
                "name" => "blutv",
                "code" => "blv",
                "icon_url" => "https://images.justwatch.com/icon/148125427/s100"
            ],
            [
                "id" => 85,
                "name" => "dTV",
                "code" => "dtv",
                "icon_url" => "https://images.justwatch.com/icon/1186231/s100"
            ],
            [
                "id" => 542,
                "name" => "filmfriend",
                "code" => "ffr",
                "icon_url" => "https://images.justwatch.com/icon/243087116/s100"
            ],
            [
                "id" => 1756,
                "name" => "filmingo",
                "code" => "fgo",
                "icon_url" => "https://images.justwatch.com/icon/296185622/s100"
            ],
            [
                "id" => 257,
                "name" => "fuboTV",
                "code" => "fuv",
                "icon_url" => "https://images.justwatch.com/icon/124248862/s100"
            ],
            [
                "id" => 468,
                "name" => "genflix",
                "code" => "gnf",
                "icon_url" => "https://images.justwatch.com/icon/207966974/s100"
            ],
            [
                "id" => 702,
                "name" => "iBAKATV",
                "code" => "ibt",
                "icon_url" => "https://images.justwatch.com/icon/270296679/s100"
            ],
            [
                "id" => 581,
                "name" => "iQIYI",
                "code" => "iqi",
                "icon_url" => "https://images.justwatch.com/icon/245741856/s100"
            ],
            [
                "id" => 511,
                "name" => "iWantTFC",
                "code" => "tfc",
                "icon_url" => "https://images.justwatch.com/icon/209565388/s100"
            ],
            [
                "id" => 1728,
                "name" => "iWonder Full Amazon channel",
                "code" => "iwa",
                "icon_url" => "https://images.justwatch.com/icon/292990620/s100"
            ],
            [
                "id" => 146,
                "name" => "iciTouTV",
                "code" => "itt",
                "icon_url" => "https://images.justwatch.com/icon/5827076/s100"
            ],
            [
                "id" => 160,
                "name" => "iflix",
                "code" => "ifx",
                "icon_url" => "https://images.justwatch.com/icon/260208032/s100"
            ],
            [
                "id" => 1797,
                "name" => "inSports TV",
                "code" => "isp",
                "icon_url" => "https://images.justwatch.com/icon/301462835/s100"
            ],
            [
                "id" => 1850,
                "name" => "izzi",
                "code" => "izz",
                "icon_url" => "https://images.justwatch.com/icon/303330458/s100"
            ],
            [
                "id" => 20,
                "name" => "maxdome Store",
                "code" => "mds",
                "icon_url" => "https://images.justwatch.com/icon/270282853/s100"
            ],
            [
                "id" => 697,
                "name" => "meJane",
                "code" => "mej",
                "icon_url" => "https://images.justwatch.com/icon/268285836/s100"
            ],
            [
                "id" => 342,
                "name" => "puhutv",
                "code" => "pht",
                "icon_url" => "https://images.justwatch.com/icon/148251056/s100"
            ],
            [
                "id" => 14,
                "name" => "realeyz",
                "code" => "rlz",
                "icon_url" => "https://images.justwatch.com/icon/441358/s100"
            ],
            [
                "id" => 541,
                "name" => "rtve",
                "code" => "rtv",
                "icon_url" => "https://images.justwatch.com/icon/243087006/s100"
            ],
            [
                "id" => 82,
                "name" => "tenplay",
                "code" => "tpl",
                "icon_url" => "https://images.justwatch.com/icon/925882/s100"
            ],
            [
                "id" => 1783,
                "name" => "tln",
                "code" => "tln",
                "icon_url" => "https://images.justwatch.com/icon/300946714/s100"
            ],
            [
                "id" => 507,
                "name" => "tru TV",
                "code" => "tru",
                "icon_url" => "https://images.justwatch.com/icon/209564918/s100"
            ],
            [
                "id" => 488,
                "name" => "tvo",
                "code" => "tvo",
                "icon_url" => "https://images.justwatch.com/icon/208860122/s100"
            ],
            [
                "id" => 556,
                "name" => "tvzavr",
                "code" => "tzr",
                "icon_url" => "https://images.justwatch.com/icon/243246866/s100"
            ],
            [
                "id" => 356,
                "name" => "wavve",
                "code" => "wav",
                "icon_url" => "https://images.justwatch.com/icon/155655742/s100"
            ],
            [
                "id" => 392,
                "name" => "wedotv",
                "code" => "wa4",
                "icon_url" => "https://images.justwatch.com/icon/292285601/s100"
            ]
        ];
            
        DB::table('providers')->insert($providers);
    }
}
