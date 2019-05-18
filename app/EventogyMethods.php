<?php

class EventogyMethods
{

    public function timeStampIsReadable($time_stamp, $offset)
    {
        if (is_int($offset) == true || $offset == null) {
            $format = "Y-m-d h:m";
            if ($offset == null) {
                $date = date($format, $time_stamp);
                return $date;
            } else {
                $offsetTime = $time_stamp - $offset;
                $offsetDate = date($format, $offsetTime);
                return $offsetDate;
            }
        } else {
            return "Not a correct format, Please try a number";
        }
    }
    public function emailCheck($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Email is Valid';
        } else {
            return 'Email is not Valid';
        }
    }
    public function coinFlip($noOfFlips)
    {
        if (is_int($noOfFlips)) {
            $coinFlipOrder = [];
            for ($i = 0; $i < $noOfFlips; $i++) {
                $randomNumber = mt_rand(1, 10);
                if ($randomNumber <= 5) {
                    array_push($coinFlipOrder, "Heads");
                } else {
                    array_push($coinFlipOrder, "Tails");
                }
            }
            $headsAndTailsList = array_count_values($coinFlipOrder);
            $noOfFlipsPercentage = 100 / $noOfFlips;
            if (isset($headsAndTailsList["Tails"])) {
                $percentageTails = $headsAndTailsList["Tails"] * $noOfFlipsPercentage;
            } else {
                $percentageTails = 0;
            };
            if (isset($headsAndTailsList["Heads"])) {
                $percentageHeads = $headsAndTailsList["Heads"] * $noOfFlipsPercentage;
            } else {
                $percentageHeads = 0;
            }

            $finalSentence = "There coin flips were " .
            round($percentageHeads) .
            "%" .
            " Heads and " .
            round($percentageTails) .
                "%" .
                " Tails.";

            return $finalSentence;
        } else {
            return "Not a Valid Parameter";
        }
    }
}
$eventogyMethod = new EventogyMethods
?>
