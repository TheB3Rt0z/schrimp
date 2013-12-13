<?php

class powerring_status extends schrimp\db_object
{
    static $todos = array
    (
        'status db objects' => "to be saved in ['CLASS_TYPE'] eg. powering_status", // datum, weight, height
        'user:status = 1:∞' => "anamnesis + body-composition + muscular tests..", // from user: name, gender, age.. + medic problems and food data -> training setting
        'status attachments' => "3 photos: frontal, lateral from behind (optional)",
    );

    static $tests = array();
}

class powerring
{
    static $todos = array();

    static $tests = array();

    static $foods = array
    (
        'anti-infiammatory' => "integral-rice, no-fat-fish, curcuma, berries",
    );

    static $elements = array // to be combined in objects, see wroten ostsee notes..
    (
        'wood' => array // fire, earth, metal, water
        (
            'tsang_organ' => "liver", // heart, spleen / pancreas, lungs, kidneys
            'fu_organ' => "gall bladder", // small intestine, stomach, large intestine, bladder
            'tissues' => "muscles", // blood vessels, connective tissue, skin, bone
            'indicators' => "toenails", // appearance, lips, small hair, hair
            'sense_organs' => "eyes", // tongue, mouth, nose, ears
            'body fluids' => "tears", // sweat, saliva, mucus, urine
            'cardinality' => "east", // south, center, west, north
            'adverse_climate' => "wind", // heat, humidity, drought, cold
            'season' => "spring", // summer, doyo, autumn, winter
            'day_time' => "morning", // noon, -, evening, midnight
            'planet' => "jupiter", // mars, earth, venus, mercury
            'number' => 8, // 7, 5, 9, 6
            'emotion' => "anger", // joy, sympathy / anxiety, distress, fear
            'expression' => "shouts", // laugh, singing, crying, moaning
            'reaction' => "self-control", // sadness / anxiety, stubbornness, cough, tremor
            'capability' => "spirituality", // inspiration, intellect, vitality, will
            'flavor' => "sour", // bitter, sweet, spicy, salty
            'food_grains' => "wheat", // red millet / maize, yellow millet, rice, beans / legumes
            'fruit' => "plum", // apricot, dates, peach, chestnut
            'vegetable' => "leek", // shallot, mauve, onion, green vegetables
            'pet' => "fowl", // sheep, cow, horse, pig
        ),
    );

    static $shins = array // all to be self made
    (
        'bo' => "sight + intuition",
        'bun' => "hearing + olfaction",
        'mon' => "job + family-life + anamnesis",
        'setzu' => "touch + feel",
    ); // lists of tests, from (integers) -∞ (yin) to +∞ (yang) * coefficient -> cure to the other side (if too yin then a bit more yangs..)

    private function _calculate_antropometric_fm()
    {
        $antropometric_circonferencies = array // http://amiciobesi.forumfree.it/?t=62906205
        (
            'POLSO' => "definisce il tipo morfologico",
            'pettorale' => "all'altezzza dei capezzoli",
            'vita' => "all'altezza dell'ombelico, con addome rilassato",
            'braccio' => "sul picco del bicipite, a braccio contratto",
            'avambraccio' => "si usa il punto di maggiore ampiezza",
            'glutei' => "nel punto di maggior spessure dei glutei",
            'coscia prossimale' => "appena al di sotto della linea glutea",
            'coscia distale' => "appena al di sopra della rotula",
            'polpaccio' => "al punto di maggiore ampiezza",
        );

        $grant = $this->_user->height / $antropometric_circonferencies['POLSO']; // or see http://www.my-personaltrainer.it/circonferenza-polso.html

        if (($grant > 10.4 && $this->_user->gender) // M = true, F = false
            || ($grant > 10.9 && !$this->_user->gender))
            $grant = "Longilineo o di corporatura esile";
        elseif (($grant < 9.6 && $this->_user->gender)
            || ($grant > 9.9 && !$this->_user->gender))
            $grant = "Brevilineo o di corporatura pesante";
        else
            $grant = "Normilineo o di corporatura media"; // see also http://www.federica.unina.it/smfn/valutazione-stato-nutrizionale/antropometria-circonferenze-corporee/ + http://www.giorgiobedogni.it/archivio/testi/antropometria/pantropometria.html
    }

    private function _calculate_percentage_fm($folds)
    {
        if ($this->_user->age >= 18)
        {
            if ($this->_user->age <= 29
                && !empty($folds['pectoral'])
                && !empty($folds['abdominal'])
                && !empty($folds['stringer'])
                && !empty($folds['superiliacal'])
                && !empty($folds['subscapularis'])
                && !empty($folds['triceps'])
                && !empty($folds['axillary']))
            {
                $folds_sum = $folds['pectoral']
                           + $folds['abdominal']
                           + $folds['stringer']
                           + $folds['superiliacal']
                           + $folds['subscapularis']
                           + $folds['triceps']
                           + $folds['axillary']; // Jackson & Pollock (from 18 to 29 years)


            }
            elseif ($this->_user->age <= 29
                && !empty($folds['stringer'])
                && !empty($folds['superiliacal'])
                && !empty($folds['triceps']))
            {

            }
        }
        else
            // specimen too young

        if ($this->_user->gender) // jackson & pollock 3 folds (for 8 to 61 years)
        {
            return ((4.95 / $this->_calculate_bd($folds)) - 4.50) * 100;
        }
        else
        {
            return ((5.01 / $this->_calculate_bd($folds)) - 4.57) * 100;;
        }
    }

    private function _calculate_bd($folds) // body density
    {
        $folds_sum = $folds['pettorale'] + $folds['addome'] + $folds['coscia'];

        if ($this->_user->gender) // jackson & pollock 3 folds (for 8 to 61 years)
        {
            return 1.109380 - (0.0008267 * $folds_sum)
                 + 0.0000016 * pow($folds_sum, 2)
                 - (0.0002574 * $this->_user->age);
        }
        else
        {
            return 1.10994921 - (0.0009929 * $folds_sum)
                 + 0.000023 * pow($folds_sum, 2)
                 - (0.0001392 * $this->_user->age);
        }
    }

    function get_ffm()
    {
        $fm = $this->_calculate_fm();

        return $this->_user->weight - $fm;
    }
}
