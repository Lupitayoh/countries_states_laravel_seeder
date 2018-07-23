<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**@author Lupita Llamas
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('countries')->insert(array(
            array("sortname" => "AF", "name" => "Afghanistan"),
            array("sortname" => "AL", "name" => "Albania"),
            array("sortname" => "DZ", "name" => "Algeria"),
            array("sortname" => "AS", "name" => "American Samoa"),
            array("sortname" => "AD", "name" => "Andorra"),
            array(  //"6",
                "sortname" => "AO","name" => "Angola"),
            array(  //"7",
                "sortname" => "AI", "name" => "Anguilla"),
            array(  //"8",
                "sortname" => "AQ", "name" => "Antarctica"),
            array(  //"9",
                "sortname" => "AG", "name" => "Antigua And Barbuda"),
            array(  //"10",
                "sortname" => "AR", "name" => "Argentina"),
            array(  //"11",
                "sortname" => "AM",
                "name" => "Armenia"
            ),
            array(  //"12",
                "sortname" => "AW",
                "name" => "Aruba"
            ),
            array(  //"13",
                "sortname" => "AU",
                "name" => "Australia"
            ),
            array(  //"14",
                "sortname" => "AT",
                "name" => "Austria"
            ),
            array(  //"15",
                "sortname" => "AZ",
                "name" => "Azerbaijan"
            ),
            array(  //"16",
                "sortname" => "BS",
                "name" => "Bahamas The"
            ),
            array(  //"17",
                "sortname" => "BH",
                "name" => "Bahrain"
            ),
            array(  //"18",
                "sortname" => "BD",
                "name" => "Bangladesh"
            ),
            array(  //"19",
                "sortname" => "BB",
                "name" => "Barbados"
            ),
            array(  //"20",
                "sortname" => "BY",
                "name" => "Belarus"
            ),
            array(  //"21",
                "sortname" => "BE",
                "name" => "Belgium"
            ),
            array(  //"22",
                "sortname" => "BZ",
                "name" => "Belize"
            ),
            array(  //"23",
                "sortname" => "BJ",
                "name" => "Benin"
            ),
            array(  //"24",
                "sortname" => "BM",
                "name" => "Bermuda"
            ),
            array(  //"25",
                "sortname" => "BT",
                "name" => "Bhutan"
            ),
            array(  //"26",
                "sortname" => "BO",
                "name" => "Bolivia"
            ),
            array(  //"27",
                "sortname" => "BA",
                "name" => "Bosnia and Herzegovina"
            ),
            array(  //"28",
                "sortname" => "BW",
                "name" => "Botswana"
            ),
            array(  //"29",
                "sortname" => "BV",
                "name" => "Bouvet Island"
            ),
            array(  //"30",
                "sortname" => "BR",
                "name" => "Brazil"
            ),
            array(  //"31",
                "sortname" => "IO",
                "name" => "British Indian Ocean Territory"
            ),
            array(
                "sortname" => "BN",
                "name" => "Brunei"
            ),
            array(
                "sortname" => "BG",
                "name" => "Bulgaria"
            ),
            array(
                "sortname" => "BF",
                "name" => "Burkina Faso"
            ),
            array(
                "sortname" => "BI",
                "name" => "Burundi"
            ),
            array(
                "sortname" => "KH",
                "name" => "Cambodia"
            ),
            array(
                "sortname" => "CM",
                "name" => "Cameroon"
            ),
            array(
                "sortname" => "CA",
                "name" => "Canada"
            ),
            array(
                "sortname" => "CV",
                "name" => "Cape Verde"
            ),
            array(
                "sortname" => "KY",
                "name" => "Cayman Islands"
            ),
            array(
                "sortname" => "CF",
                "name" => "Central African Republic"
            ),
            array(
                "sortname" => "TD",
                "name" => "Chad"
            ),
            array(
                "sortname" => "CL",
                "name" => "Chile"
            ),
            array(
                "sortname" => "CN",
                "name" => "China"
            ),
            array(
                "sortname" => "CX",
                "name" => "Christmas Island"
            ),
            array(
                "sortname" => "CC",
                "name" => "Cocos (Keeling) Islands"
            ),
            array(
                "sortname" => "CO",
                "name" => "Colombia"
            ),
            array(
                "sortname" => "KM",
                "name" => "Comoros"
            ),
            array(
                "sortname" => "CG",
                "name" => "Congo"
            ),
            array(
                "sortname" => "CD",
                "name" => "Congo The Democratic Republic Of The"
            ),
            array(
                "sortname" => "CK",
                "name" => "Cook Islands"
            ),
            array(
                "sortname" => "CR",
                "name" => "Costa Rica"
            ),
            array(
                "sortname" => "CI",
                "name" => "Cote D''Ivoire (Ivory Coast)"
            ),
            array(
                "sortname" => "HR",
                "name" => "Croatia (Hrvatska)"
            ),
            array(
                "sortname" => "CU",
                "name" => "Cuba"
            ),
            array(
                "sortname" => "CY",
                "name" => "Cyprus"
            ),
            array(
                "sortname" => "CZ",
                "name" => "Czech Republic"
            ),
            array(
                "sortname" => "DK",
                "name" => "Denmark"
            ),
            array(
                "sortname" => "DJ",
                "name" => "Djibouti"
            ),
            array( // //"60",
                "sortname" => "DM",
                "name" => "Dominica"
            ),
            array(//  //"61",
                "sortname" => "DO",
                "name" => "Dominican Republic"
            ),
            array( // //"62",
                "sortname" => "TP",
                "name" => "East Timor"
            ),
            array( // //"63",
                "sortname" => "EC",
                "name" => "Ecuador"
            ),
            array(//  //"64",
                "sortname" => "EG",
                "name" => "Egypt"
            ),
            array(//  //"65",
                "sortname" => "SV",
                "name" => "El Salvador"
            ),
            array( // //"66",
                "sortname" => "GQ",
                "name" => "Equatorial Guinea"
            ),
            array(//  //"67",
                "sortname" => "ER",
                "name" => "Eritrea"
            ),
            array( // //"68",
                "sortname" => "EE",
                "name" => "Estonia"
            ),
            array( // //"69",
                "sortname" => "ET",
                "name" => "Ethiopia"
            ),
            array(//  //"70",
                "sortname" => "XA",
                "name" => "External Territories of Australia"
            ),
            array( // //"71",
                "sortname" => "FK",
                "name" => "Falkland Islands"
            ),
            array( //d" => "72",
                "sortname" => "FO",
                "name" => "Faroe Islands"
            ),
            array( // //"73",
                "sortname" => "FJ",
                "name" => "Fiji Islands"
            ),
            array( // //"74",
                "sortname" => "FI",
                "name" => "Finland"
            ),
            array( // //"75",
                "sortname" => "FR",
                "name" => "France"
            ),
            array(//  //"76",
                "sortname" => "GF",
                "name" => "French Guiana"
            ),
            array( // //"77",
                "sortname" => "PF",
                "name" => "French Polynesia"
            ),
            array( // //"78",
                "sortname" => "TF",
                "name" => "French Southern Territories"
            ),
            array( // //"79",
                "sortname" => "GA",
                "name" => "Gabon"
            ),
            array( // //"80",
                "sortname" => "GM",
                "name" => "Gambia The"
            ),
            array( // //"81",
                "sortname" => "GE",
                "name" => "Georgia"
            ),
            array( // //"82",
                "sortname" => "DE",
                "name" => "Germany"
            ),
            array(//  //"83",
                "sortname" => "GH",
                "name" => "Ghana"
            ),
            array( // //"84",
                "sortname" => "GI",
                "name" => "Gibraltar"
            ),
            array( // //"85",
                "sortname" => "GR",
                "name" => "Greece"
            ),
            array( // //"86",
                "sortname" => "GL",
                "name" => "Greenland"
            ),
            array(//  //"87",
                "sortname" => "GD",
                "name" => "Grenada"
            ),
            array( // //"88",
                "sortname" => "GP",
                "name" => "Guadeloupe"
            ),
            array( // //"89",
                "sortname" => "GU",
                "name" => "Guam"
            ),
            array( // //"90",
                "sortname" => "GT",
                "name" => "Guatemala"
            ),
            array(//  //"91",
                "sortname" => "XU",
                "name" => "Guernsey and Alderney"
            ),
            array(//  //"92",
                "sortname" => "GN",
                "name" => "Guinea"
            ),
            array(//  //"93",
                "sortname" => "GW",
                "name" => "Guinea-Bissau"
            ),
            array( // //"94",
                "sortname" => "GY",
                "name" => "Guyana"
            ),
            array( // //"95",
                "sortname" => "HT",
                "name" => "Haiti"
            ),
            array(//  //"96",
                "sortname" => "HM",
                "name" => "Heard and McDonald Islands"
            ),
            array( // //"97",
                "sortname" => "HN",
                "name" => "Honduras"
            ),
            array( // //"98",
                "sortname" => "HK",
                "name" => "Hong Kong S.A.R."
            ),
            array(//  //"99",
                "sortname" => "HU",
                "name" => "Hungary"
            ),
            array(//  //"100",
                "sortname" => "IS",
                "name" => "Iceland"
            ),
            array( // //"101",
                "sortname" => "IN",
                "name" => "India"
            ),
            array( // //"102",
                "sortname" => "ID",
                "name" => "Indonesia"
            ),
            array(//  //"103",
                "sortname" => "IR",
                "name" => "Iran"
            ),
            array(//  //"104",
                "sortname" => "IQ",
                "name" => "Iraq"
            ),
            array( // //"105",
                "sortname" => "IE",
                "name" => "Ireland"
            ),
            array(//  //"106",
                "sortname" => "IL",
                "name" => "Israel"
            ),
            array(//  //"107",
                "sortname" => "IT",
                "name" => "Italy"
            ),
            array( //
                "sortname" => "JM",
                "name" => "Jamaica"
            ),
            array( // //"109",
                "sortname" => "JP",
                "name" => "Japan"
            ),
            array(//  //"110",
                "sortname" => "XJ",
                "name" => "Jersey"
            ),
            array(
                "sortname" => "JO",
                "name" => "Jordan"
            ),
            array(
                "sortname" => "KZ",
                "name" => "Kazakhstan"
            ),
            array(
                "sortname" => "KE",
                "name" => "Kenya"
            ),
            array(
                "sortname" => "KI",
                "name" => "Kiribati"
            ),
            array(  //"115",
                "sortname" => "KP",
                "name" => "Korea North"
            ),
            array(
                "sortname" => "KR",
                "name" => "Korea South"
            ),
            array(
                "sortname" => "KW",
                "name" => "Kuwait"
            ),
            array(  //"118",
                "sortname" => "KG",
                "name" => "Kyrgyzstan"
            ),
            array(  //"119",
                "sortname" => "LA",
                "name" => "Laos"
            ),
            array(  //"120",
                "sortname" => "LV",
                "name" => "Latvia"
            ),
            array(  //"121",
                "sortname" => "LB",
                "name" => "Lebanon"
            ),
            array(  //"122",
                "sortname" => "LS",
                "name" => "Lesotho"
            ),
            array(  //"123",
                "sortname" => "LR",
                "name" => "Liberia"
            ),
            array(  //"124",
                "sortname" => "LY",
                "name" => "Libya"
            ),
            array(  //"125",
                "sortname" => "LI",
                "name" => "Liechtenstein"
            ),
            array(  //"126",
                "sortname" => "LT",
                "name" => "Lithuania"
            ),
            array(  //"127",
                "sortname" => "LU",
                "name" => "Luxembourg"
            ),
            array(  //"128",
                "sortname" => "MO",
                "name" => "Macau S.A.R."
            ),
            array(  //"129",
                "sortname" => "MK",
                "name" => "Macedonia"
            ),
            array(  //"130",
                "sortname" => "MG",
                "name" => "Madagascar"
            ),
            array(  //"131",
                "sortname" => "MW",
                "name" => "Malawi"
            ),
            array(  //"132",
                "sortname" => "MY",
                "name" => "Malaysia"
            ),
            array(  //"133",
                "sortname" => "MV",
                "name" => "Maldives"
            ),
            array(  //"134",
                "sortname" => "ML",
                "name" => "Mali"
            ),
            array(  //"135",
                "sortname" => "MT",
                "name" => "Malta"
            ),
            array(  //"136",
                "sortname" => "XM",
                "name" => "Man (Isle of)"
            ),
            array(  //"137",
                "sortname" => "MH",
                "name" => "Marshall Islands"
            ),
            array(  //"138",
                "sortname" => "MQ",
                "name" => "Martinique"
            ),
            array(  //"139",
                "sortname" => "MR",
                "name" => "Mauritania"
            ),
            array(  //"140",
                "sortname" => "MU",
                "name" => "Mauritius"
            ),
            array(  //"141",
                "sortname" => "YT",
                "name" => "Mayotte"
            ),
            array(  //"142",
                "sortname" => "MX",
                "name" => "México"
            ),
            array(  //"143",
                "sortname" => "FM",
                "name" => "Micronesia"
            ),
            array(  //"144",
                "sortname" => "MD",
                "name" => "Moldova"
            ),
            array(  //"145",
                "sortname" => "MC",
                "name" => "Monaco"
            ),
            array(  //"146",
                "sortname" => "MN",
                "name" => "Mongolia"
            ),
            array(  //"147",
                "sortname" => "MS",
                "name" => "Montserrat"
            ),
            array(  //"148",
                "sortname" => "MA",
                "name" => "Morocco"
            ),
            array(  //"149",
                "sortname" => "MZ",
                "name" => "Mozambique"
            ),
            array(  //"150",
                "sortname" => "MM",
                "name" => "Myanmar"
            ),
            array(  //"151",
                "sortname" => "NA",
                "name" => "Namibia"
            ),
            array(  //"152",
                "sortname" => "NR",
                "name" => "Nauru"
            ),
            array(  //"153",
                "sortname" => "NP",
                "name" => "Nepal"
            ),
            array(  //"154",
                "sortname" => "AN",
                "name" => "Netherlands Antilles"
            ),
            array(  //"155",
                "sortname" => "NL",
                "name" => "Netherlands The"
            ),
            array(  //"156",
                "sortname" => "NC",
                "name" => "New Caledonia"
            ),
            array(  //"157",
                "sortname" => "NZ",
                "name" => "New Zealand"
            ),
            array(  //"158",
                "sortname" => "NI",
                "name" => "Nicaragua"
            ),
            array(  //"159",
                "sortname" => "NE",
                "name" => "Niger"
            ),
            array(
                //"160",
                "sortname" => "NG",
                "name" => "Nigeria"
            ),
            array(  //"161",
                "sortname" => "NU",
                "name" => "Niue"
            ),
            array(  //"162",
                "sortname" => "NF",
                "name" => "Norfolk Island"
            ),
            array(  //"163",
                "sortname" => "MP",
                "name" => "Northern Mariana Islands"
            ),
            array(  //"164",
                "sortname" => "NO",
                "name" => "Norway"
            ),
            array(  //"165",
                "sortname" => "OM",
                "name" => "Oman"
            ),
            array(  //"166",
                "sortname" => "PK",
                "name" => "Pakistan"
            ),
            array(  //"167",
                "sortname" => "PW",
                "name" => "Palau"
            ),
            array(  //"168",
                "sortname" => "PS",
                "name" => "Palestinian Territory Occupied"
            ),
            array(  //"169",
                "sortname" => "PA",
                "name" => "Panama"
            ),
            array(  //"170",
                "sortname" => "PG",
                "name" => "Papua new Guinea"
            ),
            array(  //"171",
                "sortname" => "PY",
                "name" => "Paraguay"
            ),
            array(  //"172",
                "sortname" => "PE",
                "name" => "Peru"
            ),
            array(  //"173",
                "sortname" => "PH",
                "name" => "Philippines"
            ),
            array(  //"174",
                "sortname" => "PN",
                "name" => "Pitcairn Island"
            ),
            array(  //"175",
                "sortname" => "PL",
                "name" => "Poland"
            ),
            array(  //"176",
                "sortname" => "PT",
                "name" => "Portugal"
            ),
            array(  //"177",
                "sortname" => "PR",
                "name" => "Puerto Rico"
            ),
            array(  //"178",
                "sortname" => "QA",
                "name" => "Qatar"
            ),
            array(  //"179",
                "sortname" => "RE",
                "name" => "Reunion"
            ),
            array(  //"180",
                "sortname" => "RO",
                "name" => "Romania"
            ),
            array(  //"181",
                "sortname" => "RU",
                "name" => "Russia"
            ),
            array(  //"182",
                "sortname" => "RW",
                "name" => "Rwanda"
            ),
            array(  //"183",
                "sortname" => "SH",
                "name" => "Saint Helena"
            ),
            array(  //"184",
                "sortname" => "KN",
                "name" => "Saint Kitts And Nevis"
            ),
            array(  //"185",
                "sortname" => "LC",
                "name" => "Saint Lucia"
            ),
            array(  //"186",
                "sortname" => "PM",
                "name" => "Saint Pierre and Miquelon"
            ),
            array(  //"187",
                "sortname" => "VC",
                "name" => "Saint Vincent And The Grenadines"
            ),
            array(  //"188",
                "sortname" => "WS",
                "name" => "Samoa"
            ),
            array(  //"189",
                "sortname" => "SM",
                "name" => "San Marino"
            ),
            array(  //"190",
                "sortname" => "ST",
                "name" => "Sao Tome and Principe"
            ),
            array(  //"191",
                "sortname" => "SA",
                "name" => "Saudi Arabia"
            ),
            array(  //"192",
                "sortname" => "SN",
                "name" => "Senegal"
            ),
            array(  //"193",
                "sortname" => "RS",
                "name" => "Serbia"
            ),
            array(  //"194",
                "sortname" => "SC",
                "name" => "Seychelles"
            ),
            array(  //"195",
                "sortname" => "SL",
                "name" => "Sierra Leone"
            ),
            array(  //"196",
                "sortname" => "SG",
                "name" => "Singapore"
            ),
            array(  //"197",
                "sortname" => "SK",
                "name" => "Slovakia"
            ),
            array(  //"198",
                "sortname" => "SI",
                "name" => "Slovenia"
            ),
            array(  //"199",
                "sortname" => "XG",
                "name" => "Smaller Territories of the UK"
            ),
            array(  //"200",
                "sortname" => "SB",
                "name" => "Solomon Islands"
            ),
            array(  //"201",
                "sortname" => "SO",
                "name" => "Somalia"
            ),
            array(  //"202",
                "sortname" => "ZA",
                "name" => "South Africa"
            ),
            array(  //"203",
                "sortname" => "GS",
                "name" => "South Georgia"
            ),
            array(  //"204",
                "sortname" => "SS",
                "name" => "South Sudan"
            ),
            array(  //"205",
                "sortname" => "ES",
                "name" => "Spain"
            ),
            array(  //"206",
                "sortname" => "LK",
                "name" => "Sri Lanka"
            ),
            array(  //"207",
                "sortname" => "SD",
                "name" => "Sudan"
            ),
            array(  //"208",
                "sortname" => "SR",
                "name" => "Suriname"
            ),
            array(  //"209",
                "sortname" => "SJ",
                "name" => "Svalbard And Jan Mayen Islands"
            ),
            array(  //"210",
                "sortname" => "SZ",
                "name" => "Swaziland"
            ),
            array(  //"211",
                "sortname" => "SE",
                "name" => "Sweden"
            ),
            array(  //"212",
                "sortname" => "CH",
                "name" => "Switzerland"
            ),
            array(  //"213",
                "sortname" => "SY",
                "name" => "Syria"
            ),
            array(  //"214",
                "sortname" => "TW",
                "name" => "Taiwan"
            ),
            array(  //"215",
                "sortname" => "TJ",
                "name" => "Tajikistan"
            ),
            array(  //"216",
                "sortname" => "TZ",
                "name" => "Tanzania"
            ),
            array(  //"217",
                "sortname" => "TH",
                "name" => "Thailand"
            ),
            array(  //"218",
                "sortname" => "TG",
                "name" => "Togo"
            ),
            array(  //"219",
                "sortname" => "TK",
                "name" => "Tokelau"
            ),
            array(  //"220",
                "sortname" => "TO",
                "name" => "Tonga"
            ),
            array(
                "sortname" => "TT",
                "name" => "Trinidad And Tobago"
            ),
            array(
                "sortname" => "TN",
                "name" => "Tunisia"
            ),
            array(
                "sortname" => "TR",
                "name" => "Turkey"
            ),
            array(
                "sortname" => "TM",
                "name" => "Turkmenistan"
            ),
            array(
                "sortname" => "TC",
                "name" => "Turks And Caicos Islands"),
            array( "sortname" => "TV", "name" => "Tuvalu"),
            array( "sortname" => "UG",
                "name" => "Uganda"
            ),
            array("sortname" => "UA",
                "name" => "Ukraine"
            ),
            array("sortname" => "AE",
                "name" => "United Arab Emirates"
            ),
            array("sortname" => "GB",
                "name" => "United Kingdom"
            ),
            array( "sortname" => "US",
                "name" => "United States"
            ),
            array("sortname" => "UM",
                "name" => "United States Minor Outlying Islands"
            ),
            array("sortname" => "UY",
                "name" => "Uruguay"
            ),
            array("sortname" => "UZ",
                "name" => "Uzbekistan"
            ),
            array("sortname" => "VU",
                "name" => "Vanuatu"
            ),
            array( "sortname" => "VA",
                "name" => "Vatican City State (Holy See)"
            ),
            array( "sortname" => "VE",
                "name" => "Venezuela"
            ),
            array("sortname" => "VN",
                "name" => "Vietnam"
            ),
            array( "sortname" => "VG",
                "name" => "Virgin Islands (British)"
            ),
            array( "sortname" => "VI",
                "name" => "Virgin Islands (US)"
            ),
            array( "sortname" => "WF",
                "name" => "Wallis And Futuna Islands"
            ),
            array( "sortname" => "EH",
                "name" => "Western Sahara"
            ),
            array( "sortname" => "YE",
                "name" => "Yemen"
            ),
            array( "sortname" => "YU",
                "name" => "Yugoslavia"
            ),
            array( "sortname" => "ZM",
                "name" => "Zambia"
            ),
            array( "sortname" => "ZW", //246
                "name" => "Zimbabwe"
            )
        ));


        DB::table('states')->insert(array(
            array("name" =>"Andaman and Nicobar Islands", "country_id" =>"101"),
            array(
                //"2",
                "name" =>"Andhra Pradesh",
                "country_id" =>"101"
            ),
            array(
                //"3",
                "name" =>"Arunachal Pradesh",
                "country_id" =>"101"
            ),
            array(
                //"4",
                "name" =>"Assam",
                "country_id" =>"101"
            ),
            array(
                //"5",
                "name" =>"Bihar",
                "country_id" =>"101"
            ),
            array(
                //"6",
                "name" =>"Chandigarh",
                "country_id" =>"101"
            ),
            array(
                //"7",
                "name" =>"Chhattisgarh",
                "country_id" =>"101"
            ),
            array(
                //"8",
                "name" =>"Dadra and Nagar Haveli",
                "country_id" =>"101"
            ),
            array(
                //"9",
                "name" =>"Daman and Diu",
                "country_id" =>"101"
            ),
            array(
                //"10",
                "name" =>"Delhi",
                "country_id" =>"101"
            ),
            array(
                //"11",
                "name" =>"Goa",
                "country_id" =>"101"
            ),
            array(
                //"12",
                "name" =>"Gujarat",
                "country_id" =>"101"
            ),
            array(
                //"13",
                "name" =>"Haryana",
                "country_id" =>"101"
            ),
            array(
                //"14",
                "name" =>"Himachal Pradesh",
                "country_id" =>"101"
            ),
            array(
                //"15",
                "name" =>"Jammu and Kashmir",
                "country_id" =>"101"
            ),
            array(
                //"16",
                "name" =>"Jharkhand",
                "country_id" =>"101"
            ),
            array(
                //"17",
                "name" =>"Karnataka",
                "country_id" =>"101"
            ),
            array(
                //"18",
                "name" =>"Kenmore",
                "country_id" =>"101"
            ),
            array(
                //"19",
                "name" =>"Kerala",
                "country_id" =>"101"
            ),
            array(
                //"20",
                "name" =>"Lakshadweep",
                "country_id" =>"101"
            ),
            array(
                //"21",
                "name" =>"Madhya Pradesh",
                "country_id" =>"101"
            ),
            array(
                //"22",
                "name" =>"Maharashtra",
                "country_id" =>"101"
            ),
            array(
                //"23",
                "name" =>"Manipur",
                "country_id" =>"101"
            ),
            array(
                //"24",
                "name" =>"Meghalaya",
                "country_id" =>"101"
            ),
            array(
                //"25",
                "name" =>"Mizoram",
                "country_id" =>"101"
            ),
            array(
                //"26",
                "name" =>"Nagaland",
                "country_id" =>"101"
            ),
            array(
                //"27",
                "name" =>"Narora",
                "country_id" =>"101"
            ),
            array(
                //"28",
                "name" =>"Natwar",
                "country_id" =>"101"
            ),
            array(
                //"29",
                "name" =>"Odisha",
                "country_id" =>"101"
            ),
            array(
                //"30",
                "name" =>"Paschim Medinipur",
                "country_id" =>"101"
            ),
            array(
                //"31",
                "name" =>"Pondicherry",
                "country_id" =>"101"
            ),
            array(
                //"32",
                "name" =>"Punjab",
                "country_id" =>"101"
            ),
            array(
                //"33",
                "name" =>"Rajasthan",
                "country_id" =>"101"
            ),
            array(
                //"34",
                "name" =>"Sikkim",
                "country_id" =>"101"
            ),
            array(
                //"35",
                "name" =>"Tamil Nadu",
                "country_id" =>"101"
            ),
            array(
                //"36",
                "name" =>"Telangana",
                "country_id" =>"101"
            ),
            array(
                //"37",
                "name" =>"Tripura",
                "country_id" =>"101"
            ),
            array(
                //"38",
                "name" =>"Uttar Pradesh",
                "country_id" =>"101"
            ),
            array(
                //"39",
                "name" =>"Uttarakhand",
                "country_id" =>"101"
            ),
            array(
                //"40",
                "name" =>"Vaishali",
                "country_id" =>"101"
            ),
            array(
                //"41",
                "name" =>"West Bengal",
                "country_id" =>"101"
            ),
            array(
                //"42",
                "name" =>"Badakhshan",
                "country_id" =>"1"
            ),
            array(
                //"43",
                "name" =>"Badgis",
                "country_id" =>"1"
            ),
            array(
                //"44",
                "name" =>"Baglan",
                "country_id" =>"1"
            ),
            array(
                //"45",
                "name" =>"Balkh",
                "country_id" =>"1"
            ),
            array(
                //"46",
                "name" =>"Bamiyan",
                "country_id" =>"1"
            ),
            array(
                //"47",
                "name" =>"Farah",
                "country_id" =>"1"
            ),
            array(
                //"48",
                "name" =>"Faryab",
                "country_id" =>"1"
            ),
            array(
                //"49",
                "name" =>"Gawr",
                "country_id" =>"1"
            ),
            array(
                //"50",
                "name" =>"Gazni",
                "country_id" =>"1"
            ),
            array(
                //"51",
                "name" =>"Herat",
                "country_id" =>"1"
            ),
            array(
                //"52",
                "name" =>"Hilmand",
                "country_id" =>"1"
            ),
            array(
                //"53",
                "name" =>"Jawzjan",
                "country_id" =>"1"
            ),
            array(
                //"54",
                "name" =>"Kabul",
                "country_id" =>"1"
            ),
            array(
                //"55",
                "name" =>"Kapisa",
                "country_id" =>"1"
            ),
            array(
                //"56",
                "name" =>"Khawst",
                "country_id" =>"1"
            ),
            array(
                //"57",
                "name" =>"Kunar",
                "country_id" =>"1"
            ),
            array(
                //"58",
                "name" =>"Lagman",
                "country_id" =>"1"
            ),
            array(
                //"59",
                "name" =>"Lawghar",
                "country_id" =>"1"
            ),
            array(
                //"60",
                "name" =>"Nangarhar",
                "country_id" =>"1"
            ),
            array(
                //"61",
                "name" =>"Nimruz",
                "country_id" =>"1"
            ),
            array(
                //"62",
                "name" =>"Nuristan",
                "country_id" =>"1"
            ),
            array(
                //"63",
                "name" =>"Paktika",
                "country_id" =>"1"
            ),
            array(
                //"64",
                "name" =>"Paktiya",
                "country_id" =>"1"
            ),
            array(
                //"65",
                "name" =>"Parwan",
                "country_id" =>"1"
            ),
            array(
                //"66",
                "name" =>"Qandahar",
                "country_id" =>"1"
            ),
            array(
                //"67",
                "name" =>"Qunduz",
                "country_id" =>"1"
            ),
            array(
                //"68",
                "name" =>"Samangan",
                "country_id" =>"1"
            ),
            array(
                //"69",
                "name" =>"Sar-e Pul",
                "country_id" =>"1"
            ),
            array(
                //"70",
                "name" =>"Takhar",
                "country_id" =>"1"
            ),
            array(
                //"71",
                "name" =>"Uruzgan",
                "country_id" =>"1"
            ),
            array(
                //"72",
                "name" =>"Wardag",
                "country_id" =>"1"
            ),
            array(
                //"73",
                "name" =>"Zabul",
                "country_id" =>"1"
            ),
            array(
                //"74",
                "name" =>"Berat",
                "country_id" =>"2"
            ),
            array(
                //"75",
                "name" =>"Bulqize",
                "country_id" =>"2"
            ),
            array(
                //"76",
                "name" =>"Delvine",
                "country_id" =>"2"
            ),
            array(
                //"77",
                "name" =>"Devoll",
                "country_id" =>"2"
            ),
            array(
                //"78",
                "name" =>"Dibre",
                "country_id" =>"2"
            ),
            array(
                //"79",
                "name" =>"Durres",
                "country_id" =>"2"
            ),
            array(
                //"80",
                "name" =>"Elbasan",
                "country_id" =>"2"
            ),
            array(
                //"81",
                "name" =>"Fier",
                "country_id" =>"2"
            ),
            array(
                //"82",
                "name" =>"Gjirokaster",
                "country_id" =>"2"
            ),
            array(
                //"83",
                "name" =>"Gramsh",
                "country_id" =>"2"
            ),
            array(
                //"84",
                "name" =>"Has",
                "country_id" =>"2"
            ),
            array(
                //"85",
                "name" =>"Kavaje",
                "country_id" =>"2"
            ),
            array(
                //"86",
                "name" =>"Kolonje",
                "country_id" =>"2"
            ),
            array(
                //"87",
                "name" =>"Korce",
                "country_id" =>"2"
            ),
            array(
                //"88",
                "name" =>"Kruje",
                "country_id" =>"2"
            ),
            array(
                //"89",
                "name" =>"Kucove",
                "country_id" =>"2"
            ),
            array(
                //"90",
                "name" =>"Kukes",
                "country_id" =>"2"
            ),
            array(
                //"91",
                "name" =>"Kurbin",
                "country_id" =>"2"
            ),
            array(
                //"92",
                "name" =>"Lezhe",
                "country_id" =>"2"
            ),
            array(
                //"93",
                "name" =>"Librazhd",
                "country_id" =>"2"
            ),
            array(
                //"94",
                "name" =>"Lushnje",
                "country_id" =>"2"
            ),
            array(
                //"95",
                "name" =>"Mallakaster",
                "country_id" =>"2"
            ),
            array(
                //"96",
                "name" =>"Malsi e Madhe",
                "country_id" =>"2"
            ),
            array(
                //"97",
                "name" =>"Mat",
                "country_id" =>"2"
            ),
            array(
                //"98",
                "name" =>"Mirdite",
                "country_id" =>"2"
            ),
            array(
                //"99",
                "name" =>"Peqin",
                "country_id" =>"2"
            ),
            array(
                //"100",
                "name" =>"Permet",
                "country_id" =>"2"
            ),
            array(
                //"101",
                "name" =>"Pogradec",
                "country_id" =>"2"
            ),
            array(
                //"102",
                "name" =>"Puke",
                "country_id" =>"2"
            ),
            array(
                //"103",
                "name" =>"Sarande",
                "country_id" =>"2"
            ),
            array(
                //"104",
                "name" =>"Shkoder",
                "country_id" =>"2"
            ),
            array(
                //"105",
                "name" =>"Skrapar",
                "country_id" =>"2"
            ),
            array(
                //"106",
                "name" =>"Tepelene",
                "country_id" =>"2"
            ),
            array(
                //"107",
                "name" =>"Tirane",
                "country_id" =>"2"
            ),
            array(
                //"108",
                "name" =>"Tropoje",
                "country_id" =>"2"
            ),
            array(
                //"109",
                "name" =>"Vlore",
                "country_id" =>"2"
            ),
            array(
                //"110",
                "name" =>"Ayn Daflah",
                "country_id" =>"3"
            ),
            array(
                //"111",
                "name" =>"Ayn Tamushanat",
                "country_id" =>"3"
            ),
            array(
                //"112",
                "name" =>"Adrar",
                "country_id" =>"3"
            ),
            array(
                //"113",
                "name" =>"Algiers",
                "country_id" =>"3"
            ),
            array(
                //"114",
                "name" =>"Annabah",
                "country_id" =>"3"
            ),
            array(
                //"115",
                "name" =>"Bashshar",
                "country_id" =>"3"
            ),
            array(
                //"116",
                "name" =>"Batnah",
                "country_id" =>"3"
            ),
            array(
                //"117",
                "name" =>"Bijayah",
                "country_id" =>"3"
            ),
            array(
                //"118",
                "name" =>"Biskrah",
                "country_id" =>"3"
            ),
            array(
                //"119",
                "name" =>"Blidah",
                "country_id" =>"3"
            ),
            array(
                //"120",
                "name" =>"Buirah",
                "country_id" =>"3"
            ),
            array(
                //"121",
                "name" =>"Bumardas",
                "country_id" =>"3"
            ),
            array(
                //"122",
                "name" =>"Burj Bu Arririj",
                "country_id" =>"3"
            ),
            array(
                //"123",
                "name" =>"Ghalizan",
                "country_id" =>"3"
            ),
            array(
                //"124",
                "name" =>"Ghardayah",
                "country_id" =>"3"
            ),
            array(
                //"125",
                "name" =>"Ilizi",
                "country_id" =>"3"
            ),
            array(
                //"126",
                "name" =>"Jijili",
                "country_id" =>"3"
            ),
            array(
                //"127",
                "name" =>"Jilfah",
                "country_id" =>"3"
            ),
            array(
                //"128",
                "name" =>"Khanshalah",
                "country_id" =>"3"
            ),
            array(
                //"129",
                "name" =>"Masilah",
                "country_id" =>"3"
            ),
            array(
                //"130",
                "name" =>"Midyah",
                "country_id" =>"3"
            ),
            array(
                //"131",
                "name" =>"Milah",
                "country_id" =>"3"
            ),
            array(
                //"132",
                "name" =>"Muaskar",
                "country_id" =>"3"
            ),
            array(
                //"133",
                "name" =>"Mustaghanam",
                "country_id" =>"3"
            ),
            array(
                //"134",
                "name" =>"Naama",
                "country_id" =>"3"
            ),
            array(
                //"135",
                "name" =>"Oran",
                "country_id" =>"3"
            ),
            array(
                //"136",
                "name" =>"Ouargla",
                "country_id" =>"3"
            ),
            array(
                //"137",
                "name" =>"Qalmah",
                "country_id" =>"3"
            ),
            array(
                //"138",
                "name" =>"Qustantinah",
                "country_id" =>"3"
            ),
            array(
                //"139",
                "name" =>"Sakikdah",
                "country_id" =>"3"
            ),
            array(
                //"140",
                "name" =>"Satif",
                "country_id" =>"3"
            ),
            array(
                //"141",
                "name" =>"Sayda",
                "country_id" =>"3"
            ),
            array(
                //"142",
                "name" =>"Sidi ban-al-''Abbas",
                "country_id" =>"3"
            ),
            array(
                //"143",
                "name" =>"Suq Ahras",
                "country_id" =>"3"
            ),
            array(
                //"144",
                "name" =>"Tamanghasat",
                "country_id" =>"3"
            ),
            array(
                //"145",
                "name" =>"Tibazah",
                "country_id" =>"3"
            ),
            array(
                //"146",
                "name" =>"Tibissah",
                "country_id" =>"3"
            ),
            array(
                //"147",
                "name" =>"Tilimsan",
                "country_id" =>"3"
            ),
            array(
                //"148",
                "name" =>"Tinduf",
                "country_id" =>"3"
            ),
            array(
                //"149",
                "name" =>"Tisamsilt",
                "country_id" =>"3"
            ),
            array(
                //"150",
                "name" =>"Tiyarat",
                "country_id" =>"3"
            ),
            array(
                //"151",
                "name" =>"Tizi Wazu",
                "country_id" =>"3"
            ),
            array(
                //"152",
                "name" =>"Umm-al-Bawaghi",
                "country_id" =>"3"
            ),
            array(
                //"153",
                "name" =>"Wahran",
                "country_id" =>"3"
            ),
            array(
                //"154",
                "name" =>"Warqla",
                "country_id" =>"3"
            ),
            array(
                //"155",
                "name" =>"Wilaya d Alger",
                "country_id" =>"3"
            ),
            array(
                //"156",
                "name" =>"Wilaya de Bejaia",
                "country_id" =>"3"
            ),
            array(
                //"157",
                "name" =>"Wilaya de Constantine",
                "country_id" =>"3"
            ),
            array(
                //"158",
                "name" =>"al-Aghwat",
                "country_id" =>"3"
            ),
            array(
                //"159",
                "name" =>"al-Bayadh",
                "country_id" =>"3"
            ),
            array(
                //"160",
                "name" =>"al-Jaza''ir",
                "country_id" =>"3"
            ),
            array(
                //"161",
                "name" =>"al-Wad",
                "country_id" =>"3"
            ),
            array(
                //"162",
                "name" =>"ash-Shalif",
                "country_id" =>"3"
            ),
            array(
                //"163",
                "name" =>"at-Tarif",
                "country_id" =>"3"
            ),
            array(
                //"164",
                "name" =>"Eastern",
                "country_id" =>"4"
            ),
            array(
                //"165",
                "name" =>"Manu''a",
                "country_id" =>"4"
            ),
            array(
                //"166",
                "name" =>"Swains Island",
                "country_id" =>"4"
            ),
            array(
                //"167",
                "name" =>"Western",
                "country_id" =>"4"
            ),
            array(
                //"168",
                "name" =>"Andorra la Vella",
                "country_id" =>"5"
            ),
            array(
                //"169",
                "name" =>"Canillo",
                "country_id" =>"5"
            ),
            array(
                //"170",
                "name" =>"Encamp",
                "country_id" =>"5"
            ),
            array(
                //"171",
                "name" =>"La Massana",
                "country_id" =>"5"
            ),
            array(
                //"172",
                "name" =>"Les Escaldes",
                "country_id" =>"5"
            ),
            array(
                //"173",
                "name" =>"Ordino",
                "country_id" =>"5"
            ),
            array(
                //"174",
                "name" =>"Sant Julia de Loria",
                "country_id" =>"5"
            ),
            array(
                //"175",
                "name" =>"Bengo",
                "country_id" =>"6"
            ),
            array(
                //"176",
                "name" =>"Benguela",
                "country_id" =>"6"
            ),
            array(
                //"177",
                "name" =>"Bie",
                "country_id" =>"6"
            ),
            array(
                //"178",
                "name" =>"Cabinda",
                "country_id" =>"6"
            ),
            array(
                //"179",
                "name" =>"Cunene",
                "country_id" =>"6"
            ),
            array(
                //"180",
                "name" =>"Huambo",
                "country_id" =>"6"
            ),
            array(
                //"181",
                "name" =>"Huila",
                "country_id" =>"6"
            ),
            array(
                //"182",
                "name" =>"Kuando-Kubango",
                "country_id" =>"6"
            ),
            array(
                //"183",
                "name" =>"Kwanza Norte",
                "country_id" =>"6"
            ),
            array(
                //"184",
                "name" =>"Kwanza Sul",
                "country_id" =>"6"
            ),
            array(
                //"185",
                "name" =>"Luanda",
                "country_id" =>"6"
            ),
            array(
                //"186",
                "name" =>"Lunda Norte",
                "country_id" =>"6"
            ),
            array(
                //"187",
                "name" =>"Lunda Sul",
                "country_id" =>"6"
            ),
            array(
                //"188",
                "name" =>"Malanje",
                "country_id" =>"6"
            ),
            array(
                //"189",
                "name" =>"Moxico",
                "country_id" =>"6"
            ),
            array(
                //"190",
                "name" =>"Namibe",
                "country_id" =>"6"
            ),
            array(
                //"191",
                "name" =>"Uige",
                "country_id" =>"6"
            ),
            array(
                //"192",
                "name" =>"Zaire",
                "country_id" =>"6"
            ),
            array(
                //"193",
                "name" =>"Other Provinces",
                "country_id" =>"7"
            ),
            array(
                //"194",
                "name" =>"Sector claimed by Argentina/Ch",
                "country_id" =>"8"
            ),
            array(
                //"195",
                "name" =>"Sector claimed by Argentina/UK",
                "country_id" =>"8"
            ),
            array(
                //"196",
                "name" =>"Sector claimed by Australia",
                "country_id" =>"8"
            ),
            array(
                //"197",
                "name" =>"Sector claimed by France",
                "country_id" =>"8"
            ),
            array(
                //"198",
                "name" =>"Sector claimed by New Zealand",
                "country_id" =>"8"
            ),
            array(
                //"199",
                "name" =>"Sector claimed by Norway",
                "country_id" =>"8"
            ),
            array(
                //"200",
                "name" =>"Unclaimed Sector",
                "country_id" =>"8"
            ),
            array(
                //"201",
                "name" =>"Barbuda",
                "country_id" =>"9"
            ),
            array(
                //"202",
                "name" =>"Saint George",
                "country_id" =>"9"
            ),
            array(
                //"203",
                "name" =>"Saint John",
                "country_id" =>"9"
            ),
            array(
                //"204",
                "name" =>"Saint Mary",
                "country_id" =>"9"
            ),
            array(
                //"205",
                "name" =>"Saint Paul",
                "country_id" =>"9"
            ),
            array(
                //"206",
                "name" =>"Saint Peter",
                "country_id" =>"9"
            ),
            array(
                //"207",
                "name" =>"Saint Philip",
                "country_id" =>"9"
            ),
            array(
                //"208",
                "name" =>"Buenos Aires",
                "country_id" =>"10"
            ),
            array(
                //"209",
                "name" =>"Catamarca",
                "country_id" =>"10"
            ),
            array(
                //"210",
                "name" =>"Chaco",
                "country_id" =>"10"
            ),
            array(
                //"211",
                "name" =>"Chubut",
                "country_id" =>"10"
            ),
            array(
                //"212",
                "name" =>"Cordoba",
                "country_id" =>"10"
            ),
            array(
                //"213",
                "name" =>"Corrientes",
                "country_id" =>"10"
            ),
            array(
                //"214",
                "name" =>"Distrito Federal",
                "country_id" =>"10"
            ),
            array(
                //"215",
                "name" =>"Entre Rios",
                "country_id" =>"10"
            ),
            array(
                //"216",
                "name" =>"Formosa",
                "country_id" =>"10"
            ),
            array(
                //"217",
                "name" =>"Jujuy",
                "country_id" =>"10"
            ),
            array(
                //"218",
                "name" =>"La Pampa",
                "country_id" =>"10"
            ),
            array(
                //"219",
                "name" =>"La Rioja",
                "country_id" =>"10"
            ),
            array(
                //"220",
                "name" =>"Mendoza",
                "country_id" =>"10"
            ),
            array(
                //"221",
                "name" =>"Misiones",
                "country_id" =>"10"
            ),
            array(
                //"222",
                "name" =>"Neuquen",
                "country_id" =>"10"
            ),
            array(
                //"223",
                "name" =>"Rio Negro",
                "country_id" =>"10"
            ),
            array(
                //"224",
                "name" =>"Salta",
                "country_id" =>"10"
            ),
            array(
                //"225",
                "name" =>"San Juan",
                "country_id" =>"10"
            ),
            array(
                //"226",
                "name" =>"San Luis",
                "country_id" =>"10"
            ),
            array(
                //"227",
                "name" =>"Santa Cruz",
                "country_id" =>"10"
            ),
            array(
                //"228",
                "name" =>"Santa Fe",
                "country_id" =>"10"
            ),
            array(
                //"229",
                "name" =>"Santiago del Estero",
                "country_id" =>"10"
            ),
            array(
                //"230",
                "name" =>"Tierra del Fuego",
                "country_id" =>"10"
            ),
            array(
                //"231",
                "name" =>"Tucuman",
                "country_id" =>"10"
            ),
        ));

        DB::table('states')->insert(array(
            array(
                //"232",
                "name" =>"Aragatsotn",
                "country_id" =>"11"
            ),
            array(
                //"233",
                "name" =>"Ararat",
                "country_id" =>"11"
            ),
            array(
                //"234",
                "name" =>"Armavir",
                "country_id" =>"11"
            ),
            array(
                //"235",
                "name" =>"Gegharkunik",
                "country_id" =>"11"
            ),
            array(
                //"236",
                "name" =>"Kotaik",
                "country_id" =>"11"
            ),
            array(
                //"237",
                "name" =>"Lori",
                "country_id" =>"11"
            ),
            array(
                //"238",
                "name" =>"Shirak",
                "country_id" =>"11"
            ),
            array(
                //"239",
                "name" =>"Stepanakert",
                "country_id" =>"11"
            ),
            array(
                //"240",
                "name" =>"Syunik",
                "country_id" =>"11"
            ),
            array(
                //"241",
                "name" =>"Tavush",
                "country_id" =>"11"
            ),
            array(
                //"242",
                "name" =>"Vayots Dzor",
                "country_id" =>"11"
            ),
            array(
                //"243",
                "name" =>"Yerevan",
                "country_id" =>"11"
            ),
            array(
                //"244",
                "name" =>"Aruba",
                "country_id" =>"12"
            ),
            array(
                //"245",
                "name" =>"Auckland",
                "country_id" =>"13"
            ),
            array(
                //"246",
                "name" =>"Australian Capital Territory",
                "country_id" =>"13"
            ),
            array(
                //"247",
                "name" =>"Balgowlah",
                "country_id" =>"13"
            ),
            array(
                //"248",
                "name" =>"Balmain",
                "country_id" =>"13"
            ),
            array(
                //"249",
                "name" =>"Bankstown",
                "country_id" =>"13"
            ),
            array(
                //"250",
                "name" =>"Baulkham Hills",
                "country_id" =>"13"
            ),
            array(
                //"251",
                "name" =>"Bonnet Bay",
                "country_id" =>"13"
            ),
            array(
                //"252",
                "name" =>"Camberwell",
                "country_id" =>"13"
            ),
            array(
                //"253",
                "name" =>"Carole Park",
                "country_id" =>"13"
            ),
            array(
                //"254",
                "name" =>"Castle Hill",
                "country_id" =>"13"
            ),
            array(
                //"255",
                "name" =>"Caulfield",
                "country_id" =>"13"
            ),
            array(
                //"256",
                "name" =>"Chatswood",
                "country_id" =>"13"
            ),
            array(
                //"257",
                "name" =>"Cheltenham",
                "country_id" =>"13"
            ),
            array(
                //"258",
                "name" =>"Cherrybrook",
                "country_id" =>"13"
            ),
            array(
                //"259",
                "name" =>"Clayton",
                "country_id" =>"13"
            ),
            array(
                //"260",
                "name" =>"Collingwood",
                "country_id" =>"13"
            ),
            array(
                //"261",
                "name" =>"Frenchs Forest",
                "country_id" =>"13"
            ),
            array(
                //"262",
                "name" =>"Hawthorn",
                "country_id" =>"13"
            ),
            array(
                //"263",
                "name" =>"Jannnali",
                "country_id" =>"13"
            ),
            array(
                //"264",
                "name" =>"Knoxfield",
                "country_id" =>"13"
            ),
            array(
                //"265",
                "name" =>"Melbourne",
                "country_id" =>"13"
            ),
            array(
                //"266",
                "name" =>"New South Wales",
                "country_id" =>"13"
            ),
            array(
                //"267",
                "name" =>"Northern Territory",
                "country_id" =>"13"
            ),
            array(
                //"268",
                "name" =>"Perth",
                "country_id" =>"13"
            ),
            array(
                //"269",
                "name" =>"Queensland",
                "country_id" =>"13"
            ),
            array(
                //"270",
                "name" =>"South Australia",
                "country_id" =>"13"
            ),
            array(
                //"271",
                "name" =>"Tasmania",
                "country_id" =>"13"
            ),
            array(
                //"272",
                "name" =>"Templestowe",
                "country_id" =>"13"
            ),
            array(
                //"273",
                "name" =>"Victoria",
                "country_id" =>"13"
            ),
            array(
                //"274",
                "name" =>"Werribee south",
                "country_id" =>"13"
            ),
            array(
                //"275",
                "name" =>"Western Australia",
                "country_id" =>"13"
            ),
            array(
                //"276",
                "name" =>"Wheeler",
                "country_id" =>"13"
            ),
            array(
                //"277",
                "name" =>"Bundesland Salzburg",
                "country_id" =>"14"
            ),
            array(
                //"278",
                "name" =>"Bundesland Steiermark",
                "country_id" =>"14"
            ),
            array(
                //"279",
                "name" =>"Bundesland Tirol",
                "country_id" =>"14"
            ),
            array(
                //"280",
                "name" =>"Burgenland",
                "country_id" =>"14"
            ),
            array(
                //"281",
                "name" =>"Carinthia",
                "country_id" =>"14"
            ),
            array(
                //"282",
                "name" =>"Karnten",
                "country_id" =>"14"
            ),
            array(
                //"283",
                "name" =>"Liezen",
                "country_id" =>"14"
            ),
            array(
                //"284",
                "name" =>"Lower Austria",
                "country_id" =>"14"
            ),
            array(
                //"285",
                "name" =>"Niederosterreich",
                "country_id" =>"14"
            ),
            array(
                //"286",
                "name" =>"Oberosterreich",
                "country_id" =>"14"
            ),
            array(
                //"287",
                "name" =>"Salzburg",
                "country_id" =>"14"
            ),
            array(
                //"288",
                "name" =>"Schleswig-Holstein",
                "country_id" =>"14"
            ),
            array(
                //"289",
                "name" =>"Steiermark",
                "country_id" =>"14"
            ),
            array(
                //"290",
                "name" =>"Styria",
                "country_id" =>"14"
            ),
            array(
                //"291",
                "name" =>"Tirol",
                "country_id" =>"14"
            ),
            array(
                //"292",
                "name" =>"Upper Austria",
                "country_id" =>"14"
            ),
            array(
                //"293",
                "name" =>"Vorarlberg",
                "country_id" =>"14"
            ),
            array(
                //"294",
                "name" =>"Wien",
                "country_id" =>"14"
            ),
            array(
                //"295",
                "name" =>"Abseron",
                "country_id" =>"15"
            ),
            array(
                //"296",
                "name" =>"Baki Sahari",
                "country_id" =>"15"
            ),
            array(
                //"297",
                "name" =>"Ganca",
                "country_id" =>"15"
            ),
            array(
                //"298",
                "name" =>"Ganja",
                "country_id" =>"15"
            ),
            array(
                //"299",
                "name" =>"Kalbacar",
                "country_id" =>"15"
            ),
            array(
                //"300",
                "name" =>"Lankaran",
                "country_id" =>"15"
            ),
            array(
                //"301",
                "name" =>"Mil-Qarabax",
                "country_id" =>"15"
            ),
            array(
                //"302",
                "name" =>"Mugan-Salyan",
                "country_id" =>"15"
            ),
            array(
                //"303",
                "name" =>"Nagorni-Qarabax",
                "country_id" =>"15"
            ),
            array(
                //"304",
                "name" =>"Naxcivan",
                "country_id" =>"15"
            ),
            array(
                //"305",
                "name" =>"Priaraks",
                "country_id" =>"15"
            ),
            array(
                //"306",
                "name" =>"Qazax",
                "country_id" =>"15"
            ),
            array(
                //"307",
                "name" =>"Saki",
                "country_id" =>"15"
            ),
            array(
                //"308",
                "name" =>"Sirvan",
                "country_id" =>"15"
            ),
            array(
                //"309",
                "name" =>"Xacmaz",
                "country_id" =>"15"
            ),
            array(
                //"310",
                "name" =>"Abaco",
                "country_id" =>"16"
            ),
            array(
                //"311",
                "name" =>"Acklins Island",
                "country_id" =>"16"
            ),
            array(
                //"312",
                "name" =>"Andros",
                "country_id" =>"16"
            ),
            array(
                //"313",
                "name" =>"Berry Islands",
                "country_id" =>"16"
            ),
            array(
                //"314",
                "name" =>"Biminis",
                "country_id" =>"16"
            ),
            array(
                //"315",
                "name" =>"Cat Island",
                "country_id" =>"16"
            ),
            array(
                //"316",
                "name" =>"Crooked Island",
                "country_id" =>"16"
            ),
            array(
                //"317",
                "name" =>"Eleuthera",
                "country_id" =>"16"
            ),
            array(
                //"318",
                "name" =>"Exuma and Cays",
                "country_id" =>"16"
            ),
            array(
                //"319",
                "name" =>"Grand Bahama",
                "country_id" =>"16"
            ),
            array(
                //"320",
                "name" =>"Inagua Islands",
                "country_id" =>"16"
            ),
            array(
                //"321",
                "name" =>"Long Island",
                "country_id" =>"16"
            ),
            array(
                //"322",
                "name" =>"Mayaguana",
                "country_id" =>"16"
            ),
            array(
                //"323",
                "name" =>"New Providence",
                "country_id" =>"16"
            ),
            array(
                //"324",
                "name" =>"Ragged Island",
                "country_id" =>"16"
            ),
            array(
                //"325",
                "name" =>"Rum Cay",
                "country_id" =>"16"
            ),
            array(
                //"326",
                "name" =>"San Salvador",
                "country_id" =>"16"
            ),
            array(
                //"327",
                "name" =>"Isa",
                "country_id" =>"17"
            ),
            array(
                //"328",
                "name" =>"Badiyah",
                "country_id" =>"17"
            ),
            array(
                //"329",
                "name" =>"Hidd",
                "country_id" =>"17"
            ),
            array(
                //"330",
                "name" =>"Jidd Hafs",
                "country_id" =>"17"
            ),
            array(
                //"331",
                "name" =>"Mahama",
                "country_id" =>"17"
            ),
            array(
                //"332",
                "name" =>"Manama",
                "country_id" =>"17"
            ),
            array(
                //"333",
                "name" =>"Sitrah",
                "country_id" =>"17"
            ),
            array(
                //"334",
                "name" =>"al-Manamah",
                "country_id" =>"17"
            ),
            array(
                //"335",
                "name" =>"al-Muharraq",
                "country_id" =>"17"
            ),
            array(
                //"336",
                "name" =>"ar-Rifa''a",
                "country_id" =>"17"
            ),
            array(
                //"337",
                "name" =>"Bagar Hat",
                "country_id" =>"18"
            ),
            array(
                //"338",
                "name" =>"Bandarban",
                "country_id" =>"18"
            ),
            array(
                //"339",
                "name" =>"Barguna",
                "country_id" =>"18"
            ),
            array(
                //"340",
                "name" =>"Barisal",
                "country_id" =>"18"
            ),
            array(
                //"341",
                "name" =>"Bhola",
                "country_id" =>"18"
            ),
            array(
                //"342",
                "name" =>"Bogora",
                "country_id" =>"18"
            ),
            array(
                //"343",
                "name" =>"Brahman Bariya",
                "country_id" =>"18"
            ),
            array(
                //"344",
                "name" =>"Chandpur",
                "country_id" =>"18"
            ),
            array(
                //"345",
                "name" =>"Chattagam",
                "country_id" =>"18"
            ),
            array(
                //"346",
                "name" =>"Chittagong Division",
                "country_id" =>"18"
            ),
            array(
                //"347",
                "name" =>"Chuadanga",
                "country_id" =>"18"
            ),
            array(
                //"348",
                "name" =>"Dhaka",
                "country_id" =>"18"
            ),
            array(
                //"349",
                "name" =>"Dinajpur",
                "country_id" =>"18"
            ),
            array(
                //"350",
                "name" =>"Faridpur",
                "country_id" =>"18"
            ),
            array(
                //"351",
                "name" =>"Feni",
                "country_id" =>"18"
            ),
            array(
                //"352",
                "name" =>"Gaybanda",
                "country_id" =>"18"
            ),
            array(
                //"353",
                "name" =>"Gazipur",
                "country_id" =>"18"
            ),
            array(
                //"354",
                "name" =>"Gopalganj",
                "country_id" =>"18"
            ),
            array(
                //"355",
                "name" =>"Habiganj",
                "country_id" =>"18"
            ),
            array(
                //"356",
                "name" =>"Jaipur Hat",
                "country_id" =>"18"
            ),
            array(
                //"357",
                "name" =>"Jamalpur",
                "country_id" =>"18"
            ),
            array(
                //"358",
                "name" =>"Jessor",
                "country_id" =>"18"
            ),
            array(
                //"359",
                "name" =>"Jhalakati",
                "country_id" =>"18"
            ),
            array(
                //"360",
                "name" =>"Jhanaydah",
                "country_id" =>"18"
            ),
            array(
                //"361",
                "name" =>"Khagrachhari",
                "country_id" =>"18"
            ),
            array(
                //"362",
                "name" =>"Khulna",
                "country_id" =>"18"
            ),
            array(
                //"363",
                "name" =>"Kishorganj",
                "country_id" =>"18"
            ),
            array(
                //"364",
                "name" =>"Koks Bazar",
                "country_id" =>"18"
            ),
            array(
                //"365",
                "name" =>"Komilla",
                "country_id" =>"18"
            ),
            array(
                //"366",
                "name" =>"Kurigram",
                "country_id" =>"18"
            ),
            array(
                //"367",
                "name" =>"Kushtiya",
                "country_id" =>"18"
            ),
            array(
                //"368",
                "name" =>"Lakshmipur",
                "country_id" =>"18"
            ),
            array(
                //"369",
                "name" =>"Lalmanir Hat",
                "country_id" =>"18"
            ),
            array(
                //"370",
                "name" =>"Madaripur",
                "country_id" =>"18"
            ),
            array(
                //"371",
                "name" =>"Magura",
                "country_id" =>"18"
            ),
            array(
                //"372",
                "name" =>"Maimansingh",
                "country_id" =>"18"
            ),
            array(
                //"373",
                "name" =>"Manikganj",
                "country_id" =>"18"
            ),
            array(
                //"374",
                "name" =>"Maulvi Bazar",
                "country_id" =>"18"
            ),
            array(
                //"375",
                "name" =>"Meherpur",
                "country_id" =>"18"
            ),
            array(
                //"376",
                "name" =>"Munshiganj",
                "country_id" =>"18"
            ),
            array(
                //"377",
                "name" =>"Naral",
                "country_id" =>"18"
            ),
            array(
                //"378",
                "name" =>"Narayanganj",
                "country_id" =>"18"
            ),
            array(
                //"379",
                "name" =>"Narsingdi",
                "country_id" =>"18"
            ),
            array(
                //"380",
                "name" =>"Nator",
                "country_id" =>"18"
            ),
            array(
                //"381",
                "name" =>"Naugaon",
                "country_id" =>"18"
            ),
            array(
                //"382",
                "name" =>"Nawabganj",
                "country_id" =>"18"
            ),
            array(
                //"383",
                "name" =>"Netrakona",
                "country_id" =>"18"
            ),
            array(
                //"384",
                "name" =>"Nilphamari",
                "country_id" =>"18"
            ),
            array(
                //"385",
                "name" =>"Noakhali",
                "country_id" =>"18"
            ),
            array(
                //"386",
                "name" =>"Pabna",
                "country_id" =>"18"
            ),
            array(
                //"387",
                "name" =>"Panchagarh",
                "country_id" =>"18"
            ),
            array(
                //"388",
                "name" =>"Patuakhali",
                "country_id" =>"18"
            ),
            array(
                //"389",
                "name" =>"Pirojpur",
                "country_id" =>"18"
            ),
            array(
                //"390",
                "name" =>"Rajbari",
                "country_id" =>"18"
            ),
            array(
                //"391",
                "name" =>"Rajshahi",
                "country_id" =>"18"
            ),
            array(
                //"392",
                "name" =>"Rangamati",
                "country_id" =>"18"
            ),
            array(
                //"393",
                "name" =>"Rangpur",
                "country_id" =>"18"
            ),
            array(
                //"394",
                "name" =>"Satkhira",
                "country_id" =>"18"
            ),
            array(
                //"395",
                "name" =>"Shariatpur",
                "country_id" =>"18"
            ),
            array(
                //"396",
                "name" =>"Sherpur",
                "country_id" =>"18"
            ),
            array(
                //"397",
                "name" =>"Silhat",
                "country_id" =>"18"
            ),
            array(
                //"398",
                "name" =>"Sirajganj",
                "country_id" =>"18"
            ),
            array(
                //"399",
                "name" =>"Sunamganj",
                "country_id" =>"18"
            ),
            array(
                //"400",
                "name" =>"Tangayal",
                "country_id" =>"18"
            ),
            array(
                //"401",
                "name" =>"Thakurgaon",
                "country_id" =>"18"
            ),
            array(
                //"402",
                "name" =>"Christ Church",
                "country_id" =>"19"
            ),
            array(
                //"403",
                "name" =>"Saint Andrew",
                "country_id" =>"19"
            ),
            array(
                //"404",
                "name" =>"Saint George",
                "country_id" =>"19"
            ),
            array(
                //"405",
                "name" =>"Saint James",
                "country_id" =>"19"
            ),
            array(
                //"406",
                "name" =>"Saint John",
                "country_id" =>"19"
            ),
            array(
                //"407",
                "name" =>"Saint Joseph",
                "country_id" =>"19"
            ),
            array(
                //"408",
                "name" =>"Saint Lucy",
                "country_id" =>"19"
            ),
            array(
                //"409",
                "name" =>"Saint Michael",
                "country_id" =>"19"
            ),
            array(
                //"410",
                "name" =>"Saint Peter",
                "country_id" =>"19"
            ),
            array(
                //"411",
                "name" =>"Saint Philip",
                "country_id" =>"19"
            ),
            array(
                //"412",
                "name" =>"Saint Thomas",
                "country_id" =>"19"
            ),
            array(
                //"413",
                "name" =>"Brest",
                "country_id" =>"20"
            ),
            array(
                //"414",
                "name" =>"Homjel",
                "country_id" =>"20"
            ),
            array(
                //"415",
                "name" =>"Hrodna",
                "country_id" =>"20"
            ),
            array(
                //"416",
                "name" =>"Mahiljow",
                "country_id" =>"20"
            ),
            array(
                //"417",
                "name" =>"Mahilyowskaya Voblasts",
                "country_id" =>"20"
            ),
            array(
                //"418",
                "name" =>"Minsk",
                "country_id" =>"20"
            ),
            array(
                //"419",
                "name" =>"Minskaja Voblasts",
                "country_id" =>"20"
            ),
            array(
                //"420",
                "name" =>"Petrik",
                "country_id" =>"20"
            ),
            array(
                //"421",
                "name" =>"Vicebsk",
                "country_id" =>"20"
            ),
            array(
                //"422",
                "name" =>"Antwerpen",
                "country_id" =>"21"
            ),
            array(
                //"423",
                "name" =>"Berchem",
                "country_id" =>"21"
            ),
            array(
                //"424",
                "name" =>"Brabant",
                "country_id" =>"21"
            ),
            array(
                //"425",
                "name" =>"Brabant Wallon",
                "country_id" =>"21"
            ),
            array(
                //"426",
                "name" =>"Brussel",
                "country_id" =>"21"
            ),
            array(
                //"427",
                "name" =>"East Flanders",
                "country_id" =>"21"
            ),
            array(
                //"428",
                "name" =>"Hainaut",
                "country_id" =>"21"
            ),
            array(
                //"429",
                "name" =>"Liege",
                "country_id" =>"21"
            ),
            array(
                //"430",
                "name" =>"Limburg",
                "country_id" =>"21"
            ),
            array(
                //"431",
                "name" =>"Luxembourg",
                "country_id" =>"21"
            ),
            array(
                //"432",
                "name" =>"Namur",
                "country_id" =>"21"
            ),
            array(
                //"433",
                "name" =>"Ontario",
                "country_id" =>"21"
            ),
            array(
                //"434",
                "name" =>"Oost-Vlaanderen",
                "country_id" =>"21"
            ),
            array(
                //"435",
                "name" =>"Provincie Brabant",
                "country_id" =>"21"
            ),
            array(
                //"436",
                "name" =>"Vlaams-Brabant",
                "country_id" =>"21"
            ),
            array(
                //"437",
                "name" =>"Wallonne",
                "country_id" =>"21"
            ),
            array(
                //"438",
                "name" =>"West-Vlaanderen",
                "country_id" =>"21"
            ),
            array(
                //"439",
                "name" =>"Belize",
                "country_id" =>"22"
            ),
            array(
                //"440",
                "name" =>"Cayo",
                "country_id" =>"22"
            ),
            array(
                //"441",
                "name" =>"Corozal",
                "country_id" =>"22"
            ),
            array(
                //"442",
                "name" =>"Orange Walk",
                "country_id" =>"22"
            ),
            array(
                //"443",
                "name" =>"Stann Creek",
                "country_id" =>"22"
            ),
            array(
                //"444",
                "name" =>"Toledo",
                "country_id" =>"22"
            ),
            array(
                //"445",
                "name" =>"Alibori",
                "country_id" =>"23"
            ),
            array(
                //"446",
                "name" =>"Atacora",
                "country_id" =>"23"
            ),
            array(
                //"447",
                "name" =>"Atlantique",
                "country_id" =>"23"
            ),
            array(
                //"448",
                "name" =>"Borgou",
                "country_id" =>"23"
            ),
            array(
                //"449",
                "name" =>"Collines",
                "country_id" =>"23"
            ),
            array(
                //"450",
                "name" =>"Couffo",
                "country_id" =>"23"
            ),
            array(
                //"451",
                "name" =>"Donga",
                "country_id" =>"23"
            ),
            array(
                //"452",
                "name" =>"Littoral",
                "country_id" =>"23"
            ),
            array(
                //"453",
                "name" =>"Mono",
                "country_id" =>"23"
            ),
            array(
                //"454",
                "name" =>"Oueme",
                "country_id" =>"23"
            ),
            array(
                //"455",
                "name" =>"Plateau",
                "country_id" =>"23"
            ),
            array(
                //"456",
                "name" =>"Zou",
                "country_id" =>"23"
            ),
            array(
                //"457",
                "name" =>"Hamilton",
                "country_id" =>"24"
            ),
            array(
                //"458",
                "name" =>"Saint George",
                "country_id" =>"24"
            ),
            array(
                //"459",
                "name" =>"Bumthang",
                "country_id" =>"25"
            ),
            array(
                //"460",
                "name" =>"Chhukha",
                "country_id" =>"25"
            ),
            array(
                //"461",
                "name" =>"Chirang",
                "country_id" =>"25"
            ),
            array(
                //"462",
                "name" =>"Daga",
                "country_id" =>"25"
            ),
            array(
                //"463",
                "name" =>"Geylegphug",
                "country_id" =>"25"
            ),
            array(
                //"464",
                "name" =>"Ha",
                "country_id" =>"25"
            ),
            array(
                //"465",
                "name" =>"Lhuntshi",
                "country_id" =>"25"
            ),
            array(
                //"466",
                "name" =>"Mongar",
                "country_id" =>"25"
            ),
            array(
                //"467",
                "name" =>"Pemagatsel",
                "country_id" =>"25"
            ),
            array(
                //"468",
                "name" =>"Punakha",
                "country_id" =>"25"
            ),
            array(
                //"469",
                "name" =>"Rinpung",
                "country_id" =>"25"
            ),
            array(
                //"470",
                "name" =>"Samchi",
                "country_id" =>"25"
            ),
            array(
                //"471",
                "name" =>"Samdrup Jongkhar",
                "country_id" =>"25"
            ),
            array(
                //"472",
                "name" =>"Shemgang",
                "country_id" =>"25"
            ),
            array(
                //"473",
                "name" =>"Tashigang",
                "country_id" =>"25"
            ),
            array(
                //"474",
                "name" =>"Timphu",
                "country_id" =>"25"
            ),
            array(
                //"475",
                "name" =>"Tongsa",
                "country_id" =>"25"
            ),
            array(
                //"476",
                "name" =>"Wangdiphodrang",
                "country_id" =>"25"
            ),
            array(
                //"477",
                "name" =>"Beni",
                "country_id" =>"26"
            ),
            array(
                //"478",
                "name" =>"Chuquisaca",
                "country_id" =>"26"
            ),
            array(
                //"479",
                "name" =>"Cochabamba",
                "country_id" =>"26"
            ),
            array(
                //"480",
                "name" =>"La Paz",
                "country_id" =>"26"
            ),
            array(
                //"481",
                "name" =>"Oruro",
                "country_id" =>"26"
            ),
            array(
                //"482",
                "name" =>"Pando",
                "country_id" =>"26"
            ),
            array(
                //"483",
                "name" =>"Potosi",
                "country_id" =>"26"
            ),
            array(
                //"484",
                "name" =>"Santa Cruz",
                "country_id" =>"26"
            ),
            array(
                //"485",
                "name" =>"Tarija",
                "country_id" =>"26"
            ),
            array(
                //"486",
                "name" =>"Federacija Bosna i Hercegovina",
                "country_id" =>"27"
            ),
            array(
                //"487",
                "name" =>"Republika Srpska",
                "country_id" =>"27"
            ),
            array(
                //"488",
                "name" =>"Central Bobonong",
                "country_id" =>"28"
            ),
            array(
                //"489",
                "name" =>"Central Boteti",
                "country_id" =>"28"
            ),
            array(
                //"490",
                "name" =>"Central Mahalapye",
                "country_id" =>"28"
            ),
            array(
                //"491",
                "name" =>"Central Serowe-Palapye",
                "country_id" =>"28"
            ),
            array(
                //"492",
                "name" =>"Central Tutume",
                "country_id" =>"28"
            ),
            array(
                //"493",
                "name" =>"Chobe",
                "country_id" =>"28"
            ),
            array(
                //"494",
                "name" =>"Francistown",
                "country_id" =>"28"
            ),
            array(
                //"495",
                "name" =>"Gaborone",
                "country_id" =>"28"
            ),
            array(
                //"496",
                "name" =>"Ghanzi",
                "country_id" =>"28"
            ),
            array(
                //"497",
                "name" =>"Jwaneng",
                "country_id" =>"28"
            ),
            array(
                //"498",
                "name" =>"Kgalagadi North",
                "country_id" =>"28"
            ),
            array(
                //"499",
                "name" =>"Kgalagadi South",
                "country_id" =>"28"
            ),
            array(
                //"500",
                "name" =>"Kgatleng",
                "country_id" =>"28"
            ),
            array(
                //"501",
                "name" =>"Kweneng",
                "country_id" =>"28"
            ),
            array(
                //"502",
                "name" =>"Lobatse",
                "country_id" =>"28"
            ),
            array(
                //"503",
                "name" =>"Ngamiland",
                "country_id" =>"28"
            ),
            array(
                //"504",
                "name" =>"Ngwaketse",
                "country_id" =>"28"
            ),
            array(
                //"505",
                "name" =>"North East",
                "country_id" =>"28"
            ),
            array(
                //"506",
                "name" =>"Okavango",
                "country_id" =>"28"
            ),
            array(
                //"507",
                "name" =>"Orapa",
                "country_id" =>"28"
            ),
            array(
                //"508",
                "name" =>"Selibe Phikwe",
                "country_id" =>"28"
            ),
            array(
                //"509",
                "name" =>"South East",
                "country_id" =>"28"
            ),
            array(
                //"510",
                "name" =>"Sowa",
                "country_id" =>"28"
            ),
            array(
                //"511",
                "name" =>"Bouvet Island",
                "country_id" =>"29"
            ),
            array(
                //"512",
                "name" =>"Acre",
                "country_id" =>"30"
            ),
            array(
                //"513",
                "name" =>"Alagoas",
                "country_id" =>"30"
            ),
            array(
                //"514",
                "name" =>"Amapa",
                "country_id" =>"30"
            ),
            array(
                //"515",
                "name" =>"Amazonas",
                "country_id" =>"30"
            ),
            array(
                //"516",
                "name" =>"Bahia",
                "country_id" =>"30"
            ),
            array(
                //"517",
                "name" =>"Ceara",
                "country_id" =>"30"
            ),
            array(
                //"518",
                "name" =>"Distrito Federal",
                "country_id" =>"30"
            ),
            array(
                //"519",
                "name" =>"Espirito Santo",
                "country_id" =>"30"
            ),
            array(
                //"520",
                "name" =>"Estado de Sao Paulo",
                "country_id" =>"30"
            ),
            array(
                //"521",
                "name" =>"Goias",
                "country_id" =>"30"
            ),
            array(
                //"522",
                "name" =>"Maranhao",
                "country_id" =>"30"
            ),
            array(
                //"523",
                "name" =>"Mato Grosso",
                "country_id" =>"30"
            ),
            array(
                //"524",
                "name" =>"Mato Grosso do Sul",
                "country_id" =>"30"
            ),
            array(
                //"525",
                "name" =>"Minas Gerais",
                "country_id" =>"30"
            ),
            array(
                //"526",
                "name" =>"Para",
                "country_id" =>"30"
            ),
            array(
                //"527",
                "name" =>"Paraiba",
                "country_id" =>"30"
            ),
            array(
                //"528",
                "name" =>"Parana",
                "country_id" =>"30"
            ),
            array(
                //"529",
                "name" =>"Pernambuco",
                "country_id" =>"30"
            ),
            array(
                //"530",
                "name" =>"Piaui",
                "country_id" =>"30"
            ),
            array(
                //"531",
                "name" =>"Rio Grande do Norte",
                "country_id" =>"30"
            ),
            array(
                //"532",
                "name" =>"Rio Grande do Sul",
                "country_id" =>"30"
            ),
            array(
                //"533",
                "name" =>"Rio de Janeiro",
                "country_id" =>"30"
            ),
            array(
                //"534",
                "name" =>"Rondonia",
                "country_id" =>"30"
            ),
            array(
                //"535",
                "name" =>"Roraima",
                "country_id" =>"30"
            ),
            array(
                //"536",
                "name" =>"Santa Catarina",
                "country_id" =>"30"
            ),
            array(
                //"537",
                "name" =>"Sao Paulo",
                "country_id" =>"30"
            ),
            array(
                //"538",
                "name" =>"Sergipe",
                "country_id" =>"30"
            ),
            array(
                //"539",
                "name" =>"Tocantins",
                "country_id" =>"30"
            ),
            array(
                //"540",
                "name" =>"British Indian Ocean Territory",
                "country_id" =>"31"
            ),
            array(
                //"541",
                "name" =>"Belait",
                "country_id" =>"32"
            ),
            array(
                //"542",
                "name" =>"Brunei-Muara",
                "country_id" =>"32"
            ),
            array(
                //"543",
                "name" =>"Temburong",
                "country_id" =>"32"
            ),
            array(
                //"544",
                "name" =>"Tutong",
                "country_id" =>"32"
            ),
            array(
                //"545",
                "name" =>"Blagoevgrad",
                "country_id" =>"33"
            ),
            array(
                //"546",
                "name" =>"Burgas",
                "country_id" =>"33"
            ),
            array(
                //"547",
                "name" =>"Dobrich",
                "country_id" =>"33"
            ),
            array(
                //"548",
                "name" =>"Gabrovo",
                "country_id" =>"33"
            ),
            array(
                //"549",
                "name" =>"Haskovo",
                "country_id" =>"33"
            ),
            array(
                //"550",
                "name" =>"Jambol",
                "country_id" =>"33"
            ),
            array(
                //"551",
                "name" =>"Kardzhali",
                "country_id" =>"33"
            ),
            array(
                //"552",
                "name" =>"Kjustendil",
                "country_id" =>"33"
            ),
            array(
                //"553",
                "name" =>"Lovech",
                "country_id" =>"33"
            ),
            array(
                //"554",
                "name" =>"Montana",
                "country_id" =>"33"
            ),
            array(
                //"555",
                "name" =>"Oblast Sofiya-Grad",
                "country_id" =>"33"
            ),
            array(
                //"556",
                "name" =>"Pazardzhik",
                "country_id" =>"33"
            ),
            array(
                //"557",
                "name" =>"Pernik",
                "country_id" =>"33"
            ),
            array(
                //"558",
                "name" =>"Pleven",
                "country_id" =>"33"
            ),
            array(
                //"559",
                "name" =>"Plovdiv",
                "country_id" =>"33"
            ),
            array(
                //"560",
                "name" =>"Razgrad",
                "country_id" =>"33"
            ),
            array(
                //"561",
                "name" =>"Ruse",
                "country_id" =>"33"
            ),
            array(
                //"562",
                "name" =>"Shumen",
                "country_id" =>"33"
            ),
            array(
                //"563",
                "name" =>"Silistra",
                "country_id" =>"33"
            ),
            array(
                //"564",
                "name" =>"Sliven",
                "country_id" =>"33"
            ),
            array(
                //"565",
                "name" =>"Smoljan",
                "country_id" =>"33"
            ),
            array(
                //"566",
                "name" =>"Sofija grad",
                "country_id" =>"33"
            ),
            array(
                //"567",
                "name" =>"Sofijska oblast",
                "country_id" =>"33"
            ),
            array(
                //"568",
                "name" =>"Stara Zagora",
                "country_id" =>"33"
            ),
            array(
                //"569",
                "name" =>"Targovishte",
                "country_id" =>"33"
            ),
            array(
                //"570",
                "name" =>"Varna",
                "country_id" =>"33"
            ),
            array(
                //"571",
                "name" =>"Veliko Tarnovo",
                "country_id" =>"33"
            ),
            array(
                //"572",
                "name" =>"Vidin",
                "country_id" =>"33"
            ),
            array(
                //"573",
                "name" =>"Vraca",
                "country_id" =>"33"
            ),
            array(
                //"574",
                "name" =>"Yablaniza",
                "country_id" =>"33"
            ),
            array(
                //"575",
                "name" =>"Bale",
                "country_id" =>"34"
            ),
            array(
                //"576",
                "name" =>"Bam",
                "country_id" =>"34"
            ),
            array(
                //"577",
                "name" =>"Bazega",
                "country_id" =>"34"
            ),
            array(
                //"578",
                "name" =>"Bougouriba",
                "country_id" =>"34"
            ),
            array(
                //"579",
                "name" =>"Boulgou",
                "country_id" =>"34"
            ),
            array(
                //"580",
                "name" =>"Boulkiemde",
                "country_id" =>"34"
            ),
            array(
                //"581",
                "name" =>"Comoe",
                "country_id" =>"34"
            ),
            array(
                //"582",
                "name" =>"Ganzourgou",
                "country_id" =>"34"
            ),
            array(
                //"583",
                "name" =>"Gnagna",
                "country_id" =>"34"
            ),
            array(
                //"584",
                "name" =>"Gourma",
                "country_id" =>"34"
            ),
            array(
                //"585",
                "name" =>"Houet",
                "country_id" =>"34"
            ),
            array(
                //"586",
                "name" =>"Ioba",
                "country_id" =>"34"
            ),
            array(
                //"587",
                "name" =>"Kadiogo",
                "country_id" =>"34"
            ),
            array(
                //"588",
                "name" =>"Kenedougou",
                "country_id" =>"34"
            ),
            array(
                //"589",
                "name" =>"Komandjari",
                "country_id" =>"34"
            ),
            array(
                //"590",
                "name" =>"Kompienga",
                "country_id" =>"34"
            ),
            array(
                //"591",
                "name" =>"Kossi",
                "country_id" =>"34"
            ),
            array(
                //"592",
                "name" =>"Kouritenga",
                "country_id" =>"34"
            ),
            array(
                //"593",
                "name" =>"Kourweogo",
                "country_id" =>"34"
            ),
            array(
                //"594",
                "name" =>"Leraba",
                "country_id" =>"34"
            ),
            array(
                //"595",
                "name" =>"Mouhoun",
                "country_id" =>"34"
            ),
            array(
                //"596",
                "name" =>"Nahouri",
                "country_id" =>"34"
            ),
            array(
                //"597",
                "name" =>"Namentenga",
                "country_id" =>"34"
            ),
            array(
                //"598",
                "name" =>"Noumbiel",
                "country_id" =>"34"
            ),
            array(
                //"599",
                "name" =>"Oubritenga",
                "country_id" =>"34"
            ),
            array(
                //"600",
                "name" =>"Oudalan",
                "country_id" =>"34"
            ),
            array(
                //"601",
                "name" =>"Passore",
                "country_id" =>"34"
            ),
            array(
                //"602",
                "name" =>"Poni",
                "country_id" =>"34"
            ),
            array(
                //"603",
                "name" =>"Sanguie",
                "country_id" =>"34"
            ),
            array(
                //"604",
                "name" =>"Sanmatenga",
                "country_id" =>"34"
            ),
            array(
                //"605",
                "name" =>"Seno",
                "country_id" =>"34"
            ),
            array(
                //"606",
                "name" =>"Sissili",
                "country_id" =>"34"
            ),
            array(
                //"607",
                "name" =>"Soum",
                "country_id" =>"34"
            ),
            array(
                //"608",
                "name" =>"Sourou",
                "country_id" =>"34"
            ),
            array(
                //"609",
                "name" =>"Tapoa",
                "country_id" =>"34"
            ),
            array(
                //"610",
                "name" =>"Tuy",
                "country_id" =>"34"
            ),
            array(
                //"611",
                "name" =>"Yatenga",
                "country_id" =>"34"
            ),
            array(
                //"612",
                "name" =>"Zondoma",
                "country_id" =>"34"
            ),
            array(
                //"613",
                "name" =>"Zoundweogo",
                "country_id" =>"34"
            ),
            array(
                //"614",
                "name" =>"Bubanza",
                "country_id" =>"35"
            ),
            array(
                //"615",
                "name" =>"Bujumbura",
                "country_id" =>"35"
            ),
            array(
                //"616",
                "name" =>"Bururi",
                "country_id" =>"35"
            ),
            array(
                //"617",
                "name" =>"Cankuzo",
                "country_id" =>"35"
            ),
            array(
                //"618",
                "name" =>"Cibitoke",
                "country_id" =>"35"
            ),
            array(
                //"619",
                "name" =>"Gitega",
                "country_id" =>"35"
            ),
            array(
                //"620",
                "name" =>"Karuzi",
                "country_id" =>"35"
            ),
            array(
                //"621",
                "name" =>"Kayanza",
                "country_id" =>"35"
            ),
            array(
                //"622",
                "name" =>"Kirundo",
                "country_id" =>"35"
            ),
            array(
                //"623",
                "name" =>"Makamba",
                "country_id" =>"35"
            ),
            array(
                //"624",
                "name" =>"Muramvya",
                "country_id" =>"35"
            ),
            array(
                //"625",
                "name" =>"Muyinga",
                "country_id" =>"35"
            ),
            array(
                //"626",
                "name" =>"Ngozi",
                "country_id" =>"35"
            ),
            array(
                //"627",
                "name" =>"Rutana",
                "country_id" =>"35"
            ),
            array(
                //"628",
                "name" =>"Ruyigi",
                "country_id" =>"35"
            ),
            array(
                //"629",
                "name" =>"Banteay Mean Chey",
                "country_id" =>"36"
            ),
            array(
                //"630",
                "name" =>"Bat Dambang",
                "country_id" =>"36"
            ),
            array(
                //"631",
                "name" =>"Kampong Cham",
                "country_id" =>"36"
            ),
            array(
                //"632",
                "name" =>"Kampong Chhnang",
                "country_id" =>"36"
            ),
            array(
                //"633",
                "name" =>"Kampong Spoeu",
                "country_id" =>"36"
            ),
            array(
                //"634",
                "name" =>"Kampong Thum",
                "country_id" =>"36"
            ),
            array(
                //"635",
                "name" =>"Kampot",
                "country_id" =>"36"
            ),
            array(
                //"636",
                "name" =>"Kandal",
                "country_id" =>"36"
            ),
            array(
                //"637",
                "name" =>"Kaoh Kong",
                "country_id" =>"36"
            ),
            array(
                //"638",
                "name" =>"Kracheh",
                "country_id" =>"36"
            ),
            array(
                //"639",
                "name" =>"Krong Kaeb",
                "country_id" =>"36"
            ),
            array(
                //"640",
                "name" =>"Krong Pailin",
                "country_id" =>"36"
            ),
            array(
                //"641",
                "name" =>"Krong Preah Sihanouk",
                "country_id" =>"36"
            ),
            array(
                //"642",
                "name" =>"Mondol Kiri",
                "country_id" =>"36"
            ),
            array(
                //"643",
                "name" =>"Otdar Mean Chey",
                "country_id" =>"36"
            ),
            array(
                //"644",
                "name" =>"Phnum Penh",
                "country_id" =>"36"
            ),
            array(
                //"645",
                "name" =>"Pousat",
                "country_id" =>"36"
            ),
            array(
                //"646",
                "name" =>"Preah Vihear",
                "country_id" =>"36"
            ),
            array(
                //"647",
                "name" =>"Prey Veaeng",
                "country_id" =>"36"
            ),
            array(
                //"648",
                "name" =>"Rotanak Kiri",
                "country_id" =>"36"
            ),
            array(
                //"649",
                "name" =>"Siem Reab",
                "country_id" =>"36"
            ),
            array(
                //"650",
                "name" =>"Stueng Traeng",
                "country_id" =>"36"
            ),
            array(
                //"651",
                "name" =>"Svay Rieng",
                "country_id" =>"36"
            ),
            array(
                //"652",
                "name" =>"Takaev",
                "country_id" =>"36"
            ),
            array(
                //"653",
                "name" =>"Adamaoua",
                "country_id" =>"37"
            ),
            array(
                //"654",
                "name" =>"Centre",
                "country_id" =>"37"
            ),
            array(
                //"655",
                "name" =>"Est",
                "country_id" =>"37"
            ),
            array(
                //"656",
                "name" =>"Littoral",
                "country_id" =>"37"
            ),
            array(
                //"657",
                "name" =>"Nord",
                "country_id" =>"37"
            ),
            array(
                //"658",
                "name" =>"Nord Extreme",
                "country_id" =>"37"
            ),
            array(
                //"659",
                "name" =>"Nordouest",
                "country_id" =>"37"
            ),
            array(
                //"660",
                "name" =>"Ouest",
                "country_id" =>"37"
            ),
            array(
                //"661",
                "name" =>"Sud",
                "country_id" =>"37"
            ),
            array(
                //"662",
                "name" =>"Sudouest",
                "country_id" =>"37"
            ),
            array(
                //"663",
                "name" =>"Alberta",
                "country_id" =>"38"
            ),
            array(
                //"664",
                "name" =>"British Columbia",
                "country_id" =>"38"
            ),
            array(
                //"665",
                "name" =>"Manitoba",
                "country_id" =>"38"
            ),
            array(
                //"666",
                "name" =>"New Brunswick",
                "country_id" =>"38"
            ),
            array(
                //"667",
                "name" =>"Newfoundland and Labrador",
                "country_id" =>"38"
            ),
            array(
                //"668",
                "name" =>"Northwest Territories",
                "country_id" =>"38"
            ),
            array(
                //"669",
                "name" =>"Nova Scotia",
                "country_id" =>"38"
            ),
            array(
                //"670",
                "name" =>"Nunavut",
                "country_id" =>"38"
            ),
            array(
                //"671",
                "name" =>"Ontario",
                "country_id" =>"38"
            ),
            array(
                //"672",
                "name" =>"Prince Edward Island",
                "country_id" =>"38"
            ),
            array(
                //"673",
                "name" =>"Quebec",
                "country_id" =>"38"
            ),
            array(
                //"674",
                "name" =>"Saskatchewan",
                "country_id" =>"38"
            ),
            array(
                //"675",
                "name" =>"Yukon",
                "country_id" =>"38"
            ),
            array(
                //"676",
                "name" =>"Boavista",
                "country_id" =>"39"
            ),
            array(
                //"677",
                "name" =>"Brava",
                "country_id" =>"39"
            ),
            array(
                //"678",
                "name" =>"Fogo",
                "country_id" =>"39"
            ),
            array(
                //"679",
                "name" =>"Maio",
                "country_id" =>"39"
            ),
            array(
                //"680",
                "name" =>"Sal",
                "country_id" =>"39"
            ),
            array(
                //"681",
                "name" =>"Santo Antao",
                "country_id" =>"39"
            ),
            array(
                //"682",
                "name" =>"Sao Nicolau",
                "country_id" =>"39"
            ),
            array(
                //"683",
                "name" =>"Sao Tiago",
                "country_id" =>"39"
            ),
            array(
                //"684",
                "name" =>"Sao Vicente",
                "country_id" =>"39"
            ),
            array(
                //"685",
                "name" =>"Grand Cayman",
                "country_id" =>"40"
            ),
            array(
                //"686",
                "name" =>"Bamingui-Bangoran",
                "country_id" =>"41"
            ),
            array(
                //"687",
                "name" =>"Bangui",
                "country_id" =>"41"
            ),
            array(
                //"688",
                "name" =>"Basse-Kotto",
                "country_id" =>"41"
            ),
            array(
                //"689",
                "name" =>"Haut-Mbomou",
                "country_id" =>"41"
            ),
            array(
                //"690",
                "name" =>"Haute-Kotto",
                "country_id" =>"41"
            ),
            array(
                //"691",
                "name" =>"Kemo",
                "country_id" =>"41"
            ),
            array(
                //"692",
                "name" =>"Lobaye",
                "country_id" =>"41"
            ),
            array(
                //"693",
                "name" =>"Mambere-Kadei",
                "country_id" =>"41"
            ),
            array(
                //"694",
                "name" =>"Mbomou",
                "country_id" =>"41"
            ),
            array(
                //"695",
                "name" =>"Nana-Gribizi",
                "country_id" =>"41"
            ),
            array(
                //"696",
                "name" =>"Nana-Mambere",
                "country_id" =>"41"
            ),
            array(
                //"697",
                "name" =>"Ombella Mpoko",
                "country_id" =>"41"
            ),
            array(
                //"698",
                "name" =>"Ouaka",
                "country_id" =>"41"
            ),
            array(
                //"699",
                "name" =>"Ouham",
                "country_id" =>"41"
            ),
            array(
                //"700",
                "name" =>"Ouham-Pende",
                "country_id" =>"41"
            ),
            array(
                //"701",
                "name" =>"Sangha-Mbaere",
                "country_id" =>"41"
            ),
            array(
                //"702",
                "name" =>"Vakaga",
                "country_id" =>"41"
            ),
            array(
                //"703",
                "name" =>"Batha",
                "country_id" =>"42"
            ),
            array(
                //"704",
                "name" =>"Biltine",
                "country_id" =>"42"
            ),
            array(
                //"705",
                "name" =>"Bourkou-Ennedi-Tibesti",
                "country_id" =>"42"
            ),
            array(
                //"706",
                "name" =>"Chari-Baguirmi",
                "country_id" =>"42"
            ),
            array(
                //"707",
                "name" =>"Guera",
                "country_id" =>"42"
            ),
            array(
                //"708",
                "name" =>"Kanem",
                "country_id" =>"42"
            ),
            array(
                //"709",
                "name" =>"Lac",
                "country_id" =>"42"
            ),
            array(
                //"710",
                "name" =>"Logone Occidental",
                "country_id" =>"42"
            ),
            array(
                //"711",
                "name" =>"Logone Oriental",
                "country_id" =>"42"
            ),
            array(
                //"712",
                "name" =>"Mayo-Kebbi",
                "country_id" =>"42"
            ),
            array(
                //"713",
                "name" =>"Moyen-Chari",
                "country_id" =>"42"
            ),
            array(
                //"714",
                "name" =>"Ouaddai",
                "country_id" =>"42"
            ),
            array(
                //"715",
                "name" =>"Salamat",
                "country_id" =>"42"
            ),
            array(
                //"716",
                "name" =>"Tandjile",
                "country_id" =>"42"
            ),
            array(
                //"717",
                "name" =>"Aisen",
                "country_id" =>"43"
            ),
            array(
                //"718",
                "name" =>"Antofagasta",
                "country_id" =>"43"
            ),
            array(
                //"719",
                "name" =>"Araucania",
                "country_id" =>"43"
            ),
            array(
                //"720",
                "name" =>"Atacama",
                "country_id" =>"43"
            ),
            array(
                //"721",
                "name" =>"Bio Bio",
                "country_id" =>"43"
            ),
            array(
                //"722",
                "name" =>"Coquimbo",
                "country_id" =>"43"
            ),
            array(
                //"723",
                "name" =>"Libertador General Bernardo O",
                "country_id" =>"43"
            ),
            array(
                //"724",
                "name" =>"Los Lagos",
                "country_id" =>"43"
            ),
            array(
                //"725",
                "name" =>"Magellanes",
                "country_id" =>"43"
            ),
            array(
                //"726",
                "name" =>"Maule",
                "country_id" =>"43"
            ),
            array(
                //"727",
                "name" =>"Metropolitana",
                "country_id" =>"43"
            ),
            array(
                //"728",
                "name" =>"Metropolitana de Santiago",
                "country_id" =>"43"
            ),
            array(
                //"729",
                "name" =>"Tarapaca",
                "country_id" =>"43"
            ),
            array(
                //"730",
                "name" =>"Valparaiso",
                "country_id" =>"43"
            ),
            array(
                //"731",
                "name" =>"Anhui",
                "country_id" =>"44"
            ),
            array(
                //"732",
                "name" =>"Anhui Province",
                "country_id" =>"44"
            ),
            array(
                //"733",
                "name" =>"Anhui Sheng",
                "country_id" =>"44"
            ),
            array(
                //"734",
                "name" =>"Aomen",
                "country_id" =>"44"
            ),
            array(
                //"735",
                "name" =>"Beijing",
                "country_id" =>"44"
            ),
            array(
                //"736",
                "name" =>"Beijing Shi",
                "country_id" =>"44"
            ),
            array(
                //"737",
                "name" =>"Chongqing",
                "country_id" =>"44"
            ),
            array(
                //"738",
                "name" =>"Fujian",
                "country_id" =>"44"
            ),
            array(
                //"739",
                "name" =>"Fujian Sheng",
                "country_id" =>"44"
            ),
            array(
                //"740",
                "name" =>"Gansu",
                "country_id" =>"44"
            ),
            array(
                //"741",
                "name" =>"Guangdong",
                "country_id" =>"44"
            ),
            array(
                //"742",
                "name" =>"Guangdong Sheng",
                "country_id" =>"44"
            ),
            array(
                //"743",
                "name" =>"Guangxi",
                "country_id" =>"44"
            ),
            array(
                //"744",
                "name" =>"Guizhou",
                "country_id" =>"44"
            ),
            array(
                //"745",
                "name" =>"Hainan",
                "country_id" =>"44"
            ),
            array(
                //"746",
                "name" =>"Hebei",
                "country_id" =>"44"
            ),
            array(
                //"747",
                "name" =>"Heilongjiang",
                "country_id" =>"44"
            ),
            array(
                //"748",
                "name" =>"Henan",
                "country_id" =>"44"
            ),
            array(
                //"749",
                "name" =>"Hubei",
                "country_id" =>"44"
            ),
            array(
                //"750",
                "name" =>"Hunan",
                "country_id" =>"44"
            ),
            array(
                //"751",
                "name" =>"Jiangsu",
                "country_id" =>"44"
            ),
            array(
                //"752",
                "name" =>"Jiangsu Sheng",
                "country_id" =>"44"
            ),
            array(
                //"753",
                "name" =>"Jiangxi",
                "country_id" =>"44"
            ),
            array(
                //"754",
                "name" =>"Jilin",
                "country_id" =>"44"
            ),
            array(
                //"755",
                "name" =>"Liaoning",
                "country_id" =>"44"
            ),
            array(
                //"756",
                "name" =>"Liaoning Sheng",
                "country_id" =>"44"
            ),
            array(
                //"757",
                "name" =>"Nei Monggol",
                "country_id" =>"44"
            ),
            array(
                //"758",
                "name" =>"Ningxia Hui",
                "country_id" =>"44"
            ),
            array(
                //"759",
                "name" =>"Qinghai",
                "country_id" =>"44"
            ),
            array(
                //"760",
                "name" =>"Shaanxi",
                "country_id" =>"44"
            ),
            array(
                //"761",
                "name" =>"Shandong",
                "country_id" =>"44"
            ),
            array(
                //"762",
                "name" =>"Shandong Sheng",
                "country_id" =>"44"
            ),
            array(
                //"763",
                "name" =>"Shanghai",
                "country_id" =>"44"
            ),
            array(
                //"764",
                "name" =>"Shanxi",
                "country_id" =>"44"
            ),
            array(
                //"765",
                "name" =>"Sichuan",
                "country_id" =>"44"
            ),
            array(
                //"766",
                "name" =>"Tianjin",
                "country_id" =>"44"
            ),
            array(
                //"767",
                "name" =>"Xianggang",
                "country_id" =>"44"
            ),
            array(
                //"768",
                "name" =>"Xinjiang",
                "country_id" =>"44"
            ),
            array(
                //"769",
                "name" =>"Xizang",
                "country_id" =>"44"
            ),
            array(
                //"770",
                "name" =>"Yunnan",
                "country_id" =>"44"
            ),
            array(
                //"771",
                "name" =>"Zhejiang",
                "country_id" =>"44"
            ),
            array(
                //"772",
                "name" =>"Zhejiang Sheng",
                "country_id" =>"44"
            ),
            array(
                //"773",
                "name" =>"Christmas Island",
                "country_id" =>"45"
            ),
            array(
                //"774",
                "name" =>"Cocos (Keeling) Islands",
                "country_id" =>"46"
            ),
            array(
                //"775",
                "name" =>"Amazonas",
                "country_id" =>"47"
            ),
            array(
                //"776",
                "name" =>"Antioquia",
                "country_id" =>"47"
            ),
            array(
                //"777",
                "name" =>"Arauca",
                "country_id" =>"47"
            ),
            array(
                //"778",
                "name" =>"Atlantico",
                "country_id" =>"47"
            ),
            array(
                //"779",
                "name" =>"Bogota",
                "country_id" =>"47"
            ),
            array(
                //"780",
                "name" =>"Bolivar",
                "country_id" =>"47"
            ),
            array(
                //"781",
                "name" =>"Boyaca",
                "country_id" =>"47"
            ),
            array(
                //"782",
                "name" =>"Caldas",
                "country_id" =>"47"
            ),
            array(
                //"783",
                "name" =>"Caqueta",
                "country_id" =>"47"
            ),
            array(
                //"784",
                "name" =>"Casanare",
                "country_id" =>"47"
            ),
            array(
                //"785",
                "name" =>"Cauca",
                "country_id" =>"47"
            ),
            array(
                //"786",
                "name" =>"Cesar",
                "country_id" =>"47"
            ),
            array(
                //"787",
                "name" =>"Choco",
                "country_id" =>"47"
            ),
            array(
                //"788",
                "name" =>"Cordoba",
                "country_id" =>"47"
            ),
            array(
                //"789",
                "name" =>"Cundinamarca",
                "country_id" =>"47"
            ),
            array(
                //"790",
                "name" =>"Guainia",
                "country_id" =>"47"
            ),
            array(
                //"791",
                "name" =>"Guaviare",
                "country_id" =>"47"
            ),
            array(
                //"792",
                "name" =>"Huila",
                "country_id" =>"47"
            ),
            array(
                //"793",
                "name" =>"La Guajira",
                "country_id" =>"47"
            ),
            array(
                //"794",
                "name" =>"Magdalena",
                "country_id" =>"47"
            ),
            array(
                //"795",
                "name" =>"Meta",
                "country_id" =>"47"
            ),
            array(
                //"796",
                "name" =>"Narino",
                "country_id" =>"47"
            ),
            array(
                //"797",
                "name" =>"Norte de Santander",
                "country_id" =>"47"
            ),
            array(
                //"798",
                "name" =>"Putumayo",
                "country_id" =>"47"
            ),
            array(
                //"799",
                "name" =>"Quindio",
                "country_id" =>"47"
            ),
            array(
                //"800",
                "name" =>"Risaralda",
                "country_id" =>"47"
            ),
            array(
                //"801",
                "name" =>"San Andres y Providencia",
                "country_id" =>"47"
            ),
            array(
                //"802",
                "name" =>"Santander",
                "country_id" =>"47"
            ),
            array(
                //"803",
                "name" =>"Sucre",
                "country_id" =>"47"
            ),
            array(
                //"804",
                "name" =>"Tolima",
                "country_id" =>"47"
            ),
            array(
                //"805",
                "name" =>"Valle del Cauca",
                "country_id" =>"47"
            ),
            array(
                //"806",
                "name" =>"Vaupes",
                "country_id" =>"47"
            ),
            array(
                //"807",
                "name" =>"Vichada",
                "country_id" =>"47"
            ),
            array(
                //"808",
                "name" =>"Mwali",
                "country_id" =>"48"
            ),
            array(
                //"809",
                "name" =>"Njazidja",
                "country_id" =>"48"
            ),
            array(
                //"810",
                "name" =>"Nzwani",
                "country_id" =>"48"
            ),
            array(
                //"811",
                "name" =>"Bouenza",
                "country_id" =>"49"
            ),
            array(
                //"812",
                "name" =>"Brazzaville",
                "country_id" =>"49"
            ),
            array(
                //"813",
                "name" =>"Cuvette",
                "country_id" =>"49"
            ),
            array(
                //"814",
                "name" =>"Kouilou",
                "country_id" =>"49"
            ),
            array(
                //"815",
                "name" =>"Lekoumou",
                "country_id" =>"49"
            ),
            array(
                //"816",
                "name" =>"Likouala",
                "country_id" =>"49"
            ),
            array(
                //"817",
                "name" =>"Niari",
                "country_id" =>"49"
            ),
            array(
                //"818",
                "name" =>"Plateaux",
                "country_id" =>"49"
            ),
            array(
                //"819",
                "name" =>"Pool",
                "country_id" =>"49"
            ),
            array(
                //"820",
                "name" =>"Sangha",
                "country_id" =>"49"
            ),
            array(
                //"821",
                "name" =>"Bandundu",
                "country_id" =>"50"
            ),
            array(
                //"822",
                "name" =>"Bas-Congo",
                "country_id" =>"50"
            ),
            array(
                //"823",
                "name" =>"Equateur",
                "country_id" =>"50"
            ),
            array(
                //"824",
                "name" =>"Haut-Congo",
                "country_id" =>"50"
            ),
            array(
                //"825",
                "name" =>"Kasai-Occidental",
                "country_id" =>"50"
            ),
            array(
                //"826",
                "name" =>"Kasai-Oriental",
                "country_id" =>"50"
            ),
            array(
                //"827",
                "name" =>"Katanga",
                "country_id" =>"50"
            ),
            array(
                //"828",
                "name" =>"Kinshasa",
                "country_id" =>"50"
            ),
            array(
                //"829",
                "name" =>"Maniema",
                "country_id" =>"50"
            ),
            array(
                //"830",
                "name" =>"Nord-Kivu",
                "country_id" =>"50"
            ),
            array(
                //"831",
                "name" =>"Sud-Kivu",
                "country_id" =>"50"
            ),
            array(
                //"832",
                "name" =>"Aitutaki",
                "country_id" =>"51"
            ),
            array(
                //"833",
                "name" =>"Atiu",
                "country_id" =>"51"
            ),
            array(
                //"834",
                "name" =>"Mangaia",
                "country_id" =>"51"
            ),
            array(
                //"835",
                "name" =>"Manihiki",
                "country_id" =>"51"
            ),
            array(
                //"836",
                "name" =>"Mauke",
                "country_id" =>"51"
            ),
            array(
                //"837",
                "name" =>"Mitiaro",
                "country_id" =>"51"
            ),
            array(
                //"838",
                "name" =>"Nassau",
                "country_id" =>"51"
            ),
            array(
                //"839",
                "name" =>"Pukapuka",
                "country_id" =>"51"
            ),
            array(
                //"840",
                "name" =>"Rakahanga",
                "country_id" =>"51"
            ),
            array(
                //"841",
                "name" =>"Rarotonga",
                "country_id" =>"51"
            ),
            array(
                //"842",
                "name" =>"Tongareva",
                "country_id" =>"51"
            ),
            array(
                //"843",
                "name" =>"Alajuela",
                "country_id" =>"52"
            ),
            array(
                //"844",
                "name" =>"Cartago",
                "country_id" =>"52"
            ),
            array(
                //"845",
                "name" =>"Guanacaste",
                "country_id" =>"52"
            ),
            array(
                //"846",
                "name" =>"Heredia",
                "country_id" =>"52"
            ),
            array(
                //"847",
                "name" =>"Limon",
                "country_id" =>"52"
            ),
            array(
                //"848",
                "name" =>"Puntarenas",
                "country_id" =>"52"
            ),
            array(
                //"849",
                "name" =>"San Jose",
                "country_id" =>"52"
            ),
            array(
                //"850",
                "name" =>"Abidjan",
                "country_id" =>"53"
            ),
            array(
                //"851",
                "name" =>"Agneby",
                "country_id" =>"53"
            ),
            array(
                //"852",
                "name" =>"Bafing",
                "country_id" =>"53"
            ),
            array(
                //"853",
                "name" =>"Denguele",
                "country_id" =>"53"
            ),
            array(
                //"854",
                "name" =>"Dix-huit Montagnes",
                "country_id" =>"53"
            ),
            array(
                //"855",
                "name" =>"Fromager",
                "country_id" =>"53"
            ),
            array(
                //"856",
                "name" =>"Haut-Sassandra",
                "country_id" =>"53"
            ),
            array(
                //"857",
                "name" =>"Lacs",
                "country_id" =>"53"
            ),
            array(
                //"858",
                "name" =>"Lagunes",
                "country_id" =>"53"
            ),
            array(
                //"859",
                "name" =>"Marahoue",
                "country_id" =>"53"
            ),
            array(
                //"860",
                "name" =>"Moyen-Cavally",
                "country_id" =>"53"
            ),
            array(
                //"861",
                "name" =>"Moyen-Comoe",
                "country_id" =>"53"
            ),
            array(
                //"862",
                "name" =>"N''zi-Comoe",
                "country_id" =>"53"
            ),
            array(
                //"863",
                "name" =>"Sassandra",
                "country_id" =>"53"
            ),
            array(
                //"864",
                "name" =>"Savanes",
                "country_id" =>"53"
            ),
            array(
                //"865",
                "name" =>"Sud-Bandama",
                "country_id" =>"53"
            ),
            array(
                //"866",
                "name" =>"Sud-Comoe",
                "country_id" =>"53"
            ),
            array(
                //"867",
                "name" =>"Vallee du Bandama",
                "country_id" =>"53"
            ),
            array(
                //"868",
                "name" =>"Worodougou",
                "country_id" =>"53"
            ),
            array(
                //"869",
                "name" =>"Zanzan",
                "country_id" =>"53"
            ),
            array(
                //"870",
                "name" =>"Bjelovar-Bilogora",
                "country_id" =>"54"
            ),
            array(
                //"871",
                "name" =>"Dubrovnik-Neretva",
                "country_id" =>"54"
            ),
            array(
                //"872",
                "name" =>"Grad Zagreb",
                "country_id" =>"54"
            ),
            array(
                //"873",
                "name" =>"Istra",
                "country_id" =>"54"
            ),
            array(
                //"874",
                "name" =>"Karlovac",
                "country_id" =>"54"
            ),
            array(
                //"875",
                "name" =>"Koprivnica-Krizhevci",
                "country_id" =>"54"
            ),
            array(
                //"876",
                "name" =>"Krapina-Zagorje",
                "country_id" =>"54"
            ),
            array(
                //"877",
                "name" =>"Lika-Senj",
                "country_id" =>"54"
            ),
            array(
                //"878",
                "name" =>"Medhimurje",
                "country_id" =>"54"
            ),
            array(
                //"879",
                "name" =>"Medimurska Zupanija",
                "country_id" =>"54"
            ),
            array(
                //"880",
                "name" =>"Osijek-Baranja",
                "country_id" =>"54"
            ),
            array(
                //"881",
                "name" =>"Osjecko-Baranjska Zupanija",
                "country_id" =>"54"
            ),
            array(
                //"882",
                "name" =>"Pozhega-Slavonija",
                "country_id" =>"54"
            ),
            array(
                //"883",
                "name" =>"Primorje-Gorski Kotar",
                "country_id" =>"54"
            ),
            array(
                //"884",
                "name" =>"Shibenik-Knin",
                "country_id" =>"54"
            ),
            array(
                //"885",
                "name" =>"Sisak-Moslavina",
                "country_id" =>"54"
            ),
            array(
                //"886",
                "name" =>"Slavonski Brod-Posavina",
                "country_id" =>"54"
            ),
            array(
                //"887",
                "name" =>"Split-Dalmacija",
                "country_id" =>"54"
            ),
            array(
                //"888",
                "name" =>"Varazhdin",
                "country_id" =>"54"
            ),
            array(
                //"889",
                "name" =>"Virovitica-Podravina",
                "country_id" =>"54"
            ),
            array(
                //"890",
                "name" =>"Vukovar-Srijem",
                "country_id" =>"54"
            ),
            array(
                //"891",
                "name" =>"Zadar",
                "country_id" =>"54"
            ),
            array(
                //"892",
                "name" =>"Zagreb",
                "country_id" =>"54"
            ),
            array(
                //"893",
                "name" =>"Camaguey",
                "country_id" =>"55"
            ),
            array(
                //"894",
                "name" =>"Ciego de Avila",
                "country_id" =>"55"
            ),
            array(
                //"895",
                "name" =>"Cienfuegos",
                "country_id" =>"55"
            ),
            array(
                //"896",
                "name" =>"Ciudad de la Habana",
                "country_id" =>"55"
            ),
            array(
                //"897",
                "name" =>"Granma",
                "country_id" =>"55"
            ),
            array(
                //"898",
                "name" =>"Guantanamo",
                "country_id" =>"55"
            ),
            array(
                //"899",
                "name" =>"Habana",
                "country_id" =>"55"
            ),
            array(
                //"900",
                "name" =>"Holguin",
                "country_id" =>"55"
            ),
            array(
                //"901",
                "name" =>"Isla de la Juventud",
                "country_id" =>"55"
            ),
            array(
                //"902",
                "name" =>"La Habana",
                "country_id" =>"55"
            ),
            array(
                //"903",
                "name" =>"Las Tunas",
                "country_id" =>"55"
            ),
            array(
                //"904",
                "name" =>"Matanzas",
                "country_id" =>"55"
            ),
            array(
                //"905",
                "name" =>"Pinar del Rio",
                "country_id" =>"55"
            ),
            array(
                //"906",
                "name" =>"Sancti Spiritus",
                "country_id" =>"55"
            ),
            array(
                //"907",
                "name" =>"Santiago de Cuba",
                "country_id" =>"55"
            ),
            array(
                //"908",
                "name" =>"Villa Clara",
                "country_id" =>"55"
            ),
            array(
                //"909",
                "name" =>"Government controlled area",
                "country_id" =>"56"
            ),
            array(
                //"910",
                "name" =>"Limassol",
                "country_id" =>"56"
            ),
            array(
                //"911",
                "name" =>"Nicosia District",
                "country_id" =>"56"
            ),
            array(
                //"912",
                "name" =>"Paphos",
                "country_id" =>"56"
            ),
            array(
                //"913",
                "name" =>"Turkish controlled area",
                "country_id" =>"56"
            ),
            array(
                //"914",
                "name" =>"Central Bohemian",
                "country_id" =>"57"
            ),
            array(
                //"915",
                "name" =>"Frycovice",
                "country_id" =>"57"
            ),
            array(
                //"916",
                "name" =>"Jihocesky Kraj",
                "country_id" =>"57"
            ),
            array(
                //"917",
                "name" =>"Jihochesky",
                "country_id" =>"57"
            ),
            array(
                //"918",
                "name" =>"Jihomoravsky",
                "country_id" =>"57"
            ),
            array(
                //"919",
                "name" =>"Karlovarsky",
                "country_id" =>"57"
            ),
            array(
                //"920",
                "name" =>"Klecany",
                "country_id" =>"57"
            ),
            array(
                //"921",
                "name" =>"Kralovehradecky",
                "country_id" =>"57"
            ),
            array(
                //"922",
                "name" =>"Liberecky",
                "country_id" =>"57"
            ),
            array(
                //"923",
                "name" =>"Lipov",
                "country_id" =>"57"
            ),
            array(
                //"924",
                "name" =>"Moravskoslezsky",
                "country_id" =>"57"
            ),
            array(
                //"925",
                "name" =>"Olomoucky",
                "country_id" =>"57"
            ),
            array(
                //"926",
                "name" =>"Olomoucky Kraj",
                "country_id" =>"57"
            ),
            array(
                //"927",
                "name" =>"Pardubicky",
                "country_id" =>"57"
            ),
            array(
                //"928",
                "name" =>"Plzensky",
                "country_id" =>"57"
            ),
            array(
                //"929",
                "name" =>"Praha",
                "country_id" =>"57"
            ),
            array(
                //"930",
                "name" =>"Rajhrad",
                "country_id" =>"57"
            ),
            array(
                //"931",
                "name" =>"Smirice",
                "country_id" =>"57"
            ),
            array(
                //"932",
                "name" =>"South Moravian",
                "country_id" =>"57"
            ),
            array(
                //"933",
                "name" =>"Straz nad Nisou",
                "country_id" =>"57"
            ),
            array(
                //"934",
                "name" =>"Stredochesky",
                "country_id" =>"57"
            ),
            array(
                //"935",
                "name" =>"Unicov",
                "country_id" =>"57"
            ),
            array(
                //"936",
                "name" =>"Ustecky",
                "country_id" =>"57"
            ),
            array(
                //"937",
                "name" =>"Valletta",
                "country_id" =>"57"
            ),
            array(
                //"938",
                "name" =>"Velesin",
                "country_id" =>"57"
            ),
            array(
                //"939",
                "name" =>"Vysochina",
                "country_id" =>"57"
            ),
            array(
                //"940",
                "name" =>"Zlinsky",
                "country_id" =>"57"
            ),
            array(
                //"941",
                "name" =>"Arhus",
                "country_id" =>"58"
            ),
            array(
                //"942",
                "name" =>"Bornholm",
                "country_id" =>"58"
            ),
            array(
                //"943",
                "name" =>"Frederiksborg",
                "country_id" =>"58"
            ),
            array(
                //"944",
                "name" =>"Fyn",
                "country_id" =>"58"
            ),
            array(
                //"945",
                "name" =>"Hovedstaden",
                "country_id" =>"58"
            ),
            array(
                //"946",
                "name" =>"Kobenhavn",
                "country_id" =>"58"
            ),
            array(
                //"947",
                "name" =>"Kobenhavns Amt",
                "country_id" =>"58"
            ),
            array(
                //"948",
                "name" =>"Kobenhavns Kommune",
                "country_id" =>"58"
            ),
            array(
                //"949",
                "name" =>"Nordjylland",
                "country_id" =>"58"
            ),
            array(
                //"950",
                "name" =>"Ribe",
                "country_id" =>"58"
            ),
            array(
                //"951",
                "name" =>"Ringkobing",
                "country_id" =>"58"
            ),
            array(
                //"952",
                "name" =>"Roervig",
                "country_id" =>"58"
            ),
            array(
                //"953",
                "name" =>"Roskilde",
                "country_id" =>"58"
            ),
            array(
                //"954",
                "name" =>"Roslev",
                "country_id" =>"58"
            ),
            array(
                //"955",
                "name" =>"Sjaelland",
                "country_id" =>"58"
            ),
            array(
                //"956",
                "name" =>"Soeborg",
                "country_id" =>"58"
            ),
            array(
                //"957",
                "name" =>"Sonderjylland",
                "country_id" =>"58"
            ),
            array(
                //"958",
                "name" =>"Storstrom",
                "country_id" =>"58"
            ),
            array(
                //"959",
                "name" =>"Syddanmark",
                "country_id" =>"58"
            ),
            array(
                //"960",
                "name" =>"Toelloese",
                "country_id" =>"58"
            ),
            array(
                //"961",
                "name" =>"Vejle",
                "country_id" =>"58"
            ),
            array(
                //"962",
                "name" =>"Vestsjalland",
                "country_id" =>"58"
            ),
            array(
                //"963",
                "name" =>"Viborg",
                "country_id" =>"58"
            ),
            array(
                //"964",
                "name" =>"Ali Sabih",
                "country_id" =>"59"
            ),
            array(
                //"965",
                "name" =>"Dikhil",
                "country_id" =>"59"
            ),
            array(
                //"966",
                "name" =>"Jibuti",
                "country_id" =>"59"
            ),
            array(
                //"967",
                "name" =>"Tajurah",
                "country_id" =>"59"
            ),
            array(
                //"968",
                "name" =>"Ubuk",
                "country_id" =>"59"
            ),
            array(
                //"969",
                "name" =>"Saint Andrew",
                "country_id" =>"60"
            ),
            array(
                //"970",
                "name" =>"Saint David",
                "country_id" =>"60"
            ),
            array(
                //"971",
                "name" =>"Saint George",
                "country_id" =>"60"
            ),
            array(
                //"972",
                "name" =>"Saint John",
                "country_id" =>"60"
            ),
            array(
                //"973",
                "name" =>"Saint Joseph",
                "country_id" =>"60"
            ),
            array(
                //"974",
                "name" =>"Saint Luke",
                "country_id" =>"60"
            ),
            array(
                //"975",
                "name" =>"Saint Mark",
                "country_id" =>"60"
            ),
            array(
                //"976",
                "name" =>"Saint Patrick",
                "country_id" =>"60"
            ),
            array(
                //"977",
                "name" =>"Saint Paul",
                "country_id" =>"60"
            ),
            array(
                //"978",
                "name" =>"Saint Peter",
                "country_id" =>"60"
            ),
            array(
                //"979",
                "name" =>"Azua",
                "country_id" =>"61"
            ),
            array(
                //"980",
                "name" =>"Bahoruco",
                "country_id" =>"61"
            ),
            array(
                //"981",
                "name" =>"Barahona",
                "country_id" =>"61"
            ),
            array(
                //"982",
                "name" =>"Dajabon",
                "country_id" =>"61"
            ),
            array(
                //"983",
                "name" =>"Distrito Nacional",
                "country_id" =>"61"
            ),
            array(
                //"984",
                "name" =>"Duarte",
                "country_id" =>"61"
            ),
            array(
                //"985",
                "name" =>"El Seybo",
                "country_id" =>"61"
            ),
            array(
                //"986",
                "name" =>"Elias Pina",
                "country_id" =>"61"
            ),
            array(
                //"987",
                "name" =>"Espaillat",
                "country_id" =>"61"
            ),
            array(
                //"988",
                "name" =>"Hato Mayor",
                "country_id" =>"61"
            ),
            array(
                //"989",
                "name" =>"Independencia",
                "country_id" =>"61"
            ),
            array(
                //"990",
                "name" =>"La Altagracia",
                "country_id" =>"61"
            ),
            array(
                //"991",
                "name" =>"La Romana",
                "country_id" =>"61"
            ),
            array(
                //"992",
                "name" =>"La Vega",
                "country_id" =>"61"
            ),
            array(
                //"993",
                "name" =>"Maria Trinidad Sanchez",
                "country_id" =>"61"
            ),
            array(
                //"994",
                "name" =>"Monsenor Nouel",
                "country_id" =>"61"
            ),
            array(
                //"995",
                "name" =>"Monte Cristi",
                "country_id" =>"61"
            ),
            array(
                //"996",
                "name" =>"Monte Plata",
                "country_id" =>"61"
            ),
            array(
                //"997",
                "name" =>"Pedernales",
                "country_id" =>"61"
            ),
            array(
                //"998",
                "name" =>"Peravia",
                "country_id" =>"61"
            ),
            array(
                //"999",
                "name" =>"Puerto Plata",
                "country_id" =>"61"
            ),
        ));

        DB::table('states')->insert(array(
            array(
                //"1000",
                "name" =>"Salcedo",
                "country_id" =>"61"
            ),
            array(
                //"1001",
                "name" =>"Samana",
                "country_id" =>"61"
            ),
            array(
                //"1002",
                "name" =>"San Cristobal",
                "country_id" =>"61"
            ),
            array(
                //"1003",
                "name" =>"San Juan",
                "country_id" =>"61"
            ),
            array(
                //"1004",
                "name" =>"San Pedro de Macoris",
                "country_id" =>"61"
            ),
            array(
                //"1005",
                "name" =>"Sanchez Ramirez",
                "country_id" =>"61"
            ),
            array(
                //"1006",
                "name" =>"Santiago",
                "country_id" =>"61"
            ),
            array(
                //"1007",
                "name" =>"Santiago Rodriguez",
                "country_id" =>"61"
            ),
            array(
                //"1008",
                "name" =>"Valverde",
                "country_id" =>"61"
            ),
            array(
                //"1009",
                "name" =>"Aileu",
                "country_id" =>"62"
            ),
            array(
                //"1010",
                "name" =>"Ainaro",
                "country_id" =>"62"
            ),
            array(
                //"1011",
                "name" =>"Ambeno",
                "country_id" =>"62"
            ),
            array(
                //"1012",
                "name" =>"Baucau",
                "country_id" =>"62"
            ),
            array(
                //"1013",
                "name" =>"Bobonaro",
                "country_id" =>"62"
            ),
            array(
                //"1014",
                "name" =>"Cova Lima",
                "country_id" =>"62"
            ),
            array(
                //"1015",
                "name" =>"Dili",
                "country_id" =>"62"
            ),
            array(
                //"1016",
                "name" =>"Ermera",
                "country_id" =>"62"
            ),
            array(
                //"1017",
                "name" =>"Lautem",
                "country_id" =>"62"
            ),
            array(
                //"1018",
                "name" =>"Liquica",
                "country_id" =>"62"
            ),
            array(
                //"1019",
                "name" =>"Manatuto",
                "country_id" =>"62"
            ),
            array(
                //"1020",
                "name" =>"Manufahi",
                "country_id" =>"62"
            ),
            array(
                //"1021",
                "name" =>"Viqueque",
                "country_id" =>"62"
            ),
            array(
                //"1022",
                "name" =>"Azuay",
                "country_id" =>"63"
            ),
            array(
                //"1023",
                "name" =>"Bolivar",
                "country_id" =>"63"
            ),
            array(
                //"1024",
                "name" =>"Canar",
                "country_id" =>"63"
            ),
            array(
                //"1025",
                "name" =>"Carchi",
                "country_id" =>"63"
            ),
            array(
                //"1026",
                "name" =>"Chimborazo",
                "country_id" =>"63"
            ),
            array(
                //"1027",
                "name" =>"Cotopaxi",
                "country_id" =>"63"
            ),
            array(
                //"1028",
                "name" =>"El Oro",
                "country_id" =>"63"
            ),
            array(
                //"1029",
                "name" =>"Esmeraldas",
                "country_id" =>"63"
            ),
            array(
                //"1030",
                "name" =>"Galapagos",
                "country_id" =>"63"
            ),
            array(
                //"1031",
                "name" =>"Guayas",
                "country_id" =>"63"
            ),
            array(
                //"1032",
                "name" =>"Imbabura",
                "country_id" =>"63"
            ),
            array(
                //"1033",
                "name" =>"Loja",
                "country_id" =>"63"
            ),
            array(
                //"1034",
                "name" =>"Los Rios",
                "country_id" =>"63"
            ),
            array(
                //"1035",
                "name" =>"Manabi",
                "country_id" =>"63"
            ),
            array(
                //"1036",
                "name" =>"Morona Santiago",
                "country_id" =>"63"
            ),
            array(
                //"1037",
                "name" =>"Napo",
                "country_id" =>"63"
            ),
            array(
                //"1038",
                "name" =>"Orellana",
                "country_id" =>"63"
            ),
            array(
                //"1039",
                "name" =>"Pastaza",
                "country_id" =>"63"
            ),
            array(
                //"1040",
                "name" =>"Pichincha",
                "country_id" =>"63"
            ),
            array(
                //"1041",
                "name" =>"Sucumbios",
                "country_id" =>"63"
            ),
            array(
                //"1042",
                "name" =>"Tungurahua",
                "country_id" =>"63"
            ),
            array(
                //"1043",
                "name" =>"Zamora Chinchipe",
                "country_id" =>"63"
            ),
            array(
                //"1044",
                "name" =>"Aswan",
                "country_id" =>"64"
            ),
            array(
                //"1045",
                "name" =>"Asyut",
                "country_id" =>"64"
            ),
            array(
                //"1046",
                "name" =>"Bani Suwayf",
                "country_id" =>"64"
            ),
            array(
                //"1047",
                "name" =>"Bur Sa''id",
                "country_id" =>"64"
            ),
            array(
                //"1048",
                "name" =>"Cairo",
                "country_id" =>"64"
            ),
            array(
                //"1049",
                "name" =>"Dumyat",
                "country_id" =>"64"
            ),
            array(
                //"1050",
                "name" =>"Kafr-ash-Shaykh",
                "country_id" =>"64"
            ),
            array(
                //"1051",
                "name" =>"Matruh",
                "country_id" =>"64"
            ),
            array(
                //"1052",
                "name" =>"Muhafazat ad Daqahliyah",
                "country_id" =>"64"
            ),
            array(
                //"1053",
                "name" =>"Muhafazat al Fayyum",
                "country_id" =>"64"
            ),
            array(
                //"1054",
                "name" =>"Muhafazat al Gharbiyah",
                "country_id" =>"64"
            ),
            array(
                //"1055",
                "name" =>"Muhafazat al Iskandariyah",
                "country_id" =>"64"
            ),
            array(
                //"1056",
                "name" =>"Muhafazat al Qahirah",
                "country_id" =>"64"
            ),
            array(
                //"1057",
                "name" =>"Qina",
                "country_id" =>"64"
            ),
            array(
                //"1058",
                "name" =>"Sawhaj",
                "country_id" =>"64"
            ),
            array(
                //"1059",
                "name" =>"Sina al-Janubiyah",
                "country_id" =>"64"
            ),
            array(
                //"1060",
                "name" =>"Sina ash-Shamaliyah",
                "country_id" =>"64"
            ),
            array(
                //"1061",
                "name" =>"ad-Daqahliyah",
                "country_id" =>"64"
            ),
            array(
                //"1062",
                "name" =>"al-Bahr-al-Ahmar",
                "country_id" =>"64"
            ),
            array(
                //"1063",
                "name" =>"al-Buhayrah",
                "country_id" =>"64"
            ),
            array(
                //"1064",
                "name" =>"al-Fayyum",
                "country_id" =>"64"
            ),
            array(
                //"1065",
                "name" =>"al-Gharbiyah",
                "country_id" =>"64"
            ),
            array(
                //"1066",
                "name" =>"al-Iskandariyah",
                "country_id" =>"64"
            ),
            array(
                //"1067",
                "name" =>"al-Ismailiyah",
                "country_id" =>"64"
            ),
            array(
                //"1068",
                "name" =>"al-Jizah",
                "country_id" =>"64"
            ),
            array(
                //"1069",
                "name" =>"al-Minufiyah",
                "country_id" =>"64"
            ),
            array(
                //"1070",
                "name" =>"al-Minya",
                "country_id" =>"64"
            ),
            array(
                //"1071",
                "name" =>"al-Qahira",
                "country_id" =>"64"
            ),
            array(
                //"1072",
                "name" =>"al-Qalyubiyah",
                "country_id" =>"64"
            ),
            array(
                //"1073",
                "name" =>"al-Uqsur",
                "country_id" =>"64"
            ),
            array(
                //"1074",
                "name" =>"al-Wadi al-Jadid",
                "country_id" =>"64"
            ),
            array(
                //"1075",
                "name" =>"as-Suways",
                "country_id" =>"64"
            ),
            array(
                //"1076",
                "name" =>"ash-Sharqiyah",
                "country_id" =>"64"
            ),
            array(
                //"1077",
                "name" =>"Ahuachapan",
                "country_id" =>"65"
            ),
            array(
                //"1078",
                "name" =>"Cabanas",
                "country_id" =>"65"
            ),
            array(
                //"1079",
                "name" =>"Chalatenango",
                "country_id" =>"65"
            ),
            array(
                //"1080",
                "name" =>"Cuscatlan",
                "country_id" =>"65"
            ),
            array(
                //"1081",
                "name" =>"La Libertad",
                "country_id" =>"65"
            ),
            array(
                //"1082",
                "name" =>"La Paz",
                "country_id" =>"65"
            ),
            array(
                //"1083",
                "name" =>"La Union",
                "country_id" =>"65"
            ),
            array(
                //"1084",
                "name" =>"Morazan",
                "country_id" =>"65"
            ),
            array(
                //"1085",
                "name" =>"San Miguel",
                "country_id" =>"65"
            ),
            array(
                //"1086",
                "name" =>"San Salvador",
                "country_id" =>"65"
            ),
            array(
                //"1087",
                "name" =>"San Vicente",
                "country_id" =>"65"
            ),
            array(
                //"1088",
                "name" =>"Santa Ana",
                "country_id" =>"65"
            ),
            array(
                //"1089",
                "name" =>"Sonsonate",
                "country_id" =>"65"
            ),
            array(
                //"1090",
                "name" =>"Usulutan",
                "country_id" =>"65"
            ),
            array(
                //"1091",
                "name" =>"Annobon",
                "country_id" =>"66"
            ),
            array(
                //"1092",
                "name" =>"Bioko Norte",
                "country_id" =>"66"
            ),
            array(
                //"1093",
                "name" =>"Bioko Sur",
                "country_id" =>"66"
            ),
            array(
                //"1094",
                "name" =>"Centro Sur",
                "country_id" =>"66"
            ),
            array(
                //"1095",
                "name" =>"Kie-Ntem",
                "country_id" =>"66"
            ),
            array(
                //"1096",
                "name" =>"Litoral",
                "country_id" =>"66"
            ),
            array(
                //"1097",
                "name" =>"Wele-Nzas",
                "country_id" =>"66"
            ),
            array(
                //"1098",
                "name" =>"Anseba",
                "country_id" =>"67"
            ),
            array(
                //"1099",
                "name" =>"Debub",
                "country_id" =>"67"
            ),
            array(
                //"1100",
                "name" =>"Debub-Keih-Bahri",
                "country_id" =>"67"
            ),
            array(
                //"1101",
                "name" =>"Gash-Barka",
                "country_id" =>"67"
            ),
            array(
                //"1102",
                "name" =>"Maekel",
                "country_id" =>"67"
            ),
            array(
                //"1103",
                "name" =>"Semien-Keih-Bahri",
                "country_id" =>"67"
            ),
            array(
                //"1104",
                "name" =>"Harju",
                "country_id" =>"68"
            ),
            array(
                //"1105",
                "name" =>"Hiiu",
                "country_id" =>"68"
            ),
            array(
                //"1106",
                "name" =>"Ida-Viru",
                "country_id" =>"68"
            ),
            array(
                //"1107",
                "name" =>"Jarva",
                "country_id" =>"68"
            ),
            array(
                //"1108",
                "name" =>"Jogeva",
                "country_id" =>"68"
            ),
            array(
                //"1109",
                "name" =>"Laane",
                "country_id" =>"68"
            ),
            array(
                //"1110",
                "name" =>"Laane-Viru",
                "country_id" =>"68"
            ),
            array(
                //"1111",
                "name" =>"Parnu",
                "country_id" =>"68"
            ),
            array(
                //"1112",
                "name" =>"Polva",
                "country_id" =>"68"
            ),
            array(
                //"1113",
                "name" =>"Rapla",
                "country_id" =>"68"
            ),
            array(
                //"1114",
                "name" =>"Saare",
                "country_id" =>"68"
            ),
            array(
                //"1115",
                "name" =>"Tartu",
                "country_id" =>"68"
            ),
            array(
                //"1116",
                "name" =>"Valga",
                "country_id" =>"68"
            ),
            array(
                //"1117",
                "name" =>"Viljandi",
                "country_id" =>"68"
            ),
            array(
                //"1118",
                "name" =>"Voru",
                "country_id" =>"68"
            ),
            array(
                //"1119",
                "name" =>"Addis Abeba",
                "country_id" =>"69"
            ),
            array(
                //"1120",
                "name" =>"Afar",
                "country_id" =>"69"
            ),
            array(
                //"1121",
                "name" =>"Amhara",
                "country_id" =>"69"
            ),
            array(
                //"1122",
                "name" =>"Benishangul",
                "country_id" =>"69"
            ),
            array(
                //"1123",
                "name" =>"Diredawa",
                "country_id" =>"69"
            ),
            array(
                //"1124",
                "name" =>"Gambella",
                "country_id" =>"69"
            ),
            array(
                //"1125",
                "name" =>"Harar",
                "country_id" =>"69"
            ),
            array(
                //"1126",
                "name" =>"Jigjiga",
                "country_id" =>"69"
            ),
            array(
                //"1127",
                "name" =>"Mekele",
                "country_id" =>"69"
            ),
            array(
                //"1128",
                "name" =>"Oromia",
                "country_id" =>"69"
            ),
            array(
                //"1129",
                "name" =>"Somali",
                "country_id" =>"69"
            ),
            array(
                //"1130",
                "name" =>"Southern",
                "country_id" =>"69"
            ),
            array(
                //"1131",
                "name" =>"Tigray",
                "country_id" =>"69"
            ),
            array(
                //"1132",
                "name" =>"Christmas Island",
                "country_id" =>"70"
            ),
            array(
                //"1133",
                "name" =>"Cocos Islands",
                "country_id" =>"70"
            ),
            array(
                //"1134",
                "name" =>"Coral Sea Islands",
                "country_id" =>"70"
            ),
            array(
                //"1135",
                "name" =>"Falkland Islands",
                "country_id" =>"71"
            ),
            array(
                //"1136",
                "name" =>"South Georgia",
                "country_id" =>"71"
            ),
            array(
                //"1137",
                "name" =>"Klaksvik",
                "country_id" =>"72"
            ),
            array(
                //"1138",
                "name" =>"Nor ara Eysturoy",
                "country_id" =>"72"
            ),
            array(
                //"1139",
                "name" =>"Nor oy",
                "country_id" =>"72"
            ),
            array(
                //"1140",
                "name" =>"Sandoy",
                "country_id" =>"72"
            ),
            array(
                //"1141",
                "name" =>"Streymoy",
                "country_id" =>"72"
            ),
            array(
                //"1142",
                "name" =>"Su uroy",
                "country_id" =>"72"
            ),
            array(
                //"1143",
                "name" =>"Sy ra Eysturoy",
                "country_id" =>"72"
            ),
            array(
                //"1144",
                "name" =>"Torshavn",
                "country_id" =>"72"
            ),
            array(
                //"1145",
                "name" =>"Vaga",
                "country_id" =>"72"
            ),
            array(
                //"1146",
                "name" =>"Central",
                "country_id" =>"73"
            ),
            array(
                //"1147",
                "name" =>"Eastern",
                "country_id" =>"73"
            ),
            array(
                //"1148",
                "name" =>"Northern",
                "country_id" =>"73"
            ),
            array(
                //"1149",
                "name" =>"South Pacific",
                "country_id" =>"73"
            ),
            array(
                //"1150",
                "name" =>"Western",
                "country_id" =>"73"
            ),
            array(
                //"1151",
                "name" =>"Ahvenanmaa",
                "country_id" =>"74"
            ),
            array(
                //"1152",
                "name" =>"Etela-Karjala",
                "country_id" =>"74"
            ),
            array(
                //"1153",
                "name" =>"Etela-Pohjanmaa",
                "country_id" =>"74"
            ),
            array(
                //"1154",
                "name" =>"Etela-Savo",
                "country_id" =>"74"
            ),
            array(
                //"1155",
                "name" =>"Etela-Suomen Laani",
                "country_id" =>"74"
            ),
            array(
                //"1156",
                "name" =>"Ita-Suomen Laani",
                "country_id" =>"74"
            ),
            array(
                //"1157",
                "name" =>"Ita-Uusimaa",
                "country_id" =>"74"
            ),
            array(
                //"1158",
                "name" =>"Kainuu",
                "country_id" =>"74"
            ),
            array(
                //"1159",
                "name" =>"Kanta-Hame",
                "country_id" =>"74"
            ),
            array(
                //"1160",
                "name" =>"Keski-Pohjanmaa",
                "country_id" =>"74"
            ),
            array(
                //"1161",
                "name" =>"Keski-Suomi",
                "country_id" =>"74"
            ),
            array(
                //"1162",
                "name" =>"Kymenlaakso",
                "country_id" =>"74"
            ),
            array(
                //"1163",
                "name" =>"Lansi-Suomen Laani",
                "country_id" =>"74"
            ),
            array(
                //"1164",
                "name" =>"Lappi",
                "country_id" =>"74"
            ),
            array(
                //"1165",
                "name" =>"Northern Savonia",
                "country_id" =>"74"
            ),
            array(
                //"1166",
                "name" =>"Ostrobothnia",
                "country_id" =>"74"
            ),
            array(
                //"1167",
                "name" =>"Oulun Laani",
                "country_id" =>"74"
            ),
            array(
                //"1168",
                "name" =>"Paijat-Hame",
                "country_id" =>"74"
            ),
            array(
                //"1169",
                "name" =>"Pirkanmaa",
                "country_id" =>"74"
            ),
            array(
                //"1170",
                "name" =>"Pohjanmaa",
                "country_id" =>"74"
            ),
            array(
                //"1171",
                "name" =>"Pohjois-Karjala",
                "country_id" =>"74"
            ),
            array(
                //"1172",
                "name" =>"Pohjois-Pohjanmaa",
                "country_id" =>"74"
            ),
            array(
                //"1173",
                "name" =>"Pohjois-Savo",
                "country_id" =>"74"
            ),
            array(
                //"1174",
                "name" =>"Saarijarvi",
                "country_id" =>"74"
            ),
            array(
                //"1175",
                "name" =>"Satakunta",
                "country_id" =>"74"
            ),
            array(
                //"1176",
                "name" =>"Southern Savonia",
                "country_id" =>"74"
            ),
            array(
                //"1177",
                "name" =>"Tavastia Proper",
                "country_id" =>"74"
            ),
            array(
                //"1178",
                "name" =>"Uleaborgs Lan",
                "country_id" =>"74"
            ),
            array(
                //"1179",
                "name" =>"Uusimaa",
                "country_id" =>"74"
            ),
            array(
                //"1180",
                "name" =>"Varsinais-Suomi",
                "country_id" =>"74"
            ),
            array(
                //"1181",
                "name" =>"Ain",
                "country_id" =>"75"
            ),
            array(
                //"1182",
                "name" =>"Aisne",
                "country_id" =>"75"
            ),
            array(
                //"1183",
                "name" =>"Albi Le Sequestre",
                "country_id" =>"75"
            ),
            array(
                //"1184",
                "name" =>"Allier",
                "country_id" =>"75"
            ),
            array(
                //"1185",
                "name" =>"Alpes-Cote dAzur",
                "country_id" =>"75"
            ),
            array(
                //"1186",
                "name" =>"Alpes-Maritimes",
                "country_id" =>"75"
            ),
            array(
                //"1187",
                "name" =>"Alpes-de-Haute-Provence",
                "country_id" =>"75"
            ),
            array(
                //"1188",
                "name" =>"Alsace",
                "country_id" =>"75"
            ),
            array(
                //"1189",
                "name" =>"Aquitaine",
                "country_id" =>"75"
            ),
            array(
                //"1190",
                "name" =>"Ardeche",
                "country_id" =>"75"
            ),
            array(
                //"1191",
                "name" =>"Ardennes",
                "country_id" =>"75"
            ),
            array(
                //"1192",
                "name" =>"Ariege",
                "country_id" =>"75"
            ),
            array(
                //"1193",
                "name" =>"Aube",
                "country_id" =>"75"
            ),
            array(
                //"1194",
                "name" =>"Aude",
                "country_id" =>"75"
            ),
            array(
                //"1195",
                "name" =>"Auvergne",
                "country_id" =>"75"
            ),
            array(
                //"1196",
                "name" =>"Aveyron",
                "country_id" =>"75"
            ),
            array(
                //"1197",
                "name" =>"Bas-Rhin",
                "country_id" =>"75"
            ),
            array(
                //"1198",
                "name" =>"Basse-Normandie",
                "country_id" =>"75"
            ),
            array(
                //"1199",
                "name" =>"Bouches-du-Rhone",
                "country_id" =>"75"
            ),
            array(
                //"1200",
                "name" =>"Bourgogne",
                "country_id" =>"75"
            ),
            array(
                //"1201",
                "name" =>"Bretagne",
                "country_id" =>"75"
            ),
            array(
                //"1202",
                "name" =>"Brittany",
                "country_id" =>"75"
            ),
            array(
                //"1203",
                "name" =>"Burgundy",
                "country_id" =>"75"
            ),
            array(
                //"1204",
                "name" =>"Calvados",
                "country_id" =>"75"
            ),
            array(
                //"1205",
                "name" =>"Cantal",
                "country_id" =>"75"
            ),
            array(
                //"1206",
                "name" =>"Cedex",
                "country_id" =>"75"
            ),
            array(
                //"1207",
                "name" =>"Centre",
                "country_id" =>"75"
            ),
            array(
                //"1208",
                "name" =>"Charente",
                "country_id" =>"75"
            ),
            array(
                //"1209",
                "name" =>"Charente-Maritime",
                "country_id" =>"75"
            ),
            array(
                //"1210",
                "name" =>"Cher",
                "country_id" =>"75"
            ),
            array(
                //"1211",
                "name" =>"Correze",
                "country_id" =>"75"
            ),
            array(
                //"1212",
                "name" =>"Corse-du-Sud",
                "country_id" =>"75"
            ),
            array(
                //"1213",
                "name" =>"Cote-d''Or",
                "country_id" =>"75"
            ),
            array(
                //"1214",
                "name" =>"Cotes-d''Armor",
                "country_id" =>"75"
            ),
            array(
                //"1215",
                "name" =>"Creuse",
                "country_id" =>"75"
            ),
            array(
                //"1216",
                "name" =>"Crolles",
                "country_id" =>"75"
            ),
            array(
                //"1217",
                "name" =>"Deux-Sevres",
                "country_id" =>"75"
            ),
            array(
                //"1218",
                "name" =>"Dordogne",
                "country_id" =>"75"
            ),
            array(
                //"1219",
                "name" =>"Doubs",
                "country_id" =>"75"
            ),
            array(
                //"1220",
                "name" =>"Drome",
                "country_id" =>"75"
            ),
            array(
                //"1221",
                "name" =>"Essonne",
                "country_id" =>"75"
            ),
            array(
                //"1222",
                "name" =>"Eure",
                "country_id" =>"75"
            ),
            array(
                //"1223",
                "name" =>"Eure-et-Loir",
                "country_id" =>"75"
            ),
            array(
                //"1224",
                "name" =>"Feucherolles",
                "country_id" =>"75"
            ),
            array(
                //"1225",
                "name" =>"Finistere",
                "country_id" =>"75"
            ),
            array(
                //"1226",
                "name" =>"Franche-Comte",
                "country_id" =>"75"
            ),
            array(
                //"1227",
                "name" =>"Gard",
                "country_id" =>"75"
            ),
            array(
                //"1228",
                "name" =>"Gers",
                "country_id" =>"75"
            ),
            array(
                //"1229",
                "name" =>"Gironde",
                "country_id" =>"75"
            ),
            array(
                //"1230",
                "name" =>"Haut-Rhin",
                "country_id" =>"75"
            ),
            array(
                //"1231",
                "name" =>"Haute-Corse",
                "country_id" =>"75"
            ),
            array(
                //"1232",
                "name" =>"Haute-Garonne",
                "country_id" =>"75"
            ),
            array(
                //"1233",
                "name" =>"Haute-Loire",
                "country_id" =>"75"
            ),
            array(
                //"1234",
                "name" =>"Haute-Marne",
                "country_id" =>"75"
            ),
            array(
                //"1235",
                "name" =>"Haute-Saone",
                "country_id" =>"75"
            ),
            array(
                //"1236",
                "name" =>"Haute-Savoie",
                "country_id" =>"75"
            ),
            array(
                //"1237",
                "name" =>"Haute-Vienne",
                "country_id" =>"75"
            ),
            array(
                //"1238",
                "name" =>"Hautes-Alpes",
                "country_id" =>"75"
            ),
            array(
                //"1239",
                "name" =>"Hautes-Pyrenees",
                "country_id" =>"75"
            ),
            array(
                //"1240",
                "name" =>"Hauts-de-Seine",
                "country_id" =>"75"
            ),
            array(
                //"1241",
                "name" =>"Herault",
                "country_id" =>"75"
            ),
            array(
                //"1242",
                "name" =>"Ile-de-France",
                "country_id" =>"75"
            ),
            array(
                //"1243",
                "name" =>"Ille-et-Vilaine",
                "country_id" =>"75"
            ),
            array(
                //"1244",
                "name" =>"Indre",
                "country_id" =>"75"
            ),
            array(
                //"1245",
                "name" =>"Indre-et-Loire",
                "country_id" =>"75"
            ),
            array(
                //"1246",
                "name" =>"Isere",
                "country_id" =>"75"
            ),
            array(
                //"1247",
                "name" =>"Jura",
                "country_id" =>"75"
            ),
            array(
                //"1248",
                "name" =>"Klagenfurt",
                "country_id" =>"75"
            ),
            array(
                //"1249",
                "name" =>"Landes",
                "country_id" =>"75"
            ),
            array(
                //"1250",
                "name" =>"Languedoc-Roussillon",
                "country_id" =>"75"
            ),
            array(
                //"1251",
                "name" =>"Larcay",
                "country_id" =>"75"
            ),
            array(
                //"1252",
                "name" =>"Le Castellet",
                "country_id" =>"75"
            ),
            array(
                //"1253",
                "name" =>"Le Creusot",
                "country_id" =>"75"
            ),
            array(
                //"1254",
                "name" =>"Limousin",
                "country_id" =>"75"
            ),
            array(
                //"1255",
                "name" =>"Loir-et-Cher",
                "country_id" =>"75"
            ),
            array(
                //"1256",
                "name" =>"Loire",
                "country_id" =>"75"
            ),
            array(
                //"1257",
                "name" =>"Loire-Atlantique",
                "country_id" =>"75"
            ),
            array(
                //"1258",
                "name" =>"Loiret",
                "country_id" =>"75"
            ),
            array(
                //"1259",
                "name" =>"Lorraine",
                "country_id" =>"75"
            ),
            array(
                //"1260",
                "name" =>"Lot",
                "country_id" =>"75"
            ),
            array(
                //"1261",
                "name" =>"Lot-et-Garonne",
                "country_id" =>"75"
            ),
            array(
                //"1262",
                "name" =>"Lower Normandy",
                "country_id" =>"75"
            ),
            array(
                //"1263",
                "name" =>"Lozere",
                "country_id" =>"75"
            ),
            array(
                //"1264",
                "name" =>"Maine-et-Loire",
                "country_id" =>"75"
            ),
            array(
                //"1265",
                "name" =>"Manche",
                "country_id" =>"75"
            ),
            array(
                //"1266",
                "name" =>"Marne",
                "country_id" =>"75"
            ),
            array(
                //"1267",
                "name" =>"Mayenne",
                "country_id" =>"75"
            ),
            array(
                //"1268",
                "name" =>"Meurthe-et-Moselle",
                "country_id" =>"75"
            ),
            array(
                //"1269",
                "name" =>"Meuse",
                "country_id" =>"75"
            ),
            array(
                //"1270",
                "name" =>"Midi-Pyrenees",
                "country_id" =>"75"
            ),
            array(
                //"1271",
                "name" =>"Morbihan",
                "country_id" =>"75"
            ),
            array(
                //"1272",
                "name" =>"Moselle",
                "country_id" =>"75"
            ),
            array(
                //"1273",
                "name" =>"Nievre",
                "country_id" =>"75"
            ),
            array(
                //"1274",
                "name" =>"Nord",
                "country_id" =>"75"
            ),
            array(
                //"1275",
                "name" =>"Nord-Pas-de-Calais",
                "country_id" =>"75"
            ),
            array(
                //"1276",
                "name" =>"Oise",
                "country_id" =>"75"
            ),
            array(
                //"1277",
                "name" =>"Orne",
                "country_id" =>"75"
            ),
            array(
                //"1278",
                "name" =>"Paris",
                "country_id" =>"75"
            ),
            array(
                //"1279",
                "name" =>"Pas-de-Calais",
                "country_id" =>"75"
            ),
            array(
                //"1280",
                "name" =>"Pays de la Loire",
                "country_id" =>"75"
            ),
            array(
                //"1281",
                "name" =>"Pays-de-la-Loire",
                "country_id" =>"75"
            ),
            array(
                //"1282",
                "name" =>"Picardy",
                "country_id" =>"75"
            ),
            array(
                //"1283",
                "name" =>"Puy-de-Dome",
                "country_id" =>"75"
            ),
            array(
                //"1284",
                "name" =>"Pyrenees-Atlantiques",
                "country_id" =>"75"
            ),
            array(
                //"1285",
                "name" =>"Pyrenees-Orientales",
                "country_id" =>"75"
            ),
            array(
                //"1286",
                "name" =>"Quelmes",
                "country_id" =>"75"
            ),
            array(
                //"1287",
                "name" =>"Rhone",
                "country_id" =>"75"
            ),
            array(
                //"1288",
                "name" =>"Rhone-Alpes",
                "country_id" =>"75"
            ),
            array(
                //"1289",
                "name" =>"Saint Ouen",
                "country_id" =>"75"
            ),
            array(
                //"1290",
                "name" =>"Saint Viatre",
                "country_id" =>"75"
            ),
            array(
                //"1291",
                "name" =>"Saone-et-Loire",
                "country_id" =>"75"
            ),
            array(
                //"1292",
                "name" =>"Sarthe",
                "country_id" =>"75"
            ),
            array(
                //"1293",
                "name" =>"Savoie",
                "country_id" =>"75"
            ),
            array(
                //"1294",
                "name" =>"Seine-Maritime",
                "country_id" =>"75"
            ),
            array(
                //"1295",
                "name" =>"Seine-Saint-Denis",
                "country_id" =>"75"
            ),
            array(
                //"1296",
                "name" =>"Seine-et-Marne",
                "country_id" =>"75"
            ),
            array(
                //"1297",
                "name" =>"Somme",
                "country_id" =>"75"
            ),
            array(
                //"1298",
                "name" =>"Sophia Antipolis",
                "country_id" =>"75"
            ),
            array(
                //"1299",
                "name" =>"Souvans",
                "country_id" =>"75"
            ),
            array(
                //"1300",
                "name" =>"Tarn",
                "country_id" =>"75"
            ),
            array(
                //"1301",
                "name" =>"Tarn-et-Garonne",
                "country_id" =>"75"
            ),
            array(
                //"1302",
                "name" =>"Territoire de Belfort",
                "country_id" =>"75"
            ),
            array(
                //"1303",
                "name" =>"Treignac",
                "country_id" =>"75"
            ),
            array(
                //"1304",
                "name" =>"Upper Normandy",
                "country_id" =>"75"
            ),
            array(
                //"1305",
                "name" =>"Val-d''Oise",
                "country_id" =>"75"
            ),
            array(
                //"1306",
                "name" =>"Val-de-Marne",
                "country_id" =>"75"
            ),
            array(
                //"1307",
                "name" =>"Var",
                "country_id" =>"75"
            ),
            array(
                //"1308",
                "name" =>"Vaucluse",
                "country_id" =>"75"
            ),
            array(
                //"1309",
                "name" =>"Vellise",
                "country_id" =>"75"
            ),
            array(
                //"1310",
                "name" =>"Vendee",
                "country_id" =>"75"
            ),
            array(
                //"1311",
                "name" =>"Vienne",
                "country_id" =>"75"
            ),
            array(
                //"1312",
                "name" =>"Vosges",
                "country_id" =>"75"
            ),
            array(
                //"1313",
                "name" =>"Yonne",
                "country_id" =>"75"
            ),
            array(
                //"1314",
                "name" =>"Yvelines",
                "country_id" =>"75"
            ),
            array(
                //"1315",
                "name" =>"Cayenne",
                "country_id" =>"76"
            ),
            array(
                //"1316",
                "name" =>"Saint-Laurent-du-Maroni",
                "country_id" =>"76"
            ),
            array(
                //"1317",
                "name" =>"Iles du Vent",
                "country_id" =>"77"
            ),
            array(
                //"1318",
                "name" =>"Iles sous le Vent",
                "country_id" =>"77"
            ),
            array(
                //"1319",
                "name" =>"Marquesas",
                "country_id" =>"77"
            ),
            array(
                //"1320",
                "name" =>"Tuamotu",
                "country_id" =>"77"
            ),
            array(
                //"1321",
                "name" =>"Tubuai",
                "country_id" =>"77"
            ),
            array(
                //"1322",
                "name" =>"Amsterdam",
                "country_id" =>"78"
            ),
            array(
                //"1323",
                "name" =>"Crozet Islands",
                "country_id" =>"78"
            ),
            array(
                //"1324",
                "name" =>"Kerguelen",
                "country_id" =>"78"
            ),
            array(
                //"1325",
                "name" =>"Estuaire",
                "country_id" =>"79"
            ),
            array(
                //"1326",
                "name" =>"Haut-Ogooue",
                "country_id" =>"79"
            ),
            array(
                //"1327",
                "name" =>"Moyen-Ogooue",
                "country_id" =>"79"
            ),
            array(
                //"1328",
                "name" =>"Ngounie",
                "country_id" =>"79"
            ),
            array(
                //"1329",
                "name" =>"Nyanga",
                "country_id" =>"79"
            ),
            array(
                //"1330",
                "name" =>"Ogooue-Ivindo",
                "country_id" =>"79"
            ),
            array(
                //"1331",
                "name" =>"Ogooue-Lolo",
                "country_id" =>"79"
            ),
            array(
                //"1332",
                "name" =>"Ogooue-Maritime",
                "country_id" =>"79"
            ),
            array(
                //"1333",
                "name" =>"Woleu-Ntem",
                "country_id" =>"79"
            ),
            array(
                //"1334",
                "name" =>"Banjul",
                "country_id" =>"80"
            ),
            array(
                //"1335",
                "name" =>"Basse",
                "country_id" =>"80"
            ),
            array(
                //"1336",
                "name" =>"Brikama",
                "country_id" =>"80"
            ),
            array(
                //"1337",
                "name" =>"Janjanbureh",
                "country_id" =>"80"
            ),
            array(
                //"1338",
                "name" =>"Kanifing",
                "country_id" =>"80"
            ),
            array(
                //"1339",
                "name" =>"Kerewan",
                "country_id" =>"80"
            ),
            array(
                //"1340",
                "name" =>"Kuntaur",
                "country_id" =>"80"
            ),
            array(
                //"1341",
                "name" =>"Mansakonko",
                "country_id" =>"80"
            ),
            array(
                //"1342",
                "name" =>"Abhasia",
                "country_id" =>"81"
            ),
            array(
                //"1343",
                "name" =>"Ajaria",
                "country_id" =>"81"
            ),
            array(
                //"1344",
                "name" =>"Guria",
                "country_id" =>"81"
            ),
            array(
                //"1345",
                "name" =>"Imereti",
                "country_id" =>"81"
            ),
            array(
                //"1346",
                "name" =>"Kaheti",
                "country_id" =>"81"
            ),
            array(
                //"1347",
                "name" =>"Kvemo Kartli",
                "country_id" =>"81"
            ),
            array(
                //"1348",
                "name" =>"Mcheta-Mtianeti",
                "country_id" =>"81"
            ),
            array(
                //"1349",
                "name" =>"Racha",
                "country_id" =>"81"
            ),
            array(
                //"1350",
                "name" =>"Samagrelo-Zemo Svaneti",
                "country_id" =>"81"
            ),
            array(
                //"1351",
                "name" =>"Samche-Zhavaheti",
                "country_id" =>"81"
            ),
            array(
                //"1352",
                "name" =>"Shida Kartli",
                "country_id" =>"81"
            ),
            array(
                //"1353",
                "name" =>"Tbilisi",
                "country_id" =>"81"
            ),
            array(
                //"1354",
                "name" =>"Auvergne",
                "country_id" =>"82"
            ),
            array(
                //"1355",
                "name" =>"Baden-Wurttemberg",
                "country_id" =>"82"
            ),
            array(
                //"1356",
                "name" =>"Bavaria",
                "country_id" =>"82"
            ),
            array(
                //"1357",
                "name" =>"Bayern",
                "country_id" =>"82"
            ),
            array(
                //"1358",
                "name" =>"Beilstein Wurtt",
                "country_id" =>"82"
            ),
            array(
                //"1359",
                "name" =>"Berlin",
                "country_id" =>"82"
            ),
            array(
                //"1360",
                "name" =>"Brandenburg",
                "country_id" =>"82"
            ),
            array(
                //"1361",
                "name" =>"Bremen",
                "country_id" =>"82"
            ),
            array(
                //"1362",
                "name" =>"Dreisbach",
                "country_id" =>"82"
            ),
            array(
                //"1363",
                "name" =>"Freistaat Bayern",
                "country_id" =>"82"
            ),
            array(
                //"1364",
                "name" =>"Hamburg",
                "country_id" =>"82"
            ),
            array(
                //"1365",
                "name" =>"Hannover",
                "country_id" =>"82"
            ),
            array(
                //"1366",
                "name" =>"Heroldstatt",
                "country_id" =>"82"
            ),
            array(
                //"1367",
                "name" =>"Hessen",
                "country_id" =>"82"
            ),
            array(
                //"1368",
                "name" =>"Kortenberg",
                "country_id" =>"82"
            ),
            array(
                //"1369",
                "name" =>"Laasdorf",
                "country_id" =>"82"
            ),
            array(
                //"1370",
                "name" =>"Land Baden-Wurttemberg",
                "country_id" =>"82"
            ),
            array(
                //"1371",
                "name" =>"Land Bayern",
                "country_id" =>"82"
            ),
            array(
                //"1372",
                "name" =>"Land Brandenburg",
                "country_id" =>"82"
            ),
            array(
                //"1373",
                "name" =>"Land Hessen",
                "country_id" =>"82"
            ),
            array(
                //"1374",
                "name" =>"Land Mecklenburg-Vorpommern",
                "country_id" =>"82"
            ),
            array(
                //"1375",
                "name" =>"Land Nordrhein-Westfalen",
                "country_id" =>"82"
            ),
            array(
                //"1376",
                "name" =>"Land Rheinland-Pfalz",
                "country_id" =>"82"
            ),
            array(
                //"1377",
                "name" =>"Land Sachsen",
                "country_id" =>"82"
            ),
            array(
                //"1378",
                "name" =>"Land Sachsen-Anhalt",
                "country_id" =>"82"
            ),
            array(
                //"1379",
                "name" =>"Land Thuringen",
                "country_id" =>"82"
            ),
            array(
                //"1380",
                "name" =>"Lower Saxony",
                "country_id" =>"82"
            ),
            array(
                //"1381",
                "name" =>"Mecklenburg-Vorpommern",
                "country_id" =>"82"
            ),
            array(
                //"1382",
                "name" =>"Mulfingen",
                "country_id" =>"82"
            ),
            array(
                //"1383",
                "name" =>"Munich",
                "country_id" =>"82"
            ),
            array(
                //"1384",
                "name" =>"Neubeuern",
                "country_id" =>"82"
            ),
            array(
                //"1385",
                "name" =>"Niedersachsen",
                "country_id" =>"82"
            ),
            array(
                //"1386",
                "name" =>"Noord-Holland",
                "country_id" =>"82"
            ),
            array(
                //"1387",
                "name" =>"Nordrhein-Westfalen",
                "country_id" =>"82"
            ),
            array(
                //"1388",
                "name" =>"North Rhine-Westphalia",
                "country_id" =>"82"
            ),
            array(
                //"1389",
                "name" =>"Osterode",
                "country_id" =>"82"
            ),
            array(
                //"1390",
                "name" =>"Rheinland-Pfalz",
                "country_id" =>"82"
            ),
            array(
                //"1391",
                "name" =>"Rhineland-Palatinate",
                "country_id" =>"82"
            ),
            array(
                //"1392",
                "name" =>"Saarland",
                "country_id" =>"82"
            ),
            array(
                //"1393",
                "name" =>"Sachsen",
                "country_id" =>"82"
            ),
            array(
                //"1394",
                "name" =>"Sachsen-Anhalt",
                "country_id" =>"82"
            ),
            array(
                //"1395",
                "name" =>"Saxony",
                "country_id" =>"82"
            ),
            array(
                //"1396",
                "name" =>"Schleswig-Holstein",
                "country_id" =>"82"
            ),
            array(
                //"1397",
                "name" =>"Thuringia",
                "country_id" =>"82"
            ),
            array(
                //"1398",
                "name" =>"Webling",
                "country_id" =>"82"
            ),
            array(
                //"1399",
                "name" =>"Weinstrabe",
                "country_id" =>"82"
            ),
            array(
                //"1400",
                "name" =>"schlobborn",
                "country_id" =>"82"
            ),
            array(
                //"1401",
                "name" =>"Ashanti",
                "country_id" =>"83"
            ),
            array(
                //"1402",
                "name" =>"Brong-Ahafo",
                "country_id" =>"83"
            ),
            array(
                //"1403",
                "name" =>"Central",
                "country_id" =>"83"
            ),
            array(
                //"1404",
                "name" =>"Eastern",
                "country_id" =>"83"
            ),
            array(
                //"1405",
                "name" =>"Greater Accra",
                "country_id" =>"83"
            ),
            array(
                //"1406",
                "name" =>"Northern",
                "country_id" =>"83"
            ),
            array(
                //"1407",
                "name" =>"Upper East",
                "country_id" =>"83"
            ),
            array(
                //"1408",
                "name" =>"Upper West",
                "country_id" =>"83"
            ),
            array(
                //"1409",
                "name" =>"Volta",
                "country_id" =>"83"
            ),
            array(
                //"1410",
                "name" =>"Western",
                "country_id" =>"83"
            ),
            array(
                //"1411",
                "name" =>"Gibraltar",
                "country_id" =>"84"
            ),
            array(
                //"1412",
                "name" =>"Acharnes",
                "country_id" =>"85"
            ),
            array(
                //"1413",
                "name" =>"Ahaia",
                "country_id" =>"85"
            ),
            array(
                //"1414",
                "name" =>"Aitolia kai Akarnania",
                "country_id" =>"85"
            ),
            array(
                //"1415",
                "name" =>"Argolis",
                "country_id" =>"85"
            ),
            array(
                //"1416",
                "name" =>"Arkadia",
                "country_id" =>"85"
            ),
            array(
                //"1417",
                "name" =>"Arta",
                "country_id" =>"85"
            ),
            array(
                //"1418",
                "name" =>"Attica",
                "country_id" =>"85"
            ),
            array(
                //"1419",
                "name" =>"Attiki",
                "country_id" =>"85"
            ),
            array(
                //"1420",
                "name" =>"Ayion Oros",
                "country_id" =>"85"
            ),
            array(
                //"1421",
                "name" =>"Crete",
                "country_id" =>"85"
            ),
            array(
                //"1422",
                "name" =>"Dodekanisos",
                "country_id" =>"85"
            ),
            array(
                //"1423",
                "name" =>"Drama",
                "country_id" =>"85"
            ),
            array(
                //"1424",
                "name" =>"Evia",
                "country_id" =>"85"
            ),
            array(
                //"1425",
                "name" =>"Evritania",
                "country_id" =>"85"
            ),
            array(
                //"1426",
                "name" =>"Evros",
                "country_id" =>"85"
            ),
            array(
                //"1427",
                "name" =>"Evvoia",
                "country_id" =>"85"
            ),
            array(
                //"1428",
                "name" =>"Florina",
                "country_id" =>"85"
            ),
            array(
                //"1429",
                "name" =>"Fokis",
                "country_id" =>"85"
            ),
            array(
                //"1430",
                "name" =>"Fthiotis",
                "country_id" =>"85"
            ),
            array(
                //"1431",
                "name" =>"Grevena",
                "country_id" =>"85"
            ),
            array(
                //"1432",
                "name" =>"Halandri",
                "country_id" =>"85"
            ),
            array(
                //"1433",
                "name" =>"Halkidiki",
                "country_id" =>"85"
            ),
            array(
                //"1434",
                "name" =>"Hania",
                "country_id" =>"85"
            ),
            array(
                //"1435",
                "name" =>"Heraklion",
                "country_id" =>"85"
            ),
            array(
                //"1436",
                "name" =>"Hios",
                "country_id" =>"85"
            ),
            array(
                //"1437",
                "name" =>"Ilia",
                "country_id" =>"85"
            ),
            array(
                //"1438",
                "name" =>"Imathia",
                "country_id" =>"85"
            ),
            array(
                //"1439",
                "name" =>"Ioannina",
                "country_id" =>"85"
            ),
            array(
                //"1440",
                "name" =>"Iraklion",
                "country_id" =>"85"
            ),
            array(
                //"1441",
                "name" =>"Karditsa",
                "country_id" =>"85"
            ),
            array(
                //"1442",
                "name" =>"Kastoria",
                "country_id" =>"85"
            ),
            array(
                //"1443",
                "name" =>"Kavala",
                "country_id" =>"85"
            ),
            array(
                //"1444",
                "name" =>"Kefallinia",
                "country_id" =>"85"
            ),
            array(
                //"1445",
                "name" =>"Kerkira",
                "country_id" =>"85"
            ),
            array(
                //"1446",
                "name" =>"Kiklades",
                "country_id" =>"85"
            ),
            array(
                //"1447",
                "name" =>"Kilkis",
                "country_id" =>"85"
            ),
            array(
                //"1448",
                "name" =>"Korinthia",
                "country_id" =>"85"
            ),
            array(
                //"1449",
                "name" =>"Kozani",
                "country_id" =>"85"
            ),
            array(
                //"1450",
                "name" =>"Lakonia",
                "country_id" =>"85"
            ),
            array(
                //"1451",
                "name" =>"Larisa",
                "country_id" =>"85"
            ),
            array(
                //"1452",
                "name" =>"Lasithi",
                "country_id" =>"85"
            ),
            array(
                //"1453",
                "name" =>"Lesvos",
                "country_id" =>"85"
            ),
            array(
                //"1454",
                "name" =>"Levkas",
                "country_id" =>"85"
            ),
            array(
                //"1455",
                "name" =>"Magnisia",
                "country_id" =>"85"
            ),
            array(
                //"1456",
                "name" =>"Messinia",
                "country_id" =>"85"
            ),
            array(
                //"1457",
                "name" =>"Nomos Attikis",
                "country_id" =>"85"
            ),
            array(
                //"1458",
                "name" =>"Nomos Zakynthou",
                "country_id" =>"85"
            ),
            array(
                //"1459",
                "name" =>"Pella",
                "country_id" =>"85"
            ),
            array(
                //"1460",
                "name" =>"Pieria",
                "country_id" =>"85"
            ),
            array(
                //"1461",
                "name" =>"Piraios",
                "country_id" =>"85"
            ),
            array(
                //"1462",
                "name" =>"Preveza",
                "country_id" =>"85"
            ),
            array(
                //"1463",
                "name" =>"Rethimni",
                "country_id" =>"85"
            ),
            array(
                //"1464",
                "name" =>"Rodopi",
                "country_id" =>"85"
            ),
            array(
                //"1465",
                "name" =>"Samos",
                "country_id" =>"85"
            ),
            array(
                //"1466",
                "name" =>"Serrai",
                "country_id" =>"85"
            ),
            array(
                //"1467",
                "name" =>"Thesprotia",
                "country_id" =>"85"
            ),
            array(
                //"1468",
                "name" =>"Thessaloniki",
                "country_id" =>"85"
            ),
            array(
                //"1469",
                "name" =>"Trikala",
                "country_id" =>"85"
            ),
            array(
                //"1470",
                "name" =>"Voiotia",
                "country_id" =>"85"
            ),
            array(
                //"1471",
                "name" =>"West Greece",
                "country_id" =>"85"
            ),
            array(
                //"1472",
                "name" =>"Xanthi",
                "country_id" =>"85"
            ),
            array(
                //"1473",
                "name" =>"Zakinthos",
                "country_id" =>"85"
            ),
            array(
                //"1474",
                "name" =>"Aasiaat",
                "country_id" =>"86"
            ),
            array(
                //"1475",
                "name" =>"Ammassalik",
                "country_id" =>"86"
            ),
            array(
                //"1476",
                "name" =>"Illoqqortoormiut",
                "country_id" =>"86"
            ),
            array(
                //"1477",
                "name" =>"Ilulissat",
                "country_id" =>"86"
            ),
            array(
                //"1478",
                "name" =>"Ivittuut",
                "country_id" =>"86"
            ),
            array(
                //"1479",
                "name" =>"Kangaatsiaq",
                "country_id" =>"86"
            ),
            array(
                //"1480",
                "name" =>"Maniitsoq",
                "country_id" =>"86"
            ),
            array(
                //"1481",
                "name" =>"Nanortalik",
                "country_id" =>"86"
            ),
            array(
                //"1482",
                "name" =>"Narsaq",
                "country_id" =>"86"
            ),
            array(
                //"1483",
                "name" =>"Nuuk",
                "country_id" =>"86"
            ),
            array(
                //"1484",
                "name" =>"Paamiut",
                "country_id" =>"86"
            ),
            array(
                //"1485",
                "name" =>"Qaanaaq",
                "country_id" =>"86"
            ),
            array(
                //"1486",
                "name" =>"Qaqortoq",
                "country_id" =>"86"
            ),
            array(
                //"1487",
                "name" =>"Qasigiannguit",
                "country_id" =>"86"
            ),
            array(
                //"1488",
                "name" =>"Qeqertarsuaq",
                "country_id" =>"86"
            ),
            array(
                //"1489",
                "name" =>"Sisimiut",
                "country_id" =>"86"
            ),
            array(
                //"1490",
                "name" =>"Udenfor kommunal inddeling",
                "country_id" =>"86"
            ),
            array(
                //"1491",
                "name" =>"Upernavik",
                "country_id" =>"86"
            ),
            array(
                //"1492",
                "name" =>"Uummannaq",
                "country_id" =>"86"
            ),
            array(
                //"1493",
                "name" =>"Carriacou-Petite Martinique",
                "country_id" =>"87"
            ),
            array(
                //"1494",
                "name" =>"Saint Andrew",
                "country_id" =>"87"
            ),
            array(
                //"1495",
                "name" =>"Saint Davids",
                "country_id" =>"87"
            ),
            array(
                //"1496",
                "name" =>"Saint George''s",
                "country_id" =>"87"
            ),
            array(
                //"1497",
                "name" =>"Saint John",
                "country_id" =>"87"
            ),
            array(
                //"1498",
                "name" =>"Saint Mark",
                "country_id" =>"87"
            ),
            array(
                //"1499",
                "name" =>"Saint Patrick",
                "country_id" =>"87"
            ),
            array(
                //"1500",
                "name" =>"Basse-Terre",
                "country_id" =>"88"
            ),
            array(
                //"1501",
                "name" =>"Grande-Terre",
                "country_id" =>"88"
            ),
            array(
                //"1502",
                "name" =>"Iles des Saintes",
                "country_id" =>"88"
            ),
            array(
                //"1503",
                "name" =>"La Desirade",
                "country_id" =>"88"
            ),
            array(
                //"1504",
                "name" =>"Marie-Galante",
                "country_id" =>"88"
            ),
            array(
                //"1505",
                "name" =>"Saint Barthelemy",
                "country_id" =>"88"
            ),
            array(
                //"1506",
                "name" =>"Saint Martin",
                "country_id" =>"88"
            ),
            array(
                //"1507",
                "name" =>"Agana Heights",
                "country_id" =>"89"
            ),
            array(
                //"1508",
                "name" =>"Agat",
                "country_id" =>"89"
            ),
            array(
                //"1509",
                "name" =>"Barrigada",
                "country_id" =>"89"
            ),
            array(
                //"1510",
                "name" =>"Chalan-Pago-Ordot",
                "country_id" =>"89"
            ),
            array(
                //"1511",
                "name" =>"Dededo",
                "country_id" =>"89"
            ),
            array(
                //"1512",
                "name" =>"Hagatna",
                "country_id" =>"89"
            ),
            array(
                //"1513",
                "name" =>"Inarajan",
                "country_id" =>"89"
            ),
            array(
                //"1514",
                "name" =>"Mangilao",
                "country_id" =>"89"
            ),
            array(
                //"1515",
                "name" =>"Merizo",
                "country_id" =>"89"
            ),
            array(
                //"1516",
                "name" =>"Mongmong-Toto-Maite",
                "country_id" =>"89"
            ),
            array(
                //"1517",
                "name" =>"Santa Rita",
                "country_id" =>"89"
            ),
            array(
                //"1518",
                "name" =>"Sinajana",
                "country_id" =>"89"
            ),
            array(
                //"1519",
                "name" =>"Talofofo",
                "country_id" =>"89"
            ),
            array(
                //"1520",
                "name" =>"Tamuning",
                "country_id" =>"89"
            ),
            array(
                //"1521",
                "name" =>"Yigo",
                "country_id" =>"89"
            ),
            array(
                //"1522",
                "name" =>"Yona",
                "country_id" =>"89"
            ),
            array(
                //"1523",
                "name" =>"Alta Verapaz",
                "country_id" =>"90"
            ),
            array(
                //"1524",
                "name" =>"Baja Verapaz",
                "country_id" =>"90"
            ),
            array(
                //"1525",
                "name" =>"Chimaltenango",
                "country_id" =>"90"
            ),
            array(
                //"1526",
                "name" =>"Chiquimula",
                "country_id" =>"90"
            ),
            array(
                //"1527",
                "name" =>"El Progreso",
                "country_id" =>"90"
            ),
            array(
                //"1528",
                "name" =>"Escuintla",
                "country_id" =>"90"
            ),
            array(
                //"1529",
                "name" =>"Guatemala",
                "country_id" =>"90"
            ),
            array(
                //"1530",
                "name" =>"Huehuetenango",
                "country_id" =>"90"
            ),
            array(
                //"1531",
                "name" =>"Izabal",
                "country_id" =>"90"
            ),
            array(
                //"1532",
                "name" =>"Jalapa",
                "country_id" =>"90"
            ),
            array(
                //"1533",
                "name" =>"Jutiapa",
                "country_id" =>"90"
            ),
            array(
                //"1534",
                "name" =>"Peten",
                "country_id" =>"90"
            ),
            array(
                //"1535",
                "name" =>"Quezaltenango",
                "country_id" =>"90"
            ),
            array(
                //"1536",
                "name" =>"Quiche",
                "country_id" =>"90"
            ),
            array(
                //"1537",
                "name" =>"Retalhuleu",
                "country_id" =>"90"
            ),
            array(
                //"1538",
                "name" =>"Sacatepequez",
                "country_id" =>"90"
            ),
            array(
                //"1539",
                "name" =>"San Marcos",
                "country_id" =>"90"
            ),
            array(
                //"1540",
                "name" =>"Santa Rosa",
                "country_id" =>"90"
            ),
            array(
                //"1541",
                "name" =>"Solola",
                "country_id" =>"90"
            ),
            array(
                //"1542",
                "name" =>"Suchitepequez",
                "country_id" =>"90"
            ),
            array(
                //"1543",
                "name" =>"Totonicapan",
                "country_id" =>"90"
            ),
            array(
                //"1544",
                "name" =>"Zacapa",
                "country_id" =>"90"
            ),
            array(
                //"1545",
                "name" =>"Alderney",
                "country_id" =>"91"
            ),
            array(
                //"1546",
                "name" =>"Castel",
                "country_id" =>"91"
            ),
            array(
                //"1547",
                "name" =>"Forest",
                "country_id" =>"91"
            ),
            array(
                //"1548",
                "name" =>"Saint Andrew",
                "country_id" =>"91"
            ),
            array(
                //"1549",
                "name" =>"Saint Martin",
                "country_id" =>"91"
            ),
            array(
                //"1550",
                "name" =>"Saint Peter Port",
                "country_id" =>"91"
            ),
            array(
                //"1551",
                "name" =>"Saint Pierre du Bois",
                "country_id" =>"91"
            ),
            array(
                //"1552",
                "name" =>"Saint Sampson",
                "country_id" =>"91"
            ),
            array(
                //"1553",
                "name" =>"Saint Saviour",
                "country_id" =>"91"
            ),
            array(
                //"1554",
                "name" =>"Sark",
                "country_id" =>"91"
            ),
            array(
                //"1555",
                "name" =>"Torteval",
                "country_id" =>"91"
            ),
            array(
                //"1556",
                "name" =>"Vale",
                "country_id" =>"91"
            ),
            array(
                //"1557",
                "name" =>"Beyla",
                "country_id" =>"92"
            ),
            array(
                //"1558",
                "name" =>"Boffa",
                "country_id" =>"92"
            ),
            array(
                //"1559",
                "name" =>"Boke",
                "country_id" =>"92"
            ),
            array(
                //"1560",
                "name" =>"Conakry",
                "country_id" =>"92"
            ),
            array(
                //"1561",
                "name" =>"Coyah",
                "country_id" =>"92"
            ),
            array(
                //"1562",
                "name" =>"Dabola",
                "country_id" =>"92"
            ),
            array(
                //"1563",
                "name" =>"Dalaba",
                "country_id" =>"92"
            ),
            array(
                //"1564",
                "name" =>"Dinguiraye",
                "country_id" =>"92"
            ),
            array(
                //"1565",
                "name" =>"Faranah",
                "country_id" =>"92"
            ),
            array(
                //"1566",
                "name" =>"Forecariah",
                "country_id" =>"92"
            ),
            array(
                //"1567",
                "name" =>"Fria",
                "country_id" =>"92"
            ),
            array(
                //"1568",
                "name" =>"Gaoual",
                "country_id" =>"92"
            ),
            array(
                //"1569",
                "name" =>"Gueckedou",
                "country_id" =>"92"
            ),
            array(
                //"1570",
                "name" =>"Kankan",
                "country_id" =>"92"
            ),
            array(
                //"1571",
                "name" =>"Kerouane",
                "country_id" =>"92"
            ),
            array(
                //"1572",
                "name" =>"Kindia",
                "country_id" =>"92"
            ),
            array(
                //"1573",
                "name" =>"Kissidougou",
                "country_id" =>"92"
            ),
            array(
                //"1574",
                "name" =>"Koubia",
                "country_id" =>"92"
            ),
            array(
                //"1575",
                "name" =>"Koundara",
                "country_id" =>"92"
            ),
            array(
                //"1576",
                "name" =>"Kouroussa",
                "country_id" =>"92"
            ),
            array(
                //"1577",
                "name" =>"Labe",
                "country_id" =>"92"
            ),
            array(
                //"1578",
                "name" =>"Lola",
                "country_id" =>"92"
            ),
            array(
                //"1579",
                "name" =>"Macenta",
                "country_id" =>"92"
            ),
            array(
                //"1580",
                "name" =>"Mali",
                "country_id" =>"92"
            ),
            array(
                //"1581",
                "name" =>"Mamou",
                "country_id" =>"92"
            ),
            array(
                //"1582",
                "name" =>"Mandiana",
                "country_id" =>"92"
            ),
            array(
                //"1583",
                "name" =>"Nzerekore",
                "country_id" =>"92"
            ),
            array(
                //"1584",
                "name" =>"Pita",
                "country_id" =>"92"
            ),
            array(
                //"1585",
                "name" =>"Siguiri",
                "country_id" =>"92"
            ),
            array(
                //"1586",
                "name" =>"Telimele",
                "country_id" =>"92"
            ),
            array(
                //"1587",
                "name" =>"Tougue",
                "country_id" =>"92"
            ),
            array(
                //"1588",
                "name" =>"Yomou",
                "country_id" =>"92"
            ),
            array(
                //"1589",
                "name" =>"Bafata",
                "country_id" =>"93"
            ),
            array(
                //"1590",
                "name" =>"Bissau",
                "country_id" =>"93"
            ),
            array(
                //"1591",
                "name" =>"Bolama",
                "country_id" =>"93"
            ),
            array(
                //"1592",
                "name" =>"Cacheu",
                "country_id" =>"93"
            ),
            array(
                //"1593",
                "name" =>"Gabu",
                "country_id" =>"93"
            ),
            array(
                //"1594",
                "name" =>"Oio",
                "country_id" =>"93"
            ),
            array(
                //"1595",
                "name" =>"Quinara",
                "country_id" =>"93"
            ),
            array(
                //"1596",
                "name" =>"Tombali",
                "country_id" =>"93"
            ),
            array(
                //"1597",
                "name" =>"Barima-Waini",
                "country_id" =>"94"
            ),
            array(
                //"1598",
                "name" =>"Cuyuni-Mazaruni",
                "country_id" =>"94"
            ),
            array(
                //"1599",
                "name" =>"Demerara-Mahaica",
                "country_id" =>"94"
            ),
            array(
                //"1600",
                "name" =>"East Berbice-Corentyne",
                "country_id" =>"94"
            ),
            array(
                //"1601",
                "name" =>"Essequibo Islands-West Demerar",
                "country_id" =>"94"
            ),
            array(
                //"1602",
                "name" =>"Mahaica-Berbice",
                "country_id" =>"94"
            ),
            array(
                //"1603",
                "name" =>"Pomeroon-Supenaam",
                "country_id" =>"94"
            ),
            array(
                //"1604",
                "name" =>"Potaro-Siparuni",
                "country_id" =>"94"
            ),
            array(
                //"1605",
                "name" =>"Upper Demerara-Berbice",
                "country_id" =>"94"
            ),
            array(
                //"1606",
                "name" =>"Upper Takutu-Upper Essequibo",
                "country_id" =>"94"
            ),
            array(
                //"1607",
                "name" =>"Artibonite",
                "country_id" =>"95"
            ),
            array(
                //"1608",
                "name" =>"Centre",
                "country_id" =>"95"
            ),
            array(
                //"1609",
                "name" =>"Grand''Anse",
                "country_id" =>"95"
            ),
            array(
                //"1610",
                "name" =>"Nord",
                "country_id" =>"95"
            ),
            array(
                //"1611",
                "name" =>"Nord-Est",
                "country_id" =>"95"
            ),
            array(
                //"1612",
                "name" =>"Nord-Ouest",
                "country_id" =>"95"
            ),
            array(
                //"1613",
                "name" =>"Ouest",
                "country_id" =>"95"
            ),
            array(
                //"1614",
                "name" =>"Sud",
                "country_id" =>"95"
            ),
            array(
                //"1615",
                "name" =>"Sud-Est",
                "country_id" =>"95"
            ),
            array(
                //"1616",
                "name" =>"Heard and McDonald Islands",
                "country_id" =>"96"
            ),
            array(
                //"1617",
                "name" =>"Atlantida",
                "country_id" =>"97"
            ),
            array(
                //"1618",
                "name" =>"Choluteca",
                "country_id" =>"97"
            ),
            array(
                //"1619",
                "name" =>"Colon",
                "country_id" =>"97"
            ),
            array(
                //"1620",
                "name" =>"Comayagua",
                "country_id" =>"97"
            ),
            array(
                //"1621",
                "name" =>"Copan",
                "country_id" =>"97"
            ),
            array(
                //"1622",
                "name" =>"Cortes",
                "country_id" =>"97"
            ),
            array(
                //"1623",
                "name" =>"Distrito Central",
                "country_id" =>"97"
            ),
            array(
                //"1624",
                "name" =>"El Paraiso",
                "country_id" =>"97"
            ),
            array(
                //"1625",
                "name" =>"Francisco Morazan",
                "country_id" =>"97"
            ),
            array(
                //"1626",
                "name" =>"Gracias a Dios",
                "country_id" =>"97"
            ),
            array(
                //"1627",
                "name" =>"Intibuca",
                "country_id" =>"97"
            ),
            array(
                //"1628",
                "name" =>"Islas de la Bahia",
                "country_id" =>"97"
            ),
            array(
                //"1629",
                "name" =>"La Paz",
                "country_id" =>"97"
            ),
            array(
                //"1630",
                "name" =>"Lempira",
                "country_id" =>"97"
            ),
            array(
                //"1631",
                "name" =>"Ocotepeque",
                "country_id" =>"97"
            ),
            array(
                //"1632",
                "name" =>"Olancho",
                "country_id" =>"97"
            ),
            array(
                //"1633",
                "name" =>"Santa Barbara",
                "country_id" =>"97"
            ),
            array(
                //"1634",
                "name" =>"Valle",
                "country_id" =>"97"
            ),
            array(
                //"1635",
                "name" =>"Yoro",
                "country_id" =>"97"
            ),
            array(
                //"1636",
                "name" =>"Hong Kong",
                "country_id" =>"98"
            ),
            array(
                //"1637",
                "name" =>"Bacs-Kiskun",
                "country_id" =>"99"
            ),
            array(
                //"1638",
                "name" =>"Baranya",
                "country_id" =>"99"
            ),
            array(
                //"1639",
                "name" =>"Bekes",
                "country_id" =>"99"
            ),
            array(
                //"1640",
                "name" =>"Borsod-Abauj-Zemplen",
                "country_id" =>"99"
            ),
            array(
                //"1641",
                "name" =>"Budapest",
                "country_id" =>"99"
            ),
            array(
                //"1642",
                "name" =>"Csongrad",
                "country_id" =>"99"
            ),
            array(
                //"1643",
                "name" =>"Fejer",
                "country_id" =>"99"
            ),
            array(
                //"1644",
                "name" =>"Gyor-Moson-Sopron",
                "country_id" =>"99"
            ),
            array(
                //"1645",
                "name" =>"Hajdu-Bihar",
                "country_id" =>"99"
            ),
            array(
                //"1646",
                "name" =>"Heves",
                "country_id" =>"99"
            ),
            array(
                //"1647",
                "name" =>"Jasz-Nagykun-Szolnok",
                "country_id" =>"99"
            ),
            array(
                //"1648",
                "name" =>"Komarom-Esztergom",
                "country_id" =>"99"
            ),
            array(
                //"1649",
                "name" =>"Nograd",
                "country_id" =>"99"
            ),
            array(
                //"1650",
                "name" =>"Pest",
                "country_id" =>"99"
            ),
            array(
                //"1651",
                "name" =>"Somogy",
                "country_id" =>"99"
            ),
            array(
                //"1652",
                "name" =>"Szabolcs-Szatmar-Bereg",
                "country_id" =>"99"
            ),
            array(
                //"1653",
                "name" =>"Tolna",
                "country_id" =>"99"
            ),
            array(
                //"1654",
                "name" =>"Vas",
                "country_id" =>"99"
            ),
            array(
                //"1655",
                "name" =>"Veszprem",
                "country_id" =>"99"
            ),
            array(
                //"1656",
                "name" =>"Zala",
                "country_id" =>"99"
            ),
            array(
                //"1657",
                "name" =>"Austurland",
                "country_id" =>"100"
            ),
            array(
                //"1658",
                "name" =>"Gullbringusysla",
                "country_id" =>"100"
            ),
            array(
                //"1659",
                "name" =>"Hofu borgarsva i",
                "country_id" =>"100"
            ),
            array(
                //"1660",
                "name" =>"Nor urland eystra",
                "country_id" =>"100"
            ),
            array(
                //"1661",
                "name" =>"Nor urland vestra",
                "country_id" =>"100"
            ),
            array(
                //"1662",
                "name" =>"Su urland",
                "country_id" =>"100"
            ),
            array(
                //"1663",
                "name" =>"Su urnes",
                "country_id" =>"100"
            ),
            array(
                //"1664",
                "name" =>"Vestfir ir",
                "country_id" =>"100"
            ),
            array(
                //"1665",
                "name" =>"Vesturland",
                "country_id" =>"100"
            ),
            array(
                //"1666",
                "name" =>"Aceh",
                "country_id" =>"102"
            ),
            array(
                //"1667",
                "name" =>"Bali",
                "country_id" =>"102"
            ),
            array(
                //"1668",
                "name" =>"Bangka-Belitung",
                "country_id" =>"102"
            ),
            array(
                //"1669",
                "name" =>"Banten",
                "country_id" =>"102"
            ),
            array(
                //"1670",
                "name" =>"Bengkulu",
                "country_id" =>"102"
            ),
            array(
                //"1671",
                "name" =>"Gandaria",
                "country_id" =>"102"
            ),
            array(
                //"1672",
                "name" =>"Gorontalo",
                "country_id" =>"102"
            ),
            array(
                //"1673",
                "name" =>"Jakarta",
                "country_id" =>"102"
            ),
            array(
                //"1674",
                "name" =>"Jambi",
                "country_id" =>"102"
            ),
            array(
                //"1675",
                "name" =>"Jawa Barat",
                "country_id" =>"102"
            ),
            array(
                //"1676",
                "name" =>"Jawa Tengah",
                "country_id" =>"102"
            ),
            array(
                //"1677",
                "name" =>"Jawa Timur",
                "country_id" =>"102"
            ),
            array(
                //"1678",
                "name" =>"Kalimantan Barat",
                "country_id" =>"102"
            ),
            array(
                //"1679",
                "name" =>"Kalimantan Selatan",
                "country_id" =>"102"
            ),
            array(
                //"1680",
                "name" =>"Kalimantan Tengah",
                "country_id" =>"102"
            ),
            array(
                //"1681",
                "name" =>"Kalimantan Timur",
                "country_id" =>"102"
            ),
            array(
                //"1682",
                "name" =>"Kendal",
                "country_id" =>"102"
            ),
            array(
                //"1683",
                "name" =>"Lampung",
                "country_id" =>"102"
            ),
            array(
                //"1684",
                "name" =>"Maluku",
                "country_id" =>"102"
            ),
            array(
                //"1685",
                "name" =>"Maluku Utara",
                "country_id" =>"102"
            ),
            array(
                //"1686",
                "name" =>"Nusa Tenggara Barat",
                "country_id" =>"102"
            ),
            array(
                //"1687",
                "name" =>"Nusa Tenggara Timur",
                "country_id" =>"102"
            ),
            array(
                //"1688",
                "name" =>"Papua",
                "country_id" =>"102"
            ),
            array(
                //"1689",
                "name" =>"Riau",
                "country_id" =>"102"
            ),
            array(
                //"1690",
                "name" =>"Riau Kepulauan",
                "country_id" =>"102"
            ),
            array(
                //"1691",
                "name" =>"Solo",
                "country_id" =>"102"
            ),
            array(
                //"1692",
                "name" =>"Sulawesi Selatan",
                "country_id" =>"102"
            ),
            array(
                //"1693",
                "name" =>"Sulawesi Tengah",
                "country_id" =>"102"
            ),
            array(
                //"1694",
                "name" =>"Sulawesi Tenggara",
                "country_id" =>"102"
            ),
            array(
                //"1695",
                "name" =>"Sulawesi Utara",
                "country_id" =>"102"
            ),
            array(
                //"1696",
                "name" =>"Sumatera Barat",
                "country_id" =>"102"
            ),
            array(
                //"1697",
                "name" =>"Sumatera Selatan",
                "country_id" =>"102"
            ),
            array(
                //"1698",
                "name" =>"Sumatera Utara",
                "country_id" =>"102"
            ),
            array(
                //"1699",
                "name" =>"Yogyakarta",
                "country_id" =>"102"
            ),
            array(
                //"1700",
                "name" =>"Ardabil",
                "country_id" =>"103"
            ),
            array(
                //"1701",
                "name" =>"Azarbayjan-e Bakhtari",
                "country_id" =>"103"
            ),
            array(
                //"1702",
                "name" =>"Azarbayjan-e Khavari",
                "country_id" =>"103"
            ),
            array(
                //"1703",
                "name" =>"Bushehr",
                "country_id" =>"103"
            ),
            array(
                //"1704",
                "name" =>"Chahar Mahal-e Bakhtiari",
                "country_id" =>"103"
            ),
            array(
                //"1705",
                "name" =>"Esfahan",
                "country_id" =>"103"
            ),
            array(
                //"1706",
                "name" =>"Fars",
                "country_id" =>"103"
            ),
            array(
                //"1707",
                "name" =>"Gilan",
                "country_id" =>"103"
            ),
            array(
                //"1708",
                "name" =>"Golestan",
                "country_id" =>"103"
            ),
            array(
                //"1709",
                "name" =>"Hamadan",
                "country_id" =>"103"
            ),
            array(
                //"1710",
                "name" =>"Hormozgan",
                "country_id" =>"103"
            ),
            array(
                //"1711",
                "name" =>"Ilam",
                "country_id" =>"103"
            ),
            array(
                //"1712",
                "name" =>"Kerman",
                "country_id" =>"103"
            ),
            array(
                //"1713",
                "name" =>"Kermanshah",
                "country_id" =>"103"
            ),
            array(
                //"1714",
                "name" =>"Khorasan",
                "country_id" =>"103"
            ),
            array(
                //"1715",
                "name" =>"Khuzestan",
                "country_id" =>"103"
            ),
            array(
                //"1716",
                "name" =>"Kohgiluyeh-e Boyerahmad",
                "country_id" =>"103"
            ),
            array(
                //"1717",
                "name" =>"Kordestan",
                "country_id" =>"103"
            ),
            array(
                //"1718",
                "name" =>"Lorestan",
                "country_id" =>"103"
            ),
            array(
                //"1719",
                "name" =>"Markazi",
                "country_id" =>"103"
            ),
            array(
                //"1720",
                "name" =>"Mazandaran",
                "country_id" =>"103"
            ),
            array(
                //"1721",
                "name" =>"Ostan-e Esfahan",
                "country_id" =>"103"
            ),
            array(
                //"1722",
                "name" =>"Qazvin",
                "country_id" =>"103"
            ),
            array(
                //"1723",
                "name" =>"Qom",
                "country_id" =>"103"
            ),
            array(
                //"1724",
                "name" =>"Semnan",
                "country_id" =>"103"
            ),
            array(
                //"1725",
                "name" =>"Sistan-e Baluchestan",
                "country_id" =>"103"
            ),
            array(
                //"1726",
                "name" =>"Tehran",
                "country_id" =>"103"
            ),
            array(
                //"1727",
                "name" =>"Yazd",
                "country_id" =>"103"
            ),
            array(
                //"1728",
                "name" =>"Zanjan",
                "country_id" =>"103"
            ),
            array(
                //"1729",
                "name" =>"Babil",
                "country_id" =>"104"
            ),
            array(
                //"1730",
                "name" =>"Baghdad",
                "country_id" =>"104"
            ),
            array(
                //"1731",
                "name" =>"Dahuk",
                "country_id" =>"104"
            ),
            array(
                //"1732",
                "name" =>"Dhi Qar",
                "country_id" =>"104"
            ),
            array(
                //"1733",
                "name" =>"Diyala",
                "country_id" =>"104"
            ),
            array(
                //"1734",
                "name" =>"Erbil",
                "country_id" =>"104"
            ),
            array(
                //"1735",
                "name" =>"Irbil",
                "country_id" =>"104"
            ),
            array(
                //"1736",
                "name" =>"Karbala",
                "country_id" =>"104"
            ),
            array(
                //"1737",
                "name" =>"Kurdistan",
                "country_id" =>"104"
            ),
            array(
                //"1738",
                "name" =>"Maysan",
                "country_id" =>"104"
            ),
            array(
                //"1739",
                "name" =>"Ninawa",
                "country_id" =>"104"
            ),
            array(
                //"1740",
                "name" =>"Salah-ad-Din",
                "country_id" =>"104"
            ),
            array(
                //"1741",
                "name" =>"Wasit",
                "country_id" =>"104"
            ),
            array(
                //"1742",
                "name" =>"al-Anbar",
                "country_id" =>"104"
            ),
            array(
                //"1743",
                "name" =>"al-Basrah",
                "country_id" =>"104"
            ),
            array(
                //"1744",
                "name" =>"al-Muthanna",
                "country_id" =>"104"
            ),
            array(
                //"1745",
                "name" =>"al-Qadisiyah",
                "country_id" =>"104"
            ),
            array(
                //"1746",
                "name" =>"an-Najaf",
                "country_id" =>"104"
            ),
            array(
                //"1747",
                "name" =>"as-Sulaymaniyah",
                "country_id" =>"104"
            ),
            array(
                //"1748",
                "name" =>"at-Ta''mim",
                "country_id" =>"104"
            ),
            array(
                //"1749",
                "name" =>"Armagh",
                "country_id" =>"105"
            ),
            array(
                //"1750",
                "name" =>"Carlow",
                "country_id" =>"105"
            ),
            array(
                //"1751",
                "name" =>"Cavan",
                "country_id" =>"105"
            ),
            array(
                //"1752",
                "name" =>"Clare",
                "country_id" =>"105"
            ),
            array(
                //"1753",
                "name" =>"Cork",
                "country_id" =>"105"
            ),
            array(
                //"1754",
                "name" =>"Donegal",
                "country_id" =>"105"
            ),
            array(
                //"1755",
                "name" =>"Dublin",
                "country_id" =>"105"
            ),
            array(
                //"1756",
                "name" =>"Galway",
                "country_id" =>"105"
            ),
            array(
                //"1757",
                "name" =>"Kerry",
                "country_id" =>"105"
            ),
            array(
                //"1758",
                "name" =>"Kildare",
                "country_id" =>"105"
            ),
            array(
                //"1759",
                "name" =>"Kilkenny",
                "country_id" =>"105"
            ),
            array(
                //"1760",
                "name" =>"Laois",
                "country_id" =>"105"
            ),
            array(
                //"1761",
                "name" =>"Leinster",
                "country_id" =>"105"
            ),
            array(
                //"1762",
                "name" =>"Leitrim",
                "country_id" =>"105"
            ),
            array(
                //"1763",
                "name" =>"Limerick",
                "country_id" =>"105"
            ),
            array(
                //"1764",
                "name" =>"Loch Garman",
                "country_id" =>"105"
            ),
            array(
                //"1765",
                "name" =>"Longford",
                "country_id" =>"105"
            ),
            array(
                //"1766",
                "name" =>"Louth",
                "country_id" =>"105"
            ),
            array(
                //"1767",
                "name" =>"Mayo",
                "country_id" =>"105"
            ),
            array(
                //"1768",
                "name" =>"Meath",
                "country_id" =>"105"
            ),
            array(
                //"1769",
                "name" =>"Monaghan",
                "country_id" =>"105"
            ),
            array(
                //"1770",
                "name" =>"Offaly",
                "country_id" =>"105"
            ),
            array(
                //"1771",
                "name" =>"Roscommon",
                "country_id" =>"105"
            ),
            array(
                //"1772",
                "name" =>"Sligo",
                "country_id" =>"105"
            ),
            array(
                //"1773",
                "name" =>"Tipperary North Riding",
                "country_id" =>"105"
            ),
            array(
                //"1774",
                "name" =>"Tipperary South Riding",
                "country_id" =>"105"
            ),
            array(
                //"1775",
                "name" =>"Ulster",
                "country_id" =>"105"
            ),
            array(
                //"1776",
                "name" =>"Waterford",
                "country_id" =>"105"
            ),
            array(
                //"1777",
                "name" =>"Westmeath",
                "country_id" =>"105"
            ),
            array(
                //"1778",
                "name" =>"Wexford",
                "country_id" =>"105"
            ),
            array(
                //"1779",
                "name" =>"Wicklow",
                "country_id" =>"105"
            ),
            array(
                //"1780",
                "name" =>"Beit Hanania",
                "country_id" =>"106"
            ),
            array(
                //"1781",
                "name" =>"Ben Gurion Airport",
                "country_id" =>"106"
            ),
            array(
                //"1782",
                "name" =>"Bethlehem",
                "country_id" =>"106"
            ),
            array(
                //"1783",
                "name" =>"Caesarea",
                "country_id" =>"106"
            ),
            array(
                //"1784",
                "name" =>"Centre",
                "country_id" =>"106"
            ),
            array(
                //"1785",
                "name" =>"Gaza",
                "country_id" =>"106"
            ),
            array(
                //"1786",
                "name" =>"Hadaron",
                "country_id" =>"106"
            ),
            array(
                //"1787",
                "name" =>"Haifa District",
                "country_id" =>"106"
            ),
            array(
                //"1788",
                "name" =>"Hamerkaz",
                "country_id" =>"106"
            ),
            array(
                //"1789",
                "name" =>"Hazafon",
                "country_id" =>"106"
            ),
            array(
                //"1790",
                "name" =>"Hebron",
                "country_id" =>"106"
            ),
            array(
                //"1791",
                "name" =>"Jaffa",
                "country_id" =>"106"
            ),
            array(
                //"1792",
                "name" =>"Jerusalem",
                "country_id" =>"106"
            ),
            array(
                //"1793",
                "name" =>"Khefa",
                "country_id" =>"106"
            ),
            array(
                //"1794",
                "name" =>"Kiryat Yam",
                "country_id" =>"106"
            ),
            array(
                //"1795",
                "name" =>"Lower Galilee",
                "country_id" =>"106"
            ),
            array(
                //"1796",
                "name" =>"Qalqilya",
                "country_id" =>"106"
            ),
            array(
                //"1797",
                "name" =>"Talme Elazar",
                "country_id" =>"106"
            ),
            array(
                //"1798",
                "name" =>"Tel Aviv",
                "country_id" =>"106"
            ),
            array(
                //"1799",
                "name" =>"Tsafon",
                "country_id" =>"106"
            ),
            array(
                //"1800",
                "name" =>"Umm El Fahem",
                "country_id" =>"106"
            ),
            array(
                //"1801",
                "name" =>"Yerushalayim",
                "country_id" =>"106"
            ),
            array(
                //"1802",
                "name" =>"Abruzzi",
                "country_id" =>"107"
            ),
            array(
                //"1803",
                "name" =>"Abruzzo",
                "country_id" =>"107"
            ),
            array(
                //"1804",
                "name" =>"Agrigento",
                "country_id" =>"107"
            ),
            array(
                //"1805",
                "name" =>"Alessandria",
                "country_id" =>"107"
            ),
            array(
                //"1806",
                "name" =>"Ancona",
                "country_id" =>"107"
            ),
            array(
                //"1807",
                "name" =>"Arezzo",
                "country_id" =>"107"
            ),
            array(
                //"1808",
                "name" =>"Ascoli Piceno",
                "country_id" =>"107"
            ),
            array(
                //"1809",
                "name" =>"Asti",
                "country_id" =>"107"
            ),
            array(
                //"1810",
                "name" =>"Avellino",
                "country_id" =>"107"
            ),
            array(
                //"1811",
                "name" =>"Bari",
                "country_id" =>"107"
            ),
            array(
                //"1812",
                "name" =>"Basilicata",
                "country_id" =>"107"
            ),
            array(
                //"1813",
                "name" =>"Belluno",
                "country_id" =>"107"
            ),
            array(
                //"1814",
                "name" =>"Benevento",
                "country_id" =>"107"
            ),
            array(
                //"1815",
                "name" =>"Bergamo",
                "country_id" =>"107"
            ),
            array(
                //"1816",
                "name" =>"Biella",
                "country_id" =>"107"
            ),
            array(
                //"1817",
                "name" =>"Bologna",
                "country_id" =>"107"
            ),
            array(
                //"1818",
                "name" =>"Bolzano",
                "country_id" =>"107"
            ),
            array(
                //"1819",
                "name" =>"Brescia",
                "country_id" =>"107"
            ),
            array(
                //"1820",
                "name" =>"Brindisi",
                "country_id" =>"107"
            ),
            array(
                //"1821",
                "name" =>"Calabria",
                "country_id" =>"107"
            ),
            array(
                //"1822",
                "name" =>"Campania",
                "country_id" =>"107"
            ),
            array(
                //"1823",
                "name" =>"Cartoceto",
                "country_id" =>"107"
            ),
            array(
                //"1824",
                "name" =>"Caserta",
                "country_id" =>"107"
            ),
            array(
                //"1825",
                "name" =>"Catania",
                "country_id" =>"107"
            ),
            array(
                //"1826",
                "name" =>"Chieti",
                "country_id" =>"107"
            ),
            array(
                //"1827",
                "name" =>"Como",
                "country_id" =>"107"
            ),
            array(
                //"1828",
                "name" =>"Cosenza",
                "country_id" =>"107"
            ),
            array(
                //"1829",
                "name" =>"Cremona",
                "country_id" =>"107"
            ),
            array(
                //"1830",
                "name" =>"Cuneo",
                "country_id" =>"107"
            ),
            array(
                //"1831",
                "name" =>"Emilia-Romagna",
                "country_id" =>"107"
            ),
            array(
                //"1832",
                "name" =>"Ferrara",
                "country_id" =>"107"
            ),
            array(
                //"1833",
                "name" =>"Firenze",
                "country_id" =>"107"
            ),
            array(
                //"1834",
                "name" =>"Florence",
                "country_id" =>"107"
            ),
            array(
                //"1835",
                "name" =>"Forli-Cesena",
                "country_id" =>"107"
            ),
            array(
                //"1836",
                "name" =>"Friuli-Venezia Giulia",
                "country_id" =>"107"
            ),
            array(
                //"1837",
                "name" =>"Frosinone",
                "country_id" =>"107"
            ),
            array(
                //"1838",
                "name" =>"Genoa",
                "country_id" =>"107"
            ),
            array(
                //"1839",
                "name" =>"Gorizia",
                "country_id" =>"107"
            ),
            array(
                //"1840",
                "name" =>"L''Aquila",
                "country_id" =>"107"
            ),
            array(
                //"1841",
                "name" =>"Lazio",
                "country_id" =>"107"
            ),
            array(
                //"1842",
                "name" =>"Lecce",
                "country_id" =>"107"
            ),
            array(
                //"1843",
                "name" =>"Lecco",
                "country_id" =>"107"
            ),
            array(
                //"1844",
                "name" =>"Lecco Province",
                "country_id" =>"107"
            ),
            array(
                //"1845",
                "name" =>"Liguria",
                "country_id" =>"107"
            ),
            array(
                //"1846",
                "name" =>"Lodi",
                "country_id" =>"107"
            ),
            array(
                //"1847",
                "name" =>"Lombardia",
                "country_id" =>"107"
            ),
            array(
                //"1848",
                "name" =>"Lombardy",
                "country_id" =>"107"
            ),
            array(
                //"1849",
                "name" =>"Macerata",
                "country_id" =>"107"
            ),
            array(
                //"1850",
                "name" =>"Mantova",
                "country_id" =>"107"
            ),
            array(
                //"1851",
                "name" =>"Marche",
                "country_id" =>"107"
            ),
            array(
                //"1852",
                "name" =>"Messina",
                "country_id" =>"107"
            ),
            array(
                //"1853",
                "name" =>"Milan",
                "country_id" =>"107"
            ),
            array(
                //"1854",
                "name" =>"Modena",
                "country_id" =>"107"
            ),
            array(
                //"1855",
                "name" =>"Molise",
                "country_id" =>"107"
            ),
            array(
                //"1856",
                "name" =>"Molteno",
                "country_id" =>"107"
            ),
            array(
                //"1857",
                "name" =>"Montenegro",
                "country_id" =>"107"
            ),
            array(
                //"1858",
                "name" =>"Monza and Brianza",
                "country_id" =>"107"
            ),
            array(
                //"1859",
                "name" =>"Naples",
                "country_id" =>"107"
            ),
            array(
                //"1860",
                "name" =>"Novara",
                "country_id" =>"107"
            ),
            array(
                //"1861",
                "name" =>"Padova",
                "country_id" =>"107"
            ),
            array(
                //"1862",
                "name" =>"Parma",
                "country_id" =>"107"
            ),
            array(
                //"1863",
                "name" =>"Pavia",
                "country_id" =>"107"
            ),
            array(
                //"1864",
                "name" =>"Perugia",
                "country_id" =>"107"
            ),
            array(
                //"1865",
                "name" =>"Pesaro-Urbino",
                "country_id" =>"107"
            ),
            array(
                //"1866",
                "name" =>"Piacenza",
                "country_id" =>"107"
            ),
            array(
                //"1867",
                "name" =>"Piedmont",
                "country_id" =>"107"
            ),
            array(
                //"1868",
                "name" =>"Piemonte",
                "country_id" =>"107"
            ),
            array(
                //"1869",
                "name" =>"Pisa",
                "country_id" =>"107"
            ),
            array(
                //"1870",
                "name" =>"Pordenone",
                "country_id" =>"107"
            ),
            array(
                //"1871",
                "name" =>"Potenza",
                "country_id" =>"107"
            ),
            array(
                //"1872",
                "name" =>"Puglia",
                "country_id" =>"107"
            ),
            array(
                //"1873",
                "name" =>"Reggio Emilia",
                "country_id" =>"107"
            ),
            array(
                //"1874",
                "name" =>"Rimini",
                "country_id" =>"107"
            ),
            array(
                //"1875",
                "name" =>"Roma",
                "country_id" =>"107"
            ),
            array(
                //"1876",
                "name" =>"Salerno",
                "country_id" =>"107"
            ),
            array(
                //"1877",
                "name" =>"Sardegna",
                "country_id" =>"107"
            ),
            array(
                //"1878",
                "name" =>"Sassari",
                "country_id" =>"107"
            ),
            array(
                //"1879",
                "name" =>"Savona",
                "country_id" =>"107"
            ),
            array(
                //"1880",
                "name" =>"Sicilia",
                "country_id" =>"107"
            ),
            array(
                //"1881",
                "name" =>"Siena",
                "country_id" =>"107"
            ),
            array(
                //"1882",
                "name" =>"Sondrio",
                "country_id" =>"107"
            ),
            array(
                //"1883",
                "name" =>"South Tyrol",
                "country_id" =>"107"
            ),
            array(
                //"1884",
                "name" =>"Taranto",
                "country_id" =>"107"
            ),
            array(
                //"1885",
                "name" =>"Teramo",
                "country_id" =>"107"
            ),
            array(
                //"1886",
                "name" =>"Torino",
                "country_id" =>"107"
            ),
            array(
                //"1887",
                "name" =>"Toscana",
                "country_id" =>"107"
            ),
            array(
                //"1888",
                "name" =>"Trapani",
                "country_id" =>"107"
            ),
            array(
                //"1889",
                "name" =>"Trentino-Alto Adige",
                "country_id" =>"107"
            ),
            array(
                //"1890",
                "name" =>"Trento",
                "country_id" =>"107"
            ),
            array(
                //"1891",
                "name" =>"Treviso",
                "country_id" =>"107"
            ),
            array(
                //"1892",
                "name" =>"Udine",
                "country_id" =>"107"
            ),
            array(
                //"1893",
                "name" =>"Umbria",
                "country_id" =>"107"
            ),
            array(
                //"1894",
                "name" =>"Valle d''Aosta",
                "country_id" =>"107"
            ),
            array(
                //"1895",
                "name" =>"Varese",
                "country_id" =>"107"
            ),
            array(
                //"1896",
                "name" =>"Veneto",
                "country_id" =>"107"
            ),
            array(
                //"1897",
                "name" =>"Venezia",
                "country_id" =>"107"
            ),
            array(
                //"1898",
                "name" =>"Verbano-Cusio-Ossola",
                "country_id" =>"107"
            ),
            array(
                //"1899",
                "name" =>"Vercelli",
                "country_id" =>"107"
            ),
            array(
                //"1900",
                "name" =>"Verona",
                "country_id" =>"107"
            ),
            array(
                //"1901",
                "name" =>"Vicenza",
                "country_id" =>"107"
            ),
            array(
                //"1902",
                "name" =>"Viterbo",
                "country_id" =>"107"
            ),
            array(
                //"1903",
                "name" =>"Buxoro Viloyati",
                "country_id" =>"108"
            ),
            array(
                //"1904",
                "name" =>"Clarendon",
                "country_id" =>"108"
            ),
            array(
                //"1905",
                "name" =>"Hanover",
                "country_id" =>"108"
            ),
            array(
                //"1906",
                "name" =>"Kingston",
                "country_id" =>"108"
            ),
            array(
                //"1907",
                "name" =>"Manchester",
                "country_id" =>"108"
            ),
            array(
                //"1908",
                "name" =>"Portland",
                "country_id" =>"108"
            ),
            array(
                //"1909",
                "name" =>"Saint Andrews",
                "country_id" =>"108"
            ),
            array(
                //"1910",
                "name" =>"Saint Ann",
                "country_id" =>"108"
            ),
            array(
                //"1911",
                "name" =>"Saint Catherine",
                "country_id" =>"108"
            ),
            array(
                //"1912",
                "name" =>"Saint Elizabeth",
                "country_id" =>"108"
            ),
            array(
                //"1913",
                "name" =>"Saint James",
                "country_id" =>"108"
            ),
            array(
                //"1914",
                "name" =>"Saint Mary",
                "country_id" =>"108"
            ),
            array(
                //"1915",
                "name" =>"Saint Thomas",
                "country_id" =>"108"
            ),
            array(
                //"1916",
                "name" =>"Trelawney",
                "country_id" =>"108"
            ),
            array(
                //"1917",
                "name" =>"Westmoreland",
                "country_id" =>"108"
            ),
            array(
                //"1918",
                "name" =>"Aichi",
                "country_id" =>"109"
            ),
            array(
                //"1919",
                "name" =>"Akita",
                "country_id" =>"109"
            ),
            array(
                //"1920",
                "name" =>"Aomori",
                "country_id" =>"109"
            ),
            array(
                //"1921",
                "name" =>"Chiba",
                "country_id" =>"109"
            ),
            array(
                //"1922",
                "name" =>"Ehime",
                "country_id" =>"109"
            ),
            array(
                //"1923",
                "name" =>"Fukui",
                "country_id" =>"109"
            ),
            array(
                //"1924",
                "name" =>"Fukuoka",
                "country_id" =>"109"
            ),
            array(
                //"1925",
                "name" =>"Fukushima",
                "country_id" =>"109"
            ),
            array(
                //"1926",
                "name" =>"Gifu",
                "country_id" =>"109"
            ),
            array(
                //"1927",
                "name" =>"Gumma",
                "country_id" =>"109"
            ),
            array(
                //"1928",
                "name" =>"Hiroshima",
                "country_id" =>"109"
            ),
            array(
                //"1929",
                "name" =>"Hokkaido",
                "country_id" =>"109"
            ),
            array(
                //"1930",
                "name" =>"Hyogo",
                "country_id" =>"109"
            ),
            array(
                //"1931",
                "name" =>"Ibaraki",
                "country_id" =>"109"
            ),
            array(
                //"1932",
                "name" =>"Ishikawa",
                "country_id" =>"109"
            ),
            array(
                //"1933",
                "name" =>"Iwate",
                "country_id" =>"109"
            ),
            array(
                //"1934",
                "name" =>"Kagawa",
                "country_id" =>"109"
            ),
            array(
                //"1935",
                "name" =>"Kagoshima",
                "country_id" =>"109"
            ),
            array(
                //"1936",
                "name" =>"Kanagawa",
                "country_id" =>"109"
            ),
            array(
                //"1937",
                "name" =>"Kanto",
                "country_id" =>"109"
            ),
            array(
                //"1938",
                "name" =>"Kochi",
                "country_id" =>"109"
            ),
            array(
                //"1939",
                "name" =>"Kumamoto",
                "country_id" =>"109"
            ),
            array(
                //"1940",
                "name" =>"Kyoto",
                "country_id" =>"109"
            ),
            array(
                //"1941",
                "name" =>"Mie",
                "country_id" =>"109"
            ),
            array(
                //"1942",
                "name" =>"Miyagi",
                "country_id" =>"109"
            ),
            array(
                //"1943",
                "name" =>"Miyazaki",
                "country_id" =>"109"
            ),
            array(
                //"1944",
                "name" =>"Nagano",
                "country_id" =>"109"
            ),
            array(
                //"1945",
                "name" =>"Nagasaki",
                "country_id" =>"109"
            ),
            array(
                //"1946",
                "name" =>"Nara",
                "country_id" =>"109"
            ),
            array(
                //"1947",
                "name" =>"Niigata",
                "country_id" =>"109"
            ),
            array(
                //"1948",
                "name" =>"Oita",
                "country_id" =>"109"
            ),
            array(
                //"1949",
                "name" =>"Okayama",
                "country_id" =>"109"
            ),
            array(
                //"1950",
                "name" =>"Okinawa",
                "country_id" =>"109"
            ),
            array(
                //"1951",
                "name" =>"Osaka",
                "country_id" =>"109"
            ),
            array(
                //"1952",
                "name" =>"Saga",
                "country_id" =>"109"
            ),
            array(
                //"1953",
                "name" =>"Saitama",
                "country_id" =>"109"
            ),
            array(
                //"1954",
                "name" =>"Shiga",
                "country_id" =>"109"
            ),
            array(
                //"1955",
                "name" =>"Shimane",
                "country_id" =>"109"
            ),
            array(
                //"1956",
                "name" =>"Shizuoka",
                "country_id" =>"109"
            ),
            array(
                //"1957",
                "name" =>"Tochigi",
                "country_id" =>"109"
            ),
            array(
                //"1958",
                "name" =>"Tokushima",
                "country_id" =>"109"
            ),
            array(
                //"1959",
                "name" =>"Tokyo",
                "country_id" =>"109"
            ),
            array(
                //"1960",
                "name" =>"Tottori",
                "country_id" =>"109"
            ),
            array(
                //"1961",
                "name" =>"Toyama",
                "country_id" =>"109"
            ),
            array(
                //"1962",
                "name" =>"Wakayama",
                "country_id" =>"109"
            ),
            array(
                //"1963",
                "name" =>"Yamagata",
                "country_id" =>"109"
            ),
            array(
                //"1964",
                "name" =>"Yamaguchi",
                "country_id" =>"109"
            ),
            array(
                //"1965",
                "name" =>"Yamanashi",
                "country_id" =>"109"
            ),
            array(
                //"1966",
                "name" =>"Grouville",
                "country_id" =>"110"
            ),
            array(
                //"1967",
                "name" =>"Saint Brelade",
                "country_id" =>"110"
            ),
            array(
                //"1968",
                "name" =>"Saint Clement",
                "country_id" =>"110"
            ),
            array(
                //"1969",
                "name" =>"Saint Helier",
                "country_id" =>"110"
            ),
            array(
                //"1970",
                "name" =>"Saint John",
                "country_id" =>"110"
            ),
            array(
                //"1971",
                "name" =>"Saint Lawrence",
                "country_id" =>"110"
            ),
            array(
                //"1972",
                "name" =>"Saint Martin",
                "country_id" =>"110"
            ),
            array(
                //"1973",
                "name" =>"Saint Mary",
                "country_id" =>"110"
            ),
            array(
                //"1974",
                "name" =>"Saint Peter",
                "country_id" =>"110"
            ),
            array(
                //"1975",
                "name" =>"Saint Saviour",
                "country_id" =>"110"
            ),
            array(
                //"1976",
                "name" =>"Trinity",
                "country_id" =>"110"
            ),
            array(
                //"1977",
                "name" =>"Ajlun",
                "country_id" =>"111"
            ),
            array(
                //"1978",
                "name" =>"Amman",
                "country_id" =>"111"
            ),
            array(
                //"1979",
                "name" =>"Irbid",
                "country_id" =>"111"
            ),
            array(
                //"1980",
                "name" =>"Jarash",
                "country_id" =>"111"
            ),
            array(
                //"1981",
                "name" =>"Ma''an",
                "country_id" =>"111"
            ),
            array(
                //"1982",
                "name" =>"Madaba",
                "country_id" =>"111"
            ),
            array(
                //"1983",
                "name" =>"al-''Aqabah",
                "country_id" =>"111"
            ),
            array(
                //"1984",
                "name" =>"al-Balqa",
                "country_id" =>"111"
            ),
            array(
                //"1985",
                "name" =>"al-Karak",
                "country_id" =>"111"
            ),
            array(
                //"1986",
                "name" =>"al-Mafraq",
                "country_id" =>"111"
            ),
            array(
                //"1987",
                "name" =>"at-Tafilah",
                "country_id" =>"111"
            ),
            array(
                //"1988",
                "name" =>"az-Zarqa",
                "country_id" =>"111"
            ),
            array(
                //"1989",
                "name" =>"Akmecet",
                "country_id" =>"112"
            ),
            array(
                //"1990",
                "name" =>"Akmola",
                "country_id" =>"112"
            ),
            array(
                //"1991",
                "name" =>"Aktobe",
                "country_id" =>"112"
            ),
            array(
                //"1992",
                "name" =>"Almati",
                "country_id" =>"112"
            ),
            array(
                //"1993",
                "name" =>"Atirau",
                "country_id" =>"112"
            ),
            array(
                //"1994",
                "name" =>"Batis Kazakstan",
                "country_id" =>"112"
            ),
            array(
                //"1995",
                "name" =>"Burlinsky Region",
                "country_id" =>"112"
            ),
            array(
                //"1996",
                "name" =>"Karagandi",
                "country_id" =>"112"
            ),
            array(
                //"1997",
                "name" =>"Kostanay",
                "country_id" =>"112"
            ),
            array(
                //"1998",
                "name" =>"Mankistau",
                "country_id" =>"112"
            ),
            array(
                //"1999",
                "name" =>"Ontustik Kazakstan",
                "country_id" =>"112"
            ),
            array(
                //"2000",
                "name" =>"Pavlodar",
                "country_id" =>"112"
            ),
            array(
                //"2001",
                "name" =>"Sigis Kazakstan",
                "country_id" =>"112"
            ),
            array(
                //"2002",
                "name" =>"Soltustik Kazakstan",
                "country_id" =>"112"
            ),
            array(
                //"2003",
                "name" =>"Taraz",
                "country_id" =>"112"
            ),
            array(
                //"2004",
                "name" =>"Central",
                "country_id" =>"113"
            ),
            array(
                //"2005",
                "name" =>"Coast",
                "country_id" =>"113"
            ),
            array(
                //"2006",
                "name" =>"Eastern",
                "country_id" =>"113"
            ),
            array(
                //"2007",
                "name" =>"Nairobi",
                "country_id" =>"113"
            ),
            array(
                //"2008",
                "name" =>"North Eastern",
                "country_id" =>"113"
            ),
            array(
                //"2009",
                "name" =>"Nyanza",
                "country_id" =>"113"
            ),
            array(
                //"2010",
                "name" =>"Rift Valley",
                "country_id" =>"113"
            ),
        ));

        //2011-2200
        DB::table('states')->insert(array(
            array(
                //"2011",
                "name" =>"Western",
                "country_id" =>"113"
            ),
            array(
                //"2012",
                "name" =>"Abaiang",
                "country_id" =>"114"
            ),
            array(
                //"2013",
                "name" =>"Abemana",
                "country_id" =>"114"
            ),
            array(
                //"2014",
                "name" =>"Aranuka",
                "country_id" =>"114"
            ),
            array(
                //"2015",
                "name" =>"Arorae",
                "country_id" =>"114"
            ),
            array(
                //"2016",
                "name" =>"Banaba",
                "country_id" =>"114"
            ),
            array(
                //"2017",
                "name" =>"Beru",
                "country_id" =>"114"
            ),
            array(
                //"2018",
                "name" =>"Butaritari",
                "country_id" =>"114"
            ),
            array(
                //"2019",
                "name" =>"Kiritimati",
                "country_id" =>"114"
            ),
            array(
                //"2020",
                "name" =>"Kuria",
                "country_id" =>"114"
            ),
            array(
                //"2021",
                "name" =>"Maiana",
                "country_id" =>"114"
            ),
            array(
                //"2022",
                "name" =>"Makin",
                "country_id" =>"114"
            ),
            array(
                //"2023",
                "name" =>"Marakei",
                "country_id" =>"114"
            ),
            array(
                //"2024",
                "name" =>"Nikunau",
                "country_id" =>"114"
            ),
            array(
                //"2025",
                "name" =>"Nonouti",
                "country_id" =>"114"
            ),
            array(
                //"2026",
                "name" =>"Onotoa",
                "country_id" =>"114"
            ),
            array(
                //"2027",
                "name" =>"Phoenix Islands",
                "country_id" =>"114"
            ),
            array(
                //"2028",
                "name" =>"Tabiteuea North",
                "country_id" =>"114"
            ),
            array(
                //"2029",
                "name" =>"Tabiteuea South",
                "country_id" =>"114"
            ),
            array(
                //"2030",
                "name" =>"Tabuaeran",
                "country_id" =>"114"
            ),
            array(
                //"2031",
                "name" =>"Tamana",
                "country_id" =>"114"
            ),
            array(
                //"2032",
                "name" =>"Tarawa North",
                "country_id" =>"114"
            ),
            array(
                //"2033",
                "name" =>"Tarawa South",
                "country_id" =>"114"
            ),
            array(
                //"2034",
                "name" =>"Teraina",
                "country_id" =>"114"
            ),
            array(
                //"2035",
                "name" =>"Chagangdo",
                "country_id" =>"115"
            ),
            array(
                //"2036",
                "name" =>"Hamgyeongbukto",
                "country_id" =>"115"
            ),
            array(
                //"2037",
                "name" =>"Hamgyeongnamdo",
                "country_id" =>"115"
            ),
            array(
                //"2038",
                "name" =>"Hwanghaebukto",
                "country_id" =>"115"
            ),
            array(
                //"2039",
                "name" =>"Hwanghaenamdo",
                "country_id" =>"115"
            ),
            array(
                //"2040",
                "name" =>"Kaeseong",
                "country_id" =>"115"
            ),
            array(
                //"2041",
                "name" =>"Kangweon",
                "country_id" =>"115"
            ),
            array(
                //"2042",
                "name" =>"Nampo",
                "country_id" =>"115"
            ),
            array(
                //"2043",
                "name" =>"Pyeonganbukto",
                "country_id" =>"115"
            ),
            array(
                //"2044",
                "name" =>"Pyeongannamdo",
                "country_id" =>"115"
            ),
            array(
                //"2045",
                "name" =>"Pyeongyang",
                "country_id" =>"115"
            ),
            array(
                //"2046",
                "name" =>"Yanggang",
                "country_id" =>"115"
            ),
            array(
                //"2047",
                "name" =>"Busan",
                "country_id" =>"116"
            ),
            array(
                //"2048",
                "name" =>"Cheju",
                "country_id" =>"116"
            ),
            array(
                //"2049",
                "name" =>"Chollabuk",
                "country_id" =>"116"
            ),
            array(
                //"2050",
                "name" =>"Chollanam",
                "country_id" =>"116"
            ),
            array(
                //"2051",
                "name" =>"Chungbuk",
                "country_id" =>"116"
            ),
            array(
                //"2052",
                "name" =>"Chungcheongbuk",
                "country_id" =>"116"
            ),
            array(
                //"2053",
                "name" =>"Chungcheongnam",
                "country_id" =>"116"
            ),
            array(
                //"2054",
                "name" =>"Chungnam",
                "country_id" =>"116"
            ),
            array(
                //"2055",
                "name" =>"Daegu",
                "country_id" =>"116"
            ),
            array(
                //"2056",
                "name" =>"Gangwon-do",
                "country_id" =>"116"
            ),
            array(
                //"2057",
                "name" =>"Goyang-si",
                "country_id" =>"116"
            ),
            array(
                //"2058",
                "name" =>"Gyeonggi-do",
                "country_id" =>"116"
            ),
            array(
                //"2059",
                "name" =>"Gyeongsang",
                "country_id" =>"116"
            ),
            array(
                //"2060",
                "name" =>"Gyeongsangnam-do",
                "country_id" =>"116"
            ),
            array(
                //"2061",
                "name" =>"Incheon",
                "country_id" =>"116"
            ),
            array(
                //"2062",
                "name" =>"Jeju-Si",
                "country_id" =>"116"
            ),
            array(
                //"2063",
                "name" =>"Jeonbuk",
                "country_id" =>"116"
            ),
            array(
                //"2064",
                "name" =>"Kangweon",
                "country_id" =>"116"
            ),
            array(
                //"2065",
                "name" =>"Kwangju",
                "country_id" =>"116"
            ),
            array(
                //"2066",
                "name" =>"Kyeonggi",
                "country_id" =>"116"
            ),
            array(
                //"2067",
                "name" =>"Kyeongsangbuk",
                "country_id" =>"116"
            ),
            array(
                //"2068",
                "name" =>"Kyeongsangnam",
                "country_id" =>"116"
            ),
            array(
                //"2069",
                "name" =>"Kyonggi-do",
                "country_id" =>"116"
            ),
            array(
                //"2070",
                "name" =>"Kyungbuk-Do",
                "country_id" =>"116"
            ),
            array(
                //"2071",
                "name" =>"Kyunggi-Do",
                "country_id" =>"116"
            ),
            array(
                //"2072",
                "name" =>"Kyunggi-do",
                "country_id" =>"116"
            ),
            array(
                //"2073",
                "name" =>"Pusan",
                "country_id" =>"116"
            ),
            array(
                //"2074",
                "name" =>"Seoul",
                "country_id" =>"116"
            ),
            array(
                //"2075",
                "name" =>"Sudogwon",
                "country_id" =>"116"
            ),
            array(
                //"2076",
                "name" =>"Taegu",
                "country_id" =>"116"
            ),
            array(
                //"2077",
                "name" =>"Taejeon",
                "country_id" =>"116"
            ),
            array(
                //"2078",
                "name" =>"Taejon-gwangyoksi",
                "country_id" =>"116"
            ),
            array(
                //"2079",
                "name" =>"Ulsan",
                "country_id" =>"116"
            ),
            array(
                //"2080",
                "name" =>"Wonju",
                "country_id" =>"116"
            ),
            array(
                //"2081",
                "name" =>"gwangyoksi",
                "country_id" =>"116"
            ),
            array(
                //"2082",
                "name" =>"Al Asimah",
                "country_id" =>"117"
            ),
            array(
                //"2083",
                "name" =>"Hawalli",
                "country_id" =>"117"
            ),
            array(
                //"2084",
                "name" =>"Mishref",
                "country_id" =>"117"
            ),
            array(
                //"2085",
                "name" =>"Qadesiya",
                "country_id" =>"117"
            ),
            array(
                //"2086",
                "name" =>"Safat",
                "country_id" =>"117"
            ),
            array(
                //"2087",
                "name" =>"Salmiya",
                "country_id" =>"117"
            ),
            array(
                //"2088",
                "name" =>"al-Ahmadi",
                "country_id" =>"117"
            ),
            array(
                //"2089",
                "name" =>"al-Farwaniyah",
                "country_id" =>"117"
            ),
            array(
                //"2090",
                "name" =>"al-Jahra",
                "country_id" =>"117"
            ),
            array(
                //"2091",
                "name" =>"al-Kuwayt",
                "country_id" =>"117"
            ),
            array(
                //"2092",
                "name" =>"Batken",
                "country_id" =>"118"
            ),
            array(
                //"2093",
                "name" =>"Bishkek",
                "country_id" =>"118"
            ),
            array(
                //"2094",
                "name" =>"Chui",
                "country_id" =>"118"
            ),
            array(
                //"2095",
                "name" =>"Issyk-Kul",
                "country_id" =>"118"
            ),
            array(
                //"2096",
                "name" =>"Jalal-Abad",
                "country_id" =>"118"
            ),
            array(
                //"2097",
                "name" =>"Naryn",
                "country_id" =>"118"
            ),
            array(
                //"2098",
                "name" =>"Osh",
                "country_id" =>"118"
            ),
            array(
                //"2099",
                "name" =>"Talas",
                "country_id" =>"118"
            ),
            array(
                //"2100",
                "name" =>"Attopu",
                "country_id" =>"119"
            ),

            array(
                //"2101",
                "name" =>"Bokeo",
                "country_id" =>"119"
            ),
            array(
                //"2102",
                "name" =>"Bolikhamsay",
                "country_id" =>"119"
            ),
            array(
                //"2103",
                "name" =>"Champasak",
                "country_id" =>"119"
            ),
            array(
                //"2104",
                "name" =>"Houaphanh",
                "country_id" =>"119"
            ),
            array(
                //"2105",
                "name" =>"Khammouane",
                "country_id" =>"119"
            ),
            array(
                //"2106",
                "name" =>"Luang Nam Tha",
                "country_id" =>"119"
            ),
            array(
                //"2107",
                "name" =>"Luang Prabang",
                "country_id" =>"119"
            ),
            array(
                //"2108",
                "name" =>"Oudomxay",
                "country_id" =>"119"
            ),
            array(
                //"2109",
                "name" =>"Phongsaly",
                "country_id" =>"119"
            ),
            array(
                //"2110",
                "name" =>"Saravan",
                "country_id" =>"119"
            ),
            array(
                //"2111",
                "name" =>"Savannakhet",
                "country_id" =>"119"
            ),
            array(
                //"2112",
                "name" =>"Sekong",
                "country_id" =>"119"
            ),
            array(
                //"2113",
                "name" =>"Viangchan Prefecture",
                "country_id" =>"119"
            ),
            array(
                //"2114",
                "name" =>"Viangchan Province",
                "country_id" =>"119"
            ),
            array(
                //"2115",
                "name" =>"Xaignabury",
                "country_id" =>"119"
            ),
            array(
                //"2116",
                "name" =>"Xiang Khuang",
                "country_id" =>"119"
            ),

            array(
                //"2117",
                "name" =>"Aizkraukles",
                "country_id" =>"120"
            ),
            array(
                //"2118",
                "name" =>"Aluksnes",
                "country_id" =>"120"
            ),
            array(
                //"2119",
                "name" =>"Balvu",
                "country_id" =>"120"
            ),
            array(
                //"2120",
                "name" =>"Bauskas",
                "country_id" =>"120"
            ),
        ));

        //2121 - 2150
        DB::table('states')->insert(array(
            array(
                //"2121",
                "name" =>"Cesu",
                "country_id" =>"120"
            ),
            array(
                //"2122",
                "name" =>"Daugavpils",
                "country_id" =>"120"
            ),
            array(
                //"2123",
                "name" =>"Daugavpils City",
                "country_id" =>"120"
            ),
            array(
                //"2124",
                "name" =>"Dobeles",
                "country_id" =>"120"
            ),
            array(
                //"2125",
                "name" =>"Gulbenes",
                "country_id" =>"120"
            ),
            array(
                //"2126",
                "name" =>"Jekabspils",
                "country_id" =>"120"
            ),
            array(
                //"2127",
                "name" =>"Jelgava",
                "country_id" =>"120"
            ),
            array(
                //"2128",
                "name" =>"Jelgavas",
                "country_id" =>"120"
            ),
            array(
                //"2129",
                "name" =>"Jurmala City",
                "country_id" =>"120"
            ),
            array(
                //"2130",
                "name" =>"Kraslavas",
                "country_id" =>"120"
            ),
            array(
                //"2131",
                "name" =>"Kuldigas",
                "country_id" =>"120"
            ),
            array(
                //"2132",
                "name" =>"Liepaja",
                "country_id" =>"120"
            ),
            array(
                //"2133",
                "name" =>"Liepajas",
                "country_id" =>"120"
            ),
            array(
                //"2134",
                "name" =>"Limbazhu",
                "country_id" =>"120"
            ),
            array(
                //"2135",
                "name" =>"Ludzas",
                "country_id" =>"120"
            ),
            array(
                //"2136",
                "name" =>"Madonas",
                "country_id" =>"120"
            ),
            array(
                //"2137",
                "name" =>"Ogres",
                "country_id" =>"120"
            ),
            array(
                //"2138",
                "name" =>"Preilu",
                "country_id" =>"120"
            ),
            array(
                //"2139",
                "name" =>"Rezekne",
                "country_id" =>"120"
            ),
            array(
                //"2140",
                "name" =>"Rezeknes",
                "country_id" =>"120"
            ),
            array(
                //"2141",
                "name" =>"Riga",
                "country_id" =>"120"
            ),
            array(
                //"2142",
                "name" =>"Rigas",
                "country_id" =>"120"
            ),
            array(
                //"2143",
                "name" =>"Saldus",
                "country_id" =>"120"
            ),
            array(
                //"2144",
                "name" =>"Talsu",
                "country_id" =>"120"
            ),
            array(
                //"2145",
                "name" =>"Tukuma",
                "country_id" =>"120"
            ),
            array(
                //"2146",
                "name" =>"Valkas",
                "country_id" =>"120"
            ),
            array(
                //"2147",
                "name" =>"Valmieras",
                "country_id" =>"120"
            ),
            array(
                //"2148",
                "name" =>"Ventspils",
                "country_id" =>"120"
            ),
            array(
                //"2149",
                "name" =>"Ventspils City",
                "country_id" =>"120"
            ),
            array(
                //"2150",
                "name" =>"Beirut",
                "country_id" =>"121"
            ),
        ));
        //2151 - 2175
        DB::table('states')->insert(array(
            array(
                //"2151",
                "name" =>"Jabal Lubnan",
                "country_id" =>"121"
            ),
            array(
                //"2152",
                "name" =>"Mohafazat Liban-Nord",
                "country_id" =>"121"
            ),
            array(
                //"2153",
                "name" =>"Mohafazat Mont-Liban",
                "country_id" =>"121"
            ),
            array(
                //"2154",
                "name" =>"Sidon",
                "country_id" =>"121"
            ),
            array(
                //"2155",
                "name" =>"al-Biqa",
                "country_id" =>"121"
            ),
            array(
                //"2156",
                "name" =>"al-Janub",
                "country_id" =>"121"
            ),
            array(
                //"2157",
                "name" =>"an-Nabatiyah",
                "country_id" =>"121"
            ),
            array(
                //"2158",
                "name" =>"ash-Shamal",
                "country_id" =>"121"
            ),
            array(
                //"2159",
                "name" =>"Berea",
                "country_id" =>"122"
            ),
            array(
                //"2160",
                "name" =>"Butha-Buthe",
                "country_id" =>"122"
            ),
            array(
                //"2161",
                "name" =>"Leribe",
                "country_id" =>"122"
            ),
            array(
                //"2162",
                "name" =>"Mafeteng",
                "country_id" =>"122"
            ),
            array(
                //"2163",
                "name" =>"Maseru",
                "country_id" =>"122"
            ),
            array(
                //"2164",
                "name" =>"Mohale''s Hoek",
                "country_id" =>"122"
            ),
            array(
                //"2165",
                "name" =>"Mokhotlong",
                "country_id" =>"122"
            ),
            array(
                //"2166",
                "name" =>"Qacha''s Nek",
                "country_id" =>"122"
            ),
            array(
                //"2167",
                "name" =>"Quthing",
                "country_id" =>"122"
            ),
            array(
                //"2168",
                "name" =>"Thaba-Tseka",
                "country_id" =>"122"
            ),
            array(
                //"2169",
                "name" =>"Bomi",
                "country_id" =>"123"
            ),
            array(
                //"2170",
                "name" =>"Bong",
                "country_id" =>"123"
            ),
            array(
                //"2171",
                "name" =>"Grand Bassa",
                "country_id" =>"123"
            ),
            array(
                //"2172",
                "name" =>"Grand Cape Mount",
                "country_id" =>"123"
            ),
            array(
                //"2173",
                "name" =>"Grand Gedeh",
                "country_id" =>"123"
            ),
            array(
                //"2174",
                "name" =>"Loffa",
                "country_id" =>"123"
            ),
            array(
                //"2175",
                "name" =>"Margibi",
                "country_id" =>"123"
            ),
        ));

        //2176 - 2180
        DB::table('states')->insert(array(
            array(
                //"2176",
                "name" =>"Maryland and Grand Kru",
                "country_id" =>"123"
            ),
            array(
                //"2177",
                "name" =>"Montserrado",
                "country_id" =>"123"
            ),
            array(
                //"2178",
                "name" =>"Nimba",
                "country_id" =>"123"
            ),
            array(
                //"2179",
                "name" =>"Rivercess",
                "country_id" =>"123"
            ),
            array(
                //"2180",
                "name" =>"Sinoe",
                "country_id" =>"123"
            ),
        ));

        //2181 - 2183
        DB::table('states')->insert(array(
            array(
                //"2181",
                "name" =>"Ajdabiya",
                "country_id" =>"124"
            ),
            array(
                //"2182",
                "name" =>"Fezzan",
                "country_id" =>"124"
            ),
            array(
                //"2183",
                "name" =>"Banghazi",
                "country_id" =>"124"
            ),
        ));

        //2184 - 2185
        DB::table('states')->insert(array(


            array(
                //"2184",
                "name" =>"Darnah",
                "country_id" =>"124"
            ),
            array(
                //"2185",
                "name" =>"Ghadamis",
                "country_id" =>"124"
            ),
        ));

        //2186 - 2190
        DB::table('states')->insert(array(


            array(
                //"2186",
                "name" =>"Gharyan",
                "country_id" =>"124"
            ),
            array(
                //"2187",
                "name" =>"Misratah",
                "country_id" =>"124"
            ),
            array(
                //"2188",
                "name" =>"Murzuq",
                "country_id" =>"124"
            ),
            array(
                //"2189",
                "name" =>"Sabha",
                "country_id" =>"124"
            ),
            array(
                //"2190",
                "name" =>"Sawfajjin",
                "country_id" =>"124"
            ),
        ));

        //2190 - 2200
        DB::table('states')->insert(array(


            array(
                //"2191",
                "name" =>"Surt",
                "country_id" =>"124"
            ),
            array(
                //"2192",
                "name" =>"Tarabulus",
                "country_id" =>"124"
            ),
            array(
                //"2193",
                "name" =>"Tarhunah",
                "country_id" =>"124"
            ),
            array(
                //"2194",
                "name" =>"Tripolitania",
                "country_id" =>"124"
            ),
            array(
                //"2195",
                "name" =>"Tubruq",
                "country_id" =>"124"
            ),
            array(
                //"2196",
                "name" =>"Yafran",
                "country_id" =>"124"
            ),
            array(
                //"2197",
                "name" =>"Zlitan",
                "country_id" =>"124"
            ),
            array(
                //"2198",
                "name" =>"al-''Aziziyah",
                "country_id" =>"124"
            ),
            array(
                //"2199",
                "name" =>"al-Fatih",
                "country_id" =>"124"
            ),
            array(
                //"2200",
                "name" =>"al-Jabal al Akhdar",
                "country_id" =>"124"
            ),
        ));

        //2201-2250
        DB::table('states')->insert(array(





            array(
                //"2201",
                "name" =>"al-Jufrah",
                "country_id" =>"124"
            ),
            array(
                //"2202",
                "name" =>"al-Khums",
                "country_id" =>"124"
            ),
            array(
                //"2203",
                "name" =>"al-Kufrah",
                "country_id" =>"124"
            ),
            array(
                //"2204",
                "name" =>"an-Nuqat al-Khams",
                "country_id" =>"124"
            ),
            array(
                //"2205",
                "name" =>"ash-Shati",
                "country_id" =>"124"
            ),
            array(
                //"2206",
                "name" =>"az-Zawiyah",
                "country_id" =>"124"
            ),
            array(
                //"2207",
                "name" =>"Balzers",
                "country_id" =>"125"
            ),
            array(
                //"2208",
                "name" =>"Eschen",
                "country_id" =>"125"
            ),
            array(
                //"2209",
                "name" =>"Gamprin",
                "country_id" =>"125"
            ),
            array(
                //"2210",
                "name" =>"Mauren",
                "country_id" =>"125"
            ),
            array(
                //"2211",
                "name" =>"Planken",
                "country_id" =>"125"
            ),
            array(
                //"2212",
                "name" =>"Ruggell",
                "country_id" =>"125"
            ),
            array(
                //"2213",
                "name" =>"Schaan",
                "country_id" =>"125"
            ),
            array(
                //"2214",
                "name" =>"Schellenberg",
                "country_id" =>"125"
            ),
            array(
                //"2215",
                "name" =>"Triesen",
                "country_id" =>"125"
            ),
            array(
                //"2216",
                "name" =>"Triesenberg",
                "country_id" =>"125"
            ),
            array(
                //"2217",
                "name" =>"Vaduz",
                "country_id" =>"125"
            ),
            array(
                //"2218",
                "name" =>"Alytaus",
                "country_id" =>"126"
            ),
            array(
                //"2219",
                "name" =>"Anyksciai",
                "country_id" =>"126"
            ),
            array(
                //"2220",
                "name" =>"Kauno",
                "country_id" =>"126"
            ),
            array(
                //"2221",
                "name" =>"Klaipedos",
                "country_id" =>"126"
            ),
            array(
                //"2222",
                "name" =>"Marijampoles",
                "country_id" =>"126"
            ),
            array(
                //"2223",
                "name" =>"Panevezhio",
                "country_id" =>"126"
            ),
            array(
                //"2224",
                "name" =>"Panevezys",
                "country_id" =>"126"
            ),
            array(
                //"2225",
                "name" =>"Shiauliu",
                "country_id" =>"126"
            ),
            array(
                //"2226",
                "name" =>"Taurages",
                "country_id" =>"126"
            ),
            array(
                //"2227",
                "name" =>"Telshiu",
                "country_id" =>"126"
            ),
            array(
                //"2228",
                "name" =>"Telsiai",
                "country_id" =>"126"
            ),
            array(
                //"2229",
                "name" =>"Utenos",
                "country_id" =>"126"
            ),
            array(
                //"2230",
                "name" =>"Vilniaus",
                "country_id" =>"126"
            ),
            array(
                //"2231",
                "name" =>"Capellen",
                "country_id" =>"127"
            ),
            array(
                //"2232",
                "name" =>"Clervaux",
                "country_id" =>"127"
            ),
            array(
                //"2233",
                "name" =>"Diekirch",
                "country_id" =>"127"
            ),
            array(
                //"2234",
                "name" =>"Echternach",
                "country_id" =>"127"
            ),
            array(
                //"2235",
                "name" =>"Esch-sur-Alzette",
                "country_id" =>"127"
            ),
            array(
                //"2236",
                "name" =>"Grevenmacher",
                "country_id" =>"127"
            ),
            array(
                //"2237",
                "name" =>"Luxembourg",
                "country_id" =>"127"
            ),
            array(
                //"2238",
                "name" =>"Mersch",
                "country_id" =>"127"
            ),
            array(
                //"2239",
                "name" =>"Redange",
                "country_id" =>"127"
            ),
            array(
                //"2240",
                "name" =>"Remich",
                "country_id" =>"127"
            ),
            array(
                //"2241",
                "name" =>"Vianden",
                "country_id" =>"127"
            ),
            array(
                //"2242",
                "name" =>"Wiltz",
                "country_id" =>"127"
            ),
            array(
                //"2243",
                "name" =>"Macau",
                "country_id" =>"128"
            ),
            array(
                //"2244",
                "name" =>"Berovo",
                "country_id" =>"129"
            ),
            array(
                //"2245",
                "name" =>"Bitola",
                "country_id" =>"129"
            ),
            array(
                //"2246",
                "name" =>"Brod",
                "country_id" =>"129"
            ),
            array(
                //"2247",
                "name" =>"Debar",
                "country_id" =>"129"
            ),
            array(
                //"2248",
                "name" =>"Delchevo",
                "country_id" =>"129"
            ),
            array(
                //"2249",
                "name" =>"Demir Hisar",
                "country_id" =>"129"
            ),
            array(
                //"2250",
                "name" =>"Gevgelija",
                "country_id" =>"129"
            ),
        ));

        //2251-2500
        DB::table('states')->insert(array(

            array(
                //"2251",
                "name" =>"Gostivar",
                "country_id" =>"129"
            ),
            array(
                //"2252",
                "name" =>"Kavadarci",
                "country_id" =>"129"
            ),
            array(
                //"2253",
                "name" =>"Kichevo",
                "country_id" =>"129"
            ),
            array(
                //"2254",
                "name" =>"Kochani",
                "country_id" =>"129"
            ),
            array(
                //"2255",
                "name" =>"Kratovo",
                "country_id" =>"129"
            ),
            array(
                //"2256",
                "name" =>"Kriva Palanka",
                "country_id" =>"129"
            ),
            array(
                //"2257",
                "name" =>"Krushevo",
                "country_id" =>"129"
            ),
            array(
                //"2258",
                "name" =>"Kumanovo",
                "country_id" =>"129"
            ),
            array(
                //"2259",
                "name" =>"Negotino",
                "country_id" =>"129"
            ),
            array(
                //"2260",
                "name" =>"Ohrid",
                "country_id" =>"129"
            ),
            array(
                //"2261",
                "name" =>"Prilep",
                "country_id" =>"129"
            ),
            array(
                //"2262",
                "name" =>"Probishtip",
                "country_id" =>"129"
            ),
            array(
                //"2263",
                "name" =>"Radovish",
                "country_id" =>"129"
            ),
            array(
                //"2264",
                "name" =>"Resen",
                "country_id" =>"129"
            ),
            array(
                //"2265",
                "name" =>"Shtip",
                "country_id" =>"129"
            ),
            array(
                //"2266",
                "name" =>"Skopje",
                "country_id" =>"129"
            ),
            array(
                //"2267",
                "name" =>"Struga",
                "country_id" =>"129"
            ),
            array(
                //"2268",
                "name" =>"Strumica",
                "country_id" =>"129"
            ),
            array(
                //"2269",
                "name" =>"Sveti Nikole",
                "country_id" =>"129"
            ),
            array(
                //"2270",
                "name" =>"Tetovo",
                "country_id" =>"129"
            ),
            array(
                //"2271",
                "name" =>"Valandovo",
                "country_id" =>"129"
            ),
            array(
                //"2272",
                "name" =>"Veles",
                "country_id" =>"129"
            ),
            array(
                //"2273",
                "name" =>"Vinica",
                "country_id" =>"129"
            ),
            array(
                //"2274",
                "name" =>"Antananarivo",
                "country_id" =>"130"
            ),
            array(
                //"2275",
                "name" =>"Antsiranana",
                "country_id" =>"130"
            ),
            array(
                //"2276",
                "name" =>"Fianarantsoa",
                "country_id" =>"130"
            ),
            array(
                //"2277",
                "name" =>"Mahajanga",
                "country_id" =>"130"
            ),
            array(
                //"2278",
                "name" =>"Toamasina",
                "country_id" =>"130"
            ),
            array(
                //"2279",
                "name" =>"Toliary",
                "country_id" =>"130"
            ),
            array(
                //"2280",
                "name" =>"Balaka",
                "country_id" =>"131"
            ),
            array(
                //"2281",
                "name" =>"Blantyre City",
                "country_id" =>"131"
            ),
            array(
                //"2282",
                "name" =>"Chikwawa",
                "country_id" =>"131"
            ),
            array(
                //"2283",
                "name" =>"Chiradzulu",
                "country_id" =>"131"
            ),
            array(
                //"2284",
                "name" =>"Chitipa",
                "country_id" =>"131"
            ),
            array(
                //"2285",
                "name" =>"Dedza",
                "country_id" =>"131"
            ),
            array(
                //"2286",
                "name" =>"Dowa",
                "country_id" =>"131"
            ),
            array(
                //"2287",
                "name" =>"Karonga",
                "country_id" =>"131"
            ),
            array(
                //"2288",
                "name" =>"Kasungu",
                "country_id" =>"131"
            ),
            array(
                //"2289",
                "name" =>"Lilongwe City",
                "country_id" =>"131"
            ),
            array(
                //"2290",
                "name" =>"Machinga",
                "country_id" =>"131"
            ),
            array(
                //"2291",
                "name" =>"Mangochi",
                "country_id" =>"131"
            ),
            array(
                //"2292",
                "name" =>"Mchinji",
                "country_id" =>"131"
            ),
            array(
                //"2293",
                "name" =>"Mulanje",
                "country_id" =>"131"
            ),
            array(
                //"2294",
                "name" =>"Mwanza",
                "country_id" =>"131"
            ),
            array(
                //"2295",
                "name" =>"Mzimba",
                "country_id" =>"131"
            ),
            array(
                //"2296",
                "name" =>"Mzuzu City",
                "country_id" =>"131"
            ),
            array(
                //"2297",
                "name" =>"Nkhata Bay",
                "country_id" =>"131"
            ),
            array(
                //"2298",
                "name" =>"Nkhotakota",
                "country_id" =>"131"
            ),
            array(
                //"2299",
                "name" =>"Nsanje",
                "country_id" =>"131"
            ),
            array(
                //"2300",
                "name" =>"Ntcheu",
                "country_id" =>"131"
            ),
            array(
                //"2301",
                "name" =>"Ntchisi",
                "country_id" =>"131"
            ),
            array(
                //"2302",
                "name" =>"Phalombe",
                "country_id" =>"131"
            ),
            array(
                //"2303",
                "name" =>"Rumphi",
                "country_id" =>"131"
            ),
            array(
                //"2304",
                "name" =>"Salima",
                "country_id" =>"131"
            ),
            array(
                //"2305",
                "name" =>"Thyolo",
                "country_id" =>"131"
            ),
            array(
                //"2306",
                "name" =>"Zomba Municipality",
                "country_id" =>"131"
            ),
            array(
                //"2307",
                "name" =>"Johor",
                "country_id" =>"132"
            ),
            array(
                //"2308",
                "name" =>"Kedah",
                "country_id" =>"132"
            ),
            array(
                //"2309",
                "name" =>"Kelantan",
                "country_id" =>"132"
            ),
            array(
                //"2310",
                "name" =>"Kuala Lumpur",
                "country_id" =>"132"
            ),
            array(
                //"2311",
                "name" =>"Labuan",
                "country_id" =>"132"
            ),
            array(
                //"2312",
                "name" =>"Melaka",
                "country_id" =>"132"
            ),
            array(
                //"2313",
                "name" =>"Negeri Johor",
                "country_id" =>"132"
            ),
            array(
                //"2314",
                "name" =>"Negeri Sembilan",
                "country_id" =>"132"
            ),
            array(
                //"2315",
                "name" =>"Pahang",
                "country_id" =>"132"
            ),
            array(
                //"2316",
                "name" =>"Penang",
                "country_id" =>"132"
            ),
            array(
                //"2317",
                "name" =>"Perak",
                "country_id" =>"132"
            ),
            array(
                //"2318",
                "name" =>"Perlis",
                "country_id" =>"132"
            ),
            array(
                //"2319",
                "name" =>"Pulau Pinang",
                "country_id" =>"132"
            ),
            array(
                //"2320",
                "name" =>"Sabah",
                "country_id" =>"132"
            ),
            array(
                //"2321",
                "name" =>"Sarawak",
                "country_id" =>"132"
            ),
            array(
                //"2322",
                "name" =>"Selangor",
                "country_id" =>"132"
            ),
            array(
                //"2323",
                "name" =>"Sembilan",
                "country_id" =>"132"
            ),
            array(
                //"2324",
                "name" =>"Terengganu",
                "country_id" =>"132"
            ),
            array(
                //"2325",
                "name" =>"Alif Alif",
                "country_id" =>"133"
            ),
            array(
                //"2326",
                "name" =>"Alif Dhaal",
                "country_id" =>"133"
            ),
            array(
                //"2327",
                "name" =>"Baa",
                "country_id" =>"133"
            ),
            array(
                //"2328",
                "name" =>"Dhaal",
                "country_id" =>"133"
            ),
            array(
                //"2329",
                "name" =>"Faaf",
                "country_id" =>"133"
            ),
            array(
                //"2330",
                "name" =>"Gaaf Alif",
                "country_id" =>"133"
            ),
            array(
                //"2331",
                "name" =>"Gaaf Dhaal",
                "country_id" =>"133"
            ),
            array(
                //"2332",
                "name" =>"Ghaviyani",
                "country_id" =>"133"
            ),
            array(
                //"2333",
                "name" =>"Haa Alif",
                "country_id" =>"133"
            ),
            array(
                //"2334",
                "name" =>"Haa Dhaal",
                "country_id" =>"133"
            ),
            array(
                //"2335",
                "name" =>"Kaaf",
                "country_id" =>"133"
            ),
            array(
                //"2336",
                "name" =>"Laam",
                "country_id" =>"133"
            ),
            array(
                //"2337",
                "name" =>"Lhaviyani",
                "country_id" =>"133"
            ),
            array(
                //"2338",
                "name" =>"Male",
                "country_id" =>"133"
            ),
            array(
                //"2339",
                "name" =>"Miim",
                "country_id" =>"133"
            ),
            array(
                //"2340",
                "name" =>"Nuun",
                "country_id" =>"133"
            ),
            array(
                //"2341",
                "name" =>"Raa",
                "country_id" =>"133"
            ),
            array(
                //"2342",
                "name" =>"Shaviyani",
                "country_id" =>"133"
            ),
            array(
                //"2343",
                "name" =>"Siin",
                "country_id" =>"133"
            ),
            array(
                //"2344",
                "name" =>"Thaa",
                "country_id" =>"133"
            ),
            array(
                //"2345",
                "name" =>"Vaav",
                "country_id" =>"133"
            ),
            array(
                //"2346",
                "name" =>"Bamako",
                "country_id" =>"134"
            ),
            array(
                //"2347",
                "name" =>"Gao",
                "country_id" =>"134"
            ),
            array(
                //"2348",
                "name" =>"Kayes",
                "country_id" =>"134"
            ),
            array(
                //"2349",
                "name" =>"Kidal",
                "country_id" =>"134"
            ),
            array(
                //"2350",
                "name" =>"Koulikoro",
                "country_id" =>"134"
            ),
            array(
                //"2351",
                "name" =>"Mopti",
                "country_id" =>"134"
            ),
            array(
                //"2352",
                "name" =>"Segou",
                "country_id" =>"134"
            ),
            array(
                //"2353",
                "name" =>"Sikasso",
                "country_id" =>"134"
            ),
            array(
                //"2354",
                "name" =>"Tombouctou",
                "country_id" =>"134"
            ),
            array(
                //"2355",
                "name" =>"Gozo and Comino",
                "country_id" =>"135"
            ),
            array(
                //"2356",
                "name" =>"Inner Harbour",
                "country_id" =>"135"
            ),
            array(
                //"2357",
                "name" =>"Northern",
                "country_id" =>"135"
            ),
            array(
                //"2358",
                "name" =>"Outer Harbour",
                "country_id" =>"135"
            ),
            array(
                //"2359",
                "name" =>"South Eastern",
                "country_id" =>"135"
            ),
            array(
                //"2360",
                "name" =>"Valletta",
                "country_id" =>"135"
            ),
            array(
                //"2361",
                "name" =>"Western",
                "country_id" =>"135"
            ),
            array(
                //"2362",
                "name" =>"Castletown",
                "country_id" =>"136"
            ),
            array(
                //"2363",
                "name" =>"Douglas",
                "country_id" =>"136"
            ),
            array(
                //"2364",
                "name" =>"Laxey",
                "country_id" =>"136"
            ),
            array(
                //"2365",
                "name" =>"Onchan",
                "country_id" =>"136"
            ),
            array(
                //"2366",
                "name" =>"Peel",
                "country_id" =>"136"
            ),
            array(
                //"2367",
                "name" =>"Port Erin",
                "country_id" =>"136"
            ),
            array(
                //"2368",
                "name" =>"Port Saint Mary",
                "country_id" =>"136"
            ),
            array(
                //"2369",
                "name" =>"Ramsey",
                "country_id" =>"136"
            ),
            array(
                //"2370",
                "name" =>"Ailinlaplap",
                "country_id" =>"137"
            ),
            array(
                //"2371",
                "name" =>"Ailuk",
                "country_id" =>"137"
            ),
            array(
                //"2372",
                "name" =>"Arno",
                "country_id" =>"137"
            ),
            array(
                //"2373",
                "name" =>"Aur",
                "country_id" =>"137"
            ),
            array(
                //"2374",
                "name" =>"Bikini",
                "country_id" =>"137"
            ),
            array(
                //"2375",
                "name" =>"Ebon",
                "country_id" =>"137"
            ),
            array(
                //"2376",
                "name" =>"Enewetak",
                "country_id" =>"137"
            ),
            array(
                //"2377",
                "name" =>"Jabat",
                "country_id" =>"137"
            ),
            array(
                //"2378",
                "name" =>"Jaluit",
                "country_id" =>"137"
            ),
            array(
                //"2379",
                "name" =>"Kili",
                "country_id" =>"137"
            ),
            array(
                //"2380",
                "name" =>"Kwajalein",
                "country_id" =>"137"
            ),
            array(
                //"2381",
                "name" =>"Lae",
                "country_id" =>"137"
            ),
            array(
                //"2382",
                "name" =>"Lib",
                "country_id" =>"137"
            ),
            array(
                //"2383",
                "name" =>"Likiep",
                "country_id" =>"137"
            ),
            array(
                //"2384",
                "name" =>"Majuro",
                "country_id" =>"137"
            ),
            array(
                //"2385",
                "name" =>"Maloelap",
                "country_id" =>"137"
            ),
            array(
                //"2386",
                "name" =>"Mejit",
                "country_id" =>"137"
            ),
            array(
                //"2387",
                "name" =>"Mili",
                "country_id" =>"137"
            ),
            array(
                //"2388",
                "name" =>"Namorik",
                "country_id" =>"137"
            ),
            array(
                //"2389",
                "name" =>"Namu",
                "country_id" =>"137"
            ),
            array(
                //"2390",
                "name" =>"Rongelap",
                "country_id" =>"137"
            ),
            array(
                //"2391",
                "name" =>"Ujae",
                "country_id" =>"137"
            ),
            array(
                //"2392",
                "name" =>"Utrik",
                "country_id" =>"137"
            ),
            array(
                //"2393",
                "name" =>"Wotho",
                "country_id" =>"137"
            ),
            array(
                //"2394",
                "name" =>"Wotje",
                "country_id" =>"137"
            ),
            array(
                //"2395",
                "name" =>"Fort-de-France",
                "country_id" =>"138"
            ),
            array(
                //"2396",
                "name" =>"La Trinite",
                "country_id" =>"138"
            ),
            array(
                //"2397",
                "name" =>"Le Marin",
                "country_id" =>"138"
            ),
            array(
                //"2398",
                "name" =>"Saint-Pierre",
                "country_id" =>"138"
            ),
            array(
                //"2399",
                "name" =>"Adrar",
                "country_id" =>"139"
            ),
            array(
                //"2400",
                "name" =>"Assaba",
                "country_id" =>"139"
            ),
            array(
                //"2401",
                "name" =>"Brakna",
                "country_id" =>"139"
            ),
            array(
                //"2402",
                "name" =>"Dhakhlat Nawadibu",
                "country_id" =>"139"
            ),
            array(
                //"2403",
                "name" =>"Hudh-al-Gharbi",
                "country_id" =>"139"
            ),
            array(
                //"2404",
                "name" =>"Hudh-ash-Sharqi",
                "country_id" =>"139"
            ),
            array(
                //"2405",
                "name" =>"Inshiri",
                "country_id" =>"139"
            ),
            array(
                //"2406",
                "name" =>"Nawakshut",
                "country_id" =>"139"
            ),
            array(
                //"2407",
                "name" =>"Qidimagha",
                "country_id" =>"139"
            ),
            array(
                //"2408",
                "name" =>"Qurqul",
                "country_id" =>"139"
            ),
            array(
                //"2409",
                "name" =>"Taqant",
                "country_id" =>"139"
            ),
            array(
                //"2410",
                "name" =>"Tiris Zammur",
                "country_id" =>"139"
            ),
            array(
                //"2411",
                "name" =>"Trarza",
                "country_id" =>"139"
            ),
            array(
                //"2412",
                "name" =>"Black River",
                "country_id" =>"140"
            ),
            array(
                //"2413",
                "name" =>"Eau Coulee",
                "country_id" =>"140"
            ),
            array(
                //"2414",
                "name" =>"Flacq",
                "country_id" =>"140"
            ),
            array(
                //"2415",
                "name" =>"Floreal",
                "country_id" =>"140"
            ),
            array(
                //"2416",
                "name" =>"Grand Port",
                "country_id" =>"140"
            ),
            array(
                //"2417",
                "name" =>"Moka",
                "country_id" =>"140"
            ),
            array(
                //"2418",
                "name" =>"Pamplempousses",
                "country_id" =>"140"
            ),
            array(
                //"2419",
                "name" =>"Plaines Wilhelm",
                "country_id" =>"140"
            ),
            array(
                //"2420",
                "name" =>"Port Louis",
                "country_id" =>"140"
            ),
            array(
                //"2421",
                "name" =>"Riviere du Rempart",
                "country_id" =>"140"
            ),
            array(
                //"2422",
                "name" =>"Rodrigues",
                "country_id" =>"140"
            ),
            array(
                //"2423",
                "name" =>"Rose Hill",
                "country_id" =>"140"
            ),
            array(
                //"2424",
                "name" =>"Savanne",
                "country_id" =>"140"
            ),
            array(
                //"2425",
                "name" =>"Mayotte",
                "country_id" =>"141"
            ),
            array(
                //"2426",
                "name" =>"Pamanzi",
                "country_id" =>"141"
            ),
            array(
                //"2427",
                "name" =>"Aguascalientes",
                "country_id" =>"142"
            ),
            array(
                //"2428",
                "name" =>"Baja California",
                "country_id" =>"142"
            ),
            array(
                //"2429",
                "name" =>"Baja California Sur",
                "country_id" =>"142"
            ),
            array(
                //"2430",
                "name" =>"Campeche",
                "country_id" =>"142"
            ),
            array(
                //"2431",
                "name" =>"Chiapas",
                "country_id" =>"142"
            ),
            array(
                //"2432",
                "name" =>"Chihuahua",
                "country_id" =>"142"
            ),
            array(
                //"2433",
                "name" =>"Coahuila",
                "country_id" =>"142"
            ),
            array(
                //"2434",
                "name" =>"Colima",
                "country_id" =>"142"
            ),
            array(
                //"2435",
                "name" =>"Distrito Federal",
                "country_id" =>"142"
            ),
            array(
                //"2436",
                "name" =>"Durango",
                "country_id" =>"142"
            ),
            array(
                //"2437",
                "name" =>"Estado de México",
                "country_id" =>"142"
            ),
            array(
                //"2438",
                "name" =>"Guanajuato",
                "country_id" =>"142"
            ),
            array(
                //"2439",
                "name" =>"Guerrero",
                "country_id" =>"142"
            ),
            array(
                //"2440",
                "name" =>"Hidalgo",
                "country_id" =>"142"
            ),
            array(
                //"2441",
                "name" =>"Jalisco",
                "country_id" =>"142"
            ),
            array(
                //"2442",
                "name" =>"México",
                "country_id" =>"142"
            ),
            array(
                //"2443",
                "name" =>"Michoacan",
                "country_id" =>"142"
            ),
            array(
                //"2444",
                "name" =>"Morelos",
                "country_id" =>"142"
            ),
            array(
                //"2445",
                "name" =>"Nayarit",
                "country_id" =>"142"
            ),
            array(
                //"2446",
                "name" =>"Nuevo Leon",
                "country_id" =>"142"
            ),
            array(
                //"2447",
                "name" =>"Oaxaca",
                "country_id" =>"142"
            ),
            array(
                //"2448",
                "name" =>"Puebla",
                "country_id" =>"142"
            ),
            array(
                //"2449",
                "name" =>"Queretaro",
                "country_id" =>"142"
            ),
            array(
                //"2450",
                "name" =>"Quintana Roo",
                "country_id" =>"142"
            ),
            array(
                //"2451",
                "name" =>"San Luis Potosi",
                "country_id" =>"142"
            ),
            array(
                //"2452",
                "name" =>"Sinaloa",
                "country_id" =>"142"
            ),
            array(
                //"2453",
                "name" =>"Sonora",
                "country_id" =>"142"
            ),
            array(
                //"2454",
                "name" =>"Tabasco",
                "country_id" =>"142"
            ),
            array(
                //"2455",
                "name" =>"Tamaulipas",
                "country_id" =>"142"
            ),
            array(
                //"2456",
                "name" =>"Tlaxcala",
                "country_id" =>"142"
            ),
            array(
                //"2457",
                "name" =>"Veracruz",
                "country_id" =>"142"
            ),
            array(
                //"2458",
                "name" =>"Yucatan",
                "country_id" =>"142"
            ),
            array(
                //"2459",
                "name" =>"Zacatecas",
                "country_id" =>"142"
            ),
            array(
                //"2460",
                "name" =>"Chuuk",
                "country_id" =>"143"
            ),
            array(
                //"2461",
                "name" =>"Kusaie",
                "country_id" =>"143"
            ),
            array(
                //"2462",
                "name" =>"Pohnpei",
                "country_id" =>"143"
            ),
            array(
                //"2463",
                "name" =>"Yap",
                "country_id" =>"143"
            ),
            array(
                //"2464",
                "name" =>"Balti",
                "country_id" =>"144"
            ),
            array(
                //"2465",
                "name" =>"Cahul",
                "country_id" =>"144"
            ),
            array(
                //"2466",
                "name" =>"Chisinau",
                "country_id" =>"144"
            ),
            array(
                //"2467",
                "name" =>"Chisinau Oras",
                "country_id" =>"144"
            ),
            array(
                //"2468",
                "name" =>"Edinet",
                "country_id" =>"144"
            ),
            array(
                //"2469",
                "name" =>"Gagauzia",
                "country_id" =>"144"
            ),
            array(
                //"2470",
                "name" =>"Lapusna",
                "country_id" =>"144"
            ),
            array(
                //"2471",
                "name" =>"Orhei",
                "country_id" =>"144"
            ),
            array(
                //"2472",
                "name" =>"Soroca",
                "country_id" =>"144"
            ),
            array(
                //"2473",
                "name" =>"Taraclia",
                "country_id" =>"144"
            ),
            array(
                //"2474",
                "name" =>"Tighina",
                "country_id" =>"144"
            ),
            array(
                //"2475",
                "name" =>"Transnistria",
                "country_id" =>"144"
            ),
            array(
                //"2476",
                "name" =>"Ungheni",
                "country_id" =>"144"
            ),
            array(
                //"2477",
                "name" =>"Fontvieille",
                "country_id" =>"145"
            ),
            array(
                //"2478",
                "name" =>"La Condamine",
                "country_id" =>"145"
            ),
            array(
                //"2479",
                "name" =>"Monaco-Ville",
                "country_id" =>"145"
            ),
            array(
                //"2480",
                "name" =>"Monte Carlo",
                "country_id" =>"145"
            ),
            array(
                //"2481",
                "name" =>"Arhangaj",
                "country_id" =>"146"
            ),
            array(
                //"2482",
                "name" =>"Bajan-Olgij",
                "country_id" =>"146"
            ),
            array(
                //"2483",
                "name" =>"Bajanhongor",
                "country_id" =>"146"
            ),
            array(
                //"2484",
                "name" =>"Bulgan",
                "country_id" =>"146"
            ),
            array(
                //"2485",
                "name" =>"Darhan-Uul",
                "country_id" =>"146"
            ),
            array(
                //"2486",
                "name" =>"Dornod",
                "country_id" =>"146"
            ),
            array(
                //"2487",
                "name" =>"Dornogovi",
                "country_id" =>"146"
            ),
            array(
                //"2488",
                "name" =>"Dundgovi",
                "country_id" =>"146"
            ),
            array(
                //"2489",
                "name" =>"Govi-Altaj",
                "country_id" =>"146"
            ),
            array(
                //"2490",
                "name" =>"Govisumber",
                "country_id" =>"146"
            ),
            array(
                //"2491",
                "name" =>"Hentij",
                "country_id" =>"146"
            ),
            array(
                //"2492",
                "name" =>"Hovd",
                "country_id" =>"146"
            ),
            array(
                //"2493",
                "name" =>"Hovsgol",
                "country_id" =>"146"
            ),
            array(
                //"2494",
                "name" =>"Omnogovi",
                "country_id" =>"146"
            ),
            array(
                //"2495",
                "name" =>"Orhon",
                "country_id" =>"146"
            ),
            array(
                //"2496",
                "name" =>"Ovorhangaj",
                "country_id" =>"146"
            ),
            array(
                //"2497",
                "name" =>"Selenge",
                "country_id" =>"146"
            ),
            array(
                //"2498",
                "name" =>"Suhbaatar",
                "country_id" =>"146"
            ),
            array(
                //"2499",
                "name" =>"Tov",
                "country_id" =>"146"
            ),
        ));


        DB::table('states')->insert(array(

            array(
                //"2500",
                "name" =>"Ulaanbaatar",
                "country_id" =>"146"
            ),
            array(
                //"2501",
                "name" =>"Uvs",
                "country_id" =>"146"
            ),
            array(
                //"2502",
                "name" =>"Zavhan",
                "country_id" =>"146"
            ),
            array(
                //"2503",
                "name" =>"Montserrat",
                "country_id" =>"147"
            ),
            array(
                //"2504",
                "name" =>"Agadir",
                "country_id" =>"148"
            ),
            array(
                //"2505",
                "name" =>"Casablanca",
                "country_id" =>"148"
            ),
            array(
                //"2506",
                "name" =>"Chaouia-Ouardigha",
                "country_id" =>"148"
            ),
            array(
                //"2507",
                "name" =>"Doukkala-Abda",
                "country_id" =>"148"
            ),
            array(
                //"2508",
                "name" =>"Fes-Boulemane",
                "country_id" =>"148"
            ),
            array(
                //"2509",
                "name" =>"Gharb-Chrarda-Beni Hssen",
                "country_id" =>"148"
            ),
            array(
                //"2510",
                "name" =>"Guelmim",
                "country_id" =>"148"
            ),
            array(
                //"2511",
                "name" =>"Kenitra",
                "country_id" =>"148"
            ),
            array(
                //"2512",
                "name" =>"Marrakech-Tensift-Al Haouz",
                "country_id" =>"148"
            ),
            array(
                //"2513",
                "name" =>"Meknes-Tafilalet",
                "country_id" =>"148"
            ),
            array(
                //"2514",
                "name" =>"Oriental",
                "country_id" =>"148"
            ),
            array(
                //"2515",
                "name" =>"Oujda",
                "country_id" =>"148"
            ),
            array(
                //"2516",
                "name" =>"Province de Tanger",
                "country_id" =>"148"
            ),
            array(
                //"2517",
                "name" =>"Rabat-Sale-Zammour-Zaer",
                "country_id" =>"148"
            ),
            array(
                //"2518",
                "name" =>"Sala Al Jadida",
                "country_id" =>"148"
            ),
            array(
                //"2519",
                "name" =>"Settat",
                "country_id" =>"148"
            ),
            array(
                //"2520",
                "name" =>"Souss Massa-Draa",
                "country_id" =>"148"
            ),
            array(
                //"2521",
                "name" =>"Tadla-Azilal",
                "country_id" =>"148"
            ),
            array(
                //"2522",
                "name" =>"Tangier-Tetouan",
                "country_id" =>"148"
            ),
            array(
                //"2523",
                "name" =>"Taza-Al Hoceima-Taounate",
                "country_id" =>"148"
            ),
            array(
                //"2524",
                "name" =>"Wilaya de Casablanca",
                "country_id" =>"148"
            ),
            array(
                //"2525",
                "name" =>"Wilaya de Rabat-Sale",
                "country_id" =>"148"
            ),
            array(
                //"2526",
                "name" =>"Cabo Delgado",
                "country_id" =>"149"
            ),
            array(
                //"2527",
                "name" =>"Gaza",
                "country_id" =>"149"
            ),
            array(
                //"2528",
                "name" =>"Inhambane",
                "country_id" =>"149"
            ),
            array(
                //"2529",
                "name" =>"Manica",
                "country_id" =>"149"
            ),
            array(
                //"2530",
                "name" =>"Maputo",
                "country_id" =>"149"
            ),
            array(
                //"2531",
                "name" =>"Maputo Provincia",
                "country_id" =>"149"
            ),
            array(
                //"2532",
                "name" =>"Nampula",
                "country_id" =>"149"
            ),
            array(
                //"2533",
                "name" =>"Niassa",
                "country_id" =>"149"
            ),
            array(
                //"2534",
                "name" =>"Sofala",
                "country_id" =>"149"
            ),
            array(
                //"2535",
                "name" =>"Tete",
                "country_id" =>"149"
            ),
            array(
                //"2536",
                "name" =>"Zambezia",
                "country_id" =>"149"
            ),
            array(
                //"2537",
                "name" =>"Ayeyarwady",
                "country_id" =>"150"
            ),
            array(
                //"2538",
                "name" =>"Bago",
                "country_id" =>"150"
            ),
            array(
                //"2539",
                "name" =>"Chin",
                "country_id" =>"150"
            ),
            array(
                //"2540",
                "name" =>"Kachin",
                "country_id" =>"150"
            ),
            array(
                //"2541",
                "name" =>"Kayah",
                "country_id" =>"150"
            ),
            array(
                //"2542",
                "name" =>"Kayin",
                "country_id" =>"150"
            ),
            array(
                //"2543",
                "name" =>"Magway",
                "country_id" =>"150"
            ),
            array(
                //"2544",
                "name" =>"Mandalay",
                "country_id" =>"150"
            ),
            array(
                //"2545",
                "name" =>"Mon",
                "country_id" =>"150"
            ),
            array(
                //"2546",
                "name" =>"Nay Pyi Taw",
                "country_id" =>"150"
            ),
            array(
                //"2547",
                "name" =>"Rakhine",
                "country_id" =>"150"
            ),
            array(
                //"2548",
                "name" =>"Sagaing",
                "country_id" =>"150"
            ),
            array(
                //"2549",
                "name" =>"Shan",
                "country_id" =>"150"
            ),
            array(
                //"2550",
                "name" =>"Tanintharyi",
                "country_id" =>"150"
            ),
            array(
                //"2551",
                "name" =>"Yangon",
                "country_id" =>"150"
            ),
            array(
                //"2552",
                "name" =>"Caprivi",
                "country_id" =>"151"
            ),
            array(
                //"2553",
                "name" =>"Erongo",
                "country_id" =>"151"
            ),
            array(
                //"2554",
                "name" =>"Hardap",
                "country_id" =>"151"
            ),
            array(
                //"2555",
                "name" =>"Karas",
                "country_id" =>"151"
            ),
            array(
                //"2556",
                "name" =>"Kavango",
                "country_id" =>"151"
            ),
            array(
                //"2557",
                "name" =>"Khomas",
                "country_id" =>"151"
            ),
            array(
                //"2558",
                "name" =>"Kunene",
                "country_id" =>"151"
            ),
            array(
                //"2559",
                "name" =>"Ohangwena",
                "country_id" =>"151"
            ),
            array(
                //"2560",
                "name" =>"Omaheke",
                "country_id" =>"151"
            ),
            array(
                //"2561",
                "name" =>"Omusati",
                "country_id" =>"151"
            ),
            array(
                //"2562",
                "name" =>"Oshana",
                "country_id" =>"151"
            ),
            array(
                //"2563",
                "name" =>"Oshikoto",
                "country_id" =>"151"
            ),
            array(
                //"2564",
                "name" =>"Otjozondjupa",
                "country_id" =>"151"
            ),
            array(
                //"2565",
                "name" =>"Yaren",
                "country_id" =>"152"
            ),
            array(
                //"2566",
                "name" =>"Bagmati",
                "country_id" =>"153"
            ),
            array(
                //"2567",
                "name" =>"Bheri",
                "country_id" =>"153"
            ),
            array(
                //"2568",
                "name" =>"Dhawalagiri",
                "country_id" =>"153"
            ),
            array(
                //"2569",
                "name" =>"Gandaki",
                "country_id" =>"153"
            ),
            array(
                //"2570",
                "name" =>"Janakpur",
                "country_id" =>"153"
            ),
            array(
                //"2571",
                "name" =>"Karnali",
                "country_id" =>"153"
            ),
            array(
                //"2572",
                "name" =>"Koshi",
                "country_id" =>"153"
            ),
            array(
                //"2573",
                "name" =>"Lumbini",
                "country_id" =>"153"
            ),
            array(
                //"2574",
                "name" =>"Mahakali",
                "country_id" =>"153"
            ),
            array(
                //"2575",
                "name" =>"Mechi",
                "country_id" =>"153"
            ),
            array(
                //"2576",
                "name" =>"Narayani",
                "country_id" =>"153"
            ),
            array(
                //"2577",
                "name" =>"Rapti",
                "country_id" =>"153"
            ),
            array(
                //"2578",
                "name" =>"Sagarmatha",
                "country_id" =>"153"
            ),
            array(
                //"2579",
                "name" =>"Seti",
                "country_id" =>"153"
            ),
            array(
                //"2580",
                "name" =>"Bonaire",
                "country_id" =>"154"
            ),
            array(
                //"2581",
                "name" =>"Curacao",
                "country_id" =>"154"
            ),
            array(
                //"2582",
                "name" =>"Saba",
                "country_id" =>"154"
            ),
            array(
                //"2583",
                "name" =>"Sint Eustatius",
                "country_id" =>"154"
            ),
            array(
                //"2584",
                "name" =>"Sint Maarten",
                "country_id" =>"154"
            ),
            array(
                //"2585",
                "name" =>"Amsterdam",
                "country_id" =>"155"
            ),
            array(
                //"2586",
                "name" =>"Benelux",
                "country_id" =>"155"
            ),
            array(
                //"2587",
                "name" =>"Drenthe",
                "country_id" =>"155"
            ),
            array(
                //"2588",
                "name" =>"Flevoland",
                "country_id" =>"155"
            ),
            array(
                //"2589",
                "name" =>"Friesland",
                "country_id" =>"155"
            ),
            array(
                //"2590",
                "name" =>"Gelderland",
                "country_id" =>"155"
            ),
            array(
                //"2591",
                "name" =>"Groningen",
                "country_id" =>"155"
            ),
            array(
                //"2592",
                "name" =>"Limburg",
                "country_id" =>"155"
            ),
            array(
                //"2593",
                "name" =>"Noord-Brabant",
                "country_id" =>"155"
            ),
            array(
                //"2594",
                "name" =>"Noord-Holland",
                "country_id" =>"155"
            ),
            array(
                //"2595",
                "name" =>"Overijssel",
                "country_id" =>"155"
            ),
            array(
                //"2596",
                "name" =>"South Holland",
                "country_id" =>"155"
            ),
            array(
                //"2597",
                "name" =>"Utrecht",
                "country_id" =>"155"
            ),
            array(
                //"2598",
                "name" =>"Zeeland",
                "country_id" =>"155"
            ),
            array(
                //"2599",
                "name" =>"Zuid-Holland",
                "country_id" =>"155"
            ),
            array(
                //"2600",
                "name" =>"Iles",
                "country_id" =>"156"
            ),
            array(
                //"2601",
                "name" =>"Nord",
                "country_id" =>"156"
            ),
            array(
                //"2602",
                "name" =>"Sud",
                "country_id" =>"156"
            ),
            array(
                //"2603",
                "name" =>"Area Outside Region",
                "country_id" =>"157"
            ),
            array(
                //"2604",
                "name" =>"Auckland",
                "country_id" =>"157"
            ),
            array(
                //"2605",
                "name" =>"Bay of Plenty",
                "country_id" =>"157"
            ),
            array(
                //"2606",
                "name" =>"Canterbury",
                "country_id" =>"157"
            ),
            array(
                //"2607",
                "name" =>"Christchurch",
                "country_id" =>"157"
            ),
            array(
                //"2608",
                "name" =>"Gisborne",
                "country_id" =>"157"
            ),
            array(
                //"2609",
                "name" =>"Hawke''s Bay",
                "country_id" =>"157"
            ),
            array(
                //"2610",
                "name" =>"Manawatu-Wanganui",
                "country_id" =>"157"
            ),
            array(
                //"2611",
                "name" =>"Marlborough",
                "country_id" =>"157"
            ),
            array(
                //"2612",
                "name" =>"Nelson",
                "country_id" =>"157"
            ),
            array(
                //"2613",
                "name" =>"Northland",
                "country_id" =>"157"
            ),
            array(
                //"2614",
                "name" =>"Otago",
                "country_id" =>"157"
            ),
            array(
                //"2615",
                "name" =>"Rodney",
                "country_id" =>"157"
            ),
            array(
                //"2616",
                "name" =>"Southland",
                "country_id" =>"157"
            ),
            array(
                //"2617",
                "name" =>"Taranaki",
                "country_id" =>"157"
            ),
            array(
                //"2618",
                "name" =>"Tasman",
                "country_id" =>"157"
            ),
            array(
                //"2619",
                "name" =>"Waikato",
                "country_id" =>"157"
            ),
            array(
                //"2620",
                "name" =>"Wellington",
                "country_id" =>"157"
            ),
            array(
                //"2621",
                "name" =>"West Coast",
                "country_id" =>"157"
            ),
            array(
                //"2622",
                "name" =>"Atlantico Norte",
                "country_id" =>"158"
            ),
            array(
                //"2623",
                "name" =>"Atlantico Sur",
                "country_id" =>"158"
            ),
            array(
                //"2624",
                "name" =>"Boaco",
                "country_id" =>"158"
            ),
            array(
                //"2625",
                "name" =>"Carazo",
                "country_id" =>"158"
            ),
            array(
                //"2626",
                "name" =>"Chinandega",
                "country_id" =>"158"
            ),
            array(
                //"2627",
                "name" =>"Chontales",
                "country_id" =>"158"
            ),
            array(
                //"2628",
                "name" =>"Esteli",
                "country_id" =>"158"
            ),
            array(
                //"2629",
                "name" =>"Granada",
                "country_id" =>"158"
            ),
            array(
                //"2630",
                "name" =>"Jinotega",
                "country_id" =>"158"
            ),
            array(
                //"2631",
                "name" =>"Leon",
                "country_id" =>"158"
            ),
            array(
                //"2632",
                "name" =>"Madriz",
                "country_id" =>"158"
            ),
            array(
                //"2633",
                "name" =>"Managua",
                "country_id" =>"158"
            ),
            array(
                //"2634",
                "name" =>"Masaya",
                "country_id" =>"158"
            ),
            array(
                //"2635",
                "name" =>"Matagalpa",
                "country_id" =>"158"
            ),
            array(
                //"2636",
                "name" =>"Nueva Segovia",
                "country_id" =>"158"
            ),
            array(
                //"2637",
                "name" =>"Rio San Juan",
                "country_id" =>"158"
            ),
            array(
                //"2638",
                "name" =>"Rivas",
                "country_id" =>"158"
            ),
            array(
                //"2639",
                "name" =>"Agadez",
                "country_id" =>"159"
            ),
            array(
                //"2640",
                "name" =>"Diffa",
                "country_id" =>"159"
            ),
            array(
                //"2641",
                "name" =>"Dosso",
                "country_id" =>"159"
            ),
            array(
                //"2642",
                "name" =>"Maradi",
                "country_id" =>"159"
            ),
            array(
                //"2643",
                "name" =>"Niamey",
                "country_id" =>"159"
            ),
            array(
                //"2644",
                "name" =>"Tahoua",
                "country_id" =>"159"
            ),
            array(
                //"2645",
                "name" =>"Tillabery",
                "country_id" =>"159"
            ),
            array(
                //"2646",
                "name" =>"Zinder",
                "country_id" =>"159"
            ),
            array(
                //"2647",
                "name" =>"Abia",
                "country_id" =>"160"
            ),
            array(
                //"2648",
                "name" =>"Abuja Federal Capital Territor",
                "country_id" =>"160"
            ),
            array(
                //"2649",
                "name" =>"Adamawa",
                "country_id" =>"160"
            ),
            array(
                //"2650",
                "name" =>"Akwa Ibom",
                "country_id" =>"160"
            ),
            array(
                //"2651",
                "name" =>"Anambra",
                "country_id" =>"160"
            ),
            array(
                //"2652",
                "name" =>"Bauchi",
                "country_id" =>"160"
            ),
            array(
                //"2653",
                "name" =>"Bayelsa",
                "country_id" =>"160"
            ),
            array(
                //"2654",
                "name" =>"Benue",
                "country_id" =>"160"
            ),
            array(
                //"2655",
                "name" =>"Borno",
                "country_id" =>"160"
            ),
            array(
                //"2656",
                "name" =>"Cross River",
                "country_id" =>"160"
            ),
            array(
                //"2657",
                "name" =>"Delta",
                "country_id" =>"160"
            ),
            array(
                //"2658",
                "name" =>"Ebonyi",
                "country_id" =>"160"
            ),
            array(
                //"2659",
                "name" =>"Edo",
                "country_id" =>"160"
            ),
            array(
                //"2660",
                "name" =>"Ekiti",
                "country_id" =>"160"
            ),
            array(
                //"2661",
                "name" =>"Enugu",
                "country_id" =>"160"
            ),
            array(
                //"2662",
                "name" =>"Gombe",
                "country_id" =>"160"
            ),
            array(
                //"2663",
                "name" =>"Imo",
                "country_id" =>"160"
            ),
            array(
                //"2664",
                "name" =>"Jigawa",
                "country_id" =>"160"
            ),
            array(
                //"2665",
                "name" =>"Kaduna",
                "country_id" =>"160"
            ),
            array(
                //"2666",
                "name" =>"Kano",
                "country_id" =>"160"
            ),
            array(
                //"2667",
                "name" =>"Katsina",
                "country_id" =>"160"
            ),
            array(
                //"2668",
                "name" =>"Kebbi",
                "country_id" =>"160"
            ),
            array(
                //"2669",
                "name" =>"Kogi",
                "country_id" =>"160"
            ),
            array(
                //"2670",
                "name" =>"Kwara",
                "country_id" =>"160"
            ),
            array(
                //"2671",
                "name" =>"Lagos",
                "country_id" =>"160"
            ),
            array(
                //"2672",
                "name" =>"Nassarawa",
                "country_id" =>"160"
            ),
            array(
                //"2673",
                "name" =>"Niger",
                "country_id" =>"160"
            ),
            array(
                //"2674",
                "name" =>"Ogun",
                "country_id" =>"160"
            ),
            array(
                //"2675",
                "name" =>"Ondo",
                "country_id" =>"160"
            ),
            array(
                //"2676",
                "name" =>"Osun",
                "country_id" =>"160"
            ),
            array(
                //"2677",
                "name" =>"Oyo",
                "country_id" =>"160"
            ),
            array(
                //"2678",
                "name" =>"Plateau",
                "country_id" =>"160"
            ),
            array(
                //"2679",
                "name" =>"Rivers",
                "country_id" =>"160"
            ),
            array(
                //"2680",
                "name" =>"Sokoto",
                "country_id" =>"160"
            ),
            array(
                //"2681",
                "name" =>"Taraba",
                "country_id" =>"160"
            ),
            array(
                //"2682",
                "name" =>"Yobe",
                "country_id" =>"160"
            ),
            array(
                //"2683",
                "name" =>"Zamfara",
                "country_id" =>"160"
            ),
            array(
                //"2684",
                "name" =>"Niue",
                "country_id" =>"161"
            ),
            array(
                //"2685",
                "name" =>"Norfolk Island",
                "country_id" =>"162"
            ),
            array(
                //"2686",
                "name" =>"Northern Islands",
                "country_id" =>"163"
            ),
            array(
                //"2687",
                "name" =>"Rota",
                "country_id" =>"163"
            ),
            array(
                //"2688",
                "name" =>"Saipan",
                "country_id" =>"163"
            ),
            array(
                //"2689",
                "name" =>"Tinian",
                "country_id" =>"163"
            ),
            array(
                //"2690",
                "name" =>"Akershus",
                "country_id" =>"164"
            ),
            array(
                //"2691",
                "name" =>"Aust Agder",
                "country_id" =>"164"
            ),
            array(
                //"2692",
                "name" =>"Bergen",
                "country_id" =>"164"
            ),
            array(
                //"2693",
                "name" =>"Buskerud",
                "country_id" =>"164"
            ),
            array(
                //"2694",
                "name" =>"Finnmark",
                "country_id" =>"164"
            ),
            array(
                //"2695",
                "name" =>"Hedmark",
                "country_id" =>"164"
            ),
            array(
                //"2696",
                "name" =>"Hordaland",
                "country_id" =>"164"
            ),
            array(
                //"2697",
                "name" =>"Moere og Romsdal",
                "country_id" =>"164"
            ),
            array(
                //"2698",
                "name" =>"Nord Trondelag",
                "country_id" =>"164"
            ),
            array(
                //"2699",
                "name" =>"Nordland",
                "country_id" =>"164"
            ),
            array(
                //"2700",
                "name" =>"Oestfold",
                "country_id" =>"164"
            ),
            array(
                //"2701",
                "name" =>"Oppland",
                "country_id" =>"164"
            ),
            array(
                //"2702",
                "name" =>"Oslo",
                "country_id" =>"164"
            ),
            array(
                //"2703",
                "name" =>"Rogaland",
                "country_id" =>"164"
            ),
            array(
                //"2704",
                "name" =>"Soer Troendelag",
                "country_id" =>"164"
            ),
            array(
                //"2705",
                "name" =>"Sogn og Fjordane",
                "country_id" =>"164"
            ),
            array(
                //"2706",
                "name" =>"Stavern",
                "country_id" =>"164"
            ),
            array(
                //"2707",
                "name" =>"Sykkylven",
                "country_id" =>"164"
            ),
            array(
                //"2708",
                "name" =>"Telemark",
                "country_id" =>"164"
            ),
            array(
                //"2709",
                "name" =>"Troms",
                "country_id" =>"164"
            ),
            array(
                //"2710",
                "name" =>"Vest Agder",
                "country_id" =>"164"
            ),
            array(
                //"2711",
                "name" =>"Vestfold",
                "country_id" =>"164"
            ),
            array(
                //"2712",
                "name" =>"ÃƒÂ˜stfold",
                "country_id" =>"164"
            ),
            array(
                //"2713",
                "name" =>"Al Buraimi",
                "country_id" =>"165"
            ),
            array(
                //"2714",
                "name" =>"Dhufar",
                "country_id" =>"165"
            ),
            array(
                //"2715",
                "name" =>"Masqat",
                "country_id" =>"165"
            ),
            array(
                //"2716",
                "name" =>"Musandam",
                "country_id" =>"165"
            ),
            array(
                //"2717",
                "name" =>"Rusayl",
                "country_id" =>"165"
            ),
            array(
                //"2718",
                "name" =>"Wadi Kabir",
                "country_id" =>"165"
            ),
            array(
                //"2719",
                "name" =>"ad-Dakhiliyah",
                "country_id" =>"165"
            ),
            array(
                //"2720",
                "name" =>"adh-Dhahirah",
                "country_id" =>"165"
            ),
            array(
                //"2721",
                "name" =>"al-Batinah",
                "country_id" =>"165"
            ),
            array(
                //"2722",
                "name" =>"ash-Sharqiyah",
                "country_id" =>"165"
            ),
            array(
                //"2723",
                "name" =>"Baluchistan",
                "country_id" =>"166"
            ),
            array(
                //"2724",
                "name" =>"Federal Capital Area",
                "country_id" =>"166"
            ),
            array(
                //"2725",
                "name" =>"Federally administered Tribal",
                "country_id" =>"166"
            ),
            array(
                //"2726",
                "name" =>"North-West Frontier",
                "country_id" =>"166"
            ),
            array(
                //"2727",
                "name" =>"Northern Areas",
                "country_id" =>"166"
            ),
            array(
                //"2728",
                "name" =>"Punjab",
                "country_id" =>"166"
            ),
            array(
                //"2729",
                "name" =>"Sind",
                "country_id" =>"166"
            ),
            array(
                //"2730",
                "name" =>"Aimeliik",
                "country_id" =>"167"
            ),
            array(
                //"2731",
                "name" =>"Airai",
                "country_id" =>"167"
            ),
            array(
                //"2732",
                "name" =>"Angaur",
                "country_id" =>"167"
            ),
            array(
                //"2733",
                "name" =>"Hatobohei",
                "country_id" =>"167"
            ),
            array(
                //"2734",
                "name" =>"Kayangel",
                "country_id" =>"167"
            ),
            array(
                //"2735",
                "name" =>"Koror",
                "country_id" =>"167"
            ),
            array(
                //"2736",
                "name" =>"Melekeok",
                "country_id" =>"167"
            ),
            array(
                //"2737",
                "name" =>"Ngaraard",
                "country_id" =>"167"
            ),
            array(
                //"2738",
                "name" =>"Ngardmau",
                "country_id" =>"167"
            ),
            array(
                //"2739",
                "name" =>"Ngaremlengui",
                "country_id" =>"167"
            ),
            array(
                //"2740",
                "name" =>"Ngatpang",
                "country_id" =>"167"
            ),
            array(
                //"2741",
                "name" =>"Ngchesar",
                "country_id" =>"167"
            ),
            array(
                //"2742",
                "name" =>"Ngerchelong",
                "country_id" =>"167"
            ),
            array(
                //"2743",
                "name" =>"Ngiwal",
                "country_id" =>"167"
            ),
            array(
                //"2744",
                "name" =>"Peleliu",
                "country_id" =>"167"
            ),
            array(
                //"2745",
                "name" =>"Sonsorol",
                "country_id" =>"167"
            ),
            array(
                //"2746",
                "name" =>"Ariha",
                "country_id" =>"168"
            ),
            array(
                //"2747",
                "name" =>"Bayt Lahm",
                "country_id" =>"168"
            ),
            array(
                //"2748",
                "name" =>"Bethlehem",
                "country_id" =>"168"
            ),
            array(
                //"2749",
                "name" =>"Dayr-al-Balah",
                "country_id" =>"168"
            ),
            array(
                //"2750",
                "name" =>"Ghazzah",
                "country_id" =>"168"
            ),
            array(
                //"2751",
                "name" =>"Ghazzah ash-Shamaliyah",
                "country_id" =>"168"
            ),
            array(
                //"2752",
                "name" =>"Janin",
                "country_id" =>"168"
            ),
            array(
                //"2753",
                "name" =>"Khan Yunis",
                "country_id" =>"168"
            ),
            array(
                //"2754",
                "name" =>"Nabulus",
                "country_id" =>"168"
            ),
            array(
                //"2755",
                "name" =>"Qalqilyah",
                "country_id" =>"168"
            ),
            array(
                //"2756",
                "name" =>"Rafah",
                "country_id" =>"168"
            ),
            array(
                //"2757",
                "name" =>"Ram Allah wal-Birah",
                "country_id" =>"168"
            ),
            array(
                //"2758",
                "name" =>"Salfit",
                "country_id" =>"168"
            ),
            array(
                //"2759",
                "name" =>"Tubas",
                "country_id" =>"168"
            ),
            array(
                //"2760",
                "name" =>"Tulkarm",
                "country_id" =>"168"
            ),
            array(
                //"2761",
                "name" =>"al-Khalil",
                "country_id" =>"168"
            ),
            array(
                //"2762",
                "name" =>"al-Quds",
                "country_id" =>"168"
            ),
            array(
                //"2763",
                "name" =>"Bocas del Toro",
                "country_id" =>"169"
            ),
            array(
                //"2764",
                "name" =>"Chiriqui",
                "country_id" =>"169"
            ),
            array(
                //"2765",
                "name" =>"Cocle",
                "country_id" =>"169"
            ),
            array(
                //"2766",
                "name" =>"Colon",
                "country_id" =>"169"
            ),
            array(
                //"2767",
                "name" =>"Darien",
                "country_id" =>"169"
            ),
            array(
                //"2768",
                "name" =>"Embera",
                "country_id" =>"169"
            ),
            array(
                //"2769",
                "name" =>"Herrera",
                "country_id" =>"169"
            ),
            array(
                //"2770",
                "name" =>"Kuna Yala",
                "country_id" =>"169"
            ),
            array(
                //"2771",
                "name" =>"Los Santos",
                "country_id" =>"169"
            ),
            array(
                //"2772",
                "name" =>"Ngobe Bugle",
                "country_id" =>"169"
            ),
            array(
                //"2773",
                "name" =>"Panama",
                "country_id" =>"169"
            ),
            array(
                //"2774",
                "name" =>"Veraguas",
                "country_id" =>"169"
            ),
            array(
                //"2775",
                "name" =>"East New Britain",
                "country_id" =>"170"
            ),
            array(
                //"2776",
                "name" =>"East Sepik",
                "country_id" =>"170"
            ),
            array(
                //"2777",
                "name" =>"Eastern Highlands",
                "country_id" =>"170"
            ),
            array(
                //"2778",
                "name" =>"Enga",
                "country_id" =>"170"
            ),
            array(
                //"2779",
                "name" =>"Fly River",
                "country_id" =>"170"
            ),
            array(
                //"2780",
                "name" =>"Gulf",
                "country_id" =>"170"
            ),
            array(
                //"2781",
                "name" =>"Madang",
                "country_id" =>"170"
            ),
            array(
                //"2782",
                "name" =>"Manus",
                "country_id" =>"170"
            ),
            array(
                //"2783",
                "name" =>"Milne Bay",
                "country_id" =>"170"
            ),
            array(
                //"2784",
                "name" =>"Morobe",
                "country_id" =>"170"
            ),
            array(
                //"2785",
                "name" =>"National Capital District",
                "country_id" =>"170"
            ),
            array(
                //"2786",
                "name" =>"New Ireland",
                "country_id" =>"170"
            ),
            array(
                //"2787",
                "name" =>"North Solomons",
                "country_id" =>"170"
            ),
            array(
                //"2788",
                "name" =>"Oro",
                "country_id" =>"170"
            ),
            array(
                //"2789",
                "name" =>"Sandaun",
                "country_id" =>"170"
            ),
            array(
                //"2790",
                "name" =>"Simbu",
                "country_id" =>"170"
            ),
            array(
                //"2791",
                "name" =>"Southern Highlands",
                "country_id" =>"170"
            ),
            array(
                //"2792",
                "name" =>"West New Britain",
                "country_id" =>"170"
            ),
            array(
                //"2793",
                "name" =>"Western Highlands",
                "country_id" =>"170"
            ),
            array(
                //"2794",
                "name" =>"Alto Paraguay",
                "country_id" =>"171"
            ),
            array(
                //"2795",
                "name" =>"Alto Parana",
                "country_id" =>"171"
            ),
            array(
                //"2796",
                "name" =>"Amambay",
                "country_id" =>"171"
            ),
            array(
                //"2797",
                "name" =>"Asuncion",
                "country_id" =>"171"
            ),
            array(
                //"2798",
                "name" =>"Boqueron",
                "country_id" =>"171"
            ),
            array(
                //"2799",
                "name" =>"Caaguazu",
                "country_id" =>"171"
            ),
            array(
                //"2800",
                "name" =>"Caazapa",
                "country_id" =>"171"
            ),
            array(
                //"2801",
                "name" =>"Canendiyu",
                "country_id" =>"171"
            ),
            array(
                //"2802",
                "name" =>"Central",
                "country_id" =>"171"
            ),
            array(
                //"2803",
                "name" =>"Concepcion",
                "country_id" =>"171"
            ),
            array(
                //"2804",
                "name" =>"Cordillera",
                "country_id" =>"171"
            ),
            array(
                //"2805",
                "name" =>"Guaira",
                "country_id" =>"171"
            ),
            array(
                //"2806",
                "name" =>"Itapua",
                "country_id" =>"171"
            ),
            array(
                //"2807",
                "name" =>"Misiones",
                "country_id" =>"171"
            ),
            array(
                //"2808",
                "name" =>"Neembucu",
                "country_id" =>"171"
            ),
            array(
                //"2809",
                "name" =>"Paraguari",
                "country_id" =>"171"
            ),
            array(
                //"2810",
                "name" =>"Presidente Hayes",
                "country_id" =>"171"
            ),
            array(
                //"2811",
                "name" =>"San Pedro",
                "country_id" =>"171"
            ),
            array(
                //"2812",
                "name" =>"Amazonas",
                "country_id" =>"172"
            ),
            array(
                //"2813",
                "name" =>"Ancash",
                "country_id" =>"172"
            ),
            array(
                //"2814",
                "name" =>"Apurimac",
                "country_id" =>"172"
            ),
            array(
                //"2815",
                "name" =>"Arequipa",
                "country_id" =>"172"
            ),
            array(
                //"2816",
                "name" =>"Ayacucho",
                "country_id" =>"172"
            ),
            array(
                //"2817",
                "name" =>"Cajamarca",
                "country_id" =>"172"
            ),
            array(
                //"2818",
                "name" =>"Cusco",
                "country_id" =>"172"
            ),
            array(
                //"2819",
                "name" =>"Huancavelica",
                "country_id" =>"172"
            ),
            array(
                //"2820",
                "name" =>"Huanuco",
                "country_id" =>"172"
            ),
            array(
                //"2821",
                "name" =>"Ica",
                "country_id" =>"172"
            ),
            array(
                //"2822",
                "name" =>"Junin",
                "country_id" =>"172"
            ),
            array(
                //"2823",
                "name" =>"La Libertad",
                "country_id" =>"172"
            ),
            array(
                //"2824",
                "name" =>"Lambayeque",
                "country_id" =>"172"
            ),
            array(
                //"2825",
                "name" =>"Lima y Callao",
                "country_id" =>"172"
            ),
            array(
                //"2826",
                "name" =>"Loreto",
                "country_id" =>"172"
            ),
            array(
                //"2827",
                "name" =>"Madre de Dios",
                "country_id" =>"172"
            ),
            array(
                //"2828",
                "name" =>"Moquegua",
                "country_id" =>"172"
            ),
            array(
                //"2829",
                "name" =>"Pasco",
                "country_id" =>"172"
            ),
            array(
                //"2830",
                "name" =>"Piura",
                "country_id" =>"172"
            ),
            array(
                //"2831",
                "name" =>"Puno",
                "country_id" =>"172"
            ),
            array(
                //"2832",
                "name" =>"San Martin",
                "country_id" =>"172"
            ),
            array(
                //"2833",
                "name" =>"Tacna",
                "country_id" =>"172"
            ),
            array(
                //"2834",
                "name" =>"Tumbes",
                "country_id" =>"172"
            ),
            array(
                //"2835",
                "name" =>"Ucayali",
                "country_id" =>"172"
            ),
            array(
                //"2836",
                "name" =>"Batangas",
                "country_id" =>"173"
            ),
            array(
                //"2837",
                "name" =>"Bicol",
                "country_id" =>"173"
            ),
            array(
                //"2838",
                "name" =>"Bulacan",
                "country_id" =>"173"
            ),
            array(
                //"2839",
                "name" =>"Cagayan",
                "country_id" =>"173"
            ),
            array(
                //"2840",
                "name" =>"Caraga",
                "country_id" =>"173"
            ),
            array(
                //"2841",
                "name" =>"Central Luzon",
                "country_id" =>"173"
            ),
            array(
                //"2842",
                "name" =>"Central Mindanao",
                "country_id" =>"173"
            ),
            array(
                //"2843",
                "name" =>"Central Visayas",
                "country_id" =>"173"
            ),
            array(
                //"2844",
                "name" =>"Cordillera",
                "country_id" =>"173"
            ),
            array(
                //"2845",
                "name" =>"Davao",
                "country_id" =>"173"
            ),
            array(
                //"2846",
                "name" =>"Eastern Visayas",
                "country_id" =>"173"
            ),
            array(
                //"2847",
                "name" =>"Greater Metropolitan Area",
                "country_id" =>"173"
            ),
            array(
                //"2848",
                "name" =>"Ilocos",
                "country_id" =>"173"
            ),
            array(
                //"2849",
                "name" =>"Laguna",
                "country_id" =>"173"
            ),
            array(
                //"2850",
                "name" =>"Luzon",
                "country_id" =>"173"
            ),
            array(
                //"2851",
                "name" =>"Mactan",
                "country_id" =>"173"
            ),
            array(
                //"2852",
                "name" =>"Metropolitan Manila Area",
                "country_id" =>"173"
            ),
            array(
                //"2853",
                "name" =>"Muslim Mindanao",
                "country_id" =>"173"
            ),
            array(
                //"2854",
                "name" =>"Northern Mindanao",
                "country_id" =>"173"
            ),
            array(
                //"2855",
                "name" =>"Southern Mindanao",
                "country_id" =>"173"
            ),
            array(
                //"2856",
                "name" =>"Southern Tagalog",
                "country_id" =>"173"
            ),
            array(
                //"2857",
                "name" =>"Western Mindanao",
                "country_id" =>"173"
            ),
            array(
                //"2858",
                "name" =>"Western Visayas",
                "country_id" =>"173"
            ),
            array(
                //"2859",
                "name" =>"Pitcairn Island",
                "country_id" =>"174"
            ),
            array(
                //"2860",
                "name" =>"Biale Blota",
                "country_id" =>"175"
            ),
            array(
                //"2861",
                "name" =>"Dobroszyce",
                "country_id" =>"175"
            ),
            array(
                //"2862",
                "name" =>"Dolnoslaskie",
                "country_id" =>"175"
            ),
            array(
                //"2863",
                "name" =>"Dziekanow Lesny",
                "country_id" =>"175"
            ),
            array(
                //"2864",
                "name" =>"Hopowo",
                "country_id" =>"175"
            ),
            array(
                //"2865",
                "name" =>"Kartuzy",
                "country_id" =>"175"
            ),
            array(
                //"2866",
                "name" =>"Koscian",
                "country_id" =>"175"
            ),
            array(
                //"2867",
                "name" =>"Krakow",
                "country_id" =>"175"
            ),
            array(
                //"2868",
                "name" =>"Kujawsko-Pomorskie",
                "country_id" =>"175"
            ),
            array(
                //"2869",
                "name" =>"Lodzkie",
                "country_id" =>"175"
            ),
            array(
                //"2870",
                "name" =>"Lubelskie",
                "country_id" =>"175"
            ),
            array(
                //"2871",
                "name" =>"Lubuskie",
                "country_id" =>"175"
            ),
            array(
                //"2872",
                "name" =>"Malomice",
                "country_id" =>"175"
            ),
            array(
                //"2873",
                "name" =>"Malopolskie",
                "country_id" =>"175"
            ),
            array(
                //"2874",
                "name" =>"Mazowieckie",
                "country_id" =>"175"
            ),
            array(
                //"2875",
                "name" =>"Mirkow",
                "country_id" =>"175"
            ),
            array(
                //"2876",
                "name" =>"Opolskie",
                "country_id" =>"175"
            ),
            array(
                //"2877",
                "name" =>"Ostrowiec",
                "country_id" =>"175"
            ),
            array(
                //"2878",
                "name" =>"Podkarpackie",
                "country_id" =>"175"
            ),
            array(
                //"2879",
                "name" =>"Podlaskie",
                "country_id" =>"175"
            ),
            array(
                //"2880",
                "name" =>"Polska",
                "country_id" =>"175"
            ),
            array(
                //"2881",
                "name" =>"Pomorskie",
                "country_id" =>"175"
            ),
            array(
                //"2882",
                "name" =>"Poznan",
                "country_id" =>"175"
            ),
            array(
                //"2883",
                "name" =>"Pruszkow",
                "country_id" =>"175"
            ),
            array(
                //"2884",
                "name" =>"Rymanowska",
                "country_id" =>"175"
            ),
            array(
                //"2885",
                "name" =>"Rzeszow",
                "country_id" =>"175"
            ),
            array(
                //"2886",
                "name" =>"Slaskie",
                "country_id" =>"175"
            ),
            array(
                //"2887",
                "name" =>"Stare Pole",
                "country_id" =>"175"
            ),
            array(
                //"2888",
                "name" =>"Swietokrzyskie",
                "country_id" =>"175"
            ),
            array(
                //"2889",
                "name" =>"Warminsko-Mazurskie",
                "country_id" =>"175"
            ),
            array(
                //"2890",
                "name" =>"Warsaw",
                "country_id" =>"175"
            ),
            array(
                //"2891",
                "name" =>"Wejherowo",
                "country_id" =>"175"
            ),
            array(
                //"2892",
                "name" =>"Wielkopolskie",
                "country_id" =>"175"
            ),
            array(
                //"2893",
                "name" =>"Wroclaw",
                "country_id" =>"175"
            ),
            array(
                //"2894",
                "name" =>"Zachodnio-Pomorskie",
                "country_id" =>"175"
            ),
            array(
                //"2895",
                "name" =>"Zukowo",
                "country_id" =>"175"
            ),
            array(
                //"2896",
                "name" =>"Abrantes",
                "country_id" =>"176"
            ),
            array(
                //"2897",
                "name" =>"Acores",
                "country_id" =>"176"
            ),
            array(
                //"2898",
                "name" =>"Alentejo",
                "country_id" =>"176"
            ),
            array(
                //"2899",
                "name" =>"Algarve",
                "country_id" =>"176"
            ),
            array(
                //"2900",
                "name" =>"Braga",
                "country_id" =>"176"
            ),
            array(
                //"2901",
                "name" =>"Centro",
                "country_id" =>"176"
            ),
            array(
                //"2902",
                "name" =>"Distrito de Leiria",
                "country_id" =>"176"
            ),
            array(
                //"2903",
                "name" =>"Distrito de Viana do Castelo",
                "country_id" =>"176"
            ),
            array(
                //"2904",
                "name" =>"Distrito de Vila Real",
                "country_id" =>"176"
            ),
            array(
                //"2905",
                "name" =>"Distrito do Porto",
                "country_id" =>"176"
            ),
            array(
                //"2906",
                "name" =>"Lisboa e Vale do Tejo",
                "country_id" =>"176"
            ),
            array(
                //"2907",
                "name" =>"Madeira",
                "country_id" =>"176"
            ),
            array(
                //"2908",
                "name" =>"Norte",
                "country_id" =>"176"
            ),
            array(
                //"2909",
                "name" =>"Paivas",
                "country_id" =>"176"
            ),
            array(
                //"2910",
                "name" =>"Arecibo",
                "country_id" =>"177"
            ),
            array(
                //"2911",
                "name" =>"Bayamon",
                "country_id" =>"177"
            ),
            array(
                //"2912",
                "name" =>"Carolina",
                "country_id" =>"177"
            ),
            array(
                //"2913",
                "name" =>"Florida",
                "country_id" =>"177"
            ),
            array(
                //"2914",
                "name" =>"Guayama",
                "country_id" =>"177"
            ),
            array(
                //"2915",
                "name" =>"Humacao",
                "country_id" =>"177"
            ),
            array(
                //"2916",
                "name" =>"Mayaguez-Aguadilla",
                "country_id" =>"177"
            ),
            array(
                //"2917",
                "name" =>"Ponce",
                "country_id" =>"177"
            ),
            array(
                //"2918",
                "name" =>"Salinas",
                "country_id" =>"177"
            ),
            array(
                //"2919",
                "name" =>"San Juan",
                "country_id" =>"177"
            ),
            array(
                //"2920",
                "name" =>"Doha",
                "country_id" =>"178"
            ),
            array(
                //"2921",
                "name" =>"Jarian-al-Batnah",
                "country_id" =>"178"
            ),
            array(
                //"2922",
                "name" =>"Umm Salal",
                "country_id" =>"178"
            ),
            array(
                //"2923",
                "name" =>"ad-Dawhah",
                "country_id" =>"178"
            ),
            array(
                //"2924",
                "name" =>"al-Ghuwayriyah",
                "country_id" =>"178"
            ),
            array(
                //"2925",
                "name" =>"al-Jumayliyah",
                "country_id" =>"178"
            ),
            array(
                //"2926",
                "name" =>"al-Khawr",
                "country_id" =>"178"
            ),
            array(
                //"2927",
                "name" =>"al-Wakrah",
                "country_id" =>"178"
            ),
            array(
                //"2928",
                "name" =>"ar-Rayyan",
                "country_id" =>"178"
            ),
            array(
                //"2929",
                "name" =>"ash-Shamal",
                "country_id" =>"178"
            ),
            array(
                //"2930",
                "name" =>"Saint-Benoit",
                "country_id" =>"179"
            ),
            array(
                //"2931",
                "name" =>"Saint-Denis",
                "country_id" =>"179"
            ),
            array(
                //"2932",
                "name" =>"Saint-Paul",
                "country_id" =>"179"
            ),
            array(
                //"2933",
                "name" =>"Saint-Pierre",
                "country_id" =>"179"
            ),
            array(
                //"2934",
                "name" =>"Alba",
                "country_id" =>"180"
            ),
            array(
                //"2935",
                "name" =>"Arad",
                "country_id" =>"180"
            ),
            array(
                //"2936",
                "name" =>"Arges",
                "country_id" =>"180"
            ),
            array(
                //"2937",
                "name" =>"Bacau",
                "country_id" =>"180"
            ),
            array(
                //"2938",
                "name" =>"Bihor",
                "country_id" =>"180"
            ),
            array(
                //"2939",
                "name" =>"Bistrita-Nasaud",
                "country_id" =>"180"
            ),
            array(
                //"2940",
                "name" =>"Botosani",
                "country_id" =>"180"
            ),
            array(
                //"2941",
                "name" =>"Braila",
                "country_id" =>"180"
            ),
            array(
                //"2942",
                "name" =>"Brasov",
                "country_id" =>"180"
            ),
            array(
                //"2943",
                "name" =>"Bucuresti",
                "country_id" =>"180"
            ),
            array(
                //"2944",
                "name" =>"Buzau",
                "country_id" =>"180"
            ),
            array(
                //"2945",
                "name" =>"Calarasi",
                "country_id" =>"180"
            ),
            array(
                //"2946",
                "name" =>"Caras-Severin",
                "country_id" =>"180"
            ),
            array(
                //"2947",
                "name" =>"Cluj",
                "country_id" =>"180"
            ),
            array(
                //"2948",
                "name" =>"Constanta",
                "country_id" =>"180"
            ),
            array(
                //"2949",
                "name" =>"Covasna",
                "country_id" =>"180"
            ),
            array(
                //"2950",
                "name" =>"Dambovita",
                "country_id" =>"180"
            ),
            array(
                //"2951",
                "name" =>"Dolj",
                "country_id" =>"180"
            ),
            array(
                //"2952",
                "name" =>"Galati",
                "country_id" =>"180"
            ),
            array(
                //"2953",
                "name" =>"Giurgiu",
                "country_id" =>"180"
            ),
            array(
                //"2954",
                "name" =>"Gorj",
                "country_id" =>"180"
            ),
            array(
                //"2955",
                "name" =>"Harghita",
                "country_id" =>"180"
            ),
            array(
                //"2956",
                "name" =>"Hunedoara",
                "country_id" =>"180"
            ),
            array(
                //"2957",
                "name" =>"Ialomita",
                "country_id" =>"180"
            ),
            array(
                //"2958",
                "name" =>"Iasi",
                "country_id" =>"180"
            ),
            array(
                //"2959",
                "name" =>"Ilfov",
                "country_id" =>"180"
            ),
            array(
                //"2960",
                "name" =>"Maramures",
                "country_id" =>"180"
            ),
            array(
                //"2961",
                "name" =>"Mehedinti",
                "country_id" =>"180"
            ),
            array(
                //"2962",
                "name" =>"Mures",
                "country_id" =>"180"
            ),
            array(
                //"2963",
                "name" =>"Neamt",
                "country_id" =>"180"
            ),
            array(
                //"2964",
                "name" =>"Olt",
                "country_id" =>"180"
            ),
            array(
                //"2965",
                "name" =>"Prahova",
                "country_id" =>"180"
            ),
            array(
                //"2966",
                "name" =>"Salaj",
                "country_id" =>"180"
            ),
            array(
                //"2967",
                "name" =>"Satu Mare",
                "country_id" =>"180"
            ),
            array(
                //"2968",
                "name" =>"Sibiu",
                "country_id" =>"180"
            ),
            array(
                //"2969",
                "name" =>"Sondelor",
                "country_id" =>"180"
            ),
            array(
                //"2970",
                "name" =>"Suceava",
                "country_id" =>"180"
            ),
            array(
                //"2971",
                "name" =>"Teleorman",
                "country_id" =>"180"
            ),
            array(
                //"2972",
                "name" =>"Timis",
                "country_id" =>"180"
            ),
            array(
                //"2973",
                "name" =>"Tulcea",
                "country_id" =>"180"
            ),
            array(
                //"2974",
                "name" =>"Valcea",
                "country_id" =>"180"
            ),
            array(
                //"2975",
                "name" =>"Vaslui",
                "country_id" =>"180"
            ),
            array(
                //"2976",
                "name" =>"Vrancea",
                "country_id" =>"180"
            ),
            array(
                //"2977",
                "name" =>"Adygeja",
                "country_id" =>"181"
            ),
            array(
                //"2978",
                "name" =>"Aga",
                "country_id" =>"181"
            ),
            array(
                //"2979",
                "name" =>"Alanija",
                "country_id" =>"181"
            ),
            array(
                //"2980",
                "name" =>"Altaj",
                "country_id" =>"181"
            ),
            array(
                //"2981",
                "name" =>"Amur",
                "country_id" =>"181"
            ),
            array(
                //"2982",
                "name" =>"Arhangelsk",
                "country_id" =>"181"
            ),
            array(
                //"2983",
                "name" =>"Astrahan",
                "country_id" =>"181"
            ),
            array(
                //"2984",
                "name" =>"Bashkortostan",
                "country_id" =>"181"
            ),
            array(
                //"2985",
                "name" =>"Belgorod",
                "country_id" =>"181"
            ),
            array(
                //"2986",
                "name" =>"Brjansk",
                "country_id" =>"181"
            ),
            array(
                //"2987",
                "name" =>"Burjatija",
                "country_id" =>"181"
            ),
            array(
                //"2988",
                "name" =>"Chechenija",
                "country_id" =>"181"
            ),
            array(
                //"2989",
                "name" =>"Cheljabinsk",
                "country_id" =>"181"
            ),
            array(
                //"2990",
                "name" =>"Chita",
                "country_id" =>"181"
            ),
            array(
                //"2991",
                "name" =>"Chukotka",
                "country_id" =>"181"
            ),
            array(
                //"2992",
                "name" =>"Chuvashija",
                "country_id" =>"181"
            ),
            array(
                //"2993",
                "name" =>"Dagestan",
                "country_id" =>"181"
            ),
            array(
                //"2994",
                "name" =>"Evenkija",
                "country_id" =>"181"
            ),
            array(
                //"2995",
                "name" =>"Gorno-Altaj",
                "country_id" =>"181"
            ),
            array(
                //"2996",
                "name" =>"Habarovsk",
                "country_id" =>"181"
            ),
            array(
                //"2997",
                "name" =>"Hakasija",
                "country_id" =>"181"
            ),
            array(
                //"2998",
                "name" =>"Hanty-Mansija",
                "country_id" =>"181"
            ),
            array(
                //"2999",
                "name" =>"Ingusetija",
                "country_id" =>"181"
            ),
        ));

        DB::table('states')->insert(array(





            array(
                //"3000",
                "name" =>"Irkutsk",
                "country_id" =>"181"
            ),
            array(
                //"3001",
                "name" =>"Ivanovo",
                "country_id" =>"181"
            ),
            array(
                //"3002",
                "name" =>"Jamalo-Nenets",
                "country_id" =>"181"
            ),
            array(
                //"3003",
                "name" =>"Jaroslavl",
                "country_id" =>"181"
            ),
            array(
                //"3004",
                "name" =>"Jevrej",
                "country_id" =>"181"
            ),
            array(
                //"3005",
                "name" =>"Kabardino-Balkarija",
                "country_id" =>"181"
            ),
            array(
                //"3006",
                "name" =>"Kaliningrad",
                "country_id" =>"181"
            ),
            array(
                //"3007",
                "name" =>"Kalmykija",
                "country_id" =>"181"
            ),
            array(
                //"3008",
                "name" =>"Kaluga",
                "country_id" =>"181"
            ),
            array(
                //"3009",
                "name" =>"Kamchatka",
                "country_id" =>"181"
            ),
            array(
                //"3010",
                "name" =>"Karachaj-Cherkessija",
                "country_id" =>"181"
            ),
            array(
                //"3011",
                "name" =>"Karelija",
                "country_id" =>"181"
            ),
            array(
                //"3012",
                "name" =>"Kemerovo",
                "country_id" =>"181"
            ),
            array(
                //"3013",
                "name" =>"Khabarovskiy Kray",
                "country_id" =>"181"
            ),
            array(
                //"3014",
                "name" =>"Kirov",
                "country_id" =>"181"
            ),
            array(
                //"3015",
                "name" =>"Komi",
                "country_id" =>"181"
            ),
            array(
                //"3016",
                "name" =>"Komi-Permjakija",
                "country_id" =>"181"
            ),
            array(
                //"3017",
                "name" =>"Korjakija",
                "country_id" =>"181"
            ),
            array(
                //"3018",
                "name" =>"Kostroma",
                "country_id" =>"181"
            ),
            array(
                //"3019",
                "name" =>"Krasnodar",
                "country_id" =>"181"
            ),
            array(
                //"3020",
                "name" =>"Krasnojarsk",
                "country_id" =>"181"
            ),
            array(
                //"3021",
                "name" =>"Krasnoyarskiy Kray",
                "country_id" =>"181"
            ),
            array(
                //"3022",
                "name" =>"Kurgan",
                "country_id" =>"181"
            ),
            array(
                //"3023",
                "name" =>"Kursk",
                "country_id" =>"181"
            ),
            array(
                //"3024",
                "name" =>"Leningrad",
                "country_id" =>"181"
            ),
            array(
                //"3025",
                "name" =>"Lipeck",
                "country_id" =>"181"
            ),
            array(
                //"3026",
                "name" =>"Magadan",
                "country_id" =>"181"
            ),
            array(
                //"3027",
                "name" =>"Marij El",
                "country_id" =>"181"
            ),
            array(
                //"3028",
                "name" =>"Mordovija",
                "country_id" =>"181"
            ),
            array(
                //"3029",
                "name" =>"Moscow",
                "country_id" =>"181"
            ),
            array(
                //"3030",
                "name" =>"Moskovskaja Oblast",
                "country_id" =>"181"
            ),
            array(
                //"3031",
                "name" =>"Moskovskaya Oblast",
                "country_id" =>"181"
            ),
            array(
                //"3032",
                "name" =>"Moskva",
                "country_id" =>"181"
            ),
            array(
                //"3033",
                "name" =>"Murmansk",
                "country_id" =>"181"
            ),
            array(
                //"3034",
                "name" =>"Nenets",
                "country_id" =>"181"
            ),
            array(
                //"3035",
                "name" =>"Nizhnij Novgorod",
                "country_id" =>"181"
            ),
            array(
                //"3036",
                "name" =>"Novgorod",
                "country_id" =>"181"
            ),
            array(
                //"3037",
                "name" =>"Novokusnezk",
                "country_id" =>"181"
            ),
            array(
                //"3038",
                "name" =>"Novosibirsk",
                "country_id" =>"181"
            ),
            array(
                //"3039",
                "name" =>"Omsk",
                "country_id" =>"181"
            ),
            array(
                //"3040",
                "name" =>"Orenburg",
                "country_id" =>"181"
            ),
            array(
                //"3041",
                "name" =>"Orjol",
                "country_id" =>"181"
            ),
            array(
                //"3042",
                "name" =>"Penza",
                "country_id" =>"181"
            ),
            array(
                //"3043",
                "name" =>"Perm",
                "country_id" =>"181"
            ),
            array(
                //"3044",
                "name" =>"Primorje",
                "country_id" =>"181"
            ),
            array(
                //"3045",
                "name" =>"Pskov",
                "country_id" =>"181"
            ),
            array(
                //"3046",
                "name" =>"Pskovskaya Oblast",
                "country_id" =>"181"
            ),
            array(
                //"3047",
                "name" =>"Rjazan",
                "country_id" =>"181"
            ),
            array(
                //"3048",
                "name" =>"Rostov",
                "country_id" =>"181"
            ),
            array(
                //"3049",
                "name" =>"Saha",
                "country_id" =>"181"
            ),
            array(
                //"3050",
                "name" =>"Sahalin",
                "country_id" =>"181"
            ),
            array(
                //"3051",
                "name" =>"Samara",
                "country_id" =>"181"
            ),
            array(
                //"3052",
                "name" =>"Samarskaya",
                "country_id" =>"181"
            ),
            array(
                //"3053",
                "name" =>"Sankt-Peterburg",
                "country_id" =>"181"
            ),
            array(
                //"3054",
                "name" =>"Saratov",
                "country_id" =>"181"
            ),
            array(
                //"3055",
                "name" =>"Smolensk",
                "country_id" =>"181"
            ),
            array(
                //"3056",
                "name" =>"Stavropol",
                "country_id" =>"181"
            ),
            array(
                //"3057",
                "name" =>"Sverdlovsk",
                "country_id" =>"181"
            ),
            array(
                //"3058",
                "name" =>"Tajmyrija",
                "country_id" =>"181"
            ),
            array(
                //"3059",
                "name" =>"Tambov",
                "country_id" =>"181"
            ),
            array(
                //"3060",
                "name" =>"Tatarstan",
                "country_id" =>"181"
            ),
            array(
                //"3061",
                "name" =>"Tjumen",
                "country_id" =>"181"
            ),
            array(
                //"3062",
                "name" =>"Tomsk",
                "country_id" =>"181"
            ),
            array(
                //"3063",
                "name" =>"Tula",
                "country_id" =>"181"
            ),
            array(
                //"3064",
                "name" =>"Tver",
                "country_id" =>"181"
            ),
            array(
                //"3065",
                "name" =>"Tyva",
                "country_id" =>"181"
            ),
            array(
                //"3066",
                "name" =>"Udmurtija",
                "country_id" =>"181"
            ),
            array(
                //"3067",
                "name" =>"Uljanovsk",
                "country_id" =>"181"
            ),
            array(
                //"3068",
                "name" =>"Ulyanovskaya Oblast",
                "country_id" =>"181"
            ),
            array(
                //"3069",
                "name" =>"Ust-Orda",
                "country_id" =>"181"
            ),
            array(
                //"3070",
                "name" =>"Vladimir",
                "country_id" =>"181"
            ),
            array(
                //"3071",
                "name" =>"Volgograd",
                "country_id" =>"181"
            ),
            array(
                //"3072",
                "name" =>"Vologda",
                "country_id" =>"181"
            ),
            array(
                //"3073",
                "name" =>"Voronezh",
                "country_id" =>"181"
            ),
            array(
                //"3074",
                "name" =>"Butare",
                "country_id" =>"182"
            ),
            array(
                //"3075",
                "name" =>"Byumba",
                "country_id" =>"182"
            ),
            array(
                //"3076",
                "name" =>"Cyangugu",
                "country_id" =>"182"
            ),
            array(
                //"3077",
                "name" =>"Gikongoro",
                "country_id" =>"182"
            ),
            array(
                //"3078",
                "name" =>"Gisenyi",
                "country_id" =>"182"
            ),
            array(
                //"3079",
                "name" =>"Gitarama",
                "country_id" =>"182"
            ),
            array(
                //"3080",
                "name" =>"Kibungo",
                "country_id" =>"182"
            ),
            array(
                //"3081",
                "name" =>"Kibuye",
                "country_id" =>"182"
            ),
            array(
                //"3082",
                "name" =>"Kigali-ngali",
                "country_id" =>"182"
            ),
            array(
                //"3083",
                "name" =>"Ruhengeri",
                "country_id" =>"182"
            ),
            array(
                //"3084",
                "name" =>"Ascension",
                "country_id" =>"183"
            ),
            array(
                //"3085",
                "name" =>"Gough Island",
                "country_id" =>"183"
            ),
            array(
                //"3086",
                "name" =>"Saint Helena",
                "country_id" =>"183"
            ),
            array(
                //"3087",
                "name" =>"Tristan da Cunha",
                "country_id" =>"183"
            ),
            array(
                //"3088",
                "name" =>"Christ Church Nichola Town",
                "country_id" =>"184"
            ),
            array(
                //"3089",
                "name" =>"Saint Anne Sandy Point",
                "country_id" =>"184"
            ),
            array(
                //"3090",
                "name" =>"Saint George Basseterre",
                "country_id" =>"184"
            ),
            array(
                //"3091",
                "name" =>"Saint George Gingerland",
                "country_id" =>"184"
            ),
            array(
                //"3092",
                "name" =>"Saint James Windward",
                "country_id" =>"184"
            ),
            array(
                //"3093",
                "name" =>"Saint John Capesterre",
                "country_id" =>"184"
            ),
            array(
                //"3094",
                "name" =>"Saint John Figtree",
                "country_id" =>"184"
            ),
            array(
                //"3095",
                "name" =>"Saint Mary Cayon",
                "country_id" =>"184"
            ),
            array(
                //"3096",
                "name" =>"Saint Paul Capesterre",
                "country_id" =>"184"
            ),
            array(
                //"3097",
                "name" =>"Saint Paul Charlestown",
                "country_id" =>"184"
            ),
            array(
                //"3098",
                "name" =>"Saint Peter Basseterre",
                "country_id" =>"184"
            ),
            array(
                //"3099",
                "name" =>"Saint Thomas Lowland",
                "country_id" =>"184"
            ),
            array(
                //"3100",
                "name" =>"Saint Thomas Middle Island",
                "country_id" =>"184"
            ),
            array(
                //"3101",
                "name" =>"Trinity Palmetto Point",
                "country_id" =>"184"
            ),
            array(
                //"3102",
                "name" =>"Anse-la-Raye",
                "country_id" =>"185"
            ),
            array(
                //"3103",
                "name" =>"Canaries",
                "country_id" =>"185"
            ),
            array(
                //"3104",
                "name" =>"Castries",
                "country_id" =>"185"
            ),
            array(
                //"3105",
                "name" =>"Choiseul",
                "country_id" =>"185"
            ),
            array(
                //"3106",
                "name" =>"Dennery",
                "country_id" =>"185"
            ),
            array(
                //"3107",
                "name" =>"Gros Inlet",
                "country_id" =>"185"
            ),
            array(
                //"3108",
                "name" =>"Laborie",
                "country_id" =>"185"
            ),
            array(
                //"3109",
                "name" =>"Micoud",
                "country_id" =>"185"
            ),
            array(
                //"3110",
                "name" =>"Soufriere",
                "country_id" =>"185"
            ),
            array(
                //"3111",
                "name" =>"Vieux Fort",
                "country_id" =>"185"
            ),
            array(
                //"3112",
                "name" =>"Miquelon-Langlade",
                "country_id" =>"186"
            ),
            array(
                //"3113",
                "name" =>"Saint-Pierre",
                "country_id" =>"186"
            ),
            array(
                //"3114",
                "name" =>"Charlotte",
                "country_id" =>"187"
            ),
            array(
                //"3115",
                "name" =>"Grenadines",
                "country_id" =>"187"
            ),
            array(
                //"3116",
                "name" =>"Saint Andrew",
                "country_id" =>"187"
            ),
            array(
                //"3117",
                "name" =>"Saint David",
                "country_id" =>"187"
            ),
            array(
                //"3118",
                "name" =>"Saint George",
                "country_id" =>"187"
            ),
            array(
                //"3119",
                "name" =>"Saint Patrick",
                "country_id" =>"187"
            ),
            array(
                //"3120",
                "name" =>"A''ana",
                "country_id" =>"188"
            ),
            array(
                //"3121",
                "name" =>"Aiga-i-le-Tai",
                "country_id" =>"188"
            ),
            array(
                //"3122",
                "name" =>"Atua",
                "country_id" =>"188"
            ),
            array(
                //"3123",
                "name" =>"Fa''asaleleaga",
                "country_id" =>"188"
            ),
            array(
                //"3124",
                "name" =>"Gaga''emauga",
                "country_id" =>"188"
            ),
            array(
                //"3125",
                "name" =>"Gagaifomauga",
                "country_id" =>"188"
            ),
            array(
                //"3126",
                "name" =>"Palauli",
                "country_id" =>"188"
            ),
            array(
                //"3127",
                "name" =>"Satupa''itea",
                "country_id" =>"188"
            ),
            array(
                //"3128",
                "name" =>"Tuamasaga",
                "country_id" =>"188"
            ),
            array(
                //"3129",
                "name" =>"Va''a-o-Fonoti",
                "country_id" =>"188"
            ),
            array(
                //"3130",
                "name" =>"Vaisigano",
                "country_id" =>"188"
            ),
            array(
                //"3131",
                "name" =>"Acquaviva",
                "country_id" =>"189"
            ),
            array(
                //"3132",
                "name" =>"Borgo Maggiore",
                "country_id" =>"189"
            ),
            array(
                //"3133",
                "name" =>"Chiesanuova",
                "country_id" =>"189"
            ),
            array(
                //"3134",
                "name" =>"Domagnano",
                "country_id" =>"189"
            ),
            array(
                //"3135",
                "name" =>"Faetano",
                "country_id" =>"189"
            ),
            array(
                //"3136",
                "name" =>"Fiorentino",
                "country_id" =>"189"
            ),
            array(
                //"3137",
                "name" =>"Montegiardino",
                "country_id" =>"189"
            ),
            array(
                //"3138",
                "name" =>"San Marino",
                "country_id" =>"189"
            ),
            array(
                //"3139",
                "name" =>"Serravalle",
                "country_id" =>"189"
            ),
            array(
                //"3140",
                "name" =>"Agua Grande",
                "country_id" =>"190"
            ),
            array(
                //"3141",
                "name" =>"Cantagalo",
                "country_id" =>"190"
            ),
            array(
                //"3142",
                "name" =>"Lemba",
                "country_id" =>"190"
            ),
            array(
                //"3143",
                "name" =>"Lobata",
                "country_id" =>"190"
            ),
            array(
                //"3144",
                "name" =>"Me-Zochi",
                "country_id" =>"190"
            ),
            array(
                //"3145",
                "name" =>"Pague",
                "country_id" =>"190"
            ),
            array(
                //"3146",
                "name" =>"Al Khobar",
                "country_id" =>"191"
            ),
            array(
                //"3147",
                "name" =>"Aseer",
                "country_id" =>"191"
            ),
            array(
                //"3148",
                "name" =>"Ash Sharqiyah",
                "country_id" =>"191"
            ),
            array(
                //"3149",
                "name" =>"Asir",
                "country_id" =>"191"
            ),
            array(
                //"3150",
                "name" =>"Central Province",
                "country_id" =>"191"
            ),
            array(
                //"3151",
                "name" =>"Eastern Province",
                "country_id" =>"191"
            ),
            array(
                //"3152",
                "name" =>"Ha''il",
                "country_id" =>"191"
            ),
            array(
                //"3153",
                "name" =>"Jawf",
                "country_id" =>"191"
            ),
            array(
                //"3154",
                "name" =>"Jizan",
                "country_id" =>"191"
            ),
            array(
                //"3155",
                "name" =>"Makkah",
                "country_id" =>"191"
            ),
            array(
                //"3156",
                "name" =>"Najran",
                "country_id" =>"191"
            ),
            array(
                //"3157",
                "name" =>"Qasim",
                "country_id" =>"191"
            ),
            array(
                //"3158",
                "name" =>"Tabuk",
                "country_id" =>"191"
            ),
            array(
                //"3159",
                "name" =>"Western Province",
                "country_id" =>"191"
            ),
            array(
                //"3160",
                "name" =>"al-Bahah",
                "country_id" =>"191"
            ),
            array(
                //"3161",
                "name" =>"al-Hudud-ash-Shamaliyah",
                "country_id" =>"191"
            ),
            array(
                //"3162",
                "name" =>"al-Madinah",
                "country_id" =>"191"
            ),
            array(
                //"3163",
                "name" =>"ar-Riyad",
                "country_id" =>"191"
            ),
            array(
                //"3164",
                "name" =>"Dakar",
                "country_id" =>"192"
            ),
            array(
                //"3165",
                "name" =>"Diourbel",
                "country_id" =>"192"
            ),
            array(
                //"3166",
                "name" =>"Fatick",
                "country_id" =>"192"
            ),
            array(
                //"3167",
                "name" =>"Kaolack",
                "country_id" =>"192"
            ),
            array(
                //"3168",
                "name" =>"Kolda",
                "country_id" =>"192"
            ),
            array(
                //"3169",
                "name" =>"Louga",
                "country_id" =>"192"
            ),
            array(
                //"3170",
                "name" =>"Saint-Louis",
                "country_id" =>"192"
            ),
            array(
                //"3171",
                "name" =>"Tambacounda",
                "country_id" =>"192"
            ),
            array(
                //"3172",
                "name" =>"Thies",
                "country_id" =>"192"
            ),
            array(
                //"3173",
                "name" =>"Ziguinchor",
                "country_id" =>"192"
            ),
            array(
                //"3174",
                "name" =>"Central Serbia",
                "country_id" =>"193"
            ),
            array(
                //"3175",
                "name" =>"Kosovo and Metohija",
                "country_id" =>"193"
            ),
            array(
                //"3176",
                "name" =>"Vojvodina",
                "country_id" =>"193"
            ),
            array(
                //"3177",
                "name" =>"Anse Boileau",
                "country_id" =>"194"
            ),
            array(
                //"3178",
                "name" =>"Anse Royale",
                "country_id" =>"194"
            ),
            array(
                //"3179",
                "name" =>"Cascade",
                "country_id" =>"194"
            ),
            array(
                //"3180",
                "name" =>"Takamaka",
                "country_id" =>"194"
            ),
            array(
                //"3181",
                "name" =>"Victoria",
                "country_id" =>"194"
            ),
            array(
                //"3182",
                "name" =>"Eastern",
                "country_id" =>"195"
            ),
            array(
                //"3183",
                "name" =>"Northern",
                "country_id" =>"195"
            ),
            array(
                //"3184",
                "name" =>"Southern",
                "country_id" =>"195"
            ),
            array(
                //"3185",
                "name" =>"Western",
                "country_id" =>"195"
            ),
            array(
                //"3186",
                "name" =>"Singapore",
                "country_id" =>"196"
            ),
            array(
                //"3187",
                "name" =>"Banskobystricky",
                "country_id" =>"197"
            ),
            array(
                //"3188",
                "name" =>"Bratislavsky",
                "country_id" =>"197"
            ),
            array(
                //"3189",
                "name" =>"Kosicky",
                "country_id" =>"197"
            ),
            array(
                //"3190",
                "name" =>"Nitriansky",
                "country_id" =>"197"
            ),
            array(
                //"3191",
                "name" =>"Presovsky",
                "country_id" =>"197"
            ),
            array(
                //"3192",
                "name" =>"Trenciansky",
                "country_id" =>"197"
            ),
            array(
                //"3193",
                "name" =>"Trnavsky",
                "country_id" =>"197"
            ),
            array(
                //"3194",
                "name" =>"Zilinsky",
                "country_id" =>"197"
            ),
            array(
                //"3195",
                "name" =>"Benedikt",
                "country_id" =>"198"
            ),
            array(
                //"3196",
                "name" =>"Gorenjska",
                "country_id" =>"198"
            ),
            array(
                //"3197",
                "name" =>"Gorishka",
                "country_id" =>"198"
            ),
            array(
                //"3198",
                "name" =>"Jugovzhodna Slovenija",
                "country_id" =>"198"
            ),
            array(
                //"3199",
                "name" =>"Koroshka",
                "country_id" =>"198"
            ),
            array(
                //"3200",
                "name" =>"Notranjsko-krashka",
                "country_id" =>"198"
            ),
            array(
                //"3201",
                "name" =>"Obalno-krashka",
                "country_id" =>"198"
            ),
            array(
                //"3202",
                "name" =>"Obcina Domzale",
                "country_id" =>"198"
            ),
            array(
                //"3203",
                "name" =>"Obcina Vitanje",
                "country_id" =>"198"
            ),
            array(
                //"3204",
                "name" =>"Osrednjeslovenska",
                "country_id" =>"198"
            ),
            array(
                //"3205",
                "name" =>"Podravska",
                "country_id" =>"198"
            ),
            array(
                //"3206",
                "name" =>"Pomurska",
                "country_id" =>"198"
            ),
            array(
                //"3207",
                "name" =>"Savinjska",
                "country_id" =>"198"
            ),
            array(
                //"3208",
                "name" =>"Slovenian Littoral",
                "country_id" =>"198"
            ),
            array(
                //"3209",
                "name" =>"Spodnjeposavska",
                "country_id" =>"198"
            ),
            array(
                //"3210",
                "name" =>"Zasavska",
                "country_id" =>"198"
            ),
            array(
                //"3211",
                "name" =>"Pitcairn",
                "country_id" =>"199"
            ),
            array(
                //"3212",
                "name" =>"Central",
                "country_id" =>"200"
            ),
            array(
                //"3213",
                "name" =>"Choiseul",
                "country_id" =>"200"
            ),
            array(
                //"3214",
                "name" =>"Guadalcanal",
                "country_id" =>"200"
            ),
            array(
                //"3215",
                "name" =>"Isabel",
                "country_id" =>"200"
            ),
            array(
                //"3216",
                "name" =>"Makira and Ulawa",
                "country_id" =>"200"
            ),
            array(
                //"3217",
                "name" =>"Malaita",
                "country_id" =>"200"
            ),
            array(
                //"3218",
                "name" =>"Rennell and Bellona",
                "country_id" =>"200"
            ),
            array(
                //"3219",
                "name" =>"Temotu",
                "country_id" =>"200"
            ),
            array(
                //"3220",
                "name" =>"Western",
                "country_id" =>"200"
            ),
            array(
                //"3221",
                "name" =>"Awdal",
                "country_id" =>"201"
            ),
            array(
                //"3222",
                "name" =>"Bakol",
                "country_id" =>"201"
            ),
            array(
                //"3223",
                "name" =>"Banadir",
                "country_id" =>"201"
            ),
            array(
                //"3224",
                "name" =>"Bari",
                "country_id" =>"201"
            ),
            array(
                //"3225",
                "name" =>"Bay",
                "country_id" =>"201"
            ),
            array(
                //"3226",
                "name" =>"Galgudug",
                "country_id" =>"201"
            ),
            array(
                //"3227",
                "name" =>"Gedo",
                "country_id" =>"201"
            ),
            array(
                //"3228",
                "name" =>"Hiran",
                "country_id" =>"201"
            ),
            array(
                //"3229",
                "name" =>"Jubbada Hose",
                "country_id" =>"201"
            ),
            array(
                //"3230",
                "name" =>"Jubbadha Dexe",
                "country_id" =>"201"
            ),
            array(
                //"3231",
                "name" =>"Mudug",
                "country_id" =>"201"
            ),
            array(
                //"3232",
                "name" =>"Nugal",
                "country_id" =>"201"
            ),
            array(
                //"3233",
                "name" =>"Sanag",
                "country_id" =>"201"
            ),
            array(
                //"3234",
                "name" =>"Shabellaha Dhexe",
                "country_id" =>"201"
            ),
            array(
                //"3235",
                "name" =>"Shabellaha Hose",
                "country_id" =>"201"
            ),
            array(
                //"3236",
                "name" =>"Togdher",
                "country_id" =>"201"
            ),
            array(
                //"3237",
                "name" =>"Woqoyi Galbed",
                "country_id" =>"201"
            ),
            array(
                //"3238",
                "name" =>"Eastern Cape",
                "country_id" =>"202"
            ),
            array(
                //"3239",
                "name" =>"Free State",
                "country_id" =>"202"
            ),
            array(
                //"3240",
                "name" =>"Gauteng",
                "country_id" =>"202"
            ),
            array(
                //"3241",
                "name" =>"Kempton Park",
                "country_id" =>"202"
            ),
            array(
                //"3242",
                "name" =>"Kramerville",
                "country_id" =>"202"
            ),
            array(
                //"3243",
                "name" =>"KwaZulu Natal",
                "country_id" =>"202"
            ),
            array(
                //"3244",
                "name" =>"Limpopo",
                "country_id" =>"202"
            ),
            array(
                //"3245",
                "name" =>"Mpumalanga",
                "country_id" =>"202"
            ),
            array(
                //"3246",
                "name" =>"North West",
                "country_id" =>"202"
            ),
            array(
                //"3247",
                "name" =>"Northern Cape",
                "country_id" =>"202"
            ),
            array(
                //"3248",
                "name" =>"Parow",
                "country_id" =>"202"
            ),
            array(
                //"3249",
                "name" =>"Table View",
                "country_id" =>"202"
            ),
            array(
                //"3250",
                "name" =>"Umtentweni",
                "country_id" =>"202"
            ),
            array(
                //"3251",
                "name" =>"Western Cape",
                "country_id" =>"202"
            ),
            array(
                //"3252",
                "name" =>"South Georgia",
                "country_id" =>"203"
            ),
            array(
                //"3253",
                "name" =>"Central Equatoria",
                "country_id" =>"204"
            ),
            array(
                //"3254",
                "name" =>"A Coruna",
                "country_id" =>"205"
            ),
            array(
                //"3255",
                "name" =>"Alacant",
                "country_id" =>"205"
            ),
            array(
                //"3256",
                "name" =>"Alava",
                "country_id" =>"205"
            ),
            array(
                //"3257",
                "name" =>"Albacete",
                "country_id" =>"205"
            ),
            array(
                //"3258",
                "name" =>"Almeria",
                "country_id" =>"205"
            ),
            array(
                //"3259",
                "name" =>"Andalucia",
                "country_id" =>"205"
            ),
            array(
                //"3260",
                "name" =>"Asturias",
                "country_id" =>"205"
            ),
            array(
                //"3261",
                "name" =>"Avila",
                "country_id" =>"205"
            ),
            array(
                //"3262",
                "name" =>"Badajoz",
                "country_id" =>"205"
            ),
            array(
                //"3263",
                "name" =>"Balears",
                "country_id" =>"205"
            ),
            array(
                //"3264",
                "name" =>"Barcelona",
                "country_id" =>"205"
            ),
            array(
                //"3265",
                "name" =>"Bertamirans",
                "country_id" =>"205"
            ),
            array(
                //"3266",
                "name" =>"Biscay",
                "country_id" =>"205"
            ),
            array(
                //"3267",
                "name" =>"Burgos",
                "country_id" =>"205"
            ),
            array(
                //"3268",
                "name" =>"Caceres",
                "country_id" =>"205"
            ),
            array(
                //"3269",
                "name" =>"Cadiz",
                "country_id" =>"205"
            ),
            array(
                //"3270",
                "name" =>"Cantabria",
                "country_id" =>"205"
            ),
            array(
                //"3271",
                "name" =>"Castello",
                "country_id" =>"205"
            ),
            array(
                //"3272",
                "name" =>"Catalunya",
                "country_id" =>"205"
            ),
            array(
                //"3273",
                "name" =>"Ceuta",
                "country_id" =>"205"
            ),
            array(
                //"3274",
                "name" =>"Ciudad Real",
                "country_id" =>"205"
            ),
            array(
                //"3275",
                "name" =>"Comunidad Autonoma de Canarias",
                "country_id" =>"205"
            ),
            array(
                //"3276",
                "name" =>"Comunidad Autonoma de Cataluna",
                "country_id" =>"205"
            ),
            array(
                //"3277",
                "name" =>"Comunidad Autonoma de Galicia",
                "country_id" =>"205"
            ),
            array(
                //"3278",
                "name" =>"Comunidad Autonoma de las Isla",
                "country_id" =>"205"
            ),
            array(
                //"3279",
                "name" =>"Comunidad Autonoma del Princip",
                "country_id" =>"205"
            ),
            array(
                //"3280",
                "name" =>"Comunidad Valenciana",
                "country_id" =>"205"
            ),
            array(
                //"3281",
                "name" =>"Cordoba",
                "country_id" =>"205"
            ),
            array(
                //"3282",
                "name" =>"Cuenca",
                "country_id" =>"205"
            ),
            array(
                //"3283",
                "name" =>"Gipuzkoa",
                "country_id" =>"205"
            ),
            array(
                //"3284",
                "name" =>"Girona",
                "country_id" =>"205"
            ),
            array(
                //"3285",
                "name" =>"Granada",
                "country_id" =>"205"
            ),
            array(
                //"3286",
                "name" =>"Guadalajara",
                "country_id" =>"205"
            ),
            array(
                //"3287",
                "name" =>"Guipuzcoa",
                "country_id" =>"205"
            ),
            array(
                //"3288",
                "name" =>"Huelva",
                "country_id" =>"205"
            ),
            array(
                //"3289",
                "name" =>"Huesca",
                "country_id" =>"205"
            ),
            array(
                //"3290",
                "name" =>"Jaen",
                "country_id" =>"205"
            ),
            array(
                //"3291",
                "name" =>"La Rioja",
                "country_id" =>"205"
            ),
            array(
                //"3292",
                "name" =>"Las Palmas",
                "country_id" =>"205"
            ),
            array(
                //"3293",
                "name" =>"Leon",
                "country_id" =>"205"
            ),
            array(
                //"3294",
                "name" =>"Lerida",
                "country_id" =>"205"
            ),
            array(
                //"3295",
                "name" =>"Lleida",
                "country_id" =>"205"
            ),
            array(
                //"3296",
                "name" =>"Lugo",
                "country_id" =>"205"
            ),
            array(
                //"3297",
                "name" =>"Madrid",
                "country_id" =>"205"
            ),
            array(
                //"3298",
                "name" =>"Malaga",
                "country_id" =>"205"
            ),
            array(
                //"3299",
                "name" =>"Melilla",
                "country_id" =>"205"
            ),
            array(
                //"3300",
                "name" =>"Murcia",
                "country_id" =>"205"
            ),
            array(
                //"3301",
                "name" =>"Navarra",
                "country_id" =>"205"
            ),
            array(
                //"3302",
                "name" =>"Ourense",
                "country_id" =>"205"
            ),
            array(
                //"3303",
                "name" =>"Pais Vasco",
                "country_id" =>"205"
            ),
            array(
                //"3304",
                "name" =>"Palencia",
                "country_id" =>"205"
            ),
            array(
                //"3305",
                "name" =>"Pontevedra",
                "country_id" =>"205"
            ),
            array(
                //"3306",
                "name" =>"Salamanca",
                "country_id" =>"205"
            ),
            array(
                //"3307",
                "name" =>"Santa Cruz de Tenerife",
                "country_id" =>"205"
            ),
            array(
                //"3308",
                "name" =>"Segovia",
                "country_id" =>"205"
            ),
            array(
                //"3309",
                "name" =>"Sevilla",
                "country_id" =>"205"
            ),
            array(
                //"3310",
                "name" =>"Soria",
                "country_id" =>"205"
            ),
            array(
                //"3311",
                "name" =>"Tarragona",
                "country_id" =>"205"
            ),
            array(
                //"3312",
                "name" =>"Tenerife",
                "country_id" =>"205"
            ),
            array(
                //"3313",
                "name" =>"Teruel",
                "country_id" =>"205"
            ),
            array(
                //"3314",
                "name" =>"Toledo",
                "country_id" =>"205"
            ),
            array(
                //"3315",
                "name" =>"Valencia",
                "country_id" =>"205"
            ),
            array(
                //"3316",
                "name" =>"Valladolid",
                "country_id" =>"205"
            ),
            array(
                //"3317",
                "name" =>"Vizcaya",
                "country_id" =>"205"
            ),
            array(
                //"3318",
                "name" =>"Zamora",
                "country_id" =>"205"
            ),
            array(
                //"3319",
                "name" =>"Zaragoza",
                "country_id" =>"205"
            ),
            array(
                //"3320",
                "name" =>"Amparai",
                "country_id" =>"206"
            ),
            array(
                //"3321",
                "name" =>"Anuradhapuraya",
                "country_id" =>"206"
            ),
            array(
                //"3322",
                "name" =>"Badulla",
                "country_id" =>"206"
            ),
            array(
                //"3323",
                "name" =>"Boralesgamuwa",
                "country_id" =>"206"
            ),
            array(
                //"3324",
                "name" =>"Colombo",
                "country_id" =>"206"
            ),
            array(
                //"3325",
                "name" =>"Galla",
                "country_id" =>"206"
            ),
            array(
                //"3326",
                "name" =>"Gampaha",
                "country_id" =>"206"
            ),
            array(
                //"3327",
                "name" =>"Hambantota",
                "country_id" =>"206"
            ),
            array(
                //"3328",
                "name" =>"Kalatura",
                "country_id" =>"206"
            ),
            array(
                //"3329",
                "name" =>"Kegalla",
                "country_id" =>"206"
            ),
            array(
                //"3330",
                "name" =>"Kilinochchi",
                "country_id" =>"206"
            ),
            array(
                //"3331",
                "name" =>"Kurunegala",
                "country_id" =>"206"
            ),
            array(
                //"3332",
                "name" =>"Madakalpuwa",
                "country_id" =>"206"
            ),
            array(
                //"3333",
                "name" =>"Maha Nuwara",
                "country_id" =>"206"
            ),
            array(
                //"3334",
                "name" =>"Malwana",
                "country_id" =>"206"
            ),
            array(
                //"3335",
                "name" =>"Mannarama",
                "country_id" =>"206"
            ),
            array(
                //"3336",
                "name" =>"Matale",
                "country_id" =>"206"
            ),
            array(
                //"3337",
                "name" =>"Matara",
                "country_id" =>"206"
            ),
            array(
                //"3338",
                "name" =>"Monaragala",
                "country_id" =>"206"
            ),
            array(
                //"3339",
                "name" =>"Mullaitivu",
                "country_id" =>"206"
            ),
            array(
                //"3340",
                "name" =>"North Eastern Province",
                "country_id" =>"206"
            ),
            array(
                //"3341",
                "name" =>"North Western Province",
                "country_id" =>"206"
            ),
            array(
                //"3342",
                "name" =>"Nuwara Eliya",
                "country_id" =>"206"
            ),
            array(
                //"3343",
                "name" =>"Polonnaruwa",
                "country_id" =>"206"
            ),
            array(
                //"3344",
                "name" =>"Puttalama",
                "country_id" =>"206"
            ),
            array(
                //"3345",
                "name" =>"Ratnapuraya",
                "country_id" =>"206"
            ),
            array(
                //"3346",
                "name" =>"Southern Province",
                "country_id" =>"206"
            ),
            array(
                //"3347",
                "name" =>"Tirikunamalaya",
                "country_id" =>"206"
            ),
            array(
                //"3348",
                "name" =>"Tuscany",
                "country_id" =>"206"
            ),
            array(
                //"3349",
                "name" =>"Vavuniyawa",
                "country_id" =>"206"
            ),
            array(
                //"3350",
                "name" =>"Western Province",
                "country_id" =>"206"
            ),
            array(
                //"3351",
                "name" =>"Yapanaya",
                "country_id" =>"206"
            ),
            array(
                //"3352",
                "name" =>"kadawatha",
                "country_id" =>"206"
            ),
            array(
                //"3353",
                "name" =>"A''ali-an-Nil",
                "country_id" =>"207"
            ),
            array(
                //"3354",
                "name" =>"Bahr-al-Jabal",
                "country_id" =>"207"
            ),
            array(
                //"3355",
                "name" =>"Central Equatoria",
                "country_id" =>"207"
            ),
            array(
                //"3356",
                "name" =>"Gharb Bahr-al-Ghazal",
                "country_id" =>"207"
            ),
            array(
                //"3357",
                "name" =>"Gharb Darfur",
                "country_id" =>"207"
            ),
            array(
                //"3358",
                "name" =>"Gharb Kurdufan",
                "country_id" =>"207"
            ),
            array(
                //"3359",
                "name" =>"Gharb-al-Istiwa''iyah",
                "country_id" =>"207"
            ),
            array(
                //"3360",
                "name" =>"Janub Darfur",
                "country_id" =>"207"
            ),
            array(
                //"3361",
                "name" =>"Janub Kurdufan",
                "country_id" =>"207"
            ),
            array(
                //"3362",
                "name" =>"Junqali",
                "country_id" =>"207"
            ),
            array(
                //"3363",
                "name" =>"Kassala",
                "country_id" =>"207"
            ),
            array(
                //"3364",
                "name" =>"Nahr-an-Nil",
                "country_id" =>"207"
            ),
            array(
                //"3365",
                "name" =>"Shamal Bahr-al-Ghazal",
                "country_id" =>"207"
            ),
            array(
                //"3366",
                "name" =>"Shamal Darfur",
                "country_id" =>"207"
            ),
            array(
                //"3367",
                "name" =>"Shamal Kurdufan",
                "country_id" =>"207"
            ),
            array(
                //"3368",
                "name" =>"Sharq-al-Istiwa''iyah",
                "country_id" =>"207"
            ),
            array(
                //"3369",
                "name" =>"Sinnar",
                "country_id" =>"207"
            ),
            array(
                //"3370",
                "name" =>"Warab",
                "country_id" =>"207"
            ),
            array(
                //"3371",
                "name" =>"Wilayat al Khartum",
                "country_id" =>"207"
            ),
            array(
                //"3372",
                "name" =>"al-Bahr-al-Ahmar",
                "country_id" =>"207"
            ),
            array(
                //"3373",
                "name" =>"al-Buhayrat",
                "country_id" =>"207"
            ),
            array(
                //"3374",
                "name" =>"al-Jazirah",
                "country_id" =>"207"
            ),
            array(
                //"3375",
                "name" =>"al-Khartum",
                "country_id" =>"207"
            ),
            array(
                //"3376",
                "name" =>"al-Qadarif",
                "country_id" =>"207"
            ),
            array(
                //"3377",
                "name" =>"al-Wahdah",
                "country_id" =>"207"
            ),
            array(
                //"3378",
                "name" =>"an-Nil-al-Abyad",
                "country_id" =>"207"
            ),
            array(
                //"3379",
                "name" =>"an-Nil-al-Azraq",
                "country_id" =>"207"
            ),
            array(
                //"3380",
                "name" =>"ash-Shamaliyah",
                "country_id" =>"207"
            ),
            array(
                //"3381",
                "name" =>"Brokopondo",
                "country_id" =>"208"
            ),
            array(
                //"3382",
                "name" =>"Commewijne",
                "country_id" =>"208"
            ),
            array(
                //"3383",
                "name" =>"Coronie",
                "country_id" =>"208"
            ),
            array(
                //"3384",
                "name" =>"Marowijne",
                "country_id" =>"208"
            ),
            array(
                //"3385",
                "name" =>"Nickerie",
                "country_id" =>"208"
            ),
            array(
                //"3386",
                "name" =>"Para",
                "country_id" =>"208"
            ),
            array(
                //"3387",
                "name" =>"Paramaribo",
                "country_id" =>"208"
            ),
            array(
                //"3388",
                "name" =>"Saramacca",
                "country_id" =>"208"
            ),
            array(
                //"3389",
                "name" =>"Wanica",
                "country_id" =>"208"
            ),
            array(
                //"3390",
                "name" =>"Svalbard",
                "country_id" =>"209"
            ),
            array(
                //"3391",
                "name" =>"Hhohho",
                "country_id" =>"210"
            ),
            array(
                //"3392",
                "name" =>"Lubombo",
                "country_id" =>"210"
            ),
            array(
                //"3393",
                "name" =>"Manzini",
                "country_id" =>"210"
            ),
            array(
                //"3394",
                "name" =>"Shiselweni",
                "country_id" =>"210"
            ),
            array(
                //"3395",
                "name" =>"Alvsborgs Lan",
                "country_id" =>"211"
            ),
            array(
                //"3396",
                "name" =>"Angermanland",
                "country_id" =>"211"
            ),
            array(
                //"3397",
                "name" =>"Blekinge",
                "country_id" =>"211"
            ),
            array(
                //"3398",
                "name" =>"Bohuslan",
                "country_id" =>"211"
            ),
            array(
                //"3399",
                "name" =>"Dalarna",
                "country_id" =>"211"
            ),
            array(
                //"3400",
                "name" =>"Gavleborg",
                "country_id" =>"211"
            ),
            array(
                //"3401",
                "name" =>"Gaza",
                "country_id" =>"211"
            ),
            array(
                //"3402",
                "name" =>"Gotland",
                "country_id" =>"211"
            ),
            array(
                //"3403",
                "name" =>"Halland",
                "country_id" =>"211"
            ),
            array(
                //"3404",
                "name" =>"Jamtland",
                "country_id" =>"211"
            ),
            array(
                //"3405",
                "name" =>"Jonkoping",
                "country_id" =>"211"
            ),
            array(
                //"3406",
                "name" =>"Kalmar",
                "country_id" =>"211"
            ),
            array(
                //"3407",
                "name" =>"Kristianstads",
                "country_id" =>"211"
            ),
            array(
                //"3408",
                "name" =>"Kronoberg",
                "country_id" =>"211"
            ),
            array(
                //"3409",
                "name" =>"Norrbotten",
                "country_id" =>"211"
            ),
            array(
                //"3410",
                "name" =>"Orebro",
                "country_id" =>"211"
            ),
            array(
                //"3411",
                "name" =>"Ostergotland",
                "country_id" =>"211"
            ),
            array(
                //"3412",
                "name" =>"Saltsjo-Boo",
                "country_id" =>"211"
            ),
            array(
                //"3413",
                "name" =>"Skane",
                "country_id" =>"211"
            ),
            array(
                //"3414",
                "name" =>"Smaland",
                "country_id" =>"211"
            ),
            array(
                //"3415",
                "name" =>"Sodermanland",
                "country_id" =>"211"
            ),
            array(
                //"3416",
                "name" =>"Stockholm",
                "country_id" =>"211"
            ),
            array(
                //"3417",
                "name" =>"Uppsala",
                "country_id" =>"211"
            ),
            array(
                //"3418",
                "name" =>"Varmland",
                "country_id" =>"211"
            ),
            array(
                //"3419",
                "name" =>"Vasterbotten",
                "country_id" =>"211"
            ),
            array(
                //"3420",
                "name" =>"Vastergotland",
                "country_id" =>"211"
            ),
            array(
                //"3421",
                "name" =>"Vasternorrland",
                "country_id" =>"211"
            ),
            array(
                //"3422",
                "name" =>"Vastmanland",
                "country_id" =>"211"
            ),
            array(
                //"3423",
                "name" =>"Vastra Gotaland",
                "country_id" =>"211"
            ),
            array(
                //"3424",
                "name" =>"Aargau",
                "country_id" =>"212"
            ),
            array(
                //"3425",
                "name" =>"Appenzell Inner-Rhoden",
                "country_id" =>"212"
            ),
            array(
                //"3426",
                "name" =>"Appenzell-Ausser Rhoden",
                "country_id" =>"212"
            ),
            array(
                //"3427",
                "name" =>"Basel-Landschaft",
                "country_id" =>"212"
            ),
            array(
                //"3428",
                "name" =>"Basel-Stadt",
                "country_id" =>"212"
            ),
            array(
                //"3429",
                "name" =>"Bern",
                "country_id" =>"212"
            ),
            array(
                //"3430",
                "name" =>"Canton Ticino",
                "country_id" =>"212"
            ),
            array(
                //"3431",
                "name" =>"Fribourg",
                "country_id" =>"212"
            ),
            array(
                //"3432",
                "name" =>"Geneve",
                "country_id" =>"212"
            ),
            array(
                //"3433",
                "name" =>"Glarus",
                "country_id" =>"212"
            ),
            array(
                //"3434",
                "name" =>"Graubunden",
                "country_id" =>"212"
            ),
            array(
                //"3435",
                "name" =>"Heerbrugg",
                "country_id" =>"212"
            ),
            array(
                //"3436",
                "name" =>"Jura",
                "country_id" =>"212"
            ),
            array(
                //"3437",
                "name" =>"Kanton Aargau",
                "country_id" =>"212"
            ),
            array(
                //"3438",
                "name" =>"Luzern",
                "country_id" =>"212"
            ),
            array(
                //"3439",
                "name" =>"Morbio Inferiore",
                "country_id" =>"212"
            ),
            array(
                //"3440",
                "name" =>"Muhen",
                "country_id" =>"212"
            ),
            array(
                //"3441",
                "name" =>"Neuchatel",
                "country_id" =>"212"
            ),
            array(
                //"3442",
                "name" =>"Nidwalden",
                "country_id" =>"212"
            ),
            array(
                //"3443",
                "name" =>"Obwalden",
                "country_id" =>"212"
            ),
            array(
                //"3444",
                "name" =>"Sankt Gallen",
                "country_id" =>"212"
            ),
            array(
                //"3445",
                "name" =>"Schaffhausen",
                "country_id" =>"212"
            ),
            array(
                //"3446",
                "name" =>"Schwyz",
                "country_id" =>"212"
            ),
            array(
                //"3447",
                "name" =>"Solothurn",
                "country_id" =>"212"
            ),
            array(
                //"3448",
                "name" =>"Thurgau",
                "country_id" =>"212"
            ),
            array(
                //"3449",
                "name" =>"Ticino",
                "country_id" =>"212"
            ),
            array(
                //"3450",
                "name" =>"Uri",
                "country_id" =>"212"
            ),
            array(
                //"3451",
                "name" =>"Valais",
                "country_id" =>"212"
            ),
            array(
                //"3452",
                "name" =>"Vaud",
                "country_id" =>"212"
            ),
            array(
                //"3453",
                "name" =>"Vauffelin",
                "country_id" =>"212"
            ),
            array(
                //"3454",
                "name" =>"Zug",
                "country_id" =>"212"
            ),
            array(
                //"3455",
                "name" =>"Zurich",
                "country_id" =>"212"
            ),
            array(
                //"3456",
                "name" =>"Aleppo",
                "country_id" =>"213"
            ),
            array(
                //"3457",
                "name" =>"Dar''a",
                "country_id" =>"213"
            ),
            array(
                //"3458",
                "name" =>"Dayr-az-Zawr",
                "country_id" =>"213"
            ),
            array(
                //"3459",
                "name" =>"Dimashq",
                "country_id" =>"213"
            ),
            array(
                //"3460",
                "name" =>"Halab",
                "country_id" =>"213"
            ),
            array(
                //"3461",
                "name" =>"Hamah",
                "country_id" =>"213"
            ),
            array(
                //"3462",
                "name" =>"Hims",
                "country_id" =>"213"
            ),
            array(
                //"3463",
                "name" =>"Idlib",
                "country_id" =>"213"
            ),
            array(
                //"3464",
                "name" =>"Madinat Dimashq",
                "country_id" =>"213"
            ),
            array(
                //"3465",
                "name" =>"Tartus",
                "country_id" =>"213"
            ),
            array(
                //"3466",
                "name" =>"al-Hasakah",
                "country_id" =>"213"
            ),
            array(
                //"3467",
                "name" =>"al-Ladhiqiyah",
                "country_id" =>"213"
            ),
            array(
                //"3468",
                "name" =>"al-Qunaytirah",
                "country_id" =>"213"
            ),
            array(
                //"3469",
                "name" =>"ar-Raqqah",
                "country_id" =>"213"
            ),
            array(
                //"3470",
                "name" =>"as-Suwayda",
                "country_id" =>"213"
            ),
            array(
                //"3471",
                "name" =>"Changhwa",
                "country_id" =>"214"
            ),
            array(
                //"3472",
                "name" =>"Chiayi Hsien",
                "country_id" =>"214"
            ),
            array(
                //"3473",
                "name" =>"Chiayi Shih",
                "country_id" =>"214"
            ),
            array(
                //"3474",
                "name" =>"Eastern Taipei",
                "country_id" =>"214"
            ),
            array(
                //"3475",
                "name" =>"Hsinchu Hsien",
                "country_id" =>"214"
            ),
            array(
                //"3476",
                "name" =>"Hsinchu Shih",
                "country_id" =>"214"
            ),
            array(
                //"3477",
                "name" =>"Hualien",
                "country_id" =>"214"
            ),
            array(
                //"3478",
                "name" =>"Ilan",
                "country_id" =>"214"
            ),
            array(
                //"3479",
                "name" =>"Kaohsiung Hsien",
                "country_id" =>"214"
            ),
            array(
                //"3480",
                "name" =>"Kaohsiung Shih",
                "country_id" =>"214"
            ),
            array(
                //"3481",
                "name" =>"Keelung Shih",
                "country_id" =>"214"
            ),
            array(
                //"3482",
                "name" =>"Kinmen",
                "country_id" =>"214"
            ),
            array(
                //"3483",
                "name" =>"Miaoli",
                "country_id" =>"214"
            ),
            array(
                //"3484",
                "name" =>"Nantou",
                "country_id" =>"214"
            ),
            array(
                //"3485",
                "name" =>"Northern Taiwan",
                "country_id" =>"214"
            ),
            array(
                //"3486",
                "name" =>"Penghu",
                "country_id" =>"214"
            ),
            array(
                //"3487",
                "name" =>"Pingtung",
                "country_id" =>"214"
            ),
            array(
                //"3488",
                "name" =>"Taichung",
                "country_id" =>"214"
            ),
            array(
                //"3489",
                "name" =>"Taichung Hsien",
                "country_id" =>"214"
            ),
            array(
                //"3490",
                "name" =>"Taichung Shih",
                "country_id" =>"214"
            ),
            array(
                //"3491",
                "name" =>"Tainan Hsien",
                "country_id" =>"214"
            ),
            array(
                //"3492",
                "name" =>"Tainan Shih",
                "country_id" =>"214"
            ),
            array(
                //"3493",
                "name" =>"Taipei Hsien",
                "country_id" =>"214"
            ),
            array(
                //"3494",
                "name" =>"Taipei Shih / Taipei Hsien",
                "country_id" =>"214"
            ),
            array(
                //"3495",
                "name" =>"Taitung",
                "country_id" =>"214"
            ),
            array(
                //"3496",
                "name" =>"Taoyuan",
                "country_id" =>"214"
            ),
            array(
                //"3497",
                "name" =>"Yilan",
                "country_id" =>"214"
            ),
            array(
                //"3498",
                "name" =>"Yun-Lin Hsien",
                "country_id" =>"214"
            ),
            array(
                //"3499",
                "name" =>"Yunlin",
                "country_id" =>"214"
            ),
            array(
                //"3500",
                "name" =>"Dushanbe",
                "country_id" =>"215"
            ),
            array(
                //"3501",
                "name" =>"Gorno-Badakhshan",
                "country_id" =>"215"
            ),
            array(
                //"3502",
                "name" =>"Karotegin",
                "country_id" =>"215"
            ),
            array(
                //"3503",
                "name" =>"Khatlon",
                "country_id" =>"215"
            ),
            array(
                //"3504",
                "name" =>"Sughd",
                "country_id" =>"215"
            ),
            array(
                //"3505",
                "name" =>"Arusha",
                "country_id" =>"216"
            ),
            array(
                //"3506",
                "name" =>"Dar es Salaam",
                "country_id" =>"216"
            ),
            array(
                //"3507",
                "name" =>"Dodoma",
                "country_id" =>"216"
            ),
            array(
                //"3508",
                "name" =>"Iringa",
                "country_id" =>"216"
            ),
            array(
                //"3509",
                "name" =>"Kagera",
                "country_id" =>"216"
            ),
            array(
                //"3510",
                "name" =>"Kigoma",
                "country_id" =>"216"
            ),
            array(
                //"3511",
                "name" =>"Kilimanjaro",
                "country_id" =>"216"
            ),
            array(
                //"3512",
                "name" =>"Lindi",
                "country_id" =>"216"
            ),
            array(
                //"3513",
                "name" =>"Mara",
                "country_id" =>"216"
            ),
            array(
                //"3514",
                "name" =>"Mbeya",
                "country_id" =>"216"
            ),
            array(
                //"3515",
                "name" =>"Morogoro",
                "country_id" =>"216"
            ),
            array(
                //"3516",
                "name" =>"Mtwara",
                "country_id" =>"216"
            ),
            array(
                //"3517",
                "name" =>"Mwanza",
                "country_id" =>"216"
            ),
            array(
                //"3518",
                "name" =>"Pwani",
                "country_id" =>"216"
            ),
            array(
                //"3519",
                "name" =>"Rukwa",
                "country_id" =>"216"
            ),
            array(
                //"3520",
                "name" =>"Ruvuma",
                "country_id" =>"216"
            ),
            array(
                //"3521",
                "name" =>"Shinyanga",
                "country_id" =>"216"
            ),
            array(
                //"3522",
                "name" =>"Singida",
                "country_id" =>"216"
            ),
            array(
                //"3523",
                "name" =>"Tabora",
                "country_id" =>"216"
            ),
            array(
                //"3524",
                "name" =>"Tanga",
                "country_id" =>"216"
            ),
            array(
                //"3525",
                "name" =>"Zanzibar and Pemba",
                "country_id" =>"216"
            ),
            array(
                //"3526",
                "name" =>"Amnat Charoen",
                "country_id" =>"217"
            ),
            array(
                //"3527",
                "name" =>"Ang Thong",
                "country_id" =>"217"
            ),
            array(
                //"3528",
                "name" =>"Bangkok",
                "country_id" =>"217"
            ),
            array(
                //"3529",
                "name" =>"Buri Ram",
                "country_id" =>"217"
            ),
            array(
                //"3530",
                "name" =>"Chachoengsao",
                "country_id" =>"217"
            ),
            array(
                //"3531",
                "name" =>"Chai Nat",
                "country_id" =>"217"
            ),
            array(
                //"3532",
                "name" =>"Chaiyaphum",
                "country_id" =>"217"
            ),
            array(
                //"3533",
                "name" =>"Changwat Chaiyaphum",
                "country_id" =>"217"
            ),
            array(
                //"3534",
                "name" =>"Chanthaburi",
                "country_id" =>"217"
            ),
            array(
                //"3535",
                "name" =>"Chiang Mai",
                "country_id" =>"217"
            ),
            array(
                //"3536",
                "name" =>"Chiang Rai",
                "country_id" =>"217"
            ),
            array(
                //"3537",
                "name" =>"Chon Buri",
                "country_id" =>"217"
            ),
            array(
                //"3538",
                "name" =>"Chumphon",
                "country_id" =>"217"
            ),
            array(
                //"3539",
                "name" =>"Kalasin",
                "country_id" =>"217"
            ),
            array(
                //"3540",
                "name" =>"Kamphaeng Phet",
                "country_id" =>"217"
            ),
            array(
                //"3541",
                "name" =>"Kanchanaburi",
                "country_id" =>"217"
            ),
            array(
                //"3542",
                "name" =>"Khon Kaen",
                "country_id" =>"217"
            ),
            array(
                //"3543",
                "name" =>"Krabi",
                "country_id" =>"217"
            ),
            array(
                //"3544",
                "name" =>"Krung Thep",
                "country_id" =>"217"
            ),
            array(
                //"3545",
                "name" =>"Lampang",
                "country_id" =>"217"
            ),
            array(
                //"3546",
                "name" =>"Lamphun",
                "country_id" =>"217"
            ),
            array(
                //"3547",
                "name" =>"Loei",
                "country_id" =>"217"
            ),
            array(
                //"3548",
                "name" =>"Lop Buri",
                "country_id" =>"217"
            ),
            array(
                //"3549",
                "name" =>"Mae Hong Son",
                "country_id" =>"217"
            ),
            array(
                //"3550",
                "name" =>"Maha Sarakham",
                "country_id" =>"217"
            ),
            array(
                //"3551",
                "name" =>"Mukdahan",
                "country_id" =>"217"
            ),
            array(
                //"3552",
                "name" =>"Nakhon Nayok",
                "country_id" =>"217"
            ),
            array(
                //"3553",
                "name" =>"Nakhon Pathom",
                "country_id" =>"217"
            ),
            array(
                //"3554",
                "name" =>"Nakhon Phanom",
                "country_id" =>"217"
            ),
            array(
                //"3555",
                "name" =>"Nakhon Ratchasima",
                "country_id" =>"217"
            ),
            array(
                //"3556",
                "name" =>"Nakhon Sawan",
                "country_id" =>"217"
            ),
            array(
                //"3557",
                "name" =>"Nakhon Si Thammarat",
                "country_id" =>"217"
            ),
            array(
                //"3558",
                "name" =>"Nan",
                "country_id" =>"217"
            ),
            array(
                //"3559",
                "name" =>"Narathiwat",
                "country_id" =>"217"
            ),
            array(
                //"3560",
                "name" =>"Nong Bua Lam Phu",
                "country_id" =>"217"
            ),
            array(
                //"3561",
                "name" =>"Nong Khai",
                "country_id" =>"217"
            ),
            array(
                //"3562",
                "name" =>"Nonthaburi",
                "country_id" =>"217"
            ),
            array(
                //"3563",
                "name" =>"Pathum Thani",
                "country_id" =>"217"
            ),
            array(
                //"3564",
                "name" =>"Pattani",
                "country_id" =>"217"
            ),
            array(
                //"3565",
                "name" =>"Phangnga",
                "country_id" =>"217"
            ),
            array(
                //"3566",
                "name" =>"Phatthalung",
                "country_id" =>"217"
            ),
            array(
                //"3567",
                "name" =>"Phayao",
                "country_id" =>"217"
            ),
            array(
                //"3568",
                "name" =>"Phetchabun",
                "country_id" =>"217"
            ),
            array(
                //"3569",
                "name" =>"Phetchaburi",
                "country_id" =>"217"
            ),
            array(
                //"3570",
                "name" =>"Phichit",
                "country_id" =>"217"
            ),
            array(
                //"3571",
                "name" =>"Phitsanulok",
                "country_id" =>"217"
            ),
            array(
                //"3572",
                "name" =>"Phra Nakhon Si Ayutthaya",
                "country_id" =>"217"
            ),
            array(
                //"3573",
                "name" =>"Phrae",
                "country_id" =>"217"
            ),
            array(
                //"3574",
                "name" =>"Phuket",
                "country_id" =>"217"
            ),
            array(
                //"3575",
                "name" =>"Prachin Buri",
                "country_id" =>"217"
            ),
            array(
                //"3576",
                "name" =>"Prachuap Khiri Khan",
                "country_id" =>"217"
            ),
            array(
                //"3577",
                "name" =>"Ranong",
                "country_id" =>"217"
            ),
            array(
                //"3578",
                "name" =>"Ratchaburi",
                "country_id" =>"217"
            ),
            array(
                //"3579",
                "name" =>"Rayong",
                "country_id" =>"217"
            ),
            array(
                //"3580",
                "name" =>"Roi Et",
                "country_id" =>"217"
            ),
            array(
                //"3581",
                "name" =>"Sa Kaeo",
                "country_id" =>"217"
            ),
            array(
                //"3582",
                "name" =>"Sakon Nakhon",
                "country_id" =>"217"
            ),
            array(
                //"3583",
                "name" =>"Samut Prakan",
                "country_id" =>"217"
            ),
            array(
                //"3584",
                "name" =>"Samut Sakhon",
                "country_id" =>"217"
            ),
            array(
                //"3585",
                "name" =>"Samut Songkhran",
                "country_id" =>"217"
            ),
            array(
                //"3586",
                "name" =>"Saraburi",
                "country_id" =>"217"
            ),
            array(
                //"3587",
                "name" =>"Satun",
                "country_id" =>"217"
            ),
            array(
                //"3588",
                "name" =>"Si Sa Ket",
                "country_id" =>"217"
            ),
            array(
                //"3589",
                "name" =>"Sing Buri",
                "country_id" =>"217"
            ),
            array(
                //"3590",
                "name" =>"Songkhla",
                "country_id" =>"217"
            ),
            array(
                //"3591",
                "name" =>"Sukhothai",
                "country_id" =>"217"
            ),
            array(
                //"3592",
                "name" =>"Suphan Buri",
                "country_id" =>"217"
            ),
            array(
                //"3593",
                "name" =>"Surat Thani",
                "country_id" =>"217"
            ),
            array(
                //"3594",
                "name" =>"Surin",
                "country_id" =>"217"
            ),
            array(
                //"3595",
                "name" =>"Tak",
                "country_id" =>"217"
            ),
            array(
                //"3596",
                "name" =>"Trang",
                "country_id" =>"217"
            ),
            array(
                //"3597",
                "name" =>"Trat",
                "country_id" =>"217"
            ),
            array(
                //"3598",
                "name" =>"Ubon Ratchathani",
                "country_id" =>"217"
            ),
            array(
                //"3599",
                "name" =>"Udon Thani",
                "country_id" =>"217"
            ),
            array(
                //"3600",
                "name" =>"Uthai Thani",
                "country_id" =>"217"
            ),
            array(
                //"3601",
                "name" =>"Uttaradit",
                "country_id" =>"217"
            ),
            array(
                //"3602",
                "name" =>"Yala",
                "country_id" =>"217"
            ),
            array(
                //"3603",
                "name" =>"Yasothon",
                "country_id" =>"217"
            ),
            array(
                //"3604",
                "name" =>"Centre",
                "country_id" =>"218"
            ),
            array(
                //"3605",
                "name" =>"Kara",
                "country_id" =>"218"
            ),
            array(
                //"3606",
                "name" =>"Maritime",
                "country_id" =>"218"
            ),
            array(
                //"3607",
                "name" =>"Plateaux",
                "country_id" =>"218"
            ),
            array(
                //"3608",
                "name" =>"Savanes",
                "country_id" =>"218"
            ),
            array(
                //"3609",
                "name" =>"Atafu",
                "country_id" =>"219"
            ),
            array(
                //"3610",
                "name" =>"Fakaofo",
                "country_id" =>"219"
            ),
            array(
                //"3611",
                "name" =>"Nukunonu",
                "country_id" =>"219"
            ),
            array(
                //"3612",
                "name" =>"Eua",
                "country_id" =>"220"
            ),
            array(
                //"3613",
                "name" =>"Ha''apai",
                "country_id" =>"220"
            ),
            array(
                //"3614",
                "name" =>"Niuas",
                "country_id" =>"220"
            ),
            array(
                //"3615",
                "name" =>"Tongatapu",
                "country_id" =>"220"
            ),
            array(
                //"3616",
                "name" =>"Vava''u",
                "country_id" =>"220"
            ),
            array(
                //"3617",
                "name" =>"Arima-Tunapuna-Piarco",
                "country_id" =>"221"
            ),
            array(
                //"3618",
                "name" =>"Caroni",
                "country_id" =>"221"
            ),
            array(
                //"3619",
                "name" =>"Chaguanas",
                "country_id" =>"221"
            ),
            array(
                //"3620",
                "name" =>"Couva-Tabaquite-Talparo",
                "country_id" =>"221"
            ),
            array(
                //"3621",
                "name" =>"Diego Martin",
                "country_id" =>"221"
            ),
            array(
                //"3622",
                "name" =>"Glencoe",
                "country_id" =>"221"
            ),
            array(
                //"3623",
                "name" =>"Penal Debe",
                "country_id" =>"221"
            ),
            array(
                //"3624",
                "name" =>"Point Fortin",
                "country_id" =>"221"
            ),
            array(
                //"3625",
                "name" =>"Port of Spain",
                "country_id" =>"221"
            ),
            array(
                //"3626",
                "name" =>"Princes Town",
                "country_id" =>"221"
            ),
            array(
                //"3627",
                "name" =>"Saint George",
                "country_id" =>"221"
            ),
            array(
                //"3628",
                "name" =>"San Fernando",
                "country_id" =>"221"
            ),
            array(
                //"3629",
                "name" =>"San Juan",
                "country_id" =>"221"
            ),
            array(
                //"3630",
                "name" =>"Sangre Grande",
                "country_id" =>"221"
            ),
            array(
                //"3631",
                "name" =>"Siparia",
                "country_id" =>"221"
            ),
            array(
                //"3632",
                "name" =>"Tobago",
                "country_id" =>"221"
            ),
            array(
                //"3633",
                "name" =>"Aryanah",
                "country_id" =>"222"
            ),
            array(
                //"3634",
                "name" =>"Bajah",
                "country_id" =>"222"
            ),
            array(
                //"3635",
                "name" =>"Bin ''Arus",
                "country_id" =>"222"
            ),
            array(
                //"3636",
                "name" =>"Binzart",
                "country_id" =>"222"
            ),
            array(
                //"3637",
                "name" =>"Gouvernorat de Ariana",
                "country_id" =>"222"
            ),
            array(
                //"3638",
                "name" =>"Gouvernorat de Nabeul",
                "country_id" =>"222"
            ),
            array(
                //"3639",
                "name" =>"Gouvernorat de Sousse",
                "country_id" =>"222"
            ),
            array(
                //"3640",
                "name" =>"Hammamet Yasmine",
                "country_id" =>"222"
            ),
            array(
                //"3641",
                "name" =>"Jundubah",
                "country_id" =>"222"
            ),
            array(
                //"3642",
                "name" =>"Madaniyin",
                "country_id" =>"222"
            ),
            array(
                //"3643",
                "name" =>"Manubah",
                "country_id" =>"222"
            ),
            array(
                //"3644",
                "name" =>"Monastir",
                "country_id" =>"222"
            ),
            array(
                //"3645",
                "name" =>"Nabul",
                "country_id" =>"222"
            ),
            array(
                //"3646",
                "name" =>"Qabis",
                "country_id" =>"222"
            ),
            array(
                //"3647",
                "name" =>"Qafsah",
                "country_id" =>"222"
            ),
            array(
                //"3648",
                "name" =>"Qibili",
                "country_id" =>"222"
            ),
            array(
                //"3649",
                "name" =>"Safaqis",
                "country_id" =>"222"
            ),
            array(
                //"3650",
                "name" =>"Sfax",
                "country_id" =>"222"
            ),
            array(
                //"3651",
                "name" =>"Sidi Bu Zayd",
                "country_id" =>"222"
            ),
            array(
                //"3652",
                "name" =>"Silyanah",
                "country_id" =>"222"
            ),
            array(
                //"3653",
                "name" =>"Susah",
                "country_id" =>"222"
            ),
            array(
                //"3654",
                "name" =>"Tatawin",
                "country_id" =>"222"
            ),
            array(
                //"3655",
                "name" =>"Tawzar",
                "country_id" =>"222"
            ),
            array(
                //"3656",
                "name" =>"Tunis",
                "country_id" =>"222"
            ),
            array(
                //"3657",
                "name" =>"Zaghwan",
                "country_id" =>"222"
            ),
            array(
                //"3658",
                "name" =>"al-Kaf",
                "country_id" =>"222"
            ),
            array(
                //"3659",
                "name" =>"al-Mahdiyah",
                "country_id" =>"222"
            ),
            array(
                //"3660",
                "name" =>"al-Munastir",
                "country_id" =>"222"
            ),
            array(
                //"3661",
                "name" =>"al-Qasrayn",
                "country_id" =>"222"
            ),
            array(
                //"3662",
                "name" =>"al-Qayrawan",
                "country_id" =>"222"
            ),
            array(
                //"3663",
                "name" =>"Adana",
                "country_id" =>"223"
            ),
            array(
                //"3664",
                "name" =>"Adiyaman",
                "country_id" =>"223"
            ),
            array(
                //"3665",
                "name" =>"Afyon",
                "country_id" =>"223"
            ),
            array(
                //"3666",
                "name" =>"Agri",
                "country_id" =>"223"
            ),
            array(
                //"3667",
                "name" =>"Aksaray",
                "country_id" =>"223"
            ),
            array(
                //"3668",
                "name" =>"Amasya",
                "country_id" =>"223"
            ),
            array(
                //"3669",
                "name" =>"Ankara",
                "country_id" =>"223"
            ),
            array(
                //"3670",
                "name" =>"Antalya",
                "country_id" =>"223"
            ),
            array(
                //"3671",
                "name" =>"Ardahan",
                "country_id" =>"223"
            ),
            array(
                //"3672",
                "name" =>"Artvin",
                "country_id" =>"223"
            ),
            array(
                //"3673",
                "name" =>"Aydin",
                "country_id" =>"223"
            ),
            array(
                //"3674",
                "name" =>"Balikesir",
                "country_id" =>"223"
            ),
            array(
                //"3675",
                "name" =>"Bartin",
                "country_id" =>"223"
            ),
            array(
                //"3676",
                "name" =>"Batman",
                "country_id" =>"223"
            ),
            array(
                //"3677",
                "name" =>"Bayburt",
                "country_id" =>"223"
            ),
            array(
                //"3678",
                "name" =>"Bilecik",
                "country_id" =>"223"
            ),
            array(
                //"3679",
                "name" =>"Bingol",
                "country_id" =>"223"
            ),
            array(
                //"3680",
                "name" =>"Bitlis",
                "country_id" =>"223"
            ),
            array(
                //"3681",
                "name" =>"Bolu",
                "country_id" =>"223"
            ),
            array(
                //"3682",
                "name" =>"Burdur",
                "country_id" =>"223"
            ),
            array(
                //"3683",
                "name" =>"Bursa",
                "country_id" =>"223"
            ),
            array(
                //"3684",
                "name" =>"Canakkale",
                "country_id" =>"223"
            ),
            array(
                //"3685",
                "name" =>"Cankiri",
                "country_id" =>"223"
            ),
            array(
                //"3686",
                "name" =>"Corum",
                "country_id" =>"223"
            ),
            array(
                //"3687",
                "name" =>"Denizli",
                "country_id" =>"223"
            ),
            array(
                //"3688",
                "name" =>"Diyarbakir",
                "country_id" =>"223"
            ),
            array(
                //"3689",
                "name" =>"Duzce",
                "country_id" =>"223"
            ),
            array(
                //"3690",
                "name" =>"Edirne",
                "country_id" =>"223"
            ),
            array(
                //"3691",
                "name" =>"Elazig",
                "country_id" =>"223"
            ),
            array(
                //"3692",
                "name" =>"Erzincan",
                "country_id" =>"223"
            ),
            array(
                //"3693",
                "name" =>"Erzurum",
                "country_id" =>"223"
            ),
            array(
                //"3694",
                "name" =>"Eskisehir",
                "country_id" =>"223"
            ),
            array(
                //"3695",
                "name" =>"Gaziantep",
                "country_id" =>"223"
            ),
            array(
                //"3696",
                "name" =>"Giresun",
                "country_id" =>"223"
            ),
            array(
                //"3697",
                "name" =>"Gumushane",
                "country_id" =>"223"
            ),
            array(
                //"3698",
                "name" =>"Hakkari",
                "country_id" =>"223"
            ),
            array(
                //"3699",
                "name" =>"Hatay",
                "country_id" =>"223"
            ),
            array(
                //"3700",
                "name" =>"Icel",
                "country_id" =>"223"
            ),
            array(
                //"3701",
                "name" =>"Igdir",
                "country_id" =>"223"
            ),
            array(
                //"3702",
                "name" =>"Isparta",
                "country_id" =>"223"
            ),
            array(
                //"3703",
                "name" =>"Istanbul",
                "country_id" =>"223"
            ),
            array(
                //"3704",
                "name" =>"Izmir",
                "country_id" =>"223"
            ),
            array(
                //"3705",
                "name" =>"Kahramanmaras",
                "country_id" =>"223"
            ),
            array(
                //"3706",
                "name" =>"Karabuk",
                "country_id" =>"223"
            ),
            array(
                //"3707",
                "name" =>"Karaman",
                "country_id" =>"223"
            ),
            array(
                //"3708",
                "name" =>"Kars",
                "country_id" =>"223"
            ),
            array(
                //"3709",
                "name" =>"Karsiyaka",
                "country_id" =>"223"
            ),
            array(
                //"3710",
                "name" =>"Kastamonu",
                "country_id" =>"223"
            ),
            array(
                //"3711",
                "name" =>"Kayseri",
                "country_id" =>"223"
            ),
            array(
                //"3712",
                "name" =>"Kilis",
                "country_id" =>"223"
            ),
            array(
                //"3713",
                "name" =>"Kirikkale",
                "country_id" =>"223"
            ),
            array(
                //"3714",
                "name" =>"Kirklareli",
                "country_id" =>"223"
            ),
            array(
                //"3715",
                "name" =>"Kirsehir",
                "country_id" =>"223"
            ),
            array(
                //"3716",
                "name" =>"Kocaeli",
                "country_id" =>"223"
            ),
            array(
                //"3717",
                "name" =>"Konya",
                "country_id" =>"223"
            ),
            array(
                //"3718",
                "name" =>"Kutahya",
                "country_id" =>"223"
            ),
            array(
                //"3719",
                "name" =>"Lefkosa",
                "country_id" =>"223"
            ),
            array(
                //"3720",
                "name" =>"Malatya",
                "country_id" =>"223"
            ),
            array(
                //"3721",
                "name" =>"Manisa",
                "country_id" =>"223"
            ),
            array(
                //"3722",
                "name" =>"Mardin",
                "country_id" =>"223"
            ),
            array(
                //"3723",
                "name" =>"Mugla",
                "country_id" =>"223"
            ),
            array(
                //"3724",
                "name" =>"Mus",
                "country_id" =>"223"
            ),
            array(
                //"3725",
                "name" =>"Nevsehir",
                "country_id" =>"223"
            ),
            array(
                //"3726",
                "name" =>"Nigde",
                "country_id" =>"223"
            ),
            array(
                //"3727",
                "name" =>"Ordu",
                "country_id" =>"223"
            ),
            array(
                //"3728",
                "name" =>"Osmaniye",
                "country_id" =>"223"
            ),
            array(
                //"3729",
                "name" =>"Rize",
                "country_id" =>"223"
            ),
            array(
                //"3730",
                "name" =>"Sakarya",
                "country_id" =>"223"
            ),
            array(
                //"3731",
                "name" =>"Samsun",
                "country_id" =>"223"
            ),
            array(
                //"3732",
                "name" =>"Sanliurfa",
                "country_id" =>"223"
            ),
            array(
                //"3733",
                "name" =>"Siirt",
                "country_id" =>"223"
            ),
            array(
                //"3734",
                "name" =>"Sinop",
                "country_id" =>"223"
            ),
            array(
                //"3735",
                "name" =>"Sirnak",
                "country_id" =>"223"
            ),
            array(
                //"3736",
                "name" =>"Sivas",
                "country_id" =>"223"
            ),
            array(
                //"3737",
                "name" =>"Tekirdag",
                "country_id" =>"223"
            ),
            array(
                //"3738",
                "name" =>"Tokat",
                "country_id" =>"223"
            ),
            array(
                //"3739",
                "name" =>"Trabzon",
                "country_id" =>"223"
            ),
            array(
                //"3740",
                "name" =>"Tunceli",
                "country_id" =>"223"
            ),
            array(
                //"3741",
                "name" =>"Usak",
                "country_id" =>"223"
            ),
            array(
                //"3742",
                "name" =>"Van",
                "country_id" =>"223"
            ),
            array(
                //"3743",
                "name" =>"Yalova",
                "country_id" =>"223"
            ),
            array(
                //"3744",
                "name" =>"Yozgat",
                "country_id" =>"223"
            ),
            array(
                //"3745",
                "name" =>"Zonguldak",
                "country_id" =>"223"
            ),
            array(
                //"3746",
                "name" =>"Ahal",
                "country_id" =>"224"
            ),
            array(
                //"3747",
                "name" =>"Asgabat",
                "country_id" =>"224"
            ),
            array(
                //"3748",
                "name" =>"Balkan",
                "country_id" =>"224"
            ),
            array(
                //"3749",
                "name" =>"Dasoguz",
                "country_id" =>"224"
            ),
            array(
                //"3750",
                "name" =>"Lebap",
                "country_id" =>"224"
            ),
            array(
                //"3751",
                "name" =>"Mari",
                "country_id" =>"224"
            ),
            array(
                //"3752",
                "name" =>"Grand Turk",
                "country_id" =>"225"
            ),
            array(
                //"3753",
                "name" =>"South Caicos and East Caicos",
                "country_id" =>"225"
            ),
            array(
                //"3754",
                "name" =>"Funafuti",
                "country_id" =>"226"
            ),
            array(
                //"3755",
                "name" =>"Nanumanga",
                "country_id" =>"226"
            ),
            array(
                //"3756",
                "name" =>"Nanumea",
                "country_id" =>"226"
            ),
            array(
                //"3757",
                "name" =>"Niutao",
                "country_id" =>"226"
            ),
            array(
                //"3758",
                "name" =>"Nui",
                "country_id" =>"226"
            ),
            array(
                //"3759",
                "name" =>"Nukufetau",
                "country_id" =>"226"
            ),
            array(
                //"3760",
                "name" =>"Nukulaelae",
                "country_id" =>"226"
            ),
            array(
                //"3761",
                "name" =>"Vaitupu",
                "country_id" =>"226"
            ),
            array(
                //"3762",
                "name" =>"Central",
                "country_id" =>"227"
            ),
            array(
                //"3763",
                "name" =>"Eastern",
                "country_id" =>"227"
            ),
            array(
                //"3764",
                "name" =>"Northern",
                "country_id" =>"227"
            ),
            array(
                //"3765",
                "name" =>"Western",
                "country_id" =>"227"
            ),
            array(
                //"3766",
                "name" =>"Cherkas''ka",
                "country_id" =>"228"
            ),
            array(
                //"3767",
                "name" =>"Chernihivs''ka",
                "country_id" =>"228"
            ),
            array(
                //"3768",
                "name" =>"Chernivets''ka",
                "country_id" =>"228"
            ),
            array(
                //"3769",
                "name" =>"Crimea",
                "country_id" =>"228"
            ),
            array(
                //"3770",
                "name" =>"Dnipropetrovska",
                "country_id" =>"228"
            ),
            array(
                //"3771",
                "name" =>"Donets''ka",
                "country_id" =>"228"
            ),
            array(
                //"3772",
                "name" =>"Ivano-Frankivs''ka",
                "country_id" =>"228"
            ),
            array(
                //"3773",
                "name" =>"Kharkiv",
                "country_id" =>"228"
            ),
            array(
                //"3774",
                "name" =>"Kharkov",
                "country_id" =>"228"
            ),
            array(
                //"3775",
                "name" =>"Khersonska",
                "country_id" =>"228"
            ),
            array(
                //"3776",
                "name" =>"Khmel''nyts''ka",
                "country_id" =>"228"
            ),
            array(
                //"3777",
                "name" =>"Kirovohrad",
                "country_id" =>"228"
            ),
            array(
                //"3778",
                "name" =>"Krym",
                "country_id" =>"228"
            ),
            array(
                //"3779",
                "name" =>"Kyyiv",
                "country_id" =>"228"
            ),
            array(
                //"3780",
                "name" =>"Kyyivs''ka",
                "country_id" =>"228"
            ),
            array(
                //"3781",
                "name" =>"L''vivs''ka",
                "country_id" =>"228"
            ),
            array(
                //"3782",
                "name" =>"Luhans''ka",
                "country_id" =>"228"
            ),
            array(
                //"3783",
                "name" =>"Mykolayivs''ka",
                "country_id" =>"228"
            ),
            array(
                //"3784",
                "name" =>"Odes''ka",
                "country_id" =>"228"
            ),
            array(
                //"3785",
                "name" =>"Odessa",
                "country_id" =>"228"
            ),
            array(
                //"3786",
                "name" =>"Poltavs''ka",
                "country_id" =>"228"
            ),
            array(
                //"3787",
                "name" =>"Rivnens''ka",
                "country_id" =>"228"
            ),
            array(
                //"3788",
                "name" =>"Sevastopol",
                "country_id" =>"228"
            ),
            array(
                //"3789",
                "name" =>"Sums''ka",
                "country_id" =>"228"
            ),
            array(
                //"3790",
                "name" =>"Ternopil''s''ka",
                "country_id" =>"228"
            ),
            array(
                //"3791",
                "name" =>"Volyns''ka",
                "country_id" =>"228"
            ),
            array(
                //"3792",
                "name" =>"Vynnyts''ka",
                "country_id" =>"228"
            ),
            array(
                //"3793",
                "name" =>"Zakarpats''ka",
                "country_id" =>"228"
            ),
            array(
                //"3794",
                "name" =>"Zaporizhia",
                "country_id" =>"228"
            ),
            array(
                //"3795",
                "name" =>"Zhytomyrs''ka",
                "country_id" =>"228"
            ),
            array(
                //"3796",
                "name" =>"Abu Zabi",
                "country_id" =>"229"
            ),
            array(
                //"3797",
                "name" =>"Ajman",
                "country_id" =>"229"
            ),
            array(
                //"3798",
                "name" =>"Dubai",
                "country_id" =>"229"
            ),
            array(
                //"3799",
                "name" =>"Ras al-Khaymah",
                "country_id" =>"229"
            ),
            array(
                //"3800",
                "name" =>"Sharjah",
                "country_id" =>"229"
            ),
            array(
                //"3801",
                "name" =>"Sharjha",
                "country_id" =>"229"
            ),
            array(
                //"3802",
                "name" =>"Umm al Qaywayn",
                "country_id" =>"229"
            ),
            array(
                //"3803",
                "name" =>"al-Fujayrah",
                "country_id" =>"229"
            ),
            array(
                //"3804",
                "name" =>"ash-Shariqah",
                "country_id" =>"229"
            ),
            array(
                //"3805",
                "name" =>"Aberdeen",
                "country_id" =>"230"
            ),
            array(
                //"3806",
                "name" =>"Aberdeenshire",
                "country_id" =>"230"
            ),
            array(
                //"3807",
                "name" =>"Argyll",
                "country_id" =>"230"
            ),
            array(
                //"3808",
                "name" =>"Armagh",
                "country_id" =>"230"
            ),
            array(
                //"3809",
                "name" =>"Bedfordshire",
                "country_id" =>"230"
            ),
            array(
                //"3810",
                "name" =>"Belfast",
                "country_id" =>"230"
            ),
            array(
                //"3811",
                "name" =>"Berkshire",
                "country_id" =>"230"
            ),
            array(
                //"3812",
                "name" =>"Birmingham",
                "country_id" =>"230"
            ),
            array(
                //"3813",
                "name" =>"Brechin",
                "country_id" =>"230"
            ),
            array(
                //"3814",
                "name" =>"Bridgnorth",
                "country_id" =>"230"
            ),
            array(
                //"3815",
                "name" =>"Bristol",
                "country_id" =>"230"
            ),
            array(
                //"3816",
                "name" =>"Buckinghamshire",
                "country_id" =>"230"
            ),
            array(
                //"3817",
                "name" =>"Cambridge",
                "country_id" =>"230"
            ),
            array(
                //"3818",
                "name" =>"Cambridgeshire",
                "country_id" =>"230"
            ),
            array(
                //"3819",
                "name" =>"Channel Islands",
                "country_id" =>"230"
            ),
            array(
                //"3820",
                "name" =>"Cheshire",
                "country_id" =>"230"
            ),
            array(
                //"3821",
                "name" =>"Cleveland",
                "country_id" =>"230"
            ),
            array(
                //"3822",
                "name" =>"Co Fermanagh",
                "country_id" =>"230"
            ),
            array(
                //"3823",
                "name" =>"Conwy",
                "country_id" =>"230"
            ),
            array(
                //"3824",
                "name" =>"Cornwall",
                "country_id" =>"230"
            ),
            array(
                //"3825",
                "name" =>"Coventry",
                "country_id" =>"230"
            ),
            array(
                //"3826",
                "name" =>"Craven Arms",
                "country_id" =>"230"
            ),
            array(
                //"3827",
                "name" =>"Cumbria",
                "country_id" =>"230"
            ),
            array(
                //"3828",
                "name" =>"Denbighshire",
                "country_id" =>"230"
            ),
            array(
                //"3829",
                "name" =>"Derby",
                "country_id" =>"230"
            ),
            array(
                //"3830",
                "name" =>"Derbyshire",
                "country_id" =>"230"
            ),
            array(
                //"3831",
                "name" =>"Devon",
                "country_id" =>"230"
            ),
            array(
                //"3832",
                "name" =>"Dial Code Dungannon",
                "country_id" =>"230"
            ),
            array(
                //"3833",
                "name" =>"Didcot",
                "country_id" =>"230"
            ),
            array(
                //"3834",
                "name" =>"Dorset",
                "country_id" =>"230"
            ),
            array(
                //"3835",
                "name" =>"Dunbartonshire",
                "country_id" =>"230"
            ),
            array(
                //"3836",
                "name" =>"Durham",
                "country_id" =>"230"
            ),
            array(
                //"3837",
                "name" =>"East Dunbartonshire",
                "country_id" =>"230"
            ),
            array(
                //"3838",
                "name" =>"East Lothian",
                "country_id" =>"230"
            ),
            array(
                //"3839",
                "name" =>"East Midlands",
                "country_id" =>"230"
            ),
            array(
                //"3840",
                "name" =>"East Sussex",
                "country_id" =>"230"
            ),
            array(
                //"3841",
                "name" =>"East Yorkshire",
                "country_id" =>"230"
            ),
            array(
                //"3842",
                "name" =>"England",
                "country_id" =>"230"
            ),
            array(
                //"3843",
                "name" =>"Essex",
                "country_id" =>"230"
            ),
            array(
                //"3844",
                "name" =>"Fermanagh",
                "country_id" =>"230"
            ),
            array(
                //"3845",
                "name" =>"Fife",
                "country_id" =>"230"
            ),
            array(
                //"3846",
                "name" =>"Flintshire",
                "country_id" =>"230"
            ),
            array(
                //"3847",
                "name" =>"Fulham",
                "country_id" =>"230"
            ),
            array(
                //"3848",
                "name" =>"Gainsborough",
                "country_id" =>"230"
            ),
            array(
                //"3849",
                "name" =>"Glocestershire",
                "country_id" =>"230"
            ),
            array(
                //"3850",
                "name" =>"Gwent",
                "country_id" =>"230"
            ),
            array(
                //"3851",
                "name" =>"Hampshire",
                "country_id" =>"230"
            ),
            array(
                //"3852",
                "name" =>"Hants",
                "country_id" =>"230"
            ),
            array(
                //"3853",
                "name" =>"Herefordshire",
                "country_id" =>"230"
            ),
            array(
                //"3854",
                "name" =>"Hertfordshire",
                "country_id" =>"230"
            ),
            array(
                //"3855",
                "name" =>"Ireland",
                "country_id" =>"230"
            ),
            array(
                //"3856",
                "name" =>"Isle Of Man",
                "country_id" =>"230"
            ),
            array(
                //"3857",
                "name" =>"Isle of Wight",
                "country_id" =>"230"
            ),
            array(
                //"3858",
                "name" =>"Kenford",
                "country_id" =>"230"
            ),
            array(
                //"3859",
                "name" =>"Kent",
                "country_id" =>"230"
            ),
            array(
                //"3860",
                "name" =>"Kilmarnock",
                "country_id" =>"230"
            ),
            array(
                //"3861",
                "name" =>"Lanarkshire",
                "country_id" =>"230"
            ),
            array(
                //"3862",
                "name" =>"Lancashire",
                "country_id" =>"230"
            ),
            array(
                //"3863",
                "name" =>"Leicestershire",
                "country_id" =>"230"
            ),
            array(
                //"3864",
                "name" =>"Lincolnshire",
                "country_id" =>"230"
            ),
            array(
                //"3865",
                "name" =>"Llanymynech",
                "country_id" =>"230"
            ),
            array(
                //"3866",
                "name" =>"London",
                "country_id" =>"230"
            ),
            array(
                //"3867",
                "name" =>"Ludlow",
                "country_id" =>"230"
            ),
            array(
                //"3868",
                "name" =>"Manchester",
                "country_id" =>"230"
            ),
            array(
                //"3869",
                "name" =>"Mayfair",
                "country_id" =>"230"
            ),
            array(
                //"3870",
                "name" =>"Merseyside",
                "country_id" =>"230"
            ),
            array(
                //"3871",
                "name" =>"Mid Glamorgan",
                "country_id" =>"230"
            ),
            array(
                //"3872",
                "name" =>"Middlesex",
                "country_id" =>"230"
            ),
            array(
                //"3873",
                "name" =>"Mildenhall",
                "country_id" =>"230"
            ),
            array(
                //"3874",
                "name" =>"Monmouthshire",
                "country_id" =>"230"
            ),
            array(
                //"3875",
                "name" =>"Newton Stewart",
                "country_id" =>"230"
            ),
            array(
                //"3876",
                "name" =>"Norfolk",
                "country_id" =>"230"
            ),
            array(
                //"3877",
                "name" =>"North Humberside",
                "country_id" =>"230"
            ),
            array(
                //"3878",
                "name" =>"North Yorkshire",
                "country_id" =>"230"
            ),
            array(
                //"3879",
                "name" =>"Northamptonshire",
                "country_id" =>"230"
            ),
            array(
                //"3880",
                "name" =>"Northants",
                "country_id" =>"230"
            ),
            array(
                //"3881",
                "name" =>"Northern Ireland",
                "country_id" =>"230"
            ),
            array(
                //"3882",
                "name" =>"Northumberland",
                "country_id" =>"230"
            ),
            array(
                //"3883",
                "name" =>"Nottinghamshire",
                "country_id" =>"230"
            ),
            array(
                //"3884",
                "name" =>"Oxford",
                "country_id" =>"230"
            ),
            array(
                //"3885",
                "name" =>"Powys",
                "country_id" =>"230"
            ),
            array(
                //"3886",
                "name" =>"Roos-shire",
                "country_id" =>"230"
            ),
            array(
                //"3887",
                "name" =>"SUSSEX",
                "country_id" =>"230"
            ),
            array(
                //"3888",
                "name" =>"Sark",
                "country_id" =>"230"
            ),
            array(
                //"3889",
                "name" =>"Scotland",
                "country_id" =>"230"
            ),
            array(
                //"3890",
                "name" =>"Scottish Borders",
                "country_id" =>"230"
            ),
            array(
                //"3891",
                "name" =>"Shropshire",
                "country_id" =>"230"
            ),
            array(
                //"3892",
                "name" =>"Somerset",
                "country_id" =>"230"
            ),
            array(
                //"3893",
                "name" =>"South Glamorgan",
                "country_id" =>"230"
            ),
            array(
                //"3894",
                "name" =>"South Wales",
                "country_id" =>"230"
            ),
            array(
                //"3895",
                "name" =>"South Yorkshire",
                "country_id" =>"230"
            ),
            array(
                //"3896",
                "name" =>"Southwell",
                "country_id" =>"230"
            ),
            array(
                //"3897",
                "name" =>"Staffordshire",
                "country_id" =>"230"
            ),
            array(
                //"3898",
                "name" =>"Strabane",
                "country_id" =>"230"
            ),
            array(
                //"3899",
                "name" =>"Suffolk",
                "country_id" =>"230"
            ),
            array(
                //"3900",
                "name" =>"Surrey",
                "country_id" =>"230"
            ),
            array(
                //"3901",
                "name" =>"Sussex",
                "country_id" =>"230"
            ),
            array(
                //"3902",
                "name" =>"Twickenham",
                "country_id" =>"230"
            ),
            array(
                //"3903",
                "name" =>"Tyne and Wear",
                "country_id" =>"230"
            ),
            array(
                //"3904",
                "name" =>"Tyrone",
                "country_id" =>"230"
            ),
            array(
                //"3905",
                "name" =>"Utah",
                "country_id" =>"230"
            ),
            array(
                //"3906",
                "name" =>"Wales",
                "country_id" =>"230"
            ),
            array(
                //"3907",
                "name" =>"Warwickshire",
                "country_id" =>"230"
            ),
            array(
                //"3908",
                "name" =>"West Lothian",
                "country_id" =>"230"
            ),
            array(
                //"3909",
                "name" =>"West Midlands",
                "country_id" =>"230"
            ),
            array(
                //"3910",
                "name" =>"West Sussex",
                "country_id" =>"230"
            ),
            array(
                //"3911",
                "name" =>"West Yorkshire",
                "country_id" =>"230"
            ),
            array(
                //"3912",
                "name" =>"Whissendine",
                "country_id" =>"230"
            ),
            array(
                //"3913",
                "name" =>"Wiltshire",
                "country_id" =>"230"
            ),
            array(
                //"3914",
                "name" =>"Wokingham",
                "country_id" =>"230"
            ),
            array(
                //"3915",
                "name" =>"Worcestershire",
                "country_id" =>"230"
            ),
            array(
                //"3916",
                "name" =>"Wrexham",
                "country_id" =>"230"
            ),
            array(
                //"3917",
                "name" =>"Wurttemberg",
                "country_id" =>"230"
            ),
            array(
                //"3918",
                "name" =>"Yorkshire",
                "country_id" =>"230"
            ),
            array(
                //"3919",
                "name" =>"Alabama",
                "country_id" =>"231"
            ),
            array(
                //"3920",
                "name" =>"Alaska",
                "country_id" =>"231"
            ),
            array(
                //"3921",
                "name" =>"Arizona",
                "country_id" =>"231"
            ),
            array(
                //"3922",
                "name" =>"Arkansas",
                "country_id" =>"231"
            ),
            array(
                //"3923",
                "name" =>"Byram",
                "country_id" =>"231"
            ),
            array(
                //"3924",
                "name" =>"California",
                "country_id" =>"231"
            ),
            array(
                //"3925",
                "name" =>"Cokato",
                "country_id" =>"231"
            ),
            array(
                //"3926",
                "name" =>"Colorado",
                "country_id" =>"231"
            ),
            array(
                //"3927",
                "name" =>"Connecticut",
                "country_id" =>"231"
            ),
            array(
                //"3928",
                "name" =>"Delaware",
                "country_id" =>"231"
            ),
            array(
                //"3929",
                "name" =>"District of Columbia",
                "country_id" =>"231"
            ),
            array(
                //"3930",
                "name" =>"Florida",
                "country_id" =>"231"
            ),
            array(
                //"3931",
                "name" =>"Georgia",
                "country_id" =>"231"
            ),
            array(
                //"3932",
                "name" =>"Hawaii",
                "country_id" =>"231"
            ),
            array(
                //"3933",
                "name" =>"Idaho",
                "country_id" =>"231"
            ),
            array(
                //"3934",
                "name" =>"Illinois",
                "country_id" =>"231"
            ),
            array(
                //"3935",
                "name" =>"Indiana",
                "country_id" =>"231"
            ),
            array(
                //"3936",
                "name" =>"Iowa",
                "country_id" =>"231"
            ),
            array(
                //"3937",
                "name" =>"Kansas",
                "country_id" =>"231"
            ),
            array(
                //"3938",
                "name" =>"Kentucky",
                "country_id" =>"231"
            ),
            array(
                //"3939",
                "name" =>"Louisiana",
                "country_id" =>"231"
            ),
            array(
                //"3940",
                "name" =>"Lowa",
                "country_id" =>"231"
            ),
            array(
                //"3941",
                "name" =>"Maine",
                "country_id" =>"231"
            ),
            array(
                //"3942",
                "name" =>"Maryland",
                "country_id" =>"231"
            ),
            array(
                //"3943",
                "name" =>"Massachusetts",
                "country_id" =>"231"
            ),
            array(
                //"3944",
                "name" =>"Medfield",
                "country_id" =>"231"
            ),
            array(
                //"3945",
                "name" =>"Michigan",
                "country_id" =>"231"
            ),
            array(
                //"3946",
                "name" =>"Minnesota",
                "country_id" =>"231"
            ),
            array(
                //"3947",
                "name" =>"Mississippi",
                "country_id" =>"231"
            ),
            array(
                //"3948",
                "name" =>"Missouri",
                "country_id" =>"231"
            ),
            array(
                //"3949",
                "name" =>"Montana",
                "country_id" =>"231"
            ),
            array(
                //"3950",
                "name" =>"Nebraska",
                "country_id" =>"231"
            ),
            array(
                //"3951",
                "name" =>"Nevada",
                "country_id" =>"231"
            ),
            array(
                //"3952",
                "name" =>"New Hampshire",
                "country_id" =>"231"
            ),
            array(
                //"3953",
                "name" =>"New Jersey",
                "country_id" =>"231"
            ),
            array(
                //"3954",
                "name" =>"New Jersy",
                "country_id" =>"231"
            ),
            array(
                //"3955",
                "name" =>"New Mexico",
                "country_id" =>"231"
            ),
            array(
                //"3956",
                "name" =>"New York",
                "country_id" =>"231"
            ),
            array(
                //"3957",
                "name" =>"North Carolina",
                "country_id" =>"231"
            ),
            array(
                //"3958",
                "name" =>"North Dakota",
                "country_id" =>"231"
            ),
            array(
                //"3959",
                "name" =>"Ohio",
                "country_id" =>"231"
            ),
            array(
                //"3960",
                "name" =>"Oklahoma",
                "country_id" =>"231"
            ),
            array(
                //"3961",
                "name" =>"Ontario",
                "country_id" =>"231"
            ),
            array(
                //"3962",
                "name" =>"Oregon",
                "country_id" =>"231"
            ),
            array(
                //"3963",
                "name" =>"Pennsylvania",
                "country_id" =>"231"
            ),
            array(
                //"3964",
                "name" =>"Ramey",
                "country_id" =>"231"
            ),
            array(
                //"3965",
                "name" =>"Rhode Island",
                "country_id" =>"231"
            ),
            array(
                //"3966",
                "name" =>"South Carolina",
                "country_id" =>"231"
            ),
            array(
                //"3967",
                "name" =>"South Dakota",
                "country_id" =>"231"
            ),
            array(
                //"3968",
                "name" =>"Sublimity",
                "country_id" =>"231"
            ),
            array(
                //"3969",
                "name" =>"Tennessee",
                "country_id" =>"231"
            ),
            array(
                //"3970",
                "name" =>"Texas",
                "country_id" =>"231"
            ),
            array(
                //"3971",
                "name" =>"Trimble",
                "country_id" =>"231"
            ),
            array(
                //"3972",
                "name" =>"Utah",
                "country_id" =>"231"
            ),
            array(
                //"3973",
                "name" =>"Vermont",
                "country_id" =>"231"
            ),
            array(
                //"3974",
                "name" =>"Virginia",
                "country_id" =>"231"
            ),
            array(
                //"3975",
                "name" =>"Washington",
                "country_id" =>"231"
            ),
            array(
                //"3976",
                "name" =>"West Virginia",
                "country_id" =>"231"
            ),
            array(
                //"3977",
                "name" =>"Wisconsin",
                "country_id" =>"231"
            ),
            array(
                //"3978",
                "name" =>"Wyoming",
                "country_id" =>"231"
            ),
            array(
                //"3979",
                "name" =>"United States Minor Outlying I",
                "country_id" =>"232"
            ),
            array(
                //"3980",
                "name" =>"Artigas",
                "country_id" =>"233"
            ),
            array(
                //"3981",
                "name" =>"Canelones",
                "country_id" =>"233"
            ),
            array(
                //"3982",
                "name" =>"Cerro Largo",
                "country_id" =>"233"
            ),
            array(
                //"3983",
                "name" =>"Colonia",
                "country_id" =>"233"
            ),
            array(
                //"3984",
                "name" =>"Durazno",
                "country_id" =>"233"
            ),
            array(
                //"3985",
                "name" =>"FLorida",
                "country_id" =>"233"
            ),
            array(
                //"3986",
                "name" =>"Flores",
                "country_id" =>"233"
            ),
            array(
                //"3987",
                "name" =>"Lavalleja",
                "country_id" =>"233"
            ),
            array(
                //"3988",
                "name" =>"Maldonado",
                "country_id" =>"233"
            ),
            array(
                //"3989",
                "name" =>"Montevideo",
                "country_id" =>"233"
            ),
            array(
                //"3990",
                "name" =>"Paysandu",
                "country_id" =>"233"
            ),
            array(
                //"3991",
                "name" =>"Rio Negro",
                "country_id" =>"233"
            ),
            array(
                //"3992",
                "name" =>"Rivera",
                "country_id" =>"233"
            ),
            array(
                //"3993",
                "name" =>"Rocha",
                "country_id" =>"233"
            ),
            array(
                //"3994",
                "name" =>"Salto",
                "country_id" =>"233"
            ),
            array(
                //"3995",
                "name" =>"San Jose",
                "country_id" =>"233"
            ),
            array(
                //"3996",
                "name" =>"Soriano",
                "country_id" =>"233"
            ),
            array(
                //"3997",
                "name" =>"Tacuarembo",
                "country_id" =>"233"
            ),
            array(
                //"3998",
                "name" =>"Treinta y Tres",
                "country_id" =>"233"
            ),
            array(
                //"3999",
                "name" =>"Andijon",
                "country_id" =>"234"
            ),
            array(
                //"4000",
                "name" =>"Buhoro",
                "country_id" =>"234"
            ),
            array(
                //"4001",
                "name" =>"Buxoro Viloyati",
                "country_id" =>"234"
            ),
            array(
                //"4002",
                "name" =>"Cizah",
                "country_id" =>"234"
            ),
            array(
                //"4003",
                "name" =>"Fargona",
                "country_id" =>"234"
            ),
            array(
                //"4004",
                "name" =>"Horazm",
                "country_id" =>"234"
            ),
            array(
                //"4005",
                "name" =>"Kaskadar",
                "country_id" =>"234"
            ),
            array(
                //"4006",
                "name" =>"Korakalpogiston",
                "country_id" =>"234"
            ),
            array(
                //"4007",
                "name" =>"Namangan",
                "country_id" =>"234"
            ),
            array(
                //"4008",
                "name" =>"Navoi",
                "country_id" =>"234"
            ),
            array(
                //"4009",
                "name" =>"Samarkand",
                "country_id" =>"234"
            ),
            array(
                //"4010",
                "name" =>"Sirdare",
                "country_id" =>"234"
            ),
            array(
                //"4011",
                "name" =>"Surhondar",
                "country_id" =>"234"
            ),
            array(
                //"4012",
                "name" =>"Toskent",
                "country_id" =>"234"
            ),
            array(
                //"4013",
                "name" =>"Malampa",
                "country_id" =>"235"
            ),
            array(
                //"4014",
                "name" =>"Penama",
                "country_id" =>"235"
            ),
            array(
                //"4015",
                "name" =>"Sanma",
                "country_id" =>"235"
            ),
            array(
                //"4016",
                "name" =>"Shefa",
                "country_id" =>"235"
            ),
            array(
                //"4017",
                "name" =>"Tafea",
                "country_id" =>"235"
            ),
            array(
                //"4018",
                "name" =>"Torba",
                "country_id" =>"235"
            ),
            array(
                //"4019",
                "name" =>"Vatican City State (Holy See)",
                "country_id" =>"236"
            ),
            array(
                //"4020",
                "name" =>"Amazonas",
                "country_id" =>"237"
            ),
            array(
                //"4021",
                "name" =>"Anzoategui",
                "country_id" =>"237"
            ),
            array(
                //"4022",
                "name" =>"Apure",
                "country_id" =>"237"
            ),
            array(
                //"4023",
                "name" =>"Aragua",
                "country_id" =>"237"
            ),
            array(
                //"4024",
                "name" =>"Barinas",
                "country_id" =>"237"
            ),
            array(
                //"4025",
                "name" =>"Bolivar",
                "country_id" =>"237"
            ),
            array(
                //"4026",
                "name" =>"Carabobo",
                "country_id" =>"237"
            ),
            array(
                //"4027",
                "name" =>"Cojedes",
                "country_id" =>"237"
            ),
            array(
                //"4028",
                "name" =>"Delta Amacuro",
                "country_id" =>"237"
            ),
            array(
                //"4029",
                "name" =>"Distrito Federal",
                "country_id" =>"237"
            ),
            array(
                //"4030",
                "name" =>"Falcon",
                "country_id" =>"237"
            ),
            array(
                //"4031",
                "name" =>"Guarico",
                "country_id" =>"237"
            ),
            array(
                //"4032",
                "name" =>"Lara",
                "country_id" =>"237"
            ),
            array(
                //"4033",
                "name" =>"Merida",
                "country_id" =>"237"
            ),
            array(
                //"4034",
                "name" =>"Miranda",
                "country_id" =>"237"
            ),
            array(
                //"4035",
                "name" =>"Monagas",
                "country_id" =>"237"
            ),
            array(
                //"4036",
                "name" =>"Nueva Esparta",
                "country_id" =>"237"
            ),
            array(
                //"4037",
                "name" =>"Portuguesa",
                "country_id" =>"237"
            ),
            array(
                //"4038",
                "name" =>"Sucre",
                "country_id" =>"237"
            ),
            array(
                //"4039",
                "name" =>"Tachira",
                "country_id" =>"237"
            ),
            array(
                //"4040",
                "name" =>"Trujillo",
                "country_id" =>"237"
            ),
            array(
                //"4041",
                "name" =>"Vargas",
                "country_id" =>"237"
            ),
            array(
                //"4042",
                "name" =>"Yaracuy",
                "country_id" =>"237"
            ),
            array(
                //"4043",
                "name" =>"Zulia",
                "country_id" =>"237"
            ),
            array(
                //"4044",
                "name" =>"Bac Giang",
                "country_id" =>"238"
            ),
            array(
                //"4045",
                "name" =>"Binh Dinh",
                "country_id" =>"238"
            ),
            array(
                //"4046",
                "name" =>"Binh Duong",
                "country_id" =>"238"
            ),
            array(
                //"4047",
                "name" =>"Da Nang",
                "country_id" =>"238"
            ),
            array(
                //"4048",
                "name" =>"Dong Bang Song Cuu Long",
                "country_id" =>"238"
            ),
            array(
                //"4049",
                "name" =>"Dong Bang Song Hong",
                "country_id" =>"238"
            ),
            array(
                //"4050",
                "name" =>"Dong Nai",
                "country_id" =>"238"
            ),
            array(
                //"4051",
                "name" =>"Dong Nam Bo",
                "country_id" =>"238"
            ),
            array(
                //"4052",
                "name" =>"Duyen Hai Mien Trung",
                "country_id" =>"238"
            ),
            array(
                //"4053",
                "name" =>"Hanoi",
                "country_id" =>"238"
            ),
            array(
                //"4054",
                "name" =>"Hung Yen",
                "country_id" =>"238"
            ),
            array(
                //"4055",
                "name" =>"Khu Bon Cu",
                "country_id" =>"238"
            ),
            array(
                //"4056",
                "name" =>"Long An",
                "country_id" =>"238"
            ),
            array(
                //"4057",
                "name" =>"Mien Nui Va Trung Du",
                "country_id" =>"238"
            ),
            array(
                //"4058",
                "name" =>"Thai Nguyen",
                "country_id" =>"238"
            ),
            array(
                //"4059",
                "name" =>"Thanh Pho Ho Chi Minh",
                "country_id" =>"238"
            ),
            array(
                //"4060",
                "name" =>"Thu Do Ha Noi",
                "country_id" =>"238"
            ),
            array(
                //"4061",
                "name" =>"Tinh Can Tho",
                "country_id" =>"238"
            ),
            array(
                //"4062",
                "name" =>"Tinh Da Nang",
                "country_id" =>"238"
            ),
            array(
                //"4063",
                "name" =>"Tinh Gia Lai",
                "country_id" =>"238"
            ),
            array(
                //"4064",
                "name" =>"Anegada",
                "country_id" =>"239"
            ),
            array(
                //"4065",
                "name" =>"Jost van Dyke",
                "country_id" =>"239"
            ),
            array(
                //"4066",
                "name" =>"Tortola",
                "country_id" =>"239"
            ),
            array(
                //"4067",
                "name" =>"Saint Croix",
                "country_id" =>"240"
            ),
            array(
                //"4068",
                "name" =>"Saint John",
                "country_id" =>"240"
            ),
            array(
                //"4069",
                "name" =>"Saint Thomas",
                "country_id" =>"240"
            ),
            array(
                //"4070",
                "name" =>"Alo",
                "country_id" =>"241"
            ),
            array(
                //"4071",
                "name" =>"Singave",
                "country_id" =>"241"
            ),
            array(
                //"4072",
                "name" =>"Wallis",
                "country_id" =>"241"
            ),
            array(
                //"4073",
                "name" =>"Bu Jaydur",
                "country_id" =>"242"
            ),
            array(
                //"4074",
                "name" =>"Wad-adh-Dhahab",
                "country_id" =>"242"
            ),
            array(
                //"4075",
                "name" =>"al-''Ayun",
                "country_id" =>"242"
            ),
            array(
                //"4076",
                "name" =>"as-Samarah",
                "country_id" =>"242"
            ),
            array(
                //"4077",
                "name" =>"Adan",
                "country_id" =>"243"
            ),
            array(
                //"4078",
                "name" =>"Abyan",
                "country_id" =>"243"
            ),
            array(
                //"4079",
                "name" =>"Dhamar",
                "country_id" =>"243"
            ),
            array(
                //"4080",
                "name" =>"Hadramaut",
                "country_id" =>"243"
            ),
            array(
                //"4081",
                "name" =>"Hajjah",
                "country_id" =>"243"
            ),
            array(
                //"4082",
                "name" =>"Hudaydah",
                "country_id" =>"243"
            ),
            array(
                //"4083",
                "name" =>"Ibb",
                "country_id" =>"243"
            ),
            array(
                //"4084",
                "name" =>"Lahij",
                "country_id" =>"243"
            ),
            array(
                //"4085",
                "name" =>"Ma''rib",
                "country_id" =>"243"
            ),
            array(
                //"4086",
                "name" =>"Madinat San''a",
                "country_id" =>"243"
            ),
            array(
                //"4087",
                "name" =>"Sa''dah",
                "country_id" =>"243"
            ),
            array(
                //"4088",
                "name" =>"Sana",
                "country_id" =>"243"
            ),
            array(
                //"4089",
                "name" =>"Shabwah",
                "country_id" =>"243"
            ),
            array(
                //"4090",
                "name" =>"Ta''izz",
                "country_id" =>"243"
            ),
            array(
                //"4091",
                "name" =>"al-Bayda",
                "country_id" =>"243"
            ),
            array(
                //"4092",
                "name" =>"al-Hudaydah",
                "country_id" =>"243"
            ),
            array(
                //"4093",
                "name" =>"al-Jawf",
                "country_id" =>"243"
            ),
            array(
                //"4094",
                "name" =>"al-Mahrah",
                "country_id" =>"243"
            ),
            array(
                //"4095",
                "name" =>"al-Mahwit",
                "country_id" =>"243"
            ),
            array(
                //"4096",
                "name" =>"Central Serbia",
                "country_id" =>"244"
            ),
            array(
                //"4097",
                "name" =>"Kosovo and Metohija",
                "country_id" =>"244"
            ),
            array(
                //"4098",
                "name" =>"Montenegro",
                "country_id" =>"244"
            ),
            array(
                //"4099",
                "name" =>"Republic of Serbia",
                "country_id" =>"244"
            ),
            array(
                //"4100",
                "name" =>"Serbia",
                "country_id" =>"244"
            ),
            array(
                //"4101",
                "name" =>"Vojvodina",
                "country_id" =>"244"
            ),
            array(
                //"4102",
                "name" =>"Central",
                "country_id" =>"245"
            ),
            array(
                //"4103",
                "name" =>"Copperbelt",
                "country_id" =>"245"
            ),
            array(
                //"4104",
                "name" =>"Eastern",
                "country_id" =>"245"
            ),
            array(
                //"4105",
                "name" =>"Luapala",
                "country_id" =>"245"
            ),
            array(
                //"4106",
                "name" =>"Lusaka",
                "country_id" =>"245"
            ),
            array(
                //"4107",
                "name" =>"North-Western",
                "country_id" =>"245"
            ),
            array(
                //"4108",
                "name" =>"Northern",
                "country_id" =>"245"
            ),
            array(
                //"4109",
                "name" =>"Southern",
                "country_id" =>"245"
            ),
            array(
                //"4110",
                "name" =>"Western",
                "country_id" =>"245"
            ),
            array(
                //"4111",
                "name" =>"Bulawayo",
                "country_id" =>"246"
            ),
            array(
                //"4112",
                "name" =>"Harare",
                "country_id" =>"246"
            ),
            array(
                //"4113",
                "name" =>"Manicaland",
                "country_id" =>"246"
            ),
            array(
                //"4114",
                "name" =>"Mashonaland Central",
                "country_id" =>"246"
            ),
            array(
                //"4115",
                "name" =>"Mashonaland East",
                "country_id" =>"246"
            ),
            array(
                //"4116",
                "name" =>"Mashonaland West",
                "country_id" =>"246"
            ),
            array(
                //"4117",
                "name" =>"Masvingo",
                "country_id" =>"246"
            ),
            array(
                //"4118",
                "name" =>"Matabeleland North",
                "country_id" =>"246"
            ),
            array(
                //"4119",
                "name" =>"Matabeleland South",
                "country_id" =>"246"
            ),
            array(
                //"4120",
                "name" =>"Midlands",
                "country_id" =>"246"
            )

        ));
    }
}
