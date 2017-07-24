<?php

abstract class EncryptionDefs {
    const VERSION = [
        '7057' => [0x23F2C46D, 0xA47E3E7F],
        '7056' => [0x23CB267D, 0xA469527F],
        '7055' => [0x238C048D, 0xA4527E7F],
        '7054' => [0x24556E9D, 0xA7BB227F],
        '7053' => [0x241E54AD, 0xA7945E7F],
        '7052' => [0x24E686BD, 0xA715127F],
        '7051' => [0x24AFF4CD, 0xA736DE7F],
        '7050' => [0x25702EDD, 0xA7D6227F],
        '7049' => [0x253964ED, 0xA7F7FE7F],
        '7048' => [0x2501A6FD, 0xA7F7527F],
        '7047' => [0x25CAE50D, 0xA79B3E7F],
        '7046' => [0x25932F1D, 0xA7B3A27F],
        '7045' => [0x2644752D, 0xA66A1E7F],
        '7044' => [0x263C873D, 0xA652127F],
        '7043' => [0x26F5D54D, 0xA63A9E7F],
        '7042' => [0x26AE6F5D, 0xA612A27F],
        '7041' => [0x2766856D, 0xA6EABE7F],
        '7040' => [0x275F277D, 0xA6F3527F],
        '7039' => [0x2710458D, 0xA6DAFE7F],
        '7038' => [0x27C8EF9D, 0xA6B2227F],
        '7037' => [0x278115AD, 0xA695DE7F],
        '7036' => [0x287987BD, 0xA115127F],
        '7035' => [0x283235CD, 0xA1345E7F],
        '7034' => [0x28EAAFDD, 0xA157227F],
        '7033' => [0x28A325ED, 0xA1767E7F],
        '7032' => [0x289BA7FD, 0xA169527F],
        '7031' => [0x295C260D, 0xA197BE7F],
        '7030' => [0x2904AC1D, 0xA1BCA27F],
        '7029' => [0x29CD362D, 0xA1D59E7F],
        '7028' => [0x29B5843D, 0xA1EA127F],
        '7027' => [0x2A7E164D, 0xA0081E7F],
        '7026' => [0x2A26EC5D, 0xA019A27F],
        '7025' => [0x2AEF466D, 0xA07F3E7F],
        '7024' => [0x2AD7247D, 0xA065527F],
        '7023' => [0x2A9F868D, 0xA0437E7F],
        '7022' => [0x2B406C9D, 0xA0A1227F],
        '7021' => [0x2B08D6AD, 0xA0875E7F],
        '7020' => [0x2BF084BD, 0xA0FD127F],
        '7019' => [0x2BB976CD, 0xA0DBDE7F],
        '7018' => [0x2C612CDD, 0xA328227F],
        '7017' => [0x2C29E6ED, 0xA30EFE7F],
        '7016' => [0x2C11A4FD, 0xA313527F],
        '7015' => [0x2CDA670D, 0xA3723E7F],
        '7014' => [0x2C822D1D, 0xA35DA27F],
        '7013' => [0x2D4AF72D, 0xA3B71E7F],
        '7012' => [0x2D32853D, 0xA38A127F],
        '7011' => [0x2DFB574D, 0xA3ED9E7F],
        '7010' => [0x2DA36D5D, 0xA3C0A27F],
        '709'  => [0x2E6B076D, 0xA223BE7F],
        '708'  => [0x2E53257D, 0xA23F527F],
        '707'  => [0x2E1BC78D, 0xA21BFE7F],
        '706'  => [0x2EC3ED9D, 0xA274227F],
        '705'  => [0x2E8B97AD, 0xA250DE7F],
        '704'  => [0x2F7385BD, 0xA2AD127F],
        '703'  => [0x2F3BB7CD, 0xA2895E7F],
        '702'  => [0x2FE3ADDD, 0xA2E5227F],
        '701'  => [0x2FABA7ED, 0xA2C17E7F],
        '700'  => [0x2F93A5FD, 0xA2DD527F],
        '6014' => [0x2C022D1D, 0xA31DA27F],
        '6013' => [0x2DCAF72D, 0xA3F71E7F],
        '6012' => [0x2DB2853D, 0xA3CA127F],
        '6011' => [0x2D7B574D, 0xA3AD9E7F],
        '6010' => [0x2D236D5D, 0xA380A27F],
        '609'  => [0x2EEB076D, 0xA263BE7F],
        '608'  => [0x2ED3257D, 0xA27F527F],
        '607'  => [0x2E9BC78D, 0xA25BFE7F],
        '606'  => [0x2E43ED9D, 0xA234227F],
        '605'  => [0x2E0B97AD, 0xA210DE7F],
        '604'  => [0x2FF385BD, 0xA2ED127F],
        '603'  => [0x2FBBB7CD, 0xA2C95E7F],
        '602'  => [0x2F63ADDD, 0xA2A5227F],
        '601'  => [0x2F2BA7ED, 0xA2817E7F],
        '600'  => [0x2F13A5FD, 0xA29D527F],
        '509'  => [0x2F6B076D, 0xA2A3BE7F],
        '508'  => [0x2F53257D, 0xA2BF527F],
        '507'  => [0x2F1BC78D, 0xA29BFE7F],
        '506'  => [0x2FC3ED9D, 0xA2F4227F],
        '505'  => [0x2F8B97AD, 0xA2D0DE7F],
        '504'  => [0x2E7385BD, 0xA22D127F],
        '503'  => [0x2E3BB7CD, 0xA2095E7F],
        '502'  => [0x2EE3ADDD, 0xA265227F],
        '501'  => [0x2EABA7ED, 0xA2417E7F],
        '500'  => [0x2E93A5FD, 0xA25D527F],
        '4011' => [0x2C7B574D, 0xA32D9E7F],
        '4010' => [0x2C236D5D, 0xA300A27F],
        '409'  => [0x2FEB076D, 0xA2E3BE7F],
        '408'  => [0x2FD3257D, 0xA2FF527F],
        '407'  => [0x2F9BC78D, 0xA2DBFE7F],
        '406'  => [0x2F43ED9D, 0xA2B4227F],
        '405'  => [0x2F0B97AD, 0xA290DE7F],
        '404'  => [0x2EF385BD, 0xA26D127F],
        '403'  => [0x2EBBB7CD, 0xA2495E7F],
        '402'  => [0x2E63ADDD, 0xA225227F],
        '401'  => [0x2E2BA7ED, 0xA2017E7F],
        '400'  => [0x2E13A5FD, 0xA21D527F],
        '308'  => [0x2C53257D, 0xA33F527F],
        '307'  => [0x2C1BC78D, 0xA31BFE7F],
        '306'  => [0x2CC3ED9D, 0xA374227F],
        '305'  => [0x2C8B97AD, 0xA350DE7F],
        '304'  => [0x2D7385BD, 0xA3AD127F],
        '303'  => [0x2D3BB7CD, 0xA3895E7F],
        '302'  => [0x2DE3ADDD, 0xA3E5227F],
        '301'  => [0x2DABA7ED, 0xA3C17E7F],
        '300'  => [0x2D93A5FD, 0xA3DD527F],
        '209'  => [0x2CEB076D, 0xA363BE7F],
        '208'  => [0x2CD3257D, 0xA37F527F],
        '207'  => [0x2C9BC78D, 0xA35BFE7F],
        '206'  => [0x2C43ED9D, 0xA334227F],
        '205'  => [0x2C0B97AD, 0xA310DE7F],
        '204'  => [0x2DF385BD, 0xA3ED127F],
        //Clients enhanced 
        '67058' => [0X139EE5D, 0xB51FA27F ],
    ];
}