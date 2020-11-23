<?php

namespace App\Repositories;

use App\Enums\Country;

class CityRepository
{
    public function allWhereCountry($country)
    {
        return $this->all()[$country];
    }

    public function all()
    {
        return collect(
            [
                Country::DNK => [
                    0 =>
                        [
                            'city' => 'Scanning',
                            'code' => '0555',
                        ],
                    1 =>
                        [
                            'city' => 'Høje Taastrup',
                            'code' => '0800',
                        ],
                    2 =>
                        [
                            'city' => 'Valby',
                            'code' => '0877',
                        ],
                    3 =>
                        [
                            'city' => 'København C',
                            'code' => '0900',
                        ],
                    4 =>
                        [
                            'city' => 'København C',
                            'code' => '0910',
                        ],
                    5 =>
                        [
                            'city' => 'København C',
                            'code' => '0929',
                        ],
                    6 =>
                        [
                            'city' => 'København C',
                            'code' => '0999',
                        ],
                    7 =>
                        [
                            'city' => 'København K',
                            'code' => '1000',
                        ],
                    8 =>
                        [
                            'city' => 'København K',
                            'code' => '1001',
                        ],
                    9 =>
                        [
                            'city' => 'København K',
                            'code' => '1002',
                        ],
                    10 =>
                        [
                            'city' => 'København K',
                            'code' => '1003',
                        ],
                    11 =>
                        [
                            'city' => 'København K',
                            'code' => '1004',
                        ],
                    12 =>
                        [
                            'city' => 'København K',
                            'code' => '1005',
                        ],
                    13 =>
                        [
                            'city' => 'København K',
                            'code' => '1006',
                        ],
                    14 =>
                        [
                            'city' => 'København K',
                            'code' => '1007',
                        ],
                    15 =>
                        [
                            'city' => 'København K',
                            'code' => '1008',
                        ],
                    16 =>
                        [
                            'city' => 'København K',
                            'code' => '1009',
                        ],
                    17 =>
                        [
                            'city' => 'København K',
                            'code' => '1010',
                        ],
                    18 =>
                        [
                            'city' => 'København K',
                            'code' => '1011',
                        ],
                    19 =>
                        [
                            'city' => 'København K',
                            'code' => '1012',
                        ],
                    20 =>
                        [
                            'city' => 'København K',
                            'code' => '1013',
                        ],
                    21 =>
                        [
                            'city' => 'København K',
                            'code' => '1014',
                        ],
                    22 =>
                        [
                            'city' => 'København K',
                            'code' => '1015',
                        ],
                    23 =>
                        [
                            'city' => 'København K',
                            'code' => '1016',
                        ],
                    24 =>
                        [
                            'city' => 'København K',
                            'code' => '1017',
                        ],
                    25 =>
                        [
                            'city' => 'København K',
                            'code' => '1018',
                        ],
                    26 =>
                        [
                            'city' => 'København K',
                            'code' => '1019',
                        ],
                    27 =>
                        [
                            'city' => 'København K',
                            'code' => '1020',
                        ],
                    28 =>
                        [
                            'city' => 'København K',
                            'code' => '1021',
                        ],
                    29 =>
                        [
                            'city' => 'København K',
                            'code' => '1022',
                        ],
                    30 =>
                        [
                            'city' => 'København K',
                            'code' => '1023',
                        ],
                    31 =>
                        [
                            'city' => 'København K',
                            'code' => '1024',
                        ],
                    32 =>
                        [
                            'city' => 'København K',
                            'code' => '1025',
                        ],
                    33 =>
                        [
                            'city' => 'København K',
                            'code' => '1026',
                        ],
                    34 =>
                        [
                            'city' => 'København K',
                            'code' => '1045',
                        ],
                    35 =>
                        [
                            'city' => 'København K',
                            'code' => '1050',
                        ],
                    36 =>
                        [
                            'city' => 'København K',
                            'code' => '1051',
                        ],
                    37 =>
                        [
                            'city' => 'København K',
                            'code' => '1052',
                        ],
                    38 =>
                        [
                            'city' => 'København K',
                            'code' => '1053',
                        ],
                    39 =>
                        [
                            'city' => 'København K',
                            'code' => '1054',
                        ],
                    40 =>
                        [
                            'city' => 'København K',
                            'code' => '1055',
                        ],
                    41 =>
                        [
                            'city' => 'København K',
                            'code' => '1055',
                        ],
                    42 =>
                        [
                            'city' => 'København K',
                            'code' => '1056',
                        ],
                    43 =>
                        [
                            'city' => 'København K',
                            'code' => '1057',
                        ],
                    44 =>
                        [
                            'city' => 'København K',
                            'code' => '1058',
                        ],
                    45 =>
                        [
                            'city' => 'København K',
                            'code' => '1059',
                        ],
                    46 =>
                        [
                            'city' => 'København K',
                            'code' => '1060',
                        ],
                    47 =>
                        [
                            'city' => 'København K',
                            'code' => '1061',
                        ],
                    48 =>
                        [
                            'city' => 'København K',
                            'code' => '1062',
                        ],
                    49 =>
                        [
                            'city' => 'København K',
                            'code' => '1063',
                        ],
                    50 =>
                        [
                            'city' => 'København K',
                            'code' => '1064',
                        ],
                    51 =>
                        [
                            'city' => 'København K',
                            'code' => '1065',
                        ],
                    52 =>
                        [
                            'city' => 'København K',
                            'code' => '1066',
                        ],
                    53 =>
                        [
                            'city' => 'København K',
                            'code' => '1067',
                        ],
                    54 =>
                        [
                            'city' => 'København K',
                            'code' => '1068',
                        ],
                    55 =>
                        [
                            'city' => 'København K',
                            'code' => '1069',
                        ],
                    56 =>
                        [
                            'city' => 'København K',
                            'code' => '1070',
                        ],
                    57 =>
                        [
                            'city' => 'København K',
                            'code' => '1071',
                        ],
                    58 =>
                        [
                            'city' => 'København K',
                            'code' => '1072',
                        ],
                    59 =>
                        [
                            'city' => 'København K',
                            'code' => '1073',
                        ],
                    60 =>
                        [
                            'city' => 'København K',
                            'code' => '1074',
                        ],
                    61 =>
                        [
                            'city' => 'København K',
                            'code' => '1092',
                        ],
                    62 =>
                        [
                            'city' => 'København K',
                            'code' => '1093',
                        ],
                    63 =>
                        [
                            'city' => 'København K',
                            'code' => '1095',
                        ],
                    64 =>
                        [
                            'city' => 'København K',
                            'code' => '1098',
                        ],
                    65 =>
                        [
                            'city' => 'København K',
                            'code' => '1100',
                        ],
                    66 =>
                        [
                            'city' => 'København K',
                            'code' => '1101',
                        ],
                    67 =>
                        [
                            'city' => 'København K',
                            'code' => '1102',
                        ],
                    68 =>
                        [
                            'city' => 'København K',
                            'code' => '1103',
                        ],
                    69 =>
                        [
                            'city' => 'København K',
                            'code' => '1104',
                        ],
                    70 =>
                        [
                            'city' => 'København K',
                            'code' => '1105',
                        ],
                    71 =>
                        [
                            'city' => 'København K',
                            'code' => '1106',
                        ],
                    72 =>
                        [
                            'city' => 'København K',
                            'code' => '1107',
                        ],
                    73 =>
                        [
                            'city' => 'København K',
                            'code' => '1110',
                        ],
                    74 =>
                        [
                            'city' => 'København K',
                            'code' => '1111',
                        ],
                    75 =>
                        [
                            'city' => 'København K',
                            'code' => '1112',
                        ],
                    76 =>
                        [
                            'city' => 'København K',
                            'code' => '1113',
                        ],
                    77 =>
                        [
                            'city' => 'København K',
                            'code' => '1114',
                        ],
                    78 =>
                        [
                            'city' => 'København K',
                            'code' => '1115',
                        ],
                    79 =>
                        [
                            'city' => 'København K',
                            'code' => '1116',
                        ],
                    80 =>
                        [
                            'city' => 'København K',
                            'code' => '1117',
                        ],
                    81 =>
                        [
                            'city' => 'København K',
                            'code' => '1118',
                        ],
                    82 =>
                        [
                            'city' => 'København K',
                            'code' => '1119',
                        ],
                    83 =>
                        [
                            'city' => 'København K',
                            'code' => '1120',
                        ],
                    84 =>
                        [
                            'city' => 'København K',
                            'code' => '1121',
                        ],
                    85 =>
                        [
                            'city' => 'København K',
                            'code' => '1122',
                        ],
                    86 =>
                        [
                            'city' => 'København K',
                            'code' => '1123',
                        ],
                    87 =>
                        [
                            'city' => 'København K',
                            'code' => '1124',
                        ],
                    88 =>
                        [
                            'city' => 'København K',
                            'code' => '1125',
                        ],
                    89 =>
                        [
                            'city' => 'København K',
                            'code' => '1126',
                        ],
                    90 =>
                        [
                            'city' => 'København K',
                            'code' => '1127',
                        ],
                    91 =>
                        [
                            'city' => 'København K',
                            'code' => '1128',
                        ],
                    92 =>
                        [
                            'city' => 'København K',
                            'code' => '1129',
                        ],
                    93 =>
                        [
                            'city' => 'København K',
                            'code' => '1130',
                        ],
                    94 =>
                        [
                            'city' => 'København K',
                            'code' => '1131',
                        ],
                    95 =>
                        [
                            'city' => 'København K',
                            'code' => '1140',
                        ],
                    96 =>
                        [
                            'city' => 'København K',
                            'code' => '1147',
                        ],
                    97 =>
                        [
                            'city' => 'København K',
                            'code' => '1148',
                        ],
                    98 =>
                        [
                            'city' => 'København K',
                            'code' => '1150',
                        ],
                    99 =>
                        [
                            'city' => 'København K',
                            'code' => '1151',
                        ],
                    100 =>
                        [
                            'city' => 'København K',
                            'code' => '1152',
                        ],
                    101 =>
                        [
                            'city' => 'København K',
                            'code' => '1153',
                        ],
                    102 =>
                        [
                            'city' => 'København K',
                            'code' => '1154',
                        ],
                    103 =>
                        [
                            'city' => 'København K',
                            'code' => '1155',
                        ],
                    104 =>
                        [
                            'city' => 'København K',
                            'code' => '1156',
                        ],
                    105 =>
                        [
                            'city' => 'København K',
                            'code' => '1157',
                        ],
                    106 =>
                        [
                            'city' => 'København K',
                            'code' => '1158',
                        ],
                    107 =>
                        [
                            'city' => 'København K',
                            'code' => '1159',
                        ],
                    108 =>
                        [
                            'city' => 'København K',
                            'code' => '1160',
                        ],
                    109 =>
                        [
                            'city' => 'København K',
                            'code' => '1161',
                        ],
                    110 =>
                        [
                            'city' => 'København K',
                            'code' => '1162',
                        ],
                    111 =>
                        [
                            'city' => 'København K',
                            'code' => '1163',
                        ],
                    112 =>
                        [
                            'city' => 'København K',
                            'code' => '1164',
                        ],
                    113 =>
                        [
                            'city' => 'København K',
                            'code' => '1165',
                        ],
                    114 =>
                        [
                            'city' => 'København K',
                            'code' => '1166',
                        ],
                    115 =>
                        [
                            'city' => 'København K',
                            'code' => '1167',
                        ],
                    116 =>
                        [
                            'city' => 'København K',
                            'code' => '1168',
                        ],
                    117 =>
                        [
                            'city' => 'København K',
                            'code' => '1169',
                        ],
                    118 =>
                        [
                            'city' => 'København K',
                            'code' => '1170',
                        ],
                    119 =>
                        [
                            'city' => 'København K',
                            'code' => '1171',
                        ],
                    120 =>
                        [
                            'city' => 'København K',
                            'code' => '1172',
                        ],
                    121 =>
                        [
                            'city' => 'København K',
                            'code' => '1173',
                        ],
                    122 =>
                        [
                            'city' => 'København K',
                            'code' => '1174',
                        ],
                    123 =>
                        [
                            'city' => 'København K',
                            'code' => '1175',
                        ],
                    124 =>
                        [
                            'city' => 'København K',
                            'code' => '1200',
                        ],
                    125 =>
                        [
                            'city' => 'København K',
                            'code' => '1201',
                        ],
                    126 =>
                        [
                            'city' => 'København K',
                            'code' => '1202',
                        ],
                    127 =>
                        [
                            'city' => 'København K',
                            'code' => '1203',
                        ],
                    128 =>
                        [
                            'city' => 'København K',
                            'code' => '1204',
                        ],
                    129 =>
                        [
                            'city' => 'København K',
                            'code' => '1205',
                        ],
                    130 =>
                        [
                            'city' => 'København K',
                            'code' => '1206',
                        ],
                    131 =>
                        [
                            'city' => 'København K',
                            'code' => '1207',
                        ],
                    132 =>
                        [
                            'city' => 'København K',
                            'code' => '1208',
                        ],
                    133 =>
                        [
                            'city' => 'København K',
                            'code' => '1209',
                        ],
                    134 =>
                        [
                            'city' => 'København K',
                            'code' => '1210',
                        ],
                    135 =>
                        [
                            'city' => 'København K',
                            'code' => '1211',
                        ],
                    136 =>
                        [
                            'city' => 'København K',
                            'code' => '1212',
                        ],
                    137 =>
                        [
                            'city' => 'København K',
                            'code' => '1213',
                        ],
                    138 =>
                        [
                            'city' => 'København K',
                            'code' => '1214',
                        ],
                    139 =>
                        [
                            'city' => 'København K',
                            'code' => '1214',
                        ],
                    140 =>
                        [
                            'city' => 'København K',
                            'code' => '1215',
                        ],
                    141 =>
                        [
                            'city' => 'København K',
                            'code' => '1216',
                        ],
                    142 =>
                        [
                            'city' => 'København K',
                            'code' => '1217',
                        ],
                    143 =>
                        [
                            'city' => 'København K',
                            'code' => '1218',
                        ],
                    144 =>
                        [
                            'city' => 'København K',
                            'code' => '1218',
                        ],
                    145 =>
                        [
                            'city' => 'København K',
                            'code' => '1218',
                        ],
                    146 =>
                        [
                            'city' => 'København K',
                            'code' => '1218',
                        ],
                    147 =>
                        [
                            'city' => 'København K',
                            'code' => '1218',
                        ],
                    148 =>
                        [
                            'city' => 'København K',
                            'code' => '1218',
                        ],
                    149 =>
                        [
                            'city' => 'København K',
                            'code' => '1219',
                        ],
                    150 =>
                        [
                            'city' => 'København K',
                            'code' => '1220',
                        ],
                    151 =>
                        [
                            'city' => 'København K',
                            'code' => '1240',
                        ],
                    152 =>
                        [
                            'city' => 'København K',
                            'code' => '1250',
                        ],
                    153 =>
                        [
                            'city' => 'København K',
                            'code' => '1251',
                        ],
                    154 =>
                        [
                            'city' => 'København K',
                            'code' => '1252',
                        ],
                    155 =>
                        [
                            'city' => 'København K',
                            'code' => '1253',
                        ],
                    156 =>
                        [
                            'city' => 'København K',
                            'code' => '1254',
                        ],
                    157 =>
                        [
                            'city' => 'København K',
                            'code' => '1255',
                        ],
                    158 =>
                        [
                            'city' => 'København K',
                            'code' => '1256',
                        ],
                    159 =>
                        [
                            'city' => 'København K',
                            'code' => '1257',
                        ],
                    160 =>
                        [
                            'city' => 'København K',
                            'code' => '1258',
                        ],
                    161 =>
                        [
                            'city' => 'København K',
                            'code' => '1259',
                        ],
                    162 =>
                        [
                            'city' => 'København K',
                            'code' => '1259',
                        ],
                    163 =>
                        [
                            'city' => 'København K',
                            'code' => '1260',
                        ],
                    164 =>
                        [
                            'city' => 'København K',
                            'code' => '1261',
                        ],
                    165 =>
                        [
                            'city' => 'København K',
                            'code' => '1263',
                        ],
                    166 =>
                        [
                            'city' => 'København K',
                            'code' => '1263',
                        ],
                    167 =>
                        [
                            'city' => 'København K',
                            'code' => '1264',
                        ],
                    168 =>
                        [
                            'city' => 'København K',
                            'code' => '1265',
                        ],
                    169 =>
                        [
                            'city' => 'København K',
                            'code' => '1266',
                        ],
                    170 =>
                        [
                            'city' => 'København K',
                            'code' => '1267',
                        ],
                    171 =>
                        [
                            'city' => 'København K',
                            'code' => '1268',
                        ],
                    172 =>
                        [
                            'city' => 'København K',
                            'code' => '1270',
                        ],
                    173 =>
                        [
                            'city' => 'København K',
                            'code' => '1271',
                        ],
                    174 =>
                        [
                            'city' => 'København K',
                            'code' => '1291',
                        ],
                    175 =>
                        [
                            'city' => 'København K',
                            'code' => '1300',
                        ],
                    176 =>
                        [
                            'city' => 'København K',
                            'code' => '1301',
                        ],
                    177 =>
                        [
                            'city' => 'København K',
                            'code' => '1302',
                        ],
                    178 =>
                        [
                            'city' => 'København K',
                            'code' => '1303',
                        ],
                    179 =>
                        [
                            'city' => 'København K',
                            'code' => '1304',
                        ],
                    180 =>
                        [
                            'city' => 'København K',
                            'code' => '1306',
                        ],
                    181 =>
                        [
                            'city' => 'København K',
                            'code' => '1307',
                        ],
                    182 =>
                        [
                            'city' => 'København K',
                            'code' => '1307',
                        ],
                    183 =>
                        [
                            'city' => 'København K',
                            'code' => '1308',
                        ],
                    184 =>
                        [
                            'city' => 'København K',
                            'code' => '1309',
                        ],
                    185 =>
                        [
                            'city' => 'København K',
                            'code' => '1310',
                        ],
                    186 =>
                        [
                            'city' => 'København K',
                            'code' => '1311',
                        ],
                    187 =>
                        [
                            'city' => 'København K',
                            'code' => '1312',
                        ],
                    188 =>
                        [
                            'city' => 'København K',
                            'code' => '1313',
                        ],
                    189 =>
                        [
                            'city' => 'København K',
                            'code' => '1314',
                        ],
                    190 =>
                        [
                            'city' => 'København K',
                            'code' => '1315',
                        ],
                    191 =>
                        [
                            'city' => 'København K',
                            'code' => '1316',
                        ],
                    192 =>
                        [
                            'city' => 'København K',
                            'code' => '1317',
                        ],
                    193 =>
                        [
                            'city' => 'København K',
                            'code' => '1318',
                        ],
                    194 =>
                        [
                            'city' => 'København K',
                            'code' => '1319',
                        ],
                    195 =>
                        [
                            'city' => 'København K',
                            'code' => '1320',
                        ],
                    196 =>
                        [
                            'city' => 'København K',
                            'code' => '1321',
                        ],
                    197 =>
                        [
                            'city' => 'København K',
                            'code' => '1322',
                        ],
                    198 =>
                        [
                            'city' => 'København K',
                            'code' => '1323',
                        ],
                    199 =>
                        [
                            'city' => 'København K',
                            'code' => '1324',
                        ],
                    200 =>
                        [
                            'city' => 'København K',
                            'code' => '1325',
                        ],
                    201 =>
                        [
                            'city' => 'København K',
                            'code' => '1326',
                        ],
                    202 =>
                        [
                            'city' => 'København K',
                            'code' => '1327',
                        ],
                    203 =>
                        [
                            'city' => 'København K',
                            'code' => '1328',
                        ],
                    204 =>
                        [
                            'city' => 'København K',
                            'code' => '1329',
                        ],
                    205 =>
                        [
                            'city' => 'København K',
                            'code' => '1349',
                        ],
                    206 =>
                        [
                            'city' => 'København K',
                            'code' => '1350',
                        ],
                    207 =>
                        [
                            'city' => 'København K',
                            'code' => '1352',
                        ],
                    208 =>
                        [
                            'city' => 'København K',
                            'code' => '1353',
                        ],
                    209 =>
                        [
                            'city' => 'København K',
                            'code' => '1354',
                        ],
                    210 =>
                        [
                            'city' => 'København K',
                            'code' => '1355',
                        ],
                    211 =>
                        [
                            'city' => 'København K',
                            'code' => '1356',
                        ],
                    212 =>
                        [
                            'city' => 'København K',
                            'code' => '1357',
                        ],
                    213 =>
                        [
                            'city' => 'København K',
                            'code' => '1358',
                        ],
                    214 =>
                        [
                            'city' => 'København K',
                            'code' => '1359',
                        ],
                    215 =>
                        [
                            'city' => 'København K',
                            'code' => '1360',
                        ],
                    216 =>
                        [
                            'city' => 'København K',
                            'code' => '1361',
                        ],
                    217 =>
                        [
                            'city' => 'København K',
                            'code' => '1361',
                        ],
                    218 =>
                        [
                            'city' => 'København K',
                            'code' => '1362',
                        ],
                    219 =>
                        [
                            'city' => 'København K',
                            'code' => '1363',
                        ],
                    220 =>
                        [
                            'city' => 'København K',
                            'code' => '1364',
                        ],
                    221 =>
                        [
                            'city' => 'København K',
                            'code' => '1365',
                        ],
                    222 =>
                        [
                            'city' => 'København K',
                            'code' => '1366',
                        ],
                    223 =>
                        [
                            'city' => 'København K',
                            'code' => '1367',
                        ],
                    224 =>
                        [
                            'city' => 'København K',
                            'code' => '1368',
                        ],
                    225 =>
                        [
                            'city' => 'København K',
                            'code' => '1369',
                        ],
                    226 =>
                        [
                            'city' => 'København K',
                            'code' => '1370',
                        ],
                    227 =>
                        [
                            'city' => 'København K',
                            'code' => '1371',
                        ],
                    228 =>
                        [
                            'city' => 'København K',
                            'code' => '1390',
                        ],
                    229 =>
                        [
                            'city' => 'København K',
                            'code' => '1400',
                        ],
                    230 =>
                        [
                            'city' => 'København K',
                            'code' => '1400',
                        ],
                    231 =>
                        [
                            'city' => 'København K',
                            'code' => '1401',
                        ],
                    232 =>
                        [
                            'city' => 'København K',
                            'code' => '1402',
                        ],
                    233 =>
                        [
                            'city' => 'København K',
                            'code' => '1402',
                        ],
                    234 =>
                        [
                            'city' => 'København K',
                            'code' => '1402',
                        ],
                    235 =>
                        [
                            'city' => 'København K',
                            'code' => '1402',
                        ],
                    236 =>
                        [
                            'city' => 'København K',
                            'code' => '1402',
                        ],
                    237 =>
                        [
                            'city' => 'København K',
                            'code' => '1403',
                        ],
                    238 =>
                        [
                            'city' => 'København K',
                            'code' => '1404',
                        ],
                    239 =>
                        [
                            'city' => 'København K',
                            'code' => '1405',
                        ],
                    240 =>
                        [
                            'city' => 'København K',
                            'code' => '1406',
                        ],
                    241 =>
                        [
                            'city' => 'København K',
                            'code' => '1407',
                        ],
                    242 =>
                        [
                            'city' => 'København K',
                            'code' => '1408',
                        ],
                    243 =>
                        [
                            'city' => 'København K',
                            'code' => '1409',
                        ],
                    244 =>
                        [
                            'city' => 'København K',
                            'code' => '1410',
                        ],
                    245 =>
                        [
                            'city' => 'København K',
                            'code' => '1411',
                        ],
                    246 =>
                        [
                            'city' => 'København K',
                            'code' => '1411',
                        ],
                    247 =>
                        [
                            'city' => 'København K',
                            'code' => '1412',
                        ],
                    248 =>
                        [
                            'city' => 'København K',
                            'code' => '1413',
                        ],
                    249 =>
                        [
                            'city' => 'København K',
                            'code' => '1414',
                        ],
                    250 =>
                        [
                            'city' => 'København K',
                            'code' => '1415',
                        ],
                    251 =>
                        [
                            'city' => 'København K',
                            'code' => '1416',
                        ],
                    252 =>
                        [
                            'city' => 'København K',
                            'code' => '1417',
                        ],
                    253 =>
                        [
                            'city' => 'København K',
                            'code' => '1418',
                        ],
                    254 =>
                        [
                            'city' => 'København K',
                            'code' => '1419',
                        ],
                    255 =>
                        [
                            'city' => 'København K',
                            'code' => '1420',
                        ],
                    256 =>
                        [
                            'city' => 'København K',
                            'code' => '1421',
                        ],
                    257 =>
                        [
                            'city' => 'København K',
                            'code' => '1422',
                        ],
                    258 =>
                        [
                            'city' => 'København K',
                            'code' => '1423',
                        ],
                    259 =>
                        [
                            'city' => 'København K',
                            'code' => '1424',
                        ],
                    260 =>
                        [
                            'city' => 'København K',
                            'code' => '1425',
                        ],
                    261 =>
                        [
                            'city' => 'København K',
                            'code' => '1426',
                        ],
                    262 =>
                        [
                            'city' => 'København K',
                            'code' => '1427',
                        ],
                    263 =>
                        [
                            'city' => 'København K',
                            'code' => '1428',
                        ],
                    264 =>
                        [
                            'city' => 'København K',
                            'code' => '1429',
                        ],
                    265 =>
                        [
                            'city' => 'København K',
                            'code' => '1430',
                        ],
                    266 =>
                        [
                            'city' => 'København K',
                            'code' => '1431',
                        ],
                    267 =>
                        [
                            'city' => 'København K',
                            'code' => '1432',
                        ],
                    268 =>
                        [
                            'city' => 'København K',
                            'code' => '1432',
                        ],
                    269 =>
                        [
                            'city' => 'København K',
                            'code' => '1432',
                        ],
                    270 =>
                        [
                            'city' => 'København K',
                            'code' => '1433',
                        ],
                    271 =>
                        [
                            'city' => 'København K',
                            'code' => '1433',
                        ],
                    272 =>
                        [
                            'city' => 'København K',
                            'code' => '1433',
                        ],
                    273 =>
                        [
                            'city' => 'København K',
                            'code' => '1433',
                        ],
                    274 =>
                        [
                            'city' => 'København K',
                            'code' => '1433',
                        ],
                    275 =>
                        [
                            'city' => 'København K',
                            'code' => '1433',
                        ],
                    276 =>
                        [
                            'city' => 'København K',
                            'code' => '1433',
                        ],
                    277 =>
                        [
                            'city' => 'København K',
                            'code' => '1434',
                        ],
                    278 =>
                        [
                            'city' => 'København K',
                            'code' => '1435',
                        ],
                    279 =>
                        [
                            'city' => 'København K',
                            'code' => '1436',
                        ],
                    280 =>
                        [
                            'city' => 'København K',
                            'code' => '1436',
                        ],
                    281 =>
                        [
                            'city' => 'København K',
                            'code' => '1436',
                        ],
                    282 =>
                        [
                            'city' => 'København K',
                            'code' => '1436',
                        ],
                    283 =>
                        [
                            'city' => 'København K',
                            'code' => '1436',
                        ],
                    284 =>
                        [
                            'city' => 'København K',
                            'code' => '1436',
                        ],
                    285 =>
                        [
                            'city' => 'København K',
                            'code' => '1436',
                        ],
                    286 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    287 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    288 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    289 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    290 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    291 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    292 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    293 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    294 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    295 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    296 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    297 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    298 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    299 =>
                        [
                            'city' => 'København K',
                            'code' => '1437',
                        ],
                    300 =>
                        [
                            'city' => 'København K',
                            'code' => '1438',
                        ],
                    301 =>
                        [
                            'city' => 'København K',
                            'code' => '1438',
                        ],
                    302 =>
                        [
                            'city' => 'København K',
                            'code' => '1438',
                        ],
                    303 =>
                        [
                            'city' => 'København K',
                            'code' => '1438',
                        ],
                    304 =>
                        [
                            'city' => 'København K',
                            'code' => '1438',
                        ],
                    305 =>
                        [
                            'city' => 'København K',
                            'code' => '1438',
                        ],
                    306 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    307 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    308 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    309 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    310 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    311 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    312 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    313 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    314 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    315 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    316 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    317 =>
                        [
                            'city' => 'København K',
                            'code' => '1439',
                        ],
                    318 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    319 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    320 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    321 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    322 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    323 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    324 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    325 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    326 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    327 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    328 =>
                        [
                            'city' => 'København K',
                            'code' => '1440',
                        ],
                    329 =>
                        [
                            'city' => 'København K',
                            'code' => '1441',
                        ],
                    330 =>
                        [
                            'city' => 'København K',
                            'code' => '1441',
                        ],
                    331 =>
                        [
                            'city' => 'København K',
                            'code' => '1441',
                        ],
                    332 =>
                        [
                            'city' => 'København K',
                            'code' => '1448',
                        ],
                    333 =>
                        [
                            'city' => 'København K',
                            'code' => '1450',
                        ],
                    334 =>
                        [
                            'city' => 'København K',
                            'code' => '1451',
                        ],
                    335 =>
                        [
                            'city' => 'København K',
                            'code' => '1452',
                        ],
                    336 =>
                        [
                            'city' => 'København K',
                            'code' => '1453',
                        ],
                    337 =>
                        [
                            'city' => 'København K',
                            'code' => '1454',
                        ],
                    338 =>
                        [
                            'city' => 'København K',
                            'code' => '1455',
                        ],
                    339 =>
                        [
                            'city' => 'København K',
                            'code' => '1456',
                        ],
                    340 =>
                        [
                            'city' => 'København K',
                            'code' => '1457',
                        ],
                    341 =>
                        [
                            'city' => 'København K',
                            'code' => '1458',
                        ],
                    342 =>
                        [
                            'city' => 'København K',
                            'code' => '1459',
                        ],
                    343 =>
                        [
                            'city' => 'København K',
                            'code' => '1460',
                        ],
                    344 =>
                        [
                            'city' => 'København K',
                            'code' => '1461',
                        ],
                    345 =>
                        [
                            'city' => 'København K',
                            'code' => '1462',
                        ],
                    346 =>
                        [
                            'city' => 'København K',
                            'code' => '1463',
                        ],
                    347 =>
                        [
                            'city' => 'København K',
                            'code' => '1464',
                        ],
                    348 =>
                        [
                            'city' => 'København K',
                            'code' => '1465',
                        ],
                    349 =>
                        [
                            'city' => 'København K',
                            'code' => '1466',
                        ],
                    350 =>
                        [
                            'city' => 'København K',
                            'code' => '1467',
                        ],
                    351 =>
                        [
                            'city' => 'København K',
                            'code' => '1468',
                        ],
                    352 =>
                        [
                            'city' => 'København K',
                            'code' => '1470',
                        ],
                    353 =>
                        [
                            'city' => 'København K',
                            'code' => '1471',
                        ],
                    354 =>
                        [
                            'city' => 'København K',
                            'code' => '1472',
                        ],
                    355 =>
                        [
                            'city' => 'København K',
                            'code' => '1473',
                        ],
                    356 =>
                        [
                            'city' => 'København V',
                            'code' => '1500',
                        ],
                    357 =>
                        [
                            'city' => 'København V',
                            'code' => '1501',
                        ],
                    358 =>
                        [
                            'city' => 'København V',
                            'code' => '1502',
                        ],
                    359 =>
                        [
                            'city' => 'København V',
                            'code' => '1503',
                        ],
                    360 =>
                        [
                            'city' => 'København V',
                            'code' => '1504',
                        ],
                    361 =>
                        [
                            'city' => 'København V',
                            'code' => '1505',
                        ],
                    362 =>
                        [
                            'city' => 'København V',
                            'code' => '1506',
                        ],
                    363 =>
                        [
                            'city' => 'København V',
                            'code' => '1507',
                        ],
                    364 =>
                        [
                            'city' => 'København V',
                            'code' => '1508',
                        ],
                    365 =>
                        [
                            'city' => 'København V',
                            'code' => '1509',
                        ],
                    366 =>
                        [
                            'city' => 'København V',
                            'code' => '1510',
                        ],
                    367 =>
                        [
                            'city' => 'København V',
                            'code' => '1532',
                        ],
                    368 =>
                        [
                            'city' => 'København V',
                            'code' => '1533',
                        ],
                    369 =>
                        [
                            'city' => 'København V',
                            'code' => '1550',
                        ],
                    370 =>
                        [
                            'city' => 'København V',
                            'code' => '1550',
                        ],
                    371 =>
                        [
                            'city' => 'København V',
                            'code' => '1551',
                        ],
                    372 =>
                        [
                            'city' => 'København V',
                            'code' => '1552',
                        ],
                    373 =>
                        [
                            'city' => 'København V',
                            'code' => '1553',
                        ],
                    374 =>
                        [
                            'city' => 'København V',
                            'code' => '1553',
                        ],
                    375 =>
                        [
                            'city' => 'København V',
                            'code' => '1554',
                        ],
                    376 =>
                        [
                            'city' => 'København V',
                            'code' => '1555',
                        ],
                    377 =>
                        [
                            'city' => 'København V',
                            'code' => '1556',
                        ],
                    378 =>
                        [
                            'city' => 'København V',
                            'code' => '1557',
                        ],
                    379 =>
                        [
                            'city' => 'København V',
                            'code' => '1558',
                        ],
                    380 =>
                        [
                            'city' => 'København V',
                            'code' => '1559',
                        ],
                    381 =>
                        [
                            'city' => 'København V',
                            'code' => '1560',
                        ],
                    382 =>
                        [
                            'city' => 'København V',
                            'code' => '1561',
                        ],
                    383 =>
                        [
                            'city' => 'København V',
                            'code' => '1561',
                        ],
                    384 =>
                        [
                            'city' => 'København V',
                            'code' => '1562',
                        ],
                    385 =>
                        [
                            'city' => 'København V',
                            'code' => '1563',
                        ],
                    386 =>
                        [
                            'city' => 'København V',
                            'code' => '1564',
                        ],
                    387 =>
                        [
                            'city' => 'København V',
                            'code' => '1566',
                        ],
                    388 =>
                        [
                            'city' => 'København V',
                            'code' => '1567',
                        ],
                    389 =>
                        [
                            'city' => 'København V',
                            'code' => '1568',
                        ],
                    390 =>
                        [
                            'city' => 'København V',
                            'code' => '1569',
                        ],
                    391 =>
                        [
                            'city' => 'København V',
                            'code' => '1570',
                        ],
                    392 =>
                        [
                            'city' => 'København V',
                            'code' => '1570',
                        ],
                    393 =>
                        [
                            'city' => 'København V',
                            'code' => '1571',
                        ],
                    394 =>
                        [
                            'city' => 'København V',
                            'code' => '1572',
                        ],
                    395 =>
                        [
                            'city' => 'København V',
                            'code' => '1573',
                        ],
                    396 =>
                        [
                            'city' => 'København V',
                            'code' => '1574',
                        ],
                    397 =>
                        [
                            'city' => 'København V',
                            'code' => '1575',
                        ],
                    398 =>
                        [
                            'city' => 'København V',
                            'code' => '1576',
                        ],
                    399 =>
                        [
                            'city' => 'København V',
                            'code' => '1577',
                        ],
                    400 =>
                        [
                            'city' => 'København V',
                            'code' => '1590',
                        ],
                    401 =>
                        [
                            'city' => 'København V',
                            'code' => '1592',
                        ],
                    402 =>
                        [
                            'city' => 'København V',
                            'code' => '1599',
                        ],
                    403 =>
                        [
                            'city' => 'København V',
                            'code' => '1600',
                        ],
                    404 =>
                        [
                            'city' => 'København V',
                            'code' => '1601',
                        ],
                    405 =>
                        [
                            'city' => 'København V',
                            'code' => '1602',
                        ],
                    406 =>
                        [
                            'city' => 'København V',
                            'code' => '1603',
                        ],
                    407 =>
                        [
                            'city' => 'København V',
                            'code' => '1604',
                        ],
                    408 =>
                        [
                            'city' => 'København V',
                            'code' => '1605',
                        ],
                    409 =>
                        [
                            'city' => 'København V',
                            'code' => '1606',
                        ],
                    410 =>
                        [
                            'city' => 'København V',
                            'code' => '1607',
                        ],
                    411 =>
                        [
                            'city' => 'København V',
                            'code' => '1608',
                        ],
                    412 =>
                        [
                            'city' => 'København V',
                            'code' => '1609',
                        ],
                    413 =>
                        [
                            'city' => 'København V',
                            'code' => '1610',
                        ],
                    414 =>
                        [
                            'city' => 'København V',
                            'code' => '1611',
                        ],
                    415 =>
                        [
                            'city' => 'København V',
                            'code' => '1612',
                        ],
                    416 =>
                        [
                            'city' => 'København V',
                            'code' => '1613',
                        ],
                    417 =>
                        [
                            'city' => 'København V',
                            'code' => '1614',
                        ],
                    418 =>
                        [
                            'city' => 'København V',
                            'code' => '1615',
                        ],
                    419 =>
                        [
                            'city' => 'København V',
                            'code' => '1616',
                        ],
                    420 =>
                        [
                            'city' => 'København V',
                            'code' => '1617',
                        ],
                    421 =>
                        [
                            'city' => 'København V',
                            'code' => '1618',
                        ],
                    422 =>
                        [
                            'city' => 'København V',
                            'code' => '1619',
                        ],
                    423 =>
                        [
                            'city' => 'København V',
                            'code' => '1620',
                        ],
                    424 =>
                        [
                            'city' => 'København V',
                            'code' => '1620',
                        ],
                    425 =>
                        [
                            'city' => 'København V',
                            'code' => '1621',
                        ],
                    426 =>
                        [
                            'city' => 'København V',
                            'code' => '1622',
                        ],
                    427 =>
                        [
                            'city' => 'København V',
                            'code' => '1623',
                        ],
                    428 =>
                        [
                            'city' => 'København V',
                            'code' => '1624',
                        ],
                    429 =>
                        [
                            'city' => 'København V',
                            'code' => '1630',
                        ],
                    430 =>
                        [
                            'city' => 'København V',
                            'code' => '1631',
                        ],
                    431 =>
                        [
                            'city' => 'København V',
                            'code' => '1632',
                        ],
                    432 =>
                        [
                            'city' => 'København V',
                            'code' => '1633',
                        ],
                    433 =>
                        [
                            'city' => 'København V',
                            'code' => '1634',
                        ],
                    434 =>
                        [
                            'city' => 'København V',
                            'code' => '1635',
                        ],
                    435 =>
                        [
                            'city' => 'København V',
                            'code' => '1639',
                        ],
                    436 =>
                        [
                            'city' => 'København V',
                            'code' => '1640',
                        ],
                    437 =>
                        [
                            'city' => 'København V',
                            'code' => '1650',
                        ],
                    438 =>
                        [
                            'city' => 'København V',
                            'code' => '1651',
                        ],
                    439 =>
                        [
                            'city' => 'København V',
                            'code' => '1652',
                        ],
                    440 =>
                        [
                            'city' => 'København V',
                            'code' => '1653',
                        ],
                    441 =>
                        [
                            'city' => 'København V',
                            'code' => '1654',
                        ],
                    442 =>
                        [
                            'city' => 'København V',
                            'code' => '1655',
                        ],
                    443 =>
                        [
                            'city' => 'København V',
                            'code' => '1656',
                        ],
                    444 =>
                        [
                            'city' => 'København V',
                            'code' => '1657',
                        ],
                    445 =>
                        [
                            'city' => 'København V',
                            'code' => '1658',
                        ],
                    446 =>
                        [
                            'city' => 'København V',
                            'code' => '1659',
                        ],
                    447 =>
                        [
                            'city' => 'København V',
                            'code' => '1660',
                        ],
                    448 =>
                        [
                            'city' => 'København V',
                            'code' => '1660',
                        ],
                    449 =>
                        [
                            'city' => 'København V',
                            'code' => '1661',
                        ],
                    450 =>
                        [
                            'city' => 'København V',
                            'code' => '1662',
                        ],
                    451 =>
                        [
                            'city' => 'København V',
                            'code' => '1663',
                        ],
                    452 =>
                        [
                            'city' => 'København V',
                            'code' => '1664',
                        ],
                    453 =>
                        [
                            'city' => 'København V',
                            'code' => '1665',
                        ],
                    454 =>
                        [
                            'city' => 'København V',
                            'code' => '1666',
                        ],
                    455 =>
                        [
                            'city' => 'København V',
                            'code' => '1667',
                        ],
                    456 =>
                        [
                            'city' => 'København V',
                            'code' => '1668',
                        ],
                    457 =>
                        [
                            'city' => 'København V',
                            'code' => '1669',
                        ],
                    458 =>
                        [
                            'city' => 'København V',
                            'code' => '1670',
                        ],
                    459 =>
                        [
                            'city' => 'København V',
                            'code' => '1671',
                        ],
                    460 =>
                        [
                            'city' => 'København V',
                            'code' => '1671',
                        ],
                    461 =>
                        [
                            'city' => 'København V',
                            'code' => '1672',
                        ],
                    462 =>
                        [
                            'city' => 'København V',
                            'code' => '1673',
                        ],
                    463 =>
                        [
                            'city' => 'København V',
                            'code' => '1674',
                        ],
                    464 =>
                        [
                            'city' => 'København V',
                            'code' => '1675',
                        ],
                    465 =>
                        [
                            'city' => 'København V',
                            'code' => '1676',
                        ],
                    466 =>
                        [
                            'city' => 'København V',
                            'code' => '1677',
                        ],
                    467 =>
                        [
                            'city' => 'København V',
                            'code' => '1699',
                        ],
                    468 =>
                        [
                            'city' => 'København V',
                            'code' => '1700',
                        ],
                    469 =>
                        [
                            'city' => 'København V',
                            'code' => '1701',
                        ],
                    470 =>
                        [
                            'city' => 'København V',
                            'code' => '1702',
                        ],
                    471 =>
                        [
                            'city' => 'København V',
                            'code' => '1703',
                        ],
                    472 =>
                        [
                            'city' => 'København V',
                            'code' => '1704',
                        ],
                    473 =>
                        [
                            'city' => 'København V',
                            'code' => '1705',
                        ],
                    474 =>
                        [
                            'city' => 'København V',
                            'code' => '1706',
                        ],
                    475 =>
                        [
                            'city' => 'København V',
                            'code' => '1707',
                        ],
                    476 =>
                        [
                            'city' => 'København V',
                            'code' => '1708',
                        ],
                    477 =>
                        [
                            'city' => 'København V',
                            'code' => '1709',
                        ],
                    478 =>
                        [
                            'city' => 'København V',
                            'code' => '1710',
                        ],
                    479 =>
                        [
                            'city' => 'København V',
                            'code' => '1711',
                        ],
                    480 =>
                        [
                            'city' => 'København V',
                            'code' => '1712',
                        ],
                    481 =>
                        [
                            'city' => 'København V',
                            'code' => '1713',
                        ],
                    482 =>
                        [
                            'city' => 'København V',
                            'code' => '1714',
                        ],
                    483 =>
                        [
                            'city' => 'København V',
                            'code' => '1715',
                        ],
                    484 =>
                        [
                            'city' => 'København V',
                            'code' => '1716',
                        ],
                    485 =>
                        [
                            'city' => 'København V',
                            'code' => '1717',
                        ],
                    486 =>
                        [
                            'city' => 'København V',
                            'code' => '1718',
                        ],
                    487 =>
                        [
                            'city' => 'København V',
                            'code' => '1719',
                        ],
                    488 =>
                        [
                            'city' => 'København V',
                            'code' => '1720',
                        ],
                    489 =>
                        [
                            'city' => 'København V',
                            'code' => '1721',
                        ],
                    490 =>
                        [
                            'city' => 'København V',
                            'code' => '1722',
                        ],
                    491 =>
                        [
                            'city' => 'København V',
                            'code' => '1723',
                        ],
                    492 =>
                        [
                            'city' => 'København V',
                            'code' => '1724',
                        ],
                    493 =>
                        [
                            'city' => 'København V',
                            'code' => '1725',
                        ],
                    494 =>
                        [
                            'city' => 'København V',
                            'code' => '1726',
                        ],
                    495 =>
                        [
                            'city' => 'København V',
                            'code' => '1727',
                        ],
                    496 =>
                        [
                            'city' => 'København V',
                            'code' => '1728',
                        ],
                    497 =>
                        [
                            'city' => 'København V',
                            'code' => '1729',
                        ],
                    498 =>
                        [
                            'city' => 'København V',
                            'code' => '1730',
                        ],
                    499 =>
                        [
                            'city' => 'København V',
                            'code' => '1731',
                        ],
                    500 =>
                        [
                            'city' => 'København V',
                            'code' => '1732',
                        ],
                    501 =>
                        [
                            'city' => 'København V',
                            'code' => '1733',
                        ],
                    502 =>
                        [
                            'city' => 'København V',
                            'code' => '1734',
                        ],
                    503 =>
                        [
                            'city' => 'København V',
                            'code' => '1735',
                        ],
                    504 =>
                        [
                            'city' => 'København V',
                            'code' => '1736',
                        ],
                    505 =>
                        [
                            'city' => 'København V',
                            'code' => '1737',
                        ],
                    506 =>
                        [
                            'city' => 'København V',
                            'code' => '1738',
                        ],
                    507 =>
                        [
                            'city' => 'København V',
                            'code' => '1739',
                        ],
                    508 =>
                        [
                            'city' => 'København V',
                            'code' => '1748',
                        ],
                    509 =>
                        [
                            'city' => 'København V',
                            'code' => '1749',
                        ],
                    510 =>
                        [
                            'city' => 'København V',
                            'code' => '1750',
                        ],
                    511 =>
                        [
                            'city' => 'København V',
                            'code' => '1751',
                        ],
                    512 =>
                        [
                            'city' => 'København V',
                            'code' => '1752',
                        ],
                    513 =>
                        [
                            'city' => 'København V',
                            'code' => '1753',
                        ],
                    514 =>
                        [
                            'city' => 'København V',
                            'code' => '1754',
                        ],
                    515 =>
                        [
                            'city' => 'København V',
                            'code' => '1755',
                        ],
                    516 =>
                        [
                            'city' => 'København V',
                            'code' => '1756',
                        ],
                    517 =>
                        [
                            'city' => 'København V',
                            'code' => '1757',
                        ],
                    518 =>
                        [
                            'city' => 'København V',
                            'code' => '1758',
                        ],
                    519 =>
                        [
                            'city' => 'København V',
                            'code' => '1759',
                        ],
                    520 =>
                        [
                            'city' => 'København V',
                            'code' => '1760',
                        ],
                    521 =>
                        [
                            'city' => 'København V',
                            'code' => '1761',
                        ],
                    522 =>
                        [
                            'city' => 'København V',
                            'code' => '1762',
                        ],
                    523 =>
                        [
                            'city' => 'København V',
                            'code' => '1763',
                        ],
                    524 =>
                        [
                            'city' => 'København V',
                            'code' => '1764',
                        ],
                    525 =>
                        [
                            'city' => 'København V',
                            'code' => '1765',
                        ],
                    526 =>
                        [
                            'city' => 'København V',
                            'code' => '1766',
                        ],
                    527 =>
                        [
                            'city' => 'København V',
                            'code' => '1770',
                        ],
                    528 =>
                        [
                            'city' => 'København V',
                            'code' => '1771',
                        ],
                    529 =>
                        [
                            'city' => 'København V',
                            'code' => '1772',
                        ],
                    530 =>
                        [
                            'city' => 'København V',
                            'code' => '1773',
                        ],
                    531 =>
                        [
                            'city' => 'København V',
                            'code' => '1774',
                        ],
                    532 =>
                        [
                            'city' => 'København V',
                            'code' => '1775',
                        ],
                    533 =>
                        [
                            'city' => 'København V',
                            'code' => '1777',
                        ],
                    534 =>
                        [
                            'city' => 'København V',
                            'code' => '1778',
                        ],
                    535 =>
                        [
                            'city' => 'København V',
                            'code' => '1780',
                        ],
                    536 =>
                        [
                            'city' => 'København V',
                            'code' => '1782',
                        ],
                    537 =>
                        [
                            'city' => 'København V',
                            'code' => '1784',
                        ],
                    538 =>
                        [
                            'city' => 'København V',
                            'code' => '1785',
                        ],
                    539 =>
                        [
                            'city' => 'København V',
                            'code' => '1786',
                        ],
                    540 =>
                        [
                            'city' => 'København V',
                            'code' => '1787',
                        ],
                    541 =>
                        [
                            'city' => 'København V',
                            'code' => '1788',
                        ],
                    542 =>
                        [
                            'city' => 'København V',
                            'code' => '1789',
                        ],
                    543 =>
                        [
                            'city' => 'København V',
                            'code' => '1790',
                        ],
                    544 =>
                        [
                            'city' => 'København V',
                            'code' => '1795',
                        ],
                    545 =>
                        [
                            'city' => 'København V',
                            'code' => '1799',
                        ],
                    546 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1800',
                        ],
                    547 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1801',
                        ],
                    548 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1802',
                        ],
                    549 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1803',
                        ],
                    550 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1804',
                        ],
                    551 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1805',
                        ],
                    552 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1806',
                        ],
                    553 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1807',
                        ],
                    554 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1808',
                        ],
                    555 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1809',
                        ],
                    556 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1810',
                        ],
                    557 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1811',
                        ],
                    558 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1812',
                        ],
                    559 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1813',
                        ],
                    560 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1814',
                        ],
                    561 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1815',
                        ],
                    562 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1816',
                        ],
                    563 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1817',
                        ],
                    564 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1818',
                        ],
                    565 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1819',
                        ],
                    566 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1820',
                        ],
                    567 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1822',
                        ],
                    568 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1823',
                        ],
                    569 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1824',
                        ],
                    570 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1825',
                        ],
                    571 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1826',
                        ],
                    572 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1827',
                        ],
                    573 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1828',
                        ],
                    574 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1829',
                        ],
                    575 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1835',
                        ],
                    576 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1850',
                        ],
                    577 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1851',
                        ],
                    578 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1852',
                        ],
                    579 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1853',
                        ],
                    580 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1854',
                        ],
                    581 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1855',
                        ],
                    582 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1856',
                        ],
                    583 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1857',
                        ],
                    584 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1860',
                        ],
                    585 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1861',
                        ],
                    586 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1862',
                        ],
                    587 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1863',
                        ],
                    588 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1864',
                        ],
                    589 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1865',
                        ],
                    590 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1866',
                        ],
                    591 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1867',
                        ],
                    592 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1868',
                        ],
                    593 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1870',
                        ],
                    594 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1871',
                        ],
                    595 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1872',
                        ],
                    596 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1873',
                        ],
                    597 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1874',
                        ],
                    598 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1875',
                        ],
                    599 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1876',
                        ],
                    600 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1877',
                        ],
                    601 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1878',
                        ],
                    602 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1879',
                        ],
                    603 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1900',
                        ],
                    604 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1901',
                        ],
                    605 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1902',
                        ],
                    606 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1903',
                        ],
                    607 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1904',
                        ],
                    608 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1905',
                        ],
                    609 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1906',
                        ],
                    610 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1908',
                        ],
                    611 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1909',
                        ],
                    612 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1910',
                        ],
                    613 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1911',
                        ],
                    614 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1912',
                        ],
                    615 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1913',
                        ],
                    616 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1914',
                        ],
                    617 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1915',
                        ],
                    618 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1916',
                        ],
                    619 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1917',
                        ],
                    620 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1920',
                        ],
                    621 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1921',
                        ],
                    622 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1922',
                        ],
                    623 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1923',
                        ],
                    624 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1924',
                        ],
                    625 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1925',
                        ],
                    626 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1926',
                        ],
                    627 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1927',
                        ],
                    628 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1928',
                        ],
                    629 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1931',
                        ],
                    630 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1950',
                        ],
                    631 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1951',
                        ],
                    632 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1952',
                        ],
                    633 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1953',
                        ],
                    634 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1954',
                        ],
                    635 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1955',
                        ],
                    636 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1956',
                        ],
                    637 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1957',
                        ],
                    638 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1958',
                        ],
                    639 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1959',
                        ],
                    640 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1960',
                        ],
                    641 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1961',
                        ],
                    642 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1962',
                        ],
                    643 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1963',
                        ],
                    644 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1964',
                        ],
                    645 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1965',
                        ],
                    646 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1966',
                        ],
                    647 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1967',
                        ],
                    648 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1970',
                        ],
                    649 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1971',
                        ],
                    650 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1972',
                        ],
                    651 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1973',
                        ],
                    652 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1974',
                        ],
                    653 =>
                        [
                            'city' => 'Frederiksberg C',
                            'code' => '1999',
                        ],
                    654 =>
                        [
                            'city' => 'Frederiksberg',
                            'code' => '2000',
                        ],
                    655 =>
                        [
                            'city' => 'København Ø',
                            'code' => '2100',
                        ],
                    656 =>
                        [
                            'city' => 'København N',
                            'code' => '2200',
                        ],
                    657 =>
                        [
                            'city' => 'København S',
                            'code' => '2300',
                        ],
                    658 =>
                        [
                            'city' => 'København NV',
                            'code' => '2400',
                        ],
                    659 =>
                        [
                            'city' => 'København SV',
                            'code' => '2450',
                        ],
                    660 =>
                        [
                            'city' => 'Valby',
                            'code' => '2500',
                        ],
                    661 =>
                        [
                            'city' => 'Glostrup',
                            'code' => '2600',
                        ],
                    662 =>
                        [
                            'city' => 'Brøndby',
                            'code' => '2605',
                        ],
                    663 =>
                        [
                            'city' => 'Rødovre',
                            'code' => '2610',
                        ],
                    664 =>
                        [
                            'city' => 'Albertslund',
                            'code' => '2620',
                        ],
                    665 =>
                        [
                            'city' => 'Vallensbæk',
                            'code' => '2625',
                        ],
                    666 =>
                        [
                            'city' => 'Taastrup',
                            'code' => '2630',
                        ],
                    667 =>
                        [
                            'city' => 'Taastrup',
                            'code' => '2633',
                        ],
                    668 =>
                        [
                            'city' => 'Ishøj',
                            'code' => '2635',
                        ],
                    669 =>
                        [
                            'city' => 'Hedehusene',
                            'code' => '2640',
                        ],
                    670 =>
                        [
                            'city' => 'Hvidovre',
                            'code' => '2650',
                        ],
                    671 =>
                        [
                            'city' => 'Brøndby Strand',
                            'code' => '2660',
                        ],
                    672 =>
                        [
                            'city' => 'Vallensbæk Strand',
                            'code' => '2665',
                        ],
                    673 =>
                        [
                            'city' => 'Greve',
                            'code' => '2670',
                        ],
                    674 =>
                        [
                            'city' => 'Solrød Strand',
                            'code' => '2680',
                        ],
                    675 =>
                        [
                            'city' => 'Karlslunde',
                            'code' => '2690',
                        ],
                    676 =>
                        [
                            'city' => 'Brønshøj',
                            'code' => '2700',
                        ],
                    677 =>
                        [
                            'city' => 'Vanløse',
                            'code' => '2720',
                        ],
                    678 =>
                        [
                            'city' => 'Herlev',
                            'code' => '2730',
                        ],
                    679 =>
                        [
                            'city' => 'Skovlunde',
                            'code' => '2740',
                        ],
                    680 =>
                        [
                            'city' => 'Ballerup',
                            'code' => '2750',
                        ],
                    681 =>
                        [
                            'city' => 'Måløv',
                            'code' => '2760',
                        ],
                    682 =>
                        [
                            'city' => 'Smørum',
                            'code' => '2765',
                        ],
                    683 =>
                        [
                            'city' => 'Kastrup',
                            'code' => '2770',
                        ],
                    684 =>
                        [
                            'city' => 'Dragør',
                            'code' => '2791',
                        ],
                    685 =>
                        [
                            'city' => 'Kongens Lyngby',
                            'code' => '2800',
                        ],
                    686 =>
                        [
                            'city' => 'Gentofte',
                            'code' => '2820',
                        ],
                    687 =>
                        [
                            'city' => 'Virum',
                            'code' => '2830',
                        ],
                    688 =>
                        [
                            'city' => 'Holte',
                            'code' => '2840',
                        ],
                    689 =>
                        [
                            'city' => 'Nærum',
                            'code' => '2850',
                        ],
                    690 =>
                        [
                            'city' => 'Søborg',
                            'code' => '2860',
                        ],
                    691 =>
                        [
                            'city' => 'Dyssegård',
                            'code' => '2870',
                        ],
                    692 =>
                        [
                            'city' => 'Bagsværd',
                            'code' => '2880',
                        ],
                    693 =>
                        [
                            'city' => 'Hellerup',
                            'code' => '2900',
                        ],
                    694 =>
                        [
                            'city' => 'Charlottenlund',
                            'code' => '2920',
                        ],
                    695 =>
                        [
                            'city' => 'Klampenborg',
                            'code' => '2930',
                        ],
                    696 =>
                        [
                            'city' => 'Skodsborg',
                            'code' => '2942',
                        ],
                    697 =>
                        [
                            'city' => 'Vedbæk',
                            'code' => '2950',
                        ],
                    698 =>
                        [
                            'city' => 'Rungsted Kyst',
                            'code' => '2960',
                        ],
                    699 =>
                        [
                            'city' => 'Hørsholm',
                            'code' => '2970',
                        ],
                    700 =>
                        [
                            'city' => 'Kokkedal',
                            'code' => '2980',
                        ],
                    701 =>
                        [
                            'city' => 'Nivå',
                            'code' => '2990',
                        ],
                    702 =>
                        [
                            'city' => 'Helsingør',
                            'code' => '3000',
                        ],
                    703 =>
                        [
                            'city' => 'Humlebæk',
                            'code' => '3050',
                        ],
                    704 =>
                        [
                            'city' => 'Espergærde',
                            'code' => '3060',
                        ],
                    705 =>
                        [
                            'city' => 'Snekkersten',
                            'code' => '3070',
                        ],
                    706 =>
                        [
                            'city' => 'Tikøb',
                            'code' => '3080',
                        ],
                    707 =>
                        [
                            'city' => 'Hornbæk',
                            'code' => '3100',
                        ],
                    708 =>
                        [
                            'city' => 'Dronningmølle',
                            'code' => '3120',
                        ],
                    709 =>
                        [
                            'city' => 'Ålsgårde',
                            'code' => '3140',
                        ],
                    710 =>
                        [
                            'city' => 'Hellebæk',
                            'code' => '3150',
                        ],
                    711 =>
                        [
                            'city' => 'Helsinge',
                            'code' => '3200',
                        ],
                    712 =>
                        [
                            'city' => 'Vejby',
                            'code' => '3210',
                        ],
                    713 =>
                        [
                            'city' => 'Tisvildeleje',
                            'code' => '3220',
                        ],
                    714 =>
                        [
                            'city' => 'Græsted',
                            'code' => '3230',
                        ],
                    715 =>
                        [
                            'city' => 'Gilleleje',
                            'code' => '3250',
                        ],
                    716 =>
                        [
                            'city' => 'Frederiksværk',
                            'code' => '3300',
                        ],
                    717 =>
                        [
                            'city' => 'Ølsted',
                            'code' => '3310',
                        ],
                    718 =>
                        [
                            'city' => 'Skævinge',
                            'code' => '3320',
                        ],
                    719 =>
                        [
                            'city' => 'Gørløse',
                            'code' => '3330',
                        ],
                    720 =>
                        [
                            'city' => 'Liseleje',
                            'code' => '3360',
                        ],
                    721 =>
                        [
                            'city' => 'Melby',
                            'code' => '3370',
                        ],
                    722 =>
                        [
                            'city' => 'Hundested',
                            'code' => '3390',
                        ],
                    723 =>
                        [
                            'city' => 'Hillerød',
                            'code' => '3400',
                        ],
                    724 =>
                        [
                            'city' => 'Allerød',
                            'code' => '3450',
                        ],
                    725 =>
                        [
                            'city' => 'Birkerød',
                            'code' => '3460',
                        ],
                    726 =>
                        [
                            'city' => 'Fredensborg',
                            'code' => '3480',
                        ],
                    727 =>
                        [
                            'city' => 'Kvistgård',
                            'code' => '3490',
                        ],
                    728 =>
                        [
                            'city' => 'Værløse',
                            'code' => '3500',
                        ],
                    729 =>
                        [
                            'city' => 'Farum',
                            'code' => '3520',
                        ],
                    730 =>
                        [
                            'city' => 'Lynge',
                            'code' => '3540',
                        ],
                    731 =>
                        [
                            'city' => 'Slangerup',
                            'code' => '3550',
                        ],
                    732 =>
                        [
                            'city' => 'Frederikssund',
                            'code' => '3600',
                        ],
                    733 =>
                        [
                            'city' => 'Jægerspris',
                            'code' => '3630',
                        ],
                    734 =>
                        [
                            'city' => 'Ølstykke',
                            'code' => '3650',
                        ],
                    735 =>
                        [
                            'city' => 'Stenløse',
                            'code' => '3660',
                        ],
                    736 =>
                        [
                            'city' => 'Veksø Sjælland',
                            'code' => '3670',
                        ],
                    737 =>
                        [
                            'city' => 'Rønne',
                            'code' => '3700',
                        ],
                    738 =>
                        [
                            'city' => 'Aakirkeby',
                            'code' => '3720',
                        ],
                    739 =>
                        [
                            'city' => 'Nexø',
                            'code' => '3730',
                        ],
                    740 =>
                        [
                            'city' => 'Svaneke',
                            'code' => '3740',
                        ],
                    741 =>
                        [
                            'city' => 'Østermarie',
                            'code' => '3751',
                        ],
                    742 =>
                        [
                            'city' => 'Gudhjem',
                            'code' => '3760',
                        ],
                    743 =>
                        [
                            'city' => 'Allinge',
                            'code' => '3770',
                        ],
                    744 =>
                        [
                            'city' => 'Klemensker',
                            'code' => '3782',
                        ],
                    745 =>
                        [
                            'city' => 'Hasle',
                            'code' => '3790',
                        ],
                    746 =>
                        [
                            'city' => 'Roskilde',
                            'code' => '4000',
                        ],
                    747 =>
                        [
                            'city' => 'Jyllinge',
                            'code' => '4040',
                        ],
                    748 =>
                        [
                            'city' => 'Skibby',
                            'code' => '4050',
                        ],
                    749 =>
                        [
                            'city' => 'Kirke Såby',
                            'code' => '4060',
                        ],
                    750 =>
                        [
                            'city' => 'Kirke Hyllinge',
                            'code' => '4070',
                        ],
                    751 =>
                        [
                            'city' => 'Ringsted',
                            'code' => '4100',
                        ],
                    752 =>
                        [
                            'city' => 'Ringsted',
                            'code' => '4105',
                        ],
                    753 =>
                        [
                            'city' => 'Ringsted',
                            'code' => '4129',
                        ],
                    754 =>
                        [
                            'city' => 'Viby Sjælland',
                            'code' => '4130',
                        ],
                    755 =>
                        [
                            'city' => 'Borup',
                            'code' => '4140',
                        ],
                    756 =>
                        [
                            'city' => 'Herlufmagle',
                            'code' => '4160',
                        ],
                    757 =>
                        [
                            'city' => 'Glumsø',
                            'code' => '4171',
                        ],
                    758 =>
                        [
                            'city' => 'Fjenneslev',
                            'code' => '4173',
                        ],
                    759 =>
                        [
                            'city' => 'Jystrup Midtsj',
                            'code' => '4174',
                        ],
                    760 =>
                        [
                            'city' => 'Sorø',
                            'code' => '4180',
                        ],
                    761 =>
                        [
                            'city' => 'Munke Bjergby',
                            'code' => '4190',
                        ],
                    762 =>
                        [
                            'city' => 'Slagelse',
                            'code' => '4200',
                        ],
                    763 =>
                        [
                            'city' => 'Korsør',
                            'code' => '4220',
                        ],
                    764 =>
                        [
                            'city' => 'Skælskør',
                            'code' => '4230',
                        ],
                    765 =>
                        [
                            'city' => 'Vemmelev',
                            'code' => '4241',
                        ],
                    766 =>
                        [
                            'city' => 'Boeslunde',
                            'code' => '4242',
                        ],
                    767 =>
                        [
                            'city' => 'Rude',
                            'code' => '4243',
                        ],
                    768 =>
                        [
                            'city' => 'Fuglebjerg',
                            'code' => '4250',
                        ],
                    769 =>
                        [
                            'city' => 'Dalmose',
                            'code' => '4261',
                        ],
                    770 =>
                        [
                            'city' => 'Sandved',
                            'code' => '4262',
                        ],
                    771 =>
                        [
                            'city' => 'Høng',
                            'code' => '4270',
                        ],
                    772 =>
                        [
                            'city' => 'Gørlev',
                            'code' => '4281',
                        ],
                    773 =>
                        [
                            'city' => 'Ruds Vedby',
                            'code' => '4291',
                        ],
                    774 =>
                        [
                            'city' => 'Dianalund',
                            'code' => '4293',
                        ],
                    775 =>
                        [
                            'city' => 'Stenlille',
                            'code' => '4295',
                        ],
                    776 =>
                        [
                            'city' => 'Nyrup',
                            'code' => '4296',
                        ],
                    777 =>
                        [
                            'city' => 'Holbæk',
                            'code' => '4300',
                        ],
                    778 =>
                        [
                            'city' => 'Lejre',
                            'code' => '4320',
                        ],
                    779 =>
                        [
                            'city' => 'Hvalsø',
                            'code' => '4330',
                        ],
                    780 =>
                        [
                            'city' => 'Tølløse',
                            'code' => '4340',
                        ],
                    781 =>
                        [
                            'city' => 'Ugerløse',
                            'code' => '4350',
                        ],
                    782 =>
                        [
                            'city' => 'Kirke Eskilstrup',
                            'code' => '4360',
                        ],
                    783 =>
                        [
                            'city' => 'Store Merløse',
                            'code' => '4370',
                        ],
                    784 =>
                        [
                            'city' => 'Vipperød',
                            'code' => '4390',
                        ],
                    785 =>
                        [
                            'city' => 'Kalundborg',
                            'code' => '4400',
                        ],
                    786 =>
                        [
                            'city' => 'Regstrup',
                            'code' => '4420',
                        ],
                    787 =>
                        [
                            'city' => 'Mørkøv',
                            'code' => '4440',
                        ],
                    788 =>
                        [
                            'city' => 'Jyderup',
                            'code' => '4450',
                        ],
                    789 =>
                        [
                            'city' => 'Snertinge',
                            'code' => '4460',
                        ],
                    790 =>
                        [
                            'city' => 'Svebølle',
                            'code' => '4470',
                        ],
                    791 =>
                        [
                            'city' => 'Store Fuglede',
                            'code' => '4480',
                        ],
                    792 =>
                        [
                            'city' => 'Jerslev Sjælland',
                            'code' => '4490',
                        ],
                    793 =>
                        [
                            'city' => 'Nykøbing Sj',
                            'code' => '4500',
                        ],
                    794 =>
                        [
                            'city' => 'Svinninge',
                            'code' => '4520',
                        ],
                    795 =>
                        [
                            'city' => 'Gislinge',
                            'code' => '4532',
                        ],
                    796 =>
                        [
                            'city' => 'Hørve',
                            'code' => '4534',
                        ],
                    797 =>
                        [
                            'city' => 'Fårevejle',
                            'code' => '4540',
                        ],
                    798 =>
                        [
                            'city' => 'Asnæs',
                            'code' => '4550',
                        ],
                    799 =>
                        [
                            'city' => 'Vig',
                            'code' => '4560',
                        ],
                    800 =>
                        [
                            'city' => 'Grevinge',
                            'code' => '4571',
                        ],
                    801 =>
                        [
                            'city' => 'Nørre Asmindrup',
                            'code' => '4572',
                        ],
                    802 =>
                        [
                            'city' => 'Højby',
                            'code' => '4573',
                        ],
                    803 =>
                        [
                            'city' => 'Rørvig',
                            'code' => '4581',
                        ],
                    804 =>
                        [
                            'city' => 'Sjællands Odde',
                            'code' => '4583',
                        ],
                    805 =>
                        [
                            'city' => 'Føllenslev',
                            'code' => '4591',
                        ],
                    806 =>
                        [
                            'city' => 'Sejerø',
                            'code' => '4592',
                        ],
                    807 =>
                        [
                            'city' => 'Eskebjerg',
                            'code' => '4593',
                        ],
                    808 =>
                        [
                            'city' => 'Køge',
                            'code' => '4600',
                        ],
                    809 =>
                        [
                            'city' => 'Gadstrup',
                            'code' => '4621',
                        ],
                    810 =>
                        [
                            'city' => 'Havdrup',
                            'code' => '4622',
                        ],
                    811 =>
                        [
                            'city' => 'Lille Skensved',
                            'code' => '4623',
                        ],
                    812 =>
                        [
                            'city' => 'Bjæverskov',
                            'code' => '4632',
                        ],
                    813 =>
                        [
                            'city' => 'Fakse',
                            'code' => '4640',
                        ],
                    814 =>
                        [
                            'city' => 'Hårlev',
                            'code' => '4652',
                        ],
                    815 =>
                        [
                            'city' => 'Karise',
                            'code' => '4653',
                        ],
                    816 =>
                        [
                            'city' => 'Fakse Ladeplads',
                            'code' => '4654',
                        ],
                    817 =>
                        [
                            'city' => 'Store Heddinge',
                            'code' => '4660',
                        ],
                    818 =>
                        [
                            'city' => 'Strøby',
                            'code' => '4671',
                        ],
                    819 =>
                        [
                            'city' => 'Klippinge',
                            'code' => '4672',
                        ],
                    820 =>
                        [
                            'city' => 'Rødvig Stevns',
                            'code' => '4673',
                        ],
                    821 =>
                        [
                            'city' => 'Herfølge',
                            'code' => '4681',
                        ],
                    822 =>
                        [
                            'city' => 'Tureby',
                            'code' => '4682',
                        ],
                    823 =>
                        [
                            'city' => 'Rønnede',
                            'code' => '4683',
                        ],
                    824 =>
                        [
                            'city' => 'Holmegaard',
                            'code' => '4684',
                        ],
                    825 =>
                        [
                            'city' => 'Haslev',
                            'code' => '4690',
                        ],
                    826 =>
                        [
                            'city' => 'Næstved',
                            'code' => '4700',
                        ],
                    827 =>
                        [
                            'city' => 'Præstø',
                            'code' => '4720',
                        ],
                    828 =>
                        [
                            'city' => 'Tappernøje',
                            'code' => '4733',
                        ],
                    829 =>
                        [
                            'city' => 'Mern',
                            'code' => '4735',
                        ],
                    830 =>
                        [
                            'city' => 'Karrebæksminde',
                            'code' => '4736',
                        ],
                    831 =>
                        [
                            'city' => 'Lundby',
                            'code' => '4750',
                        ],
                    832 =>
                        [
                            'city' => 'Vordingborg',
                            'code' => '4760',
                        ],
                    833 =>
                        [
                            'city' => 'Kalvehave',
                            'code' => '4771',
                        ],
                    834 =>
                        [
                            'city' => 'Langebæk',
                            'code' => '4772',
                        ],
                    835 =>
                        [
                            'city' => 'Stensved',
                            'code' => '4773',
                        ],
                    836 =>
                        [
                            'city' => 'Stege',
                            'code' => '4780',
                        ],
                    837 =>
                        [
                            'city' => 'Borre',
                            'code' => '4791',
                        ],
                    838 =>
                        [
                            'city' => 'Askeby',
                            'code' => '4792',
                        ],
                    839 =>
                        [
                            'city' => 'Bogø By',
                            'code' => '4793',
                        ],
                    840 =>
                        [
                            'city' => 'Nykøbing F',
                            'code' => '4800',
                        ],
                    841 =>
                        [
                            'city' => 'Nørre Alslev',
                            'code' => '4840',
                        ],
                    842 =>
                        [
                            'city' => 'Stubbekøbing',
                            'code' => '4850',
                        ],
                    843 =>
                        [
                            'city' => 'Guldborg',
                            'code' => '4862',
                        ],
                    844 =>
                        [
                            'city' => 'Eskilstrup',
                            'code' => '4863',
                        ],
                    845 =>
                        [
                            'city' => 'Horbelev',
                            'code' => '4871',
                        ],
                    846 =>
                        [
                            'city' => 'Idestrup',
                            'code' => '4872',
                        ],
                    847 =>
                        [
                            'city' => 'Væggerløse',
                            'code' => '4873',
                        ],
                    848 =>
                        [
                            'city' => 'Gedser',
                            'code' => '4874',
                        ],
                    849 =>
                        [
                            'city' => 'Nysted',
                            'code' => '4880',
                        ],
                    850 =>
                        [
                            'city' => 'Toreby L',
                            'code' => '4891',
                        ],
                    851 =>
                        [
                            'city' => 'Kettinge',
                            'code' => '4892',
                        ],
                    852 =>
                        [
                            'city' => 'Øster Ulslev',
                            'code' => '4894',
                        ],
                    853 =>
                        [
                            'city' => 'Errindlev',
                            'code' => '4895',
                        ],
                    854 =>
                        [
                            'city' => 'Nakskov',
                            'code' => '4900',
                        ],
                    855 =>
                        [
                            'city' => 'Harpelunde',
                            'code' => '4912',
                        ],
                    856 =>
                        [
                            'city' => 'Horslunde',
                            'code' => '4913',
                        ],
                    857 =>
                        [
                            'city' => 'Søllested',
                            'code' => '4920',
                        ],
                    858 =>
                        [
                            'city' => 'Maribo',
                            'code' => '4930',
                        ],
                    859 =>
                        [
                            'city' => 'Bandholm',
                            'code' => '4941',
                        ],
                    860 =>
                        [
                            'city' => 'Torrig L',
                            'code' => '4943',
                        ],
                    861 =>
                        [
                            'city' => 'Fejø',
                            'code' => '4944',
                        ],
                    862 =>
                        [
                            'city' => 'Nørreballe',
                            'code' => '4951',
                        ],
                    863 =>
                        [
                            'city' => 'Stokkemarke',
                            'code' => '4952',
                        ],
                    864 =>
                        [
                            'city' => 'Vesterborg',
                            'code' => '4953',
                        ],
                    865 =>
                        [
                            'city' => 'Holeby',
                            'code' => '4960',
                        ],
                    866 =>
                        [
                            'city' => 'Rødby',
                            'code' => '4970',
                        ],
                    867 =>
                        [
                            'city' => 'Dannemare',
                            'code' => '4983',
                        ],
                    868 =>
                        [
                            'city' => 'Sakskøbing',
                            'code' => '4990',
                        ],
                    869 =>
                        [
                            'city' => 'Odense C',
                            'code' => '5000',
                        ],
                    870 =>
                        [
                            'city' => 'Odense C',
                            'code' => '5029',
                        ],
                    871 =>
                        [
                            'city' => 'Odense C',
                            'code' => '5090',
                        ],
                    872 =>
                        [
                            'city' => 'Odense C',
                            'code' => '5100',
                        ],
                    873 =>
                        [
                            'city' => 'Odense V',
                            'code' => '5200',
                        ],
                    874 =>
                        [
                            'city' => 'Odense NV',
                            'code' => '5210',
                        ],
                    875 =>
                        [
                            'city' => 'Odense SØ',
                            'code' => '5220',
                        ],
                    876 =>
                        [
                            'city' => 'Odense M',
                            'code' => '5230',
                        ],
                    877 =>
                        [
                            'city' => 'Odense NØ',
                            'code' => '5240',
                        ],
                    878 =>
                        [
                            'city' => 'Odense SV',
                            'code' => '5250',
                        ],
                    879 =>
                        [
                            'city' => 'Odense S',
                            'code' => '5260',
                        ],
                    880 =>
                        [
                            'city' => 'Odense N',
                            'code' => '5270',
                        ],
                    881 =>
                        [
                            'city' => 'Marslev',
                            'code' => '5290',
                        ],
                    882 =>
                        [
                            'city' => 'Kerteminde',
                            'code' => '5300',
                        ],
                    883 =>
                        [
                            'city' => 'Agedrup',
                            'code' => '5320',
                        ],
                    884 =>
                        [
                            'city' => 'Munkebo',
                            'code' => '5330',
                        ],
                    885 =>
                        [
                            'city' => 'Rynkeby',
                            'code' => '5350',
                        ],
                    886 =>
                        [
                            'city' => 'Mesinge',
                            'code' => '5370',
                        ],
                    887 =>
                        [
                            'city' => 'Dalby',
                            'code' => '5380',
                        ],
                    888 =>
                        [
                            'city' => 'Martofte',
                            'code' => '5390',
                        ],
                    889 =>
                        [
                            'city' => 'Bogense',
                            'code' => '5400',
                        ],
                    890 =>
                        [
                            'city' => 'Otterup',
                            'code' => '5450',
                        ],
                    891 =>
                        [
                            'city' => 'Morud',
                            'code' => '5462',
                        ],
                    892 =>
                        [
                            'city' => 'Harndrup',
                            'code' => '5463',
                        ],
                    893 =>
                        [
                            'city' => 'Brenderup Fyn',
                            'code' => '5464',
                        ],
                    894 =>
                        [
                            'city' => 'Asperup',
                            'code' => '5466',
                        ],
                    895 =>
                        [
                            'city' => 'Søndersø',
                            'code' => '5471',
                        ],
                    896 =>
                        [
                            'city' => 'Veflinge',
                            'code' => '5474',
                        ],
                    897 =>
                        [
                            'city' => 'Skamby',
                            'code' => '5485',
                        ],
                    898 =>
                        [
                            'city' => 'Blommenslyst',
                            'code' => '5491',
                        ],
                    899 =>
                        [
                            'city' => 'Vissenbjerg',
                            'code' => '5492',
                        ],
                    900 =>
                        [
                            'city' => 'Middelfart',
                            'code' => '5500',
                        ],
                    901 =>
                        [
                            'city' => 'Ullerslev',
                            'code' => '5540',
                        ],
                    902 =>
                        [
                            'city' => 'Langeskov',
                            'code' => '5550',
                        ],
                    903 =>
                        [
                            'city' => 'Aarup',
                            'code' => '5560',
                        ],
                    904 =>
                        [
                            'city' => 'Nørre Aaby',
                            'code' => '5580',
                        ],
                    905 =>
                        [
                            'city' => 'Gelsted',
                            'code' => '5591',
                        ],
                    906 =>
                        [
                            'city' => 'Ejby',
                            'code' => '5592',
                        ],
                    907 =>
                        [
                            'city' => 'Faaborg',
                            'code' => '5600',
                        ],
                    908 =>
                        [
                            'city' => 'Assens',
                            'code' => '5610',
                        ],
                    909 =>
                        [
                            'city' => 'Glamsbjerg',
                            'code' => '5620',
                        ],
                    910 =>
                        [
                            'city' => 'Ebberup',
                            'code' => '5631',
                        ],
                    911 =>
                        [
                            'city' => 'Millinge',
                            'code' => '5642',
                        ],
                    912 =>
                        [
                            'city' => 'Broby',
                            'code' => '5672',
                        ],
                    913 =>
                        [
                            'city' => 'Haarby',
                            'code' => '5683',
                        ],
                    914 =>
                        [
                            'city' => 'Tommerup',
                            'code' => '5690',
                        ],
                    915 =>
                        [
                            'city' => 'Svendborg',
                            'code' => '5700',
                        ],
                    916 =>
                        [
                            'city' => 'Ringe',
                            'code' => '5750',
                        ],
                    917 =>
                        [
                            'city' => 'Vester Skerninge',
                            'code' => '5762',
                        ],
                    918 =>
                        [
                            'city' => 'Stenstrup',
                            'code' => '5771',
                        ],
                    919 =>
                        [
                            'city' => 'Kværndrup',
                            'code' => '5772',
                        ],
                    920 =>
                        [
                            'city' => 'Årslev',
                            'code' => '5792',
                        ],
                    921 =>
                        [
                            'city' => 'Nyborg',
                            'code' => '5800',
                        ],
                    922 =>
                        [
                            'city' => 'Ørbæk',
                            'code' => '5853',
                        ],
                    923 =>
                        [
                            'city' => 'Gislev',
                            'code' => '5854',
                        ],
                    924 =>
                        [
                            'city' => 'Ryslinge',
                            'code' => '5856',
                        ],
                    925 =>
                        [
                            'city' => 'Ferritslev Fyn',
                            'code' => '5863',
                        ],
                    926 =>
                        [
                            'city' => 'Frørup',
                            'code' => '5871',
                        ],
                    927 =>
                        [
                            'city' => 'Hesselager',
                            'code' => '5874',
                        ],
                    928 =>
                        [
                            'city' => 'Skårup Fyn',
                            'code' => '5881',
                        ],
                    929 =>
                        [
                            'city' => 'Vejstrup',
                            'code' => '5882',
                        ],
                    930 =>
                        [
                            'city' => 'Oure',
                            'code' => '5883',
                        ],
                    931 =>
                        [
                            'city' => 'Gudme',
                            'code' => '5884',
                        ],
                    932 =>
                        [
                            'city' => 'Gudbjerg Sydfyn',
                            'code' => '5892',
                        ],
                    933 =>
                        [
                            'city' => 'Rudkøbing',
                            'code' => '5900',
                        ],
                    934 =>
                        [
                            'city' => 'Humble',
                            'code' => '5932',
                        ],
                    935 =>
                        [
                            'city' => 'Bagenkop',
                            'code' => '5935',
                        ],
                    936 =>
                        [
                            'city' => 'Tranekær',
                            'code' => '5953',
                        ],
                    937 =>
                        [
                            'city' => 'Marstal',
                            'code' => '5960',
                        ],
                    938 =>
                        [
                            'city' => 'Ærøskøbing',
                            'code' => '5970',
                        ],
                    939 =>
                        [
                            'city' => 'Søby Ærø',
                            'code' => '5985',
                        ],
                    940 =>
                        [
                            'city' => 'Kolding',
                            'code' => '6000',
                        ],
                    941 =>
                        [
                            'city' => 'Egtved',
                            'code' => '6040',
                        ],
                    942 =>
                        [
                            'city' => 'Almind',
                            'code' => '6051',
                        ],
                    943 =>
                        [
                            'city' => 'Viuf',
                            'code' => '6052',
                        ],
                    944 =>
                        [
                            'city' => 'Jordrup',
                            'code' => '6064',
                        ],
                    945 =>
                        [
                            'city' => 'Christiansfeld',
                            'code' => '6070',
                        ],
                    946 =>
                        [
                            'city' => 'Bjert',
                            'code' => '6091',
                        ],
                    947 =>
                        [
                            'city' => 'Sønder Stenderup',
                            'code' => '6092',
                        ],
                    948 =>
                        [
                            'city' => 'Sjølund',
                            'code' => '6093',
                        ],
                    949 =>
                        [
                            'city' => 'Hejls',
                            'code' => '6094',
                        ],
                    950 =>
                        [
                            'city' => 'Haderslev',
                            'code' => '6100',
                        ],
                    951 =>
                        [
                            'city' => 'Aabenraa',
                            'code' => '6200',
                        ],
                    952 =>
                        [
                            'city' => 'Rødekro',
                            'code' => '6230',
                        ],
                    953 =>
                        [
                            'city' => 'Løgumkloster',
                            'code' => '6240',
                        ],
                    954 =>
                        [
                            'city' => 'Bredebro',
                            'code' => '6261',
                        ],
                    955 =>
                        [
                            'city' => 'Tønder',
                            'code' => '6270',
                        ],
                    956 =>
                        [
                            'city' => 'Højer',
                            'code' => '6280',
                        ],
                    957 =>
                        [
                            'city' => 'Gråsten',
                            'code' => '6300',
                        ],
                    958 =>
                        [
                            'city' => 'Broager',
                            'code' => '6310',
                        ],
                    959 =>
                        [
                            'city' => 'Egernsund',
                            'code' => '6320',
                        ],
                    960 =>
                        [
                            'city' => 'Padborg',
                            'code' => '6330',
                        ],
                    961 =>
                        [
                            'city' => 'Kruså',
                            'code' => '6340',
                        ],
                    962 =>
                        [
                            'city' => 'Tinglev',
                            'code' => '6360',
                        ],
                    963 =>
                        [
                            'city' => 'Bylderup-Bov',
                            'code' => '6372',
                        ],
                    964 =>
                        [
                            'city' => 'Bolderslev',
                            'code' => '6392',
                        ],
                    965 =>
                        [
                            'city' => 'Sønderborg',
                            'code' => '6400',
                        ],
                    966 =>
                        [
                            'city' => 'Nordborg',
                            'code' => '6430',
                        ],
                    967 =>
                        [
                            'city' => 'Augustenborg',
                            'code' => '6440',
                        ],
                    968 =>
                        [
                            'city' => 'Sydals',
                            'code' => '6470',
                        ],
                    969 =>
                        [
                            'city' => 'Vojens',
                            'code' => '6500',
                        ],
                    970 =>
                        [
                            'city' => 'Gram',
                            'code' => '6510',
                        ],
                    971 =>
                        [
                            'city' => 'Toftlund',
                            'code' => '6520',
                        ],
                    972 =>
                        [
                            'city' => 'Agerskov',
                            'code' => '6534',
                        ],
                    973 =>
                        [
                            'city' => 'Branderup J',
                            'code' => '6535',
                        ],
                    974 =>
                        [
                            'city' => 'Bevtoft',
                            'code' => '6541',
                        ],
                    975 =>
                        [
                            'city' => 'Sommersted',
                            'code' => '6560',
                        ],
                    976 =>
                        [
                            'city' => 'Vamdrup',
                            'code' => '6580',
                        ],
                    977 =>
                        [
                            'city' => 'Vejen',
                            'code' => '6600',
                        ],
                    978 =>
                        [
                            'city' => 'Gesten',
                            'code' => '6621',
                        ],
                    979 =>
                        [
                            'city' => 'Bække',
                            'code' => '6622',
                        ],
                    980 =>
                        [
                            'city' => 'Vorbasse',
                            'code' => '6623',
                        ],
                    981 =>
                        [
                            'city' => 'Rødding',
                            'code' => '6630',
                        ],
                    982 =>
                        [
                            'city' => 'Lunderskov',
                            'code' => '6640',
                        ],
                    983 =>
                        [
                            'city' => 'Brørup',
                            'code' => '6650',
                        ],
                    984 =>
                        [
                            'city' => 'Lintrup',
                            'code' => '6660',
                        ],
                    985 =>
                        [
                            'city' => 'Holsted',
                            'code' => '6670',
                        ],
                    986 =>
                        [
                            'city' => 'Hovborg',
                            'code' => '6682',
                        ],
                    987 =>
                        [
                            'city' => 'Føvling',
                            'code' => '6683',
                        ],
                    988 =>
                        [
                            'city' => 'Gørding',
                            'code' => '6690',
                        ],
                    989 =>
                        [
                            'city' => 'Esbjerg',
                            'code' => '6700',
                        ],
                    990 =>
                        [
                            'city' => 'Esbjerg',
                            'code' => '6701',
                        ],
                    991 =>
                        [
                            'city' => 'Esbjerg Ø',
                            'code' => '6705',
                        ],
                    992 =>
                        [
                            'city' => 'Esbjerg V',
                            'code' => '6710',
                        ],
                    993 =>
                        [
                            'city' => 'Esbjerg N',
                            'code' => '6715',
                        ],
                    994 =>
                        [
                            'city' => 'Fanø',
                            'code' => '6720',
                        ],
                    995 =>
                        [
                            'city' => 'Tjæreborg',
                            'code' => '6731',
                        ],
                    996 =>
                        [
                            'city' => 'Bramming',
                            'code' => '6740',
                        ],
                    997 =>
                        [
                            'city' => 'Glejbjerg',
                            'code' => '6752',
                        ],
                    998 =>
                        [
                            'city' => 'Agerbæk',
                            'code' => '6753',
                        ],
                    999 =>
                        [
                            'city' => 'Ribe',
                            'code' => '6760',
                        ],
                    1000 =>
                        [
                            'city' => 'Gredstedbro',
                            'code' => '6771',
                        ],
                    1001 =>
                        [
                            'city' => 'Skærbæk',
                            'code' => '6780',
                        ],
                    1002 =>
                        [
                            'city' => 'Rømø',
                            'code' => '6792',
                        ],
                    1003 =>
                        [
                            'city' => 'Varde',
                            'code' => '6800',
                        ],
                    1004 =>
                        [
                            'city' => 'Årre',
                            'code' => '6818',
                        ],
                    1005 =>
                        [
                            'city' => 'Ansager',
                            'code' => '6823',
                        ],
                    1006 =>
                        [
                            'city' => 'Nørre Nebel',
                            'code' => '6830',
                        ],
                    1007 =>
                        [
                            'city' => 'Oksbøl',
                            'code' => '6840',
                        ],
                    1008 =>
                        [
                            'city' => 'Janderup Vestj',
                            'code' => '6851',
                        ],
                    1009 =>
                        [
                            'city' => 'Billum',
                            'code' => '6852',
                        ],
                    1010 =>
                        [
                            'city' => 'Vejers Strand',
                            'code' => '6853',
                        ],
                    1011 =>
                        [
                            'city' => 'Henne',
                            'code' => '6854',
                        ],
                    1012 =>
                        [
                            'city' => 'Outrup',
                            'code' => '6855',
                        ],
                    1013 =>
                        [
                            'city' => 'Blåvand',
                            'code' => '6857',
                        ],
                    1014 =>
                        [
                            'city' => 'Tistrup',
                            'code' => '6862',
                        ],
                    1015 =>
                        [
                            'city' => 'Ølgod',
                            'code' => '6870',
                        ],
                    1016 =>
                        [
                            'city' => 'Tarm',
                            'code' => '6880',
                        ],
                    1017 =>
                        [
                            'city' => 'Hemmet',
                            'code' => '6893',
                        ],
                    1018 =>
                        [
                            'city' => 'Skjern',
                            'code' => '6900',
                        ],
                    1019 =>
                        [
                            'city' => 'Videbæk',
                            'code' => '6920',
                        ],
                    1020 =>
                        [
                            'city' => 'Kibæk',
                            'code' => '6933',
                        ],
                    1021 =>
                        [
                            'city' => 'Lem St',
                            'code' => '6940',
                        ],
                    1022 =>
                        [
                            'city' => 'Ringkøbing',
                            'code' => '6950',
                        ],
                    1023 =>
                        [
                            'city' => 'Hvide Sande',
                            'code' => '6960',
                        ],
                    1024 =>
                        [
                            'city' => 'Spjald',
                            'code' => '6971',
                        ],
                    1025 =>
                        [
                            'city' => 'Ørnhøj',
                            'code' => '6973',
                        ],
                    1026 =>
                        [
                            'city' => 'Tim',
                            'code' => '6980',
                        ],
                    1027 =>
                        [
                            'city' => 'Ulfborg',
                            'code' => '6990',
                        ],
                    1028 =>
                        [
                            'city' => 'Fredericia',
                            'code' => '7000',
                        ],
                    1029 =>
                        [
                            'city' => 'Fredericia',
                            'code' => '7007',
                        ],
                    1030 =>
                        [
                            'city' => 'Fredericia',
                            'code' => '7029',
                        ],
                    1031 =>
                        [
                            'city' => 'Børkop',
                            'code' => '7080',
                        ],
                    1032 =>
                        [
                            'city' => 'Vejle',
                            'code' => '7100',
                        ],
                    1033 =>
                        [
                            'city' => 'Vejle Øst',
                            'code' => '7120',
                        ],
                    1034 =>
                        [
                            'city' => 'Juelsminde',
                            'code' => '7130',
                        ],
                    1035 =>
                        [
                            'city' => 'Stouby',
                            'code' => '7140',
                        ],
                    1036 =>
                        [
                            'city' => 'Barrit',
                            'code' => '7150',
                        ],
                    1037 =>
                        [
                            'city' => 'Tørring',
                            'code' => '7160',
                        ],
                    1038 =>
                        [
                            'city' => 'Uldum',
                            'code' => '7171',
                        ],
                    1039 =>
                        [
                            'city' => 'Vonge',
                            'code' => '7173',
                        ],
                    1040 =>
                        [
                            'city' => 'Bredsten',
                            'code' => '7182',
                        ],
                    1041 =>
                        [
                            'city' => 'Randbøl',
                            'code' => '7183',
                        ],
                    1042 =>
                        [
                            'city' => 'Vandel',
                            'code' => '7184',
                        ],
                    1043 =>
                        [
                            'city' => 'Billund',
                            'code' => '7190',
                        ],
                    1044 =>
                        [
                            'city' => 'Grindsted',
                            'code' => '7200',
                        ],
                    1045 =>
                        [
                            'city' => 'Hejnsvig',
                            'code' => '7250',
                        ],
                    1046 =>
                        [
                            'city' => 'Sønder Omme',
                            'code' => '7260',
                        ],
                    1047 =>
                        [
                            'city' => 'Stakroge',
                            'code' => '7270',
                        ],
                    1048 =>
                        [
                            'city' => 'Sønder Felding',
                            'code' => '7280',
                        ],
                    1049 =>
                        [
                            'city' => 'Jelling',
                            'code' => '7300',
                        ],
                    1050 =>
                        [
                            'city' => 'Gadbjerg',
                            'code' => '7321',
                        ],
                    1051 =>
                        [
                            'city' => 'Give',
                            'code' => '7323',
                        ],
                    1052 =>
                        [
                            'city' => 'Brande',
                            'code' => '7330',
                        ],
                    1053 =>
                        [
                            'city' => 'Ejstrupholm',
                            'code' => '7361',
                        ],
                    1054 =>
                        [
                            'city' => 'Hampen',
                            'code' => '7362',
                        ],
                    1055 =>
                        [
                            'city' => 'Herning',
                            'code' => '7400',
                        ],
                    1056 =>
                        [
                            'city' => 'Herning',
                            'code' => '7401',
                        ],
                    1057 =>
                        [
                            'city' => 'Herning',
                            'code' => '7429',
                        ],
                    1058 =>
                        [
                            'city' => 'Ikast',
                            'code' => '7430',
                        ],
                    1059 =>
                        [
                            'city' => 'Bording',
                            'code' => '7441',
                        ],
                    1060 =>
                        [
                            'city' => 'Engesvang',
                            'code' => '7442',
                        ],
                    1061 =>
                        [
                            'city' => 'Sunds',
                            'code' => '7451',
                        ],
                    1062 =>
                        [
                            'city' => 'Karup J',
                            'code' => '7470',
                        ],
                    1063 =>
                        [
                            'city' => 'Vildbjerg',
                            'code' => '7480',
                        ],
                    1064 =>
                        [
                            'city' => 'Aulum',
                            'code' => '7490',
                        ],
                    1065 =>
                        [
                            'city' => 'Holstebro',
                            'code' => '7500',
                        ],
                    1066 =>
                        [
                            'city' => 'Haderup',
                            'code' => '7540',
                        ],
                    1067 =>
                        [
                            'city' => 'Sørvad',
                            'code' => '7550',
                        ],
                    1068 =>
                        [
                            'city' => 'Hjerm',
                            'code' => '7560',
                        ],
                    1069 =>
                        [
                            'city' => 'Vemb',
                            'code' => '7570',
                        ],
                    1070 =>
                        [
                            'city' => 'Struer',
                            'code' => '7600',
                        ],
                    1071 =>
                        [
                            'city' => 'Lemvig',
                            'code' => '7620',
                        ],
                    1072 =>
                        [
                            'city' => 'Bøvlingbjerg',
                            'code' => '7650',
                        ],
                    1073 =>
                        [
                            'city' => 'Bækmarksbro',
                            'code' => '7660',
                        ],
                    1074 =>
                        [
                            'city' => 'Harboøre',
                            'code' => '7673',
                        ],
                    1075 =>
                        [
                            'city' => 'Thyborøn',
                            'code' => '7680',
                        ],
                    1076 =>
                        [
                            'city' => 'Thisted',
                            'code' => '7700',
                        ],
                    1077 =>
                        [
                            'city' => 'Hanstholm',
                            'code' => '7730',
                        ],
                    1078 =>
                        [
                            'city' => 'Frøstrup',
                            'code' => '7741',
                        ],
                    1079 =>
                        [
                            'city' => 'Vesløs',
                            'code' => '7742',
                        ],
                    1080 =>
                        [
                            'city' => 'Snedsted',
                            'code' => '7752',
                        ],
                    1081 =>
                        [
                            'city' => 'Bedsted Thy',
                            'code' => '7755',
                        ],
                    1082 =>
                        [
                            'city' => 'Hurup Thy',
                            'code' => '7760',
                        ],
                    1083 =>
                        [
                            'city' => 'Vestervig',
                            'code' => '7770',
                        ],
                    1084 =>
                        [
                            'city' => 'Thyholm',
                            'code' => '7790',
                        ],
                    1085 =>
                        [
                            'city' => 'Skive',
                            'code' => '7800',
                        ],
                    1086 =>
                        [
                            'city' => 'Vinderup',
                            'code' => '7830',
                        ],
                    1087 =>
                        [
                            'city' => 'Højslev',
                            'code' => '7840',
                        ],
                    1088 =>
                        [
                            'city' => 'Stoholm Jyll',
                            'code' => '7850',
                        ],
                    1089 =>
                        [
                            'city' => 'Spøttrup',
                            'code' => '7860',
                        ],
                    1090 =>
                        [
                            'city' => 'Roslev',
                            'code' => '7870',
                        ],
                    1091 =>
                        [
                            'city' => 'Fur',
                            'code' => '7884',
                        ],
                    1092 =>
                        [
                            'city' => 'Nykøbing M',
                            'code' => '7900',
                        ],
                    1093 =>
                        [
                            'city' => 'Erslev',
                            'code' => '7950',
                        ],
                    1094 =>
                        [
                            'city' => 'Karby',
                            'code' => '7960',
                        ],
                    1095 =>
                        [
                            'city' => 'Redsted M',
                            'code' => '7970',
                        ],
                    1096 =>
                        [
                            'city' => 'Vils',
                            'code' => '7980',
                        ],
                    1097 =>
                        [
                            'city' => 'Øster Assels',
                            'code' => '7990',
                        ],
                    1098 =>
                        [
                            'city' => 'Århus C',
                            'code' => '8000',
                        ],
                    1099 =>
                        [
                            'city' => 'Århus C',
                            'code' => '8100',
                        ],
                    1100 =>
                        [
                            'city' => 'Århus N',
                            'code' => '8200',
                        ],
                    1101 =>
                        [
                            'city' => 'Århus V',
                            'code' => '8210',
                        ],
                    1102 =>
                        [
                            'city' => 'Brabrand',
                            'code' => '8220',
                        ],
                    1103 =>
                        [
                            'city' => 'Risskov Ø',
                            'code' => '8229',
                        ],
                    1104 =>
                        [
                            'city' => 'Åbyhøj',
                            'code' => '8230',
                        ],
                    1105 =>
                        [
                            'city' => 'Risskov',
                            'code' => '8240',
                        ],
                    1106 =>
                        [
                            'city' => 'Risskov Ø',
                            'code' => '8245',
                        ],
                    1107 =>
                        [
                            'city' => 'Egå',
                            'code' => '8250',
                        ],
                    1108 =>
                        [
                            'city' => 'Viby J',
                            'code' => '8260',
                        ],
                    1109 =>
                        [
                            'city' => 'Højbjerg',
                            'code' => '8270',
                        ],
                    1110 =>
                        [
                            'city' => 'Odder',
                            'code' => '8300',
                        ],
                    1111 =>
                        [
                            'city' => 'Samsø',
                            'code' => '8305',
                        ],
                    1112 =>
                        [
                            'city' => 'Tranbjerg J',
                            'code' => '8310',
                        ],
                    1113 =>
                        [
                            'city' => 'Mårslet',
                            'code' => '8320',
                        ],
                    1114 =>
                        [
                            'city' => 'Beder',
                            'code' => '8330',
                        ],
                    1115 =>
                        [
                            'city' => 'Malling',
                            'code' => '8340',
                        ],
                    1116 =>
                        [
                            'city' => 'Hundslund',
                            'code' => '8350',
                        ],
                    1117 =>
                        [
                            'city' => 'Solbjerg',
                            'code' => '8355',
                        ],
                    1118 =>
                        [
                            'city' => 'Hasselager',
                            'code' => '8361',
                        ],
                    1119 =>
                        [
                            'city' => 'Hørning',
                            'code' => '8362',
                        ],
                    1120 =>
                        [
                            'city' => 'Hadsten',
                            'code' => '8370',
                        ],
                    1121 =>
                        [
                            'city' => 'Trige',
                            'code' => '8380',
                        ],
                    1122 =>
                        [
                            'city' => 'Tilst',
                            'code' => '8381',
                        ],
                    1123 =>
                        [
                            'city' => 'Hinnerup',
                            'code' => '8382',
                        ],
                    1124 =>
                        [
                            'city' => 'Ebeltoft',
                            'code' => '8400',
                        ],
                    1125 =>
                        [
                            'city' => 'Rønde',
                            'code' => '8410',
                        ],
                    1126 =>
                        [
                            'city' => 'Knebel',
                            'code' => '8420',
                        ],
                    1127 =>
                        [
                            'city' => 'Balle',
                            'code' => '8444',
                        ],
                    1128 =>
                        [
                            'city' => 'Hammel',
                            'code' => '8450',
                        ],
                    1129 =>
                        [
                            'city' => 'Harlev J',
                            'code' => '8462',
                        ],
                    1130 =>
                        [
                            'city' => 'Galten',
                            'code' => '8464',
                        ],
                    1131 =>
                        [
                            'city' => 'Sabro',
                            'code' => '8471',
                        ],
                    1132 =>
                        [
                            'city' => 'Sporup',
                            'code' => '8472',
                        ],
                    1133 =>
                        [
                            'city' => 'Grenaa',
                            'code' => '8500',
                        ],
                    1134 =>
                        [
                            'city' => 'Lystrup',
                            'code' => '8520',
                        ],
                    1135 =>
                        [
                            'city' => 'Hjortshøj',
                            'code' => '8530',
                        ],
                    1136 =>
                        [
                            'city' => 'Skødstrup',
                            'code' => '8541',
                        ],
                    1137 =>
                        [
                            'city' => 'Hornslet',
                            'code' => '8543',
                        ],
                    1138 =>
                        [
                            'city' => 'Mørke',
                            'code' => '8544',
                        ],
                    1139 =>
                        [
                            'city' => 'Ryomgård',
                            'code' => '8550',
                        ],
                    1140 =>
                        [
                            'city' => 'Kolind',
                            'code' => '8560',
                        ],
                    1141 =>
                        [
                            'city' => 'Trustrup',
                            'code' => '8570',
                        ],
                    1142 =>
                        [
                            'city' => 'Nimtofte',
                            'code' => '8581',
                        ],
                    1143 =>
                        [
                            'city' => 'Glesborg',
                            'code' => '8585',
                        ],
                    1144 =>
                        [
                            'city' => 'Ørum Djurs',
                            'code' => '8586',
                        ],
                    1145 =>
                        [
                            'city' => 'Anholt',
                            'code' => '8592',
                        ],
                    1146 =>
                        [
                            'city' => 'Silkeborg',
                            'code' => '8600',
                        ],
                    1147 =>
                        [
                            'city' => 'Kjellerup',
                            'code' => '8620',
                        ],
                    1148 =>
                        [
                            'city' => 'Lemming',
                            'code' => '8632',
                        ],
                    1149 =>
                        [
                            'city' => 'Sorring',
                            'code' => '8641',
                        ],
                    1150 =>
                        [
                            'city' => 'Ans By',
                            'code' => '8643',
                        ],
                    1151 =>
                        [
                            'city' => 'Them',
                            'code' => '8653',
                        ],
                    1152 =>
                        [
                            'city' => 'Bryrup',
                            'code' => '8654',
                        ],
                    1153 =>
                        [
                            'city' => 'Skanderborg',
                            'code' => '8660',
                        ],
                    1154 =>
                        [
                            'city' => 'Låsby',
                            'code' => '8670',
                        ],
                    1155 =>
                        [
                            'city' => 'Ry',
                            'code' => '8680',
                        ],
                    1156 =>
                        [
                            'city' => 'Horsens',
                            'code' => '8700',
                        ],
                    1157 =>
                        [
                            'city' => 'Daugård',
                            'code' => '8721',
                        ],
                    1158 =>
                        [
                            'city' => 'Hedensted',
                            'code' => '8722',
                        ],
                    1159 =>
                        [
                            'city' => 'Løsning',
                            'code' => '8723',
                        ],
                    1160 =>
                        [
                            'city' => 'Hovedgård',
                            'code' => '8732',
                        ],
                    1161 =>
                        [
                            'city' => 'Brædstrup',
                            'code' => '8740',
                        ],
                    1162 =>
                        [
                            'city' => 'Gedved',
                            'code' => '8751',
                        ],
                    1163 =>
                        [
                            'city' => 'Østbirk',
                            'code' => '8752',
                        ],
                    1164 =>
                        [
                            'city' => 'Flemming',
                            'code' => '8762',
                        ],
                    1165 =>
                        [
                            'city' => 'Rask Mølle',
                            'code' => '8763',
                        ],
                    1166 =>
                        [
                            'city' => 'Klovborg',
                            'code' => '8765',
                        ],
                    1167 =>
                        [
                            'city' => 'Nørre Snede',
                            'code' => '8766',
                        ],
                    1168 =>
                        [
                            'city' => 'Stenderup',
                            'code' => '8781',
                        ],
                    1169 =>
                        [
                            'city' => 'Hornsyld',
                            'code' => '8783',
                        ],
                    1170 =>
                        [
                            'city' => 'Viborg',
                            'code' => '8800',
                        ],
                    1171 =>
                        [
                            'city' => 'Tjele',
                            'code' => '8830',
                        ],
                    1172 =>
                        [
                            'city' => 'Løgstrup',
                            'code' => '8831',
                        ],
                    1173 =>
                        [
                            'city' => 'Skals',
                            'code' => '8832',
                        ],
                    1174 =>
                        [
                            'city' => 'Rødkærsbro',
                            'code' => '8840',
                        ],
                    1175 =>
                        [
                            'city' => 'Bjerringbro',
                            'code' => '8850',
                        ],
                    1176 =>
                        [
                            'city' => 'Ulstrup',
                            'code' => '8860',
                        ],
                    1177 =>
                        [
                            'city' => 'Langå',
                            'code' => '8870',
                        ],
                    1178 =>
                        [
                            'city' => 'Thorsø',
                            'code' => '8881',
                        ],
                    1179 =>
                        [
                            'city' => 'Fårvang',
                            'code' => '8882',
                        ],
                    1180 =>
                        [
                            'city' => 'Gjern',
                            'code' => '8883',
                        ],
                    1181 =>
                        [
                            'city' => 'Randers',
                            'code' => '8900',
                        ],
                    1182 =>
                        [
                            'city' => 'Ørsted',
                            'code' => '8950',
                        ],
                    1183 =>
                        [
                            'city' => 'Allingåbro',
                            'code' => '8961',
                        ],
                    1184 =>
                        [
                            'city' => 'Auning',
                            'code' => '8963',
                        ],
                    1185 =>
                        [
                            'city' => 'Havndal',
                            'code' => '8970',
                        ],
                    1186 =>
                        [
                            'city' => 'Spentrup',
                            'code' => '8981',
                        ],
                    1187 =>
                        [
                            'city' => 'Gjerlev J',
                            'code' => '8983',
                        ],
                    1188 =>
                        [
                            'city' => 'Fårup',
                            'code' => '8990',
                        ],
                    1189 =>
                        [
                            'city' => 'Aalborg',
                            'code' => '9000',
                        ],
                    1190 =>
                        [
                            'city' => 'Aalborg',
                            'code' => '9020',
                        ],
                    1191 =>
                        [
                            'city' => 'Aalborg',
                            'code' => '9029',
                        ],
                    1192 =>
                        [
                            'city' => 'Aalborg',
                            'code' => '9100',
                        ],
                    1193 =>
                        [
                            'city' => 'Aalborg SV',
                            'code' => '9200',
                        ],
                    1194 =>
                        [
                            'city' => 'Aalborg SØ',
                            'code' => '9210',
                        ],
                    1195 =>
                        [
                            'city' => 'Aalborg Øst',
                            'code' => '9220',
                        ],
                    1196 =>
                        [
                            'city' => 'Svenstrup J',
                            'code' => '9230',
                        ],
                    1197 =>
                        [
                            'city' => 'Nibe',
                            'code' => '9240',
                        ],
                    1198 =>
                        [
                            'city' => 'Gistrup',
                            'code' => '9260',
                        ],
                    1199 =>
                        [
                            'city' => 'Klarup',
                            'code' => '9270',
                        ],
                    1200 =>
                        [
                            'city' => 'Storvorde',
                            'code' => '9280',
                        ],
                    1201 =>
                        [
                            'city' => 'Kongerslev',
                            'code' => '9293',
                        ],
                    1202 =>
                        [
                            'city' => 'Sæby',
                            'code' => '9300',
                        ],
                    1203 =>
                        [
                            'city' => 'Vodskov',
                            'code' => '9310',
                        ],
                    1204 =>
                        [
                            'city' => 'Hjallerup',
                            'code' => '9320',
                        ],
                    1205 =>
                        [
                            'city' => 'Dronninglund',
                            'code' => '9330',
                        ],
                    1206 =>
                        [
                            'city' => 'Asaa',
                            'code' => '9340',
                        ],
                    1207 =>
                        [
                            'city' => 'Dybvad',
                            'code' => '9352',
                        ],
                    1208 =>
                        [
                            'city' => 'Gandrup',
                            'code' => '9362',
                        ],
                    1209 =>
                        [
                            'city' => 'Hals',
                            'code' => '9370',
                        ],
                    1210 =>
                        [
                            'city' => 'Vestbjerg',
                            'code' => '9380',
                        ],
                    1211 =>
                        [
                            'city' => 'Sulsted',
                            'code' => '9381',
                        ],
                    1212 =>
                        [
                            'city' => 'Tylstrup',
                            'code' => '9382',
                        ],
                    1213 =>
                        [
                            'city' => 'Nørresundby',
                            'code' => '9400',
                        ],
                    1214 =>
                        [
                            'city' => 'Vadum',
                            'code' => '9430',
                        ],
                    1215 =>
                        [
                            'city' => 'Aabybro',
                            'code' => '9440',
                        ],
                    1216 =>
                        [
                            'city' => 'Brovst',
                            'code' => '9460',
                        ],
                    1217 =>
                        [
                            'city' => 'Løkken',
                            'code' => '9480',
                        ],
                    1218 =>
                        [
                            'city' => 'Pandrup',
                            'code' => '9490',
                        ],
                    1219 =>
                        [
                            'city' => 'Blokhus',
                            'code' => '9492',
                        ],
                    1220 =>
                        [
                            'city' => 'Saltum',
                            'code' => '9493',
                        ],
                    1221 =>
                        [
                            'city' => 'Hobro',
                            'code' => '9500',
                        ],
                    1222 =>
                        [
                            'city' => 'Arden',
                            'code' => '9510',
                        ],
                    1223 =>
                        [
                            'city' => 'Skørping',
                            'code' => '9520',
                        ],
                    1224 =>
                        [
                            'city' => 'Støvring',
                            'code' => '9530',
                        ],
                    1225 =>
                        [
                            'city' => 'Suldrup',
                            'code' => '9541',
                        ],
                    1226 =>
                        [
                            'city' => 'Mariager',
                            'code' => '9550',
                        ],
                    1227 =>
                        [
                            'city' => 'Hadsund',
                            'code' => '9560',
                        ],
                    1228 =>
                        [
                            'city' => 'Bælum',
                            'code' => '9574',
                        ],
                    1229 =>
                        [
                            'city' => 'Terndrup',
                            'code' => '9575',
                        ],
                    1230 =>
                        [
                            'city' => 'Aars',
                            'code' => '9600',
                        ],
                    1231 =>
                        [
                            'city' => 'Nørager',
                            'code' => '9610',
                        ],
                    1232 =>
                        [
                            'city' => 'Aalestrup',
                            'code' => '9620',
                        ],
                    1233 =>
                        [
                            'city' => 'Gedsted',
                            'code' => '9631',
                        ],
                    1234 =>
                        [
                            'city' => 'Møldrup',
                            'code' => '9632',
                        ],
                    1235 =>
                        [
                            'city' => 'Farsø',
                            'code' => '9640',
                        ],
                    1236 =>
                        [
                            'city' => 'Løgstør',
                            'code' => '9670',
                        ],
                    1237 =>
                        [
                            'city' => 'Ranum',
                            'code' => '9681',
                        ],
                    1238 =>
                        [
                            'city' => 'Fjerritslev',
                            'code' => '9690',
                        ],
                    1239 =>
                        [
                            'city' => 'Brønderslev',
                            'code' => '9700',
                        ],
                    1240 =>
                        [
                            'city' => 'Jerslev J',
                            'code' => '9740',
                        ],
                    1241 =>
                        [
                            'city' => 'Østervrå',
                            'code' => '9750',
                        ],
                    1242 =>
                        [
                            'city' => 'Vrå',
                            'code' => '9760',
                        ],
                    1243 =>
                        [
                            'city' => 'Hjørring',
                            'code' => '9800',
                        ],
                    1244 =>
                        [
                            'city' => 'Tårs',
                            'code' => '9830',
                        ],
                    1245 =>
                        [
                            'city' => 'Hirtshals',
                            'code' => '9850',
                        ],
                    1246 =>
                        [
                            'city' => 'Sindal',
                            'code' => '9870',
                        ],
                    1247 =>
                        [
                            'city' => 'Bindslev',
                            'code' => '9881',
                        ],
                    1248 =>
                        [
                            'city' => 'Frederikshavn',
                            'code' => '9900',
                        ],
                    1249 =>
                        [
                            'city' => 'Læsø',
                            'code' => '9940',
                        ],
                    1250 =>
                        [
                            'city' => 'Strandby',
                            'code' => '9970',
                        ],
                    1251 =>
                        [
                            'city' => 'Jerup',
                            'code' => '9981',
                        ],
                    1252 =>
                        [
                            'city' => 'Ålbæk',
                            'code' => '9982',
                        ],
                    1253 =>
                        [
                            'city' => 'Skagen',
                            'code' => '9990',
                        ],
                ]]
        );
    }
}
