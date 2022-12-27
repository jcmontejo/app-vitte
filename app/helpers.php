<?php

use App\Models\Plant\Catalogs\CatPlant;
use App\Models\User;
use Carbon\Carbon;

if (!function_exists('PlantSerial')) {
    function PlantSerial($dblCatPlant)
    {
        if ($dblCatPlant == '') {
            return '';
        }
        $plant = CatPlant::find($dblCatPlant);
        $prefix = 'PLANTA';
        $year = Carbon::createFromDate($plant->datCreate)->format('Y');
        $consecutive = str_pad($plant->intConsecutive, 5, '0', STR_PAD_LEFT);

        return strtoupper($prefix . '-' . $year . '-' . $consecutive);
    }
}

if (!function_exists('EmpleadoSerial')) {
    function EmpleadoSerial($id)
    {
        if ($id == '') {
            return '';
        }
        $empleado = User::find($id);
        $prefix = 'EMPLEADO';
        $year = Carbon::createFromDate($empleado->datCreate)->format('Y');
        $consecutive = str_pad($empleado->intConsecutive, 5, '0', STR_PAD_LEFT);

        return strtoupper($prefix . '-' . $year . '-' . $consecutive);
    }
}

if (!function_exists('SpanishDateFormat')) {
    function SpanishDateFormat($date)
    {
        if ($date == '') {
            return '';
        }

        return strtoupper(Carbon::parse($date)->format('Y-m-d'));
    }
}

if (!function_exists('EnglishDateTimeFormat')) {
    function EnglishDateTimeFormat($date)
    {
        if ($date == '') {
            return '';
        }

        $date = Carbon::parse($date);
        $date_format = strtoupper($date->format('d-M-y'));
        $time_format = $date->format('g:i A');
        return $date_format;
    }
}

if (!function_exists('TimeFormat')) {
    function TimeFormat($date)
    {
        if ($date == '') {
            return '';
        }

        $date = Carbon::parse($date);
        $date_format = strtoupper($date->format('d-M-y'));
        $time_format = $date->format('g:i A');
        return $time_format;
    }
}

function password_generator()
{
    $password = "";

    //Cadenas de caracteres permitidos para el password
    $minus = rc("abcdefghijklmnopqrstuvwxyz");
    $mayus = rc("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $numbers = rc("1234567890");
    $specials = rc("#=)_@$-%{&*+}(");

    $tmpPassword = $minus . $mayus . $numbers . $specials;
    $password = str_shuffle($tmpPassword);

    return $password;
}

function rc($str = '', $num = 2)
{
    if (strlen($str)) {
        $s = extract_str($str, $num);
        return $s;
    }

    return '';
}

function extract_str($str, $num)
{
    $finalStr = ""; //variable para almacenar la cadena generada
    for ($i = 0; $i < $num; $i++) {
        /*Extraemos 1 caracter de los caracteres
        entre el rango 0 a Numero de letras que tiene la cadena */
        $finalStr .= substr($str, rand(0, strlen($str)), 1);
    }

    if (strlen($finalStr) < $num) //si no genera el numero total de elementos que se vuelta a ejecutar
    {
        $finalStr = extract_str($str, $num);
    }

    return $finalStr;
}

function getTotalPlant()
{
    $plants = CatPlant::all();
    return count($plants);
}

function getOperadores()
{
    $operadores = User::where('dblCatTypeUser',3)->get();
    return count($operadores);
}
