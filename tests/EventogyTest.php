<?php

use PHPUnit\Framework\TestCase;

class EventogyTests extends TestCase
{
    public function testTimeStampIsReadable()
    {
        $EventogyMethods = new EventogyMethods();
        $time_stamp = time();
        $test_Time = 48952232432;
        $offsetTime = ($test_Time - 400);
        $offsetDate = date("Y-m-d h:m", $offsetTime);
        $date = date("Y-m-d h:m", $time_stamp);

        $this->assertEquals($EventogyMethods->timeStampisReadable($time_stamp, null), $date);
        $this->assertEquals($EventogyMethods->timeStampisReadable($test_Time, 400), $offsetDate);
        $this->assertEquals($EventogyMethods->timeStampisReadable("ninety", "940"), "Not a correct format, Please try a number");
    }

    public function testValidEmailCheckIsWorking()
    {
        $Eventogy = new EventogyMethods();

        $this->assertEquals($Eventogy->emailCheck("menatpink@gmail.com"), true);
        $this->assertEquals($Eventogy->emailCheck("joebloggs@example.com"), true);
        $this->assertEquals($Eventogy->emailCheck("fillet-o-fish"), false);
        $this->assertEquals($Eventogy->emailCheck(2349), false);
    }

    public function testIfCoinFlipIsValid()
    {
        $Eventogy = new EventogyMethods();

        $this->assertIsString($Eventogy->coinFlip(7));
        $this->assertEquals($Eventogy->coinFlip("nine"), "Not a Valid Parameter");
    }
}
