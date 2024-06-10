<?php

namespace Database\Seeders;

use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['countrycode' => 'DZA', 'countryname' => 'Algeria', 'code' => 'DZ'],
            ['countrycode' => 'AGO', 'countryname' => 'Angola', 'code' => 'AO'],
            ['countrycode' => 'BEN', 'countryname' => 'Benin', 'code' => 'BJ'],
            ['countrycode' => 'BWA', 'countryname' => 'Botswana', 'code' => 'BW'],
            ['countrycode' => 'BFA', 'countryname' => 'Burkina Faso', 'code' => 'BF'],
            ['countrycode' => 'BDI', 'countryname' => 'Burundi', 'code' => 'BI'],
            ['countrycode' => 'CPV', 'countryname' => 'Cape Verde', 'code' => 'CV'],
            ['countrycode' => 'CMR', 'countryname' => 'Cameroon', 'code' => 'CM'],
            ['countrycode' => 'CAF', 'countryname' => 'Central African Republic', 'code' => 'CF'],
            ['countrycode' => 'TCD', 'countryname' => 'Chad', 'code' => 'TD'],
            ['countrycode' => 'COM', 'countryname' => 'Comoros', 'code' => 'KM'],
            ['countrycode' => 'COG', 'countryname' => 'Republic of the Congo', 'code' => 'CG'],
            ['countrycode' => 'COD', 'countryname' => 'Democratic Republic of the Congo', 'code' => 'CD'],
            ['countrycode' => 'DJI', 'countryname' => 'Djibouti', 'code' => 'DJ'],
            ['countrycode' => 'EGY', 'countryname' => 'Egypt', 'code' => 'EG'],
            ['countrycode' => 'GNQ', 'countryname' => 'Equatorial Guinea', 'code' => 'GQ'],
            ['countrycode' => 'ERI', 'countryname' => 'Eritrea', 'code' => 'ER'],
            ['countrycode' => 'SWZ', 'countryname' => 'Eswatini', 'code' => 'SZ'],
            ['countrycode' => 'ETH', 'countryname' => 'Ethiopia', 'code' => 'ET'],
            ['countrycode' => 'GAB', 'countryname' => 'Gabon', 'code' => 'GA'],
            ['countrycode' => 'GMB', 'countryname' => 'Gambia', 'code' => 'GM'],
            ['countrycode' => 'GHA', 'countryname' => 'Ghana', 'code' => 'GH'],
            ['countrycode' => 'GIN', 'countryname' => 'Guinea', 'code' => 'GN'],
            ['countrycode' => 'GNB', 'countryname' => 'Guinea-Bissau', 'code' => 'GW'],
            ['countrycode' => 'CIV', 'countryname' => 'Ivory Coast', 'code' => 'CI'],
            ['countrycode' => 'KEN', 'countryname' => 'Kenya', 'code' => 'KE'],
            ['countrycode' => 'LSO', 'countryname' => 'Lesotho', 'code' => 'LS'],
            ['countrycode' => 'LBR', 'countryname' => 'Liberia', 'code' => 'LR'],
            ['countrycode' => 'LBY', 'countryname' => 'Libya', 'code' => 'LY'],
            ['countrycode' => 'MDG', 'countryname' => 'Madagascar', 'code' => 'MG'],
            ['countrycode' => 'MWI', 'countryname' => 'Malawi', 'code' => 'MW'],
            ['countrycode' => 'MLI', 'countryname' => 'Mali', 'code' => 'ML'],
            ['countrycode' => 'MRT', 'countryname' => 'Mauritania', 'code' => 'MR'],
            ['countrycode' => 'MUS', 'countryname' => 'Mauritius', 'code' => 'MU'],
            ['countrycode' => 'MYT', 'countryname' => 'Mayotte', 'code' => 'YT'],
            ['countrycode' => 'MAR', 'countryname' => 'Morocco', 'code' => 'MA'],
            ['countrycode' => 'MOZ', 'countryname' => 'Mozambique', 'code' => 'MZ'],
            ['countrycode' => 'NAM', 'countryname' => 'Namibia', 'code' => 'NA'],
            ['countrycode' => 'NER', 'countryname' => 'Niger', 'code' => 'NE'],
            ['countrycode' => 'NGA', 'countryname' => 'Nigeria', 'code' => 'NG'],
            ['countrycode' => 'REU', 'countryname' => 'Réunion', 'code' => 'RE'],
            ['countrycode' => 'RWA', 'countryname' => 'Rwanda', 'code' => 'RW'],
            ['countrycode' => 'STP', 'countryname' => 'São Tomé and Príncipe', 'code' => 'ST'],
            ['countrycode' => 'SEN', 'countryname' => 'Senegal', 'code' => 'SN'],
            ['countrycode' => 'SYC', 'countryname' => 'Seychelles', 'code' => 'SC'],
            ['countrycode' => 'SLE', 'countryname' => 'Sierra Leone', 'code' => 'SL'],
            ['countrycode' => 'SOM', 'countryname' => 'Somalia', 'code' => 'SO'],
            ['countrycode' => 'ZAF', 'countryname' => 'South Africa', 'code' => 'ZA'],
            ['countrycode' => 'SSD', 'countryname' => 'South Sudan', 'code' => 'SS'],
            ['countrycode' => 'SDN', 'countryname' => 'Sudan', 'code' => 'SD'],
            ['countrycode' => 'TZA', 'countryname' => 'Tanzania', 'code' => 'TZ'],
            ['countrycode' => 'TGO', 'countryname' => 'Togo', 'code' => 'TG'],
            ['countrycode' => 'TUN', 'countryname' => 'Tunisia', 'code' => 'TN'],
            ['countrycode' => 'UGA', 'countryname' => 'Uganda', 'code' => 'UG'],
            ['countrycode' => 'ESH', 'countryname' => 'Western Sahara', 'code' => 'EH'],
            ['countrycode' => 'ZMB', 'countryname' => 'Zambia', 'code' => 'ZM'],
            ['countrycode' => 'ZWE', 'countryname' => 'Zimbabwe', 'code' => 'ZW'],
        ];

        country::insert($countries);
    }
}
