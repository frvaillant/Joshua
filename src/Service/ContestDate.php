<?php

namespace App\Service;

use DateTime;

class ContestDate
{
    const HOURS_IN_DAY = 24;

    public static function getContestEndDate(?string $startedOn, string $duration): ?string
    {
        if (isset($startedOn)) {
            $endDate = new DateTime($startedOn);
            $endDate->modify('+' . $duration . ' minutes');
            $result = $endDate->format('Y-m-d H:i:s');
        } else {
            $result = '';
        }
        return $result;
    }

    /**
     * @param int $minutes
     * Default string, if you want a array put 1;
     * @param int $format
     * @return mixed
     */
    public static function getDurationInHoursAndMinutes(int $minutes, int $format = 0)
    {
        $date1 = new DateTime('00:00:00');
        $date2 = new DateTime('00:00:00');
        $date2->modify('+' . $minutes . ' minutes');
        $contestDuration = date_diff($date1, $date2);

        $duration['hours'] = $contestDuration->days * self::HOURS_IN_DAY + $contestDuration->h;
        $duration['minutes'] = $contestDuration->i;

        if ($duration['hours'] === 0) {
            $result = $duration['minutes'] . 'm';
        } else {
            $result = $duration['hours'] . 'h' . $duration['minutes'] . 'm';
        }

        if ($format === 1) {
            $result = $duration;
        }

        return $result;
    }
}
