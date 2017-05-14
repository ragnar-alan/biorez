<?php

/**
 * Created by PhpStorm.
 * User: boros
 * Date: 2017. 05. 14.
 * Time: 15:30
 */
class MedicalExaminationController extends BaseController {
    public function index() {
        return View::make("medicalexam.index");
    }

    public function standardExamination() {
        return View::make("medicalexam.standardExam");
    }

    public function complexManExamination() {
        return View::make("medicalexam.complexMan");
    }

    public function complexWomanExamination() {
        return View::make("medicalexam.complexWoman");
    }

    public function complexOncoExamination() {
        return View::make("medicalexam.complexOnco");
    }

    public function complexRheumaExamination() {
        return View::make("medicalexam.complexRheuma");
    }

    public function pregnantExamination() {
        return View::make("medicalexam.pregnantExam");
    }

    public function complexAllergyExamination() {
        return View::make("medicalexam.complexAllergy");
    }
}