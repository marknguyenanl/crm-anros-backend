<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            ['id' => '1', 'created_at' => '2025-11-21T15:30:00Z', 'name' => 'John Doe', 'tel' => '123-456-7890', 'email' => 'john@gmail.com', 'source' => 'Referral', 'address' => '123 Main St'],
            ['id' => '2', 'created_at' => '2025-11-21T15:30:00Z', 'name' => 'Jane Smith', 'tel' => '234-567-8901', 'email' => 'jane@gmail.com', 'source' => 'Web', 'address' => '456 Elm St'],
            ['id' => '3', 'created_at' => '2025-11-21T15:30:00Z', 'name' => 'Mike Johnson', 'tel' => '345-678-9012', 'email' => 'mike@gmail.com', 'source' => 'Event', 'address' => '789 Maple Ave'],
            ['id' => '4', 'created_at' => '2025-11-21T15:30:00Z', 'name' => 'Emily Davis', 'tel' => '456-789-0123', 'email' => 'emily@gmail.com', 'source' => 'Referral', 'address' => '101 Oak St'],
            ['id' => '5', 'created_at' => '2025-11-21T15:30:00Z', 'name' => 'Chris Lee', 'tel' => '567-890-1234', 'email' => 'chris@gmail.com', 'source' => 'Web', 'address' => '202 Pine St'],
            ['id' => '6', 'created_at' => '2025-11-21T15:30:00Z', 'name' => 'Sara Wilson', 'tel' => '678-901-2345', 'email' => 'sara@gmail.com', 'source' => 'Event', 'address' => '303 Birch Rd'],
            ['id' => '7', 'name' => 'David Brown', 'tel' => '789-012-3456', 'email' => 'david@outlook.com', 'source' => 'Referral', 'address' => '404 Cedar Ln'],
            ['id' => '8', 'name' => 'Laura Green', 'tel' => '890-123-4567', 'email' => 'laura@outlook.com', 'source' => 'Web', 'address' => '505 Spruce Dr'],
            ['id' => '9', 'name' => 'James White', 'tel' => '901-234-5678', 'email' => 'james@outlook.com', 'source' => 'Event', 'address' => '606 Walnut St'],
            ['id' => '10', 'name' => 'Olivia Martin', 'tel' => '012-345-6789', 'email' => 'olivia@outlook.com', 'source' => 'Referral', 'address' => '707 Aspen Ct'],

            ['id' => '11', 'name' => 'Kevin Black', 'tel' => '111-222-3333', 'email' => 'kevin@outlook.com', 'source' => 'Web', 'address' => '808 Maple Rd'],
            ['id' => '12', 'name' => 'Sophia White', 'tel' => '222-333-4444', 'email' => 'sophia@protonmail.com', 'source' => 'Event', 'address' => '909 Oak Ave'],
            ['id' => '13', 'name' => 'Liam Gray', 'tel' => '333-444-5555', 'email' => 'liam@protonmail.com', 'source' => 'Referral', 'address' => '1010 Pine St'],
            ['id' => '14', 'name' => 'Emma Brown', 'tel' => '444-555-6666', 'email' => 'emma@protonmail.com', 'source' => 'Web', 'address' => '1111 Birch Rd'],
            ['id' => '15', 'name' => 'Noah Wilson', 'tel' => '555-666-7777', 'email' => 'noah@protonmail.com', 'source' => 'Event', 'address' => '1212 Cedar Ln'],
            ['id' => '16', 'name' => 'Ava Davis', 'tel' => '666-777-8888', 'email' => 'ava@icloud.com', 'source' => 'Referral', 'address' => '1313 Walnut St'],
            ['id' => '17', 'name' => 'Benjamin Lee', 'tel' => '777-888-9999', 'email' => 'benjamin@icloud.com', 'source' => 'Web', 'address' => '1414 Maple Ave'],
            ['id' => '18', 'name' => 'Mia Harris', 'tel' => '888-999-0000', 'email' => 'mia@icloud.com', 'source' => 'Event', 'address' => '1515 Oak Blvd'],
            ['id' => '19', 'name' => 'Oliver Martin', 'tel' => '999-000-1111', 'email' => 'oliver@icloud.com', 'source' => 'Referral', 'address' => '1616 Pine Ln'],
            ['id' => '20', 'name' => 'Isabella Garcia', 'tel' => '000-111-2222', 'email' => 'isabella@icloud.com', 'source' => 'Web', 'address' => '1717 Birch Ct'],

            ['id' => '21', 'name' => 'Liam Johnson', 'tel' => '111-222-3333', 'email' => 'liam@icloud.com', 'source' => 'Referral', 'address' => '123 Maple Ave'],
            ['id' => '22', 'name' => 'Emma Williams', 'tel' => '222-333-4444', 'email' => 'emma@zoho.com', 'source' => 'Web', 'address' => '456 Oak St'],
            ['id' => '23', 'name' => 'Noah Brown', 'tel' => '333-444-5555', 'email' => 'noah@zoho.com', 'source' => 'Phone', 'address' => '789 Pine Rd'],
            ['id' => '24', 'name' => 'Ava Davis', 'tel' => '444-555-6666', 'email' => 'ava@zoho.com', 'source' => 'Web', 'address' => '1010 Elm St'],
            ['id' => '25', 'name' => 'William Miller', 'tel' => '555-666-7777', 'email' => 'william@zoho.com', 'source' => 'Referral', 'address' => '2020 Cedar Ln'],
            ['id' => '26', 'name' => 'Sophia Wilson', 'tel' => '666-777-8888', 'email' => 'sophia@zoho.com', 'source' => 'Web', 'address' => '3030 Spruce Dr'],
            ['id' => '27', 'name' => 'James Moore', 'tel' => '777-888-9999', 'email' => 'james@zoho.com', 'source' => 'Phone', 'address' => '4040 Maple St'],
            ['id' => '28', 'name' => 'Mia Taylor', 'tel' => '888-999-0000', 'email' => 'mia@zoho.com', 'source' => 'Referral', 'address' => '5050 Oak Ave'],
            ['id' => '29', 'name' => 'Benjamin Anderson', 'tel' => '999-000-1111', 'email' => 'benjamin@zoho.com', 'source' => 'Web', 'address' => '6060 Pine Ct'],
            ['id' => '30', 'name' => 'Charlotte Thomas', 'tel' => '000-111-2222', 'email' => 'charlotte@zoho.com', 'source' => 'Referral', 'address' => '7070 Birch Ln'],

            ['id' => '31', 'name' => 'Michael Johnson', 'tel' => '123-456-7890', 'email' => 'michael@zoho.com', 'source' => 'Online', 'address' => '123 Maple St'],
            ['id' => '32', 'name' => 'Sophia Lee', 'tel' => '987-654-3210', 'email' => 'sophia@zoho.com', 'source' => 'Referral', 'address' => '456 Oak Ave'],
            ['id' => '33', 'name' => 'James Smith', 'tel' => '555-666-7777', 'email' => 'james@gmx.com', 'source' => 'Event', 'address' => '789 Pine Rd'],
            ['id' => '34', 'name' => 'Olivia Brown', 'tel' => '222-333-4444', 'email' => 'olivia@gmx.com', 'source' => 'Online', 'address' => '321 Elm St'],
            ['id' => '35', 'name' => 'William Davis', 'tel' => '444-555-6666', 'email' => 'william@gmx.com', 'source' => 'Referral', 'address' => '654 Spruce Ln'],

            ['id' => '36', 'name' => 'Emma Wilson', 'tel' => '777-888-9999', 'email' => 'emma@gmx.com', 'source' => 'Event', 'address' => '987 Cedar Blvd'],
            ['id' => '37', 'name' => 'Liam Martinez', 'tel' => '111-222-3333', 'email' => 'liam@gmx.com', 'source' => 'Referral', 'address' => '159 Willow Dr'],
            ['id' => '38', 'name' => 'Ava Garcia', 'tel' => '888-999-0000', 'email' => 'ava@gmx.com', 'source' => 'Online', 'address' => '753 Birch Ln'],
            ['id' => '39', 'name' => 'Benjamin Rodriguez', 'tel' => '222-111-3333', 'email' => 'benjamin@gmx.com', 'source' => 'Referral', 'address' => '852 Maple Ave'],
            ['id' => '40', 'name' => 'Mia Lee', 'tel' => '666-777-8888', 'email' => 'mia@gmx.com', 'source' => 'Event', 'address' => '951 Oak St'],

            ['id' => '41', 'name' => 'David Kim', 'tel' => '333-444-5555', 'email' => 'david@gmx.com', 'source' => 'Online', 'address' => '357 Pine Rd'],
            ['id' => '42', 'name' => 'Isabella Perez', 'tel' => '999-000-1111', 'email' => 'isabella@gmx.com', 'source' => 'Referral', 'address' => '246 Elm St'],
            ['id' => '43', 'name' => 'Matthew Allen', 'tel' => '555-222-3333', 'email' => 'matthew@gmx.com', 'source' => 'Event', 'address' => '741 Cedar Ave'],
            ['id' => '44', 'name' => 'Amelia Scott', 'tel' => '444-666-7777', 'email' => 'amelia@aol.com', 'source' => 'Online', 'address' => '963 Willow Ln'],
            ['id' => '45', 'name' => 'Joseph Carter', 'tel' => '222-444-6666', 'email' => 'joseph@aol.com', 'source' => 'Referral', 'address' => '159 Spruce St'],

            ['id' => '46', 'name' => 'Victoria Mitchell', 'tel' => '777-555-8888', 'email' => 'victoria@aol.com', 'source' => 'Online', 'address' => '852 Oak Rd'],
            ['id' => '47', 'name' => 'Henry Davis', 'tel' => '333-222-1111', 'email' => 'henry@aol.com', 'source' => 'Event', 'address' => '753 Maple St'],
            ['id' => '48', 'name' => 'Sofia Hernandez', 'tel' => '888-777-6666', 'email' => 'sofia@aol.com', 'source' => 'Referral', 'address' => '456 Pine Ave'],
            ['id' => '49', 'name' => 'Daniel Wilson', 'tel' => '555-333-2222', 'email' => 'daniel@aol.com', 'source' => 'Online', 'address' => '159 Cedar Dr'],
            ['id' => '50', 'name' => 'Emma Roberts', 'tel' => '999-888-7777', 'email' => 'emma@aol.com', 'source' => 'Referral', 'address' => '951 Elm St'],
            ['id' => '51', 'name' => 'Liam Scott', 'tel' => '123-987-6543', 'email' => 'liam.scott@aol.com', 'source' => 'Referral', 'address' => '1001 Maple St'],
            ['id' => '52', 'name' => 'Emma Turner', 'tel' => '234-876-5432', 'email' => 'emma.turner@aol.com', 'source' => 'Web', 'address' => '1002 Oak St'],
            ['id' => '53', 'name' => 'Noah Martin', 'tel' => '345-765-4321', 'email' => 'noah.martin@aol.com', 'source' => 'Event', 'address' => '1003 Pine Ave'],
            ['id' => '54', 'name' => 'Ava Robinson', 'tel' => '456-654-3210', 'email' => 'ava.robinson@aol.com', 'source' => 'Referral', 'address' => '1004 Birch Rd'],
            ['id' => '55', 'name' => 'Benjamin Lee', 'tel' => '567-543-2109', 'email' => 'benjamin.lee@aol.com', 'source' => 'Web', 'address' => '1005 Cedar Ln'],

            ['id' => '56', 'name' => 'Mia Walker', 'tel' => '678-432-1098', 'email' => 'mia.walker@aol.com', 'source' => 'Online', 'address' => '1006 Maple Ave'],
            ['id' => '57', 'name' => 'Oliver Young', 'tel' => '789-321-0987', 'email' => 'oliver.young@hotmail.com', 'source' => 'Referral', 'address' => '1007 Oak Blvd'],
            ['id' => '58', 'name' => 'Sophia King', 'tel' => '890-210-9876', 'email' => 'sophia.king@hotmail.com', 'source' => 'Event', 'address' => '1008 Pine St'],
            ['id' => '59', 'name' => 'James Scott', 'tel' => '901-109-8765', 'email' => 'james.scott@hotmail.com', 'source' => 'Web', 'address' => '1009 Walnut Rd'],
            ['id' => '60', 'name' => 'Isabella Collins', 'tel' => '012-098-7654', 'email' => 'isabella.collins@hotmail.com', 'source' => 'Referral', 'address' => '1010 Elm St'],

            ['id' => '61', 'name' => 'Liam Adams', 'tel' => '123-887-6543', 'email' => 'liam.adams@hotmail.com', 'source' => 'Online', 'address' => '1011 Maple Ln'],
            ['id' => '62', 'name' => 'Emma Evans', 'tel' => '234-776-5432', 'email' => 'emma.evans@hotmail.com', 'source' => 'Web', 'address' => '1012 Oak Ave'],
            ['id' => '63', 'name' => 'Noah Parker', 'tel' => '345-665-4321', 'email' => 'noah.parker@hotmail.com', 'source' => 'Event', 'address' => '1013 Pine Rd'],
            ['id' => '64', 'name' => 'Ava Stewart', 'tel' => '456-554-3210', 'email' => 'ava.stewart@hotmail.com', 'source' => 'Referral', 'address' => '1014 Birch Ct'],
            ['id' => '65', 'name' => 'Benjamin Green', 'tel' => '567-443-2109', 'email' => 'benjamin.green@hotmail.com', 'source' => 'Web', 'address' => '1015 Cedar Ln'],

            ['id' => '66', 'name' => 'Mia Lopez', 'tel' => '678-332-1098', 'email' => 'mia.lopez@hotmail.com', 'source' => 'Online', 'address' => '1016 Maple Ave'],
            ['id' => '67', 'name' => 'Oliver Nelson', 'tel' => '789-221-0987', 'email' => 'oliver.nelson@hotmail.com', 'source' => 'Referral', 'address' => '1017 Oak Blvd'],
            ['id' => '68', 'name' => 'Sophia Ramirez', 'tel' => '890-110-9876', 'email' => 'sophia.ramirez@gmail.com', 'source' => 'Event', 'address' => '1018 Pine St'],
            ['id' => '69', 'name' => 'James Cook', 'tel' => '901-009-8765', 'email' => 'james.cook@gmail.com', 'source' => 'Web', 'address' => '1019 Walnut Rd'],
            ['id' => '70', 'name' => 'Isabella Torres', 'tel' => '012-998-7654', 'email' => 'isabella.torres@gmail.com', 'source' => 'Referral', 'address' => '1020 Elm St'],

            ['id' => '71', 'name' => 'Liam Hughes', 'tel' => '123-887-6543', 'email' => 'liam.hughes@gmail.com', 'source' => 'Online', 'address' => '1021 Maple Ln'],
            ['id' => '72', 'name' => 'Emma Flores', 'tel' => '234-776-5432', 'email' => 'emma.flores@gmail.com', 'source' => 'Web', 'address' => '1022 Oak Ave'],
            ['id' => '73', 'name' => 'Noah Gonzales', 'tel' => '345-665-4321', 'email' => 'noah.gonzales@gmail.com', 'source' => 'Event', 'address' => '1023 Pine Rd'],
            ['id' => '74', 'name' => 'Ava Ramirez', 'tel' => '456-554-3210', 'email' => 'ava.ramirez@gmail.com', 'source' => 'Referral', 'address' => '1024 Birch Ct'],
            ['id' => '75', 'name' => 'Benjamin Murphy', 'tel' => '567-443-2109', 'email' => 'benjamin.murphy@gmail.com', 'source' => 'Web', 'address' => '1025 Cedar Ln'],
            ['id' => '76', 'name' => 'Mia Price', 'tel' => '678-332-1098', 'email' => 'mia.price@gmail.com', 'source' => 'Online', 'address' => '1026 Maple Ave'],
            ['id' => '77', 'name' => 'Oliver Murphy', 'tel' => '789-221-0987', 'email' => 'oliver.murphy@gmail.com', 'source' => 'Referral', 'address' => '1027 Oak Blvd'],
            ['id' => '78', 'name' => 'Sophia Sanchez', 'tel' => '890-110-9876', 'email' => 'sophia.sanchez@gmail.com', 'source' => 'Event', 'address' => '1028 Pine St'],
            ['id' => '79', 'name' => 'James Ramirez', 'tel' => '901-009-8765', 'email' => 'james.ramirez@gmail.com', 'source' => 'Web', 'address' => '1029 Walnut Rd'],
            ['id' => '80', 'name' => 'Isabella Vasquez', 'tel' => '012-998-7654', 'email' => 'isabella.vasquez@gmail.com', 'source' => 'Referral', 'address' => '1030 Elm St'],

            ['id' => '81', 'name' => 'Liam Adams', 'tel' => '123-987-6543', 'email' => 'liam.adams2@gmail.com', 'source' => 'Online', 'address' => '1011 Maple Ln'],
            ['id' => '82', 'name' => 'Emma Evans', 'tel' => '234-776-5432', 'email' => 'emma.evans2@gmail.com', 'source' => 'Web', 'address' => '1012 Oak Ave'],
            ['id' => '83', 'name' => 'Noah Parker', 'tel' => '345-665-4321', 'email' => 'noah.parker2@gmail.com', 'source' => 'Event', 'address' => '1013 Pine Rd'],
            ['id' => '84', 'name' => 'Ava Stewart', 'tel' => '456-554-3210', 'email' => 'ava.stewart2@gmail.com', 'source' => 'Referral', 'address' => '1014 Birch Ct'],
            ['id' => '85', 'name' => 'Benjamin Green', 'tel' => '567-443-2109', 'email' => 'benjamin.green2@gmail.com', 'source' => 'Web', 'address' => '1015 Cedar Ln'],

            ['id' => '86', 'name' => 'Mia Lopez', 'tel' => '678-332-1098', 'email' => 'mia.lopez2@gmail.com', 'source' => 'Online', 'address' => '1016 Maple Ave'],
            ['id' => '87', 'name' => 'Oliver Nelson', 'tel' => '789-221-0987', 'email' => 'oliver.nelson2@gmail.com', 'source' => 'Referral', 'address' => '1017 Oak Blvd'],
            ['id' => '88', 'name' => 'Sophia Ramirez', 'tel' => '890-110-9876', 'email' => 'sophia.ramirez2@gmail.com', 'source' => 'Event', 'address' => '1018 Pine St'],
            ['id' => '89', 'name' => 'James Cook', 'tel' => '901-009-8765', 'email' => 'james.cook2@gmail.com', 'source' => 'Web', 'address' => '1019 Walnut Rd'],
            ['id' => '90', 'name' => 'Isabella Torres', 'tel' => '012-998-7654', 'email' => 'isabella.torres2@gmail.com', 'source' => 'Referral', 'address' => '1020 Elm St'],

            ['id' => '91', 'name' => 'Liam Hughes', 'tel' => '123-887-6543', 'email' => 'liam.hughes2@gmail.com', 'source' => 'Online', 'address' => '1021 Maple Ln'],
            ['id' => '92', 'name' => 'Emma Flores', 'tel' => '234-776-5432', 'email' => 'emma.flores2@gmail.com', 'source' => 'Web', 'address' => '1022 Oak Ave'],
            ['id' => '93', 'name' => 'Noah Gonzales', 'tel' => '345-665-4321', 'email' => 'noah.gonzales2@gmail.com', 'source' => 'Event', 'address' => '1023 Pine Rd'],
            ['id' => '94', 'name' => 'Ava Ramirez', 'tel' => '456-554-3210', 'email' => 'ava.ramirez2@gmail.com', 'source' => 'Referral', 'address' => '1024 Birch Ct'],
            ['id' => '95', 'name' => 'Benjamin Murphy', 'tel' => '567-443-2109', 'email' => 'benjamin.murphy2@gmail.com', 'source' => 'Web', 'address' => '1025 Cedar Ln'],

            ['id' => '96', 'name' => 'Mia Price', 'tel' => '678-332-1098', 'email' => 'mia.price2@gmail.com', 'source' => 'Online', 'address' => '1026 Maple Ave'],
            ['id' => '97', 'name' => 'Oliver Murphy', 'tel' => '789-221-0987', 'email' => 'oliver.murphy2@gmail.com', 'source' => 'Referral', 'address' => '1027 Oak Blvd'],
            ['id' => '98', 'name' => 'Sophia Sanchez', 'tel' => '890-110-9876', 'email' => 'sophia.sanchez2@gmail.com', 'source' => 'Event', 'address' => '1028 Pine St'],
            ['id' => '99', 'name' => 'James Ramirez', 'tel' => '901-009-8765', 'email' => 'james.ramirez2@gmail.com', 'source' => 'Web', 'address' => '1029 Walnut Rd'],
            ['id' => '100', 'name' => 'Isabella Vasquez', 'tel' => '012-998-7654', 'email' => 'isabella.vasquez2@gmail.com', 'source' => 'Referral', 'address' => '1030 Elm St'],
            ['id' => '101', 'name' => 'Liam Carter', 'tel' => '111-222-3101', 'email' => 'liam.carter3@gmail.com', 'source' => 'Online', 'address' => '1031 Maple Ave'],
            ['id' => '102', 'name' => 'Emma Turner', 'tel' => '111-222-3102', 'email' => 'emma.turner3@gmail.com', 'source' => 'Web', 'address' => '1032 Oak Blvd'],
            ['id' => '103', 'name' => 'Noah Phillips', 'tel' => '111-222-3103', 'email' => 'noah.phillips3@gmail.com', 'source' => 'Event', 'address' => '1033 Pine St'],
            ['id' => '104', 'name' => 'Ava Collins', 'tel' => '111-222-3104', 'email' => 'ava.collins3@gmail.com', 'source' => 'Referral', 'address' => '1034 Birch Ct'],
            ['id' => '105', 'name' => 'Benjamin Ward', 'tel' => '111-222-3105', 'email' => 'benjamin.ward3@gmail.com', 'source' => 'Web', 'address' => '1035 Cedar Ln'],

            ['id' => '106', 'name' => 'Mason Brooks', 'tel' => '111-222-3106', 'email' => 'mason.brooks3@gmail.com', 'source' => 'Online', 'address' => '1036 Maple Ave'],
            ['id' => '107', 'name' => 'Sophia Reed', 'tel' => '111-222-3107', 'email' => 'sophia.reed3@gmail.com', 'source' => 'Referral', 'address' => '1037 Oak Blvd'],
            ['id' => '108', 'name' => 'Ethan Bailey', 'tel' => '111-222-3108', 'email' => 'ethan.bailey3@gmail.com', 'source' => 'Event', 'address' => '1038 Pine St'],
            ['id' => '109', 'name' => 'Isabella Rivera', 'tel' => '111-222-3109', 'email' => 'isabella.rivera3@gmail.com', 'source' => 'Web', 'address' => '1039 Walnut Rd'],
            ['id' => '110', 'name' => 'Lucas Cooper', 'tel' => '111-222-3110', 'email' => 'lucas.cooper3@gmail.com', 'source' => 'Referral', 'address' => '1040 Elm St'],

            ['id' => '111', 'name' => 'Amelia Richardson', 'tel' => '111-222-3111', 'email' => 'amelia.richardson3@gmail.com', 'source' => 'Online', 'address' => '1041 Maple Ln'],
            ['id' => '112', 'name' => 'Logan Cox', 'tel' => '111-222-3112', 'email' => 'logan.cox3@gmail.com', 'source' => 'Web', 'address' => '1042 Oak Ave'],
            ['id' => '113', 'name' => 'Charlotte Howard', 'tel' => '111-222-3113', 'email' => 'charlotte.howard3@gmail.com', 'source' => 'Event', 'address' => '1043 Pine Rd'],
            ['id' => '114', 'name' => 'Elijah Peterson', 'tel' => '111-222-3114', 'email' => 'elijah.peterson3@gmail.com', 'source' => 'Referral', 'address' => '1044 Birch Ct'],
            ['id' => '115', 'name' => 'Harper Gray', 'tel' => '111-222-3115', 'email' => 'harper.gray3@gmail.com', 'source' => 'Web', 'address' => '1045 Cedar Ln'],

            ['id' => '116', 'name' => 'Daniel Ramirez', 'tel' => '111-222-3116', 'email' => 'daniel.ramirez3@gmail.com', 'source' => 'Online', 'address' => '1046 Maple Ave'],
            ['id' => '117', 'name' => 'Evelyn James', 'tel' => '111-222-3117', 'email' => 'evelyn.james3@gmail.com', 'source' => 'Referral', 'address' => '1047 Oak Blvd'],
            ['id' => '118', 'name' => 'Matthew Watson', 'tel' => '111-222-3118', 'email' => 'matthew.watson3@gmail.com', 'source' => 'Event', 'address' => '1048 Pine St'],
            ['id' => '119', 'name' => 'Abigail Brooks', 'tel' => '111-222-3119', 'email' => 'abigail.brooks3@gmail.com', 'source' => 'Web', 'address' => '1049 Walnut Rd'],
            ['id' => '120', 'name' => 'Sebastian Kelly', 'tel' => '111-222-3120', 'email' => 'sebastian.kelly3@gmail.com', 'source' => 'Referral', 'address' => '1050 Elm St'],

            ['id' => '121', 'name' => 'Emily Sanders', 'tel' => '111-222-3121', 'email' => 'emily.sanders3@gmail.com', 'source' => 'Online', 'address' => '1051 Maple Ln'],
            ['id' => '122', 'name' => 'Henry Price', 'tel' => '111-222-3122', 'email' => 'henry.price3@gmail.com', 'source' => 'Web', 'address' => '1052 Oak Ave'],
            ['id' => '123', 'name' => 'Scarlett Bennett', 'tel' => '111-222-3123', 'email' => 'scarlett.bennett3@gmail.com', 'source' => 'Event', 'address' => '1053 Pine Rd'],
            ['id' => '124', 'name' => 'Jack Wood', 'tel' => '111-222-3124', 'email' => 'jack.wood3@gmail.com', 'source' => 'Referral', 'address' => '1054 Birch Ct'],
            ['id' => '125', 'name' => 'Victoria Barnes', 'tel' => '111-222-3125', 'email' => 'victoria.barnes3@gmail.com', 'source' => 'Web', 'address' => '1055 Cedar Ln'],
            ['id' => '126', 'name' => 'Ryan Patel', 'tel' => '111-222-3126', 'email' => 'ryan.patel4@gmail.com', 'source' => 'Online', 'address' => '1056 Maple Ave'],
            ['id' => '127', 'name' => 'Lily Nguyen', 'tel' => '111-222-3127', 'email' => 'lily.nguyen4@gmail.com', 'source' => 'Web', 'address' => '1057 Oak Blvd'],
            ['id' => '128', 'name' => 'Jonathan Kim', 'tel' => '111-222-3128', 'email' => 'jonathan.kim4@gmail.com', 'source' => 'Event', 'address' => '1058 Pine St'],
            ['id' => '129', 'name' => 'Natalie Brown', 'tel' => '111-222-3129', 'email' => 'natalie.brown4@gmail.com', 'source' => 'Referral', 'address' => '1059 Walnut Rd'],
            ['id' => '130', 'name' => 'Kevin Tran', 'tel' => '111-222-3130', 'email' => 'kevin.tran4@gmail.com', 'source' => 'Web', 'address' => '1060 Elm St'],

            ['id' => '131', 'name' => 'Ariana Lopez', 'tel' => '111-222-3131', 'email' => 'ariana.lopez4@gmail.com', 'source' => 'Online', 'address' => '1061 Maple Ln'],
            ['id' => '132', 'name' => 'David Wilson', 'tel' => '111-222-3132', 'email' => 'david.wilson4@gmail.com', 'source' => 'Web', 'address' => '1062 Oak Ave'],
            ['id' => '133', 'name' => 'Samantha Young', 'tel' => '111-222-3133', 'email' => 'samantha.young4@gmail.com', 'source' => 'Event', 'address' => '1063 Pine Rd'],
            ['id' => '134', 'name' => 'Andrew Scott', 'tel' => '111-222-3134', 'email' => 'andrew.scott4@gmail.com', 'source' => 'Referral', 'address' => '1064 Birch Ct'],
            ['id' => '135', 'name' => 'Chloe Martinez', 'tel' => '111-222-3135', 'email' => 'chloe.martinez4@gmail.com', 'source' => 'Web', 'address' => '1065 Cedar Ln'],

            ['id' => '136', 'name' => 'Brandon Lee', 'tel' => '111-222-3136', 'email' => 'brandon.lee4@gmail.com', 'source' => 'Online', 'address' => '1066 Maple Ave'],
            ['id' => '137', 'name' => 'Olivia Thompson', 'tel' => '111-222-3137', 'email' => 'olivia.thompson4@gmail.com', 'source' => 'Referral', 'address' => '1067 Oak Blvd'],
            ['id' => '138', 'name' => 'Tyler Anderson', 'tel' => '111-222-3138', 'email' => 'tyler.anderson4@gmail.com', 'source' => 'Event', 'address' => '1068 Pine St'],
            ['id' => '139', 'name' => 'Grace Walker', 'tel' => '111-222-3139', 'email' => 'grace.walker4@gmail.com', 'source' => 'Web', 'address' => '1069 Walnut Rd'],
            ['id' => '140', 'name' => 'Jason Hall', 'tel' => '111-222-3140', 'email' => 'jason.hall4@gmail.com', 'source' => 'Referral', 'address' => '1070 Elm St'],

            ['id' => '141', 'name' => 'Hannah Lewis', 'tel' => '111-222-3141', 'email' => 'hannah.lewis4@gmail.com', 'source' => 'Online', 'address' => '1071 Maple Ln'],
            ['id' => '142', 'name' => 'Zachary King', 'tel' => '111-222-3142', 'email' => 'zachary.king4@gmail.com', 'source' => 'Web', 'address' => '1072 Oak Ave'],
            ['id' => '143', 'name' => 'Madison Wright', 'tel' => '111-222-3143', 'email' => 'madison.wright4@gmail.com', 'source' => 'Event', 'address' => '1073 Pine Rd'],
            ['id' => '144', 'name' => 'Christian Lopez', 'tel' => '111-222-3144', 'email' => 'christian.lopez4@gmail.com', 'source' => 'Referral', 'address' => '1074 Birch Ct'],
            ['id' => '145', 'name' => 'Lauren Hill', 'tel' => '111-222-3145', 'email' => 'lauren.hill4@gmail.com', 'source' => 'Web', 'address' => '1075 Cedar Ln'],

            ['id' => '146', 'name' => 'Aaron Perez', 'tel' => '111-222-3146', 'email' => 'aaron.perez4@gmail.com', 'source' => 'Online', 'address' => '1076 Maple Ave'],
            ['id' => '147', 'name' => 'Kayla Roberts', 'tel' => '111-222-3147', 'email' => 'kayla.roberts4@gmail.com', 'source' => 'Referral', 'address' => '1077 Oak Blvd'],
            ['id' => '148', 'name' => 'Dylan Turner', 'tel' => '111-222-3148', 'email' => 'dylan.turner4@gmail.com', 'source' => 'Event', 'address' => '1078 Pine St'],
            ['id' => '149', 'name' => 'Michelle Adams', 'tel' => '111-222-3149', 'email' => 'michelle.adams4@gmail.com', 'source' => 'Web', 'address' => '1079 Walnut Rd'],
            ['id' => '150', 'name' => 'Joshua Miller', 'tel' => '111-222-3150', 'email' => 'joshua.miller4@gmail.com', 'source' => 'Referral', 'address' => '1080 Elm St'],
        ];

        foreach ($contacts as $contact) {
            Lead::updateOrCreate(
                ['id' => $contact['id']], // so you can run seeder multiple times
                [
                    'name' => $contact['name'],
                    'tel' => $contact['tel'] ?? null,
                    'email' => $contact['email'] ?? null,
                    'source' => $contact['source'] ?? null,
                    'address' => $contact['address'] ?? null,
                    'created_at' => isset($contact['created_at'])
                        ? Carbon::parse($contact['created_at'])
                        : now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
