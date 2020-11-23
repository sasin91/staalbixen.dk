<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

use function array_flip;
use function array_key_exists;
use function is_array;

/**
 * Class Country
 *
 * @method static static DNK()
 * @method static static SWE()
 * @method static static IRQ()
 * @method static static AFG()
 * @method static static ALA()
 * @method static static ALB()
 * @method static static DZA()
 * @method static static ASM()
 * @method static static AND()
 * @method static static ANT()
 * @method static static AGO()
 * @method static static AIA()
 * @method static static ATA()
 * @method static static ATG()
 * @method static static ARG()
 * @method static static ARM()
 * @method static static ABW()
 * @method static static AUS()
 * @method static static AUT()
 * @method static static AZE()
 * @method static static BHS()
 * @method static static BHR()
 * @method static static BGD()
 * @method static static BRB()
 * @method static static BLR()
 * @method static static BEL()
 * @method static static BLZ()
 * @method static static BEN()
 * @method static static BMU()
 * @method static static BTN()
 * @method static static BOL()
 * @method static static BES()
 * @method static static BIH()
 * @method static static BWA()
 * @method static static BVT()
 * @method static static BRA()
 * @method static static IOT()
 * @method static static BRN()
 * @method static static BGR()
 * @method static static BFA()
 * @method static static BDI()
 * @method static static KHM()
 * @method static static CMR()
 * @method static static CAN()
 * @method static static CPV()
 * @method static static CYM()
 * @method static static CAF()
 * @method static static TCD()
 * @method static static CHL()
 * @method static static CHN()
 * @method static static CXR()
 * @method static static CCK()
 * @method static static COL()
 * @method static static COM()
 * @method static static COG()
 * @method static static COD()
 * @method static static COK()
 * @method static static CRI()
 * @method static static CIV()
 * @method static static HRV()
 * @method static static CUB()
 * @method static static CYP()
 * @method static static CZE()
 * @method static static DJI()
 * @method static static DMA()
 * @method static static DOM()
 * @method static static ECU()
 * @method static static EGY()
 * @method static static SLV()
 * @method static static GNQ()
 * @method static static ERI()
 * @method static static EST()
 * @method static static ETH()
 * @method static static FLK()
 * @method static static FRO()
 * @method static static FJI()
 * @method static static FIN()
 * @method static static FRA()
 * @method static static GUF()
 * @method static static PYF()
 * @method static static ATF()
 * @method static static GAB()
 * @method static static GMB()
 * @method static static GEO()
 * @method static static DEU()
 * @method static static GHA()
 * @method static static GIB()
 * @method static static GRC()
 * @method static static GRL()
 * @method static static GRD()
 * @method static static GLP()
 * @method static static GUM()
 * @method static static GTM()
 * @method static static GGY()
 * @method static static GIN()
 * @method static static GNB()
 * @method static static GUY()
 * @method static static HTI()
 * @method static static HMD()
 * @method static static VAT()
 * @method static static HND()
 * @method static static HKG()
 * @method static static HUN()
 * @method static static ISL()
 * @method static static IND()
 * @method static static IDN()
 * @method static static IRN()
 * @method static static IRL()
 * @method static static IMN()
 * @method static static ISR()
 * @method static static ITA()
 * @method static static JAM()
 * @method static static JPN()
 * @method static static JEY()
 * @method static static JOR()
 * @method static static KAZ()
 * @method static static KEN()
 * @method static static KIR()
 * @method static static PRK()
 * @method static static KOR()
 * @method static static KWT()
 * @method static static KGZ()
 * @method static static LAO()
 * @method static static LVA()
 * @method static static LBN()
 * @method static static LSO()
 * @method static static LBR()
 * @method static static LBY()
 * @method static static LIE()
 * @method static static LTU()
 * @method static static LUX()
 * @method static static MAC()
 * @method static static MKD()
 * @method static static MDG()
 * @method static static MWI()
 * @method static static MDV()
 * @method static static MLI()
 * @method static static MLT()
 * @method static static MHL()
 * @method static static MTQ()
 * @method static static MRT()
 * @method static static MUS()
 * @method static static MYT()
 * @method static static MEX()
 * @method static static FSM()
 * @method static static MDA()
 * @method static static MCO()
 * @method static static MNG()
 * @method static static MNE()
 * @method static static MSR()
 * @method static static MAR()
 * @method static static MOZ()
 * @method static static MMR()
 * @method static static NAM()
 * @method static static NRU()
 * @method static static NPL()
 * @method static static NLD()
 * @method static static NCL()
 * @method static static NZL()
 * @method static static NIC()
 * @method static static NER()
 * @method static static NGA()
 * @method static static NIU()
 * @method static static NFK()
 * @method static static MNP()
 * @method static static NOR()
 * @method static static OMN()
 * @method static static PAK()
 * @method static static PLW()
 * @method static static PAN()
 * @method static static PNG()
 * @method static static PRY()
 * @method static static PER()
 * @method static static PHL()
 * @method static static PCN()
 * @method static static POL()
 * @method static static PRT()
 * @method static static PRI()
 * @method static static QAT()
 * @method static static ROU()
 * @method static static RUS()
 * @method static static RWA()
 * @method static static WSM()
 * @method static static SMR()
 * @method static static STP()
 * @method static static SAU()
 * @method static static SEN()
 * @method static static SRB()
 * @method static static SYC()
 * @method static static SLE()
 * @method static static SGP()
 * @method static static SVK()
 * @method static static SVN()
 * @method static static SLB()
 * @method static static SOM()
 * @method static static ZAF()
 * @method static static SGS()
 * @method static static ESP()
 * @method static static LKA()
 * @method static static SDN()
 * @method static static SSD()
 * @method static static SUR()
 * @method static static SJM()
 * @method static static SWZ()
 * @method static static CHE()
 * @method static static SYR()
 * @method static static TWN()
 * @method static static TJK()
 * @method static static TZA()
 * @method static static THA()
 * @method static static TLS()
 * @method static static TGO()
 * @method static static TKL()
 * @method static static TON()
 * @method static static TTO()
 * @method static static TUN()
 * @method static static TUR()
 * @method static static TKM()
 * @method static static TCA()
 * @method static static TUV()
 * @method static static UGA()
 * @method static static UKR()
 * @method static static ARE()
 * @method static static GBR()
 * @method static static USA()
 * @method static static UMI()
 * @method static static URY()
 * @method static static UZB()
 * @method static static VUT()
 * @method static static VEN()
 * @method static static VNM()
 * @method static static VGB()
 * @method static static VIR()
 * @method static static WLF()
 * @method static static ESH()
 * @method static static YEM()
 * @method static static ZMB()
 * @method static static ZWE()
 * @method static static KUL()
 * @method static static PSE()
 * @method static static CUW()
 * @method static static REU()
 * @method static static BLM()
 * @method static static SHN()
 * @method static static KNA()
 * @method static static LCA()
 * @method static static MAF()
 * @method static static SPM()
 * @method static static VCT()
 * @method static static SXM()
 * @method static static UNK()
 * @package App\Domains\Travelers\Enums
 * @src https://github.com/lukes/ISO-3166-Countries-with-Regional-Codes
 */
final class Country extends Enum implements LocalizedEnum
{
    const DNK = 'Denmark';
    const SWE = 'Sweden';
    const IRQ = 'Iraq';

    const AFG = 'Afghanistan';
    const ALA = 'Åland Islands';
    const ALB = 'Albania';
    const DZA = 'Algeria';
    const ASM = 'American Samoa';
    const AND = 'Andorra';
    const ANT = 'Netherlands Antilles';
    const AGO = 'Angola';
    const AIA = 'Anguilla';
    const ATA = 'Antarctica';
    const ATG = 'Antigua and Barbuda';
    const ARG = 'Argentina';
    const ARM = 'Armenia';
    const ABW = 'Aruba';
    const AUS = 'Australia';
    const AUT = 'Austria';
    const AZE = 'Azerbaijan';
    const BHS = 'Bahamas';
    const BHR = 'Bahrain';
    const BGD = 'Bangladesh';
    const BRB = 'Barbados';
    const BLR = 'Belarus';
    const BEL = 'Belgium';
    const BLZ = 'Belize';
    const BEN = 'Benin';
    const BMU = 'Bermuda';
    const BTN = 'Bhutan';
    const BOL = 'Bolivia (Plurinational State of)';
    const BES = 'Bonaire, Sint Eustatius and Saba';
    const BIH = 'Bosnia and Herzegovina';
    const BWA = 'Botswana';
    const BVT = 'Bouvet Island';
    const BRA = 'Brazil';
    const IOT = 'British Indian Ocean Territory';
    const BRN = 'Brunei Darussalam';
    const BGR = 'Bulgaria';
    const BFA = 'Burkina Faso';
    const BDI = 'Burundi';
    const KHM = 'Cambodia';
    const CMR = 'Cameroon';
    const CAN = 'Canada';
    const CPV = 'Cabo Verde';
    const CYM = 'Cayman Islands';
    const CAF = 'Central African Republic';
    const TCD = 'Chad';
    const CHL = 'Chile';
    const CHN = 'China';
    const CXR = 'Christmas Island';
    const CCK = 'Cocos (Keeling) Islands';
    const COL = 'Colombia';
    const COM = 'Comoros';
    const COG = 'Congo';
    const COD = 'Congo, Democratic Republic of the';
    const COK = 'Cook Islands';
    const CRI = 'Costa Rica';
    const CIV = 'Côte d\'Ivoire';
    const HRV = 'Croatia';
    const CUB = 'Cuba';
    const CYP = 'Cyprus';
    const CZE = 'Czechia';

    const DJI = 'Djibouti';
    const DMA = 'Dominica';
    const DOM = 'Dominican Republic';
    const ECU = 'Ecuador';
    const EGY = 'Egypt';
    const SLV = 'El Salvador';
    const GNQ = 'Equatorial Guinea';
    const ERI = 'Eritrea';
    const EST = 'Estonia';
    const ETH = 'Ethiopia';
    const FLK = 'Falkland Islands (Malvinas)';
    const FRO = 'Faroe Islands';
    const FJI = 'Fiji';
    const FIN = 'Finland';
    const FRA = 'France';
    const GUF = 'French Guiana';
    const PYF = 'French Polynesia';
    const ATF = 'French Southern Territories';
    const GAB = 'Gabon';
    const GMB = 'Gambia';
    const GEO = 'Georgia';
    const DEU = 'Germany';
    const GHA = 'Ghana';
    const GIB = 'Gibraltar';
    const GRC = 'Greece';
    const GRL = 'Greenland';
    const GRD = 'Grenada';
    const GLP = 'Guadeloupe';
    const GUM = 'Guam';
    const GTM = 'Guatemala';
    const GGY = 'Guernsey';
    const GIN = 'Guinea';
    const GNB = 'Guinea-Bissau';
    const GUY = 'Guyana';
    const HTI = 'Haiti';
    const HMD = 'Heard Island and McDonald Islands';
    const VAT = 'Holy See';
    const HND = 'Honduras';
    const HKG = 'Hong Kong';
    const HUN = 'Hungary';
    const ISL = 'Iceland';
    const IND = 'India';
    const IDN = 'Indonesia';
    const IRN = 'Iran (Islamic Republic of)';

    const IRL = 'Ireland';
    const IMN = 'Isle of Man';
    const ISR = 'Israel';
    const ITA = 'Italy';
    const JAM = 'Jamaica';
    const JPN = 'Japan';
    const JEY = 'Jersey';
    const JOR = 'Jordan';
    const KAZ = 'Kazakhstan';
    const KEN = 'Kenya';
    const KIR = 'Kiribati';
    const PRK = "Korea (Democratic People's Republic of)";
    const KOR = 'Korea, Republic of';
    const KWT = 'Kuwait';
    const KGZ = 'Kyrgyzstan';
    const LAO = "Lao People's Democratic Republic";
    const LVA = 'Latvia';
    const LBN = 'Lebanon';
    const LSO = 'Lesotho';
    const LBR = 'Liberia';
    const LBY = 'Libya';
    const LIE = 'Liechtenstein';
    const LTU = 'Lithuania';
    const LUX = 'Luxembourg';
    const MAC = 'Macao';
    const MKD = 'North Macedonia';
    const MDG = 'Madagascar';
    const MWI = 'Malawi';
    const MDV = 'Maldives';
    const MLI = 'Mali';
    const MLT = 'Malta';
    const MHL = 'Marshall Islands';
    const MTQ = 'Martinique';
    const MRT = 'Mauritania';
    const MUS = 'Mauritius';
    const MYT = 'Mayotte';
    const MEX = 'Mexico';
    const FSM = 'Micronesia (Federated States of)';
    const MDA = 'Moldova, Republic of';
    const MCO = 'Monaco';
    const MNG = 'Mongolia';
    const MNE = 'Montenegro';
    const MSR = 'Montserrat';
    const MAR = 'Morocco';
    const MOZ = 'Mozambique';
    const MMR = 'Myanmar';
    const NAM = 'Namibia';
    const NRU = 'Nauru';
    const NPL = 'Nepal';
    const NLD = 'Netherlands';
    const NCL = 'New Caledonia';
    const NZL = 'New Zealand';
    const NIC = 'Nicaragua';
    const NER = 'Niger';
    const NGA = 'Nigeria';
    const NIU = 'Niue';
    const NFK = 'Norfolk Island';
    const MNP = 'Northern Mariana Islands';
    const NOR = 'Norway';
    const OMN = 'Oman';
    const PAK = 'Pakistan';
    const PLW = 'Palau';
    const PAN = 'Panama';
    const PNG = 'Papua New Guinea';
    const PRY = 'Paraguay';
    const PER = 'Peru';
    const PHL = 'Philippines';
    const PCN = 'Pitcairn';
    const POL = 'Poland';
    const PRT = 'Portugal';
    const PRI = 'Puerto Rico';
    const QAT = 'Qatar';
    const ROU = 'Romania';
    const RUS = 'Russian Federation';
    const RWA = 'Rwanda';
    const WSM = 'Samoa';
    const SMR = 'San Marino';
    const STP = 'Sao Tome and Principe';
    const SAU = 'Saudi Arabia';
    const SEN = 'Senegal';
    const SRB = 'Serbia';
    const SYC = 'Seychelles';
    const SLE = 'Sierra Leone';
    const SGP = 'Singapore';
    const SVK = 'Slovakia';
    const SVN = 'Slovenia';
    const SLB = 'Solomon Islands';
    const SOM = 'Somalia';
    const ZAF = 'South Africa';
    const SGS = 'South Georgia and the South Sandwich Islands';
    const ESP = 'Spain';
    const LKA = 'Sri Lanka';
    const SDN = 'Sudan';
    const SSD = 'South Sudan';
    const SUR = 'Suriname';
    const SJM = 'Svalbard and Jan Mayen';
    const SWZ = 'Eswatini';
    const CHE = 'Switzerland';
    const SYR = 'Syrian Arab Republic';
    const TWN = 'Taiwan, Province of China';
    const TJK = 'Tajikistan';
    const TZA = 'Tanzania, United Republic of';
    const THA = 'Thailand';
    const TLS = 'Timor-Leste';
    const TGO = 'Togo';
    const TKL = 'Tokelau';
    const TON = 'Tonga';
    const TTO = 'Trinidad and Tobago';
    const TUN = 'Tunisia';
    const TUR = 'Turkey';
    const TKM = 'Turkmenistan';
    const TCA = 'Turks and Caicos Islands';
    const TUV = 'Tuvalu';
    const UGA = 'Uganda';
    const UKR = 'Ukraine';
    const ARE = 'United Arab Emirates';
    const GBR = 'United Kingdom of Great Britain and Northern Ireland';
    const USA = 'United States of America';
    const UMI = 'United States Minor Outlying Islands';
    const URY = 'Uruguay';
    const UZB = 'Uzbekistan';
    const VUT = 'Vanuatu';
    const VEN = 'Venezuela (Bolivarian Republic of)';
    const VNM = 'Viet Nam';
    const VGB = 'Virgin Islands (British)';
    const VIR = 'Virgin Islands (U.S.)';
    const WLF = 'Wallis and Futuna';
    const ESH = 'Western Sahara';
    const YEM = 'Yemen';
    const ZMB = 'Zambia';
    const ZWE = 'Zimbabwe';
    const KUL = 'Malaysia';
    const PSE = 'Palestine, State of';
    const CUW = 'Curaçao';
    const REU = 'Réunion';
    const BLM = 'Saint Barthélemy';
    const SHN = 'Saint Helena, Ascension and Tristan da Cunha';
    const KNA = 'Saint Kitts and Nevis';
    const LCA = 'Saint Lucia';
    const MAF = 'Saint Martin (French part)';
    const SPM = 'Saint Pierre and Miquelon';
    const VCT = 'Saint Vincent and the Grenadines';
    const SXM = 'Sint Maarten (Dutch part)';
    const UNK = 'Unknown';

    public static array $alpha2 = [
        "AF" => self::AFG,
        "AX" => self::ALA,
        "AL" => self::ALB,
        "DZ" => self::DZA,
        "AS" => self::ASM,
        "AD" => self::AND,
        "AO" => self::AGO,
        "AI" => self::AIA,
        "AQ" => self::ATA,
        "AG" => self::ATG,
        "AR" => self::ARG,
        "AM" => self::ARM,
        "AW" => self::ABW,
        "AU" => self::AUS,
        "AT" => self::AUT,
        "AZ" => self::AZE,
        "BS" => self::BHS,
        "BH" => self::BHR,
        "BD" => self::BGD,
        "BB" => self::BRB,
        "BY" => self::BLR,
        "BE" => self::BEL,
        "BZ" => self::BLZ,
        "BJ" => self::BEN,
        "BM" => self::BMU,
        "BT" => self::BTN,
        "BO" => self::BOL,
        "BQ" => self::BES,
        "BA" => self::BIH,
        "BW" => self::BWA,
        "BV" => self::BVT,
        "BR" => self::BRA,
        "IO" => self::IOT,
        "BN" => self::BRN,
        "BG" => self::BGR,
        "BF" => self::BFA,
        "BI" => self::BDI,
        "CV" => self::CPV,
        "KH" => self::KHM,
        "CM" => self::CMR,
        "CA" => self::CAN,
        "KY" => self::CYM,
        "CF" => self::CAF,
        "TD" => self::TCD,
        "CL" => self::CHL,
        "CN" => self::CHN,
        "CX" => self::CXR,
        "CC" => self::CCK,
        "CO" => self::COL,
        "KM" => self::COM,
        "CG" => self::COG,
        "CD" => self::COD,
        "CK" => self::COK,
        "CR" => self::CRI,
        "CI" => self::CIV,
        "HR" => self::HRV,
        "CU" => self::CUB,
        "CW" => self::CUW,
        "CY" => self::CYP,
        "CZ" => self::CZE,
        "DK" => self::DNK,
        "DJ" => self::DJI,
        "DM" => self::DMA,
        "DO" => self::DOM,
        "EC" => self::ECU,
        "EG" => self::EGY,
        "SV" => self::SLV,
        "GQ" => self::GNQ,
        "ER" => self::ERI,
        "EE" => self::EST,
        "SZ" => self::SWZ,
        "ET" => self::ETH,
        "FK" => self::FLK,
        "FO" => self::FRO,
        "FJ" => self::FJI,
        "FI" => self::FIN,
        "FR" => self::FRA,
        "GF" => self::GUF,
        "PF" => self::PYF,
        "TF" => self::ATF,
        "GA" => self::GAB,
        "GM" => self::GMB,
        "GE" => self::GEO,
        "DE" => self::DEU,
        "GH" => self::GHA,
        "GI" => self::GIB,
        "GR" => self::GRC,
        "GL" => self::GRL,
        "GD" => self::GRD,
        "GP" => self::GLP,
        "GU" => self::GUM,
        "GT" => self::GTM,
        "GG" => self::GGY,
        "GN" => self::GIN,
        "GW" => self::GNB,
        "GY" => self::GUY,
        "HT" => self::HTI,
        "HM" => self::HMD,
        "VA" => self::VAT,
        "HN" => self::HND,
        "HK" => self::HKG,
        "HU" => self::HUN,
        "IS" => self::ISL,
        "IN" => self::IND,
        "ID" => self::IDN,
        "IR" => self::IRN,
        "IQ" => self::IRQ,
        "IE" => self::IRL,
        "IM" => self::IMN,
        "IL" => self::ISR,
        "IT" => self::ITA,
        "JM" => self::JAM,
        "JP" => self::JPN,
        "JE" => self::JEY,
        "JO" => self::JOR,
        "KZ" => self::KAZ,
        "KE" => self::KEN,
        "KI" => self::KIR,
        "KP" => self::PRK,
        "KR" => self::KOR,
        "KW" => self::KWT,
        "KG" => self::KGZ,
        "LA" => self::LAO,
        "LV" => self::LVA,
        "LB" => self::LBN,
        "LS" => self::LSO,
        "LR" => self::LBR,
        "LY" => self::LBY,
        "LI" => self::LIE,
        "LT" => self::LTU,
        "LU" => self::LUX,
        "MO" => self::MAC,
        "MG" => self::MDG,
        "MW" => self::MWI,
        "MY" => self::KUL,
        "MV" => self::MDV,
        "ML" => self::MLI,
        "MT" => self::MLT,
        "MH" => self::MHL,
        "MQ" => self::MTQ,
        "MR" => self::MRT,
        "MU" => self::MUS,
        "YT" => self::MYT,
        "MX" => self::MEX,
        "FM" => self::FSM,
        "MD" => self::MDA,
        "MC" => self::MCO,
        "MN" => self::MNG,
        "ME" => self::MNE,
        "MS" => self::MSR,
        "MA" => self::MAR,
        "MZ" => self::MOZ,
        "MM" => self::MMR,
        "NA" => self::NAM,
        "NR" => self::NRU,
        "NP" => self::NPL,
        "NL" => self::NLD,
        "NC" => self::NCL,
        "NZ" => self::NZL,
        "NI" => self::NIC,
        "NE" => self::NER,
        "NG" => self::NGA,
        "NU" => self::NIU,
        "NF" => self::NFK,
        "MK" => self::MKD,
        "MP" => self::MNP,
        "NO" => self::NOR,
        "OM" => self::OMN,
        "PK" => self::PAK,
        "PW" => self::PLW,
        "PS" => self::PSE,
        "PA" => self::PAN,
        "PG" => self::PNG,
        "PY" => self::PRY,
        "PE" => self::PER,
        "PH" => self::PHL,
        "PN" => self::PCN,
        "PL" => self::POL,
        "PT" => self::PRT,
        "PR" => self::PRI,
        "QA" => self::QAT,
        "RE" => self::REU,
        "RO" => self::ROU,
        "RU" => self::RUS,
        "RW" => self::RWA,
        "BL" => self::BLM,
        "SH" => self::SHN,
        "KN" => self::KNA,
        "LC" => self::LCA,
        "MF" => self::MAF,
        "PM" => self::SPM,
        "VC" => self::VCT,
        "WS" => self::WSM,
        "SM" => self::SMR,
        "ST" => self::STP,
        "SA" => self::SAU,
        "SN" => self::SEN,
        "RS" => self::SRB,
        "SC" => self::SYC,
        "SL" => self::SLE,
        "SG" => self::SGP,
        "SX" => self::SXM,
        "SK" => self::SVK,
        "SI" => self::SVN,
        "SB" => self::SLB,
        "SO" => self::SOM,
        "ZA" => self::ZAF,
        "GS" => self::SGS,
        "SS" => self::SSD,
        "ES" => self::ESP,
        "LK" => self::LKA,
        "SD" => self::SDN,
        "SR" => self::SUR,
        "SJ" => self::SJM,
        "SE" => self::SWE,
        "CH" => self::CHE,
        "SY" => self::SYR,
        "TW" => self::TWN,
        "TJ" => self::TJK,
        "TZ" => self::TZA,
        "TH" => self::THA,
        "TL" => self::TLS,
        "TG" => self::TGO,
        "TK" => self::TKL,
        "TO" => self::TON,
        "TT" => self::TTO,
        "TN" => self::TUN,
        "TR" => self::TUR,
        "TM" => self::TKM,
        "TC" => self::TCA,
        "TV" => self::TUV,
        "UG" => self::UGA,
        "UA" => self::UKR,
        "AE" => self::ARE,
        "GB" => self::GBR,
        "US" => self::USA,
        "UM" => self::UMI,
        "UY" => self::URY,
        "UZ" => self::UZB,
        "VU" => self::VUT,
        "VE" => self::VEN,
        "VN" => self::VNM,
        "VG" => self::VGB,
        "VI" => self::VIR,
        "WF" => self::WLF,
        "EH" => self::ESH,
        "YE" => self::YEM,
        "ZM" => self::ZMB,
        "ZW" => self::ZWE,
    ];

    public static array $aliases = [
        'Palestinian Territory, Occupied' => self::PSE,
        'United Kingdom' => self::GBR,
        'Storbritannien' => self::GBR,
        'United States' => self::USA,
        'Iran' => self::IRN,
        'Iran, Islamic Republic of' => self::IRN,
        'Swaziland' => self::SWZ,
        'Iraqi' => self::IRQ,
        'Irak' => self::IRQ,
        'Libyan Arab Jamahiriya' => self::LBY,
        'Danish' => self::DNK,
        'Danmark' => self::DNK,
        'Syrien' => self::SYR,
        'Holland' => self::NLD,
        'Tyrkiet' => self::TUR,
        'Sverige' => self::SWE,
        'Australien' => self::AUS,
        'Polen' => self::POL,
        'Tyskland' => self::DEU,
        'Finland' => self::FIN,
        'Kuwait' => self::KWT,
        'Rumænien' => self::ROU,
        'Albanien' => self::ALB,
        'Thailand' => self::THA,
        'Østrig' => self::AUT,
        'Norge' => self::NOR
    ];

    protected static array $callingCodes = [
        self::DNK => '+45',
        self::SWE => '+46',
        self::NOR => '+47',
        self::IRQ => '+964'
    ];

    public static function make($value)
    {
        if (is_array($value)) {
            return static::make($value['key']);
        }

        if (self::isAlpha2($value)) {
            return new static(
                self::$alpha2[$value]
            );
        }

        if ($value instanceof Country) {
            return $value;
        }

        return new static($value);
    }

    public static function isAlpha2(?string $value): bool
    {
        return array_key_exists($value, self::$alpha2);
    }

    public function alpha2(): string
    {
        return array_flip(self::$alpha2)[$this->value];
    }

    public function CallingCode(): string
    {
        return self::$callingCodes[$this->value];
    }

    public function hasCallingCode(): bool
    {
        return isset(self::$callingCodes[$this->value]);
    }
}
