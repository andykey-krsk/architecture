<?php


class HeadHunter
{
    use TSingleton;

    private $applicants;
    private $lastVacancy;
    private $vacancyList;

    public function register(IApplicant $applicant) {
        $this->applicants[] = $applicant;
    }

    public function unRegister(IApplicant $applicant) {
        $key = array_search($applicant,$this->applicants);
        unset($this->applicants[$key]);
    }

    public function getVacancyList()
    {
        return $this->vacancyList;
    }

    public function addVacancy($vacancy)
    {
        $this->vacancyList[] = $vacancy;
        $this->lastVacancy = $vacancy;
        $this->notifyObservers();
    }

    private function notifyObservers()
    {
        foreach ($this->applicants as $applicant) {
            $applicant->notify($this->lastVacancy);
        }
    }
}