<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['id' => 1, 'name' => 'Afghanistan'],
            ['id' => 2, 'name' => 'Åland Islands'],
            ['id' => 3, 'name' => 'Albania'],
            ['id' => 4, 'name' => 'Algeria','image'=>'algeria.webp
            ','continent' => 'Africa', 'national_flag' => 'algeria.webp'],
            ['id' => 5, 'name' => 'American Samoa'],
            ['id' => 6, 'name' => 'Andorra'],
            ['id' => 7, 'name' => 'Angola'],
            ['id' => 8, 'name' => 'Anguilla'],
            ['id' => 9, 'name' => 'Antarctica'],
            ['id' => 10, 'name' => 'Antigua and Barbuda'],
            ['id' => 11, 'name' => 'Argentina','image'=>'argentina.webp
            ','continent' => 'America'],
            ['id' => 12, 'name' => 'Armenia'],
            ['id' => 13, 'name' => 'Aruba'],
            ['id' => 14, 'name' => 'Australia', 'image'=>'australia.webp
            ','continent' => 'Oceania', 'national_flag' => 'australia.webp'],
            ['id' => 15, 'name' => 'Austria'],
            ['id' => 16, 'name' => 'Azerbaijan'],
            ['id' => 17, 'name' => 'Bahamas'],
            ['id' => 18, 'name' => 'Bahrain','image'=>'bahrain.webp
            ','continent' => 'Asia', 'national_flag' => 'bahrain.webp'],
            ['id' => 19, 'name' => 'Bangladesh'],
            ['id' => 20, 'name' => 'Barbados'],
            ['id' => 21, 'name' => 'Belarus'],
            ['id' => 22, 'name' => 'Belgium','image'=>'belgium.webp
            ','continent' => 'Europe', 'national_flag' => 'belgium.webp'],
            ['id' => 23, 'name' => 'Belize'],
            ['id' => 24, 'name' => 'Benin'],
            ['id' => 25, 'name' => 'Bermuda'],
            ['id' => 26, 'name' => 'Bhutan','image'=>'bhutan.webp
            ','continent' => 'Asia', 'national_flag' => 'bhutan.webp'],
            ['id' => 27, 'name' => 'Bolivia, Plurinational State of'],
            ['id' => 28, 'name' => 'Bonaire, Sint Eustatius and Saba'],
            ['id' => 29, 'name' => 'Bosnia and Herzegovina'],
            ['id' => 30, 'name' => 'Botswana'],
            ['id' => 31, 'name' => 'Bouvet Island'],
            ['id' => 32, 'name' => 'Brazil','image'=>'brazil.webp
            ','continent' => 'America', 'national_flag' => 'brazil.webp'],
            ['id' => 33, 'name' => 'British Indian Ocean Territory'],
            ['id' => 34, 'name' => 'Brunei Darussalam'],
            ['id' => 35, 'name' => 'Bulgaria'],
            ['id' => 36, 'name' => 'Burkina Faso'],
            ['id' => 37, 'name' => 'Burundi'],
            ['id' => 38, 'name' => 'Cambodia'],
            ['id' => 39, 'name' => 'Cameroon'],
            ['id' => 40, 'name' => 'Canada','image'=>'canada.webp
            ','continent' => 'America', 'national_flag' => 'canada.webp'],
            ['id' => 41, 'name' => 'Cape Verde'],
            ['id' => 42, 'name' => 'Cayman Islands'],
            ['id' => 43, 'name' => 'Central African Republic'],
            ['id' => 44, 'name' => 'Chad'],
            ['id' => 45, 'name' => 'Chile'],
            ['id' => 46, 'name' => 'China','image'=>'china.webp
            ','continent' => 'Asia', 'national_flag' => 'china.webp'],
            ['id' => 47, 'name' => 'Christmas Island'],
            ['id' => 48, 'name' => 'Cocos (Keeling) Islands'],
            ['id' => 49, 'name' => 'Colombia'],
            ['id' => 50, 'name' => 'Comoros'],
            ['id' => 51, 'name' => 'Congo','image'=>'congo.webp
            ','continent' => 'Africa', 'national_flag' => 'congo.webp'],
            ['id' => 52, 'name' => 'Congo, the Democratic Republic of the'],
            ['id' => 53, 'name' => 'Cook Islands'],
            ['id' => 54, 'name' => 'Costa Rica'],
            ['id' => 55, 'name' => 'Côte d\'Ivoire'],
            ['id' => 56, 'name' => 'Croatia'],
            ['id' => 57, 'name' => 'Cuba','image'=>'cuba.webp
            ','continent' => 'America', 'national_flag' => 'cuba.webp'],
            ['id' => 58, 'name' => 'Curaçao'],
            ['id' => 59, 'name' => 'Cyprus'],
            ['id' => 60, 'name' => 'Czech','image'=>'czech.webp
            ','continent' => 'Europe', 'national_flag' => 'czech.webp'],
            ['id' => 61, 'name' => 'Denmark'],
            ['id' => 62, 'name' => 'Djibouti'],
            ['id' => 63, 'name' => 'Dominica'],
            ['id' => 64, 'name' => 'Dominican Republic'],
            ['id' => 65, 'name' => 'Ecuador'],
            ['id' => 66, 'name' => 'Egypt','image'=>'egypt.webp
            ','continent' => 'Africa', 'national_flag' => 'egypt.webp'],
            ['id' => 67, 'name' => 'El Salvador'],
            ['id' => 68, 'name' => 'Equatorial Guinea'],
            ['id' => 69, 'name' => 'Eritrea'],
            ['id' => 70, 'name' => 'Estonia'],
            ['id' => 71, 'name' => 'Ethiopia','image'=>'ethiopia.webp
            ','continent' => 'Africa', 'national_flag' => 'ethiopia.webp'],
            ['id' => 72, 'name' => 'Falkland Islands (Malvinas)'],
            ['id' => 73, 'name' => 'Faroe Islands'],
            ['id' => 74, 'name' => 'Fiji'],
            ['id' => 75, 'name' => 'Finland','image'=>'finland.webp
            ','continent' => 'Europe', 'national_flag' => 'finland.webp'],
            ['id' => 76, 'name' => 'France','image'=>'france.webp
            ','continent' => 'Europe', 'national_flag' => 'france.webp'],
            ['id' => 77, 'name' => 'French Guiana'],
            ['id' => 78, 'name' => 'French Polynesia'],
            ['id' => 79, 'name' => 'French Southern Territories'],
            ['id' => 80, 'name' => 'Gabon'],
            ['id' => 81, 'name' => 'Gambia'],
            ['id' => 82, 'name' => 'Georgia'],
            ['id' => 83, 'name' => 'Germany','image'=>'germany.webp
            ','continent' => 'Europe', 'national_flag' => 'germany.webp'],
            ['id' => 84, 'name' => 'Ghana'],
            ['id' => 85, 'name' => 'Gibraltar'],
            ['id' => 86, 'name' => 'Greece'],
            ['id' => 87, 'name' => 'Greenland'],
            ['id' => 88, 'name' => 'Grenada'],
            ['id' => 89, 'name' => 'Guadeloupe'],
            ['id' => 90, 'name' => 'Guam'],
            ['id' => 91, 'name' => 'Guatemala'],
            ['id' => 92, 'name' => 'Guernsey'],
            ['id' => 93, 'name' => 'Guinea'],
            ['id' => 94, 'name' => 'Guinea-Bissau'],
            ['id' => 95, 'name' => 'Guyana'],
            ['id' => 96, 'name' => 'Haiti'],
            ['id' => 97, 'name' => 'Heard Island and McDonald Mcdonald Islands'],
            ['id' => 98, 'name' => 'Holy See (Vatican City State)'],
            ['id' => 99, 'name' => 'Honduras'],
            ['id' => 100, 'name' => 'Hong Kong'],
            ['id' => 101, 'name' => 'Hungary'],
            ['id' => 102, 'name' => 'Iceland'],
            ['id' => 103, 'name' => 'India','image'=>'india.webp
            ','continent' => 'Asia', 'national_flag' => 'india.webp'],
            ['id' => 104, 'name' => 'Indonesia'],
            ['id' => 105, 'name' => 'Iran','image'=>'iran.webp
            ','continent' => 'Asia', 'national_flag' => 'iran.webp'],
            ['id' => 106, 'name' => 'Iraq'],
            ['id' => 107, 'name' => 'Ireland'],
            ['id' => 108, 'name' => 'Isle of Man'],
            ['id' => 109, 'name' => 'Israel','image'=>'israel.webp
            ','continent' => 'Asia', 'national_flag' => 'israel.webp'],
            ['id' => 110, 'name' => 'Italy','image'=>'italy.webp
            ','continent' => 'Europe', 'national_flag' => 'italy.webp'],
            ['id' => 111, 'name' => 'Jamaica'],
            ['id' => 112, 'name' => 'Japan','image'=>'japan.webp
            ','continent' => 'Asia', 'national_flag' => 'japan.webp'],
            ['id' => 113, 'name' => 'Jersey'],
            ['id' => 114, 'name' => 'Jordan'],
            ['id' => 115, 'name' => 'Kazakhstan'],
            ['id' => 116, 'name' => 'Kenya','image'=>'kenya.webp
            ','continent' => 'Africa', 'national_flag' => 'kenya.webp'],
            ['id' => 117, 'name' => 'Kiribati'],
            ['id' => 118, 'name' => 'Korea, Democratic People\'s Republic of'],
            ['id' => 119, 'name' => 'Korea','image'=>'korea.webp
            ','continent' => 'Asia', 'national_flag' => 'korea.webp'],
            ['id' => 120, 'name' => 'Kuwait'],
            ['id' => 121, 'name' => 'Kyrgyzstan'],
            ['id' => 122, 'name' => 'Lao People\'s Democratic Republic'],
            ['id' => 123, 'name' => 'Latvia'],
            ['id' => 124, 'name' => 'Lebanon'],
            ['id' => 125, 'name' => 'Lesotho'],
            ['id' => 126, 'name' => 'Liberia'],
            ['id' => 127, 'name' => 'Libya'],
            ['id' => 128, 'name' => 'Liechtenstein'],
            ['id' => 129, 'name' => 'Lithuania'],
            ['id' => 130, 'name' => 'Luxembourg'],
            ['id' => 131, 'name' => 'Macao'],
            ['id' => 132, 'name' => 'Macedonia','image'=>'macedonia.webp
            ','continent' => 'Europe', 'national_flag' => 'macedonia.webp'],
            ['id' => 133, 'name' => 'Madagascar'],
            ['id' => 134, 'name' => 'Malawi'],
            ['id' => 135, 'name' => 'Malaysia'],
            ['id' => 136, 'name' => 'Maldives'],
            ['id' => 137, 'name' => 'Mali'],
            ['id' => 138, 'name' => 'Malta'],
            ['id' => 139, 'name' => 'Marshall Islands'],
            ['id' => 140, 'name' => 'Martinique'],
            ['id' => 141, 'name' => 'Mauritania'],
            ['id' => 142, 'name' => 'Mauritius'],
            ['id' => 143, 'name' => 'Mayotte'],
            ['id' => 144, 'name' => 'Mexico','image'=>'mexico.webp
            ','continent' => 'America', 'national_flag' => 'mexico.webp'],
            ['id' => 145, 'name' => 'Micronesia, Federated States of'],
            ['id' => 146, 'name' => 'Moldova, Republic of'],
            ['id' => 147, 'name' => 'Monaco'],
            ['id' => 148, 'name' => 'Mongolia'],
            ['id' => 149, 'name' => 'Montenegro'],
            ['id' => 150, 'name' => 'Montserrat'],
            ['id' => 151, 'name' => 'Morocco'],
            ['id' => 152, 'name' => 'Mozambique','image'=>'mozambique.webp
            ','continent' => 'Africa', 'national_flag' => 'mozambique.webp'],
            ['id' => 153, 'name' => 'Myanmar'],
            ['id' => 154, 'name' => 'Namibia'],
            ['id' => 155, 'name' => 'Nauru'],
            ['id' => 156, 'name' => 'Nepal'],
            ['id' => 157, 'name' => 'Netherlands'],
            ['id' => 158, 'name' => 'New Caledonia'],
            ['id' => 159, 'name' => 'New Zealand','image'=>'newzealand.webp
            ','continent' => 'Oceania', 'national_flag' => 'newzealand.webp'],
            ['id' => 160, 'name' => 'Nicaragua'],
            ['id' => 161, 'name' => 'Niger'],
            ['id' => 162, 'name' => 'Nigeria'],
            ['id' => 163, 'name' => 'Niue'],
            ['id' => 164, 'name' => 'Norfolk Island'],
            ['id' => 165, 'name' => 'Northern Mariana Islands'],
            ['id' => 166, 'name' => 'Norway','image'=>'norway.webp
            ','continent' => 'Europe', 'national_flag' => 'norway.webp'],
            ['id' => 167, 'name' => 'Oman'],
            ['id' => 168, 'name' => 'Pakistan','image'=>'pakistan.webp
            ','continent' => 'Asia', 'national_flag' => 'pakistan.pakistan.webp'],
            ['id' => 169, 'name' => 'Palau'],
            ['id' => 170, 'name' => 'Palestine, State of'],
            ['id' => 171, 'name' => 'Panama','image'=>'panama.webp
            ','continent' => 'America', 'national_flag' => 'panama.webp'],
            ['id' => 172, 'name' => 'Papua New Guinea'],
            ['id' => 173, 'name' => 'Paraguay'],
            ['id' => 174, 'name' => 'Peru'],
            ['id' => 175, 'name' => 'Philippines','image'=>'philippines.webp
            ','continent' => 'Asia', 'national_flag' => 'philippines.webp'],
            ['id' => 176, 'name' => 'Pitcairn'],
            ['id' => 177, 'name' => 'Poland','image'=>'poland.webp
            ','continent' => 'Europe', 'national_flag' => 'poland.webp'],
            ['id' => 178, 'name' => 'Portugal','image'=>'portugal.webp
            ','continent' => 'Europe', 'national_flag' => 'portugal.webp'],
            ['id' => 179, 'name' => 'Puerto Rico'],
            ['id' => 180, 'name' => 'Qatar'],
            ['id' => 181, 'name' => 'Réunion'],
            ['id' => 182, 'name' => 'Romania'],
            ['id' => 183, 'name' => 'Russia','image'=>'russia.webp
            ','continent' => 'Europe', 'national_flag' => 'russia.webp'],
            ['id' => 184, 'name' => 'Rwanda'],
            ['id' => 185, 'name' => 'Saint Barthélemy'],
            ['id' => 186, 'name' => 'Saint Helena, Ascension and Tristan da Cunha'],
            ['id' => 187, 'name' => 'Saint Kitts and Nevis'],
            ['id' => 188, 'name' => 'Saint Lucia'],
            ['id' => 189, 'name' => 'Saint Martin (French part)'],
            ['id' => 190, 'name' => 'Saint Pierre and Miquelon'],
            ['id' => 191, 'name' => 'Saint Vincent and the Grenadines'],
            ['id' => 192, 'name' => 'Samoa'],
            ['id' => 193, 'name' => 'San Marino'],
            ['id' => 194, 'name' => 'Sao Tome and Principe'],
            ['id' => 195, 'name' => 'Saudi Arabia'],
            ['id' => 196, 'name' => 'Senegal'],
            ['id' => 197, 'name' => 'Serbia'],
            ['id' => 198, 'name' => 'Seychelles'],
            ['id' => 199, 'name' => 'Sierra Leone'],
            ['id' => 200, 'name' => 'Singapore'],
            ['id' => 201, 'name' => 'Sint Maarten (Dutch part)'],
            ['id' => 202, 'name' => 'Slovakia'],
            ['id' => 203, 'name' => 'Slovenia'],
            ['id' => 204, 'name' => 'Solomon Islands'],
            ['id' => 205, 'name' => 'Somalia','image'=>'somalia.webp
            ','continent' => 'Africa', 'national_flag' => 'somalia.webp'],
            ['id' => 206, 'name' => 'South Africa','image'=>'southafrica.webp
            ','continent'=>'Africa', 'national_flag' => 'southafrica.webp'],
            ['id' => 207, 'name' => 'South Georgia and the South Sandwich Islands'],
            ['id' => 208, 'name' => 'South Sudan'],
            ['id' => 209, 'name' => 'Spain','image'=>'spain.webp
            ','continent' => 'Europe', 'national_flag' => 'spain.webp'],
            ['id' => 210, 'name' => 'Sri Lanka'],
            ['id' => 211, 'name' => 'Sudan','image'=>'sudan.webp
            ','continent' => 'Africa', 'national_flag' => 'sudan.webp'],
            ['id' => 212, 'name' => 'Suriname'],
            ['id' => 213, 'name' => 'Svalbard and Jan Mayen'],
            ['id' => 214, 'name' => 'Swaziland'],
            ['id' => 215, 'name' => 'Sweden','image'=>'sweden.webp
            ','continent' => 'Europe', 'national_flag' => 'sweden.webp'],
            ['id' => 216, 'name' => 'Switzerland'],
            ['id' => 217, 'name' => 'Syrian Arab Republic'],
            ['id' => 218, 'name' => 'Taiwan'],
            ['id' => 219, 'name' => 'Tajikistan'],
            ['id' => 220, 'name' => 'Tanzania, United Republic of'],
            ['id' => 221, 'name' => 'Thailand','image'=>'thailand.webp
            ','continent' => 'Asia', 'national_flag' => 'thailand.webp'],
            ['id' => 222, 'name' => 'Timor-Leste'],
            ['id' => 223, 'name' => 'Togo'],
            ['id' => 224, 'name' => 'Tokelau'],
            ['id' => 225, 'name' => 'Tonga'],
            ['id' => 226, 'name' => 'Trinidad an2d Tobago'],
            ['id' => 227, 'name' => 'Tunisia'],
            ['id' => 228, 'name' => 'Turkey','image'=>'turkey.webp
            ','continent' => 'Asia', 'national_flag' => 'turkey.webp'],
            ['id' => 229, 'name' => 'Turkmenistan'],
            ['id' => 230, 'name' => 'Turks and Caicos Islands'],
            ['id' => 231, 'name' => 'Tuvalu'],
            ['id' => 232, 'name' => 'Uganda'],
            ['id' => 233, 'name' => 'Ukraine','image'=>'ukraine.webp
            '],
            ['id' => 234, 'name' => 'United Arab Emirates'],
            ['id' => 235, 'name' => 'UK','image'=>'uk.webp', 'continent' => 'Europe', 'national_flag' => 'uk.webp'],
            ['id' => 236, 'name' => 'US','image'=>'america.webp','continent' => 'America', 'national_flag' => 'us.webp'],
            ['id' => 237, 'name' => 'United States Minor Outlying Islands'],
            ['id' => 238, 'name' => 'Uruguay'],
            ['id' => 239, 'name' => 'Uzbekistan'],
            ['id' => 240, 'name' => 'Vanuatu'],
            ['id' => 241, 'name' => 'Venezuela, Bolivarian Republic of'],
            ['id' => 242, 'name' => 'Viet Nam','image'=>'vietnam.webp
            ','continent' => 'Asia', 'national_flag' => 'vietnam.webp'],
            ['id' => 243, 'name' => 'Virgin Islands, British'],
            ['id' => 244, 'name' => 'Virgin Islands, U.S.'],
            ['id' => 245, 'name' => 'Wallis and Futuna'],
            ['id' => 246, 'name' => 'Western Sahara'],
            ['id' => 247, 'name' => 'Yemen'],
            ['id' => 248, 'name' => 'Zambia'],
            ['id' => 249, 'name' => 'Zimbabwe'],
        ];

        foreach($countries as $key=>$value){
            Country::create($value);
            }
    }
}
