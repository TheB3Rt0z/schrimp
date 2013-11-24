<?php

class powering_status extends schrimp\db_object
{
    static $todos = array
    (
        'status db objects' => "to be saved in ['CLASS_TYPE'] eg. powering_status",
    );

    static $tests = array();
}

class powering
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
}
