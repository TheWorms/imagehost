<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->char('code', 2);
            $table->string('country');
            $table->char('continent', 4);
        });

        DB::unprepared("INSERT INTO `countries` (`code`, `country`, `continent`) VALUES
('AF', 'Afghanistan', 'AS'),
('AX', 'Aland Islands', 'EU'),
('AL', 'Albania', 'EU'),
('DZ', 'Algeria', 'AF'),
('AS', 'American Samoa', 'OC'),
('AD', 'Andorra', 'EU'),
('AO', 'Angola', 'AF'),
('AI', 'Anguilla', 'NA'),
('AQ', 'Antarctica', 'AN'),
('AG', 'Antigua and Barbuda', 'NA'),
('AR', 'Argentina', 'SA'),
('AM', 'Armenia', 'AS'),
('AW', 'Aruba', 'NA'),
('AU', 'Australia', 'OC'),
('AT', 'Austria', 'EU'),
('AZ', 'Azerbaijan', 'AS'),
('BS', 'Bahamas', 'NA'),
('BH', 'Bahrain', 'AS'),
('BD', 'Bangladesh', 'AS'),
('BB', 'Barbados', 'NA'),
('BY', 'Belarus', 'EU'),
('BE', 'Belgium', 'EU'),
('BZ', 'Belize', 'NA'),
('BJ', 'Benin', 'AF'),
('BM', 'Bermuda', 'NA'),
('BT', 'Bhutan', 'AS'),
('BO', 'Bolivia', 'SA'),
('BQ', 'Bonaire, Saint Eustatius and Saba ', 'NA'),
('BA', 'Bosnia and Herzegovina', 'EU'),
('BW', 'Botswana', 'AF'),
('BV', 'Bouvet Island', 'AN'),
('BR', 'Brazil', 'SA'),
('IO', 'British Indian Ocean Territory', 'AS'),
('VG', 'British Virgin Islands', 'NA'),
('BN', 'Brunei', 'AS'),
('BG', 'Bulgaria', 'EU'),
('BF', 'Burkina Faso', 'AF'),
('BI', 'Burundi', 'AF'),
('KH', 'Cambodia', 'AS'),
('CM', 'Cameroon', 'AF'),
('CA', 'Canada', 'NA'),
('CV', 'Cape Verde', 'AF'),
('KY', 'Cayman Islands', 'NA'),
('CF', 'Central African Republic', 'AF'),
('TD', 'Chad', 'AF'),
('CL', 'Chile', 'SA'),
('CN', 'China', 'AS'),
('CX', 'Christmas Island', 'AS'),
('CC', 'Cocos Islands', 'AS'),
('CO', 'Colombia', 'SA'),
('KM', 'Comoros', 'AF'),
('CK', 'Cook Islands', 'OC'),
('CR', 'Costa Rica', 'NA'),
('HR', 'Croatia', 'EU'),
('CU', 'Cuba', 'NA'),
('CW', 'Curacao', 'NA'),
('CY', 'Cyprus', 'EU'),
('CZ', 'Czech Republic', 'EU'),
('CD', 'Democratic Republic of the Congo', 'AF'),
('DK', 'Denmark', 'EU'),
('DJ', 'Djibouti', 'AF'),
('DM', 'Dominica', 'NA'),
('DO', 'Dominican Republic', 'NA'),
('TL', 'East Timor', 'OC'),
('EC', 'Ecuador', 'SA'),
('EG', 'Egypt', 'AF'),
('SV', 'El Salvador', 'NA'),
('GQ', 'Equatorial Guinea', 'AF'),
('ER', 'Eritrea', 'AF'),
('EE', 'Estonia', 'EU'),
('ET', 'Ethiopia', 'AF'),
('FK', 'Falkland Islands', 'SA'),
('FO', 'Faroe Islands', 'EU'),
('FJ', 'Fiji', 'OC'),
('FI', 'Finland', 'EU'),
('FR', 'France', 'EU'),
('GF', 'French Guiana', 'SA'),
('PF', 'French Polynesia', 'OC'),
('TF', 'French Southern Territories', 'AN'),
('GA', 'Gabon', 'AF'),
('GM', 'Gambia', 'AF'),
('GE', 'Georgia', 'AS'),
('DE', 'Germany', 'EU'),
('GH', 'Ghana', 'AF'),
('GI', 'Gibraltar', 'EU'),
('GR', 'Greece', 'EU'),
('GL', 'Greenland', 'NA'),
('GD', 'Grenada', 'NA'),
('GP', 'Guadeloupe', 'NA'),
('GU', 'Guam', 'OC'),
('GT', 'Guatemala', 'NA'),
('GG', 'Guernsey', 'EU'),
('GN', 'Guinea', 'AF'),
('GW', 'GuineaBissau', 'AF'),
('GY', 'Guyana', 'SA'),
('HT', 'Haiti', 'NA'),
('HM', 'Heard Island and McDonald Islands', 'AN'),
('HN', 'Honduras', 'NA'),
('HK', 'Hong Kong', 'AS'),
('HU', 'Hungary', 'EU'),
('IS', 'Iceland', 'EU'),
('IN', 'India', 'AS'),
('ID', 'Indonesia', 'AS'),
('IR', 'Iran', 'AS'),
('IQ', 'Iraq', 'AS'),
('IE', 'Ireland', 'EU'),
('IM', 'Isle of Man', 'EU'),
('IL', 'Israel', 'AS'),
('IT', 'Italy', 'EU'),
('CI', 'Ivory Coast', 'AF'),
('JM', 'Jamaica', 'NA'),
('JP', 'Japan', 'AS'),
('JE', 'Jersey', 'EU'),
('JO', 'Jordan', 'AS'),
('KZ', 'Kazakhstan', 'AS'),
('KE', 'Kenya', 'AF'),
('KI', 'Kiribati', 'OC'),
('XK', 'Kosovo', 'EU'),
('KW', 'Kuwait', 'AS'),
('KG', 'Kyrgyzstan', 'AS'),
('LA', 'Laos', 'AS'),
('LV', 'Latvia', 'EU'),
('LB', 'Lebanon', 'AS'),
('LS', 'Lesotho', 'AF'),
('LR', 'Liberia', 'AF'),
('LY', 'Libya', 'AF'),
('LI', 'Liechtenstein', 'EU'),
('LT', 'Lithuania', 'EU'),
('LU', 'Luxembourg', 'EU'),
('MO', 'Macao', 'AS'),
('MK', 'Macedonia', 'EU'),
('MG', 'Madagascar', 'AF'),
('MW', 'Malawi', 'AF'),
('MY', 'Malaysia', 'AS'),
('MV', 'Maldives', 'AS'),
('ML', 'Mali', 'AF'),
('MT', 'Malta', 'EU'),
('MH', 'Marshall Islands', 'OC'),
('MQ', 'Martinique', 'NA'),
('MR', 'Mauritania', 'AF'),
('MU', 'Mauritius', 'AF'),
('YT', 'Mayotte', 'AF'),
('MX', 'Mexico', 'NA'),
('FM', 'Micronesia', 'OC'),
('MD', 'Moldova', 'EU'),
('MC', 'Monaco', 'EU'),
('MN', 'Mongolia', 'AS'),
('ME', 'Montenegro', 'EU'),
('MS', 'Montserrat', 'NA'),
('MA', 'Morocco', 'AF'),
('MZ', 'Mozambique', 'AF'),
('MM', 'Myanmar', 'AS'),
('NA', 'Namibia', 'AF'),
('NR', 'Nauru', 'OC'),
('NP', 'Nepal', 'AS'),
('NL', 'Netherlands', 'EU'),
('AN', 'Netherlands Antilles', 'NA'),
('NC', 'New Caledonia', 'OC'),
('NZ', 'New Zealand', 'OC'),
('NI', 'Nicaragua', 'NA'),
('NE', 'Niger', 'AF'),
('NG', 'Nigeria', 'AF'),
('NU', 'Niue', 'OC'),
('NF', 'Norfolk Island', 'OC'),
('KP', 'North Korea', 'AS'),
('MP', 'Northern Mariana Islands', 'OC'),
('NO', 'Norway', 'EU'),
('OM', 'Oman', 'AS'),
('PK', 'Pakistan', 'AS'),
('PW', 'Palau', 'OC'),
('PS', 'Palestinian Territory', 'AS'),
('PA', 'Panama', 'NA'),
('PG', 'Papua New Guinea', 'OC'),
('PY', 'Paraguay', 'SA'),
('PE', 'Peru', 'SA'),
('PH', 'Philippines', 'AS'),
('PN', 'Pitcairn', 'OC'),
('PL', 'Poland', 'EU'),
('PT', 'Portugal', 'EU'),
('PR', 'Puerto Rico', 'NA'),
('QA', 'Qatar', 'AS'),
('CG', 'Republic of the Congo', 'AF'),
('RE', 'Reunion', 'AF'),
('RO', 'Romania', 'EU'),
('RU', 'Russia', 'EU'),
('RW', 'Rwanda', 'AF'),
('BL', 'Saint Barthelemy', 'NA'),
('SH', 'Saint Helena', 'AF'),
('KN', 'Saint Kitts and Nevis', 'NA'),
('LC', 'Saint Lucia', 'NA'),
('MF', 'Saint Martin', 'NA'),
('PM', 'Saint Pierre and Miquelon', 'NA'),
('VC', 'Saint Vincent and the Grenadines', 'NA'),
('WS', 'Samoa', 'OC'),
('SM', 'San Marino', 'EU'),
('ST', 'Sao Tome and Principe', 'AF'),
('SA', 'Saudi Arabia', 'AS'),
('SN', 'Senegal', 'AF'),
('RS', 'Serbia', 'EU'),
('CS', 'Serbia and Montenegro', 'EU'),
('SC', 'Seychelles', 'AF'),
('SL', 'Sierra Leone', 'AF'),
('SG', 'Singapore', 'AS'),
('SX', 'Sint Maarten', 'NA'),
('SK', 'Slovakia', 'EU'),
('SI', 'Slovenia', 'EU'),
('SB', 'Solomon Islands', 'OC'),
('SO', 'Somalia', 'AF'),
('ZA', 'South Africa', 'AF'),
('GS', 'South Georgia and the South Sandwich Islands', 'AN'),
('KR', 'South Korea', 'AS'),
('SS', 'South Sudan', 'AF'),
('ES', 'Spain', 'EU'),
('LK', 'Sri Lanka', 'AS'),
('SD', 'Sudan', 'AF'),
('SR', 'Suriname', 'SA'),
('SJ', 'Svalbard and Jan Mayen', 'EU'),
('SZ', 'Swaziland', 'AF'),
('SE', 'Sweden', 'EU'),
('CH', 'Switzerland', 'EU'),
('SY', 'Syria', 'AS'),
('TW', 'Taiwan', 'AS'),
('TJ', 'Tajikistan', 'AS'),
('TZ', 'Tanzania', 'AF'),
('TH', 'Thailand', 'AS'),
('TG', 'Togo', 'AF'),
('TK', 'Tokelau', 'OC'),
('TO', 'Tonga', 'OC'),
('TT', 'Trinidad and Tobago', 'NA'),
('TN', 'Tunisia', 'AF'),
('TR', 'Turkey', 'AS'),
('TM', 'Turkmenistan', 'AS'),
('TC', 'Turks and Caicos Islands', 'NA'),
('TV', 'Tuvalu', 'OC'),
('VI', 'U.S. Virgin Islands', 'NA'),
('UG', 'Uganda', 'AF'),
('UA', 'Ukraine', 'EU'),
('AE', 'United Arab Emirates', 'AS'),
('GB', 'United Kingdom', 'EU'),
('US', 'United States', 'NA'),
('UM', 'United States Minor Outlying Islands', 'OC'),
('UY', 'Uruguay', 'SA'),
('UZ', 'Uzbekistan', 'AS'),
('VU', 'Vanuatu', 'OC'),
('VA', 'Vatican', 'EU'),
('VE', 'Venezuela', 'SA'),
('VN', 'Vietnam', 'AS'),
('WF', 'Wallis and Futuna', 'OC'),
('EH', 'Western Sahara', 'AF'),
('YE', 'Yemen', 'AS'),
('ZM', 'Zambia', 'AF'),
('ZW', 'Zimbabwe', 'AF');
");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
