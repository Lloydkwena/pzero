@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h2>{{ __('You are logged in!') }}</h2>

                        <?php

                        $myData = <<<JSON

[
{
        "Country": "North America",
        "TotalCases": "34,095",
        "NewCases": "1,497,901",
        "TotalDeaths": "134",
        "NewDeaths": "101,532,381",
        "TotalRecovered": "30,941"
    },
    {
        "Country": "Asia",
        "TotalCases": "206,118",
        "NewCases": "1,443,960",
        "TotalDeaths": "171",
        "NewDeaths": "158,695,279",
        "TotalRecovered": "132,090"
    },
    {
        "Country": "South America",
        "TotalCases": "5,733",
        "NewCases": "1,311,539",
        "TotalDeaths": "2",
        "NewDeaths": "58,330,927",
        "TotalRecovered": "17,564"
    },
    {
        "Country": "Europe",
        "TotalCases": "42,210",
        "NewCases": "1,866,754",
        "TotalDeaths": "114",
        "NewDeaths": "200,642,575",
        "TotalRecovered": "143,005"
    },
    {
        "Country": "Oceania",
        "TotalCases": "+59,676",
        "NewCases": "15,452",
        "TotalDeaths": "124",
        "NewDeaths": "10,231,907",
        "TotalRecovered": "11,774"
    },
    {
        "Country": "Africa",
        "TotalCases": "256,609",
        "NewCases": "11,645,499",
        "TotalDeaths": "575,888",
        "NewDeaths": "999",
        "TotalRecovered": "Africa"
    },
    {
        "Country": "nn",
        "TotalCases": "15",
        "NewCases": "706",
        "TotalDeaths": "0",
        "NewDeaths": "0",
        "TotalRecovered": "n"
    },
    {
        "Country": "World",
        "TotalCases": "347,832",
        "NewCases": "6,392,230",
        "TotalDeaths": "545",
        "NewDeaths": "541,079,274",
        "TotalRecovered": "35,374"
    },
        {
        "Country": "1",
        "TotalCases": "91,529,862",
        "NewCases": "1,049,683 ",
        "TotalDeaths": "86,861,939",
        "NewDeaths": "3,618,240",
        "TotalRecovered": "4,322"
    },
    {
        "Country": "2",
        "TotalCases": "43,803,619",
        "NewCases": "525,825 ",
        "TotalDeaths": "43,132,140",
        "NewDeaths": "145,654",
        "TotalRecovered": "698"
    },
    {
        "Country": "3",
        "TotalCases": "33,398,040",
        "NewCases": "675,929 ",
        "TotalDeaths": "31,738,181",
        "NewDeaths": "983,930",
        "TotalRecovered": "8,318"
    },
    {
        "Country": "4",
        "TotalCases": "33,168,499",
        "NewCases": "150,979 ",
        "TotalDeaths": "30,799,534",
        "NewDeaths": "2,217,986",
        "TotalRecovered": "869"
    },
    {
        "Country": "5",
        "TotalCases": "29,994,679",
        "NewCases": "142,771 ",
        "TotalDeaths": "28,016,200",
        "NewDeaths": "+109,700",
        "TotalRecovered": "1,835,708"
    },
    {
        "Country": "6",
        "TotalCases": "23,075,360",
        "NewCases": "181,580 ",
        "TotalDeaths": "22,417,617",
        "NewDeaths": "+20,856",
        "TotalRecovered": "476,163"
    },
    {
        "Country": "7",
        "TotalCases": "20,299,013",
        "NewCases": "170,213 ",
        "TotalDeaths": "18,675,859",
        "NewDeaths": "1,452,941",
        "TotalRecovered": "413"
    },
    {
        "Country": "8",
        "TotalCases": "18,937,971",
        "NewCases": "+76,378",
        "TotalDeaths": "24,777 ",
        "NewDeaths": "+12",
        "TotalRecovered": "18,354,787"
    },
    {
        "Country": "9",
        "TotalCases": "18,504,729",
        "NewCases": "+5,685",
        "TotalDeaths": "381,997 ",
        "NewDeaths": "+37",
        "TotalRecovered": "17,919,843"
    },
    {
        "Country": "10",
        "TotalCases": "15,297,539",
        "NewCases": "99,088 ",
        "TotalDeaths": "15,096,774",
        "NewDeaths": "101,677",
        "TotalRecovered": "975"
    },
    {
        "Country": "11",
        "TotalCases": "13,132,159",
        "NewCases": "109,642 ",
        "TotalDeaths": "12,453,757",
        "NewDeaths": "568,760",
        "TotalRecovered": "339"
    },
    {
        "Country": "12",
        "TotalCases": "10,763,694",
        "NewCases": "+1,161",
        "TotalDeaths": "43,091 ",
        "NewDeaths": "9,832,646",
        "TotalRecovered": "+9,072"
    },
    {
        "Country": "13",
        "TotalCases": "10,469,440",
        "NewCases": "+81,362",
        "TotalDeaths": "31,643 ",
        "NewDeaths": "+33",
        "TotalRecovered": "9,659,932"
    },
    {
        "Country": "14",
        "TotalCases": "9,465,827",
        "NewCases": "129,202 ",
        "TotalDeaths": "9,241,849",
        "NewDeaths": "+3,879",
        "TotalRecovered": "94,776"
    },
    {
        "Country": "15",
        "TotalCases": "8,912,149",
        "NewCases": "+48,971",
        "TotalDeaths": "10,884 ",
        "NewDeaths": "+90",
        "TotalRecovered": "8,504,366"
    },
    {
        "Country": "16",
        "TotalCases": "8,292,279",
        "NewCases": "22,439 ",
        "TotalDeaths": "8,107,123",
        "NewDeaths": "162,717",
        "TotalRecovered": "51"
    },
    {
        "Country": "17",
        "TotalCases": "7,296,635",
        "NewCases": "+7,093",
        "TotalDeaths": "141,564 ",
        "NewDeaths": "+32",
        "TotalRecovered": "7,070,379"
    },
    {
        "Country": "18",
        "TotalCases": "6,488,358",
        "NewCases": "+34,095",
        "TotalDeaths": "326,657 ",
        "NewDeaths": "+134",
        "TotalRecovered": "5,570,111"
    },
    {
        "Country": "19",
        "TotalCases": "6,223,497",
        "NewCases": "140,365 ",
        "TotalDeaths": "6,031,815",
        "NewDeaths": "51,317",
        "TotalRecovered": "342"
    },
    {
        "Country": "20",
        "TotalCases": "6,149,084",
        "NewCases": "+5,653",
        "TotalDeaths": "156,875 ",
        "NewDeaths": "+10",
        "TotalRecovered": "5,957,908"
    },
    {
        "Country": "21",
        "TotalCases": "6,038,893",
        "NewCases": "+2,853",
        "TotalDeaths": "116,486 ",
        "NewDeaths": "+11",
        "TotalRecovered": "5,335,788"
    },
    {
        "Country": "22",
        "TotalCases": "5,301,289",
        "NewCases": "24,487 ",
        "TotalDeaths": "5,053,822",
        "NewDeaths": "222,980",
        "TotalRecovered": "61"
    },
    {
        "Country": "23",
        "TotalCases": "5,020,181",
        "NewCases": "108,690 ",
        "TotalDeaths": "4,908,673",
        "NewDeaths": "+325",
        "TotalRecovered": "2,818"
    },
    {
        "Country": "24",
        "TotalCases": "4,772,120",
        "NewCases": "+260",
        "TotalDeaths": "74 ",
        "NewDeaths": "4,771,550",
        "TotalRecovered": "+350"
    },
    {
        "Country": "25",
        "TotalCases": "4,644,055",
        "NewCases": "+14,014",
        "TotalDeaths": "18,971 ",
        "NewDeaths": "+13",
        "TotalRecovered": "4,499,583"
    },
    {
        "Country": "26",
        "TotalCases": "4,629,963",
        "NewCases": "35,870 ",
        "TotalDeaths": "4,550,949",
        "NewDeaths": "43,144",
        "TotalRecovered": "55"
    },
    {
        "Country": "27",
        "TotalCases": "4,565,854",
        "NewCases": "+2,886",
        "TotalDeaths": "31,053 ",
        "NewDeaths": "+19",
        "TotalRecovered": "4,511,625"
    },
    {
        "Country": "28",
        "TotalCases": "4,525,451",
        "NewCases": "11,208 ",
        "TotalDeaths": "4,449,224",
        "NewDeaths": "65,019",
        "TotalRecovered": "310"
    },
    {
        "Country": "29",
        "TotalCases": "4,368,611",
        "NewCases": "32,089 ",
        "TotalDeaths": "4,162,926",
        "NewDeaths": "173,596",
        "TotalRecovered": "114"
    },
    {
        "Country": "30",
        "TotalCases": "4,337,076",
        "NewCases": "+27,196",
        "TotalDeaths": "8,318 ",
        "NewDeaths": "+57",
        "TotalRecovered": "3,758,988"
    },
    {
        "Country": "31",
        "TotalCases": "4,145,452",
        "NewCases": "59,140 ",
        "TotalDeaths": "3,834,586",
        "NewDeaths": "251,726",
        "TotalRecovered": "196"
    },
    {
        "Country": "32",
        "TotalCases": "4,012,359",
        "NewCases": "43,583 ",
        "TotalDeaths": "3,695,850",
        "NewDeaths": "272,926",
        "TotalRecovered": "195"
    },
    {
        "Country": "33",
        "TotalCases": "4,000,894",
        "NewCases": "101,935 ",
        "TotalDeaths": "3,892,995",
        "NewDeaths": "5,964",
        "TotalRecovered": "192"
    },
    {
        "Country": "34",
        "TotalCases": "3,958,805",
        "NewCases": "+3,240",
        "TotalDeaths": "40,365 ",
        "NewDeaths": "+2",
        "TotalRecovered": "3,902,638"
    },
    {
        "Country": "35",
        "TotalCases": "3,893,084",
        "NewCases": "14,024 ",
        "TotalDeaths": "3,689,275",
        "NewDeaths": "189,785",
        "TotalRecovered": "54"
    },
    {
        "Country": "36",
        "TotalCases": "3,843,142",
        "NewCases": "30,476 ",
        "TotalDeaths": "3,614,441",
        "NewDeaths": "198,225",
        "TotalRecovered": "103"
    },
    {
        "Country": "37",
        "TotalCases": "3,773,733",
        "NewCases": "213,870 ",
        "TotalDeaths": "3,442,469",
        "NewDeaths": "+12,110",
        "TotalRecovered": "117,394"
    },
    {
        "Country": "38",
        "TotalCases": "3,737,222",
        "NewCases": "60,641 ",
        "TotalDeaths": "3,656,070",
        "NewDeaths": "20,511",
        "TotalRecovered": "517"
    },
    {
        "Country": "39",
        "TotalCases": "3,046,477",
        "NewCases": "6,567 ",
        "TotalDeaths": "3,014,978",
        "NewDeaths": "24,932",
        "TotalRecovered": "14"
    },
    {
        "Country": "40",
        "TotalCases": "2,974,880",
        "NewCases": "65,824 ",
        "TotalDeaths": "2,861,363",
        "NewDeaths": "47,693",
        "TotalRecovered": "136"
    },
    {
        "Country": "41",
        "TotalCases": "2,528,166",
        "NewCases": "19,170 ",
        "TotalDeaths": "2,494,834",
        "NewDeaths": "+168",
        "TotalRecovered": "14,162"
    },
    {
        "Country": "42",
        "TotalCases": "2,413,472",
        "NewCases": "25,274 ",
        "TotalDeaths": "2,353,828",
        "NewDeaths": "34,370",
        "TotalRecovered": "22"
    },
    {
        "Country": "43",
        "TotalCases": "2,063,894",
        "NewCases": "16,178 ",
        "TotalDeaths": "2,013,234",
        "NewDeaths": "34,482",
        "TotalRecovered": "18"
    },
    {
        "Country": "44",
        "TotalCases": "1,998,291",
        "NewCases": "29,249 ",
        "TotalDeaths": "1,928,650",
        "NewDeaths": "40,392",
        "TotalRecovered": "1,228"
    },
    {
        "Country": "45",
        "TotalCases": "1,951,079",
        "NewCases": "+10,255",
        "TotalDeaths": "46,736 ",
        "NewDeaths": "+40",
        "TotalRecovered": "1,883,085"
    },
    {
        "Country": "46",
        "TotalCases": "1,808,387",
        "NewCases": "+1,159",
        "TotalDeaths": "20,183 ",
        "NewDeaths": "+7",
        "TotalRecovered": "1,778,205"
    },
    {
        "Country": "47",
        "TotalCases": "1,700,526",
        "NewCases": "14,068 ",
        "TotalDeaths": "1,685,354",
        "NewDeaths": "1,104",
        "TotalRecovered": "124"
    },
    {
        "Country": "48",
        "TotalCases": "1,667,453",
        "NewCases": "16,847 ",
        "TotalDeaths": "1,637,293",
        "NewDeaths": "13,313",
        "TotalRecovered": "419,640"
    },
    {
        "Country": "49",
        "TotalCases": "1,628,745",
        "NewCases": "7,537 ",
        "TotalDeaths": "1,566,323",
        "NewDeaths": "54,885",
        "TotalRecovered": "41"
    },
    {
        "Country": "50",
        "TotalCases": "1,616,067",
        "NewCases": "1,460 ",
        "TotalDeaths": "1,505,241",
        "NewDeaths": "109,366",
        "TotalRecovered": "13"
    },
    {
        "Country": "51",
        "TotalCases": "1,547,795",
        "NewCases": "+592",
        "TotalDeaths": "30,452 ",
        "NewDeaths": "+7",
        "TotalRecovered": "1,507,670"
    },
    {
        "Country": "52",
        "TotalCases": "1,530,186",
        "NewCases": "+10,696",
        "TotalDeaths": "1,837 ",
        "NewDeaths": "+34",
        "TotalRecovered": "1,460,465"
    },
    {
        "Country": "53",
        "TotalCases": "1,453,430",
        "NewCases": "3,504 ",
        "TotalDeaths": "1,444,724",
        "NewDeaths": "5,202",
        "TotalRecovered": "20"
    },
    {
        "Country": "54",
        "TotalCases": "1,322,494",
        "NewCases": "13,664 ",
        "TotalDeaths": "1,296,197",
        "NewDeaths": "12,633",
        "TotalRecovered": "24"
    },
    {
        "Country": "55",
        "TotalCases": "1,301,028",
        "NewCases": "9,444 ",
        "TotalDeaths": "1,210,468",
        "NewDeaths": "81,116",
        "TotalRecovered": "7"
    },
    {
        "Country": "56",
        "TotalCases": "1,253,341",
        "NewCases": "16,193 ",
        "TotalDeaths": "1,224,596",
        "NewDeaths": "12,552",
        "TotalRecovered": "293"
    },
    {
        "Country": "57",
        "TotalCases": "1,189,000",
        "NewCases": "37,307 ",
        "TotalDeaths": "1,137,484",
        "NewDeaths": "14,209",
        "TotalRecovered": "42"
    },
    {
        "Country": "58",
        "TotalCases": "1,171,034",
        "NewCases": "5,012 ",
        "TotalDeaths": "1,128,585",
        "NewDeaths": "37,437",
        "TotalRecovered": "21"
    },
    {
        "Country": "59",
        "TotalCases": "1,169,342",
        "NewCases": "16,169 ",
        "TotalDeaths": "1,144,574",
        "NewDeaths": "8,599",
        "TotalRecovered": "20"
    },
    {
        "Country": "60",
        "TotalCases": "1,144,149",
        "NewCases": "10,494 ",
        "TotalDeaths": "1,087,587",
        "NewDeaths": "46,068",
        "TotalRecovered": "186"
    },
    {
        "Country": "61",
        "TotalCases": "1,114,370",
        "NewCases": "28,942 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "62",
        "TotalCases": "1,106,930",
        "NewCases": "8,529 ",
        "TotalDeaths": "1,098,021",
        "NewDeaths": "380",
        "TotalRecovered": "23"
    },
    {
        "Country": "63",
        "TotalCases": "1,076,587",
        "NewCases": "+845",
        "TotalDeaths": "9,194 ",
        "NewDeaths": "+2",
        "TotalRecovered": "1,038,300"
    },
    {
        "Country": "64",
        "TotalCases": "1,065,473",
        "NewCases": "+1,820",
        "TotalDeaths": "6,668 ",
        "NewDeaths": "1,036,675",
        "TotalRecovered": "22,130"
    },
    {
        "Country": "65",
        "TotalCases": "994,037",
        "NewCases": "7,118 ",
        "TotalDeaths": "985,592",
        "NewDeaths": "1,327",
        "TotalRecovered": "105,267"
    },
    {
        "Country": "66",
        "TotalCases": "991,257",
        "NewCases": "18,851 ",
        "TotalDeaths": "898,808",
        "NewDeaths": "73,598",
        "TotalRecovered": "5"
    },
    {
        "Country": "67",
        "TotalCases": "982,402",
        "NewCases": "+340",
        "TotalDeaths": "11,954 ",
        "NewDeaths": "968,172",
        "TotalRecovered": "+46"
    },
    {
        "Country": "68",
        "TotalCases": "979,738",
        "NewCases": "+5,733",
        "TotalDeaths": "21,991 ",
        "NewDeaths": "+2",
        "TotalRecovered": "908,810"
    },
    {
        "Country": "69",
        "TotalCases": "976,180",
        "NewCases": "2,327 ",
        "TotalDeaths": "956,351",
        "NewDeaths": "17,502",
        "TotalRecovered": "96,323"
    },
    {
        "Country": "70",
        "TotalCases": "967,808",
        "NewCases": "7,387 ",
        "TotalDeaths": "958,402",
        "NewDeaths": "2,019",
        "TotalRecovered": "18"
    },
    {
        "Country": "71",
        "TotalCases": "942,083",
        "NewCases": "8,395 ",
        "TotalDeaths": "922,313",
        "NewDeaths": "11,375",
        "TotalRecovered": "16"
    },
    {
        "Country": "72",
        "TotalCases": "936,227",
        "NewCases": "35,774 ",
        "TotalDeaths": "878,024",
        "NewDeaths": "22,429",
        "TotalRecovered": "759"
    },
    {
        "Country": "73",
        "TotalCases": "932,058",
        "NewCases": "2,179 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "74",
        "TotalCases": "904,934",
        "NewCases": "8,525 ",
        "TotalDeaths": "860,711",
        "NewDeaths": "35,698",
        "TotalRecovered": "52"
    },
    {
        "Country": "75",
        "TotalCases": "849,802",
        "NewCases": "+2,093",
        "TotalDeaths": "5,879 ",
        "NewDeaths": "+1",
        "TotalRecovered": "832,691"
    },
    {
        "Country": "76",
        "TotalCases": "805,277",
        "NewCases": "9,233 ",
        "TotalDeaths": "788,760",
        "NewDeaths": "7,284",
        "TotalRecovered": "152"
    },
    {
        "Country": "77",
        "TotalCases": "794,913",
        "NewCases": "9,727 ",
        "TotalDeaths": "784,090",
        "NewDeaths": "1,096",
        "TotalRecovered": "76,983"
    },
    {
        "Country": "78",
        "TotalCases": "688,820",
        "NewCases": "19,083 ",
        "TotalDeaths": "647,415",
        "NewDeaths": "22,322",
        "TotalRecovered": "6"
    },
    {
        "Country": "79",
        "TotalCases": "664,572",
        "NewCases": "16,531 ",
        "TotalDeaths": "647,460",
        "NewDeaths": "581",
        "TotalRecovered": "30,772"
    },
    {
        "Country": "80",
        "TotalCases": "651,514",
        "NewCases": "1,506 ",
        "TotalDeaths": "639,191",
        "NewDeaths": "10,817",
        "TotalRecovered": "17"
    },
    {
        "Country": "81",
        "TotalCases": "648,216",
        "NewCases": "2,556 ",
        "TotalDeaths": "641,752",
        "NewDeaths": "3,908",
        "TotalRecovered": "6"
    },
    {
        "Country": "82",
        "TotalCases": "623,105",
        "NewCases": "4,383 ",
        "TotalDeaths": "614,517",
        "NewDeaths": "4,205",
        "TotalRecovered": "23"
    },
    {
        "Country": "83",
        "TotalCases": "613,855",
        "NewCases": "19,434 ",
        "TotalDeaths": "592,754",
        "NewDeaths": "1,667",
        "TotalRecovered": "11,130"
    },
    {
        "Country": "84",
        "TotalCases": "592,699",
        "NewCases": "5,360 ",
        "TotalDeaths": "582,977",
        "NewDeaths": "4,362",
        "TotalRecovered": "17"
    },
    {
        "Country": "85",
        "TotalCases": "584,178",
        "NewCases": "2,612 ",
        "TotalDeaths": "524,225",
        "NewDeaths": "57,341",
        "TotalRecovered": "6"
    },
    {
        "Country": "86",
        "TotalCases": "545,896",
        "NewCases": "1,086 ",
        "TotalDeaths": "124,370",
        "NewDeaths": "420,440",
        "TotalRecovered": "60"
    },
    {
        "Country": "87",
        "TotalCases": "530,975",
        "NewCases": "5,750 ",
        "TotalDeaths": "521,528",
        "NewDeaths": "3,697",
        "TotalRecovered": "36"
    },
    {
        "Country": "88",
        "TotalCases": "520,321",
        "NewCases": "11,567 ",
        "TotalDeaths": "504,142",
        "NewDeaths": "4,612",
        "TotalRecovered": "49"
    },
    {
        "Country": "89",
        "TotalCases": "515,645",
        "NewCases": "24,613 ",
        "TotalDeaths": "442,182",
        "NewDeaths": "48,850",
        "TotalRecovered": "122"
    },
    {
        "Country": "90",
        "TotalCases": "502,642",
        "NewCases": "6,431 ",
        "TotalDeaths": "490,973",
        "NewDeaths": "5,238",
        "TotalRecovered": "101"
    },
    {
        "Country": "91",
        "TotalCases": "491,285",
        "NewCases": "7,563 ",
        "TotalDeaths": "468,339",
        "NewDeaths": "15,383",
        "TotalRecovered": "40"
    },
    {
        "Country": "92",
        "TotalCases": "432,139",
        "NewCases": "10,919 ",
        "TotalDeaths": "132,498",
        "NewDeaths": "288,722",
        "TotalRecovered": "105"
    },
    {
        "Country": "93",
        "TotalCases": "429,237",
        "NewCases": "825 ",
        "TotalDeaths": "418,572",
        "NewDeaths": "9,840",
        "TotalRecovered": "10"
    },
    {
        "Country": "94",
        "TotalCases": "424,400",
        "NewCases": "8,629 ",
        "TotalDeaths": "412,661",
        "NewDeaths": "3,110",
        "TotalRecovered": "142,677"
    },
    {
        "Country": "95",
        "TotalCases": "398,558",
        "NewCases": "+1,112",
        "TotalDeaths": "680 ",
        "NewDeaths": "389,636",
        "TotalRecovered": "+863"
    },
    {
        "Country": "96",
        "TotalCases": "391,641",
        "NewCases": "4,260 ",
        "TotalDeaths": "384,669",
        "NewDeaths": "2,712",
        "TotalRecovered": "2"
    },
    {
        "Country": "97",
        "TotalCases": "381,543",
        "NewCases": "15,824 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "98",
        "TotalCases": "336,904",
        "NewCases": "5,668 ",
        "TotalDeaths": "330,150",
        "NewDeaths": "1,086",
        "TotalRecovered": "3"
    },
    {
        "Country": "99",
        "TotalCases": "328,550",
        "NewCases": "4,013 ",
        "TotalDeaths": "323,022",
        "NewDeaths": "1,515",
        "TotalRecovered": "4"
    },
    {
        "Country": "100",
        "TotalCases": "324,841",
        "NewCases": "2,760 ",
        "TotalDeaths": "321,024",
        "NewDeaths": "1,057",
        "TotalRecovered": "1"
    },
    {
        "Country": "101",
        "TotalCases": "319,806",
        "NewCases": "9,343 ",
        "TotalDeaths": "307,342",
        "NewDeaths": "3,121",
        "TotalRecovered": "153,517"
    },
    {
        "Country": "102",
        "TotalCases": "298,578",
        "NewCases": "3,520 ",
        "TotalDeaths": "285,912",
        "NewDeaths": "9,146",
        "TotalRecovered": "103,984"
    },
    {
        "Country": "103",
        "TotalCases": "274,524",
        "NewCases": "1,102 ",
        "TotalDeaths": "259,768",
        "NewDeaths": "13,654",
        "TotalRecovered": "424,447"
    },
    {
        "Country": "104",
        "TotalCases": "266,542",
        "NewCases": "6,875 ",
        "TotalDeaths": "178,829",
        "NewDeaths": "80,838",
        "TotalRecovered": "6"
    },
    {
        "Country": "105",
        "TotalCases": "259,485",
        "NewCases": "3,146 ",
        "TotalDeaths": "253,037",
        "NewDeaths": "3,302",
        "TotalRecovered": "11"
    },
    {
        "Country": "106",
        "TotalCases": "256,187",
        "NewCases": "5,568 ",
        "TotalDeaths": "250,080",
        "NewDeaths": "539",
        "TotalRecovered": "12"
    },
    {
        "Country": "107",
        "TotalCases": "248,535",
        "NewCases": "2,734 ",
        "TotalDeaths": "241,366",
        "NewDeaths": "4,435",
        "TotalRecovered": "6"
    },
    {
        "Country": "108",
        "TotalCases": "242,437",
        "NewCases": "+71",
        "TotalDeaths": "1,637 ",
        "NewDeaths": "239,336",
        "TotalRecovered": "+92"
    },
    {
        "Country": "109",
        "TotalCases": "229,117",
        "NewCases": "2,215 ",
        "TotalDeaths": "226,483",
        "NewDeaths": "419",
        "TotalRecovered": "11"
    },
    {
        "Country": "110",
        "TotalCases": "210,638",
        "NewCases": "+46",
        "TotalDeaths": "757 ",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "111",
        "TotalCases": "208,003",
        "NewCases": "987 ",
        "TotalDeaths": "104",
        "NewDeaths": "206,912",
        "TotalRecovered": "8"
    },
    {
        "Country": "112",
        "TotalCases": "201,329",
        "NewCases": "2,991 ",
        "TotalDeaths": "196,406",
        "NewDeaths": "1,932",
        "TotalRecovered": "131"
    },
    {
        "Country": "113",
        "TotalCases": "200,397",
        "NewCases": "179 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "114",
        "TotalCases": "189,903",
        "NewCases": "+1,684",
        "TotalDeaths": "225 ",
        "NewDeaths": "164,116",
        "TotalRecovered": "25,562"
    },
    {
        "Country": "115",
        "TotalCases": "184,038",
        "NewCases": "+111",
        "TotalDeaths": "7,737 ",
        "NewDeaths": "+1",
        "TotalRecovered": "165,842"
    },
    {
        "Country": "116",
        "TotalCases": "183,908",
        "NewCases": "307 ",
        "TotalDeaths": "163,687",
        "NewDeaths": "19,914",
        "TotalRecovered": "25"
    },
    {
        "Country": "117",
        "TotalCases": "180,970",
        "NewCases": "4,178 ",
        "TotalDeaths": "165,895",
        "NewDeaths": "10,897",
        "TotalRecovered": "8"
    },
    {
        "Country": "118",
        "TotalCases": "179,285",
        "NewCases": "960 ",
        "TotalDeaths": "2,250",
        "NewDeaths": "176,075",
        "TotalRecovered": "19"
    },
    {
        "Country": "119",
        "TotalCases": "169,428",
        "NewCases": "4,039 ",
        "TotalDeaths": "159,341",
        "NewDeaths": "6,048",
        "TotalRecovered": "18"
    },
    {
        "Country": "120",
        "TotalCases": "169,253",
        "NewCases": "4,065 ",
        "TotalDeaths": "164,813",
        "NewDeaths": "375",
        "TotalRecovered": "64,235"
    },
    {
        "Country": "121",
        "TotalCases": "168,802",
        "NewCases": "3,627 ",
        "TotalDeaths": "100,420",
        "NewDeaths": "64,755",
        "TotalRecovered": "5"
    },
    {
        "Country": "122",
        "TotalCases": "167,215",
        "NewCases": "1,456 ",
        "TotalDeaths": "165,153",
        "NewDeaths": "606",
        "TotalRecovered": "2"
    },
    {
        "Country": "123",
        "TotalCases": "144,932",
        "NewCases": "3,173 ",
        "TotalDeaths": "92,571",
        "NewDeaths": "49,188",
        "TotalRecovered": "48,512"
    },
    {
        "Country": "124",
        "TotalCases": "136,512",
        "NewCases": "+13",
        "TotalDeaths": "3,056 ",
        "NewDeaths": "133,334",
        "TotalRecovered": "+15"
    },
    {
        "Country": "125",
        "TotalCases": "131,931",
        "NewCases": "1,466 ",
        "TotalDeaths": "45,522",
        "NewDeaths": "84,943",
        "TotalRecovered": "9,695"
    },
    {
        "Country": "126",
        "TotalCases": "120,068",
        "NewCases": "1,931 ",
        "TotalDeaths": "117,791",
        "NewDeaths": "346",
        "TotalRecovered": "13"
    },
    {
        "Country": "127",
        "TotalCases": "111,629",
        "NewCases": "+219",
        "TotalDeaths": "778 ",
        "NewDeaths": "+1",
        "TotalRecovered": "105,227"
    },
    {
        "Country": "128",
        "TotalCases": "102,209",
        "NewCases": "1,912 ",
        "TotalDeaths": "97,149",
        "NewDeaths": "3,148",
        "TotalRecovered": "2,924"
    },
    {
        "Country": "129",
        "TotalCases": "91,928",
        "NewCases": "1,390 ",
        "TotalDeaths": "50,930",
        "NewDeaths": "39,608",
        "TotalRecovered": "966"
    },
    {
        "Country": "130",
        "TotalCases": "89,779",
        "NewCases": "402 ",
        "TotalDeaths": "11,254",
        "NewDeaths": "78,123",
        "TotalRecovered": "1"
    },
    {
        "Country": "131",
        "TotalCases": "88,154",
        "NewCases": "480 ",
        "TotalDeaths": "85,775",
        "NewDeaths": "1,899",
        "TotalRecovered": "305,990"
    },
    {
        "Country": "132",
        "TotalCases": "86,968",
        "NewCases": "2,655 ",
        "TotalDeaths": "83,551",
        "NewDeaths": "762",
        "TotalRecovered": "67"
    },
    {
        "Country": "133",
        "TotalCases": "86,854",
        "NewCases": "1,968 ",
        "TotalDeaths": "84,661",
        "NewDeaths": "225",
        "TotalRecovered": "4,922"
    },
    {
        "Country": "134",
        "TotalCases": "86,404",
        "NewCases": "185 ",
        "TotalDeaths": "83,861",
        "NewDeaths": "2,358",
        "TotalRecovered": "487,783"
    },
    {
        "Country": "135",
        "TotalCases": "84,658",
        "NewCases": "808 ",
        "TotalDeaths": "83,626",
        "NewDeaths": "224",
        "TotalRecovered": "3,055"
    },
    {
        "Country": "136",
        "TotalCases": "80,949",
        "NewCases": "1,379 ",
        "TotalDeaths": "49,595",
        "NewDeaths": "29,975",
        "TotalRecovered": "135,509"
    },
    {
        "Country": "137",
        "TotalCases": "74,113",
        "NewCases": "649 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "138",
        "TotalCases": "73,245",
        "NewCases": "1,417 ",
        "TotalDeaths": "71,796",
        "NewDeaths": "32",
        "TotalRecovered": "11"
    },
    {
        "Country": "139",
        "TotalCases": "69,058",
        "NewCases": "1,267 ",
        "TotalDeaths": "66,875",
        "NewDeaths": "916",
        "TotalRecovered": "86,942"
    },
    {
        "Country": "140",
        "TotalCases": "67,999",
        "NewCases": "314 ",
        "TotalDeaths": "65,708",
        "NewDeaths": "1,977",
        "TotalRecovered": "9"
    },
    {
        "Country": "141",
        "TotalCases": "66,975",
        "NewCases": "870 ",
        "TotalDeaths": "64,368",
        "NewDeaths": "1,737",
        "TotalRecovered": "73,622"
    },
    {
        "Country": "142",
        "TotalCases": "66,317",
        "NewCases": "680 ",
        "TotalDeaths": "64,977",
        "NewDeaths": "660",
        "TotalRecovered": "6"
    },
    {
        "Country": "143",
        "TotalCases": "66,289",
        "NewCases": "1,406 ",
        "TotalDeaths": "64,277",
        "NewDeaths": "606",
        "TotalRecovered": "6"
    },
    {
        "Country": "144",
        "TotalCases": "62,872",
        "NewCases": "4,955 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "145",
        "TotalCases": "62,032",
        "NewCases": "989 ",
        "TotalDeaths": "59,700",
        "NewDeaths": "1,343",
        "TotalRecovered": "12,661"
    },
    {
        "Country": "146",
        "TotalCases": "61,964",
        "NewCases": "409 ",
        "TotalDeaths": "61,295",
        "NewDeaths": "260",
        "TotalRecovered": "23"
    },
    {
        "Country": "147",
        "TotalCases": "60,109",
        "NewCases": "21 ",
        "TotalDeaths": "59,959",
        "NewDeaths": "129",
        "TotalRecovered": "76,187"
    },
    {
        "Country": "148",
        "TotalCases": "56,022",
        "NewCases": "3,150 ",
        "TotalDeaths": "52,793",
        "NewDeaths": "79",
        "TotalRecovered": "3,050"
    },
    {
        "Country": "149",
        "TotalCases": "48,289",
        "NewCases": "306 ",
        "TotalDeaths": "47,477",
        "NewDeaths": "506",
        "TotalRecovered": "20,698"
    },
    {
        "Country": "150",
        "TotalCases": "45,185",
        "NewCases": "167 ",
        "TotalDeaths": "44,755",
        "NewDeaths": "263",
        "TotalRecovered": "453,706"
    },
    {
        "Country": "151",
        "TotalCases": "44,932",
        "NewCases": "282 ",
        "TotalDeaths": "44,434",
        "NewDeaths": "216",
        "TotalRecovered": "3"
    },
    {
        "Country": "152",
        "TotalCases": "44,761",
        "NewCases": "662 ",
        "TotalDeaths": "43,982",
        "NewDeaths": "117",
        "TotalRecovered": "7"
    },
    {
        "Country": "153",
        "TotalCases": "44,671",
        "NewCases": "153 ",
        "TotalDeaths": "43,802",
        "NewDeaths": "716",
        "TotalRecovered": "14"
    },
    {
        "Country": "154",
        "TotalCases": "43,414",
        "NewCases": "38 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "155",
        "TotalCases": "41,787",
        "NewCases": "224 ",
        "TotalDeaths": "41,315",
        "NewDeaths": "248",
        "TotalRecovered": "1"
    },
    {
        "Country": "156",
        "TotalCases": "39,012",
        "NewCases": "1,008 ",
        "TotalDeaths": "37,157",
        "NewDeaths": "847",
        "TotalRecovered": "30,572"
    },
    {
        "Country": "157",
        "TotalCases": "37,958",
        "NewCases": "187 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "158",
        "TotalCases": "37,850",
        "NewCases": "275 ",
        "TotalDeaths": "37,314",
        "NewDeaths": "261",
        "TotalRecovered": "4,363"
    },
    {
        "Country": "159",
        "TotalCases": "37,510",
        "NewCases": "841 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "160",
        "TotalCases": "37,358",
        "NewCases": "443 ",
        "TotalDeaths": "36,419",
        "NewDeaths": "496",
        "TotalRecovered": "8"
    },
    {
        "Country": "161",
        "TotalCases": "37,239",
        "NewCases": "110 ",
        "TotalDeaths": "26,794",
        "NewDeaths": "10,335",
        "TotalRecovered": "433,253"
    },
    {
        "Country": "162",
        "TotalCases": "36,454",
        "NewCases": "822 ",
        "TotalDeaths": "34,948",
        "NewDeaths": "684",
        "TotalRecovered": "90,926"
    },
    {
        "Country": "163",
        "TotalCases": "34,658",
        "NewCases": "28 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "164",
        "TotalCases": "34,040",
        "NewCases": "702 ",
        "TotalDeaths": "24,155",
        "NewDeaths": "9,183",
        "TotalRecovered": "15,637"
    },
    {
        "Country": "165",
        "TotalCases": "32,103",
        "NewCases": "837 ",
        "TotalDeaths": "29,895",
        "NewDeaths": "1,371",
        "TotalRecovered": "2,747"
    },
    {
        "Country": "166",
        "TotalCases": "31,203",
        "NewCases": "737 ",
        "TotalDeaths": "30,370",
        "NewDeaths": "96",
        "TotalRecovered": "1,455"
    },
    {
        "Country": "167",
        "TotalCases": "27,966",
        "NewCases": "29 ",
        "TotalDeaths": "8,553",
        "NewDeaths": "19,384",
        "TotalRecovered": "1"
    },
    {
        "Country": "168",
        "TotalCases": "27,533",
        "NewCases": "385 ",
        "TotalDeaths": "26,997",
        "NewDeaths": "151",
        "TotalRecovered": "148,553"
    },
    {
        "Country": "169",
        "TotalCases": "27,271",
        "NewCases": "163 ",
        "TotalDeaths": "25,506",
        "NewDeaths": "1,602",
        "TotalRecovered": "5"
    },
    {
        "Country": "170",
        "TotalCases": "26,912",
        "NewCases": "1,350 ",
        "TotalDeaths": "13,182",
        "NewDeaths": "12,380",
        "TotalRecovered": "1,602"
    },
    {
        "Country": "171",
        "TotalCases": "24,604",
        "NewCases": "386 ",
        "TotalDeaths": "20,178",
        "NewDeaths": "4,040",
        "TotalRecovered": "4,245"
    },
    {
        "Country": "172",
        "TotalCases": "22,980",
        "NewCases": "133 ",
        "TotalDeaths": "22,836",
        "NewDeaths": "11",
        "TotalRecovered": "16,777"
    },
    {
        "Country": "173",
        "TotalCases": "21,544",
        "NewCases": "153 ",
        "TotalDeaths": "16,357",
        "NewDeaths": "5,034",
        "TotalRecovered": "1"
    },
    {
        "Country": "174",
        "TotalCases": "20,853",
        "NewCases": "382 ",
        "TotalDeaths": "20,439",
        "NewDeaths": "32",
        "TotalRecovered": "945"
    },
    {
        "Country": "175",
        "TotalCases": "19,862",
        "NewCases": "105 ",
        "TotalDeaths": "16,579",
        "NewDeaths": "3,178",
        "TotalRecovered": "589,902"
    },
    {
        "Country": "176",
        "TotalCases": "19,353",
        "NewCases": "117 ",
        "TotalDeaths": "18,695",
        "NewDeaths": "541",
        "TotalRecovered": "4"
    },
    {
        "Country": "177",
        "TotalCases": "18,694",
        "NewCases": "233 ",
        "TotalDeaths": "18,331",
        "NewDeaths": "130",
        "TotalRecovered": "4"
    },
    {
        "Country": "178",
        "TotalCases": "18,491",
        "NewCases": "225 ",
        "TotalDeaths": "4,225",
        "NewDeaths": "14,041",
        "TotalRecovered": "2,725"
    },
    {
        "Country": "179",
        "TotalCases": "18,452",
        "NewCases": "+27",
        "TotalDeaths": "85 ",
        "NewDeaths": "18,139",
        "TotalRecovered": "+33"
    },
    {
        "Country": "180",
        "TotalCases": "17,786",
        "NewCases": "125 ",
        "TotalDeaths": "17,264",
        "NewDeaths": "397",
        "TotalRecovered": "1,783"
    },
    {
        "Country": "181",
        "TotalCases": "17,733",
        "NewCases": "138 ",
        "TotalDeaths": "15,630",
        "NewDeaths": "1,965",
        "TotalRecovered": "1"
    },
    {
        "Country": "182",
        "TotalCases": "16,722",
        "NewCases": "141 ",
        "TotalDeaths": "16,201",
        "NewDeaths": "380",
        "TotalRecovered": "270,548"
    },
    {
        "Country": "183",
        "TotalCases": "16,621",
        "NewCases": "183 ",
        "TotalDeaths": "16,015",
        "NewDeaths": "423",
        "TotalRecovered": "5"
    },
    {
        "Country": "184",
        "TotalCases": "15,690",
        "NewCases": "189 ",
        "TotalDeaths": "15,427",
        "NewDeaths": "74",
        "TotalRecovered": "15,422"
    },
    {
        "Country": "185",
        "TotalCases": "15,183",
        "NewCases": "29 ",
        "TotalDeaths": "1,605",
        "NewDeaths": "13,549",
        "TotalRecovered": "4"
    },
    {
        "Country": "186",
        "TotalCases": "14,852",
        "NewCases": "68 ",
        "TotalDeaths": "14,554",
        "NewDeaths": "230",
        "TotalRecovered": "205,277"
    },
    {
        "Country": "187",
        "TotalCases": "14,712",
        "NewCases": "113 ",
        "TotalDeaths": "6,859",
        "NewDeaths": "7,740",
        "TotalRecovered": "2"
    },
    {
        "Country": "188",
        "TotalCases": "13,739",
        "NewCases": "57 ",
        "TotalDeaths": "13,372",
        "NewDeaths": "310",
        "TotalRecovered": "4"
    },
    {
        "Country": "189",
        "TotalCases": "12,439",
        "NewCases": "12 ",
        "TotalDeaths": "12,283",
        "NewDeaths": "144",
        "TotalRecovered": "115,025"
    },
    {
        "Country": "190",
        "TotalCases": "12,028",
        "NewCases": "368 ",
        "TotalDeaths": "11,591",
        "NewDeaths": "69",
        "TotalRecovered": "4,707"
    },
    {
        "Country": "191",
        "TotalCases": "11,971",
        "NewCases": "21 ",
        "TotalDeaths": "2,761",
        "NewDeaths": "9,189",
        "TotalRecovered": "4"
    },
    {
        "Country": "192",
        "TotalCases": "11,849",
        "NewCases": "2,149 ",
        "TotalDeaths": "9,113",
        "NewDeaths": "587",
        "TotalRecovered": "23"
    },
    {
        "Country": "193",
        "TotalCases": "11,723",
        "NewCases": "14 ",
        "TotalDeaths": "11,672",
        "NewDeaths": "37",
        "TotalRecovered": "36,429"
    },
    {
        "Country": "194",
        "TotalCases": "11,410",
        "NewCases": "63 ",
        "TotalDeaths": "1,399",
        "NewDeaths": "9,948",
        "TotalRecovered": "7"
    },
    {
        "Country": "195",
        "TotalCases": "10,708",
        "NewCases": "87 ",
        "TotalDeaths": "10,582",
        "NewDeaths": "39",
        "TotalRecovered": "10"
    },
    {
        "Country": "196",
        "TotalCases": "10,567",
        "NewCases": "35 ",
        "TotalDeaths": "10,424",
        "NewDeaths": "108",
        "TotalRecovered": "395,457"
    },
    {
        "Country": "197",
        "TotalCases": "9,892",
        "NewCases": "103 ",
        "TotalDeaths": "9,725",
        "NewDeaths": "64",
        "TotalRecovered": "2,713"
    },
    {
        "Country": "198",
        "TotalCases": "9,104",
        "NewCases": "311 ",
        "TotalDeaths": "8,628",
        "NewDeaths": "165",
        "TotalRecovered": "1"
    },
    {
        "Country": "199",
        "TotalCases": "8,712",
        "NewCases": "144 ",
        "TotalDeaths": "8,543",
        "NewDeaths": "25",
        "TotalRecovered": "1"
    },
    {
        "Country": "200",
        "TotalCases": "8,400",
        "NewCases": "171 ",
        "TotalDeaths": "8,151",
        "NewDeaths": "78",
        "TotalRecovered": "6"
    },
    {
        "Country": "201",
        "TotalCases": "8,270",
        "NewCases": "160 ",
        "TotalDeaths": "7,933",
        "NewDeaths": "177",
        "TotalRecovered": "9,114"
    },
    {
        "Country": "202",
        "TotalCases": "7,725",
        "NewCases": "125 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "203",
        "TotalCases": "7,505",
        "NewCases": "294 ",
        "TotalDeaths": "5,747",
        "NewDeaths": "1,464",
        "TotalRecovered": "2"
    },
    {
        "Country": "204",
        "TotalCases": "7,430",
        "NewCases": "193 ",
        "TotalDeaths": "4,874",
        "NewDeaths": "2,363",
        "TotalRecovered": "427"
    },
    {
        "Country": "205",
        "TotalCases": "7,131",
        "NewCases": "63 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "206",
        "TotalCases": "7,040",
        "NewCases": "115 ",
        "TotalDeaths": "6,641",
        "NewDeaths": "284",
        "TotalRecovered": "63,049"
    },
    {
        "Country": "207",
        "TotalCases": "6,960",
        "NewCases": "1 ",
        "TotalDeaths": "3,391",
        "NewDeaths": "3,568",
        "TotalRecovered": "634,863"
    },
    {
        "Country": "208",
        "TotalCases": "6,399",
        "NewCases": "45 ",
        "TotalDeaths": "6,269",
        "NewDeaths": "85",
        "TotalRecovered": "118,570"
    },
    {
        "Country": "209",
        "TotalCases": "6,255",
        "NewCases": "36 ",
        "TotalDeaths": "6,144",
        "NewDeaths": "75",
        "TotalRecovered": "4"
    },
    {
        "Country": "210",
        "TotalCases": "6,087",
        "NewCases": "74 ",
        "TotalDeaths": "5,997",
        "NewDeaths": "16",
        "TotalRecovered": "26,759"
    },
    {
        "Country": "211",
        "TotalCases": "5,831",
        "NewCases": "1 ",
        "TotalDeaths": "5,807",
        "NewDeaths": "23",
        "TotalRecovered": "331,363"
    },
    {
        "Country": "212",
        "TotalCases": "5,308",
        "NewCases": "6 ",
        "TotalDeaths": "5,196",
        "NewDeaths": "106",
        "TotalRecovered": "1"
    },
    {
        "Country": "213",
        "TotalCases": "4,954",
        "NewCases": "6 ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "214",
        "TotalCases": "3,535",
        "NewCases": "9 ",
        "TotalDeaths": "3,514",
        "NewDeaths": "12",
        "TotalRecovered": "4"
    },
    {
        "Country": "215",
        "TotalCases": "3,236",
        "NewCases": "13 ",
        "TotalDeaths": "2,665",
        "NewDeaths": "558",
        "TotalRecovered": "3"
    },
    {
        "Country": "216",
        "TotalCases": "2,970",
        "NewCases": "1 ",
        "TotalDeaths": "2,449",
        "NewDeaths": "520",
        "TotalRecovered": "1"
    },
    {
        "Country": "217",
        "TotalCases": "1,831",
        "NewCases": " ",
        "TotalDeaths": "N/A",
        "NewDeaths": "N/A",
        "TotalRecovered": "N/A"
    },
    {
        "Country": "218",
        "TotalCases": "1,025",
        "NewCases": "8 ",
        "TotalDeaths": "1,015",
        "NewDeaths": "2",
        "TotalRecovered": "205,082"
    },
     {
        "Country": "219",
        "TotalCases": "772",
        "NewCases": "+10",
        "TotalDeaths": "5 ",
        "NewDeaths": "304",
        "TotalRecovered": "+37"
    },
    {
        "Country": "220",
        "TotalCases": "712",
        "NewCases": "13 ",
        "TotalDeaths": "699",
        "NewDeaths": "0",
        "TotalRecovered": " "
    },
    {
        "Country": "221",
        "TotalCases": "456",
        "NewCases": "7 ",
        "TotalDeaths": "438",
        "NewDeaths": "11",
        "TotalRecovered": "42,078"
    },
    {
        "Country": "222",
        "TotalCases": "58",
        "NewCases": "+9",
        "TotalDeaths": " ",
        "NewDeaths": "47",
        "TotalRecovered": "+29"
    },
    {
        "Country": "223",
        "TotalCases": "38",
        "NewCases": " ",
        "TotalDeaths": "33",
        "NewDeaths": "5",
        "TotalRecovered": "323"
    },
    {
        "Country": "224",
        "TotalCases": "29",
        "NewCases": " ",
        "TotalDeaths": "29",
        "NewDeaths": "0",
        "TotalRecovered": "36,025"
    },
    {
        "Country": "225",
        "TotalCases": "29",
        "NewCases": " ",
        "TotalDeaths": "24",
        "NewDeaths": "+1",
        "TotalRecovered": "5"
    },
    {
        "Country": "226",
        "TotalCases": "10",
        "NewCases": "1 ",
        "TotalDeaths": "9",
        "NewDeaths": "0",
        "TotalRecovered": "16"
    },
   {
        "Country": "227",
        "TotalCases": "9",
        "NewCases": "2 ",
        "TotalDeaths": "7",
        "NewDeaths": "0",
        "TotalRecovered": " "
    },
    {
        "Country": "228",
        "TotalCases": "3",
        "NewCases": " ",
        "TotalDeaths": "3",
        "NewDeaths": "248",
        "TotalRecovered": "12,089 "
    },
    {
        "Country": "229",
        "TotalCases": "2",
        "NewCases": " ",
        "TotalDeaths": "2",
        "NewDeaths": "0",
        "TotalRecovered": "327"
    },
    {
        "Country": "230",
        "TotalCases": "227,980",
        "NewCases": "+150",
        "TotalDeaths": "5,226 ",
        "NewDeaths": "221,270",
        "TotalRecovered": "+91"
    },
    {
        "Country": "Total:",
        "TotalCases": "+34,095",
        "NewCases": "1,497,901",
        "TotalDeaths": "+134",
        "NewDeaths": "101,532,381",
        "TotalRecovered": "+30,941"
    },
    {
        "Country": "Total:",
        "TotalCases": "+206,118",
        "NewCases": "1,443,960",
        "TotalDeaths": "+171",
        "NewDeaths": "158,695,279",
        "TotalRecovered": "+132,090"
    },
    {
        "Country": "Total:",
        "TotalCases": "+5,733",
        "NewCases": "1,311,539",
        "TotalDeaths": "+2",
        "NewDeaths": "58,330,927",
        "TotalRecovered": "+17,564"
    },
    {
        "Country": "Total:",
        "TotalCases": "+42,210",
        "NewCases": "1,866,754",
        "TotalDeaths": "+114",
        "NewDeaths": "200,642,575",
        "TotalRecovered": "+143,005"
    },
    {
        "Country": "Total:",
        "TotalCases": "+59,676",
        "NewCases": "15,452",
        "TotalDeaths": "+124",
        "NewDeaths": "10,231,907",
        "TotalRecovered": "+11,774"
    },
    {
        "Country": "Total:",
        "TotalCases": "256,609",
        "NewCases": "11,645,499",
        "TotalDeaths": "575,888",
        "NewDeaths": "999",
        "TotalRecovered": "Africa"
    },
    {
        "Country": "Total:",
        "TotalCases": "15",
        "NewCases": "706",
        "TotalDeaths": "0",
        "NewDeaths": "0",
        "TotalRecovered": " "
    },
    {
        "Country": "Total:",
        "TotalCases": "+347,832",
        "NewCases": "6,392,230",
        "TotalDeaths": "+545",
        "NewDeaths": "541,079,274",
        "TotalRecovered": "+335,374"
    }
]

JSON;

                        $myObject = json_decode($myData);

                        ?>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Country</td>
                                <td>Total cases</td>
                                <td>New cases</td>
                                <td>Total deaths</td>
                                <td>New deaths</td>
                                <td>Total recovered</td>
                            </tr>
                            <?PHP
                            foreach($myObject as $key=>$item)
                            {
                            ?>
                            <tr>
                                <td><?PHP echo $item->Country; ?></td>
                                <td><?PHP echo $item->TotalCases; ?></td>
                                <td><?PHP echo $item->NewCases; ?></td>
                                <td><?PHP echo $item->TotalDeaths; ?></td>
                                <td><?PHP echo $item->NewDeaths; ?></td>
                                <td><?PHP echo $item->TotalRecovered; ?></td>
                            </tr>
                            <?PHP
                            }
                            ?>
                        </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
