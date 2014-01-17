<?php

class powerring_status extends schrimp\db_object
{
    static $todos = array
    (
        'status db objects' => "to be saved in ['CLASS_TYPE'] eg. powering_status", // datum, weight, height
        'user:status = 1:∞' => "anamnesis + body-composition + muscular tests..", // from user: name, gender, age.. + medic problems and food data -> training setting
        'status attachments' => "3 photos: frontal, lateral and behind (optional)",
    );

    static $tests = array();
}