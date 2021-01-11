<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            0 => [
                'id' => 1,
                'name' => 'OSEC - Office of the Secretary',
                'acronym' => 'OSEC',
                'address' => '',
                'agency_head_name' => 'William D. Dar',
                'agency_head_designation' => 'Secretary',
                'telephone_number' => '',
                'fax_number' => '',
                'email' => 'w.dar38@yahoo.com',
                'operating_unit_id' => 1
            ],
            1 => [
                'id' => 2,
                'name' => 'RFO CAR - Cordillera Administrative Region',
                'acronym' => 'RFO CAR',
                'address' => '',
                'agency_head_name' => 'Cameron P. Odsey',
                'agency_head_designation' => 'OIC - RED',
                'telephone_number' => 'CISCO-1419 (074) 445-4973 / (074) 423-4621',
                'fax_number' => '(074) 445-4973',
                'email' => 'pmed3fdacar@yahoo.com',
                'operating_unit_id' => 9,
            ],
            2 => [
                'id' => 3,
                'name' => 'RFO I - Ilocos Region',
                'acronym' => 'RFO 1',
                'address' => '',
                'agency_head_name' => 'Lucresio R. Alviar, Jr.',
                'agency_head_designation' => 'Regional Executive Director',
                'telephone_number' => '(072)-242-1045 and (072)-242-1046',
                'fax_number' => '',
                'email' => 'darfo1.ored@gmail.com',
                'operating_unit_id' => 10,
            ],
            3 => [
                'id' => 4,
                'name' => 'RFO II - Cagayan Valley',
                'acronym' => 'RFO 2',
                'address' => '',
                'agency_head_name' => 'Narciso A. Edillo',
                'agency_head_designation' => 'RED',
                'telephone_number' => '(078) 396-1328 / (078) 844-1031',
                'fax_number' => 'N/A',
                'email' => 'da_rfu2000@yahoo.com',
                'operating_unit_id' => 11,
            ],
            4 => [
                'id' => 5,
                'name' => 'RFO III - Central Luzon',
                'acronym' => 'RFO 3',
                'address' => '',
                'agency_head_name' => 'Crispulo G. Bautista',
                'agency_head_designation' => 'OIC - RED',
                'telephone_number' => '(045)-9613472/and(045)-9617699',
                'fax_number' => '',
                'email' => 'da_rfu3@yahoo.com/ored.da3@gmail.com',
                'operating_unit_id' => 1,
            ],
            5 => [
                'id' => 6,
                'name' => 'RFO IVA - CALABARZON',
                'acronym' => 'RFO 4A',
                'address' => '',
                'agency_head_name' => 'Arnel V. de Mesa',
                'agency_head_designation' => 'RED',
                'telephone_number' => '8928-5375/8920-0116/CISCO-4420',
                'fax_number' => '',
                'email' => 'darfu4a.ored@gmail.com',
                'operating_unit_id' => 13,
            ],
            6 => [
                'id' => 7,
                'name' => 'RFO IVB - MIMAROPA',
                'acronym' => 'RFO 4B',
                'address' => '',
                'agency_head_name' => 'Antonio G. Gerundio',
                'agency_head_designation' => 'RED',
                'telephone_number' => '8332-7274/8927-4350',
                'fax_number' => '',
                'email' => 'ored4b@yahoo.com',
                'operating_unit_id' => 14,
            ],
            7 => [
                'id' => 8,
                'name' => 'RFO V - Bicol Region',
                'acronym' => 'RFO 5',
                'address' => '',
                'agency_head_name' => 'Rodel P. Tornilla',
                'agency_head_designation' => 'RED',
                'telephone_number' => '(054)-477-0381/CISCO-4511/4500',
                'fax_number' => '',
                'email' => 'da5ored@yahoo.com',
                'operating_unit_id' => 15,
            ],
            8 => [
                'id' => 9,
                'name' => 'RFO VI - Western Visayas',
                'acronym' => 'RFO 6',
                'address' => '',
                'agency_head_name' => 'Remelyn R. Recoter',
                'agency_head_designation' => 'RED',
                'telephone_number' => '',
                'fax_number' => '(033)- 337-1262 (ORED)',
                'email' => 'darfu6@yahoo.com',
                'operating_unit_id' => 16,
            ],
            9 => [
                'id' => 10,
                'name' => 'RFO VII - Central Visayas',
                'acronym' => 'RFO 7',
                'address' => '',
                'agency_head_name' => 'Atty. Salvador D. Diputado',
                'agency_head_designation' => 'RED',
                'telephone_number' => '(032) 3833679 loc 4702',
                'fax_number' => '(032)268-3063',
                'email' => 'redsoffice7@yahoo.com',
                'operating_unit_id' => 17,
            ],
            10 => [
                'id' => 11,
                'name' => 'RFO VIII - Eastern Visayas',
                'acronym' => 'RFO 8',
                'address' => '',
                'agency_head_name' => 'Angel C. Enriquez',
                'agency_head_designation' => 'OIC RED',
                'telephone_number' => '(053) 321-2024/832-0694',
                'fax_number' => '(053) 325-7242',
                'email' => 'da8ored@yahoo.com',
                'operating_unit_id' => 18,
            ],
            11 => [
                'id' => 12,
                'name' => 'RFO IX - Zamboanga Peninsula',
                'acronym' => 'RFO 9',
                'address' => 'Zamboanga',
                'agency_head_name' => 'Rad Donn l. Cedeno',
                'agency_head_designation' => 'RED',
                'telephone_number' => '(062) 991-3188',
                'fax_number' => 'N/A',
                'email' => 'ored_sec@yahoo.com.ph',
                'operating_unit_id' => 19,
            ],
            12 => [
                'id' => 13,
                'name' => 'RFO X - Northern Mindanao',
                'acronym' => 'RFO 10',
                'address' => '',
                'agency_head_name' => 'Carlene C. Collado',
                'agency_head_designation' => 'RED',
                'telephone_number' => '(088) 856-2753 to 55; 231-3497',
                'fax_number' => '(088) 231-3496',
                'email' => 'da10ored@gmail.com',
                'operating_unit_id' => 20,
            ],
            13 => [
                'id' => 14,
                'name' => 'RFO XI - Davao Region',
                'acronym' => 'RFO 11',
                'address' => 'Davao',
                'agency_head_name' => 'Engr. Ricardi M. Oñate Jr.',
                'agency_head_designation' => 'RED',
                'telephone_number' => '(082) 226-3625 loc. 1100',
                'fax_number' => '(082) 221-9697',
                'email' => 'darfoxi.ored@gmail.com',
                'operating_unit_id' => 21,
            ],
            14 => [
                'id' => 15,
                'name' => 'RFO XII - SOCCSKSARGEN',
                'acronym' => 'RFO 12',
                'address' => '',
                'agency_head_name' => 'Arlan M. Mangelen',
                'agency_head_designation' => 'RED',
                'telephone_number' => '0915-907-5136',
                'fax_number' => 'n/a',
                'email' => 'ored.darfo12@gmail.com',
                'operating_unit_id' => 22,
            ],
            15 => [
                'id' => 16,
                'name' => 'RFO XIII - CARAGA',
                'acronym' => 'RFO 13',
                'address' => '',
                'agency_head_name' => 'Abel James I. Monteagudo',
                'agency_head_designation' => 'RED',
                'telephone_number' => '(085) 342-4092 / 341-4546',
                'fax_number' => '(085) 341-2114',
                'email' => 'dacaraga@yahoo.com',
                'operating_unit_id' => 23,
            ],
            16 => [
                'id' => 17,
                'name' => 'RFO DAF-ARMM - Department of Agriculture and Fisheries in the Autonomous Region in Muslim Mindanao',
                'acronym' => 'DAF-ARMM',
                'address' => '',
                'agency_head_name' => 'Alexander G. Alonto, Jr.',
                'agency_head_designation' => 'OIC, Regional Secretary',
                'telephone_number' => '',
                'fax_number' => '',
                'email' => 'daf_pmpdd@yahoo.com',
                'operating_unit_id' => 1,
            ],
            17 => [
                'id' => 18,
                'name' => 'Agricultural Training Institute',
                'acronym' => 'ATI',
                'address' => '',
                'agency_head_name' => 'Alfredo S. aton, MPS-DM',
                'agency_head_designation' => 'Director',
                'telephone_number' => '8929-8541 LOC 265/267/220',
                'fax_number' => '89209792',
                'email' => 'ati_director@yahoo.com',
                'operating_unit_id' => 2,
            ],
            18 => [
                'id' => 19,
                'name' => 'BAI - Bureau of Animal Industry',
                'acronym' => 'BAI',
                'address' => '',
                'agency_head_name' => 'Ronnie D. Domingo, DVM, MSc.',
                'agency_head_designation' => 'Director',
                'telephone_number' => '(02)85282206',
                'fax_number' => '(02)89200431',
                'email' => 'bai_dir@yahoo.com',
                'operating_unit_id' => 4,
            ],
            19 => [
                'id' => 20,
                'name' => 'BAR - Bureau of Agricultural Research',
                'acronym' => 'BAR',
                'address' => '',
                'agency_head_name' => 'Vivencio R. Mamaril. Ph.D',
                'agency_head_designation' => 'Director',
                'telephone_number' => 'N/A',
                'fax_number' => '89275691',
                'email' => 'od@bar.gov.ph',
                'operating_unit_id' => 5,
            ],
            20 => [
                'id' => 21,
                'name' => 'BPI - Bureau of Plant Industry',
                'acronym' => 'BPI',
                'address' => '',
                'agency_head_name' => 'George Y. Culaste',
                'agency_head_designation' => 'Director',
                'telephone_number' => '85244551/85240718',
                'fax_number' => '85240718',
                'email' => 'bpi.directorsoffice@yahoo.com',
                'operating_unit_id' => 6,
            ],
            21 => [
                'id' => 22,
                'name' => 'BSWM - Bureau of Soils and Water Management',
                'acronym' => 'BSWM',
                'address' => '',
                'agency_head_name' => 'Sonia M. Salguero',
                'agency_head_designation' => 'OIC Director',
                'telephone_number' => '88978120',
                'fax_number' => '9230466',
                'email' => 'sonia_salguero@yahoo.com',
                'operating_unit_id' => 7,
            ],
            22 => [
                'id' => 23,
                'name' => 'BAFE-Bureau of Agricultural and Fisheries Engineering',
                'acronym' => 'BAFE',
                'address' => '',
                'agency_head_name' => 'Ariodear C. Rico',
                'agency_head_designation' => 'Director',
                'telephone_number' => '89418151',
                'fax_number' => '89418151',
                'email' => 'oed.bafe@gmail.com',
                'operating_unit_id' => 8,
            ],
            23 => [
                'id' => 24,
                'name' => 'Agricultural Credit Policy Council',
                'acronym' => 'ACPC',
                'address' => '',
                'agency_head_name' => 'Jocelyn Alma R. Badiola',
                'agency_head_designation' => 'Executive Director',
                'telephone_number' => '86363392/86343319',
                'fax_number' => '86343319',
                'email' => 'oed@acpc.gov.ph',
                'operating_unit_id' => 24,
            ],
            24 => [
                'id' => 25,
                'name' => 'BFAR - Bureau of Fisheries and Aquatic Resources',
                'acronym' => 'BFAR',
                'address' => '',
                'agency_head_name' => 'Eduardo B. Gongona',
                'agency_head_designation' => 'Undersecretary fo Fisheries, / Director',
                'telephone_number' => '89297673',
                'fax_number' => '89298074',
                'email' => 'bfardirector@gmail.com',
                'operating_unit_id' => 25,
            ],
            25 => [
                'id' => 26,
                'name' => 'FPA-Fertilizer Pesticides Authority',
                'acronym' => 'FPA',
                'address' => '',
                'agency_head_name' => 'Eric C. Divinagracia',
                'agency_head_designation' => 'Executive Director',
                'telephone_number' => '84261572/89208173',
                'fax_number' => '89208173',
                'email' => 'fpa.oed@gmail.com',
                'operating_unit_id' => 26,
            ],
            26 => [
                'id' => 27,
                'name' => 'National Fisheries Research and Development Institute',
                'acronym' => 'NFRDI',
                'address' => '',
                'agency_head_name' => 'Dr. Lilian C. Garcia, CESO V',
                'agency_head_designation' => 'Interim Executive Director',
                'telephone_number' => '(02) 352-3596',
                'fax_number' => '(02) 352-3596',
                'email' => 'iestd.nfrdi@gmail.com',
                'operating_unit_id' => 27,
            ],
            27 => [
                'id' => 28,
                'name' => 'NMIS - National Meat Inspection Service',
                'acronym' => 'NMIS',
                'address' => '',
                'agency_head_name' => 'Atty. Beata H. Obsioma',
                'agency_head_designation' => 'OIC - Executive Director',
                'telephone_number' => '89247980',
                'fax_number' => '89247980',
                'email' => 'nmisexedir@mail.com',
                'operating_unit_id' => 28,
            ],
            28 => [
                'id' => 29,
                'name' => 'Philippine Rubber Research Institute',
                'acronym' => 'PRRI',
                'address' => '',
                'agency_head_name' => 'Engr. Dennis H. Palabrica, DR,  Dev',
                'agency_head_designation' => 'OIC-Executive Director',
                'telephone_number' => '',
                'fax_number' => 'CISCO-2265',
                'email' => 'prri_office@yahoo.com.ph',
                'operating_unit_id' => 29,
            ],
            29 => [
                'id' => 30,
                'name' => 'PCC - Phlippine Carabao Center',
                'acronym' => 'PCC',
                'address' => '',
                'agency_head_name' => 'Arnel N. del Barrio',
                'agency_head_designation' => 'Executive Director III',
                'telephone_number' => '-145373861',
                'fax_number' => '-145373862',
                'email' => 'pimd.pcc@gmail.com',
                'operating_unit_id' => 30,
            ],
            30 => [
                'id' => 31,
                'name' => 'PhilMech - Philippine Center for Postharvest Development and Mechanization',
                'acronym' => 'PhilMech',
                'address' => '',
                'agency_head_name' => 'Baldwin G. Iallorina, PhD.',
                'agency_head_designation' => 'Director IV',
                'telephone_number' => '(044)4560213',
                'fax_number' => '(044)4560213',
                'email' => 'od.philmech@yahoo.com/philmech.ppds@gmail.com',
                'operating_unit_id' => 31,
            ],
            31 => [
                'id' => 32,
                'name' => 'PCAF - Philippine Council for Agriculture and Fisheries',
                'acronym' => 'PCAF',
                'address' => '',
                'agency_head_name' => 'Liza G. Battad',
                'agency_head_designation' => 'OIC - Executive Director',
                'telephone_number' => '8926-2706',
                'fax_number' => '89243361',
                'email' => 'docliza@pcaf.da.gov.ph',
                'operating_unit_id' => 32,
            ],
            32 => [
                'id' => 33,
                'name' => 'PhilFIDA - Philippine Fiber Industry Development Authority',
                'acronym' => 'PhilFIDA',
                'address' => '',
                'agency_head_name' => 'Kennedy T. Costales',
                'agency_head_designation' => 'Ecxecutive Director III',
                'telephone_number' => '8441-4606/4306-CISCO 2650',
                'fax_number' => '84414080',
                'email' => 'oed@philfida.da.gov.ph',
                'operating_unit_id' => 33,
            ],
            33 => [
                'id' => 34,
                'name' => 'NDA - National Dairy Authority',
                'acronym' => 'NDA',
                'address' => '',
                'agency_head_name' => 'Marilyn B. Mabale',
                'agency_head_designation' => 'OIC-Administrator',
                'telephone_number' => '89288681',
                'fax_number' => '89288681',
                'email' => 'dairynda@pldtdsl.net',
                'operating_unit_id' => 34,
            ],
            34 => [
                'id' => 35,
                'name' => 'National Food Authority',
                'acronym' => 'NFA',
                'address' => '',
                'agency_head_name' => 'Atty.Judi Carol L. Dansal',
                'agency_head_designation' => 'Administrator',
                'telephone_number' => '',
                'fax_number' => '',
                'email' => 'nfaaostaff@yahoo.com.ph',
                'operating_unit_id' => 35,
            ],
            35 => [
                'id' => 36,
                'name' => 'NTA - National Tobacco Administration',
                'acronym' => 'NTA',
                'address' => '',
                'agency_head_name' => 'Robert L. Seares, M.D.',
                'agency_head_designation' => 'Administrator',
                'telephone_number' => '83743987',
                'fax_number' => '83743987',
                'email' => 'docrseares@gmail.com',
                'operating_unit_id' => 36,
            ],
            36 => [
                'id' => 37,
                'name' => 'PCA-Philippine Coconut Authority',
                'acronym' => 'PCA',
                'address' => '',
                'agency_head_name' => 'Benjamin R. Madrigal',
                'agency_head_designation' => 'Administrator',
                'telephone_number' => '89284501 loc 410',
                'fax_number' => '89267631',
                'email' => 'pca.ofad@gmail.com',
                'operating_unit_id' => 37,
            ],
            37 => [
                'id' => 38,
                'name' => 'PCIC - Philippine Crop Insurance Corporation',
                'acronym' => 'PCIC',
                'address' => '',
                'agency_head_name' => 'Atty. JB Jovy C. Bernabe',
                'agency_head_designation' => 'President',
                'telephone_number' => '85334466',
                'fax_number' => '84410667',
                'email' => 'op@pcic.gov.ph',
                'operating_unit_id' => 38,
            ],
            38 => [
                'id' => 39,
                'name' => 'Philippine Fisheries Development Authority',
                'acronym' => 'PFDA',
                'address' => '',
                'agency_head_name' => 'Atty. Glenn A. Pangapalan',
                'agency_head_designation' => 'General Manager',
                'telephone_number' => '89256141/89257901',
                'fax_number' => '',
                'email' => 'pfda.oed@gmail.com',
                'operating_unit_id' => 39,
            ],
            39 => [
                'id' => 40,
                'name' => 'PhilRice - Philippine Rice Research Institute',
                'acronym' => 'PhilRice',
                'address' => '',
                'agency_head_name' => 'Dr. John C. De Leon',
                'agency_head_designation' => 'Executive Director',
                'telephone_number' => '(044)4565388',
                'fax_number' => '444565388',
                'email' => 'prri.mail@philrice.gov.ph',
                'operating_unit_id' => 40,
            ],
            40 => [
                'id' => 41,
                'name' => 'SRA - Sugar Regulatory Administration',
                'acronym' => 'SRA',
                'address' => '',
                'agency_head_name' => 'Hermenegildo R. Serafica',
                'agency_head_designation' => 'Administrator',
                'telephone_number' => '84550446',
                'fax_number' => '89296137',
                'email' => 'srahead@sra.gov.ph',
                'operating_unit_id' => 41,
            ],
            41 => [
                'id' => 42,
                'name' => 'Rice Program',
                'acronym' => 'RICE',
                'address' => '',
                'agency_head_name' => 'Lorna L. Calda',
                'agency_head_designation' => 'OIC, Chief, FPOPD',
                'telephone_number' => '2428',
                'fax_number' => '',
                'email' => 'onaski.c@gmail.com',
                'operating_unit_id' => 1,
            ],
            42 => [
                'id' => 43,
                'name' => 'Corn Program',
                'acronym' => 'CORN',
                'address' => '',
                'agency_head_name' => 'Lorenzo M. Caranguian',
                'agency_head_designation' => 'Director',
                'telephone_number' => '9265691',
                'fax_number' => '9265691',
                'email' => 'agripinoycorn@yahoo.com',
                'operating_unit_id' => 1,
            ],
            43 => [
                'id' => 44,
                'name' => 'High-Value Crops Development Program',
                'acronym' => 'HVCDP',
                'address' => 'DA',
                'agency_head_name' => 'Evelyn G. Laviña',
                'agency_head_designation' => 'Undersecretary',
                'telephone_number' => '8926-8444 / 89288741 Loc. 2810',
                'fax_number' => '8920-4085',
                'email' => 'hvccpmo@yahoo.com/agri.hvc.da@gmail.com',
                'operating_unit_id' => 1,
            ],
            44 => [
                'id' => 45,
                'name' => 'Livestock Program',
                'acronym' => 'LIVESTOCK',
                'address' => '',
                'agency_head_name' => 'Dr. William C. Medrano',
                'agency_head_designation' => 'Assistant Secretary for Livestock',
                'telephone_number' => '8929 6860, 2256, 2257',
                'fax_number' => '8929 6949',
                'email' => 'wcm.aseclivestock@gmail.com',
                'operating_unit_id' => 1,
            ],
            45 => [
                'id' => 46,
                'name' => 'National Organic Agriculture Program',
                'acronym' => 'NOAP',
                'address' => '',
                'agency_head_name' => 'Bernadette S. San Juan',
                'agency_head_designation' => 'National Program Coordinator, NOAP',
                'telephone_number' => '8941-81-43 Loc. 3321',
                'fax_number' => '8941-81-43 Loc. 3321',
                'email' => 'soam.noap@gmail.com',
                'operating_unit_id' => 1,
            ],
            46 => [
                'id' => 47,
                'name' => 'FMR - Farm-to-Market Road',
                'acronym' => 'FMRDP',
                'address' => '',
                'agency_head_name' => 'Camad A. Edres',
                'agency_head_designation' => 'Director',
                'telephone_number' => '89204323',
                'fax_number' => '89204323',
                'email' => 'fmrdp.dacentral@gmail.com',
                'operating_unit_id' => 1,
            ],
            47 => [
                'id' => 48,
                'name' => 'National Halal Program',
                'acronym' => 'HALAL',
                'address' => '',
                'agency_head_name' => 'Clint Hassan',
                'agency_head_designation' => 'Director',
                'telephone_number' => '89204068',
                'fax_number' => '',
                'email' => 'clintk9@gmail.com',
                'operating_unit_id' => 1,
            ],
            48 => [
                'id' => 49,
                'name' => 'PRDP - Philippine Rural Development Project',
                'acronym' => 'PRDP',
                'address' => '',
                'agency_head_name' => 'Shandy M. Hubilla',
                'agency_head_designation' => 'OIC, Director',
                'telephone_number' => '9265682',
                'fax_number' => '',
                'email' => 'prdpiplan2@gmail.com',
                'operating_unit_id' => 1,
            ],
            49 => [
                'id' => 50,
                'name' => 'Kabuhayan at Kaunlaran ng kababayang katutubo (4Ks)',
                'acronym' => '4Ks',
                'address' => '',
                'agency_head_name' => 'Lerey A. Panes',
                'agency_head_designation' => 'Assistant Secretary for Special Project',
                'telephone_number' => '(02) 9290148',
                'fax_number' => 'N/A',
                'email' => 'bervanniejay@gmail.com',
                'operating_unit_id' => 1,
            ],
            50 => [
                'id' => 51,
                'name' => 'Philippine-Sino Center for Agricultural Technology (PhilSCAT)',
                'acronym' => 'PhilSCAT',
                'address' => '',
                'agency_head_name' => '',
                'agency_head_designation' => '',
                'telephone_number' => '',
                'fax_number' => '',
                'email' => '',
                'operating_unit_id' => 12,
            ],
            51 => [
                'id' => 52,
                'name' => 'Special Area for Agricultural Development (SAAD)',
                'acronym' => 'SAAD',
                'address' => '',
                'agency_head_name' => 'Myer G. Mula',
                'agency_head_designation' => 'Program Director',
                'telephone_number' => '8929-7349 / 2832/33/34',
                'fax_number' => 'N/A',
                'email' => 'mgm81259@gmail .com',
                'operating_unit_id' => 1,
            ],
            52 => [
                'id' => 53,
                'name' => 'Office of the Assistant Secretary for Regulations',
                'acronym' => 'OASR',
                'address' => '',
                'agency_head_name' => 'Atty.Hanzel O. Didulo',
                'agency_head_designation' => 'Assistant Secretary for Regulation',
                'telephone_number' => '',
                'fax_number' => '',
                'email' => 'daoasr@gmail.com',
                'operating_unit_id' => 1,
            ],
            53 => [
                'id' => 54,
                'name' => 'QUEDANCOR - Quedan and Rural Credit Guarantee Corporation',
                'acronym' => 'Quedancor',
                'address' => '',
                'agency_head_name' => 'Atty. Armando R. Crobalde Jr.',
                'agency_head_designation' => 'President',
                'telephone_number' => '',
                'fax_number' => '',
                'email' => 'opquedancor@yahoo.com',
                'operating_unit_id' => 42,
            ],
            54 => [
                'id' => 55,
                'name' => 'BAFS - Bureau of Agricultural and Fisheries Standards',
                'acronym' => 'BAFS',
                'address' => '',
                'agency_head_name' => 'Myer G. Mula',
                'agency_head_designation' => 'Director IV',
                'telephone_number' => '2540282/ 9288758 loc 3314',
                'fax_number' => '82540282/cisco 3301',
                'email' => 'bafs.oed@gmail.com/choymamaril@yahoo.com',
                'operating_unit_id' => 3,
            ],
            55 => [
                'id' => 56,
                'name' => 'BAFS-ILD Bureau of Agricultural and Fisheries Standards - Integrated Laboratory Division',
                'acronym' => 'BAFS-ILD',
                'address' => '',
                'agency_head_name' => 'Myer G. Mula',
                'agency_head_designation' => 'Director IV',
                'telephone_number' => '82540282/ 89288758 loc 3317',
                'fax_number' => '82540282',
                'email' => 'bafs.oed@gmail.com',
                'operating_unit_id' => 3,
            ],
            56 => [
                'id' => 57,
                'name' => 'Agribusiness and Marketing Assistance Service',
                'acronym' => 'AMAS',
                'address' => '',
                'agency_head_name' => 'Ramon C. Yedra',
                'agency_head_designation' => 'OIC Director',
                'telephone_number' => '89202216/CISCO-2140/2169',
                'fax_number' => '89266434',
                'email' => 'bpamas2019@gmail.com',
                'operating_unit_id' => 1,
            ],
            57 => [
                'id' => 58,
                'name' => 'FOS-SPCMAD (for FAPs and LFPs)',
                'acronym' => 'FOS-SPCMAD',
                'address' => '',
                'agency_head_name' => 'U-Nichols A. Manalo',
                'agency_head_designation' => 'OIC, SPCMAD',
                'telephone_number' => '920 1767 loc 2433',
                'fax_number' => '920 1767',
                'email' => 'da_spcmad@yahoo.com',
                'operating_unit_id' => 1,
            ],
            58 => [
                'id' => 59,
                'name' => 'ICTS - Information Communication Technology Service',
                'acronym' => 'ICTS',
                'address' => '',
                'agency_head_name' => 'Xercees R. Remoroza',
                'agency_head_designation' => 'OIC Director',
                'telephone_number' => 'Local 2542',
                'fax_number' => '89204069',
                'email' => 'xremz@yahoo.com',
                'operating_unit_id' => 1,
            ],
            59 => [
                'id' => 60,
                'name' => 'NCI - National Convergence Initiative',
                'acronym' => 'NCI',
                'address' => '',
                'agency_head_name' => 'Dr. Silvino Q. Tejada',
                'agency_head_designation' => 'National Focal Person',
                'telephone_number' => '9295683',
                'fax_number' => '9295683',
                'email' => 'convergence.secretariat@gmail.com',
                'operating_unit_id' => 1,
            ],
            60 => [
                'id' => 61,
                'name' => 'PDS - Project Development Service',
                'acronym' => 'PDS',
                'address' => '',
                'agency_head_name' => 'Ferdinand D. Flores',
                'agency_head_designation' => 'OIC Director',
                'telephone_number' => '920-1407',
                'fax_number' => '9201407',
                'email' => 'osddapds@gmail.com',
                'operating_unit_id' => 1,
            ],
            61 => [
                'id' => 62,
                'name' => 'Investment Programming Division',
                'acronym' => 'IPD',
                'address' => '',
                'agency_head_name' => 'Joseph C. Manicad',
                'agency_head_designation' => 'Planning Officer V',
                'telephone_number' => '9209116',
                'fax_number' => 'n/a',
                'email' => 'manicad3480@gmail.com',
                'operating_unit_id' => 1,
            ],
            62 => [
                'id' => 63,
                'name' => 'Climate Resilient Agriculture Office',
                'acronym' => 'CRAO',
                'address' => '',
                'agency_head_name' => 'Alicia Ilaga',
                'agency_head_designation' => 'Director',
                'telephone_number' => 'n/a',
                'fax_number' => 'n/a',
                'email' => 'n/a',
                'operating_unit_id' => 1,
            ],
            63 => [
                'id' => 64,
                'name' => 'Field Programs Operational Planning Division',
                'acronym' => 'FPOPD',
                'address' => '',
                'agency_head_name' => 'Lorna L. Calda',
                'agency_head_designation' => 'OIC',
                'telephone_number' => 'n/a',
                'fax_number' => 'n/a',
                'email' => 'n/a',
                'operating_unit_id' => 1,
            ],
            64 => [
                'id' => 65,
                'name' => 'Policy Research Service',
                'acronym' => 'PRS',
                'address' => '',
                'agency_head_name' => 'Noel Padre',
                'agency_head_designation' => 'Director',
                'telephone_number' => 'n/a',
                'fax_number' => 'n/a',
                'email' => 'n/a',
                'operating_unit_id' => 1,
            ],
            65 => [
                'id' => 66,
                'name' => 'Monitoring and Evaluation Division',
                'acronym' => 'MED',
                'address' => 'DA',
                'agency_head_name' => 'Karen S. Marte',
                'agency_head_designation' => 'Chief',
                'telephone_number' => 'NA',
                'fax_number' => 'NA',
                'email' => 'med@da.gov.ph',
                'operating_unit_id' => 1,
            ],
        ];

        Schema::disableForeignKeyConstraints();

        DB::table('offices')->truncate();

        foreach ($seeds as $seed) {
            Office::create([
                'id'                    => $seed['id'],
                'name'                  => $seed['name'],
                'acronym'               => $seed['acronym'],
                'slug'                  => Str::slug($seed['name']),
                'email'                 => $seed['email'],
                'contact_numbers'        => $seed['telephone_number'],
                'office_head_name'      => $seed['agency_head_name'],
                'office_head_position'  => $seed['agency_head_designation'],
                'operating_unit_id'     => $seed['operating_unit_id'] ? $seed['operating_unit_id']  : 1,
            ]);

            Schema::enableForeignKeyConstraints();
        }
    }
}
