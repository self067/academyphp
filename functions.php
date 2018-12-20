<?php

require_once('./classes/classes_career.php');
require_once('./classes/classes_profile.php');

function getSortedArray( array $array, $startKey = 'yearStart', $endKey = 'yearEnd')
{
  $start = array_column($array, $startKey);
  $end = array_column($array, $endKey);

  array_multisort( $start, SORT_DESC, $end, SORT_DESC, $array);
  return $array;
}

$profile = new profile( new about('Oleg Kuzmin', '', 'seltor@mail.ru', '+7(996)448-90-60', 'jktu.ru', 'Web Dev'));

$career = new career(  'Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can download this free resume/CV template here. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.');

$career->AddExperience( new experiences('Место работы №1','Должность №1','Город','Компания11',
    'Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
    '1950','1990'));

$career->AddExperience( new experiences( 'Место работы №2','Должность №2', 'Город', 'Компания22',
    'Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
    '1990', '2010'));

$career->AddExperience( new experiences( 'Место работы №3',  'Должность №3', 'Город', 'Компания33',
    'Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
    '2010', '2015'));

$profile->addEducation( new education('Школа','Школьник','2000','2000'));
$profile->addEducation( new education('Университет','Студент','2000','2000'));
$profile->addEducation( new education('Академия','Студент','2000','2000'));

$profile->addLanguage( new language('Russian','Native'));
$profile->addLanguage( new language('English','Beginner'));
$profile->addLanguage( new language('Deutsch','Beginner'));

$profile->setInterest(['Вино','Карты','Женщины']);

$career->addProject( new projects( 'Project1', 'www.example1.com', 'Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.'));
$career->addProject( new projects( 'Project2', 'www.example2.com', 'Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.'));
$career->addProject( new projects( 'Project3', 'www.example3.com', 'Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.'));
$career->addProject( new projects( 'Project4', 'www.example4.com', 'Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.'));
$career->addProject( new projects( 'Project5', 'www.example5.com', 'Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.'));

$career->addSkill( new skills( 'PHP', '90'));
$career->addSkill(   new skills( 'Unix', '85'));
$career->addSkill(   new skills( 'JS', '75'));

