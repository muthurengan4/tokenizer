<?php

if (!function_exists('get_country_select_box')) {

    function get_country_select_box($name = '', $class = '', $id = '', $selected_value = '')
    {
        $currencies_data = '{"AUD":"Australia Dollar","GBP":"Great Britain Pound","EUR":"Euro","JPY":"Japan Yen","CHF":"Switzerland Franc","USD":"USA Dollar","AFN":"Afghanistan Afghani","ALL":"Albania Lek","DZD":"Algeria Dinar","AOA":"Angola Kwanza","ARS":"Argentina Peso","AMD":"Armenia Dram","AWG":"Aruba Florin","ATS (EURO)":"Austria Schilling","BEF (EURO)":"Belgium Franc","AZN":"Azerbaijan New Manat","BSD":"Bahamas Dollar","BHD":"Bahrain Dinar","BDT":"Bangladesh Taka","BBD":"Barbados Dollar","BYR":"Belarus Ruble","BZD":"Belize Dollar","BMD":"Bermuda Dollar","BTN":"Bhutan Ngultrum","BOB":"Bolivia Boliviano","BAM":"Bosnia Mark","BWP":"Botswana Pula","BRL":"Brazil Real","BND":"Brunei Dollar","BGN":"Bulgaria Lev","BIF":"Burundi Franc","XOF":"CFA Franc BCEAO","XAF":"CFA Franc BEAC","XPF":"CFP Franc","KHR":"Cambodia Riel","CAD":"Canada Dollar","CVE":"Cape Verde Escudo","KYD":"Cayman Islands Dollar","CLP":"Chili Peso","CNY":"China Yuan/Renminbi","COP":"Colombia Peso","KMF":"Comoros Franc","CDF":"Congo Franc","CRC":"Costa Rica Colon","HRK":"Croatia Kuna","CUC":"Cuba Convertible Peso","CUP":"Cuba Peso","CYP (EURO)":"Cyprus Pound","CZK":"Czech Koruna","DKK":"Denmark Krone","DJF":"Djibouti Franc","DOP":"Dominican Republich Peso","XCD":"East Caribbean Dollar","EGP":"Egypt Pound","SVC":"El Salvador Colon","EEK (EURO)":"Estonia Kroon","ETB":"Ethiopia Birr","FKP":"Falkland Islands Pound","FIM (EURO)":"Finland Markka","FJD":"Fiji Dollar","GMD":"Gambia Dalasi","GEL":"Georgia Lari","DMK (EURO)":"Germany Mark","GHS":"Ghana New Cedi","GIP":"Gibraltar Pound","GRD (EURO)":"Greece Drachma","GTQ":"Guatemala Quetzal","GNF":"Guinea Franc","GYD":"Guyana Dollar","HTG":"Haiti Gourde","HNL":"Honduras Lempira","HKD":"Hong Kong Dollar","HUF":"Hungary Forint","ISK":"Iceland Krona","INR":"India Rupee","IDR":"Indonesia Rupiah","IRR":"Iran Rial","IQD":"Iraq Dinar","IED (EURO)":"Ireland Pound","ILS":"Israel New Shekel","ITL (EURO)":"Italy Lira","JMD":"Jamaica Dollar","JOD":"Jordan Dinar","KZT":"Kazakhstan Tenge","KES":"Kenya Shilling","KWD":"Kuwait Dinar","KGS":"Kyrgyzstan Som","LAK":"Laos Kip","LVL (EURO)":"Latvia Lats","LBP":"Lebanon Pound","LSL":"Lesotho Loti","LRD":"Liberia Dollar","LYD":"Libya Dinar","LTL (EURO)":"Lithuania Litas","LUF (EURO)":"Luxembourg Franc","MOP":"Macau Pataca","MKD":"Macedonia Denar","MGA":"Malagasy Ariary","MWK":"Malawi Kwacha","MYR":"Malaysia Ringgit","MVR":"Maldives Rufiyaa","MTL (EURO)":"Malta Lira","MRO":"Mauritania Ouguiya","MUR":"Mauritius Rupee","MXN":"Mexico Peso","MDL":"Moldova Leu","MNT":"Mongolia Tugrik","MAD":"Morocco Dirham","MZN":"Mozambique New Metical","MMK":"Myanmar Kyat","ANG":"NL Antilles Guilder","NAD":"Namibia Dollar","NPR":"Nepal Rupee","NLG (EURO)":"Netherlands Guilder","NZD":"New Zealand Dollar","NIO":"Nicaragua Cordoba Oro","NGN":"Nigeria Naira","KPW":"North Korea Won","NOK":"Norway Kroner","OMR":"Oman Rial","PKR":"Pakistan Rupee","PAB":"Panama Balboa","PGK":"Papua New Guinea Kina","PYG":"Paraguay Guarani","PEN":"Peru Nuevo Sol","PHP":"Philippines Peso","PLN":"Poland Zloty","PTE (EURO)":"Portugal Escudo","QAR":"Qatar Rial","RON":"Romania New Lei","RUB":"Russia Rouble","RWF":"Rwanda Franc","WST":"Samoa Tala","STD":"Sao Tome/Principe Dobra","SAR":"Saudi Arabia Riyal","RSD":"Serbia Dinar","SCR":"Seychelles Rupee","SLL":"Sierra Leone Leone","SGD":"Singapore Dollar","SKK (EURO)":"Slovakia Koruna","SIT (EURO)":"Slovenia Tolar","SBD":"Solomon Islands Dollar","SOS":"Somali Shilling","ZAR":"South Africa Rand","KRW":"South Korea Won","ESP (EURO)":"Spain Peseta","LKR":"Sri Lanka Rupee","SHP":"St Helena Pound","SDG":"Sudan Pound","SRD":"Suriname Dollar","SZL":"Swaziland Lilangeni","SEK":"Sweden Krona","SYP":"Syria Pound","TWD":"Taiwan Dollar","TZS":"Tanzania Shilling","THB":"Thailand Baht","TOP":"Tonga Pa\'anga","TTD":"Trinidad/Tobago Dollar","TND":"Tunisia Dinar","TRY":"Turkish New Lira","TMM":"Turkmenistan Manat","UGX":"Uganda Shilling","UAH":"Ukraine Hryvnia","UYU":"Uruguay Peso","AED":"United Arab Emirates Dirham","VUV":"Vanuatu Vatu","VEB":"Venezuela Bolivar","VND":"Vietnam Dong","YER":"Yemen Rial","ZMK":"Zambia Kwacha","ZWD":"Zimbabwe Dollar"}';
        $currencies_data = json_decode($currencies_data);
        $selected_value = $selected_value === '' ? 'USD' : $selected_value;
        return Form::select($name, $currencies_data, $selected_value, ['class' => $class, 'id' => $id]);
    }
}

if (!function_exists('get_crypto_coin_select_box')) {
    function get_crypto_coin_select_box($name = '', $class = '', $id = '', $selected_value = '')
    {
        $crypto_coin = get_crypto_coins();
        return Form::select($name, $crypto_coin, $selected_value, ['class' => 'form-control', 'id' => $id]);
    }
}
if (!function_exists('get_crypto_coins')) {
    function get_crypto_coins()
    {
        return array(
            'ETH' => 'Ethereum(Recommended)',
            'XLM' => 'Stellar',
            'BTC' => 'Bitcoin',
            'LTC' => 'LiteCoin',
        );
    }
}
if (!function_exists('get_start_letter_drop_down')) {
    function get_start_letter_drop_down($name, $selected_value="")
    {
        $array = array('A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D',
            'E' => 'E',
            'F' => 'F',
            'G' => 'G',
            'H' => 'H',
            'I' => 'I',
            'J' => 'J',
            'K' => 'K',
            'L' => 'L',
            'M' => 'M',
            'N' => 'N',
            'O' => 'O',
            'P' => 'P',
            'Q' => 'Q',
            'R' => 'R',
            'S' => 'S',
            'T' => 'T',
            'U' => 'U',
            'V' => 'V',
            'W' => 'W',
            'X' => 'X',
            'Y' => 'Y',
            'Z' => 'Z',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',
            '0' => '0'
        );
        return Form::select($name, $array, $selected_value, ['class' => 'form-control']);

    }
}
