<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->delete();

        $countries = [
            [
                "flag" => "🇦🇱",
                "code" => "sq_AL",
                "name" => "Albania",
                "iso" => "AL"
            ],
            [
                "flag" => "🇩🇿",
                "code" => "ar_DZ",
                "name" => "Algeria",
                "iso" => "DZ"
            ],
            [
                "flag" => "🇦🇩",
                "code" => "ca_AD",
                "name" => "Andorra",
                "iso" => "AD"
            ],
            [
                "flag" => "🇦🇴",
                "code" => "pt_AO",
                "name" => "Angola",
                "iso" => "AO"
            ],
            [
                "flag" => "🇦🇬",
                "code" => "en_AG",
                "name" => "Antigua and Barbuda",
                "iso" => "AG"
            ],
            [
                "flag" => "🇦🇷",
                "code" => "es_AR",
                "name" => "Argentina",
                "iso" => "AR"
            ],
            [
                "flag" => "🇦🇺",
                "code" => "en_AU",
                "name" => "Australia",
                "iso" => "AU"
            ],
            [
                "flag" => "🇦🇹",
                "code" => "de_AT",
                "name" => "Austria",
                "iso" => "AT"
            ],
            [
                "flag" => "🇦🇿",
                "code" => "az_AZ",
                "name" => "Azerbaijan",
                "iso" => "AZ"
            ],
            [
                "flag" => "🇧🇸",
                "code" => "en_BS",
                "name" => "Bahamas",
                "iso" => "BS"
            ],
            [
                "flag" => "🇧🇭",
                "code" => "ar_BH",
                "name" => "Bahrain",
                "iso" => "BH"
            ],
            [
                "flag" => "🇧🇧",
                "code" => "en_BB",
                "name" => "Barbados",
                "iso" => "BB"
            ],
            [
                "flag" => "🇧🇾",
                "code" => "be_BY",
                "name" => "Belarus",
                "iso" => "BY"
            ],
            [
                "flag" => "🇧🇪",
                "code" => "fr_BE",
                "name" => "Belgium",
                "iso" => "BE"
            ],
            [
                "flag" => "🇧🇿",
                "code" => "en_BZ",
                "name" => "Belize",
                "iso" => "BZ"
            ],
            [
                "flag" => "🇧🇲",
                "code" => "en_BM",
                "name" => "Bermuda",
                "iso" => "BM"
            ],
            [
                "flag" => "🇧🇴",
                "code" => "es_BO",
                "name" => "Bolivia",
                "iso" => "BO"
            ],
            [
                "flag" => "🇧🇦",
                "code" => "bs_BA",
                "name" => "Bosnia and Herzegovina",
                "iso" => "BA"
            ],
            [
                "flag" => "🇧🇷",
                "code" => "pt_BR",
                "name" => "Brazil",
                "iso" => "BR"
            ],
            [
                "flag" => "🇧🇬",
                "code" => "bg_BG",
                "name" => "Bulgaria",
                "iso" => "BG"
            ],
            [
                "flag" => "🇧🇫",
                "code" => "fr_BF",
                "name" => "Burkina Faso",
                "iso" => "BF"
            ],
            [
                "flag" => "🇨🇲",
                "code" => "en_CM",
                "name" => "Cameroon",
                "iso" => "CM"
            ],
            [
                "flag" => "🇨🇦",
                "code" => "en_CA",
                "name" => "Canada",
                "iso" => "CA"
            ],
            [
                "flag" => "🇨🇻",
                "code" => "pt_CV",
                "name" => "Cape Verde",
                "iso" => "CV"
            ],
            [
                "flag" => "🇹🇩",
                "code" => "ar_TD",
                "name" => "Chad",
                "iso" => "TD"
            ],
            [
                "flag" => "🇨🇱",
                "code" => "es_CL",
                "name" => "Chile",
                "iso" => "CL"
            ],
            [
                "flag" => "🇨🇴",
                "code" => "es_CO",
                "name" => "Colombia",
                "iso" => "CO"
            ],
            [
                "flag" => "🇨🇷",
                "code" => "es_CR",
                "name" => "Costa Rica",
                "iso" => "CR"
            ],
            [
                "flag" => "🇭🇷",
                "code" => "hr_HR",
                "name" => "Croatia",
                "iso" => "HR"
            ],
            [
                "flag" => "🇨🇺",
                "code" => "es_CU",
                "name" => "Cuba",
                "iso" => "CU"
            ],
            [
                "flag" => "🇨🇾",
                "code" => "el_CY",
                "name" => "Cyprus",
                "iso" => "CY"
            ],
            [
                "flag" => "🇨🇿",
                "code" => "cs_CZ",
                "name" => "Czech Republic",
                "iso" => "CZ"
            ],
            [
                "flag" => "🇨🇩",
                "code" => "fr_CD",
                "name" => "DR Congo",
                "iso" => "CD"
            ],
            [
                "flag" => "🇩🇰",
                "code" => "en_DK",
                "name" => "Denmark",
                "iso" => "DK"
            ],
            [
                "flag" => "🇩🇴",
                "code" => "es_DO",
                "name" => "Dominican Republic",
                "iso" => "DO"
            ],
            [
                "flag" => "🇪🇨",
                "code" => "es_EC",
                "name" => "Ecuador",
                "iso" => "EC"
            ],
            [
                "flag" => "🇪🇬",
                "code" => "ar_EG",
                "name" => "Egypt",
                "iso" => "EG"
            ],
            [
                "flag" => "🇸🇻",
                "code" => "es_SV",
                "name" => "El Salvador",
                "iso" => "SV"
            ],
            [
                "flag" => "🇬🇶",
                "code" => "es_GQ",
                "name" => "Equatorial Guinea",
                "iso" => "GQ"
            ],
            [
                "flag" => "🇪🇪",
                "code" => "et_EE",
                "name" => "Estonia",
                "iso" => "EE"
            ],
            [
                "flag" => "🇫🇯",
                "code" => "en_FJ",
                "name" => "Fiji",
                "iso" => "FJ"
            ],
            [
                "flag" => "🇫🇮",
                "code" => "fi_FI",
                "name" => "Finland",
                "iso" => "FI"
            ],
            [
                "flag" => "🇫🇷",
                "code" => "fr_FR",
                "name" => "France",
                "iso" => "FR"
            ],
            [
                "flag" => "🇬🇫",
                "code" => "fr_GF",
                "name" => "French Guiana",
                "iso" => "GF"
            ],
            [
                "flag" => "🇵🇫",
                "code" => "fr_PF",
                "name" => "French Polynesia",
                "iso" => "PF"
            ],
            [
                "flag" => "🇩🇪",
                "code" => "de_DE",
                "name" => "Germany",
                "iso" => "DE"
            ],
            [
                "flag" => "🇬🇭",
                "code" => "en_GH",
                "name" => "Ghana",
                "iso" => "GH"
            ],
            [
                "flag" => "🇬🇮",
                "code" => "en_GI",
                "name" => "Gibraltar",
                "iso" => "GI"
            ],
            [
                "flag" => "🇬🇷",
                "code" => "el_GR",
                "name" => "Greece",
                "iso" => "GR"
            ],
            [
                "flag" => "🇬🇹",
                "code" => "es_GT",
                "name" => "Guatemala",
                "iso" => "GT"
            ],
            [
                "flag" => "🇬🇬",
                "code" => "en_GG",
                "name" => "Guernsey",
                "iso" => "GG"
            ],
            [
                "flag" => "🇬🇾",
                "code" => "en_GY",
                "name" => "Guyana",
                "iso" => "GY"
            ],
            [
                "flag" => "🇭🇳",
                "code" => "es_HN",
                "name" => "Honduras",
                "iso" => "HN"
            ],
            [
                "flag" => "🇭🇰",
                "code" => "zh_HK",
                "name" => "Hong Kong",
                "iso" => "HK"
            ],
            [
                "flag" => "🇭🇺",
                "code" => "hu_HU",
                "name" => "Hungary",
                "iso" => "HU"
            ],
            [
                "flag" => "🇮🇸",
                "code" => "is_IS",
                "name" => "Iceland",
                "iso" => "IS"
            ],
            [
                "flag" => "🇮🇳",
                "code" => "en_IN",
                "name" => "India",
                "iso" => "IN"
            ],
            [
                "flag" => "🇮🇩",
                "code" => "en_ID",
                "name" => "Indonesia",
                "iso" => "ID"
            ],
            [
                "flag" => "🇮🇶",
                "code" => "ar_IQ",
                "name" => "Iraq",
                "iso" => "IQ"
            ],
            [
                "flag" => "🇮🇪",
                "code" => "en_IE",
                "name" => "Ireland",
                "iso" => "IE"
            ],
            [
                "flag" => "🇮🇱",
                "code" => "he_IL",
                "name" => "Israel",
                "iso" => "IL"
            ],
            [
                "flag" => "🇮🇹",
                "code" => "it_IT",
                "name" => "Italy",
                "iso" => "IT"
            ],
            [
                "flag" => "🇨🇮",
                "code" => "fr_CI",
                "name" => "Ivory Coast",
                "iso" => "CI"
            ],
            [
                "flag" => "🇯🇲",
                "code" => "en_JM",
                "name" => "Jamaica",
                "iso" => "JM"
            ],
            [
                "flag" => "🇯🇵",
                "code" => "ja_JP",
                "name" => "Japan",
                "iso" => "JP"
            ],
            [
                "flag" => "🇯🇴",
                "code" => "ar_JO",
                "name" => "Jordan",
                "iso" => "JO"
            ],
            [
                "flag" => "🇰🇪",
                "code" => "en_KE",
                "name" => "Kenya",
                "iso" => "KE"
            ],
            [
                "flag" => "🇽🇰",
                "code" => "sq_XK",
                "name" => "Kosovo",
                "iso" => "XK"
            ],
            [
                "flag" => "🇰🇼",
                "code" => "ar_KW",
                "name" => "Kuwait",
                "iso" => "KW"
            ],
            [
                "flag" => "🇱🇻",
                "code" => "lv_LV",
                "name" => "Latvia",
                "iso" => "LV"
            ],
            [
                "flag" => "🇱🇧",
                "code" => "ar_LB",
                "name" => "Lebanon",
                "iso" => "LB"
            ],
            [
                "flag" => "🇱🇾",
                "code" => "ar_LY",
                "name" => "Libya",
                "iso" => "LY"
            ],
            [
                "flag" => "🇱🇮",
                "code" => "de_LI",
                "name" => "Liechtenstein",
                "iso" => "LI"
            ],
            [
                "flag" => "🇱🇹",
                "code" => "lt_LT",
                "name" => "Lithuania",
                "iso" => "LT"
            ],
            [
                "flag" => "🇱🇺",
                "code" => "fr_LU",
                "name" => "Luxembourg",
                "iso" => "LU"
            ],
            [
                "flag" => "🇲🇰",
                "code" => "mk_MK",
                "name" => "Macedonia",
                "iso" => "MK"
            ],
            [
                "flag" => "🇲🇬",
                "code" => "fr_MG",
                "name" => "Madagascar",
                "iso" => "MG"
            ],
            [
                "flag" => "🇲🇼",
                "code" => "en_MW",
                "name" => "Malawi",
                "iso" => "MW"
            ],
            [
                "flag" => "🇲🇾",
                "code" => "en_MY",
                "name" => "Malaysia",
                "iso" => "MY"
            ],
            [
                "flag" => "🇲🇱",
                "code" => "fr_ML",
                "name" => "Mali",
                "iso" => "ML"
            ],
            [
                "flag" => "🇲🇹",
                "code" => "mt_MT",
                "name" => "Malta",
                "iso" => "MT"
            ],
            [
                "flag" => "🇲🇺",
                "code" => "fr_MU",
                "name" => "Mauritius",
                "iso" => "MU"
            ],
            [
                "flag" => "🇲🇽",
                "code" => "es_MX",
                "name" => "Mexico",
                "iso" => "MX"
            ],
            [
                "flag" => "🇲🇩",
                "code" => "ro_MD",
                "name" => "Moldova",
                "iso" => "MD"
            ],
            [
                "flag" => "🇲🇨",
                "code" => "fr_MC",
                "name" => "Monaco",
                "iso" => "MC"
            ],
            [
                "flag" => "🇲🇪",
                "code" => "sr_ME",
                "name" => "Montenegro",
                "iso" => "ME"
            ],
            [
                "flag" => "🇲🇦",
                "code" => "ar_MA",
                "name" => "Morocco",
                "iso" => "MA"
            ],
            [
                "flag" => "🇲🇿",
                "code" => "pt_MZ",
                "name" => "Mozambique",
                "iso" => "MZ"
            ],
            [
                "flag" => "🇳🇱",
                "code" => "en_NL",
                "name" => "Netherlands",
                "iso" => "NL"
            ],
            [
                "flag" => "🇳🇿",
                "code" => "en_NZ",
                "name" => "New Zealand",
                "iso" => "NZ"
            ],
            [
                "flag" => "🇳🇮",
                "code" => "es_NI",
                "name" => "Nicaragua",
                "iso" => "NI"
            ],
            [
                "flag" => "🇳🇪",
                "code" => "fr_NE",
                "name" => "Niger",
                "iso" => "NE"
            ],
            [
                "flag" => "🇳🇬",
                "code" => "en_NG",
                "name" => "Nigeria",
                "iso" => "NG"
            ],
            [
                "flag" => "🇳🇴",
                "code" => "en_NO",
                "name" => "Norway",
                "iso" => "NO"
            ],
            [
                "flag" => "🇴🇲",
                "code" => "ar_OM",
                "name" => "Oman",
                "iso" => "OM"
            ],
            [
                "flag" => "🇵🇰",
                "code" => "ur_PK",
                "name" => "Pakistan",
                "iso" => "PK"
            ],
            [
                "flag" => "🇵🇸",
                "code" => "ar_PS",
                "name" => "Palestine",
                "iso" => "PS"
            ],
            [
                "flag" => "🇵🇦",
                "code" => "es_PA",
                "name" => "Panama",
                "iso" => "PA"
            ],
            [
                "flag" => "🇵🇬",
                "code" => "en_PG",
                "name" => "Papua New Guinea",
                "iso" => "PG"
            ],
            [
                "flag" => "🇵🇾",
                "code" => "es_PY",
                "name" => "Paraguay",
                "iso" => "PY"
            ],
            [
                "flag" => "🇵🇪",
                "code" => "es_PE",
                "name" => "Peru",
                "iso" => "PE"
            ],
            [
                "flag" => "🇵🇭",
                "code" => "en_PH",
                "name" => "Philippines",
                "iso" => "PH"
            ],
            [
                "flag" => "🇵🇱",
                "code" => "pl_PL",
                "name" => "Poland",
                "iso" => "PL"
            ],
            [
                "flag" => "🇵🇹",
                "code" => "pt_PT",
                "name" => "Portugal",
                "iso" => "PT"
            ],
            [
                "flag" => "🇶🇦",
                "code" => "ar_QA",
                "name" => "Qatar",
                "iso" => "QA"
            ],
            [
                "flag" => "🇷🇴",
                "code" => "ro_RO",
                "name" => "Romania",
                "iso" => "RO"
            ],
            [
                "flag" => "🇷🇺",
                "code" => "ru_RU",
                "name" => "Russia",
                "iso" => "RU"
            ],
            [
                "flag" => "🇱🇨",
                "code" => "en_LC",
                "name" => "Saint Lucia",
                "iso" => "LC"
            ],
            [
                "flag" => "🇸🇲",
                "code" => "it_SM",
                "name" => "San Marino",
                "iso" => "SM"
            ],
            [
                "flag" => "🇸🇦",
                "code" => "ar_SA",
                "name" => "Saudi Arabia",
                "iso" => "SA"
            ],
            [
                "flag" => "🇸🇳",
                "code" => "fr_SN",
                "name" => "Senegal",
                "iso" => "SN"
            ],
            [
                "flag" => "🇷🇸",
                "code" => "sr_RS",
                "name" => "Serbia",
                "iso" => "RS"
            ],
            [
                "flag" => "🇸🇨",
                "code" => "fr_SC",
                "name" => "Seychelles",
                "iso" => "SC"
            ],
            [
                "flag" => "🇸🇬",
                "code" => "en_SG",
                "name" => "Singapore",
                "iso" => "SG"
            ],
            [
                "flag" => "🇸🇰",
                "code" => "sk_SK",
                "name" => "Slovakia",
                "iso" => "SK"
            ],
            [
                "flag" => "🇸🇮",
                "code" => "sl_SI",
                "name" => "Slovenia",
                "iso" => "SI"
            ],
            [
                "flag" => "🇿🇦",
                "code" => "en_ZA",
                "name" => "South Africa",
                "iso" => "ZA"
            ],
            [
                "flag" => "🇰🇷",
                "code" => "ko_KR",
                "name" => "South Korea",
                "iso" => "KR"
            ],
            [
                "flag" => "🇪🇸",
                "code" => "es_ES",
                "name" => "Spain",
                "iso" => "ES"
            ],
            [
                "flag" => "🇸🇪",
                "code" => "sv_SE",
                "name" => "Sweden",
                "iso" => "SE"
            ],
            [
                "flag" => "🇨🇭",
                "code" => "de_CH",
                "name" => "Switzerland",
                "iso" => "CH"
            ],
            [
                "flag" => "🇹🇼",
                "code" => "zh_TW",
                "name" => "Taiwan",
                "iso" => "TW"
            ],
            [
                "flag" => "🇹🇿",
                "code" => "sw_TZ",
                "name" => "Tanzania",
                "iso" => "TZ"
            ],
            [
                "flag" => "🇹🇭",
                "code" => "en_TH",
                "name" => "Thailand",
                "iso" => "TH"
            ],
            [
                "flag" => "🇹🇹",
                "code" => "en_TT",
                "name" => "Trinidad and Tobago",
                "iso" => "TT"
            ],
            [
                "flag" => "🇹🇳",
                "code" => "ar_TN",
                "name" => "Tunisia",
                "iso" => "TN"
            ],
            [
                "flag" => "🇹🇷",
                "code" => "tr_TR",
                "name" => "Turkey",
                "iso" => "TR"
            ],
            [
                "flag" => "🇹🇨",
                "code" => "en_TC",
                "name" => "Turks and Caicos Islands",
                "iso" => "TC"
            ],
            [
                "flag" => "🇺🇬",
                "code" => "en_UG",
                "name" => "Uganda",
                "iso" => "UG"
            ],
            [
                "flag" => "🇺🇦",
                "code" => "uk_UA",
                "name" => "Ukraine",
                "iso" => "UA"
            ],
            [
                "flag" => "🇦🇪",
                "code" => "ar_AE",
                "name" => "United Arab Emirates",
                "iso" => "AE"
            ],
            [
                "flag" => "🇬🇧",
                "code" => "en_GB",
                "name" => "United Kingdom",
                "iso" => "GB"
            ],
            [
                "flag" => "🇺🇸",
                "code" => "en_US",
                "name" => "United States",
                "iso" => "US"
            ],
            [
                "flag" => "🇺🇾",
                "code" => "es_UY",
                "name" => "Uruguay",
                "iso" => "UY"
            ],
            [
                "flag" => "🇻🇦",
                "code" => "it_VA",
                "name" => "Vatican City",
                "iso" => "VA"
            ],
            [
                "flag" => "🇻🇪",
                "code" => "es_VE",
                "name" => "Venezuela",
                "iso" => "VE"
            ],
            [
                "flag" => "🇾🇪",
                "code" => "ar_YE",
                "name" => "Yemen",
                "iso" => "YE"
            ],
            [
                "flag" => "🇿🇲",
                "code" => "en_ZM",
                "name" => "Zambia",
                "iso" => "ZM"
            ],
            [
                "flag" => "🇿🇼",
                "code" => "en_ZW",
                "name" => "Zimbabwe",
                "iso" => "ZW"
            ]
        ];

        DB::table("countries")->insert($countries);

    }
}
